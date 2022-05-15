<?php
  session_start();
 ?>
 
<html>

<head>
    <title>
        Trainer's Dashboard
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
                Welcome to Trainer's Dashboard
            </h1>
        </div>
    </nav>
	
	<div class="signupcompleteform">
		<br><br>
        <div class="display_of_workout">
		
			 
             <?php
			if(isset($_POST["sub"]))
            { 
				$a = $_POST["name"];
				$b = $_POST["email"];
				$c = $_POST["pass"];
				$d = $_POST["cnic"];
				$e = $_POST["age"];
				$f = $_POST["gender"];
				$g = $_POST["adress"];
				$h = $_POST["charges"];
				$i = $_POST["expertise"];
               
                    
                $con = mysqli_connect("localhost","root","","SE");

                if($con)
                {
					$sql1="INSERT INTO trainer VALUES ('$b','$c','$a',$e,$d,$h,'$f','$g','$i',0);";
                    
                        $result2 = mysqli_query($con, $sql1);
					
                }
            }
			
			$con = mysqli_connect("localhost","root","","SE");

			if($con)
			{
				$b=$_SESSION["email_login"];
				$c=$_SESSION["pass_login"];
				//Query to check if trainer approved or not 
				$sql1="select status from trainer where email='$b';";
						
				$result2 = mysqli_query($con, $sql1);
					
				$status=0;
				while($row1=mysqli_fetch_assoc($result2))
				{
					$status=$row1['status'];
				}
				
				if($status==0){
					echo "Your Trainer's Request is not approved by Admin yet.. Please wait and SignIn to Check again!!";				
				}
				else{
					echo '<script type="text/JavaScript">',
							'window.location.href = "../se/trainer_dashbaord1.php"',
							'</script>';
				}
			}
			
			?>	
        </div>
	</div>

   
</body>

</html>