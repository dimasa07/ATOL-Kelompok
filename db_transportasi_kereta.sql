/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.8-MariaDB : Database - db_transportasi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_transportasi` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_transportasi`;

/*Table structure for table `bahasa` */

DROP TABLE IF EXISTS `bahasa`;

CREATE TABLE `bahasa` (
  `text` varchar(30) NOT NULL,
  `indonesia` varchar(255) DEFAULT NULL,
  `inggris` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`text`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `bahasa` */

insert  into `bahasa`(`text`,`indonesia`,`inggris`) values 
('','Masuk Sebagai Pengguna','Login as User'),
('about','Tentang','About'),
('account','AKUN','ACCOUNT'),
('action','Tindakan','Action'),
('add','Tambah','Add'),
('address','Alamat','Address'),
('add_schedule','Tambah Jadwal','Add Schedule'),
('alert_empty','Username dan password tidak boleh kosong !','Username and password cannot be empty !'),
('alert_empty_form','Form harus di isi semua !','The form cannot be empty !'),
('alert_failed_login','Username atau Password tidak sesuai ! Silahkan daftar jika belum mempunyai akun.','Incorrect username or pasword ! Please register if you don\'t have an account.'),
('alert_number_character','Jumlah karakter No Kereta tidak boleh lebih dari 3','The number of characters \'No Train\' cannot be more than 3'),
('alert_registered_name_train','Nama Kereta sudah terdaftar, silahkan masukan nama kereta yang lain','The train name is already registered, please enter another train name'),
('alert_registered_no_train','No Kereta sudah terdaftar, silahkan masukan no kereta yang lain','The train number is already registered, please enter another train number'),
('arrives_time','Perkiraan Tiba','Arrives Time'),
('back','Kembali','Back'),
('booking_kode','Kode Pemesanan','Booking Kode'),
('buy','Pesan','Buy'),
('buyers','Pemesan','Buyers'),
('buyers_number','Jumlah Transaksi','Number of Transactions'),
('buyer_name','Nama Pemesan','Buyer\'s Name'),
('cancel','BATAL','CANCEL'),
('confirm','Konfirmasi','Confirm'),
('dashboard','Beranda','Dashboard'),
('date','Tanggal','Date'),
('delete','Hapus','Delete'),
('departure_time','Waktu Keberangkatan','Departure Time'),
('duration','Durasi','Duration'),
('from','Berangkat','From'),
('fullname','Nama lengkap','Fullname'),
('have_account?','Sudah punya akun?','Do you have account?'),
('history_detail','Detail Riwayat','History Details'),
('history_list','List Riwayat','History List'),
('hour','j','h'),
('identity','Identitas','Idetity'),
('incorrect_password_confirm','Konfirmasi password tidak benar','Password confirmation is incorrect'),
('login_admin','Masuk Sebagai Admin','Login as Admin'),
('login_user','Masuk Sebagai Pengguna','Login as User'),
('logout','Keluar','Logout'),
('no_data','Tidak ada data','No data'),
('order_history','Riwayat Pemesanan','Order History'),
('order_ticket','Pesan Tiket','Order a Ticket'),
('passenger_hint','Umum, Anak-anak, Artis, Wartawan,..','General, Children, Artist, Journalist,..'),
('passenger_type','Tipe Penumpang','Passenger Type'),
('phone_number','No Telepon','Phone Number'),
('price','Harga','Price'),
('purchase_form','Form Pembelian','Purchase Form'),
('register','Daftar','Register'),
('register_caption','Daftar untuk membuat akun anda','Register to create your account'),
('save','Simpan','Save'),
('schedules','Jadwal','Schedules'),
('schedules_number','Jumlah Jadwal','Number of Schedules'),
('schedule_list','List Jadwal','Schedule List'),
('select_train','Pilih Kereta','Select Train'),
('sign','Masuk','Sign in'),
('sign_caption','Masuk untuk memulai sesi anda','Sign in to start your session'),
('success_add_schedule','Sukses menambahkan jadwal !','Successfully added schedule !'),
('success_add_train','Berhasil menambahkan kereta !','Successfully added train !'),
('success_delete','Berhasil hapus','Successfully deleted'),
('success_delete_history','Berhasil hapus riwayat pemesanan !','Successfully deleted order history !'),
('success_delete_schedule','Sukses hapus jadwal !','Successfully deleted schedule !'),
('success_order','Sukses memesan !','Ordering was successful !'),
('success_register','Daftar sukses !','Success register !'),
('sure_delete','Yakin hapus?','Sure to delete?'),
('sure_order','Yakin pesan?','Sure to order?'),
('tickets','Tiket','Tickets'),
('ticket_list','List Tiket','Ticket List'),
('to','Tiba','To'),
('trains','Kereta','Train'),
('trains_number','Jumlah Kereta','Number of Trains'),
('train_list','List Kereta','Train List'),
('train_name','Nama Kereta','Train Name'),
('train_scheduling','Penjadwalan Kereta','Train Scheduling'),
('transactions','Transaksi','Transactions'),
('transaction_list','List Transaksi','Transaction List'),
('username_registered','Username tersebut sudah terdaftar','The username is already registered');

/*Table structure for table `detail_tiket` */

DROP TABLE IF EXISTS `detail_tiket`;

CREATE TABLE `detail_tiket` (
  `Kode_Booking` int(6) NOT NULL AUTO_INCREMENT,
  `Id_TmptDuduk` varchar(11) DEFAULT NULL,
  `Id_Jadwal` int(3) DEFAULT NULL,
  `No_Identitas` varchar(40) DEFAULT NULL,
  `No_Telepon` varchar(15) DEFAULT NULL,
  `Alamat` varchar(60) DEFAULT NULL,
  `Tipe_Penumpang` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Kode_Booking`),
  KEY `Id_Jadwal` (`Id_Jadwal`),
  CONSTRAINT `detail_tiket_ibfk_1` FOREIGN KEY (`Id_Jadwal`) REFERENCES `jadwal` (`Id_Jadwal`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4;

/*Data for the table `detail_tiket` */

/*Table structure for table `jadwal` */

DROP TABLE IF EXISTS `jadwal`;

CREATE TABLE `jadwal` (
  `Id_Jadwal` int(3) NOT NULL AUTO_INCREMENT,
  `No_Kereta` varchar(3) DEFAULT NULL,
  `Berangkat` varchar(30) NOT NULL,
  `Waktu_Berangkat` datetime NOT NULL,
  `Tujuan` varchar(30) NOT NULL,
  `Perkiraan_Tiba` datetime NOT NULL,
  `Harga` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`Id_Jadwal`),
  KEY `No_Kereta` (`No_Kereta`),
  CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`No_Kereta`) REFERENCES `kereta` (`No_Kereta`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

/*Data for the table `jadwal` */

insert  into `jadwal`(`Id_Jadwal`,`No_Kereta`,`Berangkat`,`Waktu_Berangkat`,`Tujuan`,`Perkiraan_Tiba`,`Harga`) values 
(2,'P01','Banten(BNT)','2021-06-24 07:20:00','Palembang(PAL)','2021-06-24 12:11:00',140000),
(3,'S01','Medan(MED)','2021-06-26 08:22:00','Bali(BAL)','2021-06-26 18:41:00',190000),
(4,'B01','Cirebon Prujakan(CNP)','2021-06-29 09:50:00','Purwokerto(PWT)','2021-06-29 14:31:00',200000),
(27,'B01','2021-06-02T09:15','2021-06-02 09:15:00','Garut','2021-06-02 10:15:00',50000),
(29,'S01','Surabaya','2021-06-05 09:27:00','Ciamis','2021-06-05 11:28:00',210000);

/*Table structure for table `kereta` */

DROP TABLE IF EXISTS `kereta`;

CREATE TABLE `kereta` (
  `No_Kereta` varchar(3) NOT NULL,
  `Nama_Kereta` varchar(25) NOT NULL,
  `Kelas` enum('Ekonomi','Bisnis','Eksklusif') NOT NULL,
  PRIMARY KEY (`No_Kereta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `kereta` */

insert  into `kereta`(`No_Kereta`,`Nama_Kereta`,`Kelas`) values 
('B01','Bengawan','Ekonomi'),
('M01','Malabar','Bisnis'),
('M02','Mataram','Bisnis'),
('P01','Progo','Ekonomi'),
('S01','Sancaka','Eksklusif');

/*Table structure for table `penumpang` */

DROP TABLE IF EXISTS `penumpang`;

CREATE TABLE `penumpang` (
  `No_Identitas` varchar(40) NOT NULL,
  `Nama_Penumpang` varchar(30) NOT NULL,
  `JK` enum('L','P') NOT NULL,
  `Alamat` varchar(50) DEFAULT NULL,
  `Id_Tipe` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`No_Identitas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `penumpang` */

/*Table structure for table `tempat_duduk` */

DROP TABLE IF EXISTS `tempat_duduk`;

CREATE TABLE `tempat_duduk` (
  `Id_TmptDuduk` varchar(11) NOT NULL,
  `No_TmptDuduk` varchar(20) NOT NULL,
  `No_Kereta` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`Id_TmptDuduk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tempat_duduk` */

/*Table structure for table `tiket_dibeli` */

DROP TABLE IF EXISTS `tiket_dibeli`;

CREATE TABLE `tiket_dibeli` (
  `Kode_Booking` int(6) NOT NULL AUTO_INCREMENT,
  `Username` varchar(30) DEFAULT NULL,
  `Tanggal` datetime NOT NULL,
  PRIMARY KEY (`Kode_Booking`),
  KEY `Username` (`Username`),
  CONSTRAINT `tiket_dibeli_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tiket_dibeli` */

/*Table structure for table `tipe` */

DROP TABLE IF EXISTS `tipe`;

CREATE TABLE `tipe` (
  `Id_Tipe` varchar(7) NOT NULL,
  `Nama_Tipe` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_Tipe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tipe` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
