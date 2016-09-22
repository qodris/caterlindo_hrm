/*
Navicat MySQL Data Transfer

Source Server         : MySQL to Navicat
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : db_reservasi_hotel

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2016-08-02 11:01:56
*/

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_reservasi_hotel`
--
CREATE DATABASE `db_reservasi_hotel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_reservasi_hotel`;

-- --------------------------------------------------------

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tb_admin`
-- ----------------------------
DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE `tb_admin` (
  `id_admin` varchar(15) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `username` varchar(32) COLLATE latin1_general_ci DEFAULT NULL,
  `pass` varchar(32) COLLATE latin1_general_ci DEFAULT NULL,
  `nm_admin` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat` text COLLATE latin1_general_ci,
  `jk_admin` enum('0','1') COLLATE latin1_general_ci DEFAULT NULL,
  `no_telp` varchar(25) COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `login` enum('0','1') COLLATE latin1_general_ci DEFAULT '0',
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tb_admin
-- ----------------------------
INSERT INTO `tb_admin` VALUES ('ADM130716000001', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Adminstrator', 'Server', '0', '-', 'admin@email.com', '1');
INSERT INTO `tb_admin` VALUES ('ADM280716000001', 'asimi', '7df35e168b25555daec0e802a60f8af7', 'Asimi', 'Server', '0', '085746462323', 'asimi@email.com', '0');

-- ----------------------------
-- Table structure for `tb_img`
-- ----------------------------
DROP TABLE IF EXISTS `tb_img`;
CREATE TABLE `tb_img` (
  `id_img` varchar(15) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `id_parent` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `nm_img` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_img`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tb_img
-- ----------------------------
INSERT INTO `tb_img` VALUES ('IMG010816000001', 'USR010816000001', '5456popeye-face.png');
INSERT INTO `tb_img` VALUES ('IMG280716000001', 'ADM280716000001', '809popeye-face.png');

-- ----------------------------
-- Table structure for `tb_komentar`
-- ----------------------------
DROP TABLE IF EXISTS `tb_komentar`;
CREATE TABLE `tb_komentar` (
  `id_komentar` varchar(15) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `id_parent` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `id_user` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `tgl_komentar` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `rating` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `isi` text COLLATE latin1_general_ci,
  PRIMARY KEY (`id_komentar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tb_komentar
-- ----------------------------

-- ----------------------------
-- Table structure for `tb_kota`
-- ----------------------------
DROP TABLE IF EXISTS `tb_kota`;
CREATE TABLE `tb_kota` (
  `id_kota` varchar(15) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `id_provinsi` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `nm_kota` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_kota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tb_kota
-- ----------------------------

-- ----------------------------
-- Table structure for `tb_log`
-- ----------------------------
DROP TABLE IF EXISTS `tb_log`;
CREATE TABLE `tb_log` (
  `id_log` varchar(15) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `isi_log` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `action` varchar(25) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tb_log
-- ----------------------------

-- ----------------------------
-- Table structure for `tb_provinsi`
-- ----------------------------
DROP TABLE IF EXISTS `tb_provinsi`;
CREATE TABLE `tb_provinsi` (
  `id_provinsi` varchar(15) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `nm_provinsi` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_provinsi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tb_provinsi
-- ----------------------------

-- ----------------------------
-- Table structure for `tb_setting`
-- ----------------------------
DROP TABLE IF EXISTS `tb_setting`;
CREATE TABLE `tb_setting` (
  `id_setting` int(11) NOT NULL AUTO_INCREMENT,
  `nm_setting` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `setting` text COLLATE latin1_general_ci,
  PRIMARY KEY (`id_setting`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tb_setting
-- ----------------------------
INSERT INTO `tb_setting` VALUES ('1', 'header_title', 'Sistem Reservasi Hotel');
INSERT INTO `tb_setting` VALUES ('2', 'main_title', 'Sistem Reservasi Hotel');
INSERT INTO `tb_setting` VALUES ('3', 'home_title', 'Sistem Reservasi Hotel');
INSERT INTO `tb_setting` VALUES ('4', 'favicon', 'favicon.png');
INSERT INTO `tb_setting` VALUES ('5', 'login_title', 'LOGIN ADMINISTRATOR');
INSERT INTO `tb_setting` VALUES ('6', 'thn_mulai', '2016');
INSERT INTO `tb_setting` VALUES ('7', 'footer_title', 'Sistem Reservasi Hotel');
INSERT INTO `tb_setting` VALUES ('8', 'bg_img', 'bg_img.jpg');

-- ----------------------------
-- Table structure for `tb_user`
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id_user` varchar(15) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `username` varchar(32) COLLATE latin1_general_ci DEFAULT NULL,
  `pass` varchar(32) COLLATE latin1_general_ci DEFAULT NULL,
  `nm_user` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat` text COLLATE latin1_general_ci,
  `jk_user` enum('0','1') COLLATE latin1_general_ci DEFAULT NULL,
  `no_telp` varchar(25) COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `status` enum('0','1','2') COLLATE latin1_general_ci DEFAULT '0',
  `login` enum('0','1') COLLATE latin1_general_ci DEFAULT '0',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES ('USR010816000001', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', 'Server', '0', '086756563434', 'user@email.com', '0', '0');

-- ----------------------------
-- Table structure for `td_hotel`
-- ----------------------------
DROP TABLE IF EXISTS `td_hotel`;
CREATE TABLE `td_hotel` (
  `id_dhotel` varchar(15) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `id_hotel` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `nm_kamar` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `fitur` text COLLATE latin1_general_ci,
  `rating` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `deskripsi` text COLLATE latin1_general_ci,
  `harga_sewa` int(15) DEFAULT NULL,
  PRIMARY KEY (`id_dhotel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of td_hotel
-- ----------------------------

-- ----------------------------
-- Table structure for `td_reservasi`
-- ----------------------------
DROP TABLE IF EXISTS `td_reservasi`;
CREATE TABLE `td_reservasi` (
  `id_dreservasi` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `id_reservasi` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `id_dhotel` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `tgl_checkin` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `tgl_checkout` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_dreservasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of td_reservasi
-- ----------------------------

-- ----------------------------
-- Table structure for `tm_hotel`
-- ----------------------------
DROP TABLE IF EXISTS `tm_hotel`;
CREATE TABLE `tm_hotel` (
  `id_hotel` varchar(15) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `nm_hotel` text COLLATE latin1_general_ci,
  `alamat` text COLLATE latin1_general_ci,
  `rating` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `deskripsi` text COLLATE latin1_general_ci,
  PRIMARY KEY (`id_hotel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tm_hotel
-- ----------------------------

-- ----------------------------
-- Table structure for `tm_reservasi`
-- ----------------------------
DROP TABLE IF EXISTS `tm_reservasi`;
CREATE TABLE `tm_reservasi` (
  `id_reservasi` varchar(15) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `id_user` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `tgl_reservasi` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `total_harga` int(25) DEFAULT NULL,
  PRIMARY KEY (`id_reservasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tm_reservasi
-- ----------------------------
