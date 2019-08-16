<?php
include_once "init.php";

if(isset($_POST["login"]))
{
	$user_id = $_POST['user_id'];
	$name = $_POST['first_name'];
	$user_name		= $_POST['user_name'];
	$pwd	= md5($_POST['pwd']);

		$sql = "SELECT user_name, pwd FROM user WHERE user_name = '$user_name' AND pwd = '$pwd' ";
			
			$result = $conn->query($sql);

	if ($result->num_rows == 1) 
	{

		if($_SESSION['user_name'] = $user_name)
			
			{
				redirect("../index.php");
			}
			else{
				
					echo "Invalid Credentials";
				}
		exit;
	} 
	else {
			set_message('<div class="alert alert-warning" role="alert" col-md-12"><p>Try Again</p></div>');
			redirect("../login.php");
		}
}

if(isset($_POST["register"]))
	{
			$name				= $_POST['name'];
			$user_name				= $_POST['user_name'];
			$role					= "0";
			$pwd                = md5($_POST['pwd']);

		if(user_exists($user_name)===TRUE)
		{
			 set_message('<div class="alert alert-warning" role="alert" col-md-12"><p>User Already Exist</p></div>');
			 redirect("../register.php");

		}
		else{
				$sql = "INSERT INTO user (name, user_name, pwd, role)
				VALUES ('$name', '$user_name', '$pwd', '$role')";

				if ($conn->query($sql) === TRUE)
				{
					set_message('<div class="alert alert-warning" role="alert" col-md-12"><p>Succesfuly Sign Up</p></div>');
	        		redirect("../login.php");
					exit;
				
				} 
				else {
	            		set_message("<p>Error: " . $sql . "<br>" . $conn->error . "</p>");
	        		}
			}	

				$conn->close();		
	}

