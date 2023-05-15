-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.9.2-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- Author:								João Carvalho Santos
-- Date:									May 2023
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


USE `mth`;
GO

INSERT INTO users (username, surname, firstname, email, phone_number, hashed_password, admin)
VALUES
	('test123','mth','test','test@test.com','123456789','$2y$10$TeQF/5ygbJTCnJzJKYwAL.zy9om0WuZEKcPvoZyw1O7kI0lyjblom',0),
	('Admin','House','Mouse','admin@test.com','333','$2y$10$nWA3IuYDMt4w6184.VpxDuUsUyi.AM0TWFSvuKyxWDKcqkHmm8Nti',1);
	
INSERT INTO products (code, brand, model, weight_grams, number_available, price_francs, active, description, image_path, type)
VALUES
	('S1','Logitech','M500',144,14,45,1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed qui officia deserunt mollit anim id est laborum.','images/Produits/souris-s1.png','Filaire'),
	('S2','Microsoft','Classic Intellimouse',103,20,20,1,'Lorem sit amet, consectetur adipiscing elit, sed qui officia deserunt mollit anim id est laborum.','images/Produits/souris-s2.png','Filaire'),
	('S3','Razer','DeathAdder Elite',105,2,50,1,'Lorem ipsum hand fe elit, sed qui officia deserunt mollit anim id est laborum.','images/Produits/souris-s3.png','Filaire'),
	('S4','SteelSeries','Rival 310',88,3,70,1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed qui officia deinst laborum.','images/Produits/souris-s4.png','Filaire'),
	('S5','Corsair','Harpoon RGB',85,12,30,1,'Lorem ipsum dor, consectetur adipiscing elit, sed qui officia deserunt mollit anim id est laborum.','images/Produits/souris-s5.png','Filaire'),
	('S6','Logitech','MX Master 3',141,22,140,1','Lorem ipsum dolor sit amet, consectetur adipiscing elit, tenz hert sed qui officia deserunt mollit anim id est laborum.','images/Produits/souris-s6.png','Sans-fil'),
	('S7','Apple','Magic Mouse 2',99,17,110,1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed qui officia deserunt mollit anim id est laborum.','images/Produits/souris-s7.png','Sans-fil'),
	('S8','Microsoft','Surface Precision Mouse','135','14','100','1','Lorem ipsum dolor sit amet.','images/Produits/souris-s8.png','Sans-fil'),
	('S9','HP','X4000b Bluetooth Mouse','122','6','18','1','Lorem ipsum.','images/Produits/souris-s9.png','Sans-fil'),
	('S10','Lenovo','500 Wireless Mouse','100','1','35','1','Lorem ipsum gert giga dolor sit amet, consectetur adipiscing elit, sed qui officia deserunt mollit anim id est laborum.','images/Produits/souris-s10.png','Sans-fil'),
	('S11','Logitech','G502 HERO','121','15','100','1','Lorem ipsum tusk raiden dolor sit amet, consectetur adipiscing elit, sed qui officia deserunt mollit anim id est laborum.','images/Produits/souris-s11.png','Gaming'),
	('S12','Razer','Basilisk Ultimate','107','8','169','1','Lorem ipsum dolor sit amet eines sind, consectetur adipiscing elit, sed qui officia deserunt mollit anim id est laborum.','images/Produits/souris-s12.png','Gaming'),
	('S13','SteelSeries','Sensei 310','92','20','70','1','Lorem ipsum dolor sit amet for tour, sed qui officia deserunt mollit anim id est laborum.','images/Produits/souris-s13.png','Gaming'),
	('S14','Corsair','Scimitar RGB Elite','122','16','90','1','Lorem ipsum dolore sitte amet, consectetur adipiscing elit, sed qui officia deserunt mollit anim id est laborum.','images/Produits/souris-s14.png','Gaming'),
	('S15','ROCCAT','Kone AIMO','130','19','110','1','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed.','images/Produits/souris-s15.png','Gaming'),
	('S16','Anker','Vertical Ergonomic Mouse','92','5','25','1','Lorem ipsum dolor sit ametuit officiara deserunt mollit anim id est laborum.','images/Produits/souris-s16.png','Ergonomique'),
	('S17','Microsoft','Sculpt Ergonomic Mouse','155','9','60','Ergonomique','1','Lorem ipsum dolor sit amet, consectetur adipiscing elit, lorem sed qui officia deserunt mollit anim id est laborum.','images/Produits/souris-s17.png'),
	('S18','Logitech','MX Vertical','135','11','140','1','Lorem ipsum dolor sit amet, consectetur ipsum adipiscing elit, sed qui officia deserunt mollit anim id est laborum.','images/Produits/souris-s18.png','Ergonomique'),
	('S19','Evoluent','VerticalMouse 4','195','2','90','0','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed qui officia rare turk anim id est laborum.','images/Produits/souris-s19.png','Ergonomique'),
	('S20','Handshoe','Mouse','190','13','146','1','Lorem ipsum sind make amet, consectetur adipiscing elit, sed qui officia deserunt mollit anim id est laborum.','images/Produits/souris-s20.png','Ergonomique');

	