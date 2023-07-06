-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 06 juil. 2023 à 09:52
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `animals_afpa`
--

-- --------------------------------------------------------

--
-- Structure de la table `animals`
--

CREATE TABLE `animals` (
  `id` int NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `tatoo` tinyint(1) DEFAULT NULL,
  `chip` tinyint(1) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `weight` float NOT NULL,
  `id_color` int NOT NULL,
  `id_type` int NOT NULL,
  `id_sex` int NOT NULL,
  `id_race` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `animals`
--

INSERT INTO `animals` (`id`, `date_of_birth`, `tatoo`, `chip`, `name`, `weight`, `id_color`, `id_type`, `id_sex`, `id_race`) VALUES
(1, '2022-03-15', 1, 0, 'kity', 4.5, 1, 2, 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `color`
--

CREATE TABLE `color` (
  `id` int NOT NULL,
  `color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `color`
--

INSERT INTO `color` (`id`, `color`) VALUES
(1, 'black'),
(2, 'white'),
(3, 'mix');

-- --------------------------------------------------------

--
-- Structure de la table `race`
--

CREATE TABLE `race` (
  `id` int NOT NULL,
  `name_race` varchar(50) NOT NULL,
  `id_type` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `race`
--

INSERT INTO `race` (`id`, `name_race`, `id_type`) VALUES
(1, 'persan', 2),
(2, 'angora', 2),
(3, 'european', 2),
(4, 'other', 2),
(5, 'golden', 1),
(6, 'buldog', 1),
(7, 'chiwawa', 1),
(8, 'other', 1);

-- --------------------------------------------------------

--
-- Structure de la table `sex`
--

CREATE TABLE `sex` (
  `id` int NOT NULL,
  `sex` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `sex`
--

INSERT INTO `sex` (`id`, `sex`) VALUES
(1, 'male'),
(2, 'female');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id` int NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id`, `type`) VALUES
(1, 'dog'),
(2, 'cat');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `animals_color_FK` (`id_color`),
  ADD KEY `animals_type0_FK` (`id_type`),
  ADD KEY `animals_sex1_FK` (`id_sex`),
  ADD KEY `animals_race2_FK` (`id_race`);

--
-- Index pour la table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `race`
--
ALTER TABLE `race`
  ADD PRIMARY KEY (`id`),
  ADD KEY `race_type_FK` (`id_type`);

--
-- Index pour la table `sex`
--
ALTER TABLE `sex`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `color`
--
ALTER TABLE `color`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `race`
--
ALTER TABLE `race`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `sex`
--
ALTER TABLE `sex`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animals`
--
ALTER TABLE `animals`
  ADD CONSTRAINT `animals_color_FK` FOREIGN KEY (`id_color`) REFERENCES `color` (`id`),
  ADD CONSTRAINT `animals_race2_FK` FOREIGN KEY (`id_race`) REFERENCES `race` (`id`),
  ADD CONSTRAINT `animals_sex1_FK` FOREIGN KEY (`id_sex`) REFERENCES `sex` (`id`),
  ADD CONSTRAINT `animals_type0_FK` FOREIGN KEY (`id_type`) REFERENCES `type` (`id`);

--
-- Contraintes pour la table `race`
--
ALTER TABLE `race`
  ADD CONSTRAINT `race_type_FK` FOREIGN KEY (`id_type`) REFERENCES `type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
