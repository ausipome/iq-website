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
<title>InstantQ - Windows and Doors Quotation Software</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet">  
<!--fonts-->
<link href="css/fonts.css" rel="stylesheet">
<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
</head>
<body>

<div id="logoContain" style="top:25px;height:85px"><img src="images/logo-IQ.png" width="100%" height="78px" alt="InstantQ"/></div>
<div style="border: thin solid #000;border-radius:12px;padding:15px;width:70%;margin:0 auto;margin-top:150px;">
<h4 style="text-align: center;margin-bottom:22px;color: red;">If you have forgotten your password, enter your email address below and we will email you a new password.</h4>
  <div class="form-group" style="width: 66%;margin:0 auto;">
  <form action="forgot_proccess.php" method="POST" name="forgotform" id="forgotform">
  <div id="emailFG" class="form-group">
  <input type="email" id="email" name="email" placeholder="Email address" class="form-control">
  </div>
  <div id="submitFG" class="form-group" style="text-align:center;">
    <input type="hidden" id="cappa" name="cappa">
    <input type="submit" id="send" name="send" class="btn btn-default" value="Send">
    </div>
  </form>
  </div></div>
  <h4 class="message" id="message" style="color:red;"></h4>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
<script src="js/forgot.js"></script>
</body>
</html>
