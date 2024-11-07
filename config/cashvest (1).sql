-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 07, 2024 at 07:50 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cashvest`
--

-- --------------------------------------------------------

--
-- Table structure for table `site_setup`
--

CREATE TABLE `site_setup` (
  `id` int NOT NULL,
  `base_url` varchar(255) NOT NULL,
  `public_url` varchar(255) NOT NULL,
  `site_title` varchar(255) NOT NULL,
  `site_url` varchar(255) NOT NULL,
  `site_logo` varchar(255) NOT NULL,
  `meta_keywords` text,
  `meta_desc` text,
  `gmail_account` varchar(255) DEFAULT NULL,
  `gmail_password` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `sent_from_address` varchar(255) DEFAULT NULL,
  `reply_to_address` varchar(255) DEFAULT NULL,
  `enabled_withdrawal` tinyint(1) DEFAULT '0',
  `enabled_deposit` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `site_setup`
--

INSERT INTO `site_setup` (`id`, `base_url`, `public_url`, `site_title`, `site_url`, `site_logo`, `meta_keywords`, `meta_desc`, `gmail_account`, `gmail_password`, `email_address`, `sent_from_address`, `reply_to_address`, `enabled_withdrawal`, `enabled_deposit`) VALUES
(1, 'http://new_dashboard_hush.test/', 'http://new_dashboard_hush.test/', 'My Site', 'http://localhost/your-project', 'logo.png', 'keyword1, keyword2, keyword3', 'Description of the site.', 'your-email@gmail.com', 'your-gmail-password', 'info@your-site.com', 'no-reply@your-site.com', 'no-reply@your-site.com', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `account_info` json DEFAULT NULL,
  `finance_info` json DEFAULT NULL,
  `KYC_info` json DEFAULT NULL,
  `user_ip` varchar(45) NOT NULL,
  `last_login_ip` varchar(45) NOT NULL,
  `last_login_date` datetime NOT NULL,
  `browser_data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `account_info`, `finance_info`, `KYC_info`, `user_ip`, `last_login_ip`, `last_login_date`, `browser_data`) VALUES
(25, '{\"email\": \"qagu@mailinator.com\", \"lastname\": \"Barron\", \"password\": \"$2y$10$V7wQF65ASrvSLYNbl750FuHVavwO5UaXfUicrB4cNKY/dk12bNcZK\", \"usertype\": \"user\", \"firstname\": \"Echo\"}', NULL, NULL, '127.0.0.1', '127.0.0.1', '2024-11-07 02:07:49', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36'),
(26, '{\"email\": \"samuelpeter205@gmail.com\", \"lastname\": \"Peter\", \"password\": \"$2y$10$haBYEeTLbrFlCE2zngxU3.r1drVgyY9GTEoNLOtL3gnfTA40lz7n6\", \"usertype\": \"user\", \"firstname\": \"Samuel\"}', NULL, NULL, '127.0.0.1', '127.0.0.1', '2024-11-07 02:17:10', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36'),
(27, '{\"email\": \"xagotuzyri@mailinator.com\", \"lastname\": \"Hensley\", \"password\": \"$2y$10$d/B2qW6iVGCHYgQwB5Zw3e.7BIJWBraO03JnEWZFkvbxSasFMRZyu\", \"usertype\": \"user\", \"firstname\": \"Brett\"}', NULL, NULL, '127.0.0.1', '127.0.0.1', '2024-11-07 02:13:02', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36'),
(28, '{\"email\": \"nilepijaq@mailinator.com\", \"lastname\": \"Leblanc\", \"password\": \"$2y$10$ye8pzmDuoCeeoorJs9.AZelhfO0jUw3ZZ.UyaG/wgVmD5jZj8QZTS\", \"usertype\": \"user\", \"firstname\": \"Darryl\"}', NULL, NULL, '127.0.0.1', '127.0.0.1', '2024-11-07 02:16:37', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `site_setup`
--
ALTER TABLE `site_setup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `site_setup`
--
ALTER TABLE `site_setup`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
