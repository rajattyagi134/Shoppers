<?php 

include ("includes/db.php");

?>
<body bgcolor='pink'>

<div>

<form method="post" action="">
<br>
<br>
<br>

<table width="500" height="200" align="center" bgcolor="skyblue">

<tr align="center">

<td colspan="3"><h2>Please Enter Your UserID & Email ID!!</h2></td>

</tr>

<tr>

<td align="right"><b>User ID:</b></td>

<td><input type="text" name="email" placeholder="enter UserID" required/></td>

</tr>

<tr>

<td align="right"><b>Email ID:</b></td>

<td><input type="text" name="email" placeholder="enter email" required/></td>

</tr>

<tr>

<td align="right"><b>Catchpa:</b></td>

<td><input type="text" name="cap" placeholder="enter catchpa" required/><img src='catchpa.php'></td>

</tr>

<tr align="center">

<td colspan="3"><input type="submit" name="submit" value="Submit" /></td>

</tr>

</table>

</form>

<?php 

if(isset($_POST['submit'])){
	
		echo "<script>alert('Your Password has been sent To your Email ID, plz check Your email and then change your Password!!')</script>";
		
	     echo "<script>window.open('checkout.php','self')</script>";
	}
	


?>

</div>

<!---footer starts here---->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div id="footer" bgcolor="yellow">
<h2 style="text-align:center; padding-top:30px;"  >&copy; 2017 Designed & Developed By: B.Tech(C.S.E) 2013 batch Under Er.Ashish Gupta</h2>


</div>

<!---Footer ends here---->

</body>