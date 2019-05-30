function validateLogin(){

	var valid = true;

	var email = $("#inputEmail").val();
	var password = $("#inputPassword").val();

	if(email == ""){

		valid = false;
		$('span#errorsEmail').html('Please enter your email !');
	}

	if(password == ""){

		valid = false;
		$('span#errorsPassword').html('Please enter your password !');
	}

	if(valid == false){

		return false;
	
	}else{

		return true;
	}

}

$(document).ready(function(){

	$("#submitLogin").click(validateLogin);

});