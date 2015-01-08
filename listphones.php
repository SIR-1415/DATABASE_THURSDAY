<?
session_start();

if (!isset($_SESSION['login'])) {
	header('location:loginform.php');
}

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

$sql = "SELECT * from users";
$result = $connection->query($sql);

if ($connection->errno) {
	exit();
}

while ($rowobj = $result->fetch_object()) {
	$curr_fname = $rowobj->Fname;
	$curr_lname = $rowobj->Lname;
	$curr_phone = $rowobj->phone;
	
	echo "<p> $curr_fname $curr_lname  :::: $curr_phone </p>";
}

?>

<a href="logout.php">logout</a>