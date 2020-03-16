-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 11, 2020 lúc 07:12 PM
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
(5, 'Sách', '5.jpg', 1, 0),
(17, 'Sách thiếu nhi', '7.jpg', 0, 0),
(18, 'Sách giáo khoa', '7.jpg', 0, 0);

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
(43, 'PHẠM HOÀNG SƠN', 'dungdqps08542@fpt.edu.vn', '123 Nguyễn Văn Quá, Phường Đông Hưng Thuân, Quận 12', '0354215478', '2020-03-02 22:47:13', 1),
(45, 'Doan Dung', 'doanquocdung55@gmail.com', 'x', '0321854872', '2020-03-05 08:07:33', 2),
(46, 'TRẦN VĂN A', 'VANA@GMAIL.com', '43', 'adsdas', '2020-03-12 00:25:06', 3);

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
(37, 44, 3, 1),
(38, 45, 10, 1),
(39, 46, 2, 1);

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
(7, 'Khi Bạn Đang Mơ Thì Người Khác Đang Nỗ Lực', 'Vĩ Nhân', 'NXB Văn Học', 95000, 78000, 'untitled-7_2_8.jpg', '', 'Khi Bạn Đang Mơ Thì Người Khác Đang Nỗ Lực\r\n\r\nNgười khác có thể mang lại cho bạn nhiều lắm là sân khấu, còn vai diễn là do bạn đảm nhiệm. Thế giới này không đợi bạn trưởng thành, cũng chẳng có ai trưởng thành thay bạn, bạn chỉ có thể tự vượt qua gian khổ, tự nỗ lực trưởng thành.\r\n\r\nThói quen \"chờ đợi\" sẽ ăn mòn sự tự tin, hi vọng và hứng khởi của bạn, bạn chỉ có thể tiếp tục chờ đợi mà thôi.\r\n\r\nKhông lãng phí một giây một phút nào để trưởng thành, thành công sẽ không còn xa nữa. Hãy làm cho mỗi ngày chúng ta sống trên đời này không đơn thuần là một ngày ta già đi, mà là một ngày ta đang trưởng thành hơn.\r\n\r\nMuốn có một cuộc đời rực rỡ không có gì hối tiếc, chúng ta buộc phải tự tạo ra giá trị và màu sắc vô hạn cho cuộc sống của mình trong thời gian hữu hạn.', '', 3, 0),
(8, 'Tin Vào Chính Mình (Tái Bản 2016)', 'Louise L Hay', 'NXB Tổng hợp TP.HCM', 123000, 102000, 'tin_vao_chinh_minh_tai_ban_2016_1_2018_07_05_14_30_09.jpg', 'tin_vao_chinh_minh_tai_ban_2016_10_2018_07_05_14_30_09.jpg', 'Tên Nhà Cung Cấp: FIRST NEWS\r\nTác giả: Louise L Hay\r\nNXB: NXB Tổng hợp TP.HCM\r\nNăm XB: 01-2016\r\nTrọng lượng (gr): 300\r\nKích thước: 20.5 x 14.5\r\nSố trang: 160\r\nHình thức: Bìa Mềm', '', 3, 0),
(9, 'Đam Mê - Bí Quyết Tạo Thành Công (Tái Bản 2019)', 'Stephen R Covey', 'FIRST NEWS', 130000, 125000, '_am_m_t_o_th_nh_c_ng.jpg', '', 'Rất hay', '', 3, 0),
(11, '100 Câu Chuyện Hay Dành Cho Bé Gái', 'Bành Phàm', 'Văn Học', 85000, 75000, '1.jpg', '2.jpg,4.jpg,8.jpg,9.jpg,image_195509_1_22190.jpg', 'Tên Nhà Cung Cấp:Minh Long\r\nTác giả:Bành Phàm\r\nNXB:Văn Học\r\nNăm XB:07/2013\r\nTrọng lượng (gr):800\r\nKích thước:17 x 23\r\nSố trang	208\r\nHình thức:Bìa Mềm', '', 17, 0),
(12, 'Nhóc Miko! Cô Bé Nhí Nhảnh - Tập 25', 'Eriko Ono', 'NXB Trẻ', 98000, 88000, 'nhoc_miko_co_be_nhi_nhanh___tap_25_1_2019_02_22_10_57_52.jpg', 'nhoc_miko_co_be_nhi_nhanh___tap_25_2_2019_02_22_10_57_52.jpg,nhoc_miko_co_be_nhi_nhanh___tap_25_3_2019_02_22_10_57_52.jpg,nhoc_miko_co_be_nhi_nhanh___tap_25_4_2019_02_22_10_57_52.jpg,nhoc_miko_co_be_nhi_nhanh___tap_25_6_2019_02_22_10_57_52.jpg,nhoc_miko_co_be_nhi_nhanh___tap_25_8_2019_02_22_10_57_52.jpg,nhoc_miko_co_be_nhi_nhanh___tap_25_10_2019_02_22_10_57_52.jpg', 'Nhóc Miko! Cô Bé Nhí Nhảnh - Tập 1 Xung quanh cô nhóc Miko khỏe khoắn, hiếu động là những người bạn thân thiết. Những câu chuyện đời thường hết sức ngộ nghĩnh, dễ thương của cô bé học sinh cấp 1 Miko sẽ đưa độc giả trở về những năm tháng tuổi thơ tươi đẹp, ngọt ngào', '', 17, 0),
(13, 'Bí Mật Tư Duy Triệu Phú (Tái Bản 2019)', 'T Harv Eker', 'NXB Tổng Hợp TPHCM', 102000, 98000, 'image_188995_1.jpg', '2019_11_16_09_31_33_1.jpg,2019_11_16_09_31_33_2.jpg,2019_11_16_09_31_33_3.jpg,2019_11_16_09_31_33_14.jpg', 'Trong cuốn sách này T. Harv Eker sẽ tiết lộ những bí mật tại sao một số người lại đạt được những thành công vượt bậc, được số phận ban cho cuộc sống sung túc, giàu có, trong khi một số người khác phải chật vật, vất vả mới có một cuộc sống qua ngày. Bạn sẽ hiểu được nguồn gốc sự thật và những yếu tố quyết định thành công, thất bại để rồi áp dụng, thay đổi cách suy nghĩ, lên kế hoạch rồi tìm ra cách làm việc, đầu tư, sử dụng nguồn tài chính của bạn theo hướng hiệu quả nhất.', '', 2, 0),
(14, 'Quản Lý Nghiệp - Tái Bản 2018', 'Geshe Michael Roach, Lama Christie McNally, Michael Gordon', 'NXB Lao Động', 99000, 78000, 'quan_ly_nghiep___tai_ban_2018_1_2018_10_29_15_48_20.jpg', 'quan_ly_nghiep___tai_ban_2018_2_2018_10_29_15_48_20.jpg,quan_ly_nghiep___tai_ban_2018_3_2018_10_29_15_48_20.jpg,quan_ly_nghiep___tai_ban_2018_5_2018_10_29_15_48_20.jpg,quan_ly_nghiep___tai_ban_2018_9_2018_10_29_15_48_20.jpg', 'Quản lý Nghiệp (Karmic Management) là cuốn sách được chờ đợi rất lâu sau cuốn Năng đoạn Kim cương đã ra đời cách đây 10 năm – một trong những cuốn sách kinh doanh được ưa chuộng và đã được dịch ra hơn 20 ngôn ngữ cũng như được hàng triệu người trên thế giới áp dụng vào công việc kinh doanh và cuộc sống. Năng đoạn Kim cương đã kể câu chuyện của một trong những công ty thành công nhất trong lịch sử của thành phố New York, và giờ đây Quản lý Nghiệp sẽ cho bạn biết cách bạn có thể làm nên điều đó.', '', 2, 0),
(15, 'Tủ Sách Bé Vào Lớp 1 - Vở Tập Viết Chữ Số', 'Lê Tuệ Minh, Lê Thu Ngọc', 'NXB Đại Học Sư Phạm', 8000, 7900, 'tu_sach_be_vao_lop_1___vo_tap_viet_chu_so_1_2019_03_06_14_56_18.jpg', 'tu_sach_be_vao_lop_1___vo_tap_viet_chu_so_2_2019_03_06_14_56_18.jpg,tu_sach_be_vao_lop_1___vo_tap_viet_chu_so_5_2019_03_06_14_56_18.jpg,tu_sach_be_vao_lop_1___vo_tap_viet_chu_so_6_2019_03_06_14_56_18.jpg', 'Tủ Sách Bé Vào Lớp 1 - Vở Tập Viết Chữ Số\r\nMột trong những yêu cầu quan trọng để giúp trẻ học tốt chương trình lớp 1 là sự chuẩn bị đầy đủ các điều kiện về thể chất, trí tuệ, tình cảm, ngôn ngữ và một số kỹ năng cần thiết. Vì vậy, trẻ cần được dạy cách phát âm và làm quen với chữ cái, các mẫu chữ hoa - thường... Tủ Sách Bé Vào Lớp 1 là bộ sách hữu ích trong việc xây dựng nền tảng kiến thức, kĩ năng cho các em. Sách có nội dung phong phú với nhiều bài tập đa dạng theo hình thức trò chơi, phù hợp với các em trong độ tuổi 5 - 6 tuổi.', '', 18, 0),
(16, 'Tổng Hợp Ngữ Pháp Và Bài Tập Tiếng Anh - Lớp 9', 'The Windy', 'NXB Hồng Đức', 98000, 78000, 'tong_hop_ngu_phap_va_bai_tap_tieng_anh___lop_9_1_2018_12_28_00_12_39.jpg', 'tong_hop_ngu_phap_va_bai_tap_tieng_anh___lop_9_2_2018_12_28_00_12_39.jpg,tong_hop_ngu_phap_va_bai_tap_tieng_anh___lop_9_4_2018_12_28_00_12_39.jpg,tong_hop_ngu_phap_va_bai_tap_tieng_anh___lop_9_9_2018_12_28_00_12_39.jpg,tong_hop_ngu_phap_va_bai_tap_tieng_anh___lop_9_10_2018_12_28_00_12_39.jpg', 'Tiếng Anh được xem là ngôn ngữ giao tiếp toàn cầu vì vậy không có tiếng Anh là một thiệt thòi lớn với các em học sinh. Trong chương trình học lớp 9, tiếng Anh là môn học quan trọng giúp các em có thể tự tin bước vào những ngôi trường cấp 3 hằng mơ ước.', '', 18, 0),
(17, 'Cà Phê Cùng Tony (Tái Bản 2017)', 'Tony Buổi Sáng', 'NXB Trẻ', 98000, 97000, 'ca_phe_cung_tony_tai_ban_2017_1_2018_11_16_11_02_35.jpg', 'ca_phe_cung_tony_tai_ban_2017_2_2018_11_16_11_02_35.jpg,ca_phe_cung_tony_tai_ban_2017_3_2018_11_16_11_02_35.jpg,ca_phe_cung_tony_tai_ban_2017_8_2018_11_16_11_02_35.jpg,ca_phe_cung_tony_tai_ban_2017_10_2018_11_16_11_02_35.jpg,untitled-9_19.jpg', 'Có đôi khi vào những tháng năm bắt đầu vào đời, giữa vô vàn ngả rẽ và lời khuyên, khi rất nhiều dự định mà thiếu đôi phần định hướng, thì CẢM HỨNG là điều quan trọng để bạn trẻ bắt đầu bước chân đầu tiên trên con đường theo đuổi giấc mơ của mình. Cà Phê Cùng Tony là tập hợp những bài viết của tác giả Tony Buổi Sáng. Đúng như tên gọi, mỗi bài nhẹ nhàng như một tách cà phê, mà bạn trẻ có thể nhận ra một chút gì của chính mình hay bạn bè mình trong đó: Từ chuyện lớn như định vị bản thân giữa bạn bè quốc tế, cho đến chuyện nhỏ như nên chú ý những phép tắc xã giao thông thường.', '', 1, 0),
(18, 'Hay Là Hạnh Phúc Trừ Mình Ra? - Tặng Kèm Móc Khóa (Số Lượng Có Hạn)', 'Huỳnh Thắng', 'NXB Phụ Nữ', 103000, 98000, 'hay-l_-h_nh-ph_c-tr_-m_nh-ra-page-001_1_1.jpg', '187.jpg,bia-sauuuuu_1.jpg', 'Hay Là Hạnh Phúc Trừ Mình Ra? - Tặng Kèm Móc Khóa (Số Lượng Có Hạn)\r\n\r\nTừng nghe ở đâu đó câu nói: \"’Đến một giai đoạn nào đó, cuộc sống sẽ làm phép trừ với bạn.\"\r\n\r\nCàng trưởng thành chúng ta sẽ càng ngỡ ngàng nhận thấy phép trừ ấy thực sự hiện hữu.', '', 1, 0),
(19, 'Làm Đĩ', 'Vũ Trọng Phụng', 'NXB Văn Học', 120000, 110000, 'image_195509_1_10040.jpg', 'image_195509_1_10153.jpg', 'Làm đĩ là một trong số những cuốn sách gây ra nhiều cuộc tranh luận trong hơn suốt nửa thế kỷ qua. Từ Nhất Linh, Thái Phỉ, Hoài Thanh trước đây đã có khá nhiều bài đăng trên các báo Tân văn, Tương lai, Ngày nay, Hà Nội bá phê phán quan niệm văn chương của Vũ Trọng Phụng xung quanh tiểu thuyết Làm đĩ của ông; cho đến Hoàng Văn Hoan sau này, khi Vũ Trọng Phụng đã mất gần 25 năm, còn cố tình tìm mọi lời lẽ sặc mùi chính trị phê phán Làm đĩ là một cuốn sách dâm uế và có hại cho sự giáo hóa đạo đức và luân lý đối với thế hệ trẻ Việt Nam.', '', 4, 0),
(20, 'Theo Anh Bay Đến Tận Cùng Thế Giới', 'Nguyệt Lưu Quang', 'NXB Văn Học', 98000, 97000, 'theo_anh_bay_den_tan_cung_the_gioi_1_2018_08_14_09_27_45.jpg', 'theo_anh_bay_den_tan_cung_the_gioi_2_2018_08_14_09_27_45.jpg,theo_anh_bay_den_tan_cung_the_gioi_8_2018_08_14_09_27_45.jpg,theo_anh_bay_den_tan_cung_the_gioi_10_2018_08_14_09_27_45.jpg', 'Theo anh bay đến tận cùng thế giới – Cuốn sách viết về nỗi lòng của những cô gái đang yêu nhận được hàng triệu lượt đọc và bình luận sôi nổi trên các mạng xã hội ở Trung Quốc.', '', 4, 0);

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
(2, 'Trần Công Diện', 'trancongdien20@gmail.com', 'admin', '0324585457', '34D Đường số 12, Phường 14, Quận Tân Bình', '0000-00-00 00:00:00', 0),
(3, 'TRẦN VĂN A', 'VANA@GMAIL.com', '1', '', '', '2020-03-11 23:32:08', 0),
(4, 'Đoàn Quốc Dũng', 'dungdq55@gmail.com', 'dungdq5520', '', '', '2020-03-12 00:44:05', 0);

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
