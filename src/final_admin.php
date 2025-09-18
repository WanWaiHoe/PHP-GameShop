<?php
include('final_session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="final(1).css">
	<title>Admin</title>
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
<br><br><br><br>
<center>
<h1>Upload Game</h1>
<form method="post" action="final_admin_upload.php" enctype="multipart/form-data">
	<table border="1" style="text-align: center;">
		<tr>
			<td width="200px">Name: </td>
			<td width="400px"><input type="text" name="productNameTxt"></td>
		</tr>
		<tr>
			<td width="200px">Price: </td>
			<td width="400px">RM <input type="text" name="productPriceTxt"></td>
		</tr>
		<tr>
			<td width="200px">Game Type: </td>
			<td width="400px"><select name="gameType">
				<option>Action</option>
				<option>Driving & Racing</option>
				<option>Horror</option>
				<option>Music</option>
				<option>Kids & Family</option>
				<option>RPG</option>
			</select></td>
		</tr>
		<tr>
			<td width="200px">Game Status: </td>
			<td width="400px"><select name="gameStatus">
				<option>Available</option>
				<option>Preorder</option>
			</select>
		</tr>
		<tr>
			<td>Game Image: </td>
			<td><input type="file" name="fileToUpload" id="fileToUpload"></td>
		</tr>
		<tr>
			<td width="200px"></td>
			<td width="400px"><input type="submit" name="uploadBtn" value="Upload"></td>
		</tr> 
	</table>
</form>
<br>
<a href="final_admin(2).php">Upload Console</a>
<br><br><br><br><br><br><br><br><br><br>
<footer>Copyright 2021</footer>
</body>
</html>