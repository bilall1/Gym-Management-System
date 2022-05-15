<?php
  session_start();
 ?>
 
<html>

<head>
    <title>
        Member Health History
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f6d91d128.js" crossorigin="anonymous"></script>
   
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
                <a href="../SE/contact.php">Contact</a>
				<a href="../SE/about.html">About</a>
				<a href="../SE/signin.php">Sign Out</a>
            </div>


        </div>
        <div id="abttext3">
            <h1>
                Member Health History
            </h1>
        </div>
    </nav>
	
	<div class="signupcompleteform">
		
    

        <div class="display_of_workout">

        
      
        <?php
            $email=$_SESSION["email_login"];
            $pass=$_SESSION["pass_login"];

            
            $con = mysqli_connect("localhost","root","","SE");

            $today_date = date("Y-m-d");

            $count=0;
            if($con)
            {
                
                $sql22="select BMI,log_date from log where email='$email';";
                
                    $result11 = mysqli_query($con, $sql22);
            
                    while($row11=mysqli_fetch_assoc($result11))
                    {
                    
						$b=$row11['BMI'];
						$d=$row11['log_date'];
                        $count=$count+1;
                    }
            }
            $my_array = array_fill(0, $count, 0);
            $index=3;

            $sql22="select BMI,log_date from log where email='$email';";
            $result11 = mysqli_query($con, $sql22);
            while($row11=mysqli_fetch_assoc($result11))
            {
            $my_array[$index]=$row11['BMI'];
            $index=$index-1;
            }



        $date1 = $d;
        $date2=date('Y-m-d',(strtotime ( '-1 day' , strtotime ( $date1) ) ));
        $date3=date('Y-m-d',(strtotime ( '-1 day' , strtotime ( $date2) ) ));
        $date4=date('Y-m-d',(strtotime ( '-1 day' , strtotime ( $date3) ) ));
        $bmi=$b;

        if($count==0){
            echo "Not Enough Data to Plot.....";
        }
        else if($count==1){
            echo "Not Enough Data to Plot.....";
        }



        ?>
        <div id="curve_chart" style="width: 900px; height: 500px"></div>

        
        <br><br>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var date1 = "<?php echo"$date1"?>";
        var date2 = "<?php echo"$date2"?>";
        var date3 = "<?php echo"$date3"?>";
        var date4 = "<?php echo"$date4"?>";

        var count = "<?php echo"$count"?>";
        var bmi1=0;
        var bmi2=0;
        var bmi3=0;
        var bmi4=0;

       
        bmi1 = <?php echo"$my_array[0]"?>;
        bmi2 = <?php echo"$my_array[1]"?>;
        bmi3 = <?php echo"$my_array[2]"?>;
        bmi4 = <?php echo"$my_array[3]"?>;

       
        

        var data = google.visualization.arrayToDataTable([
          ['Year', 'BMI(Body mass Index)'],
          [date4,  bmi1],
          [date3,  bmi2],
          [date2,  bmi3],
          [date1,  bmi4]
        ]);

        var options = {
          title: 'Member Health',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
        

        </div>
	</div>
	
	
	
       
       
    </div>
	

   
</body>

</html>