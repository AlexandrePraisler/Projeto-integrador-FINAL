-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/07/2024 às 02:01
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tst`
--

CREATE TABLE `tst` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `LinkedIn` varchar(255) NOT NULL,
  `senioridade` varchar(255) NOT NULL,
  `norma1` varchar(5) DEFAULT NULL,
  `norma2` varchar(5) DEFAULT NULL,
  `norma3` varchar(5) DEFAULT NULL,
  `norma4` varchar(5) DEFAULT NULL,
  `norma5` varchar(5) DEFAULT NULL,
  `norma6` varchar(5) DEFAULT NULL,
  `norma7` varchar(5) DEFAULT NULL,
  `experiencia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tst`
--

INSERT INTO `tst` (`id`, `nome`, `sobrenome`, `email`, `LinkedIn`, `senioridade`, `norma1`, `norma2`, `norma3`, `norma4`, `norma5`, `norma6`, `norma7`, `experiencia`) VALUES
(12, 'matheus', 'santos', 'teste@etste', 'eeee', 'Junior', '', 'nr10', '', '', '', '', '', 'teste'),
(13, 'maria', 'madalena', 'email@email.com.br', 'perfillinkedin aqui', 'Sênior', 'nr06', 'nr10', 'nr12', '', '', '', '', 'expe aqui'),
(14, 'josé ', 'da silva', 'email@email.com.br', 'perfillinkedin aqui', 'Pleno', 'nr06', 'nr10', '', '', '', '', '', ''),
(41, 'ronaldo', 'viola', 'test@testes', 'test@testes', 'Junior', 'nr06', NULL, NULL, NULL, NULL, NULL, NULL, 'ola\r\n'),
(42, 'joaquim', 'pereira', 'test@testes', 'test@testes', 'Junior', '', '', '', '', '', '', '', 'novo');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tst`
--
ALTER TABLE `tst`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tst`
--
ALTER TABLE `tst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
