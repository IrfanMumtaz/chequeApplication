-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2017 at 10:45 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conceptre`
--

-- --------------------------------------------------------

--
-- Table structure for table `cheques`
--

CREATE TABLE `cheques` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `amount` double(15,2) NOT NULL,
  `amount_inwords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cheques`
--

INSERT INTO `cheques` (`id`, `name`, `date`, `amount`, `amount_inwords`, `approved`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Irfan Mumtaz', '2017-02-09', 50000.00, 'fifty thousand', 1, NULL, '2017-02-09 19:25:00', '2017-02-09 19:25:00'),
(2, 'Irfan Mumtaz', '2017-02-02', 50000.00, 'fifty thousand', 1, NULL, '2017-02-09 19:25:15', '2017-02-09 19:25:15'),
(3, 'Irfan Mumtaz', '2017-02-21', 50000.00, 'fifty thousand', 1, NULL, '2017-02-09 19:41:48', '2017-02-09 19:41:48'),
(4, 'Imran Mumtaz', '2017-02-12', 50000.00, 'fifty thousand', 1, NULL, '2017-02-09 19:43:29', '2017-02-09 19:43:29'),
(5, 'asd343434', '2017-02-14', 50000.00, 'fifty thousand', 0, NULL, '2017-02-09 19:47:35', '2017-02-09 19:47:35'),
(6, 'Irfan Mumtaz', '2017-02-20', 50000.00, 'fifty thousand', 1, NULL, '2017-02-09 19:50:34', '2017-02-09 19:50:34'),
(7, 'Irfan Mumtaz', '2017-02-21', 50000.00, 'fifty thousand', 1, NULL, '2017-02-09 19:51:36', '2017-02-09 19:51:36'),
(8, 'Irfan Mumtaz', '2017-02-14', 50000.00, 'fifty thousand', 1, NULL, '2017-02-09 20:02:39', '2017-02-09 20:02:39'),
(9, 'Irfan Mumtaz', '2017-02-21', 50000.00, 'fifty thousand', 1, NULL, '2017-02-09 20:03:29', '2017-02-09 20:03:29'),
(10, 'iffi', '2017-02-01', 50000.00, 'fifty thousand', 1, NULL, '2017-02-09 20:03:45', '2017-02-09 20:03:45'),
(11, 'Irfan Mumtaz', '2017-02-16', 5000.00, 'five thousand only', 0, NULL, '2017-02-10 16:32:11', '2017-02-10 16:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_02_09_222039_cheques', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_level` int(11) NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_level`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Irfan Mumtaz', 'livesimpathy@yahoo.com', 1, '$2y$10$gVLnmsUr.hbuu6eA/XvQ9.WqaA7VYfpGM3Nymc91SONBSwYI7jPLu', 'oWq2msMZYLVN9hqFrb1xBsvN6wfct3WBENMAsfvkdvcB9P9wkW5U6vSlz6B5', '2017-02-09 15:20:00', '2017-02-09 15:20:00'),
(2, 'Imran Mumtaz', 'livesimpathy@gmail.com', 0, '$2y$10$VnI/WqxNPUFrhCHag6RIaOFTFuhMovHLGz7ZgDOGFPbUiFwWkodPy', NULL, '2017-02-10 16:27:30', '2017-02-10 16:27:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cheques`
--
ALTER TABLE `cheques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cheques`
--
ALTER TABLE `cheques`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
