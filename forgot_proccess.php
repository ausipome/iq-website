<?php
include('../../../server-config/iqconfig/secure-manage.php'); 
		
			$email = $_POST['email'];
			
	$sth = $conn->prepare("SELECT * FROM company WHERE email = :email");
$sth->bindParam(':email', $email);
$sth->execute();
$results = $sth->fetch(PDO::FETCH_ASSOC);
			if($sth->rowCount() == 0 ){
				header( 'Location: https://instantq.co.uk/forgot.php/?forgot' ) ;
			}		
	else{
		//generate new password
	$newpassword = rand();
	$newpassword = md5 ($newpassword);
	$newpassword = substr($newpassword, 0, 8);

	$password = md5(md5("MnBvCxZ".$newpassword."MnBvCxZ"));
		
	$sth = $conn->prepare("UPDATE company SET password = :password WHERE email = :email");
$sth->bindParam(':email', $email);
$sth->bindParam(':password', $password);
$sth->execute();
				
$emailAd='noreply@instantq.co.uk';
$name='instantQ';
$subject='Password reset';
		//get phpmailer file
	  require '../PHPMailer-master/PHPMailerAutoload.php';
	// email username and new password
		$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'sub5.mail.dreamhost.com'; // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'mail@instantq.co.uk';                 // SMTP username
$mail->Password = 'MessageMeQ666999';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($emailAd, $name);
$mail->addAddress($email);     // Add a recipient

$mail->AddEmbeddedImage('images/logo-IQ.png','1001');
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = $subject;
$mail->Body    = $emailBody;
$mail->AltBody = "";
$mail->Body    = "  
		<div style='text-align:center; max-width:175px; margin:0 auto; border-bottom:#000000 solid thin; padding-top:10px; padding-bottom:10px;'><img src='cid:1001' style='width:100%;' alt='instantq.co.uk'/></div>
		<div style='font-size:18px; width:100%; text-align:center; margin-top:10px;'>Your login details are as follows.<br>
	  	email address: $email<br>
		Your new password is: $newpassword<br>
		<a href='https://instantq.co.uk'><button style='border-radius:10px; width:100px; height:40px; background-color:#b5f4bb;margin-top:15px;'>Login</button></a></div>";
	  
	$mail->AltBody = " Hi ".$b_name.".<br>Your login details are as follows.<br>
	  	email address: ".$email."<br>
		Your new password is: ".$newpassword."<br>
		https://instantq.co.uk";
		
	if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
else {
 // redirrect to login with password change message
	
	header( 'Location: https://instantq.co.uk?forgot' ) ;
}
	}
$conn = null;
?>