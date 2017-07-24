<!DOCTYPE html>
<html>
<head>
<title>Payment Options</title>
</head>
<body>
<?php
include("includes/db.php");

?>
<div>
<br>
<br>
<h2 align="center">Payment Options For You :</h2>
<?php 
$ip = getIp();
$get_customer = "select * from customers where customer_ip='$ip'";
$run_customer = mysqli_query($con, $get_customer);
$customer = mysqli_fetch_array($run_customer);
$customer_id = $customer['customer_id'];

?>
<br>
<br>
<b>Pay With </b>&nbsp; &nbsp; <a href="http://www.paypal.com"><img src="paypal1.jpg" width="400" height="200" ></a><b>&nbsp;&nbsp; Or <a href ="order.php?c_id=<?php echo $customer_id; ?>"> &nbsp;Cash On Delivery</a></b>
<br>
<br>
<b>If You Selected "Cash On Delivery" option then please check your email or account to find the Invoice No for your orders</b>







</div>