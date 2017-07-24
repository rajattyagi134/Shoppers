

<link rel="stylesheet" href="styles/style1.css" media="all" />

<div class="container">  
  <form id="contact" action="" method="post" background='orange'>
  
    <h3>Quick Contact</h3>
	
    <h4>Contact us today, and get reply with in 24 hours!</h4>
	
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" name="name"autofocus>
    
    </fieldset>
	
    <fieldset>
      <input placeholder="Your Email Address" type="text" name="email" tabindex="2">
	 
    </fieldset>
	
    <fieldset>
      <input placeholder="Your Phone Number" type="text" name="phone" tabindex="3">
	 
    </fieldset>
	
    <fieldset>
      <textarea placeholder="Type your Message Here...." type="text" name="message" tabindex="5"></textarea>
    </fieldset>
	
    <fieldset>
 <button name='submit' type='submit' id='contact-submit' data-submit='Submit'>Submit</button>
 
	<h4> <a href="index.php" align="center" color="black";>Back To Home </a></h4>
	
    </fieldset>
	
  </form>

  
</div>

<?php

	if(isset($_POST['submit'])){
		
			echo"<script>alert('Thanks For your Request we will look surely for your request')</script>";
			echo"<script>window.open('index.php','_self')</script>";
	
		}

?>


