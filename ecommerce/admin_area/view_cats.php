<!DOCTYPE>

<html>

<head>

<title>View Categories</title>

<style type="text/css">
th,tr{border:3px groove #333;}
</style>

</head>

<body>

<table width="794" align="center" bgcolor="pink">

<tr align="center">

<td colspan='6'><h2>View All Categories</h2></td>

</tr>

<tr align="center" bgcolor="skyblue">
<th>Category Id</th>
<th>Category Title</th>
<th>Edit</th>
<th>Delete</th>

</tr>

<?php

include("includes/db.php");

$get_cats = "select * from categories";
$run_cats = mysqli_query($con, $get_cats);

while($row_cats = mysqli_fetch_array($run_cats)){
	
	$cat_id = $row_cats['cat_id'];
	$cat_title = $row_cats['cat_title'];

?>
<tr align="center">

<td><?php echo $cat_id; ?></td>
<td><?php echo $cat_title; ?></td>
<td><a href = "index.php?edit_cat=<?php echo $cat_id; ?>">Edit</a></td>
<td><a href = "delete_cat.php?delete_cat=<?php echo $cat_id; ?>">Delete</a></td>

</tr>

<?php } ?>


</table>

</body>

</html>