-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 17, 2020 at 07:16 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

DROP TABLE IF EXISTS `bills`;
CREATE TABLE `bills` (
  `aid` bigint(12) NOT NULL,
  `house` int(8) NOT NULL,
  `water` int(8) NOT NULL,
  `wealth` int(8) NOT NULL,
  `library` int(8) NOT NULL,
  `phone` int(8) NOT NULL,
  `elec` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`aid`, `house`, `water`, `wealth`, `library`, `phone`, `elec`) VALUES
(123456654321, 0, 0, 0, 0, 0, 0),
(123456789012, 123, 0, 345, 43, 0, 0),
(232131231231, 65, 0, 43, 34, 0, 34),
(321456786453, 0, 0, 0, 0, 0, 0),
(324453445657, 0, 0, 43, 34, 0, 34),
(345345344534, 0, 4353, 0, 0, 435, 0),
(564564564534, 234, 324, 0, 0, 324, 0),
(987654321123, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `god`
--

DROP TABLE IF EXISTS `god`;
CREATE TABLE `god` (
  `username` varchar(30) NOT NULL,
  `aid` int(12) NOT NULL,
  `email` varchar(80) NOT NULL,
  `pass` varchar(80) NOT NULL,
  `adr` varchar(90) NOT NULL,
  `city` varchar(60) NOT NULL,
  `state` varchar(40) NOT NULL,
  `zip` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE `register` (
  `username` varchar(30) NOT NULL,
  `aid` bigint(30) NOT NULL,
  `email` varchar(80) NOT NULL,
  `pass` varchar(80) NOT NULL,
  `adr` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` int(6) NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `aid`, `email`, `pass`, `adr`, `city`, `state`, `zip`, `name`) VALUES
('surya', 123456654321, 'chanduss64@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'tamil street,', 'visakhapatnam', 'Andhra Pradesh', 530017, 'soma'),
('csb_6777', 123456789012, 'cs@cs.com', '827ccb0eea8a706c4c34a16891f84e7b', 'dsfdsf', 'dsfdfsf', 'Andhra Pradesh', 123456, 'Chandra Sekhar Bodasingu'),
('sai123', 232131231231, 'sdsdfds@sdfds.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'dsfdsfds', 'dsfdsfdsf', 'Andhra Pradesh', 345345, 'Sri sai'),
('mouni_cs', 321456786453, 'mo@123.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Tamil', 'Visakhapatnam', 'Andhra Pradesh', 530017, 'Mounika'),
('Vamsi', 324453445657, 'v@msi.com', '3f230640b78d7e71ac5514e57935eb69', '22-3', 'Yousufguda', 'Telangana', 532412, 'Vamsi Ravindra Pyla'),
('priyanka', 345345344534, 'priy@nka.com', '827ccb0eea8a706c4c34a16891f84e7b', '34-65', 'Visakhapatnam', 'Andhra Pradesh', 530041, 'Priyanka T'),
('nikiila', 564564564534, 'ni@sf.com', '827ccb0eea8a706c4c34a16891f84e7b', 'CarShed', 'Visakhapatnam', 'Andhra Pradesh', 530041, 'Nikiliha P'),
('chandu6677', 987654321123, 'ch@ndu.com', '040b7cf4a55014e185813e0644502ea9', 'Tamil Street', 'Visakhapatnam', 'Andhra Pradesh', 530017, 'Chandra Sekhar');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `username` varchar(30) NOT NULL,
  `pass` varchar(23) NOT NULL,
  `aid` int(30) NOT NULL,
  `email` varchar(80) NOT NULL,
  `adr_1` varchar(80) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(80) NOT NULL,
  `zip` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`username`, `pass`, `aid`, `email`, `adr_1`, `state`, `city`, `zip`) VALUES
('asdad', 'pass', 213213123, 'email_1', 'sadasd', 'Andhra Pradesh', 'asdasdasd', 34324324),
('username', 'pass', 213213123, 'email_1', 'sadasd', 'Andhra Pradesh', 'asdasdasd', 34324324),
('username', 'pass', 213213123, 'email_1', 'adr_1', 'Andhra Pradesh', 'asdasdasd', 34324324),
('username', 'pass', 213213123, 'email_1', 'adr_1', 'state', 'city', 34324324),
('username', 'pass', 4544, 'email_1', 'adr_1', 'state', 'city', 45345);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`) VALUES
('123', '123@ds.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`aid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
