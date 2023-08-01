-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2021 at 07:26 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+05:30";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnus_bio`
--

CREATE TABLE `alumnus_bio` (
  `id` int(10) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `rollno` varchar(255) NOT NULL,
  `graduateyear` year(4) NOT NULL,
  `profilepic` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobilenumber` bigint(20) NOT NULL,
  `department` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `higheredu` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `h_univ` varchar(255) DEFAULT NULL,
  `h_location` varchar(255) DEFAULT NULL,
  `h_degree` varchar(255) DEFAULT NULL,
  `h_year` year(4) DEFAULT NULL,
  `h_proof` text DEFAULT NULL,
  `w_employer` varchar(255) DEFAULT NULL,
  `w_location` varchar(255) DEFAULT NULL,
  `w_designation` varchar(255) DEFAULT NULL,
  `w_start` date DEFAULT NULL,
  `w_end` date DEFAULT NULL,
  `s_univ` varchar(255) DEFAULT NULL,
  `s_location` varchar(255) DEFAULT NULL,
  `s_course` varchar(255) DEFAULT NULL,
  `s_start` date DEFAULT NULL,
  `s_end` date DEFAULT NULL,
  `s_proof` text DEFAULT NULL,
  `status_other` varchar(255) DEFAULT NULL,
  `ep_company` varchar(255) DEFAULT NULL,
  `ep_location` varchar(255) DEFAULT NULL,
  `ep_designation` varchar(255) DEFAULT NULL,
  `ep_start` date DEFAULT NULL,
  `ep_cin` varchar(255) DEFAULT NULL,
  `ep_proof` text DEFAULT NULL,
  `cp_option` varchar(255) DEFAULT NULL,
  `cp_date` date DEFAULT NULL,
  `cp_proof` text DEFAULT NULL,
  `other_other` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(30) NOT NULL,
  `course` text NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course`, `about`) VALUES
(1, 'CSE', 'Computer Science and Engineering'),
(2, 'IT', 'Information Technology'),
(3, 'ECE', 'Electronics and Communications Engineering'),
(4, 'EIE', 'Electronics and Instrumentation Engineering');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnus_bio`
--
ALTER TABLE `alumnus_bio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnus_bio`
--
ALTER TABLE `alumnus_bio`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
