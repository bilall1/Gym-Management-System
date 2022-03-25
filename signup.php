<html>

<head>
    <title>
        SignUp
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
                <a href="../se/index.html">Home</a>
				<a href="../se/signin.php">SignIn</a>
                <a href="../se/signup.php">SignUp</a>
                <a href="../se/contact.html">Contact</a>
				<a href="../se/about.html">About</a>
            </div>


        </div>
        <div id="abttext3">
            <h1>
                Sign Up
            </h1>
        </div>
    </nav>
	
	<div class="signupform">
        <div class="signupheading">
            <h1>
                Enter your Details
            </h1>
        </div>

        <div class="signupformdata">
			<div id = "error" style="text-align: center;"></div>
            <form id = "form" action="Membership_Selection.php" method= "post">
				<h3>Name</h3>
                <input type="text" id="name" name="name" placeholder="Name here"  maxlength="20" size="40" required>
				<br>
				<br>
				<h3>Email</h3>
                <input type="email" id="email" name="email" placeholder="Email here" maxlength="30" size="40" required>
				<br>
				<br>
				<h3>Password</h3>
				<input type="password" id="pass" name="pass" placeholder="passward Here"  maxlength="20"size="40" required>
				<br>
				<br>
				<h3>Cnic</h3>
				<input type="number" id="cnic" name="cnic" placeholder="Cnic with out dashes" min="1" max="9999999999999" size="40" required>
				<br>
				<br>
				<h3>Age</h3>
				<input type="number" id="age" name="age" placeholder="age here" min="1" max="100" size="40" required>
				<br>
				<br>
				<h3>Gender</h3>
				<input type="text" id="gender" name="gender" placeholder="gender here" maxlength="6" size="40" required>
				<br>
				<br>
				<h3>Address</h3>
				<input type="text" id="adress" name="adress" placeholder="adress here" maxlength="20" size="40" required>
				<br>
                <br><br>
				<input type="submit" name ="sub" id = "sub" value = "Proceed" />
            </form>
			
            <div class="signuptextbox">
                
                
            </div>



        </div>
    </div>

    <div class="signupdesign1">

        <div class="signupdesign-data1">
            <h1>
               Feel Free to Contact
            </h1>
            <p>
                If you are having a Problem? Contact Any time to Fitme.
				Our team will respond you soon on your email.
            </p>

            <div class="signupclick1">
                <button>
					         <a href="../se/contact.html">TAKE ME TO CONTACT PAGE</a>
                </button>
            </div>
        </div>
    </div>
</body>

</html>