<?php
//comments data file

//create a comment from blog article page and insert it into the database
function createComment($id, $user, $message){

	esc($user);
	esc($message);

	$result = mysql_query("INSERT INTO comments(article_id, user, message, `date`, isApproved) VALUES('$id', '$user', '$message', NOW(), 0)");

	if(!$result){

		echo mysql_error();
		exit();
	}
}

//display comments on the blog article page
function getCommentByArticle($id){

	$result = mysql_query("SELECT user, message, `date` FROM comments WHERE article_id=$id AND IsApproved = 1");

	$data = array();

	while($record = mysql_fetch_assoc($result)){

		array_push($data, $record);

	}

	return $data;

}

//edit user's comment before approving it
function editComment($message, $id){

	$result = mysql_query("UPDATE comments SET message = '$message' WHERE id = $id");

	if(!$result){
		
		error_log(mysql_error());
		return false;
	}
	else
	{
		return true;
	}

}

//get comment by id
function getCommentById($id){

	$result = mysql_query("SELECT * FROM comments WHERE id = $id");

	$data = mysql_fetch_assoc($result);

	return $data;

}

//get all comments to display in table
function getAllComments(){

	$result = mysql_query("SELECT * FROM comments");

	$data = array();

	while($record = mysql_fetch_assoc($result)){

		array_push($data, $record);
	}

	return $data;
}

//delete a comment
function deleteComment($id){

	$result = mysql_query("DELETE FROM comments WHERE id = $id");

	if(!$result){

		error_log(mysql_error());
		return false;
	}
	else
	{
		return true;

	}

}

//approve the comment before it gets posted on the site
function approveComment($id){

	$result = mysql_query("UPDATE comments SET IsApproved = 1 WHERE id = $id");

	if(!$result){

		error_log(mysql_error());
		return false;

	}
	else
	{
		return true;
	}

}

//disapprove the comment to remove it from the website
function disapproveComment($id){

	$result = mysql_query("UPDATE comments SET IsApproved = 0 WHERE id = $id");

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