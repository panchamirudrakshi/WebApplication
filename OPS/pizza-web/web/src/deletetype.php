<?php
$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "wplproject";

		//connect to db
		$conn = new mysqli($servername, $username, $password,$dbname);
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
$result = mysqli_query($conn,"SELECT * FROM type");
echo "<table class='table table-striped table-bordered table-hover'>
<thead>
<tr>
<th>ID</th>
<th>Description</th>
<th>Delete</th>   
</tr>
</thead>";
while($row = mysqli_fetch_array($result)) 
{
echo "<tbody data-link='row' class='rowlink'>";
echo "<tr>";
echo "<td>" . $row['typeId'] . "</td>";
echo "<td>" . $row['typeDescription'] . "</td>";
echo "<td><a href=\"delete_type.php?typeId=".$row['typeId']."\">Delete</a></td>";
echo "</tr>";
echo "</tbody>";    
}
echo "</table>";
mysqli_close($conn);
?>