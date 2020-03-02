-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 02, 2020 lúc 03:32 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dungdq_bookstore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `idUser` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id` int(100) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idParents` int(100) NOT NULL,
  `idChild` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `image`, `idParents`, `idChild`) VALUES
(1, 'Văn Học', '1.jpg', 0, 1),
(2, 'Kinh Tế', '2.jpg', 0, 1),
(3, 'Kỹ Năng Sống', '3.jpg', 0, 1),
(4, 'Truyện Ngắn', '4.jpg', 0, 1),
(5, 'Sách', '5.jpg', 1, 0),
(6, 'Đồ chơi', '6.jpg', 2, 0),
(8, 'Văn Phòng Phẩm', '7.jpg', 3, 0),
(9, 'Phương tiện các loại', '8.jpg', 0, 2),
(10, 'Mô hình cách loại', '9.jpg', 0, 2),
(11, 'Dụng Cụ Học Sinh', '10.jpg', 0, 3),
(12, 'Dụng Cụ Văn Phòng', '11.jpg', 0, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(100) NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `full_name`, `email`, `address`, `phone`, `created_at`, `status`) VALUES
(35, 'Doan Dung', 'doanquocdung55@gmail.com', '992 Âu Cơ, Phường 14, Quận Tân Bình, 34D, Đường số 12, Phường 11, Quận Gò Vấp', '0398022720', '2020-02-23 13:01:11', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(100) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `qty` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `customer_id`, `product_id`, `qty`) VALUES
(27, 35, 4, 2),
(28, 35, 3, 1),
(29, 35, 1, 1),
(30, 35, 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nxb` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nhà xuất bản',
  `price` double(10,0) NOT NULL,
  `specialPrice` float(10,0) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Ảnh chính',
  `images` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Ảnh phụ',
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `idCatalog` int(100) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `author`, `nxb`, `price`, `specialPrice`, `image`, `images`, `mota`, `tag`, `idCatalog`, `status`) VALUES
(1, 'Nhà Giả Kim', '', '', 200000, 180000, '8935235213746.jpg', '', '', '', 5, 0),
(2, 'Cảm Ơn Người Lớn (Bìa Mềm)', '', '', 500000, 480000, 'cam_on_nguoi_lon_bia_mem_1_2018_11_15_13_40_08.jpg', '', '', '', 5, 0),
(3, 'Tôi Thấy Hoa Vàng Trên Cỏ Xanh (Bản In Mới - 2018)', '', '', 800000, 700000, 'image_180164_1_43_1_57_1_4_1_2_1_210_1_29_1_98_1_25_1_21_1_5_1_3_1_18_1_18_1_45_1_26_1_32_1_14_1_2199.jpg', '', '', '', 5, 1),
(4, 'Trên Đường Băng (Tái Bản 2017)', 'Đoàn Quốc Dũng', 'Tuổi trẻ', 620000, 550000, 'tren_duong_bang_tai_ban_2017_1_2018_11_16_11_02_25.jpg', '', '', '', 5, 0),
(5, 'Xe Tải Kim Loại - Công Trình Xây Dựng - LC05 - Mẫu 1', '', '', 120000, 100000, '8936121106937-mau1_2_.jpg', '', '', '', 9, 2),
(6, 'Tomica No.89-5 Suzuki Carry (Box) \'16', '', '', 120000, 100000, 'image_187257.jpg', '', '', '', 9, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `level` int(2) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `phone`, `address`, `created`, `level`) VALUES
(1, 'ĐOÀN QUỐC DŨNG', 'doanquocdung55@gmail.com', 'admin', '0398022720', '992 Âu Cơ, Phường 14, Quận Tân Bình', '2020-03-01 02:55:33', 1),
(2, 'Trần Công Diện', 'trancongdien20@gmail.com', 'admin', '0324585457', '34D Đường số 12, Phường 14, Quận Tân Bình', '0000-00-00 00:00:00', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_catalog` (`idCatalog`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_catalog` FOREIGN KEY (`idCatalog`) REFERENCES `catalog` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
