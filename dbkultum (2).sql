-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2020 at 04:17 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkultum`
--

-- --------------------------------------------------------

--
-- Table structure for table `asal`
--

CREATE TABLE `asal` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `asal`
--

INSERT INTO `asal` (`id`, `nama`) VALUES
(2, 'DKI Jakarta'),
(1, 'Jawa Barat');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(3, 'Adab'),
(1, 'Al-Qur\'an'),
(4, 'Kisah'),
(2, 'Nasihat');

-- --------------------------------------------------------

--
-- Table structure for table `kultum`
--

CREATE TABLE `kultum` (
  `id` int(11) NOT NULL,
  `judul` varchar(55) NOT NULL,
  `isi` text DEFAULT NULL,
  `tanggal` datetime NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `santri_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kultum`
--

INSERT INTO `kultum` (`id`, `judul`, `isi`, `tanggal`, `kategori_id`, `santri_id`) VALUES
(1, 'Ketika Allah Berfirman Dengan Kata Bersuku-Kata Dua', 'Jika kita perhatikan, di dalam al-Qur’an, ada sejumlah kata yang terdiri dari dua suku kata yang diulang. Berikut ini kita lihat beberapa contoh:\r\n\r\n1. Kata “صرصر” dalam firman Allah SWT berikut ini:\r\n\r\nوَأَمَّا عَادٌ فَأُهْلِكُوا بِرِيحٍ صَرْصَرٍ عَاتِيَةٍ\r\n“Sedangkan kaum ‘Ad, mereka telah dibinasakan dengan angin topan yang sangat dingin”. (QS al-Haaqah: 6)\r\n\r\nKata صرصر di ayat tersebut umumnya diterjemahkan sebagai “angin topan”, walaupun — menurut saya — tidak seratuspersen tepat. Mengapa? Sebab, semua kata yang terdiri dari dua suku kata seperti itu menunjukan peristiwa yang terulang bolak-balik terus menerus.\r\n\r\nTerjemahan “angin topan” punya pemahaman, angin yang bertiup kencang dalam satu arah. Misalnya, angin yang bertiup dari arah barat ke arah timur dengan kecepatan tinggi.\r\n\r\nSemestinya, صرصر itu berarti angin bertiup bolak-balik menimpa kaum ‘Ad. Jadi, dia bukan sekedar angin topan, tetapi angin puting beliung (twister) yang memporak-porandakan. Kita bisa bayangkan, beberapa waktu lalu, angin puting beliung yang hanya sebentar saja bisa memporak-porandakan sebagian kota Bogor, maka apalagi angin yang menimpa kaum ‘Ad. Sebab di ayat berikutnya dijelaskan, mereka dihantam selama tujuh malam delapan hari.\r\n\r\nسَخَّرَهَا عَلَيْهِمْ سَبْعَ لَيَالٍ وَثَمَانِيَةَ أَيَّامٍ حُسُومًا فَتَرَى الْقَوْمَ فِيهَا صَرْعَىٰ كَأَنَّهُمْ أَعْجَازُ نَخْلٍ خَاوِيَةٍ (7)\r\nYang Allah menimpakan angin itu kepada mereka selama tujuh malam dan delapan hari terus menerus; maka kamu lihat kaum ‘Aad pada waktu itu mati bergelimpangan seakan-akan mereka tunggul pohon kurma yang telah kosong (lapuk)” (QS al-Haqqah: 7)\r\n\r\n2. Contoh kedua adalah kata زلزال dalam firman Allah SWT,\r\n\r\nإِذَا زُلْزِلَتِ الْأَرْضُ زِلْزَالَهَا\r\n“Apabila bumi diguncangkan dengan guncangan yang dahsyat”, (QS al-Zilzalah: 1).\r\n\r\nKata “زلزال” juga menunjukan proses dari dua arah. Yaitu, apabila bumi diguncangkan dengan gempa yang menggoyang keras. Tentu, gempa itu terjadi dengan “sekali goyang ke kanan, sekali bergoyang ke kiri”.\r\nDalam bahasa Indonesia, kita suka bilang “zigzag” untuk orang yang berkendara meliuk-liuk ke kanan dan kiri.\r\n\r\nKata yang lebih dahsyat dari زلزال adalah kata دمدم dalam firman Allah SWT,\r\n\r\nفَكَذَّبُوهُ فَعَقَرُوهَا فَدَمْدَمَ عَلَيْهِمْ رَبُّهُم بِذَنبِهِمْ فَسَوَّاهَا\r\n“Namun mereka mendustakannya dan menyembelihnya, karena itu Tuhan membinasakan mereka karena dosanya, lalu diratakan-Nya (dengan tanah)” (QS As-Syams: 14).\r\n\r\nPada ayat itu, Allah membinasakan kaum Nabi Shaleh dengan cara lebih dahsyat dari sekedar gempa (زلزال). Yaitu dengan diruntuhkan bangunan rumah mereka dan diratakan dengan tanah. Kata yang digunakan Allah adalah “دمدم” yang juga terdiri dari dua suku kata yang berulang, dan bermakna (kurang lebih) gempa terjadi ke atas dan ke bawah secara terus menerus hingga rumah mereka rata ditelan bumi. Jadi دمدم itu lebih dahsyat dari زلزال\r\n\r\nSemula kita tak bisa membayangkan bagaimana gempa membuat rumah tertelan bumi, tapi begitu gempa Palu terjadi, kita melihat ada jalan raya yang bisa lebih tinggi dari atap rumah akibat goyangan gempa. Mungkin gempa Palu adalah contoh دمدم yang ringan sedangkan kaum Nabi Shaleh mengalami guncangan yang sangat dahsyat. Anda tahu, apa kesalahan utama kaum Nabi Sholeh? Sebab mereka selalu berlaku curang!\r\n\r\n3. Contoh ketiga. Ada kata lain yang menggunakan dua suku kata dan diulang, yaitu kata عسعس dalam firman Allah SWT,\r\n\r\nوَاللَّيْلِ إِذَا عَسْعَس\r\n“Demi malam apabila telah larut” (QS At-Takwir: 17).\r\n\r\nNah, penerjemahan “malam telah larut” apakah tepat di ayat ini? Mengingat kata-kata lain yang mengunakan dua suku kata yang diulang menunjukan peristiwa yang berulang.\r\n\r\nLalu, mengapa kita menerjemahkannya “menjadi larut”, padahal peristiwa larut itu sekali saja?\r\n\r\nHal lain yang menarik di ayat ini, Allah menggambarkan malam sebagai suatu makhluk ciptaan-Nya. Hari menjadi “malam” bukan semata karena “hilangnya cahaya matahari”, tetapi dia merupakan makhluk yang diciptakan oleh-Nya. Maka, dalam ayat lain, misalnya, Allah berfirman:\r\n\r\nوَجَعَلْنَا اللَّيْلَ لِبَاسًا\r\n“Dan telah Kami jadikan (ciptakan) malam sebagai pakaian”. (QS An-Naba: 10).\r\n\r\nAda begitu banyak ayat yang menceritakan penciptaan malam. Ketika Thomas Alva Edison menemukan lampu pijar, dia menemukan sumber cahaya buatan yang dihasilkan melalui penyaluran arus listrik melalui filamen yang kemudian memanas dan menghasilkan cahaya. Kaca yang menyelubungi filamen panas tersebut menghalangi udara untuk berhubungan dengannya sehingga filamen tidak akan langsung rusak akibat teroksidasi.\r\n\r\nTetapi, belum ada manusia yang bisa “menciptakan” malam hingga hari ini. Buktinya? Belum ada alat yang bisa mengantarkan “malam” seperti lampu listrik yang bisa mengantarkan cahaya.\r\n\r\nMungkin, itulah di antara rahasia ilmu pengetahuan dalam al-Qur’an yang perlu kita pelajari bersama.', '2020-02-05 00:00:00', 1, 1),
(2, 'Hadits Qudsi tentang larangan Zhalim', 'Di awal kultum Ramadhan ini, Ustadz Abdul Hafidz mengutip sebuah hadits qudsi yang menegaskan tentang larangan berbuat zhalim.\r\n\r\nعَن أَبِي ذَرٍّ اْلغِفَارِي عَن النّبِيّ صلى الله عليه وسلم فِيمَا رَوَىَ عَنِ اللّهِ تَبَارَكَ وَتَعَالَى أَنّهُ قَالَ:\r\n\r\nيَا عِبَادِي إِنّي حَرّمْتُ الظّلْمَ عَلَىَ نَفْسِي وَجَعَلْتُهُ بَيْنَكُمْ مُحَرّماً فَلاَ تَظَالَمُوا\r\n\r\nArtinya: “Dari Abu Dzar al-Ghifâri Radhiyallahu anhu bahwa Nabi Shallallahu ‘alaihi wa sallam meriwayatkan firman Allah Azza wa Jalla , “Wahai hamba-Ku! Sesungguhnya Aku mengharamkan kezhaliman atas diri-Ku dan Aku menjadikannya haram di antara kalian. Maka, janganlah kalian saling menzhalimi.””\r\n\r\nTiga jenis kezhaliman\r\n1. Zhalim pada pencipta\r\nPada kultum ramadhan ini, Ustadz Abdul Hafidz lebih lanjut menjelaskan bahwa setidaknya ada 3 jenis kezhaliman. Yang pertama adalah kezhaliman seorang manusia terhadap penciptanya. Bentuk kezhaliman ini adalah nifaq, kufur, dan syirik. Allah SWT berfirman dalam surat Luqman: 13\r\n\r\nإِنَّ الشِّركَ لَظُلمٌ عَظيمٌ\r\n\r\nArtinya: “Sesungguhnya mempersekutukan (Allah) adalah benar-benar kezhaliman yang besar.”\r\n\r\nAllah berfirman juga dalam surat Al-Baqarah: 254\r\n\r\nوَالكافِرونَ هُمُ الظّالِمونَ\r\n\r\nArtinya; “Orang-orang kafir itulah orang yang zhalim.”\r\n\r\n2. Zhalim pada orang lain\r\nBentuk kedua dari kezhaliman adalah zhalim pada manusia lainnya. Dalam Surat Asy-Syuraa ayat 42 Allah berfirman,\r\n\r\nإِنَّمَا السَّبيلُ عَلَى الَّذينَ يَظلِمونَ النّاسَ وَيَبغونَ فِي الأَرضِ بِغَيرِ الحَقِّ ۚ أُولٰئِكَ لَهُم عَذابٌ أَليمٌ\r\n\r\n“Sesungguhnya kesalahan hanya ada pada orang-orang yang berbuat zhalim kepada manusia dan melampaui batas di bumi tanpa (mengindahkan) kebenaran. Mereka itu mendapat siksa yang pedih.”\r\n\r\n3. Zhalim pada diri sendiri\r\nBentuk yang ketiga adalah zhalim kepada diri sendiri. Bagaimana seseorang dapat menzhalimi dirinya sendiri? Seseorang telah menzhalimi dirinya sendiri ketika ia melakukan dosa dan kemaksiatan. Allah SWT berfirman dalam surat Fathir ayat 32:\r\n\r\nثُمَّ أَورَثنَا الكِتابَ الَّذينَ اصطَفَينا مِن عِبادِنا ۖ فَمِنهُم ظالِمٌ لِنَفسِهِ وَمِنهُم مُقتَصِدٌ وَمِنهُم سابِقٌ بِالخَيراتِ بِإِذنِ اللَّهِ ۚ ذٰلِكَ هُوَ الفَضلُ الكَبيرُ\r\n\r\nArtinya: “Kemudian Kitab itu Kami wariskan kepada orang-orang yang Kami pilih di antara hamba-hamba Kami, lalu di antara mereka ada yang menzhalimi diri sendiri, ada yang pertengahan dan ada (pula) yang lebih dahulu berbuat kebaikan dengan izin Allah. Yang demikian itu adalah karunia yang besar.”\r\n\r\nDalam surat Ali-Imran ayat 117, Allah SWT berfirman:\r\n\r\nوَما ظَلَمَهُمُ اللَّهُ وَلٰكِن أَنفُسَهُم يَظلِمونَ\r\n\r\nArtinya: “Allah tidak menzhalimi mereka, tetapi mereka yang menzhalimi diri sendiri.”', '2020-02-15 01:46:41', 2, 1),
(7, 'Hukum Merayakan Hari Valentine', 'Tanggal 14 Februari setiap tahunnya, dirayakan sebagai hari Valentine oleh sejumlah orang di berbagai belahan dunia. Ini merupakan hari ketika orang-orang mengekspresikan kasih sayangnya untuk orang lain, khususnya pasangan.\r\n\r\nHari Valentine yang memiliki akar pada tradisi masa Romawi Kuno dan hari untuk memperingati kematian pendeta penebar kasih, Santo Valentine, ini selalu mengundang perdebatan di Indonesia.\r\nBeberapa pihak beranggapan bahwa merayakan Valentine haram hukumnya karena hari kasih sayang tersebut bukan termasuk budaya Islam. Berikut penjelasan hukum hari Valentine dalam Islam berdasarkan opini berbagai organisasi Islam.\r\nMenurut Majelis Ulama Indonesia\r\nMajelis Ulama Indonesia (MUI) Jawa Timur kembali  mengingatkan umat Islam tentang Fatwa MUI Nomor 3 Tahun 2017 yang mengharamkan perayaan hari Valentine setiap 14 Februari.\r\nTerdapat tiga alasan yang melandasi larangan ini. Pertama, karena Valentine disinyalir bukan termasuk tradisi Islam, sehingga tidak perlu dirayakan. Kedua, Valentine dianggap menjurus pada pergaulan bebas seperti hubungan badan di luar nikah. Ketiga tradisi Valentine berpotensi menimbulkan keburukan.\r\n\r\nMUI Jawa Timur melandasi fatwa tersebut berdasarkan Al-Qur’an, Hadits, dan pendapat Ulama, diantaranya Hadits Riwayat Abu Dawud:\r\n“Dari Abdullah bin Umar berkata, bersabda RasulullahSaw: Barang siapa yang menyerupakan diri pada suatukaum, maka dia termasuk golongan mereka”.(H.R. AbuDawud, no. 4031)\r\nFirman Allah Swt yang menjelaskan tentang pentingnya mempertegas jati diri keislaman dengan menunjukkan identitas muslim,  yang dengan sendirinya  menolak menyerupai identitas agama selain Islam.\r\n“Katakanlah (Muhammad), \"Wahai ahli Kitab! marilah(berpegang) kepada suatu kalimat (ketetapan) yang tidak ada perselisihan antara kami dan kamu, bahwa kita tidakmenyembah selain Allah dan kita tidak mempersekutukan-Nya dengan sesuatu pun, dan bahwa kita tidak menjadikansatu sama lain tuhan-tuhan selain Allah\". Jika merekaberpaling maka katakanlah (kepada mereka) \"Saksikanlah,bahwa kami adalah orang-orang muslim\"(Q.S. Ali Imran[3]: 64)\r\nPertimbangan Nahdlatul Ulama\r\nDalam artikel karya Ahmad Naufa Khoirul Faizun yang dimuat pada situs NUonline, beliau  menekankan pada perayaan Valentine yang Islami.\r\nIntinya, Hari Valentine dianggap sebagai ‘bungkus’ atau label yang substansinya harus diisi dengan cara merayakan yang tidak bertentangan dengan agama. Ini karena ajaran kasih sayang dalam Islam adalah ajaran yang tidak berlaku surut. Umat Islam selalu dituntut untuk saling mengasihi dan menolong sesama.\r\nCara yang dapat dilakukan adalah Valentine yang memang dari budaya barat difilter menjadi budaya yang secara substansi tak bertentangan dengan ajaran Islam. Ini telah dicontohkan oleh para Walisongo yang menunjukkan tradisi dan budaya non-Islam berhasil diislamisasi secara substansi. Seperti wayang yang isinya mendekatkan kepada ajaran tauhid dan banyak memuat ajaran kebaikan.\r\nMenurut Muhammadiyah\r\nTahun lalu, Muhammadiyah menyoroti persoalan hari Valentine. Serupa dengan MUI Jawa Timur, kegiatan ini dianggap tidak pantas dirayakan dan ditiru karena bukan budaya yang datang dari agama islam. Menyikapi ini, Muhammadiyah menyarankan agar organisasi-organisasi remaja harus kreatif  dan dituntut untuk mencari kegiatan-kegiatan positif sebagai tandingan budaya Valentine.', '2020-02-19 01:53:18', 2, 3),
(9, 'Cara menggaet hati wanita', 'Datangi rumahnya\r\ndekati orang tuanya\r\nsayangi adiknya\r\nnikahi kakaknya', '2020-02-19 00:42:08', 3, 2),
(10, 'Selangkah menuju kesuksesan', 'Assalamualaikum semua\r\nAna masih istiqomah disini\r\n\r\nJadi gini\r\nAda Handi Ada Syauqi Syauqi ini\r\n\r\nAntum tau cara menuju kesuksesan?\r\n\r\nEits itu calon istri ana cantik banget\r\n\r\nEit dah', '2020-02-19 00:40:46', 2, 3),
(11, 'Tes', 'ini untuk mengetes', '2020-02-19 01:54:27', 1, 0),
(12, 'tesssssss', 'qwertyuiop', '2020-02-19 01:55:20', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `tingkatan` enum('SMP','SMK') NOT NULL,
  `asal_id` int(11) NOT NULL,
  `alamat` text DEFAULT NULL,
  `kelas` varchar(3) NOT NULL,
  `tempat_lahir` varchar(45) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `foto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`id`, `nama`, `tingkatan`, `asal_id`, `alamat`, `kelas`, `tempat_lahir`, `tanggal_lahir`, `foto`) VALUES
(0, 'Fulan', 'SMP', 1, NULL, '1', 'TIdak diketahui', '1990-01-06', NULL),
(1, 'Juned', 'SMP', 1, NULL, '8C', 'Depok', '2005-03-09', NULL),
(2, 'Handi', 'SMK', 2, 'Perum. Maria No.48\r\nDepok', '3', 'Somewhere on Java', '1990-01-06', NULL),
(3, 'Syauqi', 'SMP', 2, 'Bougenville Apartement 3 No. 504\r\nJakarta Timur', '2', 'Desa Penari', '2020-02-18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `santri_id` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` enum('Administrator','Moderator','Member') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Member',
  `pictures` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `santri_id`, `email`, `email_verified_at`, `password`, `roles`, `pictures`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', NULL, 'admin@kultumsantri.id', NULL, '$2y$10$FFh65l4Ba40TR8GKY0c6z.GTopY46x1ogFHccEypSRU7AiEI7vuCq', 'Administrator', NULL, NULL, '2020-02-10 20:44:15', '2020-02-10 20:44:15'),
(3, 'kemal', NULL, 'kemal@kultumsantri.id', NULL, '$2y$10$Vo12IiO6T3PSTBv/CnXywesUSN6MWz4PZYIPNKqG8U/j42M.RGetO', 'Administrator', 'kemal.jpg', NULL, '2020-02-10 21:17:58', '2020-02-10 21:17:58'),
(4, 'juned', NULL, 'juned@kultumsantri.id', NULL, '$2y$10$0A4HUXdjSbdzAGarkEvwr.pvhxekXaAsLkHjJzrUq0fIsbhQuG.li', 'Member', NULL, NULL, '2020-02-13 20:05:10', '2020-02-13 20:05:10'),
(5, 'handi', 2, 'handi@kultumsantri.id', NULL, '$2y$10$3uTF8sNDKJzc3vQzOfP7wOYYq72sSfLlxCYh3aEDjyCuv3Yl3VQsG', 'Member', NULL, NULL, '2020-02-17 00:14:05', '2020-02-17 00:14:05'),
(6, 'syauqi', 3, 'syauqi@kultumsantri.id', NULL, '$2y$10$YevlOfWONKwpBqu0Qu8LR.se8N29x3yeiVDmJ1D8Aaf5KsTqDVGYa', 'Member', NULL, NULL, '2020-02-18 17:34:24', '2020-02-18 17:34:24');

-- --------------------------------------------------------

--
-- Table structure for table `ustadz`
--

CREATE TABLE `ustadz` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `jabatan` int(11) NOT NULL,
  `foto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asal`
--
ALTER TABLE `asal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_UNIQUE` (`nama`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_UNIQUE` (`nama`);

--
-- Indexes for table `kultum`
--
ALTER TABLE `kultum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kultum_kategori1_idx` (`kategori_id`),
  ADD KEY `fk_kultum_santri1_idx` (`santri_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`),
  ADD KEY `kelas` (`kelas`),
  ADD KEY `fk_santri_asal1_idx` (`asal_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `fk_santri_id1_idx` (`santri_id`) USING BTREE;

--
-- Indexes for table `ustadz`
--
ALTER TABLE `ustadz`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ustadz_jabatan1_idx` (`jabatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asal`
--
ALTER TABLE `asal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kultum`
--
ALTER TABLE `kultum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kultum`
--
ALTER TABLE `kultum`
  ADD CONSTRAINT `fk_kultum_kategori1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_kultum_santri1` FOREIGN KEY (`santri_id`) REFERENCES `santri` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `santri`
--
ALTER TABLE `santri`
  ADD CONSTRAINT `fk_santri_asal1` FOREIGN KEY (`asal_id`) REFERENCES `asal` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`santri_id`) REFERENCES `santri` (`id`);

--
-- Constraints for table `ustadz`
--
ALTER TABLE `ustadz`
  ADD CONSTRAINT `fk_ustadz_jabatan1` FOREIGN KEY (`jabatan`) REFERENCES `jabatan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
