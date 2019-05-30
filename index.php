<?php 
//index file

// error_reporting(E_ERROR); // restrict reporting to errors only

//include config file
include('config/initialise.php');

// get page titles and ids for nav bar
include_once(DATA.'page.php');
$pageTitles = getAllPageTitles();

if(isset($_GET['page'])){
	$page = $_GET['page'];
}else{

	$page = 'page';
}

if(file_exists(CONTROLLERS.$page.'.php')){

	include(CONTROLLERS.$page.'.php');

}else{


	include(CONTROLLERS.'404.php');
}



?>