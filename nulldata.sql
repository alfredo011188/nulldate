/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : nulldata

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2018-01-18 21:49:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for directions
-- ----------------------------
DROP TABLE IF EXISTS `directions`;
CREATE TABLE `directions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `direction` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of directions
-- ----------------------------
INSERT INTO `directions` VALUES ('2', '7', 'Direccion 01', '2018-01-19 03:08:58', '2018-01-19 03:08:58');
INSERT INTO `directions` VALUES ('3', '7', 'Dirección 02', '2018-01-19 03:08:58', '2018-01-19 03:08:58');
INSERT INTO `directions` VALUES ('4', '7', 'Dirección 03', '2018-01-19 03:08:58', '2018-01-19 03:08:58');
INSERT INTO `directions` VALUES ('5', '7', 'Dirección 04', '2018-01-19 03:08:58', '2018-01-19 03:08:58');
INSERT INTO `directions` VALUES ('6', '9', 'Direccion 01', '2018-01-19 03:12:33', '2018-01-19 03:12:33');
INSERT INTO `directions` VALUES ('7', '9', 'Dirección 02', '2018-01-19 03:12:34', '2018-01-19 03:12:34');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Alfredo', 'alfredo.jacobo11@gmail.com', '11/01/1988', '2018-01-19 02:18:11', '2018-01-19 02:18:11');
INSERT INTO `users` VALUES ('2', 'Jacobo', 'ajacobo@amkhealth.com', '11/01/1988', '2018-01-19 02:18:40', '2018-01-19 02:18:40');
INSERT INTO `users` VALUES ('7', 'Karla Amador MI vida', 'kamador@amkhealth.com', '11/01/1988', '2018-01-19 03:08:58', '2018-01-19 03:08:58');
INSERT INTO `users` VALUES ('9', 'Karla Amador MI vida', 'kamador02@amkhealth.com', '11/01/1988', '2018-01-19 03:12:33', '2018-01-19 03:12:33');
SET FOREIGN_KEY_CHECKS=1;
