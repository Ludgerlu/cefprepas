-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 28 juil. 2024 à 18:34
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cefprepas`
--

-- --------------------------------------------------------

--
-- Structure de la table `attachments`
--

CREATE TABLE `attachments` (
  `ATTACHMENT_ID` varchar(100) NOT NULL,
  `LIBELLE` varchar(100) NOT NULL,
  `CHEMIN_IMAGE` varchar(100) NOT NULL,
  `CATEGORIE` varchar(100) NOT NULL,
  `ACTIVE` enum('0','1') NOT NULL DEFAULT '1',
  `DELETED` enum('1','0') NOT NULL DEFAULT '0',
  `CREATION_DATE` datetime NOT NULL,
  `LAST_UPDATE_DATE` datetime NOT NULL,
  `CREATOR_NAME` varchar(100) DEFAULT NULL,
  `UPDATOR_NAME` varchar(100) DEFAULT NULL,
  `DELETOR_NAME` varchar(100) DEFAULT NULL,
  `DELETED_DATE` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `attachments`
--

INSERT INTO `attachments` (`ATTACHMENT_ID`, `LIBELLE`, `CHEMIN_IMAGE`, `CATEGORIE`, `ACTIVE`, `DELETED`, `CREATION_DATE`, `LAST_UPDATE_DATE`, `CREATOR_NAME`, `UPDATOR_NAME`, `DELETOR_NAME`, `DELETED_DATE`) VALUES
('A20240605164509_612_254', 'hello', '847/A_IMAGE_394.jpg', 'pharmicie', '1', '0', '2024-06-05 16:45:09', '2024-06-05 16:45:09', NULL, NULL, NULL, '2024-06-05 16:45:09'),
('A20240619110754_581_827', 'hello', '976/A_IMAGE_128.docx', 'pharmicie', '1', '0', '2024-06-19 11:07:54', '2024-06-19 11:07:54', NULL, NULL, NULL, '2024-06-19 11:07:54'),
('A20240625120539_192_965', 'Brochure CEFPREPAS', '234/A_IMAGE_717.jpg', 'document', '1', '0', '2024-06-25 12:05:39', '2024-06-25 12:05:39', NULL, NULL, NULL, '2024-06-25 12:05:39'),
('A20240625121210_393_742', 'Brochure CEFPREPAS', '215/A_IMAGE_704.docx', 'document', '1', '0', '2024-06-25 12:12:10', '2024-06-25 12:12:10', NULL, NULL, NULL, '2024-06-25 12:12:10'),
('A20240625122125_305_841', 'CEFPREPAS_Album_Photos', '646/A_IMAGE_372.pdf', 'document', '1', '0', '2024-06-25 12:21:25', '2024-06-25 12:21:25', NULL, NULL, NULL, '2024-06-25 12:21:25'),
('ATTACHMENT_ID20240521171115_629_527', 'ss', '998/A_IMAGE_115.jpg', 'Etudiant', '1', '1', '2024-05-21 17:11:15', '0000-00-00 00:00:00', '', '', 'admin', '2024-05-22 01:43:46'),
('ATTACHMENT_ID20240521173104_993_363', 'test', '577/A_IMAGE_610.jpg', 'Actualite', '1', '0', '2024-05-21 17:31:04', '2024-05-22 01:43:55', '', 'admin', '', '0000-00-00 00:00:00'),
('ATTACHMENT_ID20240522020414_550_205', 'visite', '105/A_IMAGE_110.jpg', 'Etudiant', '1', '0', '2024-05-22 02:04:14', '2024-06-09 20:42:26', 'admin', 'admin', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

CREATE TABLE `evenements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `TITRE` varchar(255) NOT NULL,
  `TYPE` varchar(255) NOT NULL,
  `CHEMIN_IMAGE` varchar(255) NOT NULL,
  `DESCRIPTION` varchar(255) NOT NULL,
  `DATE_EVENEMENT` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evenements`
--

INSERT INTO `evenements` (`id`, `TITRE`, `TYPE`, `CHEMIN_IMAGE`, `DESCRIPTION`, `DATE_EVENEMENT`, `created_at`, `updated_at`) VALUES
(1, 'Vente de poisson', 'vie d\'etudiant', '317/A_IMAGE_519.jpg', 'heeelo comment tu vas', '2021-04-16 00:00:00', '2024-06-09 20:50:25', NULL),
(2, 'hello', 'Actualités', '318/A_IMAGE_581.jpg', 'tentative de vole', '2024-07-11 00:00:00', '2024-06-09 22:36:35', '2024-06-10 09:47:49'),
(3, 'hello', 'vie d\'etudiant', '803/A_IMAGE_649.jpg', 'okay', '2024-06-05 00:00:00', '2024-06-09 22:57:58', NULL),
(4, 'Rentree du 08 Juillet 2024', 'Actualités', '741/A_IMAGE_332.JPG', 'Une Rentrée est prévu a CEFPREPAS le 08 Juillet prochain', '2024-07-08 00:00:00', '2024-06-19 10:16:58', NULL),
(5, 'Journée porte ouverte au CEFPREPAS', 'Actualités', '110/A_IMAGE_511.jpg', 'Une journée porte ouverte sera réalisée le samedi 29 juin 2024', '2024-06-29 00:00:00', '2024-06-25 11:46:16', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `filieres`
--

CREATE TABLE `filieres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `TITLE` varchar(255) NOT NULL,
  `CHEMIN_IMAGE` varchar(255) NOT NULL,
  `DESCRIPTION` longtext NOT NULL,
  `OBJECTIF` longtext NOT NULL,
  `REUSSITE` varchar(255) NOT NULL,
  `HORAIRE` int(11) NOT NULL,
  `RENTREE` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `filieres`
--

INSERT INTO `filieres` (`id`, `TITLE`, `CHEMIN_IMAGE`, `DESCRIPTION`, `OBJECTIF`, `REUSSITE`, `HORAIRE`, `RENTREE`, `created_at`, `updated_at`) VALUES
(1, 'Productions Animales', '990/A_IMAGE_598.jpg', 'Elevage de Porcs (Porciculture),Elevage de Lapins(Cuniculture),Elevage de poulet de chaire, Techniques d\'élevage des escargots, Elevage des Hannetons,Elevage de Mouches Soldas Noires(BSF)', 'Acquérir des connaissances pratiques sur les techniques de production agricole :', '90', 23, '2024-09-18 00:00:00', '2024-06-10 10:59:50', '2024-06-25 11:37:09'),
(3, 'Pisciculture', '144/A_IMAGE_683.jpg', 'Production des Alevins, Grossissement en Etang et Hors sol, Formulation d’aliment', 'L’objectif principal est de former des ingénieurs de terrain dans le domaine du génie électrique capables de concevoir, produire, innover, assurer la logistique d’un produit et mettre en œuvre les systèmes produisant ou utilisant l’énergie électrique.', '83', 180, '2025-04-09 00:00:00', '2024-06-10 12:22:37', '2024-06-25 11:36:44'),
(4, 'Productions Végétales', '739/A_IMAGE_400.jpg', 'Cultures Maraichères , Multiplication Végétative des Plants, Production des champignons comestibles (Myciculture) , Production des semences de champignons\r\ncomestibles', 'Public cible : Professionnels, salariés ou chercheurs d\'emploi, qui souhaitent acquérir de nouvelles connaissances et développer leurs compétences dans le secteur agropastoral, afin de dynamiser leur carrière professionnelle.', '178', 120, '2024-06-29 00:00:00', '2024-06-17 23:16:46', '2024-06-25 11:39:10'),
(5, 'Energies renouvelables', '922/A_IMAGE_844.jpg', 'Applications de l’Énergie Solaire Photovoltaïque dans\r\nla production agropastorale,Production du Biogaz à base des déchets\r\nagropastoraux', 'Applications de l’Énergie Solaire Photovoltaïque dans\r\nla production agropastorale,Production du Biogaz à base des déchets\r\nagropastoraux', '200', 120, '2024-07-08 00:00:00', '2024-06-25 11:41:37', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions`
--

CREATE TABLE `inscriptions` (
  `id` int(11) NOT NULL,
  `NOMS` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PHONE` int(11) NOT NULL,
  `NOM_FILIERE` varchar(100) NOT NULL,
  `SEXE` varchar(20) NOT NULL,
  `CREATION_DATE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `inscriptions`
--

INSERT INTO `inscriptions` (`id`, `NOMS`, `EMAIL`, `PHONE`, `NOM_FILIERE`, `SEXE`, `CREATION_DATE`) VALUES
(5, 'aaa', 'ngapoucheludger@gmail.com', 1234567890, '', '', 2024),
(6, 'zaa', 'ngapoucheludger@gmail.com', 1234567, 'Pisciculture', 'Masculin', 2024);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(100) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `MESSAGE` varchar(100) NOT NULL,
  `PHONE` varchar(100) NOT NULL,
  `CREATION_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `NAME`, `EMAIL`, `MESSAGE`, `PHONE`, `CREATION_DATE`) VALUES
(1, 'NGAPOUCHE', 'ngapouchludger@gmail.com', 'hello world', '697668683', '2024-06-16'),
(3, 'NGAPOUCHE', 'ngapoucheludger@gmail,.com', 'bonjour moi c\'est ngapouche ludger habitant a douala-yaounde j\'imerais avoir plus d\'information sur ', '697668683', '2024-06-16'),
(4, 'helo', 'helo', '			            sfdofsudfoiud                                    ', '697668683', '2024-06-16'),
(5, 'helo', 'helo', '			            sfdofsudfoiud                                    ', '697668683', '2024-06-16');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2024_05_09_231345_create_userlistes_table', 1),
(5, '2024_05_12_224421_add_age_to_userliste', 1),
(6, '2024_06_09_204552_create_evenements_table', 2),
(7, '2024_06_10_104921_create_filieres_table', 3),
(8, '2024_06_10_115756_filiere', 4),
(9, '2024_06_10_203212_create_partenaires_table', 5),
(10, '2024_06_19_104116_add_column_to_attachments_table', 6),
(11, '2024_06_24_230230_create_pg_formtions_table', 7);

-- --------------------------------------------------------

--
-- Structure de la table `partenaires`
--

CREATE TABLE `partenaires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `TITLE` varchar(255) NOT NULL,
  `CHEMIN_IMAGE` varchar(255) NOT NULL,
  `LINK` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `partenaires`
--

INSERT INTO `partenaires` (`id`, `TITLE`, `CHEMIN_IMAGE`, `LINK`, `created_at`, `updated_at`) VALUES
(2, 'ludgerlu', '488/A_IMAGE_833.ico', 'ludger.com', '2024-06-12 14:05:34', NULL),
(3, 'ISTAPA', '226/A_IMAGE_339.jpg', 'https://istapa.net/', '2024-06-17 14:56:23', '2024-06-17 15:05:24');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pg_formtions`
--

CREATE TABLE `pg_formtions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `TITLE` varchar(255) NOT NULL,
  `DESCRIPTION` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `temoignages`
--

CREATE TABLE `temoignages` (
  `TEMOIGNAGE_ID` varchar(100) NOT NULL DEFAULT '',
  `NAME` varchar(100) NOT NULL DEFAULT '',
  `FILIERE` varchar(100) NOT NULL,
  `TEMOIGNAGE` text NOT NULL,
  `IMAGE` varchar(100) NOT NULL DEFAULT '',
  `ACTIVE` enum('1','0') NOT NULL DEFAULT '1',
  `UPDATOR_ID` varchar(100) NOT NULL DEFAULT '',
  `UPDATOR_NAME` varchar(100) NOT NULL DEFAULT '',
  `LAST_UPDATE_DATE` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `CREATOR_ID` varchar(100) NOT NULL DEFAULT '',
  `CREATOR_NAME` varchar(100) NOT NULL DEFAULT '',
  `CREATION_DATE` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DELETED` enum('1','0') NOT NULL DEFAULT '0',
  `DELETOR_ID` varchar(100) NOT NULL DEFAULT '',
  `DELETOR_NAME` varchar(100) NOT NULL DEFAULT '',
  `DELETED_DATE` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `temoignages`
--

INSERT INTO `temoignages` (`TEMOIGNAGE_ID`, `NAME`, `FILIERE`, `TEMOIGNAGE`, `IMAGE`, `ACTIVE`, `UPDATOR_ID`, `UPDATOR_NAME`, `LAST_UPDATE_DATE`, `CREATOR_ID`, `CREATOR_NAME`, `CREATION_DATE`, `DELETED`, `DELETOR_ID`, `DELETOR_NAME`, `DELETED_DATE`) VALUES
('T20240524195600_442_913', 'test', 'test', 'test', '901/A_IMAGE_375.jpg', '1', '', '', '2024-05-24 19:56:00', '', '', '2024-05-24 19:56:00', '0', '', '', '2024-05-24 19:56:00'),
('T20240526192856_769_437', 'hello', 'piciculture', 'sdfghjkl;hh', '893/A_IMAGE_603.jpg', '1', '', '', '2024-05-26 19:28:56', '', '', '2024-05-26 19:28:56', '0', '', '', '2024-05-26 19:28:56'),
('T20240604184101_417_535', 'test', 'test', 'qwertyuio', '150/A_IMAGE_164.jpg', '1', '', '', '2024-06-04 18:41:01', '', '', '2024-06-04 18:41:01', '0', '', '', '2024-06-04 18:41:01');

-- --------------------------------------------------------

--
-- Structure de la table `userlistes`
--

CREATE TABLE `userlistes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `AGE` varchar(255) NOT NULL,
  `NUMBER` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `userlistes`
--

INSERT INTO `userlistes` (`id`, `NAME`, `EMAIL`, `password`, `AGE`, `NUMBER`, `created_at`, `updated_at`) VALUES
(1, 'ludger', 'admin', 'admin', '12', 697668683, '2024-06-16 23:09:55', '2024-06-17 14:48:55');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `USER_ID` varchar(100) NOT NULL,
  `USER_NAME` varchar(100) NOT NULL,
  `USER_EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `ACTIVE` enum('1','0') NOT NULL,
  `DELETE` enum('1','0') NOT NULL,
  `CREATION_DATE` date NOT NULL,
  `DELETE_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`USER_ID`, `USER_NAME`, `USER_EMAIL`, `PASSWORD`, `ACTIVE`, `DELETE`, `CREATION_DATE`, `DELETE_DATE`) VALUES
('US-1234567', 'admin', 'admin', 'admin', '1', '0', '0000-00-00', '0000-00-00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`ATTACHMENT_ID`);

--
-- Index pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `filieres`
--
ALTER TABLE `filieres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscriptions`
--
ALTER TABLE `inscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `partenaires`
--
ALTER TABLE `partenaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `pg_formtions`
--
ALTER TABLE `pg_formtions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `temoignages`
--
ALTER TABLE `temoignages`
  ADD PRIMARY KEY (`TEMOIGNAGE_ID`);
ALTER TABLE `temoignages` ADD FULLTEXT KEY `LIBELLE` (`NAME`);

--
-- Index pour la table `userlistes`
--
ALTER TABLE `userlistes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `evenements`
--
ALTER TABLE `evenements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `filieres`
--
ALTER TABLE `filieres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `inscriptions`
--
ALTER TABLE `inscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `partenaires`
--
ALTER TABLE `partenaires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pg_formtions`
--
ALTER TABLE `pg_formtions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `userlistes`
--
ALTER TABLE `userlistes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
