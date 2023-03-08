-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 08, 2023 lúc 02:05 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `attt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id_custom` int(15) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phonenumber` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id_custom`, `username`, `password`, `phonenumber`, `address`, `email`) VALUES
(1, 'user1', 'u1', '095568415', 'Thành phố Hồ Chí Minh', 'user1@gmail.com'),
(2, 'user2', 'u2', '051486618', 'Tiền Giang', 'user2@gmail.com'),
(3, 'user3', 'u3', '054094044', 'Tây Ninh', 'user3@gmal.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `fish`
--

CREATE TABLE `fish` (
  `id_fish` int(15) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `fish`
--

INSERT INTO `fish` (`id_fish`, `name`, `price`, `image`) VALUES
(1, 'Betta Dumbo', '50000', 'bettaDumbo.jpg'),
(2, 'Cá bảy màu', '10000', 'ca7mau.png'),
(3, 'Cá Ali', '100000', 'caAli.jpg'),
(4, 'Cá ba đuôi', '25000', 'Cabaduoi.jpg'),
(5, 'Cá bình tích', '5000', 'cabinhtich.jpg'),
(6, 'Cá cánh buồm', '20000', 'cacanhbuom.jpeg'),
(7, 'Cá cầu vòng', '40000', 'cacauvong.jpg'),
(8, 'Cá chuột', '15000', 'cachuot.jpg'),
(9, 'Cá da báo', '45000', 'cadabao.jpg'),
(10, 'Cá dĩa', '60000', 'cadia.jpg'),
(11, 'Cá hải hồ', '75000', 'cahaiho.jpg'),
(12, 'Cá hoàng đế', '100000', 'cahoangde.jpg'),
(13, 'Cá khủng long', '80000', 'cakhunglong.jpg'),
(14, 'Cá la hán', '150000', 'calahan.jpg'),
(15, 'Cá lóc pháo hoa đóm vàng', '500000', 'calocphaohoadomvang.jpg'),
(16, 'Cá lóc vây xinh', '70000', 'calocvayxanhvn.jpg'),
(17, 'Cá lóc vẩy rồng vàng', '310000', 'calocyellowsentarum.jpg'),
(18, 'Cá lóc hoàng đế', '1300000', 'calochoangde.jpg'),
(19, 'Cá mú', '230000', 'camu.jpg'),
(20, 'Cá nemo', '250000', 'canemo.jpg'),
(21, 'Cá phượng hoàng', '85000', 'caphuonghoang.jpeg'),
(22, 'Cá rồng', '2500000', 'carong.jpg'),
(23, 'Cá sặc gấm', '50000', 'casacgam.jpg'),
(24, 'Cá sọc ngựa dạ quang', '65000', 'casocnguadaquang.jpg'),
(25, 'Cá thần tiên', '45000', 'cathantien.jpg'),
(26, 'Cá thanh ngọc', '34000', 'cathanhngoc.jpg'),
(27, 'cá thủy bao nhãn', '110000', 'cathuybaonhan.jpg'),
(28, 'Cá trạng nguyên', '68000', 'catrangnguyen.jpg'),
(29, 'Cá tỳ bà bướm', '55000', 'tybabuom.jpg'),
(30, 'Cá bảy màu thái đơn sắc', '55000', 'cabaymauthaidonsac.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `date` date NOT NULL,
  `shipaddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_custom` int(11) NOT NULL,
  `id_fish` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`date`, `shipaddress`, `id_custom`, `id_fish`) VALUES
('2023-03-06', 'KP1, Hiệp Bình Chánh,Thủ Đức', 1, 1),
('2023-03-06', '405 CMT8, Phường 5, Quận 10', 1, 2),
('2023-03-06', 'Phường 13, Bình Thạnh, Thành phố Hồ Chí Minh, Việt Nam', 2, 3),
('2023-03-07', 'Phường 13, Bình Thạnh, Thành phố Hồ Chí Minh, Việt Nam', 2, 4),
('2023-03-08', '516 Đ. Phạm Văn Đồng, Phường 13, Bình Thạnh, Thành phố Hồ Chí Minh 700000, Việt Nam', 3, 5),
('2023-03-09', '516 Đ. Phạm Văn Đồng, Phường 13, Bình Thạnh, Thành phố Hồ Chí Minh 700000, Việt Nam', 3, 6);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_custom`);

--
-- Chỉ mục cho bảng `fish`
--
ALTER TABLE `fish`
  ADD PRIMARY KEY (`id_fish`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`date`,`id_custom`,`id_fish`),
  ADD KEY `PK_customer_customer_id` (`id_custom`),
  ADD KEY `PK_customer_fish_id` (`id_fish`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id_custom` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `fish`
--
ALTER TABLE `fish`
  MODIFY `id_fish` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `PK_customer_customer_id` FOREIGN KEY (`id_custom`) REFERENCES `customer` (`id_custom`),
  ADD CONSTRAINT `PK_customer_fish_id` FOREIGN KEY (`id_fish`) REFERENCES `fish` (`id_Fish`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
