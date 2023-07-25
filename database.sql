-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 04:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories_name`, `image`) VALUES
(22, 'Túi', 'vi12.jpg'),
(23, 'Balo', 'balo12.jpg'),
(24, 'Giày', 'giay12.jpg'),
(27, 'Phụ kiện', 'tui12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id_color` int(11) NOT NULL,
  `color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id_color`, `color`) VALUES
(1, 'Đỏ'),
(2, 'Vàng');

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `id` int(11) NOT NULL,
  `id_product` int(11) DEFAULT NULL,
  `id_order` int(11) DEFAULT NULL,
  `quanlity` int(11) DEFAULT NULL,
  `size` varchar(20) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_order`
--

INSERT INTO `detail_order` (`id`, `id_product`, `id_order`, `quanlity`, `size`, `color`) VALUES
(67, 8, 7081, 1, '2', '1'),
(68, 6, 4646, 1, '2', '1'),
(69, 6, 8639, 2, 'L', 'green'),
(70, 6, 8639, 1, 'XL', 'black');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `code_cart` varchar(11) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `total` int(11) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `ship_address` varchar(255) DEFAULT NULL,
  `ship_name_user` varchar(255) DEFAULT NULL,
  `ship_phone_user` varchar(255) DEFAULT NULL,
  `pttt` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `id_user`, `code_cart`, `status`, `total`, `time`, `ship_address`, `ship_name_user`, `ship_phone_user`, `pttt`) VALUES
(79, 22, '7081', 3, 299000, '0000-00-00 00:00:00', 'hà nội', 'Trần Hoàng Phi', '09866663', 'COD'),
(80, 24, '4646', 2, 499000, '0000-00-00 00:00:00', 'TDP Vĩnh Thịnh', 'admin', '988888887', 'COD'),
(82, 24, '8639', 2, 1497000, '0000-00-00 00:00:00', 'TDP Vĩnh Thịnh', 'admin', '988888887', 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `id_categories` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` varchar(255) DEFAULT NULL,
  `product_price_sale` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `id_categories`, `product_name`, `product_price`, `product_price_sale`, `description`, `origin`, `image`, `image2`, `image3`, `view`) VALUES
(6, 24, 'TÚI SÁCH DIOR LỚN', '499000', '999000', 'Dior Dior', 'Italy', 'detaildior1.png', 'dior.webp', 'detaildior3.webp', 64),
(8, 23, 'Khăn Louis VT', '299000', '999000', 'Vivienne bandeau ghi lại cảm giác phấn khích khi đi du lịch. Nó được chế tác từ lụa mịn và được trang trí bằng những hình minh họa giàu trí tưởng tượng của nhân vật Vivienne đến thăm Ngôi nhà Louis Vuitton ở Tokyo. Đan xen vào thiết kế vui tươi là rất nhiều biểu tượng Ngôi nhà bao gồm hoa văn Chữ lồng và Hoa chữ lồng.', 'Hoa Kỳ', 'LVkhan1.webp', 'LVkhan.webp', 'LVkhan3.webp', 34),
(15, 22, 'Túi LV Yellow', '799000', '999000', 'Phối màu xanh da trời theo mùa mát mẻ làm tươi mới chiếc áo sơ mi nam tính trường tồn với thời gian này. Được thiết kế theo kiểu dáng hình hộp thoải mái được cắt từ vải twill mềm mại được in phủ ngoài với họa tiết Monogram ngoại cỡ.', 'Hoa Kì', 'tui3.webp', 'tui1.webp', 'tui2.webp', 7);

-- --------------------------------------------------------

--
-- Table structure for table `product_rev`
--

CREATE TABLE `product_rev` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `stars` tinyint(4) DEFAULT NULL,
  `comment` varchar(255) NOT NULL,
  `ngay_bl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(0, 'Khách hàng'),
(1, 'Quản trị viên');

-- --------------------------------------------------------

--
-- Table structure for table `save`
--

CREATE TABLE `save` (
  `id_user` int(11) DEFAULT NULL,
  `id_voucher` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id_size` int(11) NOT NULL,
  `size` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id_size`, `size`) VALUES
(1, 'M'),
(2, 'L');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_momo`
--

CREATE TABLE `tbl_momo` (
  `id_momo` int(11) NOT NULL,
  `partner_code` varchar(50) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `order_info` varchar(50) NOT NULL,
  `order_type` varchar(50) NOT NULL,
  `trans_id` varchar(50) NOT NULL,
  `pay_type` varchar(50) NOT NULL,
  `code_cart` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_momo`
--

INSERT INTO `tbl_momo` (`id_momo`, `partner_code`, `order_id`, `amount`, `order_info`, `order_type`, `trans_id`, `pay_type`, `code_cart`) VALUES
(3, 'MOMOBKUN20180529', '1644123235', '250000', 'Thanh toán qua ATM', 'momo_wallet', '2642535948', 'napas', '9554'),
(4, 'MOMOBKUN20180529', '1644126570', '250000', 'Thanh toán qua ATM', 'momo_wallet', '2642536202', 'napas', '3872'),
(5, 'MOMOBKUN20180529', '1645004827', '350000', 'Thanh toán qua ATM', 'momo_wallet', '2644029861', 'napas', '1161'),
(6, 'MOMOBKUN20180529', '1669497466', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669497473355', '', '5277'),
(7, 'MOMOBKUN20180529', '1669531683', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531691845', '', '6157'),
(8, 'MOMOBKUN20180529', '1669531929', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531935643', '', '2996'),
(9, 'MOMOBKUN20180529', '1669531929', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531935643', '', '6112'),
(10, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '9142'),
(11, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '8664'),
(12, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '9386'),
(13, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '1025'),
(14, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '8576'),
(15, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '2705'),
(16, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '4278'),
(17, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '3057'),
(18, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '2496'),
(19, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '3451'),
(20, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '6556'),
(21, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '8153'),
(22, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '3760'),
(23, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '8016'),
(24, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '8432'),
(25, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '1'),
(26, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '7046'),
(27, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '4386'),
(28, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '8756'),
(29, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '8358'),
(30, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '4947'),
(31, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '4458'),
(32, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '9355'),
(33, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '7001'),
(34, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '2259'),
(35, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '5520'),
(36, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '5394'),
(37, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '5955'),
(38, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '6284'),
(39, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '9502'),
(40, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '3320'),
(41, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '4871'),
(42, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '1155'),
(43, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '5977'),
(44, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '166'),
(45, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '1814'),
(46, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '8802'),
(47, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '4236'),
(48, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '2964'),
(49, 'MOMOBKUN20180529', '1669531976', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669531982960', '', '8865'),
(50, 'MOMOBKUN20180529', '1669542131', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669542139102', '', '6631'),
(51, 'MOMOBKUN20180529', '1669542131', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669542139102', '', '5266'),
(52, 'MOMOBKUN20180529', '1669542131', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669542139102', '', '7177'),
(53, 'MOMOBKUN20180529', '1669577809', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669577816588', '', '9953'),
(54, 'MOMOBKUN20180529', '1669577809', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669577816588', '', '8859'),
(55, 'MOMOBKUN20180529', '1669577809', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669577816588', '', '4677'),
(56, 'MOMOBKUN20180529', '1669581957', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669581962458', '', '926'),
(57, 'MOMOBKUN20180529', '1669582480', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669582485453', '', '8139'),
(58, 'MOMOBKUN20180529', '1669582480', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669582485453', '', '61'),
(59, 'MOMOBKUN20180529', '1669582480', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669582485453', '', '7363'),
(60, 'MOMOBKUN20180529', '1669582480', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669582485453', '', '2028'),
(61, 'MOMOBKUN20180529', '1669582480', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669582485453', '', '2508'),
(62, 'MOMOBKUN20180529', '1669582480', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669582485453', '', '9333'),
(63, 'MOMOBKUN20180529', '1669582480', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669582485453', '', '4608'),
(64, 'MOMOBKUN20180529', '1669582480', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669582485453', '', '2450'),
(65, 'MOMOBKUN20180529', '1669582480', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669582485453', '', '2661'),
(66, 'MOMOBKUN20180529', '1669582480', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669582485453', '', '8927'),
(67, 'MOMOBKUN20180529', '1669583106', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669583110436', '', '8511'),
(68, 'MOMOBKUN20180529', '1669583106', '100000', 'Thanh toán qua ATM', 'momo_wallet', '1669583110436', '', '3092'),
(69, 'MOMOBKUN20180529', '1669588064', '12000', 'Thanh toán qua ATM', 'momo_wallet', '1669588074513', '', '3026'),
(70, 'MOMOBKUN20180529', '1669599048', '12000', 'Thanh toán qua ATM', 'momo_wallet', '2802366092', 'qr', '3619'),
(71, 'MOMOBKUN20180529', '1669599948', '12000', 'Thanh toán qua ATM', 'momo_wallet', '2802366173', 'qr', '4979'),
(72, 'MOMOBKUN20180529', '1669600849', '12000', 'Thanh toán qua momo', 'momo_wallet', '2802366433', 'qr', '8944'),
(73, 'MOMOBKUN20180529', '1669735327', '3000', 'Thanh toán qua momo', 'momo_wallet', '2804505063', 'qr', '2344'),
(74, 'MOMOBKUN20180529', '1669830018', '6000', 'Thanh toán qua momo', 'momo_wallet', '2805460629', 'qr', '4150'),
(75, 'MOMOBKUN20180529', '1669976127', '12000', 'Thanh toán qua momo', 'momo_wallet', '2807102145', 'qr', '6463'),
(76, 'MOMOBKUN20180529', '1670075007', '38000', 'Thanh toán qua momo', 'momo_wallet', '2807612213', 'qr', '5390'),
(77, 'MOMOBKUN20180529', '1670075007', '38000', 'Thanh toán qua momo', 'momo_wallet', '2807612213', 'qr', '1433'),
(78, 'MOMOBKUN20180529', '1670075612', '39000', 'Thanh toán qua momo', 'momo_wallet', '2807612329', 'qr', '5020'),
(79, 'MOMOBKUN20180529', '1670075723', '11000', 'Thanh toán qua momo', 'momo_wallet', '2807612358', 'qr', '4097'),
(80, 'MOMOBKUN20180529', '1670075808', '11000', 'Thanh toán qua momo', 'momo_wallet', '1670075813505', '', '203'),
(81, 'MOMOBKUN20180529', '1670075911', '11000', 'Thanh toán qua momo', 'momo_wallet', '1670075916023', '', '3746'),
(82, 'MOMOBKUN20180529', '1670077142', '10000', 'Thanh toán qua momo', 'momo_wallet', '1670077154383', '', '7454'),
(83, 'MOMOBKUN20180529', '1670077736', '17000', 'Thanh toán qua momo', 'momo_wallet', '1670077740703', '', '3356'),
(84, 'MOMOBKUN20180529', '1670077736', '17000', 'Thanh toán qua momo', 'momo_wallet', '1670077740703', '', '7429'),
(85, 'MOMOBKUN20180529', '1670077736', '17000', 'Thanh toán qua momo', 'momo_wallet', '1670077740703', '', '873'),
(86, 'MOMOBKUN20180529', '1670077736', '17000', 'Thanh toán qua momo', 'momo_wallet', '1670077740703', '', '3272'),
(87, 'MOMOBKUN20180529', '1670086310', '13000', 'Thanh toán qua momo', 'momo_wallet', '1670086314847', '', '6230'),
(88, 'MOMOBKUN20180529', '1670086310', '13000', 'Thanh toán qua momo', 'momo_wallet', '1670086314847', '', '5142'),
(89, 'MOMOBKUN20180529', '1670086339', '13000', 'Thanh toán qua momo', 'momo_wallet', '1670086343706', '', '7407'),
(90, 'MOMOBKUN20180529', '1670086424', '14000', 'Thanh toán qua momo', 'momo_wallet', '1670086432600', '', '2337'),
(91, 'MOMOBKUN20180529', '1670086588', '15000', 'Thanh toán qua momo', 'momo_wallet', '1670086593923', '', '2421'),
(92, 'MOMOBKUN20180529', '1670086679', '16000', 'Thanh toán qua momo', 'momo_wallet', '2807614794', 'qr', '153'),
(93, 'MOMOBKUN20180529', '1670087041', '16000', 'Thanh toán qua momo', 'momo_wallet', '1670087045871', '', '2912'),
(94, 'MOMOBKUN20180529', '1670097115', '11000', 'Thanh toán qua momo', 'momo_wallet', '1670097129120', '', '1714'),
(95, 'MOMOBKUN20180529', '1670097115', '11000', 'Thanh toán qua momo', 'momo_wallet', '1670097129120', '', '413'),
(96, 'MOMOBKUN20180529', '1670097185', '11000', 'Thanh toán qua momo', 'momo_wallet', '2807617050', 'qr', '5201'),
(97, 'MOMOBKUN20180529', '1670097185', '11000', 'Thanh toán qua momo', 'momo_wallet', '2807617050', 'qr', '9916'),
(98, 'MOMOBKUN20180529', '1670097335', '12000', 'Thanh toán qua momo', 'momo_wallet', '1670097340451', '', '6218'),
(99, 'MOMOBKUN20180529', '1670097335', '12000', 'Thanh toán qua momo', 'momo_wallet', '1670097340451', '', '7651'),
(100, 'MOMOBKUN20180529', '1670097384', '10000', 'Thanh toán qua momo', 'momo_wallet', '1670097389177', '', '209'),
(101, 'MOMOBKUN20180529', '1670114983', '13000', 'Thanh toán qua momo', 'momo_wallet', '2807640799', 'qr', '367'),
(102, 'MOMOBKUN20180529', '1670115140', '17000', 'Thanh toán qua momo', 'momo_wallet', '1670115146296', '', '9162'),
(103, 'MOMOBKUN20180529', '1670118519', '18000', 'Thanh toán qua momo', 'momo_wallet', '1670118542977', '', '501'),
(104, 'MOMOBKUN20180529', '1670146603', '13000', 'Thanh toán qua momo', 'momo_wallet', '1670146611317', '', '9552'),
(105, 'MOMOBKUN20180529', '1670163038', '103000', 'Thanh toán qua momo', 'momo_wallet', '1670163348621', '', '9266'),
(106, 'MOMOBKUN20180529', '1670179764', '200000', 'Thanh toán qua momo', 'momo_wallet', '2807744884', 'qr', '6982'),
(107, 'MOMOBKUN20180529', '1670190155', '100000', 'Thanh toán qua momo', 'momo_wallet', '2807774615', 'qr', '3486'),
(108, 'MOMOBKUN20180529', '1670191021', '300000', 'Thanh toán qua momo', 'momo_wallet', '1670191030483', '', '2263'),
(109, 'MOMOBKUN20180529', '1670191021', '300000', 'Thanh toán qua momo', 'momo_wallet', '1670191030483', '', '4691'),
(110, 'MOMOBKUN20180529', '1670194245', '400000', 'Thanh toán qua momo', 'momo_wallet', '2807779153', 'qr', '2402'),
(111, 'MOMOBKUN20180529', '1670206108', '499000', 'Thanh toán qua momo', 'momo_wallet', '1670206199657', '', '3914'),
(112, 'MOMOBKUN20180529', '1670376478', '799000', 'Thanh toán qua momo', 'momo_wallet', '2808967131', 'qr', '7478'),
(113, 'MOMOBKUN20180529', '1670376478', '799000', 'Thanh toán qua momo', 'momo_wallet', '2808967131', 'qr', '2963'),
(114, 'MOMOBKUN20180529', '1670376478', '799000', 'Thanh toán qua momo', 'momo_wallet', '2808967131', 'qr', '7349');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `password` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `full_name`, `email`, `phone`, `address`, `role`, `password`) VALUES
(22, 'Phi 2', 'Trần Hoàng Phi', 'phithph22381@fpt.edu.vn', '09866663', 'hà nội', 0, 'vip'),
(24, 'admin', 'admin', 'admin@gmail.com', '988888887', 'TDP Vĩnh Thịnh', 1, 'admin'),
(25, 'user', 'user', 'user@gmail.com', '8983437', 'ha noi', 0, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id` int(11) NOT NULL,
  `quanlity` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id_color`);

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_rev`
--
ALTER TABLE `product_rev`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id_size`);

--
-- Indexes for table `tbl_momo`
--
ALTER TABLE `tbl_momo`
  ADD PRIMARY KEY (`id_momo`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id_color` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detail_order`
--
ALTER TABLE `detail_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product_rev`
--
ALTER TABLE `product_rev`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_momo`
--
ALTER TABLE `tbl_momo`
  MODIFY `id_momo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
