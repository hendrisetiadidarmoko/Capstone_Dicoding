-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 09:07 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edugot_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `release_date` varchar(45) DEFAULT NULL,
  `creator` varchar(45) DEFAULT NULL,
  `url_img` varchar(200) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `release_date`, `creator`, `url_img`, `user_id`) VALUES
(1, 'Polisi Dorong Kelurahan di Pesanggrahan Budi Daya Maggot demi Urai Sampah', 'Polsek Pesanggrahan mengedukasi warga di kawasan Petukangan Utara, Pesanggrahan, Jakarta Selatan, untuk membudidayakan hewan pengurai sampah, maggot. Setiap kelurahan di Pesanggrahan didorong aktif membudidayakan maggot.\r\n\"Misalnya gini, di Pesanggrahan itu ada 5 kelurahan, dari kelurahan itu baru ada satu atau dua, kita pengen setiap kelurahan ada perwakilannya kalau perlu setiap RW ada pengelolaan-pengelolaan sampah seperti ini yang berkaitan ketahanan ekonomi,\" kata Kapolsek Pesanggrahan, Kompol Nazirwan, kepada wartawan, Selasa (1/11/2022).\r\n\r\nBaca artikel detiknews, \"Polisi Dorong Kelurahan di Pesanggrahan Budi Daya Maggot demi Urai Sampah\" selengkapnya https://news.detik.com/berita/d-6382084/polisi-dorong-kelurahan-di-pesanggrahan-budi-daya-maggot-demi-urai-sampah.', '2023-12-04 06:07:46', 'Mulia Budi', 'assets/article-images/Polisi Dorong Kelurahan di Pesanggrahan Budi Daya Maggot demi Urai Sampah.jpg', 1),
(3, 'Polisi Dorong Kelurahan di Pesanggrahan Budi Daya Maggot demi Urai Sampah', 'Polsek Pesanggrahan mengedukasi warga di kawasan Petukangan Utara, Pesanggrahan, Jakarta Selatan, untuk membudidayakan hewan pengurai sampah, maggot. Setiap kelurahan di Pesanggrahan didorong aktif membudidayakan maggot.\r\n\"Misalnya gini, di Pesanggrahan itu ada 5 kelurahan, dari kelurahan itu baru ada satu atau dua, kita pengen setiap kelurahan ada perwakilannya kalau perlu setiap RW ada pengelolaan-pengelolaan sampah seperti ini yang berkaitan ketahanan ekonomi,\" kata Kapolsek Pesanggrahan, Kompol Nazirwan, kepada wartawan, Selasa (1/11/2022).\r\n\r\n\"Mereka urai sampah dengan maggot namanya, hewan pengurai itu yang kecil-kecil, ulat yang kecil-kecil itu. Nah ulat itu kan ada kandungan protein tersendiri, jadi dia punya kandungan protein, begitu itu dikonsumsi oleh ternak, maka ternaknya punya kualitas, kalau ayam masa telurnya akan berkualitas, telurnya akan bagus, kalau ayam dagingnya sendiri nanti akan beda, nih ayam hidup aja nanti bulunya halus, kalau dagingnya itu gurih,\" tuturnya.\r\n\r\n\"Artinya ini buat pangan pakan ternak, dari sampah yang dibuang, maggot-nya yang dimakan bukan sampahnya, sampahnya diurai sama maggot, nah maggot-nya dikasihkan untuk pakan ternak,\" imbuhnya.\r\n\r\nDia mengatakan maggot dapat menguraikan sampah organik, seperti sisa nasi, buah, hingga sayur. Dia menjelaskan, ketika maggot mulai gemuk, warga dapat menjadikannya pakan ternak.\r\n\r\n\"Nah yang lebih unik ini adalah berkaitan dengan organik, sampah-sampah basah gitu, sampah nasi sisa makanan, buah, sayur, mereka puter, nanti mereka uraikan dengan maggot itu, dengan maggot nanti budi daya maggot mereka. Dari bibitnya kemudian mereka mengurai sampah, nanti maggot-nya besar mereka kasihkan jadi pangan pakan ternak,\" ucapnya.\r\n\r\n\"Pengolahan sampah organiknya di wilayah Pesanggrahan, mereka bisa menjamin kebersihan lingkungan, wilayah bebas sampah dan juga bisa menghasilkan secara financial serta ekonomi. Misalnya orang kan lagi tren itu bank sampah, sampah itu kan memang proses ya, metodelah, mana yang sampah organik mana yang sampah anorganik. Nah sampah anorganik ini mereka sudah ada penampungnya, nah nanti akan diakumulasi dan per bulan per tiga bulan akan dikembalikan, kontribusi ke mereka, jadi sampai yang menghasilkan,\" terangnya.\r\n\r\nLebih lanjut, dia mengatakan edukasi dan sosialisasi budi daya maggot itu dilakukan bersama tiga pilar. Dia mengatakan sosialisasi akan dilakukan secara lebih luas ke seluruh kelurahan di wilayah Pesanggrahan.\r\n\r\n\"(Edukasi budi daya maggot akan dilakukan) ke kelurahan-kelurahan lainnya,\" ucapnya.\r\n\r\nBaca artikel detiknews, \"Polisi Dorong Kelurahan di Pesanggrahan Budi Daya Maggot demi Urai Sampah\" selengkapnya https://news.detik.com/berita/d-6382084/polisi-dorong-kelurahan-di-pesanggrahan-budi-daya-maggot-demi-urai-sampah.', '2023-12-04 06:39:13', 'Mulia Budi', 'assets/article-images/Polisi Dorong Kelurahan di Pesanggrahan Budi Daya Maggot demi Urai Sampah.jpg', 1),
(4, 'Pemuda Banyuwangi Raup Cuan Lewat Sampah Melalui Budi Daya Maggot', 'Banyuwangi - Berangkat dari rasa kesal atas banyaknya sampah yang mengganggu ketika memancing di sungai, membuat anak-anak muda ini berkecimpung dalam pengelolaan sampah. Sekelompok anak muda dari Desa/Kecamatan Siliragung, Banyuwangi ini mengelola tak kurang dari 500 kilogram sampah organik tiap harinya.\r\nMereka adalah Dirga, Sundariyanto, Kacung, Kamdan, Ari, dan Taukhid. Mereka mengelola sampah organik yang diambil dari warung, tengkulak buah, dan sisa-sisa hajatan di rumah warga. Per hari sampah yang bisa diambil bisa sampai 500 kilogram atau setengah ton.\r\n\r\nSampah organik dimanfaatkan untuk budidaya maggot atau larva lalat tentara hitam (Black Soldier Fly/BSF). Sampah organik yang telah difermentasi selama dua minggu dijadikan maggot fresh dan kering. Maggot di pasaran sangat diminati sebagai pakan ternak berprotein tinggi.\r\n\r\n\r\n\"Produksi rata-rata mencapai 1 kuintal per minggu. Harga jual Rp 7000 per kilogram untuk maggot fresh dan Rp 15 000 tiap kemasan untuk maggot kering,\" ujar Sundariyanto.\r\n\r\n\'Peternakan\' maggot milik pemuda Banyuwangi (Foto: Dok. Humas Pemkab Banyuwangi)\r\n\"Permintaan maggot kering cukup banyak. Kami rutin memasok ke Bali dan Bandung,\" katanya.\r\n\r\nSundariyanto menjelaskan usaha yang dikelola bersama teman-temannya itu dimulai pada 2018 lalu. Mereka mendirikan Pega Indonesia, akronim Pemuda Etan Gladag (pemuda timur jembatan) karena lokasi pengelolaan sampah mereka berada di sisi timur jembatan desa setempat.\r\n\r\n\"Kita dulu suka nongkrong di dekat jembatan, sekaligus hobi memancing. Setiap ke sungai, kita kalau mancing sering dapat sampah. Akhirnya tercetus membikin usaha pengolahan sampah ini. Didukung oleh banyak pihak, Alhamdulillah bisa berjalan sampai sekarang,\" ujar Sundariyanto.\r\n\r\nKini mereka juga melakukan pemilahan sampah dari sumbernya dengan melibatkan warga desa setempat. Mereka melakukan sosialisasi hingga memberikan kotak sampah kepada warga di Desa Pesanggaran dan Siliragung.\r\n\r\n\"Dulu suka nongkrong, sekarang kita semua aktif mengelola sampah. Keluarga juga ikut terlibat di usaha pengelolaan sampah ini,\" kata Sundariyanto.\r\n\r\nTidak hanya maggot mereka juga menjadikan sampah untuk dijadikan pupuk organik. \"Kita lakukan pemilahan sesuai jenisnya. Lalu sampah organik kita diolah menjadi berbagai produk seperti pupuk organik cair (POC), pupuk organik padat (POP), dan insektisida pengusir lalat buah,\" lanjut Sundariyanto.\r\n\r\nSundariyanto menyebut pupuk organik dan maggot hasil produksi mereka, saat ini sudah menjadi langganan banyak petani, baik lokal maupun luar daerah. Permintaan pupuk organik cair mencapai 100 liter per bulan, dengan harga Rp 5000/ liter.\r\n\r\n\"Kami utamakan permintaan petani lokal. Karena misi kami bukan semata-mata profit, namun juga memberikan manfaat kepada warga sekitar. Untuk petani tak jarang kita kasih gratis POC, sekaligus kampanye pertanian organik,\" tandasnya.\r\n\r\nBaca artikel detikjatim, \"Pemuda Banyuwangi Raup Cuan Lewat Sampah Melalui Budi Daya Maggot\" selengkapnya https://www.detik.com/jatim/wisata/d-6620597/kalender-even-lamongan-maret-haul-agung-sunan-drajad-hingga-pawai-ogoh-ogoh.', '2023-12-04 12:17:37', 'Praditya Fauzi Rahman', 'assets/article-images/Pemuda Banyuwangi Raup Cuan Lewat Sampah Melalui Budi Daya Maggot.jpg', 1),
(5, 'Peternak Ayam Jembrana Hemat Pakan-Hilangkan Bau Manfaatkan Maggot', 'Jembrana - Beternak ayam petelur adalah bisnis yang menggiurkan. Keuntungannya bisa berlipat saat harga naik. Tetapi juga banyak risiko, salah satunya bau dan lalat dari peternakan. Sehingga tidak jarang masyarakat sekitar mengeluhkan lalat dan bau dari peternakan. Solusi semua risiko itu sebenarnya mudah, seperti yang dilakukan peternak ayam petelur di Desa Kaliakah, Kecamatan Negara, Kabupaten Jembrana, Bali.\r\nPeternakan ayam petelur dikombinasikan dengan budidaya maggot. \"Manfaatnya banyak dengan kombinasi ternak ayam petelur dengan budidaya maggot ini,\" kata Hasib Sucipto, pemilik peternakan ayam petelur kepada detikBali, Minggu, (5/6/2022).\r\n\r\nManfaatnya, yang bisa dilihat dari kualitas telurnya lebih keras kulit cangkangnya, sehingga tidak mudah pecah. Terlihat warna telur lebih coklat dibandingkan dengan telur ayam broiler lain. Selain itu, kebutuhan makanan untuk ayam bisa berkurang. Karena maggot dewasa bisa diberikan langsung pada ayam. \"Saya campur pakan ayamnya. Tidak hanya sentrat, maggot 10 persen,\" jelasnya.\r\n\r\nMaggot juga bisa digunakan untuk makanan ikan dan burung. Pemilik rumah makan ini menggunakan maggot untuk makanan ikan lele dan ikan lain yang digunakan untuk warung makan. Pakan ayam jika hanya menggunakan pelet atau sentrat, dalam sebulan Hasib Sucipto bisa menghabiskan Rp 6 juta. Namun, jika ditambah maggot bisa menghemat biaya pengeluaran pakan sekitar Rp 1 juta. Karena maggot bukan pakan utama, tetapi hanya tambahan makanan.\r\n\r\nSedangkan untuk ikan lele, bisa menghemat hingga Rp 1,2 juta. Karena biasanya, tanpa menggunakan maggot dalam tiga hari bisa menghabiskan satu karung pakan ikan lele dengan harga Rp 300 ribu. Sedangkan dengan tambahan pakan maggot, dalam seminggu hanya sekali beli pelet pakan ikan. \"Makanan untuk lele separuhnya menggunakan maggot,\" tambahnya.\r\n\r\nSementara itu, budidaya maggot di bawah kandang ayam. Tujuannya, agar maggot memakan kotoran ayam, sehingga bisa menghilangkan bau dan tidak akan ada lalat dari peternakan. Pengusaha yang disapa Cipto ini menjelaskan siklus maggot yang dibudidayakan. Lalat tentara hitam atau black soldier fly (BSF) diletakkan dalam kandang khusus untuk bertelur. Lalu telur dipindah ke wadah lain agar menetas.\r\n\r\nTelur yang menetas menjadi larva, setelah usia larva sekitar dua hari dipindah ke bawah kandang ayam. Larva yang sudah jadi maggot ini memakan kotoran ayam untuk menghilangkan bau dan lalat. Kemudian maggot dewasa sudah bisa digunakan untuk pakan ayam dan ikan. Sebagian lagi dijadikan lalat tentara hitam untuk bertelur lagi. \"Siklusnya cepat sekitar sebulan dan tidak perlu beli lagi maggot,\" tukasnya.\r\n\r\nPeternakan ayam petelur yang dikombinasikan dengan budidaya maggot ini, sudah sering menjadi percontohan peternak ayam petelur dan ayam potong di Bali. Banyak peternak ayam datang untuk belajar budidaya maggot karena peternakannya sering dikeluhkan warga sekitar.\r\n\r\n\r\n\r\nBaca artikel detikbali, \"Peternak Ayam Jembrana Hemat Pakan-Hilangkan Bau Manfaatkan Maggot\" selengkapnya https://www.detik.com/bali/berita/d-6111166/peternak-ayam-jembrana-hemat-pakan-hilangkan-bau-manfaatkan-maggot.', '2023-12-04 12:17:56', 'I Ketut Suardika', 'assets/article-images/Peternak Ayam Jembrana Hemat Pakan-Hilangkan Bau Manfaatkan Maggot.jpg', 1),
(6, 'Warga Pekalongan Budidaya Belatung Untuk Pakan Alternatif', 'Pekalongan - Belatung dianggap hewan yang menjijikkan karena sering ditemukan di tempat-tempat kotor. Namun belatung yang satu ini punya nilai ekonomis dan jadi solusi menangani limbah organik.\r\n\r\nAgus Nurokhim (41), warga Desa Sragi Kecamatan Sragi, Kabupaten Pekalongan sejak tahun 2018 lalu membudidayakannya. Ia menjadikan lahan samping rumahnya untuk beternak belatung dan lalat. Belatung atau maggot dan lalat yang dibudidayakan bukanlah lalat hijau yang menjijikan dan belatung yang berbau busuk. Jenis lalat dan maggot yang dibudidayakan yakni jenis lalat black soldier fly (BSF). Lalat BSF ini bentuknya lebih panjang dari lalat biasa. Maggot sendiri biasanya banyak dicari para peternak unggas maupun ikan sebagai campuran pakan.\r\n\r\nAgus Nurokhim yang setiap harinya sebagai pengajar di SMKN Sragi menceritakan awal mula dirinya tertarik budidaya maggot.\r\nFoto: Robby Bernardi/detikcom\r\n\r\n\"Jadi dulu saya peternak lele. Pakan lele mahal dan harga jual lele anjlok. Selalu saja rugi. Akhirnya saya coba-coba budidaya maggot ini,\" kata Agus.\r\n\r\nSaat melihat kondisi di samping rumah, tidak merasakan bau busuk meski menjadi tempat budidaya belatung atau maggot.\r\n\r\n\"Desember tahun lalu saya mulai cari-cari soal maggot dan akhirnya saya praktikkan di rumah dan ternyata berhasil,\" jelasnya.\r\n\r\nMenurutnya maggot yang sudah siap dijual berumur 15 sampai 18 hari. Sebelum menjadi bibit atau prepupa.\r\n\r\n\"Kalau sudah menjadi pupa harganya lebih mahal lagi. Soalnya itu bibitnya untuk menjadi lalat dan kemudian bertelur,\" tambah Agus.\r\n\r\nUntuk satu kilogram maggot (berumur 15-18 hari) dijual dengan harga Rp 8 ribu sampai Rp 10 ribu. Sedangkan maggot yang sudah berwarna hitam atau bibitnya prepupa 1 kg dijual Rp 60 ribu.\r\n\r\n\"Biasanya pembeli yang datang sendiri. Kebanyakan untuk campuran pakan ternak seperti ayam dan ikan,\" katanya.\r\n\r\nMenurutnya permintaan pasar dalam sehari saat ini mencapai rata-rata 30-40 kg tiap hari.\r\n\r\n\"Tidak semua kita jual termasuk prepupa. Kita kembangkan lagi menjadi lalat dan sampai bertelur dan kembali menjadi maggot,\" jelasnya.\r\n\r\nUntuk makanan maggot cukup ringan. Agus hanya mengumpulkan sampah-sampah organik baik sampah di rumah-rumah tangga maupun rumah makan.\r\n\r\n\"Ada warung makan yang menyetok sampah sehari lima kilo,\" katanya.\r\n\r\nSetiap sore seusai pulang kerja biasnya dibantu dua anaknya yakni Muhamad Agustino Bagas (11) dan Atika Zaralatifa (8) memilih maggot yang sudah menjadi prepupa untuk dikembangkan biakkan kembali.\r\n\r\n\"Berani tidak jijik. Hanya geli-geli saja. saya suka membantu ayah,\" jelas Tino.\r\n\r\nSedangkan istri Agus yakni Dyah Praptiningsih yang juga seorang pengajar di SMP tidak merasa keberatan suaminya membudidaya belatung karena tidak berbau.\r\n\r\n\"Tidak berbau seperti bayangan awalnya,\" katanya.\r\n\r\n\r\nAgus menambahkan bibit diletakan di tempat khusus selama 14 hari akan berubah menjadi lalat BSF. Setelah kawin, lalat betina bertelur. Satu induk lalat ini akan mengeluarkan banyak telur yang akan menetas selama 4-5 hari. Setelah itu akan menjadi maggot kecil hingga berumur 15-18 hari siap panen. Sebagian kecil tidak akan dipanen dan dibiarkan menjadi maggot hitam atau prepupa kembali.\r\n\r\n\"Untuk sampah sisa dari maggot ini bisa dijadikan pupuk organik,\" ungkap Agus.\r\n\r\nRata-rata, satu kilogram belatung yang dibudidaya dapat dijual dengan harga Rp 10.000 per kilogram. Selain itu, belatung juga memiliki manfaat lainnya seperti pakan ikan, burung, dan ternak. (bgk/bgs)\r\n\r\nBaca artikel detiknews, \"Warga Pekalongan Budidaya Belatung Untuk Pakan Alternatif\" selengkapnya https://news.detik.com/berita-jawa-tengah/d-4690916/warga-pekalongan-budidaya-belatung-untuk-pakan-alternatif.', '2023-12-04 12:18:15', 'Roby Bernardi', 'assets/article-images/Warga Pekalongan Budidaya Belatung Untuk Pakan Alternatif.jpg', 1),
(7, 'Cara Budidaya Maggot, Pakan Ikan Berkualitas dan Terjangkau', 'JAKARTA, KOMPAS.com - Banyak orang masih asing dengan maggot. Apabila melihatnya secara langsung, Anda mungkin menyebutnya dengan nama belatung, yang terkesan menggelikkan dan menjijikkan. Namun, maggot adalah salah satu pakan ikan berkualitas. Dikutip dari laman Dinas Lingkungan Hidup Kabupaten Grobogan, Jumat (18/8/2023), maggot adalah larva lalat Black Soldier Fly (BSF), dengan tubuh berwarna hitam. Pemerintah terus mencari bahan pakan ikan berkualitas yang harganya terjangkau. Dengan alternatif maggot, Anda dapat memberikan pakan ikan yang berkualitas dan dengan harga yang murah. Baca juga: 3 Tahap Budidaya Tanaman Turi, Bisa Dipanen untuk Pakan Ternak. Berikut cara budidaya maggot yang mudah dilakukan oleh pemula. Dikutip dari laman Dinas Pertanian & Pangan Kabupaten Demak, untuk mulai budidaya maggot, tentunya harus memiliki indukan lalat BSF terlebih dahulu. Anda bisa membeli telur BSF dengan harga pasaran yang cukup terjangkau. Saat ini sudah banyak tersedia pelaku usaha BSF yang menjual telurnya secara daring. Telur BSF ini kemudian ditetaskan pada media hatchery dengan pemberian media pakan yang sifatnya lembut dan mudah ditembus oleh maggot kecil, seperti buah-buahan, ampas tahu, atau ampas kelapa. Baca juga: Cara Menanam Rumput Pakchong untuk Pakan Ternak Adapun formulanya 3 gram telur kurang lebih 5 kg pakan basah per wadah. Pakan hanya diberikan sekali saja tanpa penambahan pakan, kecuali untuk daerah panas harus memberi air tambahan setelah beberapa hari apabila pakan mulai mengering. Pada fase ini, lalat jenis lain, terutama lalat rumah dan lalat hijau, akan berusaha untuk bertelur dan merebut makanan maggot BSF.\r\n\r\nArtikel ini telah tayang di Kompas.com dengan judul \"Cara Budidaya Maggot, Pakan Ikan Berkualitas dan Terjangkau\", Klik untuk baca: https://agri.kompas.com/read/2023/08/18/191138384/cara-budidaya-maggot-pakan-ikan-berkualitas-dan-terjangkau.', '2023-12-04 12:18:39', 'Sakina Rakhma Diah Setiawan', 'assets/article-images/Cara Budidaya Maggot, Pakan Ikan Berkualitas dan Terjangkau.jpg', 1),
(8, 'UAD Kembangkan Maggot, Solusi Pengurai Sampah Bernilai Ekonomi', 'KOMPAS.com - Laboratorium Sampah Terpadu Universitas Ahmad Dahlan (UAD) yang berada di Desa Murtigading Kabupaten Bantul DIY turut memberikan pendampingan pada permasalahan sampah. Selain ada Unit Pengolahan Sampah, laboratorium UAD itu membantu dalam pengembangan maggot. Maggot sebagai salah satu ekosistem pengurai sampah tercepat. Melansir laman UAD, Senin (20/6/2022), hal itu berawal dari Rudi, salah satu warga dusun tersebut yang membudidayakan maggot karena adanya permasalahan sampah. Baca juga: Mahasiswa UAD Bagikan Tips Melawan Stres Berat di Semester Akhir Jadi, maggot menjadi solusi masyarakat Dusun Sanggrahan untuk digunakan sebagai alat untuk mengatasi timbunan sampah rumah tangga yang tak ada habisnya itu. Selain itu, budidaya maggot ini juga mendapat dukungan serta dampingan dari salah satu dosen Program Studi (Prodi) Manajemen Universitas Ahmad Dahlan (UAD), Aditya Rechandy Christian, S.M., M.M. Menurut Staf Lurah Dusun Sanggrahan, Terina, budidaya maggot sebelumnya sudah terlaksana di desanya, tetapi masih dalam skala kecil. Pembudidayaan ini baru berjalan kurang lebih satu tahun. \"Pembudidayaan maggot memang menjadi salah satu bentuk kolaborasi yang dicanangkan oleh Dusun Sanggrahan, Kelurahan Murtigading, dengan UAD dalam pengembangan sarana Laboratorium Sampah Terpadu,\" ujarnya dikutip dari laman UAD. \"UAD sebagai model kolaborasi sejauh ini sudah melaksanakan perannya, misalnya menyelenggarakan berbagai pelatihan,\" tambah Terina. Baca juga: Webinar UAD Beberkan Cara Bangun Bisnis di Era Digital Sisa-sisa magot untuk pupuk cair Dijelaskan Rudi, sampah rumah tangga terdapat dua macam, yakni organik dan anorganik. Sampah organik berupa dedaunan yang sangat mudah terurai, sedangkan anorganik menjadi salah satu sampah yang sulit hancur. Sampah organik dapat diolah dengan komposter, dan sisa sayuran seperti bunga kol (bonggolnya) yang dicacah halus untuk menjadi kompos atau pupuk tanaman. Sisa dapur ini biasa diolah dengan alat berupa losida (lodong sisa dapur) yang berupa paralon untuk mengurai sisa-sisa sampah atau limbah dapur. Berkenaan dengan maggot, Rudi mengatakan, agar bisa mengundang lalat BSF, dapat dipancing dengan buah-buahan yang diletakkan di atas ember tumpuk, kemudian lalatnya bertelur, dan diberikan makanan untuk magot sesuai takarannya. Satu kilogram sampah dapat cepat diurai dengan 3 kilogram magot berdurasi 30 menit dengan perbandingan 3 bulan jika menggunakan komposter. Baca juga: Kuliah Umum UAD: Ini Strategi Jitu Bisnis Pasar Global lewat Medsos Hasil penguraian sampah ini menghasilkan lendi (sisa-sisa cairan yang dikeluarkan oleh magot) yang dapat digunakan untuk pupuk cair. Kemudian, sisa-sisa maggot tersebut diolah menjadi media tanam dan maggotnya difungsikan sebagai makanan lele dan ayam yang dipanen dalam 15–20 hari. Hasil panen maggot memiliki kandungan protein tinggi, yang sangat dibutuhkan untuk hewan-hewan ternak.\r\n\r\nArtikel ini telah tayang di Kompas.com dengan judul \"UAD Kembangkan Maggot, Solusi Pengurai Sampah Bernilai Ekonomi\", Klik untuk baca: https://edukasi.kompas.com/read/2022/06/21/130403471/uad-kembangkan-maggot-solusi-pengurai-sampah-bernilai-ekonomi.', '2023-12-04 12:18:51', 'Albertus Adit', 'assets/article-images/UAD Kembangkan Maggot, Solusi Pengurai Sampah Bernilai Ekonomi.jpg', 1),
(9, 'Kerap Dianggap Tak Berguna, Ternyata Ini Sejumlah Manfaat Maggot', 'Liputan6.com, Wonogiri - Maggot, atau yang biasa disebut belatung, ternyata banyak memiliki banyak manfaat untuk hewan ternak. Larva dari jenis lalat Black Soldier Fly (BSF) atau Hermetia Illucens dalam bahasa latin itu berasal dari telur dan bermetamorfosis menjadi lalat dewasa.\r\n\r\n“Maggot membantu untuk mengurai sampah organik. Maggot juga memiliki kandungan nutrisi tinggi seperti asam amino, protein, asam lemak dan mineral yang dapat dijadikan solusi bahan pakan alternatif bagi ternak,” jelas Business Development Officer PT Agroveta Husada Dharma (AHD), drh Handina Rakhmawati, M.Si, melalui keterangan pers, Senin (17/4/2023).\r\n\r\nMenurut Handina, maggot sangat efektif untuk meningkatkan performa pertumbuhan dan kesehatan ternak. Namun, dia juga mengingatkan untuk memperhatikan berbagai faktor lain.\r\n\r\nPertama, memberikan asupan pakan dengan nilai nutrisi yang cukup dan lingkungan yang sesuai bagi hewan ternak. Kedua, menurut Handina, melakukan program biosecurity guna mencegah masuknya agen penyakit pathogen ke lingkungan peternakan dengan pemberian disinfektan.\r\n\r\nKetiga, menggunakan vaksin sesuai isu penyakit yang ada. Lalu, menambahkan vitamin suplemen untuk meningkatkan daya tahan tubuh terhadap serangan penyakit.\r\n\r\n“Keempat, apbila terjadi serangan penyakit, menggunakan antibiotik yang tepat, sesuai diagnosa penyakitnya serta sesuai anjuran pengobatan,” jelas drh Handina di sela edukasi manfaat nutrisi maggot untuk ternak kepada warga Dusun Sendang, Desa Watuagung, Kecamatan Baturetno, Wonogiri, Jawa Tengah, Jumat (14/4/2023).\r\n\r\nSelain itu, Handina, juga memberikan informasi tentang beberapa produk yang dapat digunakan untuk pencegahan penyakit melalui program biosecurity dengan menggunakan disinfektan (Hi-G atau Hi-G Pro), program pemeliharaan kesehatan ternak untuk mencegah stres pada unggas dengan menggunakan New Hydravit dan untuk meningkatkan daya tahan tubuh pada ikan lele memakai Kalvit C coated aquatic, serta water treatment guna menjaga kualitas dan kecukupan oksigen pada ikan lele dengan Aquaxygen.\r\n\r\nPada kesempatan itu, Kepala Dinas Lingkungan Hidup Kabupaten Wonogiri, Drs Bahari M.Si mengucapkan terima kasih kepada Kalbe yang sudah memberikan edukasi kepada masyarakat Wonogiri.\r\n\r\n“Ini salah satu langkah konkret Kalbe memberikan edukasi kepada masyarakat tentang tanggung jawab terhadap sampah. Kedua, adalah bagaimana mengolah sampah ini sehingga mempunyai nilai ekonomis. Hal ini penting untuk masyarakat dalam rangka mengendalikan sampah supaya tidak menjadi beban anak cucu kita,” kata Bahari.\r\n\r\nBudidaya maggot menurut Bahari, ternyata memiliki potensi untuk dibudidayakan. Bagi beberapa orang, budidaya maggot merupakan potensi yang menggiurkan untuk dikembangkan.\r\n\r\nSejumlah warga Dusun Sendang RT 1 RW 8 Desa Watuagung, Kecamatan Baturetno, Kabupaten Wonogiri memanfaatkan maggot atau belatung untuk mengolah sampah organik. Grup pengolahan sampah Oh-My Got yang merupakan binaan dari PT Kalbe Farma Tbk (Kalbe) itu juga memproduksi pakan ternak dan pupuk organik hasil pengolahan sampah dengan menggunakan maggot. Menurut Matheus Dwi Pramono, Ketua Paguyuban Tirta Asri mengatakan, pengolahan sampah menggunakan maggot itu dilatarbelakangi banyaknya sampah yang memunculkan bau atau polusi udara.\r\n\r\n“Banyak sampah, terutama kotoran ternak dan limbah dapur rumah tangga,\" katanya.\r\n\r\nMereka kemudian membudidayakan lalat Black Soldier Fly (BSF). Lalat-lalat itu dikembangbiakkan sehingga menghasilkan maggot atau belatung. Selanjutnya, sampah-sampah organik, baik berupa kotoran ternak hingga sampah dapur dimasukkan ke dalam wadah bersama maggot. Belatung-belatung tersebut akan mencerna sampah organik. Namun, sampah yang keras, seperti kulit buah dan sebagainya tidak ikut tercerna.\r\n\r\nSampah yang tidak ikut tercerna itu akan digiling untuk diolah menjadi pupuk organik. Di sisi lain, belatung-belatung mengeluarkan kotoran yang juga dimanfaatkan untuk campuran pupuk organik. Sebagian maggot akan diolah menjadi pelet pakan ternak/ikan, sebagian lagi dikembangbiakkan agar siklus hidup lalat terjaga.\r\n\r\n\"Target kami, lingkungan sekitar bebas dari sampah organik atau sampah kandang yang mencemari tanah dan udara. Ke depan harapannya bisa bekerja sama dengan desa atau dusun lain,\" harap Matheus.', '2023-12-04 12:19:10', 'liputan6.com', 'assets/article-images/Kerap Dianggap Tak Berguna, Ternyata Ini Sejumlah Manfaat Maggot.jpg', 1),
(10, 'Keren! Pemuda Ini Budi Daya Belatung Demi Atasi Limbah Makanan', 'Jakarta - Menyukai serangga sejak kecil ternyata menjadi awal dari inisiatif mulia pemuda ini. Ia yang mengaku foodies sengaja budi daya belatung untuk mengatasi limbah makanan.\r\nSemasa kecil beberapa anak pasti memiliki minatnya masing-masing. Ada yang menyukai mainan, berkarya, atau mereka yang tertarik dengan serangga yang banyak ditemukan di pohon-pohon sekitar rumah.\r\n\r\nKegemaran anak kecil seringkali dianggap sebagai angin lalu dan tidak terlalu dipedulikan. Ternyata jika dibantu untuk diarahkan, kegemaran anak-anak bisa berubah menjadi sesuatu yang sangat luar biasa.\r\n\r\n\r\nSalah satunya adalah kisah pemuda yang mengaku menyukai serangga sejak kecil ini. Dirinya yang juga seorang foodies mengaku prihatin sehingga berupaya membantu menguraikan limbah makanan yang menumpuk.\r\n\r\nMenyukai serangga sejak kecil, menjadi alasan Phua membangun tim untuk membudidayakan belatung. Foto: Mothership\r\nMengutip Mothership (7/3), Nathaniel Phue, pria berusia 31 tahun ini mengaku dirinya begitu menggemari serangga sejak kecil. Saat masih anak-anak, laba-laba menjadi serangga peliharaan favoritnya. Bahkan hingga sekarang Phua juga mengaku masih hobi memelihara serangga.\r\n\r\nBeranjak dewasa, Phua kini menjadi seorang CEO dan pendiri dari Ento Industries. Perusahaan ini didirikannya sejak Juni 2020. Ento Industries memiliki tujuan untuk membantu mengatasi sampah-sampah sisa makanan di Singapura.\r\n\r\n\"Ada banyak sekali sampah makanan, benar-benar tidak menyangka bahwa sampah makanan di Singapura benar-benar sebanyak itu. Ini adalah sesuatu yang memang ingin aku lakukan. Aku seorang foodie, jadi akun sangat benci terhadap sampah makanan,\" kata Phua.\r\n\r\nMenemukan hubungan antara pekerjaannya dan kegemarannya sejak kecil, Phua kemudian berinisiatif memilih serangga sebagai senjata untuk mengatasi limbah makanan. Setelah melakukan begitu banyak riset, Phua akhirnya menemukan bahwa belatung menjadi serangga yang tepat untuk membantunya mengatasi masalah limbah makanan.\r\n\r\nBukan tanpa alasan, budidaya belatung yang dilakukan ini untuk membantu mengasi limbah makanan. Foto: Mothership\r\nWalaupun ukurannya sangat kecil, Phua semakin tertarik ketika mengetahui bahwa belatung mampu melahap sampah makanan dalam ukuran sebanyak apapun. Bahkan menurut data yang telah dikumpulkannya, 1 kilogram belatung mampu menghabiskan hingga 20 ton sampah setiap harinya.\r\n\r\nPhua juga menuturkan kalau belatung punya manfaat selain memakan sampah makanan saja. Kotoran dari ulat belatung yang sengaja dibudidayakannya ini ternyata juga bisa dimanfaatkan sebagai pupuk sayuran hingga perkebunan.\r\n\r\nPhua juga mengungkapkan awalnya, kegiatan ini bukanlah hal yang mudah untuk ia mulai. Pertama-tama, banyak hal yang harus dipelajarinya termasuk cara menangani berton-ton limbah makanan yang harus dikumpulkan setiap harinya.\r\n\r\nPhua dan timnya selalu memastikan semuanya berjalan dengan sangat baik. Kegiatannya membudidayakan belatung untuk mengatasi limbah makanan ini ternyata juga berdampak pada kepribadian Phua seperti tidak pernah lagi menyajikan makanan secara berlebihan. Karena kerja kerasnya ini Phua bahkan sudah menerima penghargaan DBS Foundation Social Enterprise Grant 2020 terkait aksi baiknya untuk lingkungan sekitar.\r\n\r\nBaca artikel detikfood, \"Keren! Pemuda Ini Budi Daya Belatung Demi Atasi Limbah Makanan\" selengkapnya https://food.detik.com/info-kuliner/d-5974165/keren-pemuda-ini-budi-daya-belatung-demi-atasi-limbah-makanan.', '2023-12-04 12:19:27', 'Diah Afrilian', 'assets/article-images/Keren! Pemuda Ini Budi Daya Belatung Demi Atasi Limbah Makanan.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `number_phone` varchar(45) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `img_url` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`id`, `name`, `address`, `number_phone`, `user_id`, `img_url`) VALUES
(1, 'arul', 'ubaya', '1234567891234', 2, NULL),
(2, 'Budi', 'Jl.Rungkut Mejoyo Utara XVIII/AU-20', '081234567890', 4, NULL),
(3, 'hendri', 'purwokerto barat', '089238103128', 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `number_phone` varchar(45) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date` varchar(45) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `img_url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `address`, `number_phone`, `quantity`, `total`, `date`, `buyer_id`, `product_id`, `name`, `img_url`) VALUES
(6, 'purwokerto', '24625235', 2, 20000, '2023-12-17 13:21:45', 3, 8, 'hendri', 'assets/bukti-pembayaran/hendri.jpg-bayar'),
(7, 'purwokerto', '08923813', 2, 20000, '2023-12-17 14:34:21', 3, 8, 'hendria', 'assets/bukti-pembayaran/hendria.jpg-bayar');

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int(11) NOT NULL,
  `status` enum('Konfirmasi Pembayaran','Order dibatalkan','Order sedang diproses','Order sedang dikirim','Order telah diterima') DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `status`, `date`, `order_id`) VALUES
(18, 'Konfirmasi Pembayaran', '2023-12-17 13:21:45', 6),
(19, 'Order sedang diproses', '2023-12-17 13:22:27', 6),
(20, 'Konfirmasi Pembayaran', '2023-12-17 14:34:21', 7);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `url_img` varchar(200) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `stock`, `description`, `url_img`, `user_id`) VALUES
(8, 'Maggot', 10000, 6, 'Harga Maggot', 'assets/product-images/Maggot.jpg', 1),
(10, 'Maggot Dewasa', 12000, 100, 'Maggot dewasa berkualitas', 'assets/product-images/Maggot Dewasa.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` enum('admin','buyer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`) VALUES
(1, 'oke@gmail.com', '$2a$12$HnPfiGuRai2yRv6r3ojgduiiPaTcq0/2bAq4K4FP3D5v7kLqy/eyC', 'admin'),
(2, 'okee@gmail.com', '$2a$12$HnPfiGuRai2yRv6r3ojgduiiPaTcq0/2bAq4K4FP3D5v7kLqy/eyC', 'buyer'),
(4, 'budidi@gmail.com', '$2y$10$pr2j7lZIqdKUbUq009RzEu4CqV5YmfnjUKog9xY1C0u8K2G95Dfz6', 'buyer'),
(5, 'hendrisetiadi3030@gmail.com', '$2y$10$L4bHSpozySNa/3Uq36MHAulCY4N2H0aleU7nGRBYS.rkl/C9im7/y', 'buyer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Articles_Users1_idx` (`user_id`);

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_buyers_Users1_idx` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_orders_products_buyers1_idx` (`buyer_id`),
  ADD KEY `fk_orders_Products1_idx` (`product_id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Order_Status_Orders1_idx` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Products_Users1_idx` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_Articles_Users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `buyers`
--
ALTER TABLE `buyers`
  ADD CONSTRAINT `fk_buyers_Users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_Products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `fk_user_orders_products_buyers1` FOREIGN KEY (`buyer_id`) REFERENCES `buyers` (`id`);

--
-- Constraints for table `order_status`
--
ALTER TABLE `order_status`
  ADD CONSTRAINT `fk_Order_Status_Orders1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_Products_Users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
