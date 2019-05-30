<?php
//contact controller

include(DATA.'contact.php');

$valid = true;
$errorsName = "";
$errorsEmail = "";
$errorsPhone = "";
$errorsMessage = "";
$name = "";
$company = "";
$email = "";
$phone = "";
$message = "";

//form validation
if(isset($_POST['submit'])){
$name = $_POST['name'];
$company = $_POST['company'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$phone = str_replace(" ", "", $phone);
$message = htmlentities(trim($_POST['message']));


$to = "nicolasbouffault@gmail.com";
$subject = "Informations Request";


	if(!empty($name)){


	}else{

		$valid = false;
		$errorsName = "Please enter your name !";

	}

	if(!empty($email)){

		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

			$valid = false;
			$errorsEmail = "Email is not valid !";
		}

	}else{

		$valid = false;
		$errorsEmail = "Please enter your email !";
	}

	if(!empty($phone)){

		if(!is_numeric($phone)){

			$valid = false;
			$errorsPhone = "Please enter a correct number !";
		}

	}else{

		$valid = false;
		$errorsPhone = "Please enter your phone number !";
	}

	if(!empty($message)){


	}else{

		$valid = false;
		$errorsMessage = "Please enter a message !";
	}


	if($valid){

		//send mail
		mail($to, $subject. ' from '. $name, $message);
		
		//create new row in the database
		createContact($name, $company, $email, $phone, $message);

		//redirection
		header("Location:?page=submitted-form");

	}
	
}


//include files
include(VIEWS.'header.php');
include(VIEWS.'contact.php');
include(VIEWS.'footer.php');


?>