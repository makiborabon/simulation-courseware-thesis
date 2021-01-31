-- MySQL dump 10.13  Distrib 5.5.13, for Win32 (x86)
--
-- Host: localhost    Database: simulation-courseware-db
-- ------------------------------------------------------
-- Server version	5.5.13

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
-- Table structure for table `module`
--

DROP TABLE IF EXISTS `module`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` varchar(45) DEFAULT NULL,
  `description` text,
  `content` text,
  `lesson` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `module`
--

LOCK TABLES `module` WRITE;
/*!40000 ALTER TABLE `module` DISABLE KEYS */;
INSERT INTO `module` VALUES (20,'What is a Mushroom.','Introduction to mushroom','<p>\r\n	<span style=\"color:#(color);\"><span style=\"font-size: 16px;\"><strong>What is a mushroom?</strong></span></span></p>\r\n<p style=\"text-align: justify;\">\r\n	<span style=\"color:#(color);\"><span style=\"font-size: 18px;\">A mushroom is defined as a microfungus with a distinctive fruiting body wich can be either epigeous or hypigeous. The micro fungi have a fruiting bodies large enought to be seeen with the naked eye and to be picked up by hands ( Chang and Miles 1992). in a narrow sense the word mushroom &nbsp;also referes only to the fruit body. mushroom used to be classified to the kingdom Plantea, but now they are belong to the kingdom Fungi due to unique fungal characteristic which draw a clear line from animal or plants. Unlike green plants, mushrooms are heterotrophs. Not having Chlorophyll, they cant generate nutrients by Photosynthesis.&nbsp;</span></span></p>\r\n<p style=\"text-align: justify;\">\r\n	<span style=\"color:#(color);\"><img align=\"left\" alt=\"\" height=\"200\" src=\"../module-image/mushroom-parts.jpg\" width=\"225\" /><span style=\"font-size: 18px;\">Mushroom reed by spores (seeds for plants). Under the proper condition, spores generate into hyphea (Collective mycelia). Mycelia are filamentous and generally unseen with the naked eye. germinated hyphea from primary Mycelia, and the secondary mycelia through phasmogamy (hypal fusion). they accumulate nutrients from the substrate (soil from plants) and colonized substrate. when stimulated in humidity and temperature the mycelia colony forns pins under certain condition and grow to fruit bodies(fruits for plants). young fruit boddies are called pins (buds for plants).</span></span></p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	<strong><span style=\"font-size:18px;\">Three Factors of mushroom Cultivation</span></strong></p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	<strong><span style=\"font-size:18px;\">Spawn</span></strong></p>\r\n<p style=\"text-align: justify;\">\r\n	<span style=\"font-family: tahoma, geneva, sans-serif; font-size: 18px;\"><img align=\"right\" alt=\"\" height=\"272\" src=\"../module-image/spawn-kinds.png\" width=\"300\" />What is spawn to mushroom is like a seed is to crop. unlike spawn, spawn is already at its mycelia stage or growing on its own substrate such as its own sorghum, barly or saw dust. the life cycle of a mushroom start from a spores, but growers inaculate mycelia spawn origin than spore origin because of posible variation and mutation.</span></p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	<span style=\"font-family:tahoma, geneva, sans-serif;\"><span style=\"font-size: 18px;\"><br />\r\n	</span></span></p>\r\n<p style=\"text-align: justify;\">\r\n	<strong><span style=\"font-family:tahoma, geneva, sans-serif;\"><span style=\"font-size: 18px;\">Substrate</span></span></strong></p>\r\n<p style=\"text-align: justify; margin-left: 40px;\">\r\n	<span style=\"color:#(color);\"><span style=\"font-family: tahoma, geneva, sans-serif;\"><span style=\"font-size: 18px;\">Mushroom can be clasified as three categories by theire topic pattern; saprophytes, parasites or mycorrhizea, the most commonly grown mushrooms are saprophytes, decomposers in an ecosystem growing on organic matters like wood, leaves and straw in nature. raw materials can be used as substrate for primary decomposers such as oyster mushroom and enokitake which have lignocellulosic enzymes. on the othe hand the secondary decomposer like button mushroom or straw mushroom require substrate degraded by bacteria or othe fungi. mushroom require carbon, nitrogen and inorganic compound as its nutritional sources and the main nutrients are carbon soirces such as cellulose, hemicellulose and lignin.</span></span></span></p>\r\n<p style=\"text-align: justify;\">\r\n	<strong><span style=\"font-family:tahoma, geneva, sans-serif;\"><span style=\"font-size: 18px;\">Environment</span></span></strong></p>\r\n<p style=\"text-align: justify; margin-left: 40px;\">\r\n	<span style=\"color:#(color);\"><span style=\"font-family: tahoma, geneva, sans-serif;\"><span style=\"font-size: 18px;\">The last important factor for mushroom &nbsp;growing is providing an apprpriate environment both for vegetative and reproductive growth. not being protected by a skin layer, fungi are easily, affected by growing conditions. so it can be said that the success or failure of mushroom cultivation depends on the control control growth conditions. Environment factors affecting mushroom cultivation includes temperature, humidity, light and ventilation.<br />\r\n	</span></span></span></p>\r\n<p style=\"text-align: justify; margin-left: 40px;\">\r\n	<span style=\"font-family:tahoma, geneva, sans-serif;\"><span style=\"font-size: 18px;\"><br />\r\n	</span></span></p>\r\n<p style=\"text-align: justify;\">\r\n	<span style=\"font-family:tahoma, geneva, sans-serif;\"><span style=\"font-size: 18px;\">Terms:<br />\r\n	</span></span></p>\r\n<ul>\r\n	<li>\r\n		<span style=\"font-family:tahoma, geneva, sans-serif;\"><span style=\"font-size: 18px;\"><strong>Epigeous</strong> Growing on the ground.<br />\r\n		</span></span></li>\r\n	<li>\r\n		<span style=\"font-family:tahoma, geneva, sans-serif;\"><span style=\"font-size: 18px;\"><strong>Hupogeous</strong> Growing under ground.<br />\r\n		</span></span></li>\r\n	<li>\r\n		<span style=\"font-family:tahoma, geneva, sans-serif;\"><span style=\"font-size: 18px;\"><strong>Plasmogamy</strong> Fusion of cell or protoplast withoout fusion of nuclei, as occurs in higher terrestrial fungi.<br />\r\n		</span></span></li>\r\n	<li>\r\n		<span style=\"font-family:tahoma, geneva, sans-serif;\"><span style=\"font-size: 18px;\"><strong>Parasite</strong> An organism that grows, feeds, and sheltered on the different organism while contributing nothing to survive its host.&nbsp;<br />\r\n		</span></span></li>\r\n</ul>\r\n<p>\r\n	&nbsp;</p>',1),(21,'Why Grow Mushrooms','Why grow mushroom and what are the nutritunal benifits that can we get from eating mushrooms.','<p style=\"text-align: justify;\">\r\n	<strong><span style=\"font-size:18px;\">Mushroom in History and Different Regions</span></strong></p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Mushrooms have been part of our human diet since time immemorial. they were used as food even before man understood the use of other organisms. undeoubtedly, mushrooms were on of the mans earliest foods, and they were often onsidered an exotic and luxurious food reserved for rich. today mushrooms are foods for both the rich and the poor. they can be grown anywhere as long as the conditions for their growth and cultivation are provided. Available mushroom technologies range in complexity from very high to amazingly low.</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;In some poor countries of Asia, the tropical Chinese straw mushroom(<em>Valvariella valvacae</em>) is grown in a very traditional ways. the mushroom likes the hot humid conditions of the tropics and can be cultivated on beds made up of agricultural wastes such as straw or banana leaves.</p>\r\n<p style=\"text-align: center;\">\r\n	<img align=\"middle\" alt=\"\" height=\"211\" src=\"../module-image/chi.png\" width=\"588\" /></p>\r\n<p style=\"text-align: justify;\">\r\n	<strong>Benifits Derive from Musroom and Growing Mushrooms</strong></p>\r\n<p style=\"text-align: justify;\">\r\n	<strong>Nutrition of the mushrooms</strong></p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; the popularity of the mushrooms is still based not on the nutrients that they contain but mostly on their exotic taste and their culinary properties, whether eaten alone or in combination with other foods. Its not well known that mushrooms are full of nutrients and can therefore make a very important contribution to human nutrition. Table oe shows the food value obtained from cultivated mushrooms compared with oyher common foods.</p>\r\n<p style=\"text-align: center;\">\r\n	<img align=\"middle\" alt=\"\" height=\"403\" src=\"../module-image/nutri.png\" width=\"585\" /></p>\r\n<p style=\"text-align: center;\">\r\n	&nbsp;</p>',2),(22,'What is Oyster Mushroom','Discussion about oyster mushroom.','<p>\r\n	<span style=\"font-size:18px;\"><strong>Oyster mushroom</strong></span></p>\r\n<p>\r\n	<span style=\"font-size:18px;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; As a fruitbody of an edible white rot fungus, oyster mushroom belongs to Pleurotus, Pleurotaceae, Agaricales, Basidiomyota. In nature, oyster mushrooms appear in cluster on dead trees from late fall spring, and are distrinuted almost all around the world. Oyster mushroom share all the fundamentals characters of cultivated mushroom.</span></p>\r\n<p>\r\n	<span style=\"font-size:18px;\"><br />\r\n	</span></p>\r\n<p>\r\n	<span style=\"font-size:18px;\"><strong>Substrate</strong></span></p>\r\n<p>\r\n	<span style=\"font-size:18px;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Substrate can be understood as soil for plant providing nacessary nutrition. Substrate mixture of oyster mushroom should supply specific nutrints required for oyster mushroom cultivation. The main nutritional sources for oyster mushroom are cellulose, hemicellulose and lignin.&nbsp;</span></p>\r\n<p>\r\n	<span style=\"font-size:18px;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;In choosing a growing process method, growers should considered labor availability and the provision substrate materials. Mushrooms from log cultivation are commonly, asssumed to be of the best quality. But the recently developed skills of shelf, bolle and bags cultivating seem to have bridges the quality gap.</span></p>\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" height=\"147\" src=\"../module-image/culti.png\" width=\"582\" /></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<span style=\"font-size:18px;\"><span style=\"font-family: tahoma, geneva, sans-serif;\">Illustrated Guide to Oyster Mushroom Cultivation</span></span></p>\r\n<p style=\"text-align: center;\">\r\n	<img align=\"middle\" alt=\"\" height=\"629\" src=\"../module-image/part1.png\" width=\"613\" /></p>\r\n<p style=\"text-align: center;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" height=\"629\" src=\"../module-image/part2.png\" width=\"613\" /></p>\r\n<p>\r\n	<span style=\"font-family:tahoma, geneva, sans-serif;\"><br />\r\n	</span></p>\r\n',3),(39,'Disease Management','Discusses basic practices for disease management','<p style=\"text-align: center;\">\r\n	<strong>&nbsp;Disease Management</strong></p>\r\n<p style=\"text-align: center;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; A wide range of diseases and pest can cause serious problem in mushroom cultivation, and management of those diseases and pest is a key factor in successful mushroom production. The main reasons for the existence of many diseases and pest problems in mushroom cultivation can be summarized as:</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<ul>\r\n	<li>\r\n		Mushroom cultivation condition such as high humudity and warm temperature are favored by many pathogens and pests</li>\r\n	<li>\r\n		There is a limit on chemical use for control of diseases or pest in mushroom.</li>\r\n	<li>\r\n		Growing house are not usually well equipped for environmental control.</li>\r\n</ul>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<strong>Basic Practices for Diseaase Management</strong></p>\r\n<ul>\r\n	<li>\r\n		Sanitation and strict hygiene are the most important preventive methods for pest and disease control. Without them, effective disease or pest control will never be achieved.</li>\r\n	<li>\r\n		Keep doors closed and avoid any practices that expose substances to spawning.</li>\r\n	<li>\r\n		Keep mushroom flies from entering.</li>\r\n	<li>\r\n		Clean and dis infect mushroom houses.</li>\r\n	<li>\r\n		Clean and dis infect equipement.</li>\r\n</ul>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<strong>The GREEN MOLD disease</strong></p>\r\n<p>\r\n	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Any disease caused by green colored molds on the mushroom bags is called green mold disease. Green colored showed by the fungi comes from theire spores, not from hyphal.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<strong>EXAMPLES</strong></p>\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" height=\"187\" src=\"../module-image/green.png\" width=\"570\" /></p>\r\n',4),(40,'Pest Management','Kind of pest and control measure.','<p style=\"text-align: center;\">\r\n	<strong>PEST</strong></p>\r\n<p style=\"text-align: center;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Oyter mushroom cultivation beds provides very good conditions for pests, plenty of food, warm temperatures, and high humidity. Examples of Flies major pest for oyster mushrooms.</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	<strong>Scriarids (<em>Lycoriella mali</em>)</strong></p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Scriarids are the most important pest of oyster mushroom. The larva of Scriarids feed on the mycelia, small pins and large mushrooms.</p>\r\n<p style=\"text-align: justify;\">\r\n	<img alt=\"\" height=\"218\" src=\"../module-image/scr.png\" width=\"586\" /></p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"text-align: justify;\">\r\n	<strong>Phorids (<em>Megaselia tamiladuensis</em>)</strong></p>\r\n<p style=\"text-align: justify;\">\r\n	<img align=\"right\" alt=\"\" height=\"161\" src=\"../module-image/amp.png\" width=\"208\" /></p>\r\n<p style=\"text-align: justify;\">\r\n	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Adults are 2-4mm and move quikly by hopping on the subrate. Larvae are 4-6mm long with white and transparent body and they do not have a distinct black head. feed on the mycelia and makes cabities in mushroom fuiting bodies.</p>\r\n',5);
/*!40000 ALTER TABLE `module` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mushrooms`
--

DROP TABLE IF EXISTS `mushrooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mushrooms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mushrooms`
--

LOCK TABLES `mushrooms` WRITE;
/*!40000 ALTER TABLE `mushrooms` DISABLE KEYS */;
/*!40000 ALTER TABLE `mushrooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quiz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `choice1` varchar(45) NOT NULL,
  `choice2` varchar(45) NOT NULL,
  `choice3` varchar(45) NOT NULL,
  `answer` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quiz`
--

LOCK TABLES `quiz` WRITE;
/*!40000 ALTER TABLE `quiz` DISABLE KEYS */;
INSERT INTO `quiz` VALUES (1,'A micro fungus with a distinctive fruiting body witch can be either Epigeous or Hypigeous. ','Spore','Mushroom','Fungi',2),(2,'The most commonly grown mushrooms are?','Saprophytes','Oyster mushroom','Substrate',1),(3,'Growing on the ground.','Hupogeous','Parasite','Epigeous',3),(4,'Growing under ground.','Hupogeous','Parasite','Epigeous',1),(5,'The last important factor for mushroom  growing is providing an appropriate?','Ecosystem','Environment','Method',2),(6,'Kind of cultivation which uses bottle.','Bottle cultivation','Shelf cultivation','Bag cultivation',1),(7,'Kind of cultivation which uses bags or plastic bag.','Bottle cultivation','Bag cultivation','Shelf cultivation',2),(8,'Kind of cultivation where mushroom is put in log or tree.','Bag cultivation','Shelf cultivation','Log cultivation',3);
/*!40000 ALTER TABLE `quiz` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uname` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `mname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `specs` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (11,'raizo','23288','aldrin','liwanag','dela cruz','user'),(14,'yey','yeyyey','Mark Anthony','Ricohermosa','Borabon','user'),(16,'admin','admin','Adrian','Liwanag','Dela cruz','admin'),(18,'mushroom','mushroom','mushroom','mushroom','mushroom','user'),(19,'bors','123456','Mark Anthony','liwanag','Borabon','user'),(20,'daniel','daniel','daniel','serrano','posadas','user'),(21,'edward','edward','edward','naguit','canlas','user'),(22,'bryan','bryan','bryan','tiglao','tarzan','user'),(23,'abby','abby','abegail','liwanag','bognot','user'),(24,'dianne','dianne','dianne','sans','tos','user'),(25,'aljay','aljayqm','aljay','quizon','mallari','user'),(27,'clarize','clarizeld','clarize','liwanag','dela cruz','user'),(28,'aldrin','aldrin','aldrin','liwanag','dela cruz','user');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_mushrooms`
--

DROP TABLE IF EXISTS `user_mushrooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_mushrooms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `type` varchar(45) NOT NULL,
  `box` varchar(45) NOT NULL,
  `date` varchar(45) NOT NULL,
  `time` varchar(45) NOT NULL,
  `ins_status` varchar(45) NOT NULL,
  `dessease_status` varchar(45) NOT NULL,
  `age` varchar(45) NOT NULL,
  `trans_time` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `temp` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_mushrooms`
--

LOCK TABLES `user_mushrooms` WRITE;
/*!40000 ALTER TABLE `user_mushrooms` DISABLE KEYS */;
INSERT INTO `user_mushrooms` VALUES (4,18,'22','2','2013-05-20',' 10:18:37 AM ','0','0','0','60000','on-going','21'),(6,18,'11','1','2013-05-20',' 03:49:29 PM ','0','0','0','180000','on-going','36'),(8,21,'22','1','2013-05-21',' 08:16:15 PM ','0','0','0','90000','on-going','32'),(9,21,'11','2','2013-05-21',' 08:23:04 PM ','0','0','0','90000','on-going','33'),(10,20,'11','2','2013-05-21',' 10:05:05 PM ','0','0','0','60000','on-going','22'),(11,20,'11','1','2013-05-21',' 10:05:27 PM ','0','0','0','90000','on-going','78'),(12,22,'11','1','2013-05-21',' 11:11:28 PM ','0','0','0','60000','on-going','22'),(13,22,'11','2','2013-05-21',' 11:35:30 PM ','0','0','0','90000','on-going','30'),(16,24,'11','2','2013-05-22',' 12:53:13 AM ','0','0','0','90000','on-going','33'),(17,24,'11','1','2013-05-22',' 12:53:42 AM ','0','0','0','30000','on-going','8'),(20,27,'11','2','2013-05-22',' 08:58:58 AM ','0','0','0','60000','on-going','23'),(21,27,'11','1','2013-05-22',' 08:59:21 AM ','0','0','0','cold_damage','on-going','0'),(36,11,'11','1','2013-05-26',' 08:39:36 PM ','0','0','0','90000','on-going','30'),(39,23,'11','1','2013-06-19',' 11:37:48 AM ','0','0','0','60000','on-going','23');
/*!40000 ALTER TABLE `user_mushrooms` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-07-23 20:05:47
