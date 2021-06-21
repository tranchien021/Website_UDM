-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 16, 2021 lúc 11:24 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_didong`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` int(255) NOT NULL,
  `name` varchar(900) NOT NULL,
  `content` varchar(9000) NOT NULL,
  `img` varchar(900) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id`, `name`, `content`, `img`, `time`) VALUES
(0, 'Góc bất ngờ, viền benzel trên Note 9 dày hơn Note 8', 'Trong một tweet mới, Ice Universe cho thấy Samsung đã thực sự “cải lùi” thiết kế một bước đáng ngạc nhiên từ Note 8 với Galaxy Note 9: viền benzel.\r\nVâng, Samsung thực sự đi ngược lại xu hướng khi trang bị Galaxy Note 9 với viền bezel bên dày hơn Galaxy Note 8. Nó cũng dày hơn đáng kể so với Galaxy S9 và Galaxy S9 + mà công ty phát hành vào tháng 2.\r\nThật thú vị, sự thay đổi này Samsung đã giấu trong hình ảnh quảng bá Note 9. Với việc sử dụng hình nền tối màu trùng lặp với mặt trước thì Samsung đã khéo léo ẩn đi viền benzel trên chiếc flagship.', 'blog1.jpg', '2021-06-12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` varchar(900) NOT NULL,
  `img` varchar(900) NOT NULL,
  `name` varchar(900) NOT NULL,
  `address` varchar(900) NOT NULL,
  `date` date NOT NULL,
  `theloai` varchar(900) NOT NULL,
  `price` int(255) NOT NULL COMMENT '3000',
  `content` varchar(9000) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `img`, `name`, `address`, `date`, `theloai`, `price`, `content`, `id`) VALUES
('IP', 'product1.jpg', 'IPhone 11 | VN ', 'Dak Song   ', '2021-06-09', 'NB', 29250000, 'San Pham chat luong cao  ', 1),
('IP', 'product1.jpg', 'Iphone 12 ProMax', 'Dak Song', '2021-06-24', 'GT', 30500000, 'San Pham Chất Lượng Hàng Đầu', 2),
('SS', 'product3.jpg', 'Samsunng Galaxy A72', 'TP HO CHi MINH', '2021-06-10', 'NB', 9850000, 'Chat Luong cuc ky cao', 3),
('SS', 'product4.jpg', 'Samsunng Galaxy A71', 'TP Hồ Chí Minh', '2021-06-09', 'NB', 7700000, 'Sản phẩm đẹp', 4),
('NK', 'product5.jpg', 'Nokia 2.4', '1', '0000-00-00', 'NB', 2100000, '1', 5),
('NK', 'product6.jpg', 'Nokia Xr20', '2', '2021-03-03', 'NB', 9890000, '2', 6),
('RM', 'product7.jpg', 'Realme 7 Pro', '3', '0000-00-00', 'NB', 7590000, '3', 7),
('RM', 'product8.jpg', 'Realme X9 5G', '4', '0000-00-00', 'NB', 10590000, '4', 8),
('XM', 'product9.jpg', 'Xiaomi Mi 11 5G 128GB', '5', '0000-00-00', 'GT', 15790000, '5', 9),
('XM', 'product10.jpg', 'Xiaomi Redmi 9 4G', '6', '0000-00-00', 'GT', 16750000, '6', 10),
('VV', 'product11.jpg', 'Vivo X60 Pro 5G', '7', '0000-00-00', 'GT', 14950000, '7', 11),
('VV', 'product12.jpg', 'Vivo X52 Pro 4G', '8', '0000-00-00', 'GT', 7100000, '8', 12),
('VS', 'product13.jpg', 'Vsmart Star 4', '9', '0000-00-00', 'GT', 1740000, '9', 13),
('VS', 'product14.jpg', 'Vsmart Star 5', '12', '0000-00-00', 'GT', 1990000, '12', 14),
('HW', 'product15.jpg', 'Huawei P40', '11', '0000-00-00', 'GT', 8900000, '111', 15),
('HW', 'product16.jpg', 'Huawei Y6p', '2', '0000-00-00', 'GT', 5900000, '3', 16),
('AS', 'product17.jpg', 'ASUS ROG Phone 5', '1', '0000-00-00', 'NB', 22900000, '1', 17);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `id` int(255) NOT NULL,
  `Tên` varchar(900) NOT NULL,
  `theloai` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`id`, `Tên`, `theloai`) VALUES
(1, 'IPhone', 'IP'),
(2, 'SamSung', 'SS'),
(3, 'Nokia', 'NK'),
(4, 'RealMi', 'RM'),
(5, 'XiaoMe', 'XM'),
(6, 'ASUS', 'AS'),
(7, 'VSmart', 'VS'),
(8, 'Huawei', 'HW'),
(9, 'ViVo', 'VV');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `useName` varchar(900) NOT NULL,
  `passWord` varchar(900) NOT NULL,
  `level` int(255) NOT NULL,
  `email` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `useName`, `passWord`, `level`, `email`) VALUES
(1, 'minhchien ', '1', 1, ' tranchien021@gmail.com'),
(2, '18520530', '1', 1, ''),
(4, '2', '2', 0, '2');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
