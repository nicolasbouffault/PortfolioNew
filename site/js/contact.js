//jquery validation for the contact form
function validateContact()
{
		var valid = true;

		var name = $("#inputName").val();
		var email = $("#inputEmail").val();
		var phone = $("#inputPhone").val();
		phone = phone.replace(/ /g, "");
		var message = $("#inputMessage").val();

		if(name == ""){

			valid = false;
			$('span#errorsName').html('Please enter your name !');	
		}
		else
		{
			$('span#errorsName').html('');

		}

		if(email == ""){

			valid = false;
			$('span#errorsEmail').html('Please enter your email !');
		}
		else
		{
			$('span#errorsEmail').html('');
		}

		if(phone == ""){

			valid = false;
			$('span#errorsPhone').html('Please enter your phone number !');
		}else{

			if(isNaN(phone)){

				valid = false;
				$('span#errorsPhone').html('Please enter a correct number !');
			}
			else{
				$('span#errorsPhone').html('');
			}
		}

		if(message == ""){

			valid = false;
			$('span#errorsMessage').html('Please enter a message !');
		}
		else
		{

			$('span#errorsMessage').html('');
		}

		if (valid == false)
		{
			return false; // if valid is false, form will not post
		}
		else
		{
			return true; 
		}
		
}

$(document).ready(function(){

	//calling function
	$("#submitContact").click(validateContact);

});