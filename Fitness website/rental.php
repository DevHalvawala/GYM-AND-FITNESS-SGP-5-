<?php
    session_start();
    include("connection.php");
    include("functions.php");
    $user_data = check_login($con);


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {

        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];  
        $mobile = $_POST['mobile'];   
        $equipment = $_POST['equipment'];
        $time_period = $_POST['time_period'];
        $address = $_POST['address'];


        if(!empty($f_name) && !empty($l_name) && !empty($email) && !empty($gender) && !empty($mobile))
        {
            
            $query = "insert into rental(f_name, l_name, gender, e_mail, phone_no, equipment_name, time_period, address) values('$f_name', '$l_name', '$gender', '$email', '$mobile', '$equipment', '$time_period', '$address')";
            mysqli_query($con, $query);

            $message = "Equipment Rental request received !";
            echo "<script type='text/javascript'>alert('$message');</script>";

            header("Location: payment.php");
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

	<!-- Main Stylesheets -->
	<!-- <link rel="stylesheet" href="css/style.css"/> -->


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
			border-radius: 5px;
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

		select, select option{
			font-size: 16px;
			width: 300px;
			height: 35px;
			border-radius: 5px;
			padding-left: 5px;
			margin: 10px;
			color: black;
			background-color: #f2ddd5;
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

	<!-- header section starts      -->
	<div style="width: 100%;">
	    <?php include_once 'header.php';?>  
	</div>
	<!-- header section ends     -->


	<div class="clearfix"></div>
	<!-- Header section end -->

	<div>
		
	</div>

	<!-- Signup section -->
	</section>
		<div class="col-lg-12" style="margin-top: 120px;">
			<form method="POST" class="register-form" id="register-form">
				<table border="0" width="100%">
					<tr>
						<td  class='instruction' width="250px">Name:</td>
						<td>
							<input type="text" placeholder="First Name" id="f_name" name='f_name' size="18">
							<input type="text" placeholder="Last Name"  id="l_name" name='l_name' size="19">
						</td>
						<td width="800px" rowspan="7" align="center">
							<!-- <img src="img/registration.png" width="550px" height="475px"> -->	
							<img src="images/rental.jpg" width="550px" height="475px">
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
							<input type="text" placeholder="Mobile no."  id="mobile" name='mobile' size="40">
						</td>
					</tr>
					<tr>
						<td class='instruction'>E-mail:</td>
						<td>
							<input type="email" placeholder="E-mail address"  id="email" name='email' class="mail" size="40">
						</td>
					</tr>
					<tr>
						<td class='instruction'>Equipment: </td>
						<td>
							<select id="equipment" name="equipment" width="45" required>
								<option value="" disabled selected>-- Select --</option>
								<option value="Dumbbels">Dumbbels</option>
								<option value="Exercise ball">Exercise ball</option>
								<option value="Pushup stand">Pushup stand</option>
								<option value="Combo set">Combo set</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class='instruction'>Time period:</td>
						<td>
							<select id="time_period" name="time_period" width="45" required>
								<option value="" disabled selected>-- Select --</option>
								<option value="1 - week">1 - week</option>
								<option value="2 - weeks">2 - weeks</option>
								<option value="3 - weeks">3 - weeks</option>
								<option value="4 - weeks">4 - weeks</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class='instruction'>Address: </td>
						<td>
							<input type="text" placeholder="Address"  id="address" name='address' size="30">
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<button class="register-button">Submit</button>
						</td>
					</tr>
				</table>
			</form>	
		</div>

		<div>
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