-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 11:06 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complain_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `password` char(12) NOT NULL,
  `phone no.` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `name`, `password`, `phone no.`) VALUES
('Rafiul_Islam', 'rafiul@yahoo.com', 'Rafiul Islam', '2223355', '01625368656'),
('Sami_Khan', 'samikhan@gmail.com', 'Samiul Islam Khan', '2223355', '01625368692');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `Complain_ID` varchar(20) NOT NULL,
  `Subject` varchar(40) NOT NULL,
  `Date` date NOT NULL,
  `Text` varchar(120) NOT NULL,
  `Comment` varchar(60) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `User_ID` varchar(20) NOT NULL,
  `Feedback` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`Complain_ID`, `Subject`, `Date`, `Text`, `Comment`, `Status`, `User_ID`, `Feedback`) VALUES
('18945', 'Internet Problem', '2020-12-23', 'Connection dropping frequently.', 'Thank you, we will look into it', 'Pending', 'sadia', ''),
('22356', 'Internet Problem', '2018-09-07', 'Very slow speed of Internet. Need to be fixed now!', 'Thank you, we will look into it', 'Pending', 'muntasir', ''),
('45897', 'Electricity Problem', '2019-10-02', 'There is no electricity at my home for 4 hours. Please check.', 'Thank you, we will look into it', 'Pending', 'muntasir', ''),
('46235', 'Electricity Problem', '2019-08-22', 'No Electricity at home.', 'Thank you, we will look into it', 'Pending', 'aukik', ''),
('48952', 'Internet Problem', '2020-06-16', 'No Internet for 8 hours.', 'Thank you, we will look into it', 'Pending', 'muntasir', ''),
('48956', 'Gas Problem', '2020-08-12', 'No gas at my house. Solve please.', 'Thank you, we will look into it', 'Pending', 'aukik', '');

-- --------------------------------------------------------

--
-- Table structure for table `managed by`
--

CREATE TABLE `managed by` (
  `Admin_ID` varchar(20) NOT NULL,
  `Complain_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `id` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`id`, `Phone`) VALUES
('aukik', '0162356896'),
('meshal', '01600272564'),
('muntasir', '016222222'),
('sadia', '0162354552');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `password` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `name`, `password`) VALUES
('aukik', 'aukik@gmail.com', 'Aukik Aurnub', '19101485'),
('meshal', 'meshal@yahoo.com', 'Mohaimenul Meshal', '112233'),
('muntasir', 'muntasir@gmail.com', 'Badhon', '19101042'),
('sadia', 'sadia@hotmail.com', 'Sadia Afrin', '19101022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`Complain_ID`),
  ADD KEY `user_id` (`User_ID`);

--
-- Indexes for table `managed by`
--
ALTER TABLE `managed by`
  ADD PRIMARY KEY (`Admin_ID`,`Complain_ID`),
  ADD KEY `complain_id` (`Complain_ID`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID` (`id`,`email`,`name`,`password`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complain`
--
ALTER TABLE `complain`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`User_ID`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `managed by`
--
ALTER TABLE `managed by`
  ADD CONSTRAINT `admin_id` FOREIGN KEY (`Admin_ID`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `complain_id` FOREIGN KEY (`Complain_ID`) REFERENCES `complain` (`Complain_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phone`
--
ALTER TABLE `phone`
  ADD CONSTRAINT `phone` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
