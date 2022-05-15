<?php
  session_start();
 ?>
<html>

<head>
    <title>
        Chat with Member
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f6d91d128.js" crossorigin="anonymous"></script>
	<script defer src="script.js"></script>
    <style>
        .tab {
            display: inline-block;
            margin-left: 40px;
        }
    </style>
</head>

<body>
    <nav>
    <button style="align:left;border:none;text-align:center; display:relative;font-size:16px ;margin:4px 2px ;border-radius:50%;cursor: pointer;padding: 8px;text-decoration: none;" >
					         <a href="../se/trainer_chat.php">Back</a>
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
                Chat with Member 
            </h1>
        </div>
    </nav>
	
	<div class="display_table">				
        
            <?php
            if(isset($_POST["sub123"]))
            {
                $message = $_POST["mssg"];
                $mem_email = $_SESSION["mem_email"];
                $trainer_email = $_SESSION["email_login"];
                $con = mysqli_connect("localhost","root","","SE");
                if($con)
                {
                    $sql3 = "Insert into chat Values (NULL,'$mem_email','$trainer_email', 'Trainer', '$message');";
                    $result3 = mysqli_query($con, $sql3);
                    if($result3)
                    {
                        echo "Message sent successfully<br>";
                    }
                }
                echo "<br><br>";
            }
            ?>
            <?php    
            if(isset($_POST["sub3"]))
            {
                $mem_email = $_POST["mem_email"];
                $_SESSION["mem_email"] =  $_POST["mem_email"];
            }
            {
                $trainer_email = $_SESSION["email_login"];
                $mem_email = $_SESSION["mem_email"];
                $con = mysqli_connect("localhost","root","","SE");
                if($con)			
                {   
                    $sql3 = "Select * from chat where member_email = '$mem_email' and trainer_email = '$trainer_email';";
                    $result3 = mysqli_query($con, $sql3);
                    

                    while($row = mysqli_fetch_assoc($result3))
                    {
                        if($row['sender'] == 'Trainer')
                        {
                            echo 'Me: <span class="tab"></span>';
                        }
                        else
                        {
                            echo $row['member_email'];
                            echo ': <span class="tab"></span>';
                        }
                        echo $row['message'];
                        echo "<br>";

                    }


                
                
                }
            }                
        ?>
        <div class="enter_plan" >
			<h2> Chat box:</h2>
			<br>
			<form action="trainer_member_chat.php" method="post">
			Enter message: <input type="text" name="mssg"><br>
			<br>	
			<input type="submit" name ="sub123" id = "sub123" value = "Proceed" />
			</form>
        </div>
    </div>



</body>

</html>


