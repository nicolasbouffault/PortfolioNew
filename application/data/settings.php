<?php
//settings data file

//update the title of the website from settings admin
function updateWebsiteTitle($title){

	esc($title);

	$result = mysql_query("UPDATE settings SET sitetitle = '$title'");

	if(!$result){

		error_log(mysql_error());
		return false;

	}
	else
	{
		return true;

	}

}

//get title of website
function getWebsiteTitle(){

	$result = mysql_query("SELECT sitetitle FROM settings");

	$data = mysql_fetch_assoc($result);

	return $data;
}





?>