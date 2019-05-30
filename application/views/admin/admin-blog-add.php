<h1>Add an article</h1>

<span class="errors"><?php echo $createdArticle;?></span>
<form method="post" action="" class="form-horizontal" enctype="multipart/form-data">

	<div class="control-group">
		<label>Title</label>
		<input type="text" name="title" placeholder="Title" value="<?php echo $title;?>"><span class="errors"><?php echo $errorsTitle;?></span>
	</div>

	<div class="control-group">
		<label>Topic</label>
		
		<select name="topic" class="languages">
			
			<?php foreach($topics as $topic) : ?>
			<option><?php echo $topic['topic'];?></option>
			<?php endforeach;?>
		
		</select>

		<label>New Topic</label>
		<input type="text" name="new-topic" placeholder="New Topic">

	</div>	

	<div class="control-group">

		<label>Image</label>
		<input type="file" name="image"><span class="errors"><?php echo $errorsImage;?></span>

	</div>

	<div class="control-group">

		<label>Keywords</label>
		<input type="text" name="keywords" placeholder="Keywords" value="<?php echo $keywords;?>"><span class="errors"><?php echo $errorsKeywords;?></span>

	</div>


	<div class="control-group">
	
		<label>Article</label>
		<textarea class="textarea" name="article"><?php echo $article;?></textarea>
		<span class="errors"><?php echo $errorsArticle;?></span>
	
	</div>
	
	<input class="btn btn-inverse" name="submit" type="submit" value="Create">

</form>