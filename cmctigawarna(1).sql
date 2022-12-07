-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 05:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmctigawarna`
--

-- --------------------------------------------------------

--
-- Table structure for table `home_cmc`
--

CREATE TABLE `home_cmc` (
  `judul` varchar(20) NOT NULL,
  `isi` text NOT NULL,
  `isi2` text NOT NULL,
  `isi3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_cmc`
--

INSERT INTO `home_cmc` (`judul`, `isi`, `isi2`, `isi3`) VALUES
('CMC Tiga Warna', 'CMC Tiga Warna terletak di Desa Tambakrejo, Kec. Sumbermanjing Wetan, Kabupaten Malang. Ekowisata ini dikelola oleh masyarakat lokal Sendang Biru yang tergabung dalam Yayasan Bhakti Alam Sendang Biru. Total masyarakat yang terlibat dalam pengelolaan ekowisata ini adalah 107 orang.', 'Kawasan CMC Tiga Warna ini dibagi menjadi 2 area konservasi yaitu area konservasi mangrove (Clungup & Gatra) dan area konservasi terumbu karang (Pantai Sapana, Pantai mini, Pantai Batu Pecah dan Tiga Warna). Total luasan area mencapai 117 Ha Terdiri dari 71 Ha mangrove, 10 Ha terumbu karang dan 36 Ha hutan lindung.', 'Karakteristik destinasi ekowisata CMC Tiga Warna yakni perpaduan antara hutan mangrove yang menyatu dengan landscape Underwater Conservation. Dengan karakteristik tersebut wisatawan yang berkunjung ke CMC Tiga Warna akan merasa aman dan menyatu dengan kelestarian alam, jauh dari kebisingan, dan mengoptimalkan private time for gathering.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buktitransaksidestinasidantujuanwisata`
--

CREATE TABLE `tb_buktitransaksidestinasidantujuanwisata` (
  `id_gambar` int(11) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buktitransaksidestinasidantujuanwisata`
--

INSERT INTO `tb_buktitransaksidestinasidantujuanwisata` (`id_gambar`, `file`) VALUES
(1, 'Laksamana AryaPutra_Paket Diving.jpg'),
(2, 'Muhammad Al-renen Aminulloh_Paket Diving.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buktitransaksitempatpenginapan`
--

CREATE TABLE `tb_buktitransaksitempatpenginapan` (
  `id_gambar` int(20) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_destinasidantujuanwisata`
--

CREATE TABLE `tb_destinasidantujuanwisata` (
  `id_destinasidantujuanwisata` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `subjudul` text NOT NULL,
  `fasilitas` text NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_destinasidantujuanwisata`
--

INSERT INTO `tb_destinasidantujuanwisata` (`id_destinasidantujuanwisata`, `judul`, `subjudul`, `fasilitas`, `isi`) VALUES
(1, 'Paket Diving', 'Wisatawan akan diajak melihat  indahnya terumbu karang dan berbagai jenis ikan!', 'Fasilitas : Scuba sheet, Perahu, Makan Siang, Snack & Kelapa muda', 'Paket ini mengajak wisatawan untuk diving di pantai tiga warna yang mana area tersebutmerupakan marine protect area (MPA). Saat diving wisatawan akan disuguhkan oleh keindahanbawah laut yang sangat luar biasa indahnya, pada area ini terdapat beraneka ragam jenis ikandan terumbu karang. Saat diving wisatawan akan dipandu oleh seorang tour guide proffesionalyang tentunya ahli dibidangnya.'),
(2, 'Paket Tanam Mangrove', 'Wisatawan akan diajarkan bagaimana menanam bibit mangrove dengan benar!', 'Fasilitas : Makan Siang, Payung, Snack & Kelapa Muda.', 'Wisatawan akan diajak untuk mencintai alam, melindungi alam agar tetap lestari. Wisatawan\r\nakan diajarkan bagaimana cara menanam bibit mangrove dengan baik dan benar, memahami\r\nlokasi dimana bibit mangrove ditanam serta pemahaman pentingnya tumbuhan mangrove\r\nbagi ekosistem lingkungan setempat.'),
(3, 'Paket Explore Hutan', 'Wisatawan akan diajak menjelajahi hutan mangrove dan pantai pantai indah!', 'Fasilitas : Makan Siang, Payung, Snack & Kelapa Muda.', 'Wisatawan akan diajak berkeliling hutan mangrove yang terdapat pada area CMC Tiga Warna,\r\nwisatawan juga dapat menanam benih mangrove di sekitar pantai clungup. Selain berkeliling\r\nhutan, wisatawan juga diajak untuk berkeliling ke pantai pantai indah yang terdapat pada CMC Tiga\r\nWarna ini. '),
(4, 'Paket Banana Boat', 'Wisatawan akan diajak menaiki perahu pisang dengan kecepatan tinggi!', 'Fasilitas : Pelampung, Perahu, Makan Siang, Snack & Kelapa muda', 'Paket ini mengajak wisatawan untuk menaiki perahu pisang dengan kecepatan tinggi\r\ndan tentunya akan memacu adrenalin wisatawan. Perahu dikaitkan dengan kapal lalu\r\nkapal pengait akan melaju dengan kecepatan tinggi!. Untuk paket ini diberlakukan aturan\r\nbahwa balita atau anak anak yang berumur 6 tahun kebawah tidak diperbolehkan\r\nuntuk menaiki perahu pisang ini!.'),
(5, 'Paket Flying Fog', 'Wisatawan akan meluncur dari pohon ke pohon lain sambil melihat indahnya CMC Tiga Warna!', 'Fasilitas : Carmantel, Sling Baja, Carabiner, Harnes, Pulley, Helm, Asuransi Keselamatan.', 'Flying Fox merupakan permainan meluncur dari sebuah pohon dengan menggunakan Sling Baja. Permainan ini melatih keberanian dan ketegasan dalam mengambil keputusan, karena sekalipun sudah menggunakan alat pengamanan yang Optimal peserta akan bertarung dulu dengan rasa takutnya sebelum akhirnya memutuskan untuk melompat.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gambardestinasidantujuanwisata`
--

CREATE TABLE `tb_gambardestinasidantujuanwisata` (
  `id_gambar` int(20) NOT NULL,
  `nama` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gambardestinasidantujuanwisata`
--

INSERT INTO `tb_gambardestinasidantujuanwisata` (`id_gambar`, `nama`, `file`) VALUES
(1, 'Paket Diving', 'raja-ampat-diving-3.jpg'),
(2, 'Paket Tanam Mangrove', 'karyawan-traveloka-tanam-bibit-mangrove-di-hutan-mangrove-buleleng-bali-nns.jpg'),
(3, 'Paket Explore Hutan', 'explore hutan.jpg'),
(4, 'Paket Banana Boat', 'banana boat.jpg'),
(5, 'Paket Flying Fog', 'timothy-k-1CiE1x4dHIY-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gambartempatpenginapan`
--

CREATE TABLE `tb_gambartempatpenginapan` (
  `id_gambar` int(20) NOT NULL,
  `nama` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gambartempatpenginapan`
--

INSERT INTO `tb_gambartempatpenginapan` (`id_gambar`, `nama`, `file`) VALUES
(1, 'Paket Penginapan Reguler', 'penginapan2.jpg'),
(2, 'Paket Penginapan Eksklusif', 'penginapan-eksklusif.jpg'),
(3, 'Paket Penginapan Member VVIP', 'MEMBER VVIP.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tempatpenginapan`
--

CREATE TABLE `tb_tempatpenginapan` (
  `id_tempatpenginapan` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `fasilitas` text NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tempatpenginapan`
--

INSERT INTO `tb_tempatpenginapan` (`id_tempatpenginapan`, `judul`, `fasilitas`, `isi`) VALUES
(1, 'Paket Penginapan Reguler', 'Fasilitas : Single Bed, Colokan, AC, TV, Teh & Kopi Sachet, Makanan Ringan.', 'Paket ini menawarkan fasilitas berupa single bed, colokan, AC, TV Teh & Kopi sachet dan makanan ringan. Untuk penginapan eksklusif sendiri merupakan paket dengan fasilitas yang unggul dan tentunya berbeda dengan paket penginapan reguler. View dari kamar ekslusif penginapan eksklusif yaitu langsung dihadapkan oleh bibir pantai.'),
(2, 'Paket Penginapan Eksklusif', 'Fasilitas : Single Bed, Colokan, AC, TV, Teh & Kopi Sachet, Makanan Ringan.', 'Paket ini menawarkan fasilitas berupa single bed, colokan, AC, TV Teh & Kopi sachet dan makanan ringan. Untuk penginapan eksklusif sendiri merupakan paket dengan fasilitas yang unggul dan tentunya berbeda dengan paket penginapan reguler. View dari kamar ekslusif penginapan eksklusif yaitu langsung dihadapkan oleh bibir pantai.'),
(3, 'Paket Penginapan Member Only (VVIP)', 'Fasilitas : Single Bed, Colokan, AC, TV, Teh & Kopi Sachet, Makanan Ringan.', 'Paket ini menawarkan fasilitas berupa single bed, colokan, AC, TV Teh & Kopi sachet dan makanan ringan. Untuk penginapan eksklusif sendiri merupakan paket dengan fasilitas yang unggul dan tentunya berbeda dengan paket penginapan reguler. View dari kamar ekslusif penginapan eksklusif yaitu langsung dihadapkan oleh bibir pantai.'),
(4, 'Paket Penginapan Songoriti', 'TES123', 'TES123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksidestinasidantujuanwisata`
--

CREATE TABLE `tb_transaksidestinasidantujuanwisata` (
  `id_transaksidestinasidantujuanwisata` int(11) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `alamat_email` text NOT NULL,
  `tanggal_checkin` date NOT NULL,
  `tanggal_checkout` date NOT NULL,
  `jam_pemesanan` time NOT NULL,
  `catatan` text NOT NULL,
  `paket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksidestinasidantujuanwisata`
--

INSERT INTO `tb_transaksidestinasidantujuanwisata` (`id_transaksidestinasidantujuanwisata`, `nama_depan`, `nama_belakang`, `alamat_email`, `tanggal_checkin`, `tanggal_checkout`, `jam_pemesanan`, `catatan`, `paket`) VALUES
(1, 'Laksamana', 'AryaPutra', 'laksamana.arya1412@gmail.com', '2022-12-03', '2022-12-03', '00:58:00', 'Catatan (Opsional)', 'Paket Diving'),
(2, 'File', 'Tugas', 'filetugasarya14@gmail.com', '2022-12-03', '2022-12-04', '02:00:00', 'Catatan (Opsional)', 'Paket Tanam Mangrove');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksitempatpenginapan`
--

CREATE TABLE `tb_transaksitempatpenginapan` (
  `id_transaksitempatpenginapan` int(10) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `alamat_email` text NOT NULL,
  `tanggal_checkin` date NOT NULL,
  `tanggal_checkout` date NOT NULL,
  `jam_pemesanan` time NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `level`) VALUES
(1, 'admincmc', 'admincmc@gmail.com', 'e9af23dd5a45126ff689eba7bb2146bb', 'admin'),
(2, 'Laxa', 'laksamana.arya1412@gmail.com', 'ee70f4b991c9682dc8b026ed143a7694', 'user'),
(3, 'Laksamana', 'lazerlap1412@gmail.com', 'ee70f4b991c9682dc8b026ed143a7694', 'user'),
(4, 'danur123', 'danur123@gmail.com', 'e9af23dd5a45126ff689eba7bb2146bb', 'user'),
(5, 'mael', 'mael@gmail.com', '65de07b2eb5df05e2a02d3c5d7ab817c', 'user'),
(6, 'Danur', 'danur1412@gmail.com', 'e9af23dd5a45126ff689eba7bb2146bb', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buktitransaksidestinasidantujuanwisata`
--
ALTER TABLE `tb_buktitransaksidestinasidantujuanwisata`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `tb_buktitransaksitempatpenginapan`
--
ALTER TABLE `tb_buktitransaksitempatpenginapan`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `tb_destinasidantujuanwisata`
--
ALTER TABLE `tb_destinasidantujuanwisata`
  ADD PRIMARY KEY (`id_destinasidantujuanwisata`);

--
-- Indexes for table `tb_gambardestinasidantujuanwisata`
--
ALTER TABLE `tb_gambardestinasidantujuanwisata`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `tb_gambartempatpenginapan`
--
ALTER TABLE `tb_gambartempatpenginapan`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `tb_tempatpenginapan`
--
ALTER TABLE `tb_tempatpenginapan`
  ADD PRIMARY KEY (`id_tempatpenginapan`);

--
-- Indexes for table `tb_transaksidestinasidantujuanwisata`
--
ALTER TABLE `tb_transaksidestinasidantujuanwisata`
  ADD PRIMARY KEY (`id_transaksidestinasidantujuanwisata`);

--
-- Indexes for table `tb_transaksitempatpenginapan`
--
ALTER TABLE `tb_transaksitempatpenginapan`
  ADD PRIMARY KEY (`id_transaksitempatpenginapan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buktitransaksidestinasidantujuanwisata`
--
ALTER TABLE `tb_buktitransaksidestinasidantujuanwisata`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_buktitransaksitempatpenginapan`
--
ALTER TABLE `tb_buktitransaksitempatpenginapan`
  MODIFY `id_gambar` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_destinasidantujuanwisata`
--
ALTER TABLE `tb_destinasidantujuanwisata`
  MODIFY `id_destinasidantujuanwisata` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_gambardestinasidantujuanwisata`
--
ALTER TABLE `tb_gambardestinasidantujuanwisata`
  MODIFY `id_gambar` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_gambartempatpenginapan`
--
ALTER TABLE `tb_gambartempatpenginapan`
  MODIFY `id_gambar` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_tempatpenginapan`
--
ALTER TABLE `tb_tempatpenginapan`
  MODIFY `id_tempatpenginapan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_transaksidestinasidantujuanwisata`
--
ALTER TABLE `tb_transaksidestinasidantujuanwisata`
  MODIFY `id_transaksidestinasidantujuanwisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_transaksitempatpenginapan`
--
ALTER TABLE `tb_transaksitempatpenginapan`
  MODIFY `id_transaksitempatpenginapan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
