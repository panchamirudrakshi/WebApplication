<?php
$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "wplproject";

		//connect to db
		$conn = new mysqli($servername, $username, $password,$dbname);
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
$result = mysqli_query($conn,"SELECT * FROM products");
echo "<table class='table table-striped table-bordered table-hover'>
<thead>
<tr>
<th>ID</th>
<th>Code</th>
<th>Name</th>
<th>Description</th>
<th>Price</th>
<th>Delete</th>   
</tr>
</thead>";
while($row = mysqli_fetch_array($result)) 
{
echo "<tbody data-link='row' class='rowlink'>";
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['product_code'] . "</td>";
echo "<td>" . $row['product_name'] . "</td>";
echo "<td>" . $row['product_desc'] . "</td>";
echo "<td>" . $row['price'] . "</td>";
echo "<td><a href=\"delete_typeproduct.php?id=".$row['id']."\">Delete</a></td>";
echo "</tr>";
echo "</tbody>";    
}
echo "</table>";
mysqli_close($conn);
?>