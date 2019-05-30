<?php
//page controller

include_once(DATA.'page.php');
$data = getHomeId();
$homepageid = $data['homepageid'];

if (isset($_GET['id']))
{	
	//display page according to id
	$page = getPageById($_GET['id']);

	if ($page == false)
	{
		// redirect to 404 page
		header("Location:?page=404");
	}
}
else
{	
	//display home page
	$page = getPageById($homepageid);
}

//include files
include(VIEWS.'header.php');
include(VIEWS.'page.php');
include(VIEWS.'footer.php');



?>
