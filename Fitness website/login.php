<?php 
    session_start();
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && $user_name=="admin" && $password=="admin")
        {
            header("Location: admin1.php");
            die;
        }

        else if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            $query = "select * from signup where user_name = '$user_name' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
					$user_data = mysqli_fetch_array($result);

                    if($user_data[5] == $password)
                    {
                        $_SESSION['user_name'] = $user_data[7];
                        header("Location: index.php");
                        die;
                    }
                }
            }
            
            $message = "Username or Password invalid. Try again !!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        
        else
        {
            $message = "Username or Password invalid. Try again !!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
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
		.login-area {
			padding: 30px;
			background: rgba(26, 27, 28, 0.6);
			width: 52%;
			padding-left: 50px;
			align-items: center;
			border-radius: 10px;
		}

		.login-top-section .container {
			padding-left: 380px;
		}

		.login-title {
			font-size: 50px;
			text-align: center;
			color: #c4ff14;
			text-decoration: underline;
			padding-top: 29px;
			margin-bottom: 80px;
		}

		.login-form {
			margin-bottom: 50px;
		}

		.login-input {
			text-align: center;
		}

		.login-input p input {
			background: #f2ddd5;
			font-size: 20px;
			border-radius: 10px;
			padding: 6px 15px;
			margin-bottom: 18px;
		}

		.login-btn {
			margin-top: 35px;
			margin-left: 8px;
			margin-bottom: 40px;
		  	display: inline-block;
		  	border: none;
		  	padding: 7px 38px;
		  	padding-left: 38px;
		  	background: linear-gradient(130deg, #9eed2f 93%, transparent 90%);
		 	color: black;
		 	font-weight: 1000;
		 	text-decoration: bolder;
		  	cursor: pointer;
		  	font-size: 20px;
		}

		.login-top-section {
			height: 95%;
			text-align: center;
			padding-top: 95px;
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
	

	<!-- Page top section -->
	<section class="login-top-section set-bg" data-setbg="images/login-bg.jpg">
		<div class="container">
			<div class="login-area">
				<h2 class="login-title"><u>Log In</u></h2>
				<form class="login-form" method="POST">
					<div class="login-input">
						<p><input type="text" name="user_name" id="user_name" placeholder="Username" required></p>
						<p><input type="password" name="password" id="password" placeholder="Password" required></p>
						<p><span style="color: white;">New user? </span><a href="signup.php"> Register here</a></p>
						<br>
						<p><!-- <a href="index.php" class="login-btn">LogIn</a></p> -->
						<button class="login-btn">LogIn</button>
						<!-- <input type="submit" name="login" id="login" class="login-btn" value="Log In"/> -->
					</div>
				</form>
			</div>
		</div>
	</section>
	<!-- Page top section end -->


	<!-- Footer section -->
	<div>
		<?php include_once 'footer.php';?>	
	</div>
	<!-- Footer section end -->

															
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
