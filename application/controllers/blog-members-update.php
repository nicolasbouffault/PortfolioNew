<?php
//blog-members-update controller
requireLogin();

include(DATA.'users.php');

$valid = true;

//get the informations of the current session
$new_firstname = $_SESSION['first_name'];
$new_lastname = $_SESSION['last_name'];
$new_email = $_SESSION['email'];
$new_username = $_SESSION['username'];

$errorsFname = "";
$errorsLname = "";
$errorsEmail = "";
$errorsUsername = "";
$errorsPassword = "";
$errorsCurrentPassword = "";
$errorsConfPassword = "";

$changedPassword = "";
$changedDetails = "";

if(isset($_SESSION['logged_in'])){
	$id = $_SESSION['user_id'];	
}

//form validation for account informations
if(isset($_POST['submitInfo'])){

	//get the informations entered in the fields
	$new_firstname = $_POST['firstname'];
	$new_lastname = $_POST['surname'];
	$new_email = $_POST['email'];
	$new_username = $_POST['username'];
	
	
	if(empty($new_firstname)){

		$valid = false;
		$errorsFname = "Please enter your first name !";
	}

	if(empty($new_lastname)){

		$valid = false;
		$errorsLname = "Please enter your last name !";
	}

	if(empty($new_email)){

		$valid = false;
		$errorsEmail = "Please enter your email !";
	}else{

		//validation email
		if(!filter_var($new_email, FILTER_VALIDATE_EMAIL)){

			$valid = false;
			$errorsEmail = "Please enter a correct email !";
		}
	}

	if(empty($new_username)){

		$valid = false;
		$errorsUsername = "Please enter your username !";
	}else{

		//check length of username
		if(strlen($new_username)<4){

			$errorsUsername = "Your username is too short !";

		}
	}


	if ($valid == true)
	{
	
	//changeUser function to change details of users
	$success = changeUserInfo($id, $new_firstname, $new_lastname, $new_email, $new_username);

		//display message to the user after details have been updated
		if($success)
		{
			$changedDetails = "Your details have been updated !";

		}
		else
		{
			$changedDetails = "Your details were NOT changed !";

		}
	
	//update session with new values
	$_SESSION['first_name'] = $new_firstname;
	$_SESSION['last_name'] = $new_lastname;
	$_SESSION['email'] = $new_email;
	$_SESSION['username'] = $new_username;


	}
}

//form validation for password 
if(isset($_POST['submitPassword'])){

	$current_password = $_POST['currentPassword'];
	$new_password = $_POST['newPassword'];
	$new_confPassword = $_POST['confPassword'];

	if(empty($current_password)){

		$valid = false;
		$errorsCurrentPassword = "Please enter your current password !";
	}else{

		//convert the current password entered to md5 format
		$current_password_md5 = md5($current_password);
		//call the comparePasswords function to compare the one entered to the one in the database
		$compare_passwords  = comparePasswords($id, $current_password_md5);

		//return false if current password is not correct
		if($compare_passwords == false){

			$valid = false;
			$errorsCurrentPassword = "Your password didn't match our records !";
		}

	}

	if(empty($new_password)){

		$valid = false;
		$errorsPassword = "Please enter your password !";
	}else{

		//check length of password
		if(strlen($new_password)<5){

			$valid = false;
			$errorsPassword = "Your password is too short !";
		}
	}

	if(empty($new_confPassword)){

		$valid = false;
		$errorsConfPassword = "Please confirm your password !";
		
	}else{

		//check if passwords are the same
		if(!empty($new_confPassword) && $new_password != $new_confPassword){

			$valid = false;
			$errorsConfPassword = "Your confirmation password is different from your password !";
		}
	}

	if ($valid == true)
	{
	
		//changeUser function to change details of users
		$success = changeUserPassword($id, $new_password);
		
		//display message to user after password has been updated
		if ($success)
		{
			$changedPassword = "Your password has been changed !";
		}
		else
		{
			$changedPassword = "Your password was NOT changed !";
		}

	}

}

//include files
include(VIEWS.'header.php');
include(VIEWS.'blog-members-update.php');
include(VIEWS.'footer.php');

?>