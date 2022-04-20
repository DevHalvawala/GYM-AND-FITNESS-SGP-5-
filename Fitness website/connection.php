<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "F7";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("Failed to connect!");
}
