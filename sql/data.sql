-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lft` bigint(20) unsigned NOT NULL,
  `rgt` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lft` (`lft`),
  KEY `rgt` (`rgt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `categories` (`id`, `lft`, `rgt`, `name`) VALUES
(1,	1,	8,	'Sports'),
(2,	2,	7,	'Balls'),
(3,	3,	4,	'Plastic'),
(4,	5,	6,	'Leather'),
(5,	9,	24,	'Computers'),
(6,	10,	17,	'Notebooks'),
(7,	11,	12,	'Asus'),
(8,	13,	14,	'Acer'),
(9,	15,	16,	'Apple'),
(10,	18,	23,	'Tablets'),
(11,	19,	20,	'Apple'),
(12,	21,	22,	'Samsung');

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `cnt` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `cnt` (`cnt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `products` (`id`, `name`, `cnt`) VALUES
(1,	'NQ 300',	0),
(2,	'MacPro',	0),
(3,	'LP-200',	2),
(4,	'K-56',	2);

DROP TABLE IF EXISTS `productsCategories`;
CREATE TABLE `productsCategories` (
  `productId` bigint(20) unsigned NOT NULL,
  `categoryId` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`productId`,`categoryId`),
  KEY `categoryId` (`categoryId`),
  CONSTRAINT `productsCategories_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `products` (`id`),
  CONSTRAINT `productsCategories_ibfk_2` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `productsCategories` (`productId`, `categoryId`) VALUES
(4,	6),
(1,	7),
(4,	7),
(3,	8),
(2,	9),
(3,	11);

-- 2021-01-16 10:39:19