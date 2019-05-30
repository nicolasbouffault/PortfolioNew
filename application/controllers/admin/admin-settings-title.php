<?php
//admin-settings-title controller

//restrict access to admin pages
probeAdmin();

include_once(DATA.'settings.php');

$valid = true;
$errorsTitle = "";
$updatedTitle = "";

//get title to display it in input field
$webTitle = getWebsiteTitle();


if(isset($_POST['submit'])){
$title = $_POST['title'];

	if(empty($title)){

		$valid = false;
		$errorsTitle = "Please enter a title for the website !";
	}

	if($valid){

	//update the title of website
	$success = updateWebsiteTitle($title);

		if($success){

			$updatedTitle = "The title was updated successfully !";
			$webTitle = getWebsiteTitle(); //reload title after it has changed

		}
		else
		{

			$updatedTitle = "The title was not updated !";

		}

	}

}



//include files
include(VIEWS.'header.php');
include(VIEWS.'admin/admin-settings-title.php');
include(VIEWS.'footer.php');

?>