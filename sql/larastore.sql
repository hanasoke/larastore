-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 21, 2026 at 07:46 AM
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
-- Database: `larastore`
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
-- Table structure for table `gurus`
--

CREATE TABLE `gurus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gelar` varchar(255) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `usia` int(10) UNSIGNED DEFAULT NULL,
  `mata_pelajaran` varchar(255) NOT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `universitas` varchar(255) DEFAULT NULL,
  `pengalaman` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `foto` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gurus`
--

INSERT INTO `gurus` (`id`, `slug`, `nama`, `gelar`, `jenis_kelamin`, `usia`, `mata_pelajaran`, `pendidikan`, `universitas`, `pengalaman`, `foto`, `icon`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'arif-budi-setiawan', 'Arif Budi Setiawan', 'S.Pd.', 'Laki-laki', 35, 'Bahasa Indonesia', 'S1 Pendidikan Bahasa dan Sastra Indonesia', 'Universitas Negeri Jakarta', 7, 'images/foto_guru/foto_profil_guru_bahasa_indonesia.png', 'images/icons/subjects/icon_pelajaran_bahasa_indonesia.png', 'Pengajar Bahasa Indonesia yang membantu siswa memahami tata bahasa, karya sastra, membaca, dan teknik menulis.', '2026-09-20 20:47:01', '2026-09-20 20:47:01'),
(2, 'sinta-utami', 'Sinta Utami', 'S.Pd.', 'Perempuan', 29, 'Bahasa Inggris', 'S1 Pendidikan Bahasa Inggris', 'Universitas Pendidikan Indonesia', 5, 'images/foto_guru/foto_profil_guru_bahasa_inggris.png', 'images/icons/subjects/icon_pelajaran_bahasa_inggris.png', 'Pengajar Bahasa Inggris yang berfokus pada grammar, vocabulary, speaking, reading, dan writing.', '2026-09-20 20:47:02', '2026-09-20 20:47:02'),
(3, 'nadia-lestari', 'Nadia Lestari', 'S.Si.', 'Perempuan', 31, 'Biologi', 'S1 Biologi', 'Universitas Indonesia', 6, 'images/foto_guru/foto_profil_guru_biologi.png', 'images/icons/subjects/icon_pelajaran_biologi.png', 'Pengajar Biologi yang membantu siswa memahami kehidupan, anatomi, genetika, ekosistem, dan berbagai konsep biologi.', '2026-09-20 20:47:02', '2026-09-20 20:47:02'),
(4, 'ajeng-lestika-sari', 'Ajeng Lestika Sari', 'S.E.', 'Perempuan', 34, 'Ekonomi', 'S1 Ekonomi', 'Universitas Diponegoro', 8, 'images/foto_guru/foto_profil_guru_ekonomi.png', 'images/icons/subjects/icon_pelajaran_ekonomi.png', 'Pengajar Ekonomi yang membantu siswa memahami konsep ekonomi, akuntansi, pasar, dan kegiatan perekonomian.', '2026-09-20 20:47:02', '2026-09-20 20:47:02'),
(5, 'andi-saputra', 'Andi Saputra', 'S.Pd.', 'Laki-laki', 33, 'Fisika', 'S1 Pendidikan Fisika', 'Universitas Negeri Yogyakarta', 6, 'images/foto_guru/foto_profil_guru_fisika.png', 'images/icons/subjects/icon_pelajaran_fisika.png', 'Pengajar Fisika yang membantu siswa memahami mekanika, listrik, gelombang, dan energi.', '2026-09-20 20:47:02', '2026-09-20 20:47:02'),
(6, 'bahrudin-umar', 'Bahrudin Umar', 'S.Pd.', 'Laki-laki', 37, 'Geografi', 'S1 Pendidikan Geografi', 'Universitas Negeri Semarang', 9, 'images/foto_guru/foto_profil_guru_geografi.png', 'images/icons/subjects/icon_pelajaran_geografi.png', 'Pengajar Geografi yang mendalami lingkungan, kependudukan, pemetaan, dan fenomena alam.', '2026-09-20 20:47:02', '2026-09-20 20:47:02'),
(7, 'maha-putri', 'Maha Putri', 'S.Si.', 'Perempuan', 30, 'Kimia', 'S1 Kimia', 'Institut Teknologi Bandung', 5, 'images/foto_guru/foto_profil_guru_kimia.png', 'images/icons/subjects/icon_pelajaran_kimia.png', 'Pengajar Kimia yang membantu siswa memahami atom, ikatan kimia, larutan, dan perhitungan kimia.', '2026-09-20 20:47:02', '2026-09-20 20:47:02'),
(8, 'fajar-nugroho', 'Fajar Nugroho', 'S.Pd.', 'Laki-laki', 32, 'Matematika', 'S1 Pendidikan Matematika', 'Universitas Negeri Malang', 7, 'images/foto_guru/foto_profil_guru_matematika.png', 'images/icons/subjects/icon_pelajaran_matematika.png', 'Pengajar Matematika yang berpengalaman dalam aljabar, geometri, statistika, dan kalkulus.', '2026-09-20 20:47:02', '2026-09-20 20:47:02'),
(9, 'listyo-edi-prabowo', 'Listyo Edi Prabowo', 'S.Pd.', 'Laki-laki', 36, 'Pendidikan Pancasila', 'S1 Pendidikan Pancasila dan Kewarganegaraan', 'Universitas Negeri Surabaya', 8, 'images/foto_guru/foto_profil_guru_pkn.png', 'images/icons/subjects/icon_pelajaran_pkn.png', 'Pengajar Pendidikan Pancasila yang membahas Pancasila, konstitusi, hak warga negara, dan demokrasi.', '2026-09-20 20:47:02', '2026-09-20 20:47:02'),
(10, 'nurul-febriati', 'Nurul Febriati', 'S.Sos.', 'Perempuan', 30, 'Sosiologi', 'S1 Sosiologi', 'Universitas Gadjah Mada', 5, 'images/foto_guru/foto_profil_guru_sosiologi.png', 'images/icons/subjects/icon_pelajaran_sosiologi.png', 'Pengajar Sosiologi yang membantu siswa memahami interaksi sosial, perubahan sosial, konflik, dan masyarakat.', '2026-09-20 20:47:02', '2026-09-20 20:47:02');

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
-- Table structure for table `kontaks`
--

CREATE TABLE `kontaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `subjek` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kontaks`
--

INSERT INTO `kontaks` (`id`, `nama`, `email`, `no_hp`, `subjek`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'Hanas Bayu Pratama', 'hanasbayupratama@gmail.com', '085819536158', 'Biaya', 'berapa biaya bimbingan untuk satu semester ?', '2026-09-10 04:36:46', '2026-09-10 04:36:46'),
(2, 'Hanas Bayu Pratama', 'hanasbayupratama@gmail.com', '085199679134', 'Jadwal Belajar', 'dalam seminggu ada berapa kali jadwal belajar ?', '2026-09-10 04:42:01', '2026-09-10 04:42:01'),
(3, 'MItsuba AOI', 'mitsubaaoi@gmail.com', '087127643123123', 'Informasi Program', 'Program apa saja yang ditawarkan oleh bimbel ini ?', '2026-09-10 04:47:08', '2026-09-10 04:47:08');

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
(4, '2026_09_10_052529_create_kontaks_table', 1),
(5, '2026_09_17_020718_create_personal_access_tokens_table', 2),
(6, '2026_09_21_032153_create_gurus_table', 3);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('aEtwOJ3VosVYTZWj8fBzGN4u7DaJPJoQ8QiVGAtF', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaWhtd3poM0xVRjF5NmdlYnl6eWRYdkpqTUF6M0Rac2xVOWpaZHRuWiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9rb250YWsiO3M6NToicm91dGUiO3M6Njoia29udGFrIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1789553401),
('DVqPnX4ma3IPVxNI3FRmjalP5O4cY3qzn0ebYYVs', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUFBqZnVRemE1aDAyWVBZbmUxMXpXNjFuMUJ1c1ZPZXdWRENjdHBGMiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9rb250YWsiO3M6NToicm91dGUiO3M6Njoia29udGFrIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1789040828),
('GY6Bwu9xgk8OfM2PDuV2syIx9w2Mwfdltad2plUe', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWVdERGJnSWxSSXl4czNtNEtXcERTcXF0RWxyclJZS0lwazNHM1JycyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9rb250YWsiO3M6NToicm91dGUiO3M6Njoia29udGFrIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1789553429),
('N5YVdDLvqkcdsj14ck3TSRjvF9FOzNtNciODkX8H', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidGdjWGpJOXpEMDQ3VWNZQ1JIVDVsNHAybks1VmRWd3JsNGlZdTI1ZCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1789533465),
('sNNVh4GLW9gUwxZ2yth68Jkr2jpce8j7sYrgcsnO', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRGdSbHRUUVFKUnE3c2M1V3E3TkNFWlgzNmhMSW5tdUJSaG81dGFSMCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ndXJ1IjtzOjU6InJvdXRlIjtzOjQ6Imd1cnUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1789964224);

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gurus`
--
ALTER TABLE `gurus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gurus_slug_unique` (`slug`);

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
-- Indexes for table `kontaks`
--
ALTER TABLE `kontaks`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`),
  ADD KEY `personal_access_tokens_expires_at_index` (`expires_at`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gurus`
--
ALTER TABLE `gurus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kontaks`
--
ALTER TABLE `kontaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
