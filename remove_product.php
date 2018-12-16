<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "web_design";

	$conn = mysqli_connect($servername, $username, $password, $db_name);

	if(!$conn)
		die("Connecting error");
	else
		echo "Connected successfully <br>";
	session_start();
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	
	echo $name;
	
	$deleteProductQuery = "DELETE FROM cart_table WHERE name = '$name' AND user_email = '$email'";
	if(mysqli_query($conn, $deleteProductQuery)){
		echo "Deleted successfully";
		header("location:profile.php");
	}
	else
		echo "Error deleting";
?>