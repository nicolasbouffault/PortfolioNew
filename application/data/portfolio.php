<?php
//portfolio data file

//get all details for the portfolio
function getPortfolio(){

	$result = mysql_query("SELECT * FROM portfolio");

	$data = array();

	while($record = mysql_fetch_assoc($result)){

		array_push($data, $record);
	}

	return $data;

}

//get only one website
function getPortfolioById($id){

	$result = mysql_query("SELECT * FROM portfolio WHERE id = $id");

	$data = mysql_fetch_assoc($result);

	return $data;

}

//add a new website to the portfolio page
function createWebsite($title, $url, $overview, $image){

	esc($title);
	esc($url);
	esc($overview);
	esc($image);

	$result = mysql_query("INSERT INTO portfolio(icon, site_title, site_overview, url) VALUES('$image', '$title', '$overview', '$url')");

	if(!$result){

		error_log(mysql_error());
		return false;
	}
	else
	{
		return true;

	}

}

//update a website
function updateWebDetails($id, $title, $url, $overview){

	esc($title);
	esc($url);
	esc($overview);

	$result = mysql_query("UPDATE portfolio SET site_title = '$title', url = '$url', site_overview = '$overview' WHERE id = $id");

	if(!$result){

		error_log(mysql_error());
		return false;

	}
	else
	{
		return true;

	}

}

//update picture portfolio
function updateWebPicture($image, $id){

	esc($image);

	$result = mysql_query("UPDATE portfolio SET icon = '$image' WHERE id = $id");

	if(!$result){

		error_log(mysql_error());
		return false;
	}
	else
	{

		return true;
	}

}

//delete website from the portfolio
function deleteWebsite($id){

	$result = mysql_query("DELETE FROM portfolio WHERE id = $id");

	if(!$result){

		error_log(mysql_error());
		return false;

	}
	else
	{
		return true;

	}

}






?>