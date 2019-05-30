//jquery validation for the register form
function validateRegister(){


	var valid = true;

	var firstName = $("#inputFname").val();
	var lastName = $("#inputSurname").val();
	var email = $("#inputEmail").val();
	var username = $("#inputUsername").val();
	var password = $("#inputPassword").val();
	var confPassword = $("#inputConfPassword").val();

	if(firstName == ""){

		valid = false;
		$('span#errorsFirstName').html('Please enter your first name !');
	}
	else
	{
		$('span#errorsFirstName').html('');

	}

	if(lastName == ""){

		valid = false;
		$('span#errorsSurname').html('Please enter your last name !');
	}
	else
	{
		$('span#errorsSurname').html('');

	}

	if(email == ""){

		valid = false;
		$('span#errorsEmail').html('Please enter your email !');
	}
	else
	{
		$('span#errorsEmail').html('');

	}

	if(username == ""){

		valid = false;
		$('span#errorsUsername').html('Please enter your username !');
	}else{

		if(username.length < 4){

			valid = false;
			$('span#errorsUsername').html('Your username is too short !');
		}
	}
	else
	{
		$('span#errorsUsername').html('');

	}

	if(password == ""){

		valid = false;
		$('span#errorsPassword').html('Please enter a password !');
	}else{

		if(password.length < 5){

			valid = false;
			$('span#errorsPassword').html('Your password is too short !');
		}
	}
	else
	{
		$('span#errorsPassword').html('');
	}

	if(confPassword == ""){

		valid = false;
		$('span#errorsConfPassword').html('Please confirm your password !');
	}else{

		if(confPassword != password){

			valid = false;
			$('span#errorsConfPassword').html('Your confirmation password is different from your password !');
		}
	}
	else
	{
		$('span#errorsConfPassword').html('');
	}

	if(valid == false){

		return false;
	
	}else{

		return true;
	}

}


$(document).ready(function(){

	//calling function
	$("#submitRegister").click(validateRegister);

});