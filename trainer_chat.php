<?php
  session_start();
 ?>
<html>

<head>
    <title>
        Chat
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f6d91d128.js" crossorigin="anonymous"></script>
	<script defer src="script.js"></script>
</head>

<body>
    <nav>
    <button style="align:left;border:none;text-align:center; display:relative;font-size:16px ;margin:4px 2px ;border-radius:50%;cursor: pointer;padding: 8px;text-decoration: none;" >
					         <a href="../se/trainer_dashbaord1.php">Back</a>
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
                Chat 
            </h1>
        </div>
    </nav>
	
	<div class="display_table">				
        <?php
            
            //if(isset($_POST["sub1"]))
            { 
                $email_trainer = $_SESSION["email_login"];
                $con = mysqli_connect("localhost","root","","SE");
                if($con)			
                {   
                    $sql3 = "select member_email from member_trainer where trainer_email = '$email_trainer';";
                    $result3 = mysqli_query($con, $sql3);
                    
                    echo"<br><br>";
                    echo "<center> <table border='2px solid' width='50%' margin='10px auto' text-align='center'   >
                    <tr>
                    <th>No.</th>
                    <th>Member Email</th>
                    </tr>";
                    $counter = 1;

                    while($row = mysqli_fetch_assoc($result3))
                    {

                        echo "<tr>";

                        echo "<td>" . $counter . "</td>";
                        echo "<td>" . $row['member_email'] . "</td>";


                        echo "</tr>";
                        $counter = $counter + 1;

                    }

                    echo "</center></table>";
                
                
                }
            }                
        ?>
        <div class="enter_plan" >
			<h2> Select Member:</h2>
			<br>
			<form action="trainer_member_chat.php" method="post">
			Enter Member Email: <input type="email" name="mem_email"><br>
			<br>	
			<input type="submit" name ="sub3" id = "sub3" value = "Proceed" />
			</form>
			
        </div>
    </div>



</body>

</html>


