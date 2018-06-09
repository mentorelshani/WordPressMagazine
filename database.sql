CREATE DATABASE  IF NOT EXISTS `projekti_web` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projekti_web`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: projekti_web
-- ------------------------------------------------------
-- Server version	5.6.21-log

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
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `img` varchar(40) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,1,'Title1','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.','img1.png','2018-10-09 00:00:00'),(3,1,'Title8','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','img8.png','2018-08-10 00:00:00'),(4,1,'Title2','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','img2.png','2018-10-10 00:00:00'),(5,1,'Title3','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','img3.png','2018-10-10 00:00:00'),(6,1,'Title4','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','img4.png','2018-10-10 00:00:00'),(7,1,'Title5','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','img5.png','2018-10-10 00:00:00'),(8,1,'Title6','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','img6.png','2018-10-10 00:00:00'),(9,3,'mentori','admin','img5.png','2018-06-02 03:01:33'),(12,3,'mentoriads','admindsdsdas','Layer12.png','2018-06-02 03:02:34'),(13,3,'mentorqwe','qwdas asdasd ','Layer12.png','2018-06-02 03:17:49'),(14,3,'mentorqwe','qwdas asdasd ','Layer13.png','2018-06-02 03:22:12'),(15,3,'mentorqwe','qwdas asdasd ','Layer13.png','2018-06-02 03:22:40'),(16,3,'mentorqwe','qwdas asdasd ','img/ea65c0c03defa99c7a25.png','2018-06-02 03:22:45'),(17,3,'mentorqwe','qwdas asdasd ','img/0c3c5d75fcb7525f92ae.png','2018-06-02 03:23:30'),(18,3,'mentorqwe','qwdas asdasd ','img/53672500d13f86e4f082.png','2018-06-02 03:23:45'),(19,3,'mentorqwe','qwdas asdasd ','img/74e758592305264f567c.png','2018-06-02 03:25:27'),(20,3,'mentorqwe','qwdas asdasd ','img/ae7b37a0beadddb485af.png','2018-06-02 03:26:46'),(21,3,'mentorqwe','qwdas asdasd ','img/8444b5af72651712a85f.png','2018-06-02 03:27:06'),(22,3,'mentorqwe','qwdas asdasd ','img/3c6b70544b5df2229def.png','2018-06-02 03:28:13'),(23,3,'mentorqwe','qwdas asdasd ','img/23e183162d56a64bb81d.png','2018-06-02 03:30:08'),(24,3,'mentorqwe','qwdas asdasd ','img/8cb88e636d556483a93d.png','2018-06-02 03:30:21'),(25,3,'mentorqwe','qwdas asdasd ','img/f273252e5f13d13dfb34.png','2018-06-02 03:32:19'),(26,3,'mentorqwe','qwdas asdasd ','img/730edb016b66013a09f9.png','2018-06-02 03:33:17'),(27,3,'','','img/13ee63ce8c2f76f335e2.png','2018-06-02 04:26:57');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles_categories`
--

DROP TABLE IF EXISTS `articles_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `article_id` (`article_id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `articles_categories_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `articles_categories_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles_categories`
--

LOCK TABLES `articles_categories` WRITE;
/*!40000 ALTER TABLE `articles_categories` DISABLE KEYS */;
INSERT INTO `articles_categories` VALUES (1,6,2),(2,6,6),(3,7,2),(5,6,5),(7,8,6),(8,1,6),(9,8,3),(10,6,5),(11,7,5),(12,25,1),(13,25,2),(14,25,4),(15,26,1),(16,26,2),(17,26,4),(18,4,1),(19,5,1),(20,4,1),(21,5,1);
/*!40000 ALTER TABLE `articles_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Design'),(2,'Inspiration'),(3,'WordPress'),(4,'Photography'),(5,'Showcase'),(6,'Tutorials'),(7,'Graphics');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `comment` text,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `article_id` (`article_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (4,1,8,'shum nice','2018-06-05 08:12:13');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,'MENTOR','user@gmail.com','message','2018-10-10 00:00:00'),(2,'User1','user@gmail.com','message','2018-10-10 00:00:00'),(3,'MENTOR','user@gmail.com','message','2018-10-10 00:00:00'),(4,'User2','user@gmail.com','message','2018-10-10 00:00:00'),(5,'Mentor','user@gmail.com','message','2018-10-10 00:00:00'),(6,'User1','user@gmail.com','message','2018-10-10 00:00:00'),(7,'User1','user@gmail.com','message','2018-10-10 00:00:00'),(8,'MENTOR','user@gmail.com','message','2018-10-10 00:00:00'),(9,'User2','user@gmail.com','message','2018-10-10 00:00:00'),(10,'Mentor','user@gmail.com','message','2018-10-10 00:00:00'),(11,'User1','user@gmail.com','message','2018-10-10 00:00:00'),(12,'mentorqwe','qwdas asdasd ','fsdfdsfsd','2018-06-02 04:21:04'),(13,'','','','2018-06-05 08:11:24'),(14,'','','','2018-06-08 07:46:29'),(15,'','','','2018-06-08 07:47:34'),(16,'','','','2018-06-08 07:48:01'),(17,'Mentir Bosi','user1@user1.com','Menta ','2018-06-08 07:48:15'),(18,'','','','2018-06-10 01:12:31'),(19,'','','','2018-06-10 01:14:22');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hash_password` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'mentor','men@asd.com','$argon2i$v=19$m=1024,t=2,p=2$WFhUUFIucy5razU5b1E3Vg$GqIRHQkWdq8SLnttpKgl5W3KnllHM/YQQt5flBSWBUk','2015-10-10 00:00:00','Admin'),(2,'mentor','men@asd.com','$argon2i$v=19$m=1024,t=2,p=2$WFhUUFIucy5razU5b1E3Vg$GqIRHQkWdq8SLnttpKgl5W3KnllHM/YQQt5flBSWBUk','2015-10-10 00:00:00','Admin'),(3,'mentori','men1@asd.com','$argon2i$v=19$m=1024,t=2,p=2$WFhUUFIucy5razU5b1E3Vg$GqIRHQkWdq8SLnttpKgl5W3KnllHM/YQQt5flBSWBUk','2015-10-10 00:00:00','Admin'),(4,'mentor','shum nice','$argon2i$v=19$m=1024,t=2,p=2$aVNQdFpIVlh4Wnovc0VlWA$7VZ4ga2MY6yKp70gLIZon4gHoZpEYQ/VT3cDhxOvQB8','2018-06-05 08:34:32','User'),(5,'mentor','shum nice','$argon2i$v=19$m=1024,t=2,p=2$VjdiMXFEYzVPbGk0RFFGYw$JJiYGH0lF6olKdKy7fnKhNSG6XR0x2ToVSOFZ6ixeH4','2018-06-05 08:40:49','User'),(6,'mentor','shum nice','$argon2i$v=19$m=1024,t=2,p=2$bGJPYzBWQlNveVRKZ1h5dA$wertMYqmsEg03ZF4yfLIpj6fBHCA4Cq7iK2qm4MVlU8','2018-06-05 08:41:22','User'),(7,'mentorwe','shum nicecv','$argon2i$v=19$m=1024,t=2,p=2$N096czRqRGhjLncuU0M1eQ$0uhJItKFVuxD4egpYBnErw8m67usGakOBbqXCAT336A','2018-06-05 08:42:45','User'),(8,'dasasddsaads','dasasddsadsa','$argon2i$v=19$m=1024,t=2,p=2$N2c0Q0U1YXQ3UVVOaU1Kag$L3NrvY4pg0H1UyMlh4EJFlBTazd84gJ6R4e5dGhsMOs','2018-06-10 12:15:09','User'),(9,'dsas','dsad','$argon2i$v=19$m=1024,t=2,p=2$Z2pkWEZZRDUvZXJYSEx4Zg$bpZ/laJPBUuI+OQpBxTeu4UoSc636gTUd6Hquu9gbcE','2018-06-10 12:15:53','User'),(10,'dsadasads','admin@admin.com','$argon2i$v=19$m=1024,t=2,p=2$L2Q4SlFka1ZmOGM5bkFCUQ$6d9lOwsLIcJozzbAxKYvfenBSxllfD4tQRzJpRk/YKQ','2018-06-10 12:22:03','User');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `v_articles`
--

DROP TABLE IF EXISTS `v_articles`;
/*!50001 DROP VIEW IF EXISTS `v_articles`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_articles` (
  `id` tinyint NOT NULL,
  `user_id` tinyint NOT NULL,
  `title` tinyint NOT NULL,
  `body` tinyint NOT NULL,
  `img` tinyint NOT NULL,
  `created_at` tinyint NOT NULL,
  `username` tinyint NOT NULL,
  `comments` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `v_articles`
--

/*!50001 DROP TABLE IF EXISTS `v_articles`*/;
/*!50001 DROP VIEW IF EXISTS `v_articles`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_articles` AS select `a`.`id` AS `id`,`a`.`user_id` AS `user_id`,`a`.`title` AS `title`,`a`.`body` AS `body`,`a`.`img` AS `img`,`a`.`created_at` AS `created_at`,`u`.`username` AS `username`,(select count(0) from `comments` `c` where (`c`.`article_id` = `a`.`id`)) AS `comments` from (`articles` `a` join `users` `u` on((`u`.`id` = `a`.`user_id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-10  1:20:53
