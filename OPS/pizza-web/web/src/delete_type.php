<?php
$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "wplproject";

		//connect to db
		$conn = new mysqli($servername, $username, $password,$dbname);
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}

$typeId = $_GET['typeId']; // $id is now defined

// or assuming your column is indeed an int
// $typeId = (int)$_GET['typeId'];

mysqli_query($conn,"DELETE FROM type WHERE typeId='".$typeId."'");
mysqli_close($conn);
header("Location: AdminLoggedIn.php");
?> 