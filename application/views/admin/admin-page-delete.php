<h1>Delete a page</h1>

<span class="errors"><?php echo $deletedPage;?></span>


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
		<td><a href="?page=admin/admin-page-delete&amp;id=<?php echo $listItem['id'];?>">Delete</a></td>

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
		<?php echo $pages['title'];?>

	</div>


	<div class="control-group">

		<label class="bold">Page Content</label>
		<textarea class="textarea">
			<?php echo $pages['contents'];?>
		</textarea>
	
	</div>

	<input type="submit" name="submit" value="Delete Page" class="btn btn-inverse">

</form>
<?php endif;?>