
<?php
  session_start();
 ?>
 

<html>

<head>
    <title>
        Select Membership
    </title>
    
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
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
				<a href="../SE/signin.php">SignIn</a>
                <a href="../SE/signup.php">SignUp</a>
                <a href="../SE/contact.php">Contact</a>
				<a href="../SE/about.html">About</a>
            </div>


        </div>
        <div id="abttext3">
            <h1>
                Premium Memberships
            </h1>
        </div>
    </nav>
	
	<div class="signupcompleteform">
        <div class="signupcompleteheading">
            <h1>
                Here are membership Plans
            </h1>
        </div>
		
		

        <div class="signupcompleteformdata">
			

			 <?php
	
    if(isset($_POST["sub"]))
    {
			$a = $_POST["name"];
			$b = $_POST["email"];
			$c = $_POST["pass"];
			$d = $_POST["cnic"];
			$e = $_POST["age"];
			$f = $_POST["gender"];
			$g = $_POST["adress"];
			
			
			
			$_SESSION["email"] = $_POST["email"];
            $_SESSION["cnic"] = $_POST["cnic"];
            $email = $_SESSION["email"];
            $cnic = $_SESSION["cnic"];
            //Used for member dashboard later
            $_SESSION["pass_login"]=$_POST["pass"];
			
            
		 $con = mysqli_connect("localhost","root","","SE");
		if($con)			
	    {
            $sql3 = "select * from member where email = '$email';";
            $result3 = mysqli_query($con, $sql3);
            $present1 = false;
            while($row=mysqli_fetch_assoc($result3))
            {
                $present1 = true;
            }

            $sql4 = "select * from member where cnic = '$cnic';";
            $result4 = mysqli_query($con, $sql4);
            $present2 = false;
            while($row=mysqli_fetch_assoc($result4))
            {
                $present2 = true;
            }
            if($present1 == true)
            {
                echo '<script>alert("Email already exists")</script>';
                echo '<script type="text/JavaScript">',
                'window.history.back()',
                '</script>';
            }
            else if($present2 == true)
            {
                echo '<script>alert("Cnic already exists")</script>';
                echo '<script type="text/JavaScript">',
                'window.history.back()',
                '</script>';
            }

			$sql2 = "insert into member values('$b','$c','$a',$e,$d,'$f','$g');";
            $result2 = mysqli_query($con, $sql2);
			$not_inserted = true;
            if($result2 == 1)
            {
                $not_inserted=false;
            }
            if($not_inserted)
            {
                echo '<script>alert("Registration failed! Register again")</script>';
                echo '<script type="text/JavaScript">',
                'window.history.back()',
                '</script>';
            }
									
			$sql=" select *from membership ;";
            $result1 = mysqli_query($con, $sql);
					
			
	
            $names=array();
            $prices=array();
            $description=array();
            
            $variable=0;

            while($row=mysqli_fetch_assoc($result1))
            {

                $name=$row['membership_name'];
                $desc=$row['description'];
                $price=$row['price'];
        
                $names[$variable]=$name;
                $prices[$variable]=$price;
                $description[$variable]=$desc;
                
                
                $variable=$variable+1;
			  
		        echo"<br>";
		
                    
            }
			
		
		}
        else
        {
            echo '<script>alert("Database Connection failed")</script>';
                echo '<script type="text/JavaScript">',
                'window.history.back()',
                '</script>';

        }
    }
?>     
		<div class="membership_rows">
        <div class="weekly">
		<img src="https://img.icons8.com/color/48/000000/wednesday.png"/>
            <h2><?php   echo $names[0] ?></h2>
          
				
               <p><?php   echo "Rs.".$prices[0] ;echo "<br>" ;echo $description[0] ?></p>
            

        </div>
        <div class="monthly">
			<img src="https://img.icons8.com/color/48/000000/calendar-week31.png"/>
              <h2><?php   echo $names[1] ?></h2>
          
				
               <p><?php   echo "Rs.".$prices[1] ;echo "<br>" ;echo $description[1] ?></p>
           
        </div>
        <div class="yearly">
		<img src="https://img.icons8.com/color/48/000000/plus-1year.png"/>
             <h2><?php   echo $names[2] ?></h2>
          
				
               <p><?php   echo "Rs.".$prices[2] ;echo "<br>" ;echo $description[2]?></p>
           
        </div>
    </div>

		
			
			<form action="Plan_Selection.php" method= "post">
			
			Select Membership Plan :
    <select name="type" id="type" id=value>
    
        <option value="Weekly"> Weekly</option>
        <option value="Monthly"> Monthly</option>
        <option value="Yearly"> Yearly</option>


  </select>
 
 
  
<br><br><br> 
  
  
  <input type="submit" />
			
	</form>
            



        </div>
    </div>

   
</body>

</html>