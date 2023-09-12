-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 09:40 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproject_aa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `document_list`
--

CREATE TABLE `document_list` (
  `document_id` int(10) NOT NULL,
  `document_url` text NOT NULL,
  `document_status` varchar(100) NOT NULL,
  `document_date` varbinary(100) NOT NULL,
  `document_title` varchar(20) NOT NULL,
  `document_other` text DEFAULT NULL,
  `document_By` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document_list`
--

INSERT INTO `document_list` (`document_id`, `document_url`, `document_status`, `document_date`, `document_title`, `document_other`, `document_By`) VALUES
(8, 'http://localhost/cms/php/school/admin/public/modal/document/alvin_project1 (2).sql', 'Active', 0x323032332d30322d3133, '2', 'NEEDS TO BE COMPLETED', 'A1');

-- --------------------------------------------------------

--
-- Table structure for table `document_typeslist`
--

CREATE TABLE `document_typeslist` (
  `doc_id` int(10) NOT NULL,
  `doc_Title` varchar(150) NOT NULL,
  `doc_status` varchar(10) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document_typeslist`
--

INSERT INTO `document_typeslist` (`doc_id`, `doc_Title`, `doc_status`) VALUES
(1, 'Event', 'Active'),
(2, 'Notice', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_list`
--

CREATE TABLE `faculty_list` (
  `id` int(10) NOT NULL,
  `faculty_name` varchar(100) NOT NULL,
  `faculty_email` varchar(100) NOT NULL,
  `faculty_phone` varchar(100) NOT NULL,
  `faculty_address` text NOT NULL,
  `faculty_dob` varchar(20) NOT NULL,
  `faculty_time` varchar(20) NOT NULL,
  `faculty_qualification` varchar(150) NOT NULL,
  `faculty_password` varchar(100) NOT NULL,
  `faculty_joindate` varchar(50) NOT NULL,
  `faculty_profile` text NOT NULL,
  `faculty_roll` text NOT NULL,
  `faculty_other` text NOT NULL,
  `faculty_father` varchar(200) NOT NULL,
  `faculty_mother` varchar(200) NOT NULL,
  `faculty_status` varchar(10) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_list`
--

INSERT INTO `faculty_list` (`id`, `faculty_name`, `faculty_email`, `faculty_phone`, `faculty_address`, `faculty_dob`, `faculty_time`, `faculty_qualification`, `faculty_password`, `faculty_joindate`, `faculty_profile`, `faculty_roll`, `faculty_other`, `faculty_father`, `faculty_mother`, `faculty_status`) VALUES
(1, 'Janvi', 'fadmin', '08237391421', '001 c wing Nalasopara', '2023-02-09', '', '', '123', '2023-02-03', '', '', '', '', '', 'Active'),
(2, 'john', 'fadmin2', '08237391421', '001 c wing Nalasopara', '2023-02-17', '', 'ggh', '1234', '2023-02-03', '', 'jjj', 'jjhjh', 'jjhj', 'jhhjh', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `notification_list`
--

CREATE TABLE `notification_list` (
  `id` int(10) NOT NULL,
  `notification_title` varchar(100) NOT NULL,
  `notification_text` varchar(100) NOT NULL,
  `notification_status` varchar(100) NOT NULL,
  `notification_types` text NOT NULL,
  `notification_img` varchar(20) NOT NULL,
  `notification_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_list`
--

CREATE TABLE `student_list` (
  `id` int(10) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `student_email` varchar(100) NOT NULL,
  `student_phone` varchar(100) NOT NULL,
  `student_address` text NOT NULL,
  `student_dob` varchar(20) NOT NULL,
  `student_class` varchar(20) NOT NULL,
  `student_division` varchar(20) NOT NULL,
  `student_course` varchar(150) NOT NULL,
  `student_password` varchar(100) NOT NULL,
  `student_joindate` varchar(50) NOT NULL,
  `student_profile` text NOT NULL,
  `student_hobbies` text NOT NULL,
  `student_other` text NOT NULL,
  `student_father` varchar(200) NOT NULL,
  `student_mother` varchar(200) NOT NULL,
  `student_status` varchar(10) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_list`
--

INSERT INTO `student_list` (`id`, `student_name`, `student_email`, `student_phone`, `student_address`, `student_dob`, `student_class`, `student_division`, `student_course`, `student_password`, `student_joindate`, `student_profile`, `student_hobbies`, `student_other`, `student_father`, `student_mother`, `student_status`) VALUES
(1, 'Vandna', 'sadmin', '08237391421', '001 c wing Nalasopara', '', '', 'dxcxcxd', 'fc', '123', '2023-02-03', 'https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-512.png', '', '', '', '', 'Active'),
(3, 'Vandna p', 'sadmin', '08237391421', '001 c wing Nalasopara', '', '', 'dxcxcxd', 'fc', '123', '2023-02-03', 'https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-512.png', '', '', '', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `student_uploadfilelist`
--

CREATE TABLE `student_uploadfilelist` (
  `stuFile_id` int(10) NOT NULL,
  `stuFile_url` text NOT NULL,
  `stuFile_status` varchar(100) NOT NULL,
  `stuFile_date` varbinary(100) NOT NULL,
  `stuFile_title` varchar(20) NOT NULL,
  `stuFile_other` text DEFAULT NULL,
  `stuFile_by` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_uploadfilelist`
--

INSERT INTO `student_uploadfilelist` (`stuFile_id`, `stuFile_url`, `stuFile_status`, `stuFile_date`, `stuFile_title`, `stuFile_other`, `stuFile_by`) VALUES
(12, 'http://localhost/cms/php/school/admin/public/modal/student/screencapture-itteamwork-exam-examdonestudent-php-2023-02-06-14_16_37.pdf', 'Active', 0x323032332d30322d3039, 'form', 'ss', 'A1');

-- --------------------------------------------------------

--
-- Table structure for table `user_list`
--

CREATE TABLE `user_list` (
  `id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_phone` varchar(100) NOT NULL,
  `user_address` text NOT NULL,
  `user_dob` varchar(20) NOT NULL,
  `user_time` varchar(20) NOT NULL,
  `user_qualification` varchar(150) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_joindate` varchar(50) NOT NULL,
  `user_profile` text NOT NULL,
  `user_roll` text NOT NULL,
  `user_other` text NOT NULL,
  `user_father` varchar(200) NOT NULL,
  `user_mother` varchar(200) NOT NULL,
  `user_status` varchar(10) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_list`
--

INSERT INTO `user_list` (`id`, `user_name`, `user_email`, `user_phone`, `user_address`, `user_dob`, `user_time`, `user_qualification`, `user_password`, `user_joindate`, `user_profile`, `user_roll`, `user_other`, `user_father`, `user_mother`, `user_status`) VALUES
(1, 'Rishikesh', 'rk@gmao.cpm', '08237391421', '001 c wing Nalasopara', '84154545', '', '120', '02', '', '', '22', '22', '2022', '22', 'Deactivate'),
(2, 'event', 'event', '', '', '2023-02-03', '', '', '123', '2023-02-03', '', '', '', '', '', 'Active'),
(3, 'exam', 'exam', '', '', '2023-02-03', '', '', '123', '2023-02-03', '', '', '', '', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `votingstu_list`
--

CREATE TABLE `votingstu_list` (
  `votingstu_id` int(10) NOT NULL,
  `votingstu_studentID` varchar(100) NOT NULL,
  `votingstu_LastDate` varchar(100) NOT NULL,
  `votingstu_status` varchar(100) NOT NULL,
  `votingstu_roll` text NOT NULL,
  `votingstu_date` varchar(20) NOT NULL,
  `votingstu_Count` varchar(20) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `votingstu_list`
--

INSERT INTO `votingstu_list` (`votingstu_id`, `votingstu_studentID`, `votingstu_LastDate`, `votingstu_status`, `votingstu_roll`, `votingstu_date`, `votingstu_Count`) VALUES
(5, '1', '2023-02-10', 'Active', 'pddd', '2023-02-02', '0'),
(7, '3', '2023-02-13', 'Active', 'SR-Roll', '2023-02-07', '0');

-- --------------------------------------------------------

--
-- Table structure for table `voting_poll`
--

CREATE TABLE `voting_poll` (
  `id` int(10) NOT NULL,
  `voting_date` varchar(100) NOT NULL,
  `voting_updatedate` varchar(100) NOT NULL,
  `voting_studentID` varchar(100) NOT NULL,
  `voting_status` varchar(100) NOT NULL,
  `voting_candidate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voting_poll`
--

INSERT INTO `voting_poll` (`id`, `voting_date`, `voting_updatedate`, `voting_studentID`, `voting_status`, `voting_candidate`) VALUES
(1, '2023-02-07/12:50:23 AM', 'NULL', '01', '1', '1'),
(2, '2023-02-07/12:50:23 AM', 'NULL', '01', '1', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_list`
--
ALTER TABLE `document_list`
  ADD PRIMARY KEY (`document_id`);

--
-- Indexes for table `document_typeslist`
--
ALTER TABLE `document_typeslist`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `faculty_list`
--
ALTER TABLE `faculty_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_list`
--
ALTER TABLE `notification_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_list`
--
ALTER TABLE `student_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_uploadfilelist`
--
ALTER TABLE `student_uploadfilelist`
  ADD PRIMARY KEY (`stuFile_id`);

--
-- Indexes for table `user_list`
--
ALTER TABLE `user_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votingstu_list`
--
ALTER TABLE `votingstu_list`
  ADD PRIMARY KEY (`votingstu_id`),
  ADD UNIQUE KEY `votingstu_studentID` (`votingstu_studentID`);

--
-- Indexes for table `voting_poll`
--
ALTER TABLE `voting_poll`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `document_list`
--
ALTER TABLE `document_list`
  MODIFY `document_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `document_typeslist`
--
ALTER TABLE `document_typeslist`
  MODIFY `doc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faculty_list`
--
ALTER TABLE `faculty_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notification_list`
--
ALTER TABLE `notification_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_list`
--
ALTER TABLE `student_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_uploadfilelist`
--
ALTER TABLE `student_uploadfilelist`
  MODIFY `stuFile_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_list`
--
ALTER TABLE `user_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `votingstu_list`
--
ALTER TABLE `votingstu_list`
  MODIFY `votingstu_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `voting_poll`
--
ALTER TABLE `voting_poll`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
