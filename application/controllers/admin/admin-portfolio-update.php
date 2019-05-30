<?php
//admin-portfolio-update

//restrict access
probeAdmin();

include(DATA.'portfolio.php');

$valid = true;
$errorsTitle = "";
$errorsUrl = "";
$errorsOverview = "";
$errorsIcon = "";
$websites = array();
$websiteList = array();
$updatedWebDetails = "";
$updatedWebPicture = "";

if(isset($_GET['id'])){
	
	$id = $_GET['id'];
	//display informations about one website if id is define
	$websites = getPortfolioById($id);

}
else
{
	//show a list of all websites if id is not define
	$websiteList = getPortfolio();

}

//form validation
if(isset($_POST['submitDetails'])){
$title = $_POST['site_title'];
$url = $_POST['url'];
$overview = trim($_POST['overview']);

	
	if(empty($title)){

		$valid = false;
		$errorsTitle = "Please enter a website title !";
	}

	if(empty($url)){

		$valid = false;
		$errorsUrl = "Please enter the website URL !";
	}

	if(empty($overview)){

		$valid = false;
		$errorsOverview = "Please enter a description for the website !";
	}

	if($valid){

	//call function to update details of the website
	$success = updateWebDetails($id, $title, $url, $overview);

		if($success){

			$updatedWebDetails = "Details of the website were successfully updated !";
			$websites = getPortfolioById($id); //upload website content now that it has changed

		}
		else
		{

			$updatedWebDetails = "Details of the website were updated !";
		}

	}

}

//validation picture upload
if(isset($_POST['submitPicture'])){

	//file upload validation
	if(empty($_FILES['icon']['name'])){

		$valid = false;
		$errorsIcon = "Please upload an icon image !";
	}
	else
	{

		if($_FILES['icon']['error'] == 0){


			if(($_FILES['icon']['type'] == 'image/jpg') || ($_FILES['icon']['type'] == 'image/jpeg') || ($_FILES['icon']['type'] == 'image/png') || ($_FILES['icon']['type'] == 'image/gif') && $_FILES['icon']['size'] < 200000){

				$imageFileName = $_FILES['icon']['name'];
				$imageFileName = str_replace(" ", "_", $imageFileName);
				$destination = 'site/img/'. $imageFileName;
				$result = move_uploaded_file($_FILES['icon']['tmp_name'], $destination);
				$errorsIcon = "Image successfully uploaded in ". $destination;

			}
			else
			{

				$valid = false;
				$errorsIcon = "Wrong file type !";

			}

		}
		else
		{

			$valid = false;
			$errorsIcon = "Something went wrong !";

		}

	}

	if($valid){

	//call function to update icon for website
	$success = updateWebPicture($imageFileName, $id);

		if($success){

			$updatedWebPicture = "Icon image was updated !";
			$websites = getPortfolioById($id); //upload website content now that it has changed

		}
		else
		{
			$updatedWebPicture = "Icon image was not updated !";

		}

	}

}


//include files
include(VIEWS.'header.php');
include(VIEWS.'admin/admin-portfolio-update.php');
include(VIEWS.'footer.php');


?>