-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2015 at 03:33 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `riky_ab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `login_username` varchar(30) NOT NULL,
  `login_password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`login_username`, `login_password`) VALUES
('admin', 'c08953d8fcbb6a084e4ec2fb2f3eb5c3'),
('riky_ab', 'c08953d8fcbb6a084e4ec2fb2f3eb5c3'),
('admin', 'c08953d8fcbb6a084e4ec2fb2f3eb5c3'),
('riky_ab', 'c08953d8fcbb6a084e4ec2fb2f3eb5c3');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id_artikel` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `isi_artikel` text NOT NULL,
  `tgl_posting` date NOT NULL,
  `waktu` time NOT NULL,
  `tumbnail` text NOT NULL,
  `dibaca` int(11) NOT NULL,
  PRIMARY KEY (`id_artikel`),
  KEY `id_user` (`id_kategori`),
  KEY `id_kategori` (`id_kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `id_kategori`, `isi_artikel`, `tgl_posting`, `waktu`, `tumbnail`, `dibaca`) VALUES
(31, 'Penyidik Bareskrim Periksa Amir Syamsuddin Terkait Dugaan Korupsi', 4, 'JAKARTA, KOMPAS.com — Penyidik Bareskrim Polri memeriksa mantan Menteri Hukum dan Hak Asasi Manusia Amir Syamsuddin, Selasa (3/3/2015). Amir diperiksa sebagai saksi kasus dugaan korupsi sistem pembayaran online (payment gateway) dalam fasilitas pelayanan publik ketika dirinya masih menjabat menteri.\r\n\r\n"Saya diperiksa sekitar dua jam, dari pukul 16.00 WIB sampai 18.00 WIB," ujar Amir seusai proses pemeriksaan, Selasa petang.\r\n\r\nAmir mengaku lupa berapa pertanyaan yang diajukan kepadanya. Namun, Amir mengaku menjelaskan apa yang dia ketahui soal kasus tersebut. Amir pun mengatakan, keterangan yang diberikan tidak menyasar kepada orang-orang tertentu, termasuk mantan Wamenkumham Denny Indrayana, yang berstatus sebagai terlapor dalam kasus itu.\r\n\r\n"Saya klarifikasi mengenai payment gateway. Sistem ini bisa mengatasi pelayanan publik dan meminimalisasi keluhan masyarakat. Sistem ini mengatasi kelambanan pelayanan pembuatan paspor dan lain-lain," lanjut Amir.\r\n\r\nKabag Penum Divisi Humas Polri Kombes Rikwanto mengatakan, kasus itu dilaporkan pertama kali oleh Syamsul Rizal pada 10 Februari 2015. Pelaporan tersebut menyebutkan bahwa Denny Indrayana sebagai terlapor. Kasus itu diduga merugikan negara sebesar Rp 32 miliar.', '2015-03-04', '07:19:46', '31_1105329780x390.jpg', 7),
(33, 'Penyidik Bareskrim Periksa Amir Syamsuddin Terkait Dugaan Korupsi', 4, 'JAKARTA, KOMPAS.com — Penyidik Bareskrim Polri memeriksa mantan Menteri Hukum dan Hak Asasi Manusia Amir Syamsuddin, Selasa (3/3/2015). Amir diperiksa sebagai saksi kasus dugaan korupsi sistem pembayaran online (payment gateway) dalam fasilitas pelayanan publik ketika dirinya masih menjabat menteri.\r\n\r\n"Saya diperiksa sekitar dua jam, dari pukul 16.00 WIB sampai 18.00 WIB," ujar Amir seusai proses pemeriksaan, Selasa petang.\r\n\r\nAmir mengaku lupa berapa pertanyaan yang diajukan kepadanya. Namun, Amir mengaku menjelaskan apa yang dia ketahui soal kasus tersebut. Amir pun mengatakan, keterangan yang diberikan tidak menyasar kepada orang-orang tertentu, termasuk mantan Wamenkumham Denny Indrayana, yang berstatus sebagai terlapor dalam kasus itu.\r\n\r\n"Saya klarifikasi mengenai payment gateway. Sistem ini bisa mengatasi pelayanan publik dan meminimalisasi keluhan masyarakat. Sistem ini mengatasi kelambanan pelayanan pembuatan paspor dan lain-lain," lanjut Amir.\r\n\r\nKabag Penum Divisi Humas Polri Kombes Rikwanto mengatakan, kasus itu dilaporkan pertama kali oleh Syamsul Rizal pada 10 Februari 2015. Pelaporan tersebut menyebutkan bahwa Denny Indrayana sebagai terlapor. Kasus itu diduga merugikan negara sebesar Rp 32 miliar.', '2015-03-04', '07:19:46', '31_1105329780x390.jpg', 7),
(34, 'Penyidik Bareskrim Periksa Amir Syamsuddin Terkait Dugaan Korupsi', 0, '', '0000-00-00', '00:00:00', '', 0),
(35, 'Bjork Bikin Video Klip dengan Teknologi Virtual', 1, 'Jakarta - Hadirnya teknologi virtual reality nyatanya tak sekedar jadi angin segar bagi industri ICT dan game saja, industri musik pun kena imbas positifnya. \r\n\r\nDalam wawancaranya dengan Fast Company, produser penyanyi sekaligus pengarang lagu papan atas, Bjork berencana untuk merilis video klip terbarunya yang tersedia melalui Oculus Rift.\r\n\r\nBjork yang baru saja merilis versi digital dari album barunya, Vulnicura, ini memang dikenal sebagai penyanyi yang gemar memadukan teknologi dengan gaya bermusiknya.\r\n\r\nMaka tak heran dalam setiap kesempatannya menggelar konser, Bjork kerap menggunakan beragam teknologi canggih, mulai dari lampu laser hingga visual hologram. Begitu pula dengan beberapa video klip yang ia rilis, selalu menampilkan hal-hal yang futuristik.\r\n\r\nTak hanya itu saja, kegemarannya terhadap teknologi juga berlanjut ketika ia merilis album di tahun 2011 lalu. Bukan sekedar album biasa, penyanyi yang terkenal dengan dandanannya yang nyentrik itu merilis album futuristik bertajuk Biophilia yang dirilis dengan bentuk aplikasi di Google Play Store.\r\n\r\nKini, pemilik nama asli Bjork Guomundsdottir ini berencana untuk menggarap video klip lagu terbarunya yang berjudul Stonemilker yang dikatakan tersedia di Oculus Rift. \r\n\r\nSeperti dikutip detikINET dari The Verge, Rabu (4/3/2015), dalam penggarapan videonya, Bjork berkolaborasi dengan sutradara Andrew Thomas Huang. Sayangnya, Bjork belum mau mengatakan kapan video klip canggihnya itu rilis.\r\n', '2015-03-04', '07:19:46', '35_oculus_gettyimages.jpg', 22),
(36, 'Hantu yang Melemahkan KPK', 4, 'Catatan Kaki Jodhi Yudono\n\nSelasa pagi, 3 Maret 2015, pukul 09.00 WIB, halaman Gedung KPK dipenuhi oleh para pegawai KPK yang melakukan unjuk rasa. Mereka meradang karena lembaga tempat mereka bekerja dan mengabdi sudah diacak-acak sedemikian rupa oleh "hantu" yang takut sama Bareskim Polri, sehingga KPK kehilangan jati dirinya sebagai lembaga antikorupsi yang berwibawa.\n\nMereka menolak kebijakan pimpinan KPK atas kasus rekening gendut Komjen Pol Budi Gunawan yang semula ditangani KPK kini dilimpahkan ke Kejaksaan Agung.\n\nMereka berorasi dan mengatakan tidak takut melawan korupsi. "apakah kawan-kawan takut keluarga akan diancam?" tanya seorang orator dikutip dari tayangan langsung Kompas TV. "Kami tidak takut."\n\nMereka bilang, sejak awal masuk ke KPK sudah ditanyakan pertanyaan tersebut dan mereka mengatakan tidak takut dengan ancaman. Para pegawai itu rela mati melawan koruptor.\n\nInilah pemandangan pertama kalinya yang terjadi di gedung Komisi Pemberantasan Korupsi. Satu persatu pegawai KPK bergantian berorasi. Mereka yang mengatasnamakan sebagai Wadah Pegawai KPK membuat barisan di depan gedung.\n\nTampak di antara pegawai adalah Pelaksana Tugas Ketua KPK Taufiequrahman Ruki. \n\nSeperti diberitakan berbagai media, KPK tak lagi mengusut kasus dugaan korupsi Komjen Polisi Budi Gunawan. Selain bukan wewenangnya, kasus tersebut kini sudah dilimpahkan ke Kejaksaan Agung.\n\nRuki pun tak bisa berbuat apa-apa lagi. "Kami KPK terima kalah," ujarnya saat memberikan keterangan pers di KPK, Jakarta, Senin (2/3/2015).\n\nRuki mengingatkan pelimpahan kasus tersebut bukan kiamat bagi KPK. Ia memastikan pemberantasan korupsi harus terus berlanjut dan pihaknya masih mengantongi 36 kasus lainnya untuk diselesaikan.\n\n"Tapi tidak berarti harus menyerah. Masih banyak kasus di tangan kami. Masih ada 36 kasus yang harus diselesaikan. Kalau terfokus pada kasus ini, yang lain jadi terbengkalai," terang pensiunan polisi bintang dua itu.\n\n***\n\nAksi unjuk rasa yang berlangsung sekira 45 menit itu, menurut salah seorang pimpinan KPK Johan Budi, bukanlah kali pertama. "Tapi kali ini memang mendapat perhatian yang besar dari media," terang Budi kepada Kompas TV tanpa menyebut kapan dan untuk tujuan apa unjuk rasa dilakukan sebelumnya.\n\nNamun rasanya, unjuk rasa yang digelar pada Selasa pagi tadi, kian meyakinkan kita, betapa nasib bangsa ini memang benar-benar sudah mengkhawatirkan.\n\nBayangkanlah, para karyawan itu berani memilih jalan yang berbeda dari jalan yang diambil oleh para pimpinan mereka. Alih-alih menurut apa kata para bos yang sehari sebelumnya mengaku takluk karena kasus BG dilimpahkan ke Kejaksaan Agung, para bawahan itu justru menggelar unjuk rasa menentang pemindahan kasus BG. Mereka bahkan menuduh ada hantu yang takut sama Bareskim untuk menengarai mereka yang telah meloloskan kasus BG ke Kejagung.\n\nTak kepalang tanggung, para karyawan itu pun berani menentang ''ancaman'' Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi (PAN-RB) Yuddy Chrisnandi ywng menuding pegawai KPK telah membangkang.\n\n"Dia (Yuddy) siapa? Apa urusan dia dengan KPK?" ujar Penasihat Wadah Pekerja Komisi Pemberantasan Korupsi Nanang Farid Syah menilai, di Gedung KPK, Jakarta, Selasa (3/3/2015).\n\nTerlebih lagi, lanjut Nanang, Yuddy akan mengenakan sanksi kepada para pegawai yang membangkang. Nanang lantas mempertanyakan kapasitas Yuddy untuk memberikan sanksi kepada para pegawai. Apa kapasitas dia memberikan sanksi pada pegawai KPK? Dia paham KPK itu undang-undangnya apa?" kata Nanang. Menurut Nanang, pegawai KPK tidak akan menggubris pernyataan Yuddy. Ia menegaskan, pegawai KPK memang membangkang pada manusia, tetapi tidak dengan kebenaran. "Kami membangkang pada manusia iya, tapi tidak pada kebenaran."\n\nSuara-suara bernada cemas pun bermunculan. Inilah preseden buruk pemberantasan korupsi di negeri ini. Pelemahan terhadap KPK yang berlangsung secara simultan hari ini mendapatkan kemenangan besar. Pukulan telak bagi KPK sudah dimulai sejak hakim Sarpin Rizaldi dalam persidangan perkara Komisaris Jendral Budi Gunawan, mengabulkan permohonan pra-peradilan yang bersangkutan atas penetapan KPK pada dirinya sebagai tersangka.\n\nKemenangan tersebut bukan saja memicu para tersangka KPK lainnya untuk mengajukan gugatan pra-peradilan, tapi juga berbuntut pelimpahan perkara BG ke Kejaksaan. Maka inilah awal dari cerita kekalahan KPK.\n\nSambil menyimak orasi teman-teman mereka sendiri, para pegawai KPK itu juga menempelkan kertas bergambar pistol yang sedang menyalak di dada mereka. Lalu di bawah gambar itu, ada tertulis kata-kata, "Kalau teman-temanmu bertanya, kenapa bapakmu dicari polisi, jawab saja karena bapakmu pemberani."\n\nMereka berorasi tanpa rasa takut sedikit pun, padahal di hadapan mereka ada Ruki yang menjadi bos tertinggi mereka. Inilah kiranya ujung dari kemarahan dan kemuakan mereka terhadap pihak-pihak yang sudah merusak kebanggaan mereka atas lembaga yang menjadi salah satub benteng moral bangsa ini. \n\nMereka menumpahkan ketidakpuasan dengan berteriak dan mengepalkan tangan, tanpa peduli dengan sorot mata Ruqi yang mengawasi aksi pagi itu. \n\nPendemo itu pun menegaskan, perang terhadap pemberantasan korupsi tidak boleh berhenti. \n"Ada tiga sikap pegawai KPK, yang sudah didengarkan pimpinan, dan (seharusnya) tinggal diimplementasikan," tandas Nanang.\n\nTiga permintaan tersebut adalah, sikap menolak putusan Pimpinan KPK yang melimpahkan kasus BG ke Kejaksaan. Kedua, meminta pimpinan KPK mengajukan upaya hukum peninjauan kembali (PK) atas putusan praperadilan kasus BG. Dan, terakhir, meminta pimpinan menjelaskan secara terbuka strategi pemberantasan korupsi KPK kepada pegawai KPK.\n\nEntah terpaksa atau sukarela, Pelaksana Tugas (Plt) Ketua KPK, Taufiequrachman Ruki bersama Indriyanto Seno Adji  yang dicurigai meloloskan kasus BG ke Kejaksaan itu pun turut menandatangani kain putih yang berisi tandatangan karyawan KPK lainnya.\n\n***\n\nTepat pukul 09.45 WIB, aksi unjuk rasa karyawan KPK pun berakhir. Ruqi yang mengaku terharu oleh semangat para bawahannya meminta kepada seluruh peserta demo untuk masuk ke auditorium, sementara dirinya berbicara dengan pers.\n\nHingga aksi itu usai, masih ada rasa tak percaya. Drama satu babak itu sungguh mengejutkan. Tindakan karyawan KPK pada Selasa pagi tadi, telah memecahkan tradisi para pekerja di lembaga negara yang senantiasa patuh pada atasan.\n\nTentu ada alasan yang sangat kuat sehingga para karyawan KPK seberani itu melawan atasannya. Barangkali kemarahan mereka memang sudah di ubun-ubun. Setelah lebih dari sebulan nasib KPK diombang-ambing ketidakpastian, lalu Abraham Samad dan Bambang Widjojanto--dua pimpinan yang mereka hormati--menjadi tersangka, lantas mencapai klimaks dengan pengalihan kasus BG ke Kejaksaan Agung, mendidihlah amarah mereka.\n\nAmarah mereka barangkali memang ditujukan kepada "hantu" yang berada di kandang sendiri, tapi bisa jadi mereka murka kepada hantu-hantu yang bergentayangan di luar Gedung KPK yang kini sedang tertawa menyaksikan lembaga antirasuah itu menjadi lemah dan tak berdaya.', '2015-03-04', '07:36:46', '36_154933200000001022780x390.jpg', 10),
(39, 'List Web Ujikom 12RPL SMK abdi bangsa', 5, '<tr><td>Nama</td><td>URL</td></tr>\r\n<tr><td>Aditya</td><td><a href=''http://perpustakaan-ab.besaba.com''>Aditya</a></td></tr>\r\n<tr><td>Riky</td><td><a href=''http://rikydwianto.besaba.com''>Riky</a></td></tr>\r\n<tr><td>Ramdhan</td><td><a href=''http://Perpus-ramdhan.tk''>Ramdhan</a></td></tr>\r\n<tr><td>indra</td><td><a href=''http://Perpus-indranoah.besaba.com''>Indra</a></td></tr>\r\n<tr><td>anggilianti</td><td><a href=''http://Anggilianti.besaba.com''>anggilianti</a></td></tr>\r\n<tr><td>Husni</td><td><a href=''http://Husninuryani.besaba.com''>Husni</a></td></tr>\r\n<tr><td>reza</td><td><a href=''http://RezaFahlevigunawan.host56.com''>reza</a></td></tr>\r\n<tr><td>rina</td><td><a href=''http://Erina-perpus.besaba.com''>Rina</a></td></tr>\r\n<tr><td>anggara</td><td><a href=''http://Anggara.besaba.com''>Anggara</a></td></tr>\r\n<tr><td>Kahlil</td><td><a href=''http://gibran.besaba.com''>Kahlil</a></td></tr>\r\n<tr><td>firhan</td><td><a href=''http://firhan.besaba.com''>firhan</a></td></tr>\r\n<tr><td>mayang</td><td><a href=''http://Mayangdeliana.pe.hu''>mayang</a></td></tr>\r\n<tr><td>nurul</td><td><a href=''http://nurulFauziah.pe.hu''>nurul</a></td></tr>\r\n<tr><td>refha</td><td><a href=''http://refha13.pe.hu''></a>refha13</td></tr>\r\n<tr><td>resti</td><td><a href=''http://Restilarasati.uji.comuv.com''>resti</a></td></tr>\r\n<tr><td>Rizkytirtapratama</td><td><a href=''http://Rizkytirtapratama.pe.hu''>Rizkytirtapratama</a></td></tr>\r\n\r\n\r\n', '2015-03-04', '01:19:45', '39_url1.jpg', 31),
(40, 'DDL dan DML', 5, 'DDL atau Data Definition Language adalah kumpulan perintah SQL yang dapat digunakan untuk membuat dan mengubah struktur dan definisi tipe data dari objek-objek database seperti tabel, index, trigger, view, dan lain-lain.\r\n\r\nDML atau Data Manipulation Language adalah kumpulan perintah SQL yang berhubungan dengan pekerjaan mengolah data di dalam table.\r\n\r\nContoh perintah DDL :\r\n\r\n    Membuat tabel\r\n\r\nCREATE TABLE\r\nDigunakan untuk membuat tabel. Syntax umumnya sebagai berikut :\r\n\r\nCREATE TABLE [schema, ] table\r\n( column datatype [DEFAULT expr][,...]);\r\n\r\n    Menghapus tabel\r\n\r\nDROP TABLE\r\n\r\nDigunakan untuk melakukan penghapusan tabel. Melakukan penghapusan table dengan perintah DROP, berarti mengerjakan hal berikut :\r\n\r\nSemua data dan struktur dari table akan dihapus Semua transaksi pending akan di-commit Semua indeks akan dihapus Perintah drop ini tidak bisa di-rollback Sebagai contoh, jika kita ingin menghapus tabel dept, maka yang harus dilakukan adalah :\r\n\r\nDROP TABLE dept; \r\n\r\n    Menambah /menghapus kolom\r\n    Statemen ALTER TABLE digunakan untuk :\r\n    ~ Menambahkan kolom baru\r\n    Untuk menambah kolom baru, syntax umumnya sebagai berikut :\r\n\r\nALTER TABLE table\r\nADD         (column datatype [DEFAULT expr]\r\n [, column datatype]...);\r\n\r\n~ Memodifikasi kolom yang sudah ada\r\n\r\nKita dapat memodifikasi kolom dengan mengubah tipe datanya, ukuran dan nilai defaultnya.\r\nSintaks dari perintah ALTER TABLE untuk memodifikasi kolom sebagai berikut :\r\n\r\nALTER TABLE table\r\nMODIFY      (column datatype [DEFAULT expr]\r\n [, column datatype] ... );\r\n\r\nContoh :\r\n\r\nALTER TABLE dept\r\nMODIFY       (dname VARCHAR2(30));\r\n\r\nView adalah tabel bayangan. Tidak menyimpan data secara fisik. Biasanya berupa hasil query dari tabel-tabel dalam sebuah database. Syntax untuk melakuakn VIEW adalah :\r\n\r\nCREATE VIEW <namaTabel> AS\r\n <SQLQuery>\r\n\r\nTrigger adalah sebuah obyek dalam database yang berupa prosedur yang merespon setiap kali terdapat proses modifikasi pada tabel. Proses modifikasi berupa: Insert, Update dan delete. Syntax pembuatan Trigger:\r\n\r\nCREATE TRIGGER <namaTrigger> ON TABLE <namaTabel>\r\nFOR [DELETE] [,] [INSERT] [,] [UPDATE]\r\nAS <perintahSQL>\r\n\r\nContoh perintah DML :\r\n\r\n    Penambahan data pada sebuah tabel\r\n\r\nSyntax:\r\n\r\nINSERT INTO nama_tabel(field ke-1, ….. field ke-n)\r\nVALUES(nilai_field_ke-1, …. nilai_field_ke-n);\r\n\r\n    Pembaruan data  pada sebuah tabel\r\n\r\nSyntax:\r\n\r\nUPDATE nama_tabel\r\nSET nama_field = data_baru\r\nWHERE nama_field = data_lama; \r\n\r\n    Penghapusan data pada sebuah tabel\r\n\r\nSyntax:\r\n\r\nDELETE FROM nama_tabel\r\n[ WHERE kondisi];\r\n\r\n \r\n\r\n    Pemilihan data dari satu atau beberapa tabel\r\n\r\nSyntax :\r\n\r\nSELECT [DISTINCT] select_list\r\nFROM table_source\r\n[WHERE search_condition]\r\n[GROUP BY group_by_expression]\r\n[HAVING search_condition]\r\n[ORDER BY order_expression [ASC | DESC] ]', '2015-03-05', '08:23:34', '40_MySQL-5_1.jpg', 6),
(41, 'Gunakan Perangkat Lunak Open Source', 1, 'Komputer telah menjadi bagian dari kehidupan kita sehari-hari. Hampir setiap hari kita menggunakan komputer untuk mengerjakan pekerjaan kita sehari-hari. Ada banyak sekali alternatif perangkat lunak (software) yang bisa kita gunakan untuk mengerjakan pekerjaan kantor dan rumah kita. Salah satunya adalah perangkat lunak open source software atau OSS. Dalam Bahasa Indonesia disebut sebagai perangkat lunak sumber terbuka.\r\n\r\nOpen source software dimulai dengan adanya kampanye untuk menyediakan dan menggunakan perangkat lunak yang gratis. Selain itu setiap perangkat lunak yang termasuk perangkat lunak sumber terbuka (open source) memiliki kode sumber (source code) yang bebas diunduh dan disebarluaskan dengan menganut kaidah dan etika tertentu. Pengembangannya dilakukan oleh suatu komunitas tertentu dan mereka akan saling bertukar informasi untuk mengembangkan perangkat lunak tersebut agar menjadi lebih baik.\r\n\r\n \r\nMengapa Menggunakan Open Source Software?\r\n\r\nMengapa harus menggunakan perangkat lunak open source? Dalam pekerjaan sehari-hari dengan komputer, kita mungkin sering menggunakan beberapa perangkat lunak komersial yang sudah terkenal seperti Microsoft Windows sebagai sistem operasi, Microsoft Office sebagai aplikasi perkantoran, Adobe Photoshop dan Corel Draw sebagai aplikasi untuk desain dan gambar, Microsoft Visio sebagai aplikasi untuk membuat diagram, Microsoft Outlook untuk membaca dan menerima e-mail ataupun Microsoft Project sebagai aplikasi untuk melakukan manajemen proyek. Namun tahukah Anda, bahwa perangkat lunak yang disebutkan tadi memiliki harga lisensi satuan dari ratusan hingga ribuan dolar AS per perangkat lunak? Jika Anda menginvestasikan uang Anda untuk membeli beberapa perangkat lunak asli tersebut ke dalam komputer, tentu Anda harus mengeluarkan biaya ribuan dolar AS untuk sebuah komputer. Tentu Anda juga tidak ingin melanggar hukum dengan menggunakan perangkat lunak ilegal bukan?\r\n\r\nKarena itulah tersedia berbagai ragam perangkat lunak open source yang dapat diunduh secara gratis dan disebarluaskan dengan bebas. Selain itu, karena dibangun oleh suatu komunitas yang saling bertukar informasi di seluruh dunia, perangkat lunak jenis ini berkembang dengan cukup baik.\r\n\r\n \r\nApa saja Alternatif Open Source Software?\r\n\r\nBerikut ini beberapa jenis perangkat lunak open source yang dapat dengan mudah Anda dapatkan sebagai pengganti perangkat lunak berbayar Anda yang mahal:\r\n\r\n    Linux\r\n    Anda dapat mengganti Microsoft Windows yang Anda gunakan setiap hari dengan sistem operasi Linux. Sistem operasi yang pertama kali dikembangkan oleh Linus Trovald ini telah menjadi alternatif terbaik untuk menggantikan Microsoft Windows. Banyak varian dan distribusi Linux yang dikembangkan dengan tampilan yang sangat bagus. Misalnya Ubuntu, Mandrake, dan Fedora adalah distribusi Linux yang cukup mudah digunakan oleh orang awam sekalipun.\r\n    Open Office\r\n    Salah satu aplikasi perkantoran yang paling tepat untuk menggantikan Microsoft Office adalah Open Office. Perangkat lunak ini dikembangkan secara khusus oleh sebuah perusahaan besar yaitu Sun Microsystem namun tersedia secara gratis. Dalam sebuah paket Open Office tersedia banyak aplikasi yang mampu menggantikan tugas Microsoft Office. Bahkan Open Office mampu membuka file yang disimpan dengan format Microsoft Office.\r\n    GIMP\r\n    Jika Anda senang melakukan desain dan menggambar, Anda dapat menggunakan aplikasi GIMP. Anda dapat memodifikasi foto dan gambar Anda dan menyimpannya dalam berbagai format file gambar. Dan perangkat lunak ini dapat secara gratis Anda dapatkan sebagai pengganti aplikasi Adobe Photoshop atau Corel Draw yang harganya tentu sangatlah mahal.\r\n    Dia\r\n    Microsoft Visio tentulah menjadi perangkat lunak yang bagus untuk membuat diagram. Namun tahukah Anda bahwa Anda juga dapat membuat diagram dengan perangkat lunak yang gratis dan legal? Perangkat lunak tersebut memiliki nama Dia. Dengan perangkat lunak ini, Anda dapat membuat berbagai diagram dengan format menarik.\r\n    Mozilla Thunderbird\r\n    Anda sering menerima e-mail di Microsoft Outlook? Anda bisa menggunakan alternatif aplikasi e-mail yang disebut sebagai Mozilla Thunderbird untuk menerima, membaca dan mengirim e-mail Anda. Selain itu Mozilla Thunderbird juga dilengkapi dengan News Reader untuk membaca berbagai berita terbaru.\r\n    Gantt Project\r\n    Jika Anda seorang yang ditugasi melakukan manajemen proyek, Anda tentu biasa menggunakan Microsoft Project untuk melakukan tugas ini. Namun Anda dapat juga menggunakan alternatif perangkat lunak gratis yaitu Gantt Project yang memiliki kesanggupan seperti Microsoft Project.\r\n\r\nSemua perangkat lunak open source yang disebutkan di atas (kecuali Linux) dapat dijalankan pada sistem operasi Microsoft Windows maupun Linux dengan berbagai varian dan distribusinya. Tentunya Anda dapat menghemat dari ratusan hingga ribuan dolar AS jika Anda mulai menggunakan perangkat lunak open source. Selain yang disebutkan di atas, masih banyak lagi perangkat lunak open source yang bisa Anda gunakan sebagai alternatif dari perangkat lunak komersial.\r\n\r\n \r\nGratis Tidak Berarti Buruk\r\n\r\nMeski semua perangkat lunak open source dapat diperoleh dan disebarkan dengan gratis, namun dari segi kualitas perangkat lunak open source telah melalui serangkaian pengujian seperti halnya perangkat lunak komersial. Bahkan beberapa perusahaan besar pun juga telah ikut serta dalam pengembangan perangkat lunak ini.\r\n\r\nMemang jika pertama kali Anda beralih ke perangkat lunak open source, kemungkinan Anda belum terbiasa menggunakannya karena tata letaknya yang sedikit berbeda dengan perangkat lunak komersial yang biasa Anda gunakan. Namun Anda bisa mulai mencobanya dan tentunya Anda akan menjadi terbiasa. Selain itu Anda juga tidak akan dibebani biaya yang mahal serta bisa jadi beban moral karena menggunakan perangkat lunak komersial yang ilegal.', '2015-03-05', '12:47:21', '41_opensource.gif', 1);

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `buku_kode` char(10) NOT NULL,
  `kategori_kode` char(10) NOT NULL,
  `penerbit_kode` char(10) NOT NULL,
  `buku_judul` varchar(50) NOT NULL,
  `buku_jumlah` int(10) NOT NULL,
  `buku_diskripsi` text NOT NULL,
  `buku_pengarang` varchar(30) NOT NULL,
  `buku_thn_terbit` int(11) NOT NULL,
  `foto_buku` text NOT NULL,
  PRIMARY KEY (`buku_kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`buku_kode`, `kategori_kode`, `penerbit_kode`, `buku_judul`, `buku_jumlah`, `buku_diskripsi`, `buku_pengarang`, `buku_thn_terbit`, `foto_buku`) VALUES
('BK000001', 'KTG001', 'PN0001', 'Prabu Brawijaya', 7, 'Prabu Brawijaya', 'Dr. PURWADI, M. HUM', 2013, 'none.jpg'),
('BK000013', 'KTG014', 'PN0002', 'Huruf Sambung', 90, 'Huruf Sambung (4-5). Materi yang disajikan dalam buku ini hanya terdiri dari 30 halaman, diberikan untuk melatih menulis bagi\r\n\r\nanak usia 4-5 tahun, yang diawali dari huruf vocal aiueo, kemudian nama-nama benda dan hewan.\r\n\r\nDalam buku ini orangtua dapat mengembangkan kemampuan motorik halus anak, seperti menebalkan huruf, menjiplak dan meniru garis tegak, datar, miring, lengkung danlingkaran. Selain itu, buku ini membantu orangtua dalam mengembangkan kemampuan kognitif buah hatinya dengan cara mengenalkan huruf, mengenalkan nama-nama benda, nama hewan dan tumbuhan.\r\n\r\nHuruf Sambung (5-6). Materi yang diberikan dibuku ini tidak jauh dari buku sebelumnya, hanya saja dalam buku ini latihan menulisnya sudah lebih bertahap, yaitu menulis kata dan kalimat pendek.\r\n\r\nPada usis 5-6 tahun mungkin anak sudah bisa dituntun untuk bisa latihan menulis sendiri. Mintalah anak supaya mengerjakan latihannya sesuai dengan contoh yang diberikan dalam buku. lewat buku ini orangtua juga bisa melatih kemampuan intelektual dan kognitif anak seperti belajar membaca, mengelompokkan benda, dan sebagainya.\r\nMom Kiddie, Huruf Sambung, EFK, Edisi 9 TH IX (25 Des-7 Jan 2015, 12', 'Unknow', 2010, 'BK000013-_-Smart-TK-A-huruf-sambung.png'),
('BK000004', 'KTG007', 'PN0001', 'Dasar dasar komputer : logika komputer', 14, 'Pemrograman komputer dengan bahasa C++', 'Riky Dwianto', 2015, 'BK000004-_-77813_272603596193398_514648522_o.jpg'),
('BK000005', 'KTG011', 'PN0001', 'PRINCE OF ICE HOCKEY 02', 10, 'Nama asli Arthur Kitaooji adalah Arthur Winters... Anggota keluarga terkemuka yang menguasai dunia hoki Kanada! Arthur yang menyatakan dengan lantang akan menjadikan Jepang sebagai kerajaan hoki terkuat, menuju pertandingan nasional sebagai anggota k', 'HARUKA ONO ', 2014, 'BK000005-_-204486747_large.jpg'),
('BK000006', 'KTG011', 'PN0001', 'Aktivitas Meningkatkan Iq Anak: Dino Si Raksasa', 48, 'Fan dan Fin tidak sengaja masuk ke dunia zaman dinosaurus. Sesampainya di dunia dinosaurus, mereka harus menyelamatkan anak alomosaurus. Wah, wah, bisakah Fan dan Fin menyelamatkan anak-anak alomosuarus dari ancaman T-Rex? Yuks, kita bantu Fan dan Fi', 'MAUREEN MAYBELLE', 2015, 'BK000006-_-204194547_large.jpg'),
('BK000007', 'KTG012', 'PN0001', 'Elite Of Quiz,The 01 ', 50, 'Tokiya Daimonji adalah anak berbakat yang sangat menyenangi kuis. Tapi, yang ditemuinya adalah kuis adu cepat yang mempertaruhkan nyawa! Memecahkan teka-teki dalam air dan soal-soal super susah lainnya\r\nApakah Tokiya akan bisa menjawabnya?! Apa kamu ', 'SATOSHI KANDA ', 2012, 'BK000007-_-202498199_large.jpg'),
('BK000008', 'KTG011', 'PN0001', 'TORIKO 05', 10, 'Demi mencari induk Regal Mammoth, Toriko dan kawan-kawan pergi ke Dataran Tinggi Regal! Tujuan mereka adalah Jewel Meat di tubuh Mammoth! Mereka mengalahkan para binatang buas yang datang menyerang dan terus maju, tapi di tengah jalan, lagi-lagi baya', 'MITSUTOSHI SHIMABUKURO ', 2014, 'none.jpg'),
('BK000009', 'KTG008', 'PN0002', 'PEACE MAKER 06: LC', 10, 'Turnaman G.O.D, turnaman bagi gunman yang sudah mengumpulkan 7 lembar sertifikat juara duel akan dimulai! Hope, dkk. datang ke Red, tempat turnamen G.O.D diadakan. Tapi, Beat tidak ada di sana. Apa Beat berhasil mendapatkan sertifikat ke-7 dan bisa s', 'RYOUJI MINAGAWA ', 2013, 'none.jpg'),
('BK000010', 'KTG013', 'PN0001', 'Panduan Perbankan Islam: Kontrak & Produk Asas', 10, 'Bidang kewangan dan perbankan Islam masih baru jika dibandingkan dengan bidang kewangan dan perbankan konvensional. Oleh itu, ia memerlukan usaha berterusan untuk menjelaskan konsep ini kepada pelbagai pihak. Jumlah individu yang mengetahui pula amat', 'Riky', 2014, 'BK000010-_-dd.jpg'),
('BK000011', 'KTG003', 'PN0002', '“Persiapan yang baik adalah kunci menuju sukses”', 15, 'Mandiri kimia Kelompok Teknologi dan Kesehatan untuk SMK/MAK Kelas X ini disusun secara sistematis berdasarkan Standar Isi 2006. Buku ini merupakan buku pelengkap yang ditujukan untuk membantu peserta didik SMK/MAK mendalami materi Kimia yang dituntu', 'SITI NAQIYAH - SUSWANTO DJONI', 2014, 'BK000011-_-mandiri-kimia-smk-kel-tekn-kesehatan-jl1-klsx-ktsp.jpg'),
('BK000012', 'KTG014', 'PN0002', 'SPM PLUS SMP/MTS 2015', 10, 'Rangkuman Materi Bahasa Indonesia, Bahasa Inggris, Matematika, dan Ilmu Pengetahuan Alam dalam buku ini disusun berdasarkan Kisi-kisi UN 2015, disertai latihan soal model UN dan pembahasannya.\r\nPrediksi soal Bahasa Indonesia, Bahasa Inggris, Matemati', 'DRS. BAMBANG K.K.', 2014, 'BK000012-_-spm-plus-smp-mts-2015.jpg'),
('BK000014', 'KTG002', 'PN0001', 'Coba chromeplus', 90, 'hahah', 'riky', 2012, 'BK000014-_-10952698_1056620614353745_498457125_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pinjam`
--

CREATE TABLE IF NOT EXISTS `detail_pinjam` (
  `peminjaman_kode` char(10) NOT NULL,
  `buku_kode` char(10) NOT NULL,
  `detail_tgl_kembali` date NOT NULL,
  `detail_denda` double NOT NULL,
  `detail_status_kembali` char(5) NOT NULL,
  KEY `peminjaman_kode` (`peminjaman_kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pinjam`
--

INSERT INTO `detail_pinjam` (`peminjaman_kode`, `buku_kode`, `detail_tgl_kembali`, `detail_denda`, `detail_status_kembali`) VALUES
('150304-001', 'BK000010', '2015-03-04', 0, 'sudah'),
('150304-001', 'bk000006', '0000-00-00', 0, ''),
('150305-001', 'BK000013', '2015-03-05', 0, 'sudah'),
('150305-002', 'BK000012', '2015-03-05', 0, 'sudah'),
('150305-002', 'BK000010', '2015-03-05', 0, 'sudah'),
('150305-002', 'BK000001', '2015-03-05', 0, 'sudah'),
('150305-003', 'BK000010', '2015-03-05', 0, 'sudah'),
('150305-004', 'BK000011', '0000-00-00', 0, ''),
('150305-004', 'BK000004', '2015-03-05', 0, 'sudah'),
('150306-001', 'BK000014', '0000-00-00', 0, ''),
('150306-001', 'BK000011', '0000-00-00', 0, '');

--
-- Triggers `detail_pinjam`
--
DROP TRIGGER IF EXISTS `jumlah_buku`;
DELIMITER //
CREATE TRIGGER `jumlah_buku` AFTER INSERT ON `detail_pinjam`
 FOR EACH ROW update buku set buku_jumlah=buku_jumlah-1 where buku_kode=new.buku_kode
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `kategori_kode` char(10) NOT NULL,
  `kategori_nama` varchar(20) NOT NULL,
  PRIMARY KEY (`kategori_kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_kode`, `kategori_nama`) VALUES
('KTG001', 'Sejarah'),
('KTG002', 'Biografi'),
('KTG003', 'Majalah'),
('KTG004', 'Novel'),
('KTG005', 'Misteri'),
('KTG006', 'Horror'),
('KTG007', 'Pemrograman'),
('KTG008', 'Dongeng'),
('KTG009', 'Sosiologi'),
('KTG010', 'WEB'),
('KTG011', 'Komik'),
('KTG012', 'Cerita Anak'),
('KTG013', 'Agama'),
('KTG014', 'Pelajaran');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_artikel`
--

CREATE TABLE IF NOT EXISTS `kategori_artikel` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kategori_artikel`
--

INSERT INTO `kategori_artikel` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Teknologi'),
(2, 'Budaya'),
(3, 'Sejarah'),
(4, 'Politik'),
(5, 'Pendidikan');

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE IF NOT EXISTS `peminjam` (
  `peminjam_kode` char(10) NOT NULL,
  `peminjam_nama` varchar(30) NOT NULL,
  `peminjam_alamat` varchar(30) NOT NULL,
  `peminjam_telp` bigint(20) NOT NULL,
  `peminjam_foto` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`peminjam_kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjam`
--

INSERT INTO `peminjam` (`peminjam_kode`, `peminjam_nama`, `peminjam_alamat`, `peminjam_telp`, `peminjam_foto`, `username`, `password`) VALUES
('PMN0001', 'Riky Dwianto', 'Sukabumi', 89657507293, 'PMN0001-_-20141222_133119.jpg', 'riky_ab', 'c08953d8fcbb6a084e4ec2fb2f3eb5c3'),
('PMN0003', 'Anggara Permana', 'Curug Kembar', 987654, 'PMN0003-_-204488047_large.jpg', 'anggara', '54fd654986e13c558be4867664bf296c'),
('PMN0004', 'LOKOMEDIA', 'Sukabumi', -2, 'PMN0004-_-204488047_large.jpg', 'lokomedia', 'fc94c3b7c528adbc8a4048e7c0d94d7b'),
('PMN0006', 'Airlangga', 'Sukabumi', 5, 'PMN0006-_-snapshot20150218145209.jpg', 'anggara', 'a1c8b28c84ba6fded5e8c1326d858ad3'),
('PMN0008', 'Erina', 'Sukabumi', 98765, 'none.jpg', 'coba', 'c08953d8fcbb6a084e4ec2fb2f3eb5c3');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
  `peminjaman_kode` char(10) NOT NULL,
  `petugas_kode` char(10) NOT NULL,
  `peminjam_kode` char(10) NOT NULL,
  `peminjaman_tgl` date NOT NULL,
  `peminjaman_tgl_kembali` date NOT NULL,
  PRIMARY KEY (`peminjaman_kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`peminjaman_kode`, `petugas_kode`, `peminjam_kode`, `peminjaman_tgl`, `peminjaman_tgl_kembali`) VALUES
('150304-001', 'PTG0001', 'PMN0007', '2015-03-04', '2015-03-07'),
('150305-001', 'PTG0001', 'PMN0004', '2015-03-05', '2015-03-08'),
('150305-002', 'PTG0001', 'pmn0008', '2015-03-05', '2015-03-08'),
('150305-003', 'PTG0001', 'PMN0001', '2015-03-05', '2015-03-08'),
('150305-004', 'PTG0006', 'PMN0003', '2015-03-05', '2015-03-08'),
('150306-001', 'PTG0001', 'PMN0006', '2015-03-06', '2015-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE IF NOT EXISTS `penerbit` (
  `penerbit_kode` char(10) NOT NULL,
  `penerbit_nama` varchar(20) NOT NULL,
  `penerbit_alamat` varchar(50) NOT NULL,
  `penerbit_telp` bigint(20) NOT NULL,
  PRIMARY KEY (`penerbit_kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`penerbit_kode`, `penerbit_nama`, `penerbit_alamat`, `penerbit_telp`) VALUES
('PN0001', 'Gramedia', 'Gramedia', 987654),
('PN0002', 'Airlangga', 'Airlangga', 9876543),
('PN0003', 'PT. SUKABUKU', 'Yogyakarta', 98765434),
('PN0004', 'LOKOMEDIA', 'LOKOMEDIA', 98765);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `petugas_kode` char(10) NOT NULL,
  `petugas_nama` varchar(25) NOT NULL,
  `petugas_alamat` text NOT NULL,
  `petugas_telp` varchar(15) NOT NULL,
  `petugas_foto` text NOT NULL,
  `username` char(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`petugas_kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`petugas_kode`, `petugas_nama`, `petugas_alamat`, `petugas_telp`, `petugas_foto`, `username`, `password`) VALUES
('PTG0001', 'Riky Dwianto', 'Sukabumi', '089657507293', 'PTG0001-_-255345_399975320061994_359750124_n.jpg', 'riky_ab', 'c08953d8fcbb6a084e4ec2fb2f3eb5c3'),
('PTG0002', 'Anggara Permana', 'Curug Kembar', '0987654', 'PTG0002-_-241947_10151078200230140_1884583484_o.jpg', 'anggara', '54fd654986e13c558be4867664bf296c'),
('PTG0003', 'Aditya', 'Sukabumi', '987654', 'PTG0003-_-Konser-Dari-Hati-Afgan-5.jpg', 'mio', '78c925a3a4b36984d1bcbbb01457eec6'),
('PTG0006', 'haha', 'haha', '98765', 'none.jpg', 'haha', '4e4d6c332b6fe62a63afe56171fd3725'),
('PTG0005', 'coba', 'coba', '87', 'PTG0005-_-10952698_1056620614353745_498457125_n.jpg', 'coba', 'c3ec0f7b054e729c5a716c8125839829');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
