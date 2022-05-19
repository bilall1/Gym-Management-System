
<?php
  session_start();
 ?>
 


<html>

<head>
    <title>
        Delete Diet
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
                Delete Diet
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
                        //add all validation checks from trainer_selection
                        $sql24="delete from Memeber_plan_nutrition where email = '$email' and nut_id = '$nut';";
                        $result14 = mysqli_query($con, $sql24);
                        if($result14)
                        {
                            echo "Nutrition removed successfully!";
                        }
                        else
                        {
                            echo "Nutrition removal failed!";
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
					
                    $sql="select * from nutrition where nut_id IN (select nut_id from memeber_plan_nutrition where email='$email');";
                	$result1 = mysqli_query($con, $sql);
				

				
                    echo "<br><br>";
                    echo "<center> <table border='3px solid' width='70%' margin='10px auto' text-align='left'   >
                    <tr>
                    <th>Nutrition Id</th>
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
			<h2> CHOOSE NUTRITION PLAN TO DELETE!</h2>
			<br>
            
            <form action="delete_diet.php" method="post">
            <label>Select Id</label>
            <select name="nut" id="nut" id=value>
            <?php

            $sql="select nut_id,breakfast,lunch,dinner from nutrition where plan_id IN (select plan_id from member_workout_plan where email = '$email');";
            $result1 = mysqli_query($con, $sql);
            while ($plan= mysqli_fetch_array(
                $result1,MYSQLI_ASSOC)):;


            ?>
            <option value="<?php echo $plan["nut_id"];
                ?>">
                    <?php echo $plan["nut_id"];

                    ?>
                </option>
            <?php 
                endwhile; 
            ?>
            </select>
            <br><br>
            <input type="submit" name ="sub2" id = "sub2" value = "Proceed" />

            <br>
            <br>


        </div>

        

    </div>
   
</body>

</html>