-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 29, 2021 at 02:06 AM
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
-- Database: `forphpproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutme`
--

CREATE TABLE `aboutme` (
  `id` int(11) UNSIGNED NOT NULL,
  `phone` varchar(32) NOT NULL,
  `skype` varchar(32) NOT NULL,
  `uni` varchar(32) NOT NULL,
  `status` varchar(32) NOT NULL,
  `school` varchar(32) NOT NULL,
  `interest` text NOT NULL,
  `favmusic` varchar(128) NOT NULL,
  `favmovies` varchar(128) NOT NULL,
  `favbooks` varchar(128) NOT NULL,
  `favgames` varchar(128) NOT NULL,
  `favphrases` text NOT NULL,
  `aboutme` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aboutme`
--

INSERT INTO `aboutme` (`id`, `phone`, `skype`, `uni`, `status`, `school`, `interest`, `favmusic`, `favmovies`, `favbooks`, `favgames`, `favphrases`, `aboutme`) VALUES
(1, '+371 22000316', 'nick-96', 'Rīgas Tehniskā universitāte', 'Students (bakalaurs)', 'Rīgas 40. vidusskola, 2014', 'Diving; Books; PC Games;', 'Check Spotify', 'Anime', 'Way of the Peaceful Warrior', 'csgo', 'Тян и Чулочки лучший паблик вк))0)', 'xd');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(8) UNSIGNED NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `surname` varchar(64) DEFAULT NULL,
  `phone` varchar(64) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `status` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `surname`, `phone`, `email`, `status`) VALUES
(1, 'Nikita', 'Kozlovskis', '+37122000316', '4oy3eh@gmail.com', 'admin'),
(2, 'Nikita Kozlovskis', 'Kozlovskis', '22000316', 'xoxosdw@gmail.com', 'admin'),
(3, 'qwe', 'qwe', '32222', 'ji.io.6.o.tt.bi.t.c.t.b.o@gmail.com', 'client');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(64) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `email`, `comment`, `date`) VALUES
(1, '4oy3eh@gmail.com', 'eto test comment KEKWait', '2021-01-29'),
(2, 'admin@gmail.com', 'test2, dolzno rabotatj', '2021-01-29');

-- --------------------------------------------------------

--
-- Table structure for table `index_picture_counter`
--

CREATE TABLE `index_picture_counter` (
  `counter` int(4) NOT NULL,
  `id` int(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `index_picture_counter`
--

INSERT INTO `index_picture_counter` (`counter`, `id`) VALUES
(4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pictures for index`
--

CREATE TABLE `pictures for index` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'DONT USE IT',
  `link` text NOT NULL,
  `MAIN?` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pictures for index`
--

INSERT INTO `pictures for index` (`id`, `link`, `MAIN?`) VALUES
(1, 'https://i.imgur.com/1w2ZcEK.png', 0),
(2, 'https://sun9-33.userapi.com/impf/c855232/v855232543/1fd608/yAfMzYLlKfQ.jpg?size=984x1312&quality=96&proxy=1&sign=fa4c60981ce33551dee4283d320afd70&type=album', 0),
(3, 'https://sun9-74.userapi.com/impf/c858028/v858028171/ad8df/rKil4TWNdAw.jpg?size=1444x1445&quality=96&proxy=1&sign=c4d5f33f2263ce213c49828fd9a0fc97&type=album', 1),
(4, 'https://sun9-61.userapi.com/impf/c847220/v847220571/aea25/92_uvMAuoms.jpg?size=960x1280&quality=96&proxy=1&sign=f3be32f3e6685982973e55698457f04c&type=album', 0),
(5, 'https://sun9-29.userapi.com/impf/c840128/v840128984/b5d4/u2IVrt-0f5k.jpg?size=495x727&quality=96&proxy=1&sign=d8f0406e5e577a0cbbc2a6d5ab849c46&type=album', 0),
(6, 'https://sun9-13.userapi.com/impf/c622123/v622123984/3ac8d/EJMiuEyuYbY.jpg?size=1365x2048&quality=96&proxy=1&sign=f46cd61801578f93096f6ffffacb3791&type=album', 0),
(7, 'https://i.imgur.com/erbTNwN.png', NULL),
(8, 'https://sun9-55.userapi.com/impf/c858236/v858236414/136d46/L6a-VTR5S2s.jpg?size=984x1312&quality=96&proxy=1&sign=d0ed80c1b6503798702319dd50d33fa2&type=album', 0),
(9, 'https://i.imgur.com/XFkEEnU.png', NULL),
(10, 'https://i.imgur.com/XMWN4cP.png', 0),
(11, 'https://i.imgur.com/HnsrFzz.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutme`
--
ALTER TABLE `aboutme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_picture_counter`
--
ALTER TABLE `index_picture_counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pictures for index`
--
ALTER TABLE `pictures for index`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutme`
--
ALTER TABLE `aboutme`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `index_picture_counter`
--
ALTER TABLE `index_picture_counter`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pictures for index`
--
ALTER TABLE `pictures for index`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'DONT USE IT', AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
