<?php

	function check_login($con)
	{

		if(isset($_SESSION['user_name']))
		{
			$user_name = $_SESSION['user_name'];
			$query = "select * from signup where user_name = '$user_name' limit 1";
			$result = mysqli_query($con,$query);
			
			if($result && mysqli_num_rows($result) > 0)
			{
				$user_data = mysqli_fetch_array($result);
				return $user_data;
			}
		}

		//redirect to login
		header("Location: login.php");
		die;

	}


?>