<?php 

include ("includes/db.php");

?>

<div>

<form method="post" action="">

<table width="500" height="200" align="center" bgcolor="skyblue">

<tr align="center">

<td colspan="3"><h2>Login or Register to Buy!!</h2></td>

</tr>

<tr>
   
<td align="right"><b>Email:</b></td>

<td><input type="text" name="email" placeholder="enter email" required/></td>

</tr>

<tr>

<td align="right"><b>Password:</b></td>

<td><input type="password" name="pass" placeholder="enter password" required/></td>

</tr>

<tr>

<td align="right"><b>Catchpa:</b></td>

<td><input type="text" name="cap" placeholder="enter catchpa" required/><img src='catchpa.php'></td>

</tr>

<tr align="center">

<td colspan="3"><a href="checkout.php?forgot_pass">Forgot Password? </a></td>

</tr>

<tr align="center">

<td colspan="3"><input type="submit" name="login" value="Login" /></td>

</tr>

</table>

<h2 style="float:right; padding:15px;"><a href="customer_register.php" style="text-decoration:none";>New User? Register Here </a></h2>

</form>

<?php 

if(isset($_GET['forgot_pass'])){
	
	echo"   
	
	<div align='center'>
	<b>Enter your email below, we'll send your password to your email</b><br><br>
	<form action='' method='post'>
	<input type='text' name='c_email' placeholder='Enter your Email' required />
	<input align='center' type='submit' name='forgot_pass' value='Send Me Password' />
	</form>
	</div>
	
        ";

	if(isset($_POST['forgot_pass'])){
		
		$c_email = $_POST['c_email'];
		$sel_c = "select * from customers where customer_email='$c_email'";
		$run_c = mysqli_query($con, $sel_c);
		$check_c = mysqli_num_rows($run_c);
		$row_c = mysqli_fetch_array($run_c);
		$c_name = $row_c['customer_name'];
		$c_pass = $row_c['customer_pass'];
		if($check_c==0){
			echo"<script>alert('This email doesnot exist')</script>";
			exit();	
		}
		
		else{
			$from = 'rajattyagi134@gmail.com';
			$subject = 'Your Password';
			$message = "
			<html>
			<h3>Dear $c_name</h3>
			<p>You Requested for your password at www.myonlineshop.com</p>
			<b>Your Password is</b><span style='color:red;'>$c_pass</span>
			<h3>Thanks for using our website</h3>
			</html>
			
			";
			
			mail($c_email,$subject,$message,$from);
			echo"<script>alert('Password sent successfully')</script>";
			echo"<script>window.open('checkout.php','_self')</script>";
			
		}
		
		
	}
	
	
}


?>

<?php 

if(isset($_POST['login'])){
	
	$c_email = $_POST['email'];
	
	$c_pass = $_POST['pass'];
	
	$sel_c = "select * from customers where customer_pass='$c_pass' AND customer_email='$c_email'";
	
	$run_c = mysqli_query($con, $sel_c);
	
	$check_customer = mysqli_num_rows($run_c);
	
	if ($check_customer==0){
		
		echo "<script>alert('Password or email is incorrect, plz try again!!')</script>";
		
		exit();
	}
	
	$ip = getIp();
	
	$sel_cart = "select * from cart where ip_add='$ip'";
	
	$run_cart = mysqli_query($con, $sel_cart);
	
	$check_cart = mysqli_num_rows($run_cart);
	
	
	if($check_customer>0 AND check_cart==0){
		
		$_SESSION['customer_email']=$c_email;
		
		echo "<script>alert('You logged in successfully, Thanks!!'</script>";
		
		echo "<script>window.open('customer/my_account.php','self')</script>";
		
		
	}
	
	else{
		
	$_SESSION['customer_email']=$c_email;
	
		echo "<script>alert('You logged in successfully, Thanks!!'</script>";
		
		echo "<script>window.open('checkout.php','self')</script>";
	
	
	
	}
	
}


?>





</div>