<?php
session_start();

$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "wplproject";

		//connect to db
		$conn = new mysqli($servername, $username, $password,$dbname);

if(isset($_POST["fn"])){ $Fn = filter_var($_POST["fn"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH); } 
if(isset($_POST["email"])){ $Email = filter_var($_POST["email"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH); } 
if(isset($_POST["ln"])){ $Ln = filter_var($_POST["ln"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH); } 
if(isset($_POST["password"])){ $Psw = filter_var($_POST["password"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH); }
if(isset($_POST["dob"])){ $DOB = filter_var($_POST["dob"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH); } 
if(isset($_POST["ph"])){ $Ph = filter_var($_POST["ph"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH); }
if(isset($_POST["add"])){ $Add = filter_var($_POST["add"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH); } 
if(isset($_POST["usrn"])){ $UserName = filter_var($_POST["usrn"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH); }
if(isset($_POST["sex"])){ $Gen = filter_var($_POST["sex"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH); }
$query = "Insert into login (UserName,Password) values('".$UserName."','".$Psw."')";
$query2 ="Insert into userdata (userid,userFirstName,userLastName,userEmail,userAddress, userContactNumber, userGender,userdob)
values ('".$Email."','".$Fn."','".$Ln."','".$UserName."','".$Add."','".$Ph."','".$Gen."','".$DOB."')";
$result = mysqli_query($conn, $query);// or die(mysql_error());
$result2 = mysqli_query($conn,$query2);// or die(mysql_error());
if(result1 && result2) {
header('Location:userlogin.html');
}
else {
echo (0);
}
?>