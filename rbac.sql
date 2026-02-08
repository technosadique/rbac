-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2026 at 02:54 PM
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
-- Database: `rbac`
--

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
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `org_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `org_id`, `name`, `designation`, `phone`, `created_at`, `updated_at`) VALUES
(1, 1, 'John Doe - Tcs', 'Software Engineer', '9999999999', '2026-02-08 07:50:47', '2026-02-08 07:50:47'),
(2, 1, 'Jane Smith - Tcs', 'HR Manager', '8888888888', '2026-02-08 07:50:47', '2026-02-08 07:50:47'),
(3, 2, 'John Doe - Infosys', 'Software Engineer', '9999999999', '2026-02-08 07:50:47', '2026-02-08 07:50:47'),
(4, 2, 'Jane Smith - Infosys', 'HR Manager', '8888888888', '2026-02-08 07:50:47', '2026-02-08 07:50:47'),
(5, 3, 'John Doe - Wipro', 'Software Engineer', '9999999999', '2026-02-08 07:50:47', '2026-02-08 07:50:47'),
(6, 3, 'Jane Smith - Wipro', 'HR Manager', '8888888888', '2026-02-08 07:50:47', '2026-02-08 07:50:47'),
(7, 4, 'John Doe - Capegemini', 'Software Engineer', '9999999999', '2026-02-08 07:50:47', '2026-02-08 07:50:47'),
(8, 4, 'Jane Smith - Capegemini', 'HR Manager', '8888888888', '2026-02-08 07:50:47', '2026-02-08 07:50:47');

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
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `org_id` bigint(20) UNSIGNED NOT NULL,
  `lead_name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `org_id`, `lead_name`, `company`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Rahul Verma', 'Startup X', '9999999999', 'New', '2026-02-08 07:50:47', '2026-02-08 07:50:47'),
(2, 1, 'Anita Sharma', 'Enterprise Y', '8888888888', 'Contacted', '2026-02-08 07:50:47', '2026-02-08 07:50:47'),
(3, 1, 'Priya Sen', 'Startup P', '7777777777', 'New', '2026-02-08 07:50:47', '2026-02-08 07:50:47'),
(4, 1, 'Ajit Nair', 'Enterprise Q', '6666666666', 'Contacted', '2026-02-08 07:50:47', '2026-02-08 07:50:47'),
(5, 2, 'Rahul Verma', 'Startup X', '9999999999', 'New', '2026-02-08 07:50:47', '2026-02-08 07:50:47'),
(6, 2, 'Anita Sharma', 'Enterprise Y', '8888888888', 'Contacted', '2026-02-08 07:50:47', '2026-02-08 07:50:47'),
(7, 2, 'Priya Sen', 'Startup P', '7777777777', 'New', '2026-02-08 07:50:47', '2026-02-08 07:50:47'),
(8, 2, 'Ajit Nair', 'Enterprise Q', '6666666666', 'Contacted', '2026-02-08 07:50:47', '2026-02-08 07:50:47'),
(9, 3, 'Rahul Verma', 'Startup X', '9999999999', 'New', '2026-02-08 07:50:47', '2026-02-08 07:50:47'),
(10, 3, 'Anita Sharma', 'Enterprise Y', '8888888888', 'Contacted', '2026-02-08 07:50:47', '2026-02-08 07:50:47'),
(11, 3, 'Priya Sen', 'Startup P', '7777777777', 'New', '2026-02-08 07:50:47', '2026-02-08 07:50:47'),
(12, 3, 'Ajit Nair', 'Enterprise Q', '6666666666', 'Contacted', '2026-02-08 07:50:47', '2026-02-08 07:50:47'),
(13, 4, 'Rahul Verma', 'Startup X', '9999999999', 'New', '2026-02-08 07:50:47', '2026-02-08 07:50:47'),
(14, 4, 'Anita Sharma', 'Enterprise Y', '8888888888', 'Contacted', '2026-02-08 07:50:47', '2026-02-08 07:50:47'),
(15, 4, 'Priya Sen', 'Startup P', '7777777777', 'New', '2026-02-08 07:50:47', '2026-02-08 07:50:47'),
(16, 4, 'Ajit Nair', 'Enterprise Q', '6666666666', 'Contacted', '2026-02-08 07:50:47', '2026-02-08 07:50:47');

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
(1, '0001_01_01_000001_create_cache_table', 1),
(2, '0001_01_01_000002_create_jobs_table', 1),
(3, '2026_02_07_130705_create_organizations_table', 1),
(4, '2026_02_07_130844_add_role_and_org_id_to_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Tcs', '2026-02-08 07:50:44', '2026-02-08 07:50:44'),
(2, 'Infosys', '2026-02-08 07:50:44', '2026-02-08 07:50:44'),
(3, 'Wipro', '2026-02-08 07:50:44', '2026-02-08 07:50:44'),
(4, 'Capegemini', '2026-02-08 07:50:44', '2026-02-08 07:50:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('super_admin','org_admin','org_hr','org_sales') NOT NULL,
  `org_id` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `org_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@example.com', NULL, '$2y$12$tAKn0iqp2om0wvrYdfio9eiCBs4.zEG0SKPZYkMBfao6g2l.QNfVa', 'super_admin', NULL, NULL, '2026-02-08 07:50:44', '2026-02-08 07:50:44'),
(2, 'Tcs Admin', 'tcsadmin@example.com', NULL, '$2y$12$2tN.Rpqq0oDvFDLlJF2GHuAAwogsFbSjuoyWz2Dq9WyNwB6jJp/9m', 'org_admin', 1, NULL, '2026-02-08 07:50:44', '2026-02-08 07:50:44'),
(3, 'Tcs HR', 'tcshr@example.com', NULL, '$2y$12$o/kG8I8xWEhD0Tf0Y1U.S.n.grteNwvzfTFhG2.S9WTOOGp.P38Oi', 'org_hr', 1, NULL, '2026-02-08 07:50:45', '2026-02-08 07:50:45'),
(4, 'Tcs Sales', 'tcssales@example.com', NULL, '$2y$12$RK7DFsOEUEDpzEZqjlDikuN/iWTXMX1wsPgJRX9FEjEGu6EiHF6Aa', 'org_sales', 1, NULL, '2026-02-08 07:50:45', '2026-02-08 07:50:45'),
(5, 'Infosys Admin', 'infosysadmin@example.com', NULL, '$2y$12$NbOlD6Txl8DELuQdMcCED.DYzeL9dXGrNn.U/nFTbgphfgOJcTx62', 'org_admin', 2, NULL, '2026-02-08 07:50:45', '2026-02-08 07:50:45'),
(6, 'Infosys HR', 'infosyshr@example.com', NULL, '$2y$12$A.2sxMc6yzi6KjqkqSf8QedwSiJWVcH2uAbnfm980f3gkUupfp9RS', 'org_hr', 2, NULL, '2026-02-08 07:50:45', '2026-02-08 07:50:45'),
(7, 'Infosys Sales', 'infosyssales@example.com', NULL, '$2y$12$PYHFDTMoYtOG.So3jiEU8ejkEfasqFXjvBVqIgZtmJwKZhcV6r47m', 'org_sales', 2, NULL, '2026-02-08 07:50:46', '2026-02-08 07:50:46'),
(8, 'Wipro Admin', 'wiproadmin@example.com', NULL, '$2y$12$q6P.ksPxGGmWBZQyNHpd9.lzZBEgRYQXUOSvCk943uL9hxa52b38u', 'org_admin', 3, NULL, '2026-02-08 07:50:46', '2026-02-08 07:50:46'),
(9, 'Wipro HR', 'wiprohr@example.com', NULL, '$2y$12$.qo/2KqR0EF3381GTK60LuXTCJL.mfJdzCID8r4eSg8fDr.XZaz4q', 'org_hr', 3, NULL, '2026-02-08 07:50:46', '2026-02-08 07:50:46'),
(10, 'Wipro Sales', 'wiprosales@example.com', NULL, '$2y$12$/iSJ/sIT.j4DqtXAcZU9u.NHMoOVJUJ7q/ZUMSQ4UHwAxuheqQ1cW', 'org_sales', 3, NULL, '2026-02-08 07:50:46', '2026-02-08 07:50:46'),
(11, 'Capegemini Admin', 'capegeminiadmin@example.com', NULL, '$2y$12$/yCJwpsQMJF1H1kNBe4y5Ooo0l/IW4FBJeqLcq.vKr5EfSowk.Jl.', 'org_admin', 4, NULL, '2026-02-08 07:50:47', '2026-02-08 07:50:47'),
(12, 'Capegemini HR', 'capegeminihr@example.com', NULL, '$2y$12$wyh.PrNDd2ArRvehnmmUhOxcfC3HYDXr21ixhLsNm61k.Tj.GLJxm', 'org_hr', 4, NULL, '2026-02-08 07:50:47', '2026-02-08 07:50:47'),
(13, 'Capegemini Sales', 'capegeminisales@example.com', NULL, '$2y$12$CfefDmwBGRRSjzXyiFCh6OcW0rM7DkIS7.M.z32YCqFzSu9Fh4ta2', 'org_sales', 4, NULL, '2026-02-08 07:50:47', '2026-02-08 07:50:47');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `employees`
--
ALTER TABLE `employees`
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
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_org_id_foreign` (`org_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_org_id_foreign` FOREIGN KEY (`org_id`) REFERENCES `organizations` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
