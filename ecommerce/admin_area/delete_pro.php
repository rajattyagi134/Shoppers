<?php 

session_start();
 
 if(!$_SESSION['admin_name']){
	 header('location:admin_login.php?error=You are not an Administrator');
 }

include ("includes/db.php");


$admin_name = @$_SESSION['admin_name'];

if(isset($_GET['delete_pro'])){
	$delete_id = $_GET['delete_pro'];
	$delete_pro = "delete from products where product_id='$delete_id' ";
	$run_delete = mysqli_query($con,$delete_pro);
	if($run_delete){
	echo "<script>alert('Your product has been deleted!')</script>";
	echo "<script>window.open('index.php?view_products','_self')</script>";
}
}
?>



