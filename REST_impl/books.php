<?php

$connection = new mysqli("localhost", "root", "root", "test") or die(mysqli_error());
$getData = "select * from book";
$qur = $connection->query($getData);

while($r = mysqli_fetch_assoc($qur)){


$msg[] = array("bookId" => $r['BookId'], "title" => $r['title'], "year" => $r['year'],"price" => $r['price'],"category" => $r['category']);
}
$json = $msg;

header('content-type: application/json');
echo json_encode($json);

@mysqli_close($conn);

?>