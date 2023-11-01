// JavaScript Document
$(document).ready(function(){
	if (window.location.search === "?wrong") {
    $('#message').html('The email address you entered is not registered in our system!');
}
});