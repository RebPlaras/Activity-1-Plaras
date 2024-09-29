<?php 
session_start();


if(isset($_SESSION['username'])) {
	$_SESSION['error_message'] = "You are already logged in as: " . $_SESSION['username'] . ". Please log out first.";
	header('Location: index.php');
	exit();
}


if (isset($_POST['submitBtn'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;

	header('Location: index.php');
}
?>
