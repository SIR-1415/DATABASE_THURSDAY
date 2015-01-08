<?php
include_once 'connect.php';

// get values from form
// you will want to make these variables sent under POST request
$username = $_GET['username'];
$pass = $_GET['pass'];

// get hash key from sent password
$passkey = md5($pass);

// query the database to check id user and password match
$sql = "SELECT username, pass from users WHERE (username = '$username' AND pass='$passkey')";
$result = $connection->query($sql);


if ($result->num_rows == 1) 
	 echo ("a real user");
else echo ("not a user");


?>