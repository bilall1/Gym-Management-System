<?php
  session_start();
 ?>
<html>

<head>
    <title>
        Add demo
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
            Add demo 
            </h1>
        </div>
    </nav>
	
	<div class="display_table">				
        <?php
            
            if(isset($_POST["sub00"]))
            { 
                $demo_name = $_POST["demo_name"];
                $demo_link = $_POST["demo_link"];
                $con = mysqli_connect("localhost","root","","SE");
                if($con)			
                {
                    $sql300 = "insert into demo value(NULL,'$demo_name','$demo_link');";
                    $result300 = mysqli_query($con, $sql300);

                    if($result300 == 1)
                    {
                        echo "Demo added successfully";
                    }
                }
            }

            $con = mysqli_connect("localhost","root","","SE");                    
            $sql3 = "select * from demo;";
            $result3 = mysqli_query($con, $sql3);
            
            echo"<br><br>";
            echo "<center> <table border='2px solid' width='50%' margin='10px auto' text-align='center'   >
            <tr>
            <th>No.</th>
            <th>Demo Name</th>
            <th>Demo Link</th>
            </tr>";
            $counter = 1;

            while($row = mysqli_fetch_assoc($result3))
            {

                echo "<tr>";

                echo "<td>" . $counter . "</td>";
                echo "<td>" . $row['demo_name'] . "</td>";
                echo "<td>" . $row['link'] . "</td>";

                echo "</tr>";
                $counter = $counter + 1;

            }

            echo "</center></table>";
                             
        ?>
        <div class="payement" >
            <form id="form" action="add_demos.php" method="post" style="text-align:center">
                Demo Name: <input type="text" id="demo_name" name="demo_name" required><br><br>
                Demo Link: <input type="text" id="demo_link" name="demo_link" required><br><br>
                
                <br>	
                    <input type="submit" name ="sub00" id = "sub00" value = "Proceed" />
            </form>

        </div>
        
    </div>



</body>

</html>


