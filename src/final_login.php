<?php
session_start(); 
$error='';
if (isset($_POST['loginBtn'])) {
	if (empty($_POST['usernameTxt']) || empty($_POST['passwordTxt'])) {
		$error = "Username or Password is invalid";
	}else{
	$username=$_POST['usernameTxt'];
	$password=$_POST['passwordTxt'];

	$connection = mysqli_connect("localhost", "root", "", "hoee_game_shop");
	$db = mysqli_select_db($connection, "customer");
	$query = mysqli_query($connection, "SELECT * FROM customer WHERE password = '$password' AND username = '$username'");
	$rows = mysqli_num_rows($query);

	if ($rows == 1) {
		$_SESSION['login_user'] = $username;
		$_SESSION['password_user'] = $password;
		if($username == "admin"){
			header("location: final_admin.php");
		}else{ 
			header("location: final(2).php");
		} 
	}else{
		$error = "Username or Password is invalid";
	}
	mysqli_close($connection);
}
}
?>