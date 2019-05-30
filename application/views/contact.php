<div class="row-fluid">

	<div class="span6">

		<p class="italic">Please fill up the form below and I will get back to you as soon as possible</p>
		<p class="italic">Alternatively, you can contact me by sending me an email or a message on the social networks</p>

		<form method="post" action="" class="form-horizontal">

			<div class="control-group">
				<label class="italic" for="inputName">Your Name* : </label>
				<input type="text" name="name" id="inputName" placeholder="Name" value="<?php echo $name;?>"><span id="errorsName" class="errors"><?php echo $errorsName;?></span>
			</div>

			<div class="control-group">
				<label class="italic" for="inputCompany">Your Company : </label>
				<input type="text" name="company" id="inputCompany" placeholder="Company" value="<?php echo $company;?>">
			</div>

			<div class="control-group">
				<label class="italic" for="inputEmail">Your Email* : </label>
				<input type="text" name="email" id="inputEmail" placeholder="Email" value="<?php echo $email;?>"><span id="errorsEmail" class="errors"><?php echo $errorsEmail;?></span>
			</div>

			<div class="control-group">
				<label class="italic" for="inputPhone">Your Phone Number* : </label>
				<input type="text" name="phone" id="inputPhone" placeholder="Phone" value="<?php echo $phone;?>"><span id="errorsPhone" class="errors"><?php echo $errorsPhone;?></span>
			</div>

			<div class="control-group">
				<label class="italic" for="inputMessage">Your Message* : </label>
				<textarea id="inputMessage" name="message" rows="5" placeholder="Message"><?php echo $message;?></textarea><span id="errorsMessage" class="errors"><?php echo $errorsMessage;?></span>
			</div>

			<p class="italic">* Required Fields</p>

			<input class="btn btn-inverse" id="submitContact" name="submit" type="submit">


		</form>

	</div>

	
	<div class="span6 col1">

		<div class="contact">

			<p><img src="site/img/phone.png" alt="phone"/>(+44) 07407387616</p>
			<p><img src="site/img/mail.png" alt="mail"/><a class="mail" href="mailto:nicolasbouffault@gmail.com">nicolasbouffault@gmail.com</a></p>
			<p><img src="site/img/skype.png" alt="skype"/>nicolasbouffault</p>
			<p><img src="site/img/facebook.png" alt="facebook"/><a class="mail" href="http://www.facebook.com/nicolas.bouffault" target="_blank">Facebook</a></p>
			<p><img src="site/img/twitter.png" alt="twitter"/><a class="mail" href="http://www.twitter.com/NicoWestLondon" target="_blank">Twitter</a></p>
			<p><img src="site/img/linkedin.png" alt="linkedin"/><a class="mail" href="http://uk.linkedin.com/pub/nicolas-bouffault/4a/8ba/204" target="_blank">Linkedin</a></p>

		</div>

	</div>



</div>