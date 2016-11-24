<?php
$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "wplproject";

		//connect to db
		$conn = new mysqli($servername, $username, $password,$dbname);
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}

$id = $_GET['id'];  
$product_code = $_GET['product_code']; 
$product_name= $_GET['product_name'];  
$product_desc = $_GET['product_desc']; 
$price = $_GET['price']; 
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE pizza set product_code='" . $_POST["product_code"] . "',product_name='" . $_POST["product_name"] . "',product_desc='" . $_POST["product_desc"] . "',price='" . $_POST["price"] . "'  WHERE id='" . $_POST["id"] . "'");
echo "Record Modified Successfully"; 
}
mysqli_close($conn);
header("Location: AdminLoggedIn.php");
?> 

