-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 10 nov. 2021 à 07:56
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `evarotra`
--

-- --------------------------------------------------------

--
-- Structure de la table `olona`
--

CREATE TABLE `olona` (
  `id` int(11) NOT NULL,
  `sexe` varchar(8) NOT NULL,
  `utilisateur` varchar(25) NOT NULL,
  `mdp` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` bigint(13) NOT NULL,
  `num_cin` bigint(12) NOT NULL,
  `token` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `olona`
--

INSERT INTO `olona` (`id`, `sexe`, `utilisateur`, `mdp`, `email`, `phone_number`, `num_cin`, `token`) VALUES
(1, 'male', 'tatumln', 'underthegun00', 'linautatum501@gmail.com', 261324040211, 452368795124, 'Nada');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `olona`
--
ALTER TABLE `olona`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `olona`
--
ALTER TABLE `olona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
