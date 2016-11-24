<?php
$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "wplproject";

		//connect to db
		$conn = new mysqli($servername, $username, $password,$dbname);
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}

$drinkId = $_GET['drinkId']; // $id is now defined
mysqli_query($conn,"DELETE FROM drinkType WHERE drinkId='".$drinkId."'");
mysqli_close($conn);
header("Location: AdminLoggedIn.php");
?> 