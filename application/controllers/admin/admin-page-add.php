<?php
//admin-page-add controller

//restrict access to admin pages
probeAdmin();


include_once(DATA.'page.php');

$valid = true;
$errorsTitle = "";
$errorsContent = "";
$createdPage = "";
$title = "";
$content = "";


//form validation
if(isset($_POST['submit'])){
$title = $_POST['title'];
$content = trim($_POST['content']);



	if(empty($title)){

		$valid = false;
		$errorsTitle = "Please enter a title !";
	}

	if(empty($content)){

		$valid = false;
		$errorsContent = "Please enter some content for the page !";
	}
	

	if($valid){

		$new_id = createPage($title, $content);

		if ($new_id == 0 || $new_id == false)
		{
			$createdPage = "NO page was created !";
		}
		else
		{
			// redirect to newly created page
			header("Location:?page=page&id=" . $new_id);			
		}
	
	}

}


//include files
include(VIEWS.'header.php');
include(VIEWS.'admin/admin-page-add.php');
include(VIEWS.'footer.php');


?>