<?php if(logged_in()) :?>
	<a class="grey" href="?page=login&amp;action=logout">Log Out</a>
<?php endif;?>

<div class="tagline">
	<h3>Modify your Account Informations</h3>
</div>

<div class="row-fluid">
	<div class="span6 offset3">

		<span class="errors"><?php echo $changedDetails;?></span>
		<form method="post" action="" class="form-horizontal" name="form-update">

			<div class="control-group">
				<label class="control-label" for="inputFname">First Name</label>
				<div class="controls">
					<input type="text" name="firstname" id="inputFname" placeholder="First Name" value="<?php echo $new_firstname;?>"><span id="errorsFirstName" class="errors"><?php echo $errorsFname;?></span>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputSurname">Surname</label>
				<div class="controls">
					<input type="text" name="surname" id="inputSurname" placeholder="Surname" value="<?php echo $new_lastname;?>"><span id="errorsSurname" class="errors"><?php echo $errorsLname;?></span>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputEmail">Email</label>
				<div class="controls">
					<input type="text" name="email" id="inputEmail" placeholder="Email" value="<?php echo $new_email;?>"><span id="errorsEmail" class="errors"><?php echo $errorsEmail;?></span>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputUsername">Username</label>
				<div class="controls">
					<input type="text" name="username" id="inputUsername" placeholder="Username" value="<?php echo $new_username;?>"><span id="errorsUsername" class="errors"><?php echo $errorsUsername;?></span>
				</div>
			</div>

			<div class="btn-center">
				<input type="submit" value="update informations" id="submitRegister" class="btn btn-inverse" name="submitInfo">
			</div>
		
		</form>
	</div>
</div>

<div class="tagline">
	<h3>Modify your Password</h3>
</div>

<div class="row-fluid">
	
	<div class="span6 offset3">
		<span class="errors"><?php echo $changedPassword; ?></span>

		<form method="post" action="" class="form-horizontal" id="password-form">

			<div class="control-group">
				<label class="control-label" for="inputCurrentPassword">Current Password</label>
				<div class="controls">
					<input type="password" name="currentPassword" id="inputCurrentPassword" placeholder="Current Password"><span id="errorsCurrentPassword" class="errors"><?php echo $errorsCurrentPassword;?></span>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputNewPassword">New Password</label>
				<div class="controls">
					<input type="password" name="newPassword" id="inputNewPassword" placeholder="New Password"><span id="errorsPassword" class="errors"><?php echo $errorsPassword;?></span>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputConfpassword">Confirm Password</label>
				<div class="controls">
					<input type="password" name="confPassword" id="inputConfPassword" placeholder="Confirm Password"><span id="errorsConfPassword" class="errors"><?php echo $errorsConfPassword;?></span>
				</div>
			</div>

			<div class="btn-center">
				<input type="submit" value="update password" id="submitRegister" class="btn btn-inverse" name="submitPassword">
			</div>


		</form>

	</div>


</div>


