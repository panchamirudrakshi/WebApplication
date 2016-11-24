<?php
 
$button = $_GET ['submit'];
$search = $_GET ['search']; 
 
if(!$button)
echo "you didn't submit a keyword";
else
{
if(strlen($search)<=1)
echo "Search term too short";
else{
echo "You searched for <b>$search</b> <hr size='1'></br>";
$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "wplproject";

		//connect to db
		$conn = new mysqli($servername, $username, $password,$dbname);
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$search_exploded = explode (" ", $search);
 
$x = NULL; $construct = NULL;

foreach($search_exploded as $search_each)
{
$x++;
if($x==1)
$construct .="keywords LIKE '%$search_each%'";
else
$construct .="AND keywords LIKE '%$search_each%'";
 
}
 
$construct ="SELECT * FROM searchengine WHERE $construct";
$run = mysqli_query($construct);
 
$foundnum = mysqli_num_rows($run);
 
if ($foundnum==0)
echo "Sorry, no match";
else
{
echo "$foundnum results found !<p>";
 
while($runrows = mysqli_fetch_assoc($run))
{
$title = $runrows ['title'];
$desc = $runrows ['description'];
$url = $runrows ['url'];
 
echo "
<a href='$url'><b>$title</b></a>
<br>
$desc<br>
<a href='$url'>$url</a><p>
";
 
}
}
 
}
}
 
?>