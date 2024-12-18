-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 18 Des 2024 pada 00.32
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `caraousel`
--

CREATE TABLE `caraousel` (
  `id_caraousel` int NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `caraousel`
--

INSERT INTO `caraousel` (`id_caraousel`, `judul`, `foto`) VALUES
(20, 'Mixue 1', '20241206113232.jpg'),
(22, 'Mixue 3', '20241206113300.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `content_views`
--

CREATE TABLE `content_views` (
  `konten_id` int NOT NULL,
  `views` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int NOT NULL,
  `foto` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `foto`, `judul`, `id_kategori`, `tanggal`, `username`) VALUES
(14, '20241206115731.jpg', 'm1', '3', '2024-12-06', ''),
(21, '20241206120051.jpg', 'm2', '3', '2024-12-06', ''),
(23, '20241206120219.jpg', 'm3', '3', '2024-12-06', ''),
(24, '20241206120237.jpg', 'm4', '1', '2024-12-06', ''),
(25, '20241206120257.jpg', 'm5', '4', '2024-12-06', ''),
(26, '20241206120318.jpg', 'm6', '5', '2024-12-06', ''),
(27, '20241206120345.jpg', 'm7', '5', '2024-12-06', ''),
(28, '20241206120410.jpg', 'm8', '3', '2024-12-06', ''),
(29, '20241206120432.jpg', 'm9', '4', '2024-12-06', ''),
(30, '20241206120456.jpg', 'm10', '1', '2024-12-06', ''),
(32, '20241206120809.jpg', 'm11', '3', '2024-12-06', ''),
(35, '20241212011501.jpg', 'm12', '1', '2024-12-12', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Milk Tea'),
(3, 'Es Krim '),
(4, 'Coffe'),
(5, 'Real Fruit Tea');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int NOT NULL,
  `judul_website` varchar(200) NOT NULL,
  `profil_website` text NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_wa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_website`, `profil_website`, `instagram`, `facebook`, `email`, `alamat`, `no_wa`) VALUES
(1, 'MIXUE', 'Mixue adalah perusahaan waralaba asal Tiongkok yang menjual es krim dan minuman teh. Mixue didirikan pada tahun 1997 oleh Zhang Hongchao, seorang pengusaha asal Tiongkok. Mixue hadir di Indonesia sejak tahun 2020 dengan gerai pertamanya di Cihampelas Walk, Kota Bandung.', 'https://instagram.com/mixue_karanganyar', 'https://facebook.com/mixue', 'mixuekaranganyar9@gmail.com', 'Jl. Lawu No.1, Cangakan Barat, Cangakan, Kec. Karanganyar, Kabupaten Karanganyar, Jawa Tengah 57716', 'https://wa.me/6285786182209');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id_konten` int NOT NULL,
  `judul` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `keterangan`, `foto`, `slug`, `id_kategori`, `tanggal`, `username`) VALUES
(49, 'Chocolate Cookies Smoothies with Ice Cream ', 'Chocolate Cookies Smoothies with Ice Cream  (16k)\r\nChocolate Cookies Smoothies with Ice Cream adalah minuman manis dan creamy yang menggoda, sempurna untuk pencinta cokelat dan es krim. Smoothie ini terbuat dari campuran krim es krim vanila atau cokelat yang lembut, dihancurkan bersama dengan potongan biskuit cokelat renyah, menciptakan tekstur yang kaya dan kenyal. Dilengkapi dengan susu segar atau cokelat cair, memberikan kelembutan yang pas di setiap tegukan. Topping tambahan seperti serutan cokelat, potongan biskuit, atau whipped cream bisa menambah cita rasa yang semakin lezat dan menggugah selera. Minuman ini ideal sebagai hidangan penutup atau cemilan manis untuk menemani waktu santai Anda. \r\nNikmati kelezatan Chocolate Cookies Smoothies with Ice Cream ini hanya dengan Rp 16.000.', '20241206123651.jpg', 'Chocolate-Cookies-Smoothies-with-Ice-Cream-', '3', '2024-12-06', 'admin'),
(50, 'Strawberry Mi-shake', 'Strawberry Mi-shake (16k) adalah kombinasi segar dan lezat yang memadukan es krim lembut dengan cita rasa green tea yang khas. Smoothie ini terbuat dari campuran es krim yang creamy, dipadu dengan rasa teh hijau yang menyegarkan dan potongan strawberry asli yang manis. Setiap tegukan memberikan sensasi rasa yang seimbang antara manis, segar, dan sedikit pahit dari green tea, menjadikannya pilihan sempurna untuk Anda yang ingin menikmati perpaduan rasa unik. Dilengkapi dengan potongan strawberry segar yang menambah tekstur dan kesegaran, Strawberry Mi-shake ini adalah pilihan yang ideal untuk pencinta rasa alami dan menyegarkan.\r\n\r\nNikmati kenikmatan Strawberry Mi-shake ini hanya dengan Rp 16.000.', '20241206123748.jpg', 'Strawberry-Mi-shake', '3', '2024-12-06', 'admin'),
(51, 'Boba Shake ', 'Boba Shake (16k) adalah minuman creamy yang menggabungkan kelezatan es krim dengan manisnya brown sugar yang kaya rasa, menghasilkan kombinasi yang menggoda di setiap tegukan. Es krim yang lembut bercampur sempurna dengan sirup brown sugar yang kental, memberikan rasa manis yang hangat dan memuaskan. Tidak ketinggalan, topping boba kenyal yang chewy menambah sensasi seru saat menikmatinya. Setiap suapan memberikan perpaduan rasa yang unik antara es krim yang dingin, manisnya brown sugar, dan kenyalnya boba, menjadikan Boba Shake pilihan sempurna untuk Anda yang menyukai minuman manis dengan tekstur berbeda.\r\n\r\nNikmati kelezatan Boba Shake ini hanya dengan Rp 16.000.', '20241206123831.jpg', 'Boba-Shake-', '3', '2024-12-06', 'admin'),
(52, 'Creamy Mango Boba', 'Creamy Mango Boba (22k) adalah minuman segar dan creamy yang memadukan es krim lembut dengan mangga manis yang menyegarkan. Kombinasi rasa tropis dari mangga yang kental dan es krim yang lembut menciptakan sensasi kenikmatan yang pas di setiap tegukan. Ditambah dengan topping boba kenyal yang memberikan tekstur seru, serta sentuhan kelapa yang harum dan menyegarkan, minuman ini sempurna untuk Anda yang ingin menikmati rasa manis dan creamy dalam satu gelas. Creamy Mango Boba ini memberikan pengalaman rasa tropis yang kaya, menjadikannya pilihan ideal untuk menemani hari Anda.\r\n\r\nNikmati kelezatannya hanya dengan Rp 22.000.', '20241206123856.jpg', 'Creamy-Mango-Boba', '3', '2024-12-06', 'admin'),
(53, 'Berry Bean Sundae', 'Berry Bean Sundae (16k) adalah kombinasi manis dan creamy yang sempurna, menggabungkan es krim lembut dengan red bean yang lembut dan tekstur kenyal. Topping red bean yang kaya rasa berpadu sempurna dengan selai strawberry manis yang memberikan sentuhan segar pada setiap suapan. Es krim yang creamy, dipadu dengan rasa khas red bean dan manisnya selai strawberry, menciptakan perpaduan rasa yang unik dan menyegarkan. Berry Bean Sundae ini adalah pilihan yang ideal bagi Anda yang menyukai hidangan penutup dengan rasa yang kaya dan tekstur yang beragam.\r\n\r\nNikmati kelezatannya hanya dengan Rp 16.000.', '20241206123918.jpg', 'Berry-Bean-Sundae', '3', '2024-12-06', 'admin'),
(54, 'Chocolate Lucky Sundae ', 'Chocolate Lucky Sundae (16k) adalah surga bagi pencinta cokelat! Es krim lembut berpadu dengan saus cokelat kental yang melimpah, menciptakan rasa manis dan kaya yang menggoda di setiap gigitan. Namun, yang membuatnya istimewa adalah kejutan topping di bawahnya, yang memberikan sensasi berbeda di setiap suapan. Topping tersebut bisa berupa potongan cokelat, kacang, atau bahan manis lainnya yang menyempurnakan kesempurnaan rasa cokelat. Dengan tekstur yang beragam dan rasa yang memanjakan, Chocolate Lucky Sundae ini adalah pilihan tepat untuk Anda yang ingin menikmati hidangan penutup yang penuh kejutan!\r\n\r\nNikmati kelezatannya hanya dengan Rp 16.000.', '20241206123943.jpg', 'Chocolate-Lucky-Sundae-', '3', '2024-12-06', 'admin'),
(55, 'Oreo Sundae ', 'Oreo Sundae (16k) adalah pilihan sempurna untuk Anda yang menyukai kombinasi rasa manis dan gurih dalam satu hidangan. Es krim cokelat yang lembut dan kaya rasa berpadu dengan taburan Oreo yang renyah, menciptakan sensasi tekstur yang menggoda di setiap suapan. Setiap sendoknya membawa rasa cokelat yang creamy dan kelezatan dari potongan biskuit Oreo yang khas, memberikan pengalaman rasa yang memanjakan lidah. Tak hanya itu, perpaduan antara es krim yang dingin dan cruncy Oreo membuatnya terasa menyegarkan dan memuaskan. Dengan topping Oreo yang melimpah di atasnya, Oreo Sundae ini hadir sebagai pilihan ideal untuk pencinta cokelat dan biskuit yang ingin menikmati sensasi manis dan gurih dalam satu sajian.\r\n\r\nNikmati kelezatannya hanya dengan Rp 16.000.', '20241206124013.jpg', 'Oreo-Sundae-', '3', '2024-12-06', 'admin'),
(56, 'Strawberry Lucky Sundae ', 'Strawberry Lucky Sundae (16k) adalah pilihan sempurna untuk Anda yang menyukai rasa manis dan segar. Es krim lembut yang kaya rasa berpadu dengan saus strawberry yang kental dan menyegarkan, menciptakan sensasi rasa buah yang memanjakan lidah. Tidak hanya itu, potongan strawberry asli yang segar menambah kelezatan dan tekstur alami dalam setiap suapan. Kejutan topping di bawahnya, yang bisa berupa potongan cokelat, kacang, atau bahan manis lainnya, membuat Strawberry Lucky Sundae semakin istimewa dan menyenangkan. Perpaduan rasa manis, segar, dan kejutan ini menjadikannya pilihan yang menyegarkan dan memuaskan.\r\n\r\nNikmati kelezatannya hanya dengan Rp 16.000', '20241206124043.jpg', 'Strawberry-Lucky-Sundae-', '3', '2024-12-06', 'admin'),
(57, 'Es Krim Vanila', 'Vanilla Ice Cream (8k) adalah pilihan klasik yang tak pernah salah. Es krim vanilla yang lembut dan creamy, dengan rasa manis yang ringan dan menyegarkan, siap memanjakan lidah Anda. Dibalut dengan cone renyah yang sempurna, setiap suapan memberikan perpaduan tekstur yang memuaskan antara es krim yang halus dan cone yang crunchy. Vanilla Ice Cream ini adalah pilihan tepat bagi Anda yang menginginkan kenikmatan sederhana namun lezat dalam setiap gigitan.\r\n\r\nNikmati kelezatannya hanya dengan Rp 8.000.', '20241206140402.jpg', 'Es-Krim-Vanila', '3', '2024-12-06', 'admin'),
(60, 'Peach Tea Earl Grey Tea ', 'Peach Tea Earl Grey Tea (16k) adalah minuman teh yang menyegarkan dan penuh rasa, sempurna untuk Anda yang mencari pengalaman baru dalam menikmati teh. Potongan peach asli yang manis berpadu dengan yellow peach jelly kenyal, memberikan sensasi rasa buah yang segar dan tekstur yang menyenangkan di setiap tegukan. Semua itu berpadu dengan keharuman teh Earl Grey yang khas, memberikan sentuhan cita rasa teh yang elegan dan lembut. Perpaduan antara rasa teh yang wangi, manisnya peach, dan kenyalnya jelly menjadikan Peach Tea Earl Grey Tea pilihan yang sempurna untuk menemani hari Anda dengan kelezatan yang memikat.\r\n\r\nNikmati kelezatannya hanya dengan Rp 16.000.', '20241206141151.jpg', 'Peach-Tea-Earl-Grey-Tea-', '5', '2024-12-06', 'admin'),
(61, 'Mango Oats Jasmine Tea ', 'Mango Oats Jasmine Tea (16k) adalah minuman teh yang menyegarkan dan penuh kelezatan, menawarkan kombinasi rasa yang unik dan menyehatkan. Jasmine tea yang harum dan lembut berpadu dengan potongan mangga asli yang manis dan segar, memberikan sensasi rasa buah tropis yang menyegarkan. Tidak hanya itu, tambahan oats (gandum) yang kenyal memberikan tekstur yang berbeda, menjadikannya pilihan yang tidak hanya lezat, tetapi juga menyehatkan. Mango Oats Jasmine Tea ini sempurna untuk Anda yang ingin menikmati teh dengan cita rasa yang lebih kaya dan penuh nutrisi, menciptakan pengalaman minum teh yang menyegarkan dan memuaskan.\r\n\r\nNikmati kelezatannya hanya dengan Rp 16.000.', '20241206141233.jpg', 'Mango-Oats-Jasmine-Tea-', '5', '2024-12-06', 'admin'),
(62, 'Hawaiian fruit Tea ', 'Hawaiian Fruit Tea (22k) adalah minuman segar yang memadukan berbagai rasa tropis dalam satu sajian yang menyegarkan. Teh buah yang ringan dan menyegarkan dipadukan dengan bulir markisa yang asam-manis, memberikan sensasi rasa buah yang kaya dan menyegarkan. Topping mangga manis dan yellow peach jelly yang kenyal menambah kelezatan serta tekstur yang menyenangkan di setiap tegukan. Setiap slurp menghadirkan perpaduan rasa manis, asam, dan kenyal yang menggugah selera, menjadikan Hawaiian Fruit Tea pilihan yang sempurna untuk Anda yang ingin merasakan sensasi tropis dalam satu gelas.\r\n\r\nNikmati kesegarannya hanya dengan Rp 22.000.', '20241206141323.jpg', 'Hawaiian-fruit-Tea-', '5', '2024-12-06', 'admin'),
(63, 'Passion fruit Jasmine Tea ', 'Passion Fruit Jasmine Tea (20k) adalah minuman teh yang menyegarkan dan penuh cita rasa, menghadirkan perpaduan sempurna antara jasmine tea yang harum dengan bulir markisa asli yang asam-manis. Keunikan rasa teh yang lembut berpadu dengan kenikmatan coconut jelly yang kenyal, memberikan sensasi tekstur berbeda di setiap tegukan. Tak ketinggalan, tambahan boba yang chewy semakin memperkaya pengalaman rasa dengan sensasi kenyal yang menyenangkan. Passion Fruit Jasmine Tea ini adalah pilihan ideal bagi Anda yang ingin menikmati teh dengan sentuhan tropis yang segar dan rasa yang menyegarkan sepanjang hari.\r\n\r\nNikmati kelezatannya hanya dengan Rp 20.000.\r\n', '20241206141409.jpg', 'Passion-fruit-Jasmine-Tea-', '5', '2024-12-06', 'admin'),
(64, 'Lemon Jasmine Tea ', 'Lemon Jasmine Tea (12k) adalah minuman teh yang menyegarkan, menggabungkan keharuman jasmine tea yang lembut dengan kesegaran sari lemon asli yang asam dan menyegarkan. Setiap tegukan menghadirkan perpaduan rasa yang seimbang antara kelembutan teh jasmine dan kesegaran lemon yang memberikan sensasi dingin dan menyegarkan di setiap sip. Minuman ini sangat cocok untuk Anda yang ingin menikmati teh dengan rasa ringan, alami, dan penuh kesegaran, ideal untuk menemani hari yang panas atau sekadar untuk menyegarkan diri.\r\n\r\nNikmati kelezatannya hanya dengan Rp 12.000.', '20241206141446.jpg', 'Lemon-Jasmine-Tea-', '5', '2024-12-06', 'admin'),
(65, 'Lemon Earl Grey Tea', 'Lemon Earl Grey Tea (12k) adalah minuman teh yang memadukan keharuman teh Earl Grey yang elegan dengan kesegaran sari lemon asli yang asam dan menyegarkan. Teh Earl Grey yang khas, dengan aroma bergamot yang lembut, berpadu sempurna dengan kesegaran lemon yang memberikan sensasi rasa segar dan cerah di setiap tegukan. Perpaduan ini menciptakan minuman yang ringan namun penuh rasa, cocok untuk Anda yang ingin menikmati teh dengan sentuhan segar yang menyegarkan dan menenangkan.\r\n\r\nNikmati kelezatannya hanya dengan Rp 12.000.\r\n', '20241206141531.jpg', 'Lemon-Earl-Grey-Tea', '5', '2024-12-06', 'admin'),
(66, 'Fresh Squeezed Lemonade', 'Fresh Squeezed Lemonade (10k) adalah minuman penyegar yang terbuat dari sari lemon asli yang diperas segar, menawarkan rasa asam manis yang alami dan menyegarkan. Dihadirkan dengan kombinasi sempurna antara kesegaran lemon murni dan sedikit pemanis, setiap tegukan memberikan sensasi rasa yang segar dan ringan, ideal untuk menghilangkan dahaga di hari yang panas. Minuman ini tidak hanya menyegarkan, tetapi juga memberikan sensasi revitalisasi yang menyegarkan tubuh dan pikiran. Fresh Squeezed Lemonade adalah pilihan tepat bagi Anda yang menginginkan kesegaran alami tanpa tambahan bahan buatan, menjadikannya minuman yang sempurna untuk menemani waktu santai atau sebagai pelepas dahaga yang alami dan lezat.\r\n\r\nNikmati kelezatannya hanya dengan Rp 10.000.', '20241206141718.jpg', 'Fresh-Squeezed-Lemonade', '5', '2024-12-06', 'admin'),
(67, 'Kiwi Fruit Tea ', 'Kiwi Fruit Tea (15k) adalah minuman teh yang menyegarkan dengan perpaduan rasa unik dan menyegarkan. Potongan kiwi asli yang segar dan asam berpadu sempurna dengan coconut jelly yang kenyal, menciptakan sensasi tekstur yang menyenangkan di setiap tegukan. Teh yang digunakan memberikan keharuman lembut yang melengkapi rasa kiwi yang segar, sementara coconut jelly menambah kesegaran dan kelezatan setiap suapan. Kiwi Fruit Tea ini adalah pilihan ideal bagi Anda yang ingin menikmati teh dengan sentuhan buah tropis yang menyegarkan dan tekstur kenyal yang menggugah selera.\r\n\r\nNikmati kelezatannya hanya dengan Rp 15.000.', '20241206141802.jpg', 'Kiwi-Fruit-Tea-', '5', '2024-12-06', 'admin'),
(68, 'Oats Milk Tea', 'Oats Milk Tea (19k) adalah minuman teh susu yang creamy dan lezat, menawarkan perpaduan sempurna antara rasa manis dari susu dan teh yang lembut. Topping oats (gandum) yang renyah menambah tekstur unik dan kenikmatan di setiap tegukan, memberikan sensasi yang berbeda dan menggugah selera. Rasa gurih dari oats berpadu dengan kelembutan milk tea, menciptakan minuman yang tidak hanya memanjakan lidah tetapi juga memberikan pengalaman rasa yang memuaskan. Oats Milk Tea ini adalah pilihan tepat untuk Anda yang menginginkan teh susu dengan tambahan tekstur kenyal yang menyegarkan dan menambah kelezatan.\r\n\r\nNikmati kelezatannya hanya dengan Rp 19.000.', '20241206142451.jpg', 'Oats-Milk-Tea', '1', '2024-12-06', 'admin'),
(69, 'Red Bean Milk Tea ', 'Red Bean Milk Tea (19k) adalah minuman teh susu yang kaya rasa, menggabungkan kelembutan milk tea yang creamy dengan topping red bean yang lembut dan kenyal. Kombinasi manisnya teh susu yang halus berpadu sempurna dengan rasa khas red bean yang gurih dan sedikit manis, memberikan sensasi rasa yang memanjakan lidah di setiap tegukan. Topping red bean yang kenyal menambah tekstur yang menyenangkan, menjadikan minuman ini pilihan sempurna bagi Anda yang menyukai kelezatan teh susu dengan sentuhan rasa tradisional yang unik.\r\n\r\nNikmati kelezatannya hanya dengan Rp 19.000.', '20241206142529.jpg', 'Red-Bean-Milk-Tea-', '1', '2024-12-06', 'admin'),
(70, 'Coconut Jelly Milk Tea ', 'Coconut Jelly Milk Tea (19k) adalah minuman teh susu yang lembut dan menyegarkan, dipadukan dengan topping coconut jelly yang kenyal dan segar. Milk tea yang creamy dan kaya rasa berpadu sempurna dengan kelezatan coconut jelly yang lembut, memberikan sensasi tekstur yang unik dan menyenangkan di setiap tegukan. Rasa gurih dan manis dari coconut jelly melengkapi rasa teh susu yang halus, menciptakan pengalaman minum yang memuaskan dan menyegarkan. Coconut Jelly Milk Tea ini adalah pilihan tepat untuk Anda yang mencari minuman teh susu dengan tambahan tekstur kenyal yang menyegarkan.\r\n\r\nNikmati kelezatannya hanya dengan Rp 19.000.', '20241206142608.jpg', 'Coconut-Jelly-Milk-Tea-', '1', '2024-12-06', 'admin'),
(71, 'Milk Tea With 2 Toppings', 'Milk Tea with 2 Toppings (19k) adalah minuman teh susu yang kaya rasa, dilengkapi dengan dua topping istimewa yang membuat setiap tegukan semakin menggoda. Milk tea yang lembut dan creamy berpadu sempurna dengan topping red bean yang manis dan kenyal, serta brown sugar jelly yang kental dan gurih. Kombinasi rasa manis dari red bean dan brown sugar jelly memberikan sensasi rasa yang beragam, menciptakan pengalaman minum yang memuaskan dengan tekstur yang menarik di setiap suapan. Milk Tea with 2 Toppings ini adalah pilihan sempurna bagi Anda yang ingin menikmati teh susu dengan kelezatan ganda.\r\n\r\nNikmati kelezatannya hanya dengan Rp 19.000.', '20241206142648.jpg', 'Milk-Tea-With-2-Toppings', '1', '2024-12-06', 'admin'),
(72, 'Brown Sugar Pearl Milk Tea ', 'Brown Sugar Pearl Milk Tea (19k) adalah minuman teh susu yang kaya rasa dan memanjakan lidah, dengan perpaduan sempurna antara susu yang creamy dan manisnya brown sugar yang kental. Setiap tegukan memberikan sensasi rasa manis yang lembut, berpadu dengan topping boba kenyal yang menambah tekstur yang menyenangkan. Brown sugar yang melimpah menciptakan rasa yang kaya dan dalam, sementara boba memberikan kenikmatan tersendiri di setiap suapan. Brown Sugar Pearl Milk Tea ini adalah pilihan ideal bagi Anda yang menyukai teh susu dengan rasa manis yang kaya dan kenyalnya boba yang menggoda.\r\n\r\nNikmati kelezatannya hanya dengan Rp 19.000.', '20241206142722.jpg', 'Brown-Sugar-Pearl-Milk-Tea-', '1', '2024-12-06', 'admin'),
(73, 'Pearl Milk Tea', 'Pearl Milk Tea (19k) adalah minuman teh susu yang klasik dan menyegarkan, dipadukan dengan topping boba kenyal yang menggoda. Milk tea yang creamy dan lembut memberikan rasa manis yang seimbang, sementara boba yang kenyal menciptakan sensasi tekstur yang menyenangkan di setiap tegukan. Setiap suapan memberikan perpaduan sempurna antara teh susu yang halus dan kenyalnya boba, menjadikannya pilihan ideal bagi Anda yang menyukai minuman teh susu dengan pengalaman rasa dan tekstur yang memuaskan.\r\n\r\nNikmati kelezatannya hanya dengan Rp 19.000.', '20241206142757.jpg', 'Pearl-Milk-Tea', '1', '2024-12-06', 'admin'),
(74, 'Lemon Coffee', 'Lemon Coffee (14k) adalah varian kopi terbaru yang memadukan cita rasa khas kopi dengan sentuhan segar perasan lemon. Kombinasi ini memberikan sensasi baru yang unik, di mana kehangatan kopi bertemu dengan kesegaran asam lemon, menciptakan pengalaman rasa yang menyegarkan dan menyenangkan. Lemon Coffee (14k) cocok dinikmati kapan saja, memberikan energi sekaligus kesegaran, terutama di hari-hari yang panas. Nikmati perpaduan rasa yang sempurna dan segar dalam setiap tegukan!', '20241206152226.jpg', 'Lemon-Coffee', '4', '2024-12-06', 'admin'),
(76, 'Coffe Boba Sundae', 'Coffee Boba Sundae (18k) adalah perpaduan sempurna antara kopi dan es krim dengan sentuhan manis yang menyegarkan. Minuman ini dimulai dengan es krim kopi yang lembut dan creamy, memberikan rasa kopi yang kaya dan nikmat. Di atasnya, ditambahkan topping boba kenyal yang memberikan sensasi unik dan kenikmatan ekstra dalam setiap suapan. Boba yang kenyal dan manis berpadu sempurna dengan dinginnya es krim kopi, menciptakan rasa yang lezat dan menyegarkan.\r\n\r\nCoffee Boba Sundae (18k) adalah pilihan yang pas bagi Anda yang ingin menikmati kombinasi cita rasa kopi yang kaya dengan tekstur boba yang menyenangkan. Dengan harga hanya Rp 18.000, Anda dapat menikmati sensasi baru dalam menikmati kopi, yang menggabungkan rasa manis, creamy, dan kenyal dalam satu sajian. Sempurna untuk dinikmati sebagai pencuci mulut atau camilan segar di hari yang panas!', '20241206152509.jpg', 'Coffe-Boba-Sundae', '4', '2024-12-06', 'admin'),
(77, 'Coffee Cookies Sundae', 'Coffee Cookies Sundae (18k) adalah kombinasi sempurna antara es krim kopi yang creamy dan topping cookies yang renyah, memberikan sensasi rasa yang luar biasa. Dimulai dengan es krim kopi yang kaya dan lezat, rasa kopi yang kuat berpadu dengan kelembutan es krim, menciptakan pengalaman yang memanjakan lidah. Di atasnya, ditambahkan topping cookies yang crunchy, memberikan tekstur berbeda yang menambah kenikmatan setiap suapan.\r\n\r\nCoffee Cookies Sundae (18k) cocok bagi Anda yang menginginkan perpaduan cita rasa manis, kopi, dan tekstur renyah dalam satu sajian. Topping cookies yang gurih berpadu sempurna dengan es krim kopi yang dingin, menciptakan keseimbangan rasa yang memuaskan. Dengan harga hanya Rp 18.000, Anda dapat menikmati hidangan penutup yang kaya rasa ini, ideal untuk dinikmati kapan saja, baik untuk melepas dahaga atau sebagai camilan manis di tengah hari. Nikmati sensasi baru dalam menikmati kopi dengan sentuhan cookies yang lezat!\r\n', '20241206152608.jpg', 'Coffee-Cookies-Sundae', '4', '2024-12-06', 'admin'),
(78, 'Coffee Smoothies With Ice Cream', 'Coffee Smoothies With Ice Cream (16k) adalah perpaduan sempurna antara segarnya smoothies kopi dan kelembutan es krim yang memberikan pengalaman rasa yang luar biasa. Smoothies kopi yang nikmat dibuat dari kopi pilihan yang disajikan dalam bentuk smoothie dingin yang menyegarkan. Ditambahkan dengan es krim yang lembut dan creamy, menciptakan sensasi rasa manis dan dingin yang memanjakan lidah.\r\n\r\nMinuman ini memberikan keseimbangan yang ideal antara rasa kopi yang kuat dan tekstur es krim yang halus, menjadikannya pilihan sempurna untuk dinikmati di hari yang panas atau saat Anda ingin menikmati camilan manis yang menyegarkan. Dengan harga hanya Rp 16.000, Anda bisa menikmati minuman yang tidak hanya menyegarkan tetapi juga kaya rasa. Coffee Smoothies With Ice Cream (16k) adalah pilihan yang pas untuk Anda yang mencari sensasi baru dalam menikmati kopi dengan tambahan kenikmatan dari es krim.', '20241206152651.jpg', 'Coffee-Smoothies-With-Ice-Cream', '4', '2024-12-06', 'admin'),
(80, 'Coffee Ice Cream ', 'Coffee Ice Cream (8k) adalah pilihan sempurna bagi Anda pecinta kopi yang ingin menikmati rasa kopi dalam bentuk yang lebih dingin dan menyegarkan. Es krim ini terbuat dari bahan-bahan berkualitas, dengan tekstur yang lembut dan creamy. Rasa kopi yang kaya dan lezat berpadu dengan kelembutan es krim, memberikan sensasi rasa yang memanjakan lidah di setiap suapan.\r\n\r\nDengan harga hanya Rp 8.000, Anda bisa menikmati sensasi es krim yang menyegarkan dan nikmat, cocok untuk menemani waktu santai atau sebagai pencuci mulut setelah makan. Coffee Ice Cream (8k) memberikan cara baru menikmati kopi dengan kelembutan es krim yang menggoda, menjadikannya pilihan tepat untuk menghangatkan suasana hati di hari yang panas!', '20241206152814.jpg', 'Coffee-Ice-Cream-', '4', '2024-12-06', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logins`
--

CREATE TABLE `logins` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `login_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `id_saran` int NOT NULL,
  `isi_saran` text NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `saran`
--

INSERT INTO `saran` (`id_saran`, `isi_saran`, `tanggal`, `nama`, `email`) VALUES
(1, 'apalaaa', '2024-11-21', 'Fiyonaa', 'fiyooofiyona@gmail.com'),
(2, 'apik banget', '2024-11-23', 'shinta', 'owithekids@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(70) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `recent` datetime DEFAULT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `recent`, `level`) VALUES
(14, 'test', 'qdas', '$2y$10$XYtEgtdQZMsTtwnF.SwJVuRNKgvXeeLFRAhZAhUJXH6I3ssbiY6cK', NULL, 'user'),
(16, 'ona', 'onana', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'user'),
(17, 'pp', 'pp', 'c483f6ce851c9ecd9fb835ff7551737c', NULL, 'admin'),
(19, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', NULL, 'User'),
(23, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, 'admin'),
(24, 'piona', 'piona', '8ca6fa4e31547d4913dac5b7d415bc05', NULL, 'admin'),
(25, 'fiyona', 'fiyona', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `caraousel`
--
ALTER TABLE `caraousel`
  ADD PRIMARY KEY (`id_caraousel`);

--
-- Indeks untuk tabel `content_views`
--
ALTER TABLE `content_views`
  ADD PRIMARY KEY (`konten_id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indeks untuk tabel `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `caraousel`
--
ALTER TABLE `caraousel`
  MODIFY `id_caraousel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `content_views`
--
ALTER TABLE `content_views`
  MODIFY `konten_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT untuk tabel `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
