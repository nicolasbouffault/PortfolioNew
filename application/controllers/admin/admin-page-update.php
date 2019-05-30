<?php
//admin-page-update controller

//restrict access to admin pages
probeAdmin();

include_once(DATA.'page.php');

$valid = true;
$errorsTitle = "";
$errorsContent = "";
$updatedPage = "";

if(isset($_GET['id'])){

	$id = $_GET['id'];
	//display only one page
	$pages = getPageById($id);

}
else
{
	//display a list of all the pages
	$pagesList = getAllPageTitles();

}

//form validation
if(isset($_POST['submit'])){
$title = $_POST['title'];
$content = trim($_POST['content']);

	if(empty($title)){

		$valid = false;
		$errorsTitle = "Please enter a page title !";

	}

	if(empty($content)){

		$valid = false;
		$errorsContent = "Please enter some content for the page !";
	}

	if($valid){

		//update a page 
		$success = updatePage($id, $title, $content);

		if($success){

			$updatedPage = "The page was successfully updated !";
			$pages = getPageById($id); //reload content page now that it has changed 
		}
		else
		{

			$updatedPage = "NO page was updated !";

		}

	}

}


//include files
include(VIEWS.'header.php');
include(VIEWS.'admin/admin-page-update.php');
include(VIEWS.'footer.php');

?>