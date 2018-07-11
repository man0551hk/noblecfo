-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: 123.1.183.120
-- Generation Time: Jul 11, 2018 at 11:55 AM
-- Server version: 5.5.38
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sq_noble`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminID` int(99) NOT NULL AUTO_INCREMENT,
  `loginID` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `loginID`, `password`) VALUES
(1, 'nobleadmin', 'kk12345678');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `courseID` int(11) NOT NULL AUTO_INCREMENT,
  `courseName` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `address` text COLLATE utf8_unicode_ci,
  `fee` text COLLATE utf8_unicode_ci,
  `requirement` text COLLATE utf8_unicode_ci,
  `material` text COLLATE utf8_unicode_ci,
  `display` int(2) DEFAULT NULL,
  PRIMARY KEY (`courseID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseID`, `courseName`, `description`, `address`, `fee`, `requirement`, `material`, `display`) VALUES
(12, '貴族規劃師課程', NULL, NULL, NULL, NULL, NULL, 0),
(13, '<span style="color:rgb(255, 255, 255)"><strong><span style="font-size:18px"><span style="font-family:微軟正黑體">貴族規劃師課程 - 第五班</span></span></strong></span>', '<p><span style="color:rgb(255, 255, 255)"><span style="font-size:18px"><span style="font-family:微軟正黑體">有系統地鑄煉專業貴族規劃師， 打造大中華真正的貴族!<br />\r\n讓有使命，渴望成功及追求專業的理財精英，學懂家族規劃理念，學懂如何使用專業規劃工具、技巧、市場營銷策略及打造平台。助你在大中華地區協助企業家落實規劃， 打造大中華貴族，成就民族復興願景工程!</span></span></span></p>\r\n', '<span style="color:rgb(255, 255, 255)"><span style="font-size:18px"><span style="font-family:微軟正黑體">大中華家族辦公室<br />\r\n九龍尖沙咀東科學館道9號新東海商業中心2樓209室</span></span></span><br />\r\n&nbsp;', '<span style="color:rgb(255, 255, 255)"><span style="font-size:18px"><span style="font-family:微軟正黑體">費用 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; M1 $6,800 ,M2 $14,800,M3 $12,800 (全期$29,800)<br />\r\n包括 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 三期共十二天全日課程<br />\r\n送贈 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 白皮書<br />\r\n獎勵&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 是屆課程中出席率達75%以上, 缺課必須完成補課後，可獲20%學費回贈(有關課程於報名後, 將不獲退款)<br />\r\n付款方法&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;支票形式</span></span></span><br />\r\n<br />\r\n<br />\r\n&nbsp;', '<span style="color:rgb(255, 255, 255)"><span style="font-size:18px"><span style="font-family:微軟正黑體">開班人數最少25人</span></span></span><br />\r\n&nbsp;', '<span style="color:rgb(255, 255, 255)"><span style="font-size:18px"><span style="font-family:微軟正黑體">iPad需要iPad 3或以上，不接受iPad Mini)<br />\r\n錄音工具 (可使用電話)<br />\r\n專業的筆記本<br />\r\n外置硬盤USB (可代購)</span></span></span>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `coursetime`
--

CREATE TABLE IF NOT EXISTS `coursetime` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `courseID` int(99) NOT NULL,
  `classNum` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `classDate` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `classTime` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `classTopic` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=828 ;

--
-- Dumping data for table `coursetime`
--

INSERT INTO `coursetime` (`id`, `courseID`, `classNum`, `classDate`, `classTime`, `classTopic`) VALUES
(827, 13, '第12堂', '09/05/2015 (六)    ', '09:30 - 17:30', '規劃師祝捷聚餐\r\n'),
(825, 13, '第12堂', '09/05/2015 (六)    ', '09:30 - 17:30', '信託講座\r\n'),
(826, 13, '第12堂', '09/05/2015 (六)    ', '09:30 - 17:30', '規劃師畢業典禮\r\n'),
(822, 13, '第11堂', '08/05/2015 (五)  ', '09:30 - 17:30', '成交及處理異議\r\n'),
(823, 13, '第12堂', '09/05/2015 (六)    ', '09:30 - 17:30', '真實個案分享及分析\r\n'),
(824, 13, '第12堂', '09/05/2015 (六)    ', '09:30 - 17:30', '課程總結及分享\r\n'),
(820, 13, '第11堂', '08/05/2015 (五)  ', '09:30 - 17:30', '學員整體規劃方案報告\r\n'),
(821, 13, '第11堂', '08/05/2015 (五)  ', '09:30 - 17:30', '計劃書設計\r\n'),
(816, 13, '第10堂', '28/04/2015 (二)   ', '09:30 - 17:30', '設計及講解信託意願書\r\n'),
(817, 13, '第10堂', '28/04/2015 (二)   ', '09:30 - 17:30', '講解及創造信託安全資產 \r\n'),
(818, 13, '第10堂', '28/04/2015 (二)   ', '09:30 - 17:30', '成立信託及完善信託資產配置\r\n'),
(819, 13, '第11堂', '08/05/2015 (五)  ', '09:30 - 17:30', '真實個案分享及分析\r\n'),
(815, 13, '第10堂', '28/04/2015 (二)   ', '09:30 - 17:30', '真實個案分享及分析 \r\n'),
(813, 13, '第9堂', '13/04/2015 (一)   ', '09:30 - 17:30', '真實個案分享及分析　\r\n'),
(811, 13, '第8堂', '31/03/2015 (二)      ', '09:30 - 17:30', '家族規劃切入要決及邀約重點\r\n'),
(814, 13, '第9堂', '13/04/2015 (一)   ', '09:30 - 17:30', '設計及講解家庭信託的資產增值及分配系統\r\n'),
(812, 13, '第8堂', '31/03/2015 (二)      ', '09:30 - 17:30', '課程小結\r\n'),
(810, 13, '第8堂', '31/03/2015 (二)      ', '09:30 - 17:30', '創造最大人壽保額\r\n'),
(809, 13, '第8堂', '31/03/2015 (二)      ', '09:30 - 17:30', '核心規劃工具應用 \r\n'),
(808, 13, '第8堂', '31/03/2015 (二)      ', '09:30 - 17:30', '香港持久授權書 \r\n'),
(807, 13, '第8堂', '31/03/2015 (二)      ', '09:30 - 17:30', '退休規劃\r\n'),
(806, 13, '第8堂', '31/03/2015 (二)      ', '09:30 - 17:30', '真實個案分享及分析\r\n'),
(804, 13, '第7堂', '17/03/2015 (二)    ', '09:30 - 17:30', '家書功能及練習\r\n'),
(805, 13, '第7堂', '17/03/2015 (二)    ', '09:30 - 17:30', '貴族規劃書上下冊\r\n'),
(803, 13, '第7堂', '17/03/2015 (二)    ', '09:30 - 17:30', '講解遺囑的重要性及協助客戶成立各地認可的遺囑\r\n'),
(802, 13, '第7堂', '17/03/2015 (二)    ', '09:30 - 17:30', '香港遺囑及國內遺囑\r\n'),
(801, 13, '第7堂', '17/03/2015 (二)    ', '09:30 - 17:30', '香港無遺囑者遺產條例\r\n'),
(800, 13, '第7堂', '17/03/2015 (二)    ', '09:30 - 17:30', '研討個案分享及分析\r\n'),
(799, 13, '第6堂', '10/03/2015 (二)   ', '09:30 - 17:30', '了解國內繼承法及婚姻法\r\n'),
(797, 13, '第6堂', '10/03/2015 (二)   ', '09:30 - 17:30', '遺產稅草案解讀及計算工具應用\r\n'),
(798, 13, '第6堂', '10/03/2015 (二)   ', '09:30 - 17:30', '遺產稅節稅規劃\r\n'),
(796, 13, '第6堂', '10/03/2015 (二)   ', '09:30 - 17:30', '了解國內遺產稅草案\r\n'),
(782, 13, '第3堂', '25/02/2015 (三)  ', '09:30 - 17:30', '客戶全面規劃流程\r\n'),
(781, 13, '第3堂', '25/02/2015 (三)  ', '09:30 - 17:30', '家族規劃藍圖設計\r\n'),
(780, 13, '第3堂', '25/02/2015 (三)  ', '09:30 - 17:30', '真實個案分享及分析\r\n'),
(779, 13, '第2堂', '14/02/2015 (六)    ', '09:30 - 17:30', '分析製作及向客戶匯報風險評估分析報告-影片\r\n'),
(778, 13, '第2堂', '14/02/2015 (六)    ', '09:30 - 17:30', '設計完整的規劃計劃書-白皮書影片及演練\r\n'),
(776, 13, '第2堂', '14/02/2015 (六)    ', '09:30 - 17:30', '規劃師定位及話述\r\n'),
(777, 13, '第2堂', '14/02/2015 (六)    ', '09:30 - 17:30', '規劃師立場\r\n'),
(775, 13, '第1堂', '13/02/2015 (五)       ', '09:30 - 17:30', '"營銷系統'),
(774, 13, '第1堂', '13/02/2015 (五)       ', '09:30 - 17:30', '貴族的定義\r\n'),
(773, 13, '第1堂', '13/02/2015 (五)       ', '09:30 - 17:30', '財富與規劃的定義與關係\r\n'),
(772, 13, '第1堂', '13/02/2015 (五)       ', '09:30 - 17:30', '富勒博士的理念及大中華民族願景\r\n'),
(771, 12, '第12堂', '09/05/2015 (六)    ', '09:30 - 17:30', '規劃師祝捷聚餐\r\n'),
(770, 12, '第12堂', '09/05/2015 (六)    ', '09:30 - 17:30', '規劃師畢業典禮\r\n'),
(769, 12, '第12堂', '09/05/2015 (六)    ', '09:30 - 17:30', '信託講座\r\n'),
(768, 12, '第12堂', '09/05/2015 (六)    ', '09:30 - 17:30', '課程總結及分享\r\n'),
(767, 12, '第12堂', '09/05/2015 (六)    ', '09:30 - 17:30', '真實個案分享及分析\r\n'),
(766, 12, '第11堂', '08/05/2015 (五)  ', '09:30 - 17:30', '成交及處理異議\r\n'),
(765, 12, '第11堂', '08/05/2015 (五)  ', '09:30 - 17:30', '計劃書設計\r\n'),
(764, 12, '第11堂', '08/05/2015 (五)  ', '09:30 - 17:30', '學員整體規劃方案報告\r\n'),
(754, 12, '第8堂', '31/03/2015 (二)      ', '09:30 - 17:30', '創造最大人壽保額\r\n'),
(755, 12, '第8堂', '31/03/2015 (二)      ', '09:30 - 17:30', '家族規劃切入要決及邀約重點\r\n'),
(756, 12, '第8堂', '31/03/2015 (二)      ', '09:30 - 17:30', '課程小結\r\n'),
(757, 12, '第9堂', '13/04/2015 (一)   ', '09:30 - 17:30', '真實個案分享及分析　\r\n'),
(758, 12, '第9堂', '13/04/2015 (一)   ', '09:30 - 17:30', '設計及講解家庭信託的資產增值及分配系統\r\n'),
(759, 12, '第10堂', '28/04/2015 (二)   ', '09:30 - 17:30', '真實個案分享及分析 \r\n'),
(760, 12, '第10堂', '28/04/2015 (二)   ', '09:30 - 17:30', '設計及講解信託意願書\r\n'),
(761, 12, '第10堂', '28/04/2015 (二)   ', '09:30 - 17:30', '講解及創造信託安全資產 \r\n'),
(762, 12, '第10堂', '28/04/2015 (二)   ', '09:30 - 17:30', '成立信託及完善信託資產配置\r\n'),
(763, 12, '第11堂', '08/05/2015 (五)  ', '09:30 - 17:30', '真實個案分享及分析\r\n'),
(795, 13, '第6堂', '10/03/2015 (二)   ', '09:30 - 17:30', '公開個案分享及分析\r\n'),
(794, 13, '第5堂', '09/03/2015 (一)        ', '09:30 - 17:30', '企業要員留才規劃\r\n'),
(793, 13, '第5堂', '09/03/2015 (一)        ', '09:30 - 17:30', '企業接班規劃\r\n'),
(792, 13, '第5堂', '09/03/2015 (一)        ', '09:30 - 17:30', '家族企業股權規劃\r\n'),
(791, 13, '第5堂', '09/03/2015 (一)        ', '09:30 - 17:30', '股東協議書規劃及案例\r\n'),
(790, 13, '第5堂', '09/03/2015 (一)        ', '09:30 - 17:30', '企業業務延續規劃\r\n'),
(789, 13, '第5堂', '09/03/2015 (一)        ', '09:30 - 17:30', '真實個案分享及分析\r\n'),
(787, 13, '第4堂', '26/02/2015 (四)    ', '09:30 - 17:30', '能力測試\r\n'),
(788, 13, '第4堂', '26/02/2015 (四)    ', '09:30 - 17:30', '課程小結\r\n'),
(786, 13, '第4堂', '26/02/2015 (四)    ', '09:30 - 17:30', '家庭及保險信託的基本功能 \r\n'),
(785, 13, '第4堂', '26/02/2015 (四)    ', '09:30 - 17:30', '真實個案分享及分析\r\n'),
(784, 13, '第3堂', '25/02/2015 (三)  ', '09:30 - 17:30', '財務計算機應用\r\n'),
(783, 13, '第3堂', '25/02/2015 (三)  ', '09:30 - 17:30', '了解多做一門穩賺的家族生意\r\n'),
(753, 12, '第8堂', '31/03/2015 (二)      ', '09:30 - 17:30', '核心規劃工具應用 \r\n'),
(752, 12, '第8堂', '31/03/2015 (二)      ', '09:30 - 17:30', '香港持久授權書 \r\n'),
(751, 12, '第8堂', '31/03/2015 (二)      ', '09:30 - 17:30', '退休規劃\r\n'),
(750, 12, '第8堂', '31/03/2015 (二)      ', '09:30 - 17:30', '真實個案分享及分析\r\n'),
(749, 12, '第7堂', '17/03/2015 (二)    ', '09:30 - 17:30', '貴族規劃書上下冊\r\n'),
(748, 12, '第7堂', '17/03/2015 (二)    ', '09:30 - 17:30', '家書功能及練習\r\n'),
(741, 12, '第6堂', '10/03/2015 (二)   ', '09:30 - 17:30', '遺產稅草案解讀及計算工具應用\r\n'),
(742, 12, '第6堂', '10/03/2015 (二)   ', '09:30 - 17:30', '遺產稅節稅規劃\r\n'),
(743, 12, '第6堂', '10/03/2015 (二)   ', '09:30 - 17:30', '了解國內繼承法及婚姻法\r\n'),
(744, 12, '第7堂', '17/03/2015 (二)    ', '09:30 - 17:30', '研討個案分享及分析\r\n'),
(745, 12, '第7堂', '17/03/2015 (二)    ', '09:30 - 17:30', '香港無遺囑者遺產條例\r\n'),
(746, 12, '第7堂', '17/03/2015 (二)    ', '09:30 - 17:30', '香港遺囑及國內遺囑\r\n'),
(747, 12, '第7堂', '17/03/2015 (二)    ', '09:30 - 17:30', '講解遺囑的重要性及協助客戶成立各地認可的遺囑\r\n'),
(740, 12, '第6堂', '10/03/2015 (二)   ', '09:30 - 17:30', '了解國內遺產稅草案\r\n'),
(739, 12, '第6堂', '10/03/2015 (二)   ', '09:30 - 17:30', '公開個案分享及分析\r\n'),
(738, 12, '第5堂', '09/03/2015 (一)        ', '09:30 - 17:30', '企業要員留才規劃\r\n'),
(737, 12, '第5堂', '09/03/2015 (一)        ', '09:30 - 17:30', '企業接班規劃\r\n'),
(736, 12, '第5堂', '09/03/2015 (一)        ', '09:30 - 17:30', '家族企業股權規劃\r\n'),
(735, 12, '第5堂', '09/03/2015 (一)        ', '09:30 - 17:30', '股東協議書規劃及案例\r\n'),
(734, 12, '第5堂', '09/03/2015 (一)        ', '09:30 - 17:30', '企業業務延續規劃\r\n'),
(733, 12, '第5堂', '09/03/2015 (一)        ', '09:30 - 17:30', '真實個案分享及分析\r\n'),
(732, 12, '第4堂', '26/02/2015 (四)    ', '09:30 - 17:30', '課程小結\r\n'),
(731, 12, '第4堂', '26/02/2015 (四)    ', '09:30 - 17:30', '能力測試\r\n'),
(730, 12, '第4堂', '26/02/2015 (四)    ', '09:30 - 17:30', '家庭及保險信託的基本功能 \r\n'),
(729, 12, '第4堂', '26/02/2015 (四)    ', '09:30 - 17:30', '真實個案分享及分析\r\n'),
(728, 12, '第3堂', '25/02/2015 (三)  ', '09:30 - 17:30', '財務計算機應用\r\n'),
(727, 12, '第3堂', '25/02/2015 (三)  ', '09:30 - 17:30', '了解多做一門穩賺的家族生意\r\n'),
(726, 12, '第3堂', '25/02/2015 (三)  ', '09:30 - 17:30', '客戶全面規劃流程\r\n'),
(724, 12, '第3堂', '25/02/2015 (三)  ', '09:30 - 17:30', '真實個案分享及分析\r\n'),
(725, 12, '第3堂', '25/02/2015 (三)  ', '09:30 - 17:30', '家族規劃藍圖設計\r\n'),
(723, 12, '第2堂', '14/02/2015 (六)    ', '09:30 - 17:30', '分析製作及向客戶匯報風險評估分析報告-影片\r\n'),
(722, 12, '第2堂', '14/02/2015 (六)    ', '09:30 - 17:30', '設計完整的規劃計劃書-白皮書影片及演練\r\n'),
(721, 12, '第2堂', '14/02/2015 (六)    ', '09:30 - 17:30', '規劃師立場\r\n'),
(720, 12, '第2堂', '14/02/2015 (六)    ', '09:30 - 17:30', '規劃師定位及話述\r\n'),
(719, 12, '第1堂', '13/02/2015 (五)       ', '09:30 - 17:30', '"營銷系統'),
(718, 12, '第1堂', '13/02/2015 (五)       ', '09:30 - 17:30', '貴族的定義\r\n'),
(717, 12, '第1堂', '13/02/2015 (五)       ', '09:30 - 17:30', '財富與規劃的定義與關係\r\n'),
(716, 12, '第1堂', '13/02/2015 (五)       ', '09:30 - 17:30', '富勒博士的理念及大中華民族願景\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE IF NOT EXISTS `email` (
  `mail` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`mail`) VALUES
('man0551hk@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `eventtable`
--

CREATE TABLE IF NOT EXISTS `eventtable` (
  `eventID` int(99) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `time2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address2` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `display` int(2) NOT NULL,
  PRIMARY KEY (`eventID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `eventtable`
--

INSERT INTO `eventtable` (`eventID`, `name`, `date`, `time`, `address`, `date2`, `time2`, `address2`, `author`, `display`) VALUES
(4, '『貴族』家族信託講座', '2014年8月19日（星期三）', '2:30pm - 4:30pm（2:00pm開始登記）', '大中華家族辦公室 - 九龍尖沙咀東科學館道9號新東海商業中心2樓209室', '', '', '', '貴族資本集團主席 - 黎嘉廉及信託公司業務總監', 1),
(5, '『貴族』規劃信託講座', '2014年7月14日（星期一）', '2:30pm - 4:30pm（2:00pm開始登記）', '九龍尖沙咀東科學館道9號新東海商業中心2樓209室', '', '', '', '貴族資本集團主席 - 黎嘉廉及信託公司業務總監', 0);

-- --------------------------------------------------------

--
-- Table structure for table `event_joiner`
--

CREATE TABLE IF NOT EXISTS `event_joiner` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `eventID1` int(99) NOT NULL,
  `ticketNo1` int(99) NOT NULL,
  `date1` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `time1` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `eventID2` int(99) NOT NULL,
  `ticketNo2` int(99) NOT NULL,
  `date2` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `time2` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ageGroup` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `event_joiner`
--

INSERT INTO `event_joiner` (`id`, `eventID1`, `ticketNo1`, `date1`, `time1`, `eventID2`, `ticketNo2`, `date2`, `time2`, `name`, `gender`, `phone`, `ageGroup`, `email`, `job`, `address`) VALUES
(1, 4, 1, '2014年5月7日（星期三）', '2:30pm - 4:30pm（2:00pm開始登記） ', 0, 0, '2014年5月14日（星期三）', '2:30pm - 4:30pm（2:00pm開始登記） ', 'Jerry Wong', 'Mr', '60538205', '25-40', 'man0551hk@gmail.com', 'programmer', '香港基督青年中心(YMCA) 尖沙咀梳士巴利道41號南座3樓韓頓廳'),
(2, 4, 2, '2014年5月14日（星期三）', '2:30pm - 4:30pm（2:00pm開始登記） ', 5, 2, '2014年6月3日（星期二）', '2:30pm - 4:30pm（2:00pm開始登記） ', 'Samuel Li', 'Mr', '96144908', '25-40', 'samuelli@sunwahgroup.com', 'Legal Officer', 'Room 1601, 16/F, Bank of America Tower, 12 Harcourt Road, Central, Hong Kong'),
(3, 0, 0, '2014年5月14日（星期三）', '2:30pm - 4:30pm（2:00pm開始登記） ', 5, 1, '2014年6月3日（星期二）', '2:30pm - 4:30pm（2:00pm開始登記） ', 'Geri', 'Mrs', '90820448', '25-40', 'gerilau@ymail.com', 'business', 'Flat G, 7/F., Blk 1, Fu Fai Gdn, Ma On Shan, NT'),
(4, 5, 2, '2014年6月3日（星期二）', '2:30pm - 4:30pm（2:00pm開始登記） ', 0, 0, '', '', '莫炫標', 'Mr', '90376627', '51-60', 'billmok33@yahoo.com.hk', '東主', '火炭禾盛街11號,中建電訉大廈2105室'),
(5, 0, 0, '2014年8月19日（星期三）', '2:30pm - 4:30pm（2:00pm開始登記） ', 0, 0, '', '', '莫炫標', 'Mr', '90376627', '51-60', 'bill@yukkee.com.hk', '工廠東主 ', '火炭禾盛街11號,中建電訉大廈,2105室');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `display` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `name`, `path`, `display`) VALUES
(3, 'event2014.jpg', 'doc/event2014.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `imagelink`
--

CREATE TABLE IF NOT EXISTS `imagelink` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `textID` int(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=43 ;

--
-- Dumping data for table `imagelink`
--

INSERT INTO `imagelink` (`id`, `name`, `path`, `textID`) VALUES
(2, 'human.jpg', 'http://www.noblecfo.com/doc/images/human.jpg', 3),
(40, 'groupchart23.06.14.png', 'http://www.noblecfo.com/doc/images/groupchart23.06.14.png', 7),
(42, 'BusinessPartner30.06.14.png', 'http://www.noblecfo.com/doc/images/BusinessPartner30.06.14.png', 15),
(39, 'Familyplan23.06.14.png', 'http://www.noblecfo.com/doc/images/Familyplan23.06.14.png', 17),
(9, 'family1.png', 'http://www.noblecfo.com/doc/images/family1.png', 21),
(10, 'family2.png', 'http://www.noblecfo.com/doc/images/family2.png', 22),
(35, 'Raulphoto3.JPG', 'http://www.noblecfo.com/doc/images/Raulphoto3.JPG', 51),
(19, '553 point 23.05.14.png', 'http://www.noblecfo.com/doc/images/553 point 23.05.14.png', 8),
(41, 'fuhingpic02.07.14.png', 'http://www.noblecfo.com/doc/images/fuhingpic02.07.14.png', 11),
(38, 'Services23.06.14.png', 'http://www.noblecfo.com/doc/images/Services23.06.14.png', 16),
(27, '8service26.05.14.png', 'http://www.noblecfo.com/doc/images/8service26.05.14.png', 18),
(28, 'source26.05.14.png', 'http://www.noblecfo.com/doc/images/source26.05.14.png', 47),
(29, 'open26.05.14.png', 'http://www.noblecfo.com/doc/images/open26.05.14.png', 48),
(30, 'people26.05.14.png', 'http://www.noblecfo.com/doc/images/people26.05.14.png', 50),
(31, 'lesson26.05.14.png', 'http://www.noblecfo.com/doc/images/lesson26.05.14.png', 25),
(32, 'interouter26.05.14.png', 'http://www.noblecfo.com/doc/images/interouter26.05.14.png', 26);

-- --------------------------------------------------------

--
-- Table structure for table `membertable`
--

CREATE TABLE IF NOT EXISTS `membertable` (
  `memberID` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(15) unsigned NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `time` datetime NOT NULL,
  `blocked` int(1) DEFAULT '0',
  PRIMARY KEY (`memberID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `membertable`
--

INSERT INTO `membertable` (`memberID`, `name`, `email`, `phone`, `password`, `time`, `blocked`) VALUES
(1, 'Wong Kam Yuen', 'man0551hk@yahoo.com.hk', 60538205, '7813469', '2014-05-09 12:04:34', 0),
(2, 'Cheung Kit Lok Selina', 'Selina@ewahk.com', 94363146, '192088', '2014-05-10 15:18:43', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tabbing`
--

CREATE TABLE IF NOT EXISTS `tabbing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `textEditorID` int(99) NOT NULL,
  `displayOrder` int(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

--
-- Dumping data for table `tabbing`
--

INSERT INTO `tabbing` (`id`, `name`, `type`, `textEditorID`, `displayOrder`) VALUES
(1, '創辦人', 'main', 3, 1),
(2, '集團架構', 'main', 7, 4),
(3, '集團發展', 'main', 8, 5),
(4, '集團使命', 'main', 9, 7),
(5, '集團核心', 'main', 10, 6),
(6, '集團願景', 'main', 11, 2),
(7, '集團目標', 'main', 12, 3),
(8, '專業合作伙伴', 'wealth', 15, 1),
(9, '專業智囊服務', 'wealth', 16, 2),
(10, '家族規劃', 'wealth', 17, 3),
(11, '八大系統', 'wealth', 18, 4),
(12, '講座', 'family', 21, 4),
(13, '展覽', 'family', 22, 5),
(14, '資源及增值課程', 'school', 25, 1),
(18, '強勢精英陣容', 'wealth', 52, 5),
(29, '培訓課堂', 'school', 51, 3),
(22, '內聖外王', 'school', 26, 2),
(25, '資源整合', 'family', 47, 1),
(26, '開放共贏', 'family', 48, 2),
(28, '匯聚效應', 'family', 50, 3);

-- --------------------------------------------------------

--
-- Table structure for table `texteditor`
--

CREATE TABLE IF NOT EXISTS `texteditor` (
  `textID` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `textindex` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `textarea` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`textID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=53 ;

--
-- Dumping data for table `texteditor`
--

INSERT INTO `texteditor` (`textID`, `textindex`, `textarea`) VALUES
(1, 'atext1', '<h2><strong><span style="color:rgb(255, 215, 0)"><span style="font-family:微軟正黑體"><span style="font-size:26px">締造中華貴族的</span><span style="font-size:36px">平臺</span></span></span></strong></h2>\r\n'),
(2, 'atext2', '<h1><span style="font-size:28px"><strong><span style="color:rgb(255, 215, 0)"><span style="font-family:微軟正黑體">貴族 領航</span></span></strong></span></h1>\r\n\r\n<h2><strong><span style="font-size:22px"><span style="color:rgb(255, 215, 0)"><span style="font-family:微軟正黑體">貴族的定義</span><br />\r\n<span style="font-family:微軟正黑體">一些特有的群體，通過血緣、姓氏等某種特有的制度來繼承知識、權力、財富而形成的傳統。通常貴族成員擁有的知識與道德水平高於其他人，權力與責任大於其他人，財富多於其他人。</span></span></span></strong></h2>\r\n'),
(19, 'ctext19', '<h2><span style="color:rgb(255, 215, 0)"><strong><span style="font-size:26px"><span style="font-family:微軟正黑體">匯聚貴族資源的</span></span><span style="font-family:微軟正黑體"><span style="font-size:36px">圈子</span></span></strong></span></h2>\r\n'),
(20, 'ctext20', '<h2><strong><span style="color:rgb(255, 215, 0)"><span style="font-size:28px"><span style="font-family:微軟正黑體">掌握世界發展趨勢</span><br />\r\n<span style="font-family:微軟正黑體">與時並進<br />\r\n掌握未來<br />\r\n領航世界</span></span></span></strong></h2>\r\n'),
(3, 'atext3', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Lai Ka Lim, Carvin 黎嘉廉 <img alt="" src="http://www.noblecfo.com/doc/images/human.jpg" style="height:470px; width:314px" /> <!--Editor 3--></td>\r\n			<td valign = "top"><br />\r\n			<span style="font-size:16px"><span style="color:rgb(105, 105, 105)"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">Bachelor of Science in Business Administration (BsBA)</span></span></span><br />\r\n			<span style="color:rgb(128, 128, 128)"><span style="font-family:微軟正黑體">工商管理學士</span></span></span> <!--Editor 4--><br />\r\n			<br />\r\n			<span style="font-family:微軟正黑體"><span style="font-size:16px"><span style="color:rgb(105, 105, 105)">著作 :<br />\r\n			《藏富》<br />\r\n			《退休靠你自己》<br />\r\n			《理財規劃實務解套》<br />\r\n			《傳財家業 富過三代》</span></span></span> <!--Editor 5--></td>\r\n			<td valign = "top">\r\n			<h3>成長經歷</h3>\r\n			<span style="color:rgb(128, 128, 128)"><span style="font-family:微軟正黑體"><span style="font-size:16px">2002年&nbsp; 加入金融業<br />\r\n			2012年&nbsp; 成立恆創財富顧問有限公司<br />\r\n			2014年&nbsp; 成立大中華家族辦公室<br />\r\n			2014年&nbsp; 成立貴族商學院<br />\r\n			2014年&nbsp; 組建成立貴族資本集團</span></span></span><br />\r\n			<span style="color:rgb(75, 0, 130)"><span style="font-family:微軟正黑體"><span style="font-size:16px">&nbsp;</span></span></span> <!--Editor 6--></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(18, 'btext18', '<img alt="" src="http://www.noblecfo.com/doc/images/8service26.05.14.png" style="height:329px; width:625px" />'),
(47, 'ctext47', '<img alt="" src="http://www.noblecfo.com/doc/images/source26.05.14.png" style="height:623px; width:555px" />'),
(48, 'ctext48', '<img alt="" src="http://www.noblecfo.com/doc/images/open26.05.14.png" style="height:837px; width:551px" />'),
(50, 'ctext50', '<img alt="" src="http://www.noblecfo.com/doc/images/people26.05.14.png" style="height:725px; width:679px" />'),
(51, 'dtext51', '<img alt="" src="http://www.noblecfo.com/doc/images/Raulphoto3.JPG" style="height:525px; width:700px" />'),
(13, 'btext13', '<h2><span style="color:rgb(255, 215, 0)"><span style="font-family:微軟正黑體"><strong><span style="font-size:26px">璀璨貴族專業的</span><span style="font-size:36px">智庫</span></strong></span></span></h2>\r\n'),
(14, 'btext14', '<h2><strong><span style="font-size:28px"><span style="color:rgb(255, 215, 0)"><span style="font-family:微軟正黑體">群集百方專才賢才，<br />\r\n有立場地打造大中華新一代貴族。</span></span></span></strong></h2>\r\n'),
(15, 'btext15', '<img alt="" src="http://www.noblecfo.com/doc/images/BusinessPartner30.06.14.png" style="height:514px; width:583px" /><img alt="" src="http://www.noblecfo.com/doc/images/BusinessPartner23.06.14.png" style="height:384px; width:436px" />'),
(16, 'btext16', '<img alt="" src="http://www.noblecfo.com/doc/images/Services23.06.14.png" style="height:539px; width:367px" />'),
(17, 'btext17', '<img alt="" src="http://www.noblecfo.com/doc/images/Familyplan23.06.14.png" style="height:325px; width:456px" />'),
(7, 'atext7', '<img alt="" src="http://www.noblecfo.com/doc/images/groupchart23.06.14.png" style="height:610px; width:434px" />'),
(8, 'atext8', '<img alt="" src="http://www.noblecfo.com/doc/images/553 point 23.05.14.png" style="height:608px; width:537px" />'),
(9, 'atext9', '<h3><span style="color:rgb(128, 128, 128)"><strong><span style="font-size:22px"><span style="font-family:微軟正黑體">把智慧帶進中國，<br />\r\n讓中國領航世界!</span></span></strong></span></h3>\r\n\r\n<h1><strong><span style="color:rgb(75, 0, 130)"><span style="font-size:28px"><span style="font-family:微軟正黑體">智慧。和諧。繁衍。傳承</span></span></span></strong></h1>\r\n'),
(10, 'atext10', '<h3><strong><span style="color:rgb(75, 0, 130)"><span style="font-size:28px"><span style="font-family:微軟正黑體">真正的財富</span></span></span></strong></h3>\r\n\r\n<p><span style="color:rgb(128, 128, 128)"><strong><span style="font-size:22px"><span style="font-family:微軟正黑體">我們為了在未來的多少天能照顧多少人所做出的努力。<br />\r\n同時保護，孕育，滿足並教育他們。</span></span></strong></span></p>\r\n'),
(11, 'atext11', '<img alt="" src="http://www.noblecfo.com/doc/images/fuhingpic02.07.14.png" style="height:701px; width:1230px" /><img alt="" src="http://www.noblecfo.com/doc/images/fuhingpic02.07.14.png" style="height:399px; width:700px" /><img alt="" src="http://www.noblecfo.com/doc/images/fuhingpic23.05.14.png" style="height:446px; width:700px" />'),
(12, 'atext12', '<h3><span style="color:rgb(169, 169, 169)"><span style="font-size:22px"><strong><span style="font-family:微軟正黑體">1 億人民族復興願景工程</span></strong><br />\r\n<br />\r\n2043年前協助50萬位以上企業家建立家族憲法，建構家族系統，讓他們成為新中國第一批貴族。確保他們家族資產受到百分百保護，並保證可以按照他們意願有效管理家族財富，並按時、按量、按需、按條件永久公平分配家族福利，締造家族和諧，讓企業家後顧無憂。與此同時，邀請企業家服務身邊200位以上的朋友、企業員工、及社會群體。及籌建超過500間願景工程學校，創造真正的財富，以生命影響生命！<br />\r\n<br />\r\n這就是一億華人的民族復興願景工程，我們就是總工程師。</span></span><br />\r\n<br />\r\n<br />\r\n&nbsp;</h3>\r\n'),
(21, 'ctext21', '<img alt="" src="http://www.noblecfo.com/doc/images/family1.png" />'),
(22, 'ctext22', '<img alt="" src="http://www.noblecfo.com/doc/images/family2.png" />'),
(23, 'dtext23', '<h2><span style="color:rgb(255, 215, 0)"><strong><span style="font-size:26px"><span style="font-family:微軟正黑體">鑄煉內涵氣質的</span></span><span style="font-size:36px">道場</span></strong></span></h2>\r\n'),
(24, 'dtext24', '<h2><strong><span style="color:rgb(255, 215, 0)"><span style="font-size:28px">學海無涯</span></span></strong></h2>\r\n\r\n<p><strong><span style="color:rgb(255, 215, 0)"><span style="font-size:26px">修行自在心中、中西學術存庫<br />\r\n學會成功得失、品味內涵提升</span></span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(25, 'dtext25', '<img alt="" src="http://www.noblecfo.com/doc/images/lesson26.05.14.png" style="height:811px; width:563px" />'),
(26, 'dtext26', '<img alt="" src="http://www.noblecfo.com/doc/images/interouter26.05.14.png" style="height:602px; width:572px" />'),
(27, 'etext011', '<p>電郵</p>\r\n\r\n<p><a href="mailto:admin@noble-cfo.com">admin@noble-cfo.com</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>地址</p>\r\n\r\n<p>九龍尖沙咀東科學館道9號新東海商業中心2樓209室</p>\r\n'),
(28, 'info', '報名及查詢，請填妥以上表格傳真至2722 4268或於星期一至五辦工時間內致電2722 4308或<br />\r\n電郵至<a href="mailto:admin@ewahk.com">admin@ewahk.com</a><br />\r\n&nbsp;'),
(29, 'banner1', '<h2><span style="color:rgb(255, 255, 255)"><strong><span style="font-family:微軟正黑體"><span style="font-size:28px">締造中華貴族的</span><span style="font-size:48px">平臺</span></span></strong></span></h2>\r\n'),
(30, 'banner2', '<h2><span style="color:rgb(255, 255, 255)"><span style="font-family:微軟正黑體"><strong><span style="font-size:36px"><span style="font-size:28px">璀璨貴族專業</span>的</span><span style="font-size:48px">智庫</span></strong></span></span></h2>\r\n'),
(31, 'banner3', '<h2><span style="color:rgb(255, 255, 255)"><strong><span style="font-size:28px"><span style="font-family:微軟正黑體">匯聚貴族資源的</span></span><span style="font-size:48px"><span style="font-family:微軟正黑體">圈子</span></span></strong></span></h2>\r\n'),
(32, 'banner4', '<h2><span style="color:rgb(255, 255, 255)"><strong><span style="font-size:28px"><span style="font-family:微軟正黑體">鑄煉內涵氣質的</span></span><span style="font-size:48px">道場</span></strong></span></h2>\r\n'),
(52, 'btext52', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
