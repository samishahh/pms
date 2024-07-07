-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2024 at 10:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `medications` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1' COMMENT '0 for cancel: 1 for active:2 for done medication',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `date`, `patient_id`, `doctor_id`, `remarks`, `medications`, `status`, `created_at`, `updated_at`) VALUES
(1, '2024-07-05', 3, 1, 'good', 'operate', '2', '2024-07-05 14:17:11', '2024-07-05 14:17:26'),
(2, '2024-07-05', 5, 1, NULL, NULL, '1', '2024-07-05 14:19:37', '2024-07-05 14:19:37'),
(3, '2024-07-05', 1, 1, NULL, NULL, '0', '2024-07-05 14:19:44', '2024-07-05 14:41:30'),
(4, '2024-07-05', 3, 1, NULL, NULL, '0', '2024-07-05 15:06:59', '2024-07-05 15:07:30'),
(5, '2024-07-05', 3, 2, 'very good', 'therapy', '2', '2024-07-05 15:07:10', '2024-07-05 15:07:44'),
(6, '2024-07-06', 6, 2, 'good', 'operate', '2', '2024-07-06 05:24:56', '2024-07-06 13:24:01'),
(7, '2024-07-06', 14, 3, NULL, NULL, '1', '2024-07-06 13:22:34', '2024-07-06 13:22:34'),
(8, '2024-07-06', 15, 2, NULL, NULL, '0', '2024-07-06 13:23:43', '2024-07-06 13:25:22'),
(9, '2024-07-06', 5, 1, NULL, NULL, '1', '2024-07-06 13:25:10', '2024-07-06 13:25:10');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `qualification`, `mobileno`, `created_at`, `updated_at`) VALUES
(1, 'sami shah', 'mbbs fcps', '0300-0000000', '2024-07-05 07:22:03', '2024-07-05 07:22:03'),
(2, 'arslan', 'mbbs', '0399-9999999', '2024-07-05 15:06:47', '2024-07-05 15:06:47'),
(3, 'imran', 'mbbs', '0388-8888888', '2024-07-06 13:21:35', '2024-07-06 13:21:35'),
(4, 'Domingo Ryan', 'mbbs', '+1.440.391.5730', '2024-07-06 14:41:47', '2024-07-06 14:41:47'),
(5, 'Jaqueline Hickle', 'mbbs', '+1.509.264.2593', '2024-07-06 14:41:47', '2024-07-06 14:41:47');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(7, '2024_07_05_093737_create_patients_table', 2),
(8, '2024_07_05_120002_create_doctors_table', 3),
(10, '2024_07_05_125534_create_appointments_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patientid` varchar(255) DEFAULT NULL,
  `cnic` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `cellno` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `patientid`, `cnic`, `name`, `dob`, `mobileno`, `cellno`, `city`, `gender`, `created_at`, `updated_at`) VALUES
(1, 'a1', 2222222222222, 'admin', '2024-07-09', '0355-5555555', NULL, 'Option 2', 'female', '2024-07-05 06:02:50', '2024-07-05 06:02:50'),
(2, 'a2', 55555555555, 'admin', '2024-07-16', '0322-2222222', NULL, 'Option 3', 'male', '2024-07-05 06:04:38', '2024-07-05 06:04:38'),
(3, 'u3', 11111111111, 'user', '2024-07-24', '0344-4444444', NULL, 'Option 3', 'male', '2024-07-05 06:15:16', '2024-07-05 06:15:16'),
(4, 'sus4', 9999999999999, 'sami ullah shah', '2024-07-17', '0322-2222222', '0322-2222222', 'Option 2', 'female', '2024-07-05 06:19:04', '2024-07-05 06:19:04'),
(5, 'o5', 6666666666666, 'owner', '2024-07-16', '0388-8888888', '03__-_______', 'Option 3', 'female', '2024-07-05 06:19:34', '2024-07-05 06:19:34'),
(6, 'TL6', 5322222222222, 'Tyrone Landry', '1988-03-24', '+1 (501) 159-6618', '+1 (278) 408-9641', 'Option 3', 'female', '2024-07-05 06:25:05', '2024-07-05 06:25:05'),
(11, 'DF11', 8954585555555, 'Demetrius Figueroa', '1971-08-28', '+1 (629) 585-8198', '+1 (257) 491-4279', 'Option 2', 'male', '2024-07-05 06:31:01', '2024-07-05 06:31:01'),
(12, 'DM12', 4544822222222, 'Daria Merritt', '1988-08-21', '+1 (309) 862-2526', '+1 (504) 978-1936', 'Option 3', 'female', '2024-07-05 06:31:43', '2024-07-05 06:31:43'),
(14, 'KO14', 3257777777777, 'Kimberly Osborne', '2021-02-19', '+1 (815) 591-8304', '+1 (139) 622-7284', 'Option 3', 'male', '2024-07-05 06:35:56', '2024-07-05 06:35:56'),
(15, 'IG15', 9555555555555, 'Ivana Goff', '1996-01-24', '+1 (124) 331-1409', '+1 (834) 689-7402', 'Option 3', 'male', '2024-07-05 06:40:59', '2024-07-05 06:40:59'),
(16, 'AG16', 9875111111111, 'Austin Garcia', '1982-10-27', '+1 (683) 267-4546', '+1 (972) 285-2768', 'Option 3', 'female', '2024-07-05 06:41:47', '2024-07-05 06:41:47'),
(17, 'LT17', 9999999999996, 'Leigh Talley', '2021-09-07', '+1 (789) 391-1895', '+1 (573) 785-1817', 'Option 2', 'male', '2024-07-06 13:22:02', '2024-07-06 13:22:02'),
(18, 'KP18', 4522222222222, 'Kimberley Patel', '1991-07-17', '+1 (661) 132-4668', '+1 (625) 493-3006', 'Option 2', 'male', '2024-07-06 13:23:26', '2024-07-06 13:23:26'),
(19, 'BS19', 9788888888888, 'Boris Sharp', '1975-10-16', '+1 (262) 684-9667', '+1 (301) 394-9249', 'Option 2', 'female', '2024-07-06 13:24:53', '2024-07-06 13:24:53'),
(20, 'SW20', 5824444444444, 'Simone Wynn', '1971-04-19', '+1 (655) 316-9842', '+1 (259) 325-7027', 'Option 2', 'female', '2024-07-06 13:40:23', '2024-07-06 13:40:23'),
(21, 'checko1', 8933497042, 'Prof. Lillie Steuber Jr.', '2005-03-12', '+1-860-816-7308', NULL, 'Bergnaumville', 'male', '2024-07-06 14:35:43', '2024-07-06 14:35:43'),
(22, 'checko1', 6188684933, 'Rocky Fritsch', '2014-01-20', '380.787.0372', NULL, 'McKenziechester', 'male', '2024-07-06 14:41:47', '2024-07-06 14:41:47'),
(23, 'checko1', 8175659713, 'Maymie McClure', '2013-07-01', '(859) 644-0427', NULL, 'New Raul', 'male', '2024-07-06 14:41:47', '2024-07-06 14:41:47'),
(24, 'checko1', 4782878805, 'Euna Halvorson', '1976-08-20', '+1-253-529-9333', NULL, 'Lake Aryannamouth', 'male', '2024-07-06 14:41:47', '2024-07-06 14:41:47'),
(25, 'checko1', 8952350677, 'Veda Goyette', '1971-09-10', '(608) 852-8532', NULL, 'Port Princessview', 'male', '2024-07-06 14:41:47', '2024-07-06 14:41:47'),
(26, 'checko1', 8798095086, 'Ms. Pearline Eichmann I', '1982-04-19', '+18544073012', NULL, 'Howellstad', 'male', '2024-07-06 14:41:47', '2024-07-06 14:41:47');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('hpo920FKz7ycmjomiRXyqb2YgkErhyuflO2YHyML', 3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQm5acTVCVE1ibUdsbXViR1c1MmtVTmpmVlZZS0RyY3pUa2JHN0lTWSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAxMC9sYXJhdmVsL3Btcy9wYXRpZW50cmVjb3JkIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mzt9', 1720292743);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 3 COMMENT '1for super admin: 2 for admin: 3 for user',
  `permission` varchar(255) NOT NULL DEFAULT '0' COMMENT '0for view: 2 for edit: 3 for delete',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `permission`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'super admin', 'superadmin@gmail.com', 1, '0', NULL, '$2y$12$8Et7E0CYXePd5ODJrGY/AO8Zr7guDQCjh8kp6CDtZO.2sIRqKPDX6', NULL, '2024-07-04 13:42:47', '2024-07-06 04:26:06'),
(4, 'user', 'user@gmail.com', 3, '0', NULL, '$2y$12$erNY8BKAG2MrtP4FIOoSL.8witdX.Awg67Ib.WLL94lmuc/poX5rG', NULL, '2024-07-05 02:05:36', '2024-07-05 02:05:36'),
(5, 'admin', 'admin@gmail.com', 2, '0', NULL, '$2y$12$hyd7AQsyZ2SnVEcn/PjoiOazdvDykejN4mhHmfj11XII2xbVUZV3G', NULL, '2024-07-05 02:27:44', '2024-07-05 02:27:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
