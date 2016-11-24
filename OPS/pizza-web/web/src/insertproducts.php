<?php
$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "wplproject";

		//connect to db
		$conn = new mysqli($servername, $username, $password,$dbname);
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$id = mysqli_real_escape_string($conn, $_POST['id']);
$product_code = mysqli_real_escape_string($conn, $_POST['product_code']);
$product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
$product_desc = mysqli_real_escape_string($conn, $_POST['product_desc']);
$product_img_name = mysqli_real_escape_string($conn, $_POST['product_img_name']);
$price = mysqli_real_escape_string($conn, $_POST['price']);
 
// attempt insert query execution
$sql = "INSERT INTO products (id,product_code,product_name,product_desc,product_img_name,price) VALUES ('$id', '$product_code','$product_name', '$product_desc','$product_img_name', '$price')";

if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
	header('Location:addproduct.html');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

$conn->close();
@header('location:addproduct.html');
?>
