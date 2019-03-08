-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 08, 2019 at 10:49 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `virtualclass`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', '123465', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `regno` int(15) NOT NULL,
  `class` varchar(15) NOT NULL,
  `section` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirmpassword` varchar(50) NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `name`, `regno`, `class`, `section`, `email`, `mobile`, `password`, `confirmpassword`, `status`) VALUES
(1, 'Manikandan', 9876, 'BE', 'civil', 'mani@gmail.com', '564554653656', '1234', '1234', 1),
(2, 'Rajkumar', 9874, 'BE', 'Civil', 'raj@gmail.com', '9087655432', '4331', '4331', 1),
(3, 'Kavitha', 9875, 'BE', 'CSE', 'kavi@gmail.com', '6789564098', '3456', '3456', 1),
(4, 'kaml', 98765, 'BE', 'CSE', 'maniya@gmail.com', '8075502439', '4567', '4567', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_panel`
--

CREATE TABLE `student_panel` (
  `id` int(11) NOT NULL,
  `teacherid` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `notes` varchar(50) NOT NULL,
  `lession` varchar(50) NOT NULL,
  `video` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_panel`
--

INSERT INTO `student_panel` (`id`, `teacherid`, `subject`, `notes`, `lession`, `video`, `class`, `status`) VALUES
(1, 3, 'maths', 'file/sss.jpg', '1st chppter', 'video/SampleVideo.mp4', 'cse', 1);

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
  `password` varchar(30) NOT NULL,
  `confirmpassword` varchar(30) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_details`
--

INSERT INTO `teacher_details` (`id`, `name`, `staff_id`, `class`, `subject`, `phone`, `mail`, `password`, `confirmpassword`, `status`) VALUES
(1, 'raj', 8546, 'hindi', '1 section', '8075502439', 'raj@gmail.com', '1234', '1234', 1),
(2, 'manikandan', 345, 'Vlll', 'maths', '6575467585', 'maniya@gmail.com', '1234', '1234', 1),
(3, 'selva', 345, 'Vlll', 'maths', '6575467585', 'selva@gmail.com', '1234', '1234', 1),
(4, 'baskar', 345, 'Vlll', 'maths', '6575467585', 'baskar@gmail.com', '1234', '1234', 1),
(5, 'kavitha', 345, 'Vlll', 'maths', '6575467585', 'kavitha@gmail.com', '1234', '1234', 1);

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_panel`
--
ALTER TABLE `student_panel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher_details`
--
ALTER TABLE `teacher_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
