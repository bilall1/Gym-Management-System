<?php
  session_start();
 ?>
<html>

<head>
    <title>
        Log
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f6d91d128.js" crossorigin="anonymous"></script>
	<script defer src="script.js"></script>
</head>

<body>
    <nav>
    <button style="align:left;border:none;text-align:center; display:relative;font-size:16px ;margin:4px 2px ;border-radius:50%;cursor: pointer;padding: 8px;text-decoration: none;" >
					         <a href="../se/logs_management.php">Back</a>
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
                Enter Logs
            </h1>
        </div>
    </nav>
	
	<div class="signupform">
        <div class="signupheading">
            <h1>
                Enter your Details
            </h1>
        </div>

        <div class="signupformdata">
            <form action="enter_log.php" method= "post">
				<h3>Weigth Gain(In kg's) </h3>
                <input type="number" step="0.00001" id="email" name="gain" placeholder="Email gains in Kg" size="40">
				<br>
				<br>
				<h3>Weigth Loss(In kg's) </h3>
				<input type="number" step="0.00001" id="pass" name="loss" placeholder="Email loss in Kg" size="40">
				<br>
				<br>
				<h3>Current BMI </h3>
				<input type="number" step="0.00001" id="bmi" name="bmi" placeholder="Enter Current BMI:" size="40">
				<br>
				<br>
				<h3>Duration of workout </h3>
				<input type="text" id="duration" name="duration" placeholder="enter duration" size="40">
				<br>
				<br>
			
				<input type="submit" name ="sub" id = "sub" value = "Save Logs" />
            </form>
			
            
            



        </div>
    </div>

    <?php
    if(isset($_POST["sub"]))
        {
            $gain = $_POST["gain"];
            $loss = $_POST["loss"];
            $bmi = $_POST["bmi"];
            $duration = $_POST["duration"];
            
            $email = $_SESSION["email_login"];
            
            $con = mysqli_connect("localhost","root","","SE");



            if($con)
            {
                $today_date = date("Y-m-d");
                $sql300 = "select * from log where email='$email' and log_date = '$today_date';";
                $result300 = mysqli_query($con, $sql300);
                $present = 1;
                while($row = mysqli_fetch_assoc($result300))
                {
                    $present = 0;
                }

                if($present == 0)
                {
                    echo "Today's Log Already Exists!!!!";
                }
                else{

                    $sql58 = "insert into log Values(NULL,$gain,$loss,$bmi,'$today_date','$duration','$email');";
                    $result58 = mysqli_query($con, $sql58);	
                }
        
            }
        }
	
	?> 


    <div class="signupdesign1">

        <div class="signupdesign-data1">
            <h1>
               Feel Free to Contact
            </h1>
            <p>
                If you are having a Problem? Contact Any time to Fitme.
				Our team will respond you soon on your email.
            </p>

            <div class="signupclick1">
                <button>
					         <a href="../SE/contact.html">TAKE ME TO CONTACT PAGE</a>
                </button>
            </div>
        </div>

    </div>


</body>


</html>