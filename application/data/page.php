<?php
//page data file

//display page according to id 
function getPageById($id){


	$query = "SELECT * FROM pages WHERE id = $id";
	
	$result = mysql_query($query);
	
	if(!$result)
	{
		return false;
	}


	if (mysql_num_rows($result) == 0)
	{
		
		return false;
	}
	else
	{
		$data = mysql_fetch_assoc($result);
		return $data;
	}

}

//get all page titles for nav menu
function getAllPageTitles(){

	$result = mysql_query("SELECT id, title FROM pages");

	$data = array();

	while($record = mysql_fetch_assoc($result)){

		array_push($data, $record);
	}

	return $data;

}

//create a new page in the website
function createPage($title, $content){

	esc($title);
	esc($content);

	$result = mysql_query("INSERT INTO pages(title, contents) VALUES('$title', '$content') ");
	$newId = mysql_insert_id();

	if(!$result){

		error_log(mysql_error());
	}

	return $newId;

}

//update a page in the website
function updatePage($id, $title, $content){

	esc($title);
	esc($content);

	$result = mysql_query("UPDATE pages SET title = '$title', contents = '$content' WHERE id = $id");

	if(!$result){

		error_log(mysql_error());
		return false;
	}
	else
	{
		return true;

	}

}

//delete a page in the website
function deletePage($id){

	$result = mysql_query("DELETE FROM pages WHERE id = $id");

	if(!$result){

		error_log(mysql_error());
		return false;

	}
	else
	{

		return true;

	}

}

//update the id of the home page 
function setHomeId($home){


	$result = mysql_query("UPDATE settings SET homepageid = $home");

	if(!$result){

		error_log(mysql_error());
		return false;

	}
	else
	{

		return true;

	}

}

function getHomeId(){

	$result = mysql_query("SELECT homepageid FROM settings");

	$data = mysql_fetch_assoc($result);
	
	return $data;

}

//get the id of the new created page for redirection
function getNewPageId(){

	$result = mysql_query("SELECT MAX(id) FROM pages");

	$data = mysql_fetch_assoc($result);

	return $data;

}

?>