<?php 

session_start();
 
 if(!$_SESSION['admin_name']){
	 header('location:admin_login.php?error=You are not an Administrator');
 }

include ("includes/db.php");


$admin_name = @$_SESSION['admin_name'];

if(isset($_GET['delete_order'])){
	$order_id = $_GET['delete_order'];
	$delete_order = "delete from pending_orders where order_id='$delete_id' ";
	$run_delete = mysqli_query($con,$delete_order);
	if($run_delete){
	echo "<script>alert('order has been deleted!')</script>";
	echo "<script>window.open('index.php?view_orders','_self')</script>";
}
}
?>

