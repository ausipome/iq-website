<?php
$old_name = session_name("some_name");
session_set_cookie_params(0, '/', '.instantq.co.uk');
session_start();

$database= "manageme";
include('../../../server-config/iqconfig/secure.php'); 
include('../../../server-config/iqconfig/login_form_script.php'); 
		
?>		