<?php

    include("connection.php");	

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {

        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $user_name = $_POST['user_name'] ;  
        $mobile = $_POST['mobile'];   
        $password = $_POST['password'];
        $re_password = $_POST['re_password'];


        if($_POST["password"] !== $_POST["re_password"])
        {
        	$message = "Password does not match! Try again.";
 		 	echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else if(!empty($f_name) && !empty($l_name) && !empty($email) && !empty($gender) && !empty($user_name) && !empty($mobile) && !empty($password) && !empty($re_password))
        {
            
            $query = "insert into signup(f_name, l_name, gender, e_mail, user_name,phone_no, password, re_password) values('$f_name', '$l_name', '$gender', '$email','$user_name','$mobile', '$password', '$re_password')";
            mysqli_query($con, $query);
            echo "<script type='text/javascript'>alert('Account created Successfull !!');</script>";
            header("Location: login.php");
            die;
        }
            
        else
        {
            $message = "Please enter valid information !";
            echo "<script type='text/javascript'>alert('$message');</script>";       
        }
    }
?>


<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>F7 - Gym</title>
	<meta charset="UTF-8">
	<meta name="description" content="X Gym Fitness HTML Template">
	<meta name="keywords" content="fitness, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>



	<style type="text/css">
		*{
			margin: 0px;
		}

		.signup-form {
			font-size: 17px;
			padding-left: 50px;
			font-style: italic;
			padding: 10px 20px;
			width: 100%;
			height: 60px;
		}

		.register-form {
			background-color: #000000;
		}

		.singup-title {
			padding-top: 20px;
			padding-left: 30px;
			padding-bottom: 0px;
			color: #9eed2f;
			background-color: #000000;
		}

		table {
			margin: 0px;
			width: 100%;
			line-height: 30px;
		}

		 .instruction {
		 	font-size: 19px;
		 	padding-left: 50px;
		 	color: #9eed2f;
		 }

		input[type=text], .mail, input[type=password] {
			font-size: 16px;
			padding: 7px;
			margin: 10px;
			border-radius: 8px;
			color: black;
			background-color: #f2ddd5;
		}

		.signup-login {
			color: white;
			font-size: 18px;
			font-weight: 200;
		}

		#genderr {
			margin-top: 18px;
			margin-left: 11px;
		}

		.register-button {
			margin-top: 50px;
			margin-left: 265px;
			margin-bottom: 40px;
		  	display: inline-block;
		  	border: none;
		  	padding: 7px 38px;
		  	padding-left: 38px;
		  	background: linear-gradient(130deg, #9eed2f 90%, transparent 90%);
		  	color: black;
		  	font-weight: 800;
		  	text-decoration: bolder;
		  	border-radius: 4px;
		  	cursor: pointer;
		  	font-size: 20px;
		}

		.register-button:hover {
			color: darkblue;
			background: linear-gradient(130deg, #9eed2f 90%, transparent 90%);
		}

		.reg-login-btn {
			margin-top: 50px;	
			margin-bottom: 40px;
		  	display: inline-block;
		  	border: none;
		  	padding: 5px 30px;
		  	padding-left: 25px;
		  	background: linear-gradient(130deg, #9eed2f 90%, transparent 90%);
		  	color: black;
		  	font-weight: 1000;
		  	text-decoration: bolder;
		  	border-radius: 4px;
		  	cursor: pointer;
		  	font-size: 17px;
		  	font-weight: 500;
		}

		.reg-login-btn:hover {
			color: darkblue;
			background: linear-gradient(130deg, #9eed2f 90%, transparent 90%);
		}

	</style>	

</head>



<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- header section starts  -->
	<header class="header">
        <a href="#" class="logo"> <span>F7 </span>GYM</a>

        <div id="menu-btn" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="classes.php">Classes</a>
            <a href="timetable.php">Time table</a>
            <a href="rental.php">Rental</a>
            <a href="about.php">About</a>
            <a href="login.php"><img class="user" src="images/user.png" width="25" height="25" style="vertical-align: text-bottom;">Login</a>
        </nav>
    </header>
	<!-- header section ends -->


	<div class="clearfix"></div>
	<!-- Header section end -->


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/header-bg/4.jpg">
		<div class="container">
			<label class="singup-header">R</label>
		</div>
	</section>
	<!-- Page top section end -->


	<!-- Signup section -->
	</section>
		<div class="col-lg-12" style="padding: 0px 0px;">
			<label class="singup-title"><u>Create an Account</u></label>

			<form method="POST" class="register-form" id="register-form">
				<table border="0" width="100%">
					<tr>
						<td  class='instruction' width="250px">Name:</td>
						<td>
							<input type="text" placeholder="First Name" id="f_name" name='f_name' size="18">
							<input type="text" placeholder="Last Name"  id="l_name" name='l_name' size="19">
						</td>
						<td width="700px" rowspan="7" align="center">
							<!-- <img src="img/registration.png" width="550px" height="475px"> -->	
							<img src="images/login.jpeg" width="450px" height="475px">
						</td>
					</tr>
					<tr>
						<td class='instruction'>Gender:</td>
						<td>
							&ensp;
							<input type="radio" name="gender" value="Male" id="genderr" class='instruction'><label class="instruction">Male</label>
							&ensp;
							<input type="radio" name="gender" value="Female" id="genderr" class="instruction"><label class="instruction">Female</label>
						</td>
					</tr>
					<tr>
						<td class='instruction'>Mobile_no:</td>
						<td>
							<input type="text" placeholder="Mobile no."  id="mobile" name='mobile' size="42">
						</td>
					</tr>
					<tr>
						<td class='instruction'>E-mail:</td>
						<td>
							<input type="email" placeholder="E-mail address"  id="email" name='email' class="mail" size="42">
						</td>
					</tr>
					<tr>
						<td class='instruction'>User name:</td>
						<td>
							<input type="text" placeholder="User_name"  id="user_name" name='user_name' size="42">
						</td>
					</tr>
					<tr>
						<td class='instruction'>Password:</td>
						<td>
							<input type="Password" placeholder="Password"  id="password" name='password' size="42">
						</td>
					</tr>
					<tr>
						<td class='instruction'>Confirm Password:</td>
						<td>
							<input type="Password" placeholder="Confirm password"  id="re_password" name='re_password' size="42">
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<button class="register-button">Register</button>
						</td>
						<td align="center">
							<b class="signup-login" style="justify-content: center;">Already have an account?</b>&ensp;&ensp;
							<a href="login.php" class="reg-login-btn">Log In</a>
						</td>
					</tr>
				</table>
			</form>	
		</div>

		<div style="width: 100%;">
			<?php include_once 'footer.php';?>	
		</div>

	</section>
	<!-- Signup section end -->
	

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>