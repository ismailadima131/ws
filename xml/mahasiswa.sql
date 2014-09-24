DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `nim` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `prodi` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`, `prodi`)
VALUES
	(123,'andi','jogja','komsi'),
	(342,'joko','sleman','rekmed'),
	(432,'ica','bantul','elins'),
	(765,'ela','solo','metins'),
	(987,'fery','jakarta','komsi');