<html>

<head>
    <title>
        Feedback
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f6d91d128.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav>
        <div class="navbar">
            <div id="logo">
                <h1>FitMe</h1>
            </div>
            <div id="bars">
                <a href="../SE/index.html">Home</a>
				<a href="../SE/signin.php">SignIn</a>
                <a href="../SE/signup.php">SignUp</a>
                <a href="../se/contact.php">Contact</a>
				<a href="../SE/about.html">About</a>
            </div>


        </div>
        <div id="abttext">
            <h1>
                Feedback
            </h1>
        </div>
    </nav>

    <div class="form">
        <div class="heading">
            <h1>
                Give Feedback
            </h1>
            <?php
            if(isset($_POST["sub123"]))
            {
                $message = $_POST["box"];
                $email = $_POST["email"];
                $name = $_POST["name"];
                $con = mysqli_connect("localhost","root","","SE");
                if($con)
                {
                    $sql11="insert into feedback values (NULL,'$name','$email','$message');";
                        
                        $result22 = mysqli_query($con, $sql11);
                    if($result22)
                    {
                        echo "Feedback Submitted Susccessfully<br>";
                    }
                }
                echo "<br><br>";
            }
            ?>
        </div>

        <div class="signupcompleteform">
            <div class="enter_plan" >

            <form action="contact.php" method="post">
                <input type="text" id="name" name="name" placeholder="Name" size="40">
                <input type="email" id="email" name="email" placeholder="Email" size="40">
                <br><br>
            
                
                <textarea name="box" id="box" cols="90" rows="10" placeholder="Type Here" ></textarea>
                <br><br>
                <input type="submit" name ="sub123" id = "sub123" value = "Send" />
               
            </form>
            
            </div>

        </div>
    </div>

    <div class="design1">

        <div class="design-data1">

            <div class="click1">
                <button>
				  <a href="../SE/index.html">TAKE ME TO HOME PAGE</a>
              
                </button>
            </div>
        </div>
    </div>

    <div class="follow">
        <div class="follow-data">
            <h1>Follow Us On</h1><br>

            <div class="ic">
                <i class="fab fa-twitter"></i>
                <i class="fab fa-youtube"></i>
                <i class="fab fa-snapchat-ghost"></i>
            </div>


        </div>
    </div>

</body>

</html>