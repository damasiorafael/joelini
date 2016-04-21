-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 21-Maio-2014 às 00:26
-- Versão do servidor: 5.5.34
-- versão do PHP: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `joelini_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(200) NOT NULL,
  `codigo` varchar(200) NOT NULL,
  `capa_categoria` varchar(200) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `categoria`, `codigo`, `capa_categoria`) VALUES
(2, 'porta_de_correr', 'JH-5463', '0104034455000000-image_prod_teste.jpg'),
(3, 'porta_de_correr', 'JH-5463', '0104034656000000-image_prod_teste.jpg'),
(4, 'porta_de_correr', 'JH-5463', '0104034708000000-image_prod_teste.jpg'),
(5, 'porta_de_correr', 'JH-5463', '0104034712000000-image_prod_teste.jpg'),
(6, 'pes', 'ergeeh', '2201141602000000-1312084227000000-3.jpg'),
(7, 'pes', 'tetste', '2005230150000000-gde_2017.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `detalhes`
--

CREATE TABLE IF NOT EXISTS `detalhes` (
  `id_detalhes` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `titulo_prod` varchar(200) NOT NULL,
  `img_prod_thumb` varchar(200) NOT NULL,
  `descricao_prod` text NOT NULL,
  `youtube_link` varchar(200) NOT NULL,
  PRIMARY KEY (`id_detalhes`),
  KEY `id_categoria` (`id_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `detalhes`
--

INSERT INTO `detalhes` (`id_detalhes`, `id_categoria`, `titulo_prod`, `img_prod_thumb`, `descricao_prod`, `youtube_link`) VALUES
(2, 2, 'JK-3475', 'imagem_teste_prod_detalhes.jpg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>- Descri&ccedil;&atilde;o detalhadas</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas Situa&ccedil;&otilde;es&nbsp;Descri&ccedil;&atilde;o detalhadas Situa&ccedil;&otilde;es&nbsp;Descri&ccedil;&atilde;o detalhadas Situa&ccedil;&otilde;es&nbsp;</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas Situa&ccedil;&otilde;es&nbsp;Descri&ccedil;&atilde;o detalhadas Situa&ccedil;&otilde;es&nbsp;Descri&ccedil;&atilde;o detalhadas Situa&ccedil;&otilde;es&nbsp;Descri&ccedil;&atilde;o detalhadas Situa&ccedil;&otilde;es&nbsp;</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadasDescri&ccedil;&atilde;o detalhadas Situa&ccedil;&otilde;es&nbsp;Descri&ccedil;&atilde;o detalhadas Situa&ccedil;&otilde;es&nbsp;Descri&ccedil;&atilde;o detalhadas Situa&ccedil;&otilde;es&nbsp;Descri&ccedil;&atilde;o detalhadas Situa&ccedil;&otilde;es&nbsp;</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadasDescri&ccedil;&atilde;o detalhadas Situa&ccedil;&otilde;es&nbsp;Descri&ccedil;&atilde;o detalhadas Situa&ccedil;&otilde;es&nbsp;Descri&ccedil;&atilde;o detalhadas Situa&ccedil;&otilde;es&nbsp;</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas Situa&ccedil;&otilde;es</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas Situa&ccedil;&otilde;es</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas Situa&ccedil;&otilde;es</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas Situa&ccedil;&otilde;es</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas Situa&ccedil;&otilde;es</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas Situa&ccedil;&otilde;es</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas Situa&ccedil;&otilde;es</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas Situa&ccedil;&otilde;es</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas Situa&ccedil;&otilde;es</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas Situa&ccedil;&otilde;es</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas Situa&ccedil;&otilde;es</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas Situa&ccedil;&otilde;es</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas Situa&ccedil;&otilde;es</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas</p>\r\n<p>- Descri&ccedil;&atilde;o detalhadas Situa&ccedil;&otilde;es</p>\r\n</body>\r\n</html>', '//www.youtube.com/embed/9bQNsfYqVc4?rel=0'),
(10, 5, 'VAZIO', '', 'VAZIO', ''),
(11, 6, 'dadadada', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>dadadad</p>\r\n</body>\r\n</html>', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria`
--

CREATE TABLE IF NOT EXISTS `galeria` (
  `id_galeria` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `thumbnails` varchar(200) NOT NULL,
  PRIMARY KEY (`id_galeria`),
  KEY `id_categoria` (`id_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `galeria`
--

INSERT INTO `galeria` (`id_galeria`, `id_categoria`, `imagem`, `thumbnails`) VALUES
(1, 2, '0104041621000000-imagem_teste_prod.jpg', '0104041621000000-imagem_teste_prod.jpg'),
(2, 2, '0104041622000000-image_prod_teste2.jpg', '0104041622000000-image_prod_teste2.jpg'),
(4, 2, '0104041624000000-image_prod_teste.jpg', '0104041624000000-image_prod_teste.jpg'),
(5, 2, '0104041645000000-imagem_teste_prod.jpg', '0104041645000000-imagem_teste_prod.jpg'),
(6, 2, '0104041646000000-image_prod_teste2.jpg', '0104041646000000-image_prod_teste2.jpg'),
(7, 2, '0104041647000000-image_prod_teste.jpg', '0104041647000000-image_prod_teste.jpg'),
(8, 2, '0104041648000000-imagem_teste_prod3.jpg', '0104041648000000-imagem_teste_prod3.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `conteudo_news` text NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `news`
--

INSERT INTO `news` (`id_news`, `titulo`, `conteudo_news`, `data`) VALUES
(7, '24/03/14 - Novidades', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<h1><span style="color: #0000ff; font-size: 18pt;">Novidades Titulo</span></h1>\r\n<p><span style="font-size: 12pt;">titulo sitestitulo sitestitulo sitestitulo sites&nbsp;titulo sitestitulo sitestitulo sitestitulo sites&nbsp;titulo sitestitulo sitestitulo sitestitulo sites&nbsp;titulo sitestitulo sitestitulo sitestitulo sites&nbsp;titulo sitestitulo sitestitulo sites&nbsp;titulo sitestitulo sitestitulo sites</span></p>\r\n<p><span style="font-size: 12pt;">titulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo&nbsp;sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitessitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sitestitulo sites</span></p>\r\n</body>\r\n</html>', '2024-03-14');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `detalhes`
--
ALTER TABLE `detalhes`
  ADD CONSTRAINT `detalhes_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `galeria`
--
ALTER TABLE `galeria`
  ADD CONSTRAINT `galeria_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
