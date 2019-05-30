<h1>Add Website</h1>

<span class="errors"><?php echo $createdWebsite;?></span>

<form method="post" action="" class="form-horizontal" enctype="multipart/form-data">

	<div class="control-group">

		<label class="bold">Website Title</label>
		<input type="text" name="site_title" placeholder="Website Title" value="<?php echo $title;?>"><span class="errors"><?php echo $errorsTitle;?></span>

	</div>

	<div class="control-group">

		<label class="bold">Image Icon</label>
		<input type="file" name="icon"><span class="errors"><?php echo $errorsIcon;?></span>

	</div>

	<div class="control-group">

		<label class="bold">Website URL</label>
		<input type="text" name="url" placeholder="Website URL" value="<?php echo $url;?>"><span class="errors"><?php echo $errorsUrl;?></span>

	</div>

	<div class="control-group">

		<label class="bold">Site Overview</label>
		<textarea class="textarea" name="overview"><?php echo $overview;?></textarea>
		<span class="errors"><?php echo $errorsOverview;?></span>

	</div>

	<input type="submit" class="btn btn-inverse" name="submit" value="Add Website">

</form>