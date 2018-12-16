<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "web_design";
	
	$conn = mysqli_connect($servername, $username, $password, $db_name);
	
	if(!$conn)
		die("Connection error");
	else
		echo "Connected successfully<br>";
	
	session_start();
	$id = $_SESSION['id'];
	$email = $_SESSION['email'];
	
	$sql = "DELETE FROM user_details WHERE id = '$id'";
	$deleteFromCartQuery = "DELETE from cart_table WHERE user_email = '$email'";
	$deleteFromMessageQuery = "DELETE FROM message_table WHERE email = '$email'";
	
	$deleteUser = mysqli_query($conn, $sql);
	$deleteUserFromCart = mysqli_query($conn, $deleteFromCartQuery);
	$deleteMessages = mysqli_query($conn, $deleteFromMessageQuery);
	
	if($deleteUser && $deleteUserFromCart && $deleteMessages){
		echo "Deleted successfully";
		header("location:login.html");
	}
	else
		echo "Error deleting";
?>