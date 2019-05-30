# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.25)
# Database: portfolio
# Generation Time: 2013-09-27 11:28:25 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table articles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `articles`;

CREATE TABLE `articles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `topic` varchar(20) DEFAULT NULL,
  `author` varchar(20) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `article` text,
  `keywords` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;

INSERT INTO `articles` (`id`, `title`, `date`, `topic`, `author`, `image`, `article`, `keywords`)
VALUES
	(1,'Create Your First Web Page','2013-08-23','html','Nicolas','html_tut.jpg','<p>Ready to create your first web page ?</p>\r\n\r\nHTML is the most important language of the web and also the easiest to learn. HTML stands for Hypertext Markup Language and it defines the content of your web page. With HTML, you can display text on your webpage, images, tables, forms, create links and much more...\r\n\r\nAfter this quick introduction, let\'s jump right in.\r\n\r\nIf you already have a code editor, you can now open it or you can use a simple text editor on your PC or Mac.\r\n\r\nType the following code :\r\n\r\n<xmp>\r\n<html>\r\n	\r\n	<head>\r\n		\r\n		<title>My First Web Page</title>	\r\n\r\n	</head>\r\n\r\n	<body>\r\n		\r\n		<p>This is my first web page</p>\r\n	\r\n	</body>\r\n\r\n</html>\r\n</xmp>\r\n\r\nSave your page as index.html and open the file in your favourite browser. Congratulations, you\'ve just created your first web page. \r\n\r\n<br/>\r\nLet\'s take a step back and look at the code you just typed. Every web page starts with the <xmp class=\"inline\"><html></xmp> tag and ends with the <xmp class=\"inline\"></html></xmp> tag. All the content goes inside these two tags and is defined as html code.\r\n<br/>\r\nInside the <xmp class=\"inline\"><html></xmp> tag, we\'ve got two new tags : the <xmp class=\"inline\"><head></xmp> tag and the <xmp class=\"inline\"><body></xmp> tag. We can say that the <xmp class=\"inline\"><head></xmp> tag and <xmp class=\"inline\"><body></xmp> tag are children of the <xmp class=\"inline\"><html></xmp> tag.\r\n<br/>\r\nThe <xmp class=\"inline\"><head></xmp> define a special part of the web page called the head. This is where we can find the title of the page define by the <xmp class=\"inline\"><title></xmp> tag. In the <xmp class=\"inline\"><head></xmp>, we can also find some links to CSS files and Javascript files but we will discuss this in a future tutorial.\r\n<br/>\r\nFinally, in the <xmp class=\"inline\"><body></xmp> tag, we can find the main content of the website. This is where the website lives. The <xmp class=\"inline\"><p></xmp> tag defines a paragraph.\r\n<br/>\r\nSome other useful tags like the headings tags <xmp class=\"inline\"><h1> <h2> <h3> <h4></xmp> and <xmp class=\"inline\"><h5></xmp> are used for important text. The difference between <xmp class=\"inline\"><h1></xmp> and <xmp class=\"inline\"><h5></xmp> is the size of the heading. When using <xmp class=\"inline\"><h1></xmp> the size is bigger than when using <xmp class=\"inline\"><h5></xmp>.\r\n<p>That\'s it for this tutorial. In the next html tutorials, we will look at how to implement an image on your web page or create a link to another website.</p>\r\n<p>Please remember to sign up to post comments !</p>','web create html learn'),
	(2,'Style With CSS','2013-08-24','css','Nicolas','css_tut.jpg','HTML is good but you might want to add some design to your pages. For that, you will use CSS.\r\n<br/>\r\nTo give you an idea of what we can achieve with CSS, you can visit the following website : <a href=\"http://www.csszengarden.com\">CSS Zen Garden</a>. As you can see, the content of the website is the same each and every time. Only the design and layout of the website change.\r\n<br/>\r\nYou can include your CSS code in your html file or you can decide to create a new file and link it to your html file.\r\n<br/>\r\nHere is how to proceed :\r\n<ul>\r\n<li>create a new file and give it the extension .css, you can call it style.css for example.</li>\r\n<li>Put your css file in the same folder than your html file</li>\r\n<li>Inside the <xmp class=\"inline\"><head></xmp>, write the following code :\r\n<xpm class=\"inline\"><link href=\'style.css\' rel=\'stylesheet\' type=\'text/css\'></li></xmp>\r\nYou\'re done !\r\n</ul>\r\n\r\nSo now that you\'re ready to go, let\'s write some CSS. Here is the basic structure :\r\n\r\nbody\r\n{\r\nbackground-color: #000;\r\n}\r\n\r\nIn plain english, this means that we are assigning the background colour black to the body element.','css learn style'),
	(3,'Animate Your Page With Javascript','2013-08-25','js','Nicolas','js_tut.png','coming soon.....','javascript learn animate'),
	(4,'Getting  Started With PHP','2013-08-26','php','Nicolas','php_tut.png','coming soon....','php learn dynamic '),
	(5,'Hook Up PHP With MySQL','2013-09-10','mysql','Nicolas','mysql_tut.gif','coming soon','mysql sql php learn '),
	(6,'What is Ajax ?','2013-09-10','ajax','Nicolas','ajax_tut.jpg','coming soon....','ajax learn javascript');

/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(11) DEFAULT NULL,
  `user` varchar(25) DEFAULT NULL,
  `message` text,
  `date` datetime DEFAULT NULL,
  `IsApproved` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;

INSERT INTO `comments` (`id`, `article_id`, `user`, `message`, `date`, `IsApproved`)
VALUES
	(2,4,'pdurand','what is sql','2013-09-16 22:10:38',1),
	(5,5,'pdurand','hello','2013-09-23 11:04:00',1),
	(6,5,'pdurand','hello','2013-09-23 11:05:23',1),
	(7,4,'pdurand','php ?','2013-09-23 20:25:15',1),
	(8,3,'pdurand','javascript ?','2013-09-24 10:38:08',1),
	(9,3,'pdurand','javascript ?','2013-09-24 10:45:58',0),
	(10,6,'pdurand','what does it stand for ?','2013-09-24 10:47:39',1),
	(11,6,'pdurand','hello?','2013-09-24 10:54:14',0);

/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table contact
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  `company` varchar(25) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;

INSERT INTO `contact` (`id`, `name`, `company`, `email`, `phone`, `message`)
VALUES
	(1,'Nicolas BOUFFAULT','','nicolasbouffault@gmail.com','447407387616','hello');

/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table pages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `contents` text,
  `title` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;

INSERT INTO `pages` (`id`, `contents`, `title`)
VALUES
	(1,'<div class=\"tagline\">\r\n\r\n  <h1 class=\"tag\">I\'m<span class=\"grey\"> Nicolas</span>, a<span class=\"grey\"> Web Developer</span> based</h1>\r\n  <h1 class=\"tag\">in London, UK</h1>\r\n\r\n</div>\r\n\r\n\r\n\r\n<div class=\"enter\">\r\n\r\n       <a class=\"btn btn-inverse\" href=\"?page=page&id=2\">Enter Website</a>\r\n\r\n</div>','Home'),
	(2,'<div class=\"row-fluid\">\r\n\r\n 	<div class=\"span6 col1\">\r\n\r\n 		<div class=\"row-fluid\">\r\n			<img id=\"bio\" src=\"site/img/bio.jpg\" alt=\"bio\">\r\n			<p>Hi I\'m Nicolas, I\'m a web developer originally from France but based in London in the UK. After a few years spent in the tourism sector, I decided to take another career path and became interested in web development. I started by learning the basics of html and css during my bachelor degree in Tourism and New Technologies and decided to take things further here in the UK where I took a one year course in Web Development / Programming. I have just graduated from a Certificate of Higher Education and I am currently looking for a Junior Web Developer position to put in practice all the things that I have learnt.  </p>\r\n 		</div>\r\n 		\r\n 		\r\n 		<div class=\"row-fluid\">\r\n			<form class=\"btn-center\">\r\n				<input class=\"btn btn-inverse\" type=\"button\" value=\"download my cv\" onclick=\"window.location.href=\'site/img/CV Nicolas Bouffault.doc\'\" />\r\n			</form> 			\r\n 		</div>\r\n\r\n\r\n 	</div><!-- span6 col1-->\r\n\r\n\r\n 	<div class=\"span6\">\r\n\r\n 		<div class=\"row-fluid\">\r\n 			<h4>My Qualifications</h4>\r\n 			<ul class=\"languages\">\r\n 				<li>2013 - certificate of higher education in web development</li>\r\n 				<p class=\"italic\">SAE Institute London - United Kingdom</p>\r\n 				<li>2010 - bachelor degree tourism / new technologies</li>\r\n 				<p class=\"italic\">University of Paris Marne la Vallée - France</p>\r\n 			</ul>\r\n 		</div>\r\n 		\r\n 		<div class=\"row-fluid\">\r\n	 		\r\n	 		<h4>My Skills</h4>\r\n\r\n	 		<div class=\"span12\">\r\n\r\n	 			<div class=\"row-fluid\">\r\n	 		\r\n			 		<div class=\"span6\">\r\n			 			<h5 class=\"italic\">Programming Languages</h5>\r\n			 			<ul class=\"languages\">\r\n			 				<li>html</li>\r\n			 				<li>css</li>\r\n			 				<li>javascript</li>\r\n			 				<li>jquery</li>\r\n			 				<li>php</li>\r\n			 				<li>mysql</li>\r\n			 				<li>actionscript 3</li>\r\n			 			</ul>\r\n			 		</div>\r\n			 	\r\n			 		<div class=\"span6\">\r\n			 			<h5 class=\"italic\">Softwares / Applications</h5>\r\n			 			<ul class=\"languages\">\r\n			 				<li>Adobe Photoshop</li>\r\n			 				<li>Adobe Illustrator</li>\r\n			 				<li>Adobe Dreamweaver</li>\r\n			 				<li>Adobe Flash</li>\r\n			 			</ul>\r\n			 		</div>\r\n\r\n			 	</div><!-- row-fluid-->\r\n		 	\r\n		 	</div><!-- span12 -->\r\n\r\n 		</div><!-- row-fluid-->\r\n 		\r\n 		<div class=\"row-fluid btn-center\">\r\n 			<a class=\"btn btn-inverse\" href=\"?page=contact\">contact me</a>\r\n 		</div>\r\n\r\n 		\r\n\r\n 	</div><!-- span6 -->\r\n\r\n\r\n</div><!-- row-fluid -->','About Me');

/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table portfolio
# ------------------------------------------------------------

DROP TABLE IF EXISTS `portfolio`;

CREATE TABLE `portfolio` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) DEFAULT NULL,
  `site_title` varchar(50) DEFAULT NULL,
  `site_overview` text,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `portfolio` WRITE;
/*!40000 ALTER TABLE `portfolio` DISABLE KEYS */;

INSERT INTO `portfolio` (`id`, `icon`, `site_title`, `site_overview`, `url`)
VALUES
	(1,'Les_Charmilles_Hotel_Website.png','Les Charmilles - Hotel Website','This is my first website which was developed for an hotel in central France. This is the english version of their original website. It was developed using html, css and javascript. In this website, we can find informations about the hotel, about the region, and some informations about the activities :\r\n<ul>\r\n<li>Informations about the Hotel</li>\r\n<li>Touristic Informations</li>\r\n<li>Contact / Booking Form</li>\r\n</ul>','http://www.nicolasbouffault.co.uk/charmilles'),
	(2,'Star_Travel_Website.png','Star Travel - Travel Website','This is a dynamic website developed using PHP and MySQL. This website was developed for a fictional travel agency in London. The user can search hotels by city and also specify the number of rooms, the number of nights, the type of room. Some of the features of the website are :\r\n<ul>\r\n\r\n	<li>Register / Login system</li>\r\n	<li>Member page for users to manage their details</li>\r\n	<li>Admin pages (CMS) for adding, deleting or updating an hotel on the website</li>\r\n	<li>Shopping Basket functionality where users can make a booking</li>\r\n</ul>','http://www.nicolasbouffault.co.uk/travel');

/*!40000 ALTER TABLE `portfolio` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table settings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `homepageid` int(11) DEFAULT NULL,
  `sitetitle` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;

INSERT INTO `settings` (`id`, `homepageid`, `sitetitle`)
VALUES
	(1,1,'Portfolio of Nicolas Bouffault');

/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `sign_up_date` datetime DEFAULT NULL,
  `last_visited` datetime DEFAULT NULL,
  `role` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `sign_up_date`, `last_visited`, `role`)
VALUES
	(1,'Nicolas','BOUFFAULT','nicolasbouffault@gmail.com','nicolasw12','c44a471bd78cc6c2fea32b9fe028d30a','2013-08-25 11:23:07','2013-08-25 11:23:07','admin'),
	(2,'Joe','SMITH','jsmith@gmail.com','josmith3','6eea9b7ef19179a06954edd0f6c05ceb','2013-09-25 10:23:10','2013-09-25 10:23:10','user');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
