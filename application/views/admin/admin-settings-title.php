<h1>Set Website Title</h1>

<span class="errors"><?php echo $updatedTitle;?></span>

<form method="post" action="">

	<div class="control-group">

		<input type="text" name="title" placeholder="Website Title" value="<?php echo $webTitle['sitetitle'];?>"><span class="errors"><?php echo $errorsTitle;?></span>

	</div>

	<input type="submit" name="submit" class="btn btn-inverse" value="Update Title">

</form>
