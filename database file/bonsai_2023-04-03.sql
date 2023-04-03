# ************************************************************
# Sequel Ace SQL dump
# Version 20046
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.11.2-MariaDB-1:10.11.2+maria~ubu2204)
# Database: bonsai
# Generation Time: 2023-04-03 09:53:01 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table flower_colour
# ------------------------------------------------------------
CREATE OR REPLACE DATABASE bonsai;

USE bonsai;

DROP TABLE IF EXISTS `flower_colour`;

CREATE TABLE `flower_colour` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `colour` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `flower_colour` WRITE;
/*!40000 ALTER TABLE `flower_colour` DISABLE KEYS */;

INSERT INTO `flower_colour` (`id`, `colour`)
VALUES
	(1,'Pink'),
	(2,'Red'),
	(3,'White'),
	(4,'Brown'),
	(5,'Purple'),
	(6,'N/A'),
	(7,'Green'),
	(8,'Yellow');

/*!40000 ALTER TABLE `flower_colour` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table leaf_colour
# ------------------------------------------------------------

DROP TABLE IF EXISTS `leaf_colour`;

CREATE TABLE `leaf_colour` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `colour` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `leaf_colour` WRITE;
/*!40000 ALTER TABLE `leaf_colour` DISABLE KEYS */;

INSERT INTO `leaf_colour` (`id`, `colour`)
VALUES
	(1,'Green'),
	(2,'Red'),
	(3,'Purple'),
	(4,'Orange'),
	(5,'Pink'),
	(6,'Brown'),
	(7,'Yellow');

/*!40000 ALTER TABLE `leaf_colour` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table leaf_type
# ------------------------------------------------------------

DROP TABLE IF EXISTS `leaf_type`;

CREATE TABLE `leaf_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `leaf_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `leaf_type` WRITE;
/*!40000 ALTER TABLE `leaf_type` DISABLE KEYS */;

INSERT INTO `leaf_type` (`id`, `leaf_type`)
VALUES
	(1,'Needle'),
	(2,'Simple'),
	(3,'Compound'),
	(4,'Palmately Lobed'),
	(5,'Lobed'),
	(6,'Serated'),
	(7,'Palmetely Compound');

/*!40000 ALTER TABLE `leaf_type` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table trees
# ------------------------------------------------------------

DROP TABLE IF EXISTS `trees`;

CREATE TABLE `trees` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `scientific_name` varchar(255) DEFAULT NULL,
  `leaf_type` int(11) unsigned NOT NULL,
  `leaf_colour` int(11) unsigned NOT NULL,
  `flower_colour` int(11) unsigned NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `trees_fk_leafcolour` (`leaf_colour`),
  KEY `trees_fk_leaftype` (`leaf_type`),
  KEY `trees_fk_flowercolour` (`flower_colour`),
  CONSTRAINT `trees_fk_flowercolour` FOREIGN KEY (`flower_colour`) REFERENCES `flower_colour` (`id`),
  CONSTRAINT `trees_fk_leafcolour` FOREIGN KEY (`leaf_colour`) REFERENCES `leaf_colour` (`id`),
  CONSTRAINT `trees_fk_leaftype` FOREIGN KEY (`leaf_type`) REFERENCES `leaf_type` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `trees` WRITE;
/*!40000 ALTER TABLE `trees` DISABLE KEYS */;

INSERT INTO `trees` (`id`, `name`, `scientific_name`, `leaf_type`, `leaf_colour`, `flower_colour`, `image`)
VALUES
	(1,'English Oak','Quercus Robur',5,1,8,'https://www.bonsaidirect.co.uk/wp-content/uploads/2020/09/OD675-7-1.jpeg'),
	(2,'Japanese Maple','Acer Palmatum',4,2,2,'https://i.etsystatic.com/34473771/r/il/212b88/3867562589/il_fullxfull.3867562589_qq5r.jpg'),
	(3,'Field Maple','Acer Campestre',4,1,8,'https://www.bonsaiable.com/static/blog/field-maple-bonsai-tree-care/hedge-maple-bonsai-forest.jpg'),
	(4,'Norway Maple','Acer Platanoides',4,3,8,'https://www.e-bonsai.com/out/pictures/z1/6470_z1.jpg'),
	(5,'Crab Apple','Malus Purpurea',6,3,3,'https://www.thompson-morgan.com/product_images/100/TKA2099-MALU-1.jpg'),
	(6,'English Morello Cherry','Prunus Cerasus',2,1,5,'https://bonsai-onlineshop.com/wp-content/uploads/2022/02/Apfel-Bonsai0004.jpg'),
	(7,'Chinese Cherry','Prunus Pseudocerasus',2,1,3,'https://a-z-animals.com/media/2023/01/shutterstock_1816340999-683x1024.jpg'),
	(8,'Horse Chestnut','Aesculus Hippocastanum',7,1,3,'https://www.bonsaidirect.co.uk/wp-content/uploads/2013/05/DSC_2608.jpg'),
	(9,'Common Hawthorn','Crataegus Monogyna',7,1,3,'https://ih1.redbubble.net/image.8878372.3330/flat,750x,075,f-pad,750x1000,f8f8f8.jpg'),
	(10,'English Holly','Ilex Aquifolium',6,1,3,'https://cdn.shopify.com/s/files/1/0558/3726/1894/products/il_fullxfull.632226172_eyec_1445x.jpg?v=1643672780'),
	(11,'Common Beech','Fraxinus Sylvatica',2,1,5,'https://i0.wp.com/www.bonsaisanctum.com/wp-content/uploads/2019/05/c7e48544bf84cb8cf07243a134758029.jpg?fit=770%2C681&ssl=1'),
	(12,'Juniper','Juniperus Communis',1,1,6,'https://i.ebayimg.com/images/g/y0oAAOSwmBReq18I/s-l1600.jpg'),
	(13,'Copper Beach','Fraxinus Sylvatica f.purpurea',2,3,4,'https://i.pinimg.com/736x/96/cf/8c/96cf8cd514e4242335b96c0a9d8f2bed--copper-beech-pot.jpg'),
	(14,'Cherry Plum','Prunus Cerasifera Pissardii',6,3,1,'https://jardinmoyogi.com/wp-content/uploads/2022/03/BOPRUN0008-A.jpg');

/*!40000 ALTER TABLE `trees` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
