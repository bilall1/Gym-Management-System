<html>

<head>
    <title>
        Staff Management
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
                <a href="../SE/contact.php">Contact</a>
				<a href="../SE/about.html">About</a>
				<a href="../SE/signin.php">Sign Out</a>
            </div>


        </div>
        <div id="abttext3">
            <h1>
                Staff Management
            </h1>
        </div>
    </nav>
	
	<div class="display_table">
	
		<?php
		
		$con = mysqli_connect("localhost","root","","SE");
		if($con)			
	    {
            $sql3 = "select * from trainer where status=0";
            $result3 = mysqli_query($con, $sql3);
   

			echo"<br><br>";
			echo "<center> <table border='3px solid' width='60%' margin='10px auto' text-align='left'  >
			<tr>
			
			<th scope='col'>Email </th>
			<th scope='col'>Name</th>
			<th scope='col'>Age</th>
			<th scope='col'>Gender</th>
			<th scope='col'>Charges</th>
			<th scope='col'>Expertise</th>
			</tr>";

			while($row = mysqli_fetch_assoc($result3))

			  {

			  echo "<tr>";

			  echo "<td>" . $row['email'] . "</td>";

			  echo "<td>" . $row['name'] . "</td>";
			  
			  echo "<td>" . $row['age'] . "</td>";

			  echo "<td>" . $row['gender'] . "</td>";
			  
			  echo "<td>" . $row['charges'] . "</td>";

			  echo "<td>" . $row['expertise'] . "</td>";

			  echo "</tr>";

			  }

			echo "</center></table>";
		
		
		}
			
				?>
				
	
        <div class="payement" >
		
			
			
			<h2 > Select one of option:</h2>
			<br>
			<h2> Approve Trainer:</h2>
			<br>
			<button style=" border-radius: 1px;
			 color: #fff;
			 font-family: 'Oswald';
			 font-size: 20px;">
                       <a href="../SE/approve_trainer.php">Approve </a>
            </button>
			<br>
			<h2> Delete Trainer:</h2>
			<br>
			<button style=" border-radius: 1px;
			 color: #fff;
			 font-family: 'Oswald';
			 font-size: 20px;">
                       <a href="../SE/delete_trainer.php">Delete</a>
            </button>
			

        </div>
		
		

        <div class="payement" >
			
				

        </div>
	
				

        </div>
    </div>

 
</body>

</html>


