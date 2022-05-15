
<?php
  session_start();
 ?>
 

<html>

<head>
    <title>
        Add Diet
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f6d91d128.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav>
    <button style="align:left;border:none;text-align:center; display:relative;font-size:16px ;margin:4px 2px ;border-radius:50%;cursor: pointer;padding: 8px;text-decoration: none;" >
					         <a href="../se/diet_management.php">Back</a>
    </button>
        <div class="navbar3">
            <div id="logo3">
                <h1>FitMe</h1>
            </div>
            <div id="bars3">
                <a href="../SE/index.html">Home</a>
                <a href="../se/contact.php">Contact</a>
				<a href="../SE/about.html">About</a>
				<a href="../SE/signin.php">Sign Out</a>
            </div>
        </div>

        <div id="abttext3">
            <h1>
                Add Diet
            </h1>
        </div>
    </nav>
	
	<div class="signupcompleteform">
        <div class="enter_plan" >
            <?php
                if(isset($_POST["sub2"]))
                {
                    $email = $_SESSION["email_login"];
                    $nut = $_POST["nut"];
                    
                    $con = mysqli_connect("localhost","root","","SE");

                    if($con)           
                    {
                        $sql1="select plan_id from nutrition where nut_id = $nut and plan_id IN (select plan_id from member_workout_plan where email = '$email');";
                	    $result12 = mysqli_query($con, $sql1);
				
            
                        while($row=mysqli_fetch_assoc($result12))
                        {
                            $plan_number = $row['plan_id'];
                        }
                        //add all validation checks from trainer_selection
                        $sql24="insert into Memeber_plan_nutrition Values($plan_number,'$email',$nut);";
                        $result14 = mysqli_query($con, $sql24);
                        if($result14)
                        {
                            echo "Nutrition added successfully!";
                        }
                        else
                        {
                            echo "Nutrition selection failed!";
                        }
                    }
                }
            ?>
        </div>
        <div class="display_of_workout">
             <?php
			 
                $email = $_SESSION["email_login"];
                $con = mysqli_connect("localhost","root","","SE");

                if($con)           
            	{
                    $sql="select nut_id,breakfast,lunch,dinner from nutrition where plan_id IN (select plan_id from member_workout_plan where email = '$email');";
                	$result1 = mysqli_query($con, $sql);
				
			
                    echo "<br><br>";
                    echo "<center> <table border='3px solid' width='70%' margin='10px auto' text-align='left'   >
                    <tr>
                        <th>Nutrition ID</th>
                        <th>Breakfast</th>
                        <th>Lunch</th>
                        <th>Dinner</th>
                    </tr>";

        
                    while($row=mysqli_fetch_assoc($result1))
                    {
                        echo "<tr>";	
                        echo "<td>" . $row['nut_id'] . "</td>";
                        echo "<td>" . $row['breakfast'] . "</td>";
                        echo "<td>" . $row['lunch'] . "</td>";
                        echo "<td>" . $row['dinner'] . "</td>";
                        echo "<tr>";
                    }
                    echo "</center></table>";
                    
				
			
                }
			?>	
			
        </div>

        <div class="enter_plan" >
			<h2> LIKE OUR NUTRITION SUGESSIONS? CHOOSE ONE!</h2>
			<br>
			
			<form action="add_diet.php" method="post">
			Enter Nutrition Id: <input type="nut" name="nut"><br>
			<br>	
			<input type="submit" name ="sub2" id = "sub2" value = "Proceed" />
			</form>

        </div>

        

    </div>


</body>

</html>