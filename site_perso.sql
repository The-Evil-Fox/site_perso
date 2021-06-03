-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 03 juin 2021 à 01:42
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `site_perso`
--
CREATE DATABASE IF NOT EXISTS `site_perso` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `site_perso`;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `estimation`
--

DROP TABLE IF EXISTS `estimation`;
CREATE TABLE IF NOT EXISTS `estimation` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Userfunction` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `SocietyName` varchar(255) NOT NULL,
  `SocietyDescription` text NOT NULL,
  `SocietyObjectives` text NOT NULL,
  `SocietyTargets` text NOT NULL,
  `SocietyBudget` int DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Website` text,
  `PleasingCompetitors` text,
  `UnpleasantCompetitors` text,
  `Clarifications` text,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `estimation`
--

INSERT INTO `estimation` (`ID`, `Username`, `Email`, `Userfunction`, `SocietyName`, `SocietyDescription`, `SocietyObjectives`, `SocietyTargets`, `SocietyBudget`, `Phone`, `Website`, `PleasingCompetitors`, `UnpleasantCompetitors`, `Clarifications`) VALUES
(7, 'Steven Durieux', 'stevenhonor@live.fr', 'Je suis cadre dans mon entreprise', 'Dev-masters', 'Nous sommes une entreprise de développeur web débutants qui ne savent pas faire un site web wallah', 'Leur montrer ( à mes employés ) c\'est quoi un vrai dev gros', 'A mes connards de dev', 500, '0777696681', 'https://www.dev-masters.com', 'https://www.xavierthevenot.com/ Il tue son site à lui gros', 'https://romain-menard.fr/ Le mec il sait pas faire de la verif de formulaire ce con', 'J\'emmerde mes dev c\'est vraiment des handicapés');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
