-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 19, 2020 lúc 06:02 PM
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
(3, 'Lê Tường', 'Bảo Nhi', 'Nữ', 'hailey.hettinger@daniel.com', '123 Tô Hiến Thành,Quận 10', 'TPHCM', NULL, '70000', '2020-01-19 08:54:58', '2020-01-19 08:54:58'),
(4, 'Nguyễn Ngọc', 'Hoàng', 'Nam', 'alexa.crona@yahoo.com', '256 Huỳnh Tấn Phát,Quận 7', 'TPHCM', NULL, '70000', '2020-01-19 08:54:58', '2020-01-19 08:54:58'),
(5, 'Mạc Thiên', 'Tấn', 'Nam', 'awelch@yahoo.com', '124, hẻm 12 Lê Lai', 'TPHCM', NULL, '70000', '2020-01-19 08:54:58', '2020-01-19 08:54:58'),
(18, 'Doan', 'Dung', 'Nam', 'doanquocdung55@gmail.com', '992 Âu Cơ, Phường 14, Quận Tân Bình, 34D, Đường số 12, Phường 11, Quận Gò Vấp', 'Hồ Chí Minh', NULL, '0398022720', '2020-02-12 17:00:00', '2020-02-12 17:00:00'),
(20, 'Le', 'Van Teo', 'Nam', 'Teodaica@gmail.com', 'Go vap', 'Ho Chi Minh', NULL, '0312544785', '2020-02-12 17:00:00', '2020-02-12 17:00:00');

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
(31, 'Modem Wifi Asua', '93c9cb6eaf954201b52c8d307b5edade_asus rt-ac1300uhp_2.jpg', '723a9cac629c01f9f6bcc0601e8062a0.jpg,25593_router_wifi_asus_rt_ac1300uhp_2.jpg,25593_router_wifi_asus_rt_ac1300uhp_5.jpg,P_setting_fff_1_90_end_600.jpg'),
(32, 'Thương hiệu', 'ava-15622530448502074507693-crop-1562253268280262597910.png', '1280px-Acer_2011.svg.png,asus-logo-hd-photo-15.png,Lenovo_Global_Corporate_Logo.png,logo-dell-png.png,logo-hp-png.png,Microsoft-Logo-PNG.png,MSI_logo_for_share2.png'),
(33, 'Hoá thúi địt', '70378770_500134044097645_9075427606261661696_n.jpg', '70672005_119173202800298_2866196749393854464_n.jpg,70838156_2307717716206657_3994007311092809728_n.jpg,71071239_2307717326206696_4887788145669570560_n.jpg,71574218_2307717516206677_4553325796650909696_n.jpg');

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
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
