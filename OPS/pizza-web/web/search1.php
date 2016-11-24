<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<!--js-->
<script src="js/jquery-1.11.1.min.js"></script> 
<script src="js/modernizr.custom.js"></script>

</head>
<body id="h">
<!--banner-->
	<div class="banner about-bnr">
		<div class="banner-info about-bnr-info">
			<div class="container">
				
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="images/title.png">
					
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
<li><a href="index.html" class="active">Home</a></li>			
								<li><a href="veggie.html">Pizza</a></li>												
								<li><a href="drink.html">Drinks</a></li>		
								<li><a href="dessert.html">Desserts</a></li>		
								<li><a href="gallery.html">Gallery</a></li>
    </ul>
  
  </div>
</nav>
  
  
  <?php

$button = isset($_GET['submit']) ? $_GET['submit'] : '';
$search = isset($_GET['search']) ? $_GET['search'] : '';


if (!$button)    echo "You didn't submit a keyword.";
 else {


 if (strlen($search)<=1)
      echo "Search term too short";  

  else    {
      echo "You searched for <b>$search</b><hr size='1'>";

      $servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "wplproject";

		//connect to db
$conn=mysqli_connect($servername, $username, $password,$dbname);

		//$conn = new mysqli($servername, $username, $password,$dbname);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
            //explode search term
            $search_exploded = explode(" ",$search);

			
			foreach($search_exploded as $search_each){
	$x=0;
	$x++;
	$construct="";
	if($x==1){
		$construct .= " keywords LIKE '%$search_each%' or description like '%$search_each%'";
	}else{
		$construct .= " AND keywords LIKE '%$search_each%' AND description like '%$search_each%'";
	}
}

            


      $construct = "SELECT * FROM searchengine WHERE $construct";
      //echo out construct

     $run = mysqli_query($conn,$construct);

     $foundnum = mysqli_num_rows($run);

     if ($foundnum==0)
        echo "No results found";
     else
     {
        echo "$foundnum results found!<p>";

        while ($runrows = mysqli_fetch_assoc($run))
        {
         //Get data
         $ref = $runrows['title'];
      $filename = $runrows['description'];    $owner = $runrows['keywords'];
         $url = $runrows['url'];
         echo "
        <table>      
		  <tr>
            <td> $ref </td>   
            <td><a href='$url'>$url</a></td>
			<td><a href='index.html'>Back</a></td>
          </tr>   
		 
	    </table>
         ";
        }

     }
  } }
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
				<p> ©UTDPizza|All rights reserved </p>
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