-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 28, 2020 at 07:15 AM
-- Server version: 8.0.22-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wallet`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(55) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `description`, `img`, `price`) VALUES
(1, 'Apple MacBook Pro', 'MacBook Pro elevates the notebook to a whole new level of performance and portability. Wherever your ideas take you, you\'ll get there faster than ever with a high-performance processor and memory, advanced graphics, blazing-fast storage, and more - all in a compact package.', '/assets/images/macbook.jpeg', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `id` int NOT NULL,
  `user_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(55) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `receipts`
--

INSERT INTO `receipts` (`id`, `user_id`, `product_id`, `amount`) VALUES
(1, '1', '1', '500'),
(2, '1', '1', '500'),
(3, '1', '1', '500'),
(4, '1', '1', '500'),
(5, '1', '1', '500'),
(6, '1', '1', '500'),
(7, '1', '1', '500'),
(8, '1', '1', '500'),
(9, '1', '1', '500'),
(10, '1', '1', '500'),
(11, '1', '1', '500'),
(12, '1', '1', '500'),
(13, '1', '1', '5000'),
(14, '1', '1', '5000'),
(15, '1', '1', '5000'),
(16, '1', '1', '5000'),
(17, '1', '1', '5000'),
(18, '1', '1', '5000'),
(19, '1', '1', '5000'),
(20, '1', '1', '5000'),
(21, '1', '1', '5000'),
(22, '1', '1', '5000'),
(23, '1', '1', '5000'),
(24, '1', '1', '5000'),
(25, '1', '1', '5000'),
(26, '1', '1', '5000'),
(27, '1', '1', '5000'),
(28, '1', '1', '5000'),
(29, '1', '1', '5000'),
(30, '1', '1', '5000'),
(31, '1', '1', '5000'),
(32, '1', '1', '5000'),
(33, '1', '1', '5000'),
(34, '1', '1', '5000'),
(35, '1', '1', '5000'),
(36, '1', '1', '5000'),
(37, '1', '1', '5000'),
(38, '1', '1', '5000'),
(39, '1', '1', '5000'),
(40, '1', '1', '5000'),
(41, '1', '1', '5000'),
(42, '1', '1', '5000'),
(43, '1', '1', '5000'),
(44, '1', '1', '5000'),
(45, '1', '1', '5000'),
(46, '1', '1', '5000'),
(47, '1', '1', '5000'),
(48, '1', '1', '5000'),
(49, '1', '1', '5000'),
(50, '1', '1', '5000'),
(51, '1', '1', '5000'),
(52, '1', '1', '5000'),
(53, '1', '1', '5000'),
(54, '1', '1', '5000'),
(55, '1', '1', '5000'),
(56, '1', '1', '5000'),
(57, '1', '1', '5000'),
(58, '1', '1', '5000'),
(59, '1', '1', '5000'),
(60, '1', '1', '5000'),
(61, '1', '1', '5000'),
(62, '1', '1', '5000'),
(63, '1', '1', '5000'),
(64, '1', '1', '5000'),
(65, '1', '1', '5000'),
(66, '1', '1', '5000'),
(67, '1', '1', '5000'),
(68, '1', '1', '5000'),
(69, '1', '1', '5000'),
(70, '1', '1', '5000'),
(71, '1', '1', '5000'),
(72, '1', '1', '5000'),
(73, '1', '1', '5000'),
(74, '1', '1', '5000'),
(75, '1', '1', '5000'),
(76, '1', '1', '5000'),
(77, '1', '1', '5000'),
(78, '1', '1', '5000'),
(79, '1', '1', '5000'),
(80, '1', '1', '5000'),
(81, '1', '1', '5000'),
(82, '1', '1', '5000'),
(83, '1', '1', '5000'),
(84, '1', '1', '5000'),
(85, '1', '1', '5000'),
(86, '1', '1', '5000'),
(87, '1', '1', '5000'),
(88, '1', '1', '5000'),
(89, '1', '1', '5000'),
(90, '1', '1', '5000'),
(91, '1', '1', '5000'),
(92, '1', '1', '5000'),
(93, '1', '1', '5000'),
(94, '1', '1', '5000'),
(95, '1', '1', '5000'),
(96, '1', '1', '5000'),
(97, '1', '1', '5000'),
(98, '1', '1', '5000'),
(99, '1', '1', '5000'),
(100, '1', '1', '5000'),
(101, '1', '1', '5000'),
(102, '1', '1', '5000'),
(103, '1', '1', '5000'),
(104, '1', '1', '5000'),
(105, '1', '1', '5000'),
(106, '1', '1', '5000'),
(107, '1', '1', '5000'),
(108, '1', '1', '5000'),
(109, '1', '1', '5000'),
(110, '1', '1', '5000'),
(111, '1', '1', '5000'),
(112, '1', '1', '5000'),
(113, '1', '1', '5000'),
(114, '1', '1', '5000'),
(115, '1', '1', '5000'),
(116, '1', '1', '5000'),
(117, '1', '1', '5000'),
(118, '1', '1', '5000'),
(119, '1', '1', '5000'),
(120, '1', '1', '5000'),
(121, '1', '1', '5000'),
(122, '1', '1', '5000'),
(123, '1', '1', '5000'),
(124, '1', '1', '5000'),
(125, '1', '1', '5000'),
(126, '1', '1', '5000'),
(127, '1', '1', '5000'),
(128, '1', '1', '5000'),
(129, '1', '1', '5000'),
(130, '1', '1', '5000'),
(131, '1', '1', '5000'),
(132, '1', '1', '5000'),
(133, '1', '1', '5000'),
(134, '1', '1', '5000'),
(135, '1', '1', '5000'),
(136, '1', '1', '5000'),
(137, '1', '1', '5000'),
(138, '1', '1', '5000'),
(139, '1', '1', '5000'),
(140, '1', '1', '5000'),
(141, '1', '1', '5000'),
(142, '1', '1', '5000'),
(143, '1', '1', '5000'),
(144, '1', '1', '5000'),
(145, '1', '1', '5000'),
(146, '1', '1', '5000'),
(147, '1', '1', '5000'),
(148, '1', '1', '5000'),
(149, '1', '1', '5000'),
(150, '1', '1', '5000'),
(151, '1', '1', '5000'),
(152, '1', '1', '5000'),
(153, '1', '1', '5000'),
(154, '1', '1', '5000'),
(155, '1', '1', '5000'),
(156, '1', '1', '5000'),
(157, '1', '1', '5000'),
(158, '1', '1', '5000'),
(159, '1', '1', '5000'),
(160, '1', '1', '5000'),
(161, '1', '1', '5000'),
(162, '1', '1', '5000'),
(163, '1', '1', '5000'),
(164, '1', '1', '5000'),
(165, '1', '1', '5000'),
(166, '1', '1', '5000'),
(167, '1', '1', '5000'),
(168, '1', '1', '5000'),
(169, '1', '1', '5000'),
(170, '1', '1', '5000'),
(171, '1', '1', '5000'),
(172, '1', '1', '5000'),
(173, '1', '1', '5000'),
(174, '1', '1', '5000'),
(175, '1', '1', '5000'),
(176, '1', '1', '5000'),
(177, '1', '1', '5000'),
(178, '1', '1', '5000'),
(179, '1', '1', '5000'),
(180, '1', '1', '5000'),
(181, '1', '1', '5000'),
(182, '1', '1', '5000'),
(183, '1', '1', '5000'),
(184, '1', '1', '5000'),
(185, '1', '1', '5000'),
(186, '1', '1', '5000'),
(187, '1', '1', '5000'),
(188, '1', '1', '5000'),
(189, '1', '1', '5000'),
(190, '1', '1', '5000'),
(191, '1', '1', '5000'),
(192, '1', '1', '5000'),
(193, '1', '1', '5000'),
(194, '1', '1', '5000'),
(195, '1', '1', '5000'),
(196, '1', '1', '5000'),
(197, '1', '1', '5000'),
(198, '1', '1', '5000'),
(199, '1', '1', '5000'),
(200, '1', '1', '5000'),
(201, '1', '1', '5000'),
(202, '1', '1', '5000'),
(203, '1', '1', '5000'),
(204, '1', '1', '5000'),
(205, '1', '1', '5000'),
(206, '1', '1', '5000'),
(207, '1', '1', '5000'),
(208, '1', '1', '5000'),
(209, '1', '1', '5000'),
(210, '1', '1', '5000'),
(211, '1', '1', '5000'),
(212, '1', '1', '5000'),
(213, '1', '1', '5000'),
(214, '1', '1', '5000'),
(215, '1', '1', '5000'),
(216, '1', '1', '5000'),
(217, '1', '1', '5000'),
(218, '1', '1', '5000'),
(219, '1', '1', '5000'),
(220, '1', '1', '5000'),
(221, '1', '1', '5000'),
(222, '1', '1', '5000'),
(223, '1', '1', '5000'),
(224, '1', '1', '5000'),
(225, '1', '1', '5000'),
(226, '1', '1', '5000'),
(227, '1', '1', '5000'),
(228, '1', '1', '5000'),
(229, '1', '1', '5000'),
(230, '1', '1', '5000'),
(231, '1', '1', '5000'),
(232, '1', '1', '5000'),
(233, '1', '1', '5000'),
(234, '1', '1', '5000'),
(235, '1', '1', '5000'),
(236, '1', '1', '5000'),
(237, '1', '1', '5000'),
(238, '1', '1', '5000'),
(239, '1', '1', '5000'),
(240, '1', '1', '5000'),
(241, '1', '1', '5000'),
(242, '1', '1', '5000'),
(243, '1', '1', '5000'),
(244, '1', '1', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `purchases` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `purchases`) VALUES
(1, 'artean', 'ART', 0),
(2, 'shadman', 'kolah', 10);

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `id` int NOT NULL,
  `user_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`id`, `user_id`, `amount`) VALUES
(1, '1', '829000'),
(2, '2', '10000510');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;