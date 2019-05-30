<h1>Delete an Article</h1>

<span class="errors"><?php echo $deletedArticle;?></span>

<?php if(!isset($id)) : ?>
<table border="1">

	<thead>

		<th>ID</th>
		<th>Title</th>
		<th>Topic</th>
		<th>Delete</th>

	</thead>

	<?php foreach($articleList as $listItem) : ?>
	<tbody>

		<td><?php echo $listItem['id'];?></td>
		<td><?php echo $listItem['title'];?></td>
		<td><?php echo $listItem['topic'];?></td>
		<td><a href="?page=admin/admin-blog-delete&amp;id=<?php echo $listItem['id'];?>">Delete</a></td>

	</tbody>
	<?php endforeach;?>

</table>
<?php endif;?>


<?php foreach($articles as $article) : ?>
<form method="post" action="">

	<div class="control-group">

		<label class="bold">Article Id</label>
		<?php echo $id;?>
		
	</div>	

	<div class="control-group">

		<label class="bold">Title</label>
		<?php echo $article['title'];?>

	</div>

	<div class="control-group">

		<label class="bold">Topic</label>
		<?php echo $article['topic'];?>

	</div>

	<div class="control-group">

		<label class="bold">Image</label>
		<img src="site/img/<?php echo $article['image'];?>" alt="image" width="100"/>

	</div>

	<div class="control-group">

		<label class="bold">Keywords</label>
		<?php echo $article['keywords'];?>

	</div>


	<div class="control-group">
	
		<label class="bold">Article</label>
		<?php echo $article['article'];?>
	
	</div>

	<input class="btn btn-inverse" name="submit" type="submit" value="Delete Article">


</form>
<?php endforeach;?>
	