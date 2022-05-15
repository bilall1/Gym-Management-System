<?php
  session_start();
 ?>
 
<html>

<head>
    <title>
        Admin's Dashboard
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
                <a href="../se/contact.php">Contact</a>
				<a href="../SE/about.html">About</a>
				<a href="../SE/signin.php">Sign Out</a>
            </div>


        </div>
        <div id="abttext3">
            <h1>
                Welcome to Admins's Dashboard
            </h1>
        </div>
    </nav>
	
	<div class="icon-row1">
        <div class="html">
		<img src="https://img.icons8.com/color/48/000000/staff.png"/>
            <h2>Staff Management</h2>
            <button style=" border-radius: 1px;
				 color: #fff;
				 font-family: 'Oswald';
				 font-size: 20px; padding: 0px 20px; margin: 10px 0px;">
						   <a href="../SE/staff_management.php">manage</a>
			</button>

        </div>
        <div class="css">
        <img src="https://img.icons8.com/color/48/000000/negative-dynamic.png"/>
              <h2>Monthly Reports</h2>
              <button style=" border-radius: 1px;
				 color: #fff;
				 font-family: 'Oswald';
				 font-size: 20px; padding: 0px 20px; margin: 10px 0px;">
						   <a href="../SE/monthly_weekly_reports.php">see</a>
			</button>
           
        </div>
        <div class="java">
		<img src="https://img.icons8.com/color/48/000000/very-popular-topic.png"/>
            <h2>See Feedback</h2>
            <button style=" border-radius: 1px;
				 color: #fff;
				 font-family: 'Oswald';
				 font-size: 20px; padding: 0px 20px; margin: 10px 0px;">
						   <a href="../SE/check_feedback.php">see</a>
			</button>
           
        </div>
    </div>
	
</body>

</html>