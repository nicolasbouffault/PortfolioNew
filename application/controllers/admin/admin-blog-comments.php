<?php
//admin-blog-comment controller


//restrict access to the admin pages
probeAdmin();

include(DATA.'comments.php');

$valid = true;
$errorsMessage = "";
$editedComment = "";
$deletedComment = "";
$approvedComment = "";
$disapprovedComment = "";

if(isset($_GET['id'])){

	$id = $_GET['id'];
	$comment = getCommentById($id);
}
else
{
	//display a list of all comments
	$commentsList = getAllComments();
}

//display different page according to the action
if(isset($_GET['action']) && $_GET['action'] == 'delete'){

	if(isset($_POST['delete'])){

	//delete comment of an user
	$success = deleteComment($id);

		if($success){

			$deletedComment = "The comment was successfully deleted !";

		}
		else
		{

			$deletedComment = "The comment was not deleted !";
		}

	}

}

if(isset($_GET['action']) && $_GET['action'] == 'edit'){

	if(isset($_POST['edit'])){
	$message = $_POST['message'];

		if(empty($message)){

			$valid = false;
			$errorsMessage = "Please enter a message !";
		}

		if($valid){

		//edit comment before publishing it
		$success = editComment($message, $id);

			if($success){

				$editedComment = "The comment was edited successfully !";
				$comment = getCommentById($id); //reload comment after it has been updated

			}
			else
			{

				$editedComment = "The comment was not edited !";
			}

		}
		
	}

}

if(isset($_GET['action']) && $_GET['action'] == 'approve'){


	if(isset($_POST['approve'])){

	$success = approveComment($id);

		if($success){

			header("Location:?page=admin/admin-blog-comments");
		
		}
		else
		{
			$approvedComment = "The comment was not approved !";

		}

	}

}

if(isset($_GET['action']) && $_GET['action'] == 'disapprove'){

	if(isset($_POST['disapprove'])){

	$success = disapproveComment($id);
		
		if($success){

			header("Location:?page=admin/admin-blog-comments");

		}
		else
		{
			$disapprovedComment = "The comment was not disapproved !";

		}

	}

}



//include files
include(VIEWS.'header.php');
include(VIEWS.'admin/admin-blog-comments.php');
include(VIEWS.'footer.php');


?>