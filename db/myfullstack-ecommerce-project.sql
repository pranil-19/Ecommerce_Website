# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.38-0ubuntu0.14.04.1)
# Database: Prutor
# Generation Time: 2014-12-16 06:10:03 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

SET FOREIGN_KEY_CHECKS=OFF;


# Dump of table pranil_garg_ecommerce_clothes_tbl
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pranil_garg_ecommerce_clothes_tbl`;

CREATE TABLE `pranil_garg_ecommerce_clothes_tbl` (
  `cloth_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cloth_name` varchar(255) NOT NULL DEFAULT '',
  `cloth_price` int(4) NOT NULL,
  `cloth_rating` varchar(10) NOT NULL DEFAULT '',
  `cloth_bio` varchar(255) DEFAULT NULL,
  `cloth_img` varchar(200) NOT NULL,
  PRIMARY KEY (`cloth_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `pranil_garg_ecommerce_clothes_tbl` WRITE;
/*!40000 ALTER TABLE `pranil_garg_ecommerce_clothes_tbl` DISABLE KEYS */;

INSERT INTO `pranil_garg_ecommerce_clothes_tbl` (`cloth_id`, `cloth_name`, `cloth_price`, `cloth_rating`, `cloth_bio`, `cloth_img`)
VALUES
	(1,"Men's Shirts",339,'3.7','Men Slim Fit Solid Mandarin Collar Casual Shirt','assets/my_img/shirts/1.jpeg'),
	(2,"Men's Shirts",679,'4.1','Men Regular Fit Checkered Casual Shirt','assets/my_img/shirts/2.jpeg'),
	(3,"Men's Shirts",741,'4.4','Men Slim Fit Printed Formal Shirt','assets/my_img/shirts/3.jpeg'),
	(4,"Men's Shirts",413,'4.1','Men Slim Fit Printed Slim Collar Casual Shirt','assets/my_img/shirts/4.jpeg'),
	(5,"Men's Shirts",439,'4.0','Men Slim Fit Solid Spread Collar Casual Shirt','assets/my_img/shirts/5.jpeg'),
	(6,"Men's Shirts",611,'4.6','Men Slim Fit Striped Formal Shirt','assets/my_img/shirts/6.jpeg'),
	(7,"Men's Shirts",479,'4.0','Men Slim Fit Solid Formal Shirt','assets/my_img/shirts/7.jpeg'),
	(8,"Men's Shirts",611,'4.2','Men Slim Fit Solid Spread Collar Formal Shirt','assets/my_img/shirts/8.jpeg'),
	(9,"Men's Shirts",566,'4.0','Men Slim Fit Self Design Formal Shirt','assets/my_img/shirts/9.jpeg'),
	(10,"Men's Shirts",629,'4.0','Men Slim Fit Solid Formal Shirt','assets/my_img/shirts/10.jpeg'),
	(11,"Men's T-shirts",335,'4','Solid Men Round Neck Maroon T-Shirt','assets/my_img/tshirts/1.jpeg'),
	(12,"Men's T-shirts",419,'4.1','Color Block Men Round Neck Green, Black T-Shirt','assets/my_img/tshirts/2.jpeg'),
	(13,"Men's T-shirts",359,'4.4','Printed Men Round Neck Green T-shirt','assets/my_img/tshirts/3.jpeg'),
	(14,"Men's T-shirts",359,'4.4','Solid Men Henley Neck Light Blue T-Shirt','assets/my_img/tshirts/4.jpeg'),
	(15,"Men's T-shirts",223,'4.1','Striped Men Round Neck Yellow T-Shirt','assets/my_img/tshirts/5.jpeg'),
	(16,"Men's T-shirts",272,'4.2','Printed Men Hooded Neck Black T-Shirt','assets/my_img/tshirts/6.jpeg'),
	(17,"Men's T-shirts",374,'4.1','Striped Men Polo Neck White T-Shirt','assets/my_img/tshirts/7.jpeg'),
	(18,"Men's T-shirts",171,'4.0','Striped Men Round Neck Red, Grey T-Shirt','assets/my_img/tshirts/8.jpeg'),
	(19,"Men's T-shirts",243,'4.0','Solid Men Mandarin Collar Green T-Shirt','assets/my_img/tshirts/9.jpeg'),
	(20,"Men's T-shirts",279,'4.0','Solid Men Round Neck Blue, Grey T-Shirt','assets/my_img/tshirts/10.jpeg'),
	(21,"Men's Jeans",999,'3.5','Regular Men Blue Jeans','assets/my_img/jeans/1.jpeg'),
	(22,"Men's Jeans",1100,'4.2','Slim Men Blue Jeans','assets/my_img/jeans/2.jpeg'),
	(23,"Men's Jeans",944,'4.3','Slim Men Dark Blue Jeans','assets/my_img/jeans/3.jpeg'),
	(24,"Men's Jeans",336,'3.8','Slim Men Light Blue Jeans','assets/my_img/jeans/4.jpeg'),
	(25,"Men's Jeans",2195,'4.0','Skinny Men Blue Jeans','assets/my_img/jeans/5.jpeg'),
	(26,"Men's Jeans",399,'3.9','Slim Men Black Jeans','assets/my_img/jeans/6.jpeg'),
	(27,"Men's Jeans",408,'3.7','Tapered Fit Men Grey Jeans','assets/my_img/jeans/7.jpeg'),
	(28,"Men's Jeans",561,'3.7','Regular Men White Jeans','assets/my_img/jeans/8.jpeg'),
	(29,"Men's Jeans",449,'3.9','Skinny Men Grey Jeans','assets/my_img/jeans/9.jpeg'),
	(30,"Men's Jeans",339,'4.0','Jogger Fit Men Black Jeans','assets/my_img/jeans/10.jpeg'),
	(31,"Men's Shorts",339,'3.8','Solid Men Grey Gym Shorts','assets/my_img/shorts/1.jpeg'),
	(32,"Men's Shorts",678,'4.9','Solid Men Black Regular Shorts','assets/my_img/shorts/2.jpeg'),
	(33,"Men's Shorts",863,'4.3','Printed Men Dark Blue Bermuda Shorts','assets/my_img/shorts/3.jpeg'),
	(34,"Men's Shorts",359,'4.4','Solid Men Dark Blue Sports Shorts','assets/my_img/shorts/4.jpeg'),
	(35,"Men's Shorts",683,'4.3','Solid Men Grey Regular Shorts','assets/my_img/shorts/5.jpeg'),
	(36,"Men's Shorts",359,'4.3','Printed Men Black Regular Shorts','assets/my_img/shorts/6.jpeg'),
	(37,"Men's Shorts",306,'4.0','Printed Men Black & white check Regular Shorts','assets/my_img/shorts/7.jpeg'),
	(38,"Men's Shorts",263,'3.9','Solid Men Dark Green, Black Basic Shorts','assets/my_img/shorts/8.jpeg'),
	(39,"Men's Shorts",808,'4.3','Checkered Men Brown Bermuda Shorts','assets/my_img/shorts/9.jpeg'),
	(40,"Men's Shorts",363,'4.0','Solid Men Black Running Shorts','assets/my_img/shorts/10.jpeg');

/*!40000 ALTER TABLE `pranil_garg_ecommerce_clothes_tbl` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table pranil_garg_ecommerce_user_tbl
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pranil_garg_ecommerce_user_tbl`;

CREATE TABLE `pranil_garg_ecommerce_user_tbl` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL DEFAULT '',
  `user_full_name` varchar(150) NOT NULL DEFAULT '',
  `user_email` varchar(255) NOT NULL DEFAULT '',
  `user_password` varchar(255) NOT NULL DEFAULT '',
  `user_role` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `pranil_garg_ecommerce_user_tbl` WRITE;
/*!40000 ALTER TABLE `pranil_garg_ecommerce_user_tbl` DISABLE KEYS */;

INSERT INTO `pranil_garg_ecommerce_user_tbl` (`user_id`, `user_name`, `user_full_name`, `user_email`, `user_password`, `user_role`)
VALUES
  (1,'admin','PranilGarg','admin@admin.com','admin',1),
  (2,'tester1','prutor1','test1@test.com','prutor1',2),
  (3,'tester2','prutor2','test2@test.com','prutor2',2);

/*!40000 ALTER TABLE `pranil_garg_ecommerce_user_tbl` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table pranil_garg_ecommerce_reviews_tbl
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pranil_garg_ecommerce_reviews_tbl`;

CREATE TABLE `pranil_garg_ecommerce_reviews_tbl` (
  `review_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `review_cloth_id` int(11) unsigned NOT NULL,
  `review_user_id` int(11) unsigned NOT NULL,
  `review_rating` varchar(10) NOT NULL,
  `review_content` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`review_id`),
  KEY `pranil_garg_ecommerce_user_tbl_foreign_key` (`review_user_id`),
  KEY `pranil_garg_ecommerce_clothes_tbl_foreign_key` (`review_cloth_id`),
  CONSTRAINT `pranil_garg_ecommerce_clothes_tbl_foreign_key` FOREIGN KEY (`review_cloth_id`) REFERENCES `pranil_garg_ecommerce_clothes_tbl` (`cloth_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pranil_garg_ecommerce_user_tbl_foreign_key` FOREIGN KEY (`review_user_id`) REFERENCES `pranil_garg_ecommerce_user_tbl` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `pranil_garg_ecommerce_reviews_tbl` WRITE;
/*!40000 ALTER TABLE `pranil_garg_ecommerce_reviews_tbl` DISABLE KEYS */;

INSERT INTO `pranil_garg_ecommerce_reviews_tbl` (`review_id`, `review_cloth_id`, `review_user_id`, `review_rating`, `review_content`)
VALUES
	(1,2,2,4.1,'This is one of my favorite shirt of all time!'),
	(2,11,3,4.0,'best rounded T-shirt'),
	(3,3,3,4.2,'One of the favourite.'),
	(4,21,2,4.1,'nice blue color jeans');

/*!40000 ALTER TABLE `pranil_garg_ecommerce_reviews_tbl` ENABLE KEYS */;
UNLOCK TABLES;


SET FOREIGN_KEY_CHECKS=ON;


/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
