-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 06:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `univ`
--

-- --------------------------------------------------------

--
-- Table structure for table `lect1`
--

CREATE TABLE `lect1` (
  `id` int(11) NOT NULL,
  `name_doc` varchar(256) NOT NULL,
  `groupss` varchar(256) NOT NULL,
  `subject` varchar(256) NOT NULL,
  `subject_hours` int(11) NOT NULL,
  `day` varchar(256) NOT NULL,
  `timee` varchar(256) NOT NULL,
  `modarg` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lect1`
--

INSERT INTO `lect1` (`id`, `name_doc`, `groupss`, `subject`, `subject_hours`, `day`, `timee`, `modarg`) VALUES
(49, 'محمد سليمان', '1', 'السياق الاجتماعي', 1, 'Sunday', '10_11', '2'),
(53, 'لبني شداد', '1', 'انجلش 2', 2, 'Sunday', '12_2', '4'),
(54, 'اسامة السيد', '1', 'الدوائر الرقمية', 2, 'Monday', '10_12', '1'),
(55, 'محمد العسيلي', '1', 'فيزياء 2', 2, 'Tuesday', '10_12', '6'),
(56, 'سليمان السيد ', '1', 'اقتصاديات حوسبة', 2, 'Tuesday', '12_2', '1'),
(57, 'مديحة', '1', 'رياضيات2', 2, 'Wednesday', '8_10', '1'),
(58, 'خالد', '1', 'اساسيات البرمجة', 2, 'Thursday', '8_10', '2'),
(59, 'حنان موسي', '1', 'التواصل الشخصي', 2, 'Thursday', '10_12', '5');

-- --------------------------------------------------------

--
-- Table structure for table `lect2`
--

CREATE TABLE `lect2` (
  `id` int(11) NOT NULL,
  `name_doc` varchar(256) NOT NULL,
  `subject` varchar(256) NOT NULL,
  `subject_hours` int(11) NOT NULL,
  `groupss` varchar(256) NOT NULL,
  `day` varchar(256) NOT NULL,
  `timee` varchar(256) NOT NULL,
  `modarg` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lect2`
--

INSERT INTO `lect2` (`id`, `name_doc`, `subject`, `subject_hours`, `groupss`, `day`, `timee`, `modarg`) VALUES
(22, 'مرغني حسن', 'هياكل بيانات', 2, '2', 'Sunday', '12_2', '2'),
(23, 'عمرو رجب', 'الحاسبات و الاخلاقيات', 1, '2', 'Monday', '11_12', '4'),
(24, 'اسامة راشد', 'رياضيات 3', 2, '2', 'Tuesday', '10_12', '1'),
(26, 'عمرو عبد العزيز', 'تحليل و تصميم النظم', 2, '2', 'Wednesday', '8_10', '5'),
(27, 'تيسير', 'مفاهيم قواعد بيانات', 2, '2', 'Wednesday', '10_12', '5'),
(28, 'مصطفي مكي', 'معماريات الحاسب', 2, '2', 'Wednesday', '4_6', '5'),
(29, 'عبد الباسط', 'احتمالات و احصاء', 2, '2', 'Thursday', '11_1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `lect3`
--

CREATE TABLE `lect3` (
  `id` int(11) NOT NULL,
  `name_doc` varchar(256) NOT NULL,
  `groupss` varchar(265) NOT NULL,
  `subject` varchar(265) NOT NULL,
  `subject_hours` int(11) NOT NULL,
  `day` varchar(265) NOT NULL,
  `timee` varchar(265) NOT NULL,
  `modarg` varchar(265) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lect3`
--

INSERT INTO `lect3` (`id`, `name_doc`, `groupss`, `subject`, `subject_hours`, `day`, `timee`, `modarg`) VALUES
(12, 'اسلام تاج الدين', '3is', 'استراتجية', 2, 'Sunday', '8_10', '6'),
(13, 'نجوي', '3is', 'ويب1', 2, 'Sunday', '10_12', '5'),
(14, 'خالد', '3', 'نظم تشغيل', 2, 'Monday', '10_12', '2'),
(15, 'مصطفي ابو بكر', '3', 'تطوير البرمجيات', 2, 'Wednesday', '2_4', '2'),
(16, 'مصطفي علي', '3is', 'نظم دعم القرار', 2, 'Thursday', '8_10', '4'),
(17, 'ساره صلاح', '3is', 'نظم معلومات جغرافية', 2, 'Thursday', '1_3', '2'),
(18, 'مصطفي درويش', '3it-cs-mm', 'معالجة صور', 2, 'Monday', '8_10', '2'),
(19, 'مرغني حسن', '3cs', 'ذكاء اصطناعي', 2, 'Monday', '12_2', '1'),
(20, 'خالد', '3cs', 'رؤية بالحاسب', 2, 'Tuesday', '10_12', '2'),
(21, 'احمد نبيل', '3mm', 'مقدمة في الفديو', 2, 'Tuesday', '10_12', '4'),
(22, 'احمد نبيل', '3mm', 'حركة ثلاثة الابعاد', 2, 'Thursday', '10_12', '4');

-- --------------------------------------------------------

--
-- Table structure for table `lect4`
--

CREATE TABLE `lect4` (
  `id` int(11) NOT NULL,
  `name_doc` varchar(265) NOT NULL,
  `groupss` varchar(265) NOT NULL,
  `subject` varchar(265) NOT NULL,
  `subject_hours` int(11) NOT NULL,
  `day` varchar(265) NOT NULL,
  `timee` varchar(265) NOT NULL,
  `modarg` varchar(265) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lect4`
--

INSERT INTO `lect4` (`id`, `name_doc`, `groupss`, `subject`, `subject_hours`, `day`, `timee`, `modarg`) VALUES
(9, 'اسلام تاج الدين', '4is', 'تجارة الاكترونية', 2, 'Sunday', '10_12', '1'),
(10, 'تيسير', '4is', 'تطوير تطبيقات', 2, 'Monday', '8_10', '5'),
(11, 'طارق محمد', '4is', 'ضميان معلومات و حمايتها', 2, 'Tuesday', '8_10', '1'),
(12, 'ابراهيم العوضي', '4is', 'نظم معلومات اجتماعية', 2, 'Wednesday', '8_10', '9'),
(13, 'عمرو عبد العزيز', '4is-it-cs', 'قواعد بيانات شيئية', 2, 'Wednesday', '10_12', '2'),
(14, 'احمد نبيل', '4mm', 'صوت الرقمي', 2, 'Sunday', '10_12', '4'),
(15, 'داليا نشأت', '4it', 'حوسبة الاسليكة', 2, 'Sunday', '12_2', '1'),
(16, 'طارق محمد', '4is-cs', 'برمجة شبكات', 2, 'Wednesday', '8_10', '3'),
(17, 'مرغني حسن', '4cs', 'نظم ذكية', 2, 'Thursday', '10_12', '2'),
(18, 'مرغني حسن', '4cs-mm', 'امن الحاسب', 2, 'Thursday', '8_10', '8'),
(19, 'احمد نبيل', '4mm', 'تصوير ثلاثي الابعاد', 2, 'Thursday', '12_2', '4');

-- --------------------------------------------------------

--
-- Table structure for table `sec1`
--

CREATE TABLE `sec1` (
  `id` int(11) NOT NULL,
  `name_lect` varchar(256) NOT NULL,
  `subject` varchar(256) NOT NULL,
  `groupp` varchar(256) NOT NULL,
  `Dayy` varchar(256) NOT NULL,
  `timee` varchar(256) NOT NULL,
  `section` varchar(255) NOT NULL,
  `class` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sec2`
--

CREATE TABLE `sec2` (
  `id` int(11) NOT NULL,
  `name_lect` varchar(256) NOT NULL,
  `subject` varchar(256) NOT NULL,
  `groupp` varchar(256) NOT NULL,
  `Dayy` varchar(256) NOT NULL,
  `timee` varchar(256) NOT NULL,
  `section` varchar(255) NOT NULL,
  `class` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sec3`
--

CREATE TABLE `sec3` (
  `id` int(11) NOT NULL,
  `name_lect` varchar(256) NOT NULL,
  `subject` varchar(256) NOT NULL,
  `groupp` varchar(256) NOT NULL,
  `Dayy` varchar(256) NOT NULL,
  `timee` varchar(256) NOT NULL,
  `section` varchar(255) NOT NULL,
  `class` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sec4`
--

CREATE TABLE `sec4` (
  `id` int(11) NOT NULL,
  `name_lect` varchar(256) NOT NULL,
  `subject` varchar(256) NOT NULL,
  `groupp` varchar(256) NOT NULL,
  `Dayy` varchar(256) NOT NULL,
  `timee` varchar(256) NOT NULL,
  `section` varchar(255) NOT NULL,
  `class` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userr`
--

CREATE TABLE `userr` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `passwordd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userr`
--

INSERT INTO `userr` (`id`, `username`, `passwordd`) VALUES
(1, 'admin', '33r');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lect1`
--
ALTER TABLE `lect1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lect2`
--
ALTER TABLE `lect2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lect3`
--
ALTER TABLE `lect3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lect4`
--
ALTER TABLE `lect4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sec1`
--
ALTER TABLE `sec1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sec2`
--
ALTER TABLE `sec2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sec3`
--
ALTER TABLE `sec3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sec4`
--
ALTER TABLE `sec4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userr`
--
ALTER TABLE `userr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lect1`
--
ALTER TABLE `lect1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `lect2`
--
ALTER TABLE `lect2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `lect3`
--
ALTER TABLE `lect3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `lect4`
--
ALTER TABLE `lect4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sec1`
--
ALTER TABLE `sec1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `sec2`
--
ALTER TABLE `sec2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sec3`
--
ALTER TABLE `sec3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sec4`
--
ALTER TABLE `sec4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userr`
--
ALTER TABLE `userr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
