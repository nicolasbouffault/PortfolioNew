<p class="italic">
	Here are some examples of my work. Click on the image to access to the live version. Please don't hesitate to contact me if you have any further questions about any of these projects.
</p>

<?php foreach($portfolio as $details) : ?>
<div class="row-fluid margin">
	
	<div class="span4">
		
		<a href="<?php echo $details['url'];?>" target="_blank"><img src="site/img/<?php echo $details['icon'];?>" alt="icon" width="300" height="200"/></a>
	
	</div>

	<div class="span8">
	
		<h4><?php echo $details['site_title'];?></h4>

		<div>
			
			<?php echo $details['site_overview'];?>

		</div>

		<a class="btn btn-small" href="<?php echo $details['url'];?>" target="_blank">Visit Full Website</a>


	</div>

</div>
<?php endforeach;?>
