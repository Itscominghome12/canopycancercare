-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 26, 2022 at 01:25 am
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Canopydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`, `admin`) VALUES
(1, 'test', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'test@test.com', 1),
(2, 'admin', '$2y$10$kd1KjRyJoel8TpeYHvJIhOyd8IOehr4G3XMVLOf3hK4T43e53vEzG', 'Admin@mail.com', 0),
(3, 'test2', '$2y$10$sLCMThzOwiZHVSVOqTlZAOha5EGMivu9Diq3L1BEMg4QoFPrKKfbe', 'test2@mail.com', 0),
(4, 'test3', '$2y$10$/7K0pv0Ha79f5xUoZ3U.KO98uOJzkMFDEWl0MtaZNaFVGS/l8EMpm', 'test3@mail.com', 0),
(5, 'connorpassingham', '$2y$10$sA/6k3j7FRHyTaUDHJnKBuaZmaHySVVq/8rvpSpE8sH7ghcD9yJ7m', 'connorpassingham@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `canopy information`
--

CREATE TABLE `canopy information` (
  `canopy_id` int(5) NOT NULL,
  `primary_doctor` varchar(50) CHARACTER SET utf8 NOT NULL,
  `primary_nurse` varchar(50) NOT NULL,
  `secondary_doctor` varchar(50) NOT NULL,
  `secondary_nurse` varchar(50) NOT NULL,
  `cancer_type` varchar(50) NOT NULL,
  `treatment_type` varchar(30) NOT NULL,
  `start_date` date NOT NULL,
  `warnings` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `canopy information`
--

INSERT INTO `canopy information` (`canopy_id`, `primary_doctor`, `primary_nurse`, `secondary_doctor`, `secondary_nurse`, `cancer_type`, `treatment_type`, `start_date`, `warnings`) VALUES
(1, 'Jonathan Voss', 'Sally Drumond', 'Nickolas Angle', 'NA', 'Melanoma', 'Chemotherapy', '2004-05-13', ''),
(2, 'Max Boundy', 'Venessa Wardle', 'NA', 'Josh Burgess', 'Breast Cancer', 'Radiotherpy', '2012-05-09', 'Reactions have been seen after treatment, mix with painkillers to numb side effects'),
(3, 'Jonathan Voss', 'Venessa Wardle', 'Scott Van Bakel', 'Josh Burgess', 'Lung Cancer ST3', 'Chemotherapy', '2018-04-13', ''),
(4, 'Jonathan Voss', 'NA', 'Nickolas Angle', 'NA', 'Melanoma', 'Chemotherapy', '2020-12-01', ''),
(5, 'Jonathan Voss', 'Lile Sutton', 'Nickolas Angle', 'Josh Burgess', 'Lung Cancer ST2', 'Chemotherapy', '2013-09-09', '');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `evt_id` bigint(20) NOT NULL,
  `evt_start` datetime NOT NULL,
  `evt_end` datetime NOT NULL,
  `evt_text` text NOT NULL,
  `evt_color` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `name` int(11) NOT NULL,
  `surname` int(11) NOT NULL,
  `branch` int(11) NOT NULL,
  `messgae` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title1` varchar(100) DEFAULT NULL,
  `para1` text,
  `img1` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title1`, `para1`, `img1`) VALUES
(1, 'Dear Staff', 'Feel free to download the app version of this website. There are links to the website from selected social media pages. For any help or contact information please email Canopy@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient details`
--

CREATE TABLE `patient details` (
  `patient_id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `ethnicity` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phonenum` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient details`
--

INSERT INTO `patient details` (`patient_id`, `name`, `surname`, `ethnicity`, `dob`, `address`, `email`, `phonenum`) VALUES
(1, 'Micah', 'Gibson', 'NZ European', '1965-05-16', '12 Panenka rd', 'M.gibson@gmail.com', '021 345 7825'),
(2, 'Oliver', 'Graham', 'NZ European', '1973-04-28', '102 B Woodcocks Rd', 'og73@hotmail.com', '021 353 0998'),
(3, 'Noah ', 'Barclay', 'Moari', '1955-10-08', '23 Omaha Cr', 'NoahBk@gmail.com', '023 876 4525'),
(4, 'Jesse', 'Attwood', 'NZ European', '1980-02-14', '18 Mainstream Rd', 'JesseA@gmail.com', '021 988 2256'),
(5, 'Jack', 'De Witt', 'NZ European', '1967-09-25', '33 Mangawhai Rd', 'JDewitt@hotmail.com', '027 646 7824');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `canopy information`
--
ALTER TABLE `canopy information`
  ADD PRIMARY KEY (`canopy_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`evt_id`),
  ADD KEY `evt_start` (`evt_start`),
  ADD KEY `evt_end` (`evt_end`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient details`
--
ALTER TABLE `patient details`
  ADD PRIMARY KEY (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `evt_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
