// JavaScript Document
$(document).ready(function(){
	$('#email').focus();
	
	if (window.location.search === "?wrong") {
    $('#message').html('You entered the WRONG email or password!</br> If you have forgotten your password please click the link below.');
}
if (window.location.search === "?forgot") {
    $('#message').html('An email has been sent to you with your new password.');
}
	
$('#trialLogin').click(function(){
	$('#email').val('support@instantq.co.uk');
	$('#pass').val('Trynow12345');
	$('#login').click();
});	
	
});