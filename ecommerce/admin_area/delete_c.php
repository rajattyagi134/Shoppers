<?php 

session_start();
 
 if(!$_SESSION['admin_name']){
	 header('location:admin_login.php?error=You are not an Administrator');
 }

include ("includes/db.php");


$admin_name = @$_SESSION['admin_name'];

if(isset($_GET['delete_c'])){
	$delete_id = $_GET['delete_c'];
	$delete_c = "delete from customers where customer_id='$delete_id' ";
	$run_delete = mysqli_query($con,$delete_c);
	if($run_delete){
	echo "<script>alert('Customer has been deleted!')</script>";
	echo "<script>window.open('index.php?view_customers','_self')</script>";
}
}
?>

