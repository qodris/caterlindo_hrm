/*
Navicat MySQL Data Transfer

Source Server         : MySQL to Navicat
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : db_caterlindo_hrm

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2016-09-21 13:14:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tb_admin`
-- ----------------------------
DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE `tb_admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kd_admin` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `tipe_admin` enum('0','1') COLLATE latin1_general_ci DEFAULT NULL,
  `kd_pegawai` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `username` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `password` varchar(32) COLLATE latin1_general_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE latin1_general_ci DEFAULT NULL,
  `tgl_buat` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `tgl_edit` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `session_id` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tb_admin
-- ----------------------------
INSERT INTO `tb_admin` VALUES ('1', 'ADM140916000001', '0', null, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', '14-09-2016', '14-09-2016', 'n1hh3npqqiusmbpts8t5d8no03');

-- ----------------------------
-- Table structure for `tb_bahasa`
-- ----------------------------
DROP TABLE IF EXISTS `tb_bahasa`;
CREATE TABLE `tb_bahasa` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kd_bahasa` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `nm_bahasa` varchar(25) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tb_bahasa
-- ----------------------------

-- ----------------------------
-- Table structure for `tb_gaji`
-- ----------------------------
DROP TABLE IF EXISTS `tb_gaji`;
CREATE TABLE `tb_gaji` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kd_gaji` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `nm_gaji` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `min_gaji` int(15) DEFAULT NULL,
  `max_gaji` int(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tb_gaji
-- ----------------------------
INSERT INTO `tb_gaji` VALUES ('1', 'GAJ210916000001', 'Gaji Pokok', '1000000', '15000000');
INSERT INTO `tb_gaji` VALUES ('3', 'GAJ210916000002', 'Gaji Tunjangan', '100000', '500000');

-- ----------------------------
-- Table structure for `tb_info_perusahaan`
-- ----------------------------
DROP TABLE IF EXISTS `tb_info_perusahaan`;
CREATE TABLE `tb_info_perusahaan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kd_perusahaan` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `nm_perusahaan` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `kd_pajak` varchar(25) COLLATE latin1_general_ci DEFAULT NULL,
  `no_registrasi` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `no_telp` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `no_fax` varchar(25) COLLATE latin1_general_ci DEFAULT NULL,
  `nm_jalan1` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `nm_jalan2` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `kd_negara` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `kd_provinsi` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `kd_kota` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `kd_pos` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `catatan` text COLLATE latin1_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tb_info_perusahaan
-- ----------------------------

-- ----------------------------
-- Table structure for `tb_jabatan`
-- ----------------------------
DROP TABLE IF EXISTS `tb_jabatan`;
CREATE TABLE `tb_jabatan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kd_jabatan` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `nm_jabatan` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `deskripsi` text COLLATE latin1_general_ci,
  `spesifikasi` text COLLATE latin1_general_ci,
  `catatan` text COLLATE latin1_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tb_jabatan
-- ----------------------------
INSERT INTO `tb_jabatan` VALUES ('1', 'JBT210916000001', 'Coba Jabatan', 'Ini adalah jabatan uji coba', 'Spesifikasi jabatan sangat tinggi sekali', 'Tidak ada catatan, tapi kenapa ada tulisan?');

-- ----------------------------
-- Table structure for `tb_kat_pekerjaan`
-- ----------------------------
DROP TABLE IF EXISTS `tb_kat_pekerjaan`;
CREATE TABLE `tb_kat_pekerjaan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kd_kat_pekerjaan` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `nm_kat_pekerjaan` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tb_kat_pekerjaan
-- ----------------------------

-- ----------------------------
-- Table structure for `tb_kota`
-- ----------------------------
DROP TABLE IF EXISTS `tb_kota`;
CREATE TABLE `tb_kota` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kd_negara` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `kd_provinsi` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `kd_kota` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `nm_kota` varchar(25) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tb_kota
-- ----------------------------

-- ----------------------------
-- Table structure for `tb_lokasi`
-- ----------------------------
DROP TABLE IF EXISTS `tb_lokasi`;
CREATE TABLE `tb_lokasi` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kd_lokasi_perusahaan` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `nm_lokasi_perusahaan` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `kd_negara` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `kd_provinsi` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `kd_kota` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat` text COLLATE latin1_general_ci,
  `kd_pos` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `no_telp` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `no_fax` varchar(25) COLLATE latin1_general_ci DEFAULT NULL,
  `catatan` text COLLATE latin1_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tb_lokasi
-- ----------------------------

-- ----------------------------
-- Table structure for `tb_membership`
-- ----------------------------
DROP TABLE IF EXISTS `tb_membership`;
CREATE TABLE `tb_membership` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kd_membership` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `nm_membership` varchar(25) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tb_membership
-- ----------------------------

-- ----------------------------
-- Table structure for `tb_negara`
-- ----------------------------
DROP TABLE IF EXISTS `tb_negara`;
CREATE TABLE `tb_negara` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kd_negara` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `nm_negara` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tb_negara
-- ----------------------------

-- ----------------------------
-- Table structure for `tb_pendidikan`
-- ----------------------------
DROP TABLE IF EXISTS `tb_pendidikan`;
CREATE TABLE `tb_pendidikan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kd_pendidikan` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `lvl_pendidikan` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tb_pendidikan
-- ----------------------------

-- ----------------------------
-- Table structure for `tb_provinsi`
-- ----------------------------
DROP TABLE IF EXISTS `tb_provinsi`;
CREATE TABLE `tb_provinsi` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kd_negara` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `kd_provinsi` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `nm_provinsi` varchar(25) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tb_provinsi
-- ----------------------------

-- ----------------------------
-- Table structure for `tb_sertifikasi`
-- ----------------------------
DROP TABLE IF EXISTS `tb_sertifikasi`;
CREATE TABLE `tb_sertifikasi` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kd_sertifikasi` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `nm_sertifikasi` varchar(25) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tb_sertifikasi
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
INSERT INTO `tb_setting` VALUES ('1', 'header_title', 'SIM HRM');
INSERT INTO `tb_setting` VALUES ('2', 'main_title', 'SIM HRM');
INSERT INTO `tb_setting` VALUES ('3', 'home_title', 'SIM HRM');
INSERT INTO `tb_setting` VALUES ('4', 'favicon', 'favicon.png');
INSERT INTO `tb_setting` VALUES ('5', 'login_title', 'LOGIN ADMINISTRATOR SIM HRM');
INSERT INTO `tb_setting` VALUES ('6', 'thn_mulai', '2016');
INSERT INTO `tb_setting` VALUES ('7', 'footer_title', 'SIM HRM');
INSERT INTO `tb_setting` VALUES ('8', 'bg_img', 'Florida-Hotel-Orlando-Night.jpg');

-- ----------------------------
-- Table structure for `tb_skill`
-- ----------------------------
DROP TABLE IF EXISTS `tb_skill`;
CREATE TABLE `tb_skill` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kd_skill` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `nm_skill` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `deskripsi` text COLLATE latin1_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tb_skill
-- ----------------------------

-- ----------------------------
-- Table structure for `tb_status_kerja`
-- ----------------------------
DROP TABLE IF EXISTS `tb_status_kerja`;
CREATE TABLE `tb_status_kerja` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kd_status_kerja` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `nm_status_kerja` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tb_status_kerja
-- ----------------------------

-- ----------------------------
-- Table structure for `td_organisasi`
-- ----------------------------
DROP TABLE IF EXISTS `td_organisasi`;
CREATE TABLE `td_organisasi` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kd_sub_organisasi` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `kd_main_organisasi` varchar(15) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of td_organisasi
-- ----------------------------

-- ----------------------------
-- Table structure for `tm_organisasi`
-- ----------------------------
DROP TABLE IF EXISTS `tm_organisasi`;
CREATE TABLE `tm_organisasi` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kd_organisasi` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `nm_organisasi` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `deskripsi` text COLLATE latin1_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tm_organisasi
-- ----------------------------

-- ----------------------------
-- Table structure for `tm_shift_kerja`
-- ----------------------------
DROP TABLE IF EXISTS `tm_shift_kerja`;
CREATE TABLE `tm_shift_kerja` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kd_shift` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `nm_shift` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `jm_mulai` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `jm_habis` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `durasi` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  `waktu_gilir` varchar(5) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- ----------------------------
-- Records of tm_shift_kerja
-- ----------------------------
