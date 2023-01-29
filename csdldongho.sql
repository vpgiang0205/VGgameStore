-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 07:20 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csdldongho`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm`
--

CREATE TABLE `adm` (
  `ma_adm` int(11) NOT NULL,
  `ten_dn` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL,
  `mat_khau` varchar(30) NOT NULL,
  `ho` varchar(30) NOT NULL,
  `ten` varchar(30) NOT NULL,
  `gioi_tinh` varchar(30) NOT NULL DEFAULT '0',
  `email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adm`
--

INSERT INTO `adm` (`ma_adm`, `ten_dn`, `level`, `mat_khau`, `ho`, `ten`, `gioi_tinh`, `email`) VALUES
(11, 'admin', 'admin', 'admin', 'Võ', 'Giang', 'Nam', 'admin@gmail.com'),
(17, 'user', 'user', 'user', 'Phạm', 'Khang', 'Không biết', 'ahihi@gmail.com'),
(21, '123', 'user', '123', '123', '123', 'Nữ', '123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ct_dondathang`
--

CREATE TABLE `ct_dondathang` (
  `id` int(11) NOT NULL,
  `ma_dh` int(10) NOT NULL,
  `ma_sp` varchar(10) NOT NULL,
  `gia_ban` float NOT NULL,
  `sl_dat` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ct_dondathang`
--

INSERT INTO `ct_dondathang` (`id`, `ma_dh`, `ma_sp`, `gia_ban`, `sl_dat`) VALUES
(1, 43, '48', 123123000, 2),
(2, 44, '47', 999999, 1),
(3, 45, '48', 123123000, 2),
(4, 46, '64', 12, 6),
(5, 47, '75', 500000, 1),
(6, 47, '74', 14000000, 1),
(7, 48, '75', 1000000, 2),
(8, 49, '75', 500000, 1),
(9, 50, '75', 1000000, 2),
(10, 50, '73', 70000000, 2),
(11, 51, '75', 1500000, 3),
(12, 51, '73', 105000000, 3),
(13, 52, '74', 14000000, 1),
(14, 52, '73', 70000000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `dondathang`
--

CREATE TABLE `dondathang` (
  `ma_dh` int(10) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ngay_dh` date NOT NULL DEFAULT current_timestamp(),
  `ngay_gh` date NOT NULL,
  `noi_giao` varchar(300) NOT NULL,
  `hien_trang` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dondathang`
--

INSERT INTO `dondathang` (`ma_dh`, `ma_kh`, `ngay_dh`, `ngay_gh`, `noi_giao`, `hien_trang`) VALUES
(43, 1, '2021-12-08', '2021-12-10', ' Lấp Vò', 'Chưa giao'),
(44, 1, '2021-12-08', '2021-12-10', ' Cần Thơ', 'Chưa giao'),
(45, 3, '2021-12-08', '2021-12-10', '1 ', 'Đã giao'),
(46, 57, '0000-00-00', '0000-00-00', 'Sóc Trăng', 'Đã giao'),
(47, 1, '2021-12-20', '0000-00-00', 'Lấp Vò', 'chưa giao'),
(48, 58, '2021-12-21', '0000-00-00', '1234', 'chưa giao'),
(49, 59, '2021-12-22', '0000-00-00', 'DongThap', 'chưa giao'),
(50, 58, '2021-12-22', '0000-00-00', '1234', 'chưa giao'),
(51, 61, '2021-12-22', '0000-00-00', 'CanTho', 'chưa giao'),
(52, 63, '2021-12-22', '2021-12-22', 'CanTho', 'Đã giao');

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` int(11) NOT NULL,
  `ho_kh` varchar(30) NOT NULL,
  `ten_kh` varchar(30) NOT NULL,
  `sdt` int(11) NOT NULL,
  `dia_chi` varchar(300) NOT NULL,
  `gioi_tinh` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ten_dn` varchar(15) NOT NULL,
  `mat_khau` varchar(15) NOT NULL,
  `ghichu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `ho_kh`, `ten_kh`, `sdt`, `dia_chi`, `gioi_tinh`, `email`, `ten_dn`, `mat_khau`, `ghichu`) VALUES
(1, 'Triệu', 'Vĩ', 113, 'Lấp Vò', 0, 'trieudoanphonggiang@gmail.com', 'vitrieu113', '123', '2021-12-22 08:33:03'),
(2, 'Trần', 'Phát', 12312321, 'Cần Thơ', 0, '@gmail.com', 'ahihi2', 'ahihi2', '2021-12-22 08:33:24'),
(57, 'Phạm', 'Khang', 113, 'Sóc Trăng', 0, '@gmail.com', '123', '123', '2021-12-22 08:30:43'),
(58, '1234', '1234', 1234, '1234', 1, '1234@gmail.com', '1234', '1234', '2021-12-21 05:40:12'),
(59, 'Vo', ' Giang', 834718218, 'DongThap', 0, ' 1@gmail.com', '0', '0', '2021-12-22 13:35:00'),
(60, 'guest', 'guest', 182191231, 'LapVo', 0, 'guest@gmail.com', '1234', '1234', '2021-12-22 13:35:45'),
(63, 'test2', 'test2', 123214821, 'CanTho', 0, 'test1@gmail.com', 'test1', '123', '2021-12-22 14:21:41');

-- --------------------------------------------------------

--
-- Table structure for table `lien_he`
--

CREATE TABLE `lien_he` (
  `ma_lh` int(11) NOT NULL,
  `ten_nguoi_lh` varchar(40) NOT NULL,
  `sdt_nguoi_lh` varchar(12) NOT NULL,
  `email_nguoi_lh` varchar(50) NOT NULL,
  `gioi_nguoi_lh` int(11) NOT NULL,
  `diachi_nguoi_lh` varchar(200) NOT NULL,
  `noi_dung` varchar(1000) NOT NULL,
  `ngay_lh` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lien_he`
--

INSERT INTO `lien_he` (`ma_lh`, `ten_nguoi_lh`, `sdt_nguoi_lh`, `email_nguoi_lh`, `gioi_nguoi_lh`, `diachi_nguoi_lh`, `noi_dung`, `ngay_lh`) VALUES
(16, 'Võ Phong Giang', '0834718218', 'vophonggiang0205@gmail.com', 2, 'CanTho', 'deptrai vailoz', '2021-05-28 13:22:15');

-- --------------------------------------------------------

--
-- Table structure for table `loai_sanpham`
--

CREATE TABLE `loai_sanpham` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loai_sanpham`
--

INSERT INTO `loai_sanpham` (`ma_loai`, `ten_loai`) VALUES
(47, 'Máy chơi game SONY PS4 PRO'),
(46, 'Máy chơi game SONY PS5'),
(48, 'Game'),
(49, 'Tay Cầm Chơi Game Xbox'),
(50, 'VipPro');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `ma_sp` int(11) NOT NULL,
  `ten_loai` varchar(30) NOT NULL,
  `ten_sp` varchar(30) NOT NULL,
  `gia` float NOT NULL,
  `hinh_anh` varchar(100) NOT NULL,
  `soluong` int(11) NOT NULL,
  `ngay_d` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `trang_thai` int(11) NOT NULL,
  `nha_cung_cap` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`ma_sp`, `ten_loai`, `ten_sp`, `gia`, `hinh_anh`, `soluong`, `ngay_d`, `trang_thai`, `nha_cung_cap`) VALUES
(75, 'Game', 'ARK: Survival Evolved', 500000, 'ARK.jpg', 6, '2021-12-22 13:43:05', 0, 'Sony'),
(74, 'Máy chơi game SONY PS4 PRO', 'Máy chơi game PS4 ', 14000000, 'PS4-Pro-.jpg', 121, '2021-12-22 14:19:36', 0, 'Sony'),
(73, 'Tay Cầm Chơi Game Xbox', 'Máy chơi game Xbox series X', 35000000, 'white-xbox-one-x-2.jpg', 215, '2021-12-22 14:19:36', 0, 'Nitendo'),
(72, 'Máy chơi game SONY PS4 PRO', 'Máy chơi game ps5', 15000000, 'ps5adm.png', 122, '2021-12-20 08:19:35', 0, 'Sony');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`ma_adm`),
  ADD UNIQUE KEY `ten_dn` (`ten_dn`);

--
-- Indexes for table `ct_dondathang`
--
ALTER TABLE `ct_dondathang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`ma_dh`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Indexes for table `lien_he`
--
ALTER TABLE `lien_he`
  ADD PRIMARY KEY (`ma_lh`);

--
-- Indexes for table `loai_sanpham`
--
ALTER TABLE `loai_sanpham`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ma_sp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `ma_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ct_dondathang`
--
ALTER TABLE `ct_dondathang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `dondathang`
--
ALTER TABLE `dondathang`
  MODIFY `ma_dh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `lien_he`
--
ALTER TABLE `lien_he`
  MODIFY `ma_lh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `loai_sanpham`
--
ALTER TABLE `loai_sanpham`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `ma_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
