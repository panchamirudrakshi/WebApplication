<?php
$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "wplproject";

		//connect to db
		$conn = new mysqli($servername, $username, $password,$dbname);
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}

 
$desertId = $_GET['desertId'];  
$dessertName = $_GET['dessertName']; 
$desertDescription = $_GET['desertDescription'];  
$desertPrice = $_GET['desertPrice']; 

if(count($_POST)>0) {
mysqli_query($conn,"UPDATE desertType set dessertName='" . $_POST["dessertName"] . "',desertDescription='" . $_POST["desertDescription"] . "',desertPrice='" . $_POST["desertPrice"] . "'  WHERE desertId='" . $_POST["desertId"] . "'");
echo "Record Modified Successfully"; 
}
mysqli_close($conn);
header("Location: AdminLoggedIn.php");
?> 


