<?php 
	$con=mysqli_connect("localhost","root","","Smartchat");
	if(!$con){
		echo "Database Connected" .mysqli_connect_error();
	}
?>