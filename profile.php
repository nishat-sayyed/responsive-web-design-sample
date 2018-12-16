<html>
	<head>
		<title>Welcome user</title>
		<meta name="viewport" content="width=device-width">
		<meta name="author" content="Nishat Sayyed">
		<title>Home Page</title>
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="jquery.js"></script>
		<script src="script.js"></script>
		<link rel="stylesheet" href="animate.css">
	</head>
	<body>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$db_name = "web_design";

			$conn = mysqli_connect($servername, $username, $password, $db_name);

			if(!$conn)
				die("Connecting error");
			else
				echo "Connected successfully";
			session_start();
			$username = $_SESSION['email'];
			$userquery = mysqli_query($conn, "SELECT * FROM user_details WHERE email = '$username'");

			while($row = mysqli_fetch_array($userquery, MYSQLI_ASSOC)){
				$id = $row['id'];
				$firstName = $row['firstName'];
				$middleName = $row['middleName'];
				$lastName = $row['lastName'];
				$email = $row['email'];
				$password = $row['password'];
				$mobileNo = $row['mobileNo'];
			}
			$_SESSION['id'] = $id;
			$_SESSION['firstName'] = $firstName;
			$_SESSION['lastName'] = $lastName;
			$_SESSION['mobileNo'] = $mobileNo;
			$_SESSION['email'] = $email;
		?>
		<div class="background-container">
			<video id="video-background" preload="auto"
			autoplay="true" loop="loop" muted="muted">
				<source src="walk.mp4" type="video/mp4">
					Video not supported
			</video>
		</div>
		<div class="content">
			<header class="animated fadeInDown">
				<div class="container">
					<div id="branding">
						<h1><span class="hightlight">NMS</span> Web Design</h1>
					</div>
					<nav>
						<ul>
							<li><a href="user_index.php">Home</a>
							</li>
							<li><a href="user_about.php">About</a>
							</li>
							<li><a href="user_services.php">Services</a>
							</li>
							<li class="current"><a href="profile.php">My account</a>
							</li>
							<li><a href="login.html">Logout</a>
							</li>
						</ul>
					</nav>
				</div>
			</header>

			<!--Start the work from here....happy coding :)-->

			<div class="container">
				<div id="profileContainer">
					<form method="POST" action="update_db.php">
						<div class="row">
							<label style="color: black">First name</label>
							<input id="firstName" type="text" value="<?php echo $firstName?>" name="firstName" pattern="^[a-zA-Z ]*$" title="Only alphabets are allowed" disabled>
						</div>
						<div class="row">
							<label style="color: black">Middle name</label>
							<input type="text" value="<?php echo $middleName?>" name="middleName" pattern="^[a-zA-Z ]*$" title="Only alphabets are allowed" disabled>
						</div>
						<div class="row">
							<label style="color: black">Last name</label>
							<input type="text" value="<?php echo $lastName?>" name="lastName" pattern="^[a-zA-Z ]*$" title="Only alphabets are allowed" disabled>
						</div>
						<div class="row">
							<label style="color: black">Mobile No</label>
							<input type="text" value="<?php echo $mobileNo?>" name="mobileNo" pattern="(\+91-|\+91|0)?\d{10}$" disabled>
						</div>
						<div class="row">
							<label style="color: black">Email</label>
							<input type="email" value="<?php echo $email?>" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" disabled>
						</div>
						<button type="submit" id="saveButton">Save</button>
						<button type="button" id="changePassword">Change Password</button>
						<button type="button" id="editProfile">Edit Profile</button>
					</form>
					<form method="post" action="delete_account.php">
						<button id="deleteAccount" type="submit">Delete My Account</button>
					</form>
				</div>

				<div id="listContainer">
					<div id="listHeader">
						<h1>Items in your cart</h1>
					</div>
					<?php
						$cartQuery ="SELECT * FROM cart_table WHERE user_email = '$email'";
						$sumQuery = "SELECT SUM(price) FROM cart_table WHERE user_email = '$email'";
						$result = mysqli_query($conn, $cartQuery);
						$sumResult = mysqli_query($conn, $sumQuery);
						$rowCount = mysqli_num_rows($result);
						$sumObject = mysqli_fetch_array($sumResult);
						$sum = $sumObject[0];
						
						if($rowCount == 0){ // It means no items are found in te cart
							echo "<div id='noItemContainer'>";
							echo "<h2>No items in your cart</h2>";
							echo "<button id='goToServiceButton' type='button'>Go get some stuff</button>";
							echo "</div>";
						} else {
							echo "<div id='cartItems'>";
							echo "<ul id='productList'>";
							while(false != ($row = mysqli_fetch_assoc($result)))
							{
								echo "<li id='product'>";
								echo "<div id='productContainer'>";
								echo "<hr>";
								echo "<form action='remove_product.php' method='post'>";
								echo "<h2 id='productName'>".$row['name']."</h2>";
								echo "<h2 id='productPrice'>".$row['price']."$</h2>";
								$itemName = $row['name'];
								$user_email = $row['user_email'];
								echo "<input type='hidden' name='name' value='$itemName'>";
								echo "<input type='hidden' name='email' value='$user_email'>";
								echo "<button id='removeProduct' type='submit'>&times;</button>";
								echo "</form>";
								echo "</div>";
								echo "</li>";
							}
							echo "<li>";
							echo "<div id='totalAmount'>";
							echo "<h2 id='totalLabel'>Total</h2>";
							echo "<h2 id='sumAmount'>".$sum."$</h2>";
							echo "</div>";
							echo "</li>";
							echo "</ul>";
							echo "</div>";
						}
					?>
				</div>
				<div id="changePasswordBox" class="change-password-box">
					<div class="change-box-content animated zoomIn">
						<form method="post" action="change_password.php">
							<div class="row">
								<label>Enter old password</label>
								<input name="oldPassword" type="password" pattern=".{6,}" title="Atleast 6 or more characters are required" required>
							</div>
							<div class="row">
								<label>Enter new password</label>
								<input name="newPassword" type="password" pattern=".{6,}" title="Atleast 6 or more characters are required" required>
							</div>
							<div class="row">
								<label>Confirm new password</label>
								<input name="newPasswordConfirm" type="password" pattern=".{6,}" title="Atleast 6 or more characters are required" required>
							</div>
							<button type="submit" class="submit-change">Submit</button>
							<button class="close" type="button">Close</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>

</html>
