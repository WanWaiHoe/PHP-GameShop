<?php
include('final_session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="final(1).css">
	<title>HOEE Game Shop</title>
</head>
<body>
<div id="logo"><img src="logo.png"><H3><b>HOEE Game Shop</b></H3></div>
<b>Welcome, <?php echo $login_session; ?></b>
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
<div style="background-image: url('images/playstationBackground.jpg');">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer><center>Copyright 2021</center></footer>
</div>
</body>
</html>