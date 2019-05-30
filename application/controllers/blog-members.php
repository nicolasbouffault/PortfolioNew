<?php
//blog-members controller
requireLogin();

include(DATA.'users.php');

$deletedUser = "";

if(isset($_SESSION['logged_in'])){
	$id = $_SESSION['user_id'];	
}

if(isset($_SESSION['logged_in'])){

	$firstname = $_SESSION['first_name'];
	$lastname = $_SESSION['last_name'];
	$email = $_SESSION['email'];
	$username = $_SESSION['username'];
	$password = $_SESSION['password'];
}

if(isset($_POST['delete'])){

$success = deleteUser($id);
	
	if($success){

		//unset session once the user has been deleted
		session_destroy();
		header("Location:?page=page");

	}
	else
	{
		$deletedUser = "Sorry ! Something went wrong ";

	}
}


//include files
include(VIEWS.'header.php');
include(VIEWS.'blog-members.php');
include(VIEWS.'footer.php');

?>