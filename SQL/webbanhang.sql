-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2023 at 02:58 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`) VALUES
(22, 7, '4780', 1),
(23, 7, '6730', 1),
(24, 7, '2165', 1),
(25, 7, '2590', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart_chitiet`
--

CREATE TABLE `tbl_cart_chitiet` (
  `id_cart_chitiet` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cart_chitiet`
--

INSERT INTO `tbl_cart_chitiet` (`id_cart_chitiet`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(30, '4780', 57, 3),
(31, '4780', 65, 1),
(32, '6730', 46, 1),
(33, '2165', 41, 1),
(34, '2590', 65, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(6, 'NQT1', 'nqt1@gmail.com', 'Linh Tay, Thu Duc', 'e10adc3949ba59abbe56e057f20f883e', '090809354'),
(7, 'Nguyễn Quốc Tú', 'quoctupdn@gmail.com', 'HUTECH', 'e10adc3949ba59abbe56e057f20f883e', '0998898872');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(9, 'APPLE', 6),
(22, 'XIAOMI', 2),
(32, 'SAMSUNG', 1),
(33, 'OPPO', 4),
(35, 'REALME', 5),
(37, 'NOKIA', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(150) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` tinytext NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(39, 'IP 12', '02', '4444444', 33, 'ip2.webp', 'dddfffffff', 'sssssssss', 1, 9),
(41, 'IP 14', '04', '267676', 5, 'ip5.webp', 'qưeq', 'qưe', 1, 9),
(46, 'IP 13 PRO', '07', '222222', 3, 'ip4.webp', 'vvvvvv', 'sssss', 1, 9),
(48, 'IP 13', '09', '24323', 2, 'ip3.webp', 'qqqqqq', 'vvvvvvv', 1, 9),
(50, 'Xiaomi4', '01', '23000', 2, 'xmi4.webp', 'aaa', 'ddddd', 1, 22),
(51, 'Xiaomi1', '02', '22222', 3, 'xmi3.webp', '3333333', 'vvvvvvv', 1, 22),
(52, 'Xiaomi 3', '03', '267676', 3, 'xmi1.webp', 'dddddd', 'gggg', 1, 22),
(53, 'Xiaomi 2', '04', '4444444', 2, 'xmi2.webp', 'cccccc', 'aaaaaa', 1, 22),
(54, 'Nokia 1', 'nkia1', '1500000', 2, 'nokia1.webp', 'new', 'mew', 1, 37),
(55, 'Nokia 2', 'nokia2', '750000', 3, 'nokia2.webp', 'new', 'new', 1, 37),
(56, 'Nokia 3', 'nokia3', '950000', 5, 'nokia3.webp', 'news', 'news', 1, 37),
(57, 'Nokia 4', 'nokia4', '1040000', 5, 'nokia4.webp', 'news', 'news', 1, 37),
(58, 'Samsung 1', 'ss1', '1900000', 3, 'ss1.webp', 'news', 'news', 1, 32),
(59, 'Samsung 2', 'ss2', '3099289', 5, 'ss2.webp', 'news', 'news', 1, 32),
(60, 'Samsung 3', 'ss3', '2000000', 6, 'ss3.webp', 'news', 'news', 1, 32),
(61, 'Samsung 4', 'ss4', '2093898', 10, 'ss4.webp', 'z-flip', 'z-flip', 1, 32),
(62, 'Realme 1', 'rm1', '2000000', 10, 'rme1.webp', 'news', 'news', 1, 35),
(63, 'OPPO 1', 'op1', '1092898', 3, 'Oppo1.webp', 'nes', 'pro', 1, 33),
(64, 'OPPO 2', 'op2', '2998009', 10, 'opp2.webp', 'mklkl', 'san pham moi', 1, 33),
(65, 'OPPO 3', 'op3', '1092898', 2, 'opp3.webp', 'San pham noi bat', 'Cau hinh tot', 1, 33),
(66, 'OPPO 4', 'op4', '1920000', 2, 'opp4.webp', 'News', 'News', 1, 33);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `tbl_cart_chitiet`
--
ALTER TABLE `tbl_cart_chitiet`
  ADD PRIMARY KEY (`id_cart_chitiet`);

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
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_cart_chitiet`
--
ALTER TABLE `tbl_cart_chitiet`
  MODIFY `id_cart_chitiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
