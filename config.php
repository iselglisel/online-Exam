<?php
session_start();
$config = array (
	'host' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'online_exam'
);
$db = new mysqli(
	$config['host'],
	$config['username'],
	$config['password'],
	$config['database']
);

if (mysqli_connect_errno()){
	echo 'An occured Error';
	exit;
}


?>
