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
                Certified Trainers 
            </h1>
        </div>
    </nav>
	
	<div class="signupcompleteform">
	
        <div class="display_of_workout">
             <?php
			if(isset($_POST["sub2"]))
            { 
			
                $plan_number = $_POST["plan"];
                $email=$_SESSION["email"];
                $plan_type = $_SESSION["plan_type"];
                $_SESSION["plan_number"] =  $_POST["plan"];
                
                    
                $con = mysqli_connect("localhost","root","","SE");

                if($con)
                {
                    
                    $sql3="select * from workout_plan where type= '$plan_type' and plan_id = $plan_number ;";
					
					if($plan_type=='both'){
						
					$sql3="select * from workout_plan where plan_id = $plan_number ;";
						
					}
                    
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
                            
                        
                        
                    $sql1="select * from trainer where status=1;";
                    
                        $result2 = mysqli_query($con, $sql1);
                    
					echo "<br><br>";
					echo "<center> <table border='3px solid' width='100%' margin='10px auto' text-align='left'   >
					<tr>
					<th>Email</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Charges</th>
					<th>Expertise</th>
					</tr>";


                    while($row1=mysqli_fetch_assoc($result2))
                    {
                        $email=$row1['email'];
                        $name=$row1['name'];
                        $gender=$row1['gender'];
                        $charges=$row1['charges'];
                        $expertise=$row1['expertise'];
                        
                        echo "<tr>";
			  
						echo "<td>" . $row1['email'] . "</td>";
						echo "<td>" . $row1['name'] . "</td>";
						echo "<td>" . $row1['gender'] . "</td>";
						echo "<td>" . $row1['charges'] . "</td>";
						echo "<td>" . $row1['expertise'] . "</td>";
                        
						echo "<tr>";
						
                      
                    }
					echo "</center></table>";
            
            
                }
            }
			?>	
        </div>

        <div class="enter_plan" >
			<h2> Select Trainer:</h2>
			<br>
			<form action="Payement_WT.php" method="post">
			Enter Trainer Email: <input type="email" name="email"><br>
			<br>	
			<input type="submit" name ="sub3" id = "sub3" value = "Proceed" />
			</form>
			
			<br>

            
            <form action="Payement_WOT.php" method="post">
                <input type="submit" name ="sub45" id = "sub45" value = "Skip this step " style="color: green;" />
            </form>
        </div>
        
	
				

        </div>
    </div>

   
</body>

</html>