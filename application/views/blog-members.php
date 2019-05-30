<?php if(logged_in()) :?>
	<a class="grey" href="?page=login&amp;action=logout">Log Out</a>
<?php endif;?>

<div class="row-fluid tagline">

	<span class="errors"><?php echo $deletedUser;?></span>
	<h3>Your Account Informations</h3>
	<p class="italic">Check your informations and modify them if needed</p>

	<p><span class="bold">First Name : </span><?php echo $firstname;?> </p>
	<p><span class="bold">Last Name : </span><?php echo $lastname;?></p>
	<p><span class="bold">Email : </span><?php echo $email;?></p>
	<p><span class="bold">Username : </span><?php echo $username;?></p>

	<a href="?page=blog-members-update" class="btn btn-inverse btn-small">Modify Details</a>
	
	<p>
		<form method="post" action="">
			<input type="submit" name="delete" class="btn btn-inverse btn-small" value="Delete Account">
		</form>
	</p>
</div>	

