<div class="row-fluid">
	<a class="grey" href="?page=register">Register</a>
</div>

<div class="row-fluid">
	<div class="span6 offset3">
		<form method="post" action="" class="form-horizontal">

			<div class="control-group">
				<label class="control-label" for="inputEmail">Email</label>
				<div class="controls">
					<input type="text" name="email" id="inputEmail" placeholder="Email" value="<?php echo $email;?>"><span id="errorsEmail" class="errors"><?php echo $errorsEmail;?></span>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="inputPassword">Password</label>
				<div class="controls">
					<input type="password" name="password" id="inputPassword" placeholder="Password"><span id="errorsPassword" class="errors"><?php echo $errorsPassword;?></span>
				</div>
			</div>

			<div class="btn-center">
				<input type="submit" name="submit" id="submitLogin" class="btn btn-inverse" value="sign in">
			</div>

		</form>
	</div>
</div>