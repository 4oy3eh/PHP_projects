-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 10, 2021 at 08:26 PM
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
-- Database: `register-bg`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(8) UNSIGNED NOT NULL,
  `name` varchar(64) NOT NULL,
  `description` text,
  `date` date DEFAULT NULL,
  `location` varchar(64) DEFAULT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `count` int(10) UNSIGNED NOT NULL,
  `link` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `date`, `location`, `price`, `count`, `link`) VALUES
(1, 'HANS ZIMMER', NULL, '2021-01-29', 'Olympiahalle\r\n21 Spiridon-Louis-Ring, Munich, Germany', 143, 30, 'https://concertful.com/public/foto/medium/hans-zimmer.jpg'),
(2, 'THE JESUS AND MARY CHAIN', NULL, '2021-01-31', 'Astra Kulturhaus\r\nBerlin, Germany', 239, 20, 'https://concertful.com/public/foto/medium/default.jpg'),
(3, 'HARRY STYLES', NULL, '2021-02-11', 'Olympiahalle\r\n21 Spiridon-Louis-Ring, Munich, Germany', 25, 100, 'https://concertful.com/public/foto/medium/harry-styles.jpg'),
(4, 'AVRIL LAVIGNE', NULL, '2021-04-01', 'Palladium\r\n40 Schanzenstraße, Cologne, Germany', 43, 10, 'https://concertful.com/public/foto/medium/avril-lavigne.jpg'),
(5, 'ANDREA BOCELLI', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,\r\n\r\n', '2021-04-15', 'SAP Arena\r\nMannheim, Germany', 120, 33, 'https://concertful.com/public/foto/medium/andrea-bocelli.jpg'),
(7, 'test', 'test', '2021-01-15', 'test', 123, 123, 'https://hikarinoakari.com/wp-content/uploads/nuevo/2021/01/SECL-2665.jpg'),
(6, 'tesest', 'testes', '2021-01-28', 'test', 123, 123, 'https://hikarinoakari.com/wp-content/uploads/nuevo/2021/01/SECL-2665.jpg'),
(9, 'test3', 'test', '2021-01-28', 'test', 123123, 123123, 'https://hikarinoakari.com/wp-content/uploads/nuevo/2021/01/SECL-2665.jpg'),
(8, 'test2', 'test2', '2021-01-28', 'test2', 321, 321, 'https://sun9-3.userapi.com/impf/WpJrKdGMzpHSvsUTcB-RepyHj_Gl1siu0Ofvzw/5peXn6dxkqc.jpg?size=768x1024&quality=96&proxy=1&sign=8c440a558649690a5ba3c36f72e68368&type=album'),
(10, 'test4', 'test4', '2021-01-29', 'test4', 532, 532, 'https://hikarinoakari.com/wp-content/uploads/nuevo/2021/01/SECL-2665.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(8) UNSIGNED NOT NULL,
  `login` varchar(64) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `pass`) VALUES
(3, 'Admin', '78b05eeef3ed3e78a738ea0143376c67'),
(4, 'Adnin', '78b05eeef3ed3e78a738ea0143376c67'),
(6, 'xoxosdw@gmail.com', '1ea87af3563a5a22b97a5732a88edcf0'),
(7, 'qwe', '66b55744562c9280bcee94c4eb16edf3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
