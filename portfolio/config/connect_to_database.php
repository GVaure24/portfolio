<?php
$con = mysqli_connect("localhost","db User","password","db name");
	if(!$con)
	{
		die("Database connection failed!");
	}
$db_connect = mysqli_select_db($con,"dynamic" );
	if(!$db_connect)
	{
		die("Database connection failed!".mysqli_error($con));
	}
?>