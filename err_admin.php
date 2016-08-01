<?php
include_once 'database.php';
include_once 'location.php';
?>
<html>
	<head>
		<title>MAGIX - Interface</title>
		<link href="index.css" type="text/css" rel="stylesheet">
		<style>
			A:link {text-decoration: none;}
			A:visited {text-decoration: none;}
		</style>
	</head>
	<body>
		<div id="background">
			<div id="top_globe">
			
			</div>
			<div id="body_login"><center>
					<center><h3>
					Error:"Das root Passwort ist nicht korrekt !"<br>
					<br>
					<br>
					Sollte der Fehler trotz korrekter Anmeldung auftretten, kontaktiere bitte den Netzwerkadmin!<br>
					<br>
					<br>
					Bitte versuche es erneut:
					</h3></center>
					<center>
						<form action="index.php" name="MainPage" method="post">
							<input type="submit" value="Zum Login" class="myButton_IA">
						</form>
					</center>
					
			<div id="main_main">
			</div>
		</div>
	</body>
</html>
