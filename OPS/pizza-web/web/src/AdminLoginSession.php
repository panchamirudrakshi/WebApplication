<?php
session_start();
$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "wplproject";

		//connect to db
		$conn = new mysqli($servername, $username, $password,$dbname);
		
	if($_SESSION['loggedIn'] && (time() - $_SESSION['loggedIn'] > 1800))
	{
	$un=$_SESSION["username"];
	}
	else
	{
	session_unset($_SESSION['loggedIn']);  
	$_SESSION['loggedIn']=false;
	}
?>