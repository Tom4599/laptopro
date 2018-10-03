-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 03 oct. 2018 à 13:41
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `laptopro`
--

-- --------------------------------------------------------

--
-- Structure de la table `carte_graphique`
--

DROP TABLE IF EXISTS `carte_graphique`;
CREATE TABLE IF NOT EXISTS `carte_graphique` (
  `id_cg` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id_cg`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `carte_graphique`
--

INSERT INTO `carte_graphique` (`id_cg`, `nom`) VALUES
(1, 'NVIDIA GTX 1060'),
(2, 'NVIDIA GTX 1080Ti'),
(3, 'AMD RADEON RX 580');

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

DROP TABLE IF EXISTS `demande`;
CREATE TABLE IF NOT EXISTS `demande` (
  `id_laptop` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `acceptation` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_laptop`,`id_user`),
  KEY `demande_user0_FK` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ecran`
--

DROP TABLE IF EXISTS `ecran`;
CREATE TABLE IF NOT EXISTS `ecran` (
  `id_ecran` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id_ecran`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ecran`
--

INSERT INTO `ecran` (`id_ecran`, `nom`) VALUES
(1, 'IPS'),
(2, 'TN');

-- --------------------------------------------------------

--
-- Structure de la table `laptop`
--

DROP TABLE IF EXISTS `laptop`;
CREATE TABLE IF NOT EXISTS `laptop` (
  `id_laptop` int(11) NOT NULL AUTO_INCREMENT,
  `laptop_nom` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `taille` int(11) NOT NULL,
  `definition` varchar(255) NOT NULL,
  `ram` int(11) NOT NULL,
  `espace_stockage_hdd` varchar(255) DEFAULT NULL,
  `espace_stockage_ssd` varchar(255) DEFAULT NULL,
  `poids` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `url_photo1` varchar(255) DEFAULT NULL,
  `url_photo2` varchar(255) DEFAULT NULL,
  `url_photo3` varchar(255) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `id_marque` int(11) NOT NULL,
  `id_cg` int(11) NOT NULL,
  `id_stockage` int(11) NOT NULL,
  `id_ecran` int(11) NOT NULL,
  `id_processeur` int(11) NOT NULL,
  PRIMARY KEY (`id_laptop`),
  KEY `laptop_user_FK` (`id_user`),
  KEY `laptop_marque0_FK` (`id_marque`),
  KEY `laptop_carte_graphique1_FK` (`id_cg`),
  KEY `laptop_stockage2_FK` (`id_stockage`),
  KEY `laptop_ecran3_FK` (`id_ecran`),
  KEY `laptop_processeur4_FK` (`id_processeur`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `laptop`
--

INSERT INTO `laptop` (`id_laptop`, `laptop_nom`, `prix`, `taille`, `definition`, `ram`, `espace_stockage_hdd`, `espace_stockage_ssd`, `poids`, `etat`, `date`, `url_photo1`, `url_photo2`, `url_photo3`, `id_user`, `id_marque`, `id_cg`, `id_stockage`, `id_ecran`, `id_processeur`) VALUES
(1, 'asus ROG 2530', 20, 17, '1920*1080', 8, '1 TO', '250 GO', '1 KG', '4', '2018-10-02', 'https://dyw7ncnq1en5l.cloudfront.net/optim/produits/1519/44667/asus-rog-strix-scar-ii_d4b951a2112d09f7__450_400.jpg', NULL, NULL, 1, 1, 1, 3, 1, 1),
(2, 'asus ROG 3530', 30, 17, '1920*1080', 8, '1 TO', '250 GO', '1 KG', '3', '2018-10-02', 'https://dyw7ncnq1en5l.cloudfront.net/optim/produits/150/41985/asus-strix-gl702zc_c3ce6b017cd98dee__450_400.png', NULL, NULL, 1, 1, 2, 3, 1, 1);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `laptop_full_info`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `laptop_full_info`;
CREATE TABLE IF NOT EXISTS `laptop_full_info` (
`id_laptop` int(11)
,`laptop_nom` varchar(255)
,`prix` int(11)
,`taille` int(11)
,`definition` varchar(255)
,`ram` int(11)
,`espace_stockage_hdd` varchar(255)
,`espace_stockage_ssd` varchar(255)
,`poids` varchar(255)
,`etat` varchar(255)
,`date` date
,`url_photo1` varchar(255)
,`url_photo2` varchar(255)
,`url_photo3` varchar(255)
,`id_vendeur` int(11)
,`vendeur` varchar(255)
,`marque` varchar(255)
,`processeur` varchar(255)
,`stockage` varchar(255)
,`ecran` varchar(255)
,`carte_graphique` varchar(255)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `latopfullinfo`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `latopfullinfo`;
CREATE TABLE IF NOT EXISTS `latopfullinfo` (
`id_laptop` int(11)
,`prix` int(11)
,`taille` int(11)
,`definition` varchar(255)
,`ram` int(11)
,`espace_stockage_hdd` varchar(255)
,`espace_stockage_ssd` varchar(255)
,`poids` varchar(255)
,`etat` varchar(255)
,`date` date
,`url_photo1` varchar(255)
,`url_photo2` varchar(255)
,`url_photo3` varchar(255)
,`vendeur` varchar(255)
,`marque` varchar(255)
,`processeur` varchar(255)
,`stockage` varchar(255)
,`ecran` varchar(255)
,`carte_graphique` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

DROP TABLE IF EXISTS `marque`;
CREATE TABLE IF NOT EXISTS `marque` (
  `id_marque` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id_marque`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`id_marque`, `nom`) VALUES
(1, 'Asus'),
(2, 'Acer'),
(3, 'DELL'),
(4, 'MSI');

-- --------------------------------------------------------

--
-- Structure de la table `processeur`
--

DROP TABLE IF EXISTS `processeur`;
CREATE TABLE IF NOT EXISTS `processeur` (
  `id_processeur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id_processeur`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `processeur`
--

INSERT INTO `processeur` (`id_processeur`, `nom`) VALUES
(1, 'Intel I7 6700K'),
(2, 'Intel I5 8700K'),
(3, 'Intel I3 6500HQ'),
(4, 'AMD RYZEN 5 2500u'),
(5, 'AMD RYZEN 7 2700x');

-- --------------------------------------------------------

--
-- Structure de la table `stockage`
--

DROP TABLE IF EXISTS `stockage`;
CREATE TABLE IF NOT EXISTS `stockage` (
  `id_stockage` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id_stockage`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `stockage`
--

INSERT INTO `stockage` (`id_stockage`, `nom`) VALUES
(1, 'HDD'),
(2, 'SSD SATA'),
(3, 'HDD+SSD SATA'),
(4, 'SSD M.2'),
(5, 'HDD + SSD M.2');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `cp` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `solde` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `mail`, `password`, `nom`, `prenom`, `ville`, `cp`, `adresse`, `solde`) VALUES
(1, 'test@test.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'testnom', 'testprenom', 'testville', '84230', '1 rue du test', 50);

-- --------------------------------------------------------

--
-- Structure de la vue `laptop_full_info`
--
DROP TABLE IF EXISTS `laptop_full_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `laptop_full_info`  AS  select `laptop`.`id_laptop` AS `id_laptop`,`laptop`.`laptop_nom` AS `laptop_nom`,`laptop`.`prix` AS `prix`,`laptop`.`taille` AS `taille`,`laptop`.`definition` AS `definition`,`laptop`.`ram` AS `ram`,`laptop`.`espace_stockage_hdd` AS `espace_stockage_hdd`,`laptop`.`espace_stockage_ssd` AS `espace_stockage_ssd`,`laptop`.`poids` AS `poids`,`laptop`.`etat` AS `etat`,`laptop`.`date` AS `date`,`laptop`.`url_photo1` AS `url_photo1`,`laptop`.`url_photo2` AS `url_photo2`,`laptop`.`url_photo3` AS `url_photo3`,`laptop`.`id_user` AS `id_vendeur`,`user`.`nom` AS `vendeur`,`marque`.`nom` AS `marque`,`processeur`.`nom` AS `processeur`,`stockage`.`nom` AS `stockage`,`ecran`.`nom` AS `ecran`,`carte_graphique`.`nom` AS `carte_graphique` from ((((((`laptop` join `user`) join `marque`) join `processeur`) join `stockage`) join `ecran`) join `carte_graphique`) where ((`laptop`.`id_user` = `user`.`id_user`) and (`laptop`.`id_marque` = `marque`.`id_marque`) and (`laptop`.`id_cg` = `carte_graphique`.`id_cg`) and (`laptop`.`id_stockage` = `stockage`.`id_stockage`) and (`laptop`.`id_ecran` = `ecran`.`id_ecran`) and (`laptop`.`id_processeur` = `processeur`.`id_processeur`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `latopfullinfo`
--
DROP TABLE IF EXISTS `latopfullinfo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `latopfullinfo`  AS  select `laptop`.`id_laptop` AS `id_laptop`,`laptop`.`prix` AS `prix`,`laptop`.`taille` AS `taille`,`laptop`.`definition` AS `definition`,`laptop`.`ram` AS `ram`,`laptop`.`espace_stockage_hdd` AS `espace_stockage_hdd`,`laptop`.`espace_stockage_ssd` AS `espace_stockage_ssd`,`laptop`.`poids` AS `poids`,`laptop`.`etat` AS `etat`,`laptop`.`date` AS `date`,`laptop`.`url_photo1` AS `url_photo1`,`laptop`.`url_photo2` AS `url_photo2`,`laptop`.`url_photo3` AS `url_photo3`,`user`.`nom` AS `vendeur`,`marque`.`nom` AS `marque`,`processeur`.`nom` AS `processeur`,`stockage`.`nom` AS `stockage`,`ecran`.`nom` AS `ecran`,`carte_graphique`.`nom` AS `carte_graphique` from ((((((`laptop` join `user`) join `marque`) join `processeur`) join `stockage`) join `ecran`) join `carte_graphique`) where ((`laptop`.`id_user` = `user`.`id_user`) and (`laptop`.`id_marque` = `marque`.`id_marque`) and (`laptop`.`id_cg` = `carte_graphique`.`id_cg`) and (`laptop`.`id_stockage` = `stockage`.`id_stockage`) and (`laptop`.`id_ecran` = `ecran`.`id_ecran`) and (`laptop`.`id_processeur` = `processeur`.`id_processeur`)) ;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `demande`
--
ALTER TABLE `demande`
  ADD CONSTRAINT `demande_laptop_FK` FOREIGN KEY (`id_laptop`) REFERENCES `laptop` (`id_laptop`),
  ADD CONSTRAINT `demande_user0_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `laptop`
--
ALTER TABLE `laptop`
  ADD CONSTRAINT `laptop_carte_graphique1_FK` FOREIGN KEY (`id_cg`) REFERENCES `carte_graphique` (`id_cg`),
  ADD CONSTRAINT `laptop_ecran3_FK` FOREIGN KEY (`id_ecran`) REFERENCES `ecran` (`id_ecran`),
  ADD CONSTRAINT `laptop_marque0_FK` FOREIGN KEY (`id_marque`) REFERENCES `marque` (`id_marque`),
  ADD CONSTRAINT `laptop_processeur4_FK` FOREIGN KEY (`id_processeur`) REFERENCES `processeur` (`id_processeur`),
  ADD CONSTRAINT `laptop_stockage2_FK` FOREIGN KEY (`id_stockage`) REFERENCES `stockage` (`id_stockage`),
  ADD CONSTRAINT `laptop_user_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
