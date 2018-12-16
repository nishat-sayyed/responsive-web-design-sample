<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "web_design";


	$conn = mysqli_connect($servername, $username, $password, $db_name);

	if(!$conn)
		die("Error connecting to the database");
	else{
	}
	session_start();
	$username = $_POST['email'];
	$user_mobileNo = $_POST['mobileNo'];

	$userquery = mysqli_query($conn, "SELECT * FROM user_details WHERE email = '$username'");

	
	while($row = mysqli_fetch_array($userquery, MYSQLI_ASSOC)){
		$id = $row['id'];
		$firstName = $row['firstName'];
		$lastName = $row['lastName'];
		$email = $row['email'];
		$password = $row['password'];
		$mobileNo = $row['mobileNo'];
	}
	$name = $firstname;
	if($email == $username && $mobileNo == $user_mobileNo){
		$to = $email;
		$subject = "Your password for account login";
		$message = "Hey!! ".$name." we found that you are having trouble logging in your account\nDo not worry, we are here to help you.\n Email id: ".$email."\nMobile number: ".$mobileNo."\nPassword: ".$password;
		$headers = "From: nishatsayyed26@gmail.com";
		echo $password . "<br>";
		mail($to, $subject, $message, $headers);
		header("location:login.html");
	}
	else{
		echo "error";
		header("location:login.html");
	}
?>
