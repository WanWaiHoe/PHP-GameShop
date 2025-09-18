<?php
include('final_session.php');
$name =$_GET['username'];

mysqli_query($connection, "DELETE FROM customer WHERE username = '$name'") or die(mysqli_error());
header("Location: final_admin_customer.php");
?>