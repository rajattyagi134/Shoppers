<?php 

session_start();
 
 if(!$_SESSION['admin_name']){
	 header('location:admin_login.php?error=You are not an Administrator');
 }

include ("includes/db.php");


$admin_name = @$_SESSION['admin_name'];

if(isset($_GET['delete_brand'])){
	$delete_id = $_GET['delete_brand'];
	$delete_brand = "delete from brands where brand_id='$delete_id' ";
	$run_delete = mysqli_query($con,$delete_brand);
	if($run_delete){
	echo "<script>alert('One Brand has been deleted!')</script>";
	echo "<script>window.open('index.php?view_brands','_self')</script>";
}
}
?>

