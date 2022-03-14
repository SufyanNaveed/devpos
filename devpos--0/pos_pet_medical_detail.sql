-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 14, 2021 at 08:42 AM
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
-- Table structure for table `pos_pet_medical_detail`
--

CREATE TABLE `pos_pet_medical_detail` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `no` text DEFAULT NULL,
  `gastrointestinal_prob` varchar(255) DEFAULT NULL,
  `stool_nature` varchar(255) DEFAULT NULL,
  `stool_color` varchar(255) DEFAULT NULL,
  `urine_color` varchar(255) DEFAULT NULL,
  `eye_problems` varchar(255) DEFAULT NULL,
  `current_symptoms` varchar(255) DEFAULT NULL,
  `pulmonary_problems` varchar(255) DEFAULT NULL,
  `mouth_teeth_problems` varchar(255) DEFAULT NULL,
  `med_bck_q1` varchar(255) DEFAULT NULL,
  `med_bck_q2` varchar(255) DEFAULT NULL,
  `med_bck_q2_specify` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `med_and_vac_q1` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `med_and_vac_q2` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `general_q1` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `general_q2` varchar(255) DEFAULT NULL,
  `general_q3` varchar(255) DEFAULT NULL,
  `general_q3_specify` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `general_q4` varchar(255) DEFAULT NULL,
  `general_q5` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `general_q6` varchar(255) DEFAULT NULL,
  `general_q7` varchar(255) DEFAULT NULL,
  `general_q8` varchar(255) DEFAULT NULL,
  `general_q9` varchar(255) DEFAULT NULL,
  `general_q9_specify` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pos_pet_medical_detail`
--

INSERT INTO `pos_pet_medical_detail` (`id`, `booking_id`, `no`, `gastrointestinal_prob`, `stool_nature`, `stool_color`, `urine_color`, `eye_problems`, `current_symptoms`, `pulmonary_problems`, `mouth_teeth_problems`, `med_bck_q1`, `med_bck_q2`, `med_bck_q2_specify`, `med_and_vac_q1`, `med_and_vac_q2`, `general_q1`, `general_q2`, `general_q3`, `general_q3_specify`, `general_q4`, `general_q5`, `general_q6`, `general_q7`, `general_q8`, `general_q9`, `general_q9_specify`, `created_at`) VALUES
(1, 12, '5463126', 'vomiting@@constipation', NULL, 'yellow@@green', 'light yellow@@dark yellow', 'redness', 'fever@@thirst', 'coughing', 'bad smell@@ulcers', 'yes', 'no', NULL, 'هذا اختبار', 'TEST', 'TEST', 'indoor', 'yes', 'هذا اختبار', 'dry food@@wet food', 'هذا اختبار', 'continuous', 'yes', 'yes', 'no', NULL, '2021-06-13 07:39:24'),
(2, 13, '5463127', 'vomiting@@constipation', 'pebbles like@@bloody@@mocous', 'green@@red', 'dark yellow', 'redness@@itching', 'fever@@laziness@@dermatology problems', 'difficulties_in_breathing@@loss_of_appetie', '', 'yes', 'no', 'TEST TREATED', 'TEST', 'هذا اختبار', 'TEST', 'outdoor', 'yes', 'TEST addmited broading', 'dry food@@wet food@@both@@home cooked@@leftovers', 'TEST 2', '100g', 'yes', 'no', 'yes', 'Other Than Spaying', '2021-06-13 07:39:03'),
(3, 14, '2758064', 'vomiting@@constipation', 'semi solid@@loose', 'yellow', 'red', '', 'fever', 'difficulties_in_breathing', 'ulcers', 'yes', 'no', '', 'هذا اختبار', 'TEST', 'TEST 1', 'indoor', 'yes', 'TEST addmited broading', 'dry food@@wet food', 'TEST 2', '100g', 'yes', 'no', 'yes', 'Other Than Spaying', '2021-06-13 13:19:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pos_pet_medical_detail`
--
ALTER TABLE `pos_pet_medical_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pos_pet_medical_detail`
--
ALTER TABLE `pos_pet_medical_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
