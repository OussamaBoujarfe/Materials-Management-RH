-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 18 juin 2018 à 04:21
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `manager`
--

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

CREATE TABLE `employes` (
  `id` int(10) UNSIGNED NOT NULL,
  `matricule` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomc` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fonction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`id`, `matricule`, `nomc`, `departement`, `fonction`, `etat`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'M1', 'Dahir Mohammed', 'FS-Approvisionement et Achats', 'réparation', 'active', '2018-05-31 22:19:40', '2018-06-17 23:18:24', NULL),
(2, 'M2', 'Morchidi Hicham', 'Service général', 'maintenance', 'active', '2018-05-31 22:36:34', '2018-05-31 22:36:34', NULL),
(3, 'M3', 'Boufriss Ayoub', 'Service général', 'Management', 'active', '2018-05-31 22:36:55', '2018-05-31 22:36:55', NULL),
(4, 'M4', 'Boudoh Mohamed', 'FS-Finance et Administration', 'Comptabilité', 'active', '2018-05-31 22:37:28', '2018-05-31 22:37:28', NULL),
(5, 'M5', 'Dordor Fahd', 'OP-Serre QBM', 'Préparation', 'active', '2018-05-31 22:51:21', '2018-05-31 22:51:21', NULL),
(6, 'M6', 'Bouziit Samir', 'OP-Serre Producteur', 'Agent D', 'active', '2018-05-31 22:53:01', '2018-05-31 22:53:01', NULL),
(7, 'M7', 'Gandor Manal', 'FS-RH FERMES', 'Surveilance', 'active', '2018-05-31 22:53:47', '2018-05-31 22:53:47', NULL),
(8, 'M8', 'Boujarda Brahim', 'FS-Qualité', 'Directeur RH', 'active', '2018-05-31 22:57:00', '2018-05-31 22:57:00', NULL),
(9, 'M9', 'Ouarzii Kawtar', 'FS-Finance et Administration', 'Validation', 'active', '2018-05-31 22:57:38', '2018-05-31 22:57:38', NULL),
(10, 'M10', 'Boulmrs Yassine', 'FS-Système d\'information', 'Manager IT', 'active', '2018-05-31 22:58:16', '2018-05-31 22:58:16', NULL),
(11, 'M11', 'Boufoss Hassan', 'FS-Qualité', 'Attribution', 'inactive', '2018-05-31 22:59:09', '2018-05-31 22:59:09', NULL),
(12, 'M12', 'Daghir Mohammed', 'FS-Approvisionement et Achats', 'Enterpreneur', 'active', '2018-05-31 23:02:11', '2018-05-31 23:02:27', NULL),
(13, 'M13', 'Elfarjani Adil', 'FS-RH STATION', 'Founder', 'active', '2018-05-31 23:03:20', '2018-05-31 23:03:20', NULL),
(14, 'M14', 'Idtalb Youssef', 'OP-Plein champs Sud', 'Financement', 'active', '2018-05-31 23:03:55', '2018-05-31 23:03:55', NULL),
(15, 'M15', 'Serrakh Salah', 'FS-RH FERMES', 'Developpeur', 'active', '2018-05-31 23:06:18', '2018-05-31 23:06:18', NULL),
(16, 'M16', 'Afouchal Ayoub', 'FS-Approvisionement et Achats', 'Developpeur WEB', 'active', '2018-05-31 23:11:32', '2018-05-31 23:11:32', NULL),
(17, 'M17', 'Gomri Omar', 'FS-Approvisionement et Achats', 'Assistant', 'active', '2018-05-31 23:25:46', '2018-05-31 23:25:46', NULL),
(18, 'M18', 'Dahir Ahmed', 'FS-RH STATION', 'Chef Comptable', 'active', '2018-05-31 23:26:47', '2018-05-31 23:26:47', NULL),
(19, 'M19', 'Qssimi Naim', 'FS-Système d\'information', 'Formateur', 'active', '2018-05-31 23:27:48', '2018-05-31 23:27:48', NULL),
(20, 'M20', 'Klooom khadija', 'FS-RH FERMES', 'Agent Qualité', 'inactive', '2018-05-31 23:28:57', '2018-05-31 23:28:57', NULL),
(21, 'M21', 'Boffoss  Ayoub', 'FS-Système d\'information', 'Deseigneur', 'active', '2018-05-31 23:29:31', '2018-05-31 23:29:31', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `materiels`
--

CREATE TABLE `materiels` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `nomc` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nserie` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fabriquant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `modele` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matricule` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `materiels`
--

INSERT INTO `materiels` (`id`, `user_id`, `nomc`, `Nserie`, `type`, `fabriquant`, `created_at`, `updated_at`, `modele`, `matricule`, `deleted_at`) VALUES
(1, 1, 'Dahir Mohammed', '358406084338505', 'TELEPHONE', 'SAMSUNG', '2018-05-31 22:30:00', '2018-05-31 22:30:00', 'LATITUDE E6410', 'M1', NULL),
(2, 1, 'Morchidi Hicham', '3584060843a', 'TABLETTE', 'SAMSUNG', '2018-05-31 23:34:00', '2018-05-31 23:34:00', 'sdgvsdgb', 'M2', NULL),
(3, 1, 'Dahir Mohammed', 'sddfqfgetgrhqzrg', 'TELEPHONE', 'PHILIPS', '2018-05-31 23:34:22', '2018-05-31 23:34:22', 'qzfqzefef', 'M1', NULL),
(4, 1, 'Boufriss Ayoub', 'fzefzagqzf', 'ORDINATEUR PORTABLE', 'TOSHIBA', '2018-05-31 23:34:43', '2018-05-31 23:34:43', 'qzDAZFA', 'M3', NULL),
(5, 1, 'Boudoh Mohamed', 'SDBS<DFBD', 'ORDINATEUR PORTABLE', 'ACER', '2018-05-31 23:35:08', '2018-05-31 23:35:08', 'DFDFD', 'M4', NULL),
(6, 1, 'Dordor Fahd', 'VCVBCVCBCV', 'TELEPHONE', 'HUAWEI', '2018-05-31 23:35:25', '2018-05-31 23:35:25', 'CVCCCBCV', 'M5', NULL),
(7, 1, 'Bouziit Samir', 'VBCVBCBVC', 'TELEPHONE', 'LG', '2018-05-31 23:35:56', '2018-05-31 23:35:56', 'CVVBCVBC', 'M6', NULL),
(8, 1, 'Gandor Manal', 'DFGDFDG', 'TELEPHONE', 'HTC', '2018-05-31 23:36:29', '2018-05-31 23:36:29', 'FDFDGDDF', 'M7', NULL),
(9, 1, 'Boujarda Brahim', 'FDFGFGDFG', 'TELEPHONE', 'OPPO', '2018-05-31 23:36:49', '2018-05-31 23:36:49', 'QSDFQF', 'M8', NULL),
(10, 1, 'Ouarzii Kawtar', 'GHFGHFGFDD', 'TELEPHONE', 'IPHONE Apple', '2018-05-31 23:37:13', '2018-05-31 23:37:13', 'GHHFDS', 'M9', NULL),
(11, 1, 'Boulmrs Yassine', 'FGHFHDFFD', 'TELEPHONE', 'LENOVO', '2018-05-31 23:37:36', '2018-05-31 23:37:36', 'FHXDFND', 'M10', NULL),
(12, 1, 'Boufoss Hassan', 'FGHFHDDFS', 'TELEPHONE', 'DELL', '2018-05-31 23:37:59', '2018-05-31 23:37:59', 'HRSSSDTE', 'M11', NULL),
(13, 1, 'Daghir Mohammed', '3584060843D', 'ORDINATEUR PORTABLE', 'SAMSUNG', '2018-05-31 23:39:30', '2018-05-31 23:39:30', 'DFSDGDG', 'M12', NULL),
(14, 1, 'Elfarjani Adil', 'SDFSDFSFD', 'TELEPHONE', 'WINDOWSPhone', '2018-05-31 23:39:51', '2018-05-31 23:39:51', 'SDFSDFS', 'M13', NULL),
(15, 1, 'Idtalb Youssef', 'GFFGGFGFG', 'TELEPHONE', 'ASUS', '2018-05-31 23:40:15', '2018-05-31 23:40:15', 'FGFGFGGGF', 'M14', NULL),
(16, 1, 'Serrakh Salah', 'FGFGDFGSSFB', 'TELEPHONE', 'MOTOROLA', '2018-05-31 23:40:39', '2018-05-31 23:40:39', 'DFDFFF', 'M15', NULL),
(17, 1, 'Afouchal Ayoub', 'VCCVCVCVCV', 'TELEPHONE', 'LG', '2018-05-31 23:41:04', '2018-05-31 23:41:04', 'CVVCVCVCV', 'M16', NULL),
(18, 1, 'Gomri Omar', 'VCVCVCCV', 'TELEPHONE', 'NOKIA', '2018-05-31 23:41:29', '2018-05-31 23:41:29', 'CVCVCVCV', 'M17', NULL),
(19, 1, 'Dahir Ahmed', 'VCCCCCV', 'TELEPHONE', 'INFINIX', '2018-05-31 23:41:52', '2018-05-31 23:41:52', 'CVVCCVCC', 'M18', NULL),
(20, 1, 'Qssimi Naim', 'GFGHGJ', 'TELEPHONE', 'LENOVO', '2018-05-31 23:42:14', '2018-05-31 23:42:14', 'FGHDFGGDG', 'M19', NULL),
(21, 1, 'Klooom khadija', 'DSDFDSG', 'Telephone', 'SAMSUNG', '2018-05-31 23:42:39', '2018-05-31 23:49:17', 'DFHSDFH', 'M20', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2018_05_11_220255_create_materiels_table', 2),
(5, '2018_05_11_233736_add_modele_to_materiels', 3),
(6, '2018_05_13_134040_create_employes_table', 4),
(7, '2018_05_13_161744_add_matricule_to_materiel', 5),
(8, '2018_05_15_105838_add_username_to_users', 6),
(9, '2018_05_15_143031_create_stocks_table', 7),
(10, '2018_05_15_170818_add_deletedAt_to_users', 8),
(12, '2018_05_15_173859_add_deletedAt_to_employes', 9),
(13, '2018_05_16_144807_create_stocks_table', 10),
(14, '2018_05_17_094745_add_fabriquant_to_stocks', 11),
(15, '2018_05_17_103900_add_deletedAt_to_stocks', 12),
(16, '2018_05_24_104330_add_user_id_to_materiel', 13),
(17, '2018_05_25_184818_add_name_to_materiel', 14);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('workoutathlete@gmail.com', '$2y$10$82s1qUmsdGMJlbvzATlmN.D5wFHRHJq2doi8DsaZNuXEBPTRwp/Hu', '2018-05-14 13:33:25');

-- --------------------------------------------------------

--
-- Structure de la table `stocks`
--

CREATE TABLE `stocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modele` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateE` date NOT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fabriquant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `stocks`
--

INSERT INTO `stocks` (`id`, `type`, `serie`, `modele`, `dateE`, `source`, `created_at`, `updated_at`, `fabriquant`, `deleted_at`) VALUES
(1, 'TELEPHONE', '1553445121234', 'J5 2016', '2018-06-06', 'QBM', '2018-06-07 11:19:06', '2018-06-16 23:23:22', 'SAMSUNG', '2018-06-17 00:00:00'),
(3, 'ORDINATEUR PORTABLE', 'fffffffffffff', 'hfghgg', '2018-06-14', 'fegzqg', '2018-06-16 23:33:52', '2018-06-16 23:35:19', 'SAMSUNG', '2018-06-17 00:00:00'),
(4, 'ORDINATEUR PORTABLE', 'ddddddddddddddd', 'azazaz', '2018-06-04', 'dsq', '2018-06-16 23:48:16', '2018-06-17 20:33:42', 'SAMSUNG', '2018-06-17 22:33:42'),
(5, 'TELEPHONE', 'e45135645564564', 'X6 12', '2018-06-12', 'GOFAL', '2018-06-17 23:51:34', '2018-06-17 23:52:02', 'ALCATEL', '2018-06-18 01:52:02');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `username`) VALUES
(1, 'Othman Obreik', 'o.oubreik@qualitybean.ma', '$2y$10$/k3Ggb7oiCENbnbcV.xr9uFdKz.BdORTrX1CQCZXNK9NhU5mw6V5K', 'MiDXFCKZCC3fOcll9mQBEqVd4Kozloa1mUKcg9gkMrcoy834SYA9m6j6ozxl', '2018-05-24 22:47:15', '2018-05-24 22:47:15', 'othmanQBM');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matricule` (`matricule`),
  ADD UNIQUE KEY `nomc` (`nomc`);

--
-- Index pour la table `materiels`
--
ALTER TABLE `materiels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Nserie` (`Nserie`),
  ADD KEY `materiels_user_id_foreign` (`user_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `employes`
--
ALTER TABLE `employes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `materiels`
--
ALTER TABLE `materiels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `materiels`
--
ALTER TABLE `materiels`
  ADD CONSTRAINT `materiels_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
