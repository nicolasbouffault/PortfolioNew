<?php
//admin-blog-add controller

//restrict access to the admin pages
probeAdmin();

include(DATA.'articles.php');

$valid = true;
$errorsTitle = "";
$errorsKeywords = "";
$errorsArticle = "";
$errorsImage = "";
$topics = getTopics();	

$createdArticle = "";
$title = "";
$keywords = "";
$article = "";

//get the author name
if(isset($_SESSION['logged_in']) && $_SESSION['role'] == 'admin'){

	$author = $_SESSION['first_name'];

}

//form validation
if(isset($_POST['submit'])){
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

	//get value from topic or new topic
	if(empty($topic)){

		$topic = $_POST['topic'];
	}
	else
	{
		$topic = $_POST['new-topic'];
	}

	//file upload validation
	if(empty($_FILES['image']['name'])){

		$valid = false;
		$errorsImage = "Please upload a picture !";
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
			$errorsImage = " Something went wrong !";
		}

	}


	if($valid){

	//call function	
	$success = createArticle($title, $topic, $author, $imageFileName, $article, $keywords);

		if($success){

			$createdArticle = "Article successfully added !";

		}
		else
		{

			$createdArticle = "NO article was added !";
		}


	}


}



//include files
include(VIEWS.'header.php');
include(VIEWS.'admin/admin-blog-add.php');
include(VIEWS.'footer.php');


?>