<?php
include('final_login.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="final(1).css">
	<title>Account</title>
</head>
<body>
<div id="logo"><img src="logo.png"><H3><b>HOEE Game Shop</b></H3></div>
<div style="background-image: url('images/playstationBackground.jpg');">
<header>
<nav>
	<ul>
		<li><a href="final(1).html">Home</a></li>
		<li><a href="final_game.php">Game</a></li>
		<li><a href="final_console.php">Console & Accessories</a></li>
		<li><a href="final_account.php">Account</a></li>
	</ul>
</nav>
</header>
<br><br><br><br>
	<H1><center>Account</center></H1>
	<form method="post" action="">
	<center>
		<table>
		<tr>
			<td>Username : </td>
			<td><input type="text" name="usernameTxt"></td>
		</tr>
		<tr>
			<td>Password : </td>
			<td><input type="password" name="passwordTxt"></td>
		</tr>
		</table>
		<br><input type="submit" name="loginBtn" value="Login"><br><br>
		<a href="final_register.html">Dont have account? Click here to register</a>
	</center>
	</form>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<footer><center>Copyright 2021</center></footer>
</body>
</html>