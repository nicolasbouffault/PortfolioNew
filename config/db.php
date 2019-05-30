<?php
//connection to database

$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'root';
$db_name = 'portfolio';

$connection = mysql_connect($db_host, $db_user, $db_pass);

if(!$connection){
 
	error_log(mysql_error());
	exit();
}

$db = mysql_select_db($db_name);

if(!$db){

	error_log(mysql_error());
	exit();
}



?>