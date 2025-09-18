<?php
include('final_session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="final(1).css">
	<title>Edit Product</title>
</head>
<body>
<div id="logo"><img src="logo.png"><H3><b>HOEE Game Shop</b></H3></div>
<b>Now login as: <?php echo $login_session; ?></b>
<div style="background-image: url('images/playstationBackground.jpg');">
<header>
<nav>
	<ul>
		<li><a href="final_admin.php">Upload</a></li>
		<li><a href="final_admin_edit.php">Edit</a></li>
		<li><a href="final_admin_customer.php">Customer</a></li>
		<li><a href="final_admin_account.php">Account</a></li>
	</ul>
</nav>
</header>
<center>
<br><br><br><br>

<h1>Game</h1>
<table border="2" width="1000px" style="text-align: center;">
	<tr>
		<td>Image</td>
		<td>Name</td>
		<td>Price</td>
		<td>Status</td>
		<td>Type</td>
		<td></td>
		<td></td>
	</tr>
<?php
$sql = "SELECT * from game";
$result = mysqli_query($connection, $sql);

while($data = mysqli_fetch_array($result)){
	$image = $data['Name'];
?>
<tr>
	<td><?php echo "<img src='gameImage/$image.jpg' height='120' width='100'/>" ?></td>
	<td><?php echo $data['Name']; ?></td>
	<td><?php echo "RM ".$data['Price']; ?></td>
	<td><?php echo $data['Status']; ?></td>
	<td><?php echo $data['Type']; ?></td>
	<td><a href="final_admin_edit(1).php?Name=<?php echo $data['Name']; ?>">Edit</a></td>
    <td><a href="final_admin_del(1).php?Name=<?php echo $data['Name']; ?>">Delete</a></td>
</tr>
<?php } ?>
</table>

<h1>Console</h1>
<table border="2" width="1000px" style="text-align: center;">
	<tr>
		<td>Image</td>
		<td>Name</td>
		<td>Price</td>
		<td>Status</td>
		<td></td>
		<td></td>
	</tr>
<?php
$sql = "SELECT * from console";
$result = mysqli_query($connection, $sql);

while($data = mysqli_fetch_array($result)){
	$image = $data['Name'];
?>
	<td><?php echo "<img src='consoleImage/$image.jpg' height='120' width='100'/>"; ?></td>
	<td><?php echo $data['Name']; ?></td>
	<td><?php echo "RM ".$data['Price']; ?></td>
	<td><?php echo $data['Status']; ?></td>
	<td><a href="final_admin_edit(2).php?Name=<?php echo $data['Name']; ?>">Edit</a></td>
    <td><a href="final_admin_del(2).php?Name=<?php echo $data['Name']; ?>">Delete</a></td>
</tr>
<?php } ?>
</table>
<br><br><br><br><br><br>
<footer>Copyright 2021</footer>
</center>
</body>
</html>