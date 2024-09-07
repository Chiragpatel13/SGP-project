<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ecommerce Tutorial</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/a11.css"/>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">

	
</head>
<body>
 	<section id="header">
 		<a href="#"><img src="C:\Users\Lenovo\Downloads\chirag-marvaniya-low-resolution-logo-color-on-transparent-background (1).png" class="logo" alt=""></a>
 		
 	</a>
 		
 			<ul id="navbar1">
 				<li><a href="index.php">Home</a></li>
 				<li><a href="shop.php">Shop</a></li>
 				<li><a href="blog.php">Blog</a></li>
 				<li><a  href="about.php">About</a></li>
 				<li><a class="active" href="contact.php">Contact</a></li>
 				</ul>

 		<div>
 			<ul id="navbar">
<li id="lg-bag"><a href="cart.php" class="fa-regular fa-cart-shopping"></a></li>
 				<li class="user"><a href="user.php" class="fa-solid fa-user"></a></li>
 				<a href="#" id="close"><i class="far fa-times"></i></a>
 			</ul>
 		</div>
 		<div id="mobile">
 			<a href="cart.php"><i class="far fa-shopping-bag"></i></a>
 			<i id="bar" class="fas fa-outdent"></i>
 		</div>
 	</section>

 		<section id="about-header" class="about-header">
  			<h2>#let's_talk</h2>
			<p>LEAVE A MESSAGE, We love to hear from you!</p>
 		</section>

 		<section id="contact-details" class="section-p1">
 			<div class="details">
 				<span>GET IN TOUCH</span>
 				<h2>Visit one of our agency locations or contact us today</h2>
 				<h3>Head Office</h3>
 				<div>
 					<li>
 						<i class="fa-solid fa-map"></i>
 						<p>Anand,Gujarat,India</p>
 					</li>
 					<li>
 						<i class="far fa-envelope"></i>
 						<p>abc@gmail.com</p>
 					</li>
 					<li>
 						<i class="fas fa-phone-alt"></i>
 						<p>+91 1234567890</p>
 					</li>
 					<li>
 						<i class="far fa-clock"></i>
 						<p>Monday to Saturday: 9:00am to 16:00pm</p>
 					</li>
 				</div>
 			</div>

 		</section>

 		<section id="form-details">
 			
 			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateForm()">
 				<span>LEAVE A MESSAGE</span>
 				<h2>We love to her from you</h2>
 				<input type="text" name="name" placeholder="Your Name" name="userInput1" class="userInput">
 				<input type="email" name="email" placeholder="E-mail" name="userInput2" class="userInput">
 				<input type="text" name="subject" placeholder="Subject" name="userInput3" class="userInput">
 				<textarea name="message" cols="30" rows="10" placeholder="Your Message" name="userInput" class="userInput"></textarea>
 				<button class="normal" type="submit" name="confirm" onclick="showAlert()">Submit</button>


 			</form>

	
 		</section>

 		<footer class="section-p1">
 			<div class="col">
 				
 				<h4>Contact</h4>
 				<p><strong>Address:-</strong>Anand,,Gujarat,India</p>
 				<p><strong>Phone:-</strong>+91 6353173587</p>
 				<p><strong>Hours:-</strong> 10:00 - 18:00, Mon - Sat</p>

 				<div class="follow">
 					<h4>Follows us</h4>
 					<div class="icon">
 						<i class="fab fa-facebook-f"></i>
 						<i class="fab fa-twitter"></i>
 						<i class="fab fa-instagram"></i>
 						<i class="fab fa-pinterest-p"></i>
 						<i class="fab fa-youtube"></i>
 					</div>
 				</div>
 			</div>
 			<div class="col">
 				<h4>About</h4>
 				<a href="index.php">Home</a>
 				<a href="about.php">About Us</a>
 				<a href="blog.php">blog</a>
 				<a href="shop.php">Shop</a>
 				<a href="contact.php">Contact Us</a>
 			</div>

 			<div class="col">
 				<h4>My Account</h4>
 				<a href="account.php">Sign In</a>
 				<a href="cart.php">View Cart</a>
 				<a href="contact.php">Help</a>
 			</div>
 		</footer>
</body>
</html>


