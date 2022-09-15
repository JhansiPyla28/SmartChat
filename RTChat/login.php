<?php
	include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		SmartChat
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">	
</head>
<body>
	<div class="wrapper">
	    <section class="form login">
	    	<img src="user.png" height="150px" width="150px">
	    	<center><header>Welcome to SmartChat<img src="logo.png" width="20px" height="20px"></header></center>
	    	<!-- <p class="line-1 anim-typewriter">Animation typewriter style using css steps()</p> -->
	      	<form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
	        	<div class="error-text"></div>
	        	<div class="field input">
	          		<label>Email Address</label>
	          		<input type="text" name="email" placeholder="Enter your email" required>
	        	</div>
	        	<div class="field input">
	          		<label>Password</label>
	          		<input type="password" name="password" placeholder="Enter new password" required>
	          		<i class="fas fa-eye"></i>
	        	</div>
	        	<div class="field button">
	          		<input style="background-color:#a84176" type="submit" name="submit" value="Continue to Chat">
	        	</div>
	      	</form>
	      	<div class="link">Not yet signed up? <a href="main.php">Signup now</a></div>
		</section>
	</div>

	<script type="text/javascript" src="script.js"></script>
	<script type="text/javascript" src="login.js"></script>
	<?php
		// include 'footer.php';
	?>
</body>
</html>