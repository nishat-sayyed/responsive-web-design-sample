<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "web_design";
	
	$conn = mysqli_connect($servername, $username, $password, $db_name);
	
	if(!$conn)
		die("Error connecting to the database");
	else 
		echo "Connected successfully!!! <br>";
	
	session_start();
	$username = $_POST['email'];
	$password = $_POST['password'];
	
	$username = stripcslashes($username);
	$password = stripcslashes($password);

	$_SESSION['email'] = $username;
	
	$result = mysqli_query($conn, "SELECT * FROM user_details WHERE email = '$username' AND password = '$password'");
	
	$row = mysqli_fetch_array($result);
	if($row['email'] == $username && $row['password'] == $password)
		header("Location:profile.php");
	else{
		header("Location:login.html");
	}
	
	mysqli_close($conn);
?>