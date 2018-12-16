<!DOCTYPE html>
<html>

	<head>
		<meta name="viewport" content="width=device-width">
		<meta name="author" content="Nishat Sayyed">
		<title>About</title>

		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="animate.css">
		<script src="jquery.js"></script>
		<script src="script.js"></script>
	</head>

	<body>
		<?php
			session_start();
			$firstName = $_SESSION['firstName'];
			$lastName = $_SESSION['lastName'];
			$email = $_SESSION['email'];
		?>

		<div class="background-container">
			<video id="video-background" preload="auto"
			autoplay="true" loop="loop" muted="muted">
				<source src="mobile.mp4" type="video/mp4">
					Video not supported
			</video>
		</div>

		<div class="content">
			<header class="animated fadeInDown">
				<div class="container">
					<div id="branding"">
						<h1><span class="hightlight">NMS</span> Web Design</h1>
					</div>
					<nav>
						<ul>
							<li><a href="user_index.php">Home</a>
							</li>
							<li class="current"><a href="user_about.php">About</a>
							</li>
							<li><a href="user_services.php">Services</a>
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
						<button type="submit">Subscribe</button>
					</form>
				</div>
			</section>

			<section id="main">
				<div class="container">
					<article class="main-column">
						<h1 class="page-title">About us</h1>
						<div class="about animated bounceIn">
							<p>Nothing special about us. We are here to help you...to build you...to motivate you...<br>
								We will help you create your stunning and mind blowing websites which will convey your thoughts and emotions right for you <br>
								Just before starting keep this in mind that we are here forever for you, so never hesitate<br>
								We build websites that will build your career. We build websites that ignite your business<br>
								The most important things are not things, so we’ll design experiences.<br>
								We are a guiding tool, we make your thought idea a reality.</p>
							<p>We create websites that have it all: Beauty and Brains.<br>
							You sir there found the right place...You are currently prepared for everything but one small thing left.. "A smart and talented web designer"<br>
							We consider thing that are important for you and meaningful for your audience. You can consider us as<br> <b>"Your technical partner towards web success."</b></p>
						</div>
						
					</article>
					<aside id="sidebar">
						<div class="aside-section animated slideInRight">
							<h3>What we do</h3>
							<p>If you are reading this then you would probably know what we are doing... ;)<br>
							Moreover we are students preparing for our mini project for the subject of Web Programming
							The main concept is that here at Nishat's Web Design we teach you and build you for your upcoming web design career.
							<br>We design, manage and develop custom web applications that suit you</p>
						</div>
					</aside>
					<article class="main-column contact">
						<h1 class="page-title">Contact us</h1>
						<div>
							<div class="card animated zoomInLeft">
								<!--<img src="http://www.softwarefx.com/products/images/icon-developer.png" style="width: 100%">-->
								<div class="cardContainer">
									<h2>Nishat Sayyed</h2>
									<p class="title">Developer and Creator</p>
									<p>Vidyalankar Institute of Technology</p>
									<div style="margin: 24px 0">
										<a href=#><i class="fa fa-facebook-official"></i></a>
										<a href=#><i class="fa fa-twitter"></i></a>
										<a href=#><i class="fa fa-google-plus"></i></a>
										<a href=#><i class="fa fa-instagram"></i></a>
									</div>
									<p><button>Contact</button></p>
								</div>
							</div>
							<div class="card animated zoomInDown">
								<div class="cardContainer">
									<h2>Sumit Vishwakarma</h2>
									<p class="title">Design Layout and Management</p>
									<p>Vidyalankar Institute of Technology</p>
									<div style="margin: 24px 0">
										<a href=#><i class="fa fa-facebook-official"></i></a>
										<a href=#><i class="fa fa-twitter"></i></a>
										<a href=#><i class="fa fa-google-plus"></i></a>
										<a href=#><i class="fa fa-instagram"></i></a>
									</div>
									<p><button>Contact</button></p>
								</div>
							</div>
							<div class="card animated zoomInRight">
								
								<div class="cardContainer">
									<h2>Mohammed Painter</h2>
									<p class="title">Content Editor and Author</p>
									<p>Vidyalankar Institute of Technology</p>
									<div style="margin: 24px 0">
										<a href=#><i class="fa fa-facebook-official"></i></a>
										<a href=#><i class="fa fa-twitter"></i></a>
										<a href=#><i class="fa fa-google-plus"></i></a>
										<a href=#><i class="fa fa-instagram"></i></a>
									</div>
									<p><button>Contact</button></p>
								</div>
							</div>
						</div>
				</div>
			</section>
			<footer class="animated fadeInUp">
				<p>NMS, Copyright &copy;
					2017
				</p>
			</footer>
		</div>
	</body>

</html>
