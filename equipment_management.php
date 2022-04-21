<html>

<head>
    <title>
        Equipment Management
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f6d91d128.js" crossorigin="anonymous"></script>
	<script defer src="script.js"></script>
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
                Equipment Management
            </h1>
        </div>
    </nav>
	
	<div class="display_table">
	
		<?php
		
		$con = mysqli_connect("localhost","root","","SE");
		if($con)			
	    {
            $sql3 = "select * from equipment";
            $result3 = mysqli_query($con, $sql3);
   

			echo"<br><br>";
			echo "<center> <table border='3px solid' width='20%' margin='10px auto' text-align='left'  >
			<tr>
			
			<th scope='col'>Equipment Name</th>
			<th scope='col'>Description</th>
			</tr>";

			while($row = mysqli_fetch_assoc($result3))

			  {

			  echo "<tr>";

			  echo "<td>" . $row['equip_name'] . "</td>";

			  echo "<td>" . $row['description'] . "</td>";

			  echo "</tr>";

			  }

			echo "</center></table>";
		
		
		}
			
				?>
				
	
        <div class="payement" >
		
			
			
			<h2 > Select One of Option:</h2>
			<br>
			<h2> Add Equipment:</h2>
			<br>
			<button style=" border-radius: 1px;
			 color: #fff;
			 font-family: 'Oswald';
			 font-size: 20px;">
                       <a href="../se/add_equipment.php">Add </a>
            </button>
			<br>
			<h2> Update Equipment:</h2>
			<br>
			<button style=" border-radius: 1px;
			 color: #fff;
			 font-family: 'Oswald';
			 font-size: 20px;">
                       <a href="../se/update_equipment.php">Update</a>
            </button>
			<br>
			<h2> Delete Equipment:</h2>
			<br>
			<button style=" border-radius: 1px;
			 color: #fff;
			 font-family: 'Oswald';
			 font-size: 20px;">
                       <a href="../se/delete_equipment.php">Delete</a>
            </button>

        </div>
		
		

        <div class="payement" >
			
				

        </div>
	
				

        </div>
    </div>

 
</body>

</html>


