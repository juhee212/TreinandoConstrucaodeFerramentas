-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Nov-2022 às 21:00
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
-- Banco de dados: `tramoengenhari`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `prod_inventario`
--

CREATE TABLE `prod_inventario` (
  `id_produto` int(11) DEFAULT NULL,
  `nome_produto` varchar(150) DEFAULT NULL,
  `categoria` varchar(150) NOT NULL,
  `preco_un` decimal(10,2) DEFAULT NULL,
  `consolidadora` varchar(150) NOT NULL,
  `cod_fornecedor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `prod_inventario`
--

INSERT INTO `prod_inventario` (`id_produto`, `nome_produto`, `categoria`, `preco_un`, `consolidadora`, `cod_fornecedor`) VALUES
(0, '', '', '0.00', '', 0),
(0, '', '', '0.00', '', 0),
(0, '', '', '0.00', '', 0),
(0, '', '', '0.00', '', 0),
(0, '', '', '0.00', '', 0),
(0, '', '', '0.00', '', 0),
(0, '', '', '0.00', '', 0),
(0, '', '', '0.00', '', 0),
(0, '', '', '0.00', '', 0),
(123, 'teste', '', '0.00', '', 12345),
(123, 'teste', '', '2.00', '', 12345),
(123, 'teste', '', '2.00', '', 12345),
(1234, 'Pêra', '', '2.00', '', 12345),
(123, 'Maçã', 'ESTRUTURA', '2.00', '', 12345),
(123, 'Maçã', 'PAINÉIS', '999.99', '', 5176);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
