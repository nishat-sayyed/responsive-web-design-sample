<html>
	<head>
		<title>Connection</title>
	</head>
	<body>
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
			$firstName = $_POST['firstName'];
			$middleName = $_POST['middleName'];
			$lastName = $_POST['lastName'];
			$email = $_POST['email'];
			$mobileNo = $_POST['mobileNo'];
			$password = $_POST['password'];
			$confirmPassword = $_POST['confirmPassword'];
			$gender = $_POST['gender'];
			$date_of_birth = $_POST['dob'];
			$date = strtotime($date_of_birth);
			$dob = date("Y-m-d", $date);

			$_SESSION['email'] = $email;

			$emailCheckQuery = mysqli_query($conn, "SELECT * FROM user_details WHERE email = '$email'");

			if($password != $confirmPassword){
				echo "Passwords do not match";
				header("location:signup.html");
			}
			else{
				if(mysqli_num_rows($emailCheckQuery) > 0){
					echo "Email ID already exists";
					header("location:signup.html");
				}
				else{
					$sql = "INSERT INTO user_details (`id`, `firstName`, `middleName`, `lastName`, `email`, `mobileNo`, `password`, `gender`, `date_of_birth`) VALUES (NULL, '$firstName','$middleName', '$lastName', '$email', '$mobileNo', '$password', '$gender', '$dob')";
					if(mysqli_query($conn, $sql)){
						$subject = "Thanks for registering online!!!";
						$msg = "We welcome to join your journey with us";
						$headers = "From: nishatsayyed26@gmail.com";
						mail($email, $subject, $msg, $headers);
						header("Location:profile.php");
					}
					else{
						echo("Error submitting record <br>".mysqli_error($conn));
					}
				}
			}
		?>
	</body>
</html>
