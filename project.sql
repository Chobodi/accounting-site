-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.6.12-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for accounting
CREATE DATABASE IF NOT EXISTS `accounting` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `accounting`;

-- Dumping structure for table accounting.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table accounting.admin: ~1 rows (approximately)
DELETE FROM `admin`;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `username`, `password`) VALUES
	(1, 'charuka', 'admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table accounting.news
CREATE TABLE IF NOT EXISTS `news` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table accounting.news: ~6 rows (approximately)
DELETE FROM `news`;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`image_id`, `url`, `title`) VALUES
	(1, '2-portrait1.jpg', 'News'),
	(2, '5-nature.jpg', 'News'),
	(3, '8-nature1.jpg', 'News'),
	(4, '6-portrait5.jpg', 'News'),
	(5, '8-portrait2.jpg', 'News'),
	(6, '7-portrait3.jpg', 'News'),
	(7, '9-portrait4.jpg', 'News');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- Dumping structure for table accounting.papers
CREATE TABLE IF NOT EXISTS `papers` (
  `paper_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`paper_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table accounting.papers: ~2 rows (approximately)
DELETE FROM `papers`;
/*!40000 ALTER TABLE `papers` DISABLE KEYS */;
INSERT INTO `papers` (`paper_id`, `name`, `url`, `description`) VALUES
	(1, '2014 A/l accounting', 'paper1.pdf', 'With Complete Answers'),
	(2, '2013 A/l Accounting', 'paper2.pdf', 'Explore more');
/*!40000 ALTER TABLE `papers` ENABLE KEYS */;

-- Dumping structure for table accounting.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `school` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `year` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table accounting.users: ~3 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `school`, `name`, `year`, `district`) VALUES
	(1, 'senali', 'senali', 'Viharamaha Devi Balika Vidyalaya', 'Senali Shalika', '2016', 'Gampaha'),
	(2, 'janani', '123', 'Visakha Vidyalaya', 'Janani Subodhika', '2016', 'Colombo'),
	(3, 'dulsha', 'd@145', 'Sangamiththa balika Vidyalaya', 'Dulsha Premarathne', '2017', 'Galle');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
