-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 15, 2021 at 08:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devpos`
--

-- --------------------------------------------------------

--
-- Table structure for table `geopos_premissions`
--

CREATE TABLE `geopos_premissions` (
  `id` int(11) NOT NULL,
  `module` enum('Sales','Stock','Crm','Project','Accounts','Miscellaneous','Employees','Assign Project','Customer Profile','Reports','Delete') NOT NULL,
  `r_1` int(11) NOT NULL,
  `r_2` int(11) NOT NULL,
  `r_3` int(11) NOT NULL,
  `r_4` int(11) NOT NULL,
  `r_5` int(11) NOT NULL,
  `r_6` int(11) NOT NULL,
  `r_7` int(11) NOT NULL,
  `r_8` int(11) NOT NULL,
  `r_9` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `geopos_premissions`
--

INSERT INTO `geopos_premissions` (`id`, `module`, `r_1`, `r_2`, `r_3`, `r_4`, `r_5`, `r_6`, `r_7`, `r_8`, `r_9`) VALUES
(1, 'Sales', 0, 1, 1, 1, 1, 1, 0, 0, 1),
(2, 'Stock', 1, 0, 1, 1, 1, 0, 0, 0, 0),
(3, 'Crm', 0, 0, 1, 1, 1, 0, 0, 0, 0),
(4, 'Project', 0, 0, 0, 1, 1, 0, 0, 0, 0),
(5, 'Accounts', 0, 0, 0, 1, 1, 0, 0, 0, 0),
(6, 'Miscellaneous', 0, 0, 0, 1, 1, 0, 0, 0, 0),
(7, 'Assign Project', 0, 1, 0, 0, 1, 0, 0, 0, 0),
(8, 'Customer Profile', 0, 0, 0, 0, 1, 0, 0, 0, 0),
(9, 'Employees', 0, 0, 0, 0, 1, 0, 0, 0, 0),
(10, 'Reports', 0, 0, 0, 1, 1, 0, 0, 0, 0),
(11, 'Delete', 1, 1, 1, 1, 1, 1, 0, 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
