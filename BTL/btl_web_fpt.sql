-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 28, 2021 lúc 05:36 PM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btl_web_fpt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `id` int(11) NOT NULL,
  `danhmuc` varchar(100) NOT NULL,
  `tenbaiviet` varchar(200) NOT NULL,
  `noidung` varchar(1000) NOT NULL,
  `hinhanh` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`id`, `danhmuc`, `tenbaiviet`, `noidung`, `hinhanh`) VALUES
(1, 'Cóc Hóng', 'Phát hiện chiếc AirPod lớn nhất thế giới… “đánh rơi” tại FPoly', 'Cụ thể, vào slot 1 ngày thứ Ba vừa qua, một chiếc Airpod đã được tìm thấy tại phòng học của các Ong Vàng nhà Poly. Do kích thước đặc biệt của mình, món đồ ngay lập tức thu hút sự chú ý của toàn bộ tập thể lớp. Người nhặt được đã đăng tin ngay sau đó nhưng đến nay vẫn chưa ghi nhận được phản hồi nào từ chủ nhân của món đồ. Theo quan sát và phân tích của Hội yêu Công nghệ FPoly, đây là một chiếc Airpod vô cùng hiếm gặp, không chỉ có kích thước khủng mà còn được thiết kế tinh xảo, với chất liệu… nhựa ABS chuyên dụng làm vòi hoa sen. “Chiếc Airpod có các mắt tia nước bung đều, dự đoán có thể phun nước xa đến 1,5m. Còn về chức năng kết nối với iPhone và nghe nhạc có tốt hay không thì chúng tôi không biết” – Đại diện Hội yêu Công nghệ FPoly chia sẻ. Dự đoán chiếc Airpods này có giá trị khá “khủng” như kích thước của nó, có thể lên đến 100.000 VNĐ. Hiện các Ong Vàng vẫn đang tích cực truy tìm tung tích của chủ nhân món hàng hiệu đắt giá này.', 'anh1.jpg'),
(3, 'Cóc Hóng ', 'Choáng ngợp với tủ đồ hiệu cực khủng của các Sư Tử Greenwich khi đi học kỳ quân sự', 'Không gian hoành tráng ngập tràn đồ hiệu của các Sư Tử Greenwich trong học kỳ quân sự vừa qua khiến nhiều người không khỏi trầm trồ ngưỡng mộ.\r\n\r\nNếu trước Tết, các Sư Tử nhà Greenwich đã xuất bản bí kíp võ công Sư Tử quyền và trở thành tác phẩm miễn phí bán chạy nhất năm 2020 thì giờ đây, họ lại khiến cộng đồng mạng chao đảo một lần nữa với tủ đồ hiệu không thể chất hơn tại kỳ quân sự của mình. \r\n\r\n\r\nTừ Chanel, Prada, Dior, Hermès, Burberry cho đến Gucci, Versace… đều góp mặt trong tủ đồ đắt giá này. Tuy không gian tại KTX không quá rộng rãi nhưng nhìn qua chẳng khác nào showroom thu nhỏ của các Sư Tử. Những món hàng hiệu này đều có giá trị rất lớn, trung bình khoảng vài chục nghìn đồng. Đặc biệt, một số món còn là phiên bản giới hạn với các hoa văn, họa tiết… tự chế. \r\n\r\nSở hữu nhiều item đa dạng, thuộc nhiều thương hiệu thời trang cao cấp như thế, chẳng trách sao các Sư Tử ngày càng ăn diện hút mắt hơn, khoản mix & match trở thành chuyện nhỏ vì cần món nào, có món đó.', 'anh2.jpg'),
(4, 'Cóc Hóng ', 'Cóc HoLa sáng tạo sổ tay học tiếng Trung dành cho sinh viên', 'Tiếng Trung vốn là ngôn ngữ thú vị nhưng cũng siêu “khó nhằn”. Để giúp sinh viên chúng mình có thể “nhập môn” Hoa Ngữ đơn giản và hiệu quả hơn, nhóm Cóc Hola đã cho ra đời cuốn Sổ tay học tiếng Trung. Sản phẩm của nhóm là tổng hợp các phương tiện học tiếng Trung  hiệu quả và được nhiều bạn trẻ yêu thích hiện nay. \r\n\r\nNhóm Cóc gồm ba thành viên của lớp FIN1402, ĐH FPT Hà Nội: Nguyễn Thị Khánh Linh, Lê Minh Trang và Phan Thị Thanh Phương. Trong khoảng thời gian học online tại nhà, nhóm được các thầy cô đưa ra đề bài hoàn thành một sản phẩm truyền thông (Media Product). Đây cũng là bài tập cuối kì môn SSC101. Cùng đam mê học tiếng Trung, ba cô bạn nghĩ ngay đến việc tạo ra một cuốn sổ tay, tổng hợp các kênh học, phương pháp học thú vị, vừa vui vừa hiệu quả để giúp bản thân học tốt hơn ngôn ngữ này và biết đâu cũng có thể giúp ích được cho bạn khác.\r\nKhông đơn thuần là tổng hợp các kênh học, cuốn “Sổ tay học tiếng Trung” ra đời còn với mục đích đem đến sự đánh giá tổng quan những phương ph', 'anh3.jpg'),
(5, 'Cóc Biết', '4 bí kíp giúp Cóc chinh phục song ngữ', 'Kỹ năng nghe luôn là một trong những kỹ năng đòi hỏi sự kiên nhẫn từ người học. Cách để nâng cao kỹ năng này chỉ có thể là luyện tập chăm chỉ. Tuy nhiên, các Cóc nên luyện tập một cách thông minh và tạo hứng thú cho bản thân khi học nghe. Vì nếu cảm thấy nhàm chán khi luyện nghe, chúng ta sẽ dễ sinh ra tâm lý phản khán và chống cự, dẫn đến tình trạng “nghe tai này lọt tai kia”, hoặc học tập như thể chống đối, không có cảm hứng.\r\n\r\nBên cạnh đó, rất nhiều người than thở rằng việc nghe “chinh chiến” qua các đề thi và sách vở khiến chúng ta bị kiệt sức. Nguyên nhân là vì ta phải cố gắng lắng nghe hòng trả lời đúng những câu hỏi được liệt kê sẵn. Do đó, tại sao chúng ta không thử tìm cho mình một nguồn nghe khác thú vị hơn ngoài sách vở nhỉ? \r\n\r\nMột cách để luyện nghe hiệu quả là sử dụng Podcast. Các Cóc có thể tải Google Podcasts về điện thoại, sau đó chọn chủ đề nghe khiến mình hứng thú. Có hàng trăm chủ đề hấp dẫn và vô vàn podcast để cho Cóc lựa chọn. Ngoài việc luyện ngoại ngữ, Cóc còn', 'anh6.jpg'),
(6, 'Cóc Biết', 'Tìm mình trong thế giới hậu tuổi thơ\r\n', 'Ngay từ những ngày đầu còn đọc cuốn “Điểm đến của cuộc đời”, nói về thế giới của người cận tử; hay “Bức xúc không làm ta vô can” nói về vấn đề phản biện xã hội; “Thiện, Ác và smartphone” nói về tấn công trên mạng… thì tôi đã thực sự hâm mộ tác giả Đặng Hoàng Giang. Những dự án sách trước đây của ông đều là những chủ đề rất nổi và được rất nhiều người quan tâm trên mạng xã hội. \r\n\r\nNhưng lần này, cuốn sách “Tìm mình trong thế giới hậu tuổi thơ”, ông lại chọn một mảng “chìm” là thế giới tâm lý hậu tuổi thơ. Một thế giới ít người biết tới. Thật lòng mà nói, cuốn sách này khiến tôi phải “rùng mình” khi bắt gặp hình ảnh của chính bản thân tôi trong đó, và tôi tin chắc bạn cũng sẽ như vậy.\r\nCuốn sách “Tìm mình trong thế giới hậu tuổi thơ” hoàn toàn khác biệt với những cuốn trước đó của Đặng Hoàng Giang. Bởi lần này người kể chuyện chính là những bạn trẻ mà tác giả đã dành gần 2 năm để trò chuyện riêng. Càng đọc, tôi càng cảm thấy xót thương những con người ấy. Và càng buồn vì những gì tôi đọ', 'anh7.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `tentk` char(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `matkhau` char(30) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `tentk`, `matkhau`) VALUES
(1, 'thanhlam', '123456789');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
