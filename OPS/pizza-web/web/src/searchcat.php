<?php
$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "wplproject";

		//connect to db
		$conn = new mysqli($servername, $username, $password,$dbname);
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
	

if(isset($_POST['submit']))
{
$selected_val = $_POST['options'];  // Storing Selected Value In Variable
echo "You have selected :" .$selected_val;  // Displaying Selected Value
}


 
if($_POST['options']=='type')
{
     @header('location:viewtypesearch.php');
   
}
else if($_POST['options']=='pizza')
{
     @header('location:viewpizzasearch.php');
     
}
else if($_POST['options']=='dessert')
{
     @header('location:viewdessertsearch.php');
}
else if($_POST['options']=='drink')
{
    @header('location:viewdrinksearch.php');
}
?>
