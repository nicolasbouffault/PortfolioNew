<div class="row-fluid">
	
	<div class="span4">

		<?php if(logged_in()) :?>
		<a class="grey" href="?page=login&amp;action=logout">Log Out</a>
		<?php else :?>
		<p><a class="grey" href="?page=login">Log In</a> or <a class="grey" href="?page=register">Register</a></p>
		<?php endif;?>

	</div>

	<div class="span4 offset8">
		<form method="post" action="#" class="form-search">
			<input type="text" class="input-medium search-query" name="search">
			<input type="submit" class="btn btn-mini btn-inverse" value="search" name="submit-search">
			<p><span class="errors"><?php echo $errorsSearch;?></span></p>
		</form>
	</div>

</div><!-- row-fluid-->


<div class="row-fluid">

	<div class="span4 col1">

		<?php include 'blog-nav.php'; ?>

	</div>
	
	<div class="span8">

		<p class="italic"><?php echo $articlesChosen;?></p>
		
		<?php foreach($articles as $article) :?>

		<div class="row-fluid">

			<div class="row-fluid">

				<a class="art-title" href="?page=blog-article&amp;id=<?php echo $article['id'];?>"><h2 class="italic"><?php echo $article['title'];?></h2></a>
	
			</div>

			<div class="row-fluid">
				
				<p class="italic">Posted by <?php echo $article['author'];?> on <?php echo $article['date'];?> in <a class="languages" href="?page=blog-home&amp;action=<?php echo $article['topic'];?>"><?php echo $article['topic'];?></a></p>
	
			</div>

			<div class="row-fluid">

				<a href="?page=blog-article&amp;id=<?php echo $article['id'];?>"><img src="site/img/<?php echo $article['image'];?>" alt="imgtut"/></a>

			</div>

			<div class="row-fluid">

				<p><?php echo substr($article['article'],0, 20);?></p>
				<a href="?page=blog-article&amp;id=<?php echo $article['id'];?>">Read More...</a>
		
			</div>


		</div>
		<?php endforeach ;?>

 
	</div><!-- span8-->

</div><!-- row-fluid-->

