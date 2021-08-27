-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2021 at 01:16 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trivia-db`
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `points`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tixa', 'phpteste@sapo.pt', NULL, '$2y$10$c3nEGsGEz1bAjZXjIWxmPuZD5w9ASVszLoYMYvWFQt3yZE1vQXd6.', 0, 'ORovr2dSw7767WxSu61Bt1EgHbDCo8ZsWH92Wkjj8wpyszi6tt6P5RHTMYnk', NULL, NULL),
(2, 'efrain89', 'jadon90@example.org', '2021-08-26 18:00:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'zlPhTtMkT8', '2021-08-26 18:00:27', '2021-08-26 18:00:27'),
(3, 'turner.kip', 'king.stiedemann@example.org', '2021-08-26 18:00:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'VKJnNSxfYy', '2021-08-26 18:00:27', '2021-08-26 18:00:27'),
(4, 'heloise.stehr', 'amya83@example.com', '2021-08-26 18:00:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'lUXvFx1GK7', '2021-08-26 18:00:27', '2021-08-26 18:00:27'),
(5, 'bethel.stamm', 'cora84@example.org', '2021-08-26 18:00:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'g3dsFGivFM', '2021-08-26 18:00:27', '2021-08-26 18:00:27'),
(6, 'laney84', 'monahan.kianna@example.org', '2021-08-26 18:00:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'KAup059S16', '2021-08-26 18:00:27', '2021-08-26 18:00:27'),
(7, 'rharber', 'audrey.hoppe@example.com', '2021-08-26 18:00:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'ABQWTaosp8', '2021-08-26 18:00:27', '2021-08-26 18:00:27'),
(8, 'paucek.kaycee', 'meredith.streich@example.com', '2021-08-26 18:00:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '76kEilsVCY', '2021-08-26 18:00:27', '2021-08-26 18:00:27'),
(9, 'alford47', 'shields.lina@example.org', '2021-08-26 18:00:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'PeNP4y1Wrq', '2021-08-26 18:00:27', '2021-08-26 18:00:27'),
(10, 'julius.littel', 'gisselle60@example.org', '2021-08-26 18:00:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'Jd8TVI7Hkh', '2021-08-26 18:00:28', '2021-08-26 18:00:28'),
(11, 'edmond.wiza', 'hershel.schultz@example.org', '2021-08-26 18:00:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'pd4U0JYFCo', '2021-08-26 18:00:28', '2021-08-26 18:00:28'),
(12, 'danika.rolfson', 'emmitt.herman@example.net', '2021-08-26 18:00:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'XoOtAcVfhf', '2021-08-26 18:00:28', '2021-08-26 18:00:28'),
(13, 'delbert70', 'qarmstrong@example.org', '2021-08-26 18:00:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '5B4rRiPihN', '2021-08-26 18:00:28', '2021-08-26 18:00:28'),
(14, 'greyson61', 'barbara59@example.net', '2021-08-26 18:00:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'QugsGtZSUw', '2021-08-26 18:00:28', '2021-08-26 18:00:28'),
(15, 'isabel28', 'greta53@example.org', '2021-08-26 18:00:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'NNc94cGE2f', '2021-08-26 18:00:28', '2021-08-26 18:00:28'),
(16, 'boyle.jillian', 'qpredovic@example.org', '2021-08-26 18:00:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'Ia9IzeXjJt', '2021-08-26 18:00:28', '2021-08-26 18:00:28'),
(17, 'humberto51', 'aletha.bechtelar@example.org', '2021-08-26 18:00:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'lmb2JfqR16', '2021-08-26 18:00:28', '2021-08-26 18:00:28'),
(18, 'deion.mohr', 'btorp@example.com', '2021-08-26 18:00:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'qYF8Pchyf3', '2021-08-26 18:00:28', '2021-08-26 18:00:28'),
(19, 'geo.crooks', 'estell66@example.net', '2021-08-26 18:00:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '0cpZcstQ72', '2021-08-26 18:00:28', '2021-08-26 18:00:28'),
(20, 'gracie.dickinson', 'sauer.willard@example.com', '2021-08-26 18:00:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'fpKE4Pc5wr', '2021-08-26 18:00:28', '2021-08-26 18:00:28'),
(21, 'king.bayer', 'hudson.gilda@example.net', '2021-08-26 18:00:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'cd0BeQsvSW', '2021-08-26 18:00:28', '2021-08-26 18:00:28'),
(22, 'Peter', 'peter@sapo.pt', NULL, '$2y$10$6ztUXe1zZx3IGCR09HhMK.dOvqfTch8I0kajEDnMrgBsK9lI2Rb2y', 0, NULL, '2021-08-27 10:14:18', '2021-08-27 10:14:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
  ADD UNIQUE KEY `users_name_unique` (`name`),
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
