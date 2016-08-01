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
					Info:"Alle Anmeldedaten sind richtig, dennoch ist der Benutzer momentan gespert!"<br>
					<br>
					<br>
					Sollte es sich um einen Fehler handeln, kontaktiere bitte den Netzwerkadmin!<br>
					<br>
					<br>
					Versuche es mit einem anderen Benutzer:
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
