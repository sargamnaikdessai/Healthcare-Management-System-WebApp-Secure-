-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2020 at 02:39 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spec_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `doc_table`
--

CREATE TABLE `doc_table` (
  `doc_name` varchar(40) NOT NULL,
  `spec_id` varchar(20) DEFAULT NULL,
  `from_time` varchar(10) DEFAULT NULL,
  `to_time` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_table`
--

INSERT INTO `doc_table` (`doc_name`, `spec_id`, `from_time`, `to_time`) VALUES
('Dr.ped_1', NULL, NULL, NULL),
('Dr.ped_1', 'ped', NULL, NULL),
('Dr.ped_2', 'ped', NULL, NULL),
('Dr.ped_3', 'ped', NULL, NULL),
('Dr.gyn_1', 'gyn', NULL, NULL),
('Dr.gyn_2', 'gyn', NULL, NULL),
('Dr.gyn_3', 'gyn', NULL, NULL),
('Dr.gyn_4', 'gyn', NULL, NULL),
('Dr.onc_1', 'onc', NULL, NULL),
('Dr.onc_2', 'onc', NULL, NULL),
('Dr.opt_1', 'opt', NULL, NULL),
('Dr.opt_2', 'opt', NULL, NULL),
('Dr.gast_1', 'gast', NULL, NULL),
('Dr.onc_3', NULL, NULL, NULL),
('', NULL, '09:15', '10:15'),
('', NULL, '10:00', '11:00'),
('', NULL, '10:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hosp_list`
--

CREATE TABLE `hosp_list` (
  `id` int(50) NOT NULL,
  `hname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hosp_list`
--

INSERT INTO `hosp_list` (`id`, `hname`) VALUES
(1, 'H1'),
(2, 'H2'),
(3, 'H3');

-- --------------------------------------------------------

--
-- Table structure for table `spec_table`
--

CREATE TABLE `spec_table` (
  `specialization` varchar(30) DEFAULT NULL,
  `spec_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spec_table`
--

INSERT INTO `spec_table` (`specialization`, `spec_id`) VALUES
('Anesthesiologist', 'ane'),
('Cardiologist', 'car'),
('Dermatologist', 'der'),
('Gastroenterologist', 'gast'),
('Gynecologist', 'gyn'),
('Nephrologist', 'nep'),
('Neurologist', 'neu'),
('Oncologist', 'onc'),
('Ophthalmologist', 'opt'),
('Otolaryngologist', 'oto'),
('Pediatrician', 'ped'),
('Psychiatrist', 'psy'),
('Pulmonologist', 'pul'),
('Radiologist', 'rad');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(100) NOT NULL,
  `usrname` varchar(100) NOT NULL,
  `paswd` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `hname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `usrname`, `paswd`, `date`, `hname`) VALUES
(1, 'abc', '123', '0000-00-00 00:00:00', 'H1'),
(2, 'def', '456', '', 'H1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doc_table`
--
ALTER TABLE `doc_table`
  ADD KEY `spec_id` (`spec_id`);

--
-- Indexes for table `hosp_list`
--
ALTER TABLE `hosp_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `spec_table`
--
ALTER TABLE `spec_table`
  ADD PRIMARY KEY (`spec_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hosp_list`
--
ALTER TABLE `hosp_list`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `doc_table`
--
ALTER TABLE `doc_table`
  ADD CONSTRAINT `doc_table_ibfk_1` FOREIGN KEY (`spec_id`) REFERENCES `spec_table` (`spec_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
