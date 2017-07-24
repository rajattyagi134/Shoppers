<?php 

session_start();
 
if(!$_SESSION['admin_name']){
	
	header('location:admin_login.php?error=You are not an Administrator');
	
	
}


?>


<!DOCTYPE>




<html>

<head>

<title>This Is Admin Panel</title>
<link rel="stylesheet" href="styles/style.css" media="all" />

</head>

<body>  

<div class="main_wrapper">

<div id="header"></div>
<h3 align='center' Welcome: <font size='4' color='red'>
<?php echo $_SESSION['admin_name'];?></font></h3>
<h2 align='center'><?php echo @$_GET['logged']; ?></h2>

<div id="right">
<h2 style="text-align:center;">Manage Content</h2>

<a href="index.php?insert_product">Insert New Product</a>
<a href="index.php?view_products">View All Products</a>
<a href="index.php?insert_cat">Insert New Category</a>
<a href="index.php?view_cats">View All Categories</a>
<a href="index.php?insert_brand">Insert New Brand</a>
<a href="index.php?view_brands">View All Brands</a>
<a href="index.php?view_customers">View Customers</a>
<a href="index.php?view_orders">View Orders</a>
<a href="index.php?view_payments">View Payments</a>
<a href="admin_login.php">Admin Logout</a>

</div>

<div id="left">

<?php 

if(isset($_GET['insert_product'])){
	
	include("insert_product.php");
}

if(isset($_GET['view_products'])){
	
	include("view_products.php");
}

if(isset($_GET['edit_pro'])){
	
	include("edit_pro.php");
}

if(isset($_GET['insert_cat'])){
	
	include("insert_cat.php");
}

if(isset($_GET['view_cats'])){
	
	include("view_cats.php");
}

if(isset($_GET['edit_cat'])){
	
	include("edit_cat.php");
}


if(isset($_GET['insert_brand'])){
	
	include("insert_brand.php");
}

if(isset($_GET['view_brands'])){
	
	include("view_brands.php");
}

if(isset($_GET['edit_brand'])){
	
	include("edit_brand.php");
}


if(isset($_GET['view_customers'])){
	
	include("view_customers.php");
}


if(isset($_GET['view_orders'])){
	
	include("view_orders.php");
}

?>

</div>

</div>

<!---footer starts here---->

<div id="footer" bgcolor="yellow">
<h2 style="text-align:center; padding-top:30px;"  >&copy; 2017 Designed & Developed By: B.Tech(C.S.E) 2013 batch Under Er.Ashish Gupta</h2>


</div>

<!---Footer ends here---->


</body>

</html>