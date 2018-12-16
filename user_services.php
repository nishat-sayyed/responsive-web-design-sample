<!DOCTYPE html>
<html>

	<head>
		<meta name="viewport" content="width=device-width">
		<meta name="author" content="Nishat Sayyed">
		<title>Services</title>
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<script src="jquery.js"></script>
		<script src="script.js"></script>
		<link rel="stylesheet" href="animate.css">
	</head>

	<body>
		<?php
			session_start();
			$firstName = $_SESSION['firstName'];
			$lastName = $_SESSION['lastName'];
			$name = $firstName." ".$lastName;
			$email = $_SESSION['email'];
			$_SESSION['name'] = $name;
		?>

		<div class="background-container">
			<video id="video-background" preload="auto"
			autoplay="true" loop="loop" muted="muted">
				<source src="coffee.mp4" type="video/mp4">
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
							<li class="current"><a href="user_services.php">Services</a>
							</li>
							<li><a href="profile.php">My account</a>
							</li>
							<li><a href="login.html">Logout</a>
							</li>
						</ul>
					</nav>
				</div>
			</header>

			<section id="newsletter" class="animated fadeInDown">
				<div class="container">
					<h1>Subscribe to our newsletter</h1>
					<form>
						<input type="email" value="<?php echo $email?>" placeholder="Enter email id" disabled>
						<button type="submit" class="button1">Subscribe</button>
					</form>
				</div>
			</section>

			<section id="main">
				<div class="container">
					<article class="main-column">
						<h1 class="page-title">Services</h1>
						<div id="services">
							<div class="service animated slideInLeft">
								<button class="expandable">HTML and CSS</button>
								<div class="panel">
									<div class="panelCard">
										<div class="cardContainer">
											<h2>Learn HTML</h2>
											<p class="title limitLine">HTML is easy to learn - You will enjoy it.</p>
											<button class="openUserModal" cardIndex="0">Learn more</button>
										</div>
									</div>
									<div class="panelCard">
										<div class="cardContainer">
											<h2>Learn CSS</h2>
											<p class="title limitLine">CSS describes how HTML elements should be displayed.</p>
											<button class="openUserModal" cardIndex="1">Learn more</button>
										</div>
									</div>
									<div class="panelCard">
										<div class="cardContainer">
											<h2>Learn Bootstrap</h2>
											<p class="title limitLine">Bootstrap gives you the ability to easily create responsive designs.</p>
											<button class="openUserModal" cardIndex="2">Learn more</button>
										</div>
									</div>
									<div class="panelCard">
										<div class="cardContainer">
											<h2>Learn Icons</h2>
											<p class="title limitLine">A website is incomplete without icons</p>
											<button class="openUserModal" cardIndex="3">Learn more</button>
										</div>
									</div>
									<div class="panelCard">
										<div class="cardContainer">
											<h2>Learn W3.CSS</h2>
											<p class="title limitLine">W3.CSS is a modern CSS framework with built-in responsiveness:</p>
											<button class="openUserModal" cardIndex="4">Learn more</button>
										</div>
									</div>
								</div>
							</div>
							<div class="service animated slideInRight">
								<button class="expandable">JavaScript</button>
								<div class="panel">
									<div class="panelCard">
										<div class="cardContainer">
											<h2>Learn JavaScript</h2>
											<p class="title limitLine">JavaScript is the programming language of HTML and the Web.</p>
											<button class="openUserModal" cardIndex="5">Learn more</button>
										</div>
									</div>
									<div class="panelCard">
										<div class="cardContainer">
											<h2>Learn JQuery</h2>
											<p class="title limitLine">jQuery greatly simplifies JavaScript programming.</p>
											<button class="openUserModal" cardIndex="6">Learn more</button>
										</div>
									</div>
									<div class="panelCard">
										<div class="cardContainer">
											<h2>Learn JSON</h2>
											<p class="title limitLine">Python is a programming language</p>
											<button class="openUserModal" cardIndex="7">Learn more</button>
										</div>
									</div>
									<div class="panelCard">
										<div class="cardContainer">
											<h2>Learn AJAX</h2>
											<p class="title limitLine">AJAX is a developer's dream. Ajax is “the method of exchanging data with a server, and updating parts of a web page</p>
											<button class="openUserModal" cardIndex="8">Learn more</button>
										</div>
									</div>
									<div class="panelCard">
										<div class="cardContainer">
											<h2>Learn AngularJS</h2>
											<p class="title limitLine">AngularJS extends HTML with new attributes. AngularJS is perfect for Single Page Applications</p>
											<button class="openUserModal" cardIndex="9">Learn more</button>
										</div>
									</div>
								</div>
							</div>
							<div class="service animated slideInLeft">
								<button class="expandable">Server Side</button>
								<div class="panel">
									<div class="panelCard">
										<div class="cardContainer">
											<h2>Learn SQL</h2>
											<p class="title limitLine">SQL is a standard language for storing, manipulating and retrieving data in databases.</p>
											<button class="openUserModal" cardIndex="10">Learn more</button>
										</div>
									</div>
									<div class="panelCard">
										<div class="cardContainer">
											<h2>Learn PHP</h2>
											<p class="title limitLine">PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.</p>
											<button class="openUserModal" cardIndex="11">Learn more</button>
										</div>
									</div>
									<div class="panelCard">
										<div class="cardContainer">
											<h2>Learn ASP</h2>
											<p class="title limitLine">ASP and ASP.NET are server side technologies.Both technologies enable computer code to be executed by an Internet server.</p>
											<button class="openUserModal" cardIndex="12">Learn more</button>
										</div>
									</div>
								</div>
							</div>
							<div class="service animated slideInRight">
								<button class="expandable">Web Building</button>
								<div class="panel">
									<div class="panelCard">
										<div class="cardContainer">
											<h2>Web Templates</h2>
											<p class="title limitLine">We have created some responsive W3.CSS website templates for you to use.You are free to modify, save, share, and use them in all your projects.</p>
											<button class="openUserModal" cardIndex="13">Learn more</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
					<aside id="sidebar">
						<div class="aside-section animated slideInRight">
							<h3>Stay Connected!!!</h3>
							<form class="connect" method="POST" action="user_message_process.php">
								<div>
									<label>Name</label>
									<br>
									<input name="name" type="text" value="<?php echo $firstName." ".$lastName?>" placeholder="Enter name" disabled>
								</div>
								<div>
									<label>Email</label>
									<br>
									<input name="email" type="email" value="<?php echo $email?>" placeholder="Enter email" disabled>
								</div>
								<div>
									<label>Message</label>
									<br>
									<textarea name="message" placeholder="Message"></textarea>
								</div>
								<button type="submit">Send</button>
							</form>
						</div>
					</aside>
				</div>
			</section>

			<footer class="animated fadeInUp">
				<p>NMS, Copyright &copy; 2017</p>
			</footer>
		</div>

		<div id="myModal" class="modal">
			<div class="modalContent animated zoomIn">
				<form action="add_to_cart_db.php" method="post">
					<div class="modalHeader">
						<span id="closeButton">&times;</span>
						<h2 id="modalTitle">Modal Title</h2>
						<input id="itemName" type="hidden" name="name">
					</div>
					<div class="modalBody">
						<p id="modalBodyText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tristique magna. Ut venenatis porta tellus vitae eleifend. Vestibulum ullamcorper porta porta. Maecenas a mi a libero varius tempor sed id eros. Suspendisse in volutpat sem. Proin posuere lacus id erat ornare eleifend. Curabitur purus ante, efficitur quis lacus quis, efficitur facilisis urna. Nam vestibulum nunc vehicula eleifend tincidunt. Aliquam auctor id turpis quis efficitur.</p>
						<span id="p">Price:</span>  <span id="price"></span><span id="dollar">$</span>
						<input id="itemPrice" type="hidden" name="price">
						<button type="submit" id="addToCart">ADD TO CART</button>
					</div>
				</form>
			</div>
		</div>

	</body>

</html>
