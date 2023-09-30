-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2023 at 04:32 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dl`
--

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `MATL` varchar(20) NOT NULL,
  `TENTL` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`MATL`, `TENTL`) VALUES
('GTN', 'Giảm trong ngày'),
('SaLe', 'SaLe');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `TENDANGNHAP` varchar(30) NOT NULL,
  `MATKHAU` varchar(255) NOT NULL,
  `HOTEN` varchar(255) NOT NULL,
  `NGAY` datetime NOT NULL,
  `DIACHI` varchar(255) NOT NULL,
  `SDT` int(10) NOT NULL DEFAULT 0,
  `EMAIL` varchar(255) NOT NULL,
  `PHANLOAI` varchar(20) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`TENDANGNHAP`, `MATKHAU`, `HOTEN`, `NGAY`, `DIACHI`, `SDT`, `EMAIL`, `PHANLOAI`) VALUES
('admin', '0123456789', 'Hoàng Vũ Minh Trường', '0000-00-00 00:00:00', '47 Yên Đỗ , Phường 1 ,Quận Bình Thạnh ,TP.HCM', 928883292, ' AnhTruong@Bershka.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `nhathietke`
--

CREATE TABLE `nhathietke` (
  `MANTK` varchar(20) NOT NULL,
  `TENNTK` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nhathietke`
--

INSERT INTO `nhathietke` (`MANTK`, `TENNTK`) VALUES
('XB01', 'Nhà Thiết kế trẻ'),
('XB02', 'Nhà Flower'),
('XB03', 'Nhà sun'),
('XB04', 'Nhà PPT');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MASP` varchar(255) NOT NULL,
  `TENSANPHAM` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `GIA` float NOT NULL,
  `MOTA` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ANH` varchar(255) NOT NULL,
  `MADANHMUC` varchar(255) NOT NULL,
  `SOLUONGGIOHANG` int(20) NOT NULL DEFAULT 0,
  `MATL` varchar(20) NOT NULL,
  `MANTK` varchar(20) NOT NULL,
  `MATG` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MASP`, `TENSANPHAM`, `GIA`, `MOTA`, `ANH`, `MADANHMUC`, `SOLUONGGIOHANG`, `MATL`, `MANTK`, `MATG`) VALUES
('03D', 'ÁO THUN NAM XANH DƯƠNG', 250000, 'Chất liệu cotton có khả năng thấm hút mồ hôi tốt, giúp người mặc cảm thấy thoải mái và dễ chịu khi mặc, đặc biệt là vào mùa hè', 'img/product/aothunam/1.jpg', '2', 32, 'SaLe', 'XB02', 'TG02'),
('0A1', 'ÁO SƠ MI CARO', 150000, ' Áo làm sợi catton mát và mùa hè phù hợp cho những chuyến đi xa', 'img/product/aosomi/ao-so-mi-2022-nam.jpg', '3', 9, 'SaLe', 'XB01', 'TG01'),
('0EW3', 'ÁO THUN NAM CỔ NGẮN', 400000, 'Chất liệu cotton có khả năng thấm hút mồ hôi tốt, giúp người mặc cảm thấy thoải mái và dễ chịu khi mặc, đặc biệt là vào mùa hè', 'img/product/aothunam/6.jpg', '2', 18, 'SaLe', 'XB03', 'TG03'),
('0F01', 'ÁO SƠ MI NAM SỌC CARO', 350000, 'Áo sơ mi tay dài nam họa tiết: Kiểu áo sơ mi này mang phong cách trẻ trung, cá tính., phù hợp với mọi dáng người.', 'img/product/aosomi/3957dcb2ad6ba7dfc5634aa44f22711a.jpg', '3', 15, 'SaLe', 'XB04', 'TG02'),
('0F09', 'ÁO SƠ MI TRẮNG NAM ', 150000, 'Áo sơ mi tay dài nam cổ bẻ: Đây là kiểu áo sơ mi tay dài nam phổ biến nhất, phù hợp với mọi dáng người.', 'img/product/aosomi/Áo-sơ-mi-nam-trắng-dài-tay.jpg', '3', 15, 'SaLe', 'XB02', 'TG02'),
('0F0J', 'ÁO SƠ MI NÂU NHẠT ', 750000, 'Áo sơ mi tay dài nam cổ vuông: Kiểu áo sơ mi này mang phong cách lịch lãm, nam tính.', 'img/product/aosomi/OIP.jpg', '3', 15, 'SaLe', 'XB03', 'TG02'),
('0F0P', 'ÁO SƠ MI CARO XANH ', 150000, 'Áo sơ mi tay dài nam cổ vuông: Kiểu áo sơ mi này mang phong cách lịch lãm, nam tính.', 'img/product/aosomi/R.jpg', '3', 15, 'SaLe', 'XB03', 'TG02'),
('0FLP', 'QUẦN RIN XANH ', 150000, 'Quần rin ống đứng: Đây là kiểu quần phổ biến nhất, có thiết kế ống đứng, suông thẳng từ trên xuống', 'img/product/quanrin/20170822_892a9b3afced86c3b2e0088dc6e70d11_1503384605.jpg', '3', 18, 'SaLe', 'XB03', 'TG02'),
('0P7P', 'QUẦN RIN ĐEN', 130000, 'Quần rin ống suông: Đây là kiểu quần có thiết kế ống suông, ôm nhẹ người, phù hợp với những người thích phong cách thanh lịch', 'img/product/quanrin/quan-jean-nam-rach-goi-111-scaled.jpg', '3', 18, 'GTN', 'XB01', 'TG04'),
('0PEP', 'QUẦN RIN THUN', 130000, 'Quần rin jogger: Đây là kiểu quần có thiết kế ống suông, có chun ở gấu quần, phù hợp với những người thích phong cách năng động.', 'img/product/quanrin/quan-jean-nam-rach-goi-111-scaled.jpg', '3', 18, 'SaLe', 'XB01', 'TG04'),
('0PLP', 'QUẦN RIN XANH NHẠT ', 230000, 'Quần rin ống suông: Đây là kiểu quần có thiết kế ống suông, ôm nhẹ người, phù hợp với những người thích phong cách thanh lịch.', 'img/product/quanrin/cef0d9753757af980c45897edfc25693.jpg', '3', 18, 'SaLe', 'XB03', 'TG04'),
('0T24', 'ÁO THUN NAM XANH NGỌC BÍCH', 150000, 'Chất liệu cotton có khả năng thấm hút mồ hôi tốt, giúp người mặc cảm thấy thoải mái và dễ chịu khi mặc, đặc biệt là vào mùa hè', 'img/product/aothunam/2.jpg', '2', 15, 'SaLe', 'XB03', 'TG03'),
('0T2P', 'QUẦN TÂY XÁM', 430000, 'Quần tây là một món đồ thời trang cần thiết cho cả nam và nữ. Quần tây có thể được mặc trong nhiều dịp khác nhau, từ trang trọng đến thường ngày', 'img/product/quantay/quan-tay-xam_254b7338e9d045c3bc754191fcc1d655_grande.jpg', '3', 18, 'SALE', 'XB01', 'TG04'),
('0T7P', 'QUẦN TÂY ĐEN', 230000, 'Quần tây là một món đồ thời trang cần thiết cho cả nam và nữ. Quần tây có thể được mặc trong nhiều dịp khác nhau, từ trang trọng đến thường ngày', 'img/product/quantay/4-loai-quan-tay-nam-dep-nen-co-cho-ban-nam-nam-2020-d04a1ce0.jpg', '3', 18, 'GTN', 'XB01', 'TG04'),
('0TEP', 'QUẦN TÂY ĐEN', 630000, 'Quần tây là một món đồ thời trang cần thiết cho cả nam và nữ. Quần tây có thể được mặc trong nhiều dịp khác nhau, từ trang trọng đến thường ngày', 'img/product/quantay/z2555880995105_63b77fd5639aedb8f978beadb39fa729-1191302855-d637596969225572731.jpg', '3', 18, 'SALE', 'XB01', 'TG04'),
('0tLP', 'QUẦN RIN DEN ', 750000, 'Quần rin jogger: Đây là kiểu quần có thiết kế ống suông, có chun ở gấu quần, phù hợp với những người thích phong cách năng động', 'img/product/quanrin/20170822_1752af518973b68cb9ba63a33a0c72e5_1503384499.jpg', '3', 18, 'SaLe', 'XB03', 'TG04'),
('0TY4', 'ÁO SƠ MI NAM SỌC', 250000, 'Áo sơ mi tay dài nam cổ bẻ: Đây là kiểu áo sơ mi tay dài nam phổ biến nhất, phù hợp với mọi dáng người.', 'img/product/aosomi/14.jpg', '3', 15, 'SaLe', 'XB04', 'TG04');

-- --------------------------------------------------------

--
-- Table structure for table `tacgia`
--

CREATE TABLE `tacgia` (
  `MATG` varchar(20) NOT NULL,
  `TENTG` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tacgia`
--

INSERT INTO `tacgia` (`MATG`, `TENTG`) VALUES
('TG01', ' Axel Vervoordt'),
('TG02', 'Hector Malot'),
('TG03', 'Antoine de Saint'),
('TG04', 'Kelly Wearstler'),
('TG05', 'Dorothy Draper'),
('TG06', 'Albert Hadley');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`MATL`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`TENDANGNHAP`,`SDT`);

--
-- Indexes for table `nhathietke`
--
ALTER TABLE `nhathietke`
  ADD PRIMARY KEY (`MANTK`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MASP`);

--
-- Indexes for table `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`MATG`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
