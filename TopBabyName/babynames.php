//@author : Panchami Rudrakshi
<?php
$servername = "localhost";
$username = "root"; //set when creating the database
$password = "root"; //set when creating the database
$myDB = 'Baby';  //set when creating the database
$Year= $_GET['year'] ;

$conn=new mysqli("localhost","root","root","Baby"); //replace the username,password and DB name if changed
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo"<br>";
$babyboy = mysqli_query($conn,"SELECT * FROM BabyNames WHERE year = '".$Year."' AND gender = 'm' ");
$babygirl = mysqli_query($conn,"SELECT * FROM BabyNames WHERE year = '".$Year."' AND gender = 'f' ");

// Babyboy names
echo '<div id =babyboys>
<h1> Top 5 baby boy names </h1>
  </div>';
echo "<table border = '2'>
<tr>
<th>Name</th>
<th>Year</th>
<th>Ranking</th>
<th>Gender</th>
</tr>";
while ($row = mysqli_fetch_array($babyboy))
{
	echo "<tr>";
	echo "<td>" .$row['name']."</td>" ;
    echo "<td>" .$row['year']."</td>" ;
	echo "<td>" .$row['ranking']."</td>";
	echo "<td>" .$row['gender']."</td>";
	echo "</tr>";
}
echo "</table>";
echo "<br>";

// Babygirl names
echo '<div id = babygirls>
<h1> Top 5 baby girl names </h1>
  </div>';
echo "<table border = '2'>
<tr>
<th>Name</th>
<th>Year</th>
<th>Ranking</th>
<th>Gender</th>
</tr>";
while ($row = mysqli_fetch_array($babygirl))
{
	echo "<tr>";
	echo "<td>" .$row['name']."</td>" ;
	echo "<td>" .$row['year']."</td>" ;
	echo "<td>" .$row['ranking']."</td>";
	echo "<td>" .$row['gender']."</td>";
	echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
