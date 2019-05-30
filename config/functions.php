<?php

//login function
function logged_in(){

	if(isset($_SESSION['logged_in'])){

		return true;
	}else{

		return false;
	}
}

//prevent normal users from seeing some pages
function requireLogin(){

	if(!logged_in()){

		header("Location:?page=login");

	}
}

//function called in the admin pages to restrict access
function probeAdmin(){

requireLogin();

	if($_SESSION['role'] == 'admin'){

	}else{

		header("Location:?page=home");
	}

}

//function called before each SQL query to prevent SQL injection and hacking
function esc(&$str) // pass by reference, so the original variable is changed
{
	
	$str = mysql_real_escape_string($str);
	
}



?>