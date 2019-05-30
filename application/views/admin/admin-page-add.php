<h1>Add a new page</h1>

<span class="errors"><?php echo $createdPage;?></span>

<form method="post" action=""> 

	<div class="control-group">

		<label class="bold">Title</label>
		<input type="text" name="title" placeholder="Title" value="<?php echo $title;?>"><span class="errors"><?php echo $errorsTitle;?></span>

	</div>


	<div class="control-group">

		<label class="bold">Content</label>
		<textarea class="textarea" name="content"><?php echo $content;?></textarea>
		<span class="errors"><?php echo $errorsContent;?></span>

	</div>

	<input type="submit" name="submit" class="btn btn-inverse" value="Add Page">


</form>