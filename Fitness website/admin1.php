<?php

    include("connection.php");	

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {

        $day = $_POST['day'];
        $time = $_POST['time'];
        $exercise = $_POST['exercise'];
        $room_no = $_POST['room_no'];


        if(!empty($day) && !empty($time) && !empty($exercise) && !empty($room_no))
        {
            
            $query = "update timetable set time='$time' , exercises='$exercise' , room_no='$room_no' where day='$day'";
            mysqli_query($con, $query);
            echo "<script type='text/javascript'>  alert('Timetable updated Successfully !!');   </script>";
            header("Location: admin1.php");
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
			background-color: black;
			font-family: 'Nunito', sans-serif;
		}

		.header {
			position: fixed;
		  	top: 0;
		  	left: 0;
		  	right: 0;
		  	display: -webkit-box;
		  	display: -ms-flexbox;
		  	display: flex;
		  	-webkit-box-align: center;
		      -ms-flex-align: center;
		          align-items: center;
		  	-webkit-box-pack: justify;
		      -ms-flex-pack: justify;
		          justify-content: space-between;
		  	padding: 0 9%;
		  	z-index: 10000;
		  	background: #000;
		}

		.header .logo {
		  	color: #fff;
		  	margin-top: 7px;
		  	text-decoration: none;
		  	font-size: 1.8rem;
		}

		.header .logo span {
		  	color: #9eed2f;
		}

		.header .navbar a {
			margin-top: 8px;
		  	display: inline-block;
		 	padding: 12px 40px;
		  	font-size: 1.2rem;
		  	text-decoration: none;
		  	color: #fff;
		}

		.header .navbar a:hover {
		  	background: #9eed2f;
		  	color: black;
		}

		fieldset {
            width: 36%;
            color: white;
            padding-left: 40px;
            margin-left: 460px;
        }

		table {
			font-size: 22px;
			margin-top: 45px;
			line-height: 55px;
		}

		.instruction {
			color: #c4ff14;
			font-size: 24px;
		 	padding-left: 35px;
		}

		input[type=text] {
			font-size: 22px;
			border-radius: 7px;
			padding: 3px 10px;
			margin-left: 20px;
			background-color: #d2edad;
		}

		select, select option{
			font-size: 20px;
			width: 275px;
			height: 35px;
			border-radius: 5px;
			margin-left: 20px;
			padding-left: 10px;
			background-color: #d2edad;
		}

		.update-button {
			margin-left: 150px;
			margin-bottom: 15px;
		  	border: none;
		  	padding: 8px 30px;
		  	padding-left: 30px;
		  	background: linear-gradient(130deg, #9eed2f 93%, transparent 90%);
		 	color: black;
		 	font-weight: 600;
		  	cursor: pointer;
		  	font-size: 18px;
		}
	</style>	

</head>



<body>
	<header class="header">

        <a href="#" class="logo"> <span>F7 </span>GYM - Admin Portal</a>

        <div id="menu-btn" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="admin1.php">Timetable</a>
            <a href="admin2.php">Plan price</a>
            <a href="admin3.php">Timing</a>
            <a href="login.php">Logout</a>
        </nav>

    </header>

	<section>
		<div class="col-lg-12" style="padding: 0px 0px;">
			<h1 class="singup-title"><u>Update GYM timetable</u></h1>
			<br><br>
			<fieldset>
				<legend><h2> Update Timetable </h2></legend>
				<form method="POST" class="update-form" id="update-form">
					<table border="0" width="100%">
						<tr>
							<td  class='instruction' width="150px">Day name:</td>
							<td>
								<select id="day" name="day" width="18" required>
								<option value="" disabled selected>-- Select --</option>
								<option value="Monday">Monday</option>
								<option value="Tuesday">Tuesday</option>
								<option value="Wednesday">Wednesday</option>
								<option value="Thursday">Thursday</option>
								<option value="Friday">Friday</option>
								<option value="Saturday">Saturday</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class='instruction'>Time:</td>
							<td>
								<input type="text" placeholder="Time" id="time" name='time' size="10" required>
								&ensp;
								<!-- <input type="text" placeholder="Time" id="time" name='time' size="5"> -->
							</td>
						</tr>
						<tr>
							<td class='instruction'>Exercise:</td>
							<td>
								<input type="text" placeholder="Exercise"  id="exercise" name='exercise' size="18" required>
							</td>
						</tr>
						<tr>
							<td class='instruction'>Room no: </td>
							<td>
								<input type="text" placeholder="Room no."  id="room_no" name='room_no' size="18" required>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<br><button class="update-button">Update Timetable</button>
							</td>
						</tr>
					</table>
				</form>	
			</fieldset>
		</div>
	</section>
</body>
</html>