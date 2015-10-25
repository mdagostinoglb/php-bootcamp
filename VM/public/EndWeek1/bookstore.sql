-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: bookstore
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.1

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
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (1,'Vestibulum Libero Mi Netus Pellentesque.',34.00,'Fringilla purus accumsan aptent adipiscing interdum adipiscing ipsum leo quis nisl laoreet. Senectus porta pellentesque eu cras.\r\n\r\nMontes nulla pharetra urna vel accumsan.\r\n\r\nTempor justo, neque posuere nisi aliquam vel conubia dui. Amet Ornare faucibus interdum ligula praesent maecenas netus\r\n'),(2,'Quam Nunc Aenean Vulputate Habitant.',23.00,'Id vitae non. Pharetra quam ultrices non ullamcorper porttitor tristique dictumst, at semper adipiscing, sodales hac facilisi sodales nam.\r\n\r\nClass et. Ut hendrerit tristique leo libero nullam donec id praesent. Placerat sodales ornare risus facilisis dictum quis, ridiculus interdum.\r\n\r\nGravida. Primis elit mus quis. Tincidunt cubilia nascetur lobortis quis convallis.'),(3,'Primis Sapien Cum Etiam Sed Pharetra Ad.',65.50,'Taciti nostra odio cubilia leo tincidunt gravida donec pulvinar. Cursus. Rutrum eget justo. Habitasse quisque molestie primis sodales. Tortor.\r\n\r\nAuctor sem litora ultricies litora, felis lacinia fusce dolor Dolor tristique lectus pretium nisi eros nisl class luctus vel, a felis, curabitur duis, suscipit nonummy suspendisse ultrices hymenaeos penatibus erat condimentum.'),(4,'Volutpat Egestas Donec Ante Vestibulu.',32.00,'Eleifend nullam duis justo lacinia eleifend habitant lectus duis mattis.\r\n\r\nNatoque nulla placerat est bibendum amet tellus non senectus euismod mollis, pulvinar ad class primis volutpat platea eget egestas suscipit natoque facilisi augue. Facilisi faucibus.\r\n\r\nIaculis dictum et fames consequat platea facilisis vulputate posuere congue tristique ipsum maecenas magna. Hymenaeos etiam. Nascetur aliquam libero mollis porttitor facilisi.\r\n\r\nConubia. Enim ligula porta curae; egestas phasellus tincidunt consequat fusce lectus vivamus'),(5,'Conubia. Enim ligula porta curae egestas',32.40,'Iaculis dictum et fames consequat platea facilisis vulputate posuere congue tristique ipsum maecenas magna. Hymenaeos etiam. Nascetur aliquam libero mollis porttitor facilisi.\r\n\r\nConubia. Enim ligula porta curae; egestas phasellus tincidunt consequat fusce lectus vivamus');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-25 20:35:28
