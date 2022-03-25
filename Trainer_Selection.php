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
                <a href="../se/index.html">Home</a>
				<a href="../se/signin.php">SignIn</a>
                <a href="../se/signup.php">SignUp</a>
                <a href="../se/contact.html">Contact</a>
				<a href="../se/about.html">About</a>
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
                            
                        
                        
                    $sql1="select * from trainer;";
                    
                        $result2 = mysqli_query($con, $sql1);
                        
                    

                    while($row1=mysqli_fetch_assoc($result2))
                    {
                        $email=$row1['email'];
                        $name=$row1['name'];
                        $gender=$row1['gender'];
                        $charges=$row1['charges'];
                        $expertise=$row1['expertise'];
                        
                        
                        
                        echo"<br> ";
                        echo "<p class='mycss'>". $email."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp". $name."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$gender."&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRs.".$charges."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$expertise  ."</p>";

                    }
            
            
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