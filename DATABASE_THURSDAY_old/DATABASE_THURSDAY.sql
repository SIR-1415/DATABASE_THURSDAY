-- phpMyAdmin SQL Dump
-- version 3.2.5
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 23-Dez-2014 às 14:56
-- Versão do servidor: 5.1.44
-- versão do PHP: 5.3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `userssir`
--
DROP DATABASE `userssir`;
CREATE DATABASE `userssir` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `userssir`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `username` varchar(10) NOT NULL,
  `Fname` varchar(25) NOT NULL,
  `Lname` varchar(25) NOT NULL,
  `pass` char(32) NOT NULL,
  `phone` text NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` VALUES('pmoreira', 'Pedro', 'Moreira', '1a1dc91c907325c69271ddf0c944bc72', '999999999');
INSERT INTO `users` VALUES('pmoreira2', 'Paulo', 'Moreira', '1a1dc91c907325c69271ddf0c944bc72', '');
INSERT INTO `users` VALUES('pmoreira3', 'Pauleta', 'Moreira', '1a1dc91c907325c69271ddf0c944bc72', '');
