-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 29 mars 2022 à 07:07
-- Version du serveur :  5.7.11
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `museum_vision_chailloux valentin`
--
DROP DATABASE IF EXISTS museum_vision;
CREATE DATABASE museum_vision;
USE museum_vision;
-- --------------------------------------------------------

--
-- Structure de la table `exposition`
--

CREATE TABLE `exposition` (
  `idexposition` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `permanent` tinyint(1) NOT NULL,
  `tarifEnfant` int(11) NOT NULL,
  `tarifAdulte` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `exposition`
--

INSERT INTO `exposition` (`idexposition`, `nom`, `permanent`, `tarifEnfant`, `tarifAdulte`, `active`) VALUES
(1, 'Le Cacatoes dans son environement', 1, 13, 23, 1),
(2, 'L\'origine des haikus', 0, 4, 12, 1);

-- --------------------------------------------------------

--
-- Structure de la table `visite`
--

CREATE TABLE `visite` (
  `idvisite` int(11) NOT NULL,
  `nbAdulte` int(11) NOT NULL,
  `nbEnfant` int(11) NOT NULL,
  `dateHeureEntree` datetime NOT NULL,
  `dateHeureSortie` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `visite`
--

INSERT INTO `visite` (`idvisite`, `nbAdulte`, `nbEnfant`, `dateHeureEntree`, `dateHeureSortie`) VALUES
(1, 2, 1, '2022-02-01 09:00:00', '2022-02-01 12:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `visiteexpo`
--

CREATE TABLE `visiteexpo` (
  `idexposition` int(11) NOT NULL,
  `idvisite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `visiteexpo`
--

INSERT INTO `visiteexpo` (`idexposition`, `idvisite`) VALUES
(1, 1),
(1, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `exposition`
--
ALTER TABLE `exposition`
  ADD PRIMARY KEY (`idexposition`);

--
-- Index pour la table `visite`
--
ALTER TABLE `visite`
  ADD PRIMARY KEY (`idvisite`);

--
-- Index pour la table `visiteexpo`
--
ALTER TABLE `visiteexpo`
  ADD KEY `idexposition` (`idexposition`,`idvisite`),
  ADD KEY `idvisite` (`idvisite`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `visiteexpo`
--
ALTER TABLE `visiteexpo`
  ADD CONSTRAINT `visiteexpo_ibfk_1` FOREIGN KEY (`idvisite`) REFERENCES `visite` (`idvisite`),
  ADD CONSTRAINT `visiteexpo_ibfk_2` FOREIGN KEY (`idexposition`) REFERENCES `exposition` (`idexposition`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
