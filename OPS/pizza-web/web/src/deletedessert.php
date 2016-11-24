<?php
$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "wplproject";

		//connect to db
		$conn = new mysqli($servername, $username, $password,$dbname);
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
$result = mysqli_query($conn,"SELECT * FROM desertType");
echo "<table class='table table-striped table-bordered table-hover'>
<thead>
<tr>
<th>Dessert ID</th>
<th>Dessert Name</th>
<th>Description</th>
<th>Price</th>
<th>Delete</th>   
</tr>
</thead>";
while($row = mysqli_fetch_array($result)) 
{
echo "<tbody data-link='row' class='rowlink'>";
echo "<tr>";
echo "<td>" . $row['desertId'] . "</td>";
echo "<td>" . $row['dessertName'] . "</td>";
echo "<td>" . $row['desertDescription'] . "</td>";
echo "<td>" . $row['desertPrice'] . "</td>";
echo "<td><a href=\"delete_typedessert.php?desertId=".$row['desertId']."\">Delete</a></td>";
echo "</tr>";
echo "</tbody>";    
}
echo "</table>";
mysqli_close($conn);
?>