<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="../css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="../css/style.css" type="text/css" rel="stylesheet" media="all">
<!--js-->
<script src="../js/jquery-1.11.1.min.js"></script> 
<script src="../js/modernizr.custom.js"></script>

</head>
<body id="h">
<!--banner-->
	<div class="banner about-bnr">
		<div class="banner-info about-bnr-info">
			<div class="container">
				
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="../images/title.png">
					
				</div>			
				<!--navigation-->
				
				<!--navigation-->
			</div>
		</div>
	</div>
	<!--//banner-->
	<!-- list -->
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <ul class="nav navbar-nav">
<li><a href="../index.html" class="active">Home</a></li>			
								<li><a href="../veggie.html">Pizza</a></li>												
								<li><a href="../drink.html">Drinks</a></li>		
								<li><a href="../dessert.html">Desserts</a></li>		
								<li><a href="../gallery.html">Gallery</a></li>
    </ul>
  
  </div>
</nav>
  

<?php
$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "wplproject";

		//connect to db
		$conn = new mysqli($servername, $username, $password,$dbname);
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id,product_code ,product_name,product_desc,price from products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
	<tr><td><a href='AdminLoggedIn.php'>Back</a></td></tr>
	<tr><th> Id</th><th>Product Code</th><th>Product Name</th><th>product Description</th><th>Price</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["product_code"]."</td><td>".$row["product_name"]."</td><td>".$row["product_desc"]."</td><td>".$row["price"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();

?>

<div class="footer">
		<div class="container">
			<div class="col-md-3 footer-left">
				<h4>Address</h4>
				<ul>
					<li>17580 Preston Rd</li>
					<li>Dallas, TX 75252</li>
					<li>(972)713-9696</li>
				</ul>					
			</div>
			<div class="col-md-3 footer-left">
				<h4>Popular</h4>
				<ul>
					<li><a href="#">ITALIAN MEATBALL</a></li>
					<li><a href="#">VEGGIE LOVER'S</a></li>
					<li><a href="#">FIVE PEPPER PEPPERONI</a></li>
					<li><a href="#">GLUTEN-FREE CHEESE PIZZA</a></li>
				</ul>
			</div>
			<div class="col-md-3 footer-left">
				<h4>Details</h4>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>		
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<div class="col-md-3 footer-right">
				<p> �UTDPizza|All rights reserved </p>
				<div class="icons">
				<ul>
					<li><a href="https://twitter.com/nepapizzareview" class="twitter"> </a></li>
					<li><a href="https://www.facebook.com/Dominos" class="twitter facebook"> </a></li>
					<li><a href="https://www.linkedin.com/company/pizza-hut" class="twitter linkedin"> </a></li>
				</ul>
			</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//footer-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>


</body>
</html>