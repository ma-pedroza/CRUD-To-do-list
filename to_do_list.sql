-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/11/2024 às 00:53
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
-- Banco de dados: `to_do_list`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tarefas`
--

CREATE TABLE `tarefas` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `data_limite` date DEFAULT NULL,
  `status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tarefas`
--

INSERT INTO `tarefas` (`id`, `nome`, `descricao`, `data_limite`, `status`) VALUES
(14, 'Estudar POO em PHP', 'Revisar conceitos e praticar com exercícios', '2024-11-15', '1'),
(15, 'Desenvolver CRUD To-Do List', 'Completar projeto CRUD usando PHP e Bootstrap', '2024-11-20', '0'),
(17, 'Aprimorar Landing Page Elden Ring', 'Adicionar JavaScript básico para interatividade', '2024-11-12', '1'),
(18, 'Estudar SQL', 'Aprender comandos SQL para manipulação de dados', '2024-11-10', '1'),
(19, 'Melhorar barra de navegação', 'Ajustar alinhamento dos itens na <nav>', '2024-11-08', '2'),
(20, 'Finalizar Projeto de ADS', 'Trabalhar em grupo para desenvolver sistema de monitoramento de preços', '2024-12-01', '1'),
(21, 'Planejar tempo de estudo', 'Organizar cronograma de estudos para melhor concentração', '2024-11-09', '0'),
(22, 'Revisar Bootstrap', 'Familiarizar-se com as classes do Bootstrap', '2024-11-13', '1'),
(23, 'Buscar nome para empresa', 'Definir nome simples para empresa de terraplanagem', '2024-11-07', '0'),
(24, 'Trabalhar em Soft Skills', 'Realizar atividades para desenvolvimento pessoal', '2024-11-11', '1'),
(25, 'Estudo de Arquitetura de Microserviços', 'Revisar características, benefícios e desafios', '2024-11-18', '1'),
(26, 'Revisar design da landing page', 'Ajustar layout do projeto de landing page com GitHub', '2024-11-14', '0'),
(27, 'Aprender estrutura de dados', 'Melhorar concentração e estudo sobre estruturas de dados', '2024-11-17', '0'),
(28, 'Criar coluna pequena em Bootstrap', 'Aplicar configuração de colunas menores no projeto', '2024-11-12', '2'),
(29, 'Revisar projeto histórico de preços', 'Ajustar funcionalidades e revisar banco de dados', '2024-11-19', '1'),
(30, 'Estudar lógica de programação', 'Consolidar conceitos essenciais de lógica', '2024-11-22', '0'),
(31, 'Planejar férias para jogar Elden Ring', 'Definir melhor época e preparar para jogar', '2024-12-15', '0'),
(32, 'Praticar comandos Git', 'Aprimorar uso do Git para versionamento de projetos', '2024-11-25', '0');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tarefas`
--
ALTER TABLE `tarefas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tarefas`
--
ALTER TABLE `tarefas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
