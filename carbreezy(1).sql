-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2024 at 06:56 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carbreezy`
--

-- --------------------------------------------------------

--
-- Table structure for table `cauhinhwebsite`
--

CREATE TABLE `cauhinhwebsite` (
  `id` int(11) NOT NULL,
  `codecauhinh` varchar(50) NOT NULL,
  `giatricauhinh` varchar(1000) NOT NULL DEFAULT 'charsetutf8mb4'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cauhinhwebsite`
--

INSERT INTO `cauhinhwebsite` (`id`, `codecauhinh`, `giatricauhinh`) VALUES
(1, 'logo', 'assets/img/logo/logo-4.png'),
(4, 'loiGioiThieu', 'Hãy liên hệ với chúng tôi ngay để được tư vấn và hỗ trợ tận tình.'),
(5, 'address', '285 Đội Cấn'),
(6, 'phone', '1800 1141/ 0961 839 788'),
(7, 'index_banner', 'assets/img/banner/img-1.jpg'),
(8, 'gmail', 'aptech1@aprotrain.com'),
(9, 'succesfullWork', '1000'),
(10, 'happyPeople', '999'),
(11, 'frightVehicles', '200'),
(12, 'awardWinning', '20'),
(13, 'dinhVi', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.924278786039!2d105.8164542750006!3d21.03571558754015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab145bf89bd7%3A0xd94a869b494c04b6!2zMjg1IFAuIMSQ4buZaSBD4bqlbiwgTGnhu4V1IEdpYWksIEJhIMSQw6xuaCwgSMOgIE7hu5lpIDEwMDAwMCwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1691101848481!5m2!1sen!2s');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `tenmenu` varchar(255) NOT NULL,
  `linkmenu` varchar(1000) NOT NULL,
  `parentid` int(11) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `tenmenu`, `linkmenu`, `parentid`, `sort`) VALUES
(1, 'HOME', 'index.php', NULL, 1),
(2, 'SHOP', 'index.php?quanly=shop&id=1', NULL, 2),
(4, 'CART', 'index.php?quanly=cart', 2, NULL),
(5, 'MY ACCOUNT', 'index.php?quanly=my-account', 2, NULL),
(6, 'ABOUT', 'index.php?quanly=about', NULL, 3),
(7, 'CONTACT', 'index.php?quanly=contact', NULL, 4),
(8, 'LIBRARY', 'index.php?quanly=library', NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `codeslide` varchar(1000) NOT NULL,
  `anhslide` varchar(1000) DEFAULT NULL,
  `tieude1` varchar(1000) NOT NULL,
  `tieude2` varchar(1000) NOT NULL,
  `tieudenut` varchar(1000) NOT NULL DEFAULT 'null',
  `linknut` varchar(1000) NOT NULL DEFAULT 'null',
  `tieude3` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `codeslide`, `anhslide`, `tieude1`, `tieude2`, `tieudenut`, `linknut`, `tieude3`) VALUES
(1, 'index_slide', 'assets/img/slide/img-2.jpg', 'Best deal', '15% - 20% Off', 'Buy Now', 'index.php?quanly=shop&id=1', 'Luxury supercars, exclusive privileges!'),
(2, 'index_slide', 'assets/img/slide/img-5.jpg', 'Best deal', '15% - 20% Off', 'Buy now', 'index.php?quanly=shop&id=1', 'Drive with class, seize the golden opportunity!'),
(3, 'index_slide', 'assets/img/slide/img-6.jpg', 'Best deal', '15% - 20% Off', 'Buy now', 'index.php?quanly=shop&id=1', 'Assert your status, embrace elite value!'),
(5, 'about_slide', '', 'Car Breezy - Uy Tín Và Chất Lượng', 'Được thành lập từ năm 2024, Car Breezy tự hào là một trong những công ty ô tô uy tín và đáng tin cậy nhất trên thị trường Việt Nam. Với đội ngũ nhân viên giàu kinh nghiệm, chúng tôi cam kết mang đến cho khách hàng những sản phẩm và dịch vụ chất lượng nhất.', 'null', 'null', 'Chúng tôi luôn coi trọng việc mang đến cho khách hàng những trải nghiệm mua sắm thực sự thú vị và đáng nhớ. Hãy liên hệ với chúng tôi ngay để được tư vấn và hỗ trợ tận tình.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(2, 'tranhuycuong', 'ffb74748126ad0957bdf4e4de4d0e8ef', 1),
(3, 'huycuong', '17d63b1625c816c22647a73e1482372b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`) VALUES
(35, 43, '8505', 0),
(36, 43, '2657', 1),
(37, 43, '9004', 1),
(38, 43, '970', 1),
(39, 43, '5821', 1),
(40, 49, '6465', 0),
(41, 53, '5538', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(23, '8505', 63, 1),
(24, '8505', 62, 1),
(25, '2657', 63, 2),
(26, '9004', 63, 1),
(27, '9004', 57, 1),
(28, '970', 63, 1),
(29, '5821', 62, 1),
(30, '6465', 62, 1),
(31, '6465', 58, 3),
(32, '6465', 47, 1),
(33, '6465', 53, 2),
(34, '5538', 63, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkh` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL,
  `matkhau` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkh`, `email`, `diachi`, `dienthoai`, `matkhau`) VALUES
(43, 'Huycuong', 'a1k47laito@gmail.com', 'Nam Dinh', '0945137495', '17d63b1625c816c22647a73e1482372b'),
(44, 'Cuong Toi', '0945137495', 'Nam Dinh', '0945137495', '81dc9bdb52d04dc20036dbd8313ed055'),
(45, 'Tran Huy Cuong', 'a1k47laito@gmail.com', 'Nam Dinh', '0945137495', '7d6b855f0d212f6d781a6cf03afd2bc6'),
(46, 'Huycuong', 'a1k47laito@gmail.com', 'Nam Dinh', '0945137495', '17d63b1625c816c22647a73e1482372b'),
(47, 'Nam', 'buiducnam2002@gmail.com', '285 doi can', '123141231', '25f9e794323b453885f5181f1b624d0b'),
(48, 'Nguyen Cong Thanh', 'thanh@gmaiil.com', 'Nam Dinh', '0945137495', '17d63b1625c816c22647a73e1482372b'),
(49, 'Thanh', 't@gmail.com', 'Ha Noi', '1111', '17d63b1625c816c22647a73e1482372b'),
(50, 'tung', 'tung@gmail', 'doi can', '123', 'e10adc3949ba59abbe56e057f20f883e'),
(51, '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(52, 'tung', 'tung@gmail.com', 'dc', '123', '202cb962ac59075b964b07152d234b70'),
(53, 'dung', 'tung@gmail.com', 'ltn', '3213', 'caf1a3dfb505ffed0d024130f58c5cfa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(14, 'Mercedes-Benz', 1),
(17, 'Porsche', 4),
(21, 'Audi', 8),
(30, 'Mazda', 9),
(31, 'Hyundai', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` float NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` tinytext NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `discount` int(100) NOT NULL,
  `issale` varchar(50) NOT NULL,
  `start` int(11) NOT NULL,
  `giadis` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`, `discount`, `issale`, `start`, `giadis`) VALUES
(45, 'Mazda Cx5', '001', 50000, 5, '1692904566_thong-so-ky-thuat-mazda-cx5-0.jpg', 'Mazda CX5 2024 là một trong các mẫu CUV có doanh số bán ra tốt và ổn định trong suốt nhiều năm trở lại đây. Thời điểm hiện tại, CX5 có sự nâng câp mạnh mẽ và có giá bán cũng được định vị còn th', 'Động cơ/hộp số-\r\n\r\nKiểu động cơ\r\nSkyactiv-G 2.0_\r\n\r\nDung tích (cc)\r\n1.998_\r\n\r\nCông suất (mã lực)/vòng tua (vòng/phút)\r\n154/6000_\r\n\r\nMô-men xoắn (Nm)/vòng tua (vòng/phút)\r\n200/4000_\r\n\r\nHộp số\r\nTự động 6 cấp/6AT_\r\n\r\nHệ dẫn động\r\nCầu trước / FWD_\r\n\r\nLoại nhiên liệu\r\nXăng_\r\n\r\nKích thước/trọng lượng\r\n-\r\nSố chỗ\r\n5_\r\n\r\nKích thước dài x rộng x cao (mm)\r\n4550 x 1840 x 1680_\r\n\r\nChiều dài cơ sở (mm)\r\n2.700_\r\n\r\nKhoảng sáng gầm (mm)\r\n200_\r\n\r\nBán kính vòng quay (mm)\r\n5,46_\r\n\r\nThể tích khoang hành lý (lít)\r\n442_\r\n\r\nDung tích bình nhiên liệu (lít)\r\n56_\r\n\r\nTrọng lượng bản thân (kg)\r\n1.550_\r\n\r\nTrọng lượng toàn tải (kg)\r\n2.000_\r\n\r\nLốp, la-zăng\r\n225/55 R19.\r\n', 1, 30, 5, 'sale', 4, 47500),
(46, 'Mazda Cx8', '002', 120000, 5, '1692979564_1692904948_cx8mazda.jpg', 'Là mẫu xe được làm lại trên nền tảng mẫu CX-9, CX-8 có kích thước lớn nhất phân khúc. Nhưng kiểu dáng bên ngoài không quá khác biết với CX-5 và thiếu đi các trang bị tiện ích khiến CX-8 không được ', 'Động cơ/hộp số--\r\nKiểu động cơ\r\nSkactiv-G 2.5_\r\nDung tích (cc)\r\n2.499_\r\nCông suất (mã lực)/vòng tua (vòng/phút)\r\n188/6000_\r\nMô-men xoắn (Nm)/vòng tua (vòng/phút)\r\n252/4000_\r\nHộp số\r\nTự động 6 cấp/6AT_\r\nHệ dẫn động\r\nCầu trước / FWD_\r\nLoại nhiên liệu\r\nXăng_\r\nKích thước/trọng lượng--\r\nSố chỗ\r\n7_\r\nKích thước dài x rộng x cao (mm)\r\n4900 x 1840 x 1730_\r\nChiều dài cơ sở (mm)\r\n2.930_\r\nKhoảng sáng gầm (mm)\r\n200_\r\nBán kính vòng quay (mm)\r\n5.800_\r\nDung tích bình nhiên liệu (lít)\r\n72_\r\nTrọng lượng bản thân (kg)\r\n1.770_\r\nTrọng lượng toàn tải (kg)\r\n2.365_\r\nLốp, la-zăng\r\n225/65R19', 1, 30, 5, 'sale', 3, 114000),
(47, 'Mazda 6', '003', 70000, 6, '1692905452_mazda 6.jpg', 'Mẫu Sedan cỡ D làm mưa làm gió tại thời điểm ra mắt 2014 và kéo dài khoảng 2 năm. Yếu tố thành công của Mazda6 cũng giống Mazda3, có kiểu dáng đẹp, nhiều trang bị, giá bán hợp lý trong phân khúc. Tuy nhi', 'Động cơ/hộp số-\r\nKiểu động cơ\r\nSkyActiv-G 2.0L_\r\nDung tích (cc)\r\n1.998_\r\nCông suất (mã lực)/vòng tua (vòng/phút)\r\n154/6000_\r\nMô-men xoắn (Nm)/vòng tua (vòng/phút)\r\n200/4000_\r\nHộp số\r\nTự động 6 cấp/6AT_\r\nHệ dẫn động\r\nCầu trước / Front Wheel Drive_\r\nLoại nhiên liệu\r\nXăng_\r\nKích thước/trọng lượng-\r\nSố chỗ\r\n5_\r\nKích thước dài x rộng x cao (mm)\r\n4865 x 1840 x 1450_\r\nChiều dài cơ sở (mm)\r\n2.830_\r\nKhoảng sáng gầm (mm)\r\n165_\r\nBán kính vòng quay (mm)\r\n5.600_\r\nThể tích khoang hành lý (lít)\r\n480_\r\nDung tích bình nhiên liệu (lít)\r\n62_\r\nTrọng lượng bản thân (kg)\r\n1.520_\r\nTrọng lượng toàn tải (kg)\r\n1.970_\r\nLốp, la-zăng\r\n225/55R17', 1, 30, 5, '', 3, 66500),
(48, 'Mazda BT-50', '004', 150000, 5, '1692979553_1692905613_bt50.jpg', 'Phiên bản mới của Mazda BT-50 được thay đổi toàn bộ từ động cơ cho tới nội và ngoại thất. Điều này giúp mẫu xe có thêm những giá trị vô hình khác, đáp ứng nhiều nhu cầu sử dụng hơn thay vì ch', 'Động cơ/hộp số\r\nKiểu động cơ\r\nDiesel tăng áp VGS, 4 xi lanh DOHC 16v\r\nDung tích (cc)\r\n1.898\r\nCông suất (mã lực)/vòng tua (vòng/phút)\r\n148\r\nMô-men xoắn (Nm)/vòng tua (vòng/phút)\r\n350\r\nHộp số\r\nSố sàn 6 cấp/6MT\r\nHệ dẫn động\r\ncầu sau / RWD\r\nLoại nhiên liệu\r\nDiesel\r\nKích thước/trọng lượng\r\nSố chỗ\r\n5\r\nKích thước dài x rộng x cao (mm)\r\n5280 x 1870 x 1800\r\nChiều dài cơ sở (mm)\r\n3.125\r\nKhoảng sáng gầm (mm)\r\n224\r\nBán kính vòng quay (mm)\r\n6.100\r\nDung tích bình nhiên liệu (lít)\r\n76\r\nTrọng lượng bản thân (kg)\r\n1.800\r\nTrọng lượng toàn tải (kg)\r\n2.590\r\nLốp, la-zăng\r\n255/65R17', 1, 30, 5, 'sale', 4, 142500),
(49, 'Audi A6', '005', 200000, 5, '1692979540_1692905800_audi a6.jpg', 'A6 thuộc phân khúc sedan hạng sang cỡ trung. Thiết kế đậm chất thời trang, nhiều công nghệ, Audi A6 được đánh giá cao trong phân khúc nhưng giá cao do nguồn gốc nhập khẩu, doanh số còn khá khiêm tốn.', 'Động cơ/hộp số\r\nCông suất (mã lực)/vòng tua (vòng/phút)\r\n245/5000-6500\r\nDung tích (cc)\r\n1.984\r\nHệ dẫn động\r\nFWD\r\nHộp số\r\nS tronic\r\nKiểu động cơ\r\nTFSI 2.0 Mild-hybrid 12V\r\nLoại nhiên liệu\r\nXăng\r\nMô-men xoắn (Nm)/vòng tua (vòng/phút)\r\n370/1600-4300\r\nMức tiêu thụ nhiên liệu đường hỗn hợp (lít/100 km)\r\n7,01\r\nKích thước/trọng lượng\r\nBán kính vòng quay (mm)\r\n6.050\r\nChiều dài cơ sở (mm)\r\n2.932\r\nDung tích bình nhiên liệu (lít)\r\n73\r\nKhoảng sáng gầm (mm)\r\n120\r\nKích thước dài x rộng x cao (mm)\r\n4939x1886x1457\r\nLốp, la-zăng\r\n225/55R18\r\nSố chỗ\r\n5\r\nThể tích khoang hành lý (lít)\r\n530\r\nTrọng lượng bản thân (kg)\r\n1.715\r\nTrọng lượng toàn tải (kg)\r\n2.240', 1, 21, 5, '', 5, 195000),
(50, 'Audi Q7 2021', '006', 300000, 5, '1692906167_AudiQ745TFSI2424jpg-1632032328.jpg', 'Q7 cạnh tranh X5, GLE ở nhóm SUV hạng sang cỡ trung. Đây cũng là mẫu SUV đầu tiên của hãng xe bốn vòng tròn, ra mắt lần đầu hồi 2005. ', 'Động cơ/hộp số\r\nCông suất (mã lực)/vòng tua (vòng/phút)\r\n252/5000-6000\r\nDung tích (cc)\r\n1.984\r\nHệ dẫn động\r\nquattro\r\nHộp số\r\nTip tronic\r\nKiểu động cơ\r\nTFSI 2.0\r\nLoại nhiên liệu\r\nXăng\r\nMô-men xoắn (Nm)/vòng tua (vòng/phút)\r\n370/1600-4500\r\nMức tiêu thụ nhiên liệu đường hỗn hợp (lít/100 km)\r\n12,46\r\nKích thước/trọng lượng\r\nBán kính vòng quay (mm)\r\n6.250\r\nChiều dài cơ sở (mm)\r\n2.999\r\nDung tích bình nhiên liệu (lít)\r\n85\r\nKhoảng sáng gầm (mm)\r\n240\r\nKích thước dài x rộng x cao (mm)\r\n5064x1970x1741\r\nLốp, la-zăng\r\n255/55R19\r\nSố chỗ\r\n7\r\nThể tích khoang hành lý (lít)\r\n740\r\nTrọng lượng bản thân (kg)\r\n2.075\r\nTrọng lượng toàn tải (kg)\r\n2.880', 1, 21, 5, 'sale', 5, 285000),
(51, 'Audi A8L 2022', '007', 260000, 5, '1692906268_audia8.webp', 'A8L mới thiết kế chau chuốt hơn, lưới tản nhiệt khung đơn rộng hơn và trang trí với những chi tiết mạ crôm tạo điểm nhấn. Cụm đèn pha LED matrix kết hợp với đèn ban ngày LED phát ra dải ánh sáng đ', 'Động cơ/hộp số\r\nKiểu động cơ\r\n55 TFSI quattro\r\nDung tích (cc)\r\n2,995\r\nCông suất (mã lực)/vòng tua (vòng/phút)\r\n340/5.000-6.400\r\nMô-men xoắn (Nm)/vòng tua (vòng/phút)\r\n500/1.370-4.500\r\nHộp số\r\n8AT Tiptronic quattro\r\nHệ dẫn động\r\n4WD\r\nLoại nhiên liệu\r\nXăng\r\nMức tiêu thụ nhiên liệu đường hỗn hợp (lít/100 km)\r\n13,35\r\nKích thước/trọng lượng\r\nKích thước dài x rộng x cao (mm)\r\n5.320 x 1.945 x 1.488\r\nChiều dài cơ sở (mm)\r\n3,128\r\nDung tích bình nhiên liệu (lít)\r\n82\r\nTrọng lượng bản thân (kg)\r\n1,980\r\nLốp, la-zăng\r\n255/45 R19\r\nSố chỗ\r\n5', 1, 21, 5, 'sale', 4, 247000),
(52, 'Audu Q3 2021', '008', 200000, 5, '1692979518_1692906461_audi q3.jpg', 'Q3 là chiếc SUV 5 chỗ cỡ nhỏ hạng sang, nơi nhiều đối thủ như Mercedes GLA, BMW X1 tham chiến. Q3 ngoài bản thiết kế SUV truyền thống, xe còn có thêm biến thể kiểu dáng coupe mang tên Q3 Sportback. ', 'Động cơ/hộp số\r\nCông suất (mã lực)/vòng tua (vòng/phút)\r\n150/5000-6000\r\nDung tích (cc)\r\n1.395\r\nHệ dẫn động\r\nFWD\r\nHộp số\r\nS tronic\r\nKiểu động cơ\r\nTFSI 1.4\r\nLoại nhiên liệu\r\nXăng\r\nMô-men xoắn (Nm)/vòng tua (vòng/phút)\r\n250/1500-3500\r\nMức tiêu thụ nhiên liệu đường hỗn hợp (lít/100 km)\r\n7,95\r\nKích thước/trọng lượng\r\nBán kính vòng quay (mm)\r\n5.900\r\nChiều dài cơ sở (mm)\r\n2.680\r\nDung tích bình nhiên liệu (lít)\r\n58\r\nKhoảng sáng gầm (mm)\r\n170\r\nKích thước dài x rộng x cao (mm)\r\n4484x1849x1585\r\nLốp, la-zăng\r\n235/55R18\r\nSố chỗ\r\n5\r\nThể tích khoang hành lý (lít)\r\n410\r\nTrọng lượng bản thân (kg)\r\n1.495\r\nTrọng lượng toàn tải (kg)\r\n2.050', 1, 21, 5, 'sale', 5, 195000),
(53, 'Porsche 911 2021', '009', 500000, 5, '1692906651_por911.jpg', '911 là chiếc xe đầu bảng của Porsche, chiếc xe đã tạo nên danh tiếng của hãng xe Đức, với thiết kế trường tồn theo thời gian, cảm giác lái thể thao và tốc độ. 911 luôn nằm trong danh sách muốn sở h', 'Động cơ/hộp số\r\nKiểu động cơ\r\nBoxer H-6, twin-turbo\r\nDung tích (cc)\r\n2.981\r\nCông suất (mã lực)/vòng tua (vòng/phút)\r\n385/6500\r\nMô-men xoắn (Nm)/vòng tua (vòng/phút)\r\n450/1950 - 5000\r\nHộp số\r\nPDK 8 cấp\r\nHệ dẫn động\r\nBánh sau\r\nLoại nhiên liệu\r\nXăng\r\nMức tiêu thụ nhiên liệu đường hỗn hợp (lít/100 km)\r\n9,4\r\nKích thước/trọng lượng\r\nSố chỗ\r\n4\r\nKích thước dài x rộng x cao (mm)\r\n4519 x 1852 x 1298\r\nChiều dài cơ sở (mm)\r\n2.450\r\nBán kính vòng quay (mm)\r\n11.200\r\nThể tích khoang hành lý (lít)\r\n132\r\nDung tích bình nhiên liệu (lít)\r\n64\r\nTrọng lượng bản thân (kg)\r\n1.505\r\nTrọng lượng toàn tải (kg)\r\n1.960\r\nLốp, la-zăng\r\nLốp trước: 235/40 ZR 19 / Lốp sau: 295/35 ZR 20', 1, 17, 5, 'sale', 5, 475000),
(54, 'Porsche Macan 2022', '010', 200000, 5, '1692906837_Porsche_Macan_GTS (1).jpg', 'Nằm trong xu hướng toàn cầu về việc tạo ra những mẫu SUV cỡ nhỏ Macan đã giúp Porsche tiếp cận đến nhiều khách hàng trẻ với tài chính vừa phải và đây cũng là mẫu SUV khá phù hợp với các đô th', 'Động cơ/hộp số\r\nKiểu động cơ\r\nI4 turbo\r\nDung tích (cc)\r\n1.984\r\nCông suất (mã lực)/vòng tua (vòng/phút)\r\n265/5000 - 6800\r\nMô-men xoắn (Nm)/vòng tua (vòng/phút)\r\n400/1600 - 4500\r\nHộp số\r\nPDK 7 cấp\r\nHệ dẫn động\r\n4 bánh toàn phần\r\nLoại nhiên liệu\r\nXăng\r\nMức tiêu thụ nhiên liệu đường hỗn hợp (lít/100 km)\r\n8,9\r\nKích thước/trọng lượng\r\nSố chỗ\r\n5\r\nKích thước dài x rộng x cao (mm)\r\n4696 x 2098 x 1624\r\nChiều dài cơ sở (mm)\r\n2.807\r\nKhoảng sáng gầm (mm)\r\nBán kính vòng quay (mm)\r\nDung tích khoang hành lý (lít)\r\n488\r\nDung tích bình nhiên liệu (lít)\r\n65\r\nTrọng lượng bản thân (kg)\r\n1.795\r\nTrọng lượng toàn tải (kg)\r\n2.510\r\nLốp, la-zăng\r\nR18', 1, 17, 5, 'sale', 5, 195000),
(55, 'Porsche Cayenne 2021', '011', 170000, 5, '1692979504_1692906946_por.jpg', 'Mẫu SUV trứ danh của Porsche nổi tiếng với sự bền bỉ và khả năng chạy tốc độ cao tốt. Đây cũng là mẫu SUV gia đình được giới nhà giàu ưa chuộng.', 'Động cơ/hộp số\r\nKiểu động cơ\r\nV6, turbo\r\nDung tích (cc)\r\n2.995\r\nCông suất (mã lực)/vòng tua (vòng/phút)\r\n340/5300 - 6400\r\nMô-men xoắn (Nm)/vòng tua (vòng/phút)\r\n450/1340 - 5300\r\nHộp số\r\nTiptronic S 8 cấp\r\nHệ dẫn động\r\n4 bánh toàn phần\r\nLoại nhiên liệu\r\nXăng\r\nMức tiêu thụ nhiên liệu đường hỗn hợp (lít/100 km)\r\n9,1\r\nKích thước/trọng lượng\r\nSố chỗ\r\n5\r\nKích thước dài x rộng x cao (mm)\r\n4918 x 1983 x 1696\r\nChiều dài cơ sở (mm)\r\n2.895\r\nThể tích khoang hành lý (lít)\r\n770\r\nDung tích bình nhiên liệu (lít)\r\n75\r\nTrọng lượng bản thân (kg)\r\n1.985\r\nTrọng lượng toàn tải (kg)\r\n2.830\r\nLốp, la-zăng\r\nLốp trước: 255/55 ZR 19 / Lốp sau: 275/50 ZR 19', 1, 17, 5, 'sale', 5, 166500),
(56, 'Porsche 718 2021', '012', 400000, 5, '1692908399_por777.jpg', '718 là mẫu xe thể thao cỡ nhỏ phục vụ cho các khách hàng yêu thích 911 nhưng tài chính chưa đủ, hoặc muốn một chiếc xe có chất thể thao với một động cơ nhỏ hơn phù hợp cho các đô thị lớn.', 'Động cơ/hộp số\r\nKiểu động cơ\r\nBoxer H-4 Tăng áp\r\nDung tích (cc)\r\n1.988\r\nCông suất (mã lực)/vòng tua (vòng/phút)\r\n300/6500\r\nMô-men xoắn (Nm)/vòng tua (vòng/phút)\r\n380/2050 - 4500\r\nHộp số\r\nPDK 7 cấp\r\nHệ dẫn động\r\nBánh sau\r\nLoại nhiên liệu\r\nXăng\r\nMức tiêu thụ nhiên liệu đường hỗn hợp (lít/100 km)\r\n8,1\r\nKích thước/trọng lượng\r\nTrọng lượng toàn tải (kg)\r\n1.685\r\nLốp, la-zăng\r\nLốp trước: 235/45 ZR18 / Lốp sau: 265/45 ZR 18\r\nSố chỗ\r\n2\r\nKích thước dài x rộng x cao (mm)\r\n4379 x 1801 x 1295\r\nChiều dài cơ sở (mm)\r\n2.475\r\nBán kính vòng quay (mm)\r\n10,98\r\nThể tích khoang hành lý (lít)\r\n150\r\nDung tích bình nhiên liệu (lít)\r\n54\r\nTrọng lượng bản thân (kg)\r\n1.335', 1, 17, 5, 'sale', 5, 380000),
(57, 'Mercedes GLC 2023', '013', 60000, 5, '1692979493_1692908377_mer300.jpg', 'GLC 2023 thuộc thế hệ thứ 2, là dòng xe bán chạy nhất của Mercedes tại Việt Nam lẫn trên toàn cầu. Xe lắp ráp trong nước hai bản GLC 200 và GLC 300, riêng bản coupe GLC nhập khẩu. Xe cạnh tranh ở phân khúc ', 'Động cơ/hộp số\r\nKiểu động cơ\r\nMild-Hybrid I4 Turbo\r\nDung tích (cc)\r\n1.999\r\nCông suất (mã lực)/vòng tua (vòng/phút)\r\n204/6.100\r\nMô-men xoắn (Nm)/vòng tua (vòng/phút)\r\n320/3.000-4.000\r\nHộp số\r\nTự động 9 cấp 9G-TRONIC\r\nHệ dẫn động\r\nAWD\r\nLoại nhiên liệu\r\nXăng\r\nTốc độ tối đa (km/h)\r\n221\r\nKích thước/trọng lượng\r\nSố chỗ\r\n5\r\nKích thước dài x rộng x cao (mm)\r\n4.716 x 1.934 x 1.640\r\nChiều dài cơ sở (mm)\r\n2.888\r\nThể tích khoang hành lý (lít)\r\n620\r\nDung tích bình nhiên liệu (lít)\r\n62\r\nTrọng lượng bản thân (kg)\r\n1.925\r\nLốp, la-zăng\r\n19 inch', 1, 14, 5, 'sale', 5, 53000),
(58, 'Mercedes C-Class 2022', '014', 60000, 5, '1692979480_1692908503_mergg.jpg', 'C-class 2022 thế hệ mới (mã W206) bán tại Việt Nam với 4 bản: C200 Avantgarde, Avantgarde Plus, bên cạnh C300 AMG lắp ráp trong nước CKD và C300 AMG First Edition nhập khẩu CBU.\r\n\r\nMẫu sedan hạng sang cỡ nhỏ của Mer', 'Động cơ/hộp số\r\nKiểu động cơ\r\n1.5 I4 Turbo\r\nDung tích (cc)\r\n1.496\r\nCông suất (mã lực)/vòng tua (vòng/phút)\r\n204/5800-6100\r\nMô-men xoắn (Nm)/vòng tua (vòng/phút)\r\n300/1800-4000\r\nHộp số\r\nAT 9 cấp\r\nHệ dẫn động\r\nRWD\r\nLoại nhiên liệu\r\nXăng\r\nCần số điện tử\r\nKích thước/trọng lượng\r\nSố chỗ\r\n5\r\nKích thước dài x rộng x cao (mm)\r\n4751 x 1890 x 1437\r\nChiều dài cơ sở (mm)\r\n2.865\r\nThể tích khoang hành lý (lít)\r\n507\r\nDung tích bình nhiên liệu (lít)\r\n65,8\r\nTrọng lượng bản thân (kg)\r\n1.650\r\nLốp, la-zăng\r\n17 inch', 1, 14, 5, 'sale', 5, 53000),
(59, 'Mercedes GT-Coupe 2021', '015', 120000, 4, '1692979462_1692908609_gtr.png', 'AMG GT là dòng saloon 4 cửa thể thao với động cơ 3 lít tăng áp kép, công suất hơn 400 mã lực. Tương tự G-class, dòng xe này của Mercedes cũng chưa có đối thủ cạnh tranh trực tiếp tại Việt Nam. ', 'Động cơ/hộp số\r\nKiểu động cơ\r\nI6 3.0\r\nDung tích (cc)\r\n2.999\r\nCông suất (mã lực)/vòng tua (vòng/phút)\r\n435hp tại 6100 vòng/phút\r\nMô-men xoắn (Nm)/vòng tua (vòng/phút)\r\n520/1800-5800\r\nHộp số\r\nTự đống 9 cấp AMG SPEEDSHIFT TCT 9G\r\nHệ dẫn động\r\n4 bánh toàn thời gian 4MATIC+\r\nLoại nhiên liệu\r\nXăng\r\nMức tiêu thụ nhiên liệu đường hỗn hợp (lít/100 km)\r\n11,4\r\nKích thước/trọng lượng\r\nSố chỗ\r\n5\r\nKích thước dài x rộng x cao (mm)\r\n5051x1953x1451\r\nChiều dài cơ sở (mm)\r\n2.951\r\nTrọng lượng bản thân (kg)\r\n2.045\r\nTrọng lượng toàn tải (kg)\r\n2.515', 1, 14, 5, 'sale', 4, 114000),
(62, 'Hyundai Kona 2021', '018', 20000, 5, '1692909054_koonan.jpg', 'Mẫu xe cướp ngôi vương từ EcoSport trong phân khúc xe gầm cao cỡ nhỏ, ghi điểm bằng độ trang bị, giá bán phù hợp và một kiểu dáng thể thao. Tuy nhiên, mẫu xe này cũng đã để Seltos lấy đi vị trí số', 'Động cơ/hộp số\r\nKiểu động cơ\r\nI4\r\nDung tích (cc)\r\n1.999\r\nCông suất (mã lực)/vòng tua (vòng/phút)\r\n149/6200\r\nMô-men xoắn (Nm)/vòng tua (vòng/phút)\r\n180/4500\r\nHộp số\r\n6 AT\r\nHệ dẫn động\r\nFWD\r\nLoại nhiên liệu\r\nXăng\r\nMức tiêu thụ nhiên liệu đường hỗn hợp (lít/100 km)\r\n6,57\r\nKích thước/trọng lượng\r\nSố chỗ\r\n5\r\nKích thước dài x rộng x cao (mm)\r\n4165 x 1800 x 1565\r\nChiều dài cơ sở (mm)\r\n2.600\r\nKhoảng sáng gầm (mm)\r\n170\r\nBán kính vòng quay (mm)\r\n5.300\r\nThể tích khoang hành lý (lít)\r\n361\r\nDung tích bình nhiên liệu (lít)\r\n50\r\nTrọng lượng bản thân (kg)\r\n1.310\r\nTrọng lượng toàn tải (kg)\r\n1.830\r\nLốp, la-zăng\r\n215/55R17', 1, 31, 5, 'sale', 4, 19000),
(63, 'Hyundai Stargazer 2022', '019', 30000, 5, '1692909285_hyundai-stargazer-1.jpg', 'Stargazer là chiếc MPV cỡ nhỏ mà Hyundai Thành Công bán ra để cạnh tranh các đối thủ Mitsubishi Xpander, Toyota Veloz, Suzuki Ertiga...', 'Động cơ/hộp số\r\nKiểu động cơ\r\nSmartstream G1.5\r\nDung tích (cc)\r\n1.497\r\nCông suất (mã lực)/vòng tua (vòng/phút)\r\n115/6300\r\nMô-men xoắn (Nm)/vòng tua (vòng/phút)\r\n144/ 4500\r\nHộp số\r\nCVT\r\nHệ dẫn động\r\nFDW\r\nLoại nhiên liệu\r\nXăng\r\nMức tiêu thụ nhiên liệu đường hỗn hợp (lít/100 km)\r\n6,45\r\nKích thước/trọng lượng\r\nSố chỗ\r\n7\r\nKích thước dài x rộng x cao (mm)\r\n4460 x 1780 x 1695\r\nChiều dài cơ sở (mm)\r\n2.780\r\nKhoảng sáng gầm (mm)\r\n185\r\nThể tích khoang hành lý (lít)\r\n200\r\nDung tích bình nhiên liệu (lít)\r\n40\r\nLốp, la-zăng\r\n205/55R16', 1, 31, 5, 'sale', 3, 28500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cauhinhwebsite`
--
ALTER TABLE `cauhinhwebsite`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Indexes for table `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Indexes for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cauhinhwebsite`
--
ALTER TABLE `cauhinhwebsite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
