-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2019 at 04:52 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `avar`
--

CREATE TABLE `avar` (
  `id_anh` int(11) NOT NULL,
  `name_anh` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size_anh` int(11) NOT NULL,
  `type_anh` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_use` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `avar`
--

INSERT INTO `avar` (`id_anh`, `name_anh`, `size_anh`, `type_anh`, `id_use`) VALUES
(14, 'chuan3.jpg', 0, 'upload/chuan3.jpg', 28),
(15, 'chuan1.jpg', 0, 'upload/chuan1.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `cm_id` int(10) NOT NULL,
  `ten` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci,
  `cm_check` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idtin` int(10) DEFAULT NULL,
  `creatdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`cm_id`, `ten`, `noidung`, `cm_check`, `idtin`, `creatdate`) VALUES
(21, 'Nguyễn Thành Lộc', 'Ngon quá', 'Y', 197, '2019-03-23 22:31:30'),
(22, 'Nguyễn Thành Lộc', 'Gias bn ad owi :)', 'Y', 197, '2019-03-24 10:17:14');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(11) NOT NULL,
  `Manv` int(11) DEFAULT NULL,
  `Makh` int(11) DEFAULT NULL,
  `Masp` int(11) DEFAULT NULL,
  `NgayHD` datetime DEFAULT NULL,
  `Soluong` double DEFAULT NULL,
  `Tensp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tenkh` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tennv` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TongTien` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `Manv`, `Makh`, `Masp`, `NgayHD`, `Soluong`, `Tensp`, `Tenkh`, `Tennv`, `TongTien`) VALUES
(4, NULL, NULL, 13, '2019-03-26 09:28:17', 12, 'Cà chua đen', 'Nguyễn Hoàng Nam', 'Nguyễn Thành Lộc', 220000),
(5, NULL, NULL, 7, '2019-03-26 09:29:13', 3, 'Rau xà lách mỡ', 'Phạm Nguyễn Hương Vân', 'Nguyễn Thành Lộc', 34000),
(6, NULL, NULL, 3, '2019-03-26 09:29:54', 2, 'Nấm bào ngư', 'Trần Văn Anh', 'Nguyễn Thành Lộc', 220000);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(11) NOT NULL,
  `TenKH` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiaChiKH` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SoDienThoai` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `DiaChiKH`, `SoDienThoai`) VALUES
(1, 'Nguyễn Hà', 'Hà Nội', '0182829'),
(2, 'Trần văn Anh', 'Bình Thuận', '09729012'),
(3, 'Đỗ Khởi My', 'Ninh Bình', '0918831'),
(4, 'Nguyễn Hoàng Nam', 'Hà Nội', '09178392'),
(5, 'Phạm Nguyễn Hương Vân', 'Cao Bằng', '09238832');

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `id_ncc` int(10) NOT NULL,
  `ten_ncc` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`id_ncc`, `ten_ncc`, `diachi`, `dienthoai`) VALUES
(1, 'Minh Tiến', 'Nông trường Tam Đảo', '09238892'),
(2, 'Nông trường Đà Lạt', ' Đà Lạt', '0109201029'),
(3, 'Nông trường Long An', ' Long An', '01737374');

-- --------------------------------------------------------

--
-- Table structure for table `nhombai`
--

CREATE TABLE `nhombai` (
  `idnhom` int(11) NOT NULL,
  `tennhom` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhombai`
--

INSERT INTO `nhombai` (`idnhom`, `tennhom`) VALUES
(1, 'Nấm'),
(2, 'Rau ăn lá'),
(3, 'Rau ăn quả'),
(4, 'Rau ăn củ'),
(5, 'Rau gia vị');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `idtin` int(10) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `content` text,
  `user_id` int(11) DEFAULT NULL,
  `is_public` tinyint(4) DEFAULT '0',
  `createdate` datetime DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL,
  `idnhom` int(11) NOT NULL,
  `anhtrichdan` varchar(100) DEFAULT NULL,
  `videotrichdan` varchar(100) DEFAULT NULL,
  `noidungtrichdan` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`idtin`, `title`, `content`, `user_id`, `is_public`, `createdate`, `updatedate`, `idnhom`, `anhtrichdan`, `videotrichdan`, `noidungtrichdan`) VALUES
(200, 'NẤM ĐÔNG CÔ TƯƠI', '<p><strong>Nơi trồng:</strong></p>\r\n\r\n<p>Thu mua</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dinh dưỡng:</strong></p>\r\n\r\n<p>Chứa đầy đủ c&aacute;c loại kho&aacute;ng chất như Canxi, Sắt, Magie, Photpho, Natri, Kẽm v&agrave; Kali với h&agrave;m lượng cao, đặc biệt l&agrave; h&agrave;m lượng Kali. C&aacute;c vitamin như A, D v&agrave; K.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C&ocirc;ng dụng:</strong></p>\r\n\r\n<p>1. Tăng cường miễn dịch cơ thể.<br />\r\n2. Giảm cholesterol v&agrave; hỗ trợ ngăn ngừa huyết &aacute;p cao.<br />\r\n3. Ngăn ngừa ung thư.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng:</strong></p>\r\n\r\n<p>- Th&iacute;ch hợp với c&aacute;c m&oacute;n nướng, x&agrave;o, hay s&uacute;p, nấu canh với thịt.</p>\r\n', 7, 0, '2019-03-25 21:59:11', '2019-03-25 21:59:11', 1, 'Namdongco.jpg', '', '<p><span style=\"color:#c0392b\"><strong>G&iacute;a:300.000đ</strong></span></p>\r\n'),
(201, 'NẤM KIM CHÂM', '<p><strong>Nơi trồng:</strong>&nbsp;</p>\r\n\r\n<p>Tam Đảo/KMS</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dinh dưỡng:</strong></p>\r\n\r\n<p>Nấm kim ch&acirc;m rất gi&agrave;u chất xơ v&agrave; một số kho&aacute;ng chất cần thiết cho cơ thể như Canxi, Sắt, Magie, Photpho, Natri, Kẽm v&agrave; Kali với h&agrave;m lượng cao, đặc biệt l&agrave; h&agrave;m lượng Kali. Nấm kim ch&acirc;m rất gi&agrave;u vitamin như Thiamin, Riboflavin, Niacin, B6, Folate, A, D, axit amin v&agrave; chất lysine rất tốt cho cơ thể.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C&ocirc;ng dụng:</strong></p>\r\n\r\n<p>1. Hỗ trợ điều trị xơ vữa động mạch.<br />\r\n2. Hỗ trợ ngăn ngừa ung thư.<br />\r\n3. Giảm lượng đường trong m&aacute;u.<br />\r\n4. Hỗ trợ ti&ecirc;u h&oacute;a.<br />\r\n5. Ngăn ngừa bệnh lo&atilde;ng xương.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng:</strong></p>\r\n\r\n<p>- Th&iacute;ch hợp với c&aacute;c m&oacute;n nướng, x&agrave;o, hay s&uacute;p, nấu canh với thịt.</p>\r\n', 7, 0, '2019-03-25 22:01:47', '2019-03-25 22:01:47', 1, 'namkimcham.jpg', '', '<p><span style=\"color:#c0392b\"><strong>G&iacute;a : 98.000đ</strong></span></p>\r\n'),
(199, 'NẤM BÀO NGƯ', '<p><strong>Nơi trồng:</strong></p>\r\n\r\n<p>Thu mua</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dinh dưỡng:</strong></p>\r\n\r\n<p>Chứa đầy đủ c&aacute;c loại kho&aacute;ng chất như Canxi, Sắt, Magie, Photpho, Natri, Kẽm v&agrave; Kali với h&agrave;m lượng cao, đặc biệt l&agrave; h&agrave;m lượng Kali. C&aacute;c vitamin như A, D v&agrave; K.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C&ocirc;ng dụng:</strong></p>\r\n\r\n<p>1. Tăng cường miễn dịch cơ thể.<br />\r\n2. Giảm cholesterol v&agrave; hỗ trợ ngăn ngừa huyết &aacute;p cao.<br />\r\n3. Ngăn ngừa ung thư.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng:</strong></p>\r\n\r\n<p>- Th&iacute;ch hợp với c&aacute;c m&oacute;n nướng, x&agrave;o, hay s&uacute;p, nấu canh với thịt.</p>\r\n', 7, 0, '2019-03-25 21:56:04', '2019-03-25 21:56:04', 1, 'nambaongu.jpg', '', '<p><strong><span style=\"color:#c0392b\">G&iacute;a:250.000đ</span></strong></p>\r\n'),
(202, 'NẤM NGỌC CHÂM NÂU', '<p><strong>Nơi trồng:&nbsp;</strong></p>\r\n\r\n<p>Tam Đảo/KMS</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dinh dưỡng:</strong></p>\r\n\r\n<p>C&oacute; gi&aacute; trị dinh dưỡng cao, đặc biệt l&agrave; h&agrave;m lượng protein cao tương tự như protein c&oacute; trong thịt. Rất gi&agrave;u kho&aacute;ng chất cần thiết cho cơ thể như Canxi, Sắt, Magie, Photpho, Natri, Kẽm v&agrave; Kali với h&agrave;m lượng cao, đặc biệt l&agrave; h&agrave;m lượng Kali. Nấm đ&ugrave;i g&agrave; cũng gi&agrave;u vitamin như Thiamin, Riboflavin, Niacin, B6, Folate, A, D.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C&ocirc;ng dụng:</strong></p>\r\n\r\n<p>1. Giảm lượng cholesterol trong m&aacute;u, ph&ograve;ng tr&aacute;nh nguy cơ mắc c&aacute;c bệnh về tim mạch, huyết &aacute;p.<br />\r\n2. Hỗ trợ ngăn ngừa ung thư.<br />\r\n3. Hỗ trợ ti&ecirc;u h&oacute;a.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng:</strong></p>\r\n\r\n<p>- Th&iacute;ch hợp với c&aacute;c m&oacute;n nướng, x&agrave;o, hay s&uacute;p, nấu canh với thịt.</p>\r\n', 7, 0, '2019-03-25 22:03:46', '2019-03-25 22:03:46', 1, 'namngochamnau.jpg', '', '<p><span style=\"color:#c0392b\"><strong>G&iacute;a : 260.000đ</strong></span></p>\r\n'),
(203, 'NẤM SÒ YẾN', '<h3>NẤM S&Ograve; YẾN</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Nơi trồng:</strong></p>\r\n\r\n<p>Thu mua</p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>Dinh dưỡng:</strong></p>\r\n\r\n<p>Chứa đầy đủ c&aacute;c loại kho&aacute;ng chất như Canxi, Sắt, Magie, Photpho, Natri, Kẽm v&agrave; Kali với h&agrave;m lượng cao, đặc biệt l&agrave; h&agrave;m lượng Kali. C&aacute;c vitamin như A, D v&agrave; K.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C&ocirc;ng dụng:</strong></p>\r\n\r\n<p>1. Hỗ trợ ti&ecirc;u h&oacute;a.<br />\r\n2. Giảm cholesterol v&agrave; hỗ trợ ngăn ngừa huyết &aacute;p cao.<br />\r\n3. Hỗ trợ ngăn ngừa ung thư.<br />\r\n4. Tăng cường miễn dịch cơ thể.<br />\r\n5. Giảm đường huyết.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng:</strong></p>\r\n\r\n<p>- Th&iacute;ch hợp với c&aacute;c m&oacute;n nướng, x&agrave;o, hay s&uacute;p, nấu canh với thịt.</p>\r\n', 7, 0, '2019-03-25 22:05:34', '2019-03-25 22:05:34', 1, 'namsoyen.jpg', '', '<p><span style=\"color:#c0392b\"><strong>G&iacute;a : 320.000đ</strong></span></p>\r\n'),
(204, 'NẤM VÀNG', '<p><strong>Nơi trồng:</strong></p>\r\n\r\n<p>Thu mua</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dinh dưỡng:</strong></p>\r\n\r\n<p>Chứa đầy đủ c&aacute;c loại kho&aacute;ng chất như Canxi, Sắt, Magie, Photpho, Natri, Kẽm v&agrave; Kali với h&agrave;m lượng cao, đặc biệt l&agrave; h&agrave;m lượng Kali. C&aacute;c vitamin như A, D v&agrave; K.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C&ocirc;ng dụng:</strong></p>\r\n\r\n<p>1. Hỗ trợ ti&ecirc;u h&oacute;a.<br />\r\n2. Giảm cholesterol v&agrave; hỗ trợ ngăn ngừa huyết &aacute;p cao.<br />\r\n3. Hỗ trợ ngăn ngừa ung thư.<br />\r\n4. Tăng cường miễn dịch cơ thể.<br />\r\n5. Giảm đường huyết.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng:</strong></p>\r\n\r\n<p>- Th&iacute;ch hợp với c&aacute;c m&oacute;n nướng, x&agrave;o, hay s&uacute;p, nấu canh với thịt.</p>\r\n', 7, 0, '2019-03-25 22:07:26', '2019-03-25 22:07:26', 1, 'namvang.jpg', '', '<p><span style=\"color:#c0392b\"><strong>G&iacute;a : 260.000đ</strong></span></p>\r\n'),
(205, 'RAU XÀ LÁCH MỠ', '<p><strong>Đặc điểm:</strong></p>\r\n\r\n<p>B&uacute;p cuộn, l&aacute; m&agrave;u xanh. Ăn gi&ograve;n v&agrave; ngọt.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dinh dưỡng:</strong></p>\r\n\r\n<p>Gi&agrave;u kho&aacute;ng chất canxi, sắt, magie, phốt pho, natri, kẽm, v&agrave; đặc biệt h&agrave;m lượng kali v&agrave; canxi cao hơn so với c&aacute;c loại x&agrave; l&aacute;ch l&agrave; m&agrave;u xanh. H&agrave;m lượng vitamin A cao hơn so với 1 số loại rau cải ăn l&aacute;, v&agrave; chứa một số vitamin cần thiết kh&aacute;c như vitamin C, B6, folate, E, thiamin, riboflavin, niacin.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C&ocirc;ng dụng:</strong></p>\r\n\r\n<p>1. Tăng cường hệ miễn dịch;<br />\r\n2. Hỗ trợ giảm c&acirc;n;<br />\r\n3. Tăng cường thị lực nhờ gi&agrave;u vitamin A</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng:</strong></p>\r\n\r\n<p>- Th&iacute;ch hợp nhất cho m&oacute;n salad, c&aacute;c m&oacute;n cuộn, hay ăn k&egrave;m c&aacute;c loại nước sốt, canh chua,..<br />\r\n- Ngon hơn khi d&ugrave;ng với dầu olive, muối, giấm hoặc sốt mayonaise<br />\r\n- C&oacute; thể th&ecirc;m c&aacute;c nguy&ecirc;n liệu như củ đậu, c&agrave; chua, đậu phộng, phomai sợi,&hellip; để tăng hương vị m&oacute;n ăn.</p>\r\n', 7, 0, '2019-03-25 22:13:28', '2019-03-25 22:13:28', 2, 'rauxalachmo.jpg', '', '<p><span style=\"color:#c0392b\"><strong>G&iacute;a : 110.000đ</strong></span></p>\r\n'),
(206, 'BẮP CẢI TRÁI TIM', '<p><strong>Dinh dưỡng:</strong></p>\r\n\r\n<p>Gi&agrave;u kho&aacute;ng chất như Ca, Fe, Mg, P, K, Na, Zn.&nbsp; Chứa c&aacute;c vitamin cần thiết như A, C, Thiamin, Riboflavin, Niacin, B6, Folate, E, K.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C&ocirc;ng dụng:</strong></p>\r\n\r\n<p>1. Hỗ trợ ngăn ngừa ung thư<br />\r\n2. Tăng cường sức khỏe cho làn da, răng, và mạch máu<br />\r\n3. Hỗ trợ ngăn ngừa c&aacute;c bệnh tim mạch<br />\r\n4. Tăng cường thị lực nhờ gi&agrave;u vitamin A.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng:</strong></p>\r\n\r\n<p>- Th&iacute;ch hợp nhất cho m&oacute;n salad, c&aacute;c m&oacute;n cuộn, hay ăn k&egrave;m c&aacute;c loại nước sốt, canh chua,..<br />\r\n- Ngon hơn khi d&ugrave;ng với dầu olive, muối, giấm hoặc sốt mayonaise.</p>\r\n', 7, 0, '2019-03-25 22:15:58', '2019-03-25 22:15:58', 2, 'bapcaitraitim.jpg', '', '<p><span style=\"color:#c0392b\"><strong>G&iacute;a : 110.000đ</strong></span></p>\r\n'),
(207, 'BẮP CẢI TRẮNG', '<p><strong>Dinh dưỡng:</strong></p>\r\n\r\n<p>Bắp cải l&agrave; một loại rau chủ lực trong họ cải. Trong bắp cải chứa nhiều chất xơ tốt v&agrave; h&agrave;m lượng lớn c&aacute;c kho&aacute;ng chất như vitamin C, K, B6, folate, mangan, thiamin, canxi, sắt, magi&ecirc;, phốt pho v&agrave; kali rất c&oacute; lợi cho sức khỏe. Bắp cải c&oacute; vị thanh m&aacute;t, t&iacute;nh h&agrave;n n&ecirc;n thường được chế biến c&ugrave;ng với gừng tươi.&nbsp;<strong>Bắp cải VinEco</strong>&nbsp;được kiểm định an to&agrave;n vệ sinh nghi&ecirc;m ngặt trước khi đưa tới tay người ti&ecirc;u d&ugrave;ng. Sản phẩm c&oacute; thể d&ugrave;ng để chế biến th&agrave;nh nhiều m&oacute;n ăn ngon miệng hấp dẫn.</p>\r\n\r\n<p><strong>Bắp cải L1 VinEco</strong>&nbsp;được trồng theo quy tr&igrave;nh đạt ti&ecirc;u chuẩn VietGAP tại c&aacute;c n&ocirc;ng trại lớn v&agrave; được chăm s&oacute;c tỉ mỉ để thu được những sản phẩm chất lượng nhất. Sản phẩm kh&ocirc;ng chứa c&aacute;c h&oacute;a chất, chất k&iacute;ch th&iacute;ch tăng trưởng g&acirc;y hại, đảm bảo an to&agrave;n cho sức khỏe người ti&ecirc;u d&ugrave;ng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C&ocirc;ng dụng:</strong></p>\r\n\r\n<p>Bắp cải&nbsp;&nbsp;l&agrave;&nbsp;loại rau phổ biến trong m&ugrave;a thu - đ&ocirc;ng, bắp cải kh&ocirc;ng chỉ c&oacute; gi&aacute; trị dinh dưỡng cao m&agrave; c&ograve;n chữa được nhiều bệnh. Trong bắp cải c&oacute; chứa lượng vitamin cao hơn nhiều so với c&aacute;c loại rau củ kh&aacute;c như: c&agrave; rốt, khoai t&acirc;y, h&agrave;nh t&acirc;y. Theo nghi&ecirc;n cứu, h&agrave;m lượng vitamin A v&agrave; vitamin P trong bắp cải kết hợp với nhau l&agrave;m th&agrave;nh mạch m&aacute;u bền vững hơn. Trong bắp cải c&ograve;n chứa c&aacute;c chất chống ung thư như: Sulforaphane, phenethyl isothiocyanate v&agrave; Indol -33 carbinol. Trong c&aacute;c bữa ăn thường ng&agrave;y, bắp cải được chế biến theo nhiều c&aacute;ch rất đa dạng như: luộc, x&agrave;o, nấu canh...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng:</strong></p>\r\n\r\n<p>- Th&iacute;ch hợp nhất cho m&oacute;n salad, c&aacute;c m&oacute;n cuộn, hay ăn k&egrave;m c&aacute;c loại nước sốt, canh chua,..<br />\r\n- Ngon hơn khi d&ugrave;ng với dầu olive, muối, giấm hoặc sốt mayonaise.</p>\r\n', 7, 0, '2019-03-25 22:18:06', '2019-03-25 22:18:06', 2, 'bapcaitrang.jpg', '', '<p>G&iacute;a : 1450.000đ</p>\r\n'),
(208, 'RAU MỒNG TƠI', '<p><strong>Dinh dưỡng:</strong></p>\r\n\r\n<p>Rau mồng tơi kh&aacute; dồi d&agrave;o vitamin v&agrave; kho&aacute;ng chất. Nổi bật nhất l&agrave; h&agrave;m lượng sắt, canxi, vitamin A, C v&agrave; c&aacute;c vitamin nh&oacute;m B. Đ&acirc;y đều l&agrave; những yếu tố vi lượng cần thiết cho cơ thể gi&uacute;p n&acirc;ng cao sức đề kh&aacute;ng cũng như c&oacute; gi&aacute; trị trong một số vấn đề về sức khỏe. Đ&acirc;y l&agrave; loại thực phẩm rất dễ chế biến v&agrave; ngon miệng.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C&ocirc;ng dụng:</strong></p>\r\n\r\n<p>Rau mồng tơi c&oacute; t&ecirc;n khoa học l&agrave; Basella alba L, đ&acirc;y l&agrave; một loại c&acirc;y d&acirc;y leo phổ biến ở nước ta cũng như nhiều nước tr&ecirc;n thế giới. Bộ phận l&aacute; v&agrave; đọt th&acirc;n c&ograve;n non của c&acirc;y mồng tơi thường được sử dụng trong bữa ăn h&agrave;ng ng&agrave;y hoặc được d&ugrave;ng để l&agrave;m thực phẩm bổ dưỡng nhằm hỗ trợ v&agrave; điều trị một số bệnh th&ocirc;ng thường.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng:</strong></p>\r\n\r\n<p>D&ugrave;ng chế biến m&oacute;n ăn.</p>\r\n', 7, 0, '2019-03-25 22:20:22', '2019-03-25 22:20:22', 2, 'raumongtoi.jpg', '', '<p><span style=\"color:#c0392b\"><strong>G&iacute;a : 33.000đ</strong></span></p>\r\n'),
(209, 'RAU ĐAY', '<p><strong>Dinh dưỡng:</strong></p>\r\n\r\n<p>Gi&agrave;u kali, magie, canxi v&agrave; c&aacute;c kho&aacute;ng chất kh&aacute;c như sắt, phospho, natri, đồng, kẽm, C&oacute; h&agrave;m lượng vitamin C, folate cao v&agrave; c&aacute;c vitamin kh&aacute;c như B1, B2, B5, B6, niacin, folate.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C&ocirc;ng dụng:</strong></p>\r\n\r\n<p>1. Hỗ trợ giảm c&acirc;n<br />\r\n2. Giảm cholesterol v&agrave; hỗ trợ ngăn ngừa huyết &aacute;p cao<br />\r\n3. Tăng cường sức khỏe cho làn da, răng, và mạch máu.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng:</strong></p>\r\n\r\n<p>- Th&iacute;ch hợp với c&aacute;c m&oacute;n nướng, x&agrave;o, hay s&uacute;p, nấu canh với thịt, cua.</p>\r\n', 7, 0, '2019-03-25 22:21:38', '2019-03-25 22:21:38', 2, 'rauday.jpg', '', '<p><span style=\"color:#c0392b\"><strong>G&iacute;a : 22.000đ</strong></span></p>\r\n'),
(210, 'NGỌN SU SU', '<p><strong>Dinh dưỡng:</strong></p>\r\n\r\n<p>Gi&agrave;u kali, canxi, magie, phospho, natri, đồng, kẽm v&agrave; c&aacute;c vitamin C, folate, B1, B5, B6, niacin.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C&ocirc;ng dụng:</strong></p>\r\n\r\n<p><strong>Ngọn su su L1 Vineco​</strong><strong>&nbsp;</strong>do VinMart cung cấp được trồng theo ti&ecirc;u chuẩn VietGap, tại c&aacute;c n&ocirc;ng trại lớn v&agrave; được chăm s&oacute;c tỉ mỉ để thu được những sản phẩm chất lượng nhất. Sản phẩm kh&ocirc;ng chứa c&aacute;c h&oacute;a chất, chất k&iacute;ch th&iacute;ch tăng trưởng g&acirc;y hại, đảm bảo an to&agrave;n cho sức khỏe người ti&ecirc;u d&ugrave;ng. &nbsp;Do đ&oacute;, bạn ho&agrave;n to&agrave;n c&oacute; thể an t&acirc;m khi lựa chọn sản phẩm n&agrave;y trong mỗi bữa ăn của gia đ&igrave;nh m&igrave;nh, gi&uacute;p bữa ăn trở n&ecirc;n ngon miệng hơn.&nbsp;<strong>Ngọn su su VinEco&nbsp;</strong>rất gi&agrave;u vitamin, chất xơ v&agrave; protein tốt cho sức khỏe.</p>\r\n\r\n<p>Với&nbsp;<strong>Ngọn su su L1 Vineco​</strong>, bạn&nbsp;c&oacute; thể d&ugrave;ng nấu với thịt băm, hầm với xương, x&agrave;o tỏi c&ugrave;ng thịt b&ograve;&hellip; đều cho hương vị ngọt thanh, tươi m&aacute;t ph&ugrave; hợp khẩu vị của nhiều th&agrave;nh vi&ecirc;n gia đ&igrave;nh. Sản phẩm đ&atilde; được rửa qua trước khi đ&oacute;ng g&oacute;i n&ecirc;n rất tiện lợi cho bạn bảo quản khi mua về cũng như thời gian lưu trữ được l&acirc;u d&agrave;i hơn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng:</strong></p>\r\n\r\n<p>Chế biến nhiều m&oacute;n ăn ngon như : ngọn su x&agrave;o tỏi, x&agrave;o g&agrave;, x&agrave;o b&ograve;...</p>\r\n', 7, 0, '2019-03-25 22:23:28', '2019-03-25 22:23:28', 2, 'ngonsusu.jpg', '', '<p>G&iacute;a : 31.500đ</p>\r\n'),
(211, 'CÀ CHUA ĐEN', '<p><strong>Nơi trồng:</strong></p>\r\n\r\n<p>Quảng Ninh, Đ&agrave; Loan, Lạc Dương</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Đặc điểm:</strong></p>\r\n\r\n<p>Quả tr&ograve;n, ch&iacute;n m&agrave;u socola, ăn ngọt, nhiều nước.&nbsp; M&agrave;u sắc quả kh&ocirc;ng mất m&agrave;u khi nấu ch&iacute;n.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dinh dưỡng:</strong></p>\r\n\r\n<p>Chứa một số&nbsp; kho&aacute;ng chất kh&aacute;c như Canxi, sắt, magie, phốt pho, natri v&agrave; kẽm; đặc biệt gi&agrave;u kali hơn c&agrave; chua đỏ. Ngo&agrave;i ra, chứa h&agrave;m lượng cao của vitamin C, B6, thiamin, riboflavin, niacin v&agrave; folate.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C&ocirc;ng dụng:</strong></p>\r\n\r\n<p>1. Cải thiện thị lực;<br />\r\n2. Ngăn ngừa ung thư;<br />\r\n3. Gi&uacute;p da đẹp<br />\r\n4. Giảm lượng đường trong m&aacute;u;<br />\r\n5. Gi&uacute;p giảm c&acirc;n;<br />\r\n6. Gi&uacute;p xương chắc khỏe</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng:</strong></p>\r\n\r\n<p>Th&iacute;ch hợp nhất khi trộn salad, hay d&ugrave;ng k&egrave;m c&aacute;c m&oacute;n nướng, ăn c&ugrave;ng thịt, c&aacute;.</p>\r\n', 7, 0, '2019-03-25 22:25:52', '2019-03-25 22:25:52', 3, 'cachua.jpg', '', '<p><span style=\"color:#c0392b\"><strong>G&iacute;a : 25.000đ/kg</strong></span></p>\r\n'),
(212, 'DƯA CHUỘT', '<p><strong>Nơi trồng:</strong></p>\r\n\r\n<p>Quảng Ninh, Thu mua</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dinh dưỡng:</strong></p>\r\n\r\n<p>L&agrave; loại dưa chuột phổ biến, c&oacute; chứa c&aacute;c kho&aacute;ng chất cần thiết cho cơ thể như canxi, sắt, magie, phốt pho, Kali, natri v&agrave; kẽm. C&oacute; chứa một số vitamin C, B6, A, E, K, niacin, riboflavin, folate v&agrave; thiamin.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C&ocirc;ng dụng:</strong></p>\r\n\r\n<p>Dưa chuột (dưa leo) l&agrave; thực phẩm d&acirc;n d&atilde;, từ l&acirc;u đ&atilde; được biết tới với nhiều c&ocirc;ng dụng tốt cho sức khỏe. Dưa chuột kh&ocirc;ng chứa calo n&ecirc;n l&agrave; bữa ăn nhẹ rất tốt trong m&ugrave;a h&egrave;.&nbsp;Kh&ocirc;ng chỉ c&oacute; lợi cho l&agrave;n da m&agrave; n&oacute; c&ograve;n l&agrave;m tăng h&agrave;m lượng nước v&agrave; chất xơ trong cơ thể. Hơn thế nữa, l&yacute; do dưa chuột được coi l&agrave; loại thực&nbsp;phẩm m&ugrave;a&nbsp;h&egrave; tuyệt vời v&igrave; n&oacute; c&oacute; t&aacute;c dụng l&agrave;m giảm nhiệt v&agrave; kh&aacute;ng vi&ecirc;m.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng:</strong></p>\r\n\r\n<p>&nbsp;D&ugrave;ng trực tiếp hoặc chế biến th&agrave;nh c&aacute;c m&oacute;n ăn.</p>\r\n', 7, 0, '2019-03-25 22:27:13', '2019-03-25 22:27:13', 3, 'duachuot.jpg', '', '<p><span style=\"color:#c0392b\"><strong>G&iacute;a : 30.000đ/kg</strong></span></p>\r\n'),
(213, 'BÍ XANH', '<p><strong>Nơi trồng:</strong></p>\r\n\r\n<p>Đ&agrave; Loan, Đa Chais</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dinh dưỡng:</strong></p>\r\n\r\n<p><strong>B&iacute; xanh (b&iacute; đao)</strong><strong>&nbsp;</strong>l&agrave; một trong những loại thực phẩm phổ biến trong bữa ăn h&agrave;ng ng&agrave;y của người Việt. Từ l&acirc;u, b&iacute; xanh được xem như một trong những vị thuốc c&oacute; t&aacute;c dụng chữa được nhiều bệnh như hen suyễn, ho g&agrave;, ngộ độc, ung thư họng&hellip;&nbsp;B&ecirc;n cạnh đ&oacute;,&nbsp;<strong>B&iacute; xanh</strong>&nbsp;gi&agrave;u chất xơ v&agrave; yếu tố vi lượng&nbsp;n&ecirc;n c&ograve;n l&agrave;&nbsp;loại thực phẩm gi&uacute;p bạn c&oacute; l&agrave;n da s&aacute;ng mịn m&agrave; lại giảm c&acirc;n v&ocirc; c&ugrave;ng hiệu quả.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C&ocirc;ng dụng:</strong></p>\r\n\r\n<p>&nbsp;Với nguy&ecirc;n liệu n&agrave;y, bạn c&oacute; thể dễ d&agrave;ng chế biến nhiều m&oacute;n ăn đa dạng để thay đổi thực đơn&nbsp;cho bữa ăn gia đ&igrave;nh như canh b&iacute; nấu t&ocirc;m, canh b&iacute; nhồi thịt, b&iacute; x&agrave;o thịt b&ograve;, b&iacute; nấu thả mọc... mang lại nhiều m&oacute;n ăn ngon, bổ dưỡng.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng:</strong></p>\r\n\r\n<p>&nbsp;D&ugrave;ng chế biến m&oacute;n ăn.</p>\r\n', 7, 0, '2019-03-25 22:29:27', '2019-03-25 22:29:27', 3, 'bixanh.PNG', '', '<p><span style=\"color:#c0392b\"><strong>G&iacute;a : 15.000đ/kg</strong></span></p>\r\n'),
(214, 'SU SU QUẢ', '<p><strong>Nơi trồng:</strong></p>\r\n\r\n<p>Thu mua</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Đặc điểm:</strong></p>\r\n\r\n<p><strong>Su su</strong>&nbsp;hay c&ograve;n gọi l&agrave;&nbsp;su le trong phương ngữ miền Trung Việt Nam (danh ph&aacute;p hai phần: Sechium edule) l&agrave; một loại c&acirc;y lấy quả ăn, thuộc họ Bầu b&iacute;, c&ugrave;ng với dưa hấu, dưa chuột v&agrave; b&iacute;. C&acirc;y n&agrave;y c&oacute; l&aacute; rộng, th&acirc;n c&acirc;y d&acirc;y leo tr&ecirc;n mặt đất hoặc tr&ecirc;n gi&agrave;n.&nbsp;<strong>Su su</strong>&nbsp;thường được xem như một loại rau, những tr&ecirc;n thực tế đ&acirc;y l&agrave; một loại tr&aacute;i c&acirc;y. Loại quả n&agrave;y phổ biến ở rất nhiều nước v&agrave; c&oacute; thể chế biến th&agrave;nh nhiều m&oacute;n ăn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dinh dưỡng:</strong></p>\r\n\r\n<p>Kh&ocirc;ng chỉ d&ugrave;ng để bổ sung th&agrave;nh nhiều m&oacute;n ăn m&agrave; loại quả n&agrave;y c&ograve;n&nbsp;được xem l&agrave; một loại thực phẩm tốt v&agrave; bổ dưỡng, cung cấp chất xơ v&agrave; c&aacute;c vitamin thiết yếu cho cơ thể. Trong quả&nbsp;<strong>su su&nbsp;</strong>c&oacute; chứ nhiều folat, một loại vitamin B gi&uacute;p ngăn chặn sự h&igrave;nh th&agrave;nh của homocystein l&agrave; chất c&oacute; khả năng g&acirc;y n&ecirc;n bệnh tim v&agrave; đột quỵ. Loại quả n&agrave;y c&ograve;n&nbsp;chứa nguồn vitamin C dồi d&agrave;o l&agrave; chất oxy h&oacute;a mạnh, gi&uacute;p bảo vệ tế b&agrave;o khỏi tổn thương bởi c&aacute;c ph&acirc;n tử gốc tự do ch&iacute;nh v&igrave; thế n&oacute; c&oacute; t&aacute;c dụng l&agrave;m chậm v&agrave; ngăn chặn bệnh ung thư ph&aacute;t triển.&nbsp;<strong>Su su</strong>&nbsp;c&oacute; h&agrave;m lượng mangan kh&aacute; lớn sẽ gi&uacute;p cơ thể chuyển h&oacute;a protein v&agrave; chất b&eacute;o th&agrave;nh năng lượng để cung cấp cho c&aacute;c hoạt động h&agrave;ng ng&agrave;y. Su su l&agrave; thực phẩm chứa nhiều chất xơ gi&uacute;p dạ d&agrave;y hoạt động khỏe mạnh v&agrave; hiệu quả, rất tốt cho hệ ti&ecirc;u h&oacute;a.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C&ocirc;ng dụng:</strong></p>\r\n\r\n<p>Với&nbsp;quả&nbsp;su su, bạn c&oacute; thể chế biến th&agrave;nh nhiều m&oacute;n ăn thơm ngon như&nbsp;su su x&agrave;o t&ocirc;m, canh g&agrave; nấu su su, su su x&agrave;o trứng...&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng:</strong></p>\r\n\r\n<p>D&ugrave;ng để chế biến m&oacute;n ăn t&ugrave;y th&iacute;ch</p>\r\n', 7, 0, '2019-03-25 22:30:41', '2019-03-25 22:30:41', 3, 'susu.jpg', '', '<p><span style=\"color:#c0392b\"><strong>G&iacute;a : 12.000đ/kg</strong></span></p>\r\n'),
(215, 'CÀ RỐT', '<p><strong>Nơi trồng:</strong></p>\r\n\r\n<p>Thu mua</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dinh dưỡng:</strong></p>\r\n\r\n<p>Gi&agrave;u kho&aacute;ng chất như kali, canxi, natri, sắt, magie, phospho, kẽm. L&agrave; loại rau củ chứa nhiều vitamin C, K, niacin, thiamin, roboflavin, B6, folate, v&agrave; đặc biệt gi&agrave;u vitamin A c&oacute; lợi cho sức khỏe</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C&ocirc;ng dụng:</strong></p>\r\n\r\n<p>1. Tăng cường thị lực nhờ gi&agrave;u vitamin A<br />\r\n2. Gi&uacute;p l&agrave;m đẹp da<br />\r\n3. Hỗ trợ ngăn ngừa c&aacute;c bệnh tim mạch<br />\r\n4. Hỗ trợ giảm c&acirc;n<br />\r\n5. Hỗ trợ ngăn ngừa ung thư</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng:</strong></p>\r\n\r\n<p>Th&iacute;ch hợp với c&aacute;c m&oacute;n salad, s&uacute;p, luộc, x&agrave;o, nấu canh với thịt.</p>\r\n', 7, 0, '2019-03-25 22:33:01', '2019-03-25 22:33:01', 4, 'carot.jpg', '', '<p>G&iacute;a : 24.000đ/kg</p>\r\n'),
(216, 'KHOAI LANG NHẬT', '<p><strong>Nơi trồng:</strong></p>\r\n\r\n<p>Thu mua</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Đặc điểm:</strong></p>\r\n\r\n<p><strong>Khoai lang Nhật</strong>&nbsp;l&agrave; giống khoai nhập khẩu, c&oacute; vỏ m&agrave;u t&iacute;m đẹp mắt. Sản phẩm khi chế biến cho thịt&nbsp;chắc, b&ugrave;i kh&ocirc;ng qu&aacute; mềm cũng kh&ocirc;ng qu&aacute; bở v&agrave; đặc biệt c&oacute; vị ngọt thơm ngon, hấp dẫn. Sản phẩm được trồng bằng phương ph&aacute;p hữu cơ, kh&ocirc;ng sử dụng chất k&iacute;ch th&iacute;ch tăng trưởng, đảm bảo an to&agrave;n cho sức khỏe người ti&ecirc;u d&ugrave;ng.&nbsp;<strong>Khoai lang Nhật</strong>&nbsp;c&oacute; thể luộc, chi&ecirc;n, nướng&nbsp;hay d&ugrave;ng chế biến nhiều m&oacute;n ch&egrave;, b&aacute;nh rất ngon v&agrave; bổ dưỡng. Sản phẩm dễ d&agrave;ng cho bạn&nbsp;bảo quản nơi tho&aacute;ng m&aacute;t m&agrave; kh&ocirc;ng lo khoai bị hư hỏng hay biến chất.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dinh dưỡng:</strong></p>\r\n\r\n<p>Khoai lang Nhật&nbsp;l&agrave; giống khoai nhập khẩu, c&oacute; vỏ m&agrave;u t&iacute;m đẹp mắt. Sản phẩm khi chế biến cho thịt&nbsp;chắc, b&ugrave;i kh&ocirc;ng qu&aacute; mềm cũng kh&ocirc;ng qu&aacute; bở v&agrave; đặc biệt c&oacute; vị ngọt thơm ngon, hấp dẫn. Sản phẩm được trồng bằng phương ph&aacute;p hữu cơ, kh&ocirc;ng sử dụng chất k&iacute;ch th&iacute;ch tăng trưởng, đảm bảo an to&agrave;n cho sức khỏe người ti&ecirc;u d&ugrave;ng.&nbsp;Khoai lang Nhật&nbsp;c&oacute; thể luộc, chi&ecirc;n, nướng&nbsp;hay d&ugrave;ng chế biến nhiều m&oacute;n ch&egrave;, b&aacute;nh rất ngon v&agrave; bổ dưỡng. Sản phẩm dễ d&agrave;ng cho bạn&nbsp;bảo quản nơi tho&aacute;ng m&aacute;t m&agrave; kh&ocirc;ng lo khoai bị hư hỏng hay biến chất.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C&ocirc;ng dụng:</strong></p>\r\n\r\n<p>Khoai lang Nhật (Beniazuma) được du nhập từ Nhật Bản năm 1996. Đ&acirc;y l&agrave; loại khoai&nbsp;rất gi&agrave;u c&aacute;c chất mangan, canxi, vitaminA, B, choline... Củ khoai đ&atilde; phơi kh&ocirc; c&oacute; chứa những chất rất qu&yacute; với cơ thể l&agrave; vitamin chống nhiễm mỡ. Nếu thiếu vitamin n&agrave;y c&oacute; thể dẫn đến hỗn loạn chuyển ho&aacute; gan, nhiễm mỡ gan, xơ gan.&nbsp;Ngo&agrave;i ra, khoai lang Nhật c&ograve;n c&oacute; t&aacute;c dụng nhuận tr&agrave;ng, chữa t&aacute;o b&oacute;n. Củ khoai lang l&agrave; một thức ăn tốt với những người bị suy yếu gan.&nbsp;Trong khoai lang Nhật c&oacute; chất đường, ăn nhiều khi đ&oacute;i sẽ g&acirc;y tăng tiết dịch vị l&agrave;m n&oacute;ng ruột, ợ chua, hơi trướng bụng. Để tr&aacute;nh t&igrave;nh trạng n&agrave;y, khoai phải được luộc, nướng thật ch&iacute;n hoặc cho th&ecirc;m &iacute;t rượu để ph&aacute; huỷ chất men. Nếu bị đầy bụng c&oacute; thể uống một &iacute;t nước gừng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng:</strong></p>\r\n\r\n<p>Th&iacute;ch hợp với c&aacute;c m&oacute;n chi&ecirc;n, nướng, s&uacute;p, luộc, x&agrave;o, nấu canh với thịt.</p>\r\n', 7, 0, '2019-03-25 22:37:01', '2019-03-25 22:37:01', 4, 'khoailang.jpg', '', '<p><span style=\"color:#c0392b\"><strong>G&iacute;a : 32.000đ/kg</strong></span></p>\r\n'),
(217, 'CỦ CẢI TRẮNG', '<p><strong>Nơi trồng:</strong></p>\r\n\r\n<p>Thu mua</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Đặc điểm:</strong></p>\r\n\r\n<p>Củ d&agrave;i, ruột v&agrave; vỏ m&agrave;u trắng. Vị ngọt, ăn gi&ograve;n.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dinh dưỡng:</strong></p>\r\n\r\n<p>Chứa c&aacute;c kho&aacute;ng chất Canxi, sắt, magie, phốt pho, kali, natri, kẽm, đồng; v&agrave; một số vitamin A, C, K, B6, folate.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C&ocirc;ng dụng:</strong></p>\r\n\r\n<ol>\r\n	<li>Tăng cường hệ miễn dịch,</li>\r\n	<li>Giảm huyết &aacute;p,</li>\r\n	<li>Cải thiện hệ ti&ecirc;u h&oacute;a</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng:</strong></p>\r\n\r\n<p>Salad, nấu ch&aacute;o với thịt.</p>\r\n', 7, 0, '2019-03-25 22:38:18', '2019-03-25 22:38:18', 4, 'cucaitrang.jpg', '', '<p>G&iacute;a : 35.000đ/kg</p>\r\n'),
(218, 'CỦ GỪNG', '<p><strong>Nơi trồng:</strong></p>\r\n\r\n<p>Thu mua</p>\r\n\r\n<p><strong>Dinh dưỡng:</strong></p>\r\n\r\n<p>Chứa nhiều kho&aacute;ng chất như canxi, kali, phospho, magie, v&agrave; c&aacute;c vitamin C, folate, thiamin, roboflavin, niacin, B6.</p>\r\n\r\n<p><strong>C&ocirc;ng dụng:</strong></p>\r\n\r\n<p>Nhờ m&ugrave;i thơm đặc trưng, hương vị ấm n&oacute;ng v&agrave;&nbsp;t&iacute;nh khử m&ugrave;i cao n&ecirc;n&nbsp;gừng<strong>&nbsp;</strong>l&agrave; gia vị kh&ocirc;ng thể thiếu cho c&aacute;c m&oacute;n ăn th&ecirc;m vị đậm đ&agrave;&nbsp;như c&aacute; kho, b&ograve; hầm, c&aacute;c m&oacute;n canh c&oacute; t&iacute;nh h&agrave;n như rau cải, b&iacute; xanh... Ngo&agrave;i ra, bạn c&oacute; thể đun nước gừng để pha chế đồ uống hoặc chế biến&nbsp;m&oacute;n mứt gừng thơm ngon.</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng:</strong></p>\r\n\r\n<p>Th&iacute;ch hợp d&ugrave;ng l&agrave;m gia vị trong c&aacute;c bữa ăn</p>\r\n', 7, 0, '2019-03-25 22:42:43', '2019-03-25 22:42:43', 5, 'gung.jpg', '', '<p><span style=\"color:#c0392b\"><strong>G&iacute;a : 17.500đ/kg</strong></span></p>\r\n'),
(219, 'RAU MÙI TA', '<p><strong>Nơi trồng:</strong></p>\r\n\r\n<p>Long Th&agrave;nh, Quảng Ninh</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dinh dưỡng:</strong></p>\r\n\r\n<p>Chứa c&aacute;c kho&aacute;ng chất như canxi, sắt, magie, phospho, kali, natri, kẽm, đồng v&agrave; c&aacute;c vitamin C, E, K, folate, B1, B2, B5, B6, niacin, &beta;-caroten</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C&ocirc;ng dụng:</strong></p>\r\n\r\n<p>1. Hỗ trợ ngăn ngừa ung thư<br />\r\n2. Giảm cholesterol v&agrave; hỗ trợ ngăn ngừa huyết &aacute;p cao<br />\r\n3. Tăng cường hệ miễn dịch</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng:</strong></p>\r\n\r\n<p>Th&iacute;ch hợp d&ugrave;ng l&agrave;m gia vị trong c&aacute;c bữa ăn</p>\r\n', 7, 0, '2019-03-25 22:44:12', '2019-03-25 22:44:12', 5, 'mui.jpg', '', '<p><span style=\"color:#c0392b\"><strong>G&iacute;a : 6.000đ/mớ</strong></span></p>\r\n'),
(220, 'HÀNH LÁ', '<p><strong>Nơi trồng:&nbsp;</strong></p>\r\n\r\n<p>Long Th&agrave;nh, Tam Đảo</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dinh dưỡng:</strong></p>\r\n\r\n<p>H&agrave;nh l&aacute;&nbsp;l&agrave; loại thực phẩm d&acirc;n d&atilde; kh&ocirc;ng thể thiếu để chế biến được nhiều m&oacute;n ăn ngon. Kh&ocirc;ng những mang lại hương vị đặc trưng cho c&aacute;c m&oacute;n ăn, trong h&agrave;nh l&aacute; c&ograve;n chứa nhiều t&aacute;c dụng dược l&yacute; tốt cho sức khỏe. Crom v&agrave; sự hiện diện của vitamin B6, lưu huỳnh trong h&agrave;nh l&aacute; gi&uacute;p giữ tr&aacute;i tim của bạn khỏe mạnh. Chromium kh&ocirc;ng chỉ l&agrave;m giảm triglyceride v&agrave; cholesterol xấu m&agrave; c&ograve;n l&agrave;m tăng cholesterol tốt trong cơ thể. Do đ&oacute; n&oacute; sẽ bảo vệ tr&aacute;i tim v&agrave; c&aacute;c bệnh li&ecirc;n quan tới tim mạch.&nbsp;</p>\r\n\r\n<p><strong>C&ocirc;ng dụng:</strong></p>\r\n\r\n<p>Ngo&agrave;i việc được sử dụng như một loại gia vị, h&agrave;nh l&aacute; c&ograve;n c&oacute; t&aacute;c dụng trong điều trị một số loại bệnh như:</p>\r\n\r\n<ul>\r\n	<li><em>Trừ giun đũa</em>: H&agrave;nh l&aacute;&nbsp;(cả củ v&agrave; l&aacute;) 30g, rửa sạch, th&aacute;i nhỏ, sao qua với dầu hạt cải (đốt to lửa, sao nhanh, kh&ocirc;ng cho th&ecirc;m nước v&agrave; muối), cho trẻ ăn v&agrave;o s&aacute;ng sớm l&uacute;c vừa ngủ dậy. Khoảng 2 giờ sau c&oacute; thể ăn uống b&igrave;nh thường. Ăn li&ecirc;n tục trong 3 ng&agrave;y, c&oacute; t&aacute;c dụng trừ giun, kh&ocirc;ng độc hại.</li>\r\n	<li><em>Chữa n&ocirc;n, trớ ở trẻ nhỏ</em>: H&agrave;nh l&aacute; 1 củ, gừng ta 2 l&aacute;t mỏng, cuống quả thị (c&oacute; thể thay thế bằng tai quả hồng) 3 c&aacute;i.&nbsp;Tất cả mang rửa sạch, sắc với 1 b&aacute;t nước lấy nửa b&aacute;t, chia l&agrave;m 3 phần bằng nhau cho trẻ uống trong ng&agrave;y (s&aacute;ng, trưa, tối)</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng:</strong></p>\r\n\r\n<p>&nbsp;D&ugrave;ng trực tiếp hoặc d&ugrave;ng l&agrave;m gia vị trong chế biến c&aacute;c m&oacute;n ăn</p>\r\n', 7, 0, '2019-03-25 22:45:18', '2019-03-25 22:45:18', 5, 'hanhla.jpg', '', '<p>G&iacute;a : 5.000đ/kg</p>\r\n'),
(221, 'ỚT CAY MÀU ĐỎ', '<p><strong>Nơi trồng:</strong></p>\r\n\r\n<p>Hải Ph&ograve;ng, Lạc Dương</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Đặc điểm:</strong></p>\r\n\r\n<p>Quả ch&iacute;n m&agrave;u đỏ, vị cay</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dinh dưỡng:</strong></p>\r\n\r\n<p>L&agrave; loại gia vị phổ biến, c&oacute; chứa một số kho&aacute;ng chất cần thiết cho cơ thể như: canxi, sắt, magie, phốt pho, kali, natri, kẽm. Ớt cay đỏ gi&agrave;u vitamin A v&agrave; C hơn ớt cay m&agrave;u xanh. Ngo&agrave;i ra c&ograve;n chứa c&aacute;c vitamin E, B6, thiamin, Riboflavin, Niacin, folate.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C&ocirc;ng dụng:</strong></p>\r\n\r\n<p>Hỗ trợ điều chỉnh mỡ m&aacute;u, bệnh phong h&agrave;n v&agrave; đau đầu</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng:</strong></p>\r\n\r\n<p>Th&iacute;ch hợp d&ugrave;ng l&agrave;m gia vị trong c&aacute;c bữa ăn</p>\r\n', 7, 0, '2019-03-25 22:47:44', '2019-03-25 22:47:44', 5, 'otdo.jpg', '', '<p><span style=\"color:#c0392b\"><strong>G&iacute;a : 12.000đ</strong></span></p>\r\n'),
(222, 'ỚT CAY MÀU XANH', '<p><strong>Nơi trồng:</strong></p>\r\n\r\n<p>Hải Ph&ograve;ng, Lạc Dương</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Đặc điểm:</strong></p>\r\n\r\n<p>Quả m&agrave;u xanh, vị cay</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dinh dưỡng:</strong></p>\r\n\r\n<p>L&agrave; loại gia vị phổ biến, c&oacute; chứa một số kho&aacute;ng chất cần thiết cho cơ thể như: canxi, sắt, magie, phốt pho, kali, natri, kẽm. Ớt cay c&oacute; chứa h&agrave;m lượng cao của c&aacute;c vitamin A, C, E, B6, v&agrave; một số chất kh&aacute;c như Thiamin, Riboflavin, Niacin, folate.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C&ocirc;ng dụng:</strong></p>\r\n\r\n<p>Hỗ trợ điều chỉnh mỡ m&aacute;u, bệnh phong h&agrave;n v&agrave; đau đầu</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng:</strong></p>\r\n\r\n<p>Th&iacute;ch hợp d&ugrave;ng l&agrave;m gia vị trong c&aacute;c bữa ăn</p>\r\n', 7, 0, '2019-03-25 22:49:05', '2019-03-25 22:49:05', 5, 'otxanh.jpg', '', '<p><span style=\"color:#c0392b\"><strong>G&iacute;a:13.500/kg</strong></span></p>\r\n'),
(223, 'CHANH CÓ HẠT', '<p><strong>Nơi trồng:</strong></p>\r\n\r\n<p>Thu mua</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dinh dưỡng:</strong></p>\r\n\r\n<p>Gi&agrave;u vitamin C, chứa c&aacute;c kho&aacute;ng chất như canxi, magie, sắt, phospho, kali, natri, kẽm, đồng</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C&ocirc;ng dụng:</strong></p>\r\n\r\n<p>1. Hỗ trợ ngăn ngừa ung thư<br />\r\n2. Hỗ trợ giải nhiệt<br />\r\n3. Gi&uacute;p l&agrave;m đẹp da</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng:</strong></p>\r\n\r\n<p>Th&iacute;ch hợp d&ugrave;ng l&agrave;m gia vị trong c&aacute;c bữa ăn</p>\r\n', 7, 0, '2019-03-25 22:50:07', '2019-03-25 22:50:07', 5, 'chanh.jpg', '', '<p>G&iacute;a : 23.000đ/kg</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(10) NOT NULL,
  `ten_sanpham` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `ten_nsx` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_ncc` int(10) DEFAULT NULL,
  `idnhom` int(11) DEFAULT NULL,
  `ten_ncc` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GiaSP` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `ten_sanpham`, `soluong`, `ten_nsx`, `id_ncc`, `idnhom`, `ten_ncc`, `GiaSP`) VALUES
(1, 'Nấm đông cô tươi', 3, 'Vineco', 1, 1, 'Minh Tiến', NULL),
(2, 'Nấm kim châm', 6, 'Vineco', 1, 1, 'Minh Tiến', NULL),
(3, 'Nấm bào ngư', 8, 'Vineco', 2, 1, 'Nông trường Long An', NULL),
(4, 'Nasm ngọc châm nâu', 5, 'Vineco', 1, 1, 'Minh Tiến', NULL),
(5, 'Nấm sò yến', 6, 'Vineco', 3, 1, 'Nông trường Long An', NULL),
(6, 'Nấm vàng', 7, 'Vineco', 1, 1, 'Minh Tiến', NULL),
(7, 'Rau xà lách mỡ', 4, 'Vineco', 2, 2, 'Nông trường Đà Lạt', NULL),
(8, 'Bắp cải trái tim', 12, 'Vineco', 1, 2, 'Minh Tiến', NULL),
(9, 'Bắp cải trắng', 9, 'Vineco', 2, 2, 'Nông trường Đà Lạt', NULL),
(10, 'Rau mồng tơi', 11, 'Vineco', 1, 2, 'Minh Tiến', NULL),
(11, 'Rau đay', 4, 'Vineco', 3, 2, 'Nông trường Long An', NULL),
(12, 'Ngọn su su', 8, 'Vineco', 1, 2, 'Minh Tiến', NULL),
(13, 'Cà chua đen', 18, 'Vineco', 1, 3, 'Minh Tiến', NULL),
(14, 'Dưa chuột', 12, 'Vineco', 3, 3, 'Nông trường Long An', NULL),
(15, 'Bí xanh', 5, 'Vineco', 3, 3, 'Nông trường Long An', NULL),
(16, 'Su su quả', 13, 'Vineco', 2, 3, 'Nông trường Đà Lạt', NULL),
(17, 'Cà rốt', 14, 'Vineco', 3, 4, 'Nông trường Long An', NULL),
(18, 'Khoai lang Nhật', 23, 'Vineco', 1, 4, 'Minh Tiến', NULL),
(19, 'Củ cải trắng', 12, 'Vineco', 2, 4, 'Nông trường Long An', NULL),
(20, 'Rau mùi ta', 11, 'Vineco', 1, 4, 'Minh Tiến', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `createdate` datetime NOT NULL,
  `is_block` tinyint(4) NOT NULL DEFAULT '0',
  `permision` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `fullname`, `createdate`, `is_block`, `permision`) VALUES
(7, 'locnt62', '123456', 'locnt62@wru.vn', 'Nguyễn Thành Lộc', '2018-11-27 20:59:42', 0, 1),
(17, 'Long Ngo', '1234567', 'longnt@gmail.com', 'Ngo Duc Long', '2018-12-03 16:08:16', 0, 0),
(22, 'Linhlinh211997', 'linh1997', 'linhlinh211997@yahoo.com', 'Phạm Gia Linh', '2018-12-14 14:37:58', 0, 0),
(29, 'Ngocthach', '10081997', 'Ngoc27@gmail.com', 'Phạm Thạch Ngọc', '2019-01-03 12:56:54', 0, 0),
(21, 'Kien Nguyen', 'Kien10081998', 'kien1997@gmail.com', 'Nguyen Trong Kien', '2018-12-07 21:14:47', 0, 0),
(28, 'Loanngo', '1456', 'loanngo98@gmail.com', 'Ngô Thu Loan', '2019-01-02 16:34:23', 0, 0),
(30, 'linhlinh98', '1234', 'tu82@gmail.com', 'Phạm Gia Tú', '2019-03-25 20:41:59', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avar`
--
ALTER TABLE `avar`
  ADD PRIMARY KEY (`id_anh`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cm_id`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `Makh` (`Makh`),
  ADD KEY `Masp` (`Masp`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Indexes for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`id_ncc`);

--
-- Indexes for table `nhombai`
--
ALTER TABLE `nhombai`
  ADD PRIMARY KEY (`idnhom`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`idtin`),
  ADD KEY `idnhom` (`idnhom`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `id_ncc` (`id_ncc`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avar`
--
ALTER TABLE `avar`
  MODIFY `id_anh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `cm_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `id_ncc` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `idtin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`Makh`) REFERENCES `khachhang` (`MaKH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`Masp`) REFERENCES `sanpham` (`id_sanpham`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_ncc`) REFERENCES `nhacungcap` (`id_ncc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
