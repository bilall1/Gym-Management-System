<?php
  session_start();
 ?>
 
<html>

<head>
    <title>
        Diet Management
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f6d91d128.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav>
	<button style="align:left;border:none;text-align:center; display:relative;font-size:16px ;margin:4px 2px ;border-radius:50%;cursor: pointer;padding: 8px;text-decoration: none;" >
					         <a href="../se/member_dashboard.php">Back</a>
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
                Manage Nutrition/Diet
            </h1>
        </div>
    </nav>
	
	<div class="signupcompleteform">
		<br><br>
		<h2 style="margin-left:30px;">Current Diet Plans</h2>
        <div class="display_of_workout">
		
			
             <?php
			
				$email=$_SESSION["email_login"];
				$pass=$_SESSION["pass_login"];
               
                    
                $con = mysqli_connect("localhost","root","","SE");

                if($con)
                {
					
					$sql22="select * from nutrition where nut_id IN (select nut_id from memeber_plan_nutrition where email='$email');";
                    
                        $result11 = mysqli_query($con, $sql22);
					
					echo"<br><br>";
					
					echo "<br><br>";
					echo "<center> <table border='3px solid' width='70%' margin='10px auto' text-align='left'   >
					<tr>
					<th>Nutrition Id</th>
					<th>Breakfast</th>
					<th>Lunch</th>
					<th>Dinner</th>
					</tr>";
					while($row11=mysqli_fetch_assoc($result11))
                    {
						$b=$row11['nut_id'];
						$b=$row11['breakfast'];
						$l=$row11['lunch'];
						$d=$row11['dinner'];
						 echo "<tr>";
			  
						echo "<td>" . $row11['nut_id'] . "</td>";
						
						echo "<td>" . $row11['breakfast'] . "</td>";

						echo "<td>" . $row11['lunch'] . "</td>";
						
						echo "<td>" . $row11['dinner'] . "</td>";

						echo "</tr>";
					
						}
						echo "</center></table>";
					
					
						echo "<br><br><br>";
                }
           
			?>	
        </div>
	</div>
	
	
	<div class="icon-row1">
        <div class="html">
		<img src="https://img.icons8.com/color/48/000000/add--v1.png"/>
            <h2>Add New Diet</h2>
            <button style=" border-radius: 1px;
				 color: #fff;
				 font-family: 'Oswald';
				 font-size: 20px; padding: 0px 20px; margin: 10px 0px;">
						   <a href="../SE/add_diet.php">Add</a>
			</button>

        </div>
        <div class="css">
			<img src="https://img.icons8.com/color/48/000000/delete-forever.png"/>
              <h2>Delete Diet</h2>
			  <button style=" border-radius: 1px;
				 color: #fff;
				 font-family: 'Oswald';
				 font-size: 20px; padding: 0px 20px; margin: 10px 0px;">
						   <a href="../SE/delete_diet.php">Delete</a>
			  </button>
           
        </div>
       
    </div>
	

   
</body>

</html>