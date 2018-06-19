-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18-Jun-2018 às 21:30
-- Versão do servidor: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simbora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `diasemana` varchar(100) NOT NULL,
  `horariosaida` time(6) NOT NULL,
  `horariovolta` time(6) NOT NULL,
  `destino` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `diasemana`, `horariosaida`, `horariovolta`, `destino`) VALUES
(1, 'Eduardo', 'R. Artep, 94-152 - Saramandaia', 'Quarta', '12:00:00.000000', '17:00:00.000000', 'Saramandaia, Igarassu - PE'),
(2, 'ee', 'R. Artep, 94-152 - Saramandaia', 'Quarta', '12:00:00.000000', '17:00:00.000000', 'Saramandaia, Igarassu - PE'),
(3, 'Eduarda', 'R. Almira Camelo de Andrade Almeida', 'Quinta', '12:00:00.000000', '17:00:00.000000', 'Restaurante E Pizzaria Braseiro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_horarios`
--

CREATE TABLE `tabela_horarios` (
  `id` int(11) NOT NULL,
  `hora_segunda` time NOT NULL,
  `hora_terca` time NOT NULL,
  `hora_quarta` time NOT NULL,
  `hora_quinta` time NOT NULL,
  `hora_sexta` time NOT NULL,
  `hora_sabado` time NOT NULL,
  `hora_domingo` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tabela_horarios`
--

INSERT INTO `tabela_horarios` (`id`, `hora_segunda`, `hora_terca`, `hora_quarta`, `hora_quinta`, `hora_sexta`, `hora_sabado`, `hora_domingo`) VALUES
(1, '10:00:00', '10:00:00', '10:00:00', '10:01:00', '10:00:00', '10:00:00', '10:00:00'),
(2, '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00'),
(3, '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00'),
(4, '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00'),
(5, '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00'),
(6, '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00'),
(7, '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00'),
(8, '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00'),
(9, '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00'),
(10, '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00'),
(11, '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00', '05:00:00'),
(12, '17:40:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(13, '17:40:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `login`, `senha`) VALUES
(1, 'Rhaiza', 'Aguiar', 'Rhai', '123'),
(2, 'Rhaiza', 'Aguiar', 'Rhai', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabela_horarios`
--
ALTER TABLE `tabela_horarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tabela_horarios`
--
ALTER TABLE `tabela_horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
