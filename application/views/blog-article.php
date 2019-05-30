<div class="row-fluid">
	
	<div class="span4">

		<?php if(logged_in()) :?>
		<a href="?page=login&amp;action=logout">Log Out</a>
		<?php else :?>
		<p><a class="grey" href="?page=login">Log In</a> or <a class="grey" href="?page=register">Register</a></p>
		<?php endif;?>

	</div>

	<div class="span4 offset8">
		<form method="post" action="?page=blog-home" class="form-search">
			<input type="text" class="input-medium search-query" name="search">
			<input type="submit" class="btn btn-mini btn-inverse" value="search" name="submit-search">
		</form>
	</div>

</div><!-- row-fluid-->


<div class="row-fluid">

	<div class="span4 col1">

		<?php include 'blog-nav.php'; ?>

	</div>

	<div class="span8">
	

		<?php foreach($article as $article_details) :?>
		<div class="row-fluid">

			<h2 class="italic"><?php echo $article_details['title'];?></h2>

		</div>

		<div class="row-fluid">

			<p class="italic">Posted by <?php echo $article_details['author'];?> on <?php echo $article_details['date'];?> in <a class="languages" href="?page=blog-home&amp;action=<?php echo $article_details['topic'];?>"><?php echo $article_details['topic'];?></a></p>

		</div>

		<div class="row-fluid">

			<img src="site/img/<?php echo $article_details['image'];?>" alt="imgtut"/>

		</div>

		<div class="row-fluid">

			<p><?php echo $article_details['article'];?></p>

		</div>

		<?php foreach($comments as $comment) : ?>
		<div class="row-fluid comment-box">

			<p>Posted By <?php echo $comment['user'];?> On <?php echo $comment['date'];?></p>
			<p><?php echo $comment['message'];?></p>

		</div>
		<?php endforeach ;?>

		
		<?php if(logged_in()) : ?>
		<div class="row-fluid">
	
			<form method="post" action=""> 
				<textarea id="comment" name="message"></textarea><span class="errors"><?php echo $errorsMessage;?></span>
				<span class="errors"><?php echo $createdComment;?></span>
				<input type="submit" value="post" name="submit" class="btn btn-inverse btn-mini btn-right">
			</form>
			
		</div>
		<?php endif;?> 
		<?php endforeach;?>
	
	</div>
		

</div>