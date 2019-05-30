<!DOCTYPE html>
<html lang="en">

	<head>

		<?php 
		include_once(DATA.'settings.php');
		$webTitle = getWebsiteTitle();
		?>

		<title><?php echo $webTitle['sitetitle'];?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" media="screen" href="site/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="site/bootstrap/css/sticky-footer.css">
		<link rel="stylesheet" type="text/css" href="site/css/style.css">
		<script type="text/javascript" src="site/js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="site/bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="site/js/contact.js"></script>
		<script type="text/javascript" src="site/js/login.js"></script>
		<script type="text/javascript" src="site/js/register.js"></script>
		<script type="text/javascript" src="site/js/ckeditor/ckeditor.js"></script>
		
	</head>


	<body>


		<div id="wrap">
			
			
			<?php if(isset($_SESSION['logged_in']) && $_SESSION['role'] == 'admin') : ?>
			<header>

			
				<nav class="navbar navbar-inverse">

					<div class="navbar-inner">

						<a class="brand" href="?page=admin/admin-home"><img src="site/img/logoPort.png" alt="logo"></a>
						<li><a class="grey" href="?page=login&amp;action=logout">Log Out</a></li>

						<ul class="nav">

							<li class="nav-links dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Edit Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-links"><a href="?page=admin/admin-page-add">Add Page</a></li>
									<li class="nav-links"><a href="?page=admin/admin-page-update">Update Page</a></li>
									<li class="nav-links"><a href="?page=admin/admin-page-delete">Delete Page</a></li>
									<li class="nav-links"><a href="?page=admin/admin-page-sethome">Set Home Page</a></li>
								</ul>
							</li>

							<li class="nav-links dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Edit Portfolio</a>
								<ul class="dropdown-menu">
									<li class="nav-links"><a href="?page=admin/admin-portfolio-add">Add Website</a></li>
									<li class="nav-links"><a href="?page=admin/admin-portfolio-update">Update Website</a></li>
									<li class="nav-links"><a href="?page=admin/admin-portfolio-delete">Delete Website</a></li>
								</ul>
							</li>

							<li class="nav-links dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Edit Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-links"><a href="?page=admin/admin-blog-add">Add Article</a></li>
									<li class="nav-links"><a href="?page=admin/admin-blog-update">Update Article</a></li>
									<li class="nav-links"><a href="?page=admin/admin-blog-delete">Delete Article</a></li>
									<li class="nav-links"><a href="?page=admin/admin-blog-comments">Comments</a></li>
								</ul>
							</li>

							<li class="nav-links dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Settings</a>
								<ul class="dropdown-menu">
									<li class="nav-links"><a href="?page=admin/admin-settings-title">Set Website Title</a></li>
								</ul>
							</li>

						</ul>


					</div>

				</nav>


			</header>
			
			<?php else :?>

			<header>

				<nav class="navbar navbar-inverse">

					<div class="navbar-inner">

						<a class="brand" href="?page=page"><img src="site/img/logoPort.png" alt="logo"></a>

						<ul class="nav">


							<?php foreach ($pageTitles as $title) : ?>								
								<li class="nav-links"><a href="?page=page&amp;id=<?php echo $title['id'] ?>"><?php echo $title['title']; ?></a></li>								
							<?php endforeach; ?>

							<li class="nav-links"><a href="?page=portfolio">My Work</a></li>
							<li class="nav-links"><a href="?page=contact">Contact Me</a></li>
							<li class="nav-links"><a href="?page=blog-home">Blog</a></li>
							<?php if(logged_in()) :?>
							<li class="nav-links"><a href="?page=blog-members">Your Account</a></li>
							<?php endif;?>


						</ul>

					</div>

				</nav>

			</header>

			<?php endif;?>

		    <div class="container-fluid content">
		    	

