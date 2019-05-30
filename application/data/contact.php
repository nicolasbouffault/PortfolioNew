<?php
//contact data file

//create new contact from the contact page
function createContact($name, $company, $email, $phone, $message){

	esc($name);
	esc($company);
	esc($email);
	esc($phone);
	esc($message);

	$query = mysql_query("INSERT INTO contact(name, company, email, phone, message) VALUES('$name', '$company', '$email', '$phone', '$message')");

	if(!$query){

		echo mysql_error();
		exit();

	}

}




?>