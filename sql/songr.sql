CREATE DATABASE songr


--
-- Base de données : `songr`
--

-- --------------------------------------------------------

--
-- Structure de la table `classic`
--

DROP TABLE IF EXISTS `classic`;
CREATE TABLE IF NOT EXISTS `classic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `stock` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `classic`
--

INSERT INTO `classic` (`id`, `titre`, `img`, `description`, `stock`) VALUES
(1, 'Moonlight Sonata', 'img/moonlight.jpg', 'Par: Beethoven, année: 1807', 12),
(2, 'Prelude', 'img/prelude.jpg', 'Par: Bach, année: 1854', 7),
(3, 'Serenade No. 13', 'img/serenade.jpg', 'Par: Mozart, année: 1793', 25),
(4, 'Für Elise', 'img/fur_elise.jpg', 'Par: Beethoven, année: 1817', 31),
(5, 'Prelude Op.28', 'img/prelude.jpg', 'Par: chopin, année: 1803', 1);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `sexe` varchar(20) NOT NULL,
  `fonction` varchar(20) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Structure de la table `opera`
--

DROP TABLE IF EXISTS `opera`;
CREATE TABLE IF NOT EXISTS `opera` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `stock` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `opera`
--

INSERT INTO `opera` (`id`, `titre`, `img`, `description`, `stock`) VALUES
(1, 'Don Carlos: \"O\' Don Fatal\"', 'img/don_carlos_opera.jpg', 'Par: Don Carlos, année: 1859', 12),
(2, 'Norma: \"Casta Diva\"', 'img/norma_opera.jpg', 'Par: Norma, année de creation: 1798', 7),
(3, 'Turandot: \"Nessun dorma\"', 'img/trovatore_opera.jpg', 'Par:Il trovatore, année: 1789', 25),
(4, 'Il trovatore: \"Condotta ell\'era in ceppi\"', 'img/turandor_opera.jpg', 'Par:Turandot, année: 1765', 31),
(5, 'Il trovatore: \"Tacea la notte placida\"', 'img/tovat_opera.jpg', 'Par: Il trovatore, année: 1745', 1);

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `id_produit` int(50) NOT NULL,
  `id_utilisateur` int(50) NOT NULL,
  `quantite` int(50) NOT NULL,
  `table_produit` varchar(50) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id`, `id_produit`, `id_utilisateur`, `quantite`, `table_produit`) VALUES
(36, 1, 14, 0, 'classic');

-- --------------------------------------------------------

--
-- Structure de la table `rock`
--

DROP TABLE IF EXISTS `rock`;
CREATE TABLE IF NOT EXISTS `rock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `stock` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rock`
--

INSERT INTO `rock` (`id`, `titre`, `img`, `description`, `stock`) VALUES
(1, 'Such a lonely day', 'img/soad.jpg', 'Par: System of a down, année: 2005', 12),
(2, 'bohemian rhapsody queen', 'img/queen.jpg', 'Par Queen, année: 1994', 7),
(3, 'Creep', 'img/radiohead.jpg', 'Par: RadioHead, année: 1990', 25),
(4, 'feels like teen spirit', 'img/nirvana.jpg', 'Par: Nirvana, année: 1991', 31),
(5, 'I stand alone', 'img/godsmack.jpg', 'Par: GodSmack, année: 2000', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;


