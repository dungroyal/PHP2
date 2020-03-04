-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 04, 2020 lúc 08:06 PM
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
  `idChild` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `image`, `idParents`, `idChild`) VALUES
(1, 'Văn Học', '1.jpg', 0, 0),
(2, 'Kinh Tế', '2.jpg', 0, 0),
(3, 'Kỹ Năng Sống', '3.jpg', 0, 0),
(4, 'Truyện Ngắn', '4.jpg', 0, 0),
(5, 'Sách', '5.jpg', 1, 0);

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
(35, 'Doan Dung', 'doanquocdung55@gmail.com', '992 Âu Cơ, Phường 14, Quận Tân Bình, 34D, Đường số 12, Phường 11, Quận Gò Vấp', '0398022720', '2020-02-23 13:01:11', 1),
(42, 'LÊ VĂN TÈO', 'dungdq5520@gmail.com', '123 Nguyễn Văn Quá, Phường Đông Hưng Thuân, Quận 12', '0398022720', '2020-03-02 22:29:33', 2),
(43, 'PHẠM HOÀNG SƠN', 'dungdqps08542@fpt.edu.vn', '123 Nguyễn Văn Quá, Phường Đông Hưng Thuân, Quận 12', '0354215478', '2020-03-02 22:47:13', 0);

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
(30, 35, 2, 1),
(31, 36, 2, 1),
(32, 41, 2, 1),
(33, 42, 3, 1),
(34, 43, 2, 3),
(35, 43, 1, 2),
(36, 43, 4, 1),
(37, 44, 3, 1);

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
  `images` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Ảnh phụ',
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `idCatalog` int(100) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `author`, `nxb`, `price`, `specialPrice`, `image`, `images`, `mota`, `tag`, `idCatalog`, `status`) VALUES
(1, 'Nhà Giả Kim (Tái Bản 2017)', 'Paulo Coelho', 'NXB Văn Học', 200000, 180000, '8935235213746.jpg', '2019_11_04_14_41_25_5.jpg,2019_11_04_14_41_25_10.jpg,tren_duong_bang_tai_ban_2017_2_2018_11_16_11_02_25.jpg', 'Mã hàng: 8935235213746\r\nTên Nhà Cung Cấp: Nhã Nam\r\nTác giả: Paulo Coelho\r\nNgười Dịch: Lê Chu Cầu\r\nNXB: NXB Văn Học\r\nNăm XB	2017\r\nTrọng lượng (gr): 280\r\nKích thước: 13 x 20.5', '', 5, 0),
(2, 'Cảm Ơn Người Lớn (Bìa Mềm)', '', '', 500000, 480000, 'cam_on_nguoi_lon_bia_mem_1_2018_11_15_13_40_08.jpg', '', '', '', 5, 0),
(4, 'Trên Đường Băng (Tái Bản 2017)', 'Tony Buổi Sáng', 'Tuổi trẻ', 620000, 550000, 'tren_duong_bang_tai_ban_2017_1_2018_11_16_11_02_25.jpg', '2019_11_04_14_41_25_2.jpg,2019_11_04_14_41_25_5.jpg,tren_duong_bang_tai_ban_2017_2_2018_11_16_11_02_25.jpg,tren_duong_bang_tai_ban_2017_3_2018_11_16_11_02_25.jpg,tren_duong_bang_tai_ban_2017_5_2018_11_16_11_02_25.jpg,tren_duong_bang_tai_ban_2017_10_2018_11_16_11_02_25.jpg', 'Tác giả	Tony Buổi Sáng\r\nNXB	NXB Trẻ\r\nNăm XB	10-2017\r\nTrọng lượng (gr)	350\r\nKích thước	13 x 20\r\nSố trang	308\r\nHình thức	Bìa Mềm', '', 5, 0),
(7, 'Khi Bạn Đang Mơ Thì Người Khác Đang Nỗ Lực', 'Vĩ Nhân', 'NXB Văn Học', 95000, 78000, 'untitled-7_2_8.jpg', 'khi_ban_dang_mo_thi_nguoi_khac_dang_no_luc_10_2018_07_16_08_54_43.jpg', 'Khi Bạn Đang Mơ Thì Người Khác Đang Nỗ Lực\r\n\r\nNgười khác có thể mang lại cho bạn nhiều lắm là sân khấu, còn vai diễn là do bạn đảm nhiệm. Thế giới này không đợi bạn trưởng thành, cũng chẳng có ai trưởng thành thay bạn, bạn chỉ có thể tự vượt qua gian khổ, tự nỗ lực trưởng thành.\r\n\r\nThói quen \"chờ đợi\" sẽ ăn mòn sự tự tin, hi vọng và hứng khởi của bạn, bạn chỉ có thể tiếp tục chờ đợi mà thôi.\r\n\r\nKhông lãng phí một giây một phút nào để trưởng thành, thành công sẽ không còn xa nữa. Hãy làm cho mỗi ngày chúng ta sống trên đời này không đơn thuần là một ngày ta già đi, mà là một ngày ta đang trưởng thành hơn.\r\n\r\nMuốn có một cuộc đời rực rỡ không có gì hối tiếc, chúng ta buộc phải tự tạo ra giá trị và màu sắc vô hạn cho cuộc sống của mình trong thời gian hữu hạn.', '', 3, 0),
(8, 'Tin Vào Chính Mình (Tái Bản 2016)', 'Louise L Hay', 'NXB Tổng hợp TP.HCM', 123000, 102000, 'tin_vao_chinh_minh_tai_ban_2016_1_2018_07_05_14_30_09.jpg', 'tin_vao_chinh_minh_tai_ban_2016_10_2018_07_05_14_30_09.jpg', 'Tên Nhà Cung Cấp: FIRST NEWS\r\nTác giả: Louise L Hay\r\nNXB: NXB Tổng hợp TP.HCM\r\nNăm XB: 01-2016\r\nTrọng lượng (gr): 300\r\nKích thước: 20.5 x 14.5\r\nSố trang: 160\r\nHình thức: Bìa Mềm', '', 3, 0),
(9, 'Đam Mê - Bí Quyết Tạo Thành Công (Tái Bản 2019)', 'Stephen R Covey', 'FIRST NEWS', 130000, 125000, '_am_m_t_o_th_nh_c_ng.jpg', '', 'Rất hay', '', 3, 0);

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
