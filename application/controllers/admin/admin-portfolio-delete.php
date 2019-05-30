<?php
//admin-portfolio-delete

//restrict access
probeAdmin();

include(DATA.'portfolio.php');


$deletedWebsite = "";

if(isset($_GET['id'])){

	$id = $_GET['id'];
	$websites = getPortfolioById($id);

}
else
{
	//get all websites if id is not set
	$websiteList = getPortfolio();

}


if(isset($_POST['submit'])){

//call function to delete website from portfolio
$success = deleteWebsite($id);

	if($success){

		$deletedWebsite = "Website was deleted successfully !";

	}
	else
	{

		$deletedWebsite = "NO website was deleted !";

	}

}



//include files
include(VIEWS.'header.php');
include(VIEWS.'admin/admin-portfolio-delete.php');
include(VIEWS.'footer.php');

?>