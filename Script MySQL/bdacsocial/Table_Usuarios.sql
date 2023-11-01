CREATE TABLE Usuarios (
  id int PRIMARY KEY AUTO_INCREMENT,
  `Nome` varchar(50) DEFAULT NULL,
  `Nacionalidade` varchar(50) DEFAULT NULL,
  `EstadoCivil` varchar(20) DEFAULT NULL,
  `Profissao` varchar(30) DEFAULT NULL,
  `RG` int DEFAULT NULL,
  `CPF` int DEFAULT NULL,
  `Endereco` varchar(50) DEFAULT NULL,
  `Numero` int DEFAULT NULL,
  `Complemento` varchar(20) DEFAULT NULL,
  `Bairro` varchar(20) DEFAULT NULL,
  `Codigo_postal` int DEFAULT NULL,
  `Cidade` varchar(30) DEFAULT NULL,
  `Estado` varchar(20) DEFAULT NULL ) 
