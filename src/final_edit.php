<?php
include('final_session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="final(1).css">
	<title>Edit Password</title>
</head>
<body>
<div id="logo"><img src="logo.png"><H3><b>HOEE Game Shop</b></H3></div>
<b>Welcome, <?php echo $login_session; ?></b>
<div style="background-image: url('images/playstationBackground.jpg');">
<br>
<h1><center> Edit Password </center></h1>
<br><br>
<form method="post" action="">
	<center>
		<table border="1" style="text-align: center;">
			<tr>
				<td>Password :</td>
				<td><input type="password" name="passwordTxt"></td>
			</tr>
			<tr>
				<td>New Password : </td>
				<td><input type="password" name="newPassword"></td>
			</tr>
			<tr>
				<td>Comfirm New Password : </td>
				<td><input type="password" name="comfirmPassword"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="save" value="save"></td>
			</tr>
		</table>
		<br><br>
		<a href="final_account(2).php"><< Back to login</a>
	</center>
</form>
<br><br><br><br><br><br><br><br><br><br><br><br>
<footer><center>Copyright 2021</center></footer>
<?php
if(isset($_POST['save'])){
	$password = $password_session;

	if($_POST['passwordTxt'] == $password_session){
		if($_POST['newPassword'] == $_POST['comfirmPassword']){
			$username = $login_session;
			$newPassword = $_POST['newPassword'];
			$edit = mysqli_query($connection, "UPDATE customer SET password ='$newPassword' WHERE username = '$username'");

			if($edit){
				mysqli_close($connection);
				header("location: final(2).php");
				exit();
			}else{
				echo mysqli_error();
			}
		}else{
			echo "<script> alert('New Password and Comfirm password not match!'); </script>";
		}
	}else{
		echo "<script> alert('Password invalid!'); </script>";
	}
}
?>
</body>
</html>