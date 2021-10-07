CREATE TABLE `veiculo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` char(100) DEFAULT NULL,
  `marca` char(50) DEFAULT NULL,
  `modelo` char(50) DEFAULT NULL,
  `placa` char(8) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1