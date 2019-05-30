<?php
//admin-page-sethome controller

include_once(DATA.'page.php');

$pages = getAllPageTitles();
$changedHome = "";

if(isset($_POST['submit'])){

	$home = $_POST['homepage'];

	//call setHomeId function 
	$success = setHomeId($home);

	if($success){

		$changedHome = "The id of the home page was changed successfully !";

	}
	else
	{
		$changedHome = "The id of the home page was not changed !";

	}
}



//include files
include(VIEWS.'header.php');
include(VIEWS.'admin/admin-page-sethome.php');
include(VIEWS.'footer.php');

?>