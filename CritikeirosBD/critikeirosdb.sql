-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Jun-2021 às 05:11
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `critikeirosdb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `critica`
--

CREATE TABLE `critica` (
  `id` int(11) NOT NULL,
  `resenha` text NOT NULL,
  `estrela` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(100) NOT NULL,
  `nome_usuario` varchar(256) NOT NULL,
  `nome_completo` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `token` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome_usuario`, `nome_completo`, `email`, `senha`, `token`) VALUES
(2, 'fulano', 'Fulano de tal', 'sanojpalhanos@gmail.com', '12345678', ''),
(3, 'asdas', 'asdas', 'asd@asdsa.com', 'qwertyui', ''),
(4, 'Ciclano12', 'Ciclano de tal', 'ciclano@gmail.com', '12345678', ''),
(5, 'Jonas Palhanos', 'Jonas Palhanos', 'jonaspalhanos@hotmail.com', '12345678', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `critica`
--
ALTER TABLE `critica`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `critica`
--
ALTER TABLE `critica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
