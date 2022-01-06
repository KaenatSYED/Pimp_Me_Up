DROP TABLE IF EXISTS client, prestataire;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


-- Structure de la table `client`

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Structure de la table `prestataire`


CREATE TABLE `prestataire` (
  `id` int(11) DEFAULT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_naissance` date NOT NULL,
  `telephone` int(11) NOT NULL,
  `candidature` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Index pour la table `client`

ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);


-- AUTO_INCREMENT pour la table `client`

ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;


