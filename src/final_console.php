<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="final(1).css">
	<title>Console</title>
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
<center>
<H1>Console</H1>
<form method="post" action="final_searchConsole.php">
	Search: <input type="text" name="text1"> &nbsp; <input type="submit" name="submit" value="Search">
</form>
<br>
<table border="2" width="1000px" style="text-align: center;">
	<tr>
		<td>Image</td>
		<td>Name</td>
		<td>Price</td>
		<td>Status</td>
	</tr>
<?php
$connection = mysqli_connect("localhost", "root", "", "hoee_game_shop");
$db = mysqli_select_db($connection, "customer");
session_start();

$sql = "SELECT * from console";
$result = mysqli_query($connection, $sql);

while($data = mysqli_fetch_array($result)){
	$image = $data['Name'];
?>
<tr>
	<td><?php echo "<img src='consoleImage/$image.jpg' height='120' width='100'/>" ?></td>
	<td><?php echo $data['Name']; ?></td>
	<td><?php echo "RM ".$data['Price']; ?></td>
	<td><?php echo $data['Status']; ?></td>
</tr>
<?php } ?>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>Copyright 2021</footer>
</center>
</body>
</html>