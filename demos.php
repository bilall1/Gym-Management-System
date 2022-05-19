<html>

<head>
    <title>
        Demos
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f6d91d128.js" crossorigin="anonymous"></script>
	<script defer src="script.js"></script>
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
                Workout Demos
            </h1>
        </div>
    </nav>
	
	<div class="display_table">
        <br><br>
	
		<?php
		
		$con = mysqli_connect("localhost","root","","SE");
		if($con)			
	    {

            $sql3 = "select * from demo";
            $result3 = mysqli_query($con, $sql3);
			
			

			echo"<br><br>";
			echo "<center> <table  border='3px solid' width='50%' margin='10px auto' text-align='left'  >
			<tr>

            
			
			<th scope='col'>Demo Id</th>
            <th scope='col'>Demo Type</th>
			</tr>";

			while($row = mysqli_fetch_assoc($result3))

			  {

			  echo "<tr>";

			  echo "<td>" . $row['demo_id'] . "</td>";

			  echo "<td>" . $row['demo_name'] . "</td>";


			  echo "</tr>";

			  }

			echo "</center></table>";
		
		}

			
				?>

                <?php
                    if(isset($_POST["sub3"]))
                    {
                        echo"<br><br>";
                        $id = $_POST["id"];
                        
                        $con = mysqli_connect("localhost","root","","SE");

                        if($con)           
                        {
                            $sql1="select link from demo where demo_id=$id";
                            $result12 = mysqli_query($con, $sql1);


                            $present1 = false;
                            while($row=mysqli_fetch_assoc($result12))
                            {
                                $present1 = true;
                                $link = $row['link'];
                                echo" <iframe width='800' height='500' src='$link' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
                    	
                            }
                            if(!$present1){
                                echo "Wrong Input.Enter again..";
                            }

                            
						
                        echo"<br><br>";
                        }
                    }
                    ?>

    </div>

    <div class="signupcompleteform">
        <div class="enter_plan" >
                <h2> Choose demo Id: </h2>
                <br>

                <form action="demos.php" method="post">
                <label>Select Id</label>
                <select name="id" id="id" id=value>
                <?php

                $sql3 = "select * from demo";
                $result1 = mysqli_query($con, $sql3);
                while ($plan= mysqli_fetch_array(
                    $result1,MYSQLI_ASSOC)):;


                ?>
                <option value="<?php echo $plan["demo_id"];
                    ?>">
                        <?php echo $plan["demo_id"];

                        ?>
                    </option>
                <?php 
                    endwhile; 
                ?>
                </select>
                <br><br>
                <input type="submit" name ="sub3" id = "sub3" value = "Proceed" />

                <br>
                <br>


            </div>

    </div>

</body>


</html>

