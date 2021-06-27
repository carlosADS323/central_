-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 27-Jun-2021 às 04:47
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `central`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `razao_social` varchar(50) NOT NULL,
  `cnpj` varchar(19) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `rua` varchar(150) NOT NULL,
  `num` varchar(6) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `contato` varchar(30) NOT NULL,
  `tel_contato` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `data_nasc` date NOT NULL,
  `sexo` varchar(9) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `tel2` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `num` varchar(6) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `cidade` varchar(150) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `estado_civil` varchar(15) NOT NULL,
  `escolaridade` varchar(30) NOT NULL,
  `profissao` varchar(100) NOT NULL,
  `senha` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `data_nasc`, `sexo`, `tel`, `tel2`, `email`, `rua`, `num`, `bairro`, `cidade`, `estado`, `estado_civil`, `escolaridade`, `profissao`, `senha`) VALUES
(1, 'Daniel Coelho do Nascimento', '22370226315', '2021-06-18', 'Masculino', '6932295874', '6932295874', 'danielcoelho461@gmail.com', 'n', '21', 'tiradentes', 'Juazeiro do Norte', 'CE', 'Casado(a)', 'Superior Incompleto', 'tecnico em redes', '123456'),
(2, 'Cicera Camila dos Santos Nogueira', '22370226315', '2015-02-05', 'Masculino', '88997853576', '6932295874', 'milasantosnogueira27@gmail.com', 'n', '222', 'tiradentes', 'Juazeiro do Norte', 'CE', 'Solteiro(a)', 'Superior Completo', 'tecnico em redes', '321654'),
(3, 'Carlos jader da silva oliveira', '62099892334', '2021-06-10', 'Masculino', '88988420622', '6932295874', 'jaderoliveiraa@gmail.com', 'tres', '222', 'tiradentes', 'Juazeiro do Norte', 'CE', 'Casado(a)', 'Superior Completo', 'tecnico em redes', '21548721');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas`
--

CREATE TABLE `vagas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `descricao` varchar(400) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `empresa` int(11) NOT NULL,
  `validade` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vagas`
--

INSERT INTO `vagas` (`id`, `titulo`, `descricao`, `data_cadastro`, `empresa`, `validade`, `status`) VALUES
(201, 'Desenvolvedor Php', 'Desenvolvedor fullstack Php', '2021-06-24 01:07:15', 1, '2021-06-30', 1),
(202, 'Desenvolvedor Java', 'Habilidades com Linguagem Java e banco de dados mysql', '2021-06-24 23:04:21', 1, '2021-06-30', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vagas`
--
ALTER TABLE `vagas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `vagas`
--
ALTER TABLE `vagas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
