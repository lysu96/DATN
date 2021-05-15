-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 05, 2021 lúc 02:53 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_dongho`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `idcthd` int(11) NOT NULL,
  `idhd` int(11) NOT NULL,
  `tensanpham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `phuongthucthanhtoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`
--

CREATE TABLE `hinhanh` (
  `ida` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `urlhinhanh` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhanh`
--

INSERT INTO `hinhanh` (`ida`, `idsp`, `urlhinhanh`) VALUES
(1, 7, 'Đồng Hồ Nam Dây Kim Loại Citizen NJ0020-51B - Bạc-1n.jpg'),
(2, 7, 'Đồng Hồ Nam Dây Kim Loại Citizen NJ0020-51B - Bạc-2n.jpg'),
(3, 7, 'Đồng Hồ Nam Dây Kim Loại Citizen NJ0020-51B - Bạc-3n.jpg'),
(5, 9, 'Đồng Hồ Nam Dây Thép Không Gỉ Casio MTP-V005G-9AUDF (40mm) - Vàng1.jpg'),
(6, 9, 'Đồng Hồ Nam Dây Thép Không Gỉ Casio MTP-V005G-9AUDF (40mm) - Vàng2.jpg'),
(7, 9, 'Đồng Hồ Nam Dây Thép Không Gỉ Casio MTP-V005G-9AUDF (40mm) - Vàng3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `idhd` int(11) NOT NULL,
  `idnd` int(11) NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `ngaydathang` datetime NOT NULL,
  `trangtthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `idnd` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaydangky` datetime NOT NULL,
  `phanquyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idsp` int(11) NOT NULL,
  `tensp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanhsp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mausp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `chitietsp` text COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `daban` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `khuyenmai1` int(11) NOT NULL,
  `khuyenmai2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `madm` int(11) NOT NULL,
  `ngaycapnhap` datetime NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idsp`, `tensp`, `hinhanhsp`, `mausp`, `chitietsp`, `soluong`, `daban`, `gia`, `khuyenmai1`, `khuyenmai2`, `madm`, `ngaycapnhap`, `trangthai`) VALUES
(1, 'ĐỒNG HỒ CITIZEN AU1080-20A NAM ECO-DRIVE DÂY VẢI', 'dong-ho-citizen-au1080-20a-nam-eco-drive-day-vai-600x600.jpg', '', 'Đồng hồ nam Citizen AU1080-20A nổi bật Pin sử dụng công nghệ hiện đại Eco-Drive (Năng Lượng Ánh Sáng), với thiết kế theo phong cách thời trang với dây đeo chất liệu bằng vải tông màu kem trẻ trung.', 20, 1, 5040000, 0, '', 0, '2021-03-08 00:00:00', 0),
(2, 'ĐỒNG HỒ OLYM PIANUS OP99141-71AGSK TRẮNG NAM TỰ ĐỘNG DÂY INOX', 'dong-ho-olym-pianus-op99141-71agsk-trang-nam-tu-dong-day-inox-600x600.jpg', '', 'Mẫu đồng hồ Olym Pianus OP99141-71AGSK vẻ ngoài tinh tế sang trọng ấn tượng với kiểu thiết kế độc đáo đến từ ô chân kính phô diễn ra 1 phần trải nghiệm hoạt động của bộ máy cơ đầy nam tính.', 10, 0, 6912000, 0, '', 0, '2021-03-08 00:00:00', 0),
(3, 'ĐỒNG HỒ LOUIS ERARD 13900AA05.BDC102 NAM PIN DÂY DA', 'ĐỒNG HỒ LOUIS ERARD 13900AA05.BDC102-a.jpg', '', 'Đây là dòng sản phẩm tuyệt vời cho những người đang tìm kiếm chiếc đồng hồ được thiết kế riêng mang đầy đủ sự “chất” Vintage cho đến hiện nay, đó là “chất cổ điển” và chỉ là “cổ điển” tinh khiết.', 5, 0, 18195300, 0, '', 0, '2021-03-08 00:00:00', 0),
(4, 'ĐỒNG HỒ ORIENT FSTAA002W0 NAM PIN DÂY DA', 'FSTAA002W0-600x600.jpg', '', 'Đồng hồ Orient FSTAA002W0 có vỏ kim loại phủ màu vàng sang trọng, kim chỉ và vạch số thanh mãnh nổi bật trên nền số, ô lịch ngày vị trí 3h tinh tế, dây đeo bằng chất liệu da cao cấp màu nâu đem lại phong cách lịch lãm, sang trọng cho phái mạnh', 5, 2, 2737000, 0, '', 0, '2021-03-08 00:00:00', 0),
(5, 'ĐỒNG HỒ CANDINO C4433/3 NỮ PIN DÂY INOX', 'dong-ho-candino-c4433_3-nu-pin-day-inox-600x600.jpg', '', 'Đồng hồ dây da thời trang nữ Candino C4433/3, với mặt đồng hồ sang trọng nền trắng có ánh xà cừ có đính hạt pha lê viền xung quang, kính Sapphire, chữ số lớn dễ đọc, 3 kim chỉ màu bạc.', 25, 0, 3996000, 0, '', 1, '2021-03-08 00:00:00', 0),
(6, 'ĐỒNG HỒ CASIO LA670WL-1BDF NỮ PIN DÂY DA', 'dong-ho-casio-la670wl-1bdf-nu-pin-day-da-600x600.jpg', '', 'Mẫu đồng hồ Casio LA670WL-1BDF  với thiết kế bộ máy nhỏ gọn tạo nên vẻ ngoài thanh mảnh nữ tính, vỏ máy tông màu vàng phối cùng mẫu dây đeo kim loại đen tăng thêm vẻ đẹp thời trang.', 50, 10, 766000, 0, '', 1, '2021-03-08 00:00:00', 0),
(7, 'Đồng Hồ Nam Dây Kim Loại Citizen NJ0020-51B - Bạc', 'Đồng Hồ Nam Dây Kim Loại Citizen NJ0020-51B - Bạc.jpg', '', 'Đồng Hồ Nam Dây Kim Loại Citizen NJ0020-51B - Bạc đến từ thương hiệu đồng hồ nổi tiếng và đang khẳng định mình với vị trí số 2 trong ngành công nghiệp đồng hồ Nhật Bản, thiết kế sang trọng mà cổ điển với chất lượng hoàn hảo.\r\nSở hữu vẻ ngoài tinh tế, sắc sảo trong từng đường nét là điểm nhấn thu hút của chiếc đồng hồ Citizen.', 50, 0, 6175000, 0, '', 0, '2021-03-09 00:00:00', 0),
(8, 'Đồng Hồ Nam Dây Da Adriatica A8142.1253A', 'Đồng Hồ Nam Dây Da Adriatica A8142.1253A.jpg', '', 'Đồng Hồ Nam Dây Da Adriatica A8142.1253A với kiểu dáng trẻ trung, năng động mang đến sự mạnh mẽ, lịch lãm cho bạn nam. Ngày nay, đồng hồ có rất nhiều công dụng không những xem giờ mà còn là đồ trang sức giúp thể hiện vẻ đẹp của con người, vì vậy việc sở hữu một chiếc đồng hồ thời trang sẽ giúp bạn nâng cao đẳng cấp và sự sành điệu của mình.', 30, 0, 15318000, 0, '', 0, '2021-03-09 00:00:00', 0),
(9, 'Đồng Hồ Nam Dây Thép Không Gỉ Casio MTP-V005G-9AUDF (40mm) - Vàng', 'Đồng Hồ Nam Dây Thép Không Gỉ Casio MTP-V005G-9AUDF (40mm) - Vàng.jpg', '', 'Đồng Hồ Nam Dây Thép Không Gỉ Casio MTP-V005G-9AUDF (40mm) - Vàng được thiết kế từ chất liệu và linh kiện cao cấp, thiết kế trẻ trung nhưng không kém phần sang trọng sẽ là phụ kiện hoàn hảo cho phái mạnh tôn lên phong cách trẻ trung, nam tính.\r\nSản phẩm được làm từ dây chuyền công nghệ tiên tiến của thương hiệu Casio nổi tiếng Nhật Bản.\r\nDây đồng hồ được làm bằng chất liệu thép không gỉ mạ màu vàng chắc chắn và sang trọng.\r\nKhông những thế, đồng hồ còn có khả năng chống nước cao, bạn có thể an tâm đồng hồ không bị hư hỏng khi trời mưa.\r\nSản phẩm có thể phối hợp nhiều trang phục khác nhau.', 50, 0, 739000, 0, '', 0, '2021-03-09 00:00:00', 0),
(10, 'Đồng Hồ Nam Crnaira CR8333 Siêu Mỏng mặt đồng hồ tròn, thiết kế đẹp mắt', 'Đồng Hồ Nam Crnaira CR8333.jpg', '', 'Đồng Hồ Nam Crnaira CR8333 nổi bật bởi kiểu dáng sang trọng với mặt hình tròn phối màu đen cá tính. Sản phẩm có thiết kế hiện giờ dạng số kết hợp vạch đơn giản, kim màu vàng càng tôn lên nét lịch lãm và phong cách thời trang của phái mạnh.\r\n\r\nĐồng hồ Crnaira CR8333 có vỏ máy và dây đều được làm bằng thép không gỉ cao cấp, có bề mặt sáng bóng. Chất liệu đồng hồ bền bỉ, mang lại giá trị sử dụng lâu dài và cảm giác thoải mái, dễ chịu cho người đeo. Ngoài ra, sản phẩm có dây đeo chắc chắn, ôm vừa vặn tay nên bạn hoàn toàn có thể yên tâm khi tham gia các hoạt động hàng ngày.', 100, 30, 99000, 0, '', 0, '2021-03-09 00:00:00', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`idcthd`);

--
-- Chỉ mục cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`ida`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`idhd`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`idnd`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `idcthd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `ida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `idhd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `idnd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
