-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 07:19 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpform`
--

-- --------------------------------------------------------

--
-- Table structure for table `myguests`
--

CREATE TABLE `myguests` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(6) UNSIGNED NOT NULL,
  `Name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `Name`, `email`, `password`, `address`, `reg_date`) VALUES
(1, '', '', '', '', '2021-11-03 18:22:10'),
(2, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-03 18:22:47'),
(3, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-03 18:24:51'),
(4, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-03 18:42:59'),
(6, 'Mohsin', 'alia@gmail.com', '', 'muridke', '2021-11-06 07:38:56'),
(7, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-03 18:46:32'),
(8, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-03 18:48:09'),
(9, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-03 18:48:52'),
(10, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-03 18:55:50'),
(11, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-03 18:56:17'),
(12, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-03 19:05:14'),
(13, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-03 19:05:44'),
(14, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-03 19:16:09'),
(15, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-03 19:17:47'),
(16, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-03 19:18:19'),
(17, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-03 20:34:09'),
(18, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-03 20:34:32'),
(19, 'Aliazeeshan', 'alia@gmail.com', '', 'muridke', '2021-11-03 20:35:03'),
(20, 'ihihihihihhi', 'alia@gmail.com', '', 'muridke', '2021-11-03 20:36:10'),
(21, '', '', '', '', '2021-11-04 20:02:49'),
(22, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-04 20:10:24'),
(23, '', '', '', '', '2021-11-06 06:49:01'),
(24, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 06:50:03'),
(25, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 06:55:45'),
(26, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 06:55:45'),
(27, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 06:57:49'),
(28, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 06:57:49'),
(29, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 06:58:15'),
(30, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 06:58:15'),
(31, 'Alia', 'alia@gmail.com', '', '', '2021-11-06 06:58:35'),
(32, 'Alia', 'alia@gmail.com', '', '', '2021-11-06 06:58:35'),
(33, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 07:31:38'),
(34, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 07:31:38'),
(35, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 07:32:33'),
(36, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 07:32:33'),
(37, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 07:36:21'),
(38, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 07:36:21'),
(39, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 07:36:59'),
(40, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 07:36:59'),
(41, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 07:38:56'),
(42, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 07:38:56'),
(43, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 07:48:38'),
(44, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 07:48:39'),
(45, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 07:57:15'),
(46, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 07:57:15'),
(47, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 08:03:47'),
(48, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 08:03:47'),
(49, 'john', 'john@example.com', '', 'mrd', '2021-11-06 08:03:47'),
(50, 'Mary', 'mary@example.com', '', 'lhr', '2021-11-06 08:03:47'),
(51, 'Julie', 'julie@example.com', '', 'fslabd', '2021-11-06 08:03:47'),
(52, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 08:05:14'),
(53, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 08:05:14'),
(54, 'john', 'john@example.com', '', 'mrd', '2021-11-06 08:05:14'),
(55, 'Mary', 'mary@example.com', '', 'lhr', '2021-11-06 08:05:14'),
(56, 'Julie', 'julie@example.com', '', 'fslabd', '2021-11-06 08:05:14'),
(57, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 08:05:30'),
(58, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 08:05:30'),
(59, 'john', 'john@example.com', '', 'mrd', '2021-11-06 08:05:30'),
(60, 'Mary', 'mary@example.com', '', 'lhr', '2021-11-06 08:05:30'),
(61, 'Julie', 'julie@example.com', '', 'fslabd', '2021-11-06 08:05:31'),
(62, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 08:05:52'),
(63, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 08:05:52'),
(64, 'john', 'john@example.com', '', 'mrd', '2021-11-06 08:05:52'),
(65, 'Mary', 'mary@example.com', '', 'lhr', '2021-11-06 08:05:52'),
(66, 'Julie', 'julie@example.com', '', 'fslabd', '2021-11-06 08:05:52'),
(67, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 08:06:16'),
(68, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 08:06:16'),
(69, 'john', 'john@example.com', '', 'mrd', '2021-11-06 08:06:16'),
(70, 'Mary', 'mary@example.com', '', 'lhr', '2021-11-06 08:06:16'),
(71, 'Julie', 'julie@example.com', '', 'fslabd', '2021-11-06 08:06:16'),
(72, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 08:07:04'),
(73, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 08:07:04'),
(74, 'john', 'john@example.com', '', 'mrd', '2021-11-06 08:07:04'),
(75, 'Mary', 'mary@example.com', '', 'lhr', '2021-11-06 08:07:04'),
(76, 'Julie', 'julie@example.com', '', 'fslabd', '2021-11-06 08:07:04'),
(77, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 08:07:28'),
(78, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 08:07:28'),
(79, 'john', 'john@example.com', '', 'mrd', '2021-11-06 08:07:28'),
(80, 'Mary', 'mary@example.com', '', 'lhr', '2021-11-06 08:07:28'),
(81, 'Julie', 'julie@example.com', '', 'fslabd', '2021-11-06 08:07:28'),
(82, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 08:13:40'),
(83, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 08:13:40'),
(84, 'john', 'john@example.com', '', 'mrd', '2021-11-06 08:13:40'),
(85, 'Mary', 'mary@example.com', '', 'lhr', '2021-11-06 08:13:40'),
(86, 'Julie', 'julie@example.com', '', 'fslabd', '2021-11-06 08:13:40'),
(87, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 08:16:02'),
(88, 'Alia', 'alia@gmail.com', '', 'muridke', '2021-11-06 08:16:03'),
(89, 'john', 'john@example.com', '', 'mrd', '2021-11-06 08:16:03'),
(90, 'Mary', 'mary@example.com', '', 'lhr', '2021-11-06 08:16:03'),
(91, 'Julie', 'julie@example.com', '', 'fslabd', '2021-11-06 08:16:03'),
(92, '', '', '', '', '2021-11-08 07:37:30'),
(93, '', '', '', '', '2021-11-08 07:37:30'),
(94, 'john', 'john@example.com', '', 'mrd', '2021-11-08 07:37:31'),
(95, 'Mary', 'mary@example.com', '', 'lhr', '2021-11-08 07:37:31'),
(96, 'Julie', 'julie@example.com', '', 'fslabd', '2021-11-08 07:37:31'),
(97, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-08 07:39:20'),
(98, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-08 07:39:20'),
(99, 'john', 'john@example.com', '', 'mrd', '2021-11-08 07:39:20'),
(100, 'Mary', 'mary@example.com', '', 'lhr', '2021-11-08 07:39:20'),
(101, 'Julie', 'julie@example.com', '', 'fslabd', '2021-11-08 07:39:20'),
(102, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-08 07:49:16'),
(103, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-08 07:49:16'),
(104, 'john', 'john@example.com', '', 'mrd', '2021-11-08 07:49:16'),
(105, 'Mary', 'mary@example.com', '', 'lhr', '2021-11-08 07:49:16'),
(106, 'Julie', 'julie@example.com', '', 'fslabd', '2021-11-08 07:49:16'),
(107, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-08 07:52:21'),
(108, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-08 07:52:21'),
(109, 'john', 'john@example.com', '', 'mrd', '2021-11-08 07:52:21'),
(110, 'Mary', 'mary@example.com', '', 'lhr', '2021-11-08 07:52:21'),
(111, 'Julie', 'julie@example.com', '', 'fslabd', '2021-11-08 07:52:21'),
(112, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-08 07:52:53'),
(113, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-08 07:52:53'),
(114, 'john', 'john@example.com', '', 'mrd', '2021-11-08 07:52:53'),
(115, 'Mary', 'mary@example.com', '', 'lhr', '2021-11-08 07:52:53'),
(116, 'Julie', 'julie@example.com', '', 'fslabd', '2021-11-08 07:52:53'),
(117, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-08 07:54:17'),
(118, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-08 07:54:17'),
(119, 'john', 'john@example.com', '', 'mrd', '2021-11-08 07:54:17'),
(120, 'Mary', 'mary@example.com', '', 'lhr', '2021-11-08 07:54:17'),
(121, 'Julie', 'julie@example.com', '', 'fslabd', '2021-11-08 07:54:17'),
(122, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-08 07:54:28'),
(123, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-08 07:54:28'),
(124, 'john', 'john@example.com', '', 'mrd', '2021-11-08 07:54:28'),
(125, 'Mary', 'mary@example.com', '', 'lhr', '2021-11-08 07:54:28'),
(126, 'Julie', 'julie@example.com', '', 'fslabd', '2021-11-08 07:54:28'),
(127, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-08 07:54:36'),
(128, 'alia', 'alia@gmail.com', '', 'muridke', '2021-11-08 07:54:36'),
(129, 'john', 'john@example.com', '', 'mrd', '2021-11-08 07:54:36'),
(130, 'Mary', 'mary@example.com', '', 'lhr', '2021-11-08 07:54:36'),
(131, 'Julie', 'julie@example.com', '', 'fslabd', '2021-11-08 07:54:36'),
(133, '', '', '', '', '2021-11-12 07:07:48'),
(134, 'john', 'john@example.com', '', 'mrd', '2021-11-12 07:07:48'),
(135, 'Mary', 'mary@example.com', '', 'lhr', '2021-11-12 07:07:48'),
(136, 'Julie', 'julie@example.com', '', 'fslabd', '2021-11-12 07:07:49'),
(137, '', '', '', '', '2021-11-12 07:16:09'),
(138, '', '', '', '', '2021-11-12 07:16:09'),
(139, 'john', 'john@example.com', '', 'mrd', '2021-11-12 07:16:09'),
(140, 'Mary', 'mary@example.com', '', 'lhr', '2021-11-12 07:16:09'),
(141, 'Julie', 'julie@example.com', '', 'fslabd', '2021-11-12 07:16:10'),
(142, '', '', '', '', '2021-11-12 07:18:11'),
(143, '', '', '', '', '2021-11-12 07:18:11'),
(144, 'john', 'john@example.com', '', 'mrd', '2021-11-12 07:18:11'),
(145, 'Mary', 'mary@example.com', '', 'lhr', '2021-11-12 07:18:11'),
(146, 'Julie', 'julie@example.com', '', 'fslabd', '2021-11-12 07:18:11'),
(147, 'kanwal', 'alia@gmail.com', '', 'lahore', '2021-11-12 07:18:46'),
(148, 'kanwal', 'alia@gmail.com', '', 'lahore', '2021-11-12 07:18:47'),
(149, 'john', 'john@example.com', '', 'mrd', '2021-11-12 07:18:47'),
(150, 'Mary', 'mary@example.com', '', 'lhr', '2021-11-12 07:18:47'),
(151, 'Julie', 'julie@example.com', '', 'fslabd', '2021-11-12 07:18:47'),
(152, '', '', '', '', '2021-11-17 17:42:04'),
(153, '', '', '', '', '2021-11-17 17:42:07'),
(154, 'john', 'john@example.com', '', 'mrd', '2021-11-17 17:42:08'),
(155, 'Mary', 'mary@example.com', '', 'lhr', '2021-11-17 17:42:09'),
(156, 'Julie', 'julie@example.com', '', 'fslabd', '2021-11-17 17:42:09'),
(157, '', '', '', '', '2021-11-17 17:45:10'),
(158, '', '', '', '', '2021-11-17 17:45:10'),
(159, 'john', 'john@example.com', '', 'mrd', '2021-11-17 17:45:11'),
(160, 'Mary', 'mary@example.com', '', 'lhr', '2021-11-17 17:45:12'),
(161, 'Julie', 'julie@example.com', '', 'fslabd', '2021-11-17 17:45:12'),
(162, '', '', '', 'muridke', '2021-11-17 17:46:02'),
(163, '', '', '', 'muridke', '2021-11-17 17:46:02'),
(164, 'john', 'john@example.com', '', 'mrd', '2021-11-17 17:46:02'),
(165, 'Mary', 'mary@example.com', '', 'lhr', '2021-11-17 17:46:03'),
(166, 'Julie', 'julie@example.com', '', 'fslabd', '2021-11-17 17:46:03');

-- --------------------------------------------------------

--
-- Table structure for table `student_form`
--

CREATE TABLE `student_form` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myguests`
--
ALTER TABLE `myguests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_form`
--
ALTER TABLE `student_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myguests`
--
ALTER TABLE `myguests`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `student_form`
--
ALTER TABLE `student_form`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
