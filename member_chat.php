<?php
  session_start();
 ?>
<html>

<head>
    <title>
        Chat with Trainer
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
                Chat with Trainer 
            </h1>
        </div>
    </nav>
	
	<div class="display_table">
        <?php
        if(isset($_POST["sub123"]))
        {
            $message = $_POST["mssg"];
            $mem_email = $_SESSION["email_login"];
            $con = mysqli_connect("localhost","root","","SE");
            if($con)
            {
                $sql11="select trainer_email from member_trainer where member_email='$mem_email';";
                    
                    $result22 = mysqli_query($con, $sql11);
                    
                $trainer_email='xx';
                while($row13=mysqli_fetch_assoc($result22))
                {
                    $trainer_email=$row13['trainer_email'];
                }
                $sql3 = "Insert into chat Values (NULL,'$mem_email','$trainer_email', 'Member', '$message');";
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
            
            //if(isset($_POST["sub1"]))
            { 
                $email_mem = $_SESSION["email_login"];
                $con = mysqli_connect("localhost","root","","SE");
                if($con)			
                {
                    $sql11="select trainer_email from member_trainer where member_email='$email_mem';";
                    
                        $result22 = mysqli_query($con, $sql11);
                        
					$trainer_email='xx';
                    while($row13=mysqli_fetch_assoc($result22))
                    {
                        $trainer_email=$row13['trainer_email'];
                    }
                    
                    $sql3 = "select * from chat where trainer_email = '$trainer_email' and member_email = '$email_mem';";
                    $result3 = mysqli_query($con, $sql3);
                    while($row = mysqli_fetch_assoc($result3))
                    {
                        if($row['sender'] == 'Member')
                        {
                            echo 'Me: <span class="tab"></span>';
                        }
                        else
                        {
                            echo $row['trainer_email'];
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
			<form action="member_chat.php" method="post">
			Enter message: <input type="text" name="mssg"><br>
			<br>	
			<input type="submit" name ="sub123" id = "sub123" value = "Proceed" />
			</form>
        </div>
        
    </div>



</body>

</html>


