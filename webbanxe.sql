-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2024 at 05:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webthucung`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `ID` int(11) NOT NULL,
  `MaDH` varchar(10) NOT NULL,
  `IMEI` varchar(15) DEFAULT NULL,
  `TenDongDT` varchar(50) NOT NULL,
  `MauSac` varchar(15) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` float NOT NULL,
  `ThanhTien` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Triggers `chitietdonhang`
--
DELIMITER $$
CREATE TRIGGER `capnhatthtien` BEFORE INSERT ON `chitietdonhang` FOR EACH ROW set NEW.ThanhTien=NEW.SoLuong*NEW.DonGia
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `capnhatthtien2` BEFORE UPDATE ON `chitietdonhang` FOR EACH ROW set NEW.ThanhTien=NEW.SoLuong*NEW.DonGia
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `capnhattttien` AFTER INSERT ON `chitietdonhang` FOR EACH ROW update donhang set tongthanhtien = tongthanhtien+NEW.ThanhTien where MaDH = NEW.MaDH
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `capnhattttien2` AFTER UPDATE ON `chitietdonhang` FOR EACH ROW update donhang set tongthanhtien = tongthanhtien-OLD.ThanhTien+NEW.ThanhTien where MaDH = NEW.MaDH
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `capnhattttien3` AFTER DELETE ON `chitietdonhang` FOR EACH ROW update donhang set tongthanhtien = tongthanhtien-OLD.ThanhTien where MaDH = OLD.MaDH
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `dienthoai`
--

CREATE TABLE `dienthoai` (
  `IMEI` varchar(15) NOT NULL,
  `MaDongDT` varchar(10) NOT NULL,
  `MauSac` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `dienthoai`
--

INSERT INTO `dienthoai` (`IMEI`, `MaDongDT`, `MauSac`) VALUES
('357262443212544', 'SA03', 'Đen');

-- --------------------------------------------------------

--
-- Table structure for table `dongdienthoai`
--

CREATE TABLE `dongdienthoai` (
  `MaDongDT` varchar(10) NOT NULL,
  `MaLoai` varchar(10) NOT NULL,
  `MaHangSX` varchar(10) NOT NULL,
  `MaNCC` varchar(10) NOT NULL,
  `TenDongDT` varchar(50) NOT NULL,
  `Hinh` varchar(255) NOT NULL,
  `DonGia` float NOT NULL,
  `GiaKM` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `dongdienthoai`
--

INSERT INTO `dongdienthoai` (`MaDongDT`, `MaLoai`, `MaHangSX`, `MaNCC`, `TenDongDT`, `Hinh`, `DonGia`, `GiaKM`) VALUES
('SA03', 'TM', 'SAM', 'NCC01', 'Giống chó AKITA INU', 'samnote8.png', 22490000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `MaDH` varchar(10) NOT NULL,
  `MaNV` varchar(10) DEFAULT NULL,
  `MaKH` varchar(32) NOT NULL,
  `TenKH` varchar(50) NOT NULL,
  `SDT` varchar(11) NOT NULL,
  `NgayLapDH` date NOT NULL,
  `NgayHenNhan` date DEFAULT NULL,
  `TongThanhTien` float NOT NULL DEFAULT 0,
  `TrangThai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`MaDH`, `MaNV`, `MaKH`, `TenKH`, `SDT`, `NgayLapDH`, `NgayHenNhan`, `TongThanhTien`, `TrangThai`) VALUES
('DH01', 'NV03', 'KH02', 'Nguyễn Văn Dũng', '01237624089', '2017-10-01', '2017-10-03', 6994000, 'Đã duyệt'),
('DH02', 'NV03', 'KH03', 'Võ Thị Bé', '01654763458', '2017-10-01', '2017-10-02', 61470100, 'Đã duyệt'),
('DH03', 'NV04', 'KH04', 'Nguyễn Như Mai', '01215873125', '2017-10-01', '2017-10-02', 28790000, 'Đã duyệt'),
('DH04', 'NV04', 'KH05', 'Lê Thị Mùi', '0986324027', '2017-10-02', '2017-10-03', 25790000, 'Đã duyệt'),
('DH05', 'NV04', 'KH06', 'Nguyễn Văn Nam', '0904934587', '2017-10-02', '2017-10-03', 16990000, 'Chưa duyệt'),
('DH06', 'NV05', 'KH08', 'Nguyễn Thị Ngọc Mai', '01652734528', '2017-10-03', '2017-10-03', 10690000, 'Chưa duyệt'),
('DH07', 'NV06', 'KH09', 'Nguyễn Văn Chánh', '01237624089', '2017-10-03', '2017-10-04', 49280000, 'Chưa duyệt');

-- --------------------------------------------------------

--
-- Table structure for table `hangsanxuat`
--

CREATE TABLE `hangsanxuat` (
  `MaHangSX` varchar(10) NOT NULL,
  `TenHangSX` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `hangsanxuat`
--

INSERT INTO `hangsanxuat` (`MaHangSX`, `TenHangSX`) VALUES
('APP', 'Apple'),
('ASU', 'Asus'),
('HTC', 'HTC'),
('NOK', 'Nokia'),
('OPP', 'Oppo'),
('SAM', 'Samsung'),
('SON', 'Sony'),
('VIV', 'Vivo');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` varchar(32) NOT NULL,
  `TenKH` varchar(50) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `MatKhau` varchar(32) NOT NULL,
  `NgaySinh` date DEFAULT NULL,
  `DiaChi` varchar(70) DEFAULT NULL,
  `SDT` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `Email`, `MatKhau`, `NgaySinh`, `DiaChi`, `SDT`) VALUES
('KH01', 'Nguyễn Văn Minh', 'minh.nguyenvan@gmail.com', 'b857eed5c9405c1f2b98048aae506792', '1992-01-03', '92 Lê Thánh Tôn, P4, Quận 1, TP.HCM', '01236564465'),
('KH02', 'Nguyễn Văn Dũng', 'dung.nguyenvan@gmail.com', '8ddcff3a80f4189ca1c9d4d902c3c909', '1986-05-11', '60A Trường Sơn, P2, Q.Tân Bình, TP.HCM', '01237624089'),
('KH03', 'Võ Thị Bé', 'be.vothi@gmail.com', '3dbe00a167653a1aaee01d93e77e730e', '1988-07-10', '34 Lê Duẩn, P.Bến Nghé, Quận 1, TPHCM', '01654763458'),
('KH04', 'Nguyễn Như Mai', 'mai.nguyennhu@gmail.com', 'd86344a7eae5ebfa67f5b76517cf7a2d', '1990-04-11', '11 Nguyễn Kiệm, P7, Q.Gò Vấp, TP.HCM', '01215873125'),
('KH05', 'Lê Thị Mùi', 'mui.lethi@gmail.com', '810247419084c82d03809fc886fedaad', '1991-08-03', '18 Phan Văn Trị, P10, Q.Gò Vấp, TP.HCM', '0986324027'),
('KH06', 'Nguyễn Văn Nam', 'nam.nguyenvan@gmail.com', 'dd4b21e9ef71e1291183a46b913ae6f2', '1989-05-08', '177 Nguyễn Thượng Hiền, P4,  Quận 3, TP.HCM', '0904934587'),
('KH07', 'Trần Đăng Dũng', 'dung.trandang@gmail.com', '7c497868c9e6d3e4cf2e87396372cd3b', '1992-11-11', 'B3 Tô Ký, P.Tân Chánh Hiệp, Quận 12, TP.HCM', '01238989564'),
('KH08', 'Nguyễn Thị Ngọc Mai', 'mai.nguyenthingoc@gmail.com', '94b8cea57c49a3007225a0c70c475450', '1990-07-12', '1K4C Bửu Long, P15, Quận 10, TP.HCM', '01652734528'),
('KH09', 'Nguyễn Văn Chánh', 'chanh.nguyenvan@gmail.com', '331b184847bb1808123473d76c45540b', '1989-10-09', '248 Lý Chính Thắng, P9, Quận 3, TP.HCM', '01237624089');

-- --------------------------------------------------------

--
-- Table structure for table `loaidienthoai`
--

CREATE TABLE `loaidienthoai` (
  `MaLoai` varchar(10) NOT NULL,
  `TenLoai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `loaidienthoai`
--

INSERT INTO `loaidienthoai` (`MaLoai`, `TenLoai`) VALUES
('BP', 'Điện thoại bàn phím'),
('TM', 'Điện thoại thông minh');

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `MaNCC` varchar(10) NOT NULL,
  `TenNCC` varchar(50) NOT NULL,
  `SDT` varchar(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Fax` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`MaNCC`, `TenNCC`, `SDT`, `Email`, `Fax`) VALUES
('NCC01', 'Công ty TNHH Thế Giới Di Động', '35100100', 'lienhe@thegioididong.com', '04.89276180'),
('NCC02', 'Công ty TNHH Thế Giới Di Động Mai Nguyên', '39100332', 'mainguyen117@gmail.com', '04.89276190'),
('NCC03', 'Công ty TNHH Bao La', '35119060', 'lienhe@baola.com', '04.39276110');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` varchar(10) NOT NULL,
  `TenNV` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `MatKhau` varchar(32) NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` tinyint(4) NOT NULL,
  `QuyenTruyCap` varchar(30) NOT NULL,
  `DiaChi` varchar(70) NOT NULL,
  `SDT` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `TenNV`, `UserName`, `MatKhau`, `NgaySinh`, `GioiTinh`, `QuyenTruyCap`, `DiaChi`, `SDT`) VALUES
('NV01', 'Nguyễn Văn Thành', 'SuperAdmin', '1bbd886460827015e5d605ed44252251', '1989-12-10', 1, 'SuperAdmin', '808 Quang Trung, P.8, Q.Gò Vấp, TP.HCM', '01239532444'),
('NV02', 'Nguyễn Văn Tuấn', 'Admin', 'bae5e3208a3c700e3db642b6631e95b9', '1992-04-02', 1, 'Admin', '187 Điện Biên Phủ, P.Đa Kao, Q1, TP.HCM', '01257352007'),
('NV03', 'Nguyễn Ngọc Mai', 'mainguyen', 'd27d320c27c3033b7883347d8beca317', '1994-08-08', 0, 'Member', '65F Hồ Xuân Hương, Q3, TP.HCM', '01655901356'),
('NV04', 'Trần Thị Thủy', 'thuytran', 'b857eed5c9405c1f2b98048aae506792', '1993-02-09', 0, 'Member', '16 Lê Quý Đôn, Q3, TP.HCM', '01218677687'),
('NV05', 'Nguyễn Lan Anh', 'anhnguyen', 'f638f4354ff089323d1a5f78fd8f63ca', '1990-04-11', 0, 'Member', '64 Nguyễn Thời Trung, P6, Quận 5, TP.HCM', '0909454545'),
('NV06', 'Lê Thị Hoa', 'hoale', '7c497868c9e6d3e4cf2e87396372cd3b', '1993-07-09', 0, 'Member', 'B413 Tô Ký, P.Đông Hưng Thuận, Q12, TP.HCM', '0982764575');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `IMEI_2` (`IMEI`),
  ADD KEY `MaDH` (`MaDH`),
  ADD KEY `IMEI` (`IMEI`);

--
-- Indexes for table `dienthoai`
--
ALTER TABLE `dienthoai`
  ADD PRIMARY KEY (`IMEI`),
  ADD UNIQUE KEY `IMEI` (`IMEI`),
  ADD KEY `MaDongDT` (`MaDongDT`);

--
-- Indexes for table `dongdienthoai`
--
ALTER TABLE `dongdienthoai`
  ADD PRIMARY KEY (`MaDongDT`),
  ADD UNIQUE KEY `MaDongDT` (`MaDongDT`),
  ADD KEY `MaLoai` (`MaLoai`),
  ADD KEY `MaHangSX` (`MaHangSX`),
  ADD KEY `MaNCC` (`MaNCC`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDH`),
  ADD UNIQUE KEY `MaDH` (`MaDH`),
  ADD KEY `MaKH` (`MaKH`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Indexes for table `hangsanxuat`
--
ALTER TABLE `hangsanxuat`
  ADD PRIMARY KEY (`MaHangSX`),
  ADD UNIQUE KEY `MaHangSX` (`MaHangSX`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`),
  ADD UNIQUE KEY `MaKH` (`MaKH`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `loaidienthoai`
--
ALTER TABLE `loaidienthoai`
  ADD PRIMARY KEY (`MaLoai`),
  ADD UNIQUE KEY `MaLoai` (`MaLoai`);

--
-- Indexes for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`MaNCC`),
  ADD UNIQUE KEY `MaNCC` (`MaNCC`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`),
  ADD UNIQUE KEY `MaNV` (`MaNV`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`MaDH`) REFERENCES `donhang` (`MaDH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`IMEI`) REFERENCES `dienthoai` (`IMEI`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dienthoai`
--
ALTER TABLE `dienthoai`
  ADD CONSTRAINT `dienthoai_ibfk_1` FOREIGN KEY (`MaDongDT`) REFERENCES `dongdienthoai` (`MaDongDT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dongdienthoai`
--
ALTER TABLE `dongdienthoai`
  ADD CONSTRAINT `dongdienthoai_ibfk_1` FOREIGN KEY (`MaNCC`) REFERENCES `nhacungcap` (`MaNCC`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dongdienthoai_ibfk_2` FOREIGN KEY (`MaLoai`) REFERENCES `loaidienthoai` (`MaLoai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dongdienthoai_ibfk_3` FOREIGN KEY (`MaHangSX`) REFERENCES `hangsanxuat` (`MaHangSX`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
