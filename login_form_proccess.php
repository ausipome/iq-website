<?php
$old_name = session_name("some_name");
session_set_cookie_params(0, '/', '.instantq.co.uk');
session_start();

		include('../../../server-config/instantq/secure_manageme.php'); 
 		include('../../../server-config/instantq/login_form_script.php'); 
		
?>		