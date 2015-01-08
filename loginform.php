<?php
session_start();

?>
<html>
	<head>
		
	</head>
	<body>
		<h2><?php 
			if (isset($_SESSION['error'])) {
				echo $_SESSION['error'];
			}
			?>
		<form action="check_userpass.php" method="POST">
			<input type="text" name="username">
			<input type="password" name="pass">
			<input type="submit">
		</form>
	</body>
</html>