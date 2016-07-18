-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Lug 18, 2016 alle 21:41
-- Versione del server: 5.6.29-log
-- PHP Version: 5.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_timpolimi`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `Dispositivi`
--

CREATE TABLE IF NOT EXISTS `Dispositivi` (
  `id` varchar(50) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `prezzo` float NOT NULL,
  `descrizione` varchar(400) NOT NULL,
  `scheda_tecnica` varchar(300) NOT NULL,
  `path` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nome` (`nome`,`marca`,`prezzo`,`descrizione`,`scheda_tecnica`,`path`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Dispositivi`
--

INSERT INTO `Dispositivi` (`id`, `nome`, `marca`, `prezzo`, `descrizione`, `scheda_tecnica`, `path`) VALUES
('iphone', 'iPhone 6', 'Apple', 649.99, 'Display Retina HD da 4.7'''' con 3D Touch. Alluminio serie 7000 e vetro piu'' resistente. Chip A9 con architettura a 64 bit di livello desktop. Nuova fotocamera iSight da 12MP con Live Photos, Touch ID, connessioni Wi-Fi e 4G LTE, batteria a lunga durata e ancora IOS9 e ICloud, il tutto in un''elegante scocca unibody.', '4GPLUS\r\nDisplay Retina HD da 4.7''''\r\n3D Touch\r\nChip A9 con coprocessore di movimento M9 integrato\r\nFotocamera iSight da 12MP', 'imgs/telefoni/iphone6.jpg'),
('tabA', 'Galaxy Tab A', 'Samsung', 349.79, 'Design sottile e moderno, stile essenziale e cornice metallizzata esaltano il nuovo formato 4:3, donando a Galaxy TAB A un look moderno e sofisticato e garantendo la massima maneggevolezza grazie ai 7,5 millimetri di spessore e solo 456 grammi di peso. Galaxy TAB A non accetta compromessi, regalandoti uno schermo piu'' ampio rispetto ad altri tablet.', 'Sistema Operativo Android 5.0\r\nDisplay 9.7'''' TFT\r\nProcessore Snapdragon 410 QuadCore 1.2 GHz', 'imgs\\tablet\\SamsungGalaxyTabA.jpg'),
('sirio', 'SIRIO', 'TIM', 29.89, 'SIRIO è un telefono con filo dal design elegante. E’ dotato di ampio display LCD con data e ora, vivavoce e liste delle chiamate. I tasti grandi, la regolazione del volume della suoneria e la facilità d''uso lo rendono adatto ad ogni esigenza. Non necessita di batterie o alimentatori.', 'Visualizza il numero chiamante\r\nVivavoce\r\nAmpia rubrica telefonica\r\nSenza batterie e alimentatore', 'imgs\\outlet\\sirio.png'),
('s7', 'Galaxy S7', 'Samsung', 749.99, '', '', 'imgs\\telefoni\\galaxys7.jpg'),
('g5', 'G5', 'Lg', 419.99, '', '', 'imgs\\telefoni\\lgg5.jpg'),
('huaweip9', 'P9', 'Huawei', 399.99, '', '', 'imgs\\telefoni\\huaweip9.png'),
('ipad', 'iPad 5', 'Apple', 379.79, '', '', 'imgs\\tablet\\ipad5.jpg'),
('lgpad', 'GPad F7', 'Lg', 319.99, '', '', 'imgs\\tablet\\lgGPadF7.jpg'),
('pixi', 'One Touch Pixi 3', 'Alcatel', 299.99, '', '', 'imgs\\tablet\\alcatelonetouchpixi3.png'),
('gearfit', 'Gear Fit', 'Samsung', 79.99, '', '', 'imgs\\outlet\\gearfit.jpg'),
('doro', 'Liberto 820 Mini', 'Doro', 159.99, '', '', 'imgs\\outlet\\liberto.jpg'),
('mivida', 'My Way', 'Olivetti', 19.99, '', '', 'imgs\\outlet\\myway.png');

-- --------------------------------------------------------

--
-- Struttura della tabella `Immagini`
--

CREATE TABLE IF NOT EXISTS `Immagini` (
  `id` varchar(50) NOT NULL,
  `path` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `path` (`path`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Immagini`
--

INSERT INTO `Immagini` (`id`, `path`) VALUES
('logotim', 'imgs\\LOGO.jpeg'),
('facebook', 'imgs\\fb.png'),
('twitter', 'imgs\\Twitter.png'),
('google', 'imgs\\Gplus.svg.png'),
('homescroll1', 'imgs/home/imgHome1.PNG'),
('homescroll2', 'imgs/home/imgHome2.PNG'),
('homescroll3', 'imgs/home/imgHome3.PNG'),
('homeadsl', 'imgs/home/adsl.PNG'),
('homegiga', 'imgs/home/giga.PNG'),
('homerete', 'imgs/home/rete.PNG'),
('progetti3', 'imgs\\progetti\\ragazzi.PNG'),
('progetti2', 'imgs\\progetti\\bimbi.PNG'),
('progetti1', 'imgs\\progetti\\progetti.png'),
('immaginedispositivi', 'imgs\\dispositivi\\dispositivi.jpg'),
('innovazione1', 'imgs\\innovazione\\innovazione.jpg'),
('innovazione2', 'imgs\\innovazione\\girl.PNG'),
('innovazione3', 'imgs\\innovazione\\pelato.PNG'),
('innovazione4', 'imgs\\innovazione\\people.PNG'),
('testimonial1', 'imgs\\testimonials\\timmy.PNG'),
('testimonial2', 'imgs\\testimonials\\pif.PNG'),
('testimonial3', 'imgs\\testimonials\\fazio.PNG'),
('innovazione5', 'imgs\\innovazione\\joint.PNG'),
('dlink', 'imgs\\smartlife\\d-link\\DLinkHD.jpg'),
('faq', 'imgs\\smartlife\\wellup\\faq.jpg'),
('wellup', 'imgs\\smartlife\\wellup\\wellup.png'),
('omino', 'imgs\\smartlife\\banner.png'),
('connettiti', 'imgs\\in_evidenza\\connettiti.png'),
('evid2', 'imgs\\in_evidenza\\evid2.png'),
('evid1', 'imgs\\in_evidenza\\evid1.png'),
('telefono', 'imgs\\in_evidenza\\gestione_linea.png'),
('timgames', 'imgs\\in_evidenza\\tim_games.png'),
('madsl', 'imgs\\in_evidenza\\modem_adsl.png'),
('bannerino', 'imgs\\in_evidenza\\navigare.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
