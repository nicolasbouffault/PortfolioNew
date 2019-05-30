<div class="row-fluid">
	<a class="grey" href="?page=login">Login</a>
</div>

<div class="row-fluid">
	<h3 class="tagline">Register and post comments</h3>

	<div class="span6 offset3">
		<span class="errors"><?php echo $userTaken;?></span>
		<form method="post" action="" class="form-horizontal">

			<div class="control-group">
				<label class="control-label" for="inputFname">First Name</label>
				<div class="controls">
					<input type="text" name="firstname" id="inputFname" placeholder="First Name" value="<?php echo $firstname;?>"><span id="errorsFirstName" class="errors"><?php echo $errorsFirstname;?></span>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputSurname">Surname</label>
				<div class="controls">
					<input type="text" name="surname" id="inputSurname" placeholder="Surname" value="<?php echo $surname;?>"><span id="errorsSurname" class="errors"><?php echo $errorsSurname;?></span>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputEmail">Email</label>
				<div class="controls">
					<input type="text" name="email" id="inputEmail" placeholder="Email" value="<?php echo $email;?>"><span id="errorsEmail" class="errors"><?php echo $errorsEmail;?></span>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputUsername">Username</label>
				<div class="controls">
					<input type="text" name="username" id="inputUsername" placeholder="Username" value="<?php echo $username;?>"><span id="errorsUsername" class="errors"><?php echo $errorsUsername;?></span>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputPassword">Password</label>
				<div class="controls">
					<input type="password" name="password" id="inputPassword" placeholder="Password"><span id="errorsPassword" class="errors"><?php echo $errorsPassword;?></span>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputConfpassword">Confirm Password</label>
				<div class="controls">
					<input type="password" name="confPassword" id="inputConfPassword" placeholder="Confirm Password"><span id="errorsConfPassword" class="errors"><?php echo $errorsConfPassword;?></span>
				</div>
			</div>

			<div class="enter">
				<input type="submit" value="register" id="submitRegister" class="btn btn-inverse" name="submit">
			</div>

		</form>
	</div>
</div>
