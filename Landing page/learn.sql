-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2018 at 12:21 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `about_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'About us',
  `about_details` longtext COLLATE utf8mb4_unicode_ci,
  `about_point` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Why Us?',
  `about_status` int(11) NOT NULL DEFAULT '1',
  `about_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'front_images/about_image.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about_title`, `about_details`, `about_point`, `about_status`, `about_image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'About us', 'kdjhjksgf fgsg ', 'Why Us?', 1, 'front_images/about_image.jpg', NULL, '2018-10-17 04:12:04', NULL),
(2, 'About usdfg dg', 'sf sg', 'Why Us?dfg ', 1, 'front_images/about_image.jpg', NULL, '2018-10-17 04:11:53', NULL),
(3, 'dsfsdf', 'sdfsdfsf', 'fsfdsdf', 1, 'front_images/about_image.jpg', '2018-10-16 08:43:39', '2018-10-17 04:11:58', NULL),
(4, 'dsfsdf', 'sdfsf', 'sdfsf', 1, 'front_images/about_image.jpg', '2018-10-16 08:43:59', '2018-10-17 04:12:23', NULL),
(5, 'sdfsdf', 'fsdfsf', 'sfsfsf', 1, 'front_images/about_image.jpg', '2018-10-16 08:44:45', '2018-10-17 04:12:01', NULL),
(6, 'sdfsdf', 'fsdfsf', 'sfsfsf', 2, 'front_images/xFAQn2jB1gLYTurcjOD1DOUS6YSBA762zOufIJgO.jpeg', '2018-10-16 08:46:48', '2018-10-17 04:12:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `about_points`
--

CREATE TABLE `about_points` (
  `id` int(10) UNSIGNED NOT NULL,
  `about_id` int(11) NOT NULL,
  `about_point` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebok` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `email`, `phone`, `facebok`, `twitter`, `google`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'sfs fsf sf sf sf ', 'sf sf ', 'sf sf sf2165651', '#sd', 'sdf', 'sf', 'sfs', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE `headers` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'header_image.jpg',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `headers`
--

INSERT INTO `headers` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sdfsf', 'fsdfsf', 'header_image.jpg', '1', '2018-10-18 06:38:59', '2018-10-18 06:49:28'),
(2, 'sdfsf', 'fsdfsf', 'front_images/0VBYKsM4YZcDJ4XtfXC9XbFKNLKODooK0jIxz3UL.jpeg', '1', '2018-10-18 06:39:33', '2018-10-18 06:50:03'),
(3, 'new', 'new fkjs fwri slfjoisj sgmoiau gagsg', 'front_images/6RlmfsDhv8Cf1iAuxC97rY1uWNWLVXccB5cXJZMM.jpeg', '2', '2018-10-18 06:49:59', '2018-10-18 06:50:04');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `sender_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_name`, `sender_email`, `sender_message`, `message_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Md. Arif Ahmed', 'ad@d.com', 'df', 2, '2018-10-09 11:58:20', '2018-10-16 08:27:48', NULL),
(2, 'fs', 'arifahmed@gmail.com', 'sf sfs fs sf sf sf sf sf sfd ', 2, '2018-10-09 11:59:50', '2018-10-14 15:50:30', NULL),
(3, 'shohag', 'sharif@g.com', 'sdf ', 2, '2018-10-09 12:04:01', '2018-10-14 15:50:31', NULL),
(4, 'Asif', 'sharif@g.com', 'sdf sdfwe sre ', 2, '2018-10-09 12:04:17', '2018-10-14 15:50:33', NULL),
(5, 'ovi', 'i@f.cdf', 'dfsfs f sfsdf sf sf ', 2, '2018-10-09 12:04:33', '2018-10-14 15:50:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2018_09_24_162420_create_messages_table', 2),
(8, '2018_10_14_215159_create_abouts_table', 3),
(10, '2018_10_16_150457_create_contacts_table', 4),
(11, '2018_10_16_160128_create_testimonials_table', 5),
(13, '2018_10_17_073633_create_works_table', 6),
(15, '2018_10_17_092200_create_services_table', 7),
(16, '2018_10_17_101509_create_about_points_table', 8),
(18, '2018_10_18_121853_create_headers_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'front_images/service.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `service_details`, `service_image`, `created_at`, `updated_at`) VALUES
(1, 'sdfsdf', 'sfsfd', 'front_images/service.jpg', NULL, NULL),
(2, 'newsf', 'sf fnlksj', 'front_images/service.jpg', '2018-10-17 03:45:07', NULL),
(3, 'new', 'sf fnlksj', 'front_images/ezm3whuvSIIS6rhMUafuUGmJoZBhXkErrhNAk8uR.jpeg', '2018-10-17 03:45:35', '2018-10-17 03:45:35'),
(4, 'sdf412', '5sfg4s87 32s', 'front_images/fe1NHJn9vujGVqsRE0JQ0luQtkR72LjMe0WYrQEq.jpeg', '2018-10-17 03:45:47', '2018-10-17 03:45:47');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'testimonial.jpg',
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `details`, `name`, `created_at`, `updated_at`) VALUES
(1, 'front_images/testimonial.jpg', 'fsfsf sf sf', 'admin', '2018-10-17 00:54:11', NULL),
(2, 'front_images/GZbfOJgQOY0nhXy5FE7fI8mHqHRYat6UEuAR9cNw.jpeg', 'fsfsf sf sf', 'admin', '2018-10-17 00:55:11', '2018-10-17 00:55:11'),
(3, 'front_images/sAsTxgSZPy8yYVa2CaO4Xs7S9if6WZjvv5SzdlbM.jpeg', 'sf sf sfs f', 'arif', '2018-10-17 01:10:28', '2018-10-17 01:10:28'),
(4, 'front_images/CpEHfUoOg1uJoy59lOJvcjNCmqzzOqxus0NMIijM.jpeg', 'gfgd', 'sfs', '2018-10-17 02:57:58', '2018-10-17 02:57:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md. Arif Ahmed', 'arif@gmail.com', NULL, '$2y$10$.9sKMwwaqHl.vQRD3yekOei727CPYwAvV9SEt25vicQEXotxh4xUu', 'rSJWc1o9p0cdPvpkX6NNOru6CFVc7PXyUqgeHAUMFv975vu3eeDrD4pVvHTh', '2018-09-20 11:28:09', '2018-10-18 10:09:55');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(10) UNSIGNED NOT NULL,
  `work_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'front_images/work.jpg',
  `work_image_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Project Name',
  `work_image_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `work_image`, `work_image_title`, `work_image_name`, `created_at`, `updated_at`) VALUES
(1, 'front_images/work.jpg', 'sf sfsf sgs', 'sfsfd sfs f', '2018-10-17 02:54:58', NULL),
(2, 'front_images/work.jpg', '654s6512fs1', 'fs1f65s4', '2018-10-17 02:57:24', NULL),
(3, 'front_images/work.jpg', 'gdg dgd gd', 'dfgd dg dg', '2018-10-17 03:00:53', NULL),
(4, 'front_images/work.jpg', 'gdg dgd gd', 'dfgd dg dg', '2018-10-17 03:03:42', NULL),
(5, 'front_images/work.jpg', 'gdg dgd gd', 'dfgd dg dg', '2018-10-17 03:03:48', NULL),
(6, 'front_images/work.jpg', '1531', '5665', '2018-10-17 03:17:31', NULL),
(7, 'front_images/work.jpg', 'fsf sfs s', 'sgfs gsfg s', '2018-10-17 03:19:17', NULL),
(8, 'front_images/Wn67tviWLi7m6DyDM5uMtER61rmPwzoEziOH3DHM.jpeg', 'sfsfs', 'fsfs', '2018-10-17 03:20:45', '2018-10-17 03:20:45'),
(9, 'front_images/LCQwENaENQWFVXRxcmI6sKBqFvaBywImksdTKouY.jpeg', 'sfsg sfgs gsg', 'sfsfs sf ss', '2018-10-17 03:21:16', '2018-10-17 03:21:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_points`
--
ALTER TABLE `about_points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `about_points`
--
ALTER TABLE `about_points`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `headers`
--
ALTER TABLE `headers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
