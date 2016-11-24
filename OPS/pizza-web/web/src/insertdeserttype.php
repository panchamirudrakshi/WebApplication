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


$desertId = mysqli_real_escape_string($conn, $_POST['desertId']);
$dessertName = mysqli_real_escape_string($conn, $_POST['$dessertName']);
$desertDescription = mysqli_real_escape_string($conn, $_POST['desertDescription']);
$desertPrice = mysqli_real_escape_string($conn, $_POST['desertPrice']);
 
// attempt insert query execution
$sql = "INSERT INTO desertType (desertId,dessertName,desertDescription,desertPrice,typeId) VALUES ('$desertId','$dessertName','$desertDescription','$desertPrice')";





if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

$conn->close();
@header('location:adddeserttype.html');
?>