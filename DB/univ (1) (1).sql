-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 12:39 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

--
-- Dumping data for table `sec1`
--

INSERT INTO `sec1` (`id`, `name_lect`, `subject`, `groupp`, `Dayy`, `timee`, `section`, `class`) VALUES
(54, 'وحيد', 'اساسيات البرمجة', '1', 'sunday', '2_4', '4', 'L1d'),
(55, 'وحيد', 'اساسيات البرمجة', '1', 'wednesday', '2_4', '2', 'L1d'),
(56, 'وحيد', 'اساسيات البرمجة', '1', 'wednesday', '2_4', '7', 'L1d'),
(57, 'حمدي', 'اساسيات البرمجة', '1', 'monday', '3_5', '1', 'L1e'),
(58, 'حمدي', 'اساسيات البرمجة', '1', 'wednesday', '3_5', '2', 'L1c'),
(59, 'حمدي', 'اساسيات البرمجة', '1', 'wednesday', '3_5', '6', 'L1c'),
(60, 'حمدي', 'اساسيات البرمجة', '1', 'thursday', '3_5', '5', 'L1c');

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

--
-- Dumping data for table `sec2`
--

INSERT INTO `sec2` (`id`, `name_lect`, `subject`, `groupp`, `Dayy`, `timee`, `section`, `class`) VALUES
(6, 'خديجة', 'هياكل البيانات والخوارزميات', '2', 'sunday', '8_10', '1', 'L1b'),
(7, 'خديجة', 'هياكل البيانات والخوارزميات', '2', 'sunday', '8_10', '2', 'L1b'),
(8, 'خديجة', 'هياكل البيانات والخوارزميات', '2', 'tuesday', '8_10', '3', 'L1c'),
(9, 'نجلاء', 'تحليل وتصميم النظم', '2', 'sunday', '10_12', '1', 'L2b'),
(10, 'نجلاء', 'تحليل وتصميم النظم', '2', 'sunday', '10_12', '2', 'L2b'),
(11, 'نجلاء', 'تحليل وتصميم النظم', '2', 'monday', '10_12', '3', 'L2b'),
(12, 'نجلاء', 'تحليل وتصميم النظم', '2', 'monday', '10_12', '4', 'L2b'),
(13, 'نجلاء', 'تحليل وتصميم النظم', '2', 'sunday', '10_12', '5', 'L2b'),
(14, 'مروان', 'قواعد البيانات', '2', 'sunday', '2_4', '1', 'L2e'),
(15, 'مروان', 'قواعد البيانات', '2', 'monday', '2_4', '2', 'L2e'),
(16, 'مروان', 'قواعد البيانات', '2', 'monday', '2_4', '3', 'L2e'),
(17, 'ياسر', 'معماريات الحاسب', '2', 'sunday', '10_12', '7', 'Lm9'),
(18, 'ياسر', 'معماريات الحاسب', '2', 'monday', '10_12', '4', 'Lm9'),
(19, 'نشأت', 'معماريات الحاسب', '2', 'tuesday', '8_10', '5', 'Lm7'),
(20, 'نشأت', 'معماريات الحاسب', '2', 'tuesday', '8_10', '6', 'Lm7'),
(21, 'نشأت', 'معماريات الحاسب', '2', 'tuesday', '8_10', '1', 'Lm7'),
(22, 'نشأت', 'معماريات الحاسب', '2', 'tuesday', '8_10', '2', 'Lm7'),
(23, 'فولي', 'قواعد البيانات', '2', 'monday', '9_11', '4', 'L2c'),
(24, 'فولي', 'قواعد البيانات', '2', 'monday', '9_11', '5', 'L2c'),
(25, 'ابراهيم', 'هياكل البيانات والخوارزميات', '2', 'monday', '9_11', '6', 'L0d'),
(26, 'ابراهيم', 'هياكل البيانات والخوارزميات', '2', 'monday', '9_11', '7', 'L0d'),
(27, 'ابراهيم', 'هياكل البيانات والخوارزميات', '2', 'tuesday', '9_11', '4', 'L0d'),
(28, 'جهاد', 'قواعد البيانات', '2', 'monday', '9_11', '7', 'L1d'),
(29, 'غادة', 'تحليل وتصميم النظم', '2', 'monday', '8_10', '7', 'L1e'),
(30, 'غادة', 'تحليل وتصميم النظم', '2', 'monday', '8_10', '6', 'L1b'),
(31, 'Mathay3', 'رياضيات3', '2', 'monday', '4_6', '1', 'Lm1'),
(32, 'Mathay3', 'رياضيات3', '2', 'monday', '4_6', '2', 'Lm2'),
(33, 'Mathay3', 'رياضيات3', '2', 'monday', '4_6', '3', 'Lm3'),
(34, 'Mathay3', 'رياضيات3', '2', 'monday', '4_6', '4', 'Lm4'),
(35, 'Mathay3', 'رياضيات3', '2', 'monday', '4_6', '5', 'Lm5'),
(36, 'Mathay3', 'رياضيات3', '2', 'monday', '4_6', '6', 'Lm6'),
(37, 'Mathay3', 'رياضيات3', '2', 'monday', '4_6', '7', 'Lm6'),
(38, 'احصائي', 'احتمال واحصاء', '2', 'wednesday', '12_2', '3', 'Lm9'),
(39, 'احصائي', 'احتمال واحصاء', '2', 'wednesday', '12_2', '4', 'Lm9'),
(40, 'احصائي', 'احتمال واحصاء', '2', 'wednesday', '12_2', '5', 'Lm9'),
(41, 'احصائي', 'احتمال واحصاء', '2', 'wednesday', '12_2', '6', 'Lm9'),
(42, 'احصائي', 'احتمال واحصاء', '2', 'wednesday', '12_2', '7', 'Lm9'),
(43, 'احصائي', 'احتمال واحصاء', '2', 'thursday', '9_11', '1', 'Lm6'),
(44, 'احصائي', 'احتمال واحصاء', '2', 'thursday', '9_11', '2', 'Lm6');

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

--
-- Dumping data for table `sec3`
--

INSERT INTO `sec3` (`id`, `name_lect`, `subject`, `groupp`, `Dayy`, `timee`, `section`, `class`) VALUES
(5, 'عصام', 'رؤية بالحاسب', '3', 'sunday', '8_10', '1', 'L4a'),
(6, 'عصام', 'رؤية بالحاسب', '3', 'sunday', '8_10', '2', 'L2b'),
(7, 'عصام', 'رؤية بالحاسب', '3', 'sunday', '8_10', '3', 'L4a'),
(8, 'سارة', 'معالجة الصور', '3', 'sunday', '8_10', '5', 'L4b'),
(9, 'سارة', 'معالجة الصور', '3', 'sunday', '8_10', '2', 'L4b'),
(10, 'سارة', 'معالجة الصور', '3', 'sunday', '8_10', '1', 'L4b'),
(11, 'سارة', 'معالجة الصور', '3', 'monday', '8_10', '4', 'L4b'),
(12, 'سارة', 'معالجة الصور', '3', 'monday', '8_10', '3', 'L4b'),
(13, 'يوسف', 'نظم تشغيل', '3', 'sunday', '8_10', '4', 'L4e'),
(14, 'يوسف', 'نظم تشغيل', '3', 'sunday', '8_10', '3', 'L4e'),
(15, 'يوسف', 'نظم تشغيل', '3', 'sunday', '8_10', '5', 'L4e'),
(16, 'يوسف', 'نظم تشغيل', '3', 'sunday', '8_10', '1', 'L4e'),
(17, 'يوسف', 'نظم تشغيل', '3', 'sunday', '8_10', '2', 'L4e'),
(18, 'ابراهيم', 'نظم تشغيل', '3', 'tuesday', '12_2', '6', 'L4d'),
(19, 'ابراهيم', 'نظم تشغيل', '3', 'tuesday', '12_2', '8', 'L4d'),
(20, 'ابراهيم', 'نظم تشغيل', '3', 'tuesday', '12_2', '7', 'L4d'),
(21, 'امل', 'ذكاء اصطناعي', '3', 'sunday', '12_2', '3', 'L4d'),
(22, 'امل', 'ذكاء اصطناعي', '3', 'tuesday', '12_2', '1', 'L1e'),
(23, 'امل', 'ذكاء اصطناعي', '3', 'wednesday', '12_2', '2', 'L1e'),
(24, 'بركات', 'تطوير', '3', 'sunday', '12_2', '4', 'L1b'),
(25, 'بركات', 'تطوير', '3', 'wednesday', '12_2', '6', 'L4d'),
(26, 'بركات', 'تطوير', '3', 'wednesday', '12_2', '7', 'L4d'),
(27, 'بركات', 'تطوير', '3', 'wednesday', '12_2', '8', 'L4d'),
(28, 'ايه', 'تطوير', '3', 'tuesday', '12_2', '5', 'L3d'),
(29, 'ايه', 'تطوير', '3', 'wednesday', '12_2', '2', 'L4b'),
(30, 'ايه', 'تطوير', '3', 'wednesday', '12_2', '3', 'L4b'),
(31, 'وليد', 'استراتيجية', '3', 'sunday', '12_2', '6', 'L3d'),
(32, 'وليد', 'استراتيجية', '3', 'sunday', '12_2', '7', 'L3d'),
(33, 'وليد', 'استراتيجية', '3', 'sunday', '12_2', '8', 'L3d'),
(34, 'قطب', 'نظم جغرافية', '3', 'sunday', '2_4', '6', 'L4c'),
(35, 'قطب', 'نظم جغرافية', '3', 'sunday', '2_4', '7', 'L4c'),
(36, 'قطب', 'نظم جغرافية', '3', 'thursday', '2_4', '8', 'L4c'),
(37, 'الاء', 'النمذجة والحركة', '3', 'sunday', '4_6', '4', 'L4a'),
(38, 'عبدالستار', 'امن الشبكات', '3', 'tuesday', '10_12', '5', 'L3d'),
(39, 'وليد', 'نظم دعم', '3', 'tuesday', '10_12', '8', 'L4a'),
(40, 'وليد', 'نظم دعم', '3', 'tuesday', '10_12', '6', 'L2d'),
(41, 'نورهان', 'الفيديو الرقمي', '3', 'tuesday', '2_4', '4', 'L0d'),
(42, 'وحيد', 'برمجة عنكبوتية', '3', 'tuesday', '2_4', '5', 'L3a'),
(43, 'وحيد', 'برمجة عنكبوتية', '3', 'tuesday', '2_4', '6', 'L3a'),
(44, 'القاضي', 'برمجة عنكبوتية', '3', 'tuesday', '2_4', '7', 'L3d'),
(45, 'القاضي', 'برمجة عنكبوتية', '3', 'tuesday', '2_4', '8', 'L3d'),
(46, 'حسني', 'تحليل الخوارزميات', '3', 'wednesday', '8_10', '1', 'L4e'),
(47, 'حسني', 'تحليل الخوارزميات', '3', 'wednesday', '8_10', '2', 'L4e'),
(48, 'اسعد', 'ادارة شبكات', '3', 'thursday', '8_10', '5', 'L3e');

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

--
-- Dumping data for table `sec4`
--

INSERT INTO `sec4` (`id`, `name_lect`, `subject`, `groupp`, `Dayy`, `timee`, `section`, `class`) VALUES
(1, 'سها', 'قواعد موزعة', '4', 'sunday', '8_10', '1', 'L2c'),
(2, 'سها', 'قواعد موزعة', '4', 'tuesday', '8_10', '4', 'L4b'),
(3, 'سها', 'قواعد موزعة', '4', 'tuesday', '8_10', '10', 'L4b'),
(4, 'سها', 'قواعد موزعة', '4', 'tuesday', '8_10', '11', 'L4b'),
(5, 'سها', 'قواعد موزعة', '4', 'wednesday', '8_10', '3', 'L2a'),
(6, 'حسن', 'قواعد موزعة', '4', 'sunday', '12_2', '7', 'L2d'),
(7, 'حسن', 'قواعد موزعة', '4', 'sunday', '12_2', '8', 'L2d'),
(8, 'حسن', 'قواعد موزعة', '4', 'monday', '12_2', '6', 'L2d'),
(9, 'حسن', 'قواعد موزعة', '4', 'monday', '12_2', '9', 'L2d'),
(10, 'رشا', 'مقدمة امن', '4', 'sunday', '8_10', '2', 'L1c'),
(11, 'رشا', 'مقدمة امن', '4', 'monday', '8_10', '5', 'L1b'),
(12, 'رشا', 'مقدمة امن', '4', 'sunday', '8_10', '1', 'L1c'),
(13, 'فاطمة', 'الحوسبة اللاسلكية', '4', 'sunday', '8_10', '3', 'L3c'),
(14, 'فاطمة', 'الحوسبة اللاسلكية', '4', 'sunday', '8_10', '4', 'L3c'),
(15, 'عبدالستار', 'ضمان المعلومات', '4', 'sunday', '8_10', '6', 'L3b'),
(16, 'عبدالستار', 'ضمان المعلومات', '4', 'sunday', '8_10', '7', 'L3b'),
(17, 'عبدالستار', 'ضمان المعلومات', '4', 'monday', '8_10', '11', 'L3b'),
(18, 'عبدالستار', 'ضمان المعلومات', '4', 'monday', '8_10', '10', 'L3b'),
(19, 'عبدالستار', 'ضمان المعلومات', '4', 'monday', '8_10', '9', 'L3b'),
(20, 'صلاح', 'نظم اجتماعية', '4', 'sunday', '8_10', '6', 'L4b'),
(21, 'صلاح', 'نظم اجتماعية', '4', 'sunday', '8_10', '8', 'L4b'),
(22, 'صلاح', 'نظم اجتماعية', '4', 'thursday', '8_10', '11', 'L4d'),
(23, 'صلاح', 'نظم اجتماعية', '4', 'thursday', '8_10', '10', 'L4d'),
(24, 'صلاح', 'نظم اجتماعية', '4', 'thursday', '8_10', '9', 'L4d'),
(25, 'مينا', 'تطوير تطبيقات', '4', 'thursday', '8_10', '11', 'L2b'),
(26, 'مينا', 'تطوير تطبيقات', '4', 'thursday', '8_10', '8', 'L2b'),
(27, 'مينا', 'تطوير تطبيقات', '4', 'thursday', '8_10', '7', 'L2b'),
(28, 'مينا', 'تطوير تطبيقات', '4', 'thursday', '8_10', '6', 'L2b'),
(29, 'حسني', 'الحسابات المتوازية', '4', 'sunday', '10_12', '1', 'L3c'),
(30, 'حسني', 'الحسابات المتوازية', '4', 'sunday', '10_12', '2', 'L3c'),
(31, 'الاء', 'الصوت الرقمي', '4', 'sunday', '12_2', '5', 'L4a'),
(32, 'مروة', 'برمجة العاب', '4', 'sunday', '2_4', '5', 'L4d'),
(33, 'عصام', 'رؤية بالحاسب', '4', 'sunday', '4_6', '4', 'L1e'),
(34, 'عصام', 'رؤية بالحاسب', '4', 'monday', '4_6', '3', 'L4a'),
(35, 'فاروق', 'التجارة الالكترونية', '4', 'monday', '8_10', '3', 'L3a'),
(36, 'فاروق', 'التجارة الالكترونية', '4', 'monday', '8_10', '4', 'L3a'),
(37, 'فاروق', 'التجارة الالكترونية', '4', 'monday', '8_10', '10', 'L3a'),
(38, 'اسعد', 'التجارة الالكترونية', '4', 'thursday', '10_12', '9', 'L3d'),
(39, 'اسعد', 'التجارة الالكترونية', '4', 'thursday', '10_12', '11', 'L3d'),
(40, 'اسعد', 'التجارة الالكترونية', '4', 'thursday', '10_12', '8', 'L3d'),
(41, 'اسعد', 'التجارة الالكترونية', '4', 'thursday', '10_12', '7', 'L3d'),
(42, 'يمني', 'برمجة شبكات', '4', 'tuesday', '8_10', '2', 'L3e'),
(43, 'يمني', 'برمجة شبكات', '4', 'tuesday', '8_10', '1', 'L3e'),
(44, 'يمني', 'برمجة شبكات', '4', 'tuesday', '8_10', '3', 'L3e'),
(45, 'يمني', 'برمجة شبكات', '4', 'wednesday', '8_10', '4', 'L3e'),
(46, 'نورهان', 'تصوير ثلاثي', '4', 'tuesday', '4_6', '5', 'L4c'),
(47, 'بركات', 'نظم ذكية', '4', 'thursday', '12_2', '1', 'L4b'),
(48, 'بركات', 'نظم ذكية', '4', 'thursday', '12_2', '2', 'L4b');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `sec2`
--
ALTER TABLE `sec2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `sec3`
--
ALTER TABLE `sec3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `sec4`
--
ALTER TABLE `sec4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `userr`
--
ALTER TABLE `userr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
