<?php
	session_start();
	// echo "This is from php";
	include_once "configuration.php";
	$fname=mysqli_real_escape_string($con,$_POST['fname']);
	$lname=mysqli_real_escape_string($con,$_POST['lname']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	if(!empty($fname)&&!empty($lname)&&!empty($email)&&!empty($password)){
		// Valid email or not
		if(filter_var($email,FILTER_VALIDATE_EMAIL)){
			// Lets check if the email already exists in the db
			$sql=mysqli_query($con,"SELECT email FROM users WHERE email='{$email}'");
			if(mysqli_num_rows($sql) > 0){
                echo "$email - This email already exist!";
            }else{
            	if(isset($_FILES['image'])){
            		$img_name=$_FILES['image']['name'];
            		// $img_type=$_FILES['image']['type'];
            		$tmp_name=$_FILES['image']['tmp_name'];
            		$img_explode=explode('.', $img_name);
            		$img_exit=end($img_explode);
            		$extensions=['png','jpeg','jpg'];
            		if(in_array($img_exit,$extensions)===true){
            			$time=time();
            			$new_img_name=$time.$img_name;
            			if(move_uploaded_file($tmp_name, "images/".$new_img_name))
            			{
            				$status="Active now";
            				$random_id=rand(time(),1000000);
            				$sql2= mysqli_query($con, "INSERT INTO users (unique_id, fname, lname, email, password, image, status)VALUES ({$random_id}, '{$fname}','{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')");
            				if($sql2){
            					$sql3=mysqli_query($con, "SELECT * FROM users WHERE email = '{$email}'");
            					if(mysqli_num_rows($sql3) > 0)
            					{
            						$row=mysqli_fetch_assoc($sql3);
            						$_SESSION['unique_id']=$row['unique_id'];
            						echo "success";
            					}
            				}
            				else{
            					echo "Something went wrong";
            				}
            			}
            		}
            		else
            		{
            			echo "Please select an Image file-jpeg,jpg,png";
            		}
            	}
            	else
            	{
            		echo "Please select an image";
            	}
            }
		}
		else{
			echo "$email -This is not valid email";
		}
	}
	else{
		echo "All input fields are required";
	}
?>