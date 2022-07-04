-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 04 juil. 2022 à 23:04
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fivemtop`
--

-- --------------------------------------------------------

--
-- Structure de la table `annuaire`
--

DROP TABLE IF EXISTS `annuaire`;
CREATE TABLE IF NOT EXISTS `annuaire` (
  `srvid` int(11) NOT NULL AUTO_INCREMENT,
  `srvname` varchar(255) NOT NULL,
  `srvdesc` varchar(255) NOT NULL,
  `srvdiscord` varchar(255) NOT NULL,
  `srvsite` varchar(255) NOT NULL,
  `srvimg` varchar(255) NOT NULL,
  `srvip` varchar(255) NOT NULL,
  `srvslots` int(255) NOT NULL,
  `longdesc` text NOT NULL,
  `vote` int(255) NOT NULL DEFAULT '0',
  `note` varchar(5) DEFAULT NULL,
  `owner` text NOT NULL,
  PRIMARY KEY (`srvid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `annuaire`
--

INSERT INTO `annuaire` (`srvid`, `srvname`, `srvdesc`, `srvdiscord`, `srvsite`, `srvimg`, `srvip`, `srvslots`, `longdesc`, `vote`, `note`, `owner`) VALUES
(1, 'FrenchCityRp', 'FrenchCity RP est un ser', 'https://discord.gg/q2THYVtQ', 'http://localhost/fivemtop/srv.php', 'https://media.discordapp.net/attachments/861942952006909993/867894529423573033/800x800.png', 'FrenchCity RP est un serveur RP sur Gta5 (FiveM)\r\n\r\nDeveloppement Constant ✔\r\n\r\nStaff Actif ✔\r\n\r\nMappings Exclusifs ✔\r\n\r\nScripts Inédits ✔\r\n\r\n\r\nRejoins-nous ! ', 0, 'FrenchCity RP est un serveur RP sur Gta5 (FiveM)\r\n\r\nDeveloppement Constant ✔\r\n\r\nStaff Actif ✔\r\n\r\nMappings Exclusifs ✔\r\n\r\nScripts Inédits ✔\r\n\r\n\r\nRejoins-nous ! ', 55, '5', 'admin'),
(2, 'RickRoleplay', 'test', 'test', 'http://localhost/fivemtop/srv.php', 'test', 'test', 0, 'test', 55, '1', '0');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isadmin` int(11) NOT NULL DEFAULT '0',
  `token` text,
  `serveur` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `email`, `password`, `ip`, `date_inscription`, `isadmin`, `token`, `serveur`) VALUES
(10, 'admin', 'admin@admin.fr', '$2y$12$2KHJchmhPduuMV0Xk8drJ.87h0UlE79eQ/LUWjBWvjHLqS.n/pP0e', '::1', '2022-07-05 01:02:26', 1, '9da66ed35197c35ad492213907a5cd596ef344cf54d08460900eb0aa80062c1242e0034ec6038cafd46713965fe881598025f74cb27a6ae6104708cb55cb8a8b', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
