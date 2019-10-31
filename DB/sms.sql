-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 01:10 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(10) UNSIGNED NOT NULL,
  `s_roll_no` int(10) UNSIGNED NOT NULL,
  `maths` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `science` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `english` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `s_roll_no`, `maths`, `science`, `english`, `created_at`, `updated_at`) VALUES
(1, 121, '67', '87', '78', '2018-08-17 19:44:50', '2018-08-17 20:33:26'),
(8, 156, '66', '88', '77', '2018-08-17 21:42:35', '2018-08-23 04:37:58'),
(10, 124, NULL, NULL, NULL, '2018-08-23 04:00:39', '2018-08-23 04:00:39'),
(19, 2, '67', '87', '78', '2018-08-23 04:30:30', '2018-08-23 04:30:30'),
(20, 15, '67', '87', '78', '2018-08-23 04:31:12', '2018-08-23 04:31:12'),
(21, 54, NULL, NULL, NULL, '2018-08-23 04:36:04', '2018-08-23 04:36:04'),
(22, 65, '67', '87', '78', '2018-08-23 04:36:21', '2018-08-23 04:36:21'),
(24, 121568, NULL, NULL, NULL, '2018-08-23 06:34:34', '2018-08-23 06:34:34'),
(25, 550, NULL, NULL, NULL, '2018-08-23 06:35:35', '2018-08-23 06:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_17_155057_create_marks_table', 1),
(4, '2018_08_17_162632_create_students_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL,
  `category` varchar(20) NOT NULL,
  `publish` varchar(5) NOT NULL,
  `type` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `category`, `publish`, `type`, `created_at`, `updated_at`) VALUES
(52, 'New', 'New', 'IMG-20160410-WA0047.jpg', 'abc', 'yes', 'a,b', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'Last', 'Last', 'IMG-20160410-WA0048.jpg', 'abc', 'yes', 'a', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `roll_no` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `roll_no`, `first_name`, `last_name`, `dob`, `gender`, `class`, `image`, `created_at`, `updated_at`) VALUES
(4, 12, 'a', 'abc', '2018-11-01', 'male', '1', '1535015776.png', '2018-08-17 19:57:16', '2018-08-23 03:46:16'),
(5, 45, 'a', 'abc', '2018-01-01', 'male', '1', '1535015782.jpg', '2018-08-17 21:22:45', '2018-08-23 03:46:22'),
(6, 1231, 'a', 'abc', '2015-11-02', 'male', '1', '1535015789.jpg', '2018-08-17 21:49:30', '2018-08-23 03:46:29'),
(7, 121, 'qqqq', 'qqqq', '2018-08-22', 'male', '1', NULL, '2018-08-23 03:53:07', '2018-08-23 03:53:07'),
(8, 124, 'a', 'a', '2015-04-29', 'male', '1', NULL, '2018-08-23 04:00:39', '2018-08-23 04:00:39'),
(9, 1222, 'qqqq', 'qqqq', '2019-01-02', 'male', '1', NULL, '2018-08-23 04:03:37', '2018-08-23 04:03:37'),
(10, 1221, 'qqqq', 'qqqq', '2018-01-01', 'male', '1', NULL, '2018-08-23 04:04:37', '2018-08-23 04:04:37'),
(11, 12111, 'qqqq', 'qqqq', '2018-01-01', 'male', '1', NULL, '2018-08-23 04:11:34', '2018-08-23 04:11:34'),
(12, 12121, 'qqqq', 'qqqq', '2018-01-01', 'male', '1', NULL, '2018-08-23 04:14:21', '2018-08-23 04:14:21'),
(13, 1213, 'qqqq', 'qqqq', '2018-01-01', 'male', '1', NULL, '2018-08-23 04:15:01', '2018-08-23 04:15:01'),
(14, 1223, 'qqqq', 'qqqq', '2018-01-01', 'male', '1', NULL, '2018-08-23 04:15:54', '2018-08-23 04:15:54'),
(15, 12211, 'qqqq', 'qqqq', '2018-01-01', 'male', '1', NULL, '2018-08-23 04:17:10', '2018-08-23 04:17:10'),
(16, 54, 'qqqq', 'qqqq', '2018-01-01', 'male', '1', NULL, '2018-08-23 04:36:04', '2018-08-23 04:36:04'),
(17, 121568, 'qqqqq', 'qqqqq', '2018-01-01', 'male', '1', NULL, '2018-08-23 06:34:34', '2018-08-23 06:34:34'),
(18, 550, 'mor', 'mor', '2018-08-22', 'female', '2', NULL, '2018-08-23 06:35:35', '2018-10-02 07:49:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'abc', 'abc@gmail.com', '$2y$10$kcN7JkOACCwd/7kbHvesieFeNLDyyEpTu4Em79dP7KJX/LQ4z2KRW', '0uhV5gnSs2FPo6Hq9PwFMhb1gI2HsoQoMCF80OsOYAVvsdqh22Af1aPycL8g', '2018-08-17 19:38:39', '2018-08-17 19:38:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
