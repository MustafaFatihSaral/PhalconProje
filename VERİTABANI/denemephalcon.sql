# Host: localhost  (Version 5.5.5-10.1.21-MariaDB)
# Date: 2017-02-13 01:16:04
# Generator: MySQL-Front 5.3  (Build 6.26)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "gorevliste"
#

DROP TABLE IF EXISTS `gorevliste`;
CREATE TABLE `gorevliste` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `gorev` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "gorevliste"
#

INSERT INTO `gorevliste` VALUES (1,'Arabayı bakıma götür'),(2,'Markete git'),(3,'Sunum hazırla'),(4,'Evi temizle'),(5,'Apartman aidat yatır'),(6,'Çocukları okuldan al');
