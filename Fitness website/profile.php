<?php
    session_start();
    include("connection.php");
    include("functions.php");
    $user_data = check_login($con);
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

		.profile {
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
		 	padding-left: 130px;
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

		.logout-btn {
			color: white;
			font-size: 18px;
			font-weight: 200;
		}

		.logout-btn {
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

		.logout-btn:hover {
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
	<div style="width: 100%;">
	    <?php include_once 'header.php';?>  
	</div>
	<!-- header section ends  -->


	<form method="POST" class="profile" id="profile">
		<table border="0" width="100%" style="margin-top: 180px;">
			<tr>
				<td  class='instruction' width="350px">User name:</td>
				<td>
					<input type="text" id="user_name" placeholder="<?php echo $user_data[7]; ?>" disabled>
				</td>
				<td width="650px" rowspan="6" align="center">
					<img src="https://images.pexels.com/photos/841130/pexels-photo-841130.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="600px" height="400px" style="margin-right: 100px; vertical-align: top;">
				</td>
			</tr>
			<tr>
				<td class='instruction'>First name:</td>
				<td>
					<input type="text" id="user_name" placeholder="<?php echo $user_data[0]; ?>" disabled>
				</td>
			</tr>
			<tr>
				<td class='instruction'>Last name:</td>
				<td>
					<input type="text" id="user_name" placeholder="<?php echo $user_data[1]; ?>" disabled>
				</td>
			</tr>
			<tr>
				<td class='instruction'>Gender:</td>
				<td>
					<input type="text" id="user_name" placeholder="<?php echo $user_data[2]; ?>" disabled>
				</td>
			</tr>
			<tr>
				<td class='instruction'>E-mail</td>
				<td>
					<input type="text" id="user_name" placeholder="<?php echo $user_data[3]; ?>" disabled>
				</td>
			</tr>
			<tr>
				<td class='instruction'>Phone no:</td>
				<td>
					<input type="text" id="user_name" placeholder="<?php echo $user_data[4]; ?>" disabled>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<a href="logout.php" class="logout-btn">Logout</a>
				</td>
			</tr>
		</table>
	</form>


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