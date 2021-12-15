-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 08:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsis`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adminlogin`
--

CREATE TABLE `tbl_adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_adminlogin`
--

INSERT INTO `tbl_adminlogin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_professor`
--

CREATE TABLE `tbl_professor` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `dateInserted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_professor`
--

INSERT INTO `tbl_professor` (`id`, `firstname`, `lastname`, `department`, `username`, `password`, `status`, `dateInserted`) VALUES
(2, 'JERWIN', 'CABRAL', 'CSD', ' jerwrin', ' aF1yqqnCaR4=', 'Active', '2021-12-11 19:41:17'),
(5, 'UNO', 'DOS', 'CSD', ' uno', 'pass', 'Active', '2021-12-12 07:07:27'),
(6, 'JEFFREY', 'COCO', 'CSD', ' coco', 'pass', 'Active', '2021-12-12 07:52:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schedule`
--

CREATE TABLE `tbl_schedule` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `instructor` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `startT` varchar(255) NOT NULL,
  `endT` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year` int(255) NOT NULL,
  `section` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_schedule`
--

INSERT INTO `tbl_schedule` (`id`, `code`, `description`, `instructor`, `day`, `startT`, `endT`, `course`, `year`, `section`) VALUES
(1, 'CCS 116', 'ADVANCED WEB SYSTEMS', 'JEFFREY COCO', 'SUNDAY', '11:00 AM', '01:00 PM', 'BSCS', 3, 'C'),
(2, 'GEC 008', 'SOFTWARE ENGINEERING 1', 'JERWIN CABRAL', 'TUESDAY', '08:00 AM', '10:00 AM', 'BSCS', 3, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `midname` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year` int(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `studno` int(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `stud_Stat` varchar(255) NOT NULL,
  `dateInserted` datetime NOT NULL DEFAULT current_timestamp(),
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `firstname`, `lastname`, `midname`, `course`, `year`, `section`, `studno`, `password`, `status`, `stud_Stat`, `dateInserted`, `last_update`) VALUES
(1, 'SARAH GRACE ARLYN', 'OBEN', '', 'BSCS', 3, 'C', 20191940, 'JFBCi4i/Wyk=', 'Active', 'Regular', '2021-12-11 19:25:28', '2021-12-11 18:30:48'),
(2, 'JUAN PAOLO', 'ORTEGA', '', 'BSCS', 3, 'C', 20192166, 'O1tFlJvPGwM=', 'Active', 'Regular', '2021-12-11 19:30:09', '2021-12-12 01:31:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `id` int(11) NOT NULL,
  `subcode` varchar(255) NOT NULL,
  `subunits` int(255) NOT NULL,
  `subdesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`id`, `subcode`, `subunits`, `subdesc`) VALUES
(1, 'CCS 110', 3, 'NETWORKS AND COMMUNICATION'),
(2, 'GEC 007', 3, 'SCIENCE, TECHNOLOGY AND SECURITY'),
(3, 'CCS 116', 5, 'ADVANCED WEB SYSTEMS'),
(4, 'GEC 008', 3, 'SOFTWARE ENGINEERING 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_adminlogin`
--
ALTER TABLE `tbl_adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_professor`
--
ALTER TABLE `tbl_professor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_adminlogin`
--
ALTER TABLE `tbl_adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_professor`
--
ALTER TABLE `tbl_professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
