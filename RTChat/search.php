<?php
	session_start();
	include 'configuration.php';
	$outgoing_id=$_SESSION['unique_id'];
	$searchTerm=mysqli_real_escape_string($con,$_POST['searchTerm']);
	$output="";
	$sql="SELECT * FROM users WHERE fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%'";
	$query = mysqli_query($con, $sql);
	if(mysqli_num_rows($query)>0)
	{
		include 'data.php';

	}
	else{
		$output.="Meeru vethukuthunna vyakthi icchata leru";
	}
	echo $output;
?>

