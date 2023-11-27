-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 12:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlykhoaluan`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `stt` int(11) NOT NULL,
  `date_attendance` varchar(255) NOT NULL,
  `student_fullname` varchar(255) NOT NULL,
  `mssv` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`stt`, `date_attendance`, `student_fullname`, `mssv`, `gender`, `address`, `phone`, `email`) VALUES
(8, '24-05-2023', 'Phạm Hồng Khang', '19446151', 'Nam', 'IUH, Phường 4, Gò Vấp, Thành phố Hồ Chí Minh', '0123456789', 'khang@gmail.com'),
(10, '25-05-2023', 'Ngô Thị Thúy Hằng', '19443311', 'Nữ', 'IUH, Phường 4, Gò Vấp, Thành phố Hồ Chí Minh', '0123456789', 'hang@gmail.com'),
(11, '25-05-2023', 'Phạm Hồng Khang', '19446151', 'Nam', 'IUH, Phường 4, Gò Vấp, Thành phố Hồ Chí Minh', '0123456789', 'khang@gmail.com'),
(12, '26-05-2023', 'Phạm Hồng Khang', '19446151', 'Nam', 'IUH, Phường 4, Gò Vấp, Thành phố Hồ Chí Minh', '0123456789', 'khang@gmail.com'),
(13, '31-05-2023', 'Phạm Hồng Khang', '19446151', 'Nam', 'IUH, Phường 4, Gò Vấp, Thành phố Hồ Chí Minh', '0123456789', 'khang@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_student`
--

CREATE TABLE `evaluation_student` (
  `id` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `ThesisTopicID` int(11) NOT NULL,
  `base10` float DEFAULT NULL,
  `base4` float DEFAULT NULL,
  `registertopicID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `evaluation_student`
--

INSERT INTO `evaluation_student` (`id`, `StudentID`, `ThesisTopicID`, `base10`, `base4`, `registertopicID`) VALUES
(43, 26, 29, 6, 2.4, 86),
(44, 18, 29, 1.5, 0.6, 87),
(45, 9, 32, NULL, NULL, 88),
(46, 8, 32, NULL, NULL, 89),
(47, 14, 32, NULL, NULL, 90),
(48, 3, 32, NULL, NULL, 92),
(49, 4, 32, NULL, NULL, 93),
(50, 27, 29, 5.25, 2.1, 97),
(52, 28, 32, NULL, NULL, 99);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `tableid` int(11) DEFAULT NULL,
  `parentid` int(11) NOT NULL,
  `orders` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pointl`
--

CREATE TABLE `pointl` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `registertopicId` int(11) NOT NULL,
  `L01` tinytext NOT NULL,
  `L02` tinytext NOT NULL,
  `L03` tinytext NOT NULL,
  `L04` tinytext NOT NULL,
  `L05` tinytext NOT NULL,
  `L06` tinytext NOT NULL,
  `L07` tinytext NOT NULL,
  `L08` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pointl`
--

INSERT INTO `pointl` (`id`, `userId`, `registertopicId`, `L01`, `L02`, `L03`, `L04`, `L05`, `L06`, `L07`, `L08`) VALUES
(2, 28, 99, 'D', 'A', '', '', '', 'B', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `ID` int(11) NOT NULL,
  `topid` int(11) DEFAULT NULL,
  `title` longtext NOT NULL,
  `slug` varchar(255) NOT NULL,
  `detail` longtext DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registertopic`
--

CREATE TABLE `registertopic` (
  `ID` int(11) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `StudentID` varchar(200) DEFAULT NULL,
  `ClassRoom` varchar(200) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `StudentName` varchar(200) DEFAULT NULL,
  `GroupName` varchar(200) DEFAULT NULL,
  `Process` int(11) DEFAULT NULL,
  `TopicType` varchar(200) DEFAULT NULL,
  `TopicName` varchar(200) DEFAULT NULL,
  `TeacherID` int(11) DEFAULT NULL,
  `TeacherName` varchar(200) DEFAULT NULL,
  `Subject` varchar(200) DEFAULT NULL,
  `Type` int(11) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `GuidePoints` float DEFAULT NULL,
  `PointProcess` float DEFAULT NULL,
  `Commnet` varchar(500) DEFAULT NULL,
  `Commentcounter` varchar(255) DEFAULT NULL,
  `ThesisTopicID` int(11) DEFAULT NULL,
  `SupervisingTeacherID` int(11) DEFAULT NULL,
  `SupervisingTeacherID2` int(11) NOT NULL,
  `GuidePoints2` float NOT NULL,
  `PointProcess2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registertopic`
--

INSERT INTO `registertopic` (`ID`, `Name`, `StudentID`, `ClassRoom`, `username`, `StudentName`, `GroupName`, `Process`, `TopicType`, `TopicName`, `TeacherID`, `TeacherName`, `Subject`, `Type`, `Status`, `GuidePoints`, `PointProcess`, `Commnet`, `Commentcounter`, `ThesisTopicID`, `SupervisingTeacherID`, `SupervisingTeacherID2`, `GuidePoints2`, `PointProcess2`) VALUES
(86, 'Xây dựng Phần mềm hay Website Quản Lý khoá luận tốt nghiệp và thực tập doanh nghiệp.', '26', 'DHHTTT15', '19444470', 'Nguyen Hoang Hoang', '89', 0, 'Khóa luận tốt nghiệp.', 'Xây dựng Phần mềm hay Website Quản Lý khoá luận tốt nghiệp và thực tập doanh nghiệp.', 11, 'Trần Thị Kim Chi', 'IS', 1, 1, 10, 2, NULL, NULL, 29, NULL, 0, 0, 0),
(87, 'Xây dựng Phần mềm hay Website Quản Lý khoá luận tốt nghiệp và thực tập doanh nghiệp.', '18', 'DHHTTT15', '19445522', 'Phạm Thị Thu Hien', '90', 0, 'Khóa luận tốt nghiệp.', 'Xây dựng Phần mềm hay Website Quản Lý khoá luận tốt nghiệp và thực tập doanh nghiệp.', 11, 'Trần Thị Kim Chi', 'IS', 1, 1, 3, 0, NULL, NULL, 29, NULL, 0, 0, 0),
(88, 'Tìm hiểu QR Code để truy xuất nguồn gốc và áp dụng xây dựng hệ thống phân phối nông sản sạch', '9', 'DHHTTT15', '', '', '91', 0, 'Khóa luận tốt nghiệp.', 'Tìm hiểu QR Code để truy xuất nguồn gốc và áp dụng xây dựng hệ thống phân phối nông sản sạch', 11, 'Trần Thị Kim Chi', 'IS', 1, 1, 0, 0, NULL, NULL, 32, NULL, 0, 0, 0),
(89, 'Tìm hiểu QR Code để truy xuất nguồn gốc và áp dụng xây dựng hệ thống phân phối nông sản sạch', '8', 'DHHTTT15', 'SinhVien2', 'Sinh Viên 2', '92', 0, 'Khóa luận tốt nghiệp.', 'Tìm hiểu QR Code để truy xuất nguồn gốc và áp dụng xây dựng hệ thống phân phối nông sản sạch', 11, 'Trần Thị Kim Chi', 'IS', 1, 1, 0, 0, NULL, NULL, 32, NULL, 0, 0, 0),
(90, 'Tìm hiểu QR Code để truy xuất nguồn gốc và áp dụng xây dựng hệ thống phân phối nông sản sạch', '14', 'DHHTTT15', '19441115', 'Phạm Thị Thu Hien', '93', 0, 'Khóa luận tốt nghiệp.', 'Tìm hiểu QR Code để truy xuất nguồn gốc và áp dụng xây dựng hệ thống phân phối nông sản sạch', 11, 'Trần Thị Kim Chi', 'IS', 1, 1, 0, 0, NULL, NULL, 32, NULL, 0, 0, 0),
(91, 'Tìm hiểu QR Code để truy xuất nguồn gốc và áp dụng xây dựng hệ thống phân phối nông sản sạch', '9', 'DHHTTT15', '', '', '94', 0, 'Khóa luận tốt nghiệp.', 'Tìm hiểu QR Code để truy xuất nguồn gốc và áp dụng xây dựng hệ thống phân phối nông sản sạch', 11, 'Trần Thị Kim Chi', 'IS', 1, 1, 0, 0, NULL, NULL, 32, NULL, 0, 0, 0),
(92, 'Tìm hiểu QR Code để truy xuất nguồn gốc và áp dụng xây dựng hệ thống phân phối nông sản sạch', '3', 'DHHTTT15', '19446151', 'Phạm Hồng Khang', '95', 0, 'Khóa luận tốt nghiệp.', 'Tìm hiểu QR Code để truy xuất nguồn gốc và áp dụng xây dựng hệ thống phân phối nông sản sạch', 11, 'Trần Thị Kim Chi', 'IS', 1, 1, 0, 0, NULL, NULL, 32, NULL, 0, 0, 0),
(93, 'Tìm hiểu QR Code để truy xuất nguồn gốc và áp dụng xây dựng hệ thống phân phối nông sản sạch', '4', 'DHHTTT15', '19443311', 'Ngô Thị Thúy Hằng', '96', 0, 'Khóa luận tốt nghiệp.', 'Tìm hiểu QR Code để truy xuất nguồn gốc và áp dụng xây dựng hệ thống phân phối nông sản sạch', 11, 'Trần Thị Kim Chi', 'IS', 1, 1, 0, 0, NULL, NULL, 32, NULL, 0, 0, 0),
(97, 'Xây dựng Phần mềm hay Website Quản Lý khoá luận tốt nghiệp và thực tập doanh nghiệp.', '27', 'DHHTTT15', 'ez', 'Dda', NULL, 0, 'Khóa luận tốt nghiệp.', 'Xây dựng Phần mềm hay Website Quản Lý khoá luận tốt nghiệp và thực tập doanh nghiệp.', 11, 'Trần Thị Kim Chi', 'IS', 1, 1, 3, 7.5, NULL, NULL, 29, NULL, 0, 0, 0),
(99, 'Tìm hiểu QR Code để truy xuất nguồn gốc và áp dụng xây dựng hệ thống phân phối nông sản sạch', '28', 'DHHTTT15', '19519011', 'DMT', NULL, 0, 'Khóa luận tốt nghiệp.', 'Tìm hiểu QR Code để truy xuất nguồn gốc và áp dụng xây dựng hệ thống phân phối nông sản sạch', 11, 'Trần Thị Kim Chi', 'IS', 1, 1, 0, 0, NULL, NULL, 32, NULL, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `ID` int(11) NOT NULL,
  `parentId` int(11) NOT NULL,
  `accessName` varchar(255) NOT NULL,
  `description` varchar(225) DEFAULT NULL,
  `GropID` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`ID`, `parentId`, `accessName`, `description`, `GropID`) VALUES
(1, 0, 'ADMIN', 'Quản trị viên Full quyền', 'ADMIN'),
(9, 6, 'SINH VIÊN', 'Sinh Viên', 'STUDENT'),
(11, 7, 'GIẢNG VIÊN', 'Giảng viên', 'TEACHER'),
(12, 8, 'TRƯỞNG BỘ MÔN', 'Trưởng bộ môn', 'HEADOFSECTION');

-- --------------------------------------------------------

--
-- Table structure for table `studentgroup`
--

CREATE TABLE `studentgroup` (
  `ID` int(11) NOT NULL,
  `ID1` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `FullName` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `ClassRoom` varchar(252) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `ThesisTopicID` int(11) NOT NULL,
  `TeacherID` int(11) NOT NULL,
  `TeacherName` varchar(255) NOT NULL,
  `SubGroupID` int(11) DEFAULT NULL,
  `registertopicID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentgroup`
--

INSERT INTO `studentgroup` (`ID`, `ID1`, `username`, `FullName`, `ClassRoom`, `ThesisTopicID`, `TeacherID`, `TeacherName`, `SubGroupID`, `registertopicID`) VALUES
(89, '26', '19444470', 'Nguyen Hoang Hoang', 'DHHTTT15', 29, 11, 'Trần Thị Kim Chi', 89, 86),
(90, '18', '19445522', 'Phạm Thị Thu Hien', 'DHHTTT15', 29, 11, 'Trần Thị Kim Chi', 90, 87),
(92, '8', 'SinhVien2', 'Sinh Viên 2', 'DHHTTT15', 32, 11, 'Trần Thị Kim Chi', 92, 89),
(93, '14', '19441115', 'Phạm Thị Thu Hien', 'DHHTTT15', 32, 11, 'Trần Thị Kim Chi', 93, 90),
(100, '27', 'ez', 'Dda', 'DHHTTT15', 29, 11, 'Trần Thị Kim Chi', 0, 97),
(102, '28', '19519011', 'DMT', 'DHHTTT15', 32, 11, 'Trần Thị Kim Chi', 0, 99);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `ID` int(11) NOT NULL,
  `Name` varchar(110) DEFAULT NULL,
  `Department` varchar(110) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `Subject` varchar(200) DEFAULT NULL,
  `MSGV` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`ID`, `Name`, `Department`, `UserID`, `Subject`, `MSGV`) VALUES
(1, 'Lê Thị Kim An', 'CÔNG NGHỆ THÔNG TIN', 1, 'Cơ sở dữ liệu, Lập trình C++', 'LTKN012312');

-- --------------------------------------------------------

--
-- Table structure for table `thesistopic`
--

CREATE TABLE `thesistopic` (
  `ID` int(11) NOT NULL,
  `Name` varchar(1000) DEFAULT NULL,
  `Instructors` varchar(200) DEFAULT NULL,
  `InstructorsID` int(11) DEFAULT NULL,
  `Subject` varchar(220) DEFAULT NULL,
  `SubjectID` int(11) DEFAULT NULL,
  `ThesisTopicType` varchar(220) DEFAULT NULL,
  `Description` varchar(1000) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Requirement` varchar(1000) NOT NULL,
  `SkillKnowledge` varchar(1000) NOT NULL,
  `ThesisTopicTypeID` int(11) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `SupervisingTeacher` varchar(220) DEFAULT NULL,
  `SupervisingTeacherID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `thesistopic`
--

INSERT INTO `thesistopic` (`ID`, `Name`, `Instructors`, `InstructorsID`, `Subject`, `SubjectID`, `ThesisTopicType`, `Description`, `Requirement`, `SkillKnowledge`, `ThesisTopicTypeID`, `Status`, `SupervisingTeacher`, `SupervisingTeacherID`) VALUES
(29, 'Xây dựng Phần mềm hay Website Quản Lý khoá luận tốt nghiệp và thực tập doanh nghiệp.', 'Trần Thị Kim Chi', 11, 'IS', 0, 'Đại học (KLTN)', 'Tìm hiểu các công nghệ mới hiện nay đang được sử dung trong việc xây dựng Website Xây dựng Phần mềm hay Website quản lý khoá luận tốt nghiệp và thực tập doanh nghiệp Áp dung công nghệ mới đã tìm hiểu vào Phần mềm hay Website đã xây dựng', 'Hoàn thành phần mềm hay Website theo yêu cầu đã mô tả', '- Khả năng giao tiếp, phỏng vần, thu thập dữ liệu.</br>\r\n- Kỹ năng phân tích hệ thống.</br>\r\n- Có kiến thức về lập trình web/di động.</br>\r\n- Kỹ năng phân tích dữ liệu và tổng hợp dữ liệu.\r\n- Kỹ năng viết báo cáo, thuyết trình, đọc và hiểu các tài liệu liên quan đề đề tài, kỹ năng làm việc nhóm.', 1, 1, NULL, NULL),
(32, 'Tìm hiểu QR Code để truy xuất nguồn gốc và áp dụng xây dựng hệ thống phân phối nông sản sạch', 'Trần Thị Kim Chi', 11, 'IS', 0, 'Đại học (KLTN)', 'Sinh viên tìm hiểu các chính sách, quy định, quy trình phân phói nông sản sạch thừ nông dân đến doanh nghiệp, sau đó từ doanh nghiệp/nông dân đến người tiêu dùng. Tìm hiểu các tiêu chí nào đánh giá được thế nào là một nông sản sạch. Xây dựng hệ thống phân phối nông sản sạch giúp doang nghiệp, nông dân và người tiêu dung có thể lien kết, trao đổi, mua bán nông sản sạch. Sinh viên tìm hiểu được QR Code, cách tạo và áp dụng mã QR để truy xuất nguồn gốc nông sản sạch vào hệ thống phân phối nông sản sạch mà sinh viên đã xây dựng Ngoài ra sinh viên có thể áp dung một số kỹ thuật bảo mật để tạo độ tin cậy cho người khi sử dung hệ thống mà sinh viên đã tạo', 'Xây dựng được hệ thống phân phối nông sản sạch có áp dung mã QR để truy xuất nguồn gốc', '- Sinh viên có khả năng nghiên cứu, đọc và hiểu được các tài liệu liên quan đến đề tài - Kỹ năng phân tích và thiết kế hệ thống, - Có kiến thức về lập trình. - Kỷ năng phân tích dữ liệu qua khảo sát để cập nhập ứng dụng đáp ứng yêu cầu người học - Hiểu và áp dụng được QR code vào ứng dụng đã xây dựng. - Kỹ năng viết báo cáo, làm việc nhóm, thuyết trình.', 1, 1, NULL, NULL),
(33, 'Nghiên cứu bảo mật áp dụng xây dựng website bán điện thoại di động', 'Võ Ngọc Tấn Phước', 10, 'Hệ thống thông tin', 0, 'Đại học (KLTN)', 'Tìm hiểu về bảo mật trong việc xây dựng website . \r\nGiải thích và áp dụng bảo mật vào website ', 'Hoàn thiện website với đầy đủ các chức năng và áp dụng bảo mật vào hệ thống', 'Khả năng giao tiếp tốt, phỏng vấn, thu thập dữ liệu\r\nKhả năng viết báo cáo tốt \r\nCó kiến thức tốt về các ngôn ngữ lập trình', 1, 1, NULL, NULL),
(35, 'Tìm hiểu QRCode, VNPay và xây dựng Website phòng khám đa khoa', 'Nguyễn Văn Nam', 6, 'Hệ thống thông tin', 0, 'Đại học (KLTN)', 'Tìm hiểu  đang được sử dung trong việc xây dựng  Website quản lý \r\n Áp dung công nghệ mới đã tìm hiểu vào Phần mềm hay Website đã xây dựng.', 'Hoàn thành phần mềm hay Website theo yêu cầu đã mô tả\r\nÁp dụng được các công nghệ mới', ' Kỹ năng phân tích hệ thống.\r\n- Có kiến thức về lập trình web/di động.\r\n- Kỹ năng phân tích dữ liệu và tổng hợp dữ liệu. - Kỹ năng viết báo cáo, thuyết trình, đọc và hiểu các tài liệu liên quan đề đề tài, kỹ năng làm việc nhóm.	', 1, 1, NULL, NULL),
(36, 'Xây dựng website quản lý chất lượng giáo dục theo chuẩn Abet', 'Nguyễn Văn Nam', 6, 'Hệ thống thông tin', 0, 'Đại học (KLTN)', 'Sinh viên có khả năng nghiên cứu, đọc, áp dụng xậy website quản lý chất lượng giáo dục theo chuẩn Abet\r\n ', 'Phân tích yêu cầu (hiện trạng, nghiệp vụ) và mô hình hóa được yêu cầu của đề tài.\r\nThiết kế một hệ thống thông tin/đưa ra giải pháp đáp ứng được yêu cầu của đề tài\r\nHiện thực hóa hệ thống thông tin theo thiết kế đã đưa ra/Hiện thực giải pháp đã đưa ra', 'Kỹ năng phân tích và thiết kế hệ thống\r\nCó kiến thức về lập trình\r\nKỷ năng phân tích dữ liệu qua khảo sát để cập nhập ứng dụng đáp ứng yêu cầu người học\r\nHiểu và áp dụng được QR code vào ứng dụng đã xây dựng\r\nKỹ năng viết báo cáo, làm việc nhóm, thuyết trình.', 1, 1, NULL, NULL),
(37, 'Tìm hiểu QR Code để truy xuất nguồn gốc và áp dụng xây dựng hệ thống phân phối nông sản sạch', 'Võ Ngọc Tấn Phước', 10, 'IS', 0, 'Đại học (KLTN)', 'Tìm hiểu QR Code để truy xuất nguồn gốc và áp dụng xây dựng hệ thống phân phối nông sản sạch', 'Tìm hiểu QR Code để truy xuất nguồn gốc và áp dụng xây dựng hệ thống phân phối nông sản sạch', 'Tìm hiểu QR Code để truy xuất nguồn gốc và áp dụng xây dựng hệ thống phân phối nông sản sạch', 1, 1, NULL, NULL),
(38, 'Tìm hiểu công nghệ mới và xây dựng website bán giày', 'Nguyễn Ngọc Dung', 13, 'IS', 0, 'Đại học (KLTN)', 'Tìm hiểu công nghệ mới và xây dựng website bán giày', 'Áp dụng các ngôn ngữ lập trình đã học: PHP, JS, HTML', 'PHP,JS,HTML', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(5) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `access` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `StudentID` varchar(50) DEFAULT NULL,
  `Department` varchar(50) DEFAULT NULL,
  `Subject` varchar(100) DEFAULT NULL,
  `MSGVMSGV` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `fullname`, `username`, `password`, `email`, `gender`, `address`, `phone`, `img`, `access`, `status`, `StudentID`, `Department`, `Subject`, `MSGVMSGV`) VALUES
(1, 'ADMIN', 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'admin@gmail.com1', 'Nam', 'IUH, Phường 4, Gò Vấp, Thành phố Hồ Chí Minh', '0123456789', '', 0, 1, '', '', '', ''),
(2, 'Lê Thị Kim An', 'GiaoVien1', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'giaovien1@gmail.com', 'Nữ', 'IUH, Phường 4, Gò Vấp, Thành phố Hồ Chí Minh', '0123456789', '', 7, 1, '', '', '', ''),
(3, 'Phạm Hồng Khang', '19446151', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'khang@gmail.com', 'Nam', 'IUH, Phường 4, Gò Vấp, Thành phố Hồ Chí Minh', '0123456789', '', 6, 1, '', '', '', ''),
(4, 'Ngô Thị Thúy Hằng', '19443311', '908f704ccaadfd86a74407d234c7bde30f2744fe', 'hang@gmail.com', 'Nữ', 'IUH, Phường 4, Gò Vấp, Thành phố Hồ Chí Minh', '0123456789', '', 6, 1, '', '', '', ''),
(5, 'Nguyễn Văn An', 'GiaoVien2', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'an@gmail.com', 'Nam', 'IUH, Phường 4, Gò Vấp, Thành phố Hồ Chí Minh', '0123456789', '', 7, 1, '', '', '', ''),
(6, 'Nguyễn Văn Nam', 'TruongBoMon', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'nam@gmail.com', 'Nam', 'IUH, Phường 4, Gò Vấp, Thành phố Hồ Chí Minh', '0123456789', '', 8, 1, '', '', '', ''),
(7, 'Sinh Viên 1', 'SinhVien1', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'sinhvien1@gmail.com', 'Nữ', 'IUH, Phường 4, Gò Vấp, Thành phố Hồ Chí Minh', '0123456789', '', 6, 1, '', '', '', ''),
(8, 'Sinh Viên 2', 'SinhVien2', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'sinhvien2@gmail.com', 'Nam', 'IUH, Phường 4, Gò Vấp, Thành phố Hồ Chí Minh', '0123456789', '', 6, 1, '', '', '', ''),
(9, 'Sinh Viên 3', 'SinhVien3', '123456', 'sinhvien3@gmail.com', 'Nam', 'IUH, Phường 4, Gò Vấp, Thành phố Hồ Chí Minh', '0123456789', '', 6, 0, '', '', '', ''),
(10, 'Võ Ngọc Tấn Phước', 'vongoctanphuoc', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'abc@gmail.com', 'Nam', 'IUH, phường 4, quận Gò Vấp, thành phố Hồ Chí Minh', '0123456789', '', 7, 1, '', '', '', ''),
(11, 'Trần Thị Kim Chi', 'tranthikimchi', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'abc123@gmail.com', 'Nữ', 'IUH, phường 4, quận Gò Vấp, thành phố Hồ Chí Minh', '0123456789', '', 7, 1, '', '', '', ''),
(13, 'Nguyễn Ngọc Dung', 'nguyenngocdung', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'abc123@gmail.com', 'Nữ', 'IUH, phường 4, quận Gò Vấp, thành phố Hồ Chí Minh', '0123456789', '', 7, 1, '', '', '', ''),
(14, 'Phạm Thị Thu Hien', '19441115', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'thuhien@gmail.com', 'Nữ', '3 Lê Lợi', '0667799412', '', 6, 1, '', '', '', ''),
(16, 'Dương Cẩm Tú', '19442211', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'tu@gmail.com', 'Nữ', '3 Lê Lợi', '0987545321', '', 6, 1, '', '', '', ''),
(18, 'Phạm Thị Thu Hien', '19445522', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'hien@gmail.com', 'Nữ', '3 Lê Lợi', '0987654321', '', 6, 1, '', '', '', ''),
(20, 'Võ Ngọc Tấn Phước', 'vongoctanphuoc', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'abc123@gmail.com', 'Nữ', 'IUH, phường 4, quận Gò Vấp, thành phố Hồ Chí Minh', '0123456789', NULL, 0, 1, NULL, NULL, NULL, NULL),
(22, 'Hoàng Nguyễn', '19444471', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'tienhoangxx08@gmail.com', 'Nam', '12 Nguyễn Văn Bảo', '0396036579', NULL, 0, 1, NULL, NULL, NULL, NULL),
(25, 'Nguyễn Tiến Hoàng', '19444471', '123456', 'hoang@gmail.com', 'Nam', 'Gia Lai', '0396036579', 'hoang', 165, 654, '19444471', 'sdfas', 'sdf', 'sdfsad'),
(26, 'Nguyen Hoang Hoang', '19444470', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'tienhoangxx08@gmail.com', 'Nam', 'Xã Ianhin', '0396036579', NULL, 6, 1, NULL, NULL, NULL, NULL),
(27, 'Dda', 'ez', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'ez@gmail.com', 'Nam', '12 Nguyễn Văn Bảo', '1232412312312', NULL, 6, 1, NULL, NULL, NULL, NULL),
(28, 'DMT', '19519011', '7c4a8d09ca3762af61e59520943dc26494f8941b', '19519011@gmail.com', 'Nam', '123123123123123123', '097123123123', NULL, 6, 1, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`stt`);

--
-- Indexes for table `evaluation_student`
--
ALTER TABLE `evaluation_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `studentId_user` (`StudentID`),
  ADD KEY `ThesisTopicID_thesistopic` (`ThesisTopicID`),
  ADD KEY `evaluation_registertopic` (`registertopicID`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pointl`
--
ALTER TABLE `pointl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pointL_user` (`userId`),
  ADD KEY `pointL_registertopic` (`registertopicId`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`ID`);
ALTER TABLE `post` ADD FULLTEXT KEY `title` (`title`,`detail`);

--
-- Indexes for table `registertopic`
--
ALTER TABLE `registertopic`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `studentgroup`
--
ALTER TABLE `studentgroup`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `studentgroup_registertopic` (`registertopicID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `thesistopic`
--
ALTER TABLE `thesistopic`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `evaluation_student`
--
ALTER TABLE `evaluation_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pointl`
--
ALTER TABLE `pointl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registertopic`
--
ALTER TABLE `registertopic`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `studentgroup`
--
ALTER TABLE `studentgroup`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `thesistopic`
--
ALTER TABLE `thesistopic`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `evaluation_student`
--
ALTER TABLE `evaluation_student`
  ADD CONSTRAINT `ThesisTopicID_thesistopic` FOREIGN KEY (`ThesisTopicID`) REFERENCES `thesistopic` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `evaluation_registertopic` FOREIGN KEY (`registertopicID`) REFERENCES `registertopic` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `pointl`
--
ALTER TABLE `pointl`
  ADD CONSTRAINT `pointL_registertopic` FOREIGN KEY (`registertopicId`) REFERENCES `registertopic` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `pointL_user` FOREIGN KEY (`userId`) REFERENCES `user` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `studentgroup`
--
ALTER TABLE `studentgroup`
  ADD CONSTRAINT `studentgroup_registertopic` FOREIGN KEY (`registertopicID`) REFERENCES `registertopic` (`ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
