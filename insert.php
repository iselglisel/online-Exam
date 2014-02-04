<?php

include_once('config.php');


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = sha1($_POST['pass']);

$query = "INSERT INTO registration (fname, lname, email, pass) VALUES ('$fname','$lname','$email','$pass')";
		$result = $db->query($query);
		header('location:signIn.php');
		return $result;
?>