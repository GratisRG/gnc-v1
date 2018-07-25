-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 25 juil. 2018 à 08:59
-- Version du serveur :  10.1.34-MariaDB
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gnc_db`
--

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
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2018_07_19_101647_create_secretcodes_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `secretcodes`
--

CREATE TABLE `secretcodes` (
  `id` int(10) UNSIGNED NOT NULL,
  `uicode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sup_admin_id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `secretcodes`
--

INSERT INTO `secretcodes` (`id`, `uicode`, `hashcode`, `sup_admin_id`, `active`, `created_at`, `updated_at`) VALUES
(1, '5b50ae431f5639.14455641', '$2y$10$WTNAmu8E39awl8VZ57NAPeYmnhZKkS0ggpzo/RVFIUi/VsamXDx5W', 1, 1, '2018-07-19 14:29:07', '2018-07-19 14:29:07'),
(2, '5b50ae436eee62.52133535', '$2y$10$S.lrWf4/9Rf6hz8bPhi4ruIw4Q/WPMIzthks8MM5ZqKwq1osWCISG', 1, 0, '2018-07-19 14:29:07', '2018-07-19 14:29:07'),
(3, '5b50ae43acb3c0.58344185', '$2y$10$bK7tmcCukyVLVq9JEwvh2.cBvlnel4P9JWs3n7Rnbml9CloUvvkhK', 1, 0, '2018-07-19 14:29:07', '2018-07-19 14:29:07'),
(4, '5b50dd6439f802.65855570', '$2y$10$kpQ/aSaWEHiRBviT9eSVwOetEH0L10wdDHo8SfwhwOE0OTE7QY.W2', 2, 0, '2018-07-19 17:50:12', '2018-07-19 17:50:12'),
(5, '5b50dd647490e4.19664736', '$2y$10$6pcpTAmRGwZlr6mJbrQuBexQKdVbA/9qAqoC4JokR5ZFmO024.G2W', 2, 0, '2018-07-19 17:50:12', '2018-07-19 17:50:12'),
(6, '5b50dd64aa8629.17878281', '$2y$10$H/gHcO9MvjN7CcuZ3yKBUuquwyDYPiiFO10AdNjWMjvfK7XrqpTlO', 2, 0, '2018-07-19 17:50:12', '2018-07-19 17:50:12'),
(7, '5b50dd64db5ae1.09085765', '$2y$10$EAgsyw4H3k95ZDIrgCOb0.5vrgB7lTV4b42Y/uf/wttX7xbTXVxB2', 2, 0, '2018-07-19 17:50:13', '2018-07-19 17:50:13'),
(8, '5b50dd651d6aa3.30580035', '$2y$10$iX.QWFw5RCXsGIUWMLAUfuq.J9x7vrbKto71PXjMb6A0P6whZ1SNK', 2, 0, '2018-07-19 17:50:13', '2018-07-19 17:50:13'),
(9, '5b50dd65564e05.37565065', '$2y$10$jeii3Kz078MbURPucqb7AO/w/oc52Z9h05yj4Ro4ugtQ5RO3eZA.u', 2, 0, '2018-07-19 17:50:13', '2018-07-19 17:50:13'),
(10, '5b50dd65925de1.41222125', '$2y$10$axzDAzP.lRKmULBIU.SuqONO0sVo4/xM/yRZ.oSmlaRPPpNLgjB5a', 2, 0, '2018-07-19 17:50:13', '2018-07-19 17:50:13'),
(11, '5b50dd65c814a4.13170208', '$2y$10$QU.qFqXNRM8Tn.27EpwdOOQAgAyD6WxbDuH/5W8QQ7ciBcVB6OY0K', 2, 0, '2018-07-19 17:50:13', '2018-07-19 17:50:13'),
(12, '5b50dd6602d154.12119106', '$2y$10$FOYLNzy/Tcv81Y4IltggEODgJdQ6lBXjb5Nm2tih3oAoTI9zcqT8y', 2, 0, '2018-07-19 17:50:14', '2018-07-19 17:50:14'),
(13, '5b50dd66390523.54877699', '$2y$10$COJZ.IJn7067JSO32F5pCOYVoiMfv2d7ur/6zlKCBd4G9IaLkqnWK', 2, 0, '2018-07-19 17:50:14', '2018-07-19 17:50:14');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pseudo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_parrain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_activation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position_parrain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_level_codes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '!',
  `type_fieuil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DIRECT',
  `sup_admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `user_code`, `name`, `surname`, `pseudo`, `code_parrain`, `code_activation`, `telephone`, `email`, `password`, `position_parrain`, `last_level_codes`, `type_fieuil`, `sup_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '5b50ce8932847', 'René', 'GOSSA', 'GOSSRE', 'TTTTTTTTTTTTTT', '5b50ae431f5639.14455641', '0681507285', 'gossa.rene@gmail.com', '$2y$10$0O.BuVn6hO5fc.di8IsioueCQd1sKhDa49/eJwkFoGlBhbpbb5Nlu', 'LEFT', '!', 'DIRECT', 0, 'h7Y3SXO5yfbX8yGJ3TJxxQvhH00iTcu1pGClm9rvARQthu7DfjGC4yeTcP7G', '2018-07-19 16:46:49', '2018-07-19 16:46:49'),
(2, '5b50dcba3c7a5', 'Anne', 'GOSSA', 'annego', '5b50ce8932847', '5b50ae436eee62.52133535', '+22995162548', 'gossa.anne@gmail.com', '$2y$10$FaygO/iabnFwYXnpSoPz/efnJt95MZnrqWqm0wKMVOKdoD9oKoQvm', 'LEFT', '!', 'DIRECT', 0, NULL, '2018-07-19 17:47:22', '2018-07-19 17:47:22');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `secretcodes`
--
ALTER TABLE `secretcodes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `secretcodes_uicode_unique` (`uicode`),
  ADD UNIQUE KEY `secretcodes_hashcode_unique` (`hashcode`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_code_unique` (`user_code`),
  ADD UNIQUE KEY `users_pseudo_unique` (`pseudo`),
  ADD UNIQUE KEY `users_code_activation_unique` (`code_activation`),
  ADD UNIQUE KEY `users_telephone_unique` (`telephone`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `secretcodes`
--
ALTER TABLE `secretcodes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
