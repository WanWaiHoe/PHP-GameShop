<?php
$connection = mysqli_connect("localhost", "root", "", "hoee_game_shop");
$db = mysqli_select_db($connection, "customer");

session_start();

$user_check=$_SESSION['login_user'];
$ses_sql = mysqli_query($connection, "SELECT * FROM customer WHERE username = '$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];
$password_session = $row['password'];

if(!isset($login_session)){
	mysql_close($connection);  
	header('Location: final_login.php');
}
?>