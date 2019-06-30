

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

/*--
-- Base de données :  `site_cv`
--

-- --------------------------------------------------------

--
-- Structure de la table `experience`*/
 

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `date` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*--
-- Déchargement des données de la table `experience`
--*/

INSERT INTO `experience` (`id`, `name`, `date`) VALUES
(1, 'Ricard', '2015');

/*--
-- Index pour les tables déchargées
--

--
-- Index pour la table `experience`
--*/
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

/*--
-- AUTO_INCREMENT pour les tables déchargées
--*/

/*--
-- AUTO_INCREMENT pour la table `experience`
--*/
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;