-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.29-0ubuntu0.18.04.1 - (Ubuntu)
-- Server OS:                    Linux
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for crud_app
CREATE DATABASE IF NOT EXISTS `crud_app` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `crud_app`;

-- Dumping structure for table crud_app.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- Dumping data for table crud_app.users: ~25 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `firstname`, `lastname`, `created_at`) VALUES
	(1, 'Ana', 'Mitrevska', '2020-06-01'),
	(2, 'Natalija', 'Trajkovska', '2020-06-01'),
	(3, 'Dijana', 'Mitrevska', '2020-06-01'),
	(4, 'biljana', 'Mitrevska', '2020-06-01'),
	(5, 'Ana', 'Mitrevska', '2020-06-01'),
	(6, 'Ana', 'Mitrevska', '2020-06-01'),
	(7, 'Ana', 'Mitrevska', '2020-06-01'),
	(8, 'ks', 'ks', NULL),
	(9, 'Mark', 'Ottonan', NULL),
	(10, 'Mark', 'Otto', NULL),
	(14, 'Mark', 'Otto', NULL),
	(15, 'Mark', 'Otto', NULL),
	(16, 'Mark1', 'Otto1', NULL),
	(17, 'Mark', 'Otto', NULL),
	(19, 'Mark', 'Otto', '2020-06-01'),
	(22, 'TEST', 'INSERT', '2020-06-01'),
	(23, 'TEST', 'INSERT', '2020-06-01'),
	(24, 'Mark', 'Ottonan', '2020-06-01'),
	(25, 'Mark', 'Ottonan', '2020-06-01'),
	(26, 'Mark', 'Ottonan', '2020-06-01'),
	(27, 'TEST', 'HEADER', '2020-06-01'),
	(28, 'ANA', 'TEST2', '2020-06-07'),
	(29, 'Ana', 'Mitrevska', '2020-06-07'),
	(30, 'ks', 'ks', NULL),
	(31, 'Ana', 'Mitrevska', '2020-06-07');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
