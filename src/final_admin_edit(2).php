<?php
include "final_session.php";
$name = $_GET['Name'];

$result = mysqli_query($connection,"SELECT * FROM console WHERE Name = '$name'");
$test = mysqli_fetch_array($result);

if(!$result){
	die("Error: Data not found..");
}

$name = $test['Name'];
$price = $test['Price'];
$status = $test['Status'];

if(isset($_POST['save'])){
	$name_save = $_POST['nameTxt'];
	$price_save = $_POST['priceTxt'];
	$status_save = $_POST['statusTxt'];

	$edit = mysqli_query($connection, "UPDATE console SET Name ='$name_save', Price ='$price_save', Status ='$status_save' WHERE Name = '$name'");
	
	if($edit){
		mysqli_close($connection);
		header("location: final_admin_edit.php");
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
		<td>Name: </td>
		<td><input type="text" name="nameTxt" value="<?php echo $name ?>"/></td>
	</tr>
	<tr>
		<td>Price: </td>
		<td><input type="text" name="priceTxt" value="<?php echo $price ?>"/></td>
	</tr>
	<tr>
		<td>Status: </td>
		<td><select name="statusTxt">
			<option>Available</option>
			<option>Out of Stock</option>
			<option>Preorder</option>
		</select></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>
</body>
</html>