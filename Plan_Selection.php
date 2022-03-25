
<?php
  // Initialize the session
  session_start();
 ?>

<html>

<head>
    <title>
        Plan Selection
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f6d91d128.js" crossorigin="anonymous"></script>
</head>

<body>

	<?php
	
	$membership_type = $_POST["type"];
	$_SESSION["membership_type"] = $_POST["type"];

   
 ?>
          
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
                Select Type
            </h1>
        </div>
    </nav>
	
	<div class="signupcompleteform">
        <div class="signupcompleteheading">
            <h1>
                You want to ?
            </h1>
        </div>

        <div class="signupcompleteformdata">
			<form action="Workout_Display.php" method= "post">
			
			Select type :
  <select name="type" id="type" id=value>
  
	<option value="gain"> Muscle Gain </option>
	<option value="loss"> Weight Loss </option>
	<option value="both"> Both </option>


  </select>
 
 
  
<br><br><br> 
  
  
<input type="submit" name ="sub1" id = "sub1" value = "Proceed" />
			
	</form>
            



        </div>
    </div>

   
</body>

</html>