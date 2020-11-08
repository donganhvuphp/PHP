-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2020 at 08:31 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php0720e2_itpluss`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faculty`
--

CREATE TABLE `tbl_faculty` (
  `id` int(11) NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `stt` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_faculty`
--

INSERT INTO `tbl_faculty` (`id`, `title`, `description`, `create_at`, `stt`) VALUES
(1, 'Công nghệ thông tin', 'Mô tả về khoa', '2020-09-28 21:23:34', 1),
(3, 'Khoa Tiếng Anh', 'Mô tả', '2020-09-28 21:28:37', 1),
(4, 'Kế toán', 'Mô tả khoa Kế toán', '2020-10-02 19:08:05', 1),
(5, 'Thiết kế đồ họa', 'Chuyên nghiệp', '2020-10-07 22:31:33', 1),
(6, 'Công Nghệ Ô Tô', 'Chế tạo máy', '2020-10-08 01:06:16', 1),
(7, 'Đại học bôn ba', 'gamer , stremer , hacker , editer , ...', '2020-10-16 17:35:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_point`
--

CREATE TABLE `tbl_point` (
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `point` float NOT NULL,
  `stt` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(11) NOT NULL,
  `facultys_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` char(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `addres` varchar(100) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `create_at` datetime DEFAULT current_timestamp(),
  `stt` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `facultys_id`, `name`, `phone`, `email`, `addres`, `gender`, `create_at`, `stt`) VALUES
(17, 4, 'Trần Khánh Vy', '0123456789', 'vybn@gmail.com', 'Hà Nam', 0, '2020-10-08 00:24:02', 0),
(18, 5, 'Lê Thị Hương', '01111222333', 'ha2@gmail.com', 'Hải Phòng', 0, '2020-10-08 00:29:04', 1),
(20, 7, 'Phùng Thanh Độ', '0999888123', 'dotay@gmail.com', 'Cao Bằng', 1, '2020-10-16 17:37:06', 1),
(28, 5, 'Hoàng Văn Hòe', '0124333222', 'hoanghoe@gmail.com', 'Hải Phòng', 1, '2020-10-28 01:41:32', 1),
(29, 5, 'Trần Thủ Độ', '0912222333', 'thudo@gmail.com', 'Hà Tĩnh', 1, '2020-10-28 21:43:58', 1),
(30, 4, 'Trần Khánh Linh', '0999888123', 'linhka@gmail.com', 'Thanh Hóa', 0, '2020-10-28 21:49:12', 1),
(32, 6, 'Nguyễn Việt Hoàng', '0888999111', 'hoangace@gmail.com', 'Bắc Giang', 1, '2020-10-30 13:32:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`id`, `title`) VALUES
(1, 'Tiếng Anh Cơ Bản'),
(2, 'Lập trình PHP'),
(3, 'Xác xuất thống kê');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passw` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `stt` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `phone`, `email`, `passw`, `create_at`, `stt`) VALUES
(1, 'Nguyễn Văn A', '09765421313', 'abc@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2020-10-05 19:30:49', 1),
(2, 'Vũ Đông Anh', '09765421313', 'donganh@gmail.com', '2d730f70facc9bda15c9af0addb7354b', '2020-10-16 16:17:07', 1),
(3, 'Vũ Đông Anh', '09765421313', 'anh123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2020-10-26 15:37:27', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_point`
--
ALTER TABLE `tbl_point`
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `facultys_id` (`facultys_id`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_point`
--
ALTER TABLE `tbl_point`
  ADD CONSTRAINT `tbl_point_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `tbl_subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_point_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `tbl_student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD CONSTRAINT `tbl_student_ibfk_1` FOREIGN KEY (`facultys_id`) REFERENCES `tbl_faculty` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
