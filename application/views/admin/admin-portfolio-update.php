<h1>Update Website</h1>

<span class="errors"><?php echo $updatedWebDetails;?></span>

<?php if(!isset($id)) : ?>
<table border="1">

	<thead>

		<th>Id</th>
		<th>Site Title</th>
		<th>Update</th>

	</thead>

	<?php foreach($websiteList as $listItem) : ?>
	<tbody>

		<td><?php echo $listItem['id'];?></td>
		<td><?php echo $listItem['site_title'];?></td>
		<td><a href="?page=admin/admin-portfolio-update&amp;id=<?php echo $listItem['id'];?>">Update</a></td>

	</tbody>
	<?php endforeach;?>

</table>
<?php else :?>


<form method="post" action="" class="form-horizontal">

	<div class="control-group">

		<label class="bold">Website Id</label>
		<?php echo $id;?>

	</div>


	<div class="control-group">

		<label class="bold">Website Title</label>
		<input type="text" name="site_title" placeholder="Website Title" value="<?php echo $websites['site_title'];?>"><span class="errors"><?php echo $errorsTitle;?></span>

	</div>

	<div class="control-group">

		<label class="bold">Website URL</label>
		<input type="text" name="url" placeholder="Website URL" value="<?php echo $websites['url'];?>"><span class="errors"><?php echo $errorsUrl;?></span>

	</div>

	<div class="control-group">

		<label class="bold">Site Overview</label>
		<textarea class="textarea" name="overview"><?php echo $websites['site_overview'];?></textarea>
		<span class="errors"><?php echo $errorsOverview;?></span>

	</div>

	<input type="submit" class="btn btn-inverse" name="submitDetails" value="Update Website">

</form>

<h1>Update Icon Image</h1>

<span class="errors"><?php echo $updatedWebPicture;?></span>

<form method="post" action="" class="form-horizontal" enctype="multipart/form-data">

	<div class="control-group">

		<label class="bold">Image Icon</label>
		<input type="file" name="icon"><span class="errors"><?php echo $errorsIcon;?></span>
		<img src="site/img/<?php echo $websites['icon'];?>" alt="icon" width="100">

	</div>

	<input type="submit" class="btn btn-inverse" name="submitPicture" value="Update Picture">

</form>
<?php endif;?>
