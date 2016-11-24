<?php
session_start();
$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "wplproject";

		//connect to db
		$conn = new mysqli($servername, $username, $password,$dbname);
if(isset($_POST["username"])){ $Usr = filter_var($_POST["username"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH); } 
if(isset($_POST["password"])){ $Psw = filter_var($_POST["password"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH); }
$query = "SELECT * FROM login WHERE UserName='".$Usr."' and Password='".$Psw."'";
$result = mysqli_query($conn, $query) or die(mysql_error());
$num_row = mysqli_num_rows($result);
if( $num_row == 1 ) {
	$_SESSION['username'] =$Usr;
	$_SESSION['loggedIn']=true;
	header('Location:userloggedin.php');
}
else {

	header('Location:userlogin.html');
}
?> 