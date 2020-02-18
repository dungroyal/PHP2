-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 18, 2020 lúc 02:50 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'bang',
  `phone` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `gender`, `email`, `address`, `city`, `state`, `phone`, `created_at`, `updated_at`) VALUES
(2, 'Lê Anh', 'Girl', 'Nữ', 'guillermo.nitzsche@vonrueden.info', '58/55 Âu Cơ,Phường 9', 'TPHCM', NULL, '70000', '2020-01-19 08:54:58', '2020-01-19 08:54:58'),
(3, 'Lê Tường', 'Bảo Nhi', 'Nữ', 'hailey.hettinger@daniel.com', '123 Tô Hiến Thành,Quận 10', 'TPHCM', NULL, '70000', '2020-01-19 08:54:58', '2020-01-19 08:54:58'),
(4, 'Nguyễn Ngọc', 'Hoàng', 'Nam', 'alexa.crona@yahoo.com', '256 Huỳnh Tấn Phát,Quận 7', 'TPHCM', NULL, '70000', '2020-01-19 08:54:58', '2020-01-19 08:54:58'),
(5, 'Mạc Thiên', 'Tấn', 'Nam', 'awelch@yahoo.com', '124, hẻm 12 Lê Lai', 'TPHCM', NULL, '70000', '2020-01-19 08:54:58', '2020-01-19 08:54:58'),
(18, 'Doan', 'Dung', 'Nam', 'doanquocdung55@gmail.com', '992 Âu Cơ, Phường 14, Quận Tân Bình, 34D, Đường số 12, Phường 11, Quận Gò Vấp', 'Hồ Chí Minh', NULL, '0398022720', '2020-02-12 17:00:00', '2020-02-12 17:00:00'),
(20, 'Le', 'Van Teo', 'Nam', 'Teodaica@gmail.com', 'Go vap', 'Ho Chi Minh', NULL, '0312544785', '2020-02-12 17:00:00', '2020-02-12 17:00:00'),
(27, 'Doan', 'Dung', 'Nam', 'doanquocdung55@gmail.com', '992 Âu Cơ, Phường 14, Quận Tân Bình, 34D, Đường số 12, Phường 11, Quận Gò Vấp', 'Hồ Chí Minh', NULL, '0398022720', '2020-02-14 17:00:00', '2020-02-14 17:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblproduct`
--

CREATE TABLE `tblproduct` (
  `productId` int(11) NOT NULL,
  `productName` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `productCode` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `releaseDate` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` float DEFAULT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `starRating` float DEFAULT NULL,
  `imageUrl` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tblproduct`
--

INSERT INTO `tblproduct` (`productId`, `productName`, `productCode`, `releaseDate`, `price`, `description`, `starRating`, `imageUrl`) VALUES
(2, 'Garden Cartc', 'GDN-0023c', 'March 17, ', 32.91, '15 gallon capa1city rolling garden cart', 4.3, 'gardencart.png'),
(25, 'Đoàn QUốc Dũng', 'MC-25632', '2020-01-19', 10000000, 'Đẹp trai', NULL, 'hlv-park-hang-seo-u23-viet-nam-u23-trieu-tien.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblsanpham`
--

CREATE TABLE `tblsanpham` (
  `masp` int(11) NOT NULL,
  `tensp` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `anhchinh` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `anhphu` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tblsanpham`
--

INSERT INTO `tblsanpham` (`masp`, `tensp`, `anhchinh`, `anhphu`) VALUES
(1, 'Video Game Controller', 'gamecontroller.jpg', '1.jpeg,4.jpeg,5.jpeg'),
(2, 'Video Game Controller', 'gamecontroller.jpg', '1.jpeg,4.jpeg,5.jpeg'),
(3, 'Video Game Controller', 'gamecontroller.jpg', '1.jpeg,4.jpeg,5.jpeg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`productId`);

--
-- Chỉ mục cho bảng `tblsanpham`
--
ALTER TABLE `tblsanpham`
  ADD PRIMARY KEY (`masp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `tblsanpham`
--
ALTER TABLE `tblsanpham`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
