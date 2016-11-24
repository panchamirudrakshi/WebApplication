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

// create the query
$sql = "select img from pizza where pizzaId=1";
// the result of the query
$result = mysqli_query($sql) or die("Invalid query: " .mysql_error());
// there should only be 1 result (if img_id = the primary index)
$pic = mysqli_fetch_array($result);
// show the image
echo "<img src='ops/".$pic['img']."' width='300' height='300'/>";
?>