-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2017 at 11:36 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batik`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_artikel` int(11) NOT NULL,
  `foto_artikel` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `artikel` text NOT NULL,
  `oleh` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_artikel`, `foto_artikel`, `judul`, `tanggal`, `jam`, `artikel`, `oleh`) VALUES
(1, 'Akn.png', 'Sejarah Batik Di Indonesia', '2017-05-25', '16:30:14', '<div style=\"text-align: justify;\">Pengakuan ini dilakukan secara resmi pada sidang UNESCO di Abu Dhabi. Sebagai ungkapan rasa bahagia, maka setiap tanggal 2 Oktober ditetapkan sebagai Hari Batik. Batik Indonesia dinilai sarat teknik, simbol, dan budaya yang terkait dengan kehidupan masyarakat. Hal ini tentu saja membanggakan kita karena sebelumnya batik juga diklaim oleh negara lain sebagai warisan nenek moyang mereka.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Memang sejak lama ada berbagai pengaruh luar yang terdapat pada batik. Namun, akulturasi atau adaptasi budaya tersebut tidak mungkin dihindarkan. Contohnya saja Candi Borobudur. Berbagai pengaruh budaya India, tampak jelas dari keagamaan yang diwakili atau relief cerita yang terpahat pada dinding candi. Namun Candi Borobudur tetap diakui sebagai karya agung bangsa Indonesia sampai sekarang.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\"><strong><br />Asli Indonesia<br /></strong><br />Sebenarnya wacana tentang batik sebagai karya adiluhur mulai terlontar pada abad ke-19. Ketika itu pakar budaya Hindia Belanda, JLA Brandes mengatakan bahwa batik merupakan peninggalan asli milik bangsa Indonesia. Menurutnya, segala unsur dalam batik itu tidak dipengaruhi kebudayaan India, baik yang bercirikan Hinduisme maupun Buddhisme.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Pada awalnya pendapat Brandes itu mendapat tentangan dari sejumlah pakar budaya lain, di antaranya NJ Krom. Dia mengatakan bahwa batik sudah lama dikenal di India. Contohnya adalah seni batik yang berkembang di pantai Koromandel. Dari India, menurut Krom, seni itu dibawa ke Indonesia melalui jalur perdagangan.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Ada sebuah mitos bahwa pada abad ke-7 seorang pangeran dari pantai timur Jenggala bernama Lembu Amiluhur memperisteri seorang puteri bangsawan dari Koromandel. Puteri itu lalu mengajari seni membatik, menenun, dan mewarnai kain kepada para dayangnya. Maka dari itu orang-orang Jawa memiliki kemampuan membatik.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Pakar lain mengungkapkan, kemungkinan batik mulai diperkenalkan pada abad ke-7 hingga ke-8 oleh masyarakat Cina. Awalnya, pada abad-abad itu sejumlah kerajaan kuno di Indonesia mengirimkan misi diplomatik dan perdagangan ke Cina.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Sebagai negara penghasil keramik terbesar, konon di Cina didapati semacam motif batik pada keramik zaman dinasti Tang. Bahkan keramik tersebut juga dibuat dengan sistem batik, yakni bejana keramik diolesi malam (sejenis lilin) terlebih dulu, sebelum dilapisi dengan glasir. Pecahan keramik Cina tiga warna yang mirip batik seperti itu, banyak ditemukan pada situs-situs arkeologi di sekitar Candi Prambanan (Satyawati Suleiman, 1986:161). Temuan-temuan itulah yang rupanya mendasari teori bahwa batik berasal dari Cina.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Sebagian besar pakar sepakat bahwa asal-muasal batik adalah dari Indonesia. Kemungkinan, motif batik terinspirasi dari pola anyaman pada tembikar yang berasal dari masa prasejarah. Karena pada masa itu bahan pakaian dibuat dari kulit kayu dan serat tumbuh-tumbuhan, maka motif batik masih sangat primitif. Demikian pula pewarnaannya masih menggunakan manambul, yakni bahan pewarna alami yang menghasilkan warna gelap atau hitam, sebagaimana disebutkan dalam Prasasti Alasantan dari masa abad ke-10 Masehi.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Sebagian pakar menduga, batik memang berasal dari Cina dan/atau India. Namun, dengan teknologi tradisional, batik dikembangkan oleh masyarakat Jawa dengan segala filosofinya.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Diperkirakan, tradisi batik berawal di sekitar abad-abad ke-10, meskipun sulit melacak pastinya. Apalagi kata batik tidak ditemukan dalam bahasa Sansekerta atau Jawa kuno, bahasa mayoritas waktu itu. Ada dugaan kata batik berasal dari kata Melayu kuno tik yang berarti titik. Kain batik pada awalnya memang adalah kain yang dihiasi dengan gambar yang dibuat dari garis-garis dan titik-titik.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Pendapat lain mengatakan, kata batik berasal dari bahasa Jawa amba (menulis) dan titik, lalu diambil suku kata belakangnya saja: ba dan tik. Memang, pembuatan kain batik menggunakan canting yang ujungnya kecil, sehingga memberi kesan &ldquo;orang sedang menulis titik-titik&rdquo;. Dalam bahasa Jawa krama, batik disebut seratan, sementara dalam bahasa Jawa ngoko disebut tulis. Yang dimaksud adalah menulis dengan lilin.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Industri batik dalam bentuknya yang paling sederhana, diperkirakan mulai dikembangkan pada abad ke-10 itu juga ketika Jawa banyak mengimpor kain putih (kain mori) dari India sebagaimana diungkapkan berbagai sumber kuno. Bisa jadi lebih berkembang pada abad ke-11, saat sebuah prasasti menyebutkan kata &ldquo;tulis&rdquo; yang berkonotasi menorehkan desain batik dengan sejenis alat (canting).</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Selain sumber tertulis berupa prasasti, motif-motif seperti batik bisa ditelusuri lewat sejumlah relief cerita di Candi Borobudur. Hanya penafsirannya masih memerlukan bahan pembanding lebih banyak. Persoalannya adalah batu-batu candi itu sudah agak aus, sehingga detail gambar kurang terlihat nyata.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\"><strong><br />Arca<br /></strong><br />Informasi yang lebih akurat tentang batik ditafsirkan dari berbagai kain yang dikenakan oleh sejumlah arca batu. Terutama pada arca-arca yang berukuran relatif besar dari zaman Majapahit. Konon arca Kertarajasa yang merefleksikan pendiri Majapahit, Raden Wijaya, dalam perwujudannya sebagai Harihara, memakai motif batik kawung. Karena itu kemudian batik kawung dianggap sebagai batiknya para raja atau bangsawan di Jawa.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Begitu pula pada arca Prajnaparamita yang terdapat di Candi Gumpung, Muara Jambi. Arca Harihara dan Prajnaparamita diperkirakan berasal dari abad ke-13. Jika motif pada arca tersebut boleh disebut sebagai batik, maka penciptaan batik merupakan perjalanan panjang cipta karsa peradaban manusia Nusantara sejak berabad sebelumnya.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Tafsiran lain mengatakan pola ceplok yang merupakan pola-pola batik kuno terdapat pada berbagai hiasan arca di candi-candi Hindu dan Buddha. Bentuknya adalah kotak, lingkaran, binatang, bentuk tertutup, dan garis-garis miring. Dasar pola ceplok paling nyata terdapat pada arca Buddha Mahadewa dari Tumpang dan arca Berkuti dari Candi Jago.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\"><strong><br />Perkembangan Batik<br /></strong><br />Seni membatik mulai membudaya pada abad ke-12. Mula-mula berkembang di Pulau Jawa, terutama di daerah Surakarta (Solo) dan Yogyakarta. Diperkirakan batik mulai dikenal luas pada abad ke-17. Semula batik ditulis dan dilukis pada daun lontar, dengan dominasi bentuk binatang dan tanaman. Namun lambat laun muncul motif abstrak yang menyerupai awan, relief candi, wayang beber, dan sebagainya. Sebuah catatan tertulis menyebutkan batik baru muncul pada 1518 di wilayah Galuh, sekitar Barat Laut Jawa di masa pra-Islam.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Jenis dan corak batik tradisional sendiri tergolong amat banyak. Corak dan variasinya disesuaikan dengan filosofi dan budaya masing-masing daerah yang memiliki kebudayaan atau tradisi batik.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Sejarah batik di Indonesia sangat boleh jadi berkaitan dengan Kerajaan Mataram Hindu (abad ke-9 hingga ke-10) dan Kerajaan Majapahit (abad ke-13 dan seterusnya). Pengembangan batik kemudian banyak dilakukan pada masa-masa Kerajaan Mataram Islam, diteruskan pada masa Kasunanan Surakarta dan Kasultanan Yogyakarta.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Pada awalnya, batik merupakan kesenian gambar di atas kain yang dikhususkan untuk pakaian keluarga para raja Jawa dan para pengikutnya. Karena itu batik hanya dikerjakan terbatas dalam lingkungan keraton. Namun karena banyak pengikut raja bertempat tinggal di luar keraton, maka kesenian batik ini dibawa ke luar keraton dan dikerjakan di rumah masing-masing abdi dalem.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Selanjutnya kesenian batik ini ditiru oleh rakyat terdekat dan meluas menjadi pekerjaan rumah tangga kaum wanita untuk mengisi waktu senggang. Maka, batik yang tadinya hanya pakaian keluarga istana, kemudian menjadi pakaian rakyat yang digemari oleh wanita dan pria dari segala golongan ataupun umur.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\"><strong><br />Majapahit<br /></strong><br />Batik semakin berkembang setelah akhir abad ke-18, paling tidak awal abad ke-19. Batik yang dihasilkan mulanya adalah batik tulis sampai awal abad ke-20. Batik cap baru dikenal seusai Perang Dunia I atau sekitar tahun 1920.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Batik yang telah menjadi kebudayaan di Kerajaan Majapahit, konon jejak-jejaknya masih dapat ditelusuri di daerah Mojokerto, Tulung Agung, dan Jombang. Sampai akhir abad ke-19 kerajinan batik masih populer di Mojokerto.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Tersebarnya batik ke berbagai wilayah, salah satunya karena dampak Perang Diponegoro (1825-1830). Ketika itu pasukan-pasukan Kiai Maja mengundurkan diri ke arah timur yang sekarang bernama Majan. Maka dikenallah nama Batik Majan yang muncul seusai Perang Diponegoro itu.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Di sejumlah daerah penyebarluasan seni batik dilakukan oleh putri keraton Solo yang menikah dengan Kiai Hasan Basri. Di antaranya dibawa ke Tegalsari dan Ponorogo, yang memang tidak jauh dari Solo. Yang pertama dikenal adalah batik tulis. Pembuatan batik cap di Ponorogo baru dikenal setelah Perang Dunia I, dibawa oleh seorang Cina bernama Kwee Seng dari Banyumas.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Dari kerajaan-kerajaan di Solo dan Yogyakarta, batik kemudian menyebar ke berbagai daerah, khususnya di wilayah Pulau Jawa. Kalau pada awalnya batik hanya sekadar hobi dari para keluarga raja di dalam berhias lewat pakaian, maka pada masa-masa selanjutnya batik dikembangkan menjadi komoditi perdagangan. Selama bertahun-tahun Batik Solo sangat disukai kalangan ningrat karena corak dan pola tradisionalnya sangat khas, misalnya Batik Sidamukti dan Sidaluhur.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Di Yogyakarta batik mulai dikenal pada masa Kerajaan Mataram Islam dengan rajanya Panembahan Senopati. Daerah pembatikan pertama adalah di desa Plered. Pembatikan pada masa itu terbatas dalam lingkungan keluarga keraton yang dikerjakan oleh wanita-wanita pembantu ratu. Oleh karena warga masyarakat tertarik pada pakaian-pakaian yang dikenakan oleh keluarga keraton, maka mereka menirunya. Akhirnya meluaslah pembatikan keluar dari tembok keraton.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Akibat dari peperangan antara keluarga raja-raja maupun dengan tentara Belanda dahulu, maka banyak keluarga raja yang mengungsi dan menetap di daerah-daerah baru, antara lain ke Banyumas, Pekalongan, Ponorogo, dan Tulungagung. Mereka ikut mengembangkan pembatikan ke seluruh pelosok pulau Jawa.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\"><strong><br />Tarumanagara<br /></strong><br />Dilihat dari peninggalan-peninggalan yang ada sekarang dan cerita-cerita turun-temurun, diperkirakan di daerah Tasikmalaya batik dikenal sejak zaman Kerajaan Tarumanagara. Kemungkinan pohon tarum yang banyak terdapat di sana dimanfaatkan untuk pembuatan batik kala itu.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Ke luar Jawa pun batik berkembang, termasuk ke Sumatera Barat. Sumatera Barat termasuk daerah konsumen batik sejak zaman sebelum Perang Dunia I, terutama batik-batik produksi Pekalongan, Solo, dan Yogyakarta. Meskipun di Sumatera Barat telah berkembang terlebih dahulu industri tenun tangan &ldquo;tenun Silungkang&rdquo; dan &ldquo;tenun plekat&rdquo;, namun batik tetap digemari masyarakat setempat.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Pembatikan mulai berkembang di Padang setelah pendudukan Jepang. Pengembangannya terjadi secara tidak disengaja. Ketika itu akibat blokade Belanda, perdagangan batik menjadi lesu. Karenanya pedagang-pedagang batik yang biasa berhubungan dengan pulau Jawa mencari jalan untuk membuat batik sendiri. Ciri khas dari Batik Padang adalah kebanyakan berwarna hitam, kuning, dan merah ungu dengan pola Banyumasan, Indramayuan, Solo, dan Yogyakarta.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Di antara berjenis-jenis batik, tidak dimungkiri kalau yang paling populer sampai sekarang adalah Batik Pekalongan. Perjumpaan masyarakat Pekalongan dengan berbagai bangsa seperti Cina, Belanda, Arab, India, Melayu, dan Jepang pada zaman lampau telah mewarnai dinamika pada motif dan tata warna seni batik. Ada beberapa jenis motif batik hasil pengaruh dari berbagai negara tersebut yang kemudian dikenal sebagai jati diri Batik Pekalongan. Motif Jlamprang, umpamanya, merupakan ilham dari India dan Arab. Lalu Batik Encim dan Klengenan, dipengaruhi oleh peranakan Cina. Batik Belanda (disebut juga Batik VOC atau Batik Kompeni), Batik Pagi Sore, dan Batik Hokokai, tumbuh pesat sejak pendudukan Jepang.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Sebagai pakaian adat yang dulu banyak dipakai kalangan keraton, tentu saja batik sudah mempunyai motif baku yang penuh filosofi. Pada dasarnya ragam hias batik yang bercirikan tradisional adalah pola geometrik (ceplokan, pola hias kawung, nitik, lereng, parang, dll) dan pola non-geometrik (sidaluhur, sidamukti, semen rama, dll).</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Dulu, pakaian batik menunjukkan status sosial. Selain itu banyak dipakai untuk upacara daur hidup. Namun dalam perkembangan selanjutnya batik berubah menjadi kain hiasan, artinya tidak digunakan semata-mata untuk pakaian tetapi juga untuk seprei, taplak meja, sarung kursi, dan sebagainya.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Patut dipertanyakan, apakah kita sudah bangga dengan ditetapkannya batik sebagai ikon warisan budaya asal Indonesia yang bertaraf internasional? Bagaimana dengan upaya pelestarian batik, yang semakin tahun semakin sedikit pendukungnya?</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Pada pertengahan 2009 Departemen Arkeologi UI diundang oleh Walikota Pekalongan untuk berkunjung ke Museum Batik di sana. Maksudnya agar Tim Arkeologi UI bisa memberikan masukan untuk pengembangan batik di museum tersebut.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Di antara kegiatan itu tim UI sempat mengunjungi pengrajin batik terkenal di masa lalu, yakni seorang pioner batik peranakan. Ironisnya, saat ini tinggal cucunya seorang diri yang mengembangkan batik tersebut. Lainnya sudah gulung tikar atau alih profesi. Cucunya ini masih bertahan hanya karena ingin mempertahankan kehidupan para pengrajin yang sudah lama ikut dengan kakeknya dulu.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Hal ini tentu sangat dilematis, mau di kemanakan bila usaha ini tutup. &ldquo;Sebagai jalan keluar Departemen Arkeologi sekarang ikut membantu memasarkan batik ini agar pengrajin terbantu, sementara batik peranakan tetap lestari,&rdquo; kata Dr. Heriyanti, salah seorang dosen di Departemen Arkeologi UI.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Pada dasarnya batik dibedakan atas dua macam berdasarkan lokasinya, yakni batik pesisiran dan batik pedalaman. Batik pesisiran lebih berkembang karena banyak mendapat pengaruh dari luar. Dari teknik pembuatannya dikenal beberapa jenis batik, yaitu batik simbut, batik tulis, batik cap, batik printing, batik prada, dan batik campuran.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\"><strong><br />Batik Pengaruh Cina<br /></strong><br />Budaya Cina banyak memengaruhi ragam hias batik di Jawa, terlebih pada daerah pesisir utara Jawa. Corak hias naga, burung hong, bunga peony, dan rumpun bambu sering dijumpai pada batik-batik tersebut. Misalnya saja pada Batik Cirebon, Batik Lasem, dan Batik Pekalongan. Begitu juga di Rembang, Juwana, dan Pati. Di ketiga daerah ini batik gaya Cinanya disebut Lok Can.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Lok Can adalah salah satu jenis batik sutera yang paling populer, arti sebenarnya adalah sutera kebiru-biruan. Dulu batik Lok Can dipasok ke Bali, Nusa Tenggara, dan Sumatera. Bahkan diekspor ke Shanghai dan Hongkong.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Di daerah Cirebon dan Lasem berkembang Batik Bang-bangan. Batik ini menggunakan warna merah (Jawa, abang) pada proses pencelupannya, di atas warna dasar coklat sehingga menghasilkan warna merah bata yang unik.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Batik biru putih disebut Batik Kelengan, banyak ditemukan di daerah Ciledug, Cirebon. Batik ini dibuat dari bahan dasar kain katun dengan proses pewarnaan dan bahan-bahan alami (Buku Pengantar Pameran Tekstil dan Busana Indonesia yang Dipengaruhi Budaya Cina, 2005)</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Pengaruh Cina tampak pula pada Batik Tiga Negeri. Dinamakan demikian karena proses pencelupan dan pelilinan berlangsung di tiga sentra batik yang berbeda, yakni Lasem, Pekalongan, dan Solo.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Salah satu corak batik pesisiran yang lumayan populer adalah Batik Buketan, dari bahasa Inggris bouquet. Batik ini sering diperkaya dengan ragam hias berupa kumpulan karangan bunga.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\"><strong><br />Penggolongan Batik<br /></strong><br />Penciptaan batik tidak terjadi begitu saja. Batik membutuhkan kain, kain membutuhkan keterampilan memintal. Memintal juga membutuhkan keterampilan memilih bahan yang tepat untuk kemudian diolah menjadi benang dan dirangkai menjadi pintalan.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Di beberapa wilayah di Indonesia, banyak dijumpai bahan-bahan pembuatan batik dari bahan alami, seperti kayu pohon mengkudu, kunyit, tinggi, soga, dan nila. Juga bahan soda yang dibuat dari soda abu serta garam yang dibuat dari tanah lumpur.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Kain batik memiliki nilai sejarah yang tak ternilai, karena pada kain batik terdapat makna suatu peristiwa, identitas, penjelasan strata sosial, bahasa kebudayaan, spiritualitas manusia, penemuan teknologi, dan perjalanan suatu peradaban.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Batik merupakan seni melukis yang dilakukan di atas kain. Dalam pengerjaannya, pembatik menggunakan lilin atau malam untuk mendapatkan ragam hias atau pola di atas kain yang dibatik dengan menggunakan alat yang dinamakan canting.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Indonesia memiki banyak karya budaya. Batik merupakan salah satu warisan budaya Indonesia yang telah diwariskan secara turun-temurun dari nenek moyang. Dibandingkan peninggalan budaya lainnya, seni batik memiliki kelebihan tersendiri. Nilai pada batik Indonesia bukan hanya semata-mata pada keindahan visual. Lebih jauh, batik memiliki nilai filosofi yang tinggi serta sarat akan pengalaman transendenitas. Nilai inilah yang mendasari visualisasi akhir yang muncul dalam komposisi batik itu.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Kegiatan membatik merupakan sebuah proses yang membutuhkan ketelatenan, keuletan, kesungguhan, dan konsistensi yang tinggi. Hal ini dapat dilihat dari serangkaian proses, mulai dari mempersiapkan kain, membuat pola, membuat isian, hingga pengeringan.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Batik dapat dilihat dari beberapa aspek, yaitu proses pembatikan, kualitas pembatikan, motif, dan warna batik. Beberapa orang ada yang memperhitungkan makna atau nilai yang terkandung dalam selembar kain batik.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Secara visual, batik mempunyai sejumlah pakem yang mesti diterapkan dalam penggunaannya. Baik dalam pakem pembuatan pola maupun pakem penggunan motif tersebut beserta acara atau upacara ritual yang akan diselenggarakan. Tidak sembarang orang boleh menggunakan pola tertentu. Pola Parang Rusak, misalnya, hanya boleh digunakan oleh Pangeran atau Pola Truntum yang diperuntukkan bagi pasangan pengantin.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Warna yang digunakan pada batik keraton terbatas pada pewarna alami. Ini karena pada masa itu belum ditemukan pewarna sintesis. Berdasarkan kosmologi Jawa, penerapan warna seperti hitam, merah, putih atau coklat mengacu pada pakem yang berlaku. Semua tata aturan tersebut bertujuan untuk penyelarasan dan harmonisasi. Penyelarasan dan harmonisasi itu sendiri merupakan suatu tujuan utama dari kearifan lokal dalam penciptaan karya seni, dalam hal ini adalah batik. Penciptaan tersebut merupakan suatu bagian dari kehidupan sehari-hari. Hal ini kiranya sesuai dengan adagium &ldquo;seni sebagai seni&rdquo;, bukan seni untuk sebatas harta.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\"><strong><br />Desain Batik<br /></strong><br />Pada umumnya ada dua jenis desain batik, yaitu geometris dan non-geometris. Desain geometris terdiri atas (1) motif parang dan diagonal, (2) persegi/persegi panjang, silang atau motif ceplok dan kawung, dan (3) motif bergelombang (limar). Sementara desain non-geometris terdiri atas (1) semen [motif semen terdiri atas flora, fauna, gunung (meru), dan sayap yang dirangkai secara harmonis], (2) buketan, dan (3) lunglungan.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Ditinjau dari jenisnya, kita mengenal batik keraton, yakni batik dari Surakarta (Solo) dan Yogyakarta (Yogya). Batik keraton memiliki beberapa motif dan filosofi. Motif Ceplokan Kasatrian digunakan oleh masyarakat kelas menengah ke bawah, orang yang mengenakannya akan terlihat gagah dan kepribadian yang berani; Motif Parang Rusak Barong (parang berarti senjata) menunjukkan kekuatan, kekuasaan, dan pergerakan yang gesit, ksatria yang mengenakan batik ini terlihat gagah dan cekatan; Motif Kawung digunakan oleh para Raja dan keluarga kerajaan, sebagai sebuah simbol kekuasaan dan keadilan; Motif Truntum (truntum berarti membimbing), mengandung makna bahwa diharapkan orang yang memakainya dapat memperoleh dan memberi kebaikan.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Jenis lainnya adalah batik pesisir, yakni batik yang dibuat di luar daerah Solo dan Yogyakarta. Beberapa contohnya Motif Megamendung dari Cirebon, Motif Paksinagaliman dari Cirebon, Motif Merak Ngibing dari Indramayu, dan Motif Sawat Gunting, juga dari Indramayu.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Batik harus benar-benar kita lestarikan. Pengalaman yang lalu-lalu menunjukkan pelestarian berbagai peninggalan masa lampau hampir selalu terabaikan karena masalah dana. Nah, mulailah membuka mata, perjuangan keras agar batik tidak diklaim negara lain sudah berhasil, kini upaya pelestarian harus benar-benar dipikirkan.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\"><strong><br />BOX<br /></strong><br /><strong><br />Sejarah Teknik Batik<br /></strong><br />Seni pewarnaan kain dengan teknik pencegahan pewarnaan menggunakan malam adalah salah satu bentuk seni kuno. Penemuan di Mesir menunjukkan bahwa teknik ini telah dikenal sejak abad ke-4 SM, dengan ditemukannya kain pembungkus mumi yang juga dilapisi malam untuk membentuk pola. Di Asia, teknik serupa batik juga diterapkan di Cina, semasa Dinasti T&rsquo;ang (618-907) serta di India dan Jepang semasa Periode Nara (645-794). Di Afrika, teknik seperti batik dikenal oleh Suku Yoruba di Nigeria, serta Suku Soninke dan Wolof di Senegal. Di Indonesia, batik dipercaya sudah ada semenjak zaman Majapahit, dan menjadi sangat populer akhir abad XVIII atau awal abad XIX. Batik yang dihasilkan ialah semuanya batik tulis sampai awal abad XX. Batik cap baru dikenal setelah Perang Dunia I atau sekitar tahun 1920-an.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Walaupun kata &ldquo;batik&rdquo; berasal dari bahasa Jawa, kehadiran batik di Jawa sendiri tidak tercatat. G.P. Rouffaer berpendapat bahwa teknik batik ini kemungkinan diperkenalkan dari India atau Srilangka pada abad ke-6 atau ke-7.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Di sisi lain, J.L.A. Brandes dan F.A. Sutjipto percaya bahwa tradisi batik adalah asli dari daerah seperti Toraja, Flores, Halmahera, dan Papua. Perlu dicatat bahwa wilayah tersebut bukanlah area yang dipengaruhi oleh Hinduisme tetapi diketahui memiliki tradisi kuna membuat batik.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">G.P. Rouffaer juga melaporkan bahwa pola gringsing sudah dikenal sejak abad ke-12 di Kediri, Jawa Timur. Dia menyimpulkan bahwa pola seperti ini hanya bisa dibentuk dengan menggunakan alat canting, sehingga ia berpendapat bahwa canting ditemukan di Jawa pada masa sekitar itu.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Legenda dalam literatur Melayu abad ke-17, Sulalatus Salatin menceritakan Laksamana Hang Nadim yang diperintahkan oleh Sultan Mahmud untuk berlayar ke India agar mendapatkan 140 lembar kain serasah dengan pola 40 jenis bunga pada setiap lembarnya. Karena tidak mampu memenuhi perintah itu, dia membuat sendiri kain-kain itu. Namun sayangnya kapalnya karam dalam perjalanan pulang dan hanya mampu membawa empat lembar sehingga membuat sang Sultan kecewa. Serasah itu ditafsirkan sebagai batik.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Dalam literatur Eropa, teknik batik ini pertama kali diceritakan dalam buku History of Java (London, 1817) tulisan Sir Thomas Stamford Raffles. Ia pernah menjadi Gubernur Inggris di Jawa semasa Napoleon menduduki Belanda.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Pada 1873 seorang saudagar Belanda Van Rijekevorsel memberikan selembar batik yang diperolehnya saat berkunjung ke Indonesia ke Museum Etnik di Rotterdam dan pada awal abad ke-19 itulah batik mulai mencapai masa keemasannya. Sewaktu dipamerkan di Exposition Universelle di Paris pada tahun 1900, batik Indonesia memukau publik dan seniman.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Sejak industrialisasi dan globalisasi, yang memperkenalkan teknik otomatisasi, batik jenis baru muncul. Dikenal sebagai batik cap dan batik cetak, sementara batik tradisional yang diproduksi dengan teknik tulisan tangan menggunakan canting dan malam disebut batik tulis. Pada saat yang sama imigran dari Indonesia ke Persekutuan Malaya juga membawa batik bersama mereka.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\"><strong><br />Budaya Batik<br /></strong><br />Batik adalah kerajinan yang memiliki nilai seni tinggi dan telah menjadi bagian dari budaya Indonesia, khususnya Jawa, sejak lama. Perempuan-perempuan Jawa di masa lampau menjadikan keterampilan mereka dalam membatik sebagai mata pencaharian, sehingga di masa lalu pekerjaan membatik adalah pekerjaan eksklusif perempuan sampai ditemukannya &ldquo;Batik Cap&rdquo; yang memungkinkan masuknya laki-laki ke dalam bidang ini. Ada beberapa pengecualian bagi fenomena ini, yaitu batik pesisir yang memiliki garis maskulin seperti yang bisa dilihat pada corak &ldquo;Mega Mendung&rdquo;, dimana di beberapa daerah pesisir pekerjaan membatik adalah lazim bagi kaum lelaki.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Tradisi membatik pada mulanya merupakan tradisi yang turun-temurun, sehingga kadang kala suatu motif dapat dikenali berasal dari batik keluarga tertentu. Beberapa motif batik dapat menunjukkan status seseorang. Bahkan sampai saat ini, beberapa motif batik tadisional hanya dipakai oleh keluarga keraton Yogyakarta dan Surakarta.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Batik merupakan warisan nenek moyang Indonesia yang sampai saat ini masih ada. Batik pertama kali diperkenalkan kepada dunia oleh Presiden Soeharto, yang pada waktu itu memakai batik pada Konferensi PBB.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\"><strong><br />Corak Batik<br /></strong><br />Ragam corak dan warna batik dipengaruhi oleh berbagai pengaruh asing. Awalnya, batik memiliki ragam corak dan warna yang terbatas, dan beberapa corak hanya boleh dipakai oleh kalangan tertentu. Namun batik pesisir menyerap berbagai pengaruh luar, seperti para pedagang asing dan juga pada akhirnya, para penjajah. Warna-warna cerah seperti merah dipopulerkan oleh Tionghoa, yang juga mempopulerkan corak phoenix. Bangsa penjajah Eropa juga mengambil minat kepada batik, dan hasilnya adalah corak bebungaan yang sebelumnya tidak dikenal (seperti bunga tulip) dan juga benda-benda yang dibawa oleh penjajah (gedung atau kereta kuda), termasuk juga warna-warna kesukaan mereka seperti warna biru. Batik tradisonal tetap mempertahankan coraknya, dan masih dipakai dalam upacara-upacara adat, karena biasanya masing-masing corak memiliki perlambangan masing-masing.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Pada awalnya baju batik kerap dikenakan pada acara acara resmi untuk menggantikan jas. Tetapi dalam perkembangannya pada masa Orde Baru baju batik juga dipakai sebagai pakaian resmi siswa sekolah dan pegawai negeri (batik Korpri) setiap hari Jumat. Perkembangan selanjutnya batik mulai bergeser menjadi pakaian sehari-hari terutama digunakan oleh kaum wanita. Pegawai swasta biasanya memakai batik pada hari Kamis atau Jumat.</div>\r\n<div style=\"text-align: justify;\">&nbsp;</div>\r\n<div style=\"text-align: justify;\">Di Malaysia setiap Kamis, semua pegawai negeri lelaki diharuskan memakai baju batik Malaysia mulai 17 Januari 2008. Ketua Pengarah Jabatan Perkhidmatan Awam Tan Sri Ismail Adam telah membagikan kepada semua jabatan kerajaan. Sebelum ini peraturan memakai baju batik hanya pada Sabtu saja. Kemudian diubah kepada hari ke-1 dan hari ke-15 setiap bulan. Tetapi banyak yang melupakannya.</div>', 'erik'),
(5, 'artikel5.jpg', 'Museum Batik di Pekalongan', '2017-05-25', '16:29:52', '<p style=\"text-align: justify;\">Museum Batik Pekalongan diresmikan oleh Presiden Republik Indonesia ke-6 Susilo Bambang Yudhoyono pada tanggal 12 Juli 2006. Banhunan Museum ini mempunyai luas sekitar 2500 m2menempati lahan seluas 3675 m2. Bangunan yang ditempati adalah bangunan peninggalan Belanda yang telah berdiri sejak tahun 1906 yang pada awalnya berfungsi sebagai kantor administrasi keuangan pabrik gula yang berada di sekitar area karisidenan Pekalongan. Pada perkembangannya, gedung ini mengalami beberapakali perubahan fungsi sebagai Balai Kota, Kantor Walikota, hingga komplek perkantoran Pemerintah Kota.<br />Museum Batik Pekalongan menyimpan banyak koleksi batik tua hingga modern baik itu yang berasal dari daerah pesisiran, daerah pedalaman dan area Jawa lainnya, batik dari berbagai daerah di Nusantaara seperti dari Sumatera, Kalimantan, hingga Papua, dan kain jenis teknik batik dari manca negara.<br />Tidak hanya memamerkan koleksi batik, Museum Batik Pekalongan juga adalah pusat pelatihan membatik dan pusat pembelajaran batik. Pelajar maupun pengunjung umum dapat belajar membuat batik ataupun melakukan penelitian mengenai budaya batik. Museum Batik Pekalongan juga mempunyai program-program pelatihan membatik baik ke masyarakat secara langsung, ke berbagai sekolah, hingga ke berbagai institusi lainya. Berbagai kerjasama dengan berbagai pihak juga dilakukan guna pelestarian budaya batik. Semua hal itu dilakukan sesuai dengan komitmen Museum Batik Pekalongan untuk terus menjaga dan melestarikan budaya warisan nenek moyang yang bernilai adiluhung ini.</p>', 'erik'),
(7, 'logohimatikakn.png', ' CIRI KHAS UNIK BATIK PEKALONGAN', '2017-05-25', '16:34:23', '<p class=\"tentang-batik\" style=\"text-align: justify;\">Pekalongan merupakan salah satu kota atau daerah yang terkenal menjadi pusat kerajinan kain batik, dan disebut sebagai sentra batik. Berkunjung ke kota ini Kita akan menjumpai sebagian besar masyarakatnya mencari nafkah dengan menjadi pengrajin batik. Saat ini kain batik menjadi jenis kain yang sangat populer dan peminatnya pun semakin besar, bahkan oleh masyarakat luar negeri. Sebagai pusat kerajinan batik, ternyata batik yang dihasilkan memiliki ciri khas unik, diantaranya:<br /><br /></p>\r\n<p class=\"tentang-batik\" style=\"text-align: justify;\">&nbsp;</p>\r\n<ol type=\"1\">\r\n<li style=\"text-align: justify;\"><strong>Mayoritas bermotif bunga</strong><br /><br />Apabila diperhatikan motif pada batik yang dihasilkan pengrajin asal Pekalongan memiliki motif bunga yang mendominasi. Motif bunganya pun relatif berukuran kecil sehingga berbeda dengan motif bunga pada daerah lain di Jawa Tengah. Umumnya berukuran lebih besar, namun pada batik dari Pekalongan motifnya lebih mungil dan tampil segar membalut tubuh wanita yang berbadan subur sehingga terkesan lebih ramping dari efek ukuran bunga tersebut.<br /><br /></li>\r\n<li style=\"text-align: justify;\"><strong>Batik dengan warna cerah</strong><br /><br />Batik yang berasal dari tanah Jawa biasanya memiliki warna yang lebih gelap dominasinya adalah warna coklat dan juga hitam. Namun, warna cerah seolah menjadi ciri khas dari batik Pekalongan yang sudah cukup terkenal ke banyak daerah. Hanya di Pekalongan Kita bisa menjumpai batik dengan warna khas pesisir yang lebih cerah dan terang. Dengan mudah Kita bisa menemukan warna jingga, merah muda atau pink, salem, biru, hijau, dan warna cerah lainnya.<br /><br /></li>\r\n<li style=\"text-align: justify;\"><strong>Motif dipenuhi dengan garis dan titik,</strong><br /><br />Selain motif bunga yang nampak mencolok, motif pada batik dari Pekalongan juga terlihat semakin unik dengan keberadaan motif riil-nya. Sebab bunga kecil-kecil akan diapit oleh motif garis dan juga titik sehingga tampilan motifnya terkesan lebih nyata. Kain batik pun penuh dengan sentuhan motif sehingga terkesan lebih ramai, semarak, dan juga penuh. Motif seperti ini bahkan bisa Kita jumpai pada kain jenis modern, seperti motif pada kain katun maupun kain jenis lainnya.<br /><br /></li>\r\n<li style=\"text-align: justify;\"><strong>Motif khas keturunan Tiongkok</strong><br /><br />Bagi yang berkunjung ke Pekalongan dan menemukan motif batik diluar motif bunga maka dapat dipastikan. Bahwa batik tersebut dibuat oleh pengrajin keturunan orang Tiongkok dengan corak khas hewan. Corak hewannya pun tidak mencakup semua jenis hewan, namun terdapat dua jenis motif yakni motif burung Phoenix dan juga motif naga. Bisa pula menemukan kedua macam motif ini terdapat pada satu kain batik dengan tetap memiliki warna cerah khas warna masyarakat pesisir.<br /><br /></li>\r\n<li style=\"text-align: justify;\"><strong>Batik motif Jlamprang</strong><br /><br />Ciri khas lain yang cukup menarik pada batik asli Pekalongan adalah terdapat motif bernama Jlamprang yang berupa motif titik dengan bentuk geometris. Motif ini berupa kumpulan titik yang dibuat membentuk sebuah motif yang serupa dari ujung kain batik ke ujung lainnya. Motif ini tetap menggunakan warna cerah dan biasanya menggabungkan antara satu warna cerah dengan yang lainnya. Ciri khas motif Jlamprang batik Pekalongan ini dipengaruhi oleh kebudayaan masyarakat Arab yang memang tidak menggambar motif benda hidup.</li>\r\n</ol>', 'erik');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`, `level`) VALUES
(1, 'erik', '6a42dd6e7ca9a813693714b0d9aa1ad8', 'erikwibo@gmail.com', 'superadmin'),
(2, 'taufiq', 'f4eff635e6dfe584a1a536dbc7718f3d', 'taufiq0397@gmail.com', 'admin'),
(5, 'dewi', 'ed1d859c50262701d92e5cbf39652792', 'dewi@gmail.com', 'admin'),
(6, 'iqbal', 'iqbal', 'iqbal@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `ukuran` varchar(3) NOT NULL,
  `foto_barang` varchar(50) NOT NULL,
  `diskon` tinyint(4) NOT NULL,
  `harga` int(11) NOT NULL,
  `harga_diskon` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_kategori`, `id_jenis`, `nama_barang`, `ukuran`, `foto_barang`, `diskon`, `harga`, `harga_diskon`, `deskripsi`, `tanggal`) VALUES
(18, 3, 1, 'Batik Couple 7', 'L', 'couple7.jpg', 1, 400000, 350000, 'Deskripsi batik akan ditulis di sini.\r\ndeskrispsi dibuat agar pembeli dapat lebih yakin untuk membeli produk.', '2017-05-07'),
(19, 3, 2, 'Batik Couple 3', 'XL', 'couple3.jpg', 0, 350000, 0, 'Deskripsi batik akan ditulis di sini.\r\ndeskrispsi dibuat agar pembeli dapat lebih yakin untuk membeli produk.', '2017-05-07'),
(21, 1, 2, 'Batik Pria 8', 'M', 'pria8.jpg', 1, 150000, 125000, 'Deskripsi batik akan ditulis di sini.\r\ndeskrispsi dibuat agar pembeli dapat lebih yakin untuk membeli produk.', '2017-05-07'),
(22, 3, 2, 'Batik Couple 8', 'M', 'couple8.jpg', 0, 350000, 0, 'Deskripsi batik akan ditulis di sini.\r\ndeskrispsi dibuat agar pembeli dapat lebih yakin untuk membeli produk.', '2017-05-23'),
(23, 3, 2, 'Batik Couple 2', 'L', 'couple2.jpg', 1, 500000, 400000, 'Deskripsi batik akan ditulis di sini.\r\ndeskrispsi dibuat agar pembeli dapat lebih yakin untuk membeli produk.', '2017-05-23'),
(25, 1, 1, 'Batik Pria 4', 'L', 'pria4.jpg', 0, 200000, 0, 'Deskripsi batik akan ditulis di sini.\r\ndeskrispsi dibuat agar pembeli dapat lebih yakin untuk membeli produk.', '2017-05-23'),
(26, 2, 2, 'Batik Wanita 3', 'L', 'wanita3.jpg', 1, 200000, 150000, 'Deskripsi batik akan ditulis di sini.\r\ndeskrispsi dibuat agar pembeli dapat lebih yakin untuk membeli produk.', '2017-05-23'),
(28, 2, 1, 'Batik Wanita 1', 'M', 'wanita1.jpg', 0, 400000, 250000, 'Deskripsi batik akan ditulis di sini.\r\ndeskrispsi dibuat agar pembeli dapat lebih yakin untuk membeli produk.', '2017-05-23'),
(29, 2, 3, 'Batik Wanita 9', 'M', 'wanita9.jpg', 1, 175000, 150000, 'Deskripsi batik akan ditulis di sini.\r\ndeskrispsi dibuat agar pembeli dapat lebih yakin untuk membeli produk.', '2017-05-23'),
(30, 1, 1, 'Batik Pria 6', 'M', 'pria6.jpg', 1, 240000, 150000, 'Deskripsi batik akan ditulis di sini.\r\ndeskrispsi dibuat agar pembeli dapat lebih yakin untuk membeli produk.', '2017-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pemesanan`
--

CREATE TABLE `detail_pemesanan` (
  `id_detail_pemesanan` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga_total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `id_inbox` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `pesan` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id_inbox`, `email`, `tanggal`, `jam`, `pesan`) VALUES
(29, 'qomariyahqori@yahoo.co.id', '2017-04-24', '14:53:55', 'Kecewa sama pelayanannya... gak mau beli di sini lagi!!!!!'),
(31, 'wibowoerick@gmail.com', '2017-04-24', '14:54:54', 'Coba dulu nanti tambahin bintang lagi...'),
(35, 'wibowoerick@gmail.com', '2017-04-26', '09:55:03', 'test'),
(43, 'wibowoerick@gmail.com', '2017-04-27', '18:47:12', 'eeeeee'),
(44, 'qomariyahqori@yahoo.co.id', '2017-04-27', '18:47:51', 'qqqqq'),
(45, 'erikwibo@gmail.com', '2017-04-28', '00:23:59', 'bagus sekali!'),
(46, 'wibowoerick@gmail.com', '2017-04-30', '23:55:29', 'wwwwww'),
(47, 'wibowoerick@gmail.com', '2017-05-03', '09:43:18', 'test'),
(48, 'erikwibo@gmail.com', '2017-05-04', '21:27:48', 'eeee'),
(49, 'erikwibo@gmail.com', '2017-05-04', '21:29:06', 'rrrr'),
(50, 'erikwibo@gmail.com', '2017-05-04', '21:30:19', 'fffff');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`, `alamat`) VALUES
(1, 'Tulis', 'index.php?page=tulis'),
(2, 'Cap', 'index.php?page=cap'),
(3, 'Sablon', 'index.php?page=sablon');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `alamat`) VALUES
(1, 'Pria', 'index.php?page=pria'),
(2, 'Wanita', 'index.php?page=wanita'),
(3, 'Couple', 'index.php?page=couple');

-- --------------------------------------------------------

--
-- Table structure for table `logadmin`
--

CREATE TABLE `logadmin` (
  `id_log` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `ip_adrress` int(11) NOT NULL,
  `device` varchar(50) NOT NULL,
  `Browser` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nomor_id` varchar(20) NOT NULL,
  `nama_member` varchar(20) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nomor_id`, `nama_member`, `alamat`, `no_hp`, `email`, `password`, `tanggal`) VALUES
(5, '452454654635', 'Erik', 'Kajen', '085891124448', 'erikwibo@gmail.com', 'erik', '2017-04-28'),
(6, '5376765868', 'Taufiq', '', '85653424356', 'taufiq@gmail.com', 'taufiq', '2017-04-28'),
(7, '44656778', 'dewi', '', '088667644234', 'dewi@gmail.com', 'dewi', '2017-04-28'),
(8, '123456789', 'rudi', '', '087654321', 'rudi@gmail.cim', '12345', '2017-05-02'),
(9, '27', 'Xball', '', '85200173760', 'Xball499@gmail.com', '123456789', '2017-05-02'),
(11, '1234567', 'Qomariyah', 'eeeee', '12333333', 'email', '3333333', '2017-05-25'),
(12, '321432423', 'Gabriel', 'New York City', '34455435', 'email', 'qwerty', '2017-05-25'),
(13, '12345', 'bejo', 'talun', '085678978910', 'email', '456789', '2017-05-30'),
(14, '12345', 'bejo', 'sragi', '085678978910', 'email', 'bejo', '2017-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `tgl_pembelian` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `jam_pemesanan` time NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `id_website` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`id_website`, `nama`, `logo`) VALUES
(5, 'Distro Batik Pekalongan', 'logo-shop-red.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `fk_kategori_barang` (`id_kategori`),
  ADD KEY `fk_jenis_barang` (`id_jenis`);

--
-- Indexes for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD PRIMARY KEY (`id_detail_pemesanan`),
  ADD KEY `fk_detailpemesanan_pemesanan` (`id_pemesanan`),
  ADD KEY `fk_detailpemesanan_barang` (`id_barang`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id_inbox`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `logadmin`
--
ALTER TABLE `logadmin`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `fk_admin_log` (`id_admin`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `fk_pembelian_pemesanan` (`id_pemesanan`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `fk_member_pemesanan` (`id_member`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id_website`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  MODIFY `id_detail_pemesanan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id_inbox` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `logadmin`
--
ALTER TABLE `logadmin`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `id_website` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
