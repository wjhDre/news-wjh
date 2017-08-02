-- MySQL dump 10.13  Distrib 5.6.33, for Win64 (x86_64)
--
-- Host: localhost    Database: newsWJH
-- ------------------------------------------------------
-- Server version	5.6.33

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
-- Table structure for table `jiequhuodong`
--

DROP TABLE IF EXISTS `jiequhuodong`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jiequhuodong` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `img` varchar(100) NOT NULL,
  `tm` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jiequhuodong`
--

LOCK TABLES `jiequhuodong` WRITE;
/*!40000 ALTER TABLE `jiequhuodong` DISABLE KEYS */;
INSERT INTO `jiequhuodong` VALUES (1,'韩国留学生圆梦创业大街','220米长的中关村创业大街，除了是中国创业者的淘金之路外，也是许多海外创业者的“中国梦”开始的地方。','14962791038194bng5.jpg','17-06-01'),(2,'看中关村创业大街“总理咖啡”的化学反应','北京中关村创业大街的3W咖啡有一款畅销了整整两年的明星饮品，名为“总理咖啡”。这家创业咖啡馆一进门摆放的照片，记录了2015年5月7日李克强在这里和青年创业者们边喝咖啡边聊天的场景。','14962791505298xinwen.jpg','17-06-01'),(3,'2017创响中国北京站活动邀请函',' 为推动大众创业、万众创新纵深发展，促进产业创新升级，引领实体经济发展，2017创响中国北京站活动将于6月6日-6月15日在北京海淀举行。','14962791817899bng5.jpg','17-06-01'),(4,'中关村知识产权帮扶计划在创业大街启动','4月21日， 中关村知识产权帮扶计划启动暨走进创业大街专场在全球创新社区成功举办，此次活动是为帮助相关企业和服务机构更好地了解《新政》，更有政府领导和行业专家为大家进行政策与知识产权有关的解读。','14962792519213xinwen.jpg','17-06-01');
/*!40000 ALTER TABLE `jiequhuodong` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jiequxinwen`
--

DROP TABLE IF EXISTS `jiequxinwen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jiequxinwen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `img` varchar(100) NOT NULL,
  `tm` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jiequxinwen`
--

LOCK TABLES `jiequxinwen` WRITE;
/*!40000 ALTER TABLE `jiequxinwen` DISABLE KEYS */;
INSERT INTO `jiequxinwen` VALUES (1,'中关村知识产权帮扶计划在创业大街启动','4月21日， 中关村知识产权帮扶计划启动暨走进创业大街专场在全球创新社区成功举办，此次活动是为帮助相关企业和服务机构更好地了解《新政》，更有政府领导和行业专家为大家进行政策与知识产权有关的解读。','14962793804926bng5.jpg','17-06-01'),(2,'韩国留学生圆梦创业大街','220米长的中关村创业大街，除了是中国创业者的淘金之路外，也是许多海外创业者的“中国梦”开始的地方。','14962794742519bng5.jpg','17-06-01'),(3,'看中关村创业大街“总理咖啡”的化学反应','北京中关村创业大街的3W咖啡有一款畅销了整整两年的明星饮品，名为“总理咖啡”。这家创业咖啡馆一进门摆放的照片，记录了2015年5月7日李克强在这里和青年创业者们边喝咖啡边聊天的场景。','14962796357979bng5.jpg','17-06-01'),(4,'北京日报：“五四”青年节，青年创业忙',' 昨日的中关村创业大街上，一群青年们通过热烈的创业项目路演度过了属于自己的节日。一批充满创新创意的创业项目在“融创中国，智汇共青”主题的车库咖啡“五四”双创周路演会上亮相，寻觅投资人与潜在合作伙伴。','14962796728427xinwen.jpg','17-06-01'),(5,'2017创响中国北京站活动邀请函',' 为推动大众创业、万众创新纵深发展，促进产业创新升级，引领实体经济发展，2017创响中国北京站活动将于6月6日-6月15日在北京海淀举行。','14962797491290xinwen.jpg','17-06-01');
/*!40000 ALTER TABLE `jiequxinwen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ruzhujigou`
--

DROP TABLE IF EXISTS `ruzhujigou`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ruzhujigou` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `img` varchar(100) NOT NULL,
  `tm` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ruzhujigou`
--

LOCK TABLES `ruzhujigou` WRITE;
/*!40000 ALTER TABLE `ruzhujigou` DISABLE KEYS */;
INSERT INTO `ruzhujigou` VALUES (1,'创业邦','最懂创业者，离资本最近','14962829153666jigou1.jpg','17-06-01'),(2,'拓荒族','集办公、营销、孵化功能三位一体的企业发展生态圈','14962829377367jigou2.gif','17-06-01'),(3,'洋葱投','洋葱投致力于为创业者打造一个全方位、宽领域、多元化的创投服务平台。','14962829666703jigou3.gif','17-06-01'),(4,'联想之星','成立于2008年，是联想控股旗下的综合性专业投资孵化机构','14962830029674jigou23.gif','17-06-01'),(5,'车库咖啡','成立于2011年4月，是中关村创业大街上最早的一批创业主题咖啡厅之一','14962830495580jigou7.gif','17-06-01'),(6,'硬创邦','硬创邦是国内领先的硬件和创客教育平台，由雷锋网和好未来联合创办','14962830881597jigou17.gif','17-06-01'),(7,'言几又','以书店为背景、咖啡为渗透、主题活动为拉动，提供新生活方式用品的创新文化生活一体店','14962866141020jigou24.gif','17-06-01'),(8,'拉勾网','拉勾网，是一家专为工作3到10年的资深互联网从业者，提供成长方案的互联网垂直招聘网站','14962866471019jigou25.gif','17-06-01'),(9,'3W咖啡','互联网主题馆，旗下包含3W咖啡馆、3W创新传媒、3W孵化器、3W基金、拉勾招聘','14962867083392jigou8.gif','17-06-01');
/*!40000 ALTER TABLE `ruzhujigou` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'wjh','123','123123@qq.com'),(2,'aaa','111','122@qq.com');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-01 18:33:41
