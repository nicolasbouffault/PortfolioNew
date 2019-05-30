<h1>Delete Website</h1>

<span class="errors"><?php echo $deletedWebsite;?></span>

<?php if(!isset($id)) : ?>
<table border="1">

	<thead>

		<th>Id</th>
		<th>Site Title</th>
		<th>Delete</th>

	</thead>

	<?php foreach($websiteList as $listItem) : ?>
	<tbody>

		<td><?php echo $listItem['id'];?></td>
		<td><?php echo $listItem['site_title'];?></td>
		<td><a href="?page=admin/admin-portfolio-delete&amp;id=<?php echo $listItem['id'];?>">Delete</a></td>

	</tbody>
	<?php endforeach;?>

</table>
<?php else :?>

<form method="post" action="">

	<div class="control-group">

		<label class="bold">Website Id</label>
		<?php echo $id;?>

	</div>

	<div class="control-group">

		<label class="bold">Website Title</label>
		<?php echo $websites['site_title'];?>

	</div>

	<div class="control-group">

		<label class="bold">Website URL</label>
		<?php echo $websites['url'];?>

	</div>

	<div class="control-group">

		<label class="bold">Site Overview</label>
		<?php echo $websites['site_overview'];?>

	</div>

	<div class="control-group">

		<label class="bold">Image Icon</label>
		<img src="site/img/<?php echo $websites['icon'];?>" alt="icon" width="100">

	</div>

	<input type="submit" class="btn btn-inverse" name="submit" value="Delete Website">

</form>
<?php endif;?>