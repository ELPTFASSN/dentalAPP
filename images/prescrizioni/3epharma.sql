-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Nov 03, 2015 alle 15:46
-- Versione del server: 5.5.35
-- Versione PHP: 5.4.41-0+deb7u1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epharma`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `armadi`
--

CREATE TABLE IF NOT EXISTS `armadi` (
  `idArmadio` int(11) NOT NULL AUTO_INCREMENT,
  `reparto` varchar(255) NOT NULL,
  PRIMARY KEY (`idArmadio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dump dei dati per la tabella `armadi`
--

INSERT INTO `armadi` (`idArmadio`, `reparto`) VALUES
(1, 'MEDICINA INTERNA'),
(2, 'CARDIOLOGIA'),
(3, 'UTIC'),
(4, 'TERAPIA INTENSIVA');

-- --------------------------------------------------------

--
-- Struttura della tabella `bridgeArmadioMedicinale`
--

CREATE TABLE IF NOT EXISTS `bridgeArmadioMedicinale` (
  `idBridgeArmadioMedicinale` int(11) NOT NULL AUTO_INCREMENT,
  `fkArmadio` int(11) NOT NULL,
  `fkMedicinale` int(11) NOT NULL,
  `quantita` int(11) NOT NULL,
  PRIMARY KEY (`idBridgeArmadioMedicinale`),
  KEY `fkArmadio` (`fkArmadio`,`fkMedicinale`),
  KEY `fkMedicinale` (`fkMedicinale`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dump dei dati per la tabella `bridgeArmadioMedicinale`
--

INSERT INTO `bridgeArmadioMedicinale` (`idBridgeArmadioMedicinale`, `fkArmadio`, `fkMedicinale`, `quantita`) VALUES
(1, 1, 2, 100),
(2, 1, 4, 44),
(7, 1, 5, 171),
(8, 2, 3, 21),
(9, 2, 1, 2),
(10, 3, 3, 11),
(11, 3, 4, 1),
(12, 3, 5, 55),
(13, 4, 2, 6),
(14, 3, 5, 55);

-- --------------------------------------------------------

--
-- Struttura della tabella `bridgeCarrelloMedicinale`
--

CREATE TABLE IF NOT EXISTS `bridgeCarrelloMedicinale` (
  `idBridgeCarrelloMedicinale` int(11) NOT NULL AUTO_INCREMENT,
  `fkCarrello` int(11) NOT NULL,
  `fkMedicinale` int(11) NOT NULL,
  `quantita` int(11) NOT NULL,
  PRIMARY KEY (`idBridgeCarrelloMedicinale`),
  KEY `fkCarrello` (`fkCarrello`,`fkMedicinale`),
  KEY `fkMedicinale` (`fkMedicinale`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dump dei dati per la tabella `bridgeCarrelloMedicinale`
--

INSERT INTO `bridgeCarrelloMedicinale` (`idBridgeCarrelloMedicinale`, `fkCarrello`, `fkMedicinale`, `quantita`) VALUES
(1, 1, 2, 19),
(4, 5, 4, 16),
(7, 1, 1, 11),
(8, 1, 1, 10),
(9, 1, 1, 1),
(22, 3, 2, 42),
(25, 5, 3, 55),
(26, 4, 2, 5),
(27, 2, 4, 1),
(28, 4, 4, 0),
(29, 4, 4, 1),
(32, 1, 4, 3);

-- --------------------------------------------------------

--
-- Struttura della tabella `bridgeMedicoCentro`
--

CREATE TABLE IF NOT EXISTS `bridgeMedicoCentro` (
  `idBridgeMedicoCentro` int(11) NOT NULL AUTO_INCREMENT,
  `fkCentro` int(11) NOT NULL,
  `fkMedico` int(11) NOT NULL,
  PRIMARY KEY (`idBridgeMedicoCentro`),
  UNIQUE KEY `fkCentro` (`fkCentro`),
  KEY `fkMedico` (`fkMedico`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `bridgeMedicoPaziente`
--

CREATE TABLE IF NOT EXISTS `bridgeMedicoPaziente` (
  `idBridgeMedicoPaziente` int(255) NOT NULL AUTO_INCREMENT,
  `fkUtente` int(255) NOT NULL,
  `fkDettaglioPaziente` int(255) NOT NULL,
  PRIMARY KEY (`idBridgeMedicoPaziente`),
  KEY `fkUtente` (`fkUtente`),
  KEY `fkDettaglioPaziente` (`fkDettaglioPaziente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dump dei dati per la tabella `bridgeMedicoPaziente`
--

INSERT INTO `bridgeMedicoPaziente` (`idBridgeMedicoPaziente`, `fkUtente`, `fkDettaglioPaziente`) VALUES
(1, 2, 1),
(2, 2, 2),
(3, 2, 3);

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
-- Struttura della tabella `carrelli`
--

CREATE TABLE IF NOT EXISTS `carrelli` (
  `idCarrello` int(11) NOT NULL AUTO_INCREMENT,
  `fkArmadio` int(11) NOT NULL,
  `codice` varchar(55) NOT NULL,
  PRIMARY KEY (`idCarrello`),
  KEY `fkArmadio` (`fkArmadio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dump dei dati per la tabella `carrelli`
--

INSERT INTO `carrelli` (`idCarrello`, `fkArmadio`, `codice`) VALUES
(1, 3, 'AR9876'),
(2, 3, 'AR6543'),
(3, 1, 'BT2344'),
(4, 3, 'ZX9876'),
(5, 4, 'VF9876');

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

--
-- Dump dei dati per la tabella `dettaglioMedico`
--

INSERT INTO `dettaglioMedico` (`idDettaglioMedico`, `nome`, `cognome`, `telefono`, `indirizzo`, `citta`, `provincia`, `dataSpecializzazione`, `tipoSpecializzazione`, `fkUtente`) VALUES
(1, 'Mario', 'Rossi', '', NULL, NULL, NULL, '2005-04-12', 'Medico di Base', 2),
(2, 'Carlo', 'Di Marlo', '3735108197', 'Via gioacchino belli 27', 'Roma', 'RM', '2006-06-05', 'Epatologo', 3),
(3, 'Erwin', 'Spadaccina', '987654321', 'Calle del penopoleso 32', 'Roma', 'AN', '2013-03-01', 'Medico_di_Base', 4),
(4, 'Carla', 'Bruni', '223', 'Calle del penopoleso 32', 'Roma', 'AN', '2009-03-01', 'Medico_di_Base', 5),
(5, 'Pepe', 'Gutierrez', '987654321', 'via vio', 'roma', 'RG', '2012-04-04', 'Medico_di_Base', 14);

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

--
-- Dump dei dati per la tabella `dettaglioOperatore`
--

INSERT INTO `dettaglioOperatore` (`idDettaglioDsr`, `nome`, `cognome`, `fkUtente`, `fkCentro`) VALUES
(1, 'Enfermera', 'Spadaccina', 6, 2),
(2, 'Canastas', 'CuarÃ³n', 7, 1),
(4, 'Sergio', 'Modales', 9, 1),
(6, 'Paca', 'Martinez', 11, 1),
(7, 'Usuario', 'Loco', 12, 2),
(8, 'Raphael', 'Carro', 13, 3);

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

--
-- Dump dei dati per la tabella `dettaglioPaziente`
--

INSERT INTO `dettaglioPaziente` (`idDettaglioPaziente`, `nome`, `cognome`, `dataNascita`, `sesso`, `codFiscale`, `citta`, `provincia`, `indirizzoDomicilio`, `cittaDomicilio`, `provinciaDomicilio`, `telefono`, `email`, `nazionalita`, `linguaParlata`, `note`, `active`, `deleted`) VALUES
(1, 'Marco', 'Quaresima', '1980-02-20 00:00:00', 'M', 'CMMEWE92N22A42I', 'Roma', 'RM', 'Calle del penopoleso 32', 'roma', 'AL', '3406459038', 'd.abellan@evoluzioneufficio.com', 'Italiana', 'Jubmjbon', NULL, 1, 0),
(2, 'Marika', 'Carpanta', '1976-05-18 10:25:21', 'F', 'AABBCC76F27B987H', 'Roma', 'RM', 'Via delle vie 34', 'Roma', 'RM', '3458796355', 'email@email.lle', 'Italiana', 'Italiano', NULL, 1, 0),
(3, 'Gilbert', 'Uniti', '1995-02-02 00:00:00', 'M', 'RSSMRA72L09H501S', 'Roma', 'RM', 'Via gioacchino belli 21', 'Roma', 'RM', '3406459038', 'htcdaabe@gmail.com', 'Italiana', 'Italiano', NULL, 1, 0);

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

--
-- Dump dei dati per la tabella `dettaglioPrescrizione`
--

INSERT INTO `dettaglioPrescrizione` (`idDettaglioPrescrizione`, `fkPrescrizione`, `fkMedico`, `fkPaziente`, `fkMedicinale`, `dosi`, `quando`, `fino`, `stato`, `ultima`) VALUES
(1, 1, 1, 1, 3, '2 compresse', 'Mattina e Sera dopo Cena', '0000-00-00', 0, '2015-07-17'),
(2, 1, 1, 1, 1, '1 pasticca', 'Ogni 8 ore', '2015-10-10', 1, '2015-07-17'),
(3, 1, 1, 1, 4, '1 bustina', 'Prima della collazione', '0000-00-00', 1, '2015-07-27'),
(4, 2, 1, 2, 5, '1 pasticca', 'Ogni 8 ore', '2015-05-31', 0, '2015-07-30'),
(5, 2, 1, 2, 4, '1 bustina', 'Prima andare al letto', '2015-05-27', 0, '2015-08-05'),
(6, 3, 3, 3, 4, '5mgs', 'Mattina', '0000-00-00', 0, '2015-08-06'),
(8, 8, 2, 2, 2, '11', 'pomeriggio', '0000-00-00', 0, '2015-08-06'),
(9, 9, 2, 2, 2, '11', 'pomeriggio', '0000-00-00', 0, '2015-08-06'),
(10, 10, 2, 2, 2, '11', 'pomeriggio', '0000-00-00', 0, '2015-08-06'),
(11, 11, 2, 3, 2, '11', 'mattina', '0000-00-00', 0, '2015-09-16'),
(12, 12, 1, 2, 3, '11', 'mattina', '0000-00-00', 0, '2015-08-06'),
(13, 13, 1, 2, 4, '1', 'mattina', '0000-00-00', 0, '2015-08-06'),
(14, 14, 1, 1, 1, '5', 'pomeriggio', '0000-00-00', 0, '2015-08-06');

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

--
-- Dump dei dati per la tabella `medicinali`
--

INSERT INTO `medicinali` (`idMedicinale`, `nome`, `tipologia`, `dosi`, `codice`) VALUES
(1, 'Lobivon', 'Betabloccanti', '5mg', '300833B2DDD906C000000022'),
(2, 'Lorazepam', 'Benzodiazepine', '2,5mg', 'BY877A'),
(3, 'Legalon', 'Prevenzione Epatica', '45mg', 'AA457Q'),
(4, 'Humanidadol', 'Carpantante', '55mg', 'ER404AA'),
(5, 'Oki', 'Cefalea', '22mg', '3451'),
(6, 'Parenquimola', 'Cargante', '15mg', 'R5JADJ22');

-- --------------------------------------------------------

--
-- Struttura della tabella `prescrizioni`
--

CREATE TABLE IF NOT EXISTS `prescrizioni` (
  `idPrescrizione` int(11) NOT NULL AUTO_INCREMENT,
  `dataApertura` date NOT NULL,
  `dataAggiornamento` date NOT NULL,
  PRIMARY KEY (`idPrescrizione`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dump dei dati per la tabella `prescrizioni`
--

INSERT INTO `prescrizioni` (`idPrescrizione`, `dataApertura`, `dataAggiornamento`) VALUES
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
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'info@alessandrovitale.net', 1, 0, 1),
(2, 'interno', '7f3e0c612f10ed32e48edc7633892a66', 'no-reply@agenziatrapiantilazio.it', 1, 0, 2),
(3, 'cardi ', 'adb241f76abee27b36548f9d7d87f4be', 'htcdabe@gmail.com', 0, 1, 2),
(4, 'erwspa', '3cf0398ff9b260a73b8daa824167f7a9', 'aam@lld.ees', 0, 0, 2),
(5, 'medico', '9db52b98e35aa20c3cb7141491075691', 'aeee@aeer.es', 1, 0, 2),
(6, 'canastos', 'd30e4cfb67052d7e59868efbaf5cb049', 'cc@cc.cc', 1, 0, 4),
(7, 'cuaron', 'ba640fd10626d81bd75c83a9b6eae38c', 'cca@cc.cac', 0, 1, 4),
(8, 'jodo', '7f3e0c612f10ed32e48edc7633892a66', 'aasl@ldor.es', 1, 0, 4),
(9, 'modales', '6b0fdeb913142abea7f8dfc16e5ac3a9', 'aasl@lador.es', 1, 0, 4),
(10, 'lllooo', '5029828b8967d0d50920a98b913834c2', 'aa@aa.aa', 1, 0, 4),
(11, 'llloooa', '7fcf4f9ee47d38abb555b983a2dc1738', 'aa@aa.aab', 1, 1, 4),
(12, 'kakaka', '978f9c8fa30137baf3b46e82f1e91e08', 'krek@kaka.es', 0, 1, 4),
(13, 'rafaello', 'bc496736542a8bcdc842e374fd822427', 'll@llaa.oo', 1, 0, 4),
(14, 'pepgut', '0d925d86b61b916c4da6a226db8471a1', 'aaa@aaa', 1, 0, 2);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `bridgeArmadioMedicinale`
--
ALTER TABLE `bridgeArmadioMedicinale`
  ADD CONSTRAINT `bridgeArmadioMedicinale_ibfk_1` FOREIGN KEY (`fkArmadio`) REFERENCES `armadi` (`idArmadio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bridgeArmadioMedicinale_ibfk_2` FOREIGN KEY (`fkMedicinale`) REFERENCES `medicinali` (`idMedicinale`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `bridgeCarrelloMedicinale`
--
ALTER TABLE `bridgeCarrelloMedicinale`
  ADD CONSTRAINT `bridgeCarrelloMedicinale_ibfk_1` FOREIGN KEY (`fkMedicinale`) REFERENCES `medicinali` (`idMedicinale`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bridgeCarrelloMedicinale_ibfk_2` FOREIGN KEY (`fkCarrello`) REFERENCES `carrelli` (`idCarrello`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `bridgeMedicoCentro`
--
ALTER TABLE `bridgeMedicoCentro`
  ADD CONSTRAINT `bridgeMedicoCentro_ibfk_1` FOREIGN KEY (`fkCentro`) REFERENCES `centroTrapianti` (`idCentro`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `bridgeMedicoCentro_ibfk_2` FOREIGN KEY (`fkMedico`) REFERENCES `utenti` (`idUtente`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limiti per la tabella `bridgeMedicoPaziente`
--
ALTER TABLE `bridgeMedicoPaziente`
  ADD CONSTRAINT `bridgeMedicoPaziente_ibfk_1` FOREIGN KEY (`fkUtente`) REFERENCES `utenti` (`idUtente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bridgeMedicoPaziente_ibfk_2` FOREIGN KEY (`fkDettaglioPaziente`) REFERENCES `dettaglioPaziente` (`idDettaglioPaziente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `bridgeMedPazMedOpe`
--
ALTER TABLE `bridgeMedPazMedOpe`
  ADD CONSTRAINT `bridgeMedPazMedOpe_ibfk_1` FOREIGN KEY (`fkMedicinale`) REFERENCES `medicinali` (`idMedicinale`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bridgeMedPazMedOpe_ibfk_2` FOREIGN KEY (`fkMedico`) REFERENCES `dettaglioMedico` (`idDettaglioMedico`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `bridgeMedPazMedOpe_ibfk_3` FOREIGN KEY (`fkPaziente`) REFERENCES `dettaglioPaziente` (`idDettaglioPaziente`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limiti per la tabella `carrelli`
--
ALTER TABLE `carrelli`
  ADD CONSTRAINT `carrelli_ibfk_1` FOREIGN KEY (`fkArmadio`) REFERENCES `armadi` (`idArmadio`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `dettaglioPrescrizione_ibfk_1` FOREIGN KEY (`fkPrescrizione`) REFERENCES `prescrizioni` (`idPrescrizione`) ON DELETE CASCADE ON UPDATE CASCADE,
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
