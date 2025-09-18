<?php
include('final_session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="final(1).css">
	<title></title>
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
<br><br><br><br>
<center>
<H1>Console</H1>
<form method="post" action="final_searchConsole(2).php">
	Search: <input type="text" name="text1"> &nbsp; <input type="submit" name="submit" value="Search">
</form>
<br>
<table border="2" width="1000px" style="text-align: center;">
	<tr>
		<td></td>
		<td>Name</td>
		<td>Price</td>
		<td>Status</td>
		<td></td>
	</tr>
<?php
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
	<td><input type="button" name="buyBtn" value="Purchase" onclick="myFunction()"></td>
</tr>
<?php } ?>
</table>
<script type="text/javascript">
	function myFunction(){
		alert("Purchase Success, Thank you");
	}
</script>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>Copyright 2021</footer>
</center>
</body>
</html>