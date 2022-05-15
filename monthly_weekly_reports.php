<html>

<head>
    <title>
        Reports
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f6d91d128.js" crossorigin="anonymous"></script>
	<script defer src="script.js"></script>
</head>

<body>
    <nav>
	<button style="align:left;border:none;text-align:center; display:relative;font-size:16px ;margin:4px 2px ;border-radius:50%;cursor: pointer;padding: 8px;text-decoration: none;" >
					         <a href="../se/admin_dashboard.php">Back</a>
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
                Reports
            </h1>
        </div>
    </nav>
	
	<div class="display_table">
        <br><br>
		<h2 style="margin-left:30px; ">Monthly Payement Report: </h2>
	
		<?php
		
		$con = mysqli_connect("localhost","root","","SE");
		if($con)			
	    {

            $sql3 = "select * from billing_monthly";
            $result3 = mysqli_query($con, $sql3);

			echo"<br><br>";
			echo "<center> <table  border='3px solid' width='50%' margin='10px auto' text-align='left'  >
			<tr>

            
			
			<th scope='col'>Bill ID</th>
            <th scope='col'>Payement Date</th>
			<th scope='col'>Monthly Fee</th>
            <th scope='col'>Trainer Fee</th>
            <th scope='col'>Total</th>

			</tr>";

			while($row = mysqli_fetch_assoc($result3))

			  {

			  echo "<tr>";

			  echo "<td>" . $row['id'] . "</td>";

			  echo "<td>" . $row['bill_date'] . "</td>";

              echo "<td>" . $row['monthly_fee'] . "</td>";

              echo "<td>" . $row['trainer_fee'] . "</td>";

              echo "<td>" . $row['total'] . "</td>";

			  echo "</tr>";

			  }

			echo "</center></table>";
		
		
		}

			
				?>

        <br><br>

        <?php
		
		$con = mysqli_connect("localhost","root","","SE");
		if($con)			
	    {
            $sql3 = "select * from billing_membership";
            $result3 = mysqli_query($con, $sql3);
            echo"<br><br>";
            echo "<h2 >Membership Report  </h2>";
			echo"<br><br>";
			echo "<center> <table  border='3px solid' width='50%' margin='10px auto' text-align='left'  >
			<tr>
			
			<th scope='col'>Bill ID</th>
            <th scope='col'>Payement Date</th>
			<th scope='col'>Membership Fee</th>
        

			</tr>";

			while($row = mysqli_fetch_assoc($result3))

			  {

			  echo "<tr>";

			  echo "<td>" . $row['id'] . "</td>";

			  echo "<td>" . $row['bill_date'] . "</td>";

              echo "<td>" . $row['membership_fee'] . "</td>";


			  echo "</tr>";

			  }

			echo "</center></table>";
		
		
		}

			
				?>
		
    </div>

 
</body>

</html>


