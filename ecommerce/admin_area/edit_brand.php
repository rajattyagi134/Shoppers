<!DOCTYPE>

<?php
include("includes/db.php");

if (isset($_GET['edit_brand'])){
	
	$brand_id = $_GET['edit_brand'];
	
	$edit_brand = "select * from brands where brand_id='$brand_id' ";
	
 $run_edit = mysqli_query($con, $edit_brand);

$row_edit=mysqli_fetch_array($run_edit);
	
	$brand_edit_id = $row_edit['brand_id'];
	
	$brand_title = $row_edit['brand_title'];
	
}
?>

<html>

<head>

<title>Edit Brands</title>

<style type="text/css">

form{margin:18%;}

</style>

</head>

<body>


<form action ="" method= "post">

<h1><b>Edit This Brand</b></h1> <input type="text" name="brand_title1" value="<?php echo $brand_title; ?>" />

<input type = "submit" name = "update_brand" value="Update Brand"/>

</form>

</body>

</html>


<?php 

if (isset($_POST['update_brand'])){
	
	$brand_title123 = $_POST['brand_title1'];
	
	$update_brand = "update brands set brand_title= '$brand_title123' where brand_id = '$brand_edit_id'";
	
	$run_update = mysqli_query($con, $update_brand);
	
	if($update_brand){
		
		echo"<script>alert('Brand has been Updated!')</script>";
		echo "<script>window.open('index.php?view_brands','_self')</script>";
		
		
	}
	
	
	
	
	
	
	
}






?>