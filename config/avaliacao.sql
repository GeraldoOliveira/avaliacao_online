-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26-Nov-2016 às 18:07
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avaliacao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunoavaliacao`
--

CREATE TABLE `alunoavaliacao` (
  `aluno_alunoavaliacao` varchar(11) NOT NULL,
  `avaliacao_alunoavaliacao` int(9) NOT NULL,
  `nota_alunoavaliacao` float NOT NULL DEFAULT '0',
  `status_alunoavaliacao` varchar(14) NOT NULL DEFAULT 'Não Respondida'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunoturma`
--

CREATE TABLE `alunoturma` (
  `turma_alunoturma` int(9) NOT NULL,
  `aluno_alunoturma` varchar(11) NOT NULL,
  `nota_alunoturma` float NOT NULL DEFAULT '0',
  `qtde_avaliacao_repondida_alunoturma` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao`
--

CREATE TABLE `avaliacao` (
  `codigo_avaliacao` int(9) NOT NULL,
  `turma_avaliacao` int(9) NOT NULL,
  `qtde_questao_avaliacao` int(2) NOT NULL DEFAULT '0',
  `status_avaliacao` varchar(9) NOT NULL DEFAULT 'Aberta'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `codigo_disciplina` varchar(6) NOT NULL,
  `nome_disciplina` varchar(100) NOT NULL,
  `descricao_disciplina` text NOT NULL,
  `status_disciplina` varchar(7) NOT NULL DEFAULT 'Aberta'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`codigo_disciplina`, `nome_disciplina`, `descricao_disciplina`, `status_disciplina`) VALUES
('COM111', 'Redes', 'Disciplina de redes', 'Aberta'),
('COM222', 'Programamção', 'Disciplina de progamação', 'Aberta'),
('COM333', 'Banco de Dados', 'Disciplina de banco de dados', 'Aberta'),
('SIN111', 'Empreendedorismo', 'Disciplina de empreendedorismo', 'Aberta'),
('SIN222', 'Administração', 'Administração', 'Aberta'),
('SIN333', 'Metodologia científica', 'Disciplina de metodologia científica', 'Aberta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `questao`
--

CREATE TABLE `questao` (
  `codigo_questao` int(9) NOT NULL,
  `disciplina_questao` varchar(6) NOT NULL,
  `enunciado_questao` text NOT NULL,
  `alternativa1_questao` text NOT NULL,
  `alternativa2_questao` text NOT NULL,
  `alternativa3_questao` text NOT NULL,
  `alternativa4_questao` text NOT NULL,
  `resposta_questao` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `resposta`
--

CREATE TABLE `resposta` (
  `aluno_resposta` varchar(11) NOT NULL,
  `avaliacao_resposta` int(9) NOT NULL,
  `questao_resposta` int(9) NOT NULL,
  `alternativa_resposta` char(1) NOT NULL,
  `status_resposta` varchar(7) NOT NULL DEFAULT 'Errou'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `codigo_turma` int(9) NOT NULL,
  `disciplina_turma` varchar(6) NOT NULL,
  `ano_turma` int(4) NOT NULL,
  `periodo_turma` int(1) NOT NULL,
  `vagas_turma` int(2) NOT NULL,
  `professor_turma` varchar(11) NOT NULL,
  `qtde_avaliacao_turma` int(2) NOT NULL DEFAULT '0',
  `status_turma` varchar(10) NOT NULL DEFAULT 'Aberta'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`codigo_turma`, `disciplina_turma`, `ano_turma`, `periodo_turma`, `vagas_turma`, `professor_turma`, `qtde_avaliacao_turma`, `status_turma`) VALUES
(1, 'COM111', 2016, 1, 50, '44444444444', 0, 'Aberta'),
(2, 'COM222', 2016, 2, 50, '44444444444', 0, 'Aberta'),
(3, 'SIN333', 2017, 1, 50, '11111111111', 0, 'Aberta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cpf_usuario` varchar(11) NOT NULL,
  `tipo_usuario` varchar(13) NOT NULL,
  `nome_usuario` varchar(100) NOT NULL,
  `email_usuario` varchar(100) NOT NULL,
  `senha_usuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cpf_usuario`, `tipo_usuario`, `nome_usuario`, `email_usuario`, `senha_usuario`) VALUES
('11111111111', 'Administrador', 'Laércio Baldochi', 'baldochi@unifei.edu.br', 'a'),
('11111111111', 'Professor', 'Laércio Baldochi', 'baldochi@unifei.edu.br', 'a'),
('22222222222', 'Aluno', 'Éderson Carlos Rodrigues', 'ederson@unifei.edu.br', 'a'),
('33333333333', 'Aluno', 'Geraldo V. Oliveira Neto', 'geraldo@unifei.edu.br', 'a'),
('44444444444', 'Aluno', 'Augusto José A. Rosa', 'augusto@unifei.edu.br', 'a'),
('44444444444', 'Professor', 'Augusto José A. Rosa', 'augusto@unifei.edu.br', 'a'),
('55555555555', 'Aluno', 'Ana Maria Braga', 'ana.maria@unifei.edu.br', 'a'),
('66666666666', 'Aluno', 'Isabel Andrade', 'isabel@unifei.edu.br', 'a'),
('77777777777', 'Aluno', 'Thais Braga', 'thais@unifei.edu.br', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alunoavaliacao`
--
ALTER TABLE `alunoavaliacao`
  ADD PRIMARY KEY (`avaliacao_alunoavaliacao`,`aluno_alunoavaliacao`),
  ADD KEY `aluno_alunoavaliacao` (`aluno_alunoavaliacao`);

--
-- Indexes for table `alunoturma`
--
ALTER TABLE `alunoturma`
  ADD PRIMARY KEY (`turma_alunoturma`,`aluno_alunoturma`),
  ADD KEY `aluno_alunoturma` (`aluno_alunoturma`);

--
-- Indexes for table `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD PRIMARY KEY (`codigo_avaliacao`),
  ADD KEY `turma_avaliacao` (`turma_avaliacao`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`codigo_disciplina`);

--
-- Indexes for table `questao`
--
ALTER TABLE `questao`
  ADD PRIMARY KEY (`codigo_questao`),
  ADD KEY `disciplina_questao` (`disciplina_questao`);

--
-- Indexes for table `resposta`
--
ALTER TABLE `resposta`
  ADD PRIMARY KEY (`aluno_resposta`,`avaliacao_resposta`,`questao_resposta`),
  ADD KEY `avaliacao_resposta` (`avaliacao_resposta`),
  ADD KEY `questao_resposta` (`questao_resposta`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`codigo_turma`),
  ADD KEY `turma_ibfk_1` (`disciplina_turma`),
  ADD KEY `turma_ibfk_2` (`professor_turma`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cpf_usuario`,`tipo_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avaliacao`
--
ALTER TABLE `avaliacao`
  MODIFY `codigo_avaliacao` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `questao`
--
ALTER TABLE `questao`
  MODIFY `codigo_questao` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `codigo_turma` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `alunoavaliacao`
--
ALTER TABLE `alunoavaliacao`
  ADD CONSTRAINT `alunoavaliacao_ibfk_1` FOREIGN KEY (`avaliacao_alunoavaliacao`) REFERENCES `avaliacao` (`codigo_avaliacao`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alunoavaliacao_ibfk_2` FOREIGN KEY (`aluno_alunoavaliacao`) REFERENCES `usuario` (`cpf_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `alunoturma`
--
ALTER TABLE `alunoturma`
  ADD CONSTRAINT `alunoturma_ibfk_1` FOREIGN KEY (`turma_alunoturma`) REFERENCES `turma` (`codigo_turma`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alunoturma_ibfk_2` FOREIGN KEY (`aluno_alunoturma`) REFERENCES `usuario` (`cpf_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD CONSTRAINT `avaliacao_ibfk_1` FOREIGN KEY (`turma_avaliacao`) REFERENCES `turma` (`codigo_turma`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `questao`
--
ALTER TABLE `questao`
  ADD CONSTRAINT `questao_ibfk_1` FOREIGN KEY (`disciplina_questao`) REFERENCES `disciplina` (`codigo_disciplina`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `resposta`
--
ALTER TABLE `resposta`
  ADD CONSTRAINT `resposta_ibfk_1` FOREIGN KEY (`aluno_resposta`) REFERENCES `usuario` (`cpf_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resposta_ibfk_2` FOREIGN KEY (`avaliacao_resposta`) REFERENCES `avaliacao` (`codigo_avaliacao`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resposta_ibfk_3` FOREIGN KEY (`questao_resposta`) REFERENCES `questao` (`codigo_questao`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `turma_ibfk_1` FOREIGN KEY (`disciplina_turma`) REFERENCES `disciplina` (`codigo_disciplina`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `turma_ibfk_2` FOREIGN KEY (`professor_turma`) REFERENCES `usuario` (`cpf_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
