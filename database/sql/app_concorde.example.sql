-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jan 2026 pada 11.28
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_concorde`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `editor`
--

CREATE TABLE `editor` (
  `ID` smallint(6) NOT NULL,
  `Menu` text NOT NULL,
  `Bagian` text NOT NULL,
  `Isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `editor`
--

INSERT INTO `editor` (`ID`, `Menu`, `Bagian`, `Isi`) VALUES
(6, 'Beranda 1', 'Judul', 'Solusi Konstruksi Terpadu'),
(7, 'Beranda 1', 'Isi', 'Satu Mitra untuk Seluruh Siklus Proyek'),
(8, 'Beranda 2', 'Judul', 'Inovasi Konstruksi Terintegrasi'),
(9, 'Beranda 2', 'Isi', 'Efisiensi Total dalam Satu Kendali Proyek'),
(10, 'Pilar Utama', 'Judul', 'Menaklukkan Kompleksitas Infrastruktur'),
(11, 'Pilar Utama 1', 'Sub-judul', 'Engineering-Driven'),
(12, 'Pilar Utama 1', 'Isi', 'Setiap pekerjaan dirancang berbasis analisis teknis, standar industri, dan efisiensi jangka panjang.'),
(13, 'Pilar Utama 2', 'Sub-judul', 'Integrated Capability'),
(14, 'Pilar Utama 2', 'Isi', 'Dari desain, fabrikasi, instalasi, hingga maintenance Ã¢â‚¬â€ kami hadir sebagai solusi end-to-end.'),
(15, 'Pilar Utama 3', 'Sub-judul', 'Industrial Reliability'),
(16, 'Pilar Utama 3', 'Isi', 'Dipercaya oleh proyek-proyek berskala besar dengan tuntutan mutu, keselamatan, dan ketepatan waktu.'),
(17, 'Pilar Utama 4', 'Sub-judul', 'Adaptive Dominance'),
(18, 'Pilar Utama 4', 'Isi', 'Menguasai teknologi terbaru untuk menjawab tantangan industri paling ekstrem yang tidak bisa diselesaikan oleh kontraktor biasa.'),
(19, 'Siapa Kami', 'Judul', 'Fondasi Kuat untuk Proyek-Proyek yang Menuntut Ketepatan dan Keandalan'),
(20, 'Siapa Kami', 'Isi', 'PT CONCORDE ELBE PRAYA adalah perusahaan nasional yang bergerak di bidang penyediaan sumber daya manusia dan manajemen fungsi SDM, jasa penunjang usaha, layanan keamanan swasta, kebersihan bangunan dan industri, serta layanan pemeliharaan fasilitas. Perusahaan ini dibangun untuk menjawab kebutuhan klien korporasi dan institusi yang membutuhkan mitra operasional terpercaya, dengan sistem kerja terstruktur, sumber daya manusia terkelola, dan kepatuhan terhadap regulasi nasional. Dengan pendekatan profesional dan sumber daya berpengalaman, kami menjadi mitra strategis bagi klien yang menuntut kepastian hasil, keselamatan kerja, dan keberlanjutan operasional.'),
(21, 'Visi', 'Isi', 'Menjadi perusahaan penyedia jasa penunjang usaha dan pengelolaan sumber daya yang profesional, terpercaya, dan berkontribusi nyata dalam mendukung keberlangsungan operasional industri dan institusi di Indonesia.'),
(22, 'Misi', 'Isi', 'Ã¢â‚¬Â¢ Menyediakan layanan penyediaan SDM, jasa penunjang usaha, dan pengelolaan fasilitas yang andal, efisien, dan berstandar tinggi.&lt;br&gt;Ã¢â‚¬Â¢ Mengintegrasikan keahlian engineering dengan kapabilitas produksi dan lapangan.&lt;br&gt;Ã¢â‚¬Â¢ Menjalankan setiap proyek dengan komitmen terhadap mutu, keselamatan, dan ketepatan waktu.&lt;br&gt;Ã¢â‚¬Â¢ Membangun kemitraan jangka panjang berbasis kepercayaan dan kinerja.'),
(23, 'Kontak: Kantor Pusat', 'Isi', 'JL. GADING INDAH RAYA NO. 8 KAV. C-40 LT. 5 BLOK B, Kelapa Gading Timur, Kec. Kelapa Gading, Jakarta Utara, DKI Jakarta 14240'),
(24, 'Kontak: Telepon 1', 'Isi', '021-45847811'),
(25, 'Kontak: Telepon 2', 'Isi', '+62 811 263 636'),
(26, 'Kontak: Email', 'Isi', 'Concorde.elbe.praya@proton.me');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `ID` smallint(6) NOT NULL,
  `Judul` varchar(70) NOT NULL,
  `Jalur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`ID`, `Judul`, `Jalur`) VALUES
(1, 'galeri-01', '../../../database/image/galeri-01.jpg'),
(2, 'galeri-02', '../../../database/image/galeri-02.jpg'),
(3, 'galeri-03', '../../../database/image/galeri-03.jpg'),
(4, 'galeri-04', '../../../database/image/galeri-04.jpg'),
(5, 'galeri-05', '../../../database/image/galeri-05.jpg'),
(6, 'galeri-06', '../../../database/image/galeri-06.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `ID` smallint(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(70) NOT NULL,
  `Level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`ID`, `Username`, `Password`, `Level`) VALUES
(1, 'developer', 'password123', 'Developer'),
(2, 'admin', 'admin123', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `editor`
--
ALTER TABLE `editor`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `editor`
--
ALTER TABLE `editor`
  MODIFY `ID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `ID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `ID` smallint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

