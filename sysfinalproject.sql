-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 05:51 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sysfinalproject`
--
CREATE DATABASE IF NOT EXISTS `sysfinalproject` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sysfinalproject`;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `employeeId` int(11) NOT NULL,
  `firstName` varchar(40) NOT NULL,
  `lastName` varchar(40) NOT NULL,
  `email` varchar(150) NOT NULL,
  `passwordHash` varchar(72) NOT NULL,
  `phoneNumber` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeId`, `firstName`, `lastName`, `email`, `passwordHash`, `phoneNumber`) VALUES
(1, 'Ehab', 'Melbourne', 'emelbourne@moneris.com', '$2y$10$sPHq.KoM7gizFAKeScvW4ecX5qbyvd52VspHn9ctABTUnmEaLnObW', '514-241-9483'),
(2, 'Billy', 'Mountmolt', 'bmountmolt@moneris.com', '$2y$10$UClcRmFBJJKYOqpTDd9TLercqUxNpbWAf1OvG7JygpxOMovoXw3ay', '438-444-1246'),
(3, 'Antoine', 'Cyr', 'acyr@moneris.com', '$2y$10$X7pEHwUN5xvBiZI9S/6tZOF5GxAfqWxgWe1gu6A.z7cosx9IMg4m2', '438-534-1343'),
(4, 'Samy', 'Refik', 'srefik@moneris.com', '$2y$10$TbCsh3qX.adHj0kNiFK8ROl9al8vSEZ/XsNFgnKi5BJnBWrW4alXK', '514-644-3267'),
(5, 'Nour', 'Kouki', 'nkouki@moneris.com', '$2y$10$/h/HbH1BtVvzyrWdITx5fuquf.pYqgHPWhQGHO3y67v35vkOgZGxi', '438-115-6423');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

DROP TABLE IF EXISTS `equipment`;
CREATE TABLE `equipment` (
  `assetTag` varchar(20) NOT NULL,
  `model` varchar(60) NOT NULL,
  `sinNumber` varchar(60) NOT NULL,
  `productNumber` varchar(60) NOT NULL,
  `dateOfInventory` date NOT NULL,
  `location` varchar(60) NOT NULL,
  `description` varchar(300) NOT NULL,
  `deskNumber` varchar(20) NOT NULL,
  `employeeId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`assetTag`, `model`, `sinNumber`, `productNumber`, `dateOfInventory`, `location`, `description`, `deskNumber`, `employeeId`) VALUES
('ABD-ABC-069', 'ThinkCentre M910x', 'MJ078XK554', '10MYS0DK00', '2021-11-15', 'Montreal Lab', 'Laptop used by cleaning department.', '113-1C', NULL),
('ABD-ABC-070', 'ThinkCentre M910x', 'MJ078XK555', '10MYS0DK01', '2021-11-05', 'Montreal Lab', 'Laptop used by shipping department.', '114-1C', NULL),
('ABD-ABC-071', 'ThinkPad T470', 'MJ078XK556', '10MYS0DK02', '2021-11-04', 'Calgary Lab', 'Laptop used by technicians.', '134-1D', NULL),
('ABD-ABC-072', 'ThinkPad T470', 'MJ078XK557', 'SL10M95098', '2021-11-03', 'Calgary Lab', 'Laptop used by managers.', '453-5D', NULL),
('ABD-ABC-073', 'ThinkCentre M910x', 'MJ078XK559', 'SL10M95099', '2021-12-13', 'Montreal Lab', 'Laptop to be assigned.', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

DROP TABLE IF EXISTS `form`;
CREATE TABLE `form` (
  `formId` int(11) NOT NULL,
  `formType` varchar(20) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `description` varchar(300) NOT NULL,
  `employeeName` varchar(100) NOT NULL,
  `assetTag` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`formId`, `formType`, `date`, `description`, `employeeName`, `assetTag`) VALUES
(1, 'Missing', '2021-12-03', 'I have been unable to find my laptop for a few days now.', 'Samy Refik', 'ABD-ABC-070'),
(3, 'Damaged', '2021-12-03', 'There is blue light coming from the side of the screen. ', 'Antoine Cyr ', 'ABD-ABC-073'),
(4, 'Missing', '2021-11-10', 'Laptop last seen in the warehouse. ', 'Ehab Melbourne', 'ABD-ABC-069'),
(5, 'Damaged', '2021-08-16', 'A few keys on the keyboard are not working anymore. ', 'Nour Kouki', 'ABD-ABC-071'),
(6, 'Damaged', '2021-12-03', 'I keep seeing the blue screen of death.', 'Billy Mountmolt', 'ABD-ABC-072');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `employeeId` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `firstName` varchar(40) NOT NULL,
  `lastName` varchar(40) NOT NULL,
  `email` varchar(150) NOT NULL,
  `passwordHash` varchar(72) NOT NULL,
  `phoneNumber` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`employeeId`, `type`, `firstName`, `lastName`, `email`, `passwordHash`, `phoneNumber`) VALUES
(1, 'Regular', 'Francis', 'Tardif', 'ftardif@moneris.com', '$2y$10$VtfaWpEDghC/KpLI5FTtPe.QhHiPhn6sjXfkc6P0EblNnbEzrLLHS', '514-241-9483'),
(2, 'Regular', 'Mahdi', 'Ali', 'mali@moneris.com', '$2y$10$VtfaWpEDghC/KpLI5FTtPe.QhHiPhn6sjXfkc6P0EblNnbEzrLLHS', '514-313-9783'),
(3, 'Regular', 'Soumia ', 'Kelbouche', 'skelbouche@moneris.com', '$2y$10$VtfaWpEDghC/KpLI5FTtPe.QhHiPhn6sjXfkc6P0EblNnbEzrLLHS', '514-503-3554'),
(4, 'Regular', 'Jennifer', 'Rodriguez', 'jrodriguez@moneris.com', '$2y$10$VtfaWpEDghC/KpLI5FTtPe.QhHiPhn6sjXfkc6P0EblNnbEzrLLHS', '514-221-9403'),
(5, 'Admin', 'Paul', 'Duke', 'pduke@moneris.com', '$2y$10$VtfaWpEDghC/KpLI5FTtPe.QhHiPhn6sjXfkc6P0EblNnbEzrLLHS', '514-674-2300');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeId`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`assetTag`),
  ADD KEY `emp_empId_fk` (`employeeId`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`formId`),
  ADD KEY `equip_assetTag_fk` (`assetTag`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`employeeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `formId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `employeeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `equipment`
--
ALTER TABLE `equipment`
  ADD CONSTRAINT `emp_empId_fk` FOREIGN KEY (`employeeId`) REFERENCES `employee` (`employeeId`) ON DELETE CASCADE;

--
-- Constraints for table `form`
--
ALTER TABLE `form`
  ADD CONSTRAINT `equip_assetTag_fk` FOREIGN KEY (`assetTag`) REFERENCES `equipment` (`assetTag`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
