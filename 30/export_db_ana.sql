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


-- Dumping database structure for employees_db
CREATE DATABASE IF NOT EXISTS `employees_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `employees_db`;

-- Dumping structure for table employees_db.departments
CREATE TABLE IF NOT EXISTS `departments` (
  `employee_id` int(11) DEFAULT NULL,
  `department_name` varchar(50) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  KEY `FK_departments_employees` (`employee_id`),
  CONSTRAINT `FK_departments_employees` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table employees_db.departments: ~5 rows (approximately)
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` (`employee_id`, `department_name`, `from_date`, `to_date`) VALUES
	(1, 'CRM AND CORE PRODUCTS', '2019-07-16', NULL),
	(2, 'Call Center', '2018-05-28', NULL),
	(3, 'Billing and Charging', '2020-05-20', NULL),
	(4, 'BSS Operations', '2020-05-28', NULL),
	(1, 'BSS Operations', '2018-01-01', '2019-07-15');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;

-- Dumping structure for table employees_db.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(14) NOT NULL,
  `lastname` varchar(16) NOT NULL,
  `birthday` date NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `hire_date` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table employees_db.employees: ~4 rows (approximately)
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` (`ID`, `firstname`, `lastname`, `birthday`, `gender`, `hire_date`) VALUES
	(1, 'Ana', 'Mitrevska', '1993-09-14', 0, '2020-05-28'),
	(2, 'Dijana', 'Mitrevska', '1998-03-08', 0, '2020-05-21'),
	(3, 'Natalija', 'Trajkovska', '1993-08-21', 0, '2019-05-28'),
	(4, 'Sasho', 'Mladenovski', '1989-05-28', 1, '1987-05-06');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;

-- Dumping structure for table employees_db.salaries
CREATE TABLE IF NOT EXISTS `salaries` (
  `employee_id` int(11) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  KEY `FK__employees` (`employee_id`),
  CONSTRAINT `FK__employees` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table employees_db.salaries: ~4 rows (approximately)
/*!40000 ALTER TABLE `salaries` DISABLE KEYS */;
INSERT INTO `salaries` (`employee_id`, `salary`, `from_date`, `to_date`) VALUES
	(1, 50000, '2020-05-28', NULL),
	(2, 30000, '2020-05-28', NULL),
	(3, 50000, '2020-04-28', NULL),
	(4, 50000, '2020-02-28', NULL);
/*!40000 ALTER TABLE `salaries` ENABLE KEYS */;

-- Dumping structure for table employees_db.titles
CREATE TABLE IF NOT EXISTS `titles` (
  `employee_id` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  KEY `FK_titles_employees` (`employee_id`),
  CONSTRAINT `FK_titles_employees` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table employees_db.titles: ~4 rows (approximately)
/*!40000 ALTER TABLE `titles` DISABLE KEYS */;
INSERT INTO `titles` (`employee_id`, `title`, `from_date`, `to_date`) VALUES
	(1, 'CRM and Order managment Specialist', '2020-05-28', NULL),
	(2, 'Call Center Specialist', '2020-04-28', NULL),
	(3, 'Billing and charging specialist', '2019-11-28', NULL),
	(4, 'BSS Operation SPecialist', '2020-05-28', NULL);
/*!40000 ALTER TABLE `titles` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
