<?php
//admin-page-delete controller

//restrict access to admin pages
probeAdmin();

include_once(DATA.'page.php');

$deletedPage = "";


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


if(isset($_POST['submit'])){

	//call function to delete page
	$success = deletePage($id);

	if($success){

		$deletedPage = "The page was successfully deleted !";

	}
	else
	{

		$deletedPage = "NO page was deleted !";

	}
}


//include files
include(VIEWS.'header.php');
include(VIEWS.'admin/admin-page-delete.php');
include(VIEWS.'footer.php');


?>