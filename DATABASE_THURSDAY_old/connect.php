<?php
$userDB = "webuser";
$passDB = "webuser";
$hostDB = "localhost";
$dataDB = "userssir";
$portDB = "3306";

$connection = new mysqli($hostDB,$userDB,$passDB,$dataDB,$portDB);

if($connection->connect_errno) {
	echo("error connection :" . $connection->connect_error);
	exit();
}
?>