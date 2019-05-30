<h5 class="italic black">By Topic :</h5>
<ul class="topics">
	
	<?php foreach (getTopics() as $topic) : ?>
		<li><a class="mail languages" href="?page=blog-home&amp;action=<?php echo $topic['topic'] ?>"><?php echo $topic['topic'] ?></a></li>
	<?php endforeach; ?>

</ul>

<h5 class="italic black">By Date :</h5>
<ul class="topics">
	<?php foreach (getMonths() as $month) : ?>
	<li><a class="mail languages" href="?page=blog-home&amp;date=<?php echo $month['date'];?>"><?php echo substr($month['date'], 0, 4);?> - <?php echo substr($month['date'], 4,2);?></a></li>
	<?php endforeach; ?>
</ul>


