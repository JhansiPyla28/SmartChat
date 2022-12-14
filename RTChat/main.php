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
	    <section class="form signup">
	    	<header>SMARTCHAT<img src="logo.png" width="25px" height="25px"></header>
	      	<form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
	        	<div class="error-text"></div>
	        	<div class="name-details">
	          		<div class="field input">
	            		<label>First Name</label>
	            		<input type="text" name="fname" placeholder="First name" required>
	          		</div>
	          		<div class="field input">
	            		<label>Last Name</label>
	            		<input type="text" name="lname" placeholder="Last name" required>
	          		</div>
	        	</div>
	        	<div class="field input">
	          		<label>Email Address</label>
	          		<input type="text" name="email" placeholder="Enter your email" required>
	        	</div>
	        	<div class="field input">
	          		<label>Password</label>
	          		<input type="password" name="password" placeholder="Enter new password" required>
	          		<i class="fas fa-eye"></i>
	        	</div>
	        	<div class="field image" >
	          		<label >Select Image</label>
	          		<input  type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
	        	</div>
	        	<div class="field button">
	          		<input style="background-color:#a84176" type="submit" name="submit" value="Continue to Chat">
	        	</div>
	      	</form>
	      	<div class="link">Already signed up? <a href="login.php">Login now</a></div>
		</section>
	</div>
	<script type="text/javascript" src="script.js"></script>
	<script type="text/javascript" src="signup.js"></script>
</body>
</html>