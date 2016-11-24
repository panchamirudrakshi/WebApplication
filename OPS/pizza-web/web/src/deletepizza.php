<?php
$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "wplproject";

		//connect to db
		$conn = new mysqli($servername, $username, $password,$dbname);
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
$result = mysqli_query($conn,"SELECT * FROM pizza");
echo "<table class='table table-striped table-bordered table-hover'>
<thead>
<tr>
<th>Pizza ID</th>
<th>Pizza Name</th>
<th>Description</th>
<th>Price</th>
<th>Delete</th>   
</tr>
</thead>";
while($row = mysqli_fetch_array($result)) 
{
echo "<tbody data-link='row' class='rowlink'>";
echo "<tr>";
echo "<td>" . $row['pizzaId'] . "</td>";
echo "<td>" . $row['pizzaName'] . "</td>";
echo "<td>" . $row['pizzaDescription'] . "</td>";
echo "<td>" . $row['basePrice'] . "</td>";
echo "<td><a href=\"delete_typepizza.php?pizzaId=".$row['pizzaId']."\">Delete</a></td>";
echo "</tr>";
echo "</tbody>";    
}
echo "</table>";
mysqli_close($conn);

?>