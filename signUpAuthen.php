<?php 

require_once('config.php');
require_once('ExamDAO.php');

if(!empty($_POST['email'] && !empty($_POST['pass']))){
	at_check = email.indexOf('@');
	dot_check = email.indexOf('.');

	if (email.length == 0) {
		alert("Enter your Email / Username");
		return false;
	}else if(at_check < 0){
		alert("Make sure your Email is Valid!");
		return false;
	}else if (dot_check < 0){
		alert("Make sure your Email is Valid!");
		return false;

	}
}

?>