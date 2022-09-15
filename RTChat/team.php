<?php
	include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Team</title>
	<style type="text/css">
				@import url(https://fonts.googleapis.com/css?family=Anonymous+Pro);
		/* Global */
		.line-1{
		    position: relative;
		    top: 50%;  
		    width: 24em;
		    margin: 0 auto;
		    border-right: 2px solid rgba(255,255,255,.75);
		    font-size: 180%;
		    text-align: center;
		    white-space: nowrap;
		    overflow: hidden;
		    transform: translateY(-50%);    
		}

		/* Animation */
		.anim-typewriter{
		  animation: typewriter 4s steps(44) 1s 1 normal both,
		             blinkTextCursor 500ms steps(44) infinite normal;
		}
		@keyframes typewriter{
		  from{width: 0;}
		  to{width: 24em;}
		}
		@keyframes blinkTextCursor{
		  from{border-right-color: rgba(255,255,255,.75);}
		  to{border-right-color: transparent;}
		}
	</style>
</head>
<body style="margin-top:5%">
	<div>
	<center>
	<img style="border-radius: 50%;" src="developer.jpg" width="300" height="400">
	<p>
		<br>
		<p>
		<h1 class="line-1 anim-typewriter" style="font-size: 3rem;font-family: Lucida Calligraphy;">Jhansi Pyla @Full Stack WebDeveloper
		<p style="border-bottom:2px solid #ccc;" style="width:70%"></p>
		</h1>
		</p>
	</p>
	</center>
</body>
</html>