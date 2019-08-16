<?php
function user_exists($user_name) 
{
	global $conn;

	$sql = "SELECT id FROM user WHERE user_name = '$user_name'";

	$result = $conn->query($sql);

	if($result->num_rows == 1 ) {
		return true;
	} else {
		return false;
	}
}

function valid_email($str) {
return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
}

if(!valid_email("test@example.com")){
echo "Invalid email address.";
}


function get_name($user_name) {
	global $conn;

	$sql = "SELECT name FROM user WHERE user_name = '$user_name'";

	$result = $conn->query($sql);

	$row = $result->fetch_assoc();

	return $row["name"];
}
function get_id($user_name) {
	global $conn;

	$sql = "SELECT id FROM user WHERE user_name = '$user_name'";

	$result = $conn->query($sql);

	$row = $result->fetch_assoc();

	return $row["id"];
}

function get_user_id($user_name) {
	global $conn;

	$sql = "SELECT id FROM user WHERE user_name = '$user_name'";

	$result = $conn->query($sql);

	$row = $result->fetch_assoc();

	return $row["id"];
}
function get_user_name($user_id) {
	global $conn;

	$sql = "SELECT name FROM user WHERE id = '$user_id'";

	$result = $conn->query($sql);

	$row = $result->fetch_assoc();

	return $row["name"];
}
function get_role($user_name) {
	global $conn;

	$sql = "SELECT role FROM user WHERE user_name = '$user_name'";

	$result = $conn->query($sql);

	$row = $result->fetch_assoc();

	return $row["role"];
}



function set_message($message) 
{
	if(!empty($message)){
		$_SESSION['message'] = $message;
	}else {
		$message = "";
	}
}

function display_message()
{
	if(isset($_SESSION['message'])) {
		echo $_SESSION['message'];

		unset($_SESSION['message']);
	}
}

function redirect($location){
	return header("Location: {$location}");
}

function validation_errors($error_message) 
{
$error_message = <<<DELIMITER

<div class="alert alert-danger alert-dismissible" role="alert">
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  	<strong>Warning!</strong> $error_message
 </div>
DELIMITER;

set_message($error_message);
}

function logged_in()
{
	
	if(isset($_SESSION['user_name']) || isset($_COOKIE['user_name'])){
		return true;
	} else {
		return false;
	}
}
