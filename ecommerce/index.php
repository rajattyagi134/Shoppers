<?php
session_start();
include("functions/functions.php");
?>



<!DOCTYPE>



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

<!-----<a href="index.php"><img id="logo" src="images/logo.jpg" /></a>---->
<a href="index.php"><img id="bann" src="images/bann.jpg" />

<!---Header ends here---->


<!---Navigation bar starts here---->

<div class="menubar">

<ul id="menu">

<li><a href="index.php">Home</a></li>
<li><a href="all_products.php">All Products</a></li>
<li><a href="admin_area/admin_login.php">Admin</a></li>
<li><a href="customer_register.php">Sign Up</a></li>
<li><a href="cart.php">Shopping Cart</a></li>
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

<?php cart(); ?>

<div id="shopping_cart">

<span style="float:right;font-size:17px; padding:5px; line-height:40px; ">

<?php 
if (isset($_SESSION['customer_email'])){
	
	echo "<b>Welcome:</b>" . $_SESSION['customer_email'] . "<b style='color:yellow';>Your</b>";
	
}

else {
	
	echo "<b>Welcome Guest:</b>";
}

?>

 

<b style="color:yellow">Shopping Cart-</b>Total Items: <?php total_items(); ?> Total Price: <?php total_price(); ?><a href="cart.php" style="color:yellow">Go to Cart</a>

<?php 

if (!isset($_SESSION['customer_email'])){
	
	echo "<a href='checkout.php' style='color:orange'>Login</a>";
	
}

else {
	
	echo "<a href='logout.php' style='color:orange'>Logout</a>";
	
}

?>

</span>

</div>

<?php echo $ip=getIp(); ?>

<div id="products_box">

<?php getPro(); ?>
<?php getCatPro(); ?>
<?php getBrandPro(); ?>

</div>


</div>

</div>

<!---content wrapper ends here---->


<!---footer starts here---->

<div id="footer">
<h2 style="text-align:center; padding-top:20px;">&copy; 2017 Designed & Developed By: B.Tech(C.S.E) 2013 batch Under Er.Ashish Gupta</h2>


</div>

<!---Footer ends here---->


</div>

<!---Main container ends here-------->
</body>

<!---Body ends here---->


</html>

<!---Html ends here---->