<?php
  session_start();
 ?>
<html>

<head>
    <title>
        Attendance
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f6d91d128.js" crossorigin="anonymous"></script>
	<script defer src="script.js"></script>
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
                Attendance 
            </h1>
        </div>
    </nav>
	
	<div class="display_table">				
        <?php
            
            //if(isset($_POST["sub1"]))
            { 
                $email_attend = $_SESSION["email_login"];
                $con = mysqli_connect("localhost","root","","SE");
                if($con)			
                {
                    $today_date = date("Y-m-d");
                    $sql300 = "select * from Attendence_log where email='$email_attend' and user_type = 'member' and attend_date = '$today_date';";
                    $result300 = mysqli_query($con, $sql300);
                    $present = 1;
                    while($row = mysqli_fetch_assoc($result300))
                    {
                        $present = 0;
                    }

                    if($present == 1)
                    {
                        $sql112="insert into Attendence_log Values(NULL,'member','$email_attend','$today_date');";
                            
                        $result112 = mysqli_query($con, $sql112);
                    }

                    
                    $sql3 = "select * from Attendence_log where email='$email_attend' and user_type = 'member';";
                    $result3 = mysqli_query($con, $sql3);
                    
                    echo"<br><br>";
                    echo "<center> <table border='2px solid' width='50%' margin='10px auto' text-align='center'   >
                    <tr>
                    <th>No.</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Marked</th>
                    </tr>";
                    $counter = 1;

                    while($row = mysqli_fetch_assoc($result3))

                    {

                        echo "<tr>";

                        echo "<td>" . $counter . "</td>";
                        echo "<td>" . $row['email'] . "</td>";

                        echo "<td>" . $row['attend_date'] . "</td>";

                        echo "<td> Yes </td>";

                        echo "</tr>";
                        $counter = $counter + 1;

                    }

                    echo "</center></table>";
                
                
                }
            }                
        ?>
        
    </div>



</body>

</html>


