<?php
include_once 'database.php';
include_once 'location.php';

#Key abfangen
$Key = $_POST['keyset'];

//echo $Key;

if($Key != $ifkey){
	header("location:err_nologin.php");
}
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
				<form action="user_index.php" name="MainPage" method="post">
							<input type="hidden" name="keyset" value="<?php echo $Key;?>">
							<input type="submit" value="Startseite" class="myButton_IA">
				</form>
				<form action="user_dashboard.php" name="MainPage" method="post">
							<input type="hidden" name="keyset" value="<?php echo $Key;?>">
							<input type="submit" value="Dashboard" class="myButton_IA">
				</form>
				<form action="user_radio.php" name="MainPage" method="post">
							<input type="hidden" name="keyset" value="<?php echo $Key;?>">
							<input type="submit" value="Internetradio" class="myButton_A">
				</form>
				
				<div id="body_button_O"></div>
				<form action="index.php" name="MainPage" method="post">
							<input type="submit" value="Neu Anmelden" class="myButton_IA">
				</form>
			</center></div>
			<div id="main_main">
				<div id="main_head">
					<div id="main_head_LOGO">
					
					</div>
				</div>
				<div id="main_body_Image">
				
				</div>
			</div>
		</div>
	</body>
</html>
