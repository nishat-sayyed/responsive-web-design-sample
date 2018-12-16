<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "web_design";
	
	$conn = mysqli_connect($servername, $username, $password, $db_name);
	
	if(!$conn)
		die("Error connecting");
	else
		echo "Connected successfully <br>";
	
	session_start();
	$firstName = $_POST['firstName'];
	$middleName = $_POST['middleName'];
	$lastName = $_POST['lastName'];
	$mobileNo = $_POST['mobileNo'];
	$email = $_POST['email'];
	$id = $_SESSION['id'];
	
	$updateQuery = "UPDATE user_details SET firstName = '$firstName', lastName = '$lastName', middleName = '$middleName', mobileNo = '$mobileNo', email = '$email' WHERE id = '$id'";
	if(mysqli_query($conn, $updateQuery)){
		header("location:profile.php");
	}
	else{
		echo "Error updating";
	}
	
	mysqli_close($conn);
?>