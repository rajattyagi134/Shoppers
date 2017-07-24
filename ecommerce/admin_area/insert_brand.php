<!DOCTYPE>

<html>

<head>

<title>Insert New Brand</title>

<style type="text/css">

form{margin:18%;}

</style>

</head>

<body>


<form action ="" method= "post">

<h1><b>Insert New Brand</b></h1> <input type="text" name="brand_title"/>

<input type = "submit" name = "insert_brand" value="Insert New Brand"/>

</form>

<?php

include("includes/db.php");

if(isset($_POST['insert_brand'])){
	
	$brand_title = $_POST['brand_title'];
	
	$insert_brand = "insert into brands (brand_title) values ('$brand_title')";
	
	$run_brand = mysqli_query($con, $insert_brand);
	
	if($run_brand){
		
		echo"<script>alert(' New Brand Has Been Inserted')</script>";
		echo "<script>window.open('index.php?view_brands','_self')</script>";
		
	}
}

?>

</body>

</html>