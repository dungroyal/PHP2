-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th4 24, 2020 lúc 01:46 PM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbproduct`
--

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
(1, 'Leaf Rake', 'GDN-0011', 'March 19, ', 19, 'Leaf rake with 48-inch wooden handle.', 3.2, 'leafrake.jpg'),
(2, 'Garden Cart', 'GDN-0023', 'March 18, ', 32.99, '15 gallon capacity rolling garden cart', 4.2, 'gardencart.png'),
(3, 'Hammer', 'TBX-0048', 'May 21, 20', 8.9, 'Curved claw steel hammer', 4.8, 'hammer.png'),
(4, 'Saw', 'TBX-0022', 'May 15, 20', 15, '15-inch steel blade hand saw', 3.7, 'saw.jpg'),
(5, 'Video Game Controller', 'GMG-0042', 'October 15', 33.96, 'Standard two-button video game controller', 4.6, 'gamecontroller.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`productId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
