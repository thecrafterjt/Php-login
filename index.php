<?php
include_once 'database.php';
include_once 'location.php';
?>

<html>
	<head>
		<title>MAGIX - Interface</title>
		<link href="index.css" type="text/css" rel="stylesheet">
		<link rel="shortcut icon" href="LOGOS/pi.png" type="image/x-icon" />
	</head>
	<body>
		<div id="background">
			<div id="top_globe">
			
			</div>
			<div id="body_login">
				<center><h3>
					<form action="login.php" method="post">
					Benutzername:<br>
					<input type="text" name="User" class="mytextbox">
					<br>
					<br>
					<br>
					Passwort:<br>
					<input type="password" name="UPasswd" class="mytextbox">
					<br>
					<br>
					<br>
					Admin Passwort: (nur f&uuml;r Admin Modus)<br>
					<input type="checkbox" value="root" name="ifgetroot"><input type="password" name="root" class="mytextbox"><br>
					<br>
					<br>
					<br>
					<!--<input type="submit" value="Anmelden"> -->
					<input type="submit" value="Anmelden" class="myButton_IA">
					</form> 
				</h3></center>
			</div>
		</div>
	</body>
</html>