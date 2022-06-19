-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2022 at 04:05 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tecklinklaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `companyprofile`
--

CREATE TABLE `companyprofile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `companyName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyIndustry` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyPhone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyState` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyCountry` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyPassword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `companyAbout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `companyLocation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fbPage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitterPage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedinPage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loggedIn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companyprofile`
--

INSERT INTO `companyprofile` (`id`, `companyName`, `companyIndustry`, `companyEmail`, `companyPhone`, `companyState`, `companyCountry`, `companyPassword`, `companyType`, `companyAbout`, `companyLocation`, `fbPage`, `twitterPage`, `linkedinPage`, `loggedIn`, `created_at`, `updated_at`) VALUES
(1, 'adesf', 'fashion', 'adesf@g.com', '23425677', 'adesf', 'adesf', '$2y$10$/Uo6891wNMbk3d3s4xf2S.5HvPDap7KvhNJ14nZp1AzoZGZe0c8q6', NULL, NULL, NULL, NULL, NULL, NULL, 'No', '2022-02-07 10:35:20', '2022-02-07 10:35:20'),
(2, 'adesf@g.com', 'agriculture', 'adesf@gm.com', '1223444', 'adesf@gm.com', 'adesf@gm.com', '$2y$10$OTd1U7WI5/nSx6.95RD3iOqKVM1PS4lzjv9YHbFPu.nJ8YK11oF/S', NULL, NULL, NULL, NULL, NULL, NULL, 'No', '2022-02-09 05:02:41', '2022-02-09 05:02:41'),
(4, 'adesf@gm.com', 'fashion', 'adesf@gm.comm', '1232422', 'adesf@gm.comm', 'adesf@gm.comm', '$2y$10$zSuPpl.ZURIt2543LiU3SesUfzHrdvlCC6gL74b/qIJz03eTSMsQy', NULL, NULL, NULL, NULL, NULL, NULL, 'No', '2022-02-09 05:36:00', '2022-02-09 05:36:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companyprofile`
--
ALTER TABLE `companyprofile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companyprofile`
--
ALTER TABLE `companyprofile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
