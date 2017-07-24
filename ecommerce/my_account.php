<!DOCTYPE>

<?php
session_start();
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

<!-----<a href="index.php"><img id="logo" src="images/logo.jpg" /></a>---->
<a href="../index.php"><img id="bann" src="images/bann.jpg" />

</div>

<!---Header ends here---->


<!---Navigation bar starts here---->

<div class="menubar">

<ul id="menu">

<li><a href="../index.php">Home</a></li>
<li><a href="../all_products.php">All Products</a></li>
<li><a href="customer/my_account.php">My Account</a></li>
<li><a href="#">Sign Up</a></li>
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

<div id="sidebar_title">My Account:</div>

<ul id="cats">

<?php

$user = $_SESSION ['customer_email'];

$get_img = "select * from customers where customer_email='$user'";

$run_img = mysqli_query($con, $get_img);

$row_img = mysqli_fetch_array($run_img);

$c_image = $row_img['customer_image'];

$c_name = $row_img['customer_name'];

echo "<p style='text-align:center;'><img src='customer_images/$c_image' width='150' height='150' />";

 ?>

<li><a href="my_account.php?my_orders">My Orders</a></li>
<li><a href="my_account.php?edit_account">Edit Account</a></li>
<li><a href="my_account.php?change_pass">Change Password</a></li>
<li><a href="my_account.php?delete_account">Delete Account</a></li>
<li><a href="logout.php">Logout</a></li>

</ul>

</div>

<div id="content_area">

<?php cart(); ?>

<div id="shopping_cart">

<span style="float:right;font-size:17px; padding:5px; line-height:40px; ">

<?php 
if (isset($_SESSION['customer_email'])){
	
	echo "<b>Welcome:</b>" . $_SESSION['customer_email'];
	
}



?>

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

<?php 

    if(!isset ($_GET['my_orders'])){
	if(!isset ($_GET['edit_account'])){
	if(!isset ($_GET['change_pass'])){
	if(!isset ($_GET['delete_account'])){
	
	echo "
	<h2 style='padding:10px; font-size:25px;'>Welcome:$c_name</h2><br>
	<marquee> <a href='my_account.php?my_orders'><b style='font-size:20px'>You can see your order status by clicking here</b></a></marquee>" ;
	

	}

	}
	
	}
	
	}
	?>

	<?php 
	
	if(isset($_GET['change_pass'])){
		
     include("change_pass.php");
		
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