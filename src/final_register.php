<?php
if(isset($_POST['txtUsername']) && isset($_POST['txtPassword'])){
	if(($_POST['txtUsername'] != "") && ($_POST['txtPassword'] != "")){
		$username = $_POST['txtUsername'];
		$password = $_POST['txtPassword'];
		

		$con = mysqli_connect("localhost", "root", "", "hoee_game_shop");
		if(mysqli_connect_errno()){
			echo "Failed to connect to MySQL: ". mysqli_connect_errno();
		}
		$sql = "INSERT INTO customer (username, password) VALUES ('$username','$password')";

		if(!mysqli_query($con, $sql)){
			die('Error: '.mysqli_error($con));
		}

		
		header("location: final_account.php");
		mysqli_close($con);
	}else{
		echo "Please fill up all of the data first before insert!";
	}
}else{
	echo "Error in getting the data from html page!";
}
?>