<?php
include('final_session.php');
$name =$_GET['Name'];

mysqli_query($connection, "DELETE FROM console WHERE Name = '$name'") or die(mysqli_error());
header("Location: final_admin_edit.php");
?>