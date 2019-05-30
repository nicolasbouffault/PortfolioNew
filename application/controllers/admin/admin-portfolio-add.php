<?php
//admin-portfolio-add

//restrict access
probeAdmin();

include(DATA.'portfolio.php');

$valid = true;
$errorsTitle = "";
$errorsUrl = "";
$errorsOverview = "";
$errorsIcon = "";

$title = "";
$url = "";
$overview = "";
$createdWebsite = "";

//form validation
if(isset($_POST['submit'])){
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

	//create a new website
	$success = createWebsite($title, $url, $overview, $imageFileName);

		if($success){

			$createdWebsite = "You successfully added a new website !";

		}
		else
		{
			$createdWebsite = "NO website was added !";

		}

	}

}








//include files
include(VIEWS.'header.php');
include(VIEWS.'admin/admin-portfolio-add.php');
include(VIEWS.'footer.php');

?>