function validateContact()
{
		var valid = true;

		var name = $("#inputName").val();
		var email = $("#inputEmail").val();
		var phone = $("#inputPhone").val();
		var message = $("#inputMessage").val();

		if(name == ""){

			valid = false;
			$('span#errorsName').html('Please enter your name !');
			
		}

		if(email == ""){

			valid = false;
			$('span#errorsEmail').html('Please enter your email !');
		}

		if(phone == ""){

			valid = false;
			$('span#errorsPhone').html('Please enter your phone number !');
		}else{

			if(isNaN(phone)){

				valid = false;
				$('span#errorsPhone').html('Please enter a correct number !');
			}
		}

		if(message == ""){

			valid = false;
			$('span#errorsMessage').html('Please enter a message !');
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

	$("#submitContact").click(validateContact);

});