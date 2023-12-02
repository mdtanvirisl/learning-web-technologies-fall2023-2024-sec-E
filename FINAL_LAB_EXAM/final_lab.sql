-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 06:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`UserName`, `Password`) VALUES
('asif12', '123456'),
('rock', '65412398'),
('tanvir18', '12345'),
('tazdik', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `staffinfo`
--

CREATE TABLE `staffinfo` (
  `StaffName` varchar(100) NOT NULL,
  `StaffNumber` varchar(100) NOT NULL,
  `StaffUserName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staffinfo`
--

INSERT INTO `staffinfo` (`StaffName`, `StaffNumber`, `StaffUserName`) VALUES
('Tanvir islam', '01581125212', 'tanvir18'),
('Tazdik Hossain', '01888100534', 'tazdik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `staffinfo`
--
ALTER TABLE `staffinfo`
  ADD PRIMARY KEY (`StaffUserName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
