<?php
$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "wplproject";

		//connect to db
		$conn = new mysqli($servername, $username, $password,$dbname);
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
$result = mysqli_query($conn,"SELECT * FROM drinkType");
echo "<table class='table table-striped table-bordered table-hover'>
<thead>
<tr>
<th>Drink ID</th>
<th>Drink Name</th>
<th>Description</th>
<th>Drink Price</th>
<th>Delete</th>   
</tr>
</thead>";
while($row = mysqli_fetch_array($result)) 
{
echo "<tbody data-link='row' class='rowlink'>";
echo "<tr>";
echo "<td>" . $row['drinkId'] . "</td>";
echo "<td>" . $row['drinkName'] . "</td>";
echo "<td>" . $row['drinkDescription'] . "</td>";
echo "<td>" . $row['drinkPrice'] . "</td>";
echo "<td><a href=\"delete_typedrink.php?drinkId=".$row['drinkId']."\">Delete</a></td>";
echo "</tr>";
echo "</tbody>";    
}
echo "</table>";
mysqli_close($conn);
?>