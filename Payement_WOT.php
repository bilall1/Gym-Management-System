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
                Payment
            </h1>
        </div>
    </nav>
	
	<div class="display_table">
	
		<?php
			if(isset($_POST["sub45"]))
            {

				$type=$_SESSION["membership_type"];
				$email=$_SESSION["email"];
				
				$con = mysqli_connect("localhost","root","","SE");

				if($con)
			
					{
						
					$sql1="select price,member_id from Membership where membership_name='$type';";
					
						$result2 = mysqli_query($con, $sql1);
						
					
		
					while($row1=mysqli_fetch_assoc($result2))
					{

						$price=$row1['price'];
						$member_id=$row1['member_id'];
						
						
						
					}
					$trainer_fee = 0;
					$_SESSION["trainer_fee"] = $trainer_fee;
					$_SESSION["member_price"] = $price;	
					$_SESSION["member_id"] = $member_id;
					$_SESSION["trainer_email"] = NULL;
					$_SESSION["trainer"] = 0;
					#Insertion in Member_membership table
					
						
			
			}
			
			#Total
			
			$total=$price+8000;
			$_SESSION["total"] =  $total;
		}
				?>
				
	
        <div class="table_text">
		
				<table style="border:2px solid; width: 50%; margin: 10px auto;text-align:left;">
				  <tr>
					<th scope="col">Membership Type</th>
					<th scope="col">Membership Fee</th>
					<th scope="col">Monthly Fee </th>
					<th scope="col">Trainer Fee</th>
					<th scope="col">Sub Total</th>
					
				  </tr>

				  <tr >
					<td><?php   echo $_SESSION["membership_type"] ?></td>
					<td><?php   echo $price ?></td>
					<td>8000</td>
					<td>0</td>
					<td><?php   echo $total ?></td>
				  </tr>

				

				
				</table>
			

        </div>

        <div class="payement" >
			
			<h1 style="text-align:center">Enter Payment Details</h1><br>
				
				<form action="Diet_Selection.php" method="post" style="text-align:center">
					Enter Credit Card Number: <input type="number" name="card" min="1" max="99999"  required><br><br>
					Enter CVV PIN: <input type="number" name="pin" min="1" max="999" required><br><br>
					Enter Expiry Date: <input type="date" name="date" required><br><br>
					Enter Full Name: <input type="text" name="name" required><br><br>
					
					
					<br>	
					 <input type="submit" name ="submit" id = "submit" value = "Proceed" />
				</form>

        </div>
	
				

        </div>
    </div>


</body>

</html>

