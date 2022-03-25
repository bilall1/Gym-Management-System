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
                <a href="../se/index.html">Home</a>
				<a href="../se/signin.php">SignIn</a>
                <a href="../se/signup.php">SignUp</a>
                <a href="../se/contact.html">Contact</a>
				<a href="../se/about.html">About</a>
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
            <h1>
                Enter your Details
            </h1>
        </div>

        <div class="signinformdata">

            <form action="signin.php" method= "post">
				
				<h3>Email</h3>
                <input type="text" id="email" name="emial" placeholder="Email Here" size="40">
				<br>
				<br>
				<h3>Passward</h3>
				<input type="text" id="pass" name="pass" placeholder="passward Here" size="40">

				<br>
                <br><br>
				
				<input type="submit" />
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
					     <a href="../se/contact.html">TAKE ME TO CONTACT PAGE</a>
                </button>
            </div>
        </div>
    </div>
</body>

</html>