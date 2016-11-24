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


$typeId = mysqli_real_escape_string($conn, $_POST['typeId']);
$typeDescription = mysqli_real_escape_string($conn, $_POST['typeDescription']);
 
// attempt insert query execution
$sql = "INSERT INTO type (typeId,typeDescription) VALUES ('$typeId', '$typeDescription')";





if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

$conn->close();
@header('location:addtype.html');
?>