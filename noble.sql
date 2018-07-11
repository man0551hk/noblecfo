CREATE DATABASE  IF NOT EXISTS `noble` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `noble`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: noble
-- ------------------------------------------------------
-- Server version	5.5.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `adminID` int(99) NOT NULL AUTO_INCREMENT,
  `loginID` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'nobleadmin','kk12345678');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course` (
  `courseID` int(11) NOT NULL AUTO_INCREMENT,
  `courseName` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `address` text COLLATE utf8_unicode_ci,
  `fee` text COLLATE utf8_unicode_ci,
  `requirement` text COLLATE utf8_unicode_ci,
  `material` text COLLATE utf8_unicode_ci,
  `display` int(2) DEFAULT NULL,
  PRIMARY KEY (`courseID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES (8,'<span style=\"font-size:18px\"><strong><span style=\"font-family:微軟正黑體\"><span style=\"color:rgb(255, 255, 255)\">貴族規劃師課程 - 第四期</span></span></strong></span>','<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\"><strong><span style=\"font-family:微軟正黑體\"><span style=\"color:rgb(255, 255, 255)\">有系統地鑄煉專業貴族規劃師， 打造大中華真正的貴族!</span></span></strong></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><strong><span style=\"font-family:微軟正黑體\"><span style=\"color:rgb(255, 255, 255)\">讓有使命，渴望成功及追求專業的理財精英，學懂家族規劃理念，學懂如何使用專業規劃工具、技巧、市場營銷策略及打造平台。助你在大中華地區協助企業家落實規劃， 打造大中華貴族，成就民族復興願景工程!</span></span></strong></span></p>\r\n','<p><span style=\"color:rgb(255, 255, 255)\"><span style=\"font-size:18px\"><strong><span style=\"font-family:微軟正黑體\">大中華家族辦公室</span></strong></span></span></p>\r\n\r\n<p><span style=\"color:rgb(255, 255, 255)\"><span style=\"font-size:18px\"><strong><span style=\"font-family:微軟正黑體\">九龍尖沙咀東科學館道9號新東海商業中心2樓209室</span></strong></span></span></p>\r\n','<strong><span style=\"font-size:18px\"><span style=\"color:rgb(255, 255, 255)\"><span style=\"font-family:times new roman,times,serif\"><span style=\"font-family:arial,helvetica,sans-serif\">HK$ 24,800　</span></span></span></span></strong><br />\r\n<span style=\"font-family:微軟正黑體\"><span style=\"color:rgb(255, 255, 255)\"><span style=\"font-size:16px\"><strong>包括 : 十二天全日課程<br />\r\n送贈 : &nbsp;白皮書、藏富書籍及<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 關鍵世代書籍各一本</strong></span></span></span><br />\r\n<br />\r\n&nbsp;','<span style=\"font-family:微軟正黑體\"><span style=\"color:rgb(230, 230, 250)\"><span style=\"font-size:18px\">開班人數最少25人</span></span></span>','<ul>\r\n	<li><span style=\"color:rgb(255, 255, 255)\"><span style=\"font-size:18px\"><span style=\"font-family:微軟正黑體\">iPad (需要iPad 3或以上，不接受iPad Mini)</span></span></span></li>\r\n	<li><span style=\"color:rgb(255, 255, 255)\"><span style=\"font-size:18px\"><span style=\"font-family:微軟正黑體\">錄音工具 (可使用電話)</span></span></span></li>\r\n	<li><span style=\"color:rgb(255, 255, 255)\"><span style=\"font-size:18px\"><span style=\"font-family:微軟正黑體\">專業的筆記本 </span></span></span></li>\r\n	<li><span style=\"color:rgb(255, 255, 255)\"><span style=\"font-size:18px\"><span style=\"font-family:微軟正黑體\"><!--  --><!--  -->2TB 外置硬盤 (貴族商學院可以代購)</span></span></span></li>\r\n</ul>\r\n',1);
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coursetime`
--

DROP TABLE IF EXISTS `coursetime`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coursetime` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `courseID` int(99) NOT NULL,
  `classNum` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `classDate` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `classTime` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `classTopic` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=547 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coursetime`
--

LOCK TABLES `coursetime` WRITE;
/*!40000 ALTER TABLE `coursetime` DISABLE KEYS */;
INSERT INTO `coursetime` VALUES (504,8,'第4堂','04/10/2014 (六)','','真實個案分享及分析\r\n'),(506,8,'第4堂','04/10/2014 (六)','','核心規劃工具應用\r\n'),(505,8,'第4堂','04/10/2014 (六)','','家庭及保險信託的功能 \r\n'),(503,8,'第3堂','11/09/2014 (四)','','客戶全面規劃流程\r\n'),(502,8,'第3堂','11/09/2014 (四)','','了解多做一門生意\r\n'),(498,8,'第2堂','28/08/2014 (四)','','設計完整的規劃計劃書-白皮書演練\r\n'),(499,8,'第2堂','28/08/2014 (四)','','分析製作及向客戶匯報風險評估分析報告-影片\r\n'),(500,8,'第3堂','11/09/2014 (四)','','真實個案分享及分析\r\n'),(501,8,'第3堂','11/09/2014 (四)','','富過三代規劃藍圖設計\r\n'),(495,8,'第2堂','28/08/2014 (四)','','個人願景圖\r\n'),(496,8,'第2堂','28/08/2014 (四)','','規劃師立場\r\n'),(497,8,'第2堂','28/08/2014 (四)','','設計完整的規劃計劃書-白皮書影片\r\n'),(494,8,'第1堂','07/08/2014 (四)','','規劃定位及話述\r\n'),(493,8,'第1堂','07/08/2014 (四)','','\"營銷系統'),(492,8,'第1堂','07/08/2014 (四)','','目標市場及優質目標客戶\r\n'),(491,8,'第1堂','07/08/2014 (四)','','貴族的定義\r\n'),(487,8,'日期','','','內容\r\n'),(488,8,'第1堂','07/08/2014 (四)','','理念及願景\r\n'),(489,8,'第1堂','07/08/2014 (四)','','富勒博士的理念\r\n'),(490,8,'第1堂','07/08/2014 (四)','','財富與規劃的定義與關係\r\n'),(507,8,'第4堂','04/10/2014 (六)','','講解遺囑的重要性及協助客戶成立各地認可的遺囑\r\n'),(508,8,'第4堂','04/10/2014 (六)','','了解國內遺產稅草案\r\n'),(509,8,'第5堂','16/10/2014 (四)','','真實個案分享及分析\r\n'),(510,8,'第5堂','16/10/2014 (四)','','遺產稅草案解讀及計算工具應用\r\n'),(511,8,'第5堂','16/10/2014 (四)','','遺產稅節稅規劃\r\n'),(512,8,'第5堂','16/10/2014 (四)','','了解國內繼承法及婚姻法\r\n'),(513,8,'第5堂','16/10/2014 (四)','','家書功能及練習\r\n'),(514,8,'第5堂','16/10/2014 (四)','','計及講解家庭信託的資產增值及分配系統\r\n'),(515,8,'第5堂','16/10/2014 (四)','','家族規劃書\r\n'),(516,8,'第6堂','21/10/2014 (二)','','真實個案分享及分析\r\n'),(517,8,'第6堂','21/10/2014 (二)','','設計及講解信託意願書\r\n'),(518,8,'第6堂','21/10/2014 (二)','','設計及講解家庭信託的資產增值及分配系統\r\n'),(519,8,'第6堂','21/10/2014 (二)','','企業業務延續規劃\r\n'),(520,8,'第7堂','06/11/2014 (四)','','真實個案分享及分析\r\n'),(521,8,'第7堂','06/11/2014 (四)','','股東協議書規劃及案例\r\n'),(522,8,'第7堂','06/11/2014 (四)','','企業接班規劃\r\n'),(523,8,'第7堂','06/11/2014 (四)','','企業要員留才規劃\r\n'),(524,8,'第8堂','27/11/2014 (四)','','真實個案分享及分析\r\n'),(525,8,'第8堂','27/11/2014 (四)','','講解及創造信託安全資產\r\n'),(526,8,'第8堂','27/11/2014 (四)','','切入要決\r\n'),(527,8,'第9堂','11/12/2014 (四)','','真實個案分享及分析\r\n'),(528,8,'第9堂','11/12/2014 (四)','','取得全部資產文件及Proposal Design-Part 1\r\n'),(529,8,'第9堂','11/12/2014 (四)','','取得全部資產文件及Proposal Design-Part 2\r\n'),(530,8,'第9堂','11/12/2014 (四)','','財務及健康核保\r\n'),(531,8,'第10堂','08/01/2014 (四)','','真實個案分享及分析\r\n'),(532,8,'第10堂','08/01/2014 (四)','','最大人壽保額\r\n'),(533,8,'第10堂','08/01/2014 (四)','','成立信託及完善信託資產配置\r\n'),(534,8,'第10堂','08/01/2014 (四)','','成交及處理異議\r\n'),(535,8,'第11堂','22/01/2015 (四)','','真實個案分享及分析\r\n'),(536,8,'第11堂','22/01/2015 (四)','','成交及處理異議\r\n'),(537,8,'第11堂','22/01/2015 (四)','','退休規劃\r\n'),(538,8,'第11堂','22/01/2015 (四)','','香港持久授權書\r\n'),(539,8,'第11堂','22/01/2015 (四)','','香港遺囑\r\n'),(540,8,'第12堂','05/02/2015 (四)','','真實個案分享及分析\r\n'),(541,8,'第12堂','05/02/2015 (四)','','信託講座模式\r\n'),(542,8,'第12堂','05/02/2015 (四)','','邀約重點\r\n'),(543,8,'第12堂','05/02/2015 (四)','','Case Study\r\n'),(544,8,'第12堂','05/02/2015 (四)','','信託講座\r\n'),(545,8,'第12堂','05/02/2015 (四)','','規劃師畢業典禮\r\n'),(546,8,'第12堂','05/02/2015 (四)','','規劃師祝捷聚餐\r\n');
/*!40000 ALTER TABLE `coursetime` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email`
--

DROP TABLE IF EXISTS `email`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email` (
  `mail` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email`
--

LOCK TABLES `email` WRITE;
/*!40000 ALTER TABLE `email` DISABLE KEYS */;
INSERT INTO `email` VALUES ('man0551hk@gmail.com');
/*!40000 ALTER TABLE `email` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_joiner`
--

DROP TABLE IF EXISTS `event_joiner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_joiner` (
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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_joiner`
--

LOCK TABLES `event_joiner` WRITE;
/*!40000 ALTER TABLE `event_joiner` DISABLE KEYS */;
INSERT INTO `event_joiner` VALUES (1,4,1,'2014年5月7日（星期三）','2:30pm - 4:30pm（2:00pm開始登記） ',0,0,'2014年5月14日（星期三）','2:30pm - 4:30pm（2:00pm開始登記） ','Jerry Wong','Mr','60538205','25-40','man0551hk@gmail.com','programmer','香港基督青年中心(YMCA) 尖沙咀梳士巴利道41號南座3樓韓頓廳'),(2,4,2,'2014年5月14日（星期三）','2:30pm - 4:30pm（2:00pm開始登記） ',5,2,'2014年6月3日（星期二）','2:30pm - 4:30pm（2:00pm開始登記） ','Samuel Li','Mr','96144908','25-40','samuelli@sunwahgroup.com','Legal Officer','Room 1601, 16/F, Bank of America Tower, 12 Harcourt Road, Central, Hong Kong'),(3,0,0,'2014年5月14日（星期三）','2:30pm - 4:30pm（2:00pm開始登記） ',5,1,'2014年6月3日（星期二）','2:30pm - 4:30pm（2:00pm開始登記） ','Geri','Mrs','90820448','25-40','gerilau@ymail.com','business','Flat G, 7/F., Blk 1, Fu Fai Gdn, Ma On Shan, NT'),(4,5,2,'2014年6月3日（星期二）','2:30pm - 4:30pm（2:00pm開始登記） ',0,0,'','','莫炫標','Mr','90376627','51-60','billmok33@yahoo.com.hk','東主','火炭禾盛街11號,中建電訉大廈2105室'),(5,0,0,'2014年8月19日（星期三）','2:30pm - 4:30pm（2:00pm開始登記） ',0,0,'','','莫炫標','Mr','90376627','51-60','bill@yukkee.com.hk','工廠東主 ','火炭禾盛街11號,中建電訉大廈,2105室');
/*!40000 ALTER TABLE `event_joiner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventtable`
--

DROP TABLE IF EXISTS `eventtable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eventtable` (
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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventtable`
--

LOCK TABLES `eventtable` WRITE;
/*!40000 ALTER TABLE `eventtable` DISABLE KEYS */;
INSERT INTO `eventtable` VALUES (4,'『貴族』家族信託講座','2014年8月19日（星期三）','2:30pm - 4:30pm（2:00pm開始登記）','大中華家族辦公室 - 九龍尖沙咀東科學館道9號新東海商業中心2樓209室','','','','貴族資本集團主席 - 黎嘉廉及信託公司業務總監',1),(5,'『貴族』規劃信託講座','2014年7月14日（星期一）','2:30pm - 4:30pm（2:00pm開始登記）','九龍尖沙咀東科學館道9號新東海商業中心2樓209室','','','','貴族資本集團主席 - 黎嘉廉及信託公司業務總監',0);
/*!40000 ALTER TABLE `eventtable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `file`
--

DROP TABLE IF EXISTS `file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `file` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `display` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file`
--

LOCK TABLES `file` WRITE;
/*!40000 ALTER TABLE `file` DISABLE KEYS */;
INSERT INTO `file` VALUES (3,'event2014.jpg','doc/event2014.jpg','1');
/*!40000 ALTER TABLE `file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagelink`
--

DROP TABLE IF EXISTS `imagelink`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagelink` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `textID` int(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagelink`
--

LOCK TABLES `imagelink` WRITE;
/*!40000 ALTER TABLE `imagelink` DISABLE KEYS */;
INSERT INTO `imagelink` VALUES (2,'human.jpg','http://www.noblecfo.com/doc/images/human.jpg',3),(40,'groupchart23.06.14.png','http://www.noblecfo.com/doc/images/groupchart23.06.14.png',7),(42,'BusinessPartner30.06.14.png','http://www.noblecfo.com/doc/images/BusinessPartner30.06.14.png',15),(39,'Familyplan23.06.14.png','http://www.noblecfo.com/doc/images/Familyplan23.06.14.png',17),(9,'family1.png','http://www.noblecfo.com/doc/images/family1.png',21),(10,'family2.png','http://www.noblecfo.com/doc/images/family2.png',22),(35,'Raulphoto3.JPG','http://www.noblecfo.com/doc/images/Raulphoto3.JPG',51),(19,'553 point 23.05.14.png','http://www.noblecfo.com/doc/images/553 point 23.05.14.png',8),(41,'fuhingpic02.07.14.png','http://www.noblecfo.com/doc/images/fuhingpic02.07.14.png',11),(38,'Services23.06.14.png','http://www.noblecfo.com/doc/images/Services23.06.14.png',16),(27,'8service26.05.14.png','http://www.noblecfo.com/doc/images/8service26.05.14.png',18),(28,'source26.05.14.png','http://www.noblecfo.com/doc/images/source26.05.14.png',47),(29,'open26.05.14.png','http://www.noblecfo.com/doc/images/open26.05.14.png',48),(30,'people26.05.14.png','http://www.noblecfo.com/doc/images/people26.05.14.png',50),(31,'lesson26.05.14.png','http://www.noblecfo.com/doc/images/lesson26.05.14.png',25),(32,'interouter26.05.14.png','http://www.noblecfo.com/doc/images/interouter26.05.14.png',26);
/*!40000 ALTER TABLE `imagelink` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `membertable`
--

DROP TABLE IF EXISTS `membertable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `membertable` (
  `memberID` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(15) unsigned NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `time` datetime NOT NULL,
  `blocked` int(1) DEFAULT '0',
  PRIMARY KEY (`memberID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `membertable`
--

LOCK TABLES `membertable` WRITE;
/*!40000 ALTER TABLE `membertable` DISABLE KEYS */;
INSERT INTO `membertable` VALUES (1,'Wong Kam Yuen','man0551hk@yahoo.com.hk',60538205,'7813469','2014-05-09 12:04:34',0),(2,'Cheung Kit Lok Selina','Selina@ewahk.com',94363146,'192088','2014-05-10 15:18:43',0);
/*!40000 ALTER TABLE `membertable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tabbing`
--

DROP TABLE IF EXISTS `tabbing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tabbing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `textEditorID` int(99) NOT NULL,
  `displayOrder` int(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tabbing`
--

LOCK TABLES `tabbing` WRITE;
/*!40000 ALTER TABLE `tabbing` DISABLE KEYS */;
INSERT INTO `tabbing` VALUES (1,'創辦人','main',3,1),(2,'集團架構','main',7,4),(3,'集團發展','main',8,5),(4,'集團使命','main',9,7),(5,'集團核心','main',10,6),(6,'集團願景','main',11,2),(7,'集團目標','main',12,3),(8,'專業合作伙伴','wealth',15,1),(9,'專業智囊服務','wealth',16,2),(10,'家族規劃','wealth',17,3),(11,'八大系統','wealth',18,4),(12,'講座','family',21,4),(13,'展覽','family',22,5),(14,'資源及增值課程','school',25,1),(18,'強勢精英陣容','wealth',52,5),(29,'培訓課堂','school',51,3),(22,'內聖外王','school',26,2),(25,'資源整合','family',47,1),(26,'開放共贏','family',48,2),(28,'匯聚效應','family',50,3);
/*!40000 ALTER TABLE `tabbing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `texteditor`
--

DROP TABLE IF EXISTS `texteditor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `texteditor` (
  `textID` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `textindex` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `textarea` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`textID`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `texteditor`
--

LOCK TABLES `texteditor` WRITE;
/*!40000 ALTER TABLE `texteditor` DISABLE KEYS */;
INSERT INTO `texteditor` VALUES (1,'atext1','<h2><strong><span style=\"color:rgb(255, 215, 0)\"><span style=\"font-family:微軟正黑體\"><span style=\"font-size:26px\">締造中華貴族的</span><span style=\"font-size:36px\">平臺</span></span></span></strong></h2>\r\n'),(2,'atext2','<h1><span style=\"font-size:28px\"><strong><span style=\"color:rgb(255, 215, 0)\"><span style=\"font-family:微軟正黑體\">貴族 領航</span></span></strong></span></h1>\r\n\r\n<h2><strong><span style=\"font-size:22px\"><span style=\"color:rgb(255, 215, 0)\"><span style=\"font-family:微軟正黑體\">貴族的定義</span><br />\r\n<span style=\"font-family:微軟正黑體\">一些特有的群體，通過血緣、姓氏等某種特有的制度來繼承知識、權力、財富而形成的傳統。通常貴族成員擁有的知識與道德水平高於其他人，權力與責任大於其他人，財富多於其他人。</span></span></span></strong></h2>\r\n'),(19,'ctext19','<h2><span style=\"color:rgb(255, 215, 0)\"><strong><span style=\"font-size:26px\"><span style=\"font-family:微軟正黑體\">匯聚貴族資源的</span></span><span style=\"font-family:微軟正黑體\"><span style=\"font-size:36px\">圈子</span></span></strong></span></h2>\r\n'),(20,'ctext20','<h2><strong><span style=\"color:rgb(255, 215, 0)\"><span style=\"font-size:28px\"><span style=\"font-family:微軟正黑體\">掌握世界發展趨勢</span><br />\r\n<span style=\"font-family:微軟正黑體\">與時並進<br />\r\n掌握未來<br />\r\n領航世界</span></span></span></strong></h2>\r\n'),(3,'atext3','<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Lai Ka Lim, Carvin 黎嘉廉 <img alt=\"\" src=\"http://www.noblecfo.com/doc/images/human.jpg\" style=\"height:470px; width:314px\" /> <!--Editor 3--></td>\r\n			<td valign = \"top\"><br />\r\n			<span style=\"font-size:16px\"><span style=\"color:rgb(105, 105, 105)\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Bachelor of Science in Business Administration (BsBA)</span></span></span><br />\r\n			<span style=\"color:rgb(128, 128, 128)\"><span style=\"font-family:微軟正黑體\">工商管理學士</span></span></span> <!--Editor 4--><br />\r\n			<br />\r\n			<span style=\"font-family:微軟正黑體\"><span style=\"font-size:16px\"><span style=\"color:rgb(105, 105, 105)\">著作 :<br />\r\n			《藏富》<br />\r\n			《退休靠你自己》<br />\r\n			《理財規劃實務解套》<br />\r\n			《傳財家業 富過三代》</span></span></span> <!--Editor 5--></td>\r\n			<td valign = \"top\">\r\n			<h3>成長經歷</h3>\r\n			<span style=\"color:rgb(128, 128, 128)\"><span style=\"font-family:微軟正黑體\"><span style=\"font-size:16px\">2002年&nbsp; 加入金融業<br />\r\n			2012年&nbsp; 成立恆創財富顧問有限公司<br />\r\n			2014年&nbsp; 成立大中華家族辦公室<br />\r\n			2014年&nbsp; 成立貴族商學院<br />\r\n			2014年&nbsp; 組建成立貴族資本集團</span></span></span><br />\r\n			<span style=\"color:rgb(75, 0, 130)\"><span style=\"font-family:微軟正黑體\"><span style=\"font-size:16px\">&nbsp;</span></span></span> <!--Editor 6--></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),(18,'btext18','<img alt=\"\" src=\"http://www.noblecfo.com/doc/images/8service26.05.14.png\" style=\"height:329px; width:625px\" />'),(47,'ctext47','<img alt=\"\" src=\"http://www.noblecfo.com/doc/images/source26.05.14.png\" style=\"height:623px; width:555px\" />'),(48,'ctext48','<img alt=\"\" src=\"http://www.noblecfo.com/doc/images/open26.05.14.png\" style=\"height:837px; width:551px\" />'),(50,'ctext50','<img alt=\"\" src=\"http://www.noblecfo.com/doc/images/people26.05.14.png\" style=\"height:725px; width:679px\" />'),(51,'dtext51','<img alt=\"\" src=\"http://www.noblecfo.com/doc/images/Raulphoto3.JPG\" style=\"height:525px; width:700px\" />'),(13,'btext13','<h2><span style=\"color:rgb(255, 215, 0)\"><span style=\"font-family:微軟正黑體\"><strong><span style=\"font-size:26px\">璀璨貴族專業的</span><span style=\"font-size:36px\">智庫</span></strong></span></span></h2>\r\n'),(14,'btext14','<h2><strong><span style=\"font-size:28px\"><span style=\"color:rgb(255, 215, 0)\"><span style=\"font-family:微軟正黑體\">群集百方專才賢才，<br />\r\n有立場地打造大中華新一代貴族。</span></span></span></strong></h2>\r\n'),(15,'btext15','<img alt=\"\" src=\"http://www.noblecfo.com/doc/images/BusinessPartner30.06.14.png\" style=\"height:514px; width:583px\" /><img alt=\"\" src=\"http://www.noblecfo.com/doc/images/BusinessPartner23.06.14.png\" style=\"height:384px; width:436px\" />'),(16,'btext16','<img alt=\"\" src=\"http://www.noblecfo.com/doc/images/Services23.06.14.png\" style=\"height:539px; width:367px\" />'),(17,'btext17','<img alt=\"\" src=\"http://www.noblecfo.com/doc/images/Familyplan23.06.14.png\" style=\"height:325px; width:456px\" />'),(7,'atext7','<img alt=\"\" src=\"http://www.noblecfo.com/doc/images/groupchart23.06.14.png\" style=\"height:610px; width:434px\" />'),(8,'atext8','<img alt=\"\" src=\"http://www.noblecfo.com/doc/images/553 point 23.05.14.png\" style=\"height:608px; width:537px\" />'),(9,'atext9','<h3><span style=\"color:rgb(128, 128, 128)\"><strong><span style=\"font-size:22px\"><span style=\"font-family:微軟正黑體\">把智慧帶進中國，<br />\r\n讓中國領航世界!</span></span></strong></span></h3>\r\n\r\n<h1><strong><span style=\"color:rgb(75, 0, 130)\"><span style=\"font-size:28px\"><span style=\"font-family:微軟正黑體\">智慧。和諧。繁衍。傳承</span></span></span></strong></h1>\r\n'),(10,'atext10','<h3><strong><span style=\"color:rgb(75, 0, 130)\"><span style=\"font-size:28px\"><span style=\"font-family:微軟正黑體\">真正的財富</span></span></span></strong></h3>\r\n\r\n<p><span style=\"color:rgb(128, 128, 128)\"><strong><span style=\"font-size:22px\"><span style=\"font-family:微軟正黑體\">我們為了在未來的多少天能照顧多少人所做出的努力。<br />\r\n同時保護，孕育，滿足並教育他們。</span></span></strong></span></p>\r\n'),(11,'atext11','<img alt=\"\" src=\"http://www.noblecfo.com/doc/images/fuhingpic02.07.14.png\" style=\"height:701px; width:1230px\" /><img alt=\"\" src=\"http://www.noblecfo.com/doc/images/fuhingpic02.07.14.png\" style=\"height:399px; width:700px\" /><img alt=\"\" src=\"http://www.noblecfo.com/doc/images/fuhingpic23.05.14.png\" style=\"height:446px; width:700px\" />'),(12,'atext12','<h3><span style=\"color:rgb(169, 169, 169)\"><span style=\"font-size:22px\"><strong><span style=\"font-family:微軟正黑體\">1 億人民族復興願景工程</span></strong><br />\r\n<br />\r\n2043年前協助50萬位以上企業家建立家族憲法，建構家族系統，讓他們成為新中國第一批貴族。確保他們家族資產受到百分百保護，並保證可以按照他們意願有效管理家族財富，並按時、按量、按需、按條件永久公平分配家族福利，締造家族和諧，讓企業家後顧無憂。與此同時，邀請企業家服務身邊200位以上的朋友、企業員工、及社會群體。及籌建超過500間願景工程學校，創造真正的財富，以生命影響生命！<br />\r\n<br />\r\n這就是一億華人的民族復興願景工程，我們就是總工程師。</span></span><br />\r\n<br />\r\n<br />\r\n&nbsp;</h3>\r\n'),(21,'ctext21','<img alt=\"\" src=\"http://www.noblecfo.com/doc/images/family1.png\" />'),(22,'ctext22','<img alt=\"\" src=\"http://www.noblecfo.com/doc/images/family2.png\" />'),(23,'dtext23','<h2><span style=\"color:rgb(255, 215, 0)\"><strong><span style=\"font-size:26px\"><span style=\"font-family:微軟正黑體\">鑄煉內涵氣質的</span></span><span style=\"font-size:36px\">道場</span></strong></span></h2>\r\n'),(24,'dtext24','<h2><strong><span style=\"color:rgb(255, 215, 0)\"><span style=\"font-size:28px\">學海無涯</span></span></strong></h2>\r\n\r\n<p><strong><span style=\"color:rgb(255, 215, 0)\"><span style=\"font-size:26px\">修行自在心中、中西學術存庫<br />\r\n學會成功得失、品味內涵提升</span></span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n'),(25,'dtext25','<img alt=\"\" src=\"http://www.noblecfo.com/doc/images/lesson26.05.14.png\" style=\"height:811px; width:563px\" />'),(26,'dtext26','<img alt=\"\" src=\"http://www.noblecfo.com/doc/images/interouter26.05.14.png\" style=\"height:602px; width:572px\" />'),(27,'etext011','<p>電郵</p>\r\n\r\n<p><a href=\"mailto:admin@noble-cfo.com\">admin@noble-cfo.com</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>地址</p>\r\n\r\n<p>九龍尖沙咀東科學館道9號新東海商業中心2樓209室</p>\r\n'),(28,'info','報名及查詢，請填妥以上表格傳真至2722 4268或於星期一至五辦工時間內致電2722 4308或<br />\r\n電郵至<a href=\"mailto:admin@ewahk.com\">admin@ewahk.com</a><br />\r\n&nbsp;'),(29,'banner1','<h2><span style=\"color:rgb(255, 255, 255)\"><strong><span style=\"font-family:微軟正黑體\"><span style=\"font-size:28px\">締造中華貴族的</span><span style=\"font-size:48px\">平臺</span></span></strong></span></h2>\r\n'),(30,'banner2','<h2><span style=\"color:rgb(255, 255, 255)\"><span style=\"font-family:微軟正黑體\"><strong><span style=\"font-size:36px\"><span style=\"font-size:28px\">璀璨貴族專業</span>的</span><span style=\"font-size:48px\">智庫</span></strong></span></span></h2>\r\n'),(31,'banner3','<h2><span style=\"color:rgb(255, 255, 255)\"><strong><span style=\"font-size:28px\"><span style=\"font-family:微軟正黑體\">匯聚貴族資源的</span></span><span style=\"font-size:48px\"><span style=\"font-family:微軟正黑體\">圈子</span></span></strong></span></h2>\r\n'),(32,'banner4','<h2><span style=\"color:rgb(255, 255, 255)\"><strong><span style=\"font-size:28px\"><span style=\"font-family:微軟正黑體\">鑄煉內涵氣質的</span></span><span style=\"font-size:48px\">道場</span></strong></span></h2>\r\n'),(52,'btext52','');
/*!40000 ALTER TABLE `texteditor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-10-20 11:03:47
