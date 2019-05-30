<?php
//admin-blog-update controller

//restrict access to the admin pages
probeAdmin();

include(DATA.'articles.php');

$valid = true;
$errorsTitle = "";
$errorsKeywords = "";
$errorsArticle = "";
$errorsImage = "";
$articles = array();
$articleList = array();
$updatedArticle = "";
$updatedPicture = "";

if(isset($_GET['id'])){

	$id = $_GET['id'];
	$articles = getArticleById($id);
	$topics = getTopics();

}
else
{
	$articleList = getArticleByDate();
	// we're going to show a list of all articles from which the admin can choose to update one
}


if(isset($_POST['submitDetails'])){
$title = $_POST['title'];
$topic = $_POST['new-topic'];
$keywords = $_POST['keywords'];
$article = trim($_POST['article']);




	if(empty($title)){

		$valid = false;
		$errorsTitle = "Please enter a title !";
	}

	if(empty($keywords)){

		$valid = false;
		$errorsKeywords = "Please enter some keywords !";
	}

	if(empty($article)){

		$valid = false;
		$errorsArticle = "Please enter some text !";
	}

	if(empty($topic)){

		$topic = $_POST['topic'];
	}
	else
	{
		$topic = $_POST['new-topic'];

	}

	if($valid){

		//call function to update article details
		$success = updateArticle($id, $title, $topic, $keywords, $article);	


		if($success){

			$updatedArticle = "The article was updated !";
			$articles = getArticleById($id); // reload article from database now it has changed
		}
		else
		{
			$updatedArticle = "The article was not updated !";

		}

	}

}


//validation picture upload
if(isset($_POST['submitPicture'])){

	//file upload validation
	if(empty($_FILES['image']['name'])){


		$valid = false;
		$errorsImage = "Please upload an image !";

	}
	else
	{

		if($_FILES['image']['error'] == 0){

			if($_FILES['image']['type'] == 'image/jpg' || $_FILES['image']['type'] == 'image/jpeg' || $_FILES['image']['type'] == 'image/png' || $_FILES['image']['type'] == 'image/gif' && $_FILES['image']['size'] < 200000){

				$imageFileName = $_FILES['image']['name'];
				$imageFileName = str_replace(" ", "_", $imageFileName);
				$destination = 'site/img/'. $imageFileName;
				$result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
				$errorsImage = "Image successfully uploaded in ". $destination;

			}
			else
			{

				$valid = false;
				$errorsImage = "Wrong file type !";

			}


		}
		else
		{

			$valid = false;
			$errorsImage = "Something went wrong !";

		}

	}

	if($valid){

		//call function to update picture
		$success = updatePicture($imageFileName, $id);

		if($success){

			$updatedPicture = "Picture was successfully updated !";
			$articles = getArticleById($id); // reload article from database now it has changed

		}
		else
		{
			$updatedPicture = "Picture was not updated !";

		}

	}

}


//include files
include(VIEWS.'header.php');
include(VIEWS.'admin/admin-blog-update.php');
include(VIEWS.'footer.php');


?>