//jquery validation for the login form
function validateLogin(){

	var valid = true;

	var email = $("#inputEmail").val();
	var password = $("#inputPassword").val();

	if(email == ""){

		valid = false;
		$('span#errorsEmail').html('Please enter your email !');
	}
	else
	{

		$('span#errorsEmail').html('');
	}

	if(password == ""){

		valid = false;
		$('span#errorsPassword').html('Please enter your password !');
	}
	else
	{

		$('span#errorsPassword').html('');
	}

	if(valid == false){

		return false;
	
	}else{

		return true;
	}

}

$(document).ready(function(){

	//calling function
	$("#submitLogin").click(validateLogin);

});