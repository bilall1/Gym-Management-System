<html>

<head>
    <title>
        SignIn
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f6d91d128.js" crossorigin="anonymous"></script>
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
                Sign In
            </h1>
        </div>
    </nav>
	
	<div class="signinform">
        <div class="signupheading">
			<br>
            <h1 style="margin-left:40px">
                Enter your Details
            </h1>
        </div>

        <div class="signinformdata">

            <form action="which_member.php" method= "post">
				
				<h3>Email</h3>
                <input type="email" id="email" name="email" placeholder="Email here" maxlength="30" size="40" required>
				<br>
				<br>
				<h3>Passward</h3>
				<input type="password" id="pass" name="pass" placeholder="passward Here"  maxlength="20"size="40" required>

				<br>
                <br><br>
				
				<input type="submit" name ="sub1" id = "sub1" value = "Proceed" />
            </form>
			

        </div>
    </div>

    <div class="signindesign1">

        <div class="signindesign-data1">
            <h1>
               Feel Free to Contact
            </h1>
            <p>
                If you are having a Problem? Contact Any time to Fitme.
            </p>

            <div class="signinclick1">
                <button>
					     <a href="../SE/contact.php">TAKE ME TO CONTACT PAGE</a>
                </button>
            </div>
        </div>
    </div>
</body>

</html>