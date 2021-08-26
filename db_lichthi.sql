-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 19, 2021 lúc 09:46 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_lichthi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bomon`
--

CREATE TABLE `bomon` (
  `ID_BoMon` int(10) NOT NULL,
  `ID_Khoa` int(11) NOT NULL,
  `MaBoMon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenBoMon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GhiChu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bomon`
--

INSERT INTO `bomon` (`ID_BoMon`, `ID_Khoa`, `MaBoMon`, `TenBoMon`, `GhiChu`, `created_at`, `updated_at`) VALUES
(1, 1, 'BM1', 'Bộ Môn 1', 'Bộ Môn 1', '2020-08-06 06:20:57', '2020-08-06 06:20:57'),
(2, 1, 'BM2', 'Bộ Môn 2', 'Bộ Môn 2', '2020-08-06 06:21:39', '2020-08-06 06:21:39'),
(3, 2, 'BM3', 'Bộ Môn 3', 'Bộ Môn 3', '2020-08-06 06:22:06', '2020-08-06 06:22:06'),
(4, 2, 'BM4', 'Bộ Môn 4', 'Bộ Môn 4', '2020-08-06 06:22:30', '2020-08-06 06:22:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctlichthi`
--

CREATE TABLE `ctlichthi` (
  `ID_CTLichThi` int(10) UNSIGNED NOT NULL,
  `ID_LichThi` int(11) NOT NULL,
  `ID_Phong` int(11) NOT NULL,
  `ID_GiaoVien` int(11) NOT NULL,
  `GiaoVien1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GiaoVien2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GhiChu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `giaovien`
--

CREATE TABLE `giaovien` (
  `ID_GiaoVien` int(10) NOT NULL,
  `ID_BoMon` int(11) NOT NULL,
  `MaGiaoVien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HoTen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ChucVu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MatKhau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giaovien`
--

INSERT INTO `giaovien` (`ID_GiaoVien`, `ID_BoMon`, `MaGiaoVien`, `HoTen`, `ChucVu`, `MatKhau`, `created_at`, `updated_at`) VALUES
(1, 1, 'GV1', 'Giáo Viên 1', 'Giáo Viên', 'giaovien1', '2020-08-06 06:23:44', '2020-08-06 06:23:44'),
(2, 1, 'GV2', 'Giáo Viên 2', 'Giáo Viên', 'giaovien2', '2020-08-06 06:24:09', '2020-08-06 06:24:09'),
(3, 2, 'GV3', 'Giáo Viên 3', 'Giáo Viên', 'giaovien3', '2020-08-06 06:24:45', '2020-08-06 06:24:45'),
(4, 2, 'GV4', 'Giáo Viên 4', 'Giáo Viên', 'gioavien4', '2020-08-06 06:25:19', '2020-08-06 06:35:24'),
(5, 3, 'GV5', 'Giáo Viên 5', 'Giáo Viên', 'giaovien5', '2020-08-06 06:25:51', '2020-08-06 06:32:25'),
(6, 3, 'GV6', 'Giáo Viên 6', 'Giáo Viên', 'giaovien6', '2020-08-06 06:32:53', '2020-08-06 06:35:30'),
(7, 4, 'GV7', 'Giáo Viên 7', 'Giáo Viên', 'giaovien7', '2020-08-06 06:34:14', '2020-08-06 06:34:14'),
(8, 4, 'GV8', 'Giáo Viên 8', 'Giáo Viên', 'giaovien8', '2020-08-06 06:34:45', '2020-08-06 06:35:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocphan`
--

CREATE TABLE `hocphan` (
  `ID_HocPhan` int(10) NOT NULL,
  `ID_BoMon` int(11) NOT NULL,
  `MaHocPhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenHocPhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoTinChi` int(11) NOT NULL,
  `HinhThucThi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GhiChu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hocphan`
--

INSERT INTO `hocphan` (`ID_HocPhan`, `ID_BoMon`, `MaHocPhan`, `TenHocPhan`, `SoTinChi`, `HinhThucThi`, `GhiChu`, `created_at`, `updated_at`) VALUES
(2, 1, 'HP1', 'Học Phần 1', 2, 'Trắc nghiệm', 'Trắc nghiệm', '2020-08-06 06:37:13', '2020-08-06 06:37:13'),
(3, 1, 'HP2', 'Học Phần 2', 3, 'Vấn Đáp', 'Vấn Đáp', '2020-08-06 06:40:22', '2020-08-06 06:41:24'),
(4, 2, 'HP3', 'Học Phần 3', 4, 'Vấn Đáp', 'Vấn Đáp', '2020-08-06 06:43:31', '2020-08-06 06:43:31'),
(5, 2, 'HP4', 'Học Phần 4', 3, 'Viết', 'Viết', '2020-08-06 06:43:51', '2020-08-06 06:43:51'),
(6, 3, 'HP5', 'Học Phần 5', 3, 'Trắc nghiệm', 'Trắc nghiệm', '2020-08-06 06:44:19', '2020-08-06 06:44:19'),
(7, 3, 'HP6', 'Học Phần 6', 3, 'Viết', 'Viết', '2020-08-06 06:45:11', '2020-08-06 06:45:11'),
(8, 4, 'HP7', 'Học Phần 7', 4, 'Vấn Đáp', 'Vấn Đáp', '2020-08-06 06:45:48', '2020-08-06 06:45:48'),
(9, 4, 'HP8', 'Học Phần 8', 3, 'Vấn Đáp', 'Vấn Đáp', '2020-08-06 06:46:06', '2020-08-06 06:46:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `ID_Khoa` int(10) NOT NULL,
  `MaKhoa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenKhoa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GhiChu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`ID_Khoa`, `MaKhoa`, `TenKhoa`, `GhiChu`, `created_at`, `updated_at`) VALUES
(1, 'K1', 'Khoa 1', 'Khoa 1', '2020-08-06 06:17:47', '2020-08-06 06:17:47'),
(2, 'K2', 'Khoa 2', 'Khoa 2', '2020-08-06 06:20:32', '2020-08-06 06:20:32'),
(21, 'K3', 'Khoa 3', 'Khoa 3', '2020-11-19 08:04:29', '2020-11-21 06:50:26'),
(23, 'K4', 'khoa 4', 'khoa 4', '2020-11-21 06:46:39', '2020-11-21 06:50:37'),
(24, 'K5', 'Khoa 5', 'Khoa 5', '2020-12-20 18:21:24', '2020-12-20 18:21:40'),
(25, 'K7', 'Khoa 7', 'Khoa 7', '2020-12-20 18:49:27', '2020-12-20 18:49:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichthi`
--

CREATE TABLE `lichthi` (
  `ID_LichThi` int(10) UNSIGNED NOT NULL,
  `MaHocPhan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NgayThi` datetime DEFAULT NULL,
  `ThoiGianThi` time DEFAULT NULL,
  `CaThi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SoPhong` int(11) DEFAULT NULL,
  `SoGiaoVien` int(11) DEFAULT NULL,
  `SoSinhVien` int(11) DEFAULT NULL,
  `GhiChu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2020_07_19_091241_create_khoa', 1),
(15, '2020_07_19_091546_create_bomon', 1),
(16, '2020_07_19_091615_create_hocphan', 1),
(17, '2020_07_19_091705_create_giaovien', 1),
(18, '2020_07_19_124817_create_nienkhoa', 1),
(19, '2020_08_06_122751_create_phong', 1),
(20, '2020_08_06_122932_create_nha', 1),
(28, '2020_08_10_125319_create_thi', 2),
(35, '2020_08_06_123047_create_lichthi', 3),
(36, '2020_08_06_124253_create_ctlichthi', 3),
(37, '2020_08_16_121934_create_phongthi', 3),
(38, '2020_08_24_125307_create_phancong', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nha`
--

CREATE TABLE `nha` (
  `ID_Nha` int(10) NOT NULL,
  `TenNha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GhiChu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nha`
--

INSERT INTO `nha` (`ID_Nha`, `TenNha`, `GhiChu`, `created_at`, `updated_at`) VALUES
(1, 'A1', 'A1', '2020-08-06 13:46:41', '2020-08-06 13:46:41'),
(2, 'A2', 'A2', '2020-08-06 13:47:09', '2020-08-06 13:47:09'),
(3, 'A3', 'A3', '2020-08-06 13:47:09', '2020-08-06 13:47:09'),
(4, 'A4', 'A4', '2020-08-06 13:47:37', '2020-08-06 13:47:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nienkhoa`
--

CREATE TABLE `nienkhoa` (
  `ID_NienKhoa` int(10) NOT NULL,
  `NienKhoa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phancong`
--

CREATE TABLE `phancong` (
  `ID_PhanCong` int(10) UNSIGNED NOT NULL,
  `ID_LichThi` int(11) NOT NULL,
  `HocPhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayThi` date NOT NULL,
  `CaThi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GiaoVien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GhiChu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `ID_Phong` int(10) NOT NULL,
  `ID_Nha` int(11) NOT NULL,
  `TenPhong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GhiChu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`ID_Phong`, `ID_Nha`, `TenPhong`, `GhiChu`, `created_at`, `updated_at`) VALUES
(1, 1, '101', 'Tầng 1', '2020-08-06 13:48:35', '2020-08-06 13:48:35'),
(2, 1, '102', 'Tầng 1', '2020-08-06 13:48:35', '2020-08-06 13:48:35'),
(3, 1, '103', 'Tầng 1', '2020-08-06 13:49:54', '2020-08-06 13:49:54'),
(4, 1, '104', 'Tầng 1', '2020-08-06 13:49:54', '2020-08-06 13:49:54'),
(5, 1, '201', 'Tầng 2', '2020-08-06 13:49:54', '2020-08-06 13:49:54'),
(6, 1, '202', 'Tầng 2', '2020-08-06 13:49:54', '2020-08-06 13:49:54'),
(7, 1, '203', 'Tầng 2', '2020-08-06 13:49:54', '2020-08-06 13:49:54'),
(8, 1, '204', 'Tầng 2', '2020-08-06 13:49:54', '2020-08-06 13:49:54'),
(9, 2, '101', 'Tầng 1', '2020-08-06 13:53:37', '2020-08-06 13:53:37'),
(10, 2, '102', 'Tầng 1', '2020-08-06 13:53:37', '2020-08-06 13:53:37'),
(11, 2, '103', 'Tầng 1', '2020-08-06 13:53:37', '2020-08-06 13:53:37'),
(12, 2, '104', 'Tầng 1', '2020-08-06 13:53:37', '2020-08-06 13:53:37'),
(13, 2, '201', 'Tầng 2', '2020-08-06 13:53:37', '2020-08-06 13:53:37'),
(14, 2, '202', 'Tầng 2', '2020-08-06 13:53:37', '2020-08-06 13:53:37'),
(15, 2, '203', 'Tầng 2', '2020-08-06 13:53:37', '2020-08-06 13:53:37'),
(16, 2, '204', 'Tầng 2', '2020-08-06 13:56:50', '2020-08-06 13:56:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongthi`
--

CREATE TABLE `phongthi` (
  `ID_PhongThi` int(10) UNSIGNED NOT NULL,
  `TenHocPhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayThi` date NOT NULL,
  `CaThi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoPhong` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bomon`
--
ALTER TABLE `bomon`
  ADD PRIMARY KEY (`ID_BoMon`),
  ADD KEY `ID_Khoa` (`ID_Khoa`);

--
-- Chỉ mục cho bảng `ctlichthi`
--
ALTER TABLE `ctlichthi`
  ADD PRIMARY KEY (`ID_CTLichThi`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  ADD PRIMARY KEY (`ID_GiaoVien`),
  ADD KEY `ID_BoMon` (`ID_BoMon`);

--
-- Chỉ mục cho bảng `hocphan`
--
ALTER TABLE `hocphan`
  ADD PRIMARY KEY (`ID_HocPhan`),
  ADD KEY `ID_BoMon` (`ID_BoMon`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`ID_Khoa`);

--
-- Chỉ mục cho bảng `lichthi`
--
ALTER TABLE `lichthi`
  ADD PRIMARY KEY (`ID_LichThi`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nha`
--
ALTER TABLE `nha`
  ADD PRIMARY KEY (`ID_Nha`);

--
-- Chỉ mục cho bảng `nienkhoa`
--
ALTER TABLE `nienkhoa`
  ADD PRIMARY KEY (`ID_NienKhoa`);

--
-- Chỉ mục cho bảng `phancong`
--
ALTER TABLE `phancong`
  ADD PRIMARY KEY (`ID_PhanCong`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`ID_Phong`),
  ADD KEY `ID_Nha` (`ID_Nha`);

--
-- Chỉ mục cho bảng `phongthi`
--
ALTER TABLE `phongthi`
  ADD PRIMARY KEY (`ID_PhongThi`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bomon`
--
ALTER TABLE `bomon`
  MODIFY `ID_BoMon` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `ctlichthi`
--
ALTER TABLE `ctlichthi`
  MODIFY `ID_CTLichThi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  MODIFY `ID_GiaoVien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `hocphan`
--
ALTER TABLE `hocphan`
  MODIFY `ID_HocPhan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `khoa`
--
ALTER TABLE `khoa`
  MODIFY `ID_Khoa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `lichthi`
--
ALTER TABLE `lichthi`
  MODIFY `ID_LichThi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `nha`
--
ALTER TABLE `nha`
  MODIFY `ID_Nha` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `nienkhoa`
--
ALTER TABLE `nienkhoa`
  MODIFY `ID_NienKhoa` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phancong`
--
ALTER TABLE `phancong`
  MODIFY `ID_PhanCong` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phong`
--
ALTER TABLE `phong`
  MODIFY `ID_Phong` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `phongthi`
--
ALTER TABLE `phongthi`
  MODIFY `ID_PhongThi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bomon`
--
ALTER TABLE `bomon`
  ADD CONSTRAINT `bomon_ibfk_1` FOREIGN KEY (`ID_Khoa`) REFERENCES `khoa` (`ID_Khoa`);

--
-- Các ràng buộc cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  ADD CONSTRAINT `giaovien_ibfk_1` FOREIGN KEY (`ID_BoMon`) REFERENCES `bomon` (`ID_BoMon`);

--
-- Các ràng buộc cho bảng `hocphan`
--
ALTER TABLE `hocphan`
  ADD CONSTRAINT `hocphan_ibfk_1` FOREIGN KEY (`ID_BoMon`) REFERENCES `bomon` (`ID_BoMon`);

--
-- Các ràng buộc cho bảng `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `phong_ibfk_1` FOREIGN KEY (`ID_Nha`) REFERENCES `nha` (`ID_Nha`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
