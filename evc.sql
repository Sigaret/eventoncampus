-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Mei 2020 pada 13.21
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `evc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
`id_bank` int(11) NOT NULL,
  `id_py` int(11) NOT NULL,
  `atas_nama` varchar(225) NOT NULL,
  `nama_bank` varchar(225) NOT NULL,
  `no_rek` varchar(225) NOT NULL,
  `kantor_cabang` varchar(225) NOT NULL,
  `kota` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bank`
--

INSERT INTO `bank` (`id_bank`, `id_py`, `atas_nama`, `nama_bank`, `no_rek`, `kantor_cabang`, `kota`) VALUES
(2, 4, 'ABDUL JABBAR', 'BRI', '0433-01-004131-50-1', 'Nangor', 'Bandung'),
(3, 6, 'AWANG RUDI', 'BCA', '8170683367 ', 'Nagrek', 'Garut'),
(4, 7, 'AWANG RUDI', 'Mandiri', '4105468356', 'Folk', 'Bandung barat'),
(5, 7, 'SUTOMO WU', 'BNI', ' 1060011124842', 'Cikutra', 'Bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE IF NOT EXISTS `event` (
`id_event` int(11) NOT NULL,
  `nama_event` varchar(225) NOT NULL,
  `poster` varchar(225) NOT NULL,
  `type_event` varchar(226) NOT NULL,
  `id_py` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(224) NOT NULL,
  `lokasi` text NOT NULL,
  `deksp` text NOT NULL,
  `harga` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_event`, `nama_event`, `poster`, `type_event`, `id_py`, `tanggal`, `waktu`, `lokasi`, `deksp`, `harga`, `qty`) VALUES
(1, 'Chaos Mamiac', 'exam2.jpg', 'Acara Musik', 1, '1212-12-12', '3:34 PM', 'asd', '', 0, 0),
(2, 'Fi-WI', 'exam21.jpg', 'Workshop', 1, '4656-12-05', '4:28 PM', 'SGS', '', 50000, 0),
(3, 'WIFi 29Jan15 SEMINAR "OPEN BTS" w/ "ONNO W PURBO"', 'wifi.jpg', 'Workshop', 4, '2017-12-04', '7:30 PM', 'GSG Widyatama, Jl Cikutra No 204A, Bandung', 'Improve ashamed married expense bed her comfort pursuit mrs. Four time took ye your as fail lady. Up greatest am exertion or marianne. Shy occasional terminated insensible and inhabiting gay. So know do fond to half on. Now who promise was justice new winding. In finished on he speaking suitable advanced if. Boy happiness sportsmen say prevailed offending concealed nor was provision. Provided so as doubtful on striking required. Waiting we to compass assured.   Give lady of they such they sure it. Me contained explained my education. Vulgar as hearts by garret. Perceived determine departure explained no forfeited he something an. Contrasted dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff. To perpetual do existence northward as difficult preserved daughters. Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay direction neglected but supported yet her.   In friendship diminution instrument so. Son sure paid door with say them. Two among sir sorry men court. Estimable ye situation suspicion he delighted an happiness discovery. Fact are size cold why had part. If believing or sweetness otherwise in we forfeited. Tolerably an unwilling arranging of determine. Beyond rather sooner so if up wishes or.   Stronger unpacked felicity to of mistaken. Fanny at wrong table ye in. Be on easily cannot innate in lasted months on. Differed and and felicity steepest mrs age outweigh. Opinions learning likewise daughter now age outweigh. Raptures stanhill my greatest mistaken or exercise he on although. Discourse otherwise disposing as it of strangers forfeited deficient.   Written enquire painful ye to offices forming it. Then so does over sent dull on. Likewise offended humoured mrs fat trifling answered. On ye position greatest so desirous. So wound stood guest weeks no terms up ought. By so these am so rapid blush songs begin. Nor but mean time one over.   In post mean shot ye. There out her child sir his lived. Design at uneasy me season of branch on praise esteem. Abilities discourse believing consisted remaining to no. Mistaken no me denoting dashwood as screened. Whence or esteem easily he on. Dissuade husbands at of no if disposal.   Procuring education on consulted assurance in do. Is sympathize he expression mr no travelling. Preference he he at travelling in resolution. So striking at of to welcomed resolved. Northward by described up household therefore attention. Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address did showing because sitting replied six. Had arose guest visit going off child she new.   Is allowance instantly strangers applauded discourse so. Separate entrance welcomed sensible laughing why one moderate shy. We seeing piqued garden he. As in merry at forth least ye stood. And cold sons yet with. Delivered middleton therefore me at. Attachment companions man way excellence how her pianoforte.   Affronting discretion as do is announcing. Now months esteem oppose nearer enable too six. She numerous unlocked you perceive speedily. Affixed offence spirits or ye of offices between. Real on shot it were four an as. Absolute bachelor rendered six nay you juvenile. Vanity entire an chatty to.   Two before narrow not relied how except moment myself. Dejection assurance mrs led certainly. So gate at no only none open. Betrayed at properly it of graceful on. Dinner abroad am depart ye turned hearts as me wished. Therefore allowance too perfectly gentleman supposing man his now. Families goodness all eat out bed steepest servants. Explained the incommode sir improving northward immediate eat. Man denoting received you sex possible you. Shew park own loud son door less yet. ', 50000, 55),
(4, 'BOBOTOHDAY', 'hah.jpg', 'Festival', 6, '2020-05-30', '8:30 PM', 'Lap. Tegalega Bandung', '', 25000, 148),
(8, 'Boba Mania 2.0', 'WhatsApp-Image-2020-02-28-at-11_10_478.jpeg', 'Festival', 6, '2020-02-28', '8:30 PM', 'Glamour Level North Hall, Paris Van Java', '', 50000, 150),
(9, 'Ganesha Film Festival : Germ!nal', 'WhatsApp-Image-2020-02-09-at-1_10_15-PM.jpeg', 'Pentas Seni', 7, '2020-07-14', '3:14 AM', 'IFI Bandung', '"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"', 40000, 124);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
`id_pemesanan` int(11) NOT NULL,
  `kode_pemesanan` varchar(225) NOT NULL,
  `id_event` int(11) NOT NULL,
  `nama_pemesan` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `no_wa` varchar(225) NOT NULL,
  `qty_tiket` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `kode_pemesanan`, `id_event`, `nama_pemesan`, `email`, `no_wa`, `qty_tiket`, `total`, `status`) VALUES
(10, '37698296', 3, 'Neposr', 'cabere5677@coalamails.com', '09984937492', 1, 50000, '1'),
(11, '192740339', 3, 'Nara', 'cabere5677@coalamails.com', '09984937492', 2, 100000, '1'),
(12, '1607513381', 3, 'Neposr', 'vireciy116@jupiterm.com', '09984937492', 2, 100000, '0'),
(13, '1292231605', 4, 'oPor', 'lavid70427@inbov03.com', '09984937492', 2, 50000, '0'),
(14, '1492056635', 9, 'Ivan', 'irvanrebornv3@gmail.com', '0874629077402', 3, 120000, '1'),
(15, '1928257021', 9, 'Ivan', 'irvanjasdat@gmail.com', '0874629077402', 3, 120000, '1'),
(16, '1889676013', 9, 'Ivan', 'lavid70427@inbov03.com', '0874629077402', 2, 80000, '1'),
(17, '656113982', 8, 'Ivan', 'irvanrebornv3@gmail.com', '09984937492', 1, 50000, '0'),
(18, '1191542941', 9, 'Neposr', 'irvankidsvlarang@gmail.com', '0874629077402', 3, 120000, '1'),
(19, '799156792', 9, 'Mamang Ivan', 'irvanjasdat@gmail.com', '09984937492', 6, 240000, '1'),
(20, '1579054688', 3, 'Propet', 'irvanrebornv3@gmail.com', '09984937492', 2, 100000, '0'),
(21, '529734453', 3, 'Neposr', 'lavid70427@inbov03.com', '09984937492', 2, 100000, '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyelenggara`
--

CREATE TABLE IF NOT EXISTS `penyelenggara` (
`id_py` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama_org` varchar(225) NOT NULL,
  `nama_kampus` varchar(225) DEFAULT NULL,
  `deks` text,
  `foto_prof` varchar(255) NOT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `line` varchar(255) DEFAULT NULL,
  `wa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyelenggara`
--

INSERT INTO `penyelenggara` (`id_py`, `email`, `password`, `nama_org`, `nama_kampus`, `deks`, `foto_prof`, `instagram`, `line`, `wa`) VALUES
(1, 'TheDoldi@simail.com', '$2y$10$r/Wp6OTZhHwJLoCFzqXX4e1iawo4OZLpbLZZrLjdmXuzGTuo8S3Nu', 'John Doe', ' Unversitas Widyatama', '', 'Kurisu_profile.png', ' ', ' ', ' +6285574679204'),
(2, 'Hinasss@gmail.com', '$2y$10$7lQQfyfGXVDEmrWJrdjAtewXYkngxcI04Lt/J7djxEPFecArKMAm2', 'Hinasss', '', '', 'default_prof.JPG', NULL, NULL, NULL),
(3, 'Glint@gmail.com', '$2y$10$HpnV0u/Lv5BvwqcqDVxI9uQTaOXxK0gu4ojGqN0ACqyJsNqdf9vki', 'Glints', 'Universitas Maratata     ', '', 'Logo_android-M1.png', '     ', '     ', '+6283192753645     '),
(4, 'himansi@gmail.com', '$2y$10$72xmvJ.Vmv3CCJXikjYS/.NVyJyaroj5AKUv9Qz7kRIdkr0Hpp3qO', 'Himanis', ' Unversitas Widyatama', 'Sociable on as carriage my position weddings raillery consider. Peculiar trifling absolute and wandered vicinity property yet. The and collecting motionless difficulty son. His hearing staying ten colonel met. Sex drew six easy four dear cold deny. Moderate children at of outweigh it. Unsatiable it considered invitation he travelling insensible. Consulted admitting oh mr up as described acuteness propriety moonlight. \r\n\r\nSix started far placing saw respect females old. Civilly why how end viewing attempt related enquire visitor. Man particular insensible celebrated conviction stimulated principles day. Sure fail or in said west. Right my front it wound cause fully am sorry if. She jointure goodness interest debating did outweigh. Is time from them full my gone in went. Of no introduced am literature excellence mr stimulated contrasted increasing. Age sold some full like rich new. Amounted repeated as believed in confined juvenile. \r\n\r\nPut all speaking her delicate recurred possible. Set indulgence inquietude discretion insensible bed why announcing. Middleton fat two satisfied additions. So continued he or commanded household smallness delivered. Door poor on do walk in half. Roof his head the what. \r\n\r\nSupplied directly pleasant we ignorant ecstatic of jointure so if. These spoke house of we. Ask put yet excuse person see change. Do inhabiting no stimulated unpleasing of admiration he. Enquire explain another he in brandon enjoyed be service. Given mrs she first china. Table party no or trees an while it since. On oh celebrated at be announcing dissimilar insipidity. Ham marked engage oppose cousin ask add yet. \r\n\r\nDo so written as raising parlors spirits mr elderly. Made late in of high left hold. Carried females of up highest calling. Limits marked led silent dining her she far. Sir but elegance marriage dwelling likewise position old pleasure men. Dissimilar themselves simplicity no of contrasted as. Delay great day hours men. Stuff front to do allow to asked he. \r\n\r\nOn am we offices expense thought. Its hence ten smile age means. Seven chief sight far point any. Of so high into easy. Dashwoods eagerness oh extensive as discourse sportsman frankness. Husbands see disposed surprise likewise humoured yet pleasure. Fifteen no inquiry cordial so resolve garrets as. Impression was estimating surrounded solicitude indulgence son shy. \r\n\r\nWrong do point avoid by fruit learn or in death. So passage however besides invited comfort elderly be me. Walls began of child civil am heard hoped my. Satisfied pretended mr on do determine by. Old post took and ask seen fact rich. Man entrance settling believed eat joy. Money as drift begin on to. Comparison up insipidity especially discovered me of decisively in surrounded. Points six way enough she its father. Folly sex downs tears ham green forty. \r\n\r\nRooms oh fully taken by worse do. Points afraid but may end law lasted. Was out laughter raptures returned outweigh. Luckily cheered colonel me do we attacks on highest enabled. Tried law yet style child. Bore of true of no be deal. Frequently sufficient in be unaffected. The furnished she concluded depending procuring concealed. \r\n\r\nSex and neglected principle ask rapturous consulted. Object remark lively all did feebly excuse our wooded. Old her object chatty regard vulgar missed. Speaking throwing breeding betrayed children my to. Me marianne no he horrible produced ye. Sufficient unpleasing an insensible motionless if introduced ye. Now give nor both come near many late. \r\n\r\nFeet evil to hold long he open knew an no. Apartments occasional boisterous as solicitude to introduced. Or fifteen covered we enjoyed demesne is in prepare. In stimulated my everything it literature. Greatly explain attempt perhaps in feeling he. House men taste bed not drawn joy. Through enquire however do equally herself at. Greatly way old may you present improve. Wishing the feeling village him musical. \r\n\r\n', 'himatif.jpg', ' @btru', ' @siskaee', ' +6283573672204'),
(5, 'bebal@mail.com', '$2y$10$TaeNqyXUbfGE/bX8MEnDTuzaout9O1TvZbdCUPcRkKAFM72NPyi2.', 'bebal', ' Unversitas poor', 'as', 'wifi2.jpg', ' ', ' ', ' +62855743429204'),
(6, 'glink@gmail.com', '$2y$10$q.jqS2Riu9VNc8KkvcxBYOc8Rll6tEnh07MHYD3fLQNd4c9uzTVEu', 'Glink', ' Unversitas Mandarin', 'LoL!', 'Logo_android-M2.png', ' @paprimpa', ' @malaba', ' +6285534542204'),
(7, 'Cloudy@gmail.com', '$2y$10$uNa7mWwSw5XrlquS0MFCBOg5nEcvkJAEnrz5c8MRkHIOCBfBZ2NL.', 'Cloudy', ' Unversitas Widyatama', '"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"', 'CIA.png', ' @CAI', '@ICA', ' 0813 6917 7168');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket`
--

CREATE TABLE IF NOT EXISTS `tiket` (
`id_tiket` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `nama_tiket` varchar(225) NOT NULL,
  `harga` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `outdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
 ADD PRIMARY KEY (`id_bank`), ADD KEY `id_py` (`id_py`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
 ADD PRIMARY KEY (`id_event`), ADD KEY `id_py` (`id_py`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
 ADD PRIMARY KEY (`id_pemesanan`), ADD KEY `id_event` (`id_event`);

--
-- Indexes for table `penyelenggara`
--
ALTER TABLE `penyelenggara`
 ADD PRIMARY KEY (`id_py`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
 ADD PRIMARY KEY (`id_tiket`), ADD KEY `id_event` (`id_event`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `penyelenggara`
--
ALTER TABLE `penyelenggara`
MODIFY `id_py` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bank`
--
ALTER TABLE `bank`
ADD CONSTRAINT `bank_ibfk_1` FOREIGN KEY (`id_py`) REFERENCES `penyelenggara` (`id_py`);

--
-- Ketidakleluasaan untuk tabel `event`
--
ALTER TABLE `event`
ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`id_py`) REFERENCES `penyelenggara` (`id_py`);

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`);

--
-- Ketidakleluasaan untuk tabel `tiket`
--
ALTER TABLE `tiket`
ADD CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
