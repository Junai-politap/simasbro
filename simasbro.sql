-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2022 pada 06.50
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simasbro`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(6) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `poto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `deskripsi`, `poto`, `created_at`, `updated_at`) VALUES
(2, 'Workshop PSTBI', 'Penyusunan Roadmap Peningkatan Kualitas Penelitian dan Pengabdian Intitusi, Program Studi dan Dosen Jurusan Teknik Informatika', '164016483956uGT.jpg', '2021-12-22 02:20:39', '2021-12-22 02:20:39'),
(3, 'Mahasiswa POLITAP, Raih Juara Kategori Best Poster LKTI Nasional LKMMN Ke-IX tahun 2019', 'Tiga mahasiswa POLITAP berhasil menjadi finalis sepuluh besar dan meraih juara kategori best poster di kegiatan Lomba Karya Tulis Ilmiah (LKTI) Nasional LKMMN Ke-IX tahun 2019 dengan tema “Inovasi Mahasiswa Indonesia Untuk Mempersiapkan Generasi Milenial Dalam Menghadapi Momentum Bonus Demografi 2030”. Sebelumnya, tim POLITAP berhasil menjadi  finalis Top 25 dari total 53 peserta. Untuk tahun ini, Politeknik Negeri Surabaya (PENS) berhasil meraih juara 1, sedangkan juara 2 dan 3 berhasil diraih oleh Universitas Negeri  Yogyakarta (UNY) dan Universitas Gadjah Mada (UGM).', '1640164912iEbgy.jpeg', '2021-12-22 02:21:52', '2021-12-22 02:21:52'),
(4, 'Sosialisasi dan Pelatihan  Pemanfaatan Teknologi  Informasi sebagai Media Pembelajaran Blended Learning melalui Google Classroom di SMK Negeri 1 Ketapang', 'Politeknik Negeri Ketapang melalui Program Studi DIII Teknik Informatika baru saja\r\nselesai melaksanakan Program Kemitraan Masyarakat bersama SMK Negeri 1 Ketapang yang  mengangkat tema “Sosialisasi dan Pelatihan Pemanfaatan Teknologi Informasi sebagai Media Pembelajaran Blended Learning melalui Google Classroom di SMK Negeri 1 Ketapang”.   Kegiatan yang dilaksanakan pada hari Kamis (5/12) kemarin diikuti dengan antusias oleh  35 guru-guru dari berbagai jurusan di SMK Negeri 1 Ketapang. Eka Wahyudi, S.Pd., M.Cs.   sebagai Ketua Program Studi Teknik Informatika pada saat itu berkesempatan menyambut guru-guru dan membuka kegiatan dengan hangat. Pada sambutannya Eka menyampaikan,   “Sebagai langkah kita yang saat ini memasuki Era Revolusi Industri 4.0, selayaknya memang kita perlu untuk berevolusi dalam proses belajar mengajar dengan memanfaatkan teknologi informasi di era yang serba digital ini agar pendidikan di Indonesia dapat lebih baik lagi kedepannya.”', '1640165015Lu762.jpeg', '2021-12-22 02:23:35', '2021-12-22 02:23:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id_event` int(6) NOT NULL,
  `judul_event` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `poto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_event`, `judul_event`, `deskripsi`, `poto`, `created_at`, `updated_at`) VALUES
(2, 'Uji Kopetensi Bidang Teknik Informatika Mahasiswa Teknik Informatika Politap', 'Jurusan Teknik Informatika Politeknik Negeri Ketapang akan melaksanakan Uji Kopetensi Mahasiswa pada tanggal 12 s.d 16 November 2019. Dalam rangka memastikan kompetensi angkatan kerja muda di bidang Informatika, Kementerian Kominfo (Kominfo) bekerjasama dengan Politeknik Negeri Ketapang melalui Pusat Pengembangan Literasi dan Profesi SDM Informatika memfasilitasi kegiatan pelatihan dan sertifikasi angkatan kerja muda bidang Informatika.', '1640164752Yajrx.png', '2021-12-22 02:19:12', '2021-12-22 02:19:12'),
(3, 'Penerimaan Mahasiswa Baru Tahun Akademik Tahun 2020-2021 Jalur SNMPN', 'Seleksi Nasional Masuk Politeknik Negeri (SNMPN) merupakan pola penerimaan mahasiswa baru Politeknik Negeri di seluruh Indonesia dalam waktu yang sama dan proses seleksi melalui ujian tulis serta hasilnya akan diumumkan secara bersama oleh Politeknik Negeri se  Indonesia.', '1640164791HDLWN.jpeg', '2021-12-22 02:19:51', '2021-12-22 02:19:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master`
--

CREATE TABLE `master` (
  `id_master` int(6) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master`
--

INSERT INTO `master` (`id_master`, `nama`, `jenis`, `created_at`, `updated_at`) VALUES
(1, 'Website', 'Tipe', '2022-01-18 09:21:50', '2022-01-18 16:24:39'),
(2, 'Video/Motion Graphics', 'Tipe', '2022-01-18 09:23:32', '2022-01-18 16:24:48'),
(3, 'Animasi', 'Tipe', '2022-01-18 09:23:46', '2022-01-18 16:24:57'),
(4, 'Aplikasi Berbasis Mobile ', 'Tipe', '2022-01-18 09:23:57', '2022-01-18 16:25:07'),
(5, 'Aplikasi Perangkat Lunak', 'Tipe', '2022-01-18 09:24:06', '2022-01-18 16:25:16'),
(6, 'Desain Produk', 'Tipe', '2022-01-18 09:25:28', '2022-01-18 09:25:28'),
(7, 'System Automation', 'Tipe', '2022-01-18 09:25:37', '2022-01-18 09:25:37'),
(8, 'Hak Cipta', 'HKI', '2022-01-18 09:25:47', '2022-01-18 09:25:47'),
(9, 'Paten', 'HKI', '2022-01-18 09:25:58', '2022-01-18 09:25:58'),
(10, 'Merek', 'HKI', '2022-01-18 09:26:25', '2022-01-18 09:26:25'),
(11, 'Desain Industri', 'HKI', '2022-01-18 09:26:35', '2022-01-18 09:26:35'),
(12, 'Indikasi Geografis', 'HKI', '2022-01-18 09:26:43', '2022-01-18 09:26:43'),
(13, 'Varietas Tanaman', 'HKI', '2022-01-18 09:26:52', '2022-01-18 09:26:52'),
(14, 'Desain Tata Letak Sirkuit Terpadu', 'HKI', '2022-01-18 09:27:01', '2022-01-18 09:27:01'),
(15, 'Rahasia Dagang', 'HKI', '2022-01-18 09:27:10', '2022-01-18 09:27:10'),
(16, 'Lisensi dan Waralaba', 'HKI', '2022-01-18 09:27:18', '2022-01-18 09:27:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra`
--

CREATE TABLE `mitra` (
  `id` int(6) NOT NULL,
  `nama_mitra` varchar(255) NOT NULL,
  `alamat_mitra` varchar(255) NOT NULL,
  `sektor` varchar(255) DEFAULT NULL,
  `tipe_organisasi` enum('Profit','Non-profit','Pemerintahan/Sektor Publik','Nasional','Multinasional') DEFAULT NULL,
  `jumlah_karyawan` varchar(14) DEFAULT NULL,
  `tahun_operasi` year(4) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `confir_password` varchar(255) NOT NULL,
  `pemegang_akses` varchar(255) NOT NULL,
  `no_hp` varchar(18) NOT NULL,
  `jenis_mitra` enum('Internal','Eksternal') DEFAULT NULL,
  `status` int(6) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mitra`
--

INSERT INTO `mitra` (`id`, `nama_mitra`, `alamat_mitra`, `sektor`, `tipe_organisasi`, `jumlah_karyawan`, `tahun_operasi`, `website`, `email`, `username`, `password`, `confir_password`, `pemegang_akses`, `no_hp`, `jenis_mitra`, `status`, `logo`, `created_at`, `updated_at`) VALUES
(95670, 'Kantor Perwakilan Sinarmas Ketapang', 'Sukaharja, Delta Pawan, Sukaharja, Ketapang, Kabupaten Ketapang, Kalimantan Barat 78813', 'Perkebunan Sawit', 'Non-profit', '250  Karyawan', 2000, 'https://www.sinarmas.com/', 'sinarmas@gmail.com', 'sinarmas@gmail.com', '$2y$10$isKI3qdLjnwuF2EIZMMfgOGWDVI9OBuQd7JhmKIHkCoSm1LpaEIl.', 'sinarmas@gmail.com', 'Admin', '0895613492435', 'Internal', 2, 'app/mitra/1642743635-NXhJc.jpg', '2022-01-21 05:46:33', '2022-01-20 22:46:33'),
(95671, 'PT. Hutan Ketapang Industri', 'Jl. D.I. Panjaitan No. 76 Ketapang, Kalimantan Barat Indonesia', 'Memproduksi Minyak Sawit Mentah', 'Non-profit', '250  Karyawan', 1990, 'http://www.hki-indonesia.com/', 'hki@gmail.com', 'hki@gmail.com', '$2y$10$E7BFrzXcpZBNtvpEcSDjaeT7iz14nmuCenoRoLnt3WiaFIZLx4.zG', 'hki@gmail.com', 'Admin HKI', '+6253433456', 'Internal', 2, 'app/mitra/1642744136-NgONx.png', '2022-01-21 05:49:27', '2022-01-20 22:49:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `nip` bigint(16) NOT NULL,
  `id_user` int(6) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `prodi` enum('TEKNIK INFORMATIKA','TEKNIK ELEKTRO','TEKNIK SIPIL','TEKNIK PERTAMBANGAN') NOT NULL,
  `poto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`nip`, `id_user`, `nama`, `jabatan`, `prodi`, `poto`, `created_at`, `updated_at`) VALUES
(19980609202104252, 4, 'Junaidi', 'Admin Prodi', 'TEKNIK ELEKTRO', '1641910166wsqeb.jpg', '2022-01-11 07:09:26', '2022-01-11 07:09:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `project`
--

CREATE TABLE `project` (
  `id_project` int(6) NOT NULL,
  `id` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_pengusul` varchar(255) NOT NULL,
  `no_hp_pengusul` varchar(18) NOT NULL,
  `email_pengusul` varchar(255) NOT NULL,
  `alamat_pengusul` varchar(255) NOT NULL,
  `judul_project` varchar(255) NOT NULL,
  `kluster_project` enum('Teknik Informatika','Teknik Elektro','Teknik Mesin','Manajemen Bisnis') DEFAULT NULL,
  `deskripsi_masalah` text DEFAULT NULL,
  `deskripsi_umum` text DEFAULT NULL,
  `tipe_project` varchar(255) DEFAULT NULL,
  `potensi_hki` varchar(255) DEFAULT NULL,
  `kompetensi_keahlian` text DEFAULT NULL,
  `level_kompleksitas` varchar(255) DEFAULT NULL,
  `prodi_terlibat` varchar(255) DEFAULT NULL,
  `mp_internal` varchar(255) DEFAULT NULL,
  `mp_eksternal` varchar(255) DEFAULT NULL,
  `tahun_pelaksana` varchar(255) DEFAULT NULL,
  `status_pengajuan` enum('Diterima','Ditolak') DEFAULT NULL,
  `status` int(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tim`
--

CREATE TABLE `tim` (
  `id_tim` int(6) NOT NULL,
  `nip` bigint(16) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `poto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tim`
--

INSERT INTO `tim` (`id_tim`, `nip`, `nama`, `jabatan`, `poto`, `created_at`, `updated_at`) VALUES
(1, 198701142019031007, 'Eka Wahyudi', 'Ketua Jurusan', '1639660694yDLK2.JPG', '2021-12-11 21:35:36', '2021-12-16 06:18:14'),
(2, 199011112019032018, 'Novi Indah Pradasari', 'System Analyst', '1639283763BAhO9.jpeg', '2021-12-11 21:36:03', '2021-12-11 21:36:03'),
(3, 198911092018032001, 'Rizqia Lestika Atimi', 'System Analyst', '1639283796bnHwD.jpg', '2021-12-11 21:36:36', '2021-12-11 21:36:36'),
(4, 199107042019031015, 'Darmanto', 'Front End Developer', '1639283844gTOrh.jpg', '2021-12-11 21:37:24', '2021-12-11 21:37:24'),
(5, 161180916210, 'Ar Razy Muhammad', 'Front End Developer', '1639285773J4ljU.JPG', '2021-12-11 22:09:33', '2021-12-11 22:09:33'),
(6, 19980609202104252, 'Junaidi', 'Front End Developer', '16392974657mO1H.JPG', '2021-12-12 01:24:25', '2021-12-12 01:24:25'),
(7, 19951222202104253, 'Teguh Eko Saputra', 'Graphic Design', '1639297487yIpHu.JPG', '2021-12-12 01:24:47', '2021-12-12 01:24:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(6) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(19, 'Super Admin', 'teknikinformatika2021', '$2y$10$O0hWiMjtGupTp2aTMj67TOvjvBaJ4iJqTUWX0NwxTsLO7Eu5ZhDNy', 1, NULL, '2022-01-18 21:26:45', '2022-01-18 21:26:45');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indeks untuk tabel `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`id_master`);

--
-- Indeks untuk tabel `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indeks untuk tabel `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id_tim`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `master`
--
ALTER TABLE `master`
  MODIFY `id_master` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95672;

--
-- AUTO_INCREMENT untuk tabel `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tim`
--
ALTER TABLE `tim`
  MODIFY `id_tim` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
