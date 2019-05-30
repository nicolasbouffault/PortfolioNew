<h1>Manage Blog Comments</h1>

<span class="errors"><?php echo $editedComment;?></span>
<span class="errors"><?php echo $deletedComment;?></span>
<span class="errors"><?php echo $approvedComment;?></span>
<span class="errors"><?php echo $disapprovedComment;?></span>

<?php if(!isset($id)) : ?>
<table border="1">

	<thead>

		<th>Comment Id</th>
		<th>Article Id</th>
		<th>Posted By</th>
		<th>Message</th>
		<th>Date</th>
		<th>Approve</th>
		<th>Delete</th>
		<th>Edit</th>

	</thead>

	<?php foreach($commentsList as $listItem) : ?>
	<tbody>

		<td><?php echo $listItem['id'];?></td>
		<td><?php echo $listItem['article_id'];?></td>
		<td><?php echo $listItem['user'];?></td>
		<td><?php echo $listItem['message'];?></td>
		<td><?php echo $listItem['date'];?></td>
		<td>
			<?php if($listItem['IsApproved'] == 0) : ?>
			<a href="?page=admin/admin-blog-comments&amp;action=approve&amp;id=<?php echo $listItem['id'];?>">Approve</a>
			<?php else :?>
			<a href="?page=admin/admin-blog-comments&amp;action=disapprove&amp;id=<?php echo $listItem['id'];?>">Disapprove</a>

			<?php endif;?>
		</td>
		<td><a href="?page=admin/admin-blog-comments&amp;action=delete&amp;id=<?php echo $listItem['id'];?>">Delete</a></td>
		<td><a href="?page=admin/admin-blog-comments&amp;action=edit&amp;id=<?php echo $listItem['id'];?>">Edit</a></td>

	</tbody>
	<?php endforeach;?>

</table>

<?php else : ?>

<p class="italic">Comment posted by <?php echo $comment['user'];?> in article <?php echo $comment['article_id'];?> on <?php echo $comment['date'];?></p>

<form method="post" action="">

	<div class="control-group">

		<label class="bold">Message</label>
		<?php if(isset($_GET['action']) && $_GET['action'] == 'edit') : ?>
		
		<textarea class="textarea" name="message"><?php echo $comment['message'];?></textarea>
		<span class="errors"><?php echo $errorsMessage;?></span>
		
		<?php elseif(isset($_GET['action']) && ($_GET['action'] == 'delete' || $_GET['action'] == 'approve' || $_GET['action'] == 'disapprove')) :?>
		
		<?php echo $comment['message'];?>

		<?php endif;?>


	</div>

	<?php if(isset($_GET['action']) && $_GET['action'] == 'edit') : ?>
	<input type="submit" name="edit" value="Edit" class="btn btn-inverse">
	<?php elseif(isset($_GET['action']) && $_GET['action'] == 'delete') : ?>
	<input type="submit" name="delete" value="Delete" class="btn btn-inverse">
	<?php elseif(isset($_GET['action']) && $_GET['action'] == 'approve') : ?>
	<input type="submit" name="approve" value="Approve" class="btn btn-inverse">
	<?php elseif(isset($_GET['action']) && $_GET['action'] == 'disapprove') : ?> 
	<input type="submit" name="disapprove" value="disapprove" class="btn btn-inverse">
	<?php endif;?>

</form>
<?php endif;?>

