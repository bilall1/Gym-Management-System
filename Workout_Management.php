<?php
  session_start();
 ?>
 
<html>

<head>
    <title>
        Workout Management
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f6d91d128.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav>
    <button style="align:left;border:none;text-align:center; display:relative;font-size:16px ;margin:4px 2px ;border-radius:50%;cursor: pointer;padding: 8px;text-decoration: none;" >
					         <a href="../se/member_dashboard.php">Back</a>
    </button>
        <div class="navbar3">
            <div id="logo3">
                <h1>FitMe</h1>
            </div>
            <div id="bars3">
				<a href="../SE/index.html">Home</a>
                <a href="../SE/contact.php">Contact</a>
				<a href="../SE/about.html">About</a>
				<a href="../SE/signin.php">Sign Out</a>
            </div>


        </div>
        <div id="abttext3">
            <h1>
                Manage Workouts
            </h1>
        </div>
    </nav>
	
	<div class="signupcompleteform">
		<br><br>
		<h2 style="margin-left:30px;">Current Plans</h2>
        <div class="display_of_workout">
		
			
             <?php
			
				$email=$_SESSION["email_login"];
				$pass=$_SESSION["pass_login"];
               
                    
                $con = mysqli_connect("localhost","root","","SE");

                if($con)
                {
					
					$sql22="select * from workout_plan where plan_id IN (select plan_id from member_workout_plan where email='$email');";
                    
                        $result11 = mysqli_query($con, $sql22);
					
					echo"<br><br>";
					
					
					echo "<br><br>";
					echo "<center> <table border='3px solid' width='70%' margin='10px auto' text-align='left'   >
					<tr>
					<th>Plan ID</th>
					<th>Type</th>
					<th>Description</th>
					<th>Duration</th>
					</tr>";
					while($row11=mysqli_fetch_assoc($result11))
                    {
						
					$plan_id=$row11['plan_id'];
					$type=$row11['type'];
                    $desc=$row11['description'];
                    $duration=$row11['duration'];
					
					echo "<tr>";
					echo "<td>" . $row11['plan_id']. "</td>";
					echo "<td>" . $row11['type']. "</td>";
					echo "<td>" . $row11['description']. "</td>";
					echo "<td>" . $row11['duration']. "</td>";
					
					echo "<tr>";
					
					}
					echo "</center></table>";
					
					
					echo "<br><br><br>";
                }
           
			?>	
        </div>
	</div>
	
	
	<div class="icon-row1">
        <div class="html">
		<img src="https://img.icons8.com/color/48/000000/add--v1.png"/>
            <h2>Add New Plan</h2>
            <button style=" border-radius: 1px;
				 color: #fff;
				 font-family: 'Oswald';
				 font-size: 20px; padding: 0px 20px; margin: 10px 0px;">
						   <a href="../SE/add_workout.php">Add</a>
			</button>

        </div>
        <div class="css">
			<img src="https://img.icons8.com/color/48/000000/delete-forever.png"/>
              <h2>Delete Plan</h2>
			  <button style=" border-radius: 1px;
				 color: #fff;
				 font-family: 'Oswald';
				 font-size: 20px; padding: 0px 20px; margin: 10px 0px;">
						   <a href="../SE/delete_workout.php">Delete</a>
			  </button>
           
        </div>
       
    </div>
	

   
</body>

</html>