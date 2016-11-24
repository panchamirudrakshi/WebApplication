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


$drinkId = mysqli_real_escape_string($conn, $_POST['drinkId']);
$drinkName = mysqli_real_escape_string($conn, $_POST['drinkName']);
 $drinkDescription = mysqli_real_escape_string($conn, $_POST['drinkDescription']);
$drinkPrice = mysqli_real_escape_string($conn, $_POST['drinkPrice']);

// attempt insert query execution
$sql = "INSERT INTO drinkType (drinkId,drinkName,drinkDescription,drinkPrice) VALUES ('$drinkId', '$drinkName','$drinkDescription','$drinkPrice')";


if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

$conn->close();
@header('location:adddrinktype.html');
?>