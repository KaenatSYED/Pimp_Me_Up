DROP TABLE IF EXISTS client, prestataire, newsletters;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


-- Structure de la table `client`

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `utilisateur` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Structure de la table `prestataire`


CREATE TABLE `prestataire` (
  `id` int(11) DEFAULT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `candidature` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Structure de la table `newsletters`

CREATE TABLE `newsletters` (
  `id` int(11) DEFAULT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Index pour la table `client`

ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

-- Index pour la table `newsletters`

ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

-- Index pour la table `prestataire`

ALTER TABLE `prestataire`
  ADD PRIMARY KEY (`id`);


-- AUTO_INCREMENT pour la table `client`

ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

-- AUTO_INCREMENT pour la table `newsletters`

ALTER TABLE `newsletters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


-- AUTO_INCREMENT pour la table `prestataire`

ALTER TABLE `prestataire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
