-- phpMyAdmin SQL Dump
-- version 3.3.2deb1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Mar 17 Avril 2012 à 16:32
-- Version du serveur: 5.1.41
-- Version de PHP: 5.3.2-1ubuntu4.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `base_cms86`
--

-- --------------------------------------------------------

--
-- Structure de la table `cms_authorisations`
--

CREATE TABLE IF NOT EXISTS `cms_authorisations` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Contenu de la table `cms_authorisations`
--


-- --------------------------------------------------------

--
-- Structure de la table `cms_groups`
--

CREATE TABLE IF NOT EXISTS `cms_groups` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `published` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Contenu de la table `cms_groups`
--


-- --------------------------------------------------------

--
-- Structure de la table `cms_sessions`
--

CREATE TABLE IF NOT EXISTS `cms_sessions` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `cms_sessions`
--

INSERT INTO `cms_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('ea48fcec123a9d335dec518b4b3fb652', '192.168.1.41', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:11.0) Gecko/20100101 Firefox/11.0', 1334671071, 'a:3:{s:4:"user";a:17:{s:2:"id";i:1;s:8:"username";s:5:"admin";s:9:"firstname";s:0:"";s:8:"lastname";s:0:"";s:5:"email";s:0:"";s:5:"phone";s:0:"";s:8:"birthday";s:0:"";s:7:"address";s:0:"";s:3:"zip";s:0:"";s:4:"city";s:0:"";s:7:"country";s:1:"0";s:5:"state";s:1:"0";s:7:"created";s:0:"";s:7:"updated";s:0:"";s:9:"activated";s:1:"1";s:6:"banned";s:1:"0";s:6:"reason";s:0:"";}s:8:"loggedin";b:1;s:8:"messages";a:1:{s:7:"success";a:1:{i:0;s:52:"{"success":true,"message":"You are now logged in !"}";}}}');

-- --------------------------------------------------------

--
-- Structure de la table `cms_users`
--

CREATE TABLE IF NOT EXISTS `cms_users` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `created` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `activated` tinyint(1) NOT NULL,
  `banned` tinyint(1) NOT NULL,
  `reason` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `cms_users`
--

INSERT INTO `cms_users` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `phone`, `birthday`, `address`, `zip`, `city`, `country`, `state`, `created`, `updated`, `activated`, `banned`, `reason`) VALUES
(1, 'admin', '$2a$08$ZRIzoIMmTpyptgsupI0mtOBcj2UQUpi4K30hlSBXJHW2Ws6unNf7W', '', '', '', '', '', '', '', '', 0, 0, '', '', 1, 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `cms_users_autologin`
--

CREATE TABLE IF NOT EXISTS `cms_users_autologin` (
  `user` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  `used` int(15) NOT NULL,
  `ip` varchar(40) NOT NULL,
  PRIMARY KEY (`user`,`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `cms_users_autologin`
--


-- --------------------------------------------------------

--
-- Structure de la table `cms_versionings`
--

CREATE TABLE IF NOT EXISTS `cms_versionings` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateversion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `values` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Contenu de la table `cms_versionings`
--

