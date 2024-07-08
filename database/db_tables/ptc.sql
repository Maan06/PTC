-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2024 at 10:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$WjuET4VUSg9j5M/9iLud8eHd1sPMn5e8QisNbbEgV/c3P69CrvX1u', 'Yes', NULL, '2024-04-30 06:18:01', '2024-04-30 06:18:10');

-- --------------------------------------------------------

--
-- Table structure for table `applied_candidates`
--

CREATE TABLE `applied_candidates` (
  `id` bigint(20) NOT NULL,
  `job_id` int(11) NOT NULL,
  `job_description` text DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `status` enum('Y','N') NOT NULL DEFAULT 'Y',
  `is_active` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL COMMENT 'ON UPDATE CURRENT_TIMESTAMP()	',
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applied_candidates`
--

INSERT INTO `applied_candidates` (`id`, `job_id`, `job_description`, `name`, `contact`, `email`, `file`, `status`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 2, 'test', 'test', '3216549870', 'abcd@gmail.com', '694939_resume.png', 'Y', 'Yes', '2024-06-17 18:57:46', NULL, NULL),
(4, 1, 'asasd', 'asddsa', '1234567810', 'admin@gmail.com', '794359_resume.pdf', 'Y', 'Yes', '2024-06-17 20:06:14', NULL, NULL),
(5, 1, 'asdsa', 'sadas', '1234567810', 'admin@gmail.com', '792912_resume.pdf', 'Y', 'Yes', '2024-06-17 20:08:03', NULL, NULL),
(6, 1, 'asddsa', 'sadsad', '1234567810', 'admin@gmail.com', '393010_resume.pdf', 'Y', 'Yes', '2024-06-17 20:13:20', NULL, NULL),
(7, 1, 'asddsa', 'sadsad', '1234567810', 'admin@gmail.com', '958070_resume.pdf', 'Y', 'Yes', '2024-06-17 20:14:05', NULL, NULL),
(8, 1, 'asdas', 'sadsad', '1234567810', 'surya@123', '360734_resume.pdf', 'Y', 'Yes', '2024-06-17 20:14:39', NULL, NULL),
(9, 1, 'asdasd', 'asdsad', '1234567810', 'surya@gmail.com', '528329_resume.pdf', 'Y', 'Yes', '2024-06-17 20:15:38', NULL, NULL),
(10, 1, 'asdsa', 'asdsad', '1234567810', 'surya@123', '555520_resume.pdf', 'Y', 'Yes', '2024-06-17 20:16:49', NULL, NULL),
(11, 1, 'asdasd', 'asdas', '1234567810', 'asdas@dsfds', 'C:\\xampp\\tmp\\php6205.tmp', 'Y', 'Yes', '2024-06-17 20:17:43', NULL, NULL),
(12, 1, 'asdsa', 'sadsa', '1234567810', 'sadsa@fff', 'C:\\xampp\\tmp\\phpF885.tmp', 'Y', 'Yes', '2024-06-17 20:19:27', NULL, NULL),
(13, 1, 'asdas', 'asdsa', '1234567810', 'surya@gmail.com', '941305_resume.pdf', 'Y', 'Yes', '2024-06-17 20:20:05', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `message` longtext NOT NULL,
  `is_active` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `company`, `email`, `contact`, `message`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'test', NULL, 'admin@gmail.com', '2222222223', 'aaa', 'Yes', '2024-05-13 11:30:34', NULL),
(2, 'test', NULL, 'suryakantsen.programmics@gmail.com', '2222222222', 'test', 'Yes', '2024-05-13 12:00:57', NULL),
(3, 'test', NULL, 'suryakantsen.programmics@gmail.com', '2222222222', 'test', 'Yes', '2024-05-13 12:02:56', NULL),
(4, 'test', NULL, 'suryakantsen.programmics@gmail.com', '2222222222', 'test', 'No', '2024-05-13 12:04:25', '2024-06-16 14:33:27'),
(5, 'test', NULL, 'suryakantsen.programmics@gmail.com', '2222222222', 'aaaa', 'No', '2024-05-13 12:55:53', '2024-06-16 14:33:18'),
(6, 'test1', 'test', 'test@gmail.com', '1234567810', 'testing', 'Yes', '2024-06-16 14:34:22', NULL),
(7, 'aaaaa', 'sdad', 'abc@gmail.com', '1234567810', 'sadasdasd', 'Yes', '2024-06-16 14:39:55', NULL),
(8, 'asdsad', 'asdasd', 'test@gmail.com', '1234567810', 'asdasdsda', 'Yes', '2024-06-16 14:47:22', NULL),
(9, 'test', 'asdasd', 'suryakantsen61@gmail.com', '1234567810', 'hello', 'Yes', '2024-06-17 19:31:55', NULL),
(10, 'saddsa', 'asdas', 'suryakantsen61@gmail.com', '1234567810', 'asdsadds', 'Yes', '2024-06-17 19:32:26', NULL),
(11, 'saddsa', 'asdas', 'suryakantsen61@gmail.com', '1234567810', 'asdsadds', 'Yes', '2024-06-17 19:33:25', NULL),
(12, 'saddsa', 'asdas', 'suryakantsen61@gmail.com', '1234567810', 'asdsadds', 'Yes', '2024-06-17 19:35:30', NULL),
(13, 'asdsad', 'asdasd', 'suryakantsen61@gmail.com', '1234567810', 'sadadssad', 'Yes', '2024-06-17 19:35:53', NULL),
(14, 'suryakant sen', 'asdasd', 'suryakantsen61@gmail.com', '1234567810', 'asdsad', 'Yes', '2024-06-17 19:36:53', NULL),
(15, 'suryakant sen', 'asdasd', 'suryakantsen61@gmail.com', '1234567810', 'asdsad', 'Yes', '2024-06-17 19:37:40', NULL),
(16, 'suryakant sen', 'asdasd', 'suryakantsen61@gmail.com', '1234567810', 'asdsad', 'Yes', '2024-06-17 19:38:53', NULL),
(17, 'suryakant sen', 'asdasd', 'suryakantsen61@gmail.com', '1234567810', 'asdsad', 'Yes', '2024-06-17 19:39:47', NULL),
(18, 'suryakant sen', 'asdasd', 'suryakantsen61@gmail.com', '1234567810', 'asdsad', 'Yes', '2024-06-17 19:40:27', NULL),
(19, 'suryakant sen', 'asdasd', 'suryakantsen61@gmail.com', '1234567810', 'asdsad', 'Yes', '2024-06-17 19:43:43', NULL),
(20, 'suryakant sen', 'asdasd', 'suryakantsen61@gmail.com', '1234567810', 'asdsdaas', 'Yes', '2024-06-17 19:44:28', NULL),
(21, 'suryakant sen', 'asdasd', 'suryakantsen61@gmail.com', '1234567810', 'asdsdaas', 'Yes', '2024-06-17 19:46:04', NULL),
(22, 'suryakant sen', 'asdasd', 'suryakantsen61@gmail.com', '1234567810', 'asdsdaas', 'Yes', '2024-06-17 19:49:01', NULL),
(23, 'suryakant sen', 'asdasd', 'suryakantsen61@gmail.com', '1234567810', 'asdsdaas', 'Yes', '2024-06-17 19:49:42', NULL),
(24, 'suryakant sen', 'asdasd', 'suryakantsen61@gmail.com', '1234567810', 'asdsdaas', 'Yes', '2024-06-17 19:50:11', NULL),
(25, 'suryakant sen', 'adasd', 'suryakantsen61@gmail.com', '1234567810', 'asddssad', 'Yes', '2024-06-17 19:52:24', NULL),
(26, 'suryakant sen', 'adasd', 'suryakantsen61@gmail.com', '1234567810', 'asddssad', 'Yes', '2024-06-17 19:54:15', NULL),
(27, 'suryakant sen', 'adasd', 'suryakantsen61@gmail.com', '1234567810', 'asddssad', 'Yes', '2024-06-17 19:55:17', NULL),
(28, 'suryakant sen', 'adasd', 'suryakantsen61@gmail.com', '1234567810', 'asddssad', 'Yes', '2024-06-17 19:55:49', NULL),
(29, 'suryakant sen', 'adasd', 'suryakantsen61@gmail.com', '1234567810', 'asddssad', 'Yes', '2024-06-17 19:56:34', NULL),
(30, 'suryakant sen', 'adasd', 'suryakantsen61@gmail.com', '1234567810', 'asddssad', 'Yes', '2024-06-17 19:58:05', NULL),
(31, 'suryakant sen', 'adasd', 'suryakantsen61@gmail.com', '1234567810', 'asddssad', 'Yes', '2024-06-17 19:58:32', NULL),
(32, 'suryakant sen', 'adasd', 'suryakantsen61@gmail.com', '1234567810', 'asddssad', 'Yes', '2024-06-17 19:58:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_posts`
--

CREATE TABLE `job_posts` (
  `id` int(11) NOT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `job_type` varchar(255) DEFAULT NULL,
  `location` text DEFAULT NULL,
  `status` enum('Y','N') NOT NULL DEFAULT 'Y',
  `is_active` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_posts`
--

INSERT INTO `job_posts` (`id`, `job_title`, `job_type`, `location`, `status`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'testa', 'Full Time,Remote', 'tst', 'Y', 'Yes', '2024-06-16 17:13:21', '2024-06-16 18:42:23'),
(2, 'Accountant', 'Full Time,Remote,Internship', 'Raipur, CG', 'Y', 'Yes', '2024-06-16 19:00:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_24_094711_create_admins_table', 1),
(6, '2022_09_24_194403_create_settings_table', 1),
(7, '2022_09_24_194421_create_notifications_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `user_type` varchar(10) DEFAULT NULL,
  `title` varchar(191) NOT NULL,
  `message` longtext DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) DEFAULT NULL,
  `value` longtext DEFAULT NULL,
  `is_active` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'postjob', '56', 'Yes', '2024-05-05 11:25:26', '2024-05-05 11:25:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mamta', 'mamta@gmail.com', '9329605691', '2024-05-08 09:57:56', '$2y$10$rCNcRgPY6X7OORUl6QS85OnfO6rfuMxnlEsaDSPKCQbfoUlobtkiy', 'Yes', '$2y$10$rCNcRgPY6X7OORUl6QS85OnfO6rfuMxnlEsaDSPKCQbfoUlobtkiy', '2024-05-15 09:57:56', '2024-05-23 09:57:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `applied_candidates`
--
ALTER TABLE `applied_candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `job_posts`
--
ALTER TABLE `job_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applied_candidates`
--
ALTER TABLE `applied_candidates`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_posts`
--
ALTER TABLE `job_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
