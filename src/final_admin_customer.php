<?php 
include('final_session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="final(1).css">
	<title>Customer</title>
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
<H1>Customer List</H1>
<table border="2" width="1000px" style="text-align: center;">
	<tr>
		<td></td>
		<td>Name</td>
		<td></td>
		<td></td>
	</tr>
<?php
$sql = "SELECT * from customer";
$result = mysqli_query($connection, $sql);

$a = 1;
while($data = mysqli_fetch_array($result)){
?>
<tr>
	<td><?php echo $a ?></td>
	<td><?php echo $data['username']; ?></td>
	<td><a href="final_admin_edit(3).php?username=<?php echo $data['username']; ?>">Edit</a></td>
    <td><a href="final_admin_del(3).php?username=<?php echo $data['username']; ?>">Delete</a></td>
</tr>
<?php $a++; } ?>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>Copyright 2021</footer>
</center>
</body>
</html>