-- MySQL dump 10.13  Distrib 5.5.20, for Win32 (x86)
--
-- Host: localhost    Database: library
-- ------------------------------------------------------
-- Server version	5.5.20-log

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
-- Table structure for table `tblbooks`
--

DROP TABLE IF EXISTS `tblbooks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblbooks` (
  `ctrlnum` int(11) NOT NULL AUTO_INCREMENT,
  `accnum` varchar(20) NOT NULL,
  `daterec` date NOT NULL,
  `classloc` decimal(7,2) NOT NULL,
  `author` varchar(70) NOT NULL,
  `title` varchar(150) NOT NULL,
  `edition` varchar(10) NOT NULL,
  `volume` varchar(11) NOT NULL,
  `pages` varchar(11) NOT NULL,
  `sofund` varchar(50) NOT NULL,
  `costprice` decimal(7,2) NOT NULL,
  `publisher` varchar(80) NOT NULL,
  `copyright` varchar(20) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `colorcode` varchar(30) NOT NULL,
  `quantity` varchar(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `cardnum` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `pichref` varchar(255) NOT NULL,
  `picom` varchar(100) NOT NULL,
  PRIMARY KEY (`ctrlnum`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblbooks`
--

LOCK TABLES `tblbooks` WRITE;
/*!40000 ALTER TABLE `tblbooks` DISABLE KEYS */;
INSERT INTO `tblbooks` VALUES (1,'1','2005-11-07',80.00,'Westlake, Helen G','Childrens','','1','368','Rey C. Alyaga Library Collection',0.00,'Gison & CO.','1973','','Ligth Blue','','General References','','Family','Moon flower.jpg',''),(2,'2','2005-11-07',153.00,'Dodd, David H.','Cognition New','','1','399','Rey C. Alejaga Library Collection',0.00,'Allyn & Bacon','1980','','Red','','Philosophy,Psychology','','Intellect','Peace.jpg',''),(3,'3','2005-11-07',658.00,'Grant, Philip','The Effort - Net Return Mood of Employee Motivation','','1','237','Rey C. Alyaga Library Collection',0.00,'Quorum Books','1990','','Brown','','Applied Sciences','','Employee','Wind.jpg',''),(4,'4','2005-11-07',611.00,'Krause William','Concise Text of Histology','','1','429&','Rey C. Alejaga Library Collection',0.00,'Williams','1981','','Brown','','Applied Sciences','','Histology','Radiance.jpg',''),(5,'5','2005-11-07',808.00,'Vesterman, William','The College Writers Readers Essays on Students','','1','542','Rey C. Alyaga Library Collection',0.00,'Mickraw-Hill','1989','','Violet','','Literature','','Novel','Vortec space.jpg',''),(6,'6','2003-08-12',658.00,'Quick Thomas L.','Person to Person Management','','1','210','Rey C. Aleyaga Library Collection',3.00,'St. Martin','1977','','Brown','','Applied Sciences','','Employee','Ripple.jpg',''),(40,'7','2005-11-07',560.00,'Ralph David M.','Principle of Paleontology','','1','481','Rey C. Alyaga Library Collection',0.00,'W.H. Freeman ','1978','','Dark Blue','','Pure Sciences','','Paleontology','Stonehenge.jpg',''),(41,'8','2005-11-07',310.00,'Kaplan, Harold','Combustion Toxicology','','1','174','Rey C. Alyaga Library Collection',1180.40,'Technomic','1983','OK','Pink','','Social Sciences','','Toxicology','Power.jpg',''),(43,'12','2005-11-07',631.38,'Stansell, John','The Prentice-Hall Concise Book of Communication','','1','147','Rey C. Alyaga Library Collection',0.00,'Prentice - Hall','1983','','Brown','','Applied Sciences','','Novel','Hermit coders.jpg',''),(44,'19','2005-11-07',155.67,'Belsky, Janet','The Psychology of Aging','','1','293','Rey C. Alyaga Library Collection',0.00,'C.V. Mosby','1982','','Red','','Philosophy,Psychology','','Psychology','Friend.jpg',''),(45,'22','2005-11-07',158.10,'Thomas, Paul G.','Psychofeedback','','1','201','Rey C. Alyaga Library Collection',0.00,'Prentice-Hall','1982','','Red','','Philosophy,Psychology','','Psychology','Tulips.jpg',''),(46,'26','2005-11-07',615.80,'Reed, Kathlyn L.','Concepts of Occupational Theraphy','','1','284','Rey C. Alyaga Library Collection',0.00,'Williams / Wilkins','1983','','Brown','','Applied Sciences','','Theraphy','Purple flower.jpg',''),(47,'32','2005-11-07',612.00,'Lausch, Erwin','Manipulation','','1','283','Rey C. Alyaga Library Collection',0.00,'The Viking Press','1972','','Brown','','Applied Sciences','','Employee','Red moon desert.jpg',''),(53,'48','0000-00-00',0.00,'48','48','aaaa','','','',0.00,'','','','-','','-','','Undefined','Crystal.jpg','48'),(54,'49','0000-00-00',0.00,'49 updated din','49 UPdated din','','','','',0.00,'','','','-','','-','','Undefined','Blue hills.jpg','49'),(55,'50','0000-00-00',0.00,'50','50','','','','',0.00,'','','','-','','-','','Undefined','Follow.jpg','50'),(56,'51','0000-00-00',0.00,'51','51','','','','',0.00,'','','','-','','-','','Undefined','Home.jpg','51'),(57,'52','0000-00-00',0.00,'52 updated','52 updated','','','','',0.00,'','','','-','','-','','Undefined','Sunset.jpg','52'),(68,'59','2014-12-05',43.00,'Aqua Spring','The Summit Viva Mineral','2nd','3','23','Computer Science Office',134.00,'ESRaymund Eyestrain','1994','Flat','Ligth Blue','','Pure Sciences','234','Computer','Richard_Stallman true hacker.jpg','Hackers');
/*!40000 ALTER TABLE `tblbooks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblborrow`
--

DROP TABLE IF EXISTS `tblborrow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblborrow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accnum` varchar(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `ctrlnum` int(11) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `mname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `timer` time NOT NULL,
  `dater1` date NOT NULL,
  `dater2` date NOT NULL,
  `mode` varchar(40) NOT NULL,
  `remarks` varchar(20) NOT NULL,
  `comments` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblborrow`
--

LOCK TABLES `tblborrow` WRITE;
/*!40000 ALTER TABLE `tblborrow` DISABLE KEYS */;
INSERT INTO `tblborrow` VALUES (54,'32','Manipulation','Lausch, Erwin',22,'Jennifer','M.','Contreras','12:12:36','2014-05-01','2014-05-04','Borrow','Overdue','5 pesos charge'),(56,'26','Concepts of Occupational Theraphy','Reed, Kathlyn L.',22,'Jennifer','M.','Contreras','12:13:26','2014-05-01','0000-00-00','Borrow','HOLD',''),(57,'22','Psychofeedback','Thomas, Paul G.',15,'Admin','X.','Admin','12:19:17','2014-05-01','0000-00-00','Borrow','HOLD',''),(61,'52','52 updated','52 updated',22,'Jennifer','M.','Contreras','19:15:18','2014-05-11','0000-00-00','Borrow','HOLD','');
/*!40000 ALTER TABLE `tblborrow` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcollege`
--

DROP TABLE IF EXISTS `tblcollege`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblcollege` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ctrlnum` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `studnum` varchar(30) NOT NULL,
  `bday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `course` varchar(30) NOT NULL,
  `yearlevel` varchar(15) NOT NULL,
  `contactnum` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fathersname` varchar(50) NOT NULL,
  `mothersname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcollege`
--

LOCK TABLES `tblcollege` WRITE;
/*!40000 ALTER TABLE `tblcollege` DISABLE KEYS */;
INSERT INTO `tblcollege` VALUES (4,20,'Bulacan','13-0107-S','1994-02-15','Male','BSCS','II','09286411729','wardonis@gmail.com','Rey Emmanuel Adonis','Digna Adonis'),(5,21,'Bulacan','10-123-1','1994-01-29','Male','BSCS','IV','09193871642','odbunag@yahoo.com','Ferdinand Bunag','Ma. Salvacion Bunag'),(6,22,'Bulacan','11-006-1','1994-07-15','Female','BSCS','IV','09281633219','jmcontreras@yahoo.com','Julito Contreras','Elena Contreras'),(7,23,'Sta. Maria','12-001-1','1994-06-08','Male','BSCS','III','09324727265','koespiritu@msn.com','Jose Alvin Espiritu','Felicidad Espiritu'),(8,24,'Bulacan','10-030-1','1994-05-04','Female','BSCS','IV','09156481279','mfdelatorre@yahoo.com','Patricio Dela Torre','Guillerma Dela Torre'),(9,25,'Apalit','11-060-1','1993-10-17','Male','BSCS','III','09164297824','rgdelrosario@yahoo.com','Ronald Del Rosario','Marites Del Rosario'),(10,26,'Bulacan','12-014-2','1989-04-21','Male','BSCS','II','09136341827','fgoclarit@gmail.com','Francisco Oclarit','Daylinda Oclarit'),(11,27,'Bulacan','08-035-1','1996-08-14','Male','BSCS','I','09251620914','avyumol@yahoo.com','Amador Yumol','Eliza Yumol'),(12,28,'Bulacan','12-116-1','1995-03-19','Male','BSCS','III','09221683459','eeolano@yahoo.com','Edmund D. Olano','Aliw E. Olano'),(13,29,'Bulacan','12-032-2','1993-02-08','Female','BSCS','I','09191382316','msbase@gmail.com','Edwin Base','Marita Base'),(14,30,'Apalit','09-066-1','1988-03-19','Male','BSCS','I','09228286413','jddeluna@msn.com','Alfredo De Luna','Marivic De Luna'),(15,31,'Bulacan','09-121-1','1990-08-06','Male','BSCS','II','09426293131','rtmanahan@yahoo.com','Rodolfo B. Manahan','Estella T. Manahan'),(16,46,'Lebanon','11-0087-23','2014-12-11','Male','BSCS','III','33-231484-13','wcsandblast@gmail.com','San antonio Blast','Thunder Blast');
/*!40000 ALTER TABLE `tblcollege` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcurrent`
--

DROP TABLE IF EXISTS `tblcurrent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblcurrent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gtype` varchar(40) NOT NULL,
  `role` varchar(10) NOT NULL,
  `ctrlnum` int(11) NOT NULL,
  `dater` date NOT NULL,
  `timer` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcurrent`
--

LOCK TABLES `tblcurrent` WRITE;
/*!40000 ALTER TABLE `tblcurrent` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblcurrent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbldictionary`
--

DROP TABLE IF EXISTS `tbldictionary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbldictionary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `word` varchar(150) NOT NULL,
  `meaning` varchar(255) NOT NULL,
  `ctrlnum` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbldictionary`
--

LOCK TABLES `tbldictionary` WRITE;
/*!40000 ALTER TABLE `tbldictionary` DISABLE KEYS */;
INSERT INTO `tbldictionary` VALUES (1,'abaca','Ang halamang nakakatulad ng puno ng saging',0),(2,'aback','1.Paurong o nang paurong; pabalik o nang pabalik 2.Sa hulihan; sa dakong hulihan',0),(3,'abacus','Gamit ng mga intsik sa pagkukuwenta.',0),(4,'babble','Ngumawa magnganagwa. ex: Babies babble when they are hungry_ngumangawa ang mga sanggol kapag silay nagugutom',0),(5,'babe','1.Sanggol_batang bagong silang_batang musmos 2.Taong parang musmos kaya lokohin.',0),(6,'babirusa','Mailap na baboy sa mga pulo ng Indonesia na mahaba ang pangil sa Pilipinas ito ay tinatawag na baboy-ramo.',0),(7,'cab','Taksi ex:We rode in a cab. Sumakay kami sa isang taksi',0),(8,'cabaret','Bahay-Aliwan ng mahihilig makipagsayaw sa mga baylerina.',0),(9,'cabbage','1.Repolyo 2.Ubod na mura, lalo na ng niyog.',0),(10,'dab','Hipuin nang marahan at pabigla',0),(11,'dabble','Magdawdaw, dumawdaw, idawdaw. ex: Dont dabble your finger in hot water_Huwag mong idawdaw sa mainit na tubig ang iyong daliri.',0),(12,'dad','Tatay,Itay,Tatang',0),(13,'each','Bawat isa, There were five children; each was given an apple_Mayroong limang bata;bawat isa ay binigyan ng isang mansanas.',0),(14,'eager','Sabik,nananabik ex: They are eager to go to the province',0),(15,'eagle','Agila,Banoy, Monkey eating eagle',0),(16,'Fable','Pabula, kuwentong hindi totoo, ngunit nagbibigay-aral',0),(17,'fabric','Tela, Kayo: ex: Fabric made of cotton, Telang yari sa bulak',0),(18,'fabricate','Maggawa, gumawa, gawin',0),(19,'gab','Dumaldal,magdaldal,sumatsat,magsasatsat',0),(20,'gabardine','1. Telang gabardin 2. Kasuutang yari sa telang gabardin.',0),(21,'gabbler','Taong madaldal,daldalera o daldalero,satsatera o satsatero',0),(22,'Hostage','Ang taong binihag, halimbawa ay ang isang masamang-loob, upang ipatubos.',0),(23,'isolated','Liblib malayo ex: an isolated barrio: isang liblib na nayon',0),(24,'Hurricane','Bagyo;malakas na unos',0),(25,'joker','Taong mapagbiro o palabiro',0),(26,'kuckle','1. Buko ng daliri 2. Hugpungan o pinaghugpungan ng daliri',0),(27,'linen','Mga bagay na yari sa line gaya ng pantalo, mantel atbp.',0),(28,'minority','Minoridad,Minorya ex: He is a member of the minority',0),(29,'normal','normal, karaniwan,pangkaraniwan',0),(30,'ointment','Ungguwento,Pamahid o panghaplas na pomada',0),(31,'popularity','Kabantugan, pagkabantog, katanyagan,pagkatanyag',0),(32,'quitter','Taong madaling magsawa sa trabaho at sa iba pang gawain.',0),(33,'repudiation','Pagtatakwilpagkapagtakwil o pagkakapagtakwil',0),(34,'seedless','Walang buto, hindi nagkakabuto, gaya halimbawa ng isang uri ng ubas.',0),(35,'tender','Tagapag-alaga,tagapangasiwa,tagapamahala',0),(36,'ultimate','Pinakamalayo,kalayulayuan',0),(37,'vacillate','Mag-urung-sulong, mag-atubili,magbantulo,magsalawahan.',0),(38,'welcome','Sumalubong, salubungin',0),(39,'xerox','Seroks, paraan ng pagkopya ng mga limbag na materyal.',0),(40,'Yarn','Himaymay,hibla,hilatsa',0),(41,'Zigzag','Sigsag, guhit, tahi, daan, at iba na paliku-liko o paeseese',0);
/*!40000 ALTER TABLE `tbldictionary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblhigh`
--

DROP TABLE IF EXISTS `tblhigh`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblhigh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ctrlnum` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `studnum` varchar(30) NOT NULL,
  `bday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `yearlevel` varchar(15) NOT NULL,
  `section` varchar(15) NOT NULL,
  `contactnum` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fathersname` varchar(50) NOT NULL,
  `mothersname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblhigh`
--

LOCK TABLES `tblhigh` WRITE;
/*!40000 ALTER TABLE `tblhigh` DISABLE KEYS */;
INSERT INTO `tblhigh` VALUES (1,32,'Taguig','09-106-1','1991-09-15','Male','4th','Emerald','09234517218','esazarcon@yahoo.com','Eduardo S. Azarcon','Milagros S. Azarcon'),(2,33,'Manila','09-114-1','1992-09-16','Male','1st','Diamond','09226489213','mlsenobio@msn.com','Silvino R. Senobio','Ma. Teresita L. Senobio'),(3,34,'Rizal','08-014-1','1988-09-13','Female','2nd','St.Jude','09284317219','edgalvan@uk.com','Rolando Galvan','Marlou Galvan'),(4,35,'Quezon City','11-012-2','1985-05-24','Female','3rd','St.Mark','09184211673','acbenis@yahoo.com','Ricardo Benis','Anita Benis'),(5,36,'Bulacan','10-142-1','1988-03-28','Male','1st','Everlasting','09156133415','kepacle@msn.com','Cesar C. Pacle','Josefina S. Enriquez'),(6,37,'Pampanga','10-129-1','1992-12-16','Male','2nd','St.Joseph','09214581961','crconception@gmail.com','Joel M. Conception','Rosemarie R. Conception'),(7,38,'Cavite','10-097-1','1993-02-23','Female','---','St.Peter','09112581345','asmagat@gmail.com','Arnulfo Magat','Cristine Magat'),(8,39,'Cubao','10-062-1','1994-04-29','Female','3rd','St.Tomas','09225381691','jgrelanes@ymail.com','Jose G. Relanes','Violeta G. Relanes'),(9,40,'Marikina','10-034-1','1992-11-12','Female','1st','St. Peter','09427184132','jsdagondon@yahoo.com','Ernile S. Dagondon','Gina S. Dagondon'),(10,41,'Cebu','10-065-2','1993-08-09','Male','4th','St. Paul','09196381724','rbbarcial@gmail.com','Arcadio B. Barcial','Patricia B. Barcial'),(11,42,'Fairview','09-169-1','1992-07-20','Female','3rd','St. Carmen','09241737219','mfalfonso@yahoo.com','Jovencio Alfonso','Leticia Alfonso'),(13,45,'Luzon','11-003-993','2014-12-19','Female','2nd','Tulips','333-99-77','prodigalp@msn.com','Arsenio Magtaos','Imelda Magtaos');
/*!40000 ALTER TABLE `tblhigh` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblhistory`
--

DROP TABLE IF EXISTS `tblhistory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblhistory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gtype` varchar(40) NOT NULL,
  `role` varchar(10) NOT NULL,
  `ctrlnum` int(11) NOT NULL,
  `dater` date NOT NULL,
  `timer` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblhistory`
--

LOCK TABLES `tblhistory` WRITE;
/*!40000 ALTER TABLE `tblhistory` DISABLE KEYS */;
INSERT INTO `tblhistory` VALUES (2,'Jennifer','Contreras','M.','jmcontreras','827ccb0eea8a706c4c34a16891f84e7b','College','2',0,'2014-05-01','10:20:32'),(3,'Levy','Bautista','G.','lgbautista','827ccb0eea8a706c4c34a16891f84e7b','Professor','2',0,'2014-05-01','10:22:04'),(4,'Jennifer','Contreras','M.','jmcontreras','827ccb0eea8a706c4c34a16891f84e7b','College','2',0,'2014-05-01','10:23:48'),(5,'Jennifer','Contreras','M.','jmcontreras','827ccb0eea8a706c4c34a16891f84e7b','College','2',0,'2014-05-01','10:37:02'),(6,'Levy','Bautista','G.','lgbautista','827ccb0eea8a706c4c34a16891f84e7b','Professor','2',0,'2014-05-01','10:39:17'),(7,'Jennifer','Contreras','M.','jmcontreras','827ccb0eea8a706c4c34a16891f84e7b','College','2',0,'2014-05-01','11:14:07'),(9,'Jennifer','Contreras','M.','jmcontreras','827ccb0eea8a706c4c34a16891f84e7b','College','2',0,'2014-05-01','11:18:52'),(14,'Jennifer','Contreras','M.','jmcontreras','827ccb0eea8a706c4c34a16891f84e7b','College','2',0,'2014-05-01','11:54:46'),(16,'Emmanuel','Blas','G.','egblas','827ccb0eea8a706c4c34a16891f84e7b','Professor','2',0,'2014-05-01','12:04:13'),(17,'Admin','Admin','X.','Administrator','827ccb0eea8a706c4c34a16891f84e7b','Administrator','4',0,'2014-05-01','12:06:58'),(18,'Jennifer','Contreras','M.','jmcontreras','827ccb0eea8a706c4c34a16891f84e7b','College','2',0,'2014-05-01','12:11:16'),(19,'Admin','Admin','X.','Administrator','827ccb0eea8a706c4c34a16891f84e7b','Administrator','4',0,'2014-05-01','12:14:30'),(20,'Admin','Admin','X.','Administrator','827ccb0eea8a706c4c34a16891f84e7b','Administrator','4',0,'2014-05-11','15:15:39'),(21,'Oyo Boy','Bunag','D.','odbunag','afc7e8a98f75755e513d9d5ead888e1d','College','2',0,'2014-05-11','15:45:06'),(22,'Oyo Boy','Bunag','D.','odbunag','827ccb0eea8a706c4c34a16891f84e7b','College','2',0,'2014-05-11','15:46:47'),(23,'Oyo Boy','Bunag','D.','odbunag','827ccb0eea8a706c4c34a16891f84e7b','College','2',0,'2014-05-11','16:00:12'),(24,'Oyo Boy','Bunag','D.','odbunag','e358efa489f58062f10dd7316b65649e','College','2',0,'2014-05-11','16:10:23'),(25,'Oyo Boy','Bunag','D.','odbunag','0cc175b9c0f1b6a831c399e269772661','College','2',0,'2014-05-11','16:18:20'),(26,'Oyo Boy','Bunag','D.','odbunag','0cc175b9c0f1b6a831c399e269772661','College','2',0,'2014-05-11','16:19:34'),(27,'Oyo Boy','Bunag','D.','odbunag','827ccb0eea8a706c4c34a16891f84e7b','College','2',0,'2014-05-11','16:38:43'),(28,'Admin','Admin','X.','Administrator','827ccb0eea8a706c4c34a16891f84e7b','Administrator','4',0,'2014-05-11','16:39:12'),(29,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-11','16:39:53'),(30,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-11','17:57:05'),(31,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-11','18:33:07'),(32,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-11','18:41:08'),(33,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-11','18:51:57'),(34,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-11','18:56:02'),(35,'Oyo Boy','Bunag','D.','odbunag','827ccb0eea8a706c4c34a16891f84e7b','College','2',0,'2014-05-11','18:57:48'),(36,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-11','18:58:41'),(37,'Jennifer','Contreras','M.','jmcontreras','827ccb0eea8a706c4c34a16891f84e7b','College','2',0,'2014-05-11','19:05:48'),(38,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-11','19:06:52'),(39,'Oyo Boy','Bunag','D.','odbunag','827ccb0eea8a706c4c34a16891f84e7b','College','2',0,'2014-05-11','19:08:22'),(40,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-11','19:11:34'),(41,'Jennifer','Contreras','M.','jmcontreras','827ccb0eea8a706c4c34a16891f84e7b','College','2',0,'2014-05-11','19:12:48'),(42,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-11','19:18:38'),(43,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-12','07:57:33'),(44,'Oyo Boy','Bunag','D.','odbunag','827ccb0eea8a706c4c34a16891f84e7b','College','2',0,'2014-05-12','08:50:29'),(45,'Oyo Boy','Bunag','D.','odbunag','e358efa489f58062f10dd7316b65649e','College','2',0,'2014-05-12','08:51:06'),(46,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-12','08:51:25'),(47,'Oyo Boy','Bunag','D.','odbunag','827ccb0eea8a706c4c34a16891f84e7b','College','2',0,'2014-05-12','08:52:40'),(48,'Oyo Boy','Bunag','D.','odbunag','827ccb0eea8a706c4c34a16891f84e7b','College','2',0,'2014-05-12','08:53:02'),(49,'Oyo Boy','Bunag','D.','odbunag','0cc175b9c0f1b6a831c399e269772661','College','2',0,'2014-05-12','08:53:32'),(50,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-12','08:53:50'),(51,'Oyo Boy','Bunag','D.','odbunag','0cc175b9c0f1b6a831c399e269772661','College','2',0,'2014-05-12','09:25:17'),(52,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-12','09:25:36'),(53,'Oyo Boy','Bunag','D.','odbunag','827ccb0eea8a706c4c34a16891f84e7b','College','2',0,'2014-05-12','09:26:34'),(54,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-12','09:26:53'),(55,'Oyo Boy','Bunag','D.','odbunag','827ccb0eea8a706c4c34a16891f84e7b','College','2',0,'2014-05-12','09:27:16'),(56,'Oyo Boy','Bunag','D.','odbunag','0cc175b9c0f1b6a831c399e269772661','College','2',0,'2014-05-12','09:28:00'),(57,'Oyo Boy','Bunag','D.','odbunag','0cc175b9c0f1b6a831c399e269772661','College','2',0,'2014-05-12','09:28:17'),(58,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-12','09:28:41'),(59,'Oyo Boy','Bunag','D.','odbunag','827ccb0eea8a706c4c34a16891f84e7b','College','2',0,'2014-05-12','09:29:50'),(60,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-12','09:30:20'),(61,'Oyo Boy','Bunag','D.','odbunag','827ccb0eea8a706c4c34a16891f84e7b','College','2',0,'2014-05-12','09:32:53'),(62,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-12','09:33:32'),(63,'Oyo Boy','Bunag','D.','odbunag','827ccb0eea8a706c4c34a16891f84e7b','College','2',0,'2014-05-12','09:34:25'),(64,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-12','09:34:54'),(65,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-14','15:21:24'),(66,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-14','15:25:03'),(67,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-14','15:28:00'),(68,'Admin','Admin','X.','Administrator','827ccb0eea8a706c4c34a16891f84e7b','Administrator','4',0,'2014-05-14','15:40:20'),(69,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-14','15:40:50'),(70,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-18','11:54:58'),(71,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-18','17:09:20'),(72,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-18','18:58:37'),(73,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-18','18:59:10'),(74,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-18','19:04:24'),(75,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-19','11:21:15'),(76,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-19','11:42:05'),(77,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-30','10:06:35'),(78,'Guest','Guest','X.','Guest','827ccb0eea8a706c4c34a16891f84e7b','Guest','1',0,'2014-05-30','12:20:43'),(79,'SA1','SA1','X','SA1','827ccb0eea8a706c4c34a16891f84e7b','S.A.','3',0,'2014-05-30','12:34:13'),(80,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-30','12:34:42'),(81,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-05-30','12:41:36'),(82,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0,'2014-06-05','12:05:16');
/*!40000 ALTER TABLE `tblhistory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbljunk`
--

DROP TABLE IF EXISTS `tbljunk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbljunk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `debit` varchar(30) NOT NULL,
  `credit` varchar(50) NOT NULL,
  `gtype` varchar(40) NOT NULL,
  `role` varchar(10) NOT NULL,
  `ctrlnum` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbljunk`
--

LOCK TABLES `tbljunk` WRITE;
/*!40000 ALTER TABLE `tbljunk` DISABLE KEYS */;
INSERT INTO `tbljunk` VALUES (2,'Sherlyn','Magtaos','T.','stmagtaos','12345','Highschool','2',45),(3,'Wilbert','Sandblast','C.','wcsanblast','12345','College','2',46),(4,'Julito','Santillan','V.','jvsantillan','12345','Professor','2',47);
/*!40000 ALTER TABLE `tbljunk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblmagazine`
--

DROP TABLE IF EXISTS `tblmagazine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblmagazine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ctrlnum` int(11) NOT NULL,
  `dater1` date NOT NULL,
  `accnum` varchar(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `dater2` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblmagazine`
--

LOCK TABLES `tblmagazine` WRITE;
/*!40000 ALTER TABLE `tblmagazine` DISABLE KEYS */;
INSERT INTO `tblmagazine` VALUES (1,0,'2006-10-19','001','PC World, 2001-2001','2003-06-30'),(2,0,'2006-10-19','002','Liwayway, Enero 13, 2003','2003-06-30'),(3,0,'2006-10-19','003','Liwayway, Hunyo 18, 2001','2002-09-26'),(4,0,'2006-10-19','004','Liwayway October 17, 2002','2002-12-23'),(5,0,'2006-10-19','005','PC World 2003-2004','0000-00-00'),(6,0,'2006-10-19','007','Liwayway Hunyo 4, 2005','2005-12-19'),(7,0,'2006-10-19','008','Liwayway Enero 5','2004-03-01'),(8,0,'2006-10-19','009','Liwayway Agosto 18, 2003','2003-12-22'),(9,0,'2006-10-19','010','Liwayway Hulyo 07, 2003','2003-09-22'),(10,0,'2006-10-19','006','Liwayway November 1, 2004','2004-12-27'),(11,0,'2006-10-19','011','Liwayway Enero 9, 2006','2006-04-10'),(12,0,'2006-10-19','012','Liwayway Mayo 1, 2006','2006-08-21'),(14,0,'2006-10-19','013','Liwayway Marso 22, 2004','2004-04-21'),(15,0,'2006-10-23','014','Big News Asia March 7, 2005','2004-09-28'),(16,0,'2006-10-23','015','Big News Asia August 3, 2004','2005-05-09');
/*!40000 ALTER TABLE `tblmagazine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblprof`
--

DROP TABLE IF EXISTS `tblprof`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblprof` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empnum` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactnum` varchar(20) NOT NULL,
  `ctrlnum` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblprof`
--

LOCK TABLES `tblprof` WRITE;
/*!40000 ALTER TABLE `tblprof` DISABLE KEYS */;
INSERT INTO `tblprof` VALUES (3,'11-007-1','lgbautista@yahoo.com','299-6300',4),(4,'11-007-2','hdbuenaventura@yahoo.com','235-2572',5),(5,'11-007-3','egblas@yahoo.com','233-2312',6),(6,'11-007-4','mmdioquino@yahoo.com','972-2531',7),(7,'11-007-5','mdoliveros@yahoo.com','422-9556',8),(8,'11-007-6','vtrepia@yahoo.com','325-6219',9),(9,'11-007-7','rpsantos@yahoo.com','722-5931',10),(10,'11-007-8','asartiola@yahoo.com','422-6917',11),(11,'11-007-9','aesagun@yahoo.com','531-4211',12),(12,'11-009-10','svvillanueva@msn.com','784-1317',13),(13,'11-008-72','ncpolicarpio@gmail.com','472-1673',14),(14,'11-008-14','librarian@msn.com','342-771-3',15),(15,'11-008-42','everest@gmail.com','342-7421',16),(16,'13-174-4','sison@yahoo.com','421-4721',17),(17,'xxx','xxx','xxx',43),(18,'11-23-45','jvsantillan@youtube.com','093-2313-342',47);
/*!40000 ALTER TABLE `tblprof` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblreturn`
--

DROP TABLE IF EXISTS `tblreturn`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblreturn` (
  `id` int(11) NOT NULL DEFAULT '0',
  `accnum` varchar(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `ctrlnum` int(11) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `mname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `timer` time NOT NULL,
  `dater1` date NOT NULL,
  `dater2` date NOT NULL,
  `mode` varchar(40) NOT NULL,
  `remarks` varchar(20) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblreturn`
--

LOCK TABLES `tblreturn` WRITE;
/*!40000 ALTER TABLE `tblreturn` DISABLE KEYS */;
INSERT INTO `tblreturn` VALUES (37,'32','Manipulation','Lausch, Erwin',4,'Levy','G.','Bautista','10:33:26','2014-04-29','2014-05-02','Borrow','Returned','Charge 5 pesos'),(40,'19','The Psychology of Aging','Belsky, Janet',4,'Levy','G.','Bautista','12:18:01','2014-04-29','2014-05-02','Borrow','Returned',''),(41,'12','The Prentice-Hall Concise Book of Communication','Stansell, John',4,'Levy','G.','Bautista','12:18:12','2014-04-29','2014-05-02','Borrow','Returned','book is not return yet'),(43,'22','Psychofeedback','Thomas, Paul G.',21,'Oyo Boy','D.','Bunag','12:38:12','2014-04-29','2014-05-02','Borrow','Returned',''),(45,'32','Manipulation','Lausch, Erwin',22,'Jennifer','M.','Contreras','12:48:29','2014-04-29','2014-05-02','Borrow','Returned','penalty charge'),(47,'32','Manipulation','Lausch, Erwin',15,'Admin','X.','Admin','13:02:35','2014-04-29','2014-05-02','Borrow','Returned',''),(49,'32','Manipulation','Lausch, Erwin',22,'Jennifer','M.','Contreras','11:01:08','2014-04-30','2014-05-03','Borrow','Returned','5 peso penalty'),(52,'32','Manipulation','Lausch, Erwin',15,'Admin','X.','Admin','11:59:28','2014-04-30','0000-00-00','Borrow','Returned',''),(53,'32','Manipulation','Lausch, Erwin',15,'Admin','X.','Admin','12:00:30','2014-04-30','0000-00-00','Borrow','Returned','');
/*!40000 ALTER TABLE `tblreturn` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbluser`
--

DROP TABLE IF EXISTS `tbluser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gtype` varchar(40) NOT NULL,
  `role` varchar(10) NOT NULL,
  `ctrlnum` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbluser`
--

LOCK TABLES `tbluser` WRITE;
/*!40000 ALTER TABLE `tbluser` DISABLE KEYS */;
INSERT INTO `tbluser` VALUES (4,'Levy','Bautista','G.','lgbautista','827ccb0eea8a706c4c34a16891f84e7b','Professor','2',0),(5,'Henry David','Buenaventura','T.','hdbuenaventura','827ccb0eea8a706c4c34a16891f84e7b','Professor','2',0),(6,'Emmanuel','Blas','G.','egblas','827ccb0eea8a706c4c34a16891f84e7b','Professor','2',0),(7,'Michelle','Dioquino','M.','mmdioquino','827ccb0eea8a706c4c34a16891f84e7b','Professor','2',0),(8,'Ma. Fatima','Oliveros','D.','mdoliveros','827ccb0eea8a706c4c34a16891f84e7b','Professor','2',0),(9,'Veronica','Repia','T.','vtrepia','827ccb0eea8a706c4c34a16891f84e7b','Professor','2',0),(10,'Reynaldo','Santos','P.','rpsantos','827ccb0eea8a706c4c34a16891f84e7b','Professor','2',0),(11,'Amor','Artiola','S.','asartiola','827ccb0eea8a706c4c34a16891f84e7b','Professor','2',0),(12,'Arsenio','Sagun Jr.','E.','aesagun','827ccb0eea8a706c4c34a16891f84e7b','Professor','2',0),(13,'Santiago','Villanueva','V.','svvillanueva','827ccb0eea8a706c4c34a16891f84e7b','Professor','2',0),(14,'Naneth','Policarpio','C.','ncpolicarpio','827ccb0eea8a706c4c34a16891f84e7b','Professor','2',0),(15,'Admin','Admin','X.','Administrator','a0d61f8a89f9d12101d0a70b436ec317','Administrator','4',0),(16,'SA1','SA1','X','SA1','827ccb0eea8a706c4c34a16891f84e7b','S.A.','3',0),(17,'SA2','SA2','X','SA2','827ccb0eea8a706c4c34a16891f84e7b','S.A.','3',0),(20,'Wrean Ronice','Adonis','R','wradonis','827ccb0eea8a706c4c34a16891f84e7b','College','2',0),(21,'Oyo Boy','Bunag','D.','odbunag','827ccb0eea8a706c4c34a16891f84e7b','College','2',0),(22,'Jennifer','Contreras','M.','jmcontreras','827ccb0eea8a706c4c34a16891f84e7b','College','2',0),(23,'Mark Kevin ','Espiritu','O.','koespiritu','827ccb0eea8a706c4c34a16891f84e7b','College','2',0),(24,'Monica','Dela Torre','F.','mfdelatorre','827ccb0eea8a706c4c34a16891f84e7b','College','2',0),(25,'Reymart','Del Rosario','G.','rgdelrosario','827ccb0eea8a706c4c34a16891f84e7b','College','2',0),(26,'Francis Jhonn','Oclarit Jr.','G.','fgoclarit','827ccb0eea8a706c4c34a16891f84e7b','College','2',0),(27,'Alfredo','Yumol','V.','avyumol','827ccb0eea8a706c4c34a16891f84e7b','College','2',0),(28,'Edrenz Kimuel','Olano','E.','eeolano','827ccb0eea8a706c4c34a16891f84e7b','College','2',0),(29,'Maureen','Base','S.','msbase','827ccb0eea8a706c4c34a16891f84e7b','College','2',0),(30,'Jonathan','De Luna','D.','jddeluna','827ccb0eea8a706c4c34a16891f84e7b','College','2',0),(31,'Roberto','Manahan','T.','rtmanahan','827ccb0eea8a706c4c34a16891f84e7b','College','2',0),(32,'Edwin','Azarcon','S.','esazarcon','827ccb0eea8a706c4c34a16891f84e7b','Highschool','2',0),(33,'Marvin','Senobio','L.','mlsenobio','827ccb0eea8a706c4c34a16891f84e7b','Highschool','2',0),(34,'Elizabeth','Galvan','D.','edgalvan','827ccb0eea8a706c4c34a16891f84e7b','Highschool','2',0),(35,'Ana Cristina','Benis','C. ','acbenis','827ccb0eea8a706c4c34a16891f84e7b','Highschool','2',0),(36,'Kennedy','Pacle','E.','kepacle','827ccb0eea8a706c4c34a16891f84e7b','Highschool','2',0),(37,'Cyrel','Conception','R.','crconception','827ccb0eea8a706c4c34a16891f84e7b','Highschool','2',0),(38,'Aloha','Magat','S.','asmagat','827ccb0eea8a706c4c34a16891f84e7b','Highschool','2',0),(39,'Jessica','Relanes','G.','jgrelanes','827ccb0eea8a706c4c34a16891f84e7b','Highschool','2',0),(40,'Jovelyn ','Dagondon','S.','jsdagondon','827ccb0eea8a706c4c34a16891f84e7b','Highschool','2',0),(41,'Ramonito','Barcial','B.','rbbarcial','827ccb0eea8a706c4c34a16891f84e7b','Highschool','2',0),(42,'Maria Eliza','Alfonso','F.','mfalfonso','827ccb0eea8a706c4c34a16891f84e7b','Highschool','2',0),(43,'Guest','Guest','X.','Guest','827ccb0eea8a706c4c34a16891f84e7b','Guest','1',0),(45,'Sherlyn','Magtaos','T.','stmagtaos','827ccb0eea8a706c4c34a16891f84e7b','Highschool','2',0),(46,'Wilbert','Sandblast','C.','wcsanblast','827ccb0eea8a706c4c34a16891f84e7b','College','2',0),(47,'Julito','Santillan','V.','jvsantillan','827ccb0eea8a706c4c34a16891f84e7b','Professor','2',0);
/*!40000 ALTER TABLE `tbluser` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-06-05 12:53:30
