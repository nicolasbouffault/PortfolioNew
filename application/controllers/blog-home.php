<?php
//blog-home controller

include(DATA.'articles.php');

$valid = true;
$errorsSearch = "";
$articlesChosen = "";
$articles = array();


if(isset($_POST['submit-search'])){
	
	$keywords = $_POST['search'];
	$keywords = htmlentities(trim($keywords));

	//field validation
	if(empty($_POST['search'])){

		$valid = false;
		$errorsSearch = "Please enter a search term !";

	}else{

		if(strlen($keywords)<3){

			$valid = false;
			$errorsSearch = "Your search term must be three or more characters !";
		}else{

			if(searchResults($keywords) === false){

				$valid = false;
				$errorsSearch = "Your search for '$keywords' returned no results";
			}
		}
	
	}

	if($valid){

		//call searchResults function
		$articles = searchResults($keywords);
		$articlesChosen = "You searched for $keywords and it returned " . count($articles) . " results";	

	}
	else
	{	//if search return no results, call getArticleByDate
		$articles = getArticleByDate();
	}
	
}

elseif (isset($_GET['action'])) {
	
	$articles = getArticleByTopic($_GET['action']);

	if (count($articles) == 0){
		// error
	}
	else{
		$articlesChosen = "Showing articles for topic: " . $_GET['action'];
	}
}

elseif (isset($_GET['date'])){

	$articles = getArticlesByMonth($_GET['date']);

	if (count($articles) == 0){
		//error
	}
	else
	{
		$articlesChosen = "Showing articles for month : " . $_GET['date'];
	}

}


else
{	//display all articles from most recent
	$articles = getArticleByDate();
}




//include files
include(VIEWS.'header.php');
include(VIEWS.'blog-home.php');
include(VIEWS.'footer.php');

?>