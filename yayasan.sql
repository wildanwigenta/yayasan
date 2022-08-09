-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 09, 2022 at 02:10 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yayasan`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `judul`, `deskripsi`, `gambar`) VALUES
(1, 'Dompet Lauwba', 'Dompet Lauwba adalah lembaga filantropi dan kemanusiaan yang bergerak untuk pemberdayaan umat (Empowering People) dan kemanusiaan. Pemberdayaannya bergulir melalui pengelolaan dana zakat, infak, sedekah dan wakaf (Ziswaf), serta dana sosial lainnya yang terkelola secara modern dan amanah. Dalam pengelolaannya mengedepankan konsep welas asih atau kasih sayang sebagai akar gerakan filantropis yang mengedepankan lima pilar program yaitu Kesehatan, Pendidikan, Ekonomi, Sosial, serta Dakwah dan Budaya.\r\n\r\nDompet Lauwba lahir dari jiwa-jiwa para jurnalis Harian Umum Republika yang tergerak untuk membantu sesama pada 1993 silam. Dengan tekad mulia, pada 2 Juli 1993, hadir kolom donasi Dompet Lauwba di halaman utama Harian Umum Republika. Kemudian pada tanggal tersebut tersurat sebagai lahirnya lembaga filantropi dan kemanusiaan tersebut. Setahun kemudian, Dompet Lauwba mengantongi akta pendirian yayasan. Tercatat melalui Akta No. 41 Tanggal 14 September 1994 di hadapan Notaris H. Abu Yusuf, S.H., yang diumumkan dalam Berita Negara Republik Indonesia No. 163/A.YAY.HKM/1996/PNJAKSEL.\r\n\r\nHingga saat ini, kepercayaan dan partisipasi publik terus menuntun Dompet Lauwba dalam menghadapi tantangan global. Berawal dari kolom donasi, Dompet Lauwba terus berkhidmat mengantarkan amanah para donatur maupun muzakki kepada mustahik atau penerima manfaat. Dari perjalanan 1993 sampai dengan 2021, kebaikan para donatur Dompet Lauwba telah menyentuh penerima manfaat lebih dari 24 juta jiwa. \r\n\r\nSelain menghadirkan program-program kebaikan untuk memberdayakan sesama, tentunya Dompet Dhuafa juga menguatkan kolaborasi. Langkahnya dengan meluaskan jaringan layanan. Maka dalam melengkapi perjalanan saat ini, Dompet Dhuafa hadir di 6 kantor layanan, 31 cabang dalam negeri, 5 cabang luar negeri. Tak hanya itu, Dompet Dhuafa juga mengembangkan 157 zona layanan di 32 provinsi, dan bekerjasama dengan 29 mitra strategis di 21 negara. \r\n\r\nPengembangan tersebut untuk mengatasi masalah di negeri ini yang tidak dapat dilakukan dengan bekerja sendirian. Terlalu besar masalah yang dihadapi, terlalu sedikit sumber daya yang dimiliki. Maka, perlu bergandengan tangan, membangun kolaborasi dan beraksi bersama mengatasi berbagai masalah kesenjangan dan ketimpangan di negeri ini.                                 ', 'Dompet_Lauwba.png');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'wildan', '1b5121ff2a7748b464e71206a5a27a25');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `berita` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date DEFAULT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `berita`, `deskripsi`, `tanggal`, `gambar`) VALUES
(1, 'Sekolah Guru Indonesia Mewisuda 67 Guru Penerima Manfaat SGI Master Teacher', 'BOGOR — Sekolah Guru Indonesia (SGI) merupakan program yang peduli pada peningkatan kualitas guru beritikad memajukan pendidikan di Indonesia dan berkomitmen melahirkan Guru Transformatif yang memiliki kompetensi mengajar, mendidik, berjiwa kepemimpinan sosial, dan siap berkontribusi di masyarakat.Menurut Asep Ihsanudin selaku Ketua Sekolah Guru Indonesia, kecakapan seorang pendidik dalam mencipta gagasan-gagasan segar sebagai alternatif perubahan bagi kemajuan pendidikan di negeri ini sangatlah penting. Sebab itulah sebab itulah SGI menelurkan beragam program pengembangan keguruan salah satunya SGI Master Teacher (SMT).“SMT didedikasikan untuk para guru honorer. Dengan harapan dapat membantu mengembangkan kapasitas dan menstimulasi inovasi pembelajaran mereka di kelas, sekaligus membantu finansial guru tersebut,” kata Asep. Ia menambahkan, saat ini SGI telah mewisuda 4.914 guru yang tersebar di 34 provinsi di 105 kabupaten/kota.Pada Minggu (24/07/2022), SGI mewisuda 67 peserta program SMT Angkatan 45 dari Sukabumi, Bogor, Depok, Jakarta, yang dilaksanakan luring di Aula Zona Madina, Kemang, Bogor. Mengangkat tema Guru Pemimpin, Mewujudkan Indonesia Berdaya; Wisuda Akbar SMT Angkatan 45 ini bertujuan mengevaluasi dan mengajak para guru penerima manfaat program dan stakeholder wilayah terkait mengenal lebih jauh program SMT dan mengembangkan manfaat serta ilmu yang didapat kepada guru-guru lain melalui pengimbasan program pelatihan serupa di kemudian hari.GM Dakwah & Layanan Sosial Dompet Dhuafa, Juperta Panji Utama, menyampaikan terima kasih atas kerja sama yang dibangun oleh semua penerima manfaat SMT. Ia yakin program sejenis akan berlanjut di kemudian hari.“Peningkatan kualitas peserta didik dimulai dari kualitas guru, maka guru harus terus meningkatkan kapasitasnya baik dari segi softskill maupun hardskill untuk menunjang profesinya,” pesannya.Program SMT Angkatan 45 dilaksanakan di 7 (tujuh) kabupaten/kota yang terdiri dari pendanaan dari Dompet Dhuafa (Kabupaten Sukabumi & Kabupaten Lima Puluh Kota), Dompet Dhuafa cabang/unit (Kabupaten Sinjai dan Kabupaten Samarinda), serta pendanaan mandiri melalui komunitas guru setempat (Jakarta Selatan, Kota Depok, Kabupaten Bogor).Dian Mulyadi selaku GM Corporate Secretary Dompet Dhuafa, menyampaikan harapan besarnya untuk SMT; ia berharap SGI melalui SMT dapat memberikan manfaat dan menjadi agregator pendidikan berkualitas bagi para aktivis pendidik di Indonesia sehingga menghasilkan pelajar berkualitas calon pemimpi berkarakter bagi bangsa. (Dompet Dhuafa / AR).                                    ', '2022-08-01', 'Sekolah_Guru_Indonesia_Mewisuda_67_Guru_Penerima_Manfaat_SGI_Master_Teacher.jpg'),
(2, 'Gubernur Sumatera Utara Resmikan Gedung MA Sekolah Bintang Rabbani DD Waspada di Desa Rumah Sumbul', 'DELI SERDANG, SUMATERA UTARA — Gubernur Sumatera Utara, Edy Rahmayadi, meresmikan gedung Madrasah Aliyah (MA) Sekolah Bintang Rabbani Dompet Dhuafa Waspada di Desa Rumah Sumbul, Kecamatan STM Hulu, Kabupaten Deli Serdang, pada Senin, (25/7/2022).\r\n\r\nLewat pengguntingan pita, Gubernur Sumatera Utara meresmikan gedung secara simbolis didampingi Wakil Bupati Deli Serdang, H. M. Ali Yusuf Siregar, Ibrahim selaku Deputi Kepala Perwakilan BI Provinsi Sumatera Utara, Pembina Dompet Dhuafa Waspada, dr. Hj. Rayati Syafrin, MBA, MM,  Sulaiman selaku Pimpinan Cabang Dompet Dhuafa Waspada, dan Direktur Sekolah Dompet Dhuafa Waspada, Amal Lubis, S.Pd.I.\r\n\r\nDalam kesempatan itu, Edy mengaku sangat senang dapat hadir meresmikan gedung. Ia juga mengatakan bahwa ia siap mendukung fasilitas yang dibutuhkan oleh Sekolah Bintang Rabbani. “Tadi kita sudah tanya apa yang dibutuhkan, butuhnya aula, Insya Allah akan kita bantu penuhi untuk dianggarkan di APBD,” ucapnya.\r\n\r\nEdy juga menginginkan kedepannya dapat memiliki waktu luang untuk bisa kembali berkunjung ke sekolah yang satu-satunya berbasis Islam di daerah tersebut. “Mudah-mudahan ada waktu luang, biar bisa lebih lanjut meninjau sekolah dan mendiskusikan berbagai sinergi,” kata Edy.\r\nH. M. Ali Yusuf Siregar, yang hadir pada acara peresmian tersebut menyampaikan pidato dari Bupati Deli Serdang. Dalam pidatonya, ia mengucapkan terima kasih kepada Dompet Dhuafa Waspada yang telah banyak menghadirkan program baik di bidang ekonomi sosial, dan untuk di sini khususnya pendidikan. “Tentunya kami pun siap untuk terus mendukung sekolah ini agar tetap berkembang hingga dampaknya nanti bisa benar-benar dirasakan bagi masyarakat,” sampainya.\r\n\r\nIa juga menyinggung keberadaan Madrasah Aliyah (MA) sebagai salah satu lembaga pendidikan. “Pentingnya madrasah sebagai salah satu kesadaran masyarakat muslim untuk mempersiapkan generasi yang memiliki potensi dan pemahaman agama yang baik. Karena generasi unggul bukan hanya kecerdasan intelektual juga butuh kecerdasan spiritual,” ucapnya.\r\n\r\nPada acara peresmian itu juga, Pembina Dompet Dhuafa Waspada, dr. Hj. Rayati Syafrin, MBA, MM, turut menceritakan sekilas tentang sejarah berdirinya sekolah tersebut. “Hari ini saat saya di sini, kembali mengingatkan memori bagaimana awal mula sekolah ini didirikan. Berawal dari penempatan dai yaitu ananda kami Amal Lubis, yang kemudian bersama masyarakat sepakat mendirikan sekolah berbasis Islam,” ucapnya.\r\n\r\nIa pun juga menyampaikan bahwa sekolah ini berjalan tanpa dipungut biaya dari siswa. “Secara umum masyarakat di sini memiliki ekonomi yang lemah, makanya hadirnya sekolah ini juga untuk membukakan jalan bagi mereka bisa tetap bersekolah terutama mendapat pendidikan Islam,” kata Rayati.\r\nKepada hadirin, Rayati pun berharap untuk tetap bersama mendukung Sekolah Bintang Rabbani ini. “Karena ini untuk kemaslahatan umat, semoga kita tetap bisa sama-sama peduli kepada sekolah ini,” harapnya.\r\n\r\nMewakili donatur, Ibrahim selaku Deputi Kepala Perwakilan BI Provinsi Sumatera Utara, yang juga hadir pada acara tersebut turut mengapresiasi  kehadiran Madrasah Aliyah Sekolah Bintang Rabbani. “Mengutip kata seorang filsuf bahwa pendidikan adalah bekal terbaik untuk perjalanan hidup. Maka, hadirnya jenjang Madrasah Aliyah di sekolah bintang ini bukan hanya sekedar bekal dunia saja melainkan bekal dunia dan akhirat,” ucapnya.\r\n\r\nIa juga mengatakan bahwa BI siap mendukung berbagai upaya dalam berbagai program untuk pendidikan di sekolah tersebut. “Apalagi tadi saya dengar siswanya menang olimpiade. Saya yakin ini bukan sekolah kaleng-kaleng, untuk para guru serta muridnya tetap semangat untuk membawa sekolah ini lebih baik karena kita tahu pendidikan instrumen ampuh dalam mengubah dunia,” katanya.\r\n\r\nTerkait dengan peresmian gedung Madrasah Aliyah ini, Sulaiman selaku Pimpinan Cabang Dompet Dhuafa Waspada, mengucapkan terima kasih kepada seluruh donatur yang turut serta dalam perkembangan sekolah. “Kami ucapkan terima kasih kepada seluruh donatur yang telah bersedia untuk sama-sama membangun sekolah ini hingga sampai sekarang sudah ada tingkat Madrasah Aliyahnya,” ucap Sulaiman.\r\nIa pun berharap agar masyarakat luas senantiasa turut serta membantu keberlangsungan sekolah tersebut. “Demi kebaikan kita bersama, terutama untuk umat, mudah-mudahan kita bisa terus membantu sekolah ini agar bisa membawa manfaat bagi masyarakat setempat,” harapnya.\r\n\r\nSelain acara peresmian gedung, turut juga pemberian penghargaan kepada 5 (lima) orang guru di Sekolah Bintang Rabbani yang telah mengabdi lebih dari 10 tahun. Guru-guru tersebut yakni Amal Lubis, S.Pd.I, Rukinah, S.Pd.I, Pinda Muliawati, S.Pd, Nurbaiti Lubis, S.Pd.I dan Sulistini, S.Pd. (Dompet Dhuafa / Waspada / Arlen).                          ', '2022-08-01', 'Gubernur_Sumatera_Utara_Resmikan_Gedung_MA_Sekolah_Bintang_Rabbani_DD_Waspada_di_Desa_Rumah_Sumbul.jpeg'),
(3, 'Libur Setahun, Salamun Jualan Jas Hujan dan Alami Duka Dalam Sebelum Masuk eTahfizh School', '               BOGOR, JAWA BARAT — Ekselensia Tahfizh (eTahfizh) School bukanlah pilihan utama seorang Salamun (17). Remaja asal Kota Kembang itu, sempat mendaftar ke salah satu Pondok Pesantren (jenjang SMA) di Depok, pasca kelulusannya dari Pondok Pesantren (jenjang SMP) sebelumnya.\r\n\r\n“Sudah diterima, tapi karena Corona, penerimaan itu dibatalkan. Jadinya, saya libur (nganggur) dulu setahun, menunggu ada pendaftaran selanjutnya,” aku Salamun, meraba ingatan momen berjuang mencari tempat pendidikan terbaiknya.\r\n\r\n“Saat menunggu setahun itu, saya sempat jualan jas hujan. Jaga toko aksesoris motor, bantu saudara juga. Cuma 2 (dua) bulan aja, sebulannya dibayar Rp1 juta,” jelasnya lagi.\r\nPun dalam setahun masa ‘libur’ ia gunakan untuk membantu sang Ibu yang membuka warung klontong di rumah. Ya, giat berdagang dilakoni, sembari Muraja’ah hafalan Al-Qur’an. Sebab, kala itu ia telah mampu menghafal Al-Qur’an sebanyak 15 Juz.\r\n\r\n“Setahun itu saya juga di rumah bantu ibu jualan, sambil Muraja’ah. Ada juga sih main sama kawan sempat naik gunung. Dulu kan awalnya sekolah di SDIT dan SMP mondok juga. Alhamdulillah, waktu lulus SMP sudah hafal 15 Juz,” imbuhnya.\r\nNamun kepada tim Dompet Dhuafa, Rabu (20/7/2022), Salamun juga bercerita. Bahwa 2 tahun terakhir itu merupakan tahun terberat bagi diri dan keluarganya. Pasalnya, Salamun harus merelakan kepergian Salamah, saudari kembarnya, selama-lamanya.\r\n\r\n“Pas kelas 3, dia sakit, terus meninggal. Gak lama, di tahun yang sama, Ayah juga meninggal,” ungkapnya, tegar.\r\nSetelah ‘libur’ setahun berlalu, suar kabar dari kawan lama, menginformasikan tentang eTahfizh School Dompet Dhuafa. Salamun menyambutnya dengan baik. Tanpa perlu waktu lama, ia daftarkan dirinya ke eTahfizh School yang bertempat di Bumi Pengembangan Insani, Jalan Raya Parung-Bogor KM. 42, Jampang, Kemang, Bogor, Jawa Barat.\r\n\r\n“Nah, sempat jualan jas hujan dan dapat uang, dikumpul untuk kebutuhan-kebutuhan masuk sekolah, tapi, alhamdulillah di eTahfizh dapat beasiswa,” seru santriwan penyuka mata pelajaran Bahasa Arab itu.\r\n\r\nKini Salamun duduk di kursi kelas 2 eTahfizh School. Selain Tahfizh, ia mempelajari Fiqih, Sirah, serta Ulumul Hadist disana. Hafalan Al-Qur’an Salamun kini sebanyak 19 Juz.\r\n\r\n“Di keluarga saya rata-rata gak tamat sekolah. Maka saya ingin mencoba dan berusaha lebih baik, agar orang tua tenang dan senang. Saya gak tahu, tapi saya pengen jadi pengusaha sambil berdakwah. Cita-cita pengen banget bisa kuliah di Madinah,” pungkas Salamun.\r\n                     ', '2022-08-01', 'Libur_Setahun,_Salamun_Jualan_Jas_Hujan_dan_Alami_Duka_Dalam_Sebelum_Masuk_eTahfizh_School.jpg'),
(4, 'Minim Akses, DD Jawa Timur Distribusikan Daging Via Jalur Laut ke Dusun Merak', 'SITUBONDO, JAWA TIMUR — Di hari penyembelihan hewan kurban pada Iduladha 1443 bertepatan Minggu (10/7/2022), Tim Tebar Hewan Kurban (THK) Dompet Dhuafa Jawa Timur mendistribusikan 50 hewan domba/kambing (doka) ke Dusun Merak, Sumberwaru, Kec. Banyuputih, Situbondo, Jawa Timur. Untuk menuju ke lokasi tidaklah mudah, tim menuju Dusun Merak harus melalui jalur laut menggunakan perahu kecil. Pasalnya, Dusun Merak yang berada di sekitar kawasan Taman Nasional Baluran, Jawa timur tersebut lebih sulit dan lebih jauh jika ditempuh melalui jalur darat.\r\nKepala Unit Banyuwangi Dompet Dhuafa Jawa Timur, Achmad Efendi bersama rekan-rekannya setimnya menempuh jalur laut selama kurang lebih 2 (dua) jam. Atas dasar pertimbangan keselamatan, sebagian besar hewan kurban sudah terlebih dahulu disembelih dan dikuliti di Sentra Ternak Situbondo, program binaan Dompet Dhuafa Jawa Timur.\r\n\r\n“Di sana (Dusun Merak) terbagi dalam beberapa lingkungan, total kurang lebih terdapat 400 kepala keluarga dan semuanya akan mendapat manfaat daging kurban,” jelas Pak Pepen, sapaan akrab Efendi.\r\nTebar Hewan Kurban akan menjangkau titik-titik wilayah yang kekurangan pasokan daging kurban, tidak hanya di Pulau Jawa tapi menjangkau seluruh pelosok di Indonesia. Di sisi lain, Dompet Dhuafa Papua mendistribusikan hewan dan daging kurban hingga ke perbatasan Papua Niugini. Sedangkan di bagian selatan, Dompet Dhuafa NTT mendistribusikan hewan dan daging hingga ke perbatasan Timor Leste. (Dompet Dhuafa/Aryo Prasojo).                                    ', '2022-08-01', 'Minim_Akses,_DD_Jawa_Timur_Distribusikan_Daging_Via_Jalur_Laut_ke_Dusun_Merak.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(13) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `deskripsi`, `alamat`, `telp`, `email`) VALUES
(1, 'Lauwba Techno Indonesia merupakan perusahaan yang bergerak dibidang teknologi informasi khususnya IT Consultant, Software Development, IT Training & Digital Marketing dengan SKT.KEMENKUMHAM RI NO AHU-0022789.AH.01.01', 'Gedung PT. Lauwba Techno Indonesia, Jl. Karangploso Sitimulyo, Karang Ploso, Sitimulyo, Kec. Piyungan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55792', '027444359440', 'info@lauwba.com');

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id_donasi` int(11) NOT NULL,
  `donasi` int(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id_donasi`, `donasi`, `tanggal`) VALUES
(3, 5000000, '2022-08-01'),
(4, 6000000, '2022-08-01'),
(5, 28300000, '2022-08-04');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id_info` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(13) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id_info`, `gambar`, `alamat`, `telp`, `email`) VALUES
(1, '1659336077.png', 'Lauwba Techno Indonesia merupakan perusahaan yang bergerak dibidang teknologi informasi khususnya IT Consultant, Software Development, IT Training & Digital Marketing dengan SKT.KEMENKUMHAM RI NO AHU-0022789.AH.01.01', '027444359440', 'info@lauwba.com');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(11) NOT NULL,
  `layanan` text NOT NULL,
  `deskripsi` text NOT NULL,
  `link` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `layanan`, `deskripsi`, `link`, `gambar`) VALUES
(1, 'Zakat', 'Tidak perlu kamana mana, kami akan menjemput zakat anda, Mudah bukan?', 'https://wa.me/6281377243047', 'Zakat.png'),
(2, 'Konfirmasi Donasi', 'Sudah Transfer? yuk konfirmasikan donasi anda agar tercatat', 'https://wa.me/6281377243047?text=Saya mau konfirmasi zakat saya', 'Konfirmasi_Donasi.png'),
(3, 'Konsultasi Ziswaf', 'Konsultasi dengan konsultan Ziswaf kami, dan Jadi lebih paham', 'https://wa.me/6281377243047?text=Saya ingin konsultasi', 'Konsultasi_Ziswaf.png');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id_media` int(11) NOT NULL,
  `nama` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id_media`, `nama`, `link`) VALUES
(1, 'facebook', 'https://www.facebook.com/LauwbaTechno'),
(2, 'twitter', 'https://twitter.com/@lauwbatechno'),
(3, 'instagram', 'https://www.instagram.com/lauwba_techno/'),
(4, 'linkedin', 'https://www.linkedin.com/lauwba_techno/');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `email`, `subject`, `pesan`) VALUES
(1, 'wigenta', 'www@gmail.com', 'test', 'lauwba techno'),
(2, 'Andi Budiarto', 'andi11@gmail.com', 'Saya Ingin Donasi', 'Harus Konsultasi Dengan Siapa');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id_program` int(11) NOT NULL,
  `program` text NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id_program`, `program`, `deskripsi`, `gambar`) VALUES
(1, 'Program Sosial', 'Sebagai wujud pelayanan kepada mustahik, penerima manfaat dan masyarakat umum, Dompet Lauwba di lima pilarnya juga menggulirkan layanan sosial. Di ranah layanan sosial, Dompet Lauwba memaksimalkan peran dalam melayani kerja-kerja kemanusiaan bagi masyarakat. Di antaranya adalah Layanan Masyarakat, Disaster Management Center, Tebar Hewan Kurban, dan Advokasi Publik.\r\n\r\nKonsentrasi kegiatan Dompet Lauwba di layanan sosial salah satunya adalah pada optimalisasi dana zakat dengan memberikan pelayanan terhadap mustahik dan masalah keummatan. Utamanya sebagai upaya pemenuhan basic needs masyarakat. Terlebih pada sektor kebencanaan, Dompet Lauwba berupaya menghadirkan respon cepat, yaitu 1 x 24 jam hadir di medan bencana. Tentu tujuannya adalah melakukan respon cepat dan menghadirkan bantuan dasar bagi masyarakat terdampak.\r\n\r\nDompet Lauwba menyakini bahwa pengelolaan sektor sosial harus dilakukan bukan hanya untuk menolong sesama. Tetapi juga upaya meningkatkan kualitas kehidupan insan manusia. Berbagai layanan mustahik dihadirkan. Sentuhan modal usaha bagi ibu tangguh dan keluarga tangguh. Kemudian respon dan bantuan kebencanaan, berbagi berkah daging melalui Tebar Hewan Kurban hingga pendampingan advokasi bagi masyarakat bergulir di pilar sosial.\r\n\r\nDalam meluaskan jangakauan layanan Dompet Lauwba mengoptimalkan peran kerelawanan dan bersinergi dengan asset lembaga lokal yang ada. Sehingga dapat menumbuhkan jiwa kerelawanan di masyarakat. Tak lupa, Dompet Lauwba juga berkolaborasi dengan pemerintah sebagai pemangku kebijakan dalam setiap kerja-kerja sosial kemanusiaan.\r\n\r\n                                    ', 'Program_Sosial.jpg'),
(2, 'Program Dakwah dan Budaya', 'Lini program Dakwah dan Budaya menjadi gerbang untuk menguatkan literasi pemahaman Islam bagi masyarakat, khususnya di pelosok negeri, sekaligus merawat keberagaman budaya bangsa. Di mana di negeri ini budaya menjadi salah satu gerbang masuknya Islam di nusantara. Sehingga Islam yang Rahmatan lil alamin semakin meluas dengan pemahaman yang baik dan benar bagi masyarakat di pelosok Indonesia.\r\n\r\nDi program Dakwah dan Budaya Dompet Lauwba mengembangkan beragam aktivitas yang di antaranya adalah Corps Dai Dompet Lauwba (Cordofa), Dai Ambasaador, Pesantren Muallaf, Bina Rohani Pasien, Bina Santri Lapas, Badan Pemulasaran Jenazah, Kampung Silat Jampang, Jampang English Village, dan Serambi Budaya. Dari beragam aktivitas tersebut Dompet Lauwba tentu tidak sendirian. Selain menghadirkan amanah para donatur maupun muzakki sampai ke penerima manfaat, tentu berakam kolaborasi mengiringinya. Jalinan dengan pemerintah seperti Kemenkumham di Direktorat Jenderal Pemasyarakatan, instansi swasta hingga jaringan pemerintahan di luar negeri terus hadir menguatkan ikhtiar dakwah.\r\n\r\nPenguaan program dakwah Dompet Lauwba hadirkan mulai dari mendidik dan menyiapkan para dai, menugaskan untuk berdakwah sekaligus menghadirkan program pemberdayaan masyarakat lainnya di penempatan tugas. Kawasan terluar, pelosok dan perbatasan menjadi tujuan dakwah dari dai-dai Dompet Lauwba. Kemudian di mancanegara, kawasan negara dengan penduduk muslim minoritas tak luput dari sasaran dakwah. Tentu tujuannya adalah menjadi oase syiar-syiar Islam Rahmatan lil alamin ke seluruh penjuru dunia.\r\n\r\nKemudian lini budaya tak Dompet Lauwba tinggalkan dalam penguatan program. Lantaran para wali dan ulama dalam menyebarkan Islam di Nusantara, telah menggunakan kesenian dan budaya lokal sebagai media dakwah kepada masyarakat. Sebagai wujud pelestarian budaya Nusantara sebagai media dakwah Islam, Dompet Lauwba mengguirkan berbagai program budaya.                                                                       ', 'Program_Dakwah_dan_Budaya.jpeg'),
(3, 'Program Ekonomi', 'Sebagai langkah mewujudkan keberdayaan dan kemandirian ekonomi masyarakat, Dompet Lauwba merancang program pemberdayaan di bidang ekonomi. Program tersebut sebagai wujud mendayagunakan dana zakat, infak, sedekah, dan wakaf (ZISWAF) amanah para donatur. Selain ZISWAF, pada pengembangan program ekonomi, Dompet Lauwba turut merancang skema dan kolaborasi blended finance. \r\n\r\nPemberdayaan ekonomi Dompet Lauwba tujukan untuk mengangkat harkat hidup mustahik, dhuafa dan masyarakat prasejahtera dengan orientasi peningkatan penghasilan. Dari program tersebut, donatur Dompet Lauwba mengharapkan para mustahik memiliki pengetahuan tentang usaha, kemampuan untuk mengakses modal, meminimalkan resiko, mengelola usaha, pasar dan mengendalikan aset ekonomi.\r\n\r\nPertanian Sehat, Peternakan Rakyat, UMKM Kreatif, Social Trust Fund, Agroindustri, Sentra Ternak, Kebun Pangan Keluarga, Cash for Work, menjadi ragam program pemberdayaan ekonomi. Kemudian, sebagai pengembangan program dan inovasi, Dompet Lauwba menghadirkan DD Farm sebagai pengembangan kawasan pemberdayaan ekonomi berbasis pertanian, perikanan, dan peternakan. Ada lebih dari 1.000 Hektare lahan pertanian, belasan sentra ternak dan sejumah sentra perikanan hadir dalam pengembangan DD Farm, yang tentunya akan terus bertumbuh seiring perjalanan.\r\n\r\nKolaborasi baik donatur, stakeholder untuk memberdayakan mustahik atau penerima manfaat menjadi langkah strategis penguatan dan kesuksesan program ekonomi. Karena di pemberdayaan program ekonomi Dompet Lauwba mengelola amanah donatur dan menggulirkannya untuk penerima manfaat mulai dari pelatihan, permodalan, pendampingan hingga monitoring dan evaluasi.\r\n\r\nKemudian penerapan teknologi dengan mengedepankan khazanah kekayaan lokal, faktor kelembagaan, pola kemitraan yang sejajar, saling menguntungkan, dan saling menghadirkan keterkaitan antara pemerintah, petani/produsen, pihak swasta, serta lembaga penyedia teknologi. Sehingga dapat diterapkan untuk mengangkat dan memajukan program pemberdayaan ekonomi.                                                                         ', 'Program_Ekonomi.png'),
(4, 'Program Pendidikan', 'Sebagai salah satu upaya dalam memutus rantai kemiskinan, Dompet Lauwba menghadirkan ragam program pendidikan yang dapat diakses masyarakat dhuafa dan prasejahtera. Langkah tersebut Dompet Lauwba hadirkan baik dalam wujud pendidikan formal, informal, dan kelas-kelas vokasi. Tentu mimpinya adalah mencetak insan-insan intelektual yang mampu membangkitkan atau mengangkat keberdayaan keluarga. Karena melalui insan berpendidikan, tentu akan menjadi generasi baru pemutus jerat problem ekonomi keluarga dhuafa maupun prasejahtera.\r\n\r\nProgram pendidikan Dompet Lauwba hadir menyentuh siswa hingga tenaga pendidik. Sehingga dapat membentuk SDM berkarakter dan berkompetensi global menuju Indonesia berdaya.\r\nUpaya menyukseskan program pendidikan tersebut Dompet Lauwba kemas melalui ragam program yang di antaranya adalah SMART Ekselensia Indonesia, E-Tahfizh School, Beastudi Indonesia, Makmal Pendidikan, Sekolah Guru Indonesia, Institut Kemandirian, Pusat Belajar Anti Korupsi, Komunitas Filantropi Pendidikan, School for Refugees, PAUD Pengembangan Insani. Intervensi program untuk menguatkan anak-anak dhuafa berprestasi dari level dasar hingga perguruan tinggi dan pembekalan pendidikan invormal maupun kelas vokasi.\r\n\r\nTentu semuanya hadir dari kebaikan-kebaikan masyarakat untuk turut mencerdaskan bangsa. Sehingga, hadirnya generasi cerdas dalam keluarga dhuafa dan prasejahtera, akan mengubah kehidupan kedepannya.                                                                        ', 'Program_Pendidikan.jpg'),
(5, 'Program Kesehatan', 'Di program kesehatan, Dompet Lauwba mendirikan berbagai lembaga kesehatan. Tujuannya untuk melayani seluruh mustahik dengan sistem yang mudah dan terintegrasi.\r\n\r\nSejak 2001, Dompet Lauwba telah memulai peran aktif di bidang kesehatan untuk melayani kaum dhuafa. Melalui program Layanan Kesehatan Cuma-cuma (LKC), beragam intervensi di bidang kesehatan hadir. Baik bersifat preventif, promotif dan kuratif. LKC memberikan akses layanan kesehatan yang layak dan optimal secara tidak berbayar bagi kaum dhuafa.\r\n\r\nDalam perjalanannya, LKC Dompet Lauwba harus melayani pasien-pasien dhuafa yang membutuhkan pelayanan spesialistik, rawat inap dan tindakan operatif. Karena itulah Dompet Lauwba melalui Yayasan Rumah Sehat Terpadu mendirikan pelayanan kesehatan tingkat rujukan yang akan memberikan pelayanan kesehatan tingkat rujukan sekelas rumah sakit. Layanan tersebut dinamakan RS Rumah Sehat Terpadu (RST) Dompet Lauwba yang resmi melayani sejak 4 Juli 2012.\r\n\r\nPerjalanan di atas, terus melecut Dompet Lauwba untuk mengembangkan layanan kesehatan bagi masyarakat dhuafa dan prasejahtera dengan lebih baik lagi. Selain layanan yang lengkap mulai dari poliklinik, dokter spesialis, ruang operasi, rawat inap, UGD, apotek, hingga metode pengobatan komplementer. Dompet Lauwba juga meluaskan layanan kesehatan ke berbagai wilayah Indoneia. Sehingga penerima manfaat akan lebih banyak lagi yang merasakan layanan tersebut.\r\n\r\nHingga saat ini, Dompet Lauwba telah mengembangkan fasilias kesehatan tingkat 1 dengan jumlah 19 Klinik Gerai Sehat, 71 Pos Sehat, dan 1 Unit Klinik Terapung. Kemudian di layanan fasilitas kesehatan tingkat 2 ada beberapa layanan rumah sakit yang di antaranya adalah RS. Rumah Sehat Terpadu, RSIA Sayyidah, RS. AKA Medika Sribhawono, RS. Mata Achmad Wardi, RS. Griya Medika Tulangbawang, RS. Lancang Kuning, dan RS. Hasyim Asyari Tebuireng. Semuanya tersebar di seluruh Indoneia baik gerai sehat, klinik, maupun rumah sakit. Bergulir dengan kolaborasi dana zakat, infak, sedekah dan wakaf (Ziswaf). Karena seha milik semua.                                                                        ', 'Program_Kesehatan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id_visi_misi` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visi_misi`
--

INSERT INTO `visi_misi` (`id_visi_misi`, `visi`, `misi`) VALUES
(1, 'Terwujudnya masyarakat Dunia yang berdaya melalui pelayanan, pembelaan, dan pemberdayaan berbasis pada sistem berkeadilan.                                    ', 'Membangun gerakan pemberdayaan Dunia untuk mendorong transformasi tatanan sosial masyarakat berbasis nilai keadilan,\r\nMewujudkan pelayanan, pembelaan dan pemberdayaan yang berkesinambungan serta berdampak pada kemandirian masyarakat yang berkelanjutan,\r\nMewujudkan keberlanjutan organisasi melalui tata kelola yang baik (Good Governance), professional, adaptif, kredibel, akuntabel, dan inovatif.\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id_donasi`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id_media`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id_program`);

--
-- Indexes for table `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id_visi_misi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id_visi_misi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
