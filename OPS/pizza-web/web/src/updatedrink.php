<?php
$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "wplproject";

		//connect to db
		$conn = new mysqli($servername, $username, $password,$dbname);
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}

 
$drinkId = $_GET['drinkId'];  
$drinkName = $_GET['drinkName']; 
$drinkDescription = $_GET['drinkDescription'];  
$drinkPrice = $_GET['drinkPrice']; 

if(count($_POST)>0) {
mysqli_query($conn,"UPDATE drinkType set drinkName='" . $_POST["drinkName"] . "',drinkDescription='" . $_POST["drinkDescription"] . "',drinkPrice='" . $_POST["drinkPrice"] . "'  WHERE drinkId='" . $_POST["drinkId"] . "'");
echo "Record Modified Successfully"; 
}
mysqli_close($conn);
header("Location: AdminLoggedIn.php");
?> 


