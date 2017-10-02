-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Lun 02 Octobre 2017 à 17:47
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `base`
--

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `commentText` longtext COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `comment`
--

INSERT INTO `comment` (`id`, `productId`, `commentText`, `author`) VALUES
(1, 1, 'kdkdkdk', 'thomas'),
(2, 1, 'qsdqsdqsd', 'dqsdqd'),
(3, 1, 'qsdqsdqsdqsd', 'qsdqsdqsd'),
(4, 1, 'qsdqsdqsdqsd', 'dqsdqsdqd'),
(5, 1, 'dqsdqsdqsd', 'dsqdqdq'),
(6, 1, 'kqsdjqksdjqsd', 'jean Bon'),
(7, 2, 'testouille', 'TEST'),
(8, 6, 'Tata :)))', 'Toto'),
(9, 2, 'vavabab', 'azer');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
