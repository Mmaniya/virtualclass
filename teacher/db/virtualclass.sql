-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 21, 2019 at 06:31 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hindi_mgnt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `news` varchar(10000) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `news`, `status`) VALUES
(1, 'admin', '123465', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `regno` int(15) NOT NULL,
  `class` varchar(15) NOT NULL,
  `section` varchar(15) NOT NULL,
  `parent_email` varchar(30) NOT NULL,
  `parent_contact_no` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirmpassword` varchar(50) NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`student_id`, `student_name`, `regno`, `class`, `section`, `parent_email`, `parent_contact_no`, `password`, `confirmpassword`, `status`) VALUES
(1, 'Manikandan', 9876, 'BE', 'civil', 'mani@gmail.com', '564554653656', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(2, 'Rajkumar', 9874, 'BE', 'Civil', 'raj@gmail.com', '9087655432', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 1),
(3, 'Kavitha', 9875, 'BE', 'CSE', 'kavi@gmail.com', '6789564098', '3d9188577cc9bfe9291ac66b5cc872b7', '3d9188577cc9bfe9291ac66b5cc872b7', 0),
(4, 'kaml', 98765, 'BE', 'CSE', 'mani@gmail.com', '8075502439', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_panel`
--

CREATE TABLE `student_panel` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `exam` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `staff` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_panel`
--

INSERT INTO `student_panel` (`id`, `name`, `subject`, `duration`, `exam`, `date`, `staff`, `class`, `status`) VALUES
(1, '1', 'hindi', '', 'sem4', '', '1', 'hindi', 1),
(2, '2', 'hindi', '6  months', 'sem4', '2019-02-07', '1', 'hindi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_details`
--

CREATE TABLE `teacher_details` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `class` varchar(20) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_details`
--

INSERT INTO `teacher_details` (`id`, `name`, `staff_id`, `class`, `subject`, `phone`, `mail`, `status`) VALUES
(1, 'raj', 8546, 'hindi', '1 section', '8075502439', 'mmaniya01@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_panel`
--
ALTER TABLE `student_panel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_details`
--
ALTER TABLE `teacher_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_panel`
--
ALTER TABLE `student_panel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teacher_details`
--
ALTER TABLE `teacher_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
