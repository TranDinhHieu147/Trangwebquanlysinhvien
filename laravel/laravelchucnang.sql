-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 04, 2021 lúc 06:56 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravelchucnang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `curd`
--

CREATE TABLE `curd` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `masv` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lop` varchar(255) NOT NULL,
  `noisinh` varchar(255) NOT NULL,
  `ngaysinh` varchar(255) NOT NULL,
  `gioitinh` varchar(255) NOT NULL,
  `magv_post` varchar(255) NOT NULL,
  `tenmh_monhoc` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `curd`
--

INSERT INTO `curd` (`id`, `masv`, `name`, `lop`, `noisinh`, `ngaysinh`, `gioitinh`, `magv_post`, `tenmh_monhoc`, `email`, `created_at`, `updated_at`) VALUES
(6, 'SV01', 'Nguyễn Thị Hải', '18xd', 'TP HCM', '2000-10-02', 'Nữ', 'GV01', 'Toán Rời Rạc', 'nguyenthihai23@gmail.com', NULL, NULL),
(7, 'SV02', 'Trần Văn Chính', '18xd1', 'ĐÀ Nẵng', '2001-11-20', 'Nam', 'GV02', 'Cơ sở dữ liệu', 'tranvanchinh11@gamil.com', NULL, NULL),
(8, 'SV03', 'Lê Bạch Yến', '18CT3', 'Đà Nẵng', '1996/02/21', 'Nữ', 'GV03', 'Giải Tích', 'lebachyeu@gmail.com', NULL, NULL),
(9, 'SV04', 'Trần Thanh Mai', '19kt', 'Quảng Trị', '12/08/1998', 'Nữ', 'GV04', 'Kinh Tế Vĩ Mô', 'tranthanhmai@gmail.com', NULL, NULL),
(10, 'SV05', 'Trần thu Thủy', '19kt2', 'Quảng Bình', '01/01/2000', 'Nữ', 'GV05', 'Anh Văn', 'tranthuthuy@gmail.com', NULL, NULL),
(11, 'SV06', 'Lê Thi Thanh', '18DH2', 'Huế', '13/05/1999', 'Nữ', 'GV06', 'Đồ Họa', 'lethithanh@gmail.com', NULL, NULL),
(12, 'SV07', 'Trần Trọng Kim', '18CT3', 'Quảng Nam', '10-20-1998', 'Nam', 'GV07', 'Trị Tuệ Nhân Tạo', 'trantrongkim@gamil.com', NULL, NULL),
(13, 'SV07', 'Hoàng Minh Châu', '18ct4', 'Đắc Lắc', '21-9-1999', 'Nam', 'GV07', 'Trí tuệ Nhân tạo', 'hoangminhchau@gmail.com', NULL, NULL),
(14, 'SV06', 'Phạm Quỳnh Hương', '19kt2', 'Quảng ngãi', '05-05-2001', 'Nữ', 'GV04', 'Kinh Tế Vĩ Mô', 'phamquynhhuong@gmail.com', NULL, NULL),
(15, 'SV08', 'Nguyễn Thị Hải', '18DH2', 'ĐÀ Nẵng', '14/06/1998', 'Nữ', 'GV06', 'Đồ Họa', 'nguyenthihai@gmail.com', NULL, NULL),
(16, 'SV09', 'Trần Minh Chinh', '18CT3', 'Quảng Bình', '03-08-1999', 'Nam', 'GV01', 'Toán Rời Rạc', 'tranminhchinh@gamil.com', NULL, NULL),
(17, 'SV11', 'Lý Thị Lễ', '19kt2', 'Quảng Trị', '02-06-1999', 'Nữ', 'GV04', 'Kinh Tế Vĩ Mô', 'lythily@gmail.com', NULL, NULL),
(18, 'SV12', 'Trần Thị Kim Ngân', '18DH3', 'ĐÀ Nẵng', '20-03-1999', 'Nữ', 'GV06', 'Đồ Họa', 'tranthikimngan@gmail.com', NULL, NULL),
(19, 'SV13', 'Trần Mạnh Cường', '18xd', 'Quảng Bình', '30-06-1998', 'Nam', 'GV03', 'Giải Tích', 'tranmanhcuong@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangkymon`
--

CREATE TABLE `dangkymon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `masv_curd` varchar(255) NOT NULL,
  `magv_post` varchar(255) NOT NULL,
  `mamh_monhoc` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `dangkymon`
--

INSERT INTO `dangkymon` (`id`, `masv_curd`, `magv_post`, `mamh_monhoc`, `created_at`, `updated_at`) VALUES
(4, 'SV01', 'GV01', 'MH02', NULL, NULL),
(5, 'SV05', 'GV06', 'MH01', NULL, NULL),
(6, 'SV01', 'GV01', 'MH01', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_07_092839_create_curd', 1),
(5, '2021_04_07_092905_create_post', 1),
(6, '2021_04_23_135026_create_monhoc', 1),
(7, '2021_04_30_044648_create_dangkymon', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mamh` varchar(255) NOT NULL,
  `tenmh` varchar(255) NOT NULL,
  `sotinchi` varchar(255) NOT NULL,
  `sotiet` varchar(255) NOT NULL,
  `masv_curd` varchar(255) NOT NULL,
  `namegv_post` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`id`, `mamh`, `tenmh`, `sotinchi`, `sotiet`, `masv_curd`, `namegv_post`, `created_at`, `updated_at`) VALUES
(2, 'MH01', 'Toán Rời Rạc', '3', '45', 'SV01', 'Trần thị A', NULL, NULL),
(3, 'MH02', 'Cơ sơ dữ Liệu', '3', '45', 'SV02', 'Trần Thị B', NULL, NULL),
(4, 'MH03', 'Kinh Tế Vĩ Mô', '3', '45', 'SV03', 'Hoàng thị Lan', NULL, NULL),
(5, 'MH04', 'Giải Tich', '3', '45', 'SV04', 'Trần Mạnh Cường', NULL, NULL),
(6, 'MH05', 'Đồ Họa', '3', '45', 'SV05', 'Nguyễn Thị Phụng', NULL, NULL),
(7, 'MH06', 'Anh Văn', '3', '45', 'SV06', 'Trần Thị c', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `magv` varchar(255) NOT NULL,
  `namegv` varchar(255) NOT NULL,
  `ngaysinh` varchar(255) NOT NULL,
  `gioitinh` varchar(255) NOT NULL,
  `masv_curd` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `magv`, `namegv`, `ngaysinh`, `gioitinh`, `masv_curd`, `created_at`, `updated_at`) VALUES
(2, 'GV01', 'Trần thị A', '1987-10-02', 'Nữ', 'SV01', NULL, NULL),
(3, 'GV02', 'Nguyễn Văn A', '1988-12-20', 'Nam', 'SV02', NULL, NULL),
(4, 'GV03', 'Trần Ngọc Cường', '1977-12-30', 'Nam', 'SV03', NULL, NULL),
(5, 'GV04', 'Nguyễn Thị Phụng', '04-08-1991', 'Nữ', 'SV04', NULL, NULL),
(6, 'GV05', 'Trần Thị B', '1990-12-30', 'Nữ', 'SV05', NULL, NULL),
(7, 'GV06', 'Trần Thị c', '1977-12-20', 'Nữ', 'SV06', NULL, NULL),
(8, 'GV07', 'Hoàng thị Lan', '1977-12-30', 'Nữ', 'SV07', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Trường', 'nguyenvantruong9876@gmail.com', NULL, '$2y$10$PtURPJCgD/Ygusd727.oMOXKQV9EP9Va9Oa9UbfKGjrBP8Grk2.IC', NULL, '2021-04-26 09:35:03', '2021-04-26 09:35:03'),
(2, 'a', 'a@gmail.com', NULL, '$2y$10$Nu52TkU41C6DTMA937Pubuurn7C8eSqn40NzoyeEAXDUibKf1/Ipa', NULL, '2021-04-28 01:08:17', '2021-04-28 01:08:17');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `curd`
--
ALTER TABLE `curd`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `curd_email_unique` (`email`);

--
-- Chỉ mục cho bảng `dangkymon`
--
ALTER TABLE `dangkymon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT cho bảng `curd`
--
ALTER TABLE `curd`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `dangkymon`
--
ALTER TABLE `dangkymon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
