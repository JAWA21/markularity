# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.33)
# Database: markularity
# Generation Time: 2014-01-29 14:38:03 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table bookmarks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bookmarks`;

CREATE TABLE `bookmarks` (
  `bookmark_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(100) DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL,
  `category` varchar(125) DEFAULT NULL,
  `date_submitted` datetime DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '0',
  `click` int(100) DEFAULT NULL,
  `rank` int(100) DEFAULT NULL,
  PRIMARY KEY (`bookmark_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `bookmarks_ibfk_1` FOREIGN KEY (`bookmark_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `bookmarks` WRITE;
/*!40000 ALTER TABLE `bookmarks` DISABLE KEYS */;

INSERT INTO `bookmarks` (`bookmark_id`, `url`, `title`, `category`, `date_submitted`, `user_id`, `flag`, `click`, `rank`)
VALUES
	(1,'smalldog.com','Small Dog Electronics','Tech','2014-01-22 00:00:00',4,0,NULL,3),
	(2,'cakephp.org','CakePHP - build web apps fast','Geekery','2014-01-22 00:00:00',4,0,NULL,5),
	(3,'facebook.com','procrastination','Humor',NULL,18,0,NULL,10),
	(4,'google.com','Knowledge','Educational','0000-00-00 00:00:00',18,0,NULL,6),
	(5,'cokeandpopcorn.ch','Binge watch tv shows','Movies','0000-00-00 00:00:00',18,0,NULL,9),
	(9,'psychologytoday.com','Psychology','Psychology','0000-00-00 00:00:00',18,0,NULL,7),
	(10,'bandsintown.com/home','Tours','Music','0000-00-00 00:00:00',18,0,NULL,7),
	(11,'weather.com/weather/hourbyhour/graph/Winter+Park+FL+32792:4:US','Winter Park Weather','Tech','0000-00-00 00:00:00',19,0,NULL,1);

/*!40000 ALTER TABLE `bookmarks` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table books
# ------------------------------------------------------------

DROP VIEW IF EXISTS `books`;

CREATE TABLE `books` (
   `bookmark_id` INT(11) UNSIGNED NOT NULL DEFAULT '0',
   `url` VARCHAR(100) NULL DEFAULT NULL,
   `title` VARCHAR(30) NULL DEFAULT NULL,
   `category` VARCHAR(125) NULL DEFAULT NULL,
   `date_submitted` DATETIME NULL DEFAULT NULL,
   `user_id` INT(11) UNSIGNED NOT NULL DEFAULT '0',
   `flag` TINYINT(1) NOT NULL DEFAULT '0',
   `rank` INT(100) NULL DEFAULT NULL,
   `click` INT(100) NULL DEFAULT NULL
) ENGINE=MyISAM;



# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `category_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(125) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`category_id`, `category_name`)
VALUES
	(1,'Sports'),
	(2,'Tech'),
	(3,'Fashion'),
	(4,'Fitness'),
	(5,'Humor'),
	(6,'Gaming'),
	(7,'Desgin'),
	(8,'Food'),
	(9,'Inspiration'),
	(10,'Geekery'),
	(11,'Code Toolkit'),
	(12,'Travel'),
	(13,'Literature'),
	(14,'Automobiles'),
	(15,'Motorcycles'),
	(16,'News');

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table click_throughs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `click_throughs`;

CREATE TABLE `click_throughs` (
  `click_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `bookmark_id` int(11) NOT NULL,
  `clicked_user_id` int(11) NOT NULL,
  `click_amount` int(11) NOT NULL,
  PRIMARY KEY (`click_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `click_throughs` WRITE;
/*!40000 ALTER TABLE `click_throughs` DISABLE KEYS */;

INSERT INTO `click_throughs` (`click_id`, `bookmark_id`, `clicked_user_id`, `click_amount`)
VALUES
	(1,5,20,0),
	(2,3,25,0),
	(3,5,25,0),
	(4,3,25,0),
	(5,9,25,0),
	(6,10,25,0),
	(7,1,25,0),
	(8,3,25,0),
	(9,5,25,0),
	(10,9,0,0),
	(11,10,0,0),
	(12,3,0,0),
	(13,3,0,0),
	(14,5,0,0),
	(15,10,0,0),
	(16,10,0,0),
	(17,3,0,0),
	(18,5,0,0);

/*!40000 ALTER TABLE `click_throughs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table point_type
# ------------------------------------------------------------

DROP TABLE IF EXISTS `point_type`;

CREATE TABLE `point_type` (
  `type_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `clickthrough` int(11) DEFAULT NULL,
  `like` int(11) DEFAULT NULL,
  `dislike` int(11) DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table points
# ------------------------------------------------------------

DROP TABLE IF EXISTS `points`;

CREATE TABLE `points` (
  `point_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned DEFAULT NULL,
  `book_id` int(11) unsigned DEFAULT NULL,
  `pointType_id` int(11) unsigned DEFAULT NULL,
  `dateTime` datetime DEFAULT NULL,
  PRIMARY KEY (`point_id`),
  KEY `user_id` (`user_id`),
  KEY `pointType_id` (`pointType_id`),
  KEY `book_id` (`book_id`),
  CONSTRAINT `points_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  CONSTRAINT `points_ibfk_2` FOREIGN KEY (`pointType_id`) REFERENCES `pointTypes` (`type_id`),
  CONSTRAINT `points_ibfk_3` FOREIGN KEY (`book_id`) REFERENCES `bookmarks` (`bookmark_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table pointTypes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pointTypes`;

CREATE TABLE `pointTypes` (
  `type_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `click` int(11) DEFAULT NULL,
  `up` int(11) DEFAULT NULL,
  `down` int(11) DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `pointTypes` WRITE;
/*!40000 ALTER TABLE `pointTypes` DISABLE KEYS */;

INSERT INTO `pointTypes` (`type_id`, `click`, `up`, `down`)
VALUES
	(1,1,5,3);

/*!40000 ALTER TABLE `pointTypes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table thumbs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `thumbs`;

CREATE TABLE `thumbs` (
  `thumb_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `bookmark_id` int(11) DEFAULT NULL,
  `thumbed_user_id` int(11) DEFAULT NULL,
  `thumbed` tinyint(1) DEFAULT NULL,
  `thumbed_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`thumb_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `thumbs` WRITE;
/*!40000 ALTER TABLE `thumbs` DISABLE KEYS */;

INSERT INTO `thumbs` (`thumb_id`, `bookmark_id`, `thumbed_user_id`, `thumbed`, `thumbed_amount`)
VALUES
	(1,3,20,1,NULL),
	(2,3,20,1,NULL),
	(3,5,20,1,NULL),
	(4,5,20,1,NULL),
	(5,5,20,1,NULL),
	(6,5,20,1,NULL),
	(7,5,20,1,NULL),
	(8,3,20,1,NULL),
	(9,3,20,1,NULL),
	(10,3,20,1,NULL),
	(11,5,20,1,NULL),
	(12,5,20,1,NULL),
	(13,3,20,1,NULL),
	(14,3,26,1,NULL);

/*!40000 ALTER TABLE `thumbs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `firstname` varchar(25) DEFAULT NULL,
  `lastname` varchar(25) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`, `role`)
VALUES
	(1,'me@email.com','1234','Bugs','Bunny',NULL),
	(2,'me@email.com','1234','Tweety','Bird',NULL),
	(3,'me@email.com','1234','Road','Runner',NULL),
	(4,'fasterThanRoadRunner@speed.com','1234','Wiley','Coyote',NULL),
	(5,NULL,'34b3601464be5bfe78adcd6fc6caae4f',NULL,NULL,NULL),
	(6,NULL,'34b3601464be5bfe78adcd6fc6caae4f',NULL,NULL,NULL),
	(7,'me@me.com','34b3601464be5bfe78adcd6fc6caae4f6b075400',NULL,NULL,'author'),
	(8,'me@me.com','34b3601464be5bfe78adcd6fc6caae4f6b075400',NULL,NULL,'author'),
	(9,'test@test.com','4a72bf452145fc53aafd98f3f39e1f74098632f0',NULL,NULL,'author'),
	(10,'adsfasdf@sdfasd.coasdfsd','8c0d5eff10109fcca18627046209dbeb9bfdb924','sdafa','dsfadsf','author'),
	(11,'adsfasdf@sdfasd.coasdfsd','8c0d5eff10109fcca18627046209dbeb9bfdb924','sdafa','dsfadsf','author'),
	(12,'adsfasdf@sdfasd.coasdfsd','8c0d5eff10109fcca18627046209dbeb9bfdb924','sdafa','dsfadsf','author'),
	(13,'adsfasdf@sdfasd.coasdfsd','8c0d5eff10109fcca18627046209dbeb9bfdb924','sdafa','dsfadsf','author'),
	(14,'adsfasdf@sdfasd.coasdfsd','8c0d5eff10109fcca18627046209dbeb9bfdb924','sdafa','dsfadsf','author'),
	(15,'adsfasdf@sdfasd.coasdfsd','8c0d5eff10109fcca18627046209dbeb9bfdb924','sdafa','dsfadsf','author'),
	(16,'adsfasdf','8c0d5eff10109fcca18627046209dbeb9bfdb924','sdafa','dsfadsf','author'),
	(17,'adsfasdf','8c0d5eff10109fcca18627046209dbeb9bfdb924','sdafa','dsfadsf','author'),
	(18,'tkerick@fake.com','3489e355a6e3625b0dcb674955a296ff1a251e51','Tatiana','Kerick','author'),
	(19,'nkerick23@yahoo.com','3489e355a6e3625b0dcb674955a296ff1a251e51','Natasha','Kerick','author'),
	(25,'me','38eeac4e3fa0dc7534a04fe80e182b324d6fc533','me','me',NULL),
	(26,'blah','d64c4a31036ccb7003da0e10f2c1c364bd982de4','blah','blah',NULL);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;




# Replace placeholder table for books with correct view syntax
# ------------------------------------------------------------

DROP TABLE `books`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `books`
AS SELECT
   `b`.`bookmark_id` AS `bookmark_id`,
   `b`.`url` AS `url`,
   `b`.`title` AS `title`,
   `b`.`category` AS `category`,
   `b`.`date_submitted` AS `date_submitted`,
   `users`.`user_id` AS `user_id`,
   `b`.`flag` AS `flag`,
   `b`.`rank` AS `rank`,
   `b`.`click` AS `click`
FROM (`bookmarks` `b` join `users` on((`users`.`user_id` = `b`.`user_id`)));

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
