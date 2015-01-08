<?php
include_once 'connect.php';

// start sessions mechanism
session_start();

// get values from form
$username = $_POST['username'];
$pass = $_POST['pass'];

// get hash key from sent password
$passkey = md5($pass);

// query the database to check id user and password match
$sql = "SELECT username, pass from users WHERE (username = '$username' AND pass='$passkey')";
$result = $connection->query($sql);

if ($result->num_rows == 1) {
	$_SESSION['login'] = $username;
	unset($_SESSION['error']);
	header('location:listphones.php');
} else {
	$_SESSION['error'] = "not registered";
	header('location:loginform.php');
}


?>