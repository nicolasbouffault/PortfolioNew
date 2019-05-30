<?php
//register-blog controller

include(DATA.'users.php');

$valid = true;
$errorsFirstname = "";
$errorsSurname = "";
$errorsEmail = "";
$errorsUsername = "";
$errorsPassword = "";
$errorsConfPassword = "";
$firstname = "";
$surname = "";
$email = "";
$username = "";
$userTaken = "";

//form validation
if(isset($_POST['submit'])){
$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$confPassword = $_POST['confPassword'];


	if(!empty($firstname)){


	}else{

		$valid = false;
		$errorsFirstname = "Please enter your first name !";

	}

	if(!empty($surname)){


	}else{

		$valid = false;
		$errorsSurname = "Please enter your surname !";
	}

	if(!empty($email)){

		//validation email
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

			$valid = false;
			$errorsEmail = "Please enter a correct email !";
		}

	}else{

		$valid = false;
		$errorsEmail = "Please enter your email !";
	}

	if(!empty($username)){

		//check lenght of the username
		if(strlen($username)<4){

			$errorsUsername = "Your username is too short !";

		}

	}else{

		$valid = false;
		$errorsUsername = "Please enter an username !";
	}

	if(!empty($password)){

		if(strlen($password)<5){

			$errorsPassword = "Your password is too short !";
		}

	}else{

		$valid = false;
		$errorsPassword = "Please enter a password !";
	}

	if(!empty($confPassword)){

		//check that password and confirm password are the same
		if($password != $confPassword){

			$valid = false;
			$errorsConfPassword = "Your confirmation password is different from your password !";
		}


	}else{

		$valid = false;
		$errorsConfPassword = "Please confirm your password !";
	}

	if(isset($password)){

		$password = md5($password);
		$confPassword = md5($confPassword);
	}

	if($valid){

	//check if user exist
	$userExist = userExist($email, $username);

		if($userExist){

			$userTaken = "Sorry, this user already exist !";
		
		}
		else
		{

		//call createUser function
		createUser($firstname, $surname, $email, $username, $password);
		mail('nicolasbouffault@gmail.com', 'New Member', $username. ' has just registered !');
		header("Location:?page=redirection");

		}
		
		
	}

}


//include files
include(VIEWS.'header.php');
include(VIEWS.'register.php');
include(VIEWS.'footer.php');

?>


