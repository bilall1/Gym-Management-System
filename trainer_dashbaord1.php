<?php
  session_start();
 ?>
 
<html>

<head>
    <title>
        Trainer's Dashboard
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
                <a href="../SE/contact.php">Contact</a>
				<a href="../SE/about.html">About</a>
				<a href="../SE/signin.php">Sign Out</a>
            </div>


        </div>
        <div id="abttext3">
            <h1>
                Welcome to Trainer's Dashboard
            </h1>
        </div>
    </nav>
	
	<div class="icon-row1">
        <div class="html">
		<img src="https://img.icons8.com/color/48/000000/treadmill.png"/>
            <h2>Equipment Management</h2>
            <button style=" border-radius: 1px;
				 color: #fff;
				 font-family: 'Oswald';
				 font-size: 20px; padding: 0px 20px; margin: 10px 0px;">
						   <a href="../SE/equipment_management.php">manage</a>
			</button>

        </div>
        <div class="css">
			<img src="https://img.icons8.com/color/48/000000/calendar--v1.png"/>
            <h2>Mark/See Your Attendence</h2>
            <button style=" border-radius: 1px;
				 color: #fff;
				 font-family: 'Oswald';
				 font-size: 20px; padding: 0px 20px; margin: 10px 0px;">
						   <a href="../SE/mark_attendence.php">mark</a>
			</button>
           
        </div>
        <div class="java">
		<img src="https://img.icons8.com/color/48/000000/talk-show.png"/>
            <h2>Respond messages of your Clients</h2>
            <button style=" border-radius: 1px;
				 color: #fff;
				 font-family: 'Oswald';
				 font-size: 20px; padding: 0px 20px; margin: 10px 0px;">
						   <a href="../SE/trainer_chat.php">Chat</a>
			</button>
           
        </div>
    </div>
    <br>
    <div class="icon-row1">
        <div class="html">
		<img src="https://img.icons8.com/color/48/000000/parkour.png"/>
            <h2>Add Demo Videos</h2>
            <button style=" border-radius: 1px;
				 color: #fff;
				 font-family: 'Oswald';
				 font-size: 20px; padding: 0px 20px; margin: 10px 0px;">
						   <a href="../SE/add_demos.php">Add</a>
			</button>
        
        </div>
    </div>
        
	

   
</body>

</html>