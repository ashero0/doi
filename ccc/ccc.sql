-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2019 at 06:07 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccc`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) UNSIGNED NOT NULL,
  `counselor_id` int(11) UNSIGNED NOT NULL,
  `student_id` varchar(9) NOT NULL,
  `date_time` datetime NOT NULL,
  `notes` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `counselor_id`, `student_id`, `date_time`, `notes`) VALUES
(1, 5, '905999005', '2019-12-17 12:00:00', 'Anxious about finals.');

-- --------------------------------------------------------

--
-- Table structure for table `closed_dates`
--

CREATE TABLE `closed_dates` (
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `closed_dates`
--

INSERT INTO `closed_dates` (`date`) VALUES
('2019-12-24'),
('2019-12-25'),
('2020-01-01'),
('2020-01-17'),
('2020-01-20'),
('2020-02-17'),
('2020-05-25'),
('2020-07-03'),
('2020-09-07'),
('2020-10-12'),
('2020-11-11'),
('2020-11-25'),
('2020-11-26'),
('2020-11-27'),
('2020-12-24'),
('2020-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `counselors`
--

CREATE TABLE `counselors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT 'Unknown Counselor',
  `available` varchar(9) NOT NULL DEFAULT '000000000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counselors`
--

INSERT INTO `counselors` (`id`, `name`, `available`) VALUES
(1, 'Rita Klein', '001111000'),
(2, 'Laura Miller', '011111111'),
(3, 'Robert Ritchey', '000001111'),
(4, 'Claire Shen', '001010101'),
(5, 'Miriam Bhutta', '111111111'),
(6, 'Jason E. Brinckman', '111101111'),
(7, 'Jenny Dye', '111001111'),
(8, 'Anna Epperson', '111001111'),
(9, 'Mary Gaskill', '111001111'),
(10, 'Jordan Harrison', '011001100');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_ibfk_1` (`counselor_id`);

--
-- Indexes for table `closed_dates`
--
ALTER TABLE `closed_dates`
  ADD UNIQUE KEY `date` (`date`);

--
-- Indexes for table `counselors`
--
ALTER TABLE `counselors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `counselors`
--
ALTER TABLE `counselors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`counselor_id`) REFERENCES `counselors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
