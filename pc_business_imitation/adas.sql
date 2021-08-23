-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 13, 2021 at 10:17 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(8) UNSIGNED NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `surname` varchar(64) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `phone` varchar(64) DEFAULT NULL,
  `salary` int(8) DEFAULT NULL,
  `superadmin_id` int(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `surname`, `email`, `phone`, `salary`, `superadmin_id`) VALUES
(1, 'Nikita', '4utj4utjKapsulis', 'admin', 'kekw', 111, 1),
(2, 'Vosto4niy', 'Morder', 'Morder', '9321899', 321, 1);

-- --------------------------------------------------------

--
-- Table structure for table `boss`
--

CREATE TABLE `boss` (
  `id` int(8) UNSIGNED NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `surname` varchar(64) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `phone` varchar(64) DEFAULT NULL,
  `salary` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `boss`
--

INSERT INTO `boss` (`id`, `name`, `surname`, `email`, `phone`, `salary`) VALUES
(1, 'Nikita', 'Kozlovskis', '4oy3eh@gmail.com', '+37122000316', 123123);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(8) UNSIGNED NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `surname` varchar(64) DEFAULT NULL,
  `team` varchar(64) DEFAULT NULL,
  `email` varchar(64) NOT NULL,
  `phone` varchar(64) DEFAULT NULL,
  `rank` int(32) DEFAULT NULL,
  `worker_id` int(8) DEFAULT NULL,
  `pc_id` int(8) DEFAULT NULL,
  `status` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `surname`, `team`, `email`, `phone`, `rank`, `worker_id`, `pc_id`, `status`) VALUES
(1, 'Nikita', 'Kozlovskis', 'love', 'xoxosdw@gmail.com', '+37122000316', 100, 0, 1, 'vip'),
(2, 'test1', 'test1', NULL, 'test1@gmail.com', '123123123', 0, 0, 0, NULL),
(3, 'test2', 'test2', NULL, 'test2@gmail.com', '123123123', 0, 0, 0, NULL),
(4, 'test3', 'test3', NULL, 'test3@gmail.com', '22000316', 0, 0, 0, NULL),
(5, 'Nikita', 'Kozlovskis', 'ololo', 'xoxosdw1@gmail.com', '22000316', 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dators_image`
--

CREATE TABLE `dators_image` (
  `id` int(8) NOT NULL,
  `link` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dators_image`
--

INSERT INTO `dators_image` (`id`, `link`) VALUES
(1, 'https://5.imimg.com/data5/RO/RA/JE/SELLER-3866941/gaming-desktop-pc-500x500.jpg'),
(2, 'https://bizon-tech.com/i/ws/v3000.jpg'),
(3, 'https://www.dhresource.com/0x0/f2/albu/g12/M01/18/31/rBVakV9LlWyAXgtjAAucF7dqkO4358.jpg/home-office-corner-desk-wood-top-pc-laptop.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pc`
--

CREATE TABLE `pc` (
  `id` int(8) UNSIGNED NOT NULL,
  `builddate` date DEFAULT NULL,
  `wrntydate` date DEFAULT NULL,
  `type` varchar(64) DEFAULT NULL,
  `status` int(8) DEFAULT NULL,
  `admin_id` int(8) DEFAULT NULL,
  `client_id` int(8) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pc`
--

INSERT INTO `pc` (`id`, `builddate`, `wrntydate`, `type`, `status`, `admin_id`, `client_id`) VALUES
(1, '2021-01-13', '2022-05-20', 'gaming', 0, 0, 1),
(2, '2021-01-13', '2025-05-20', 'office', 0, 0, 0),
(3, '2021-01-13', '2025-05-20', 'office', 0, 0, 0),
(4, '2021-01-13', '2025-05-20', 'office', 0, 0, 0),
(5, '2021-01-13', '2025-05-20', 'office', 0, 0, 0),
(6, '2021-01-13', '2025-05-20', 'office', 0, 0, 0),
(7, '2021-01-13', '2025-05-20', 'office', 0, 0, 0),
(8, '2021-01-13', '2025-05-20', 'office', 0, 0, 0),
(9, '2021-01-13', '2025-05-20', 'office', 0, 0, 0),
(10, '2021-01-13', '2025-05-20', 'office', 0, 0, 0),
(11, '2021-01-13', '2025-05-20', 'office', 0, 0, 0),
(12, '2021-01-13', '2025-05-20', 'office', 0, 0, 0),
(13, '2021-01-13', '2025-05-20', 'gaming', 0, 0, 0),
(14, '2021-01-13', '2025-05-20', 'gaming', 0, 0, 0),
(15, '2021-01-13', '2025-05-20', 'gaming', 0, 0, 0),
(16, '2021-01-13', '2025-05-20', 'gaming', 0, 0, 0),
(17, '2021-01-13', '2025-05-20', 'gaming', 0, 0, 0),
(18, '2021-01-13', '2025-05-20', 'gaming', 0, 0, 0),
(19, '2021-01-13', '2025-05-20', 'gaming', 0, 0, 0),
(20, '2021-01-13', '2025-05-20', 'office', 0, 0, 0),
(21, '2021-01-13', '2025-05-20', 'office', 0, 0, 0),
(22, '2021-01-13', '2025-05-20', 'office', 0, 0, 0),
(23, '2021-01-13', '2025-05-20', 'rendering', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `secretary`
--

CREATE TABLE `secretary` (
  `id` int(8) UNSIGNED NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `surname` varchar(64) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `phone` varchar(64) DEFAULT NULL,
  `salary` int(8) DEFAULT NULL,
  `boss_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `secretary`
--

INSERT INTO `secretary` (`id`, `name`, `surname`, `email`, `phone`, `salary`, `boss_id`) VALUES
(1, 'Nikita', 'Kapsulis', 'kapsulis@inbox.com', 'ponjatija ne imeju', 1, 1),
(2, 'Alisa', 'Orlova', 'alisa@gmail.com', '321321', 1021, 1),
(3, 'test', 'test', 'test', 'test', 123, 1);

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE `super_admin` (
  `id` int(8) UNSIGNED NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `surname` varchar(64) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `phone` varchar(64) DEFAULT NULL,
  `salary` int(8) DEFAULT NULL,
  `boss_id` int(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `super_admin`
--

INSERT INTO `super_admin` (`id`, `name`, `surname`, `email`, `phone`, `salary`, `boss_id`) VALUES
(1, 'Nikita', '100%neKapsulis', 'superadmin', 'turboPuwka', 7777, 1);

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `id` int(8) UNSIGNED NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `surname` varchar(64) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `phone` varchar(64) DEFAULT NULL,
  `status` int(4) DEFAULT NULL,
  `salary` int(8) DEFAULT NULL,
  `sek_id` int(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`id`, `name`, `surname`, `email`, `phone`, `status`, `salary`, `sek_id`) VALUES
(1, 'black', 'black', 'black', 'black', 0, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boss`
--
ALTER TABLE `boss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `dators_image`
--
ALTER TABLE `dators_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pc`
--
ALTER TABLE `pc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secretary`
--
ALTER TABLE `secretary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `boss_id_2` (`boss_id`);

--
-- Indexes for table `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `boss`
--
ALTER TABLE `boss`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dators_image`
--
ALTER TABLE `dators_image`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pc`
--
ALTER TABLE `pc`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `secretary`
--
ALTER TABLE `secretary`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `super_admin`
--
ALTER TABLE `super_admin`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `worker`
--
ALTER TABLE `worker`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
