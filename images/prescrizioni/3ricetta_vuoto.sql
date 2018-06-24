-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Nov 03, 2015 alle 18:16
-- Versione del server: 5.5.35
-- Versione PHP: 5.4.41-0+deb7u1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ricetta`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `bridgeMedPazMedOpe`
--

CREATE TABLE IF NOT EXISTS `bridgeMedPazMedOpe` (
  `idBridgeMedPazMed` int(11) NOT NULL AUTO_INCREMENT,
  `fkPaziente` int(11) NOT NULL,
  `fkMedico` int(11) NOT NULL,
  `fkMedicinale` int(11) NOT NULL,
  `posologia` varchar(255) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`idBridgeMedPazMed`),
  KEY `fkPaziente` (`fkPaziente`,`fkMedico`,`fkMedicinale`),
  KEY `fkMedicinale` (`fkMedicinale`),
  KEY `fkMedico` (`fkMedico`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `centroTrapianti`
--

CREATE TABLE IF NOT EXISTS `centroTrapianti` (
  `idCentro` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `indirizzo` varchar(255) DEFAULT NULL,
  `citta` varchar(255) DEFAULT NULL,
  `provincia` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`idCentro`),
  KEY `citta` (`citta`),
  KEY `provincia` (`provincia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dump dei dati per la tabella `centroTrapianti`
--

INSERT INTO `centroTrapianti` (`idCentro`, `nome`, `indirizzo`, `citta`, `provincia`) VALUES
(1, 'Medicina Interna', '00161 ROMA (RM) - VIALE DEL POLICLINICO 155', 'Roma', 'RM'),
(2, 'Cardiologia', '00133 ROMA (RM) - VIALE OXFORD , 81', 'Roma', 'RM'),
(3, 'UTIC', 'via', 'roma', 'RM'),
(4, 'Terapia Intensiva', 'viao', 'roma', 'RM');

-- --------------------------------------------------------

--
-- Struttura della tabella `dettaglioClinicoPaziente`
--

CREATE TABLE IF NOT EXISTS `dettaglioClinicoPaziente` (
  `idDettaglioClinicoPaziente` int(255) NOT NULL AUTO_INCREMENT,
  `cirrosi` int(1) NOT NULL DEFAULT '0',
  `eziologia` varchar(255) DEFAULT NULL,
  `epatocarcinoma` int(1) NOT NULL DEFAULT '0',
  `altraPatologia` varchar(255) DEFAULT NULL,
  `fkDettaglioPaziente` int(255) NOT NULL,
  PRIMARY KEY (`idDettaglioClinicoPaziente`),
  KEY `fkDettaglioPaziente` (`fkDettaglioPaziente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `dettaglioMedico`
--

CREATE TABLE IF NOT EXISTS `dettaglioMedico` (
  `idDettaglioMedico` int(255) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cognome` varchar(255) NOT NULL,
  `telefono` varchar(25) NOT NULL,
  `indirizzo` varchar(255) DEFAULT NULL,
  `citta` varchar(255) DEFAULT NULL,
  `provincia` varchar(5) DEFAULT NULL,
  `dataSpecializzazione` date NOT NULL,
  `tipoSpecializzazione` varchar(255) DEFAULT NULL,
  `fkUtente` int(255) NOT NULL,
  PRIMARY KEY (`idDettaglioMedico`),
  KEY `fkUtente` (`fkUtente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `dettaglioOperatore`
--

CREATE TABLE IF NOT EXISTS `dettaglioOperatore` (
  `idDettaglioDsr` int(255) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cognome` varchar(255) NOT NULL,
  `fkUtente` int(255) NOT NULL,
  `fkCentro` int(10) NOT NULL,
  PRIMARY KEY (`idDettaglioDsr`),
  KEY `fkCentro` (`fkCentro`),
  KEY `fkUtente` (`fkUtente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `dettaglioPaziente`
--

CREATE TABLE IF NOT EXISTS `dettaglioPaziente` (
  `idDettaglioPaziente` int(255) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cognome` varchar(255) NOT NULL,
  `dataNascita` datetime NOT NULL,
  `sesso` varchar(1) NOT NULL,
  `codFiscale` varchar(16) DEFAULT NULL,
  `citta` varchar(255) DEFAULT NULL,
  `provincia` varchar(5) DEFAULT NULL,
  `indirizzoDomicilio` varchar(255) DEFAULT NULL,
  `cittaDomicilio` varchar(255) DEFAULT NULL,
  `provinciaDomicilio` varchar(5) DEFAULT NULL,
  `telefono` varchar(25) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nazionalita` varchar(255) DEFAULT NULL,
  `linguaParlata` varchar(255) DEFAULT NULL,
  `note` text,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idDettaglioPaziente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `dettaglioPrescrizione`
--

CREATE TABLE IF NOT EXISTS `dettaglioPrescrizione` (
  `idDettaglioPrescrizione` int(11) NOT NULL AUTO_INCREMENT,
  `fkPrescrizione` int(11) NOT NULL,
  `fkMedico` int(11) NOT NULL,
  `fkPaziente` int(11) NOT NULL,
  `fkMedicinale` int(11) NOT NULL,
  `dosi` varchar(255) NOT NULL,
  `quando` varchar(255) NOT NULL,
  `fino` date NOT NULL,
  `stato` int(1) NOT NULL DEFAULT '0',
  `ultima` date DEFAULT NULL,
  PRIMARY KEY (`idDettaglioPrescrizione`),
  KEY `fkPrescrizione` (`fkPrescrizione`,`fkMedico`,`fkPaziente`,`fkMedicinale`),
  KEY `fkPaziente` (`fkPaziente`),
  KEY `fkMedico` (`fkMedico`),
  KEY `fkMedicinale` (`fkMedicinale`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `medicinali`
--

CREATE TABLE IF NOT EXISTS `medicinali` (
  `idMedicinale` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `tipologia` varchar(255) DEFAULT NULL,
  `dosi` varchar(255) DEFAULT NULL,
  `codice` varchar(255) NOT NULL,
  PRIMARY KEY (`idMedicinale`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `ricette`
--

CREATE TABLE IF NOT EXISTS `ricette` (
  `idPrescrizione` int(11) NOT NULL AUTO_INCREMENT,
  `dataApertura` date NOT NULL,
  `dataAggiornamento` date NOT NULL,
  PRIMARY KEY (`idPrescrizione`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dump dei dati per la tabella `ricette`
--

INSERT INTO `ricette` (`idPrescrizione`, `dataApertura`, `dataAggiornamento`) VALUES
(1, '2015-04-22', '2015-04-24'),
(2, '2015-05-05', '0000-00-00'),
(3, '2015-07-16', '0000-00-00'),
(4, '2015-08-06', '0000-00-00'),
(5, '2015-08-06', '2015-08-06'),
(6, '2015-08-06', '2015-08-06'),
(7, '2015-08-06', '2015-08-06'),
(8, '2015-08-06', '2015-08-06'),
(9, '2015-08-06', '2015-08-06'),
(10, '2015-08-06', '2015-08-06'),
(11, '2015-08-06', '2015-08-06'),
(12, '2015-08-06', '2015-08-06'),
(13, '2015-08-06', '2015-08-06'),
(14, '2015-08-06', '2015-08-06');

-- --------------------------------------------------------

--
-- Struttura della tabella `ruolo`
--

CREATE TABLE IF NOT EXISTS `ruolo` (
  `idRuolo` int(10) NOT NULL,
  `nome` varchar(150) NOT NULL,
  PRIMARY KEY (`idRuolo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `ruolo`
--

INSERT INTO `ruolo` (`idRuolo`, `nome`) VALUES
(1, 'AMMINISTRATORE'),
(2, 'MEDICO'),
(3, 'PAZIENTE'),
(4, 'OPERATORE SANITARIO');

-- --------------------------------------------------------

--
-- Struttura della tabella `tipologia`
--

CREATE TABLE IF NOT EXISTS `tipologia` (
  `idArmadio` int(11) NOT NULL AUTO_INCREMENT,
  `reparto` varchar(255) NOT NULL,
  PRIMARY KEY (`idArmadio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dump dei dati per la tabella `tipologia`
--

INSERT INTO `tipologia` (`idArmadio`, `reparto`) VALUES
(1, 'MEDICINA INTERNA'),
(2, 'CARDIOLOGIA'),
(3, 'UTIC'),
(4, 'TERAPIA INTENSIVA');

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE IF NOT EXISTS `utenti` (
  `idUtente` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `fkRuolo` int(10) NOT NULL,
  PRIMARY KEY (`idUtente`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `fkRuolo` (`fkRuolo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`idUtente`, `username`, `password`, `email`, `active`, `deleted`, `fkRuolo`) VALUES
(1, 'admin', 'ff9ef62cc85a0af6e8c0fc7917f8fb55', 'info@alessandrovitale.net', 1, 0, 1);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `bridgeMedPazMedOpe`
--
ALTER TABLE `bridgeMedPazMedOpe`
  ADD CONSTRAINT `bridgeMedPazMedOpe_ibfk_1` FOREIGN KEY (`fkMedicinale`) REFERENCES `medicinali` (`idMedicinale`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bridgeMedPazMedOpe_ibfk_2` FOREIGN KEY (`fkMedico`) REFERENCES `dettaglioMedico` (`idDettaglioMedico`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `bridgeMedPazMedOpe_ibfk_3` FOREIGN KEY (`fkPaziente`) REFERENCES `dettaglioPaziente` (`idDettaglioPaziente`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limiti per la tabella `dettaglioClinicoPaziente`
--
ALTER TABLE `dettaglioClinicoPaziente`
  ADD CONSTRAINT `dettaglioClinicoPaziente_ibfk_1` FOREIGN KEY (`fkDettaglioPaziente`) REFERENCES `dettaglioPaziente` (`idDettaglioPaziente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `dettaglioMedico`
--
ALTER TABLE `dettaglioMedico`
  ADD CONSTRAINT `dettaglioMedico_ibfk_1` FOREIGN KEY (`fkUtente`) REFERENCES `utenti` (`idUtente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `dettaglioOperatore`
--
ALTER TABLE `dettaglioOperatore`
  ADD CONSTRAINT `dettaglioOperatore_ibfk_1` FOREIGN KEY (`fkUtente`) REFERENCES `utenti` (`idUtente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dettaglioOperatore_ibfk_2` FOREIGN KEY (`fkCentro`) REFERENCES `centroTrapianti` (`idCentro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `dettaglioPrescrizione`
--
ALTER TABLE `dettaglioPrescrizione`
  ADD CONSTRAINT `dettaglioPrescrizione_ibfk_1` FOREIGN KEY (`fkPrescrizione`) REFERENCES `ricette` (`idPrescrizione`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dettaglioPrescrizione_ibfk_2` FOREIGN KEY (`fkPaziente`) REFERENCES `dettaglioPaziente` (`idDettaglioPaziente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dettaglioPrescrizione_ibfk_3` FOREIGN KEY (`fkMedico`) REFERENCES `dettaglioMedico` (`idDettaglioMedico`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dettaglioPrescrizione_ibfk_4` FOREIGN KEY (`fkMedicinale`) REFERENCES `medicinali` (`idMedicinale`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `utenti`
--
ALTER TABLE `utenti`
  ADD CONSTRAINT `utenti_ibfk_1` FOREIGN KEY (`fkRuolo`) REFERENCES `ruolo` (`idRuolo`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
