-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2021 at 09:54 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodatas`
--

CREATE TABLE `biodatas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_test` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fotoktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no` bigint(20) NOT NULL,
  `kota` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hasil_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hasils`
--

CREATE TABLE `hasils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_test` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persentase` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `result_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `kota`, `created_at`, `updated_at`) VALUES
(1, 'BANJARNEGARA', NULL, NULL),
(2, 'BATANG', NULL, NULL),
(3, 'BLORA', NULL, NULL),
(4, 'BOYOLALI', NULL, NULL),
(5, 'BREBES', NULL, NULL),
(6, 'CILACAP', NULL, NULL),
(7, 'DEMAK', NULL, NULL),
(8, 'GROBOGAN', NULL, NULL),
(9, 'PURBALINGGA', NULL, NULL),
(10, 'KEBUMEN', NULL, NULL),
(11, 'PURWOREJO', NULL, NULL),
(12, 'WONOSOBO', NULL, NULL),
(13, 'MAGELANG', NULL, NULL),
(14, 'KLATEN', NULL, NULL),
(15, 'SUKOHARJO', NULL, NULL),
(16, 'WONOGIRI', NULL, NULL),
(17, 'KARANGANYAR', NULL, NULL),
(18, 'SRAGEN', NULL, NULL),
(19, 'REMBANG', NULL, NULL),
(20, 'PATI', NULL, NULL),
(21, 'KUDUS', NULL, NULL),
(22, 'JEPARA', NULL, NULL),
(23, 'SEMARANG', NULL, NULL),
(24, 'TEMANGGUNG', NULL, NULL),
(25, 'KENDAL', NULL, NULL),
(26, 'PEKALONGAN', NULL, NULL),
(27, 'PEMALANG', NULL, NULL),
(28, 'TEGAL', NULL, NULL),
(29, 'KOTA MAGELANG', NULL, NULL),
(30, 'KOTA SURAKARTA', NULL, NULL),
(31, 'KOTA SALATIGA', NULL, NULL),
(32, 'KOTA SEMARANG', NULL, NULL),
(33, 'KOTA PEKALONGAN', NULL, NULL),
(34, 'KOTA TEGAL', NULL, NULL),
(42, 'BANYUMAS', NULL, NULL);

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
(26, '2020_12_30_033525_add_biodatas_to_hasils_table', 2),
(123, '2021_01_13_061003_alter_table_biodatas', 4),
(428, '2014_10_12_000000_create_users_table', 5),
(429, '2014_10_12_100000_create_password_resets_table', 5),
(430, '2019_08_19_000000_create_failed_jobs_table', 5),
(431, '2020_12_26_100737_create_biodata_table', 5),
(432, '2020_12_26_213500_create_test_table', 5),
(433, '2020_12_27_190344_create_hasil_table', 5),
(434, '2020_12_30_073055_add_biodata_id_to_hasils_table', 5),
(435, '2021_01_02_062856_add_tgl_to_biodatas_table', 5),
(436, '2021_01_04_005833_add_no_test_to_biodatas_table', 5),
(437, '2021_01_04_123958_add_id_result_to_hasils_table', 5),
(438, '2021_01_04_135706_create_result_table', 5),
(439, '2021_01_13_070258_alter_table_biodatas', 5),
(440, '2021_01_16_190513_create_kota_table', 5);

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
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desc_result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saran` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edukasi` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `desc_result`, `img`, `keterangan`, `saran`, `edukasi`, `bg`) VALUES
(1, 'Bukan ODP / PDP', 'Sehat.png', 'Resiko Tidak Ada', 'Alhamdulillah Anda sehat dan bukan kategori terpapar Virus COVID-19.', 'Terapkan Perilaku Hidup Bersih dan Sehat (PHBS), rajin cuci tangan sesuai standar kesehatan, istirahat jika kondisi tidak sehat, hindari keramaian, jaga jarak 1 meter dari orang disekitar dan memakai masker jika terkena batuk dan pilek. Tingkatkan rasa syukur kepada Allah SWT karena sudah diberi kesehatan.', 'bg-success\r\n'),
(2, 'Orang Tanpa Gejala (OTG)', 'OTG.png', 'Resiko Rendah', 'WAJIB ISOLASI DIRI MANDIRI DI RUMAH, setidaknya 14 hari dan lakukan pemantauan kesehatan mandiri jika terjadi perburukan kondisi dan muncul gejala segera laporkan ke nomor kontak layanan yang tersedia.', 'Terapkan Perilaku Hidup Bersih dan Sehat (PHBS), rajin cuci tangan sesuai standar kesehatan, istirahat jika kondisi tidak sehat, hindari keramaian, jaga jarak 1 meter dari orang disekitar dan memakai masker jika terkena batuk dan pilek. Tingkatkan rasa syukur kepada Allah SWT karena sudah diberi kesehatan.', 'bg-primary'),
(3, 'Orang Dalam Pemantauan (ODP)', 'ODP.png', 'Resiko Rentan', 'LAPORKAN, melalui kontak layanan kesehatan yang tersedia dan WAJIB ISOLASI DIRI MANDIRI DI RUMAH', 'Terapkan Perilaku Hidup Bersih dan Sehat (PHBS), rajin cuci tangan sesuai standar kesehatan, istirahat jika kondisi tidak sehat, hindari keramaian, jaga jarak 1 meter dari orang disekitar dan memakai masker jika terkena batuk dan pilek.', 'bg-warning'),
(4, 'Pasien Dalam Pengawasan (PDP)', 'PDP.png', 'Resiko Tinggi', 'HUBUNGI SEGERA, nomor kontak layanan kesehatan yang tersedia / terdekat dan ikuti instruksi selanjutnya.', 'Terapkan Perilaku Hidup Bersih dan Sehat (PHBS), rajin cuci tangan sesuai standar kesehatan, istirahat jika kondisi tidak sehat, hindari keramaian, jaga jarak 1 meter dari orang disekitar dan memakai masker jika terkena batuk dan pilek.', 'bg-danger');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `indikator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tidak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `knc_jawaban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `indikator`, `ya`, `tidak`, `knc_jawaban`, `aktif`, `created_at`, `updated_at`) VALUES
(1, 'Saat ini saya sedang merasakan demam', 'Ya', 'Tidak', 'ya', 'Y', '2021-01-16 04:31:28', '2021-01-16 04:31:28'),
(2, 'Saat ini saya sedang merasakan batuk / pilek', 'Ya', 'Tidak', 'ya', 'Y', '2021-01-16 04:32:09', '2021-01-16 04:32:09'),
(3, 'Saat ini saya merasa kesulitan bernafas atau sesak nafas', 'Ya', 'Tidak', 'ya', 'Y', '2021-01-16 04:32:25', '2021-01-16 04:32:25'),
(4, 'Saat ini saya sedang mengalami nyeri tenggorokan', 'Ya', 'Tidak', 'ya', 'Y', '2021-01-16 04:32:40', '2021-01-16 04:32:40'),
(5, 'Lama penyakit kurang dari 14 hari', 'Ya', 'Tidak', 'ya', 'Y', '2021-01-16 04:33:01', '2021-01-16 04:34:21'),
(6, 'Memiliki riwayat kontak erat dengan penderita terkonfirmasi COVID-19 atau probabel COVID-19', 'Ya', 'Tidak', 'ya', 'Y', '2021-01-16 04:33:16', '2021-01-16 04:34:36'),
(7, 'Memiliki riwayat perjalanan atau tinggal diluar negeri yang melakukan penularan lokal', 'Ya', 'Tidak', 'ya', 'Y', '2021-01-16 04:34:51', '2021-01-16 04:34:51'),
(8, 'Memiliki riwayat perjalanan atau tinggal diarea penularan lokal di Indonesia', 'Ya', 'Tidak', 'ya', 'Y', '2021-01-16 04:35:05', '2021-01-16 04:35:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailadmin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `emailadmin`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Diskominfo jateng', 'Diskominfo@gmail.com', NULL, '$2y$10$Y7zpmm8HH5TYyvd8wCTuf.5WC8hu2yhpmy.bU7W3TJlhkKkE5ONHq', NULL, NULL, NULL, '2021-01-16 04:25:08', '2021-01-16 04:25:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodatas`
--
ALTER TABLE `biodatas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hasils`
--
ALTER TABLE `hasils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
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
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_emailadmin_unique` (`emailadmin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodatas`
--
ALTER TABLE `biodatas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasils`
--
ALTER TABLE `hasils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=441;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
