<?php 

session_start();

?>



<html>

<head>

<title>Admin Login</title>

</head>

<body bgcolor='pink'>

<form action='admin_login.php' method='post'>

<br>
<table width='500' height='300' align='center' border='6'>

<tr>
<td colspan='5' align='center' bgcolor='skyblue'>
<h2>Admin Login</h2></td>
</tr>

<tr>
<th align='right'>User Name:</th>
<td><input type='text' name='admin_name' placeholder="admin name" required/></td>
</tr>

<tr>
<th align='right'>User Password:</th>
<td><input type='password' name='admin_pass' placeholder="admin password" required/></td>
</tr>

<tr>

<td align="right"><b>Catchpa:</b></td>
<td><b><input type="text" name="cap"  placeholder="catchpa" required/><img src='catchpa.php'></b></td>

</tr>

<tr>
<td colspan="6" align="center"><input type="submit" name="submit" value="Login"/>
</td>
</tr>

<tr align="right">

<td colspan="3"><a href="admin_forgot_pass.php">Forgot Password? </a></td>

</tr>

</table>

<h2 style="float:center; padding:15px;"><a href="admin_register.php" style="text-decoration:none";>New Admin? Register Here </a></h2>
<h2 style="float:center; padding:15px;"><a href="../index.php" style="text-decoration:none";>Home </a></h2>


</form>

<h2 align='center'><?php echo @$_GET['logout']; ?> </h2>
<h2 align='center'><?php echo @$_GET['error']; ?> </h2>

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

if(isset($_POST['submit'])){
	
	$admin_name = $_SESSION['admin_name'] = $_POST['admin_name'];
	$admin_pass = $_POST['admin_pass'];
	
	$query = "select * from admin_login where user_name='$admin_name' AND user_pass = '$admin_pass'";
	
	$run = mysqli_query($con, $query);
	
	if(mysqli_num_rows($run)==1){
		
		echo "<script>window.open('index.php?logged=You are logged in Successfully!','_self')</script>";
		
		
	}
	
	else{
		
		echo"<script>alert('Please Enter Valid Details')</script>";
		echo "<script>window.open('admin_login.php','_self')</script>";
	}
	
	}


?>