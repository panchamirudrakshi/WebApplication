<?php
$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "wplproject";

$conn = new mysqli($servername, $username, $password,$dbname);
		
				
if(isset($_POST["email"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }
    
    $username = filter_var($_POST["email"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
    
    $statement = $conn->prepare("SELECT UserName FROM login WHERE UserName=?");
    //$statement->bind_param('s', $username);
    $statement->execute();
    $statement->bind_result($username);
    if($statement->fetch()){
        die('0');
    }else{
        die('1');
    }
}
?>