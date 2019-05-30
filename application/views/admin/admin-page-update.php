<h1>Update a page</h1>

<span class="errors"><?php echo $updatedPage;?></span>

<?php if(!isset($id)) : ?>
<table border="1">

	<thead>

		<th>Id</th>
		<th>Page Title</th>
		<th>Update</th>

	</thead>

	<?php foreach($pagesList as $listItem) : ?>
	<tbody>

		<td><?php echo $listItem['id'];?></td>
		<td><?php echo $listItem['title'];?></td>
		<td><a href="?page=admin/admin-page-update&amp;id=<?php echo $listItem['id'];?>">Update</a></td>

	</tbody>
	<?php endforeach;?>

</table>

<?php else : ?>

<form method="post" action="">

	<div class="control-group">

		<label class="bold">Page Id</label>
		<?php echo $id;?>

	</div>

	<div class="control-group">

		<label class="bold">Page Title</label>
		<input type="text" name="title" placeholder="Page Title" value="<?php echo $pages['title'];?>"><span class="errors"><?php echo $errorsTitle;?></span>

	</div>

	<div class="control-group">

		<label class="bold">Page Content</label>
		<textarea class="textarea" name="content"><?php echo $pages['contents'];?></textarea>
		<span class="errors"><?php echo $errorsContent;?></span>

	</div>

	<input type="submit" value="Update Page" name="submit" class="btn btn-inverse">

</form>
<?php endif;?>

