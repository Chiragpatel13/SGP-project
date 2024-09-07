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
		<h1>Login Now</h1>
		<div class="login-box">
				<div class="left-box">
					<form method="post" action="login.php">
						<input type="text" placeholder="username" required class="input-box" name="username">
						<input type="password" placeholder="Password" required class="input-box" name="password">
						<button type="submit" name="login_user">Login<span>&#x27f6;</span>
						</button>
					</form>
				</div>
		</div> 
		<p class="login-msg"><a href="user.php">Create New Acoount.</a></p>
	</div>

</body>


</html>