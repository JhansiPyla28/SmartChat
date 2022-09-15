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
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">	
</head>
<body>
	<div class="wrapper" style="margin-top:-3%">
	    <section class="users">
	    	<header>
	    		<?php 
	    		include 'configuration.php';
	    		// $user_id=mysqli_real_escape_string($con,$_GET['user_id']);
            	$sql = mysqli_query($con, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            	if(mysqli_num_rows($sql) > 0){
              		$row = mysqli_fetch_assoc($sql);
            	}
          		?>
	    		<div class="content">
	    			<img src="images/<?php echo $row['image']; ?>" alt="">
	    			<div class="details">
	    				<span><?php echo $row['fname']. " " . $row['lname'] ?></span>
	    				<p><?php echo $row['status']; ?></p>
	    			</div>
	    		</div>
	    		<a href="#" class="logout" style="background-color:#a0366d">LOGOUT</a>
	    	</header>
	    	<div class="search">
	    		<span class="text">Start Smart Chat with your friends</span>
	    		<input type="text" placeholder="Name bolo ji...?" name="">
	    		<button><i class="fas fa-search"></i></button>
	    	</div>
	    	<div class="users-list">
	    		
		    	
	    	</div>
		</section>
	</div>
	<script type="text/javascript" src="users.js"></script>

</body>
</html>