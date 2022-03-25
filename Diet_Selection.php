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
                Diet Management
            </h1>
        </div>
    </nav>
	
	<div class="signupcompleteform">
	
        <div class="display_of_workout">
             <?php
			 
			if(isset($_POST["submit"]))
			{
				
			 
			$card = $_POST["card"];
			$pin = $_POST["pin"];
			$date = $_POST["date"];
			$name = $_POST["name"];
			 
			 $total=$_SESSION["total"];
			 $plan_number=$_SESSION["plan_number"];
			 $email=$_SESSION["email"];
			 $member_id = $_SESSION["member_id"];
			 $member_price = $_SESSION["member_price"];
			 $trainer_fee = $_SESSION["trainer_fee"];
			 $trainer = $_SESSION["trainer"];
			 $trainer_email = $_SESSION["trainer_email"];
			 
			
		 $con = mysqli_connect("localhost","root","","SE");

		 	if($con)
			{


				$sql22="select * from card where card_no = $card  and cvv = $pin;";
				$result22 = mysqli_query($con, $sql22);
				$false_credentials = true;
				while($row=mysqli_fetch_assoc($result22))
				{
					$false_credentials = false;
				}
				if($false_credentials)
				{
					echo '<script>alert("Invalid credit card credentials!")</script>';
					echo '<script type="text/JavaScript">',
					'window.history.back()',
					'</script>';
				}


				#BAKLANCE REDUCTION
				$sql2="select balance from card where card_no=$card;";
				$result2 = mysqli_query($con, $sql2);
				
		
				while($row=mysqli_fetch_assoc($result2)){
					
				$balance=$row['balance'];	
				
				
				}
				$updated_balance=$balance-$total;
				
				$today_date = date("Y-m-d");
				$sql112="insert into billing_membership Values('$email','$today_date',NULL,$member_price);";
					
					$result112 = mysqli_query($con, $sql112);
				$total_1 = 8000+ $trainer_fee;
				$sql113="insert into billing_monthly Values('$email','$today_date',NULL,8000,$trainer_fee,$total_1);";
					
					$result113 = mysqli_query($con, $sql113);

				if($trainer==1)
				{
					$sql90="insert into Member_trainer Values('$email','$trainer_email');";
					$result90 = mysqli_query($con, $sql90);
				}
					
				$sql3="update card set balance = $updated_balance where card_no=$card;";
				$result2 = mysqli_query($con, $sql3);

				$sql12="insert into member_membership Values('$email',$member_id);";
					
					$result12 = mysqli_query($con, $sql12);
					
				
				$sql="select nut_id,breakfast,lunch,dinner from nutrition where plan_id=$plan_number;";
			
				$result1 = mysqli_query($con, $sql);
				
			
				while($row=mysqli_fetch_assoc($result1))
                {

                    $nut_id=$row['nut_id'];
                    $breakfast=$row['breakfast'];
                    $lunch=$row['lunch'];
					$dinner=$row['dinner'];
					
					echo"<br> ";
					echo "<p class='mycss'>". $nut_id."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$breakfast."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$lunch."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$dinner  ."</p>";
					
					
                }
		
		
		}
			}
			?>	
			
        </div>

        <div class="enter_plan" >
			<h2> LIKE OUR NUTRITION SUGESSIONS? CHOOSE ONE!</h2>
			<br>
			
			<form action="Diet_Selection.php" method="post">
			Enter Nutrition Id: <input type="nut" name="nut"><br>
			<br>	
			<input type="submit" name ="sub" id = "sub" value = "Proceed" />
			</form>

        </div>
	
				

        </div>
    </div>

<?php
if(isset($_POST["sub"]))
	{
		
		 $nut = $_POST["nut"];
		 $plan_number=$_SESSION["plan_number"];
	     $email=$_SESSION["email"];
		
		$con = mysqli_connect("localhost","root","","SE");

		if($con)
        {
			$sql58 = "select * from nutrition where plan_id = $plan_number and nut_id = $nut;";
			$result58 = mysqli_query($con, $sql58);
			$nut_exist = false;
			while($row1=mysqli_fetch_assoc($result58))
			{
				$nut_exist = true;
			}
			if(!$nut_exist)
			{
				echo '<script>alert("Nutrition Id does not exist")</script>';
				echo '<script type="text/JavaScript">',
				'window.history.back()',
				'</script>';
			}

			$sql2="insert into Memeber_plan_nutrition Values($plan_number,'$email',$nut);";
            $result2 = mysqli_query($con, $sql2);
			
			echo "Nutrition Saved!!";
		
		}
	}
	
	?>   
   
</body>

</html>