<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Signup page</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/a11.css"/>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<section id="user-back">
 		<a href="index.php" class="cancel"><i class="fa-solid fa-xmark"></i></a>
 	</section>
	<div class="id">
		<h1>Create an account</h1>	
		<div class="signup-box">
				<div class="left-box">
					<form method="post" action="user.php">
						
						<input type="text" name="username" class="input-box" placeholder="Enter user name" value="<?php echo $username; ?>">
						<input type="email" name="email" placeholder="Your Email id" required class="input-box"value="<?php echo $email; ?>">
						<input type="password" placeholder="Create Password" required class="input-box" name="password_1">
						<input type="password" placeholder="confirm Password" required class="input-box" name="password_2">
						<input type="checkbox" id="terms">
						<label for="terms">I accept the terms & conditions.</label>
						<button type="submit" name="reg_user">SIGN UP<span>&#x27f6;</span>
						</button>
					</form>
				</div>
		</div>
		<p class="login-msg">I already have an account? <a href="login.php">Login Now</a></p>
	</div>

</body>


</html>