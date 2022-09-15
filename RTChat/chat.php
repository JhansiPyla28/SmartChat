<?php 
  session_start();
  include 'configuration.php';
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
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
	<link rel="icon" href="logo.png">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">	
</head>

<body>
	<!-- <h1 class="title">SmartChat</h1> -->
	<div class="wrapper" style="margin-top:-3%;">
	    <section class="chat-area">
	    	<header>
	    		<?php 
		    		include 'configuration.php';
		    		$user_id = mysqli_real_escape_string($con, $_GET['user_id']);
          			$sql = mysqli_query($con, "SELECT * FROM users WHERE unique_id = {$user_id}");
	            	if(mysqli_num_rows($sql) > 0){
	              		$row = mysqli_fetch_assoc($sql);
	            	}
          		?>
	    		<a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
	    		<img src="images/<?php echo $row['image']; ?>" alt="">
	    		<div class="details">
	    			<span><?php echo $row['fname']. " " . $row['lname'] ?></span>
	    			<p><?php echo $row['status']; ?></p>
	    		</div>
	    	</header>
	    	<div class="chat-box">
	    		
	    	</div>
	    	<form action="#" class="typing-area" autocomplete="off">
	    		<input type="text" value="<?php echo $_SESSION['unique_id']; ?>" name="outgoing_id" hidden>
	    		<input type="text" value="<?php echo $user_id; ?>" name="incoming_id" hidden>
	    		<input type="text" class="input-field" placeholder="Type a message here" name="message">
	    		<button><i class="fab fa-telegram-plane"></i></button>
	    	</form>
		</section>
	</div>
	<script type="text/javascript" src="chat.js"></script>
</body>
</html>