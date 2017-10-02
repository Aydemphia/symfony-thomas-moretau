-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Lun 02 Octobre 2017 à 17:48
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `base`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Pure blood'),
(2, 'Mixed blood');

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

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `image`, `category_id`) VALUES
(1, 'British Shorthair', 175000, '<p>The British Shorthair is the pedigreed version of the traditional British domestic cat, with a distinctively chunky body, dense coat and broad face</p>', '7d3ac46e10783193edf313bb0b568227.jpeg', 1),
(2, 'Siamese', 225000, '<p>The Siamese cat is one of the first distinctly recognized breeds of Asian cat. Derived from the Wichianmat landrace, one of several varieties of cat native to Thailand</p>', '6dcc803e0e4ee273cf3ec0ad3df46d5e.jpeg', 1),
(3, 'Persian', 195000, '<p>The Persian cat is a long-haired breed of cat characterized by its round face and short muzzle. It is also known as the Persian Longhair. In Middle East they are widely known as Iranian cat and in Iran they are known as Shirazi cat</p>', '8010fba2ec5daa9b9d1c1b28a485f150.jpeg', 2),
(4, 'Russian Blue', 328000, '<p>The Russian Blue is a cat breed that comes in colors varying from a light shimmering silver to a darker, slate grey. They develop close bonds with their owners and are sought out as pets due to their personalities, beauty and coat</p>', '0af22984ba44763c4040c4423b074558.jpeg', 1),
(5, 'Main Coon', 723000, '<p>The Maine Coon is one of the largest domesticated breeds of cat. It has a distinctive physical appearance and valuable hunting skills</p>', '1b5d433b2d60ff0da66cf0a6ae52967a.jpeg', 2),
(6, 'Siberian', 2235000, '<p>The Siberian is a landrace variety of domestic cat, present in Russia for centuries, and more recently developed as a formal breed, with standards promulgated since the late 1980s. They vary from medium to medium-large in size.</p>', '13bb07ecb3547de4ca5aa241afd16d22.jpeg', 2),
(7, 'Sphynx', 12345, '<p>The Sphynx cat is a breed of cat known for its lack of coat. The Sphynx was developed through selective breeding, starting in the 1960s. The skin should have the texture of chamois, as it has fine hairs.</p>', '892d0304c4a357b03dd7499a6dc373db.jpeg', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D34A04AD12469DE2` (`category_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_D34A04AD12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
