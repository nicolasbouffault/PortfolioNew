<h1>Update Article</h1>


<span class="errors"><?php echo $updatedArticle;?></span>

<?php if(!isset($id)) :?>
<table border="1">

	<thead>

		<th>Id</th>
		<th>Title</th>
		<th>Topic</th>
		<th>Update</th>

	</thead>



	<?php foreach($articleList as $listItem) : ?>
	<tbody>

		<td><?php echo $listItem['id'];?></td>
		<td><?php echo $listItem['title'];?></td>
		<td><?php echo $listItem['topic'];?></td>
		<td><a href="?page=admin/admin-blog-update&amp;id=<?php echo $listItem['id'];?>">Update</a></td>

	</tbody>
	<?php endforeach; ?>

</table>
<?php endif;?>

<?php foreach($articles as $article) : ?>
<form method="post" action="">

	<div class="control-group">

		<label class="bold">Article Id</label>

		<?php echo $id; ?>

	</div>	

	<div class="control-group">

		<label class="bold">Title</label>
		<input type="text" name="title" placeholder="Title" value="<?php echo $article['title'];?>"><span class="errors"><?php echo $errorsTitle;?></span>

	</div>

	<div class="control-group">

		<label class="bold">Topic</label>
		
		<select name="topic" class="languages">
			
			<?php foreach($topics as $topic) : ?>
			<option <?php /*get topic value in the select field*/ if($article['topic'] == $topic['topic']){echo "selected='selected'";}?>><?php echo $topic['topic'];?></option>
			<?php endforeach;?>
	
		</select>

	</div>

	<div class="control-group">

		<label class="bold">New Topic</label>
		<input type="text" name="new-topic" placeholder="New Topic">

	</div>


	<div class="control-group">

		<label class="bold">Keywords</label>
		<input type="text" name="keywords" placeholder="Keywords" value="<?php echo $article['keywords'];?>"><span class="errors"><?php echo $errorsKeywords;?></span>

	</div>


	<div class="control-group">
	
		<label class="bold">Article</label>
		<textarea class="textarea" name="article"><?php echo $article['article'];?></textarea>
		<span class="errors"><?php echo $errorsArticle;?></span>
	
	</div>

	<input class="btn btn-inverse" name="submitDetails" type="submit" value="Update Article">

</form>

<h1>Update Picture</h1>

<span class="errors"><?php echo $updatedPicture;?></span>

<form method="post" action="" enctype="multipart/form-data">

	<div class="control-group">

		<label class="bold">Image</label>
		<input type="file" name="image"><span class="errors"><?php echo $errorsImage;?></span>
		<img src="site/img/<?php echo $article['image'];?>" alt="image" width="100"/>

	</div>

	<input class="btn btn-inverse" name="submitPicture" type="submit" value="Update Picture">

</form>

<?php endforeach; ?>