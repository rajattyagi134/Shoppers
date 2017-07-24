<!DOCTYPE>

<html>

<head>

<title>Insert New Category</title>

<style type="text/css">

form{margin:18%;}

</style>

</head>

<body>


<form action ="" method= "post">

<h1><b>Insert New Category</b></h1> <input type="text" name="cat_title"/>

<input type = "submit" name = "insert_cat" value="Insert New Category"/>

</form>

<?php

include("includes/db.php");

if(isset($_POST['insert_cat'])){
	
	$cat_title = $_POST['cat_title'];
	
	$insert_cat = "insert into categories (cat_title) values ('$cat_title')";
	
	$run_cat = mysqli_query($con, $insert_cat);
	
	if($run_cat){
		
		echo"<script>alert(' New Category Has Been Inserted')</script>";
		echo "<script>window.open('index.php?view_cats','_self')</script>";
		
	}
}

?>

</body>

</html>