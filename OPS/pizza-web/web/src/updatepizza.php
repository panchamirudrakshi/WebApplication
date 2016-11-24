<?php
$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "wplproject";

		//connect to db
		$conn = new mysqli($servername, $username, $password,$dbname);
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}

$pizzaId = $_GET['pizzaId'];  
$pizzaName = $_GET['pizzaName']; 
$pizzaDescription = $_GET['pizzaDescription'];  
$basePrice = $_GET['basePrice']; 

if(count($_POST)>0) {
mysqli_query($conn,"UPDATE pizza set pizzaName='" . $_POST["pizzaName"] . "',pizzaDescription='" . $_POST["pizzaDescription"] . "',basePrice='" . $_POST["basePrice"] . "'  WHERE pizzaId='" . $_POST["pizzaId"] . "'");
echo "Record Modified Successfully"; 
}
mysqli_close($conn);
header("Location: AdminLoggedIn.php");
?> 


