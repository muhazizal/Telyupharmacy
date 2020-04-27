-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 03:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telyupharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`) VALUES
(1301180044, 'azizadmin', 'azizadmin', 1),
(1301180214, 'apinkadmin', 'apinkadmin', 1),
(1301180240, 'naufaladmin', 'naufaladmin', 1),
(1301180294, 'mauladmin', 'mauladmin', 1),
(1301184075, 'daniadmin', 'daniadmin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` varchar(256) NOT NULL,
  `category` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `description`, `category`, `image`, `admin_id`) VALUES
(1, 'MENGAPA TELINGA SERING BERDENGUNG?', 'Telinga berdengung sering kali mengganggu aktivitas. Ternyata kebiasaan seperti menggunakan headphone untuk mendengarkan music adalah salah satu penyebabnya. Apa sajakah penyebab telinga sering berdengung?', 'THT', 'telinga.jpg', 1301180044),
(2, 'BENARKAH BUBBLE TEA BAHAYA BAGI KESEHATAN?', 'Seminggu berapa kali kamu minum bubble tea? Adanya aplikasi online untuk membeli makanan ditambah juga ada promo-promo, makin membuat kita mudah mengkonsumsi bubble tea. Eits.. tapi pastikan kamu tahu ya kandungan nutrisi dan kalori dalam bubble tea, serta', 'Makanan', 'bubbletea.jpg', 1301180240),
(3, 'KATERISASI JANTUNG', 'Katerisasi jantung merupakan prosedur yang dilakukan untuk mengetahui kondisi kesehatan jantung seseorang. Bagaimanakah prosesnya?', 'Jantung', 'jantung.jpg', 1301180214),
(4, 'MANFAAT MINYAK IKAN BAGI TUBUH', 'Minyak ikan terbukti dapat menurunkan resiko serangan jantung pada beberapa penelitian. Dan ternyata masih ada beberapa manfaat dari minyak ikan, yuk cari tahu', 'Makanan', 'ikan.jpg', 1301180294),
(5, 'MENJAGA KESEHATAN GINJAL', 'Pada tanggal 14 Maret 2019 diperingati sebagai Hari Ginjal Sedunia. Peringatan Hari Ginjal sedunia dilakukan untuk mengingatkan kita pentingnya menjaga kesehatan ginjal. Upaya sederhana yang kita lakukan membawa dampak baik pada kesehatan ginjal, seperti m', 'Ginjal', 'ginjal.jpg', 1301184075),
(7, 'OLAHRAGA RUTIN, KOK TAMBAH GENDUT', 'Berolahraga sangat bermanfaat menurunkan berat badan dan menjaga kesehatan tubuh. Namun, ternyata berolahraga secara berlebihan dan tidak memiliki istirahat yang cukup malah dapat mempersulit proses penurunan berat badan.', 'Tips dan Trik', 'Olahraga.jpg', 1301180214),
(14, 'MANFAAT JUS SELEDRI', 'Celery atau seledri sedang digemari oleh banyak orang termasuk artis dan selebritis Instagram (selebgram) karena diketahui memiliki banyak manfaat bagi tubuh. Yuk cari tahu apa aja sih manfaatnya', 'Makanan', 'seledri.jpg', 1301180044),
(15, 'MENJAGA UDARA TETAP BERSIH DIDALAM RUMAH', 'Yakinkah udara dirumah anda bersih? Bukan hal yang mustahil jika kondisi didalam rumah tidak sebersih yang kita kira. Debu rumah, formaldehida, bahkan bahan kimia yang mudah menguap dari pewangi yang terkandung dalam pembersih dapat menjadi polusi didalam ', 'Tips dan Trik', 'udara.jpg', 1301180240),
(16, 'KATERISASI JANTUNG', 'Katerisasi jantung merupakan prosedur yang dilakukan untuk mengetahui kondisi kesehatan jantung seseorang. Bagaimanakah prosesnya?', 'Jantung', 'jantung.jpg', 1301180294),
(17, 'MANFAAT BAYAM BAGI KESEHATAN', 'Sumber vitamin K dan mineral pada bayam dapat menjaga kesehatan tulang dan gigi. Selain itu bayam juga bermanfaat bagi kesehatan mata. Apakah kandungan dalam bayam?', 'Makanan', 'bayam.jpg', 1301184075);

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id`, `username`, `password`, `email`, `name`, `image`, `status`) VALUES
(1301180243, 'naufalharsap', '$2y$10$caBXr6GIESLP8B9NPYXm6OuxUVc4p.fasJVP2yjr14fAeBzIvu4Qe', 'pewangi@gmail.com', 'Naufal Harsa', 'default.jpg', 2),
(1301180244, 'daniamri', 'daniamri', 'daniamri92@gmail.com', 'Chamadani Amri', 'dani.jpg', 2),
(1301180245, 'alvin', '$2y$10$OqHzk7zT9zIY573WvcE3C.Ef078fEQAKKciAhZC3oWZyhPLDJ3VYO', 'alvin@gmail.com', 'alvin21', 'eid-vector-5a3af17135a693_96860902151381233721987668.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `price` int(128) NOT NULL,
  `description` varchar(256) NOT NULL,
  `image` varchar(128) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `image`, `admin_id`) VALUES
(2, 'MYLANTA LIQ 50ML', 15000, 'Mylanta Liquid merupakan obat yang digunakan untuk mengatasi penyakit-penyakit yang disebabkan oleh kelebihan produksi asam lambung, seperti sakit maag dan tukak lambung.', 'mylanta.jpg', 1301180044),
(4, 'VITACIMIN', 1000, 'Vitamin C', 'vitacimin.jpg', 1301180294),
(5, 'CANESTEN', 40000, 'Obat anti jamur', 'canesten.jpg', 1301180240),
(6, 'UPIXON TUTTI FRUTY SYR', 14500, 'Upixon merupakan obat yang digunakan untuk membasmi cacing (cacing kremi, cacing tambang, cacing gelang, cacing cambuk) di dalam tubuh.', 'upixon.jpg', 1301180214),
(7, 'PARACETAMOL SYR 120MG/5ML', 7500, 'Paracetamol sebagai analgesik bekerja dengan meningkatkan ambang rasa sakit dan meningkatkan ambang rangsang rasa sakit dan sebagai antipiretik yang diduga bekerja langsung pada pusat pengatur panas di hipotalamus', 'paracetamol.jpg', 1301184075),
(8, 'NEUROSANBE TAB 10\'S', 16000, 'vitamin neurotropik, vitamin syaraf, vitamin B kompleks', 'neurosanbe.jpg', 1301180044),
(9, 'CURMINO PLUS CAP', 65000, 'Curmino Plus merupakan kapsul dari ekstak alami yang mengandung temulawak, sambiloto dan kayu manis yang dapat berperan sebagai pelindung kesehatan hati, dan dapat membantu memperbaiki daya tahan tubuh.', 'curmino.jpg', 1301180214),
(11, 'SILEX SYR 100ML', 75000, 'SILEX SYR 100ML adalah obat yang dapat digunakan untuk mengobati batuk berdahak yang disebabkan oleh flu, bronkitis, batuk rejan, batuk akibat merokok.', 'silex.jpg', 1301180294),
(12, 'FEROSPAT TAB EFF 10S', 85000, 'Ferospat dengan kandungan zat besinya berfungsi memenuhi kebutuhan defisiensi zat besi, terutama pada wanita hamil dan menyusui, yang dikemas dalam bentuk tablet effervescent.', 'ferospat.jpg', 1301184075),
(16, 'SEA Q CAL MAG ZINC 60S DOS', 550000, 'Suplemen yang mengandung kalsium, vitamin D dan mineral', 'seaqcal.jpg', 1301180240);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `total_price` int(128) NOT NULL,
  `quantity` int(128) NOT NULL,
  `date` varchar(128) NOT NULL,
  `id_buyer` int(11) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `total_price`, `quantity`, `date`, `id_buyer`, `id_product`) VALUES
(6, 15000, 1, '20-04-25', 1301180243, 2),
(7, 1000, 1, '20-04-25', 1301180243, 4),
(8, 65000, 1, '20-04-25', 1301180245, 9),
(9, 12650000, 23, '20-04-25', 1301180245, 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`) USING BTREE;

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`) USING BTREE;

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1301184076;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1301180246;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
