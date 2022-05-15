<?php
  session_start();
 ?>
 


<html>

<head>
    <title>
        Workouts
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f6d91d128.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav>
        <div class="navbar3">
            <div id="logo3">
                <h1>FitMe</h1>
            </div>
            <div id="bars3">
                <a href="../SE/index.html">Home</a>
				<a href="../SE/signin.php">SignIn</a>
                <a href="../SE/signup.php">SignUp</a>
                <a href="../SE/contact.php">Contact</a>
				<a href="../SE/about.html">About</a>
            </div>


        </div>
        <div id="abttext3">
            <h1>
                Workout Plans
            </h1>
        </div>
    </nav>
	
	<div class="signupcompleteform">
	
        <div class="display_of_workout">
             <?php
			 
            if(isset($_POST["sub1"]))
            {
                $plan_type = $_POST["type"];
                $_SESSION["plan_type"] = $_POST["type"];
            

			
			
		 $con = mysqli_connect("localhost","root","","SE");

		 if($con)
	
            	{
					
					
					if($plan_type != 'both'){
					 $sql="select plan_id,description,duration from workout_plan where type='$plan_type';";
					}
					else{
					$sql="select plan_id,description,duration from workout_plan;";
					}
			
                	$result1 = mysqli_query($con, $sql);
				

				
				echo "<br><br>";
				echo "<center> <table border='3px solid' width='70%' margin='10px auto' text-align='left'   >
				<tr>
				<th>Plan Id</th>
				<th>Description</th>
				<th>Duration</th>
				</tr>";

	
                while($row=mysqli_fetch_assoc($result1))
                {
					$plan_id=$row['plan_id'];
                    $desc=$row['description'];
                    $duration=$row['duration'];
					
					echo "<tr>";
					
					echo "<td>" . $row['plan_id']. "</td>";
					echo "<td>" . $row['description']. "</td>";
					echo "<td>" . $row['duration']. "</td>";
					
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
			
			<form action="Trainer_Selection.php" method="post">
			Enter Plan Number: <input type="number" name="plan"><br>
			<br>	
			<input type="submit" name ="sub2" id = "sub2" value = "Proceed" />
			</form>

        </div>
	
				

        </div>
    </div>

   
</body>

</html>