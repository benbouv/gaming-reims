-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 06 oct. 2022 à 13:20
-- Version du serveur :  5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `GR`
--

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `id` int(20) NOT NULL,
  `libelle` varchar(500) NOT NULL,
  `pool` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id`, `libelle`, `pool`) VALUES
(1, 'Quel est la couleur du cheval blanc d Henri IV', 1),
(2, 'ou est charlie', 2);

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `id` int(20) NOT NULL,
  `id_question` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `jugement` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reponse`
--

INSERT INTO `reponse` (`id`, `id_question`, `libelle`, `jugement`) VALUES
(1, 1, 'noir', 0),
(2, 1, 'blanc', 1),
(3, 2, 'là', 1),
(4, 2, 'pas là', 0);

-- --------------------------------------------------------

--
-- Structure de la table `resultat`
--

CREATE TABLE `resultat` (
  `id` int(20) NOT NULL,
  `addrmail` varchar(255) NOT NULL,
  `timestamp` int(50) DEFAULT NULL,
  `stand` int(1) NOT NULL,
  `ordre` int(1) NOT NULL,
  `note` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `resultat`
--

INSERT INTO `resultat` (`id`, `addrmail`, `timestamp`, `stand`, `ordre`, `note`) VALUES
(31, 'zozover1@gmail.com', NULL, 5, 1, NULL),
(32, 'zozover1@gmail.com', NULL, 4, 2, NULL),
(33, 'zozover1@gmail.com', NULL, 6, 3, NULL),
(34, 'zozover1@gmail.com', NULL, 8, 4, NULL),
(35, 'zozover1@gmail.com', NULL, 1, 5, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `resultat`
--
ALTER TABLE `resultat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `resultat`
--
ALTER TABLE `resultat`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
