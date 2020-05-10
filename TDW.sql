-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 05 fév. 2020 à 04:42
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sitetraduction`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` longtext NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`ID`, `date`, `titre`, `contenu`) VALUES
(1, '2020-01-01', 'Juridique', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.'),
(3, '2020-01-15', 'Une initiative sur le numérique', 'Chaque mois, à travers une thématique, l’agenda de la solidarité internationale propose de revenir sur deux initiatives portées par des associations, citoyen·nes, ONG, etc. pour provoquer le changement. L’objectif est de comprendre les grandes problématiques internationales, montrer le pouvoir des mobilisations et donner des envies d’engagement.\r\nNous vous offrons donc, tout au long de l’année, des extraits de notre agenda. En janvier, la lumière est mise sur le numérique.'),
(4, '2020-01-01', 'Cancer treatment options', 'The cancer treatment is based on the type of cancer and the stage of the cancer. In some people, diagnosis and treatment may occur at the same time if the cancer is entirely surgically removed when the surgeon removes the tissue for biopsy.\r\nAlthough patients may receive a unique sequenced treatment, or protocol, for their cancer, most treatments have one or more of the following components: surgery, chemotherapy, radiation therapy, or combination treatments (a combination of two or all three treatments).\r\nIndividuals obtain variations of these treatments for cancer. Patients with cancers that cannot be cured (completely removed) by surgery usually will get combination therapy, the composition determined by the cancer type and stage.');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `IDclient` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `wilaya` varchar(255) NOT NULL,
  `commune` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `num_tlphn` int(10) NOT NULL,
  `fax` int(10) NOT NULL,
  `photo_proph` varchar(255) DEFAULT NULL,
  `bloqué` varchar(255) DEFAULT NULL,
  `supprimé` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IDclient`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`IDclient`, `nom`, `prenom`, `email`, `mdp`, `wilaya`, `commune`, `adresse`, `num_tlphn`, `fax`, `photo_proph`, `bloqué`, `supprimé`) VALUES
(1, 'Aider', 'Said ', 'aidersaid@yahoo.com', 'aider', 'Blida', 'Soûmaa', '50 Rue de lla gare', 21562570, 21563050, NULL, 'non', 'non'),
(2, 'Brahimi', 'Leila', 'brahimileila@esi.dz', 'leila', 'Sétif', 'El-eulma', '50 Rue d ela liberté', 21562570, 21563050, 'siham.png', 'non', 'non'),
(14, 'Benouahdah', 'merzak', 'benouahdah@gmail.com', 'merzak', 'Tizi-Ouzou', 'Es-Senia', '50 Rue des martyrs', 21562570, 21563050, NULL, 'non', 'non'),
(4, 'Boumaaza', 'Samir', 'samir@gmail.com', 'samir', 'Alger', 'Rouiba', '50 Rue des dunes', 21562570, 21563050, NULL, 'non', 'non'),
(5, 'Bendaoud', 'Fatiha', 'fatiha@gmail.com', 'fatiha', 'Bechar ', 'Saoura', '50 Rue des oliviers', 21562570, 21563050, NULL, 'non', 'oui'),
(9, 'douaidi', 'lydia', 'gl_douaidi@esi.dz', 'lydia', '', '', '', 21562570, 31563050, NULL, 'non', 'non'),
(15, 'ferraguig ', 'lynda', 'gl_ferraguig@esi.dz', 'lynda', 'Alger', '', '', 56132425, 21132425, NULL, 'non', 'non');

-- --------------------------------------------------------

--
-- Structure de la table `devis`
--

DROP TABLE IF EXISTS `devis`;
CREATE TABLE IF NOT EXISTS `devis` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `langue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `commentaire` text COLLATE utf8_unicode_ci,
  `assermente` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_envoi` datetime NOT NULL,
  `document` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idclient` int(11) DEFAULT NULL,
  `devis` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `supprimé` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `languesrc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `traité` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idclient` (`idclient`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `devis`
--

INSERT INTO `devis` (`id`, `langue`, `commentaire`, `assermente`, `date_envoi`, `document`, `idclient`, `devis`, `type`, `supprimé`, `languesrc`, `traité`) VALUES
(1, 'Arabe', '', 'non', '2010-10-20 00:00:00', 'test.pdf', 2, 'traduction', 'Traduction générale', 'non', 'Anglais', 'oui'),
(2, 'Anglais', '', 'oui', '2020-01-20 08:04:10', 'Resume-reunion-29-12-2019-20h.pdf', 14, 'devis', 'Traduction scientifique', 'non', 'Arabe', 'oui'),
(39, 'turque', '', 'Oui', '2031-01-20 02:26:10', 'test.pdf', 9, 'traduction ', 'site web', 'non', 'français', 'oui'),
(40, 'turque', '', 'Oui', '2031-01-20 02:26:49', 'test.pdf', 9, 'traduction', 'traduction générale', 'non', 'anglais', 'oui'),
(47, 'Arabe', '', 'Oui', '2031-01-20 10:03:24', 'test.pdf', 15, 'devis', 'Traduction générale', 'non', 'Français', 'non'),
(48, 'Arabe', '', 'Oui', '2031-01-20 10:04:41', 'test.pdf', 15, 'devis', 'Traduction générale', 'non', 'Français', 'non');

-- --------------------------------------------------------

--
-- Structure de la table `langues`
--

DROP TABLE IF EXISTS `langues`;
CREATE TABLE IF NOT EXISTS `langues` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `langue` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `langues`
--

INSERT INTO `langues` (`ID`, `langue`) VALUES
(1, 'Arabe'),
(2, 'Français'),
(3, 'Anglais'),
(4, 'Espagnol'),
(5, 'turque'),
(6, 'chinois');

-- --------------------------------------------------------

--
-- Structure de la table `maitriser`
--

DROP TABLE IF EXISTS `maitriser`;
CREATE TABLE IF NOT EXISTS `maitriser` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDLangue` int(11) NOT NULL,
  `IDTrad` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `maitriser`
--

INSERT INTO `maitriser` (`ID`, `IDLangue`, `IDTrad`) VALUES
(11, 4, 2),
(10, 4, 1),
(9, 3, 4),
(8, 3, 3),
(7, 3, 5),
(6, 2, 5),
(5, 2, 1),
(4, 2, 1),
(3, 3, 1),
(15, 1, 27),
(13, 5, 6),
(12, 5, 1),
(1, 1, 6),
(14, 5, 3),
(16, 1, 26),
(17, 1, 28),
(18, 1, 29),
(19, 1, 30),
(20, 1, 31),
(21, 2, 27),
(22, 2, 26),
(23, 2, 28),
(24, 2, 29),
(25, 2, 30),
(26, 2, 31),
(27, 1, 27),
(28, 1, 26),
(29, 1, 28),
(30, 1, 29),
(31, 1, 30),
(32, 1, 31),
(33, 1, 32),
(34, 2, 27),
(35, 2, 26),
(36, 2, 28),
(37, 2, 29),
(38, 2, 30),
(39, 2, 31),
(40, 2, 32),
(41, 1, 27),
(42, 1, 26),
(43, 1, 28),
(44, 1, 29),
(45, 1, 30),
(46, 1, 31),
(47, 1, 32),
(48, 1, 33),
(49, 2, 27),
(50, 2, 26),
(51, 2, 28),
(52, 2, 29),
(53, 2, 30),
(54, 2, 31),
(55, 2, 32),
(56, 2, 33);

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDTrad` int(11) NOT NULL,
  `IDclient` int(11) NOT NULL,
  `iddocument` int(11) NOT NULL,
  `prixTrad` double DEFAULT NULL,
  `prixAccepté` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `IDTrad` (`IDTrad`),
  KEY `IDclient` (`IDclient`),
  KEY `iddocument` (`iddocument`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `notifications`
--

INSERT INTO `notifications` (`ID`, `IDTrad`, `IDclient`, `iddocument`, `prixTrad`, `prixAccepté`) VALUES
(54, 5, 15, 48, 487, 'non'),
(55, 4, 15, 47, 786, 'oui');

-- --------------------------------------------------------

--
-- Structure de la table `traducteurs`
--

DROP TABLE IF EXISTS `traducteurs`;
CREATE TABLE IF NOT EXISTS `traducteurs` (
  `IDtrad` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `commune` varchar(255) NOT NULL,
  `wilaya` varchar(255) NOT NULL,
  `tlphn` int(10) NOT NULL,
  `fax` int(10) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `assermente` varchar(255) DEFAULT NULL,
  `ref` varchar(255) DEFAULT NULL,
  `note` varchar(20) DEFAULT NULL,
  `bloqué` varchar(255) DEFAULT NULL,
  `supprimé` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IDtrad`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `traducteurs`
--

INSERT INTO `traducteurs` (`IDtrad`, `nom`, `prenom`, `email`, `mdp`, `adresse`, `commune`, `wilaya`, `tlphn`, `fax`, `cv`, `assermente`, `ref`, `note`, `bloqué`, `supprimé`) VALUES
(5, 'Hazi', 'Farouk', 'hazifarouk@gmail.com', 'farouk', '10 Rue des oliviers', 'Freha', 'Tizi-ouzou', 25562570, 25563050, 'cvfarouk.pdf', 'oui', NULL, '14', 'non', 'non'),
(4, 'Sebaa', 'Djamila', 'sebaadjamila@gmail.com', 'djamila', '30 Rue des dunes', 'Djamaa', 'El-Oued', 26562570, 26563050, 'cvdjamila.pdf', 'oui', NULL, '12', 'non', 'non'),
(3, 'Bouroubi', 'Taous', 'bouroubi@gmail.com', 'taous', '68 rue de la gare', ' Oued Smar', ' Alger', 23562570, 23563050, 'cvtaous.pdf', 'non', NULL, '10', 'non', 'oui'),
(1, 'Belhaj', 'Said', 'belhajsaid@gmail.com', 'said', '50 Rue des martyrs', ' Es-Senia', 'Oran', 31562570, 31563050, 'cvSaid.pdf', 'non', NULL, '15', 'non', 'oui'),
(2, 'Helali', 'Karim', 'helalikarim@gmail.com', 'karim', '3500 Rue de la liberte', 'Isser', 'Boumerdes ', 35562570, 35563059, 'cvkarim.pdf', 'oui', NULL, '13', 'non', 'non');

-- --------------------------------------------------------

--
-- Structure de la table `traductiontype`
--

DROP TABLE IF EXISTS `traductiontype`;
CREATE TABLE IF NOT EXISTS `traductiontype` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `traductiontype`
--

INSERT INTO `traductiontype` (`ID`, `type`) VALUES
(1, 'Traduction générale'),
(2, 'Traduction site web'),
(3, 'Traduction scientifique');

-- --------------------------------------------------------

--
-- Structure de la table `traduire`
--

DROP TABLE IF EXISTS `traduire`;
CREATE TABLE IF NOT EXISTS `traduire` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `idtrad` int(11) NOT NULL,
  `iddevis` int(11) NOT NULL,
  `dateTraduction` date NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `idtrad` (`idtrad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
