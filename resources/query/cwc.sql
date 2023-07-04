-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2023 at 09:01 AM
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
-- Database: `cwc`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `degree` varchar(256) DEFAULT NULL,
  `subject` varchar(256) DEFAULT NULL,
  `institute` varchar(256) DEFAULT NULL,
  `pass_year` int(11) DEFAULT NULL,
  `duration` varchar(256) DEFAULT NULL,
  `remark` varchar(256) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `emp_id`, `degree`, `subject`, `institute`, `pass_year`, `duration`, `remark`, `created_at`, `updated_at`) VALUES
(2, 38, 'ksmckscms', 'kefkna', 'kkae', 2025, 'cnjnc', 'dxknckndc', '2023-06-27', '2023-06-28'),
(3, 39, 'kkk', 'jjjj', 'nnn', 999, 'hhh', 'hhh', '2023-06-28', '2023-06-28'),
(4, 42, 'ldcmlsc', NULL, NULL, NULL, NULL, NULL, '2023-06-28', '2023-06-28');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(512) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(27, 'new@user', '22af645d1859cb5ca6da0c484f1f37ea', '2023-06-23', '2023-06-23'),
(38, 'jiya@abc', '900150983cd24fb0d6963f7d28e17f72', '2023-06-27', '2023-06-27'),
(39, 'newuser', '81dc9bdb52d04dc20036dbd8313ed055', '2023-06-28', '2023-06-28'),
(42, 'newuser2', '202cb962ac59075b964b07152d234b70', '2023-06-28', '2023-06-28');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `firstname` varchar(256) DEFAULT NULL,
  `lastname` varchar(256) DEFAULT NULL,
  `emp_code` int(11) DEFAULT NULL,
  `department` varchar(256) DEFAULT NULL,
  `designation` varchar(256) DEFAULT NULL,
  `organisation` varchar(256) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `state` varchar(256) DEFAULT NULL,
  `district` varchar(256) DEFAULT NULL,
  `pincode` int(10) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `fax` int(20) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `emp_id`, `firstname`, `lastname`, `emp_code`, `department`, `designation`, `organisation`, `phone`, `address`, `state`, `district`, `pincode`, `email`, `fax`, `created_at`, `updated_at`) VALUES
(1, 27, 'kdncksdc', 'abcd', 12344, 'sjcnjcnj', 'cnfnvkjsln', 'wndejned', '018373747', '48848484', '49844894', 'jfirjfirjfir', 29929292, 'kaavya@bar', 6, '2023-06-23', '2023-06-27'),
(3, 38, 'jiya', '1234', 1234, 'cse', 'sde', 'kmck', '13493484', 'jfnvjnf', 'cknfk', 'fjwnfjfjwr', 93292, 'kaavya@bar', 23322, '2023-06-27', '2023-06-28'),
(4, 39, 'new', 'user', 91929, 'dcjdc', 'jncdjcn', 'jdcj', '2992999', 'jncj', 'djncjdcn', 'jnscjnc', 19919, 'djjdjd@sks', 292, '2023-06-28', '2023-06-28'),
(5, 42, 'abc', 'kkk', 84848, 'wijiwd', 'xsnxjsn', 'dhnuwd', '9444', 'vfnnv', 'jjjj', 'cmmcm', 9393, 'djjd@hk', 20, '2023-06-28', '2023-06-28');

-- --------------------------------------------------------

--
-- Table structure for table `professional`
--

CREATE TABLE `professional` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `post` varchar(256) DEFAULT NULL,
  `office` varchar(256) DEFAULT NULL,
  `city` varchar(256) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `type_of_charge` varchar(256) DEFAULT NULL,
  `work_handled` varchar(256) DEFAULT NULL,
  `contri` varchar(256) DEFAULT NULL,
  `remark` varchar(256) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `professional`
--

INSERT INTO `professional` (`id`, `emp_id`, `post`, `office`, `city`, `start_date`, `end_date`, `type_of_charge`, `work_handled`, `contri`, `remark`, `created_at`, `updated_at`) VALUES
(2, 38, 'intern', 'ncknd', 'dmckc', '2023-06-23', '2023-06-30', 'ksmcks', 'sjnxjsxn', 'abcd', 'skmxsk', '2023-06-27 00:00:00', '2023-06-27 00:00:00'),
(3, 39, 'jjj', 'jjjj', 'jjjj', '2023-06-29', '2023-07-06', 'jxjxj', 'jxjxj', 'isjis', 'sjnsjn', '2023-06-28 10:40:53', '2023-06-28 10:42:29'),
(4, 42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-28 12:06:38', '2023-06-28 12:06:38');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `t_start` date NOT NULL,
  `t_end` date NOT NULL,
  `circular` varchar(512) NOT NULL,
  `department` varchar(256) NOT NULL,
  `organiser` varchar(256) NOT NULL,
  `t_desc` varchar(256) NOT NULL,
  `t_type` varchar(256) NOT NULL,
  `t_place` varchar(256) NOT NULL,
  `speaker` varchar(256) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id`, `title`, `t_start`, `t_end`, `circular`, `department`, `organiser`, `t_desc`, `t_type`, `t_place`, `speaker`, `created_at`, `updated_at`) VALUES
(1, 'cloud training', '2023-06-16', '2023-06-19', 'test.php', 'computer science', 'dr. abcd', 'train students in cloud tech', 'offline', 'jiit', 'xyz', NULL, NULL),
(5, 'web', '2023-06-16', '2023-06-20', '', 'sjdn', ',dmnc', 'dvgsgc', 'sgga', 'gadv', 'ghadv', NULL, NULL),
(7, 'Machine learning & AI', '2023-06-17', '2023-06-19', '', 'AI', 'jjjj', 'ssss', 'ooo', 'gggg', 'rwko', NULL, NULL),
(8, 'google cloud', '2023-06-17', '2023-06-23', 'Resume-Vaibhav Jaiswal.pdf', 'sxncj', 'kasmk', 'this', 'skmkm', 'ndcc cnn', 'sckskc', NULL, NULL),
(12, 'new', '2023-06-16', '2023-06-23', 'FINAL450.xlsx', 'kemfke', 'wkdnkwn', 'kmdkw', 'mkkm', 'mkk', 'kkkkk', '2023-06-28 11:20:09', '2023-06-28 11:20:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_education` (`emp_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_personal` (`emp_id`);

--
-- Indexes for table `professional`
--
ALTER TABLE `professional`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_professional` (`emp_id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `professional`
--
ALTER TABLE `professional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `fk_education` FOREIGN KEY (`emp_id`) REFERENCES `login` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `fk_personal` FOREIGN KEY (`emp_id`) REFERENCES `login` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `professional`
--
ALTER TABLE `professional`
  ADD CONSTRAINT `fk_professional` FOREIGN KEY (`emp_id`) REFERENCES `login` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
