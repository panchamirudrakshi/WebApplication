<?php
$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "wplproject";

		//connect to db
		$conn = new mysqli($servername, $username, $password,$dbname);
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}

$typeId = $_GET['typeId'];  
$typeDesc = $_GET['typeDescription']; 

if(count($_POST)>0) {
mysqli_query($conn,"UPDATE type set typeDescription='" . $_POST["typeDescription"] . "'  WHERE typeId='" . $_POST["typeId"] . "'");
echo "Record Modified Successfully"; 
}
mysqli_close($conn);
header("Location: AdminLoggedIn.php");
?> 


