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


$pizzaId = mysqli_real_escape_string($conn, $_POST['pizzaId']);
$pizzaName = mysqli_real_escape_string($conn, $_POST['pizzaName']);
$pizzaDescription = mysqli_real_escape_string($conn, $_POST['pizzaDescription']);
$basePrice = mysqli_real_escape_string($conn, $_POST['basePrice']);
// attempt insert query execution
$sql = "INSERT INTO pizza (pizzaId,pizzaName,pizzaDescription,basePrice) VALUES ('$pizzaId', '$pizzaName' ,'$pizzaDescription','$basePrice')";

if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

$conn->close();
@header('location:addpizza.html');
?>