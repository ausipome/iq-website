<?php
$old_name = session_name("some_name");
session_set_cookie_params(0, '/', '.miie.co.uk');
session_start();

include('../../../server-config/iqconfig/secure-manage.php'); 
include('../../../server-config/iqconfig/login_form_script.php'); 
		
?>		