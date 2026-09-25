-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 25, 2026 at 04:09 PM
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
(6, '2026_09_21_032153_create_gurus_table', 3),
(7, '2026_09_21_075833_create_programs_table', 4);

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
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `nama_program` varchar(255) NOT NULL,
  `mata_pelajaran` varchar(255) NOT NULL,
  `jenjang` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `jadwal` varchar(255) DEFAULT NULL,
  `harga` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `gambar` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `aktif` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `slug`, `nama_program`, `mata_pelajaran`, `jenjang`, `deskripsi`, `jadwal`, `harga`, `gambar`, `icon`, `aktif`, `created_at`, `updated_at`) VALUES
(1, 'matematika-sd', 'Matematika SD', 'Matematika', 'SD', 'Program Matematika untuk membantu siswa SD memahami konsep dasar matematika dan meningkatkan kemampuan berhitung.', 'Senin & Rabu, 16.00 - 17.30', 150000, 'images/program/matematika-sd.jpg', 'images/icons/subjects/icon_pelajaran_matematika.png', 1, '2026-09-21 01:25:43', '2026-09-23 01:44:14'),
(2, 'matematika-smp', 'Matematika SMP', 'Matematika', 'SMP', 'Program Matematika SMP dengan pembahasan aljabar, geometri, statistika, dan persiapan ujian.', 'Selasa & Kamis, 16.00 - 17.30', 200000, 'images/program/matematika-smp.jpg', 'images/icons/subjects/icon_pelajaran_matematika.png', 1, '2026-09-21 01:25:43', '2026-09-23 01:44:14'),
(3, 'matematika-sma', 'Matematika SMA', 'Matematika', 'SMA', 'Program Matematika SMA untuk membantu siswa memahami aljabar, trigonometri, statistika, dan kalkulus.', 'Senin & Kamis, 18.30 - 20.00', 250000, 'images/program/matematika-sma.jpg', 'images/icons/subjects/icon_pelajaran_matematika.png', 1, '2026-09-21 01:25:43', '2026-09-23 01:44:14'),
(4, 'bahasa-indonesia-sma', 'Bahasa Indonesia SMA', 'Bahasa Indonesia', 'SMA', 'Program Bahasa Indonesia untuk meningkatkan kemampuan membaca, memahami teks, menulis, dan persiapan ujian.', 'Selasa & Jumat, 18.30 - 20.00', 200000, 'images/program/bahasa-indonesia.jpg', 'images/icons/subjects/icon_pelajaran_bahasa_indonesia.png', 1, '2026-09-21 01:25:43', '2026-09-21 01:25:43'),
(5, 'bahasa-inggris-sma', 'Bahasa Inggris SMA', 'Bahasa Inggris', 'SMA', 'Program Bahasa Inggris yang membahas grammar, vocabulary, reading, writing, dan speaking.', 'Rabu & Jumat, 18.30 - 20.00', 220000, 'images/program/bahasa-inggris.jpg', 'images/icons/subjects/icon_pelajaran_bahasa_inggris.png', 1, '2026-09-21 01:25:43', '2026-09-21 01:25:43'),
(6, 'fisika-sma', 'Fisika SMA', 'Fisika', 'SMA', 'Program Fisika SMA dengan pembahasan mekanika, energi, listrik, gelombang, dan latihan soal.', 'Selasa & Kamis, 18.30 - 20.00', 250000, 'images/program/fisika.jpg', 'images/icons/subjects/icon_pelajaran_fisika.png', 1, '2026-09-21 01:25:43', '2026-09-21 01:25:43'),
(7, 'kimia-sma', 'Kimia SMA', 'Kimia', 'SMA', 'Program Kimia SMA untuk memahami atom, ikatan kimia, stoikiometri, larutan, dan kimia organik.', 'Senin & Rabu, 18.30 - 20.00', 250000, 'images/program/kimia-sma.jpg', 'images/icons/subjects/icon_pelajaran_kimia.png', 1, '2026-09-21 01:25:43', '2026-09-23 01:44:14'),
(8, 'biologi-sma', 'Biologi SMA', 'Biologi', 'SMA', 'Program Biologi SMA yang membahas sel, genetika, anatomi, sistem organ, evolusi, dan ekologi.', 'Rabu & Sabtu, 16.00 - 17.30', 230000, 'images/program/biologi.jpg', 'images/icons/subjects/icon_pelajaran_biologi.png', 1, '2026-09-21 01:25:43', '2026-09-21 01:25:43'),
(9, 'fisika-smp', 'Fisika SMP', 'Fisika', 'SMP', 'Program Fisika SMP untuk membantu siswa memahami konsep dasar gerak, gaya, energi, tekanan, getaran, gelombang, dan listrik.', 'Senin & Rabu, 16.00 - 17.30', 200000, 'images/program/fisika-smp.jpg', 'images/icons/subjects/icon_pelajaran_fisika.png', 1, '2026-09-23 00:53:25', '2026-09-23 00:53:25'),
(10, 'sosiologi-sma', 'Sosiologi SMA', 'Sosiologi', 'SMA', 'Program Sosiologi SMA untuk membantu siswa memahami interaksi sosial, kelompok sosial, perubahan sosial, konflik, integrasi, dan kehidupan masyarakat.', 'Selasa & Kamis, 16.00 - 17.30', 200000, 'images/program/sosiologi.jpg', 'images/icons/subjects/icon_pelajaran_sosiologi.png', 1, '2026-09-23 00:53:25', '2026-09-23 00:53:25'),
(11, 'ekonomi-sma', 'Ekonomi SMA', 'Ekonomi', 'SMA', 'Program Ekonomi SMA untuk membantu siswa memahami konsep ekonomi, permintaan dan penawaran, pasar, perbankan, akuntansi, serta ekonomi makro dan mikro.', 'Senin & Kamis, 18.30 - 20.00', 220000, 'images/program/ekonomi.jpg', 'images/icons/subjects/icon_pelajaran_ekonomi.png', 1, '2026-09-23 00:53:25', '2026-09-23 00:53:25'),
(12, 'biologi-smp', 'Biologi SMP', 'Biologi', 'SMP', 'Program Biologi SMP untuk membantu siswa memahami makhluk hidup, sel, sistem organ manusia, ekosistem, klasifikasi, dan lingkungan.', 'Rabu & Jumat, 16.00 - 17.30', 200000, 'images/program/biologi-smp.jpg', 'images/icons/subjects/icon_pelajaran_biologi.png', 1, '2026-09-23 00:53:25', '2026-09-23 00:53:25'),
(13, 'geografi-sma', 'Geografi SMA', 'Geografi', 'SMA', 'Program Geografi SMA untuk membantu siswa memahami pemetaan, atmosfer, hidrosfer, litosfer, kependudukan, lingkungan, dan wilayah.', 'Selasa & Jumat, 18.30 - 20.00', 210000, 'images/program/geografi.jpg', 'images/icons/subjects/icon_pelajaran_geografi.png', 1, '2026-09-23 00:53:25', '2026-09-23 00:53:25'),
(14, 'ips-smp', 'IPS SMP', 'IPS', 'SMP', 'Program IPS SMP untuk membantu siswa memahami materi geografi, ekonomi, sejarah, dan sosiologi secara terstruktur dan mudah dipahami.', 'Senin & Rabu, 16.00 - 17.30', 200000, 'images/program/ips-smp.jpg', 'images/icons/subjects/icon_pelajaran_ips.jpg', 1, '2026-09-23 01:44:14', '2026-09-23 01:44:14'),
(15, 'bahasa-jepang-sma', 'Bahasa Jepang SMA', 'Bahasa Jepang', 'SMA', 'Program Bahasa Jepang untuk membantu siswa mempelajari kosakata, tata bahasa, percakapan dasar, Hiragana, Katakana, dan pengenalan Kanji.', 'Sabtu, 13.00 - 15.00', 220000, 'images/program/bahasa-jepang.jpg', 'images/icons/subjects/icon_pelajaran_bahasa_jepang.png', 1, '2026-09-23 01:44:15', '2026-09-23 01:44:15'),
(16, 'bahasa-inggris-smp', 'Bahasa Inggris SMP', 'Bahasa Inggris', 'SMP', 'Program Bahasa Inggris SMP untuk meningkatkan kemampuan grammar, vocabulary, reading, writing, listening, dan speaking siswa.', 'Selasa & Kamis, 16.00 - 17.30', 200000, 'images/program/bahasa-inggris-smp.jpg', 'images/icons/subjects/icon_pelajaran_bahasa_inggris.png', 1, '2026-09-23 01:44:15', '2026-09-23 01:44:15'),
(17, 'kimia-smp', 'Kimia SMP', 'Kimia', 'SMP', 'Program Kimia SMP untuk membantu siswa memahami konsep dasar materi, unsur, senyawa, campuran, perubahan zat, asam basa, dan konsep kimia dasar.', 'Rabu & Jumat, 16.00 - 17.30', 200000, 'images/program/kimia-smp.jpg', 'images/icons/subjects/icon_pelajaran_kimia.png', 1, '2026-09-23 01:44:15', '2026-09-23 01:44:15');

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
('AOoupczOVcEcAqDtHV9GrgRX3LGrqSyvRzzXHod4', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZXFvbkU1c3NnWWt2R1QwUExFSGNJRklsTFV1R0k4bEVTS21Yb3JkQiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1790345318),
('Hy40kzvbL5MmrtubHyAa3sPS37dqHhhBPmxY3WTj', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUUdQcTkzb1R6emF2R2dwb1lVU2hVb09JTVlYMFhCSG9FUUJPY3ZuZCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1790345318),
('waqSsVocGSHtW4SiKmsCDwX0BewY2nj2JZoJqY31', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZkx2bVRZNkpxR3VzOHRmNTFWemFhZ2U3MXM3MkZQQ2h0b2NLVjFjWSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1790345317),
('Wdo1wx8YVh1I90Jj6r1d3SdPjEd5dL5Igsd7hE7r', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYkhrZXRoTHhwak9ubnNaeFg3bGE3VDdKSDU3cTVjUzQ2MXdLUmpveCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1790345370),
('YcU5qaCvyg3oz6wepvty8Mmc0hj8i9w1V16FdjwT', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQm50dkNRSUdVeG5xV29aNVNYWEl0dlYxcjFrRzFHUkRrTmxMSDNGWCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9ncmFtL3Nvc2lvbG9naS1zbWEiO3M6NToicm91dGUiO3M6MTQ6InByb2dyYW0uZGV0YWlsIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1790247258),
('ywzDCgPRUyNdk1MTB6CBZmfFhxWPlPui4lvJ7ou9', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWHcxUjRTUE16cUF2am1PNDU1eExldEpZeUJEa3VxV05pSzlnV2ZnOCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1790345318);

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
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `programs_slug_unique` (`slug`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
