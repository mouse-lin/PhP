-- MySQL dump 10.13  Distrib 5.1.41, for debian-linux-gnu (i486)
--
-- Host: localhost    Database: php
-- ------------------------------------------------------
-- Server version	5.1.41-3ubuntu12.10

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
-- Current Database: `php`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `php` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `php`;

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accounts`
--

LOCK TABLES `accounts` WRITE;
/*!40000 ALTER TABLE `accounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `introduce` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `game_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `games`
--

LOCK TABLES `games` WRITE;
/*!40000 ALTER TABLE `games` DISABLE KEYS */;
INSERT INTO `games` VALUES (96,'../img/games/hot_game/星级争霸2',' 星际争霸2','星级争霸十年在写辉煌','hot_game','2011-05-09 06:05:06','2011-05-09 06:05:06'),(97,'../img/games/hot_game/征途','征途','巨人网络耗时3年精心打造的一款2D大型角色扮演类网络游戏','hot_game','2011-05-09 06:05:06','2011-05-09 06:05:06'),(98,'../img/games/hot_game/QQ仙境','QQ仙境','让我们一起追随雷阿女神 向着白色城堡出发','hot_game','2011-05-09 06:05:06','2011-05-09 06:05:06'),(99,'../img/games/hot_game/魔兽世界','魔兽世界','魔兽世界,让你体验不一样的世界！','hot_game','2011-05-09 06:05:06','2011-05-09 06:05:06'),(100,'../img/games/hot_game/寻仙','寻仙','携刀剑之风，踏寻仙之路','hot_game','2011-05-09 06:05:06','2011-05-09 06:05:06'),(101,'../img/games/hot_game/诛仙2','诛仙2','张小凡的故事将由你书写','hot_game','2011-05-09 06:05:06','2011-05-09 06:05:06'),(102,'../img/games/hot_game/地下城与勇士','地下城与勇士','街机，格斗，打击感，判定……这就是DNF','hot_game','2011-05-09 06:05:06','2011-05-09 06:05:06'),(103,'../img/games/hot_game/新天下贰','新天下贰','一起走进美丽的大荒世界~','hot_game','2011-05-09 06:05:06','2011-05-09 06:05:06'),(104,'../img/games/hot_game/倩女幽魂','倩女幽魂','网易精心打造2.5D即时制仙侠网游巅峰巨作！','hot_game','2011-05-09 06:05:06','2011-05-09 06:05:06'),(105,'../img/games/expert_game/大唐无双','大唐无双','最具操作性的2.5D写实PK网游！','expert_game','2011-05-09 06:05:06','2011-05-09 06:05:06'),(106,'../img/games/expert_game/轩辕传奇','轩辕传奇','腾讯出品，上古史诗战争为核心的中式玄幻网游!','expert_game','2011-05-09 06:05:06','2011-05-09 06:05:06'),(107,'../img/games/expert_game/龙之谷','龙之谷','无锁定操作、3D画面、激烈PVP，酣畅淋漓打击感…','expert_game','2011-05-09 06:05:07','2011-05-09 06:05:07'),(108,'../img/games/expert_game/武林外传','武林外传','嘿！兄弟，我们好久不见你在哪里','expert_game','2011-05-09 06:05:07','2011-05-09 06:05:07'),(109,'../img/games/expert_game/梦幻诛仙','梦幻诛仙','历时三年研发，进军2D市场！','expert_game','2011-05-09 06:05:07','2011-05-09 06:05:07'),(110,'../img/games/expert_game/鹿鼎记','鹿鼎记','搜狐畅游超越天龙八部的游戏大作！','expert_game','2011-05-09 06:05:07','2011-05-09 06:05:07'),(111,'../img/games/expert_game/创世西游','创世西游','网易西游三部曲，新章','expert_game','2011-05-09 06:05:07','2011-05-09 06:05:07'),(112,'../img/games/expert_game/天骄3','天骄3','天骄系列，光宇华夏运营的3D国产玄幻网游~','expert_game','2011-05-09 06:05:07','2011-05-09 06:05:07'),(113,'../img/games/expert_game/最终幻想14','最终幻想14','网络次世代，一个延续了十四代的最终幻想将展开！','expert_game','2011-05-09 06:05:07','2011-05-09 06:05:07'),(114,'../img/games/expert_game/永恒之塔','永恒之塔','Ncsoft续天堂II之后的最强之作！','expert_game','2011-05-09 06:05:07','2011-05-09 06:05:07'),(115,'../img/games/expert_game/笑傲江湖','笑傲江湖','完美耗巨资制作的一款国际武侠游戏！','expert_game','2011-05-09 06:05:07','2011-05-09 06:05:07'),(116,'../img/games/expert_game/星辰变','星辰变','盛大2D次世代动作网游！','expert_game','2011-05-09 06:05:07','2011-05-09 06:05:07'),(117,'../img/games/other_game/真三国无双','真三国无双','在游戏世界中，每个玩家都是从新兵做起，通过不断的成长和锻炼，证明自己的实力。','other_game','2011-05-09 06:05:07','2011-05-09 06:05:07'),(118,'../img/games/other_game/口袋西游','口袋西游','管你神魔妖怪，统统入我口袋！','other_game','2011-05-09 06:05:07','2011-05-09 06:05:07'),(119,'../img/games/other_game/极光世界','极光世界','一款3D高清网游，公测震撼开启','other_game','2011-05-09 06:05:07','2011-05-09 06:05:07'),(120,'../img/games/other_game/突击风暴','突击风暴','由盛大游戏在中国大陆地区运营的世界著名FPS大作！','other_game','2011-05-09 06:05:07','2011-05-09 06:05:07'),(121,'../img/games/other_game/三国杀','三国杀','三国杀OL，一款风靡互联网的卡牌游戏','other_game','2011-05-09 06:05:07','2011-05-09 06:05:07'),(122,'../img/games/other_game/水煮江山','水煮江山','不一样的江山，不一样的激情!','other_game','2011-05-09 06:05:07','2011-05-09 06:05:07');
/*!40000 ALTER TABLE `games` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schema_migrations`
--

DROP TABLE IF EXISTS `schema_migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schema_migrations` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  UNIQUE KEY `unique_schema_migrations` (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schema_migrations`
--

LOCK TABLES `schema_migrations` WRITE;
/*!40000 ALTER TABLE `schema_migrations` DISABLE KEYS */;
INSERT INTO `schema_migrations` VALUES ('20110422091714'),('20110422152544'),('20110502132459'),('20110509024929');
/*!40000 ALTER TABLE `schema_migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_confirmation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-05-09 14:11:57
