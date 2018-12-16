<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "web_design";
	
	$conn = mysqli_connect($servername, $username, $password, $db_name);
	
	if(!$conn)
		die("Error connecting to the database".mysqli_connect_error());
	else
		echo "Connected successfully!!! <br>";
	
	session_start();
	$name = $_SESSION['name'];
	$email = $_SESSION['email'];
	$message = $_POST['message'];
	
	$sql = "INSERT INTO message_table (name, email, message) VALUES ('$name', '$email', '$message')";
	
	if(mysqli_query($conn, $sql)){
		echo "Inserted successfully";
		header("location:user_services.php");
	}
	else
		echo "Error inserting";
?>