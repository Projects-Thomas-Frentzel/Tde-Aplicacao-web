-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Nov-2022 às 17:33
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `empresa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `ID_Cliente` int(11) NOT NULL,
  `Nome` varchar(100) COLLATE latin1_swedish_nopad_ci NOT NULL,
  `Data_nasc` date NOT NULL,
  `ID_Pais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_nopad_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`ID_Cliente`, `Nome`, `Data_nasc`, `ID_Pais`) VALUES
(1, 'Euclides', '2001-09-07', 111),
(2, 'Katra', '2018-09-09', 222),
(3, 'Orwell', '1984-01-01', 333),
(4, 'Bismarkinho', '1914-07-28', 444),
(5, 'Kenedi', '1963-11-23', 555),
(6, 'Julio', '1968-07-30', 666),
(7, 'Josue', '1930-08-25', 777),
(8, 'Elizabechy', '2019-09-08', 888),
(9, 'Juca', '1955-11-01', 999),
(10, 'Cleitinho', '2000-12-25', 1000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pais`
--

CREATE TABLE `pais` (
  `ID_Pais` int(11) NOT NULL,
  `Nome_Pais` varchar(100) COLLATE latin1_swedish_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_nopad_ci;

--
-- Extraindo dados da tabela `pais`
--

INSERT INTO `pais` (`ID_Pais`, `Nome_Pais`) VALUES
(111, 'Brasil'),
(222, 'Paraguai'),
(333, 'Alemanha'),
(444, 'Argentina'),
(555, 'Ira'),
(666, 'Siria'),
(777, 'Italia'),
(888, 'Franca'),
(999, 'Portugal'),
(1000, 'Canada');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID_Cliente`),
  ADD KEY `ID_Pais` (`ID_Pais`);

--
-- Índices para tabela `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`ID_Pais`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`ID_Pais`) REFERENCES `pais` (`ID_Pais`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
