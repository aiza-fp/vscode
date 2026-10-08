-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2022 at 12:11 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2
-- Datuak sortu existitzen ez bada
CREATE DATABASE IF NOT EXISTS `3-1ariketa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `3-1ariketa`;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;



-- --------------------------------------------------------

--
-- Table structure for table `test`
--
/*
CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `izena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
*/
CREATE TABLE ikasleak (
id INT AUTO_INCREMENT PRIMARY KEY,
izena VARCHAR(100) NOT NULL,
email VARCHAR(150) NOT NULL UNIQUE
);
CREATE TABLE irakasgaiak (
id INT AUTO_INCREMENT PRIMARY KEY,
ikasle_id INT NOT NULL,
irakasgaia VARCHAR(100) NOT NULL,
FOREIGN KEY (ikasle_id) REFERENCES ikasleak(id)
);
--
-- Dumping data for table `test`
--
/*
INSERT INTO `test` (`id`, `izena`) VALUES
(1, 'aaaaaa'),
(2, 'bbbbbb'),
(3, 'cccccc'),
(4, 'dadada'),
(5, 'eeeeer');
*/
--
-- Indexes for dumped tables
--

--
-- Indexes for table `test`
--
-- ALTER TABLE `test`
  -- ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;