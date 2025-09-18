<?php
include('final_session.php');
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
<b>Welcome, <?php echo $login_session; ?></b>
<div style="background-image: url('images/playstationBackground.jpg');">
<header>
<nav>
	<ul>
		<li><a href="final(2).php">Home</a></li>
		<li><a href="final_game(2).php">Game</a></li>
		<li><a href="final_console(2).php">Console & Accessories</a></li>
		<li><a href="final_account(2).php">Account</a></li>
	</ul>
</nav>
</header>
<br><br><br><br>
	<H1><center>Account</center></H1>
	<center>
		<table>
		<tr>
			<td>Username : </td>
			<td><?php echo $login_session; ?></td>
		</tr>
		<tr>
			<td>Password : </td>
			<td>xxxxxxxxxx</td>
		</tr>
		</table>
		<br><a href="final_edit.php">Edit Password</a><br><br>
		<a href="final_logout.php">Logout</a>
	</center>
	<br><br><br><br><br><br><br><br><br><br><br><br><br>
	<footer><center>Copyright 2021</center></footer>
</body>
</html>