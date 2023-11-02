<?php
$old_name = session_name("some_name");
session_set_cookie_params(0, '/', '.miie.co.uk');
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>InstantQ - Quotation Software for the Windows and Doors Industry</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet">
<!--fonts-->
<link href="css/fonts.css" rel="stylesheet">
<link href="fontawesome/css/fontawesome.css" rel="stylesheet">
<link href="fontawesome/css/brands.css" rel="stylesheet">
<link href="fontawesome/css/solid.css" rel="stylesheet">	
<link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">  	 
</head>
<body>
<div id="mainImage" ><img src="images/quote_success.jpg" width="100%" alt="InstantQ quotation software"/>     
<div id="logoContain"><img src="images/logo-IQ.png" width="100%" alt="InstantQ"/></div>  
</div>

<h1 style="text-align: center;border-bottom:solid thin #000000;padding-bottom:12px;margin-bottom:0px;"><span style="color:#374CA0">Q</span>uotation software for the window and door industry</h1> 
<div style="background-color:lightyellow;width:100%;height:100%;"> 	
<div id="login-containin">
<h2 style="text-align: center;margin-top:0px;margin-bottom:25px;"><span style="color:#374CA0">L</span>ogin</h2>	 
<form action="https://instantq.co.uk/login_form_proccess.php" method="POST" name="loginform" id="loginform">
<fieldset class="form-group">
<input id="email" name="email" type="email" placeholder="Email" class="form-control">
</fieldset>
<fieldset class="form-group">
<input id="pass" name="pass" type="password" placeholder="Password" class="form-control">    
</fieldset>
<fieldset class="form-group">
<button id="login" type="submit" class="btn btn-md">Login</button>
</fieldset>
</form>
</div>
<h4  style="text-align: center;margin:0px;padding:7px;" ><a href="forgot.php" style="color:black;">Forgot Password</a></h4>   
<h3  id="message" style="text-align: center;color:red;margin:0px;padding:7px;"></h3>	
</div>

	
<div class="grid-container">	
	<div class="grid-item"><img src="images/quote-pic.png" alt="Send quotes for any job of any size" width="100%" height="100%"></div> 	
	<div class="grid-item" style="background-color: aliceblue">
		<h2 style="text-align:center;font-size:5em;">Join the Network</h2>
		<div class="innerDiv"> 
		<h3 style="text-align:center;font-size:2em;margin-top:30px">⭐ Build professional branded quotes in minutes ⭐</h3>  
		<h3 style="text-align:center;font-size:2em;margin-top:30px">⭐ Easily store customer details ⭐</h3>
		<h3 style="text-align:center;font-size:2em;margin-top:30px">⭐ Works straight out of the box, just set your margins and start quoting ⭐</h3>
		<h3 style="text-align:center;font-size:2em;margin-top:30px;color:red;">⭐ One month free trial! ⭐</h3>	
		<h2 style="text-align:center;font-size:4em;margin-top:50px;color:darkslateblue;font-weight:bold;">£100 plus VAT <span style="font-size:0.5em;"><br>per month</span></h2>
		<h2 style="text-align:center;font-size:3em;">Click <span style="color:red;cursor:pointer" id="trialLogin">here</span> to try now!</h2>
		</div>	
		<h2 style="text-align:center;font-size:3em;color:darkslateblue;">Any Questions?</h2> 
		<h3 style="text-align:center;font-size:2em;margin-top:30px"><a href="mailto:hello@instantq.co.uk" style="color:black;">hello@instantq.co.uk</a></h3> 
		<h3 style="text-align:center;font-size:2em;margin-top:30px"><a href="tel:07936936085" style="color:green;"><i class="fa-brands fa-whatsapp"></i>  07936936085</a></h3>
	</div>	
</div>
	
<div style="width:100%; border-top:solid thin #000;height:60px;display: inline-block;font-size: 1.5em;text-align:center;padding-top:15px;"><a href="mailto:hello@instantq.co.uk" style="color:black;">hello@instantq.co.uk</a><a href="https://www.facebook.com/qmenow" target="_blank">      |      <img src="images/icons8-facebook-64.png" width="40px" alt="InstantQ quotation software" />      |      </a><a href="instantq.co.uk" style="color:black;">www.instantq.co.uk</a></div>	
		
	
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
<script src="js/index.js"></script>
</body>
</html>
