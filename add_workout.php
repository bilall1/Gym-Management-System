
<?php
  session_start();
 ?>
 


<html>

<head>
    <title>
        Add Workout
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f6d91d128.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav>
    <button style="align:left;border:none;text-align:center; display:relative;font-size:16px ;margin:4px 2px ;border-radius:50%;cursor: pointer;padding: 8px;text-decoration: none;" >
					         <a href="../se/Workout_management.php">Back</a>
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
                Add Workout
            </h1>
        </div>
    </nav>
	
	<div class="signupcompleteform">
        <div class="enter_plan" >
            <?php
                if(isset($_POST["sub2"]))
                {
                    $email = $_SESSION["email_login"];
                    $plan_number = $_POST["plan"];
                    
                    $con = mysqli_connect("localhost","root","","SE");

                    if($con)           
                    {
                        $sql23="select * from member_workout_plan where email='$email' and plan_id='$plan_number';";
                        $result23 = mysqli_query($con, $sql23);
                        $present1 = false;
                        while($row=mysqli_fetch_assoc($result23))
                        {
                            $present1 = true;
                        }
                        if($present1){
							
							echo "Plan already linked to your account. Please select different Plan!";
						}
                        else
                        {
                            $sql24="insert into member_workout_plan values('$email',$plan_number);";
                            $result14 = mysqli_query($con, $sql24);
						
                            if($result14)
                            {
                                echo "Plan added successfully!";
                            }	
                            else
                            {
                                echo "Wrong Plan Id. Please enter Plan Id Again!";
                            }
                        }
                    }
                }
            ?>
        </div>
        <div class="display_of_workout">
             <?php
            {
                $con = mysqli_connect("localhost","root","","SE");

                if($con)           
            	{
					
                    $sql="select * from workout_plan;";
                	$result1 = mysqli_query($con, $sql);
				
				
				echo "<br><br>";
				echo "<center> <table border='3px solid' width='70%' margin='10px auto' text-align='left'   >
				<tr>
				<th>Plan Id</th>
                <th>Type</th>
				<th>Description</th>
				<th>Duration</th>
				</tr>";

	
                while($row=mysqli_fetch_assoc($result1))
                {
					$plan_id=$row['plan_id'];
                    $desc=$row['description'];
                    $type=$row['type'];
                    $duration=$row['duration'];
					
					echo "<tr>";
					
					echo "<td>" . $row['plan_id']. "</td>";
                    echo "<td>" . $row['type']. "</td>";
					echo "<td>" . $row['description']. "</td>";
					echo "<td>" . $row['duration']. "</td>";
					//plan type can also be displayed
					echo "<tr>";
					
					
					
                }
				echo "</center></table>";
				
				
			
            }
		}
			?>	
			
        </div>

        <div class="enter_plan" >
			<h2> LIKE OUR WORKOUT PLANS? CHOOSE ONE!</h2>
			<br>

            <form action="add_workout.php" method="post">
            <label>Select Id</label>
            <select name="plan" id="plan" id=value>
            <?php

            $sql="select * from workout_plan;";
            $result1 = mysqli_query($con, $sql);
            while ($plan= mysqli_fetch_array(
                $result1,MYSQLI_ASSOC)):;


            ?>
            <option value="<?php echo $plan["plan_id"];
                ?>">
                    <?php echo $plan["plan_id"];

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