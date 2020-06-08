-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2020 at 08:31 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tugas_akhir`
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_18_131020_create_t_statistik', 2),
(5, '2020_06_07_041859_create_t_rsrujuk', 3);

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
-- Table structure for table `t_covidindo`
--

CREATE TABLE `t_covidindo` (
  `positif` varchar(10) NOT NULL,
  `sembuh` varchar(10) NOT NULL,
  `meninggal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_covidindo`
--

INSERT INTO `t_covidindo` (`positif`, `sembuh`, `meninggal`) VALUES
('18.496', '4.467', '1.221');

-- --------------------------------------------------------

--
-- Table structure for table `t_rsrujuk`
--

CREATE TABLE `t_rsrujuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rumahsakit` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_rsrujuk`
--

INSERT INTO `t_rsrujuk` (`id`, `rumahsakit`, `provinsi`, `telepon`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'BRSU Tabanan', 'Bali', '0361811027', 'Jl. Pahlawan No. 14, Delod Peken, Kec. Tabanan, Ka', NULL, NULL),
(2, 'RS Akademis Jaury Jusuf Putra', 'Sulawesi Selatan', '0411-317343', 'Jl. Jend. M. Jusuf No. 57A, Pattunuang, Kec. Wajo,', NULL, NULL),
(3, 'RS Bhayangkara Tk. I R. Said Sukanto', 'DKI Jakarta', '021-8093288', '	Jl. Raya Bogor, Kramat Jati, Kec. Kramat Jati, Ko', NULL, NULL),
(4, 'RS dr. Tadjuddin Chalid Makassar', 'Sulawesi Selatan', '0411-512902', 'Jl. Paccerakkang No.67, Paccerakkang, Kec. Biringk', NULL, NULL),
(5, 'RS Islam Faisal', 'Sulawesi Selatan', '0411-871942', 'Jl. A. P. Pettarani, Banta-Bantaeng, Kec. Rappocin', NULL, NULL),
(6, 'RS Paru dr. Ario Wirawan', 'Jawa Tengah', '0298-326130', 'Jl. Hasanudin No. 806, Mangunsari, Kec. Sidomukti, Kota Salatiga, Jawa Tengah', NULL, NULL),
(7, 'RS Paru Dr. H. A. Rotinsulu', 'Jawa Barat', '022-231427', '	Jl. Bukit Jarian No. 40 Ciumbuleuit, Kota Bandung, Jawa Barat\r\n', NULL, NULL),
(8, 'RS Paru Dr. H. A. Rotinsulu', 'Jawa Barat', '022-231427', 'Jl. Bukit Jarian No. 40 Ciumbuleuit, Kota Bandung, Jawa Barat', NULL, NULL),
(9, 'RS Paru Dr. M. Goenawan Partowidigdo', 'Jawa Barat	', '0251-8253629', 'Jl. Raya Puncak KM. 83, Po Box 28 Kec. Cisarua, Kota Bogor, Jawa Barat', NULL, NULL),
(10, 'RS Tk. II Dustira', 'Jawa Barat', '022-665-2207', 'Jl. dr. Dustira No.1 Kel. Baros Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat', NULL, NULL),
(11, 'RS Universitas Hasanuddin', 'Sulawesi Selatan', '0411-591331', 'Jl. Perintis Kemerdekaan KM.10, Tamalanrea Indah, Kec. Tamalanrea, Kota Makassar, Sulawesi Selatan 9', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_statistik`
--

CREATE TABLE `t_statistik` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `negara` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kasus` int(10) NOT NULL,
  `meninggal` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_statistik`
--

INSERT INTO `t_statistik` (`id`, `negara`, `kasus`, `meninggal`, `created_at`, `updated_at`) VALUES
(1, 'Amerika Serikat', 1564943, '92.259', NULL, NULL),
(2, 'Inggris', 249303, '35.341', NULL, NULL),
(3, 'Italia', 227435, '32.169', NULL, NULL),
(4, 'Prancis', 143291, '28.022', NULL, NULL),
(5, 'Spanyol', 232000, '27.778', NULL, NULL),
(6, 'Brazil', 272000, '17.983', NULL, NULL),
(7, 'Belgia', 55983, '9.150', NULL, NULL),
(8, 'Jerman', 178000, '8.193', NULL, NULL),
(9, 'Iran', 125000, '7.199', NULL, NULL),
(10, 'Kanada', 79112, '5.912', NULL, NULL),
(11, 'Belanda', 44249, '5.715', NULL, NULL),
(12, 'Meksiko', 54346, '5.666', NULL, NULL),
(13, 'China', 82965, '4.634', NULL, NULL),
(14, 'Turki', 152000, '4.199', NULL, NULL),
(15, 'Swedia', 30799, '3.743', NULL, NULL),
(16, 'India', 107000, '3.303', NULL, NULL),
(19, 'Jepang', 16367, '768', NULL, NULL),
(20, 'Qatar', 35606, '15', NULL, NULL),
(21, 'Ekuador', 34151, '2.839', NULL, NULL),
(22, 'Swiss', 30618, '1.614', NULL, NULL),
(23, 'Portugal', 29432, '1.249', NULL, NULL),
(24, 'Singapura', 29364, '22', NULL, NULL),
(25, 'Bangladesh', 25121, '370', NULL, NULL),
(26, 'Uni Emirat Arab', 25063, '227', NULL, NULL),
(27, 'Irlandia', 24251, '1.561', NULL, NULL),
(28, 'Polandia', 19569, '953', NULL, NULL),
(29, 'Ukraina', 19230, '564', NULL, NULL),
(30, 'Afrika Selatan', 17200, '312', NULL, NULL),
(31, 'Romania', 17191, '1.126', NULL, NULL),
(32, 'Kolombia', 16935, '613', NULL, NULL),
(33, 'Kuwait', 16764, '121', NULL, NULL),
(34, 'Irael', 16650, '277', NULL, NULL),
(35, 'Austria', 16272, '632', NULL, NULL),
(36, 'Mesir', 13484, '659', NULL, NULL),
(37, 'Republik Dominika', 13223, '441', NULL, NULL),
(38, 'Filipina', 12942, '837', NULL, NULL),
(39, 'Korea Selatan', 11110, '263', NULL, NULL),
(40, 'Denmark', 11044, '561', NULL, NULL),
(41, 'Serbia', 10733, '234', NULL, NULL),
(42, 'Panana', 9762, '279', NULL, NULL),
(43, 'Argentina', 8783, '393', NULL, NULL),
(44, 'Ceko', 8647, '302', NULL, NULL),
(45, 'Norwegia', 8267, '233', NULL, NULL),
(46, 'Afganistan', 7653, '178', NULL, NULL),
(47, 'Bahrain', 7532, '12', NULL, NULL),
(48, 'Algeria', 7377, '561', NULL, NULL);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'LAla', 'rifqi@gmail.com', NULL, '123', NULL, NULL, NULL),
(2, 'rifqi', 'rifqifauzanadzikra@gmail.com', NULL, '12345', NULL, NULL, NULL),
(4, 'lala', 'm.ervan23@yahoo.com', NULL, '12345', NULL, NULL, NULL),
(5, 'Sana', 'sana@gmail.com', NULL, '12345', NULL, NULL, NULL),
(6, 'rifqi', 'ria@gmai.bom', NULL, '123', NULL, NULL, NULL),
(7, 'irsyad', 'irsyadagung08@gmail.com', NULL, '12345', NULL, NULL, NULL),
(8, 'rr', 'r@e', NULL, '123', NULL, NULL, NULL),
(9, 'evan volaca simola stban', 'volacastban@illaalla.com', NULL, '123456', NULL, NULL, NULL),
(10, 'dua peep simarimar waw', 'poopdua@lollpoop.com', NULL, '1234567', NULL, NULL, NULL),
(11, 'naop gialm meey', 'bopapp@bnana.com', NULL, '12345678', NULL, NULL, NULL);

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
-- Indexes for table `t_rsrujuk`
--
ALTER TABLE `t_rsrujuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_statistik`
--
ALTER TABLE `t_statistik`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_rsrujuk`
--
ALTER TABLE `t_rsrujuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `t_statistik`
--
ALTER TABLE `t_statistik`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
