<?php
//users data file

//createUser function called in the register controller
function createUser($firstname, $surname, $email, $username, $password){

	esc($firstname);
	esc($surname);
	esc($email);
	esc($username);
	esc($password);

	$query = mysql_query("INSERT INTO users(first_name, last_name, email, username, password, sign_up_date, last_visited) VALUES('$firstname', '$surname', '$email', '$username', '$password', NOW(), NOW())");

	if(!$query){

		echo mysql_error();
		exit();
	}

}

//login function called in the login controller
function login($email, $password){

	esc($email);
	esc($password);

	$query = mysql_query("SELECT * FROM users WHERE email='$email' AND password='$password'");

	if(!$query){

		echo mysql_error();
		exit();
	}

		$numrows = mysql_num_rows($query);

		if($numrows == 0){

			return false;

		}else{

			$data = mysql_fetch_assoc($query);
			return $data;
		}	
}

//modify user details
function changeUserInfo($id, $new_firstname, $new_lastname, $new_email, $new_username){

	esc($new_firstname);
	esc($new_lastname);
	esc($new_email);
	esc($new_username);

	$query = mysql_query("UPDATE users SET first_name = '$new_firstname', last_name = '$new_lastname', email = '$new_email', username = '$new_username' WHERE id='$id'");

	if(!$query){

		error_log(mysql_error());
		return false;
		
	}
	else
	{
		return true;
	}
}

//delete an user
function deleteUser($id){

	$query = mysql_query("DELETE FROM users WHERE id = $id");

	if(!$query){

		error_log(mysql_error());
		return false;

	}
	else
	{
		return true;

	}

}

//modify password details 
function changeUserPassword($id, $new_password){

	esc($new_password);

	$new_password = md5($new_password);
	$query = mysql_query("UPDATE users SET password = '$new_password' WHERE id='$id'");

	if(!$query){

		error_log(mysql_error());
		return false;
	}
	else
	{
		return true;
	}
}

//compare the current password entered with the password of the database
function comparePasswords($id, $current_password_md5){

	esc($current_password_md5);

	$query = mysql_query("SELECT password FROM users WHERE id=$id");

	if(!$query){

		echo mysql_error();
		exit();
	}

	$record = mysql_fetch_assoc($query);

	if($record['password'] != $current_password_md5){

		return false;
	}else{

		return true;
	}

}

//check if user already exist
function userExist($email, $username){

	esc($email);
	esc($username);

	$query = "SELECT * FROM users WHERE username = '$username' AND email = '$email'";

	$result = mysql_query($query);

	if(!$result){

		error_log(mysql_error());
		return false;
	}

	$numrows = mysql_num_rows($result);

	if($numrows == 0){

		return false;
	}
	else
	{

		return true;
	}
	
}




?>