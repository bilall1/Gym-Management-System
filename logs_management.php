<?php
  session_start();
 ?>
 
<html>

<head>
    <title>
        Logs Management
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
                Manage Logs
            </h1>
        </div>
    </nav>
	
	<div class="signupcompleteform">
		<br><br>
		<h2 style="margin-left:30px;">Member Logs</h2>
        <div class="display_of_workout">
		
			
             <?php
			
				$email=$_SESSION["email_login"];
				$pass=$_SESSION["pass_login"];
               
                    
                $con = mysqli_connect("localhost","root","","SE");

                if($con)
                {
					
					$sql22="select * from log where email='$email';";
                    
                        $result11 = mysqli_query($con, $sql22);
                    
					
					echo"<br><br>";
					
					echo "<br><br>";
					echo "<center> <table border='3px solid' width='100%' margin='10px auto' text-align='left'   >
					<tr>
					<th>Weight Gain(In Kg's)</th>
					<th>Weight Loss(In Kg's)</th>
					<th>BMI(Body Mass Index)</th>
                    <th>Duration</th>
					<th>Date</th>
					</tr>";

					while($row11=mysqli_fetch_assoc($result11))
                    {
						$a=$row11['gain'];
						$b=$row11['loss'];
						$c=$row11['BMI'];
						$d=$row11['duration'];
                        $e=$row11['log_date'];
						 echo "<tr>";
			  
						echo "<td>" . $row11['gain'] . "</td>";
						
						echo "<td>" . $row11['loss'] . "</td>";

						echo "<td>" . $row11['BMI'] . "</td>";
						
						echo "<td>" . $row11['duration'] . "</td>";

                        echo "<td>" . $row11['log_date'] . "</td>";

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
            <h2>Add Todays Logs</h2>
            <button style=" border-radius: 1px;
				 color: #fff;
				 font-family: 'Oswald';
				 font-size: 20px; padding: 0px 20px; margin: 10px 0px;">
						   <a href="../SE/enter_log.php">Add</a>
			</button>

        </div>
       
       
    </div>
	

   
</body>

</html>