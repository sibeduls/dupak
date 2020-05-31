
DROP TABLE IF EXISTS `master_kegiatan`;
CREATE TABLE `master_kegiatan` (
  `id_kegiatan` int(10) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `kode_kegiatan` varchar(255) DEFAULT NULL,
  `satuan_hasil` varchar(255) DEFAULT NULL,
  `angka_kredit` float DEFAULT NULL,
  `pelaksanaan` varchar(255) DEFAULT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `id_subunsur` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `master_kegiatan` (`id_kegiatan`, `nama_kegiatan`, `kode_kegiatan`, `satuan_hasil`, `angka_kredit`, `pelaksanaan`, `parent_id`, `id_subunsur`) VALUES
(1, 'Mengikuti pendidikan formal/sekolah dan memperoleh			', '', '', 0, '', 0, 1),
(2, 'Doktor (S3)', '1', 'Ijazah', 200, 'Semua Jenjang', 1, 1),
(3, 'Magister (S2)		', '2', 'Ijazah', 150, 'Semua Jenjang', 1, 1),
(4, 'Mengikuti Diklat fungsional/teknis yang mendukung tugas Widyaiswara dan memperoleh Surat Tanda Tamat Pendidikan dan Pelatihan (STTPP) / sertifikat (minimal 10 JP) 			 			 			', '3', 'STTPP/Sertifikat', 0.2, 'Semua Jenjang', 0, 2),
(5, 'Persiapan						', '', '', 0, '', 0, 3),
(6, 'Menyusun Bahan Diklat dalam bentuk:	', '', '', 0, '', 5, 3),
(7, 'Bahan ajar', '4', 'Makalah', 0.6, 'Semua Jenjang', 6, 3),
(8, 'Bahan tayang', '5', 'Bahan Tayang', 0.6, 'Semua Jenjang', 6, 3),
(9, 'Bahan Peraga', '6', 'Bahan Peraga', 0.6, 'Semua Jenjang', 6, 3),
(10, 'GBPP/RBPMB dan SAP/RP', '7', 'GBPP/RBPMB dan SAP/RP', 0.6, 'Semua Jenjang', 6, 3),
(11, 'Menyusun soal/materi ujian Diklat untuk: 	', '', '', 0, '', 5, 3),
(12, 'Pre test - Post test', '8', 'Naskah soal', 0.2, 'Semua Jenjang', 11, 3),
(13, 'Komprehensif test', '9', 'Naskah soal', 0.2, 'Semua Jenjang', 11, 3),
(14, 'Kasus', '10', 'Naskah soal', 0.2, 'Semua Jenjang', 11, 3),
(15, 'Pelaksanaan', '', '', 0, '', 0, 3),
(16, 'Melaksanakan tatap muka Diklat (PNS)', '11', 'Jam Pelajaran', 0.2, 'Jenjang Pertama', 15, 3),
(17, 'Melaksanakan tatap muka Diklat (PNS)', '12', 'Jam Pelajaran', 0.4, 'Jenjang Muda', 15, 3),
(18, 'Melaksanakan tatap muka Diklat (PNS)', '13', 'Jam Pelajaran', 0.6, 'Jenjang Madya', 15, 3),
(19, 'Melaksanakan tatap muka Diklat (PNS)', '14', 'Jam Pelajaran', 0.8, 'Jenjang Utama', 15, 3),
(20, 'Melaksanakan tatap muka Diklat (PNS)', '15', 'Jam Pelajaran', 0, 'Semua Jenjang', 15, 3),
(21, 'Melaksanakan Pembimbingan', '16', 'Jam Pelajaran', 0, 'Semua Jenjang', 15, 3),
(22, 'Melaksanakan Pendampingan OL / PKL / Benchmarking', '17', 'Laporan', 0.5, 'Semua Jenjang', 15, 3),
(23, 'Melaksanakan Pendampingan Penulisan Kertas Kerja / Proyek Perubahan', '18', 'Per Kertas Kerja (Maksimal 5 KK/PP)', 0.5, 'Semua Jenjang', 15, 3),
(24, 'Memeriksa Hasil Ujian Diklat untuk:', '', '', 0, '', 15, 3),
(25, 'Pre test - Post test', '19', 'Laporan', 0.1, 'Semua Jenjang', 24, 3),
(26, 'Komprehensif test', '20', 'Laporan', 0.1, 'Semua Jenjang', 24, 3),
(27, 'Kasus', '21', 'Laporan', 0.3, 'Semua Jenjang', 24, 3),
(28, 'Melakukan coaching pada proses penyelenggaraan', '22', 'Laporan per Program', 2, 'Semua Jenjang', 15, 3),
(29, 'Evaluasi Diklat', '', '', 0, '', 0, 4),
(30, 'Terlibat dalam mengevaluasi penyelanggaraan Diklat di instasinya', '23', 'Laporan', 0.4, 'Semua Jenjang', 29, 4),
(31, 'Terlibat dalam pengevaluasi kinerja Widyaiswara', '24', 'Laporan', 0.1, 'Semua Jenjang', 29, 4),
(32, 'Pengembangan Diklat', '', '', 0, '', 0, 4),
(33, 'Terlibat dalam pelaksanaan Analisis Kebutuhan Diklat (AKD)', '25', 'Laporan', 2.5, 'Semua Jenjang', 32, 4),
(34, 'Terlibat dalam penyusunan Kurikulum Diklat', '26', 'Laporan', 1.5, 'Semua Jenjang', 32, 4),
(35, 'Terlibat dalam penyusunan Modul Diklat', '27', 'Modul', 5, 'Semua Jenjang', 32, 4),
(36, 'Membuat Karya Tulis/Karya Ilmiah dalam bidang spesialisasi keahliannya dan lingkup kediklatannya, dalam bentuk:', '', '', 0, '', 0, 5),
(37, 'Buku dengan ISBN diterbitkan secara nasional', '28', 'Buku', 25, 'Semua Jenjang', 36, 5),
(38, 'Non Buku, yang dimuat dalam:', '', '', 0, '', 36, 5),
(39, 'Jurnal Ilmiah:', '', '', 0, '', 38, 5),
(40, 'Internasional', '29', 'Artikel', 20, 'Semua Jenjang', 39, 5),
(41, 'Nasional terakreditasi', '30', 'Artikel', 10, 'Semua Jenjang', 39, 5),
(42, 'Nasional tidak terakreditasi', '31', 'Artikel', 5, 'Semua Jenjang', 39, 5),
(43, 'Majalah Ilmiah', '32', 'Artikel', 2.5, 'Semua Jenjang', 38, 5),
(44, 'Buku Proceeding:', '', '', 0, '', 38, 5),
(45, 'Internasional', '33', 'Artikel', 5, 'Semua Jenjang', 44, 5),
(46, 'Nasional', '34', 'Artikel', 2.5, 'Semua Jenjang', 44, 5),
(47, 'Instansi', '35', 'Artikel', 1, 'Semua Jenjang', 44, 5),
(48, 'Makalah dalam pertemuan ilmiah', '', '', 0, '', 36, 5),
(49, 'Internasional', '36', 'Makalah', 5, 'Semua Jenjang', 48, 5),
(50, 'Nasional', '37', 'Makalah', 2.5, 'Semua Jenjang', 48, 5),
(51, 'Instansi', '38', 'Makalah', 1, 'Semua Jenjang', 48, 5),
(52, 'Meneumkan inovasi yang dipatenkan sesuai bidang spesialisasi dan telah masuk dalam daftar paten', '39', 'Sertifikat Paten', 20, 'Semua Jenjang', 0, 6),
(53, 'Menyusun buku pedoman/ketentuan pelaksanaan/ketentuan teknis di bidang kediklatan', '40', 'Buku Pedoman', 0.5, 'Semua Jenjang', 0, 7),
(54, 'Melaksanakan Orasi Ilmiah sesuai spesialisasinya', '41', 'Berita Acara, KTI dan Sinopsis', 5, 'Semua Jenjang', 0, 8),
(55, 'Mengikuti seminar/lokakarya/konferensi dibidang kediklatan,sebagai:', '', '', 0, '', 0, 9),
(56, 'Narasumber/pembahas/penyaji/ketua panitia', '42', 'Per Kegiatan', 2, 'Semua Jenjang', 55, 9),
(57, 'Moderator/peserta/anggota panitia', '43', 'Per Kegiatan', 1, 'Semua Jenjang', 55, 9),
(58, 'Menjadi anggota organisasi profesi, sebagai:', '', '', 0, '', 0, 10),
(59, 'Pengurus', '44', 'Per Tahun', 1, 'Semua Jenjang', 58, 10),
(60, 'Anggota', '45', 'Per Tahun', 0.7, 'Semua Jenjang', 58, 10),
(61, 'Membimbing Widyaiswara dibawah jenjang jabatannya', '46', 'Laporan', 1, 'Jenjang Utama, Madya, Muda', 0, 11),
(62, 'Menulis artikel di Surat Kabar:', '', '', 0, '', 0, 9),
(63, 'Nasional', '47', 'Artikel', 3, 'Semua Jenjang', 62, 12),
(64, 'Provinsi/Kabupaten/Kota', '48', 'Artikel', 1.5, 'Semua Jenjang', 62, 12),
(65, 'Menulis artikel di Website', '49', 'Artikel', 1, 'Jenjang Utama, Madya, Muda', 0, 13),
(66, 'Memperoleh gelar kesarjanaan lainnya yang tidak sesuai bidang spesialisasinya dan/atau lebih dari satu kali pada jenjang pendidikan yang sama, pada program', '', '', 0, '', 0, 14),
(67, 'Doktor (S-3)', '50', 'Ijazah', 15, 'Semua Jenjang', 66, 14),
(68, 'Magister (S-2)', '51', 'Ijazah', 10, 'Semua Jenjang', 66, 14),
(69, 'Sarjana (S-1)', '52', 'Ijazah', 5, 'Semua Jenjang', 66, 14),
(70, 'Memperoleh penghargaan Satya Lencana Karya Satya, lamanya:', '', '', 0, '', 0, 15),
(71, '30 (tiga puluh) tahun', '53', 'Piagam', 3, 'Semua Jenjang', 66, 15),
(72, '20 (tiga puluh) tahun', '54', 'Piagam', 2, 'Semua Jenjang', 66, 15),
(73, '10 (tiga puluh) tahun', '55', 'Piagam', 1, 'Semua Jenjang', 66, 15),
(74, 'Memperoleh penghargaan lainnya dari pemerintah', '56', 'Piagam', 1, 'Semua Jenjang', 0, 15),
(75, 'Memperoleh gelar kehormatan akademis', '57', 'Gelar', 10, 'Semua Jenjang', 0, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_kegiatan`
--
ALTER TABLE `master_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `id_subunsur` (`id_subunsur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_kegiatan`
--
ALTER TABLE `master_kegiatan`
  MODIFY `id_kegiatan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `master_kegiatan`
--
ALTER TABLE `master_kegiatan`
  ADD CONSTRAINT `master_kegiatan_ibfk_1` FOREIGN KEY (`id_subunsur`) REFERENCES `master_subunsur` (`id_subunsur`);
COMMIT;
