<?php
  session_start();
 ?>
 
<html>

<head>
    <title>
        Dashboard
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
                <a href="../SE/contact.php">Contact</a>
				<a href="../SE/about.html">About</a>
				<a href="../SE/signin.php">Sign Out</a>
            </div>


        </div>
        <div id="abttext3">
            <h1>
                Welcome to Member's Dashboard
            </h1>
        </div>
    </nav>
	
	<div class="signupcompleteform">
		<br><br>
		<h2 style="margin-left:30px;">You are currently Subscribed to</h2>
        <div class="display_of_workout">
		
			
             <?php
			
				$email=$_SESSION["email_login"];
				$pass=$_SESSION["pass_login"];
               
                    
                $con = mysqli_connect("localhost","root","","SE");

                if($con)
                {
                    //CHANGE ACCORDING TO USER/PASS
                    /*$sql3="select * from workout_plan where type= '$plan_type' and plan_id = $plan_number ;";
                    
                        $result3 = mysqli_query($con, $sql3);
                    $exist = false;
                    while($row1=mysqli_fetch_assoc($result3))
                    {
                        $exist = true;
                    }
                    if($exist == false)
                    {
                        echo '<script>alert("Plan Id does not exist")</script>';
                        echo '<script type="text/JavaScript">',
                        'window.history.back()',
                        '</script>';
                    }
                    
                    $sql="insert into member_workout_plan values('$email',$plan_number);";
                    
                        $result = mysqli_query($con, $sql);
                            
                    */    
                        
                    $sql1="select member_id from member_membership where email='$email';";
                    
                        $result2 = mysqli_query($con, $sql1);
                        

                    while($row1=mysqli_fetch_assoc($result2))
                    {
                        $member_id=$row1['member_id'];
                    }
					
					$sql2="select * from membership where member_id=$member_id;";
                    
                        $result1 = mysqli_query($con, $sql2);
					
					echo "<br><br>";
					echo "<h2 style='margin-left:10px;'>Membership </h2>";
					
					echo "<br><br>";
					echo "<center> <table border='3px solid' width='70%' margin='10px auto' text-align='left'   >
					<tr>
					<th>Membership Type</th>
					<th>Description</th>
					<th>Price</th>
					</tr>";
					
					while($row1=mysqli_fetch_assoc($result1))
                    {
					$membership_name=$row1['membership_name'];
                    $desc=$row1['description'];
                    $price=$row1['price'];
					
					echo "<tr>";
					
					echo "<td>" . $row1['membership_name']. "</td>";
					echo "<td>" . $row1['description']. "</td>";
					echo "<td>" . $row1['price']. "</td>";
					
					echo "<tr>";
					
					}
					echo "</center></table>";
					
					$sql22="select * from workout_plan where plan_id IN (select plan_id from member_workout_plan where email='$email');";
                    
                        $result11 = mysqli_query($con, $sql22);
					
					echo"<br><br>";
					echo "<h2 style='margin-left:10px;'>Current Workout Plan</h2>";
					
					echo "<br><br>";
					echo "<center> <table border='3px solid' width='70%' margin='10px auto' text-align='left'   >
					<tr>
					<th>Description</th>
					<th>Duration</th>
					</tr>";
					while($row11=mysqli_fetch_assoc($result11))
                    {
						
					$plan_id=$row11['plan_id'];
                    $desc=$row11['description'];
                    $duration=$row11['duration'];
					
					echo "<tr>";
					
					echo "<td>" . $row11['description']. "</td>";
					echo "<td>" . $row11['duration']. "</td>";
					
					echo "<tr>";
					
					}
					echo "</center></table>";
					
					$sql11="select trainer_email from member_trainer where member_email='$email';";
                    
                        $result22 = mysqli_query($con, $sql11);
                        
					$trainer_email='xx';
                    while($row13=mysqli_fetch_assoc($result22))
                    {
                        $trainer_email=$row13['trainer_email'];
                    }
					
					//NO TRAINER
					if($trainer_email!='xx')
					{
						$sql22="select * from trainer where email='$trainer_email';";
                    
                        $result11 = mysqli_query($con, $sql22);
					
						echo"<br><br>";
						echo "<h2 style='margin-left:10px;'>Trainer </h2>";
						
						echo "<br><br>";
						echo "<center> <table border='3px solid' width='70%' margin='10px auto' text-align='left'   >
						<tr>
						<th>Name</th>
						<th>Expertise</th>
						</tr>";
						while($row11=mysqli_fetch_assoc($result11))
						{
							
						$name=$row11['name'];
						$expertise=$row11['expertise'];
						echo "<tr>";
						
						echo "<td>" . $row11['name']. "</td>";
						echo "<td>" . $row11['expertise']. "</td>";
						
						echo "<tr>";	
						}
						echo "</center></table>";
						
						
					}
					
					
					$sql22="select * from nutrition where nut_id IN (select nut_id from memeber_plan_nutrition where email='$email');";
                    
                        $result11 = mysqli_query($con, $sql22);
					
					echo"<br><br>";
					echo "<h2 style='margin-left:10px;'>Current Diet </h2>";
					
					echo "<br><br>";
					echo "<center> <table border='3px solid' width='70%' margin='10px auto' text-align='left'   >
					<tr>
					<th>Breakfast</th>
					<th>Lunch</th>
					<th>Dinner</th>
					</tr>";
					while($row11=mysqli_fetch_assoc($result11))
                    {
						
						$b=$row11['breakfast'];
						$l=$row11['lunch'];
						$d=$row11['dinner'];
						 echo "<tr>";
			  

						echo "<td>" . $row11['breakfast'] . "</td>";

						echo "<td>" . $row11['lunch'] . "</td>";
						
						echo "<td>" . $row11['dinner'] . "</td>";

						echo "</tr>";
					
						}
						echo "</center></table>";
						echo "<br><br><br>";
                }
           
			?>	
        </div>
	</div>
	
	
	<div class="icon-row1">
        <div class="html">
		<img src="https://img.icons8.com/color/48/000000/calendar--v1.png"/>
            <h2>Mark/See Attendence</h2>
            <button style=" border-radius: 1px;
				 color: #fff;
				 font-family: 'Oswald';
				 font-size: 20px; padding: 0px 20px; margin: 10px 0px;">
						   <a href="../SE/mark_attendence.php">mark</a>
			</button>

        </div>
        <div class="css">
			<img src="https://img.icons8.com/color/48/000000/bench-over-head.png"/>
              <h2>Workout Management</h2>
			  <button style=" border-radius: 1px;
				 color: #fff;
				 font-family: 'Oswald';
				 font-size: 20px; padding: 0px 20px; margin: 10px 0px;">
						   <a href="../SE/workout_management.php">Workout</a>
			  </button>
           
        </div>
        <div class="java">
		<img src="https://img.icons8.com/color/48/000000/healthy-food-calories-calculator.png"/>
            <h2>Diet Management</h2>
            <button style=" border-radius: 1px;
				 color: #fff;
				 font-family: 'Oswald';
				 font-size: 20px; padding: 0px 20px; margin: 10px 0px;">
						   <a href="../SE/diet_management.php">Diet</a>
			</button>
			
		<br><br>
           
        </div>
    </div>

	<div class="icon-row1">
        <div class="html">
		<img src="https://img.icons8.com/color/48/000000/weighing.png"/>
            <h2>Manage Daily Logs</h2>
            <button style=" border-radius: 1px;
				 color: #fff;
				 font-family: 'Oswald';
				 font-size: 20px; padding: 0px 20px; margin: 10px 0px;">
						   <a href="../SE/logs_management.php">Logs</a>
			</button>

        </div>
        <div class="css">
		<img src="https://img.icons8.com/color/48/000000/treatment-plan.png"/>
              <h2>Health History</h2>
			  <button style=" border-radius: 1px;
				 color: #fff;
				 font-family: 'Oswald';
				 font-size: 20px; padding: 0px 20px; margin: 10px 0px;">
						   <a href="../SE/member_health_history.php">Health</a>
			  </button>
           
        </div>
        <div class="java">
		<img src="https://img.icons8.com/color/48/000000/talk-show.png"/>
            <h2>Chat with Trainer</h2>
            <button style=" border-radius: 1px;
				 color: #fff;
				 font-family: 'Oswald';
				 font-size: 20px; padding: 0px 20px; margin: 10px 0px;">
						   <a href="../SE/member_chat.php">Chat</a>
			</button>
			
			
        </div>
    </div>

	<br>
	<div class="icon-row1">
        <div class="html">
		<img src="https://img.icons8.com/color/48/000000/parkour.png"/>
            <h2>Demos for Workout</h2>
            <button style=" border-radius: 1px;
				 color: #fff;
				 font-family: 'Oswald';
				 font-size: 20px; padding: 0px 20px; margin: 10px 0px;">
						   <a href="../SE/demos.php">Demo</a>
			</button>

			<br><br>

        </div>

	</div>
	

   
</body>

</html>