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
				<a href="../SE/signin.php">SignIn</a>
                <a href="../SE/signup.php">SignUp</a>
                <a href="../SE/contact.php">Contact</a>
				<a href="../SE/about.html">About</a>
            </div>


        </div>
        <div id="abttext3">
            <h1>
                Which member
            </h1>
        </div>
    </nav>
	
	<div class="signupcompleteform">
		<br><br>
        <div class="display_of_workout">
		
			
             <?php
			if(isset($_POST["sub1"]))
            { 
			
                $email = $_POST["email"];
				$pass = $_POST["pass"];
				
				$_SESSION["email_login"] =  $email;
				$_SESSION["pass_login"] =  $pass;
               
                    
                $con = mysqli_connect("localhost","root","","SE");

                if($con)
                {
                      
                    $sql1="select * from member where email='$email' and password='$pass';";
                    
                        $result2 = mysqli_query($con, $sql1);
                        
                    while($row1=mysqli_fetch_assoc($result2))
                    {
						echo '<script type="text/JavaScript">',
	    				'window.location.href = "../se/member_dashboard.php"',
    					'</script>';
                        
                    }
					
					$sql11="select * from trainer where email='$email' and password='$pass';";
                    
                        $result22 = mysqli_query($con, $sql11);
                        

                    while($row11=mysqli_fetch_assoc($result22))
                    {
						echo '<script type="text/JavaScript">',
	    				'window.location.href = "../se/trainer_dashboard.php"',
    					'</script>';
                        
                    }
					
					$sql111="select * from admin where email='$email' and password='$pass';";
                    
                        $result222 = mysqli_query($con, $sql111);
                        

                    while($row111=mysqli_fetch_assoc($result222))
                    {
						echo '<script type="text/JavaScript">',
	    				'window.location.href = "../se/admin_dashboard.php"',
    					'</script>';
                        
                    }
					echo '<script>alert("Invalid Creditentials")</script>';
					echo '<script type="text/JavaScript">',
					'window.history.back()',
					'</script>';
					
					
					
                }
            }
			?>	
        </div>
	</div>

   
</body>

</html>