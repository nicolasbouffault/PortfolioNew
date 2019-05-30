<?php
//article data file

//get all articles and order them by date 
function getArticleByDate(){

	$result = mysql_query("SELECT * FROM articles ORDER BY date DESC");

	$data = array();

	while($record = mysql_fetch_assoc($result)){
		array_push($data, $record);
	}

	return $data;	
	
}

//get one article by id for the blog-article page
function getArticleById($id){

	$result = mysql_query("SELECT * FROM articles WHERE id=$id");

	$data = array();

	while($record = mysql_fetch_assoc($result)){
		array_push($data, $record);

	}

	return $data;

}

//search through the keywords according to what the user type
function searchResults($keywords){

	$data = array();
	$where = "";

	esc($keywords);

	$keywords = preg_split('/[\s]+/', $keywords);
	$total_keywords = count($keywords);

	foreach ($keywords as $key => $keyword) {
		
		$where .= "keywords LIKE '%$keyword%'";

		if($key != ($total_keywords - 1)){

			$where .= " AND ";
		
		}
	}

	$query = "SELECT * FROM articles WHERE $where ORDER BY date DESC";



	$results = mysql_query($query);

	if ($results)
	{
		$results_num = mysql_num_rows($results);
	}
	else
	{
		$results_num = 0;
	}

	if($results_num === 0){

		return false;
	}else{

		while($record = mysql_fetch_assoc($results)){

			array_push($data, $record);
		}

		return $data;
	
	}

}

//function called when clicking on the topic links in the blog header
function getArticleByTopic($topic){

	esc($topic);

	$result = mysql_query("SELECT * FROM articles WHERE topic='$topic'");

	$data = array();

	while($record = mysql_fetch_assoc($result)){

		array_push($data, $record);
	}

	return $data;
}

//get all topics from articles
function getTopics()
{
	$result = mysql_query("SELECT DISTINCT topic FROM articles");

	$data = array();

	while($record = mysql_fetch_assoc($result)){

		array_push($data, $record);
	}

	return $data;
}

//function called when clicking on the date links in the blog header
function getArticlesByMonth($month){

	esc($month);

	$result = mysql_query("SELECT * from articles where extract(year_month from `date`) = '$month'");

	$data = array();

	while($record = mysql_fetch_assoc($result)){

		array_push($data, $record);
	}

	return $data;
}	

//get different months 
function getMonths(){

	$result = mysql_query("SELECT distinct extract(year_month from `date`) as `date` from articles");

	$data = array();

	while($record = mysql_fetch_assoc($result)){

		array_push($data, $record);
	}

	return $data;
}

//create article from the admin add page
function createArticle($title, $topic, $author, $image, $article, $keywords){

	esc($title);
	esc($topic);
	esc($author);
	esc($image);
	esc($article);
	esc($keywords);

	$result = mysql_query("INSERT INTO articles(title, `date`, topic, author, image, article, keywords) VALUES('$title', NOW(), '$topic', '$author', '$image', '$article', '$keywords')");

	if(!$result){

		error_log(mysql_error());
		return false;

	}
	else
	{

		return true;
	}

}

//delete article from database
function deleteArticle($id){

	$result = mysql_query("DELETE FROM articles WHERE id = $id");

	if(!$result){

		error_log(mysql_error());
		return false;

	}
	else
	{

		return true;

	}

}

//update article from database
function updateArticle($id, $title, $topic, $keywords, $article){

	esc($title);
	esc($topic);
	esc($keywords);
	esc($article);

	$result = mysql_query("UPDATE articles SET title = '$title', topic = '$topic', article = '$article', keywords = '$keywords' WHERE id = $id");
	
	if(!$result){

		error_log(mysql_error());
		return false;
	}
	else
	{

		return true;
	}

}

//update picture from database
function updatePicture($image, $id){

	esc($image);

	$result = mysql_query("UPDATE articles SET image = '$image' WHERE id = $id");

	if(!$result){

		error_log(mysql_error());
		return false;

	}
	else
	{
		return true;

	}

}

//get all ids for admin delete and admin update
function getIds(){

	$result = mysql_query("SELECT id FROM articles");

	$data = array();

	while($record = mysql_fetch_assoc($result)){

		array_push($data, $record);
	}

	return $data;
}

?>