-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 18, 2018 at 11:28 AM
-- Server version: 10.0.33-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp_kuisioner`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id_alumni` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id_alumni`, `id_user`, `nama`, `alamat`) VALUES
(3, 4, 'gege', 'gresik'),
(4, 7, 'as', 'as');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_kuisioner`
--

CREATE TABLE `hasil_kuisioner` (
  `id_hasil_kuisioner` int(30) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `pertanyaan_jawaban` text,
  `format_jawaban` text NOT NULL,
  `tanggal_menjawab` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hasil_kuisioner`
--

INSERT INTO `hasil_kuisioner` (`id_hasil_kuisioner`, `id_user`, `nama`, `pertanyaan_jawaban`, `format_jawaban`, `tanggal_menjawab`) VALUES
(63, 10, 'antri', '[{"pertanyaan":"Nama  Responden?","jawaban":"Ruri?"},{"pertanyaan":"Jabatan?","jawaban":"Jabatan?"},{"pertanyaan":"Nama Instansi?","jawaban":"PTPT?"},{"pertanyaan":"Alamat?","jawaban":"Alamat?"},{"pertanyaan":"Jumlah  Alumni  Sekolalah  Tinggi  Ilmu  Komputer  Pelita  Indonesia ?","jawaban":"Jumlah Alumni Sekolalah Tinggi Ilmu Komputer Pelita Indonesia ?"},{"pertanyaan":"Nama  Alumni?","jawaban":"Nama Alumni?"},{"pertanyaan":"Jabatan?","jawaban":"Jabatan?"},{"pertanyaan":"Nama Instansi?","jawaban":"Nama Instansi?"},{"pertanyaan":"Alamat?","jawaban":"Alamat?"},{"pertanyaan":"Jumlah  Alumni  Sekolalah  Tinggi  Ilmu  Komputer  Pelita  Indonesia ?","jawaban":". Jumlah Alumni Sekolalah Tinggi Ilmu Komputer Pelita Indonesia ?"},{"keterangan":"Pertanyaan dibawah ini adalah faktor yang menentukan seleksi karyawan baru (pilihlah jawaban dibawah ini dengan member tanda silang atau lingkar pada jawaban: SS=Sangat Setuju; S=Setuju; TS=Tidak Setuju; STS=Sangat Tidak Setuju).","radiokey":["SS","S","TS","STS"],"pertanyaan":["Mempunyai kemampuan akademik","Menguasai bahasa asing (Inggris,Mandarin,dll)","Mempunyai kemampuan manajerial","Faktor kepribadian (wawasan, rasa percaya diri, kemandirian dan motivasi)","Mempunyai kemampuan komunikasi","Mempunyai kemampuan adaptasi","Mempunyai kemampuan komputer","Mempunyai wawasan yang baik","Faktor koneksi-persaudaraan","Faktor relasi-kenalan baik(teman)","Faktor alumni","Faktor gender","Faktor ras\\/suku"],"jawaban":["4","4","3","3","2","3","3","3","3","3","3","3","3"]},{"pertanyaan":"Bidang keahlian yang paling membantu keberhasilan mengikuti tes penerimaan pegawai?","jawaban":"Analisis dan Perancangan Sistem"},{"pertanyaan":"Memberikan informasi informasi lowongan kerja ke?","jawaban":"Iklan di media cetak \\/ elektronik"},{"pertanyaan":"Bidang pekerjaan yang dibutuhkan?","jawaban":"Keuangan"},{"pertanyaan":"Jabatan pertama yang ditempati alumni?","jawaban":"Klerikal"},{"pertanyaan":"Gaji pertama kali yang diterima oleh alumni?","jawaban":["Diatas Rp.4.000.000"]},{"pertanyaan":"Bidang pekerjaan alumni terakhir?","jawaban":"Produksi\\/Operasi"},{"pertanyaan":"Bidang ilmu yang paling menunjang karir alumni?","jawaban":"Sistem informasi"},{"pertanyaan":"Jabatan terakhir yang ditempati alumni?","jawaban":"Setingkat middle manager"},{"pertanyaan":"Gaji terahkir yang diterima alumni?","jawaban":["Diatas Rp.4.000.000"]},{"keterangan":"Pernyataan berikut ini digunakan untuk mengetahui kompetensi alumni di lingkungan kerja. Pilihlah jawaban dengan memberikan lingkaran atau silang pada jawaban : SB= Sangat Baik, B=Baik, C=Cukup Baik, KB=Kurang Baik.","radiokey":["SB","B","CB","KB"],"pertanyaan":["Integritas (Etika dan Moral)","Keahlian berdasarkan ilmu (Profesianalisme)","Kemampuan bahasa asing","Penguasaan teknologi informasi","Kemampuan Komunikasi","Kerjasama tim","Pengembangan diri"],"jawaban":["4","3","3","3","4","3","2"]},{"pertanyaan":"Program study yang sekiranya di butuhkan oleh instansi Bapak\\/Ibu (boleh pilih lebih dari satu)","jawaban":"S1 Teknik Informatika"},{"pertanyaan":"Mata kuliah yang sangat menunjang pekerjaan instansi Bapak\\/Ibu (boleh pilih salah satu)","jawaban":"Lain-lain yaitu ERP"},{"pertanyaan":"3. Saran dari instansi, baik yang menyangkut kurikulum \\/akademik atau lainya untuk pengembangan jurusan Sistem Informasi STIKOM Pelita Indonesia dimasa mendatang","jawaban":"Bagusnya kurikulum didukung dengan fasilitas yang bagus"}]', '["text","text","text","text","text","text","text","text","text","text","table","radio2","radio2","radio2","radio2","radio","radio2","radio2","radio2","radio","table","radio2","radio2","text"]', '2018-02-11 21:40:03'),
(64, 6, 'asdasdasdasd', '[{"pertanyaan":"Nama  Responden?","jawaban":"asdasdasdas"},{"pertanyaan":"Jabatan?","jawaban":"asdasd"},{"pertanyaan":"Nama Instansi?","jawaban":"asdasdasd"},{"pertanyaan":"Alamat?","jawaban":"asdasdasd"},{"pertanyaan":"Jumlah  Alumni  Sekolalah  Tinggi  Ilmu  Komputer  Pelita  Indonesia ?","jawaban":"asdasdasd"},{"pertanyaan":"Nama  Alumni?","jawaban":"asdasd"},{"pertanyaan":"Jabatan?","jawaban":"asdasd"},{"pertanyaan":"Nama Instansi?","jawaban":"asdasd"},{"pertanyaan":"Alamat?","jawaban":"asdasd"},{"pertanyaan":"Jumlah  Alumni  Sekolalah  Tinggi  Ilmu  Komputer  Pelita  Indonesia ?","jawaban":"asdasdasd"},{"keterangan":"Pertanyaan dibawah ini adalah faktor yang menentukan seleksi karyawan baru (pilihlah jawaban dibawah ini dengan member tanda silang atau lingkar pada jawaban: SS=Sangat Setuju; S=Setuju; TS=Tidak Setuju; STS=Sangat Tidak Setuju).","radiokey":["SS","S","TS","STS"],"pertanyaan":["Mempunyai kemampuan akademik","Menguasai bahasa asing (Inggris,Mandarin,dll)","Mempunyai kemampuan manajerial","Faktor kepribadian (wawasan, rasa percaya diri, kemandirian dan motivasi)","Mempunyai kemampuan komunikasi","Mempunyai kemampuan adaptasi","Mempunyai kemampuan komputer","Mempunyai wawasan yang baik","Faktor koneksi-persaudaraan","Faktor relasi-kenalan baik(teman)","Faktor alumni","Faktor gender","Faktor ras\\/suku"],"jawaban":["4","4","4","3","4","4","3","3","3","3","4","3","4"]},{"pertanyaan":"Bidang keahlian yang paling membantu keberhasilan mengikuti tes penerimaan pegawai?","jawaban":"Algoritma"},{"pertanyaan":"Memberikan informasi informasi lowongan kerja ke?","jawaban":"Iklan di media cetak \\/ elektronik"},{"pertanyaan":"Bidang pekerjaan yang dibutuhkan?","jawaban":"Pemasaran"},{"pertanyaan":"Jabatan pertama yang ditempati alumni?","jawaban":"Setingkat MiddleManager"},{"pertanyaan":"Gaji pertama kali yang diterima oleh alumni?","jawaban":["Diatas Rp.4.000.000"]},{"pertanyaan":"Bidang pekerjaan alumni terakhir?","jawaban":"Research & Development"},{"pertanyaan":"Bidang ilmu yang paling menunjang karir alumni?","jawaban":"Analisis laporan keuangan"},{"pertanyaan":"Jabatan terakhir yang ditempati alumni?","jawaban":"Setingkat middle manager"},{"pertanyaan":"Gaji terahkir yang diterima alumni?","jawaban":["Diatas Rp.4.000.000"]},{"keterangan":"Pernyataan berikut ini digunakan untuk mengetahui kompetensi alumni di lingkungan kerja. Pilihlah jawaban dengan memberikan lingkaran atau silang pada jawaban : SB= Sangat Baik, B=Baik, C=Cukup Baik, KB=Kurang Baik.","radiokey":["SB","B","CB","KB"],"pertanyaan":["Integritas (Etika dan Moral)","Keahlian berdasarkan ilmu (Profesianalisme)","Kemampuan bahasa asing","Penguasaan teknologi informasi","Kemampuan Komunikasi","Kerjasama tim","Pengembangan diri"],"jawaban":["4","4","4","3","4","4","3"]},{"pertanyaan":"Program study yang sekiranya di butuhkan oleh instansi Bapak\\/Ibu (boleh pilih lebih dari satu)","jawaban":"S1 Manajemen1"},{"pertanyaan":"Mata kuliah yang sangat menunjang pekerjaan instansi Bapak\\/Ibu (boleh pilih salah satu)","jawaban":"Metode Numerik"},{"pertanyaan":"3. Saran dari instansi, baik yang menyangkut kurikulum \\/akademik atau lainya untuk pengembangan jurusan Sistem Informasi STIKOM Pelita Indonesia dimasa mendatang","jawaban":"pt asikin sajha"}]', '["text","text","text","text","text","text","text","text","text","text","table","radio2","radio2","radio2","radio2","radio","radio2","radio2","radio2","radio","table","radio2","radio2","text"]', '2018-02-11 21:41:20'),
(65, 0, 'asasd', '[{"pertanyaan":"Nama  Responden?","jawaban":"asd"},{"pertanyaan":"Jabatan?","jawaban":"asd"},{"pertanyaan":"Nama Instansi?","jawaban":"asd"},{"pertanyaan":"Alamat?","jawaban":"sd"},{"pertanyaan":"Jumlah  Alumni  Sekolalah  Tinggi  Ilmu  Komputer  Pelita  Indonesia ?","jawaban":"a"},{"pertanyaan":"Nama  Alumni?","jawaban":"asd"},{"pertanyaan":"Jabatan?","jawaban":"asd"},{"pertanyaan":"Nama Instansi?","jawaban":"asd"},{"pertanyaan":"Alamat?","jawaban":"asd"},{"pertanyaan":"Jumlah  Alumni  Sekolalah  Tinggi  Ilmu  Komputer  Pelita  Indonesia ?","jawaban":"qasdda"},{"keterangan":"Pertanyaan dibawah ini adalah faktor yang menentukan seleksi karyawan baru (pilihlah jawaban dibawah ini dengan member tanda silang atau lingkar pada jawaban: SS=Sangat Setuju; S=Setuju; TS=Tidak Setuju; STS=Sangat Tidak Setuju).","radiokey":["SS","S","TS","STS"],"pertanyaan":["Mempunyai kemampuan akademik","Menguasai bahasa asing (Inggris,Mandarin,dll)","Mempunyai kemampuan manajerial","Faktor kepribadian (wawasan, rasa percaya diri, kemandirian dan motivasi)","Mempunyai kemampuan komunikasi","Mempunyai kemampuan adaptasi","Mempunyai kemampuan komputer","Mempunyai wawasan yang baik","Faktor koneksi-persaudaraan","Faktor relasi-kenalan baik(teman)","Faktor alumni","Faktor gender","Faktor ras\\/suku"],"jawaban":["4","4","4","4","4","4","4","4","4","4","4","4","4"]},{"pertanyaan":"Bidang keahlian yang paling membantu keberhasilan mengikuti tes penerimaan pegawai?","jawaban":"Programming"},{"pertanyaan":"Memberikan informasi informasi lowongan kerja ke?","jawaban":"Program studi\\/STIKOM Pelita Indonesia"},{"pertanyaan":"Bidang pekerjaan yang dibutuhkan?","jawaban":"Sistem Informasi"},{"pertanyaan":"Jabatan pertama yang ditempati alumni?","jawaban":"Setingkat Top Manager"},{"pertanyaan":"Gaji pertama kali yang diterima oleh alumni?","jawaban":["Rp.1.000.000 s\\/d Rp.2.000.000"]},{"pertanyaan":"Bidang pekerjaan alumni terakhir?","jawaban":"Produksi\\/Operasi"},{"pertanyaan":"Bidang ilmu yang paling menunjang karir alumni?","jawaban":"Algoritma"},{"pertanyaan":"Jabatan terakhir yang ditempati alumni?","jawaban":"Setingkat middle manager"},{"pertanyaan":"Gaji terahkir yang diterima alumni?","jawaban":["Rp.1.000.000 s\\/d Rp.2.000.000"]},{"keterangan":"Pernyataan berikut ini digunakan untuk mengetahui kompetensi alumni di lingkungan kerja. Pilihlah jawaban dengan memberikan lingkaran atau silang pada jawaban : SB= Sangat Baik, B=Baik, C=Cukup Baik, KB=Kurang Baik.","radiokey":["SB","B","CB","KB"],"pertanyaan":["Integritas (Etika dan Moral)","Keahlian berdasarkan ilmu (Profesianalisme)","Kemampuan bahasa asing","Penguasaan teknologi informasi","Kemampuan Komunikasi","Kerjasama tim","Pengembangan diri"],"jawaban":["4","4","4","4","4","4","4"]},{"pertanyaan":"Program study yang sekiranya di butuhkan oleh instansi Bapak\\/Ibu (boleh pilih lebih dari satu)","jawaban":"S1 sistem Informasi"},{"pertanyaan":"Mata kuliah yang sangat menunjang pekerjaan instansi Bapak\\/Ibu (boleh pilih salah satu)","jawaban":"Kalkulus"},{"pertanyaan":"3. Saran dari instansi, baik yang menyangkut kurikulum \\/akademik atau lainya untuk pengembangan jurusan Sistem Informasi STIKOM Pelita Indonesia dimasa mendatang","jawaban":"asdasd"}]', '["text","text","text","text","text","text","text","text","text","text","table","radio2","radio2","radio2","radio2","radio","radio2","radio2","radio2","radio","table","radio2","radio2","text"]', '2018-02-14 22:58:12'),
(67, 5, 'lokian', '[{"pertanyaan":"Nama  Responden?","jawaban":"lokian"},{"pertanyaan":"Jabatan?","jawaban":"assad"},{"pertanyaan":"Nama Instansi? (nama instansi anda)","jawaban":"asdasd"},{"pertanyaan":"Alamat?","jawaban":"asd"},{"pertanyaan":"Jumlah  Alumni  Sekolalah  Tinggi  Ilmu  Komputer  Pelita  Indonesia ?","jawaban":"siak"},{"pertanyaan":"Nama \\u00a0Alumni? (sesuai dengan nama form alumni yang bekerja di tempat anda)","jawaban":"asd"},{"pertanyaan":"Jabatan?","jawaban":"asd"},{"pertanyaan":"Nama Instansi? (nama instansi anda)","jawaban":"asd"},{"pertanyaan":"Alamat?","jawaban":"asd"},{"pertanyaan":"Jumlah  Alumni  Sekolalah  Tinggi  Ilmu  Komputer  Pelita  Indonesia ?","jawaban":"asd"},{"keterangan":"Pertanyaan dibawah ini adalah faktor yang menentukan seleksi karyawan baru (pilihlah jawaban dibawah ini dengan member tanda silang atau lingkar pada jawaban: SS=Sangat Setuju; S=Setuju; TS=Tidak Setuju; STS=Sangat Tidak Setuju).","radiokey":["SS","S","TS","STS"],"pertanyaan":["Mempunyai kemampuan akademik","Menguasai bahasa asing (Inggris,Mandarin,dll)","Mempunyai kemampuan manajerial","Faktor kepribadian (wawasan, rasa percaya diri, kemandirian dan motivasi)","Mempunyai kemampuan komunikasi","Mempunyai kemampuan adaptasi","Mempunyai kemampuan komputer","Mempunyai wawasan yang baik","Faktor koneksi-persaudaraan","Faktor relasi-kenalan baik(teman)","Faktor alumni","Faktor gender","Faktor ras\\/suku"],"jawaban":["4","4","4","4","4","4","4","4","4","4","4","4","4"]},{"pertanyaan":"Bidang keahlian yang paling membantu keberhasilan mengikuti tes penerimaan pegawai?","jawaban":"Algoritma"},{"pertanyaan":"Memberikan informasi informasi lowongan kerja ke?","jawaban":"Program studi\\/STIKOM Pelita Indonesia"},{"pertanyaan":"Bidang pekerjaan yang dibutuhkan?","jawaban":"Research & Development"},{"pertanyaan":"Jabatan pertama yang ditempati alumni?","jawaban":"Setingkat lower Manager"},{"pertanyaan":"Gaji pertama kali yang diterima oleh alumni?","jawaban":["Rp.2.000.000 s\\/d Rp.3.000.000"]},{"pertanyaan":"Bidang pekerjaan alumni terakhir?","jawaban":"Produksi\\/Operasi"},{"pertanyaan":"Bidang ilmu yang paling menunjang karir alumni?","jawaban":"Manajemen proyek"},{"pertanyaan":"Jabatan terakhir yang ditempati alumni?","jawaban":"Setingkat top manager"},{"pertanyaan":"Gaji terahkir yang diterima alumni?","jawaban":["Rp.2.000.000 s\\/d Rp.3.000.000"]},{"keterangan":"Pernyataan berikut ini digunakan untuk mengetahui kompetensi alumni di lingkungan kerja. Pilihlah jawaban dengan memberikan lingkaran atau silang pada jawaban : SB= Sangat Baik, B=Baik, C=Cukup Baik, KB=Kurang Baik.","radiokey":["SB","B","CB","KB"],"pertanyaan":["Integritas (Etika dan Moral)","Keahlian berdasarkan ilmu (Profesianalisme)","Kemampuan bahasa asing","Penguasaan teknologi informasi","Kemampuan Komunikasi","Kerjasama tim","Pengembangan diri"],"jawaban":["4","4","4","4","4","4","4"]},{"pertanyaan":"Program study yang sekiranya di butuhkan oleh instansi Bapak\\/Ibu (boleh pilih lebih dari satu)","jawaban":"S1 sistem Informasi"},{"pertanyaan":"Mata kuliah yang sangat menunjang pekerjaan instansi Bapak\\/Ibu (boleh pilih salah satu)","jawaban":"Programming"},{"pertanyaan":"3. Saran dari instansi, baik yang menyangkut kurikulum \\/akademik atau lainya untuk pengembangan jurusan Sistem Informasi STIKOM Pelita Indonesia dimasa mendatang","jawaban":"asdasd"}]', '["text","text","text","text","text","text","text","text","text","text","table","radio2","radio2","radio2","radio2","radio","radio2","radio2","radio2","radio","table","radio2","radio2","text"]', '2018-02-18 03:48:47');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_kuisioner_alumni`
--

CREATE TABLE `hasil_kuisioner_alumni` (
  `id_hasil_kuisioner_alumni` int(30) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `pertanyaan_jawaban` text,
  `format_jawaban` text NOT NULL,
  `tanggal_menjawab` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hasil_kuisioner_alumni`
--

INSERT INTO `hasil_kuisioner_alumni` (`id_hasil_kuisioner_alumni`, `id_user`, `nama`, `pertanyaan_jawaban`, `format_jawaban`, `tanggal_menjawab`) VALUES
(1, 2, 'antoAdministrasi', '[{"pertanyaan":"Nama?","jawaban":"anto"},{"pertanyaan":"Tempat Lahir?","jawaban":"pekanbaru"},{"pertanyaan":"Tanggal Lahir?","jawaban":"1999-12-31"},{"pertanyaan":"Jenis Kelamin?","jawaban":["laki-laki"]},{"pertanyaan":"Alamat Sekarang?","jawaban":"siak"},{"pertanyaan":"No. Telp\\/Hp?","jawaban":"412312312"},{"pertanyaan":"E-mail?","jawaban":"anto@gmail"},{"pertanyaan":"Th. Masuk?","jawaban":"2017"},{"pertanyaan":"Th. Lulus?","jawaban":"2018"},{"pertanyaan":"Prodi?","jawaban":["Teknik Informatika"]},{"pertanyaan":"IPK Lulusan?","jawaban":["3.00-3.49"]},{"pertanyaan":"Nama tempat bekerja sekarang?","jawaban":"pt citra"},{"pertanyaan":"Alamat tempat bekerja sekarang?","jawaban":"siak"},{"pertanyaan":"Kabupaten\\/Provinsi Bekerja?","jawaban":"siak"},{"pertanyaan":"Jenis Instansi\\/Bidang Usaha\\/Industri?","jawaban":"Swasta"},{"pertanyaan":"Jabatan\\/posisi dalam bekerja?","jawaban":"Administrasi"},{"pertanyaan":"Bulan dan tahun mulai bekkerja?","jawaban":"feb 2016"},{"pertanyaan":"Dari mana saudara mengatahui atau mendapatkan informasi mengenai adanya pekerjaan?","jawaban":"Iklan"},{"pertanyaan":"Berapa rata-rata pendapatan saudara pada pekerjaan sekarang?","jawaban":["5.000.000 \\u2013 7.500.000"]},{"pertanyaan":"Menurut saudara bagaimana kebutuhan instansi tempat saudara bekerja terhadap lulusan dari prodi atau jurusan saudara?","jawaban":["Sangat Tinggi"]},{"pertanyaan":"Secara Umum, apa pertimbangan utama saudara dalam memilih pekerjaan yang terakhir sekarang?","jawaban":"Gaji Memadai"},{"pertanyaan":"Sejauh mana perkejaan saudara yang terakhir\\/sekarang sesuai dengan harapan ketika pertama kali belajar di STIKOM PI ?","jawaban":["Sangat sesuai dengan harapan"]},{"pertanyaan":"Apakah saudara puas dengan pekerjaan saudara terkahir \\/ sekarang?","jawaban":["Sangat Puas"]},{"pertanyaan":"Nama tempat bekerja sekarang?","jawaban":"pt gii"},{"pertanyaan":"Jenis Instansi\\/Bidang Usaha\\/Industri?","jawaban":"Pemerintah"},{"pertanyaan":"Nama tempat bekerja?","jawaban":"pt siop"},{"pertanyaan":"Jenis Instransi\\/ bidang usaha\\/ industri?","jawaban":"Pemerintah"},{"pertanyaan":"Jabatan \\/ posisi pekerjaan pertama?","jawaban":"Administrasi"},{"pertanyaan":"Bulan dan tahun mulai bekerja?","jawaban":"januari 2017"},{"pertanyaan":"Bulan dan tahun berhenti berkerja?","jawaban":"januari 2018"},{"pertanyaan":"Darimana saudara mengetahui atau mendapatkan informasi mengenai adanya pekerjaan pertama ini?","jawaban":["Internet"]},{"pertanyaan":"Berapa rata-rata pendapatan (seluruhnya) saudara pada pekerjaan pertama ?","jawaban":["2.500.000 \\u2013 5.000.000"]},{"pertanyaan":"Secara umum apa pertimbangan utama saudara dalam memilih pekerjaan pertama ?","jawaban":"Sesuai bidang keilmuan"},{"pertanyaan":"Berapa lama saudara menunggu untu mendapatkan pekerjaan pertama setelah lulus ?","jawaban":["> 8 bulan"]},{"pertanyaan":"Faktor yang paling berperan dalam mendapatakan peerjaan pertama saudara ? ?","jawaban":"IPK \\/ kemampuan akademik"}]', '["text","text","date","radio","text","number","email","number","number","radio","radio","text","text","text","radio2","text","text","radio2","radio","radio","radio2","radio","radio","text","radio2","text","radio2","text","text","text","radio","radio","radio2","radio","radio2"]', '2018-02-13 23:41:34'),
(2, 3, 'Agung', '[{"pertanyaan":"Nama?","jawaban":"Agung susanto"},{"pertanyaan":"Tempat Lahir?","jawaban":""},{"pertanyaan":"Tanggal Lahir?","jawaban":""},{"pertanyaan":"Jenis Kelamin?","jawaban":null},{"pertanyaan":"Alamat Sekarang?","jawaban":""},{"pertanyaan":"No. Telp\\/Hp?","jawaban":""},{"pertanyaan":"E-mail?","jawaban":""},{"pertanyaan":"Th. Masuk?","jawaban":"2010"},{"pertanyaan":"Th. Lulus?","jawaban":"2016"},{"pertanyaan":"Prodi?","jawaban":["Sistem Informasi"]},{"pertanyaan":"IPK Lulusan?","jawaban":["3.00-3.49"]},{"pertanyaan":"Nama tempat bekerja sekarang?","jawaban":"PT citra pencitraan"},{"pertanyaan":"Alamat tempat bekerja sekarang?","jawaban":""},{"pertanyaan":"Kabupaten\\/Provinsi Bekerja?","jawaban":""},{"pertanyaan":"Jenis Instansi\\/Bidang Usaha\\/Industri?","jawaban":null},{"pertanyaan":"Jabatan\\/posisi dalam bekerja?","jawaban":"Programmer"},{"pertanyaan":"Bulan dan tahun mulai bekkerja?","jawaban":""},{"pertanyaan":"Dari mana saudara mengatahui atau mendapatkan informasi mengenai adanya pekerjaan?","jawaban":null},{"pertanyaan":"Berapa rata-rata pendapatan saudara pada pekerjaan sekarang?","jawaban":null},{"pertanyaan":"Menurut saudara bagaimana kebutuhan instansi tempat saudara bekerja terhadap lulusan dari prodi atau jurusan saudara?","jawaban":null},{"pertanyaan":"Secara Umum, apa pertimbangan utama saudara dalam memilih pekerjaan yang terakhir sekarang?","jawaban":null},{"pertanyaan":"Sejauh mana perkejaan saudara yang terakhir\\/sekarang sesuai dengan harapan ketika pertama kali belajar di STIKOM PI ?","jawaban":["Sesuai harapan"]},{"pertanyaan":"Apakah saudara puas dengan pekerjaan saudara terkahir \\/ sekarang?","jawaban":null},{"pertanyaan":"Nama tempat bekerja sekarang?","jawaban":"pt asikin sajha"},{"pertanyaan":"Jenis Instansi\\/Bidang Usaha\\/Industri?","jawaban":null},{"pertanyaan":"Nama tempat bekerja?","jawaban":""},{"pertanyaan":"Jenis Instransi\\/ bidang usaha\\/ industri?","jawaban":null},{"pertanyaan":"Jabatan \\/ posisi pekerjaan pertama?","jawaban":"Programmer"},{"pertanyaan":"Bulan dan tahun mulai bekerja?","jawaban":""},{"pertanyaan":"Bulan dan tahun berhenti berkerja?","jawaban":""},{"pertanyaan":"Darimana saudara mengetahui atau mendapatkan informasi mengenai adanya pekerjaan pertama ini?","jawaban":null},{"pertanyaan":"Berapa rata-rata pendapatan (seluruhnya) saudara pada pekerjaan pertama ?","jawaban":null},{"pertanyaan":"Secara umum apa pertimbangan utama saudara dalam memilih pekerjaan pertama ?","jawaban":null},{"pertanyaan":"Berapa lama saudara menunggu untu mendapatkan pekerjaan pertama setelah lulus ?","jawaban":["< 3 bulan"]},{"pertanyaan":"Faktor yang paling berperan dalam mendapatakan peerjaan pertama saudara ? ?","jawaban":null}]', '["text","text","date","radio","text","number","email","number","number","radio","radio","text","text","text","radio2","radio2","text","radio2","radio","radio","radio2","radio","radio","text","radio2","text","radio2","radio2","text","text","radio","radio","radio2","radio","radio2"]', '2018-02-13 23:42:16'),
(6, 7, 'as', '[{"pertanyaan":"Nama?","jawaban":"asd"},{"pertanyaan":"Tempat Lahir?","jawaban":"asdasd"},{"pertanyaan":"Tanggal Lahir?","jawaban":"2018-02-01"},{"pertanyaan":"Jenis Kelamin?","jawaban":["laki-laki"]},{"pertanyaan":"Alamat Sekarang?","jawaban":"asdasd"},{"pertanyaan":"No. Telp\\/Hp?","jawaban":"123123"},{"pertanyaan":"E-mail?","jawaban":"asd@sdfsdf"},{"pertanyaan":"Th. Masuk?","jawaban":"123"},{"pertanyaan":"Th. Lulus?","jawaban":"123"},{"pertanyaan":"Prodi?","jawaban":["Sistem Informasi"]},{"pertanyaan":"IPK Lulusan?","jawaban":["3.50-4.00"]},{"pertanyaan":"Nama tempat bekerja sekarang? (Sesuai dengan form nama perusahaan sekarang diatas)","jawaban":"asdasd"},{"pertanyaan":"Alamat tempat bekerja sekarang?","jawaban":"asdasd"},{"pertanyaan":"Kabupaten\\/Provinsi Bekerja?","jawaban":"asd"},{"pertanyaan":"Jenis Instansi\\/Bidang Usaha\\/Industri?","jawaban":"Swasta"},{"pertanyaan":"Jabatan\\/posisi dalam bekerja?","jawaban":"Tenaga Pendidik"},{"pertanyaan":"Bulan dan tahun mulai bekkerja?","jawaban":"feb 2016"},{"pertanyaan":"Dari mana saudara mengatahui atau mendapatkan informasi mengenai adanya pekerjaan?","jawaban":"Pengumuman di kampus"},{"pertanyaan":"Berapa rata-rata pendapatan saudara pada pekerjaan sekarang?","jawaban":["< 2.500.000"]},{"pertanyaan":"Menurut saudara bagaimana kebutuhan instansi tempat saudara bekerja terhadap lulusan dari prodi atau jurusan saudara?","jawaban":["Rendah"]},{"pertanyaan":"Secara Umum, apa pertimbangan utama saudara dalam memilih pekerjaan yang terakhir sekarang?","jawaban":"Mendapatkan pengalaman"},{"pertanyaan":"Sejauh mana perkejaan saudara yang terakhir\\/sekarang sesuai dengan harapan ketika pertama kali belajar di STIKOM PI ?","jawaban":["Sesuai harapan"]},{"pertanyaan":"Apakah saudara puas dengan pekerjaan saudara terkahir \\/ sekarang?","jawaban":["Sangat Puas"]},{"pertanyaan":"Jenis Instansi\\/Bidang Usaha\\/Industri?","jawaban":"Swasta"},{"pertanyaan":"Nama tempat bekerja?(Sesuai dengan form nama perusahaan pertama diatas)","jawaban":"asdasd"},{"pertanyaan":"Jenis Instransi\\/ bidang usaha\\/ industri?","jawaban":"Swasta"},{"pertanyaan":"Jabatan \\/ posisi pekerjaan pertama?","jawaban":"Staff IT"},{"pertanyaan":"Bulan dan tahun mulai bekerja?","jawaban":"des 2014"},{"pertanyaan":"Bulan dan tahun berhenti berkerja?","jawaban":"des 215"},{"pertanyaan":"Darimana saudara mengetahui atau mendapatkan informasi mengenai adanya pekerjaan pertama ini?","jawaban":["Pengemuman kampus"]},{"pertanyaan":"Berapa rata-rata pendapatan (seluruhnya) saudara pada pekerjaan pertama ?","jawaban":["< 2.500.000"]},{"pertanyaan":"Secara umum apa pertimbangan utama saudara dalam memilih pekerjaan pertama ?","jawaban":"Gaji memadai"},{"pertanyaan":"Berapa lama saudara menunggu untu mendapatkan pekerjaan pertama setelah lulus ?","jawaban":["3 bulan \\u2013 8 bulan"]},{"pertanyaan":"Faktor yang paling berperan dalam mendapatakan peerjaan pertama saudara ? ?","jawaban":"Ekstrkulikuler, organisasi, kelompok studi"}]', '["text","text","date","radio","text","number","email","number","number","radio","radio","text","text","text","radio2","radio2","text","radio2","radio","radio","radio2","radio","radio","radio2","text","radio2","radio2","text","text","radio","radio","radio2","radio","radio2"]', '2018-02-18 02:53:53'),
(7, 4, 'gege', '[{"pertanyaan":"Nama?","jawaban":"ASDASD"},{"pertanyaan":"Tempat Lahir?","jawaban":"asdas"},{"pertanyaan":"Tanggal Lahir?","jawaban":"2018-02-08"},{"pertanyaan":"Jenis Kelamin?","jawaban":["Perempuan"]},{"pertanyaan":"Alamat Sekarang?","jawaban":"asdasd"},{"pertanyaan":"No. Telp\\/Hp?","jawaban":"123123"},{"pertanyaan":"E-mail?","jawaban":"asd@asdsad"},{"pertanyaan":"Th. Masuk?","jawaban":"1123"},{"pertanyaan":"Th. Lulus?","jawaban":"1212"},{"pertanyaan":"Prodi?","jawaban":["Teknik Informatika"]},{"pertanyaan":"IPK Lulusan?","jawaban":["2.00-2.49 "]},{"pertanyaan":"Nama tempat bekerja sekarang? (Sesuai dengan form nama perusahaan sekarang diatas)","jawaban":"as"},{"pertanyaan":"Alamat tempat bekerja sekarang?","jawaban":"siak"},{"pertanyaan":"Kabupaten\\/Provinsi Bekerja?","jawaban":"sdfsd"},{"pertanyaan":"Jenis Instansi\\/Bidang Usaha\\/Industri?","jawaban":"Wirausaha"},{"pertanyaan":"Jabatan\\/posisi dalam bekerja?","jawaban":"Tenaga Pendidik"},{"pertanyaan":"Bulan dan tahun mulai bekkerja?","jawaban":"feb 2016"},{"pertanyaan":"Dari mana saudara mengatahui atau mendapatkan informasi mengenai adanya pekerjaan?","jawaban":"Pengumuman di kampus"},{"pertanyaan":"Berapa rata-rata pendapatan saudara pada pekerjaan sekarang?","jawaban":["< 2.500.000"]},{"pertanyaan":"Menurut saudara bagaimana kebutuhan instansi tempat saudara bekerja terhadap lulusan dari prodi atau jurusan saudara?","jawaban":["Rendah"]},{"pertanyaan":"Secara Umum, apa pertimbangan utama saudara dalam memilih pekerjaan yang terakhir sekarang?","jawaban":"Mendapatkan"},{"pertanyaan":"Sejauh mana perkejaan saudara yang terakhir\\/sekarang sesuai dengan harapan ketika pertama kali belajar di STIKOM PI ?","jawaban":["Kurang sesuai harapan"]},{"pertanyaan":"Apakah saudara puas dengan pekerjaan saudara terkahir \\/ sekarang?","jawaban":["Puas"]},{"pertanyaan":"Jenis Instansi\\/Bidang Usaha\\/Industri?","jawaban":"Swasta"},{"pertanyaan":"Nama tempat bekerja?(Sesuai dengan form nama perusahaan pertama diatas)","jawaban":"asdasd"},{"pertanyaan":"Jenis Instransi\\/ bidang usaha\\/ industri?","jawaban":"Pemerintah"},{"pertanyaan":"Jabatan \\/ posisi pekerjaan pertama?","jawaban":"Administrasi"},{"pertanyaan":"Bulan dan tahun mulai bekerja?","jawaban":"manager"},{"pertanyaan":"Bulan dan tahun berhenti berkerja?","jawaban":"januari 2017"},{"pertanyaan":"Darimana saudara mengetahui atau mendapatkan informasi mengenai adanya pekerjaan pertama ini?","jawaban":["Internet"]},{"pertanyaan":"Berapa rata-rata pendapatan (seluruhnya) saudara pada pekerjaan pertama ?","jawaban":["2.500.000 \\u2013 5.000.000"]},{"pertanyaan":"Secara umum apa pertimbangan utama saudara dalam memilih pekerjaan pertama ?","jawaban":"Mendapat pengetahuan baru"},{"pertanyaan":"Berapa lama saudara menunggu untu mendapatkan pekerjaan pertama setelah lulus ?","jawaban":["< 3 bulan"]},{"pertanyaan":"Faktor yang paling berperan dalam mendapatakan peerjaan pertama saudara ? ?","jawaban":"IPK \\/ kemampuan akademik"}]', '["text","text","date","radio","text","number","email","number","number","radio","radio","text","text","text","radio2","radio2","text","radio2","radio","radio","radio2","radio","radio","radio2","text","radio2","radio2","text","text","radio","radio","radio2","radio","radio2"]', '2018-02-18 02:57:31');

-- --------------------------------------------------------

--
-- Table structure for table `kuisioner`
--

CREATE TABLE `kuisioner` (
  `id_kuisioner` int(11) NOT NULL,
  `id_title` int(11) NOT NULL,
  `pertanyaan` text,
  `format_pertanyaan` enum('radio','text','table','date','email','number','radio2','select') DEFAULT NULL,
  `jawaban` text,
  `tujuan` enum('alumni','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuisioner`
--

INSERT INTO `kuisioner` (`id_kuisioner`, `id_title`, `pertanyaan`, `format_pertanyaan`, `jawaban`, `tujuan`) VALUES
(1, 3, 'Nama tempat bekerja sekarang? (Sesuai dengan form nama perusahaan sekarang diatas)', 'text', '', 'alumni'),
(2, 3, 'Alamat tempat bekerja sekarang?', 'text', '', 'alumni'),
(3, 3, 'Kabupaten/Provinsi Bekerja?', 'text', '', 'alumni'),
(4, 3, 'Jenis Instansi/Bidang Usaha/Industri?', 'radio2', '["Pemerintah","Swasta","Wirausaha","text"]', 'alumni'),
(5, 3, 'Jabatan/posisi dalam bekerja?', 'radio2', '["Administrasi","Operator","Staff IT","Programmer","Tenaga Pendidik","Wiraswasta","text"]', 'alumni'),
(6, 3, 'Bulan dan tahun mulai bekkerja?', 'text', '', 'alumni'),
(7, 3, 'Dari mana saudara mengatahui atau mendapatkan informasi mengenai adanya pekerjaan?', 'radio2', '["Iklan","Internet","Pengumuman di kampus","Koneksi (3,Dosen, Saudara/Keluarga, dll","Info lowongan pada WEB STIKOM","text"]', 'alumni'),
(8, 3, 'Berapa rata-rata pendapatan saudara pada pekerjaan sekarang?', 'radio', '["< 2.500.000","2.500.000 - 5.000.000","5.000.000 – 7.500.000","> 7.500.000"]', 'alumni'),
(9, 3, 'Menurut saudara bagaimana kebutuhan instansi tempat saudara bekerja terhadap lulusan dari prodi atau jurusan saudara?', 'radio', '["Sangat Tinggi","Tinggi","Rendah","Sangat Rendah"]', 'alumni'),
(10, 3, 'Secara Umum, apa pertimbangan utama saudara dalam memilih pekerjaan yang terakhir sekarang?', 'radio2', '["Gaji Memadai","Ssuai bidang keilmuan","Mendapatkan pengalaman","Mendapatkan","Mendapatkan","text"]', 'alumni'),
(11, 3, 'Sejauh mana perkejaan saudara yang terakhir/sekarang sesuai dengan harapan ketika pertama kali belajar di STIKOM PI ?', 'radio', '["Sangat sesuai dengan harapan","Sesuai harapan","Kurang sesuai harapan","Tidak sesuai harapan"]', 'alumni'),
(12, 3, 'Apakah saudara puas dengan pekerjaan saudara terkahir / sekarang?', 'radio', '["Sangat Puas","Puas","Tidak Puas","Kurang"]', 'alumni'),
(13, 4, 'Nama tempat bekerja?(Sesuai dengan form nama perusahaan pertama diatas)', 'text', '', 'alumni'),
(14, 4, 'Jenis Instransi/ bidang usaha/ industri?', 'radio2', '["Pemerintah","Swasta","Wirausaha","text"]', 'alumni'),
(15, 4, 'Jabatan / posisi pekerjaan pertama?', 'radio2', '["Administrasi","Operator","Staff IT","Programmer","Tenaga Pendidik","Wiraswasta","text"]', 'alumni'),
(16, 4, 'Bulan dan tahun mulai bekerja?', 'text', '', 'alumni'),
(17, 4, 'Bulan dan tahun berhenti berkerja?', 'text', '', 'alumni'),
(18, 4, 'Darimana saudara mengetahui atau mendapatkan informasi mengenai adanya pekerjaan pertama ini?', 'radio', '["Iklan","Internet","Pengemuman kampus","Teman, saudara, dll","Info lowongan pada web STIKOM PI"]', 'alumni'),
(19, 4, 'Berapa rata-rata pendapatan (seluruhnya) saudara pada pekerjaan pertama ?', 'radio', '["< 2.500.000","2.500.000 – 5.000.000","Dst"]', 'alumni'),
(20, 4, 'Secara umum apa pertimbangan utama saudara dalam memilih pekerjaan pertama ?', 'radio2', '["Gaji memadai","Sesuai bidang keilmuan","Mendapat pengetahuan baru","Mendapat pengetahuan baru","Mendapat keterampilan","text"]', 'alumni'),
(21, 4, 'Berapa lama saudara menunggu untu mendapatkan pekerjaan pertama setelah lulus ?', 'radio', '["< 3 bulan","3 bulan – 8 bulan","> 8 bulan"]', 'alumni'),
(22, 4, 'Faktor yang paling berperan dalam mendapatakan peerjaan pertama saudara ? ?', 'radio2', '["IPK / kemampuan akademik","Ekstrkulikuler, organisasi, kelompok studi","Asal perguruan tinggi","Kepribadian","Pengalaman lain : kursus keterampilan, bahasa, TI","text"]', 'alumni'),
(24, 3, 'Jenis Instansi/Bidang Usaha/Industri?', 'radio2', '["Pemerintah","Swasta","Wirausaha","text"]', 'alumni'),
(25, 5, 'Nama  Responden?', 'text', '', 'user'),
(26, 5, 'Jabatan?', 'text', '', 'user'),
(27, 5, 'Nama Instansi? (nama instansi anda)', 'text', '', 'user'),
(28, 5, 'Alamat?', 'text', '', 'user'),
(29, 5, 'Jumlah  Alumni  Sekolalah  Tinggi  Ilmu  Komputer  Pelita  Indonesia ?', 'text', '', 'user'),
(30, 6, 'Nama  Alumni?\n (sesuai dengan nama form alumni yang bekerja di tempat anda)', 'text', '', 'user'),
(31, 6, 'Jabatan?', 'text', '', 'user'),
(32, 6, 'Nama Instansi? (nama instansi anda)', 'text', '', 'user'),
(33, 6, 'Alamat?', 'text', '', 'user'),
(34, 6, 'Jumlah  Alumni  Sekolalah  Tinggi  Ilmu  Komputer  Pelita  Indonesia ?', 'text', '', 'user'),
(35, 8, 'Pertanyaan dibawah ini adalah faktor yang menentukan seleksi karyawan baru (pilihlah jawaban dibawah ini dengan member tanda silang atau lingkar pada jawaban: SS=Sangat Setuju; S=Setuju; TS=Tidak Setuju; STS=Sangat Tidak Setuju).', 'table', '{\n    "thead":["No","Indikator"],\n    "tbody":[\n                ["a","Mempunyai kemampuan akademik"],\n                ["b","Menguasai bahasa asing (Inggris,Mandarin,dll)"],\n                ["c","Mempunyai kemampuan manajerial"],\n                ["d","Faktor kepribadian (wawasan, rasa percaya diri, kemandirian dan motivasi)"],\n                ["e","Mempunyai kemampuan komunikasi"],\n                ["f","Mempunyai kemampuan adaptasi"],\n                ["g","Mempunyai kemampuan komputer"],\n                ["h","Mempunyai wawasan yang baik"],\n                ["i","Faktor koneksi-persaudaraan"],\n                ["j","Faktor relasi-kenalan baik(teman)"],\n                ["k","Faktor alumni"],\n                ["l","Faktor gender"],\n                ["m","Faktor ras\\/suku"]\n            ],\n    "radiokey":["SS","S","TS","STS"],\n    "radioval":["4","3","2","1"]\n}', 'user'),
(36, 8, 'Bidang keahlian yang paling membantu keberhasilan mengikuti tes penerimaan pegawai?', 'radio2', '["Programming","Analisis dan Perancangan Sistem","Algoritma","Perancangan Grafis","Analisis Laporan Keuangan","Dasar-Dasar Akuntansi","Manajemen Proyek","Sistem informasi","Operation research","Manajemen operas","text"]', 'user'),
(37, 8, 'Memberikan informasi informasi lowongan kerja ke?', 'radio2', '["Program studi/STIKOM Pelita Indonesia","Iklan di media cetak / elektronik","Dinas Tenaga Kerja","text"]', 'user'),
(38, 8, 'Bidang pekerjaan yang dibutuhkan?', 'radio2', '["Pemasaran","Keuangan","Personalia","Produksi/Operasi","Research & Development","Sistem Informasi","Analis Keuangan","text"]', 'user'),
(39, 8, 'Jabatan pertama yang ditempati alumni?', 'radio2', '["Klerikal","Setingkat lower Manager","Setingkat MiddleManager","Setingkat Top Manager","Setingkat Staff","text"]', 'user'),
(40, 8, 'Gaji pertama kali yang diterima oleh alumni?', 'radio', '["Dibawah Rp.500.000","Rp.500.000 s/d Rp.1.000.000","Rp.1.000.000 s/d Rp.2.000.000","Rp.2.000.000 s/d Rp.3.000.000","Rp.3.000.000 s/d Rp.4.000.000","Diatas Rp.4.000.000"]', 'user'),
(41, 9, 'Bidang pekerjaan alumni terakhir?', 'radio2', '["Pemasaran","Keuangan","Personalia","Produksi/Operasi","Research & Development","Sistem Informasi","Analis Keuangan","text"]', 'user'),
(42, 9, 'Bidang ilmu yang paling menunjang karir alumni?', 'radio2', '["Programming","Analisis dan perancangan system","Algoritma","Analisis laporan keuangan","Dasar-dasar akuntansi","Manajemen proyek","Sistem informasi","Operation research","Manajemen operasi","text"]', 'user'),
(43, 9, 'Jabatan terakhir yang ditempati alumni?', 'radio2', '["Klerikal","Setingkat lower manager","Setingkat middle manager","Setingkat top manager","Setingkat staff","text"]', 'user'),
(44, 9, 'Gaji terahkir yang diterima alumni?', 'radio', '["Dibawah Rp.500.000","Rp.500.000 s/d Rp.1.000.000","Rp.1.000.000 s/d Rp.2.000.000","Rp.2.000.000 s/d Rp.3.000.000","Rp.3.000.000 s/d Rp.4.000.000","Diatas Rp.4.000.000"]', 'user'),
(45, 10, 'Pernyataan berikut ini digunakan untuk mengetahui kompetensi alumni di lingkungan kerja. Pilihlah jawaban dengan memberikan lingkaran atau silang pada jawaban : SB= Sangat Baik, B=Baik, C=Cukup Baik, KB=Kurang Baik.', 'table', '{\n    "thead":["No","Pernyataan"],\n    "tbody":[\n                ["a","Integritas (Etika dan Moral)"],\n                ["b","Keahlian berdasarkan ilmu (Profesianalisme)"],\n                ["c","Kemampuan bahasa asing"],\n                ["d","Penguasaan teknologi informasi"],\n                ["e","Kemampuan Komunikasi"],\n                ["f","Kerjasama tim"],\n                ["g","Pengembangan diri"]\n            ],"radiokey":["SB","B","CB","KB"],\n    "radioval":["4","3","2","1"]\n}', 'user'),
(46, 11, 'Program study yang sekiranya di butuhkan oleh instansi Bapak/Ibu (boleh pilih lebih dari satu)', 'radio2', '["S1 sistem Informasi","S1 Teknik Informatika","S1 Manajemen1","S1 Akuntansi","D3 Akuntansi","text"]', 'user'),
(47, 11, 'Mata kuliah yang sangat menunjang pekerjaan instansi Bapak/Ibu (boleh pilih salah satu)', 'radio2', '["Pengetahuan Microsoft Office","Programming","Algoritma","Kalkulus","Sistem Basis Data","Metode Numerik","Analisis dan Perancangan Sistem Informasi","Perancangan Basis Data","Pemrograman  Orientasi Objek","Bahasa Rakitan","Perancangan Basis Data","Pemrograman  Orientasi Objek","Bahasa Rakitan","Jaringan Komputer","Dasar-Dasar Akuntansi","Sistem Inventory","Operation Research","Analisa Laporan Keuangan","Statistika","Etika Bisnis","text"]', 'user'),
(48, 11, '3. Saran dari instansi, baik yang menyangkut kurikulum /akademik atau lainya untuk pengembangan jurusan Sistem Informasi STIKOM Pelita Indonesia dimasa mendatang', 'text', '', 'user'),
(49, 2, 'Nama?', 'text', '', 'alumni'),
(50, 2, 'Tempat Lahir?', 'text', '', 'alumni'),
(51, 2, 'Tanggal Lahir?', 'date', '', 'alumni'),
(52, 2, 'Jenis Kelamin?', 'radio', '["laki-laki","Perempuan"]', 'alumni'),
(53, 2, 'Alamat Sekarang	?', 'text', '', 'alumni'),
(54, 2, 'No. Telp/Hp	?', 'number', '', 'alumni'),
(55, 2, 'E-mail	?', 'email', '', 'alumni'),
(56, 2, 'Th. Masuk	?', 'number', '', 'alumni'),
(57, 2, 'Th. Lulus	?', 'number', '', 'alumni'),
(58, 2, 'Prodi	?', 'radio', '["Teknik Informatika","Sistem Informasi"]', 'alumni'),
(59, 2, 'IPK Lulusan	?', 'radio', '["2.00-2.49 ","2.50-2.99","3.00-3.49","3.50-4.00"]', 'alumni');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `id_user`, `nama`, `alamat`) VALUES
(1, 5, 'kore', 'krkr'),
(2, 6, 'PTPN 4', 'ukgukg');

-- --------------------------------------------------------

--
-- Table structure for table `relasi_alumni_perusahaan`
--

CREATE TABLE `relasi_alumni_perusahaan` (
  `id_relasi` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `relasi_alumni_perusahaan`
--

INSERT INTO `relasi_alumni_perusahaan` (`id_relasi`, `id_perusahaan`, `id_alumni`) VALUES
(9, 1, 7),
(10, 2, 7),
(11, 2, 4),
(12, 2, 4),
(15, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `id_title` int(11) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`id_title`, `title`) VALUES
(2, 'A. Data Pribadi'),
(3, 'B. Riwayat Pekerjaan Sekarang'),
(4, 'C. Riwayat Pekerjaan Pertama'),
(5, 'A. DATA INSTANSI DAN RESPONDEN'),
(6, 'B. DATA ALUMNI'),
(8, 'C. PENERIMAAN KARYAWAN'),
(9, 'D. INFORMASI KEBERADAAN ALUMNI'),
(10, 'D. KOMPETENSI ALUMNI'),
(11, 'E. SARAN UNTUK PROGRAM STUDI');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` text,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `hak_akses` enum('administrator','alumni','user') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `email`, `hak_akses`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ade mina', 'admin@gmail.com', 'administrator'),
(2, '1234', '81dc9bdb52d04dc20036dbd8313ed055', 'antoAdministrasi', 'antoAdministrasi@g', 'alumni'),
(3, '1111', 'ca3de46bf390394199f37f2a912ec03f', 'Agung', 'as@kads', 'alumni'),
(4, '12121', 'de872154ffbf91a5dcc0e539dd2d5106', 'gege', 'gee@gw', 'alumni'),
(5, 'kore', 'b2bc07ae141fb27a498e5df5c4c2eebe', 'kore', 'kore@kore', 'user'),
(6, 'PTPN 4', '01c9b6e4341001fffb764d61f9d025da', 'PTPN 4', 'ptpn4@gg', 'user'),
(7, '2', 'c81e728d9d4c2f636f067f89cc14862c', 'as', 'as@as', 'alumni');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id_alumni`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `hasil_kuisioner`
--
ALTER TABLE `hasil_kuisioner`
  ADD PRIMARY KEY (`id_hasil_kuisioner`);

--
-- Indexes for table `hasil_kuisioner_alumni`
--
ALTER TABLE `hasil_kuisioner_alumni`
  ADD PRIMARY KEY (`id_hasil_kuisioner_alumni`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `kuisioner`
--
ALTER TABLE `kuisioner`
  ADD PRIMARY KEY (`id_kuisioner`),
  ADD KEY `id_title` (`id_title`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `relasi_alumni_perusahaan`
--
ALTER TABLE `relasi_alumni_perusahaan`
  ADD PRIMARY KEY (`id_relasi`),
  ADD KEY `id_perusahaan` (`id_perusahaan`),
  ADD KEY `id_alumni` (`id_alumni`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id_title`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hasil_kuisioner`
--
ALTER TABLE `hasil_kuisioner`
  MODIFY `id_hasil_kuisioner` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `hasil_kuisioner_alumni`
--
ALTER TABLE `hasil_kuisioner_alumni`
  MODIFY `id_hasil_kuisioner_alumni` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kuisioner`
--
ALTER TABLE `kuisioner`
  MODIFY `id_kuisioner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `relasi_alumni_perusahaan`
--
ALTER TABLE `relasi_alumni_perusahaan`
  MODIFY `id_relasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `id_title` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `alumni_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `kuisioner`
--
ALTER TABLE `kuisioner`
  ADD CONSTRAINT `kuisioner_ibfk_1` FOREIGN KEY (`id_title`) REFERENCES `title` (`id_title`);

--
-- Constraints for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD CONSTRAINT `perusahaan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
