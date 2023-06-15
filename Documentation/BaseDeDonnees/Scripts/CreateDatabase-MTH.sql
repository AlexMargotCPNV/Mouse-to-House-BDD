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


-- Dumping database structure for mth
DROP DATABASE IF EXISTS `mth`;
CREATE DATABASE IF NOT EXISTS `mth` /*!40100 DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci */;
USE `mth`;

-- Dumping structure for table mth.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(50) NOT NULL,
  `surname` VARCHAR(50) NOT NULL,
  `firstname` VARCHAR(50) NOT NULL,
  `email` VARCHAR(320) NOT NULL,
  `phone_number` VARCHAR(20) NOT NULL,
  `hashed_password` VARCHAR(200) NOT NULL,
  `admin` TINYINT NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_username` (`username`),
  UNIQUE KEY `user_email` (`email`),
  UNIQUE KEY `user_phone_number` (`phone_number`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;

-- Dumping structure for table mth.requests
DROP TABLE IF EXISTS `requests`;
CREATE TABLE IF NOT EXISTS `requests` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `message` TEXT NOT NULL,
  `username` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;
requests
-- Dumping structure for table mth.products
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `code` VARCHAR(5) NOT NULL,
  `brand` VARCHAR(60) NOT NULL,
  `model` VARCHAR(60) NOT NULL,
  `weight_grams` INT NOT NULL,
  `number_available` INT NOT NULL,
  `price_francs` FLOAT NOT NULL,
  `active` TINYINT NOT NULL DEFAULT '0',
  `description` VARCHAR(500),
  `image_path` VARCHAR(500) NOT NULL,
  `type` VARCHAR(50),
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;

-- Dumping structure for table mth.users_save_products
DROP TABLE IF EXISTS `users_save_products`;
CREATE TABLE IF NOT EXISTS `users_save_products` (
  `user_id` INT NOT NULL,
  `product_id` INT NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=UTF8MB4;

-- Referential constraints
ALTER TABLE requests ADD CONSTRAINT FK_user_request FOREIGN KEY(user_id)
REFERENCES users(id);

ALTER TABLE users_save_products ADD CONSTRAINT FK_user_save FOREIGN KEY(user_id)
REFERENCES users(id);

ALTER TABLE users_save_products ADD CONSTRAINT FK_saved_product FOREIGN KEY(product_id)
REFERENCES products(id);