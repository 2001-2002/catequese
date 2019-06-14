-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: localhost    Database: catequese
-- ------------------------------------------------------
-- Server version	5.7.26-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `catequista`
--

DROP TABLE IF EXISTS `catequista`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `catequista` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `telefone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catequista`
--

LOCK TABLES `catequista` WRITE;
/*!40000 ALTER TABLE `catequista` DISABLE KEYS */;
INSERT INTO `catequista` VALUES (2,'Guilherme Felipe de Lima','18','Quadra 406 conjunto K casa 01','Recanto das Emas','M','2001-01-20','992545301','guifellim20@gmail.com','guilherme.lima','$2y$13$4vlkrHSnX4dJ1m90mpzb.eWMCCFK1/Vvs2w5otEcPvFmbtHYyAD/y','ROLE_ADMIN'),(3,'Eduardo Messias de Almeida','27','Qd 105 conj. 13 lote 02','Recanto das Emas','M','1991-08-05','982949310','eduardoeducadorfisico@gmail.com','eduardo.almeida','$2y$13$rCSsgZO3/ognOngxRwvF7Onwr2YKsSz2K8MFfts3L9POXgndCB04e','ROLE_CATEQUISTA');
/*!40000 ALTER TABLE `catequista` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `catequizando`
--

DROP TABLE IF EXISTS `catequizando`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `catequizando` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `turma_id` int(11) DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `naturalidade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batizado` tinyint(1) NOT NULL,
  `comprovante_batizado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nome_pai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_mae` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `casado` tinyint(1) NOT NULL,
  `comprovante_casamento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eucaristia` tinyint(1) NOT NULL,
  `comprovante_eucaristia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `documento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone_pai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone_mae` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nome_padrinho_crisma` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_padrinho` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `endereco_padrinho` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cidade_catequizando` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade_padrinho` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendencias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_369BC3ECEBA2CFD` (`turma_id`),
  CONSTRAINT `FK_369BC3ECEBA2CFD` FOREIGN KEY (`turma_id`) REFERENCES `turma` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catequizando`
--

LOCK TABLES `catequizando` WRITE;
/*!40000 ALTER TABLE `catequizando` DISABLE KEYS */;
INSERT INTO `catequizando` VALUES (1,1,'Bruno Henrique Mourão Gonçalves','M','2004-08-04','Brasilia DF','Q 406 cj X casa16','982256689',1,'e7a485111049ee025e621f064ca79533.jpeg','Francisco de Oliveira Gonçalves','Francisca Mourão Pereira Gonçalves',0,'9e822cf07a7105e187d8c638cdde821e.pdf',1,'6d26939300fbc58ae75623fd6cd8ecc2.jpeg','fed30303e7e1961b63e6803a4d1bc8b9.jpeg','981403844','982709418',NULL,NULL,NULL,'Recanto das Emas',NULL,'Taxa do retiro'),(2,1,'Geovanna Rodrigues Mourão','F','2003-11-15','Brasileira','Não informado','995709111',1,'8cefbd7634eae79f24ec3ccf3a329560.pdf','Francisco Mourão Pereira','Luciana Rodrigues da Silva',0,NULL,1,'ccbdb0054c4b7de7f9dafacc5dc34e89.pdf','a5a0402500d0c66e791b526cb2d74281.pdf','991505882','994327487',NULL,NULL,NULL,'Não informado',NULL,'Taxa do retiro,Endereço'),(3,1,'Amanda Soares Pontes','f','2004-09-06','Brasil','Quadra 206 conjunto 11 casa 15','985496340',1,'baf8eab92770fc203298776d87cb2e7c.pdf','Ronalt Ferreira Pontes','Alexsandra Soares da Fonseca',0,NULL,1,'93ee1dcd906456007cb1a1572a31abe2.pdf','1036cf1c101ac5bc4e15653b262e2145.pdf',NULL,'981550150',NULL,NULL,NULL,'Recanto das Emas',NULL,'Taxa do retiro'),(4,1,'Andressa Barbosa dos Santos','F','2004-05-04','Brasil','Quadra 205 conjunto 09 casa 02','993669858',1,'661a6094198579f7395a109e559e53e9.pdf','José Domingos dos Santos Filho','Maria Cristina Pacheco Barbosa dos Santos',0,NULL,1,'54da83eee0d75a42f398b1193befbfc7.pdf','215f240c38f0d6b3feaef242bd85aa91.pdf',NULL,'992310545',NULL,NULL,NULL,'Recanto das Emas',NULL,'Taxa da inscrição,Taxa do retiro,Taxa do livro'),(5,1,'Camily Felix Gonçalves do Nascimento','F','2005-08-31','Brasil','Não informado','999435462',0,NULL,'João Felix do Nascimento','Flávia Gonçalves Rodrigues',0,NULL,0,NULL,'7683c3e0ce8cc79f40276b51821f4688.pdf',NULL,NULL,NULL,NULL,NULL,'Não informado',NULL,'Comprovante de Eucaristia,Comprovante de Batismo,Taxa da inscrição,Taxa do retiro,Taxa do livro,Endereço'),(6,1,'Daniele de Sousa Oliveira','F','1899-01-01','Brasil','Quadra 104','993978959',1,'b32bb6db439083871648cc2ff6198909.pdf','João Ferreira','Não Informado',0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Recanto das Emas',NULL,'Comprovante de Eucaristia,Taxa do retiro,Documento identificador,Endereço'),(7,1,'Gustavo Henrique Silva Lima','M','2003-09-16','Brasileiro','Não Informado','993815273',0,NULL,'Não Informado','Não Informado',0,NULL,0,NULL,'402d3d95932a0de70c718a11ed10d856.pdf',NULL,NULL,NULL,NULL,NULL,'Não informado',NULL,'Comprovante de Eucaristia,Comprovante de Batismo,Taxa da inscrição,Taxa do retiro,Taxa do livro,Endereço'),(8,1,'João Pedro de Sousa Oliveira','M','1899-01-01','Brasileiro','Quadra 104','993978959',1,'d15aff33f9cdc4e6e6d229b702139b82.pdf','João Ferreira','Não informado',0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Recanto das Emas',NULL,'Comprovante de Eucaristia,Taxa do retiro,Documento identificador,Endereço'),(9,1,'Luana Souza Mendes','F','2004-11-29','Brasileira','Não informado','991948327',1,'2fc5daca063b8f845f945871bf19ccc9.pdf','Gilney Teodoro Mendes','Lucileide Ferreira de Souza Mendes',0,NULL,1,'09edd81abefcf378671f9c3ff388322d.pdf','53f80e68ab84ff36e6cb5f196b5132b8.pdf',NULL,'986075566',NULL,NULL,NULL,'Não Informado',NULL,'Taxa do retiro,Endereço'),(10,1,'Willian Borges de Azevedo','M','2003-06-30','Brasileiro','Quadra 205 conjunto 19 casa 21','982651899',1,NULL,'William Joaquim de Azevedo','Maria Aldeniza Alves Borges',1,NULL,1,NULL,NULL,'982141731','981596456',NULL,NULL,NULL,'Recanto das Emas',NULL,'Comprovante de Eucaristia,Comprovante de Batismo,Taxa do retiro,Documento identificador'),(11,1,'Jennyfer Araujo de Sousa','F','2005-04-18','Brasileiro','Quadra 204 conjunto 05 casa 09','991484092',1,NULL,'Vando Araujo de Sousa','Tânia Lúcia Salgado Nogueira Araujo',1,NULL,1,NULL,NULL,'991011565','991467417',NULL,NULL,NULL,'Recanto das Emas',NULL,'Comprovante de Eucaristia,Comprovante de Batismo,Taxa da inscrição,Taxa do retiro,Taxa do livro,Documento identificador'),(12,1,'Vinícius Pinto Nogueira','M','2001-07-11','Brasileiro','Quadra 406 conjunto Y casa 10','998808064',1,NULL,'Francisco Fabio Nogueira Rodrigues','Ana Alice Aguido Pinto',0,NULL,1,NULL,NULL,'995458638',NULL,NULL,NULL,NULL,'Recanto das Emas',NULL,'Comprovante de Eucaristia,Comprovante de Batismo,Taxa do retiro,Documento identificador'),(13,1,'Letycia Almeida de Albuquerque','F','2005-06-26','Brasileira','Quadra 205 conjunto 05 casa 09','996388332',1,NULL,'Jairlan Rolim Pereira Albuquerque','Daianne Almeida de Fiqueredo',1,NULL,1,NULL,NULL,'984245542','983539354',NULL,NULL,NULL,'Recanto das Emas',NULL,'Comprovante de Eucaristia,Comprovante de Batismo,Documento identificador,Taxa do retiro'),(14,1,'Camilla Beatriz Pereira Silva','F','2005-02-18','Brasileiro','Qn 25 Conjunto 02 Condominio 8 Bloco 06 Ap 403','996386013',0,NULL,'Agamenom Pereira da Silva','Thaís Regina da Silva',0,NULL,0,NULL,NULL,NULL,'992624694',NULL,NULL,NULL,'Riacho fundo 2',NULL,'Comprovante de Eucaristia,Comprovante de Batismo,Taxa da inscrição,Taxa do retiro,Taxa do livro,Documento identificador'),(15,1,'Mykaely Gonçalves Lopes Costa','F','2004-07-27','Brasileira','Não informado','996708854',0,NULL,'Silvio Alves Lopes Costa','Érica Gonçalves Rodrigues',0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Não informado',NULL,'Comprovante de Eucaristia,Comprovante de Batismo,Taxa da inscrição,Taxa do retiro,Taxa do livro,Documento identificador,Endereço'),(16,1,'Nicolly Lino dos Santos','F','2005-06-04','Brasileira','Não informado','998023776',1,'be50cd9e3164d715cebbefe6d406b9dd.pdf','Vilson José dos Santos','Sandra Sony Lino Sobrinho',0,NULL,1,'4f4ff3dbcbeac1ba0dfb1a8343a60cd9.pdf','624a660cf0d1179452ec8c2eee9352ea.pdf',NULL,NULL,NULL,NULL,NULL,'Não Informado',NULL,'Taxa da inscrição,Taxa do retiro,Taxa do livro,Endereço'),(17,1,'Stela Maria de Sousa Pereira','F','2005-01-21','Brasileiro','Não informado','994019701',1,'2d774804766b9b5b6d711d509f5de2a7.pdf','Carlos Alberto Soares Pereira','Solange Maria de Sousa Pereira',0,NULL,1,'20e67704dac45395da5bb1f0b8298e6f.pdf','c7e5bc85ad0545ef43cafc18c57f8621.pdf',NULL,'993584204',NULL,NULL,NULL,'Recanto das Emas',NULL,'Endereço'),(18,1,'Sarah de Souza Lima','F','1899-01-01','Brasileira','Não','995056358',1,NULL,'Não Informado','Não Informado',0,NULL,1,'890b31c1d0102d9b110c8e5cc1c4306b.pdf',NULL,NULL,NULL,NULL,NULL,NULL,'não',NULL,'Comprovante de Batismo,Taxa do retiro,Documento identificador'),(19,1,'Vinicius Moreira dos Santos Beserra','M','1899-01-01','não','não','993111599',0,'9faa249be8a5c7e9670663df4e016a88.pdf','Não informado','Não informado',0,NULL,0,NULL,'e4c0030846165a9832c2dc1e89040047.pdf',NULL,NULL,NULL,NULL,NULL,'não',NULL,'Comprovante de Eucaristia,Taxa da inscrição,Taxa do retiro,Taxa do livro,Documento identificador,Endereço'),(20,1,'Volney Santos Sousa','M','2004-07-30','Brasileiro','Não','000000000',1,NULL,'Edivaldo Teixeira de Sousa','Eduvirgem Santos Sousa',0,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'não',NULL,'Comprovante de Eucaristia,Comprovante de Batismo,Endereço'),(21,1,'Williane Felipe de Lima','F','2004-12-29','Brasileiro','Quadra 406 conjunto K casa 01','983187451',1,NULL,'Márcia da Silva Lima de Sousa','Willian Felipe de Sousa',0,NULL,1,NULL,NULL,'992966040','984700783',NULL,NULL,NULL,'Recanto das Emas',NULL,'Comprovante de Eucaristia,Comprovante de Batismo,Taxa da inscrição,Taxa do retiro,Taxa do livro,Documento identificador'),(22,1,'Haylla Carvalho e Silva','F','2001-10-27','Brasileiro','Quadra 106; Conjunto 2A; Lote 8','+55 61 9101-6545',0,NULL,'Lourismar Pereira da Silva','Francisca Pereira de Carvalho',0,NULL,0,NULL,NULL,'(89) 994181190','(89) 994181030',NULL,NULL,NULL,'Recanto das Emas',NULL,'Comprovante de Eucaristia,Comprovante de Batismo,Taxa da inscrição,Taxa do retiro,Taxa do livro,Documento identificador'),(23,1,'Yasmin  Coutinho dos Santos','F','2005-10-10','Brasileiro','quadra 103 conj 02 casa 16','+55 61 9410-5444',1,NULL,'Paulo Sérgio de Moraes dos Santos','Camila Santana Coutinho',0,NULL,1,NULL,NULL,NULL,'992699596',NULL,NULL,NULL,'Recanto das emas',NULL,'Comprovante de Eucaristia,Comprovante de Batismo,Taxa da inscrição,Taxa do retiro,Taxa do livro,Documento identificador'),(24,1,'Arthur Silva Sousa','M','2004-05-13','Brasileiro','206 Cj 18 cs18','+55 61 8379-6968',1,NULL,'Amilton cruz de Sousa','Carlivania Batista da Silva',0,NULL,1,NULL,NULL,'+55 61 9324-3713',NULL,NULL,NULL,NULL,'Recanto das Emas',NULL,'Comprovante de Eucaristia,Comprovante de Batismo,Taxa da inscrição,Taxa do retiro,Taxa do livro,Documento identificador'),(25,1,'Guilherme Paes de Lima','M','2005-05-05','Brasileiro','quadra 206 conjunto 23 lote 11 casa 1','+55 61 8176-2252',1,NULL,'Genival de Oliveira Lima','Rosália Cecilia Lins Paes',0,NULL,1,NULL,NULL,'0000000000','61982166657',NULL,NULL,NULL,'Recanto das emas',NULL,'Comprovante de Eucaristia,Comprovante de Batismo,Taxa da inscrição,Taxa do retiro,Taxa do livro,Documento identificador');
/*!40000 ALTER TABLE `catequizando` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `escola`
--

DROP TABLE IF EXISTS `escola`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `escola` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `escola`
--

LOCK TABLES `escola` WRITE;
/*!40000 ALTER TABLE `escola` DISABLE KEYS */;
INSERT INTO `escola` VALUES (1,'Colégio CEF 206','Quadra 206','Recanto das Emas'),(2,'Colégio CEF 101','Quadra 101','Recanto das Emas'),(3,'Colégio CEF 404','Quadra 404','Recanto das Emas');
/*!40000 ALTER TABLE `escola` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `turma`
--

DROP TABLE IF EXISTS `turma`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `turma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `escola_id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etapa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_etapa` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2B0219A6D786BBC9` (`escola_id`),
  CONSTRAINT `FK_2B0219A6D786BBC9` FOREIGN KEY (`escola_id`) REFERENCES `escola` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `turma`
--

LOCK TABLES `turma` WRITE;
/*!40000 ALTER TABLE `turma` DISABLE KEYS */;
INSERT INTO `turma` VALUES (1,1,'Crisma Top de Uau','Crisma',2);
/*!40000 ALTER TABLE `turma` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `turma_catequista`
--

DROP TABLE IF EXISTS `turma_catequista`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `turma_catequista` (
  `turma_id` int(11) NOT NULL,
  `catequista_id` int(11) NOT NULL,
  PRIMARY KEY (`turma_id`,`catequista_id`),
  KEY `IDX_D837F07ACEBA2CFD` (`turma_id`),
  KEY `IDX_D837F07AF0B7CA40` (`catequista_id`),
  CONSTRAINT `FK_D837F07ACEBA2CFD` FOREIGN KEY (`turma_id`) REFERENCES `turma` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_D837F07AF0B7CA40` FOREIGN KEY (`catequista_id`) REFERENCES `catequista` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `turma_catequista`
--

LOCK TABLES `turma_catequista` WRITE;
/*!40000 ALTER TABLE `turma_catequista` DISABLE KEYS */;
INSERT INTO `turma_catequista` VALUES (1,2),(1,3);
/*!40000 ALTER TABLE `turma_catequista` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-14 11:15:16
