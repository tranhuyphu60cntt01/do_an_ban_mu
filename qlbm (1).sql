-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 30, 2021 lúc 05:22 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbm`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id_cthd` int(11) NOT NULL,
  `soluong_cthd` int(11) NOT NULL,
  `dia_chi` varchar(50) NOT NULL,
  `id_hd` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hd` int(11) NOT NULL,
  `id_nd` int(11) NOT NULL,
  `id_tt` int(11) NOT NULL,
  `thanh_toan` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loainguoidung`
--

CREATE TABLE `loainguoidung` (
  `id_lnd` int(11) NOT NULL,
  `ten_lnd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loainguoidung`
--

INSERT INTO `loainguoidung` (`id_lnd`, `ten_lnd`) VALUES
(1, 'admin'),
(2, 'khach_hang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `id_lsp` int(11) NOT NULL,
  `ten_lsp` varchar(30) NOT NULL,
  `chi_tiet` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`id_lsp`, `ten_lsp`, `chi_tiet`) VALUES
(1, 'Mũ lưỡi trai', 'Mũ lưỡi trai '),
(2, 'Mũ len', 'Mũ len'),
(3, 'Mũ tai bèo', 'Mũ tai bèo'),
(4, 'Mũ bảo hiểm', 'Mũ bảo hiểm'),
(5, 'Mũ cao bồi', 'Mũ cao bồi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id_nd` int(11) NOT NULL,
  `ten_nd` varchar(30) NOT NULL,
  `sdt_nd` varchar(20) NOT NULL,
  `gmail` varchar(20) NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `id_lnd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id_nd`, `ten_nd`, `sdt_nd`, `gmail`, `gioitinh`, `id_lnd`) VALUES
(1, 'Nguyễn Thị Lê', '0963747263', 'le@gmail.com', 0, 2),
(2, 'Trần Văn Nam', '0993647365', 'nam@gmail.com', 1, 2),
(3, 'admin', '0987654321', 'admin@gmail.com', 1, 1),
(4, 'Lê Đại Phát', '0998364623', 'phat@gmail.com', 1, 2),
(5, 'Hà MInh Tài', '09763346211', 'tai@gmail.com', 1, 2),
(6, 'Trần Thị Anh', '0988135641', 'anh@gmail.com', 0, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(30) NOT NULL,
  `gia` int(11) NOT NULL,
  `anh` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `mo_ta` varchar(50) NOT NULL,
  `id_lsp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `ten_sp`, `gia`, `anh`, `soluong`, `mo_ta`, `id_lsp`) VALUES
(1, 'Mũ len họa tiết', 10000, 'images/lenhoatiet.jpg', 50, '', 2),
(2, 'Mũ len beret', 20000, 'images/lenberet.jpg', 30, '', 2),
(3, 'Mũ bảo hiểm modular', 15000, 'images/modular.jpg', 20, '', 4),
(4, 'Mũ bảo hiểm half-face', 25000, 'images/halfface.jpg', 44, '', 4),
(5, 'Mũ lưỡi trai Palace', 30000, 'images/palace.jpg', 20, 'palace', 1),
(6, 'Mũ lưỡi trai Stussy', 28000, 'images/stussy.jpg', 60, 'stu', 1),
(7, 'Mũ lưỡi trai Ebbets', 50000, 'images/ebbets.jpg', 60, '', 1),
(8, 'Mũ lưỡi trai Norse', 80000, 'images/norse.jpg', 35, '', 1),
(9, 'Mũ lưỡi trai Saturdays Surf 6-', 65000, 'images/saturdays.jpg', 70, '', 1),
(10, 'Mũ lưỡi trai Supreme Nylon Cam', 100000, 'images/supreme.jpg', 40, '', 1),
(11, 'Mũ lưỡi trai New Era 59Fifty N', 70000, 'images/new.jpg', 55, '', 1),
(12, 'Mũ lưỡi trai Cav Empt Embroide', 90000, 'images/cav.jpg', 30, '', 1),
(14, 'Mũ len Cashmere', 85000, 'images/cashmere.jpg', 55, '', 2),
(15, 'Mũ len lông thỏ cao cấp', 200000, 'images/tho.jpg', 30, '', 2),
(16, ' Mũ len Dorain cao cấp', 15000, 'images/dorain.jpg', 60, '', 2),
(17, 'Mũ len Bedford', 90000, 'images/bedford.jpg', 30, '', 2),
(18, 'Mũ len Sweat vintage beret đỏ', 12000, 'images/sweat.jpg', 50, '', 2),
(19, 'Mũ len dệt kim', 95000, 'images/detkim.jpg', 66, '', 2),
(20, 'Mũ bảo hiểm Protec Disco không', 250000, 'images/protec.jpg', 56, '', 4),
(21, 'Mũ bảo hiểm cao cấp Amoro 249A', 300000, 'images/amoro.jpg', 44, '', 4),
(22, 'Mũ bảo hiểm Chita đen trơn', 180000, 'images/chita.jpg', 88, '', 4),
(23, 'Mũ bảo hiểm Andes 111', 200000, 'images/andes.jpg', 10, '', 4),
(24, 'Mũ bảo hiểm A SIA  MT', 400000, 'images/a.jpg', 25, '', 4),
(25, 'Mũ bảo hiểm Royal M136', 90000, 'images/royal.jpg', 61, '', 4),
(28, 'Mũ cao bồi tua rua', 120000, 'images/tuarua.jpg', 13, '', 5),
(29, 'Mũ cao bồi móc thủ công', 99000, 'images/thucong.jpg', 46, '', 5),
(30, 'Mũ Phớt cao bồi', 60000, 'images/phot.jpg', 55, '', 5),
(31, 'Mũ cao bồi lưới', 110000, 'images/luoi.jpg', 23, '', 5),
(32, 'Mũ cao bồi Phương Tây', 145000, 'images/phuongtay.jpg', 22, '', 5),
(33, 'Mũ cao bồi da bò', 400000, 'images/dabo.jpg', 40, '', 5),
(34, 'Mũ cao bồi Cảnh sát', 190000, 'images/canhsat.jpg', 44, '', 5),
(35, 'Mũ cao bồi da bò Sáp vành nhỏ', 205000, 'images/dabosap.jpg', 35, '', 5),
(36, 'Mũ tai bèo vành nhỏ', 65000, 'images/vanhnho.jpg', 13, '', 3),
(37, 'Mũ tai bèo vành rộng', 70000, 'images/vanhrong.jpg', 66, '', 3),
(38, 'Mũ tai bèo vành siêu rộng', 100000, 'images/vanhsieurong.jpg', 51, '', 3),
(39, 'Mũ tai bèo 2 mặt', 200000, 'images/2mat.jpg', 33, '', 3),
(40, 'Mũ tai bèo vải màu đen', 28000, 'images/mauden.jpg', 66, '', 3),
(41, 'Mũ tai bèo denim', 50000, 'images/denim.jpg', 20, '', 3),
(42, 'Mũ tai bèo nhuộm', 80000, 'images/nhuom.jpg', 66, '', 3),
(43, 'Mũ tai bèo họa tiết', 70000, 'images/hoatiet.jpg', 20, '', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhtrang`
--

CREATE TABLE `tinhtrang` (
  `id_tt` int(11) NOT NULL,
  `ten_tt` varchar(20) NOT NULL,
  `ghi_chu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tinhtrang`
--

INSERT INTO `tinhtrang` (`id_tt`, `ten_tt`, `ghi_chu`) VALUES
(1, 'Đã giao', 'đơn hàng đã được giao đến nơi'),
(2, 'Đang giao', 'Đơn hàng đang được gửi đi'),
(3, 'Hủy', 'Đơn đã bị hủy'),
(4, 'Chưa giao', 'Đơn hàng đang sắp xếp để giao');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id_cthd`),
  ADD KEY `id_hd` (`id_hd`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hd`),
  ADD KEY `id_tt` (`id_tt`),
  ADD KEY `hoadon_ibfk_1` (`id_nd`);

--
-- Chỉ mục cho bảng `loainguoidung`
--
ALTER TABLE `loainguoidung`
  ADD PRIMARY KEY (`id_lnd`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`id_lsp`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id_nd`),
  ADD KEY `id_lnd` (`id_lnd`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_lsp` (`id_lsp`);

--
-- Chỉ mục cho bảng `tinhtrang`
--
ALTER TABLE `tinhtrang`
  ADD PRIMARY KEY (`id_tt`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id_cthd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loainguoidung`
--
ALTER TABLE `loainguoidung`
  MODIFY `id_lnd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `id_lsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id_nd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `tinhtrang`
--
ALTER TABLE `tinhtrang`
  MODIFY `id_tt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`id_hd`) REFERENCES `hoadon` (`id_hd`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`id_nd`) REFERENCES `nguoidung` (`id_nd`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`id_tt`) REFERENCES `tinhtrang` (`id_tt`);

--
-- Các ràng buộc cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`id_lnd`) REFERENCES `loainguoidung` (`id_lnd`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_lsp`) REFERENCES `loaisanpham` (`id_lsp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
