-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th5 09, 2020 lúc 02:46 AM
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
-- Cơ sở dữ liệu: `FlyDB`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `flights`
--

CREATE TABLE `flights` (
  `id` int(11) NOT NULL,
  `origin` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `destination` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `flights`
--

INSERT INTO `flights` (`id`, `origin`, `destination`, `duration`) VALUES
(1, 'New York', 'London', 415),
(2, 'Shanghai', 'Paris', 760),
(3, 'Istanbul', 'Tokyo', 700),
(4, 'New York', 'Paris', 435),
(5, 'Moscow', 'Paris', 245),
(6, 'Lima', 'New York', 455),
(11, 'VN', 'Paris 3', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `passengers`
--

CREATE TABLE `passengers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `flight_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `passengers`
--

INSERT INTO `passengers` (`id`, `name`, `flight_id`) VALUES
(1, 'Alice', 1),
(2, 'Bob', 1),
(3, 'Charlie', 2),
(4, 'Dave', 2),
(5, 'Erin', 4),
(6, 'Frank', 6),
(7, 'Grace', 6),
(8, 'Tran Cong Mua', 4);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `flight_id` (`flight_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `flights`
--
ALTER TABLE `flights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `passengers`
--
ALTER TABLE `passengers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `passengers`
--
ALTER TABLE `passengers`
  ADD CONSTRAINT `passengers_ibfk_1` FOREIGN KEY (`flight_id`) REFERENCES `flights` (`id`),
  ADD CONSTRAINT `passengers_ibfk_2` FOREIGN KEY (`flight_id`) REFERENCES `flights` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
