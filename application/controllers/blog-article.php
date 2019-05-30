<?php
//blog article controller

include(DATA.'articles.php');
include(DATA.'comments.php');

$valid = true;
$errorsMessage = "";
$article = "";
$createdComment = "";
$id = $_GET['id'];


//get comments infos if user is connected
if(isset($_SESSION['logged_in']) && isset($_POST['submit']))
{

	$message = htmlentities(trim($_POST['message']));
	$id = $_GET['id'];
	$user = $_SESSION['username'];
	
	//field validation
	if(empty($message))
	{

		$valid = false;
		$errorsMessage = "Please enter a message !";
	}

	if($valid)
	{
		//create a new comment 
		createComment($id, $user, $message);
		$createdComment = "Your comment will be displayed after approval !";
		mail('nicolasbouffault@gmail.com', 'new comment from '. $user . ' in article '. $id, $message);

	}

}

//get all comments of one article
$comments = getCommentByArticle($id);

	
	//get the article
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$article = getArticleById($id);

	}




//include files
include(VIEWS.'header.php');
include(VIEWS.'blog-article.php');
include(VIEWS.'footer.php');

?>