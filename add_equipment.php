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
		<button style="align:left;border:none;text-align:center; display:relative;font-size:16px ;margin:4px 2px ;border-radius:50%;cursor: pointer;padding: 8px;text-decoration: none;" >
				<a href="../se/equipment_management.php">Back</a>
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
                Add Equipment 
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
			echo "<center> <table border='3px solid' width='20%' margin='10px auto' text-align='left'   >
			<tr>
			<th>Equipment Name</th>
			<th>Description</th>
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
			
			<h1 style="text-align:center">Enter Equipment Details</h1><br>
				
				<form id="form" action="add_equipment.php" method="post" style="text-align:center">
					Equipment Name: <input type="name" name="name" required><br><br>
					Equipment Description: <input type="name" name="desc" required><br><br>
					
					<br>	
					 <input type="submit" name ="submit" id = "submit" value = "Proceed" />
				</form>

        </div>
		
		

        <div class="payement" >
			
				

        </div>
	
				

        </div>
    </div>

 <?php
	
    if(isset($_POST["submit"]))
    {
			$name = $_POST["name"];
			$desc = $_POST["desc"];
			
            
			$con = mysqli_connect("localhost","root","","SE");
			if($con)			
			{
				$sql3 = "insert into equipment values(NULL,'$name','$desc');";
				$result3 = mysqli_query($con, $sql3);
				if($result3==1)
					echo "Success";
				header("Location: add_equipment.php");
			}
			
	
	}
?> 


</body>

</html>


