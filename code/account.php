<?php

// Starting the session, to use and
// store data in session variable
session_start();

// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You have to log in first";
	header('location: login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ecommerce Tutorial</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/a11.css"/>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">


	<link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

   
</head>
<body>
	<section id="header">
 		<a href="#"><img src="C:\Users\Lenovo\Downloads\chirag-marvaniya-low-resolution-logo-color-on-transparent-background (1).png" class="logo" alt=""></a>
 		 		
 		<ul id="navbar1">
 				<li><a href="index.php">Home</a></li>
 				<li><a href="Shop.php">Shop</a></li>
 				<li><a href="about.php">About</a></li>
 				<li><a href="contact.php">Contact</a></li>
 		</ul>

 		<div>
 			<ul id="navbar">
 				
 				<li id="lg-bag"><a href="cart.php" class="fa-regular fa-cart-shopping"></a></li>
 				<li class="user"><a href="account.php" class="fa-solid fa-user"></a></li>
 				<a href="#" id="close"><i class="far fa-times"></i></a>
 			</ul>
 		</div>
 		<div id="mobile">
 			<a href="cart.php"><i class="far fa-shopping-bag"></i></a>
 			<i id="bar" class="fas fa-outdent"></i>
 		</div>
 	</section>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">

		<!-- Creating notification when the
				user logs in -->
		
		<!-- Accessible only to the users that
				have logged in already -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- information of the user logged in -->
		<!-- welcome message for the logged in user -->
		<?php if (isset($_SESSION['username'])) : ?>
			


<p>
				Welcome
				<strong>
					<?php echo $_SESSION['username']; ?>
				</strong>
			</p>



<p>
				<a style="display: inline-block;padding: 10px 20px;background-color: #4CAF50;color: #fff;text-decoration: none;border-radius: 4px;border: none;cursor: pointer;font-size: 16px;" 
				href="pass_change.php" >
					Click here to change password
				</a>
			</p>
			


<p>
				<a style="display: inline-block;padding: 10px 20px;background-color: black;color: white;text-decoration: none;border-radius: 4px;border: none;cursor: pointer;text-align: center;" class="button" href="login.php?logout='1'" style="color: red;">
					Click here to Logout
				</a>
			</p>



		<?php endif ?>
	</div>
</body>
</html>
