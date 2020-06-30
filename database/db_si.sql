-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2018 at 01:44 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_si`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `nm_admin` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nm_admin`, `username`, `password`, `foto`) VALUES
('admin', 'admin', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `kd_berita` int(11) NOT NULL AUTO_INCREMENT,
  `judul_berita` varchar(100) NOT NULL,
  `kepala_berita` text NOT NULL,
  `isi_berita` text NOT NULL,
  `foto_berita` text NOT NULL,
  `tgl_post` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`kd_berita`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`kd_berita`, `judul_berita`, `kepala_berita`, `isi_berita`, `foto_berita`, `tgl_post`) VALUES
(10, 'UPI YPTK PADANG FOKUS CERDASKAN ANAK BANGSA', 'Padang, 13 April 2018 Universitas Putra Indonesia YPTK Padang menggelar acara wisuda periode II tahun akademik 2017-2018. Acara wisuda dilaksanakan 2 hari dalam sidang terbuka senat UPI YPTK Padang, Selasa 10 April 2018 dan Rabu 11 April 2018 di UPI ', 'Padang, 13 April 2018 Universitas Putra Indonesia YPTK Padang menggelar acara wisuda periode II tahun akademik 2017-2018. Acara wisuda dilaksanakan 2 hari dalam sidang terbuka senat UPI YPTK Padang, Selasa 10 April 2018 dan Rabu 11 April 2018 di UPI Convention Center, kampus Universitas Putra Indonesia YPTK Padang.\r\n\r\nSidang senat langsung dipimpin oleh Rektor Universitas Putra Indonesia YPTK Padang, Prof. Dr. H Sarjon Desit, S. Kom, M. Sc. Universitas Putra Indonesia “YPTK” meluluskan 1,287 orang lulusan kepada masyarakat, bangsa dan negara. Ini berarti, sampai saat ini, Universitas Putra Indonesia “YPTK” telah meluluskan 39.546 orang alumni yang saat ini telah bekerja di berbagai instansi perusahaan baik dalam maupun luar negeri. Rektor juga menyampaikan kepada seluruh wisudawan diharapkan dapat terus menjaga 12 prinsip dasar dan karakter yang telah diterapkan selama mengikuti perkuliahan di kampus UPI YPTK Padang, kampus IT yang berbasis spiritual.\r\n\r\nSelanjutnya, Ketua Yayasan Perguruan Tinggi Komputer Padang menyampaikan selamat kepada seluruh wisudawan dan wisudawati yang telah menyelesaikan proses pembelajaran tepat pada waktunya. Herman Nawas menyampaikan bahwa kesuksesan para wisudawan ini merupakan pertolongan dari Allah SWT dan ridho dari orang tua. Pada kesempatan tersebut H, Herman Nawas menyampaikan bahwa untuk mencapai kesuksesan ada 4 hal yang harus dilakukan oleh wisudawan. Pertama keyakinan atas pertolongan Allah SWT, kedua semangat yang mengebu-gebu, ketiga Fokus dan terakhir Patuh.\r\n\r\nInshaallah dengan 4 hal ini wisudawan/wati dapat mencapai kesuksesan dunia dan akhirat.\r\n\r\nSelanjutnya, Prof. Herry Koordinator Kopertis Wilayah X menyampaikan selamat dan sukses kepada seluruh wisudawan/wati serta apresiasi atas prestasi dan perkembangan UPI YPTK Padang yang kian pesat. Prof Herry sebagai perwakilan Kemenristekdikti menyampaikan ucapan terimakasih atas peranan UPI YPTK Padang dalam mencerdaskan anak bangsa semoga kedepannya UPI YPTK semakin berkembang dan bisa bersaing secara global.\r\n\r\n \r\n\r\nPada kesempatan ini juga dilaksanakan penandatanganan MOU antara UPI YPTK dengan IMA (Indonesia Marketing Association) Chapter Padang tentang kerjasama dalam pelatihan marketing dan magang bagi mahasiswa UPI YPTK Padang. Penandatanganan dilakukan langsung oleh Rektor UPI YPTK Padang dan Darmawi Ketua IMA chapter Padang.', 'UPI-YPTK-13042018-18715.jpg', '2018-04-27 18:32:18'),
(11, 'Mahasiswa berprestasi UPI YPTK Padang Berangkat studi komparatif ke Malaysia dan Singapura', 'Padang, 12 Maret 2018. Sejumlah mahasiswa beserta studi komparatif dilepas secara resmi oleh ketua Yayasan Perguruan Tinggi Komputer Padang H. Herman Nawas selesai salat subuh berjamaah di Masjid Rahmatan lil alamin UPI YPTK Padang.  Dalam sambutannya H ', 'Padang, 12 Maret 2018. Sejumlah mahasiswa beserta studi komparatif dilepas secara resmi oleh ketua Yayasan Perguruan Tinggi Komputer Padang H. Herman Nawas selesai salat subuh berjamaah di Masjid Rahmatan lil alamin UPI YPTK Padang. \r\n\r\n\r\nDalam sambutannya H Herman Nawas menyampaikan kepada seluruh orang tua mahasiswa, mahasiswa yang diberangkatkan pada tahun ini merupakan mahasiswa yang berprestasi memperoleh nilai terbaik secara berturut-turut selama 2 semester. Disamping dibebaskan dari biaya uang kuliah mereka juga diberangkatkan selama satu minggu ke Malaysia dan Singapura untuk mengunjungi beberapa universitas yang sudah bekerja sama dengan UPI YPTK Padang. \r\n\r\n\r\nSeluruh biaya akomodasi transportasi dan pembuatan paspor ditanggung penuh oleh Yayasan Perguruan Tinggi Komputer Padang. Hal ini merupakan wujud reward yang diberikan oleh Yayasan Perguruan Tinggi Komputer Padang kepada mahasiswa berprestasi, diharapkan dapat memberikan wawasan baru, semangat dalam menyelesaikan pendidikan, serta dapat membuat inovasi-inovasi baru dalam pengembangan teknologi dan riset riset terkini. \r\n\r\n\r\nUniversitas Putra Indonesia YPTK Padang sudah bekerja sama dengan beberapa universitas terbaik di Malaysia dan Singapura diantaranya, Universiti kebangsaan Malaysia, Universiti teknologi Mara Melaka Malaysia, Universiti Malaya, Universiti Teknologi Malaysia, Universiti Kuala Lumpur, dan beberapa Universitas lainnya. \r\n\r\n\r\nRombongan study comparative tahun 2018 ini dipimpin langsung oleh Rektor Universitas Putra Indonesia YPTK Padang Prof. Dr. Sarjon Defit. Disamping itu diikuti oleh Dekan Fakultas Ilmu komputer Dr. Julius Santoni, Dekan Fakultas Ilmu pendidikan, Jhon Very, MM. Serta dosen dari berbagai fakultas, tim dokter klinik Yayasan Perguruan Tinggi Komputer Padang, dan karyawan. \r\n\r\n\r\nKunjungan studi komparatif yang berlangsung selama satu minggu akan mengunjungi beberapa universitas universitas di Malaysia dan Singapura. Kegiatan tersebut berupa pertunjukan kebudayaan antara Indonesia dan Malaysia, mahasiswa UPI YPTK Padang menampilkan beberapa tarian tradisional seperti tari pasambahan dan tari piring diatas kaca. \r\n\r\n\r\nSelanjutnya dalam rangkaian kunjungan studi komparatif jika akan digelar simposium ilmu komputer dengan menghadirkan 2 orang narasumber dari mahasiswa UPI YPTK Padang, yang memaparkan kajian terkini ilmu komputer di masing-masing negara mereka akan memaparkan materi satu panggung dengan mahasiswa UITM Melaka. \r\n\r\n\r\nRombongan akan melawat ke KLCC, pusat pemerintahan negara Malaysia di Putrajaya, serta beberapa objek lainnya di Malaysia. Sebelum bertolak ke Singapura rombongan mengunjungi Universiti Teknologi Malaysia di Johor Baru, dengan jadwal lawatan University mahasiswa UPI YPTK Padang akan mengunjungi dan melihat berbagai fasilitas yang terdapat di UTM Johor Baru. \r\n\r\n\r\nMahasiswa studi komparatif yang berangkat pada tahun 2018 ini sangat terlihat antusias mempersiapkan berbagai kegiatan kunjungan mereka mulai dari pertunjukan seni, simposium kebudayaan hingga diskusi diskusi ilmiah yang digelar di berbagai kampus di Malaysia. Para peserta mengucapkan terima kasih kepada Yayasan Perguruan Tinggi Komputer Padang atas support full akomodasi dan transportasi hingga pembuatan paspor, hal ini menjadi pengalaman yang sangat berharga bagi mereka dalam aktivitas akademik internasional. \r\n\r\n\r\nWakil Rektor 4 Bidang kerjasama dan inovasi UPI YPTK Padang Muhammad Ridwan, SE, MM. menyampaikan ini merupakan salah satu agenda dari kantor urusan internasional UPI YPTK Padang. Kita sudah memiliki beberapa kerjasama dengan perguruan tinggi luar negeri seperti Korea, Jepang, Australia, Turki, Usbekistan dan Kazakhstan. Ke depan program serupa akan terus dikembangkan dalam tingkat yang lebih tinggi seperti student mobility atau student exchange.', 'UPI-YPTK-23032018-52258.jpg', '2018-04-27 18:33:42');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `kd_dosen` varchar(20) NOT NULL,
  `nm_dosen` varchar(30) NOT NULL,
  `jns_kelamin` varchar(5) NOT NULL,
  `foto` text NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`kd_dosen`, `nm_dosen`, `jns_kelamin`, `foto`, `password`) VALUES
('001', 'dosen', 'L', '', 'dosen');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nobp` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jns_kelamin` varchar(10) NOT NULL,
  `semester` int(11) NOT NULL,
  `jml_sks` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  `foto` text NOT NULL,
  `password` varchar(25) NOT NULL,
  `kd_pkl` varchar(10) NOT NULL,
  PRIMARY KEY (`nobp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nobp`, `nama`, `jns_kelamin`, `semester`, `jml_sks`, `status`, `foto`, `password`, `kd_pkl`) VALUES
('15101152610444', 'PUTRA', 'L', 6, 110, 'valid', '', 'PUTRA', 'PKL002'),
('15101152610445', 'M Taufik Ikram', 'L', 6, 111, 'valid', '', '123', 'PKL001'),
('15101152610456', 'Randi Oktaria Rinanda', 'L', 6, 111, 'valid', '', '123', 'PKL001');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
  `kd_pengumuman` int(11) NOT NULL AUTO_INCREMENT,
  `judul_pengumuman` varchar(100) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `tgl_post` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`kd_pengumuman`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`kd_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `tgl_post`) VALUES
(1, 'RAMADHAN', 'Karna tanggal 16 Mei memasuki Bulan Ramadhan,mahasiswa diliburkan dan masuk kembali tanggal 18 mei.', '2018-04-28 10:25:03');

-- --------------------------------------------------------

--
-- Table structure for table `pkl`
--

CREATE TABLE IF NOT EXISTS `pkl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_pkl` varchar(10) NOT NULL,
  `judul_pkl` varchar(200) NOT NULL,
  `tema_pkl` varchar(50) NOT NULL,
  `objek_pkl` varchar(50) NOT NULL,
  `latarbelakang_pkl` text NOT NULL,
  `judul_ke` varchar(11) NOT NULL,
  `tgl_diajukan` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tgl_diperiksa` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(10) NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pkl`
--

INSERT INTO `pkl` (`id`, `kd_pkl`, `judul_pkl`, `tema_pkl`, `objek_pkl`, `latarbelakang_pkl`, `judul_ke`, `tgl_diajukan`, `tgl_diperiksa`, `status`, `ket`) VALUES
(1, 'PKL001', 'PERANCANGAN WEBSITE PRODI SISTEM INFORMASI DAN PENGAJUAN JUDUL PKL ONLINE MENGGUNAKAN BAHASA PEMROGRAMAN PHP DAN DATABASE MYSQL', 'SISTEM INFORMASI AKADEMIK', 'UNIVERSITAS PUTRA INDONESIA YPTK PADANG', 'PERANCANGAN WEBSITE PRODI SISTEM INFORMASI DAN PENGAJUAN JUDUL PKL ONLINE MENGGUNAKAN BAHASA PEMROGRAMAN PHP DAN DATABASE MYSQL', '1', '2018-06-04 09:10:33', '2018-06-05 00:03:38', '-', '-'),
(2, 'PKL001', 'PERANCANGAN SISTEM PAKAR MENDIAGNOSA PENYAKIT MAG DENGAN METODE SAW MENGGUNAKAN BAHASA PEMROGRAMAN PHP DAN DATABASE MYSQL', 'SISTEM PAKAR', 'RUMAH SAKIT MARAPALAM', 'PERANCANGAN SISTEM PAKAR MENDIAGNOSA PENYAKIT MAG DENGAN METODE SAW MENGGUNAKAN BAHASA PEMROGRAMAN PHP DAN DATABASE MYSQL', '2', '2018-06-04 09:14:06', '0000-00-00 00:00:00', '-', '-'),
(3, 'PKL002', 'PERANCANGAN SISTEM INFORMASI AKADEMIK PENILAIAN SISWA SMA MENGGUNAKAN BAHASA PEMROGRAMAN PHP DAN DATABASE MYSQL', 'SISTEM INFORMASI AKADEMIK', 'SMA PERTIWI 1 PADANG', 'PERANCANGAN SISTEM INFORMASI AKADEMIK PENILAIAN SISWA SMA MENGGUNAKAN BAHASA PEMROGRAMAN PHP DAN DATABASE MYSQL', '1', '2018-06-04 09:18:50', '2018-06-04 09:19:51', 'TOLAK', 'Maaf Judul Anda Ditolak Silahkan Cari Judul Lain Untuk Pengajuan Judul berikutnya . . . . !!!');
