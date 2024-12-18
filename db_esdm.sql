-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2023 at 01:34 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_esdm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kat_blog`
--

CREATE TABLE `tbl_kat_blog` (
  `IdKat` int(11) NOT NULL,
  `Kategori` varchar(255) NOT NULL,
  `RegDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kat_blog`
--

INSERT INTO `tbl_kat_blog` (`IdKat`, `Kategori`, `RegDate`) VALUES
(1, 'Info', '2022-08-29 14:39:06'),
(2, 'Blog', '2022-08-29 14:39:11'),
(3, 'Berita', '2022-08-29 14:39:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_laporan`
--

CREATE TABLE `tbl_laporan` (
  `IdLaporan` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Daerah` int(11) NOT NULL,
  `Kecamatan` varchar(255) NOT NULL,
  `Kelurahan` varchar(255) NOT NULL,
  `Lokasi` varchar(255) NOT NULL,
  `Detail` longtext NOT NULL,
  `Verify` set('Y','N') NOT NULL DEFAULT 'N',
  `RegDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_laporan`
--

INSERT INTO `tbl_laporan` (`IdLaporan`, `Nama`, `Email`, `Daerah`, `Kecamatan`, `Kelurahan`, `Lokasi`, `Detail`, `Verify`, `RegDate`) VALUES
(936, 'Own', 'ownchristofel@gmail.com', 1, 'Contoh', 'Contoh', 'Contoh', '<p>Contoh Laporan</p>\r\n', 'N', '2023-02-03 21:36:38'),
(1340, 'contoh', 'johanesrakinaung@gmail.com', 10, 'Paal Dua', 'Dendengan Dalam', 'Jembatan', '<p>contohh laporan</p>\r\n', 'Y', '2023-02-03 21:28:46'),
(1581, 'Yohanes Farly Rakinaung', 'johanesrakinaung@gmail.com', 14, 'asda as dasdasd ada sdasd ada das dad', 'sadasda asd', ' adasd ada dasd', '<p>ad ads ad gfrwffsfewqweeqr324r433teffas</p>\r\n', 'Y', '2022-09-05 04:28:23'),
(1908, 'Yohanes Farly Rakinaung', 'johanesrakinaung@gmail.com', 15, 'asdbdfgfdgd', 'dfgdgs', 'gfsdgsdfg', '<p>sdfgsdgsfgsfg</p>\r\n', 'Y', '2022-09-05 04:31:40'),
(3679, 'Coba', 'lalsphotography0@gmail.com', 10, 'contoh', 'contoh', 'contoh', '<p>contoh</p>\r\n', 'N', '2023-02-03 21:44:26'),
(4556, 'owen', 'ownchristofel@gmail.com', 13, 'awfawf', 'qwerty', 'awfawf123', '', 'N', '2023-02-08 23:29:15'),
(6476, 'Falentino Markus', 'beritakita55@gmail.com', 13, 'Tahuna', 'Manente', 'Samping GOR', '<p>ad adasdujahd awiudha wduhadiu aw dkajldbiua gdaugd qaowdlkjabd oiadhawiodhawoidp u</p>\r\n', 'Y', '2022-09-06 22:17:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `IdLogin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Role` set('admin') NOT NULL DEFAULT 'admin',
  `LastLogin` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `StatusLogin` varchar(4) NOT NULL DEFAULT 'OFF'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`IdLogin`, `username`, `password`, `Role`, `LastLogin`, `StatusLogin`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', '2023-06-10 20:08:16', 'OFF');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mas_blog`
--

CREATE TABLE `tbl_mas_blog` (
  `IdBlog` int(11) NOT NULL,
  `Kategori` int(11) NOT NULL,
  `Judul` varchar(255) NOT NULL DEFAULT '',
  `Isi` longtext NOT NULL,
  `Slug` text NOT NULL,
  `RegBy` int(11) NOT NULL,
  `RegDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_mas_blog`
--

INSERT INTO `tbl_mas_blog` (`IdBlog`, `Kategori`, `Judul`, `Isi`, `Slug`, `RegBy`, `RegDate`) VALUES
(4, 3, 'Menengok Tambang Emas Archi di Manado, Salah Satu yang Terbesar di Asia Tenggara', '<p>Penampakan Blok Araren yang merupakan blok terbesar di tambang emas Toka Tindung, Kabupaten Minahasa Utara, Sulawesi Utara yang dikelola PT Archi Indonesia Tbk (ARCI).(KOMPAS.com/YOHANA ARTHA ULY)</p>\r\n\r\n<p><strong>MANADO, KOMPAS.com</strong> - <a href=\"https://www.kompas.com/tag/tambang-emas\" target=\"_self\">Tambang emas</a> Toka Tindung di Kabupaten Minahasa Utara, Sulawesi Utara terus berkembang seiring dengan potensi temuan cadangan bijih (reserve) di lokasi tersebut. Tambang emas terbesar di kawasan Asia Tenggara ini dikelola oleh PT Archi Indonesia Tbk (ARCI).</p>\r\n\r\n<p>Archi merupakan bagian dari PT Rajawali Corporation, perusahaan milik pengusaha Peter Sondakh. Archi mengelola <a href=\"https://www.kompas.com/tag/tambang-emas\" target=\"_self\">Tambang Emas</a> Toka Tindung melalui anak usahanya, PT Meares Soputan Mining dan PT Tambang Tondano Nusajaya.</p>\r\n\r\n<p>Perusahaan yang baru saja melantai di Bursa Efek Indonesia (BEI) pada 28 Juni 2021 lalu itu, menargetkan bisa menggarap bisnis emasnya dari hulu hingga hilir. Mulai dari kegiatan eksplorasi, kontraktor penambangan, pabrik pengolahan, permunian, hingga produk logam emas batangan.</p>\r\n\r\n<p><a href=\"https://money.kompas.com/read/2021/10/12/152440626/erick-thohir-tambang-freeport-bakal-pakai-mobil-dantruk-otonom\" target=\"_self\"><strong>Baca juga: Erick Thohir: Tambang Freeport Bakal Pakai Mobil danTruk Otonom</strong></a></p>\r\n\r\n<p>\"Kami ingin menjadi perusahaan pure-play emas (pure-play gold producer) yang terintegrasi dan terbesar di Asia Tenggara,\" ujar Deputy Chief Executive Officer Archi Indonesia, Rudy Suhendra di Manado, Sulawesi Utara, Kamis (25/11/2021).</p>\r\n\r\n<p>Kompas.com pun berkesempatan mengunjungi <a href=\"https://www.kompas.com/tag/tambang-emas\" target=\"_self\">tambang emas</a> Toka Tindung yang lokasinya berada di area perbukitan dengan waktu tempuh sekitar 2,5 jam perjalanan mobil dari Manado. Saat itu kegiatan penambangan terus berjalan meski sedang hujan deras.</p>\r\n\r\n<p>Mine Manager Mining <a href=\"https://www.kompas.com/tag/tambang-emas-toka-tindung\" target=\"_self\">Tambang Emas Toka Tindung</a>, Roelly Fransza Z mengatakan, tambang terus beroperasi dalam kondisi cuaca hujan maupun tidak, sebab kondisi tanah di lokasi tambang tetap memungkinkan untuk dilewati oleh alat-alat berat.</p>\r\n\r\n<p>\"Hujan tetap jalan kok operasinya, karena kondisi dan struktur tanah di tambang emas beda dengan tambang di batu bara berbeda. Kalau hujan, di batu bara tanahnya itu enggak gigit ke roda (alat berat), tapi kalau di emas itu tetap gigit ke rodanya,\" jelas dia.</p>\r\n\r\n<p>Pada tambang emas ini, Archi memiliki sekitar 40.000 hektar wilayah konsesi, terdiri dari 31.000 hektar oleh Tambang Tondano Nusajaya dan 9.000 hektar oleh Meares Soputan Mining. Keduanya merupakan pemegang Kontrak Karya (KK) untuk kawasan tambang ini sampai 2041.</p>\r\n\r\n<p>Meski demikian, Archi baru melakukan eksplorasi dan penambangan emas sekitar 10 persen dari total area konsesinya, terutama di area Koridor Timur. Ada 4 blok di kawasan tambang ini yang digarap dengan metode pertambangan terbuka (open pit).</p>\r\n\r\n<p>Keempatnya yakni Blok Toka, Blok Kopra, Blok Alaskar, dan Blok Araren. Adapun Blok Araren menjadi pit terbesar dengan tingkat kadar emas tertinggi dibandingkan pit lainnya di <a href=\"https://www.kompas.com/tag/tambang-emas-toka-tindung\" target=\"_self\">tambang emas Toka Tindung</a>.</p>\r\n\r\n<p>Luas Blok Araren mencapai sekitar 1 kilometer dengan kadar emas mencapai lebih dari 3 gram emas per ton material dari rata-rata kadar di tambang ini sekitar 2 gram emas per ton material.</p>\r\n\r\n<p>Hingga akhir 2020, jumlah cadangan emas di koridor timur mencapai 3,9 juta ounces dan sudah tersertifikasi JORC, artinya sudah economic feasible. Saat ini Archi sedang mengembangkan koridor barat yang memiliki potensi tambahan cadangan emas sekitar 5,3-13 juta ounces dalam 5 tahun ke depan.</p>\r\n\r\n<p>Seiring dengan adanya tambahan cadangan emas di koridor barat, Archi pun akan menambah kapasitas pabrik pengolahannya menjadi 8 juta ton per tahun atau million ton per annum (mtpa) di 2025. Pada akhir 2020, kapasitas pabrik pengolahan baru mencapai 3,6 juta ton dan meningkat menjadi 4 juta ton di akhir tahun.</p>\r\n\r\n<p><a href=\"https://money.kompas.com/read/2021/06/28/202026126/ini-usul-para-pakar-soal-izin-tambang-emas-sangihe\" target=\"_self\"><strong>Baca juga: Ini Usul Para Pakar soal Izin Tambang Emas Sangihe</strong></a></p>\r\n\r\n<p>Adapun hasil tambang dari keempat blok emas yang dimiliki Archi kemudian diolah di pabrik pengolahan yang berada di dalam kawasan tambang. Pabrik ini baru menghasilkan produk gold bullion (gold dore) yang berupa campuran emas dan perak.</p>\r\n\r\n<p>Selanjutnya, gold dore produksi Archi dikirim ke PT Antam Tambang Tbk dan PT Bhumi Satu Inti, kedua perusahaan ini punya sertifikat untuk pemurnian emas. Archi sendiri hingga saat jni belum punya pabrik pemurnian sendiri, meski sedang bersiap untuk pembangunannya mulai tahun depan.</p>\r\n\r\n<p>Pada lokasi tambang itu, juga ada Tailings Storage Facility (TSF) yang menjadi lokasi penampungan limbah hasil pengolahan emas. TSF tampak seperti danau namun berisikan lumpur basah dan hanya dibiarkan terbuka tanpa penutup.</p>\r\n\r\n<p>Archi memastikan bahwa TSF ini sudah berada dalam kondisi yang aman sesuai aturan yang ada, sehingga memang tak perlu penutup.</p>\r\n\r\n<p><em>Dapatkan update <strong>berita pilihan</strong> dan <strong>breaking news</strong> setiap hari dari Kompas.com. Mari bergabung di Grup Telegram \"Kompas.com News Update\", caranya klik link <a href=\"https://t.me/kompascomupdate\" rel=\"nofollow\">https://t.me/kompascomupdate</a>, kemudian join. Anda harus install aplikasi Telegram terlebih dulu di ponsel.</em></p>\r\n', 'menengok-tambang-emas-archi-di-manado-salah-satu-yang-terbesar-di-asia-tenggara', 0, '2022-09-05 03:15:36'),
(5, 2, 'Tips Agar Blog Bisa Mendapatkan Google Adsense, Cuan Bos', '<p><img alt=\"Tips Agar Blog Bisa Mendapatkan Google Adsense, Cuan Bos\" src=\"https://media.suara.com/pictures/653x366/2016/11/15/o_1b1jgnb7d10ea1b4u1cf3m61kkea.jpg\" xss=removed></p>\r\n\r\n<p>Ilustsrasi aplikasi Google AdSense pada sistem Android (Shutterstock).</p>\r\n\r\n<p><strong>Suara.com - </strong><a href=\"https://www.suara.com/tag/adsense\">AdSense</a> membantu kamu menghasilkan uang dari segala jenis situs web, meskipun ada beberapa ceruk yang tidak diizinkan oleh Google.</p>\r\n\r\n<p>AdSense membantu kamu mendapat untung dari upaya yang kamu lakukan untuk membuat <a href=\"https://www.suara.com/tag/blog\">blog</a>. Sumber penghasilan utama dengan melakukan blogging adalah <a href=\"https://www.suara.com/tag/google-adsense\">Google Adsense</a>.</p>\r\n\r\n<p>Namun, masih banyak yang mendapatkan penolakan oleh tim menyetujui Adsense.</p>\r\n\r\n<p>Google AdSense adalah salah satu jaringan iklan paling populer yang tersedia bagi pemilik situs web dan blogger untuk memonetisasi konten mereka dan menghasilkan banyak uang.</p>\r\n\r\n<p>Baca Juga:<a href=\"https://yoursay.suara.com/entertainment/2022/12/22/150314/cari-pria-bikin-konten-masalah-rumah-tangganya-rizky-billar-minta-profit-adsense-siapa-tahu-dikasih\" rel=\"\">Cari Pria Bikin Konten Masalah Rumah Tangganya, Rizky Billar Minta Profit Adsense: Siapa Tahu Dikasih</a></p>\r\n\r\n<p>AdSense menawarkan pembayaran dan penayangan terbaik dibandingkan dengan jaringan iklan lainnya.</p>\r\n\r\n<p>AdSense juga menawarkan RKPT (rasio klik-tayang) yang tinggi untuk halaman web. AdSense juga menarik banyak penipu.</p>\r\n\r\n<p> </p>\r\n\r\n<p><img alt=\"Ilustrasi Blog (Freepick/rawpixel)\" src=\"https://media.suara.com/pictures/653x366/2022/05/18/97677-ilustrasi-blog.jpg\" xss=removed></p>\r\n\r\n<p>Ilustrasi Blog (Freepick/rawpixel)</p>\r\n\r\n<p>Itulah sebabnya AdSense memiliki beberapa aturan yang sangat ketat dan tidak mudah mendapatkan persetujuan AdSense saat ini.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Berikut tips agar blog bisa mendapatkan Google Adsense yang dirangkum untuk kamu.</p>\r\n', 'tips-agar-blog-bisa-mendapatkan-google-adsense-cuan-bos', 0, '2023-02-03 21:27:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mas_daerah`
--

CREATE TABLE `tbl_mas_daerah` (
  `IdDaerah` int(11) NOT NULL,
  `Daerah` varchar(255) NOT NULL,
  `RegDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_mas_daerah`
--

INSERT INTO `tbl_mas_daerah` (`IdDaerah`, `Daerah`, `RegDate`) VALUES
(1, 'KOTA TOMOHON', '2022-08-29 13:43:57'),
(2, 'KABUPATEN MINAHASA', '2022-08-29 13:43:57'),
(3, 'KABUPATEN MINAHASA TENGGARA', '2022-08-29 13:43:57'),
(4, 'KABUPATEN MINAHASA SELATAN', '2022-08-29 13:43:57'),
(5, 'KOTA BITUNG', '2022-08-29 13:43:57'),
(6, 'KABUPATEN MINAHASA UTARA', '2022-08-29 13:43:57'),
(7, 'BOLAANG MONGONDOW TIMUR', '2022-08-29 13:43:57'),
(8, 'BOLAANG MONGONDOW ', '2022-08-29 13:43:57'),
(10, 'KOTA MANADO', '2022-08-29 13:43:57'),
(11, 'BOLAANG MONGONDOW UTARA', '2022-08-29 13:43:57'),
(12, 'BOLAANG MONGONDOW  SELATAN', '2022-08-29 13:43:57'),
(13, 'KEPL. SANGIHE', '2022-08-29 13:43:57'),
(14, 'KEPL. SIAU TAGULANDANG BIARO', '2022-08-29 13:43:57'),
(15, 'KEPL. TALAUD', '2022-08-29 13:43:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mas_perusahaan`
--

CREATE TABLE `tbl_mas_perusahaan` (
  `IdPerusahaan` int(11) NOT NULL,
  `Perusahaan` varchar(255) DEFAULT NULL,
  `AlamatPerusahaan` text DEFAULT NULL,
  `RegDate` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_mas_perusahaan`
--

INSERT INTO `tbl_mas_perusahaan` (`IdPerusahaan`, `Perusahaan`, `AlamatPerusahaan`, `RegDate`) VALUES
(2, 'PT Hakian Wellem Rumansi', 'Ruko Marina Plaza Blok B 27 (Samping Bank Panin)', '2022-08-29 13:50:18'),
(3, 'PT Bangkit Limpoga Jaya\r\n', 'Komp. Ruko Citraland Jl. Ringroad I\r\n', '2022-08-29 13:50:18'),
(4, 'PT Minselano ', 'Komp. Ruko Citraland Jl. Ringroad I', '2022-08-29 13:50:18'),
(23, 'PT SINAR SURYA ', 'KAROMBASAN', '2022-08-29 13:50:18'),
(26, 'PT Ratok Mining', 'Jl. Babe Palar, Bitung', '2022-08-29 13:50:18'),
(27, 'PT. J. Resources Bolaang', 'Lanud (Boltim), Bakan(Bolmong/Bolsel}', '2022-08-29 13:50:18'),
(28, 'PT Sinar Cahaya', 'Komp. Ruko Citraland Jl. Ringroad II', '2022-08-29 13:50:18'),
(30, 'PT. J. Resources Bolaang Mongondow', 'Lanud (Boltim)', '2022-08-29 13:50:18'),
(31, 'PT. Meares Soputran Mining', 'Tokatindung, Likupang ', '2022-08-29 13:50:18'),
(32, 'PT. Tambang Tondano Nusajaya', 'Minahasa Utara,', '2022-08-29 13:50:18'),
(33, 'PT. Gorontalo Sejahtera Mining', 'Bolaang Mongondow Utara', '2022-08-29 13:50:18'),
(37, 'PT MINSELANO ', 'Komp. Ruko Citraland Jl. Ringroad I', '2022-08-29 13:50:18'),
(38, 'PT Sumber Energi Jaya', 'Jl. Ahmad Yani 17, Sario Tumpaan, Kec. Sario, Kota Manado', '2022-08-29 13:50:18'),
(39, 'PT Sumber Energi Jaya', 'Jl Raya Pantai Indah Kapuk Jakarta Utara', '2022-08-29 13:50:18'),
(40, 'PT Kencana Mulia Jaya', 'Komp Perkantoran Interkon Plaza Taman Kebun Jeruk Jakarta Barat', '2022-08-29 13:50:18'),
(41, 'PT Arafura Surya Alam', 'Jl. Prof. Ir. Sutami No. 28 Makassar', '2022-08-29 13:50:18'),
(42, 'KUD Nomontang', 'Desa Lanut, Kec. Modayag, Kab. Bolaang Mongondow Timur', '2022-08-29 13:50:18'),
(43, 'PT. Bolmong Timur Primanusa', 'Kel. Kebayoran Lama Selatan, Kec. Kebayoran Lama, Jakarta Selatan', '2022-08-29 13:50:18'),
(44, 'KUD Perintis', 'Desa Tanoyan, Kec. Lolayan', '2022-08-29 13:50:18'),
(45, 'CV Indah Sari', 'Jl. AP Patarani Blok GA. 6 No. 5 Makassar', '2022-08-29 13:50:18'),
(46, 'PT Bulawan Daya Lestari', 'Jl. WZ Yohanes No 12 - 14 Wanea Manado', '2022-08-29 13:50:18'),
(47, 'PT Monumen Energi Nusantara', 'Jl. Pemuda No. 70 Kel. Jati Kec. Pulo Gadung Jakarta Timur', '2022-08-29 13:50:18'),
(48, 'PT Dayana Cipta', 'Kel. Kakaskasen I', '2022-08-29 13:50:18'),
(49, 'PT Sekar Jaya Esa', 'Kel. Kakaskasen 2', '2022-08-29 13:50:18'),
(50, 'CV Central Gemilang', 'Kinilow I, Kec. Tomohon Utara', '2022-08-29 13:50:18'),
(51, 'Alexander Wariki', 'Desa Tateli, Kec. Mandolang', '2022-08-29 13:50:18'),
(52, 'J Ronny Rinaldy Rompas', 'Desa Tateli, Kec. Mandolang', '2022-08-29 13:50:18'),
(53, 'Truely Khosama', 'Desa Tateli, Kec. Mandolang', '2022-08-29 13:50:18'),
(54, 'Verry I. P. Gumalang', 'Desa Tateli, Kec. Mandolang', '2022-08-29 13:50:18'),
(55, 'PT Sinar Terang Lestari', 'Kec. Pasan', '2022-08-29 13:50:18'),
(56, 'Mike Paat', 'Desa Motoling Dua Kec. Motoling', '2022-08-29 13:50:18'),
(57, 'CV Evav Pillar Rangmas', 'Kel. Apela Satu Kec. Ranowulu', '2022-08-29 13:50:18'),
(58, 'CV. Trimix Sulut Sejati', 'desa lansot , kec kema ', '2022-08-29 13:50:18'),
(59, 'PT Karya Lansot Mandiri', 'Lansot Kec. Kema', '2022-08-29 13:50:18'),
(60, 'PT Jaya Berkat Usaha', 'Desa Lilang Kec. Kema', '2022-08-29 13:50:18'),
(61, 'CV Brimcimars Jaya', 'Desa Treman Kec. Kauditan', '2022-08-29 13:50:18'),
(62, 'CV Joviren', 'Desa Lansot Kec. Kema', '2022-08-29 13:50:18'),
(63, 'Dolfi Ngantung', 'Desa Kawiley Kec. Kauditan', '2022-08-29 13:50:18'),
(64, 'Richard Erick Chandra', 'Desa Kaima Kec. Kauditan', '2022-08-29 13:50:18'),
(65, 'Octavianus Nangoi', 'Desa Lansot , kec kema', '2022-08-29 13:50:18'),
(66, 'CV Batu Bitung Sejahtera', 'Desa Lansot Kec. Kema', '2022-08-29 13:50:18'),
(67, 'PT Karunia Jaya Sejati', 'Paret Kec. Kotabunan', '2022-08-29 13:50:18'),
(68, 'PT Karunia Jaya Sejati', 'Matabulu Kec. Nuangan', '2022-08-29 13:50:18'),
(69, 'Lucia Kristina Mokoginta', 'Desa Mototompian Kec. Moat', '2022-08-29 13:50:18'),
(70, 'Nurmaini Siregar', 'Desa Motongkad Tengah Kec. Motongkad', '2022-08-29 13:50:18'),
(71, 'PT. Lumbung Berkat Indonesia', 'Desa Bai Kec. Nuangan', '2022-08-29 13:50:18'),
(72, 'CV Sinar Berkah Mandiri', 'Kec. Passi Barat', '2022-08-29 13:50:18'),
(73, 'PT. Gading Murni Perkasa', 'Desa Lolan II Kec. Bolaang Timur', '2022-08-29 13:50:18'),
(74, 'Meidy Mody Pandeirot', 'Desa Mondatong Baru Kec. Poigar', '2022-08-29 13:50:18'),
(75, 'PT. Mandiri Bhakti Majene', 'Desa Pinogaluman dan Pinogaluman Timur Kec. Lolak', '2022-08-29 13:50:18'),
(76, 'PT. Tongara Batu Perkasa', 'Desa Mopusi Kec. Lolayan', '2022-08-29 13:50:18'),
(77, 'PT. Sulut Solog Tambang', 'Desa Solog Kec Lolak ', '2022-08-29 13:50:18'),
(78, 'CV. Rajawali Mandiri Tritunggal', 'Desa Totabuan Kec. Lolak', '2022-08-29 13:50:18'),
(79, 'PT. Monalisa Jaya', 'Desa Tumokang Baru Kec. Dumoga Utara', '2022-08-29 13:50:18'),
(80, 'Femmy Singkah', 'Desa Mondatong Baru Kec. Poigar', '2022-08-29 13:50:18'),
(81, 'PT. Jembatan Mitra Perkasa', 'Desa Lalow Kec. Lolak', '2022-08-29 13:50:18'),
(82, 'Medy Pontoh', 'Desa Binjeita Kec. Bolangitang Timur', '2022-08-29 13:50:18'),
(83, 'PT Nusantara Sejahtera Bersama', 'Desa Sinandaka Kec. Helumo', '2022-08-29 13:50:18'),
(84, 'PT. Anugerah Dynasty Sakti', 'Desa Kolongan Beha Baru Kec. Tahuna Barat', '2022-08-29 13:50:18'),
(85, 'PT Gading Murni Perkasa', 'Desa Binala Kec. Tamako', '2022-08-29 13:50:18'),
(86, 'PT. Anugerah Dynasty Sakti', 'Desa Pananekeng, Kec. Tahuna Barat', '2022-08-29 13:50:18'),
(87, 'PT. Adi Mitra Perdana', 'Desa Pananekeng, Kec. Tahuna Barat', '2022-08-29 13:50:18'),
(88, 'PT. Anugerah Dynasty Sakti', 'Desa Pananekeng, Kec. Tahuna Barat', '2022-08-29 13:50:18'),
(89, 'PT. Marvein', 'Desa Pananekeng, Kec. Tahuna Barat', '2022-08-29 13:50:18'),
(90, 'PT Gading Murni Perkasa', 'Desa Biau dan Kalihiang Kec. Siau Timur Selatan ', '2022-08-29 13:50:18'),
(91, 'Ronny Daryanto', 'Desa Matahit Kec. Beo Selatan', '2022-08-29 13:50:18'),
(92, 'Dinda Grace Buambitun', 'Desa Matahit Kec. Beo Selatan', '2022-08-29 13:50:18'),
(93, 'PT. J. Resources Bolaang Mongondow', 'Lanud (Boltim), Bakan(Bolmong/Bolsel)', '2022-08-29 13:50:18'),
(94, 'PT. Meares Soputran Mining', 'Tokatindung, Likupang  Timur, Minahasa Utara', '2022-08-29 13:50:18'),
(95, 'PT. Tambang Tondano Nusajaya', 'Minahasa Utara, Kota Bitung', '2022-08-29 13:50:18'),
(96, 'PT. Gorontalo Sejahtera Mining', 'Bolaang Mongondow Utara', '2022-08-29 13:50:18'),
(97, 'PT. Tambang Mas Sangihe', 'Manganitu, Kab. Kep. Sangihe', '2022-08-29 13:50:18'),
(101, 'tondano', 'tataaran', '2023-03-30 16:39:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mas_tambang`
--

CREATE TABLE `tbl_mas_tambang` (
  `IdTambang` int(11) NOT NULL,
  `IdPerusahaan` int(11) NOT NULL,
  `IdType` int(11) NOT NULL,
  `IdDaerah` int(11) NOT NULL,
  `Lat` text CHARACTER SET eucjpms COLLATE eucjpms_bin NOT NULL,
  `Long` text CHARACTER SET eucjpms COLLATE eucjpms_bin NOT NULL,
  `Lokasi` text CHARACTER SET eucjpms COLLATE eucjpms_bin NOT NULL,
  `Luas` double NOT NULL,
  `Tahapan` varchar(50) CHARACTER SET eucjpms COLLATE eucjpms_bin NOT NULL,
  `SK` varchar(50) CHARACTER SET eucjpms COLLATE eucjpms_bin NOT NULL,
  `NoSK` varchar(50) CHARACTER SET eucjpms COLLATE eucjpms_bin NOT NULL,
  `TAwal` date NOT NULL,
  `TSelesai` date NOT NULL,
  `Komoditas` varchar(50) CHARACTER SET eucjpms COLLATE eucjpms_bin NOT NULL,
  `Status` varchar(50) CHARACTER SET eucjpms COLLATE eucjpms_bin NOT NULL,
  `Ket` varchar(50) CHARACTER SET eucjpms COLLATE eucjpms_bin NOT NULL,
  `Foto` text CHARACTER SET eucjpms COLLATE eucjpms_bin DEFAULT 'default.jpg',
  `RegDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_mas_tambang`
--

INSERT INTO `tbl_mas_tambang` (`IdTambang`, `IdPerusahaan`, `IdType`, `IdDaerah`, `Lat`, `Long`, `Lokasi`, `Luas`, `Tahapan`, `SK`, `NoSK`, `TAwal`, `TSelesai`, `Komoditas`, `Status`, `Ket`, `Foto`, `RegDate`) VALUES
(210, 26, 1, 5, '125.16265812824732', '1.4495307031440248', 'Jl. Babe Palar, Bitung', 81.26, 'Eksplorasi', 'Gubernur', '313 Tahun 2015', '0000-00-00', '0000-00-00', 'Emas', 'CNC III', 'Aktif', 'CV_Central_Gemilang1.png', '0000-00-00 00:00:00'),
(212, 2, 1, 3, '124.83844807238947', '1.4920986288955396', 'Ruko Marina Plaza Blok B 27 (Samping Bank Panin)', 100, 'Produksi', 'Gubernur', '302 Tahun 2015', '0000-00-00', '0000-00-00', 'Emas', 'CNC III', 'Aktif', 'CV_Central_Gemilang5.png', '0000-00-00 00:00:00'),
(213, 3, 1, 3, '124.84488710132504', '1.4376665395291386,', 'Komp. Ruko Citraland Jl. Ringroad I', 41.38, 'Eksplorasi', 'Bupati', '100 tahun 2013', '0000-00-00', '0000-00-00', 'Emas', 'CNC III', 'Aktif', 'PT_Bangkit_Limpoga_Jaya.jpg', '0000-00-00 00:00:00'),
(214, 4, 1, 3, '124.84480664535388', '1.4375002988530088', 'Komp. Ruko Citraland Jl. Ringroad I', 23.6, 'Produksi', 'Bupati', '85.a tahun 2011', '0000-00-00', '0000-00-00', 'Emas', 'CNC IX', 'Aktif', 'CV_Central_Gemilang4.png', '0000-00-00 00:00:00'),
(215, 39, 1, 3, '124.83023213249722', '1.4679087748752118', 'Jl. Ahmad Yani 17, Sario Tumpaan, Kec. Sario, Kota Manado', 301.44, 'Produksi', 'Bupati', '221 tahun 2014', '0000-00-00', '0000-00-00', 'Emas', 'Non CNC', 'Aktif', 'PT_Sumber_Energi_Jaya2.jpg', '0000-00-00 00:00:00'),
(219, 41, 1, 7, '119.48938271664076', '-5.086589847529098', 'Jl. Prof. Ir. Sutami No. 28 Makassar', 4000, 'Produksi', 'Bupati', '100 tahun 2013', '0000-00-00', '0000-00-00', 'Emas', 'CNC VIII', 'Aktif', 'PT_Arafura_Surya_Alam.png', '0000-00-00 00:00:00'),
(220, 42, 1, 7, '124.46381748214374', '0.6524065937816413', 'Desa Lanut, Kec. Modayag, Kab. Bolaang Mongondow Timur', 215.1, 'Produksi', 'Gubernur', '503/DPMPTSPD/IUP-OP/285/X/2019', '0000-00-00', '0000-00-00', 'Emas', 'CNC IV', 'Perpanjangan', 'Kud_Lumontang.jpg', '0000-00-00 00:00:00'),
(222, 44, 1, 8, '124.25262159179834', '0.6205784943686087', 'Desa Tanoyan, Kec. Lolayan', 100, 'Produksi', 'Gubernur', '503/DPMPTSPD/IUP-OP/139/VIII/2020', '0000-00-00', '0000-00-00', 'Emas', 'Non CNC', 'Perpanjangan', 'KUD_Perintis.jpg', '0000-00-00 00:00:00'),
(223, 45, 1, 8, '119.433053860941', '-5.152310114850169', 'Jl. AP Patarani Blok GA. 6 No. 5 Makassar', 18, 'Produksi', 'Gubernur', '503/DPMPTSD/IUP-OP/126/V/2019', '0000-00-00', '0000-00-00', 'Pasir besi', 'CNC I', 'Aktif', 'CV_Central_Gemilang3.png', '0000-00-00 00:00:00'),
(224, 46, 1, 8, '124.84778226503224', '1.4618146229023172', 'Jl. WZ Yohanes No 12 - 14 Wanea Manado', 99.84, 'Operasi Produksi', 'Gubernur', '503/DPMPTSPD/IUP-OP/241/X/2020', '0000-00-00', '0000-00-00', 'Emas', 'CNC I', 'Aktif', 'PT_Bulawan_Daya_Lestari.jpg', '0000-00-00 00:00:00'),
(226, 48, 2, 1, '124.82501662671422', '1.3554760445437104', 'Kel. Kakaskasen I', 12.68, 'Produksi', '-', '-', '0009-09-09', '0009-09-09', 'Batuan', '-', '-', 'PT_Dayana_Cipta.jpg', '0000-00-00 00:00:00'),
(227, 49, 2, 1, '124.82563646549573', '1.349284209746893', 'Kel. Kakaskasen 2', 12.68, 'Eksplorasi', 'Gubernur', '42 Tahun 2016', '0000-00-00', '0000-00-00', 'Batuan', '-', '-', 'CV_Central_Gemilang7.png', '0000-00-00 00:00:00'),
(228, 50, 2, 1, '124.82840655521585', '1.3605166951213667', 'Kinilow I, Kec. Tomohon Utara', 9.45, 'Produksi', '-', '-', '0001-01-01', '0001-01-01', 'Batuan', '-', '-', 'CV_Central_Gemilang.png', '0000-00-00 00:00:00'),
(229, 51, 2, 2, '124.76653801351367', '1.4523394155838043', 'Desa Tateli, Kec. Mandolang', 3, 'Produksi', 'Bupati', '696 tahun 2013', '0000-00-00', '0000-00-00', 'Batuan', '-', 'Aktif - Perpanjangan', 'CV_Central_Gemilang6.png', '0000-00-00 00:00:00'),
(230, 52, 2, 2, '124.76635423189319', '1.4524239830609418', 'Desa Tateli, Kec. Mandolang', 2.24, 'Produksi', 'Bupati', '648 tahun 2013', '0000-00-00', '0000-00-00', 'Batuan', '-', 'Aktif - Perpanjangan', 'PT_BLJ(BANGKIT_LIMPOGA_JAYA)_Ratatotok_-_Belang2.jpg', '0000-00-00 00:00:00'),
(231, 53, 2, 2, '124.76798501491308', '1.4532391124667998', 'Desa Tateli, Kec. Mandolang', 11, 'Produksi', 'Bupati', '647 tahun 2013', '0000-00-00', '0000-00-00', 'Batuan', '-', 'Aktif - Perpanjangan', '11.jpg', '0000-00-00 00:00:00'),
(232, 54, 2, 2, '124.76558175572589', '1.451523050217654', 'Desa Tateli, Kec. Mandolang', 2.99, 'Produksi', 'Bupati', '651 tahun 2013', '0000-00-00', '0000-00-00', 'Batuan', '-', '-', 'PT_BLJ(BANGKIT_LIMPOGA_JAYA)_Ratatotok_-_Belang1.jpg', '0000-00-00 00:00:00'),
(234, 93, 3, 8, '124.45008457250266', '0.6438240742289092', 'Lanud (Boltim), Bakan(Bolmong/Bolsel)', 38, 'Eksplorasi Produksi', 'B.143/Pres/3/1997', '078.K/20.01/DJG/2004', '0001-01-01', '0001-01-01', 'Emas', '-', '-', 'default.jpg', '0000-00-00 00:00:00'),
(235, 94, 3, 6, '125.07965963960038', '1.6566005518576252', 'Tokatindung, Likupang  Timur, Minahasa Utara', 8, 'Produksi', 'B.43/Pres/II/1986', '314.K/20.01/DDJP/1998', '0001-01-01', '0001-01-01', 'Emas', '-', '-', 'default.jpg', '0000-00-00 00:00:00'),
(236, 95, 3, 6, '125.06037209909071', '1.6395992164880848', 'Minahasa Utara, Kota Bitung', 30, 'Eksplorasi Produksi', 'B.143/Pres/3/1997', '125.K/20.01/DJP/1999', '0001-01-01', '0001-01-01', 'Emas', '-', '-', 'default.jpg', '0000-00-00 00:00:00'),
(237, 96, 3, 11, '123.55828736231629', '0.7908003719334763', 'Bolaang Mongondow Utara', 3, 'Eksplorasi', 'B.18/Pres/7/1994', '115.K/20.01/DJP/200', '0001-01-01', '0001-01-01', 'Emas', '-', '-', 'default.jpg', '0000-00-00 00:00:00'),
(238, 97, 3, 13, '125.50866212004216', '3.5299506333448103', 'Manganitu, Kab. Kep. Sangihe', 42, 'Eksplorasi', 'B.143/Pres/3/1997', '2511/30/DJM/2009', '0001-01-01', '0001-01-01', 'Emas', '-', '-', 'default.jpg', '0000-00-00 00:00:00'),
(240, 55, 2, 3, '124.7499123337255', '1.0191962994256125', 'Kec. Pasan', 11.3, 'Produksi', 'Bupati', '87 tahun 2013', '0001-01-01', '0001-01-01', 'Batuan', '-', 'Perpanjangan', 'pt_sinar.jpg', '0000-00-00 00:00:00'),
(242, 56, 2, 4, '124.47375767030881', '1.037243577487322', 'Desa Motoling Dua Kec. Motoling', 6, 'Produksi', 'DMPTSP', '503/DPMPTSPD/IUP-OP/29/II/2020', '0000-00-00', '0000-00-00', 'Batuan', '-', 'Aktif', 'Mike_Paat.jpg', '0000-00-00 00:00:00'),
(243, 57, 2, 5, '125.08493224613399', '1.4898165338743283', 'Kel. Apela Satu Kec. Ranowulu', 34, 'Produksi', 'DPMTPTSP', '503/DPMPTSP/IUP-OP/148/IX/2020', '0000-00-00', '0000-00-00', 'Batuan', '-', 'Aktif', 'CV_Evav.jpg', '0000-00-00 00:00:00'),
(244, 58, 2, 6, '125.05417923552986', '1.359972761495509', 'Desa Lansot Kec. Kema', 6.47, 'Produksi', 'Bupati', '101 tahun 2011', '0000-00-00', '0000-00-00', 'Batuan', '-', '-', 'Trimix_sulut_sejati.jpg', '0000-00-00 00:00:00'),
(245, 59, 2, 6, '125.06945709709653', '1.3457288390264661', 'Lansot Kec. Kema', 4.98, 'Produksi', 'Bupati', '05 Tahun 2012', '0000-00-00', '0000-00-00', 'Batuan', '-', 'Aktif', 'Lansot_Mandiri.jpg', '0000-00-00 00:00:00'),
(246, 60, 2, 6, '125.05128864684181', '1.3383732496374596', 'Desa Lilang Kec. Kema', 40, 'Produksi', 'Bupati', '288.a tahun 2013', '0000-00-00', '0000-00-00', 'Batuan', '-', 'Aktif', 'PT_jaya_berkat_usaha.png', '0000-00-00 00:00:00'),
(247, 61, 2, 6, '125.02536696331049', '1.3744139203079349', 'Desa Treman Kec. Kauditan', 5.5, 'Produksi', 'Bupati', '136 Tahun 2014', '0000-00-00', '0000-00-00', 'Batuan', '-', 'Diatas 2 Okt 2014', 'CV_Brimcimars_Jaya.png', '0000-00-00 00:00:00'),
(248, 62, 2, 6, '125.02868805390479', '1.363920048388573', 'Desa Lansot Kec. Kema', 7.39, 'Produksi', 'Bupati', '305 Tahun 2014', '0000-00-00', '0000-00-00', 'Batuan', '-', 'Diatas 2 Okt 2014', 'Cv_Jov.png', '0000-00-00 00:00:00'),
(249, 63, 2, 6, '125.05108222252733', '1.427318552520978', 'Desa Kawiley Kec. Kauditan', 5.8, 'Produksi', 'Bupati', '313 Tahun 2014', '0000-00-00', '0000-00-00', 'Batuan', '-', 'Diatas 2 Okt 2014', 'Dolfi.png', '0000-00-00 00:00:00'),
(250, 64, 2, 6, '125.02515965873677', '1.395530155889225', 'Desa Kaima Kec. Kauditan', 10.26, 'Produksi', 'Bupati', '291 Tahun 2014', '0001-01-01', '0001-01-01', 'Batuan', '-', 'Diatas 2 Okt 2014 - Perpanjangan', 'Richard.jpg', '0000-00-00 00:00:00'),
(251, 65, 2, 6, '125.04851494166827', '1.3705271297158068', 'Desa Lansot Kec. Kema', 4.33, 'Produksi', 'Bupati', '350 Tahun 2014', '0000-00-00', '0000-00-00', 'Batuan', '-', 'Diatas 2 Okt 2014', 'Trimix_sulut_sejati1.jpg', '0000-00-00 00:00:00'),
(252, 66, 2, 6, '125.0463691745943', '1.3547387494314782', 'Desa Lansot , kec kema', 10.21, 'Produksi', 'Bupati', '351 Tahun 2014', '0000-00-00', '0000-00-00', 'Batuan', '-', 'Diatas 2 Okt 2014', 'CV_batu_bitung.jpg', '0000-00-00 00:00:00'),
(253, 68, 2, 7, '124.59522023410186', '0.8386214458795093', 'Paret Kec. Kotabunan', 1284, 'Produksi', 'Bupati', '2 Tahun 2015', '0000-00-00', '0000-00-00', 'Batuan', '-', 'Aktif', 'PT_karunia_jaya_sejati.jpg', '0000-00-00 00:00:00'),
(254, 69, 2, 7, '124.43521365689787', '0.7393523342730527', 'Desa Mototompian Kec. Moat', 5, 'Produksi', 'DPMPTSP', '503/DPMPTSPD/IUP-OP/299/X/2019', '0000-00-00', '0000-00-00', 'Batuan', '-', 'Aktif', 'Lucia1.jpg', '0000-00-00 00:00:00'),
(255, 70, 2, 7, '124.55849558954925', '0.6758549775781255', 'Desa Motongkad Tengah Kec. Motongkad', 10, 'Produksi', 'DPMPTSP', '503/DPMPTSPD/IUP-OP/89/V/2020', '0000-00-00', '0000-00-00', 'Batuan', '-', 'Aktif', 'nurmaini.jpg', '0000-00-00 00:00:00'),
(256, 71, 2, 7, '124.502660772482', '0.6332303824461767', 'Desa Bai Kec. Nuangan', 21419, 'Produksi', 'DPMPTSP', '503/DPMPTSPD/IUP-OP/122/VII/2020', '0000-00-00', '0000-00-00', 'Batuan', '-', 'Aktif', 'PT_lumbung.jpg', '0000-00-00 00:00:00'),
(257, 72, 2, 8, '124.22103401797435', '0.7870536278907702', 'Kec. Passi Barat', 954.6, 'Produksi', 'Gubernur', '234 Tahun 2015', '0000-00-00', '0000-00-00', 'Batuan', '', 'Aktif', 'CV_berkah_mandiri.jpg', '0000-00-00 00:00:00'),
(258, 90, 2, 8, '124.17802462969289', '0.9377683480236175', 'Desa Lolan II Kec. Bolaang Timur', 33.451, 'Produksi', 'Gubernur', '188 Tahun 2017', '0000-00-00', '0000-00-00', 'Batuan', '-', 'Permohonan IUP Eksplorasi', 'PT__Gading_Murni_Perkasa.png', '0000-00-00 00:00:00'),
(259, 74, 2, 8, '124.3117499553211', '1.0037280829057855', 'Desa Mondatong Baru Kec. Poigar', 6, 'Produksi', 'DPMPTSP', '503/DPMPTSPD/IUP-OP/326/XI/2018', '0000-00-00', '0000-00-00', 'Batuan', '-', '-', 'Meidy_Mody_Pandeirot.png', '0000-00-00 00:00:00'),
(260, 75, 2, 8, '123.99247302137152', '0.8434457476805909', 'Desa Pinogaluman dan Pinogaluman Timur Kec. Lolak', 12, 'Eksplorasi', 'Gubernur', '319 Tahun 2017', '0000-00-00', '0000-00-00', 'Batuan', '-', 'Aktif', 'PT__Mandiri_Bhakti_Majene.jpg', '0000-00-00 00:00:00'),
(261, 76, 2, 8, '124.26066939846396', '0.5837994631711236', 'Desa Mopusi Kec. Lolayan', 6.33, 'Produksi', 'DPMPTSP', '503/DPMPTSPD/IUP-OP/11/1/2019', '0000-00-00', '0000-00-00', 'Batuan', '-', 'Aktif', 'PT__Tongara_Batu_Perkasa.jpg', '0000-00-00 00:00:00'),
(262, 77, 2, 8, '124.09912894409776', '0.8659206173130147', 'Desa Solog Kec Lolak ', 240.5, 'Produksi', 'DPMPTSP', '503/DPMPTSPD/IUP-OP/147/VII/2018', '0000-00-00', '0000-00-00', 'lempung', '-', '-', 'PT__Sulut_Solog_Tambang.png', '0000-00-00 00:00:00'),
(263, 81, 2, 8, '124.03836360316755', '0.8801314971353706', 'Desa Lalow Kec. Lolak', 115, 'Produksi', 'DPMPTSP', '503/DPMPTSPD/IUP-OP/1119/XII/2020', '0000-00-00', '0000-00-00', 'Batu Gamping', '-', 'Aktif', 'PT__Jembatan_Mitra_Perkasa.png', '0000-00-00 00:00:00'),
(265, 97, 3, 13, '124.001245515', '11.11545154554', 'asdasdsdsA', 2312, 'Survey', 'BUPATI', '1234568797', '2022-06-01', '2022-09-30', 'Emas', 'Aktif', '-', 'tambang-97-1662474409.jpg', '2022-09-06 22:26:50'),
(266, 60, 3, 11, '124.001245515', '11.11545154554', 'asdad a', 123, 'Survey', 'Gubernur', '1234568797', '2022-07-01', '2022-09-30', 'Pasir Besi', 'Aktif', '-', 'tambang-60-1662565287.png', '2022-09-07 23:41:28'),
(269, 79, 3, 13, ' 123.189911', '-0.735998', 'asd asd asd ads d', 111, 'Survey', 'Gubernur', '1234568797', '2019-12-01', '2022-12-31', 'Emas', 'Aktif', '-', 'tambang-79-1670341554.jpg', '2022-12-06 23:45:54'),
(270, 96, 2, 14, '123.189911', '-0.735998', 'asdfsadf asd as', 123, 'Produksi', 'BUPATI', '1234568797', '2022-12-01', '2022-12-31', 'Pasir Besi', 'Aktif', 'asdads', 'tambang-96-1670341762.jpeg', '2022-12-06 23:49:22'),
(277, 101, 3, 2, '124.862456', '1.279460', 'wqqwqr', 1234, 'Survey', 'Bupati', '12312425abc', '2018-12-31', '2023-02-12', 'Batuan', 'aktif', '-', 'tambang-101-1680169349.jpg', '2023-03-30 16:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mas_type_mineral`
--

CREATE TABLE `tbl_mas_type_mineral` (
  `IdType` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `RegDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_mas_type_mineral`
--

INSERT INTO `tbl_mas_type_mineral` (`IdType`, `Type`, `RegDate`) VALUES
(1, 'IUP Logam', '2022-08-29 13:46:39'),
(2, 'IUP Non Logam & Batuan', '2022-08-29 13:46:39'),
(3, 'Kontrak Karya', '2022-08-29 13:47:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_set_slider`
--

CREATE TABLE `tbl_set_slider` (
  `IdSlider` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Caption` text NOT NULL,
  `Gambar` text NOT NULL,
  `FlagAktif` set('Y','N') NOT NULL DEFAULT 'Y',
  `RegDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_set_slider`
--

INSERT INTO `tbl_set_slider` (`IdSlider`, `Title`, `Caption`, `Gambar`, `FlagAktif`, `RegDate`) VALUES
(1, 'DINAS ENERGI SUMBER DAYA DAN MINERAL', 'REKLAMASI PERTAMBANGAN LIAR KE WILAYAH PERTAMBANGAN RAKYAT DI PROVINSI SULAWESI UTARA', 'slider-1-1.jpg', 'Y', '2022-08-29 13:58:45'),
(2, 'DINAS ENERGI SUMBER DAYA DAN MINERAL', 'REKLAMASI PERTAMBANGAN LIAR KE WILAYAH PERTAMBANGAN RAKYAT DI PROVINSI SULAWESI UTARA', 'slider-1-21.jpg', 'Y', '2022-08-29 13:58:45');

-- --------------------------------------------------------

--
-- Stand-in structure for view `tbv_blog`
-- (See below for the actual view)
--
CREATE TABLE `tbv_blog` (
`IdBlog` int(11)
,`IdKat` int(11)
,`Kategori` varchar(255)
,`Judul` varchar(255)
,`Isi` longtext
,`RegBy` int(11)
,`Slug` text
,`RegDate` datetime
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tbv_peti`
-- (See below for the actual view)
--
CREATE TABLE `tbv_peti` (
`IdLaporan` int(11)
,`Nama` varchar(255)
,`Email` varchar(255)
,`IdDaerah` int(11)
,`Daerah` varchar(255)
,`Kecamatan` varchar(255)
,`Kelurahan` varchar(255)
,`Lokasi` varchar(255)
,`Detail` longtext
,`Verify` set('Y','N')
,`RegDate` datetime
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tbv_tambang`
-- (See below for the actual view)
--
CREATE TABLE `tbv_tambang` (
`IdTambang` int(11)
,`IdPerusahaan` int(11)
,`Perusahaan` varchar(255)
,`AlamatPerusahaan` text
,`IdType` int(11)
,`Type` varchar(255)
,`IdDaerah` int(11)
,`Daerah` varchar(255)
,`Lat` text
,`Long` text
,`Lokasi` text
,`Luas` double
,`Tahapan` varchar(50)
,`SK` varchar(50)
,`NoSK` varchar(50)
,`TAwal` date
,`TSelesai` date
,`Komoditas` varchar(50)
,`Status` varchar(50)
,`Ket` varchar(50)
,`Foto` text
,`RegDate` datetime
);

-- --------------------------------------------------------

--
-- Structure for view `tbv_blog`
--
DROP TABLE IF EXISTS `tbv_blog`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tbv_blog`  AS SELECT `a`.`IdBlog` AS `IdBlog`, `b`.`IdKat` AS `IdKat`, `b`.`Kategori` AS `Kategori`, `a`.`Judul` AS `Judul`, `a`.`Isi` AS `Isi`, `a`.`RegBy` AS `RegBy`, `a`.`Slug` AS `Slug`, `a`.`RegDate` AS `RegDate` FROM ((`tbl_mas_blog` `a` left join `tbl_kat_blog` `b` on(`a`.`Kategori` = `b`.`IdKat`)) left join `tbl_login` `c` on(`a`.`RegBy` = `c`.`IdLogin`))  ;

-- --------------------------------------------------------

--
-- Structure for view `tbv_peti`
--
DROP TABLE IF EXISTS `tbv_peti`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tbv_peti`  AS SELECT `a`.`IdLaporan` AS `IdLaporan`, `a`.`Nama` AS `Nama`, `a`.`Email` AS `Email`, `b`.`IdDaerah` AS `IdDaerah`, `b`.`Daerah` AS `Daerah`, `a`.`Kecamatan` AS `Kecamatan`, `a`.`Kelurahan` AS `Kelurahan`, `a`.`Lokasi` AS `Lokasi`, `a`.`Detail` AS `Detail`, `a`.`Verify` AS `Verify`, `a`.`RegDate` AS `RegDate` FROM (`tbl_laporan` `a` left join `tbl_mas_daerah` `b` on(`a`.`Daerah` = `b`.`IdDaerah`))  ;

-- --------------------------------------------------------

--
-- Structure for view `tbv_tambang`
--
DROP TABLE IF EXISTS `tbv_tambang`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tbv_tambang`  AS SELECT `a`.`IdTambang` AS `IdTambang`, `b`.`IdPerusahaan` AS `IdPerusahaan`, `b`.`Perusahaan` AS `Perusahaan`, `b`.`AlamatPerusahaan` AS `AlamatPerusahaan`, `c`.`IdType` AS `IdType`, `c`.`Type` AS `Type`, `d`.`IdDaerah` AS `IdDaerah`, `d`.`Daerah` AS `Daerah`, `a`.`Lat` AS `Lat`, `a`.`Long` AS `Long`, `a`.`Lokasi` AS `Lokasi`, `a`.`Luas` AS `Luas`, `a`.`Tahapan` AS `Tahapan`, `a`.`SK` AS `SK`, `a`.`NoSK` AS `NoSK`, `a`.`TAwal` AS `TAwal`, `a`.`TSelesai` AS `TSelesai`, `a`.`Komoditas` AS `Komoditas`, `a`.`Status` AS `Status`, `a`.`Ket` AS `Ket`, `a`.`Foto` AS `Foto`, `a`.`RegDate` AS `RegDate` FROM (((`tbl_mas_tambang` `a` left join `tbl_mas_perusahaan` `b` on(`a`.`IdPerusahaan` = `b`.`IdPerusahaan`)) left join `tbl_mas_type_mineral` `c` on(`a`.`IdType` = `c`.`IdType`)) left join `tbl_mas_daerah` `d` on(`a`.`IdDaerah` = `d`.`IdDaerah`)) ORDER BY `a`.`RegDate` AS `DESCdesc` ASC  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kat_blog`
--
ALTER TABLE `tbl_kat_blog`
  ADD PRIMARY KEY (`IdKat`);

--
-- Indexes for table `tbl_laporan`
--
ALTER TABLE `tbl_laporan`
  ADD PRIMARY KEY (`IdLaporan`),
  ADD KEY `FK_tbl_laporan_tbl_mas_daerah` (`Daerah`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`IdLogin`);

--
-- Indexes for table `tbl_mas_blog`
--
ALTER TABLE `tbl_mas_blog`
  ADD PRIMARY KEY (`IdBlog`),
  ADD KEY `FK_tbl_mas_blog_tbl_kat_blog` (`Kategori`);

--
-- Indexes for table `tbl_mas_daerah`
--
ALTER TABLE `tbl_mas_daerah`
  ADD PRIMARY KEY (`IdDaerah`);

--
-- Indexes for table `tbl_mas_perusahaan`
--
ALTER TABLE `tbl_mas_perusahaan`
  ADD PRIMARY KEY (`IdPerusahaan`);

--
-- Indexes for table `tbl_mas_tambang`
--
ALTER TABLE `tbl_mas_tambang`
  ADD PRIMARY KEY (`IdTambang`),
  ADD KEY `FK_tbl_mas_tambang_tbl_mas_perusahaan` (`IdPerusahaan`),
  ADD KEY `FK_tbl_mas_tambang_tbl_mas_type_mineral` (`IdType`),
  ADD KEY `FK_tbl_mas_tambang_tbl_mas_daerah` (`IdDaerah`);

--
-- Indexes for table `tbl_mas_type_mineral`
--
ALTER TABLE `tbl_mas_type_mineral`
  ADD PRIMARY KEY (`IdType`);

--
-- Indexes for table `tbl_set_slider`
--
ALTER TABLE `tbl_set_slider`
  ADD PRIMARY KEY (`IdSlider`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kat_blog`
--
ALTER TABLE `tbl_kat_blog`
  MODIFY `IdKat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_laporan`
--
ALTER TABLE `tbl_laporan`
  MODIFY `IdLaporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6477;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `IdLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_mas_blog`
--
ALTER TABLE `tbl_mas_blog`
  MODIFY `IdBlog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_mas_daerah`
--
ALTER TABLE `tbl_mas_daerah`
  MODIFY `IdDaerah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_mas_perusahaan`
--
ALTER TABLE `tbl_mas_perusahaan`
  MODIFY `IdPerusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `tbl_mas_tambang`
--
ALTER TABLE `tbl_mas_tambang`
  MODIFY `IdTambang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=278;

--
-- AUTO_INCREMENT for table `tbl_mas_type_mineral`
--
ALTER TABLE `tbl_mas_type_mineral`
  MODIFY `IdType` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_set_slider`
--
ALTER TABLE `tbl_set_slider`
  MODIFY `IdSlider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_laporan`
--
ALTER TABLE `tbl_laporan`
  ADD CONSTRAINT `FK_tbl_laporan_tbl_mas_daerah` FOREIGN KEY (`Daerah`) REFERENCES `tbl_mas_daerah` (`IdDaerah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_mas_blog`
--
ALTER TABLE `tbl_mas_blog`
  ADD CONSTRAINT `FK_tbl_mas_blog_tbl_kat_blog` FOREIGN KEY (`Kategori`) REFERENCES `tbl_kat_blog` (`IdKat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_mas_tambang`
--
ALTER TABLE `tbl_mas_tambang`
  ADD CONSTRAINT `FK_tbl_mas_tambang_tbl_mas_daerah` FOREIGN KEY (`IdDaerah`) REFERENCES `tbl_mas_daerah` (`IdDaerah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tbl_mas_tambang_tbl_mas_perusahaan` FOREIGN KEY (`IdPerusahaan`) REFERENCES `tbl_mas_perusahaan` (`IdPerusahaan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tbl_mas_tambang_tbl_mas_type_mineral` FOREIGN KEY (`IdType`) REFERENCES `tbl_mas_type_mineral` (`IdType`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
