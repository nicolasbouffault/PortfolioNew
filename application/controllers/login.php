<?php
//login-blog controller

if(isset($_GET['action']) && $_GET['action'] == 'logout'){
	//end of session when logout, redirection to the blog page
	session_destroy();
	header("Location:?page=blog-home");
}


include(DATA.'users.php');

$valid = true;
$errorsEmail = "";
$errorsPassword = "";
$email = "";

//form validation
if(isset($_POST['submit'])){
$email = $_POST['email'];
$password = $_POST['password'];

	if(!empty($email)){

			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

				$valid = false;
				$errorsEmail = "Email is not valid !";
			}

	}else{

		$valid = false;
		$errorsEmail = "Please enter your email !";

	}

	if(!empty($password)){


	}else{

		$valid = false;
		$errorsPassword = "Please enter your password !";
	}

}

		if(!empty($_POST)){

			$user = login($email, md5($password));

			if($user == false){

				$errorsEmail = "This user was not found !";
			
			}else{

				//if user is true, set session variables 
				$_SESSION['logged_in'] = true;
				$_SESSION['user_id'] = $user['id'];
				$_SESSION['first_name'] = $user['first_name'];
				$_SESSION['last_name'] = $user['last_name'];
				$_SESSION['email'] = $user['email'];
				$_SESSION['username'] = $user['username'];
				$_SESSION['password'] = $user['password'];
				$_SESSION['role'] = $user['role']; 
				$_SESSION['author'] = $user['first_name'];


				//check if admin and redirection to admin home page
				if($_SESSION['role'] == 'admin'){
					header("Location:?page=admin/admin-home");
				
				}else{

					header("Location:?page=blog-members");
				}

			}

		}
	

//include files
include(VIEWS.'header.php');
include(VIEWS.'login.php');
include(VIEWS.'footer.php');

?>