CREATE DATABASE  IF NOT EXISTS `food` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `food`;
-- MySQL dump 10.13  Distrib 5.6.22, for osx10.8 (x86_64)
--
-- Host: 127.0.0.1    Database: food
-- ------------------------------------------------------
-- Server version	5.5.42

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Afghan','2015-09-02 22:21:57',NULL),(2,'African','2015-09-02 22:21:57',NULL),(3,'American (New)','2015-09-02 22:21:57',NULL),(4,'American (Traditional)','2015-09-02 22:21:57',NULL),(5,'Arabian','2015-09-02 22:21:57',NULL),(6,'Argentine','2015-09-02 22:21:57',NULL),(7,'Armenian','2015-09-02 22:21:57',NULL),(8,'Asian Fusion','2015-09-02 22:21:57',NULL),(9,'Australian','2015-09-02 22:21:57',NULL),(10,'Austrian','2015-09-02 22:21:57',NULL),(11,'Bangladeshi','2015-09-02 22:21:57',NULL),(12,'Barbeque','2015-09-02 22:21:57',NULL),(13,'Basque','2015-09-02 22:21:57',NULL),(14,'Belgian','2015-09-02 22:21:57',NULL),(15,'Brasseries','2015-09-02 22:21:57',NULL),(16,'Brazilian','2015-09-02 22:21:57',NULL),(17,'Breakfast & Brunch','2015-09-02 22:21:57',NULL),(18,'British','2015-09-02 22:21:57',NULL),(19,'Buffets','2015-09-02 22:21:57',NULL),(20,'Burgers','2015-09-02 22:21:57',NULL),(21,'Burmese','2015-09-02 22:21:57',NULL),(22,'Cafes','2015-09-02 22:21:57',NULL),(23,'Cafeteria','2015-09-02 22:21:57',NULL),(24,'Cajun/Creole','2015-09-02 22:21:57',NULL),(25,'Calabrian','2015-09-02 22:21:57',NULL),(26,'Cambodian','2015-09-02 22:21:57',NULL),(27,'Cantonese','2015-09-02 22:21:57',NULL),(28,'Caribbean','2015-09-02 22:21:57',NULL),(29,'Catalan','2015-09-02 22:21:57',NULL),(30,'Cheesesteaks','2015-09-02 22:21:57',NULL),(31,'Chicken Shop','2015-09-02 22:21:57',NULL),(32,'Chicken Wings','2015-09-02 22:21:57',NULL),(33,'Chinese','2015-09-02 22:21:57',NULL),(34,'Colombian','2015-09-02 22:21:57',NULL),(35,'Comfort Food','2015-09-02 22:21:57',NULL),(36,'Creperies','2015-09-02 22:21:57',NULL),(37,'Cuban','2015-09-02 22:21:57',NULL),(38,'Czech','2015-09-02 22:21:57',NULL),(39,'Delis','2015-09-02 22:21:57',NULL),(40,'Dim Sum','2015-09-02 22:21:57',NULL),(41,'Diners','2015-09-02 22:21:57',NULL),(42,'Dominican','2015-09-02 22:21:57',NULL),(43,'Egyptian','2015-09-02 22:21:57',NULL),(44,'Ethiopian','2015-09-02 22:21:57',NULL),(45,'Falafel','2015-09-02 22:21:57',NULL),(46,'Fast Food','2015-09-02 22:21:57',NULL),(47,'Filipino','2015-09-02 22:21:57',NULL),(48,'Fish & Chips','2015-09-02 22:21:57',NULL),(49,'Fondue','2015-09-02 22:21:57',NULL),(50,'Food Court','2015-09-02 22:21:57',NULL),(51,'Food Stands','2015-09-02 22:21:57',NULL),(52,'French','2015-09-02 22:21:57',NULL),(53,'Gastropubs','2015-09-02 22:21:57',NULL),(54,'German','2015-09-02 22:21:57',NULL),(55,'Gluten-Free','2015-09-02 22:21:57',NULL),(56,'Greek','2015-09-02 22:21:57',NULL),(57,'Haitian','2015-09-02 22:21:57',NULL),(58,'Halal','2015-09-02 22:21:57',NULL),(59,'Hawaiian','2015-09-02 22:21:57',NULL),(60,'Himalayan/Nepalese','2015-09-02 22:21:57',NULL),(61,'Hot Dogs','2015-09-02 22:21:57',NULL),(62,'Hot Pot','2015-09-02 22:21:57',NULL),(63,'Hungarian','2015-09-02 22:21:57',NULL),(64,'Iberian','2015-09-02 22:21:57',NULL),(65,'Indian','2015-09-02 22:21:57',NULL),(66,'Indonesian','2015-09-02 22:21:57',NULL),(67,'Irish','2015-09-02 22:21:57',NULL),(68,'Italian','2015-09-02 22:21:57',NULL),(69,'Japanese','2015-09-02 22:21:57',NULL),(70,'Korean','2015-09-02 22:21:57',NULL),(71,'Kosher','2015-09-02 22:21:57',NULL),(72,'Laotian','2015-09-02 22:21:57',NULL),(73,'Latin American','2015-09-02 22:21:57',NULL),(74,'Lebanese','2015-09-02 22:21:57',NULL),(75,'Live/Raw Food','2015-09-02 22:21:57',NULL),(76,'Malaysian','2015-09-02 22:21:57',NULL),(77,'Mediterranean','2015-09-02 22:21:57',NULL),(78,'Mexican','2015-09-02 22:21:57',NULL),(79,'Middle Eastern','2015-09-02 22:21:57',NULL),(80,'Modern European','2015-09-02 22:21:57',NULL),(81,'Mongolian','2015-09-02 22:21:57',NULL),(82,'Moroccan','2015-09-02 22:21:57',NULL),(83,'Pakistani','2015-09-02 22:21:57',NULL),(84,'Persian/Iranian','2015-09-02 22:21:57',NULL),(85,'Peruvian','2015-09-02 22:21:57',NULL),(86,'Pizza','2015-09-02 22:21:57',NULL),(87,'Polish','2015-09-02 22:21:57',NULL),(88,'Portuguese','2015-09-02 22:21:57',NULL),(89,'Poutineries','2015-09-02 22:21:57',NULL),(90,'Puerto Rican','2015-09-02 22:21:57',NULL),(91,'Ramen','2015-09-02 22:21:57',NULL),(92,'Russian','2015-09-02 22:21:57',NULL),(93,'Salad','2015-09-02 22:21:57',NULL),(94,'Salvadoran','2015-09-02 22:21:57',NULL),(95,'Sandwiches','2015-09-02 22:21:57',NULL),(96,'Sardinian','2015-09-02 22:21:57',NULL),(97,'Scandinavian','2015-09-02 22:21:57',NULL),(98,'Scottish','2015-09-02 22:21:57',NULL),(99,'Seafood','2015-09-02 22:21:57',NULL),(100,'Senegalese','2015-09-02 22:21:57',NULL),(101,'Shanghainese','2015-09-02 22:21:57',NULL),(102,'Singaporean','2015-09-02 22:21:57',NULL),(103,'Slovakian','2015-09-02 22:21:57',NULL),(104,'Soul Food','2015-09-02 22:21:57',NULL),(105,'Soup','2015-09-02 22:21:57',NULL),(106,'South African','2015-09-02 22:21:57',NULL),(107,'Southern','2015-09-02 22:21:57',NULL),(108,'Spanish','2015-09-02 22:21:57',NULL),(109,'Sri Lankan','2015-09-02 22:21:57',NULL),(110,'Steakhouses','2015-09-02 22:21:57',NULL),(111,'Supper Clubs','2015-09-02 22:21:57',NULL),(112,'Sushi Bars','2015-09-02 22:21:57',NULL),(113,'Szechuan','2015-09-02 22:21:57',NULL),(114,'Taiwanese','2015-09-02 22:21:57',NULL),(115,'Tapas Bars','2015-09-02 22:21:57',NULL),(116,'Tapas/Small Plates','2015-09-02 22:21:57',NULL),(117,'Teppanyaki','2015-09-02 22:21:57',NULL),(118,'Tex-Mex','2015-09-02 22:21:57',NULL),(119,'Thai','2015-09-02 22:21:57',NULL),(120,'Trinidadian','2015-09-02 22:21:57',NULL),(121,'Turkish','2015-09-02 22:21:57',NULL),(122,'Tuscan','2015-09-02 22:21:57',NULL),(123,'Ukrainian','2015-09-02 22:21:57',NULL),(124,'Uzbek','2015-09-02 22:21:57',NULL),(125,'Vegan','2015-09-02 22:21:57',NULL),(126,'Vegetarian','2015-09-02 22:21:57',NULL),(127,'Venezuelan','2015-09-02 22:21:57',NULL),(128,'Vietnamese','2015-09-02 22:21:57',NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` VALUES ('76655a78effa9b357be4400ff93f7e9b','::1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.157 Safari/537.36',1441318781,'a:2:{s:9:\"user_data\";s:0:\"\";s:14:\"search_results\";a:6:{i:0;a:17:{s:2:\"id\";s:1:\"2\";s:7:\"meal_id\";s:1:\"2\";s:11:\"category_id\";s:3:\"119\";s:4:\"name\";s:19:\"Homemade Vietnamese\";s:11:\"description\";s:56:\"Bahn Mi, Rice noodles, and more with homemade fish sauce\";s:8:\"location\";N;s:11:\"meal_images\";N;s:5:\"price\";s:1:\"8\";s:8:\"quantity\";s:1:\"8\";s:10:\"created_at\";s:19:\"2015-09-02 22:58:08\";s:10:\"updated_at\";s:19:\"2015-09-02 22:58:08\";s:7:\"chef_id\";s:1:\"4\";s:9:\"meal_date\";s:19:\"2015-09-13 13:05:51\";s:10:\"min_diners\";s:1:\"4\";s:10:\"max_diners\";s:1:\"4\";s:3:\"lat\";s:11:\"37.36390203\";s:3:\"lng\";s:13:\"-121.88115955\";}i:1;a:17:{s:2:\"id\";s:2:\"10\";s:7:\"meal_id\";s:1:\"1\";s:11:\"category_id\";s:3:\"119\";s:4:\"name\";s:5:\"Ennui\";s:11:\"description\";s:24:\"Delicious Japanese Bento\";s:8:\"location\";N;s:11:\"meal_images\";N;s:5:\"price\";s:2:\"10\";s:8:\"quantity\";s:1:\"8\";s:10:\"created_at\";s:19:\"2015-09-02 22:58:08\";s:10:\"updated_at\";s:19:\"2015-09-02 22:58:08\";s:7:\"chef_id\";s:1:\"2\";s:9:\"meal_date\";s:19:\"2015-09-05 17:00:26\";s:10:\"min_diners\";s:1:\"2\";s:10:\"max_diners\";s:2:\"10\";s:3:\"lat\";s:11:\"37.39743104\";s:3:\"lng\";s:13:\"-121.87556104\";}i:2;a:17:{s:2:\"id\";s:2:\"16\";s:7:\"meal_id\";s:1:\"4\";s:11:\"category_id\";s:3:\"119\";s:4:\"name\";s:13:\"Italian Pasta\";s:11:\"description\";s:89:\"Perfectly marinated and grilled chicken carbonara with fettucini in a garlic-butter sauce\";s:8:\"location\";N;s:11:\"meal_images\";N;s:5:\"price\";s:2:\"15\";s:8:\"quantity\";s:1:\"5\";s:10:\"created_at\";s:19:\"2015-09-02 22:58:08\";s:10:\"updated_at\";s:19:\"2015-09-02 22:58:08\";s:7:\"chef_id\";s:1:\"5\";s:9:\"meal_date\";s:19:\"2015-09-23 17:27:23\";s:10:\"min_diners\";s:1:\"2\";s:10:\"max_diners\";s:1:\"9\";s:3:\"lat\";s:11:\"37.37771035\";s:3:\"lng\";s:12:\"-121.9742573\";}i:3;a:17:{s:2:\"id\";s:2:\"50\";s:7:\"meal_id\";s:1:\"5\";s:11:\"category_id\";s:3:\"119\";s:4:\"name\";s:35:\"massa. Mauris vestibulum, neque sed\";s:11:\"description\";s:18:\"non, bibendum sed,\";s:8:\"location\";N;s:11:\"meal_images\";N;s:5:\"price\";s:2:\"23\";s:8:\"quantity\";s:1:\"7\";s:10:\"created_at\";s:19:\"2015-09-02 22:58:08\";s:10:\"updated_at\";s:19:\"2015-09-02 22:58:08\";s:7:\"chef_id\";s:1:\"4\";s:9:\"meal_date\";s:19:\"2015-09-23 00:26:12\";s:10:\"min_diners\";s:1:\"1\";s:10:\"max_diners\";s:1:\"5\";s:3:\"lat\";s:11:\"37.39404657\";s:3:\"lng\";s:13:\"-122.15193414\";}i:4;a:17:{s:2:\"id\";s:2:\"96\";s:7:\"meal_id\";s:1:\"7\";s:11:\"category_id\";s:3:\"119\";s:4:\"name\";s:22:\"Sed eget lacus. Mauris\";s:11:\"description\";s:102:\"Praesent eu dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\";s:8:\"location\";N;s:11:\"meal_images\";N;s:5:\"price\";s:2:\"25\";s:8:\"quantity\";s:1:\"2\";s:10:\"created_at\";s:19:\"2015-09-02 22:58:08\";s:10:\"updated_at\";s:19:\"2015-09-02 22:58:08\";s:7:\"chef_id\";s:1:\"2\";s:9:\"meal_date\";s:19:\"2015-09-27 20:57:19\";s:10:\"min_diners\";s:1:\"5\";s:10:\"max_diners\";s:1:\"9\";s:3:\"lat\";s:11:\"37.34940552\";s:3:\"lng\";s:13:\"-121.91797286\";}i:5;a:17:{s:2:\"id\";s:3:\"116\";s:7:\"meal_id\";s:2:\"19\";s:11:\"category_id\";s:3:\"119\";s:4:\"name\";s:29:\"Donec est mauris, rhoncus id,\";s:11:\"description\";s:25:\"nonummy ultricies ornare,\";s:8:\"location\";N;s:11:\"meal_images\";N;s:5:\"price\";s:1:\"8\";s:8:\"quantity\";s:1:\"8\";s:10:\"created_at\";s:19:\"2015-09-02 22:58:08\";s:10:\"updated_at\";s:19:\"2015-09-02 22:58:08\";s:7:\"chef_id\";s:1:\"1\";s:9:\"meal_date\";s:19:\"2015-09-09 13:56:56\";s:10:\"min_diners\";s:1:\"5\";s:10:\"max_diners\";s:1:\"6\";s:3:\"lat\";s:11:\"37.38714426\";s:3:\"lng\";s:13:\"-122.15468184\";}}}');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meals`
--

DROP TABLE IF EXISTS `meals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meals` (
  `meal_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` longtext,
  `location` mediumtext,
  `meal_images` varchar(255) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `chef_id` int(11) DEFAULT NULL,
  `meal_date` datetime DEFAULT NULL,
  `min_diners` int(11) DEFAULT NULL,
  `max_diners` int(11) DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL,
  PRIMARY KEY (`meal_id`),
  KEY `fk_meals_shops1_idx` (`chef_id`),
  CONSTRAINT `fk_meals_shops1` FOREIGN KEY (`chef_id`) REFERENCES `shops` (`shop_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meals`
--

LOCK TABLES `meals` WRITE;
/*!40000 ALTER TABLE `meals` DISABLE KEYS */;
INSERT INTO `meals` VALUES (1,'Ennui','Delicious Japanese Bento',NULL,NULL,'10',8,'2015-09-02 22:58:08','2015-09-02 22:58:08',2,'2015-09-05 17:00:26',2,10,37.39743104,-121.87556104),(2,'Homemade Vietnamese','Bahn Mi, Rice noodles, and more with homemade fish sauce',NULL,NULL,'8',8,'2015-09-02 22:58:08','2015-09-02 22:58:08',4,'2015-09-13 13:05:51',4,4,37.36390203,-121.88115955),(3,'Steak and Potatoes','Classic American',NULL,NULL,'13',6,'2015-09-02 22:58:08','2015-09-02 22:58:08',3,'2015-09-18 06:44:03',3,5,37.37782271,-122.04279275),(4,'Italian Pasta','Perfectly marinated and grilled chicken carbonara with fettucini in a garlic-butter sauce',NULL,NULL,'15',5,'2015-09-02 22:58:08','2015-09-02 22:58:08',5,'2015-09-23 17:27:23',2,9,37.37771035,-121.9742573),(5,'massa. Mauris vestibulum, neque sed','non, bibendum sed,',NULL,NULL,'23',7,'2015-09-02 22:58:08','2015-09-02 22:58:08',4,'2015-09-23 00:26:12',1,5,37.39404657,-122.15193414),(6,'Phasellus fermentum convallis ligula.','dolor. Fusce feugiat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam auctor, velit',NULL,NULL,'13',10,'2015-09-02 22:58:08','2015-09-02 22:58:08',5,'2015-09-10 07:05:01',2,4,37.35486242,-122.07595702),(7,'Sed eget lacus. Mauris','Praesent eu dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',NULL,NULL,'25',2,'2015-09-02 22:58:08','2015-09-02 22:58:08',2,'2015-09-27 20:57:19',5,9,37.34940552,-121.91797286),(8,'Nullam velit dui, semper','Sed molestie. Sed id risus quis diam',NULL,NULL,'14',2,'2015-09-02 22:58:08','2015-09-02 22:58:08',1,'2015-09-20 15:27:51',1,8,37.34474129,-122.03790726),(9,'sed orci lobortis augue scelerisque','tellus lorem eu',NULL,NULL,'24',3,'2015-09-02 22:58:08','2015-09-02 22:58:08',3,'2015-09-13 18:38:54',1,5,37.36321968,-122.0706813),(10,'dis parturient montes, nascetur','dui, in sodales elit erat vitae risus. Duis a mi fringilla',NULL,NULL,'14',10,'2015-09-02 22:58:08','2015-09-02 22:58:08',3,'2015-09-17 11:28:41',2,7,37.36196557,-122.00061163),(11,'diam eu dolor egestas','Vestibulum accumsan neque et nunc. Quisque ornare tortor at risus. Nunc ac sem ut dolor dapibus gravida. Aliquam',NULL,NULL,'18',3,'2015-09-02 22:58:08','2015-09-02 22:58:08',2,'2015-09-25 16:31:15',2,8,37.40863935,-121.94225088),(12,'rhoncus. Nullam velit dui, semper','Maecenas mi felis, adipiscing fringilla, porttitor vulputate, posuere',NULL,NULL,'21',2,'2015-09-02 22:58:08','2015-09-02 22:58:08',4,'2015-09-22 14:07:16',1,3,37.36272309,-121.83479607),(13,'Curae Phasellus ornare.','erat. Sed nunc est, mollis non, cursus non, egestas a, dui. Cras pellentesque. Sed dictum. Proin eget odio. Aliquam',NULL,NULL,'10',2,'2015-09-02 22:58:08','2015-09-02 22:58:08',1,'2015-09-16 09:56:51',5,6,37.38687459,-121.84449977),(14,'nisi sem semper erat, in','Donec est. Nunc ullamcorper, velit in aliquet lobortis, nisi nibh lacinia orci, consectetuer euismod est',NULL,NULL,'9',4,'2015-09-02 22:58:08','2015-09-02 22:58:08',5,'2015-09-17 16:48:18',5,7,37.36825642,-121.95936857),(15,'Aliquam fringilla cursus purus. Nullam','Nullam vitae diam. Proin dolor. Nulla semper tellus id nunc',NULL,NULL,'9',4,'2015-09-02 22:58:08','2015-09-02 22:58:08',1,'2015-09-06 22:55:47',2,2,37.36935719,-121.89182141),(16,'mauris a nunc. In at','aliquet odio. Etiam ligula tortor, dictum eu, placerat eget, venenatis a, magna. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',NULL,NULL,'19',2,'2015-09-02 22:58:08','2015-09-02 22:58:08',3,'2015-09-16 19:29:25',2,4,37.416025,-121.99236035),(17,'diam. Sed diam lorem, auctor','gravida molestie arcu. Sed eu nibh vulputate mauris sagittis placerat. Cras dictum ultricies ligula. Nullam enim. Sed nulla',NULL,NULL,'16',8,'2015-09-02 22:58:08','2015-09-02 22:58:08',4,'2015-09-14 08:14:52',2,3,37.39062679,-121.95098261),(18,'mus. Aenean','magna. Praesent interdum',NULL,NULL,'6',4,'2015-09-02 22:58:08','2015-09-02 22:58:08',2,'2015-09-11 17:17:38',2,8,37.37906933,-122.02500304),(19,'Donec est mauris, rhoncus id,','nonummy ultricies ornare,',NULL,NULL,'8',8,'2015-09-02 22:58:08','2015-09-02 22:58:08',1,'2015-09-09 13:56:56',5,6,37.38714426,-122.15468184),(20,'augue malesuada malesuada. Integer','nulla. In tincidunt congue turpis. In condimentum.',NULL,NULL,'4',6,'2015-09-02 22:58:08','2015-09-02 22:58:08',4,'2015-09-13 12:19:32',1,3,37.36677049,-121.95586044),(21,'libero. Donec consectetuer','pulvinar arcu et pede. Nunc sed orci lobortis augue scelerisque mollis. Phasellus',NULL,NULL,'21',10,'2015-09-02 22:58:08','2015-09-02 22:58:08',3,'2015-09-15 07:43:09',4,5,37.40131304,-122.14730128),(22,'tempor augue ac ipsum. Phasellus','parturient montes, nascetur ridiculus mus. Proin',NULL,NULL,'9',4,'2015-09-02 22:58:08','2015-09-02 22:58:08',2,'2015-09-11 10:55:05',5,5,37.39566819,-122.08497696),(23,'Ut nec urna et arcu','at, egestas a, scelerisque sed, sapien. Nunc pulvinar arcu et pede. Nunc',NULL,NULL,'15',5,'2015-09-02 22:58:08','2015-09-02 22:58:08',3,'2015-09-29 15:04:02',3,9,37.40903176,-121.9372057),(24,'Quisque varius. Nam','erat. Etiam vestibulum massa rutrum magna. Cras convallis',NULL,NULL,'9',9,'2015-09-02 22:58:08','2015-09-02 22:58:08',5,'2015-09-05 07:05:26',5,8,37.42585529,-122.16190381),(25,'fermentum risus, at','et ipsum cursus vestibulum. Mauris magna. Duis dignissim tempor arcu. Vestibulum ut eros non',NULL,NULL,'8',7,'2015-09-02 22:58:08','2015-09-02 22:58:08',3,'2015-09-24 21:37:15',5,7,37.37398998,-122.0759011),(26,'nec, leo. Morbi neque','Nulla facilisi. Sed',NULL,NULL,'23',8,'2015-09-02 22:58:08','2015-09-02 22:58:08',1,'2015-09-26 03:07:34',3,9,37.35690229,-121.98618559),(27,'Sed nunc est, mollis non,','Donec elementum, lorem ut aliquam iaculis, lacus pede sagittis augue, eu tempor erat neque non quam.',NULL,NULL,'15',10,'2015-09-02 22:58:08','2015-09-02 22:58:08',1,'2015-09-10 15:52:00',2,5,37.38212721,-122.06855392),(28,'sem elit, pharetra','Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat, augue. Sed molestie. Sed',NULL,NULL,'9',5,'2015-09-02 22:58:08','2015-09-02 22:58:08',1,'2015-09-12 17:28:41',1,7,37.41387243,-121.9054027);
/*!40000 ALTER TABLE `meals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meals_categories`
--

DROP TABLE IF EXISTS `meals_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meals_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meal_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mealidfk_idx` (`meal_id`),
  KEY `categoryidfk_idx` (`category_id`),
  CONSTRAINT `mealidfk` FOREIGN KEY (`meal_id`) REFERENCES `meals` (`meal_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `categoryidfk` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=141 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meals_categories`
--

LOCK TABLES `meals_categories` WRITE;
/*!40000 ALTER TABLE `meals_categories` DISABLE KEYS */;
INSERT INTO `meals_categories` VALUES (1,9,115),(2,2,119),(3,4,51),(4,23,78),(5,13,12),(6,17,121),(7,6,47),(8,7,80),(9,2,57),(10,1,119),(11,13,16),(12,21,55),(13,3,84),(14,17,10),(15,9,112),(16,4,119),(17,6,111),(18,14,28),(19,2,60),(20,5,68),(21,16,90),(22,16,84),(23,2,111),(24,22,25),(25,10,120),(26,28,4),(27,28,77),(28,25,10),(29,17,48),(30,4,56),(31,12,29),(32,19,121),(33,10,71),(34,2,23),(35,25,12),(36,12,76),(37,27,52),(38,25,48),(39,3,61),(40,1,26),(41,6,83),(42,17,56),(43,24,7),(44,11,11),(45,19,126),(46,19,79),(47,17,60),(48,27,116),(49,12,15),(50,5,119),(51,20,104),(52,6,49),(53,27,84),(54,18,4),(55,27,117),(56,1,44),(57,7,8),(58,23,117),(59,16,46),(60,13,117),(61,14,125),(62,23,52),(63,12,72),(64,22,37),(65,23,20),(66,13,84),(67,4,97),(68,4,75),(69,12,75),(70,16,65),(71,24,22),(72,28,41),(73,24,83),(74,13,17),(75,25,66),(76,22,121),(77,23,41),(78,28,74),(79,5,32),(80,2,33),(81,5,99),(82,22,118),(83,12,92),(84,13,16),(85,10,20),(86,26,10),(87,10,67),(88,22,47),(89,10,30),(90,9,27),(91,21,121),(92,9,83),(93,3,78),(94,2,86),(95,8,124),(96,7,119),(97,27,19),(98,23,37),(99,22,41),(100,8,117),(101,27,19),(102,7,40),(103,23,18),(104,17,91),(105,20,36),(106,2,106),(107,17,35),(108,8,45),(109,22,57),(110,19,14),(111,3,35),(112,4,111),(113,21,4),(114,13,39),(115,9,5),(116,19,119),(117,13,11),(118,18,22),(119,6,94),(120,25,85),(121,15,41),(122,10,115),(123,15,42),(124,23,63),(125,26,81),(126,16,21),(127,12,93),(128,20,40),(129,11,35),(130,10,74),(131,12,102),(132,18,41),(133,13,89),(134,22,1),(135,8,40),(136,13,88),(137,8,128),(138,27,47),(139,15,46),(140,5,81);
/*!40000 ALTER TABLE `meals_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meals_in_order`
--

DROP TABLE IF EXISTS `meals_in_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meals_in_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `meal_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_meals_in_order_orders1_idx` (`order_id`),
  KEY `fk_meals_in_order_meals1_idx` (`meal_id`),
  CONSTRAINT `fk_meals_in_order_orders1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_meals_in_order_meals1` FOREIGN KEY (`meal_id`) REFERENCES `meals` (`meal_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meals_in_order`
--

LOCK TABLES `meals_in_order` WRITE;
/*!40000 ALTER TABLE `meals_in_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `meals_in_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `content` longtext,
  `rating` int(11) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `meal_id` int(11) NOT NULL,
  PRIMARY KEY (`review_id`),
  KEY `fk_reviews_shops1_idx` (`meal_id`),
  CONSTRAINT `fk_reviews_shops1` FOREIGN KEY (`meal_id`) REFERENCES `shops` (`shop_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shops`
--

DROP TABLE IF EXISTS `shops`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shops` (
  `shop_id` int(11) NOT NULL AUTO_INCREMENT,
  `chef_id` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`shop_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shops`
--

LOCK TABLES `shops` WRITE;
/*!40000 ALTER TABLE `shops` DISABLE KEYS */;
INSERT INTO `shops` VALUES (1,1,'Shop1',NULL,'2015-09-02 21:37:23',NULL),(2,1,'Shop2',NULL,'2015-09-02 21:37:23',NULL),(3,2,'shop3',NULL,'2015-09-02 21:37:23',NULL),(4,3,'shop4',NULL,'2015-09-02 21:37:23',NULL),(5,4,'shop5',NULL,'2015-09-02 21:37:23',NULL),(6,5,'shop3',NULL,'2015-09-02 21:37:23',NULL);
/*!40000 ALTER TABLE `shops` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `salt` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `description` longtext,
  `profile_photo` varchar(255) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'isaac','test@test.com','1234','asdfasdf',NULL,NULL,'2015-09-01 19:32:04','2015-09-01 19:32:04',NULL,NULL,2),(2,'Ani','ani@ani.com','1234','74fdcc38787769fc868b987fd7431371','0bf49572321d429f91ee6be174f692',NULL,'2015-09-02 20:56:52','2015-09-02 20:56:52',NULL,NULL,1),(3,'Lan','lan@lan.com','1234','2b06f321f7b32c05e584127505a6b948','d20c7bf1b9d47f9db7a855d4de17d4',NULL,'2015-09-02 21:13:06','2015-09-02 21:14:15','My name is LLLANNNNN!','IMG_2140.JPG',2),(4,'Nicko','nick@nick.com','1234','51aefdfcd46823844aba660ba322c51f','bedfd1da608789604c5a1442b5014c',NULL,'2015-09-02 21:16:11','2015-09-02 21:16:11',NULL,NULL,3),(5,'Joe','joe@joe.com','1234','280d9c1e99c999dc27190969dadeed5b','154f23b6f71b56c88cf1016f0d697f',NULL,'2015-09-02 21:18:14','2015-09-02 21:18:14',NULL,NULL,2),(6,'Herbert','test2@test.com','1234','3bb0975ea4e278d69f86e7b54a2c5ebe','c9e2f378e873334717ce60a7a53795',NULL,'2015-09-02 21:37:23','2015-09-02 21:38:00','My name is Herbert','IMG_0625.JPG',3);
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

-- Dump completed on 2015-09-03 15:23:17
