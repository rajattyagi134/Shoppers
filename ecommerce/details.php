<!DOCTYPE>

<?php
include("functions/functions.php");
?>

<!---Html starts here---->
<html>

<!---Head starts here---->

<head>


<!---Title starts here---->

<title>My Online Shop</title>

<!---Title ends here---->

<link rel="stylesheet" href="styles/style.css" media="all" />

</head>

<!---Head ends here---->


<!---Body starts here---->


<body>


<!---Main container starts here---->

<div class="main_wrapper">

<!---Header starts here---->

<div class="header_wrapper">

<!---<img id="logo" src="images/logo.jpg" />--->
<a href="index.php"><img id="bann" src="images/bann.jpg" />

</div>

<!---Header ends here---->


<!---Navigation bar starts here---->

<div class="menubar">

<ul id="menu">

<li><a href="#">Home</a></li>
<li><a href="#">All Products</a></li>
<li><a href="#">My Account</a></li>
<li><a href="#">Sign Up</a></li>
<li><a href="#">Shopping Cart</a></li>
<li><a href="contact.php">Contact Us</a></li>
 


<div id="form">
<form method="get" action="results.php" enctype="multipart/form-data">
<input type="text" name="user_query" placeholder="Search a Product" />
<input type="submit" name="search" value="Search" />
</form>
</ul>

</div>

</div>

<!---Navigation ends here---->


<!---Content wrapper starts here---->
<div class="content_wrapper">

<div id="sidebar">

<div id="sidebar_title">Categories</div>

<ul id="cats">

<?php getCats(); ?>

</ul>


<div id="sidebar_title">Brands</div>

<ul id="cats">

<?php getBrands(); ?>

</ul>

</div>

<div id="content_area">

<div id="shopping_cart">

<span style="float:right;font-size:18px; padding:5px; line-height:40px; ">
Welcome Guest!! <b style="color:yellow">Shopping Cart-</b>Total Items: Total Price:<a href="cart.php" style="color:yellow">Go to Cart</a>



</span>

</div>

<div id="products_box">

<?php

if(isset($_GET['pro_id'])){
	
	$product_id = $_GET['pro_id'];

	$get_pro = "select * from products where product_id='$product_id'";
	
	$run_pro = mysqli_query($con, $get_pro);
	
	while($row_pro=mysqli_fetch_array($run_pro)){
		
		$pro_id = $row_pro['product_id'];
		$pro_cat = $row_pro['product_cat'];
		$pro_brand = $row_pro['product_brand'];
		$pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_price'];
		$pro_image = $row_pro['product_image'];
		$pro_desc = $row_pro['product_desc'];
		
		echo " 
		<div id='single_product'>
		
		<h3>$pro_title</h3>
		
		<img src='admin_area/product_images/$pro_image' width='400' height:'300' />
		
		<p><b> $ $pro_price</b></p>
		<p>$pro_desc</p>
		
		<a href='index.php' style='float:left;'>Go Back </a>
		
		<a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
		
		</div>
		 
		";
		
		
	}
}
	?>

</div>
</div>

</div>

<!---content wrapper ends here---->


<!---footer starts here---->

<div id="footer">
<h2 style="text-align:center; padding-top:30px;">&copy; 2017 Designed &Developed By: B.Tech(C.S.E) 2013 batch Under Er.Ashish Gupta</h2>


</div>

<!---Footer ends here---->


</div>

<!---Main container ends here-------->
</body>

<!---Body ends here---->


</html>

<!---Html ends here---->