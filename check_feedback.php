<html>

<head>
    <title>
        View Feedback
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
            View Feedback
            </h1>
        </div>
    </nav>
	
	<div class="display_table">
	
		<?php
		
		$con = mysqli_connect("localhost","root","","SE");
		if($con)			
	    {
            $sql3 = "select * from feedback";
            $result3 = mysqli_query($con, $sql3);
   

			echo"<br><br>";
			echo "<center> <table border='3px solid' width='60%' margin='10px auto' text-align='left'  >
			<tr>
						
			<th scope='col'>Name</th>
            <th scope='col'>Email </th>
			<th scope='col'>Message</th>
            
			</tr>";

			while($row = mysqli_fetch_assoc($result3))
			{

                echo "<tr>";
            
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['message'] . "</td>";

			    echo "</tr>";

			}

			echo "</center></table>";
		}
			
		?>

    </div>

</body>

</html>


