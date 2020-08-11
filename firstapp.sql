-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 12:38 PM
-- Server version: 10.4.11-MariaDB
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
-- Database: `firstapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_histories`
--

CREATE TABLE `login_histories` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `logged_at` timestamp NULL DEFAULT NULL,
  `logged_out_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login_histories`
--

INSERT INTO `login_histories` (`id`, `user_id`, `logged_at`, `logged_out_at`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-08-03 00:28:52', NULL, '2020-08-03 00:28:52', '2020-08-03 00:28:52'),
(2, 1, '2020-08-03 00:29:24', '2020-08-03 00:29:41', '2020-08-03 00:29:24', '2020-08-03 00:29:41'),
(3, 1, '2020-08-03 00:29:49', '2020-08-03 00:30:03', '2020-08-03 00:29:49', '2020-08-03 00:30:03'),
(4, 2, '2020-08-03 00:30:54', NULL, '2020-08-03 00:30:54', '2020-08-03 00:30:54'),
(5, 3, '2020-08-03 00:34:50', NULL, '2020-08-03 00:34:50', '2020-08-03 00:34:50'),
(6, 4, '2020-08-03 00:36:47', NULL, '2020-08-03 00:36:47', '2020-08-03 00:36:47'),
(7, 1, '2020-08-03 08:28:46', '2020-08-03 08:29:31', '2020-08-03 08:28:46', '2020-08-03 08:29:31'),
(8, 1, '2020-08-03 08:30:12', NULL, '2020-08-03 08:30:12', '2020-08-03 08:30:12');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_11_121146_add_sign_in_at_to_users', 1),
(5, '2020_07_11_124135_add_current_in_at_to_users', 1),
(6, '2020_07_11_142137_add_logged_out_at_to_users', 1),
(11, '2020_07_11_164051_add_img_url_to_users', 2),
(12, '2020_07_12_055101_add_lockout_time_to_users_table', 2),
(13, '2020_07_14_043702_add_job_title_to_users', 2),
(14, '2020_07_14_043740_add_gender_to_users', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lockout_at` int(11) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobTitle` int(11) NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `current_sign_in_at` timestamp NULL DEFAULT NULL,
  `last_sign_in_at` timestamp NULL DEFAULT NULL,
  `img_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'not.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `lockout_at`, `email_verified_at`, `password`, `jobTitle`, `gender`, `remember_token`, `created_at`, `updated_at`, `current_sign_in_at`, `last_sign_in_at`, `img_url`) VALUES
(1, 'Rusiru Ashan Kulathunga', 'rusiruofficial@gmail.com', 0, NULL, '$2y$10$g69L3H/Xr0EQDDJ1FjT.bedsVvtOVu5d6/rrUoosMVxRjB4pLbine', 1, 'M', NULL, '2020-08-03 00:28:52', '2020-08-03 08:31:09', '2020-08-03 08:30:12', '2020-08-03 08:28:46', 'amazon-logo-vector-png-amazon-logo-vector-512_1596463269.png'),
(2, 'my', 'my@gmail.com', 0, NULL, '$2y$10$2TbtnplZwHe4K.eiRQKNJeZaXsLlf6Qyu6ALycz80.yZKuadfM0Ay', 2, 'F', NULL, '2020-08-03 00:30:54', '2020-08-03 00:30:54', NULL, NULL, 'not.jpg'),
(3, 'my2', 'my1@gmail.com', 0, NULL, '$2y$10$F1uyQ97BQFne8nJqK9vsi.sw2H.6Xrnb8qIPKjMUNwNjtg.Ix7rCa', 2, 'F', NULL, '2020-08-03 00:34:50', '2020-08-03 00:34:50', NULL, NULL, 'not.jpg'),
(4, 'my3', 'my3@gmail.com', 0, NULL, '$2y$10$b/G30xRm.0jWnbevY8UNWumzVKFGbkBGsliAucD4rGvQPr4D3mXP2', 2, 'M', NULL, '2020-08-03 00:36:47', '2020-08-03 00:36:47', NULL, NULL, 'not.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_histories`
--
ALTER TABLE `login_histories`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_histories`
--
ALTER TABLE `login_histories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
