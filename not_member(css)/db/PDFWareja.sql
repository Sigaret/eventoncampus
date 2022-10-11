CREATE TABLE `Tberkas` (
  `id_berkas` int PRIMARY KEY,
  `judul_b` varchar(255),
  `abstrak` text,
  `thumbnail` varchar(255),
  `tgl_uploaded` date,
  `tgl_updated` date,
  `file` varchar(255),
  `tags` varchar(255),
  `id_user` int,
  `id_features` int,
  `id_kategori` int
);

CREATE TABLE `Tkategori` (
  `id_kategori` int PRIMARY KEY,
  `nama_kat` varchar(255),
  `deks` text
);

CREATE TABLE `Tfeatures` (
  `id_features` int PRIMARY KEY,
  `downloaded` int,
  `viewed` int
);

CREATE TABLE `Tuser` (
  `id_user` int PRIMARY KEY NOT NULL,
  `nama` varchar(255),
  `email` varchar(255),
  `foto_p` longblob,
  `username` varchar(255),
  `password` varchar(255)
);

ALTER TABLE `Tberkas` ADD FOREIGN KEY (`id_user`) REFERENCES `Tuser` (`id_user`);

ALTER TABLE `Tberkas` ADD FOREIGN KEY (`id_features`) REFERENCES `Tfeatures` (`id_features`);

ALTER TABLE `Tberkas` ADD FOREIGN KEY (`id_kategori`) REFERENCES `Tkategori` (`id_kategori`);
