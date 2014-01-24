# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.29)
# Database: markularity
# Generation Time: 2014-01-24 16:34:12 +0000
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
  `category` varchar(30) DEFAULT NULL,
  `date_submitted` date DEFAULT NULL,
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
	(1,'smalldog.com','Small Dog Electronics','Technology','2014-01-22',4,0,NULL,NULL),
	(2,'cakephp.org','CakePHP - build web apps fast','Web','2014-01-22',4,0,NULL,NULL);

/*!40000 ALTER TABLE `bookmarks` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table books
# ------------------------------------------------------------

DROP VIEW IF EXISTS `books`;

CREATE TABLE `books` (
   `bookmark_id` INT(11) UNSIGNED NOT NULL DEFAULT '0',
   `url` VARCHAR(100) NULL DEFAULT NULL,
   `title` VARCHAR(30) NULL DEFAULT NULL,
   `category` VARCHAR(30) NULL DEFAULT NULL,
   `date_submitted` DATE NULL DEFAULT NULL,
   `user_id` INT(11) UNSIGNED NOT NULL DEFAULT '0',
   `flag` TINYINT(1) NOT NULL DEFAULT '0',
   `rank` INT(100) NULL DEFAULT NULL,
   `click` INT(100) NULL DEFAULT NULL
) ENGINE=MyISAM;



# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(125) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id`, `name`)
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


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `firstname` varchar(25) DEFAULT NULL,
  `lastname` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`user_id`, `email`, `password`, `firstname`, `lastname`)
VALUES
	(1,'me@email.com','1234','Bugs','Bunny'),
	(2,'me@email.com','1234','Tweety','Bird'),
	(3,'me@email.com','1234','Road','Runner'),
	(4,'fasterThanRoadRunner@speed.com','1234','Wiley','Coyote');

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
