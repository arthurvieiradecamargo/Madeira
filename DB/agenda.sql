-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Fev-2019 às 13:27
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `age_id` int(11) NOT NULL,
  `age_nome` varchar(200) DEFAULT NULL,
  `age_end` varchar(200) DEFAULT NULL,
  `age_logn` varchar(20) DEFAULT NULL,
  `age_bairro` varchar(100) DEFAULT NULL,
  `age_cidade` varchar(100) DEFAULT NULL,
  `age_estado` varchar(45) DEFAULT NULL,
  `age_email` varchar(150) DEFAULT NULL,
  `age_telefone1` varchar(15) DEFAULT NULL,
  `age_telefone2` varchar(15) DEFAULT NULL,
  `age_telefone3` varchar(15) DEFAULT NULL,
  `age_telefone4` varchar(15) DEFAULT NULL,
  `age_telefone5` varchar(15) DEFAULT NULL,
  `age_telefone6` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`age_id`, `age_nome`, `age_end`, `age_logn`, `age_bairro`, `age_cidade`, `age_estado`, `age_email`, `age_telefone1`, `age_telefone2`, `age_telefone3`, `age_telefone4`, `age_telefone5`, `age_telefone6`) VALUES
(1, 'Arthur Vieira de Camargo', 'Rouxinol', '1599', 'Novo', 'Araucária', 'Paraná', 'arthur.camargo@escriba.com.br', '(41) 99712-7777', '(41) 99999-9999', '(74) 44444-4444', '(88) 8888-8888', '(88) 88888-8888', '(77) 77777-7777'),
(7, 'Pedro Mariano', 'Rua Gonçalves Dias, 2122. Lourdes', 'casa', 'Plínio Salgado', 'Belo Horizonte', 'Minas Gerais', 'pedro@mariano.com.br', '(31) 32915-9581', '(11) 11111-1111', '(22) 22222-2222', '(33) 33333-3333', '(44) 44444-4444', '(55) 55555-5555'),
(8, 'José Silva', 'Rua da Maria, °1922', 'casa', 'Novo Mundo', 'Curitiba', 'Paraná', 'jose@silva.com.br', '(22) 22222-2222', '(33) 33333-3333', '(44) 44444-4444', '(55) 55555-5555', '(66) 66666-6666', '(77) 77777-7777'),
(9, 'Bruno R..', 'Rua José Alcides de Lima, ° 159', 'casa', 'Capão Raso', 'Campo Largo', 'Mato Grosso do Sul', 'bruno@r.com.br', '(99) 99999-9999', '', '(88) 88888-8888', '', '', ''),
(10, 'Luiz L.', '', '', '', 'São José dos Pinhais', 'Paraná', 'luiz@l.com.br', '(41) 99712-7777', '', '', '', '', ''),
(11, 'Will', 'Rua Gonçalves Dias, 2122. Lourdes', '', '', 'Belo Horizonte', 'Ceará', 'will@will.com', '(31) 32915-9584', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`age_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `age_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
