-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 06, 2017 at 09:05 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projektas`
--
CREATE DATABASE IF NOT EXISTS `projektas` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `projektas`;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `img`, `product_id`) VALUES
(1, 'lova-ls126-1.jpg', 1),
(2, 'lova-ls126-2.jpg', 1),
(3, 'lova-ls126-3.jpg', 1),
(4, 'lova-ls126-4.jpg', 1),
(5, 'lova-ls126-5.jpg', 1),
(6, 'lova-ra18-1.jpg', 4),
(7, 'lova-ra18-2.jpg', 4),
(8, 'lova-ra18-3.jpg', 4),
(9, 'lova-nzc7-1.jpg', 5),
(10, 'lova-nzc7-2.jpg', 5),
(11, 'lova-nzc7-3.jpg', 5),
(12, 'lova-nzc7-4.jpg', 5),
(13, 'lova-nzc7-5.jpg', 5),
(14, 'lova-pk245-1.jpg', 6),
(15, 'lova-pk245-2.jpg', 6),
(16, 'lova-pk245-3.jpg', 6),
(17, 'lova-pk245-4.jpg', 6),
(18, 'lova-pk245-5.jpg', 6),
(19, 'lova-pk245-6.jpg', 6),
(20, 'lova-caa5-1.jpg', 7),
(21, 'lova-caa5-2.jpg', 7),
(22, 'lova-caa5-3.jpg', 7),
(23, 'lova-caa5-4.jpg', 7),
(24, 'lova-caa5-5.jpg', 7),
(25, 'lova-caa5-6.jpg', 7),
(26, 'lova-caa5-7.jpg', 7),
(27, 'lova-luh2-1.jpg', 8),
(28, 'lova-luh2-2.jpg', 8),
(29, 'lova-luh2-3.jpg', 8),
(30, 'lova-luh2-4.jpg', 8),
(31, 'lova-luh2-5.jpg', 8),
(33, '1509357807lova-nzt2-174276.jpg', 16),
(34, '1509357807lova-nzt2-174277.jpg', 16),
(35, '1509357807lova-nzt2-174278.jpg', 16),
(36, '1509357807lova-nzt2-174279.jpg', 16),
(37, '1509358286virtuves-komplektas-bgb24-154558.jpg', 17),
(38, '1509358286virtuves-komplektas-bgb24-154560.jpg', 17),
(39, '1509358286virtuves-komplektas-bgb24-154562.jpg', 17),
(40, '1509358286virtuves-komplektas-bgb24-154563.jpg', 17),
(41, '1509358286virtuves-komplektas-bgb24-154564.jpg', 17),
(42, '1509358286virtuves-komplektas-bgb24-154565.jpg', 17),
(43, '1509358286virtuves-komplektas-bgb24-154566.jpg', 17),
(44, '1509358286virtuves-komplektas-bgb24-216334.jpg', 17),
(49, '1509358830valgomojo-komplektas-h1497-228572.jpg', 19),
(96, '1509454809baras-h1442-226759.jpg', 43),
(97, '1509454836kampinis-darbo-stalas-d311-117547.jpg', 44),
(98, '1509454836kampinis-darbo-stalas-d311-224481.jpg', 44),
(99, '1509454836kampinis-darbo-stalas-d311-225372.jpg', 44),
(100, '1509454836kampinis-darbo-stalas-d311-225376.jpg', 44),
(101, '1509454836kampinis-darbo-stalas-d311-253731.jpg', 44),
(102, '1509454859lentyna-aam5-91560.jpg', 45),
(103, '1509454881spintele-j67-114600.jpg', 46),
(104, '1509454881spintele-j67-114597.jpg', 46),
(105, '1509454926valgomojo-komplektas-h1497-228572.jpg', 47),
(106, '1509454960valgomojo-komplektas-mh786-154982.jpg', 48),
(107, '1509454960valgomojo-komplektas-mh786-154980.jpg', 48),
(108, '1509454960valgomojo-komplektas-mh786-154983.jpg', 48),
(109, '1509454960valgomojo-komplektas-mh786-224488.jpg', 48);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(6) NOT NULL,
  `title` varchar(30) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `category` enum('living_room','office','for_kids','accesories','kitchen') CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `important` enum('1','2','3','4') NOT NULL DEFAULT '1',
  `price` int(6) NOT NULL,
  `price_old` int(6) DEFAULT NULL,
  `quantity` int(6) NOT NULL DEFAULT '1',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `category`, `description`, `important`, `price`, `price_old`, `quantity`, `date_created`, `date_modified`) VALUES
(1, 'Bed LS126', 'living_room', 'Lorem ipsum dolor sit amet, in has iriure omnesque. Eam ei nonumes delectus singulis, vel ne graece percipit, aperiri explicari incorrupte an pri. Ad salutandi explicari sea, id nec quod malis latine, docendi perpetua qui ea. Duis harum equidem pri et, at eum novum labore convenire. An vix atqui maiestatis signiferumque, duo et conceptam democritum, an eos aperiri assentior. Sensibus oportere incorrupte in vel, maiorum denique signiferumque mel et, nibh concludaturque ex pro. Vix et aliquid argumentum.\r\n\r\nSea ceteros volutpat id. Vel eu admodum quaerendum, ad mea illum atqui. Te ius justo nonumes insolens. Facilisis efficiantur intellegebat eu quo, nec at periculis deseruisse. Putant convenire ut pri, vim ad suas animal consetetur, impetus incorrupte mel at.', '1', 20, 30, 1, '2017-10-27 16:26:20', '2017-10-31 14:18:20'),
(4, 'Bed RA18', 'living_room', 'Lorem ipsum dolor sit amet, in has iriure omnesque. Eam ei nonumes delectus singulis, vel ne graece percipit, aperiri explicari incorrupte an pri. Ad salutandi explicari sea, id nec quod malis latine, docendi perpetua qui ea. Duis harum equidem pri et, at eum novum labore convenire. An vix atqui maiestatis signiferumque, duo et conceptam democritum, an eos aperiri assentior. Sensibus oportere incorrupte in vel, maiorum denique signiferumque mel et, nibh concludaturque ex pro. Vix et aliquid argumentum.\r\n\r\nSea ceteros volutpat id. Vel eu admodum quaerendum, ad mea illum atqui. Te ius justo nonumes insolens. Facilisis efficiantur intellegebat eu quo, nec at periculis deseruisse. Putant convenire ut pri, vim ad suas animal consetetur, impetus incorrupte mel at.', '1', 888, 966, 1, '2017-10-28 10:03:05', '2017-10-31 14:18:24'),
(5, 'Bed NZC7', 'living_room', 'Lorem ipsum dolor sit amet, in has iriure omnesque. Eam ei nonumes delectus singulis, vel ne graece percipit, aperiri explicari incorrupte an pri. Ad salutandi explicari sea, id nec quod malis latine, docendi perpetua qui ea. Duis harum equidem pri et, at eum novum labore convenire. An vix atqui maiestatis signiferumque, duo et conceptam democritum, an eos aperiri assentior. Sensibus oportere incorrupte in vel, maiorum denique signiferumque mel et, nibh concludaturque ex pro. Vix et aliquid argumentum.\r\n\r\nSea ceteros volutpat id. Vel eu admodum quaerendum, ad mea illum atqui. Te ius justo nonumes insolens. Facilisis efficiantur intellegebat eu quo, nec at periculis deseruisse. Putant convenire ut pri, vim ad suas animal consetetur, impetus incorrupte mel at.', '1', 888, 999, 1, '2017-10-28 10:03:44', '2017-10-31 14:18:27'),
(6, 'Bed PK245', 'living_room', 'Lorem ipsum dolor sit amet, in has iriure omnesque. Eam ei nonumes delectus singulis, vel ne graece percipit, aperiri explicari incorrupte an pri. Ad salutandi explicari sea, id nec quod malis latine, docendi perpetua qui ea. Duis harum equidem pri et, at eum novum labore convenire. An vix atqui maiestatis signiferumque, duo et conceptam democritum, an eos aperiri assentior. Sensibus oportere incorrupte in vel, maiorum denique signiferumque mel et, nibh concludaturque ex pro. Vix et aliquid argumentum.\r\n\r\nSea ceteros volutpat id. Vel eu admodum quaerendum, ad mea illum atqui. Te ius justo nonumes insolens. Facilisis efficiantur intellegebat eu quo, nec at periculis deseruisse. Putant convenire ut pri, vim ad suas animal consetetur, impetus incorrupte mel at.', '3', 888, 999, 1, '2017-10-28 10:04:48', '2017-10-31 15:25:44'),
(7, 'Bed CAA5', 'living_room', 'Lorem ipsum dolor sit amet, in has iriure omnesque. Eam ei nonumes delectus singulis, vel ne graece percipit, aperiri explicari incorrupte an pri. Ad salutandi explicari sea, id nec quod malis latine, docendi perpetua qui ea. Duis harum equidem pri et, at eum novum labore convenire. An vix atqui maiestatis signiferumque, duo et conceptam democritum, an eos aperiri assentior. Sensibus oportere incorrupte in vel, maiorum denique signiferumque mel et, nibh concludaturque ex pro. Vix et aliquid argumentum.\r\n\r\nSea ceteros volutpat id. Vel eu admodum quaerendum, ad mea illum atqui. Te ius justo nonumes insolens. Facilisis efficiantur intellegebat eu quo, nec at periculis deseruisse. Putant convenire ut pri, vim ad suas animal consetetur, impetus incorrupte mel at.', '1', 888, NULL, 1, '2017-10-28 10:05:18', '2017-10-31 15:26:07'),
(8, 'Bed LUH2', 'living_room', 'Lorem ipsum dolor sit amet, in has iriure omnesque. Eam ei nonumes delectus singulis, vel ne graece percipit, aperiri explicari incorrupte an pri. Ad salutandi explicari sea, id nec quod malis latine, docendi perpetua qui ea. Duis harum equidem pri et, at eum novum labore convenire. An vix atqui maiestatis signiferumque, duo et conceptam democritum, an eos aperiri assentior. Sensibus oportere incorrupte in vel, maiorum denique signiferumque mel et, nibh concludaturque ex pro. Vix et aliquid argumentum.\r\n\r\nSea ceteros volutpat id. Vel eu admodum quaerendum, ad mea illum atqui. Te ius justo nonumes insolens. Facilisis efficiantur intellegebat eu quo, nec at periculis deseruisse. Putant convenire ut pri, vim ad suas animal consetetur, impetus incorrupte mel at.', '2', 800, 888, 1, '2017-10-28 10:00:00', '2017-10-31 15:04:09'),
(16, 'BED NZT2', 'living_room', 'Lorem ipsum dolor sit amet, in has iriure omnesque. Eam ei nonumes delectus singulis, vel ne graece percipit, aperiri explicari incorrupte an pri. Ad salutandi explicari sea, id nec quod malis latine, docendi perpetua qui ea. Duis harum equidem pri et, at eum novum labore convenire. An vix atqui maiestatis signiferumque, duo et conceptam democritum, an eos aperiri assentior. Sensibus oportere incorrupte in vel, maiorum denique signiferumque mel et, nibh concludaturque ex pro. Vix et aliquid argumentum.\r\n\r\nSea ceteros volutpat id. Vel eu admodum quaerendum, ad mea illum atqui. Te ius justo nonumes insolens. Facilisis efficiantur intellegebat eu quo, nec at periculis deseruisse. Putant convenire ut pri, vim ad suas animal consetetur, impetus incorrupte mel at.', '1', 888, 999, 1, '2017-10-30 12:03:27', '2017-10-31 14:18:30'),
(17, 'Kitchen BGB24', 'kitchen', 'Lorem ipsum dolor sit amet, in has iriure omnesque. Eam ei nonumes delectus singulis, vel ne graece percipit, aperiri explicari incorrupte an pri. Ad salutandi explicari sea, id nec quod malis latine, docendi perpetua qui ea. Duis harum equidem pri et, at eum novum labore convenire. An vix atqui maiestatis signiferumque, duo et conceptam democritum, an eos aperiri assentior. Sensibus oportere incorrupte in vel, maiorum denique signiferumque mel et, nibh concludaturque ex pro. Vix et aliquid argumentum.\r\n\r\nSea ceteros volutpat id. Vel eu admodum quaerendum, ad mea illum atqui. Te ius justo nonumes insolens. Facilisis efficiantur intellegebat eu quo, nec at periculis deseruisse. Putant convenire ut pri, vim ad suas animal consetetur, impetus incorrupte mel at.', '1', 888, 999, 1, '2017-10-30 12:11:26', '2017-10-31 14:18:49'),
(43, 'Bar H1442', 'kitchen', 'Lorem ipsum dolor sit amet, in has iriure omnesque. Eam ei nonumes delectus singulis, vel ne graece percipit, aperiri explicari incorrupte an pri. Ad salutandi explicari sea, id nec quod malis latine, docendi perpetua qui ea. Duis harum equidem pri et, at eum novum labore convenire. An vix atqui maiestatis signiferumque, duo et conceptam democritum, an eos aperiri assentior. Sensibus oportere incorrupte in vel, maiorum denique signiferumque mel et, nibh concludaturque ex pro. Vix et aliquid argumentum.\r\n\r\nSea ceteros volutpat id. Vel eu admodum quaerendum, ad mea illum atqui. Te ius justo nonumes insolens. Facilisis efficiantur intellegebat eu quo, nec at periculis deseruisse. Putant convenire ut pri, vim ad suas animal consetetur, impetus incorrupte mel at.', '1', 888, 0, 1, '2017-10-31 15:00:09', '2017-10-31 15:00:09'),
(44, 'Office table', 'office', 'Lorem ipsum dolor sit amet, in has iriure omnesque. Eam ei nonumes delectus singulis, vel ne graece percipit, aperiri explicari incorrupte an pri. Ad salutandi explicari sea, id nec quod malis latine, docendi perpetua qui ea. Duis harum equidem pri et, at eum novum labore convenire. An vix atqui maiestatis signiferumque, duo et conceptam democritum, an eos aperiri assentior. Sensibus oportere incorrupte in vel, maiorum denique signiferumque mel et, nibh concludaturque ex pro. Vix et aliquid argumentum.\r\n\r\nSea ceteros volutpat id. Vel eu admodum quaerendum, ad mea illum atqui. Te ius justo nonumes insolens. Facilisis efficiantur intellegebat eu quo, nec at periculis deseruisse. Putant convenire ut pri, vim ad suas animal consetetur, impetus incorrupte mel at.', '2', 888, 0, 1, '2017-10-31 15:00:36', '2017-10-31 15:00:36'),
(45, 'Drawer AAM5', 'kitchen', 'Lorem ipsum dolor sit amet, in has iriure omnesque. Eam ei nonumes delectus singulis, vel ne graece percipit, aperiri explicari incorrupte an pri. Ad salutandi explicari sea, id nec quod malis latine, docendi perpetua qui ea. Duis harum equidem pri et, at eum novum labore convenire. An vix atqui maiestatis signiferumque, duo et conceptam democritum, an eos aperiri assentior. Sensibus oportere incorrupte in vel, maiorum denique signiferumque mel et, nibh concludaturque ex pro. Vix et aliquid argumentum.\r\n\r\nSea ceteros volutpat id. Vel eu admodum quaerendum, ad mea illum atqui. Te ius justo nonumes insolens. Facilisis efficiantur intellegebat eu quo, nec at periculis deseruisse. Putant convenire ut pri, vim ad suas animal consetetur, impetus incorrupte mel at.', '1', 888, NULL, 1, '2017-10-31 15:00:59', '2017-10-31 15:05:07'),
(46, 'Drawer J67', 'kitchen', 'Lorem ipsum dolor sit amet, in has iriure omnesque. Eam ei nonumes delectus singulis, vel ne graece percipit, aperiri explicari incorrupte an pri. Ad salutandi explicari sea, id nec quod malis latine, docendi perpetua qui ea. Duis harum equidem pri et, at eum novum labore convenire. An vix atqui maiestatis signiferumque, duo et conceptam democritum, an eos aperiri assentior. Sensibus oportere incorrupte in vel, maiorum denique signiferumque mel et, nibh concludaturque ex pro. Vix et aliquid argumentum.\r\n\r\nSea ceteros volutpat id. Vel eu admodum quaerendum, ad mea illum atqui. Te ius justo nonumes insolens. Facilisis efficiantur intellegebat eu quo, nec at periculis deseruisse. Putant convenire ut pri, vim ad suas animal consetetur, impetus incorrupte mel at.', '1', 777, NULL, 1, '2017-10-31 15:01:21', '2017-10-31 15:05:17'),
(47, 'Dinner table H1497', 'kitchen', 'Lorem ipsum dolor sit amet, in has iriure omnesque. Eam ei nonumes delectus singulis, vel ne graece percipit, aperiri explicari incorrupte an pri. Ad salutandi explicari sea, id nec quod malis latine, docendi perpetua qui ea. Duis harum equidem pri et, at eum novum labore convenire. An vix atqui maiestatis signiferumque, duo et conceptam democritum, an eos aperiri assentior. Sensibus oportere incorrupte in vel, maiorum denique signiferumque mel et, nibh concludaturque ex pro. Vix et aliquid argumentum.\r\n\r\nSea ceteros volutpat id. Vel eu admodum quaerendum, ad mea illum atqui. Te ius justo nonumes insolens. Facilisis efficiantur intellegebat eu quo, nec at periculis deseruisse. Putant convenire ut pri, vim ad suas animal consetetur, impetus incorrupte mel at.', '2', 888, NULL, 1, '2017-10-31 15:02:06', '2017-10-31 15:04:34'),
(48, 'Dinner table MH786', 'kitchen', 'Lorem ipsum dolor sit amet, in has iriure omnesque. Eam ei nonumes delectus singulis, vel ne graece percipit, aperiri explicari incorrupte an pri. Ad salutandi explicari sea, id nec quod malis latine, docendi perpetua qui ea. Duis harum equidem pri et, at eum novum labore convenire. An vix atqui maiestatis signiferumque, duo et conceptam democritum, an eos aperiri assentior. Sensibus oportere incorrupte in vel, maiorum denique signiferumque mel et, nibh concludaturque ex pro. Vix et aliquid argumentum.\r\n\r\nSea ceteros volutpat id. Vel eu admodum quaerendum, ad mea illum atqui. Te ius justo nonumes insolens. Facilisis efficiantur intellegebat eu quo, nec at periculis deseruisse. Putant convenire ut pri, vim ad suas animal consetetur, impetus incorrupte mel at.', '1', 888, 999, 1, '2017-10-31 15:02:40', '2017-10-31 15:09:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'valdas', '2990ab59a4a3bcc16cc455d7f943d679');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
