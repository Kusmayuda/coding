-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2020 at 12:51 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moc2`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `no` int(255) NOT NULL,
  `nama_activity` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `token` varchar(10) NOT NULL,
  `no_materi` varchar(255) NOT NULL,
  `no_soal` varchar(255) NOT NULL,
  `waktu` int(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`no`, `nama_activity`, `nik`, `token`, `no_materi`, `no_soal`, `waktu`, `created_at`, `updated_at`) VALUES
(1, 'Pembelajaran 1', '2147483647', '123qwe', '32,33', '8,9', 7200, '2020-10-25 08:44:08', '2020-10-25 08:44:08'),
(2, 'Persiapan UH 1', '2147483647', '123asd', '30,32,33', '1,5,2,8,9', 900, '2020-10-25 08:50:51', '2020-10-25 08:50:51'),
(3, 'Persiapan UTS', '2147483647', '123zxc', '28,29,30,31,32,33', '1,2,3,4,5,6,7,8,9', 5400, '2020-10-27 05:48:46', '2020-10-27 05:48:46'),
(4, 'Latihan UAS 2', '0', '123rty', '28,29,30,31', '8,9', 7200, '2020-10-28 06:43:24', '2020-10-28 06:43:24');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(125) NOT NULL,
  `contents` text NOT NULL,
  `author` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `thumbnail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `contents`, `author`, `created_at`, `updated_at`, `thumbnail`) VALUES
(28, 'Internet of Thing', '<p>Perkembangan teknologi semakin pesat dari waktu ke waktu. Dulu, mungkin kita hanya bisa berimajinasi atau menonton film-film fiksi sains soal teknologi canggih. Kini, berbagai peralatan/mesin sudah dilengkapi dengan kecanggihan teknologi yang bisa memudahkan pekerjaan kita sehari-hari. Mulai dari mobil pintar (smart car) yang bisa jalan sendiri ke berbagai tujuan tanpa pengemudi manusia, hingga mesin pintar semacam Alexa yang bisa bersuara mengingatkan Anda untuk melakukan ini-itu sesuai jadwal. Seluruh teknologi terbaru ini adalah bagian dari Internet of Things.</p>\r\n\r\n<h2>Apa itu Internet of Things?</h2>\r\n\r\n<p>Internet of Things adalah suatu konsep dimana objek tertentu punya kemampuan untuk mentransfer data lewat jaringan tanpa memerlukan adanya interaksi dari manusia ke manusia ataupun dari manusia ke perangkat komputer.</p>\r\n\r\n<p>Internet of Things leih sering disebut dengan singkatannya yaitu IoT. IoT ini sudah berkembang pesat mulai dari konvergensi teknologi nirkabel, micro-electromechanical systems (MEMS), dan juga Internet.</p>\r\n\r\n<p>IoT ini juga kerap diidentifikasikan dengan RFID sebagai metode komunikasi. Walaupun begitu, IoT juga bisa mencakup teknologi-teknologi sensor lainnya, semacam teknologi nirkabel maupun kode QR yang sering kita temukan di sekitar kita.</p>\r\n\r\n<p>Apa saja kemampuan dari IoT? Adapun kemampuannya bermacam-macam contohnya dalam berbagi data, menjadi remote control, dan masih banyak lagi yang lainnya. Sebenarnya fungsinya termasuk juga diterapkan ke benda yang ada di dunia nyata, di sekitar kita. Apa saja contohnya? Contohnya adalah untuk pengolahan bahan pangan, elektronik, dan berbagai mesin atau teknologi lainnya yang semuanya tersambung ke jaringan lokal maupun global lewat sensor yang tertanam dan selalu menyala aktif.</p>\r\n\r\n<p>Jadi, sederhananya istilah Internet of Things ini mengacu pada mesin atau alat yang bisa diidentifikasikan sebagai representasi virtual dalam strukturnya yang berbasis Internet.</p>\r\n\r\n<h2>Cara Kerja Internet of Things</h2>\r\n\r\n<p>Cara Kerja Internet of Things itu seperti apa? Sebenarnya IoT bekerja dengan memanfaatkan suatu argumentasi pemrograman, dimana tiap-tiap perintah argumen tersebut bisa menghasilkan suatu interaksi antar mesin yang telah terhubung secara otomatis tanpa campur tangan manusia dan tanpa terbatas jarak berapapun jauhnya.</p>\r\n\r\n<p>Jadi, Internet di sini menjadi penghubung antara kedua interaksi mesin tersebut. Lalu di mana campur tangan manusia? Manusia dalam IoT tugasnya hanyalah menjadi pengatur dan pengawas dari mesin-mesin yang bekerja secara langsung tersebut.</p>\r\n\r\n<p>Adapun tantangan terbesar yang bisa menjadi hambatan dalam mengkonfigurasi IoT adalah bagaimana menyusun jaringan komunikasinya sendiri. Mengapa itu menjadi sulit dan problematik? Ini sebenarnya dikarenakan jaringannya sangatlah kompleks. Selain itu, IoT juga sesungguhnya sangat perlu suatu sistem keamanan yang cukup ketat. Disamping masalah tersebut, biaya pengembangan IoT yang mahal juga sering menjadi penyebab kegagalannya. Ujung-ujungnya, pembuatan dan pengembangannya bisa berakhir gagal produksi.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/ckeditor/uploads/ioo.jpg\" style=\"height:214px; width:321px\" /></p>\r\n', 'Irman Jaya Kevin', '2020-09-23 16:11:02', '2020-09-23 16:11:02', '1600895462_603c05a625ccc8df4f78.jpg'),
(29, 'Artificial Intelligence', '<h2>Sejarah Kecerdasan Buatan</h2>\r\n\r\n<p>Istilah kecerdasan buatan diciptakan pada tahun 1956, tetapi AI telah menjadi kian populer saat ini berkat peningkatan volume data, algoritme canggih, dan peningkatan daya serta penyimpanan komputasi.</p>\r\n\r\n<p>Riset AI awal pada tahun 1950-an mengeksplorasi topik-topik seperti penyelesaian masalah dan metode simbolik. Pada tahun 1960-an, Departemen Pertahanan AS menaruh minat terhadap jenis pekerjaan ini dan mulai melatih komputer-komputer untuk menirukan penalaran manusia yang mendasar. Misalnya, Defense Advanced Research Projects Agency (DARPA) menyelesaikan proyek pemetaan jalan pada tahun 1970-an. Dan DARPA menghasilkan asisten pribadi cerdas pada tahun 2003, jauh sebelum Siri, Alexa atau Cortana diberi nama.</p>\r\n\r\n<p>Pekerjaan awal ini membuka jalan bagi otomatisasi dan penalaran formal yang kita lihat di komputer saat ini, termasuk sistem pendukung keputusan dan sistem pencarian pintar yang dapat dirancang untuk melengkapi serta meningkatkan kemampuan manusia.</p>\r\n\r\n<p>Sementara film-film Hollywood dan novel fiksi ilmiah menggambarkan AI sebagai robot mirip manusia yang mengambil alih dunia, evolusi teknologi AI saat ini tidak begitu menakutkan &ndash; atau cukup pintar. Sebaliknya, AI telah berevolusi untuk memberikan banyak manfaat spesifik di setiap industri. Teruslah membaca tentang contoh modern kecerdasan buatan dalam perawatan kesehatan, retail, dan lainnya.</p>\r\n', 'Irman Jaya Kevin Tan', '2020-09-23 16:12:35', '2020-09-23 16:12:35', '1600895555_424916b3334087d60172.png'),
(30, 'Technopreneur', '<h2>Pengertian&nbsp;<em>Technopreneurship</em></h2>\r\n\r\n<blockquote>\r\n<p>Technopreneurship adalah usaha untuk &nbsp;memulai dan mengembangkan perusahaan teknologi yang memanfaatkan perkembangan teknologi dan akan memberikan dampak yang besar kepada dunia.</p>\r\n</blockquote>\r\n\r\n<p>Orang-orang yang berusaha memulai dan mengembangkan perusahaan berbasis teknologi disebut technopreneur. Jadi, Mark Zukcerberg, Wiliam Tanuwijaya, dan Bill Gates adalah beberapa contoh dari technopreneur yang berhasil.</p>\r\n\r\n<h2><em>Enterpreneur</em>&nbsp;VS<em>&nbsp;Technopreneur</em></h2>\r\n\r\n<p>Perbedaan yang paling mendasar antara Entrepeneur dengan Technopreneur yaitu :</p>\r\n\r\n<ul>\r\n	<li>Technopreneur tidak hanya menjual barang komoditas maupun industry yang persaingannya relatif sangat ketat.</li>\r\n	<li>Mereka menjua produk yang mampu menjadi substitusi maupun komplemen dalam kemajuan peradaban manusia.</li>\r\n</ul>\r\n', 'Kevin\'s Kirito', '2020-09-23 16:14:37', '2020-09-23 16:14:37', '1600895677_93645efadacc30958514.jpg'),
(31, 'Sistem Tertanam', '<p><br />\r\n<strong><span style=\"color:#c23b3b\"><span style=\"font-size:medium\">Pengertian Embedded System</span></span></strong><br />\r\n<span style=\"font-size:14px\"><span style=\"color:#3a3a3a\"><span style=\"font-family:&quot;Open Sans&quot;,sans-serif\"><span style=\"background-color:#e1e1e1\">Embedded system atau sistem tertanam merupakan sistem komputer khusus yang dirancang untuk menjalankan tugas tertentu dan biasanya sistem tersebut tertanam dalam satu kesatuan sistem. Sistem ini menjadi bagian dari keseluruhan sistem yang terdiri atas mekanik dan perangkat keras lainnya. Bidang embedded system mencakup penguasaan perangkat keras (hardware). Sistem embedded merupakan sebuah sistem (rangkaian elektronika) digital yang merupakan bagian dari sebuah sistem yang lebih besar, yang biasanya bukan berupa sistem elektronika. Kata embedded menunjukkan bagian yang tidak dapat berdiri sendiri. Berbeda dengan sistem digital yang didesain untuk general purpose. Embedded system biasanya diimplementasikan dengan menggunakan mikrokontroler, sistem embedded dapat memberikan respon yang sifatnya real time dan banyak digunakan pada peralatan digital, seperti jam tangan.Embedded system adalah sistem dengan ciri-ciri sebagai berikut :</span></span></span></span></p>\r\n\r\n<ol>\r\n	<li>Mempunyai computing power. Dengan kata lain dilengkapi dengan sebuah processor</li>\r\n	<li>Bekerja di lingkungan luar ruangan IT. Jadi kemungkinan besar tidak dilengkapi dengan AC dan menghadapi gangguan dari luar seperti getaran dan debu.</li>\r\n	<li>Memiliki tugas yang spesifik. Beda dengan PC atau Server yang relatif lebih multi purpose.</li>\r\n</ol>\r\n', 'Kevin', '2020-09-23 16:15:49', '2020-09-23 16:15:49', '1600895749_aa81dc4a42563bc5e628.jpg'),
(32, 'Pemograman Web', '<h3>PENGERTIAN PEMROGRAMAN WEB</h3>\r\n\r\n<p><strong>Pemrograman web diambil dari 2 suku kata yaitu pemrograman dan web</strong>. Pemrograman yang dalam bahasa English adalah programming dan diartikan proses, cara, perbuatan program.</p>\r\n\r\n<p><strong>Definisi Web</strong>&nbsp;: jaringan komputer yang terdiri dari kumpulan situs internet yang menawarkan teks dan grafik dan suara dan sumber daya animasi melalui protokol transfer&nbsp;hypertext.</p>\r\n\r\n<p>Orang banyak mengenal web dengan istilah WWW (world wide web),&nbsp;<strong>World Wide Web</strong>&nbsp;adalah layanan internet yang paling populer saat ini internet mulai dikenal dan digunakan secara luas setelah adanya layanan WWW .&nbsp;<strong>WWW&nbsp;</strong>adalah halaman-halaman website yang dapat saling terkoneksi satu dengan lainnya (hyperlink) yang membentuk samudra belantara informasi . WWW berjalan dengan protokol HyperText Transfer Protokol (HTTP). Halaman Web merupakan file teks murni (plain text) yang berisi sintaks-sintaks HTML yang dapat dibuka/ dilihat/ diterjemahkan dengan Internet Browser . Sintaks HTML mampu memuat konten text, gambar, audio, video dan animasi. Kini internet identik dengan web, karena kepopuleran web sebagai standar interface pada lanyanan-layanan yang ada di internet, dari awalnya sebagai penyedia informasi, ini digunakan juga untuk komunikasi dari email sampai dengan chatting, sampai dengan melakukan transaksi binsin (commerce) (Betha Sidik,Ir, Pemrograman web dengan HTML, Informatika Bandung, 2005) Banyak keuntungan yang diberikan oleh Aplikasi berbasis Web dari pada aplikasi berbasis destop, sehingga aplikasi berbasis web telah diadopsi oleh perusahaan sebagai bagian dari strategi teknologi informasinya, karena beberapa alasan&nbsp;:</p>\r\n\r\n<p>Akses informasi mudah,</p>\r\n\r\n<ol>\r\n	<li>Baris isi</li>\r\n</ol>\r\n\r\n<p>Setup server lebih mudah</p>\r\n\r\n<ol>\r\n	<li>Baris isi</li>\r\n</ol>\r\n\r\n<p>Informasi mudah didistribusikan</p>\r\n\r\n<ol>\r\n	<li>Baris isi</li>\r\n</ol>\r\n\r\n<p>Bebas platform, informasi dapat di sajikan oleh browser web pada sistem operasi mana saja karena adanya standar dokumen berbagai tipe data dapat disajikan</p>\r\n\r\n<ol>\r\n	<li>Baris isi</li>\r\n</ol>\r\n\r\n<p>HTTP</p>\r\n\r\n<p>HTTP (HyperTextTransfer Protocol) adalah protokol yang dipergunakan untuk mentransfer dokumen dalam World Wide Web(WWW). Protokol ini adalah protokol ringan, tidak berstatus dan generik yang dapat dipergunakan berbagai macam tipe dokumen. Pengembangan HTTP dikoordinasi oleh Konsorsium World Wide Web(W3C) dan grup bekerja Internet Engineering Task Force(IETF), bekerja dalam publikasi satu seri RFC, yang paling terkenal&nbsp;RFC 2616, yang menjelaskan HTTP/1,1, versti HTTP yang digunakan umum sekarang ini. HTTP adalah sebuah protokol meminta/menjawab antara clientdan server. Sebuh client HTTP seperti web browser, biasanya memulai permintaan dengan membuat hubungan TCP/IPke porttertentu di tuan rumah yang jauh (biasanya port 80). Sebuah server HTTP yang mendengarkan diport tersebut menunggu client mengirim kode permintaan (request), seperti &ldquo;GET / HTTP/1.1&rdquo; (yang akan meminta halaman yang sudah ditentukan), diikuti dengan pesan MIMEyang memiliki beberapa informasi kode kepala yang menjelaskan aspek dari permintaan tersebut, diikut dengan badan dari data tertentu. Beberapa kepala (header) juga bebas ditulis atau tidak, sementara lainnya (seperti tuan rumah) diperlukan oleh protokol HTTP/1,1. Begitu menerima kode permintaan (dan pesan, bila ada), server mengirim kembali kode jawaban, seperti &ldquo;200 OK&rdquo;, dan sebuah pesan yang diminta, atau sebuah pesan error atau pesan lainnya.</p>\r\n\r\n<p><strong>Sejarah</strong>&nbsp;Protokol HTTP pertama kali dipergunakan dalam WWW pada tahun 1990. Pada saat tersebut yang dipakai adalah protokol HTTP versi 0.9. Versi 0.9 ini adalah protokol transfer dokumen secara mentah, maksudnya adalah data dokumen dikirim sesuai dengan isi dari dokumen tersebut tanpa memandang tipe dari dokumen. Kemudian pada tahun 1996 protokol HTTP diperbaiki menjadi HTTP versi 1.0. Perubahan ini untuk mengakomodasi tipe-tipe dokumen yang hendak dikirim beserta enkoding yang dipergunakan dalam pengiriman data dokumen. Sesuai dengan perkembangan infrastruktur internet maka pada tahun 1999 dikeluarkan HTTP versi 1.1 untuk mengakomodasi proxy, cache dan koneksi yang persisten.</p>\r\n\r\n<p>PERBEDAAN WEB 1.0, WEB 2.0 dan WEB 3.0<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>Web 1.0</strong><br />\r\nMerupakan teknologi Web generasi pertama yang merupakan revolusi baru di dunia Internet karena telah mengubah cara kerja dunia industri dan media. Pada dasarnya, Website yang dibangun pada generasi pertama ini secara umum dikembangkan untuk pengaksesan informasi dan memiliki sifat yang sedikit interaktif. Berbagai Website seperti situs berita &ldquo;cnn.com&rdquo; atau situs belanja &ldquo;Bhinneka.com&rdquo; dapat dikategorikan ke dalam jenis ini.</p>\r\n\r\n<p><strong>Web 2.0</strong><br />\r\nWeb 2.0 Istilah Web 2.0 pertama kalinya diperkenalkan oleh O&rsquo;Reilly Media pada tahun 2004 sebagai teknologi Web generasi kedua yang mengedepankan kolaborasi dan sharing informasi secara online. Menurut Tim O&rsquo;Reilly, Web 2.0 dapat didefinisikan sebagai berikut: &ldquo;Web 2.0 adalah revolusi bisnis di industri komputer yang disebabkan oleh penggunaan internet sebagai platform, dan merupakan suatu percobaan untuk memahami berbagai aturan untuk mencapai keberhasilan pada platform baru tersebut. Salah satu aturan terutama adalah: Membangun aplikasi yang mengeksploitasi efek jaringan untuk mendapatkan lebih banyak lagi pengguna aplikasi tersebut&rdquo; Berbagai layanan berbasis web seperti jejaring sosial, wiki dan folksonomies (misalnya: &ldquo;flickr.com&rdquo;, &ldquo;del.icio.us&rdquo;) merupakan teknologi Web 2.0 yang menambah interaktifitas di antara para pengguna Web.</p>\r\n\r\n<p><strong>Web 3.0 / Semantic Web</strong><br />\r\nWaaupun masih dalam perdebatan di kalangan analis dan peneliti, istilah Web 3.0 tetap berpotensi menjadi generasi teknologi di dunia Internet. Saat ini, definisi untuk Web 3.0 sangat beragam mulai dari pengaksesan broadband secara mobile sampai kepada layanan Web berisikan perangkat lunak bersifat on-demand [Joh07]. Namun, menurut John Markoff, Web 3.0 adalah sekumpulan teknologi yang menawarkan cara baru yang efisien dalam membantu komputer mengorganisasi dan menarik kesimpulan dari data online. Berdasarkan definisi yang dikemukakan tersebut, maka pada dasarnya Semantic Web memiliki tujuan yang sama karena Semantic Web memiliki isi Web yang tidak dapat hanya diekpresikan di dalam bahasa alami yang dimengerti manusia, tetapi juga di dalam bentuk yang dapat dimengerti, diinterpretasi dan digunakan oleh perangkat lunak (software agents). Melalui Semantic Web inilah, berbagai perangkat lunak akan mampu mencari, membagi, dan mengintegrasikan informasi dengan cara yang lebih mudah [Tim01]. Pembuatan Semantic Web dimungkinkan dengan adanya sekumpulan standar yang dikoordinasi oleh World Wide Web Consortium (W3C). Standar yang paling penting dalam membangun Semantic Web adalah XML, XML Schema, RDF, OWL, dan SPARQL.</p>\r\n\r\n<pre>\r\n   Mungkin ini beberapa referensi ciri khas dari web 3.0 \r\n      &bull; Transformation dari tmp penyimpanan yang bersifat terpisah pisah menjadi satu.\r\n      &bull; Ubiquitous connectivity, memungkinkan info diakses di berbagai media.\r\n      &bull; Network computing, software-as-a-service business models, Web services interoperability, distributed computing, grid computing and  \r\n        cloud computing;\r\n      &bull; Open technologies, sebagian besar semuanya berjalan dalam platform open source / free.\r\n      &bull; Open identity, OpenID, seluruh info adalah bebas dan sebebas &ndash; bebasnya.\r\n      &bull; The intelligent web, Semantic Web technologies such as RDF, OWL, SWRL, SPARQL, GRDDL, semantic application platforms, and statement- \r\n        based datastores;\r\n      &bull; Distributed databases, database terdistribusi dalam WWD ( World Wide Database ).\r\n      &bull; Intelligent applications.</pre>\r\n', 'Jaya Kevin', '2020-09-23 16:17:28', '2020-09-23 16:17:28', '1600895848_481f2ea43181ccedce35.jpg'),
(33, 'Apa itu arduino?', '<p>The Ultimate Arduino Microcontroller Kit&nbsp;includes almost everything you need to dive right into the world of microcontrollers. The 100+ components allow you to complete nearly any online tutorial without having to source individual parts. Everyone from beginners to advanced users will appreciate all that the Ultimate Arduino Microcontroller Pack has to offer. This really is the ultimate parts assortment!<img alt=\"\" src=\"http://localhost:8080/ckeditor/uploads/images.jpg\" style=\"height:183px; width:276px\" /></p>\r\n', 'Irwansyah', '2020-09-24 04:35:25', '2020-09-24 04:35:25', '1600940125_109f82af88ad0f4c3757.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `banksoal`
--

CREATE TABLE `banksoal` (
  `no` int(255) NOT NULL,
  `soal` text NOT NULL,
  `tipe` varchar(5) NOT NULL,
  `materi` varchar(30) NOT NULL,
  `level` int(3) NOT NULL,
  `a` varchar(30) NOT NULL,
  `b` varchar(30) DEFAULT NULL,
  `c` varchar(30) DEFAULT NULL,
  `d` varchar(30) DEFAULT NULL,
  `kunci` varchar(30) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banksoal`
--

INSERT INTO `banksoal` (`no`, `soal`, `tipe`, `materi`, `level`, `a`, `b`, `c`, `d`, `kunci`, `created_at`, `updated_at`) VALUES
(1, '<p>Sebuah segitiga dengan panjang sisi-sisi tegaknya 3 cm dan 4 cm. Berapakah panjang sisi miringnya?</p>\r\n', 'pg', 'Pythagoras', 1, '5 cm', '6 cm', '7 cm', '8 cm', '5 cm', '2020-10-25 03:03:56', '2020-10-25 03:03:56'),
(2, '<p>Panjang sisi miring sebuah segitiga siku-siku adalah 5 cm. Berapakah panjang sisi tegaknya jika diketahui juga panjang sisi tegak lainnya adalah 3 cm.</p>\r\n', 'pg', 'Pythagoras', 2, '4 cm', '6 cm', '8 cm', '10 cm', '4 cm', '2020-10-25 03:09:30', '2020-10-25 03:09:30'),
(3, '<p>Panjang sisi miring sebuah segitiga siku-siku adalah 10 cm. Berapakah panjang sisi tegaknya jika diketahui juga panjang sisi tegak lainnya adalah 6 cm.</p>\r\n', 'pg', 'Pythagoras', 2, '3 cm', '4 cm', '7 cm', '8 cm', '8 cm', '2020-10-25 03:11:53', '2020-10-25 03:11:53'),
(4, '<p>Tentukan titik potong antara garis y = 3x + 2 dan y = 2x - 7.</p>\r\n', 'pg', 'Persamaan Linear Dua Variabel', 2, '(2,3)', '(-1,5)', '(4,3)', '(5,1)', '(5,1)', '2020-10-25 08:49:30', '2020-10-25 08:49:30'),
(5, '<p>Diketahui barisan 1, 2, 4, 7, 11, ... . Suku ke-6 dari barisan tersebut adalah...</p>\r\n', 'pg', 'Barisan dan Deret', 1, '16', '22', '29', '37', '16', '2020-10-25 10:31:24', '2020-10-25 10:31:24'),
(6, '<p>Diketahui barisan 1, 2, 4, 7, 11, ... . Suku ke-6 dari barisan tersebut adalah...</p>\r\n', 'pg', 'Barisan dan Deret', 1, '16', '22', '29', '37', '16', '2020-10-25 10:32:25', '2020-10-25 10:32:25'),
(7, '<p>Diketahui barisan 1, 2, 4, 7, 11, ... . Suku ke-6 dari barisan tersebut adalah...</p>\r\n', 'pg', 'Barisan dan Deret', 1, '16', '22', '29', '37', '16', '2020-10-25 10:32:44', '2020-10-25 10:32:44'),
(8, '<p>Berapakah peluang muncul mata dadu berjumlah lebih besar dari 5 dari pelemparan dua buah dadu?</p>\r\n', 'pg', 'Peluang', 3, '1/2', '12/25', '11/20', '13/18', '13/18', '2020-10-25 10:40:05', '2020-10-25 10:40:05'),
(9, '<p>Tentukan akar-akar dari persamaan kuadrat x<sup>2&nbsp;</sup>- 5x + 6 = 0.</p>\r\n', 'pg', 'Persamaan Kuadrat', 1, 'x = 2 dan x = 3', 'x = -2 dan x = 3', 'x = 2 dan x = -3', 'x = -2 dan x = -3', 'x = 2 dan x = 3', '2020-10-25 11:39:28', '2020-10-25 11:39:28');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `NIK` varchar(20) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `jk` varchar(1) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  `alamat` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`NIK`, `nama`, `jk`, `tanggal_lahir`, `tempat_lahir`, `alamat`) VALUES
('G123451', 'Irdianto', 'L', '1987-08-23', 'Ngabang', 'Jl.Pasar Lama'),
('G123452', 'Irmawan', 'L', '1988-09-02', 'Ngabang', 'Jl.Plasma 2'),
('G123453', 'Irwansyah', 'L', '1989-09-01', 'Ngabang', 'Jl.BTN'),
('G123454', 'Irlandi', 'L', '1993-06-11', 'Ngabang', 'Jl.Pontianak'),
('G123455', 'Irman Jaya Kevin', 'L', '2000-12-01', 'Ngabang', 'Jl.Pasar Lama');

-- --------------------------------------------------------

--
-- Table structure for table `join_activity`
--

CREATE TABLE `join_activity` (
  `no` int(255) NOT NULL,
  `token` varchar(20) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nilai` int(10) NOT NULL,
  `sisa_waktu` int(20) NOT NULL,
  `no_soal` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `join_activity`
--

INSERT INTO `join_activity` (`no`, `token`, `nim`, `nilai`, `sisa_waktu`, `no_soal`) VALUES
(1, '123asd', '36156', 20, 0, 1),
(2, '123asd', '36156', 20, 0, 1),
(3, '123asd', '36156', 20, 0, 5),
(4, '123asd', '36156', 20, 0, 2),
(5, '123asd', '36156', 20, 0, 8),
(6, '123asd', '36156', 20, 0, 9),
(7, '123qwe', '36156', 50, 0, 8),
(8, '123qwe', '36156', 50, 0, 9),
(9, '123qwe', '36156', 50, 0, 8),
(10, '123qwe', '36156', 0, 0, 9),
(11, '123asd', '36156', 20, 0, 1),
(12, '123asd', '36156', 20, 0, 5),
(13, '123asd', '36156', 20, 0, 2),
(14, '123asd', '36156', 20, 0, 8),
(15, '123asd', '36156', 20, 0, 9);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(2) NOT NULL,
  `nama_jurusan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'IPA'),
(2, 'IPS');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(1) DEFAULT NULL,
  `id_jurusan` int(2) DEFAULT NULL,
  `NIK` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`, `id_jurusan`, `NIK`) VALUES
(1, 'A', 1, 'G123451'),
(2, 'B', 1, 'G123452'),
(3, 'A', 2, 'G123454'),
(4, 'B', 2, 'G123455');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id` varchar(10) NOT NULL,
  `nama_mp` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id`, `nama_mp`) VALUES
('.', '.'),
('M1', 'Matematika'),
('M2', 'Ilmu Pengetahuan Alam'),
('M3', 'Ilmu Pengetahuan Sosial'),
('M4', 'Akuntasi'),
('M5', 'Bahasa Indonesia'),
('M6', 'Sejarah');

-- --------------------------------------------------------

--
-- Table structure for table `semua`
--

CREATE TABLE `semua` (
  `no` int(11) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_mp` varchar(10) DEFAULT NULL,
  `NIK` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semua`
--

INSERT INTO `semua` (`no`, `id_kelas`, `id_mp`, `NIK`) VALUES
(1, 1, 'M1', 'G123453'),
(2, 1, 'M2', 'G123452'),
(3, 1, 'M5', 'G123455');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nim` varchar(20) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `jk` varchar(1) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `alamat` varchar(40) DEFAULT NULL,
  `tahun_masuk` date DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nim`, `nama`, `jk`, `tanggal_lahir`, `tempat_lahir`, `alamat`, `tahun_masuk`, `id_kelas`) VALUES
('D1041181001', 'Wei Hao', 'L', '2004-11-05', 'SIngkawang', 'Jl.Pasar Baru', '2020-08-04', 1),
('D1041181002', 'Ming Hao', 'L', '2004-12-05', 'Pontianak', 'Jl.Jalur 2', '2020-08-04', 1),
('D1041181003', 'Angel', 'P', '2004-05-12', 'Sambas', 'Jl.Setia Budi', '2020-08-04', 2),
('D1041181004', 'Jun Hao', 'L', '2004-07-12', 'Mempawah', 'Jl.Hijjas', '2020-08-04', 3),
('D1041181020', 'Zilong', 'L', '2004-08-11', 'China', 'Wuhan', '2020-08-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stat`
--

CREATE TABLE `stat` (
  `id_status` int(1) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stat`
--

INSERT INTO `stat` (`id_status`, `status`) VALUES
(0, 'SISWA'),
(1, 'GURU'),
(2, 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `nimnik` varchar(30) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `status`, `nimnik`, `image`, `created_at`, `updated_at`) VALUES
(10000, 'Awan', 'awan@gmail.com', 'jjgg', 1, '', NULL, NULL, NULL),
(10001, 'Ati', 'ati@gmail.com', 'asdasd', 1, '', NULL, NULL, NULL),
(10002, 'Kevin', 'kevinskirito@gmail.com', '9d5e3ecdeb4cdb7acfd63075ae046672', 0, '', NULL, NULL, NULL),
(10452, 'asdas', 'asdas@gmail.com', 'c44a471bd78cc6c2fea32b9fe028d30a', 1, 'G123451', NULL, '2020-10-28 07:14:32', '2020-10-28 07:14:32'),
(12090, 'admm', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 2, '', '1603532338_2110d5d624d17405a225.jpg', '2020-07-29 12:21:25', '2020-10-24 04:38:58'),
(19336, 'Tamukk', 'tamukk@gmail.com', 'f139a62bbf523591969c10b7249d5170', 1, '', NULL, NULL, NULL),
(24519, 'Irman JJ', 'irmanjaya@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 1, '', NULL, '2020-08-19 12:29:23', '2020-08-19 12:29:23'),
(25998, 'asd', 'asddd@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 1, '', NULL, '2020-08-19 12:08:30', '2020-08-19 12:08:30'),
(27438, 'testamuk', 'tamuk@gmail.com', '8a510017d3d8aed15372f009e77c39a8', 1, '', NULL, NULL, NULL),
(36156, 'KMM', 'kmm@gmail.com', '38ddb59ec1777cf0ea94428bcb71f881', 1, '', '1596288696_5d17e711cf4a1e149bb3.jpg', NULL, '2020-08-01 08:31:36'),
(36703, 'asdaa', 'asdaaaa@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 1, '', NULL, '2020-08-19 12:19:51', '2020-08-19 12:19:51'),
(36943, 'Irman JKK', 'irmanjkk@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 1, 'G123455', NULL, '2020-08-19 12:33:36', '2020-08-19 12:33:36'),
(41187, 'vik', 'vik@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 0, '', NULL, '2020-08-19 11:54:31', '2020-08-19 11:54:31'),
(56918, 'Namson', 'namson@gmail.com', 'b620d99f8c9f1160ca02', 1, '', NULL, NULL, NULL),
(68930, 'Sibut', 'sibut@gmail.com', 'a3dcb4d229de6fde0db5686dee47145d', 1, '', NULL, NULL, NULL),
(73524, 'KKKK', 'kkkkk@gmail.com', '23fd6066097b766defcb9520c9a51e84', 1, '', NULL, NULL, NULL),
(75126, 'asdasd', 'irmanaaa@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 1, '', NULL, '2020-08-19 12:28:24', '2020-08-19 12:28:24'),
(76288, 'Jun', 'jun@gmail.com', '22d424f309c391d7a2c2f25fbdfb70ea', 0, 'D1041181004', NULL, '2020-08-31 07:39:48', '2020-08-31 07:39:48'),
(76520, 'Angel', 'angel@gmail.com', '22d424f309c391d7a2c2f25fbdfb70ea', 0, 'D1041181003', NULL, '2020-08-31 07:23:23', '2020-08-31 07:23:23'),
(78098, 'Irman Jaya Kevin', 'irman@gmail.com', '22d424f309c391d7a2c2f25fbdfb70ea', 0, 'D1041181020', '1596288261_576be0d022ae25e0cb99.jpg', NULL, '2020-08-01 08:24:21'),
(81187, 'namss', 'namsss@gmail.com', '640098f2bb5d7a13d861f8a7195fe75e', 1, '', '', NULL, NULL),
(85982, 'asdsad', 'asdassss@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 0, '', NULL, '2020-08-19 12:31:57', '2020-08-19 12:31:57'),
(87960, 'Kamukk', 'kamuk@gmail.com', 'cb07719cff4a5297673deb950b73ec1d', 1, '', NULL, NULL, NULL),
(90959, 'asd', 'asdddd@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 1, '', NULL, '2020-08-19 12:10:33', '2020-08-19 12:10:33'),
(99078, 'asdsadas', 'asdddddd@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 1, '', NULL, '2020-08-19 12:11:08', '2020-08-19 12:11:08');

-- --------------------------------------------------------

--
-- Table structure for table `utama`
--

CREATE TABLE `utama` (
  `no` int(11) NOT NULL,
  `jam` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `senin` varchar(10) DEFAULT NULL,
  `selasa` varchar(10) DEFAULT NULL,
  `rabu` varchar(10) DEFAULT NULL,
  `kamis` varchar(10) DEFAULT NULL,
  `jumat` varchar(10) DEFAULT NULL,
  `sabtu` varchar(10) DEFAULT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utama`
--

INSERT INTO `utama` (`no`, `jam`, `jam_selesai`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `sabtu`, `id_kelas`) VALUES
(1, '07:00:00', '09:00:00', 'M1', '.', '.', '.', '.', '.', 4),
(2, '07:00:00', '09:00:00', 'M2', '.', '.', '.', '.', '.', 4),
(3, '07:00:00', '09:00:00', 'M3', '.', '.', '.', '.', '.', 1),
(4, '07:00:00', '09:00:00', 'M4', '.', '.', '.', '.', 'M1', 2),
(5, '07:00:00', '09:00:00', '.', '.', '.', 'M1', '.', '.', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banksoal`
--
ALTER TABLE `banksoal`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `join_activity`
--
ALTER TABLE `join_activity`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_jurusan` (`id_jurusan`),
  ADD KEY `kelas_ibfk_1` (`NIK`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semua`
--
ALTER TABLE `semua`
  ADD PRIMARY KEY (`no`),
  ADD KEY `NIK` (`NIK`),
  ADD KEY `semua_ibfk_1` (`id_mp`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `stat`
--
ALTER TABLE `stat`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `utama`
--
ALTER TABLE `utama`
  ADD PRIMARY KEY (`no`),
  ADD KEY `senin` (`senin`),
  ADD KEY `selasa` (`selasa`),
  ADD KEY `rabu` (`rabu`),
  ADD KEY `kamis` (`kamis`),
  ADD KEY `jumat` (`jumat`),
  ADD KEY `sabtu` (`sabtu`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `banksoal`
--
ALTER TABLE `banksoal`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `join_activity`
--
ALTER TABLE `join_activity`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `semua`
--
ALTER TABLE `semua`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `utama`
--
ALTER TABLE `utama`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `guru` (`NIK`);

--
-- Constraints for table `semua`
--
ALTER TABLE `semua`
  ADD CONSTRAINT `semua_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`status`) REFERENCES `stat` (`id_status`);

--
-- Constraints for table `utama`
--
ALTER TABLE `utama`
  ADD CONSTRAINT `utama_ibfk_1` FOREIGN KEY (`senin`) REFERENCES `mata_pelajaran` (`id`),
  ADD CONSTRAINT `utama_ibfk_2` FOREIGN KEY (`selasa`) REFERENCES `mata_pelajaran` (`id`),
  ADD CONSTRAINT `utama_ibfk_3` FOREIGN KEY (`rabu`) REFERENCES `mata_pelajaran` (`id`),
  ADD CONSTRAINT `utama_ibfk_4` FOREIGN KEY (`kamis`) REFERENCES `mata_pelajaran` (`id`),
  ADD CONSTRAINT `utama_ibfk_5` FOREIGN KEY (`jumat`) REFERENCES `mata_pelajaran` (`id`),
  ADD CONSTRAINT `utama_ibfk_6` FOREIGN KEY (`sabtu`) REFERENCES `mata_pelajaran` (`id`),
  ADD CONSTRAINT `utama_ibfk_7` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
