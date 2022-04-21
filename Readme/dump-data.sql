-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour projetweb
DROP DATABASE IF EXISTS `projetweb`;
CREATE DATABASE IF NOT EXISTS `projetweb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `projetweb`;

-- Listage de la structure de la table projetweb. coachs
DROP TABLE IF EXISTS `coachs`;
CREATE TABLE IF NOT EXISTS `coachs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(150) DEFAULT NULL,
  `activity` varchar(150) DEFAULT NULL,
  `date` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Listage des données de la table projetweb.coachs : ~9 rows (environ)
/*!40000 ALTER TABLE `coachs` DISABLE KEYS */;
REPLACE INTO `coachs` (`id`, `fullname`, `activity`, `date`) VALUES
	(1, 'Stephane Marin', 'piscine', '16-04-2022'),
	(2, 'Julien Stephan', 'fitness', '16-04-2022'),
	(3, 'Melanie Carred', 'piscine', '16-04-2022'),
	(4, 'Rose Mariet', 'machines', '16-04-2022'),
	(5, 'John Advance', 'machines', '16-04-2022'),
	(6, 'Steve Abrel', 'machines', '16-04-2022'),
	(7, 'Celia Cazo', 'fitness', '16-04-2022'),
	(8, 'Juliette Stamina', 'machines', '16-04-2022'),
	(9, 'Priscillia Coven', 'fitness', '16-04-2022');
/*!40000 ALTER TABLE `coachs` ENABLE KEYS */;

-- Listage de la structure de la table projetweb. login
DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `user` varchar(150) DEFAULT NULL,
  `pass` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table projetweb.login : ~2 rows (environ)
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
REPLACE INTO `login` (`user`, `pass`) VALUES
	('adminK', 'adminK'),
	('adminR', 'adminR'),
	('adminT', 'adminT');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;

-- Listage de la structure de la table projetweb. members
DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` tinytext,
  `age` int(2) DEFAULT NULL,
  `activity` varchar(150) DEFAULT NULL,
  `coach` tinytext,
  `date` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Listage des données de la table projetweb.members : ~0 rows (environ)
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
/*!40000 ALTER TABLE `members` ENABLE KEYS */;

-- Listage de la structure de la table projetweb. recipes
DROP TABLE IF EXISTS `recipes`;
CREATE TABLE IF NOT EXISTS `recipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_api` int(6) DEFAULT '52880',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Listage des données de la table projetweb.recipes : ~2 rows (environ)
/*!40000 ALTER TABLE `recipes` DISABLE KEYS */;
REPLACE INTO `recipes` (`id`, `id_api`) VALUES
	(1, 52880),
	(2, 52850),
	(3, 53000);
/*!40000 ALTER TABLE `recipes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
