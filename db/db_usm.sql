/*
SQLyog Ultimate v12.5.1 (32 bit)
MySQL - 8.0.28-cluster : Database - db_usm_pk
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_usm_pk` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `db_usm_pk`;

/*Table structure for table `tb_daya_tampung` */

DROP TABLE IF EXISTS `tb_daya_tampung`;

CREATE TABLE `tb_daya_tampung` (
  `id_daya_tampung` int NOT NULL AUTO_INCREMENT,
  `tahun_ajar` varchar(15) DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  PRIMARY KEY (`id_daya_tampung`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Table structure for table `tb_faq` */

DROP TABLE IF EXISTS `tb_faq`;

CREATE TABLE `tb_faq` (
  `id_faq` int NOT NULL AUTO_INCREMENT,
  `question_faq` text NOT NULL,
  `answer_faq` text NOT NULL,
  PRIMARY KEY (`id_faq`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Table structure for table `tb_file_upload` */

DROP TABLE IF EXISTS `tb_file_upload`;

CREATE TABLE `tb_file_upload` (
  `id_upload` int NOT NULL AUTO_INCREMENT,
  `nik` varchar(50) DEFAULT NULL,
  `nama_file` text,
  `type_file` text,
  `no_pendaftaran` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id_upload`)
) ENGINE=InnoDB AUTO_INCREMENT=6822 DEFAULT CHARSET=latin1;

/*Table structure for table `tb_jadwal_penting` */

DROP TABLE IF EXISTS `tb_jadwal_penting`;

CREATE TABLE `tb_jadwal_penting` (
  `id_jadwal_penting` int NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(255) DEFAULT NULL,
  `tgl_jadwal` varchar(255) DEFAULT NULL,
  `id_ta` int DEFAULT NULL,
  `urutan` int DEFAULT NULL,
  PRIMARY KEY (`id_jadwal_penting`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

/*Table structure for table `tb_login` */

DROP TABLE IF EXISTS `tb_login`;

CREATE TABLE `tb_login` (
  `nik` varchar(50) NOT NULL,
  `password` text,
  `is_level` varchar(50) DEFAULT NULL,
  `tahun_daftar` varchar(10) DEFAULT NULL,
  `waktu_daftar` datetime DEFAULT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tb_login_2017_2018_2019` */

DROP TABLE IF EXISTS `tb_login_2017_2018_2019`;

CREATE TABLE `tb_login_2017_2018_2019` (
  `nik` varchar(50) NOT NULL,
  `password` text,
  `is_level` varchar(50) DEFAULT NULL,
  `tahun_daftar` varchar(10) DEFAULT NULL,
  `waktu_daftar` datetime DEFAULT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tb_mapel` */

DROP TABLE IF EXISTS `tb_mapel`;

CREATE TABLE `tb_mapel` (
  `id_mapel` int NOT NULL AUTO_INCREMENT,
  `nama_mapel` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Table structure for table `tb_nilai_mapel` */

DROP TABLE IF EXISTS `tb_nilai_mapel`;

CREATE TABLE `tb_nilai_mapel` (
  `id_nilai_mapel` int NOT NULL AUTO_INCREMENT,
  `nik` varchar(50) DEFAULT NULL,
  `id_sems` int DEFAULT NULL,
  `id_mapel` int DEFAULT NULL,
  `nilai` int DEFAULT NULL,
  `ket_nama_mapel` varchar(100) DEFAULT NULL,
  `no_pendaftaran` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id_nilai_mapel`)
) ENGINE=InnoDB AUTO_INCREMENT=22458 DEFAULT CHARSET=latin1;

/*Table structure for table `tb_no_peserta` */

DROP TABLE IF EXISTS `tb_no_peserta`;

CREATE TABLE `tb_no_peserta` (
  `_id` int NOT NULL AUTO_INCREMENT,
  `nik` varchar(50) DEFAULT NULL,
  `no_peserta` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1157 DEFAULT CHARSET=latin1;

/*Table structure for table `tb_orang_tua` */

DROP TABLE IF EXISTS `tb_orang_tua`;

CREATE TABLE `tb_orang_tua` (
  `nik` varchar(255) NOT NULL,
  `nama_ayah` varchar(255) DEFAULT NULL,
  `nama_ibu` varchar(255) DEFAULT NULL,
  `alamat_orang_tua` varchar(255) DEFAULT NULL,
  `pendidikan_terakhir_ayah` varchar(255) DEFAULT NULL,
  `pendidikan_terakhir_ibu` varchar(255) DEFAULT NULL,
  `pekerjaan_ayah` varchar(255) DEFAULT NULL,
  `pekerjaan_ibu` varchar(255) DEFAULT NULL,
  `telp_rumah` varchar(255) DEFAULT NULL,
  `no_hp_ayah` varchar(255) DEFAULT NULL,
  `no_hp_ibu` varchar(255) DEFAULT NULL,
  `jumlah_saudara` varchar(255) DEFAULT NULL,
  `no_pendaftaran` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Table structure for table `tb_peserta` */

DROP TABLE IF EXISTS `tb_peserta`;

CREATE TABLE `tb_peserta` (
  `no_pendaftaran` varchar(12) DEFAULT NULL,
  `nik` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `tempat_lahir` text,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` text,
  `rt` varchar(100) DEFAULT NULL,
  `rw` varchar(100) DEFAULT NULL,
  `provinsi` varchar(250) DEFAULT NULL,
  `kabupaten` varchar(250) DEFAULT NULL,
  `kecamatan` varchar(250) DEFAULT NULL,
  `kelurahan` varchar(250) DEFAULT NULL,
  `kode_pos` int DEFAULT NULL,
  `kewarganegaraan` varchar(250) DEFAULT NULL,
  `email` text,
  `jalur_seleksi` varchar(250) DEFAULT NULL,
  `telp_rumah` varchar(250) DEFAULT NULL,
  `no_hp` varchar(250) DEFAULT NULL,
  `gol_darah` varchar(250) DEFAULT NULL,
  `status_pernikahan` varchar(250) DEFAULT NULL,
  `status_bayar` enum('0','1') DEFAULT '0' COMMENT '0=belum bayar 1=uda bayar',
  `bukti_bayar` text,
  `tgl_bayar` datetime DEFAULT NULL,
  `tahun_daftar` varchar(4) DEFAULT NULL,
  `no_va` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tb_pilih_prodi` */

DROP TABLE IF EXISTS `tb_pilih_prodi`;

CREATE TABLE `tb_pilih_prodi` (
  `id_pilih` int NOT NULL AUTO_INCREMENT,
  `nik` varchar(50) DEFAULT NULL,
  `prodi1` int DEFAULT NULL,
  `prodi2` int DEFAULT NULL,
  `no_pendaftaran` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id_pilih`)
) ENGINE=InnoDB AUTO_INCREMENT=413 DEFAULT CHARSET=latin1;

/*Table structure for table `tb_prodi` */

DROP TABLE IF EXISTS `tb_prodi`;

CREATE TABLE `tb_prodi` (
  `id_prodi` int NOT NULL AUTO_INCREMENT,
  `kd_prodi` varchar(4) DEFAULT NULL,
  `nama_prodi` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_prodi`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

/*Table structure for table `tb_prodi_old` */

DROP TABLE IF EXISTS `tb_prodi_old`;

CREATE TABLE `tb_prodi_old` (
  `id_prodi` int NOT NULL AUTO_INCREMENT,
  `nama_prodi` varchar(150) DEFAULT NULL,
  `kd_prodi` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Table structure for table `tb_rekening` */

DROP TABLE IF EXISTS `tb_rekening`;

CREATE TABLE `tb_rekening` (
  `id_rek` int NOT NULL AUTO_INCREMENT,
  `no_rek` varchar(50) DEFAULT NULL,
  `an_rek` text,
  `nama_bank` varchar(100) DEFAULT NULL,
  `is_aktif` enum('0','1') DEFAULT '0' COMMENT '0=tidak,1=aktif',
  PRIMARY KEY (`id_rek`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Table structure for table `tb_sekolah` */

DROP TABLE IF EXISTS `tb_sekolah`;

CREATE TABLE `tb_sekolah` (
  `nik` varchar(50) NOT NULL,
  `tahun_lulus` varchar(50) DEFAULT NULL,
  `asal_sekolah` varchar(50) DEFAULT NULL,
  `jurusan_sekolah` varchar(50) DEFAULT NULL,
  `kejuruan` varchar(50) DEFAULT NULL,
  `no_pendaftaran` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tb_sems` */

DROP TABLE IF EXISTS `tb_sems`;

CREATE TABLE `tb_sems` (
  `id_sems` int NOT NULL AUTO_INCREMENT,
  `nama_sems` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_sems`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Table structure for table `tb_syarat_umum` */

DROP TABLE IF EXISTS `tb_syarat_umum`;

CREATE TABLE `tb_syarat_umum` (
  `id_syarat` int NOT NULL AUTO_INCREMENT,
  `id_ta` int DEFAULT NULL,
  `isi` text,
  PRIMARY KEY (`id_syarat`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Table structure for table `tb_syarat_unggahan` */

DROP TABLE IF EXISTS `tb_syarat_unggahan`;

CREATE TABLE `tb_syarat_unggahan` (
  `id_syarat` int NOT NULL AUTO_INCREMENT,
  `nama_syarat` text,
  `urutan` int DEFAULT NULL,
  `tahun` varchar(2020) DEFAULT NULL,
  PRIMARY KEY (`id_syarat`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Table structure for table `tb_tahun_ajar` */

DROP TABLE IF EXISTS `tb_tahun_ajar`;

CREATE TABLE `tb_tahun_ajar` (
  `id_ta` int NOT NULL AUTO_INCREMENT,
  `tahun_ajar` varchar(10) DEFAULT NULL,
  `is_aktif` enum('0','1') DEFAULT NULL COMMENT '0=tidak aktif,1=aktif',
  PRIMARY KEY (`id_ta`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Table structure for table `transaksi_bniecollection` */

DROP TABLE IF EXISTS `transaksi_bniecollection`;

CREATE TABLE `transaksi_bniecollection` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_group` int DEFAULT NULL,
  `no_pendaftaran` varchar(20) DEFAULT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `id_tagihan` int DEFAULT NULL,
  `client_id` varchar(5) DEFAULT NULL,
  `trx_id` varchar(30) DEFAULT NULL,
  `trx_amount` varchar(10) DEFAULT NULL,
  `billing_type` varchar(1) DEFAULT NULL,
  `customer_name` varchar(64) DEFAULT NULL,
  `customer_email` varchar(64) DEFAULT NULL,
  `customer_phone` varchar(16) DEFAULT NULL,
  `virtual_account` varchar(16) DEFAULT NULL,
  `datetime_expired` datetime DEFAULT NULL,
  `description` varchar(128) DEFAULT NULL,
  `datetime_created` datetime DEFAULT NULL,
  `status_create` tinyint(1) DEFAULT '0',
  `create_status` varchar(3) DEFAULT NULL,
  `status_payment` tinyint(1) DEFAULT '0',
  `cumulative_payment_amount` varchar(10) DEFAULT NULL,
  `datetime_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=766 DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
