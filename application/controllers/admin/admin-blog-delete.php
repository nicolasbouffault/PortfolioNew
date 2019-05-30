<?php
//admin-blog-delete controller

//restrict access to the admin pages
probeAdmin();

include(DATA.'articles.php');

$valid = true;
$articles = array();
$articleList = array();

$deletedArticle = "";

if(isset($_GET['id'])){

	$id = $_GET['id'];
	$articles = getArticleById($id);

}
else
{
	//get all articles if id is not set
	$articleList = getArticleByDate();

}

if(isset($_POST['submit'])){

	$success = deleteArticle($id);
	

	if($success){

		$deletedArticle = "Article was deleted !";
	}
	else
	{
		$deletedArticle = "NO article was deleted";

	}

}



//include files
include(VIEWS.'header.php');
include(VIEWS.'admin/admin-blog-delete.php');
include(VIEWS.'footer.php');


?>