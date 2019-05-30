<h1>Set Home Page</h1>

<span class="errors"><?php echo $changedHome;?></span>

<form method="post" action="">

	<div class="control-group">
		<select name="homepage">

			<?php foreach ($pages as $page) : ?>
			<option value="<?php echo $page['id'];?>"><?php echo $page['title'];?></option>
			<?php endforeach;?>

		</select>
	</div>

	<div class="control-group">
		<input type="submit" name="submit" class="btn btn-inverse" value="Set Home">
	</div>

</form>