# Campus_Contest_FIN

Pour l'utilisation du site avec le maximum de fonctionnalité réaliser fonctionnel, il suffit de télécharger le dossier.
Ouvrir un terminal, aller dans le dossier Campus contest et lancer un serveur php.
Pour lancer un serveur php on utilise cette commande :php -S localhost:8000.
Ensuite on ouvre notre navigateur et on ouvre : http://localhost:8000/index.php
le site sera fonctionnel mais la base de données locale ne sera pas en marche, pour cela il faut lancer phpmyadmin grace a MAMP, WAMP ou LAMP.
Une fois phpmyadmin lancé, crée une nouvelle base de données appeler la comme bon vous semble et ensuite copier coller le SQL suivant : 
Quand ca sera fait il vous reste juste à modifié les fichiers suivants avec votre nom d'utilisateur, votre mot de passe et le nom de la base de donnée.
les fichiers a modifier sont : 
- connexion.php
- recup_donnees_avis.php
- recup_donnees.php
- functions.php

Une fois toute les étapes terminer le site sera fonctionnel avec toute les fonctionnalité réaliser.


-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/ --
-- Host: localhost:8889
-- Generation Time: Feb 19, 2020 at 10:22 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO"; SET time_zone = "+00:00";
--
--
--
--
--
Database: `portfolio` --------------------------------------------------------
Table structure for table `avis`
CREATE TABLE `avis` (
`nom` varchar(255) NOT NULL, `prenom` varchar(255) NOT NULL, `entreprise` varchar(255) NOT NULL, `id_formulaire` int(11) NOT NULL, `message` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
-- Table structure for table `contact` --
CREATE TABLE `contact` ( `id_message` int(11) NOT NULL, `nom` varchar(255) NOT NULL, `prenom` varchar(255) NOT NULL, `message` varchar(8000) NOT NULL, `mail` varchar(255) NOT NULL, `objet` varchar(8000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8; -- --------------------------------------------------------
-- Table structure for table `user` --
CREATE TABLE `user` (
`id_user` int(11) NOT NULL,
`mail` varchar(255) NOT NULL, `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
ALTER TABLE `avis`
ADD PRIMARY KEY (`id_formulaire`);
--
-- Indexes for table `contact` --
ALTER TABLE `contact`
ADD PRIMARY KEY (`id_message`);
--
-- Indexes for table `user` --
ALTER TABLE `user`
ADD PRIMARY KEY (`id_user`);
--
-- AUTO_INCREMENT for dumped tables --
--
-- AUTO_INCREMENT for table `avis` --
ALTER TABLE `avis`
MODIFY `id_formulaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact` --
ALTER TABLE `contact`
MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user` --
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
