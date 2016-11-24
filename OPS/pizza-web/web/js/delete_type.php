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
// get value of id that sent from address bar 
$typeId=$_GET['typeIid'];

// Delete data in mysql from row that has this id 
$sql="DELETE FROM type WHERE typeId='$typeId'";
$result=mysqli_query($sql);

// if successfully deleted
if($result){
echo "Deleted Successfully";
echo "<BR>";
echo "<a href='deletetype.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?> 

<?php
// close connection 
mysql_close();
?>