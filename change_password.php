<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "web_design";
	
	$conn = mysqli_connect($servername, $username, $password, $db_name);
	
	if(!$conn)
		die("Error connecting to the database");
	else{ 
		echo "Connected successfully <br>";
	}
	session_start();
	$oldPassword = $_POST['oldPassword'];
	$newPassword = $_POST['newPassword'];
	$newPasswordConfirm = $_POST['newPasswordConfirm'];
	$id = $_SESSION['id'];
	
	$query = mysqli_query($conn, "SELECT * FROM user_details WHERE id = '$id'");

	while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
		$password = $row['password'];
	}
	if($oldPassword == $password){
		echo "Password matched <br>";
		if($newPassword == $newPasswordConfirm)
		{
			$updateQuery = "UPDATE user_details SET password = '$newPassword' WHERE id = '$id'";
			if(mysqli_query($conn, $updateQuery)){
				echo "Record updated. <br>";
				header("location:profile.php");
			}
			else
				echo "Can not update <br>";
		} else {
			echo "Passwords con not be confirmed <br>";
			header("location:profile.php");
		}
	}
	else{
		echo "Passwords do not match <br>";
		header("location:profile.php");
	}
?>
