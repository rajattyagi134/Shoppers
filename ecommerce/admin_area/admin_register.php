
<html>

<head>

<title>Admin Register</title>

</head>

<body bgcolor='pink'>

<form action='admin_register.php' method='post' enctype="multipart/form-data">

<br>
<table width='500' height='300' align='center' border='6'>

<tr>
<td colspan='5' align='center' bgcolor='skyblue'>
<h2>Admin Register</h2></td>
</tr>

<tr>

<td align="right">Admin Name:</td>
<td><input type="text" name="user_name"  placeholder="admin name" required/></td>

</tr>

<tr>

<td align="right">Admin Password:</td>
<td><input type="password" name="user_pass"  placeholder="admin password" required/></td>

</tr>

<tr>

<td align="right">Catchpa:</td>
<td><input type="text" name="cap"  placeholder="catchpa" required/> <img src='catchpa.php'></td>

</tr>

<tr align="center">

<td colspan="6"><input type="submit" name="insert_user" value="Create Account" /></td>

</tr>

</table>

<h2 style="float:center; padding:15px;"><a href="admin_login.php" style="text-decoration:none";>Back </a></h2>

</form>

<h2 align='center'><?php echo @$_GET['logout']; ?> </h2>
<h2 align='center'><?php echo @$_GET['error']; ?> </h2>

<br>
<br>

<br>
<br>
<br>
<br>
<!---footer starts here---->

<div id="footer" bgcolor="yellow">
<h2 style="text-align:center; padding-top:30px;"  >&copy; 2017 Designed & Developed By: B.Tech(C.S.E) 2013 batch Under Er.Ashish Gupta</h2>


</div>

<!---Footer ends here---->

</body>

</html>
 
<?php
include("includes/db.php");

if(isset($_POST['insert_user'])){
	
	$user_name = $_POST['user_name'];
	$user_pass = $_POST['user_pass'];
	
	$insert_user = "insert into admin_login (user_name,user_pass) values ('$user_name','$user_pass')";
	
	$run_user = mysqli_query($con, $insert_user);
	
	if($run_user){
		
		echo"<script>alert(' Admin Has Been Registered Successfully!')</script>";
		echo "<script>window.open('admin_login.php','_self')</script>";
		
	}
}

?>