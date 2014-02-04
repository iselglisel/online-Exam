<?php 

require_once('config.php');
require_once('ExamDAO.php');

if(!empty($_POST['email'] && !empty($_POST['pass']))){
	$email = $_POST['email'];
	$pass = sha1($_POST['pass']);
	$result = ExamDAO::getUser($email, $pass);
	if($result){
		header('location:question.php');
	}else{
		echo "<script>alert('Wrong email or Password');window.location.href='signIn.php'</script>'";
	}

}else{
	header('location:signIn.php');
}

 ?>