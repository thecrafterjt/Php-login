<?php
include_once 'database.php';
include_once 'location.php';

$User = $_POST['User'];
$UPasswd = $_POST['UPasswd'];
$godmode = $_POST['ifgetroot'];
$RPasswd = $_POST['root'];

#gen synatx
$part1 = "User";
$part2 = "_Name";
$part3 = "_Passwd";
$err_user = true;
$err_passwd = true;
$err_root = "NULL";
$err_aktiv = false;

#KEY
$key = $ifkey;

$i = 1;
while ($i <= 100){
	$getUser = $part1 . $i;
	$getName = $getUser . $part2;
	$getPasswd = $getUser . $part3;
	
	//if($$getName == $User){			// ALT neu wegen Gk-schreibung
	if (strcasecmp($$getName, $User) == 0){  // Neue abfrage ohne Gk-schreibung
		$err_user = false;
		if($$getPasswd == $UPasswd){
			$err_passwd= false;
			$err_aktiv = true;
			if($$getUser == true){
			$err_aktiv = false;
			if($godmode == "root"){
				$err_root = "NOT";
				if($RPasswd == $ifroot){
					$err_root = "ACC";
					echo '<script>
								function mySubmit() {
									var form = document.forms.myForm;
									form.submit();
								}
							</script>
							<body onLoad="mySubmit()";>
								<form action="admin_index.php" name="myForm" method="post">
									<input type="hidden" name="keyset" value="' . $key . '">
								</form>
							</body>';
				}
			}
			echo '<script>
						function mySubmit() {
							var form = document.forms.myForm;
							form.submit();
						}
					</script>
					<body onLoad="mySubmit()";>
						<form action="user_index.php" name="myForm" method="post">
							<input type="hidden" name="keyset" value="' . $key . '">
						</form>
					</body>';
		}
		}
	}
	
	/*
	echo "Gave User = " . $User . "<br>";
	echo "Gave Passwd = " . $UPasswd . "<br>";
	echo $getUser .'<br>';
	echo $getName . " = " . $$getName .  '<br>';
	echo $getPasswd .  " = " . $$getPasswd . '<br>';
	echo '<br>';
	*/
	
	echo $err_user;
	
	$i = $i + 1;
	if($i == 100){
		if($err_user == 1){
			header("location:err_user.php");
			$err_passwd = 0;
			$err_root = "NUL";
			$err_aktiv == 0;
		}
		if($err_passwd == 1){
			header("location:err_passwd.php");
			$err_user = 0;
			$err_root = "NULL";
			$err_aktiv == 0;
		}
		if($err_root == "NOT"){
			header("location:err_admin.php");
			$err_user = 0;
			$err_passwd = 0;
			$err_aktiv == 0;
		}
		if($err_aktiv == 1){
			header("location:err_notactive.php");
			$err_passwd = 0;
			$err_user = 0;
			$err_root = "NUL";
		}
	}
}
?>