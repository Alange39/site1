-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 04 mars 2025 à 15:22
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `shop`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `noms` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `noms`) VALUES
(2, 'Montre de luxe pour couples Hommes-Femmes'),
(3, 'Montres pour hommes'),
(4, 'Montres pour Femmes'),
(5, 'Montres de luxe'),
(6, 'Montres personnalisees');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `images` varchar(80) NOT NULL,
  `descriptions` text NOT NULL,
  `prix` int(40) NOT NULL,
  `quantites` int(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `categories` varchar(250) NOT NULL,
  `images` varchar(250) NOT NULL,
  `descriptions` text NOT NULL,
  `quantites` varchar(70) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `categories`, `images`, `descriptions`, `quantites`, `prix`) VALUES
(11, '', 'box.jpg', 'Montre Homme Mecanisme Apparent de style Retro avec Bracelet en cuir', '10', 60);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `noms` varchar(20) NOT NULL,
  `email` varchar(70) NOT NULL,
  `passwords` varchar(40) NOT NULL,
  `phones` int(40) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `role` text NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `noms`, `email`, `passwords`, `phones`, `Address`, `role`) VALUES
(8, 'Raphina', 'Raph@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 0, '', 'user'),
(9, 'AL ANGE', 'aaange941@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 0, '', 'user'),
(10, 'Mali', 'Mali@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 0, '', 'user'),
(11, 'Kylian', 'Ky@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 654537644, '', 'user'),
(12, 'Mirabelle', 'Mira@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 654367588, 'Yaounde, biyem-assi', 'user'),
(13, 'love', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 0, '', 'user'),
(14, 'ANGE', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 0, '', 'user'),
(15, 'ANGE', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 0, '', 'user');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
