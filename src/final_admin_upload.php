<?php
if(isset($_POST['productNameTxt']) && isset($_POST['productPriceTxt']) && isset($_POST['gameType']) && isset($_POST['gameStatus'])){
	if(($_POST['productNameTxt'] != "") && ($_POST['productPriceTxt'] != "") && ($_POST['gameType'] != "") && ($_POST['gameStatus'] != "")){
		$name = $_POST['productNameTxt'];
		$price = $_POST['productPriceTxt'];
		$type = $_POST['gameType'];
		$status = $_POST['gameStatus'];

		$con = mysqli_connect("localhost", "root", "", "hoee_game_shop");
		if(mysqli_connect_errno()){		
			echo "Failed to connect to MySQL: ". mysqli_connect_errno();
		}
		$sql = "INSERT INTO game (Name, Price, Status, Type) VALUES ('$name', '$price', '$status', '$type')";

		if(!mysqli_query($con, $sql)){
			die('Error: '.mysqli_error($con));
		}
		$target_dir = "gameImage/";
		$target_file = $target_dir. basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

		if(file_exists($target_file)){
			echo "Sorry, file already exist. <br>";
			$uploadOk = 0;
		}

		if($_FILES["fileToUpload"]["size"] > 500000){
			echo "Sorry, your file is too large. <br>";
			$uploadOk = 0;
		}

		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
			echo "Sorry, only JPG, PNG, JPEG & GIF files are allowed. <br>";
			$uploadOk = 0;
		}

		if($uploadOk == 0){		
			echo "Sorry, your file was not uploaded. <br>";
		}else{
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
		}

		echo "Game already added to store";
		mysqli_close($con);
	}else{
		echo "Please fill up all of the data first before insert!";
	}
}else{
	echo "Error in getting the data from html page!";
}
?>
<p><a href="final_admin.php"><< Back to upload page</a></p>