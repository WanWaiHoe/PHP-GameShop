<?php
include "final_session.php";
$name = $_GET['username'];

$result = mysqli_query($connection,"SELECT * FROM customer WHERE username = '$name'");
$test = mysqli_fetch_array($result);

if(!$result){
	die("Error: Data not found..");
}

$name = $test['username'];
$password = $test['password'];

if(isset($_POST['save'])){
	$password_save = $_POST['passwordTxt'];

	$edit = mysqli_query($connection, "UPDATE customer SET username ='$name', password ='$password_save' WHERE username = '$name'");
	
	if($edit){
		mysqli_close($connection);
		header("location: final_admin_customer.php");
		exit();
	}else{
		echo mysqli_error();
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Edit</title>
</head>
<body>
<form method="post">
<table>
	<tr>
		<td>username: </td>
		<td><?php echo $name ?></td>
	</tr>
	<tr>
		<td>password: </td>
		<td><input type="password" name="passwordTxt" value="<?php echo $password ?>"/></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>
</body>
</html>