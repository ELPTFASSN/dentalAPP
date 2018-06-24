<?php

require_once DOC_ROOT . "config/sys_application.php";
require_once CLASS_DIR . "DB.class.php";
require_once CLASS_DIR . "PayPal.class.php";
require_once CLASS_DIR . "mail/PHPMailerAutoload.php";

class Ordine extends DB {

    public $idUtente;
    public $idOrdine;
    public $fkAzienda;
    public $fkPaziente;
    public $dataApertura;
    public $dataAggiornamento;
    public $prezzo;
    public $indirizzo;
    public $cap;
    public $citta;
    public $note;
    public $fkSatoOrdine;
    public $fkCentro;
    public $fkStatoPagamento;
    public $provincia;

    public function __construct($idUtente = null) {

        if (!empty($idUtente)) {
            $this->idUtente = $idUtente;
        }
        parent::__construct();
    }

    public function isError($update = NULL) {

        $error = "";

        if (empty($this->prezzo) && is_nan($this->prezzo))
            $error .= "Prezzo non inserito o con formato sbagliato<br />";

        if (empty($this->indirizzo))
            $error .= "Indirizzo di spedizione non inserito<br />";

        if (empty($this->cap))
            $error .= "CAP non inserito<br />";

        if (empty($this->citta))
            $error .= "Citt&agrave; non inserita<br />";

        if (empty($this->cap))
            $error .= "Provincia non inserita<br />";


        return $error;
    }

    public function insert() {

        $sql = "INSERT INTO ordini (fkUtente, fkAzienda, fkDettaglioPaziente, dataApertura, prezzo, indirizzo, cap, citta, provincia, note, fkStatoOrdini, fkCentro, fkStatoPagamento) VALUES ('$this->fkUtente', '$this->fkAzienda', '$this->fkPaziente', '$this->dataApertura', '$this->prezzo', '$this->cap', '$this->citta', '$this->note', " . IN_ATTESA_DI_PAGAMENTO . ", '1', " . NON_PAGATO . " )";

        $this->setSql($sql);
        return($this->query()) ? 'true' : 'false';
    }

    public function getOrdiniInAttesa() {

        $sql = "SELECT * FROM ordini WHERE fkStatoOrdini = '" . IN_ATTESA_DI_GESTIONE . "' or fkStatoPagamento='" . NON_PAGATO . "'  ORDER BY idOrdine ASC";
        $this->setSql($sql);

        $result = $this->query();

        $ordini = NULL;
        $i = 0;
        require_once CLASS_DIR . 'Utils.class.php';

        $oUtils = new Utils();

        while ($rows = $this->fetch($result)) {
            $ordini[$i] = $rows;
            $i++;
        }

        return $ordini;
    }

    public function getAllOrdini($status) {

if($_SESSION['utente']['idRuoloUtente'] === MEDICO)
        $sql = "SELECT ordini.idOrdine, ordini.fkUtente, ordini.codice, ordini.fkAzienda, ordini.prezzo, ordini.fkDettaglioPaziente, ordini.dataApertura, ordini.dataAggiornamento, ordini.prezzo, ordini.fkStatoOrdini, ordini.note, ordini.fkCentro, ordini.fkStatoPagamento, dettaglioMedico.nome, dettaglioMedico.cognome from ordini INNER JOIN utenti ON ordini.fkUtente=utenti.idUtente INNER JOIN dettaglioMedico ON utenti.idUtente=dettaglioMedico.fkUtente WHERE ordini.fkUtente='".$_SESSION['utente']['idUtente']."'";
else{
        $sql = "SELECT ordini.idOrdine, ordini.fkUtente, ordini.codice, ordini.fkAzienda, ordini.prezzo, ordini.fkDettaglioPaziente, ordini.dataApertura, ordini.dataAggiornamento, ordini.prezzo, ordini.fkStatoOrdini, ordini.note, ordini.fkCentro, ordini.fkStatoPagamento, dettaglioMedico.nome, dettaglioMedico.cognome from ordini INNER JOIN utenti ON ordini.fkUtente=utenti.idUtente INNER JOIN dettaglioMedico ON utenti.idUtente=dettaglioMedico.fkUtente ";
        if (!empty($status)) {

            switch ($status) {
                case "completed":
                    $sql.=" WHERE ordini.fkStatoOrdini=6";
                    break;
                case "cancellato":
                    $sql.=" WHERE ordini.fkStatoOrdini=5";
                    break;
                case "attesa":
                    $sql.=" WHERE ordini.fkStatoOrdini=4 OR ordini.fkStatoOrdini=2";
                    break;
            }
        }
}
        $this->setSql($sql);

        $result = $this->query();
        $dsr = NULL;
        $i = 0;

        while ($rows = $this->fetch($result)) {

            $dsr[$i]['idOrdine'] = $rows['idOrdine'];
            $dsr[$i]['fkUtente'] = $rows['fkUtente'];
            $dsr[$i]['fkAzienda'] = $rows['fkAzienda'];
            $dsr[$i]['fkDettaglioPaziente'] = $rows['fkDettaglioPaziente'];
            $dsr[$i]['dataApertura'] = $rows['dataApertura'];
            $dsr[$i]['dataAggiornamento'] = $rows['dataAggiornamento'];
            $dsr[$i]['prezzo'] = $rows['prezzo'];
            $dsr[$i]['indirizzo'] = $rows['indirizzo'];
            $dsr[$i]['codice'] = $rows['codice'];
            $dsr[$i]['citta'] = $rows['citta'];
            $dsr[$i]['provincia'] = $rows['provincia'];
            $dsr[$i]['fkStatoOrdini'] = $rows['fkStatoOrdini'];
            $dsr[$i]['note'] = $rows['note'];
            $dsr[$i]['nome'] = $rows['nome'];
            $dsr[$i]['cognome'] = $rows['cognome'];
            $dsr[$i]['fkStatoPagamento'] = $rows['fkStatoPagamento'];

            $i++;
        }


        return $dsr;
    }

    public function getOrdiniByID($idOrdine) {

        $sql = "SELECT ordini.idOrdine, ordini.fkUtente, dettaglioAzienda.partitaIVA, dettaglioAzienda.emailAzienda, dettaglioAzienda.denominazione, dettaglioAzienda.telefono as telefonoAzienda,dettaglioMedico.numeroAlbo, dettaglioMedico.nome, dettaglioMedico.cognome,ordini.cera, ordini.superiore, ordini.inferiore, dettaglioPaziente.dataNascita, dettaglioPaziente.telefono as telefonoPaziente,ordini.fkAzienda, fatture.idFattura, ordini.dataRitiro, ordini.noteCorriere, ordini.codice, ordini.fkDettaglioPaziente, ordini.dataApertura, ordini.denti, ordini.dataAggiornamento, ordini.prezzo, ordini.fkStatoOrdini, comuni.nome as citta, regioni.nomeregione as regione, province.nomeprovincia as provincia, dettaglioAzienda.denominazione,dettaglioAzienda.telefono, dettaglioAzienda.indirizzo, dettaglioAzienda.CAP, dettaglioAzienda.numero, ordini.foto, ordini.note, ordini.fkCentro, ordini.fkStatoPagamento, dettaglioMedico.nome, dettaglioMedico.cognome, dettaglioPaziente.nome as nomePaziente, dettaglioPaziente.cognome as cognomePaziente, ordini.denti from ordini INNER JOIN utenti ON ordini.fkUtente=utenti.idUtente INNER JOIN dettaglioMedico ON utenti.idUtente=dettaglioMedico.fkUtente INNER JOIN dettaglioPaziente ON dettaglioPaziente.idDettaglioPaziente=ordini.fkDettaglioPaziente INNER JOIN dettaglioAzienda ON dettaglioAzienda.idDettaglioAzienda=ordini.fkAzienda INNER JOIN comuni ON dettaglioAzienda.fkComune=comuni.id INNER JOIN province ON dettaglioAzienda.fkProvincia=province.idprovincia INNER JOIN regioni ON dettaglioAzienda.fkRegione=regioni.idregione LEFT JOIN fatture ON fatture.fkOrdine=ordini.idOrdine WHERE idOrdine=$idOrdine LIMIT 1";
        $this->setSql($sql);

        $result = $this->query();
        $dsr = NULL;
        $i = 0;

        while ($rows = $this->fetch($result)) {

            $dsr['idOrdine'] = $rows['idOrdine'];
            $dsr['idFattura'] = $rows['idFattura'];
            $dsr['fkUtente'] = $rows['fkUtente'];
            $dsr['fkAzienda'] = $rows['fkAzienda'];
            $dsr['fkDettaglioPaziente'] = $rows['fkDettaglioPaziente'];
            $dsr['dataApertura'] = $rows['dataApertura'];
            $dsr['dataAggiornamento'] = $rows['dataAggiornamento'];
            $dsr['prezzo'] = $rows['prezzo'];
            $dsr['indirizzo'] = $rows['indirizzo'];
            $dsr['cap'] = $rows['CAP'];
            $dsr['citta'] = $rows['citta'];
            $dsr['provincia'] = $rows['provincia'];
            $dsr['regione'] = $rows['regione'];
            $dsr['fkStatoOrdini'] = $rows['fkStatoOrdini'];
            $dsr['note'] = $rows['note'];
            $dsr['telefono'] = $rows['telefono'];
            $dsr['numero'] = $rows['numero'];
            $dsr['codice'] = $rows['codice'];
            $dsr['nomePaziente'] = $rows['nomePaziente'];
            $dsr['cognomePaziente'] = $rows['cognomePaziente'];
            $dsr['nome'] = $rows['nome'];
            $dsr['cognome'] = $rows['cognome'];
            $dsr['denti'] = $rows['denti'];
            $dsr['precio'] = $rows['precio'];
            $dsr['foto'] = $rows['foto'];
            $dsr['nome'] = $rows['nome'];
            $dsr['cognome'] = $rows['cognome'];
            $dsr['numeroAlbo'] = $rows['numeroAlbo'];
            $dsr['cera'] = $rows['cera'];
            $dsr['partitaIVA'] = $rows['partitaIVA'];
            $dsr['emailAzienda'] = $rows['emailAzienda'];
            $dsr['telefonoAzienda'] = $rows['telefonoAzienda'];
            $dsr['denominazione'] = $rows['denominazione'];
            $dsr['superiore'] = $rows['superiore'];
            $dsr['inferiore'] = $rows['inferiore'];
            $dsr['telefonoPaziente'] = $rows['telefonoPaziente'];
            $dsr['dataNascita'] = $rows['dataNascita'];
            $dsr['dataRitiro'] = $rows['dataRitiro'];
            $dsr['noteCorriere'] = $rows['noteCorriere'];
            $dsr['fkStatoPagamento'] = $rows['fkStatoPagamento'];

            $i++;
        }


        return $dsr;
    }
    
    
      public function getOrdiniByTrattamentoID($idOrdine) {

        $sql = "SELECT trattamento.prezzoPrim, trattamento.stato as estado, trattamento.prezzoSec, ordini.idOrdine, ordini.fkUtente, dettaglioAzienda.partitaIVA, dettaglioAzienda.emailAzienda, dettaglioAzienda.denominazione, dettaglioAzienda.telefono as telefonoAzienda,dettaglioMedico.numeroAlbo, dettaglioMedico.nome, dettaglioMedico.cognome,ordini.cera, ordini.superiore, ordini.inferiore, dettaglioPaziente.dataNascita, dettaglioPaziente.telefono as telefonoPaziente,ordini.fkAzienda, fatture.idFattura, ordini.dataRitiro, ordini.noteCorriere, ordini.codice, ordini.fkDettaglioPaziente, ordini.dataApertura, ordini.denti, ordini.dataAggiornamento, trattamento.prezzoTot as prezzo, ordini.fkStatoOrdini, comuni.nome as citta, regioni.nomeregione as regione, province.nomeprovincia as provincia, dettaglioAzienda.denominazione,dettaglioAzienda.telefono, dettaglioAzienda.indirizzo, dettaglioAzienda.CAP, dettaglioAzienda.numero, ordini.foto, ordini.note, ordini.fkCentro, ordini.fkStatoPagamento, dettaglioMedico.nome, dettaglioMedico.cognome, dettaglioPaziente.nome as nomePaziente, dettaglioPaziente.cognome as cognomePaziente, ordini.denti from ordini INNER JOIN utenti ON ordini.fkUtente=utenti.idUtente INNER JOIN dettaglioMedico ON utenti.idUtente=dettaglioMedico.fkUtente INNER JOIN dettaglioPaziente ON dettaglioPaziente.idDettaglioPaziente=ordini.fkDettaglioPaziente INNER JOIN dettaglioAzienda ON dettaglioAzienda.idDettaglioAzienda=ordini.fkAzienda INNER JOIN comuni ON dettaglioAzienda.fkComune=comuni.id INNER JOIN province ON dettaglioAzienda.fkProvincia=province.idprovincia INNER JOIN regioni ON dettaglioAzienda.fkRegione=regioni.idregione INNER JOIN trattamento ON trattamento.fkOrdine=ordini.idOrdine LEFT JOIN fatture ON fatture.fkOrdine=ordini.idOrdine WHERE idTrattamento=$idOrdine LIMIT 1";
        $this->setSql($sql);

        $result = $this->query();
        $dsr = NULL;
        $i = 0;

        while ($rows = $this->fetch($result)) {

            $dsr['idOrdine'] = $rows['idOrdine'];
            $dsr['idFattura'] = $rows['idFattura'];
            $dsr['fkUtente'] = $rows['fkUtente'];
            $dsr['fkAzienda'] = $rows['fkAzienda'];
            $dsr['fkDettaglioPaziente'] = $rows['fkDettaglioPaziente'];
            $dsr['dataApertura'] = $rows['dataApertura'];
            $dsr['dataAggiornamento'] = $rows['dataAggiornamento'];
            $dsr['prezzo'] = $rows['prezzo'];
            $dsr['indirizzo'] = $rows['indirizzo'];
            $dsr['cap'] = $rows['CAP'];
            $dsr['citta'] = $rows['citta'];
            $dsr['provincia'] = $rows['provincia'];
            $dsr['regione'] = $rows['regione'];
            $dsr['fkStatoOrdini'] = $rows['fkStatoOrdini'];
            $dsr['note'] = $rows['note'];
            $dsr['telefono'] = $rows['telefono'];
            $dsr['numero'] = $rows['numero'];
            $dsr['codice'] = $rows['codice'];
            $dsr['nomePaziente'] = $rows['nomePaziente'];
            $dsr['cognomePaziente'] = $rows['cognomePaziente'];
            $dsr['nome'] = $rows['nome'];
            $dsr['cognome'] = $rows['cognome'];
            $dsr['denti'] = $rows['denti'];
            $dsr['precio'] = $rows['precio'];
            $dsr['foto'] = $rows['foto'];
            $dsr['nome'] = $rows['nome'];
            $dsr['estado'] = $rows['estado'];
            $dsr['primoFrac'] = $rows['prezzoPrim'];
            $dsr['secFrac'] = $rows['prezzoSec'];
            $dsr['cognome'] = $rows['cognome'];
            $dsr['numeroAlbo'] = $rows['numeroAlbo'];
            $dsr['cera'] = $rows['cera'];
            $dsr['partitaIVA'] = $rows['partitaIVA'];
            $dsr['emailAzienda'] = $rows['emailAzienda'];
            $dsr['telefonoAzienda'] = $rows['telefonoAzienda'];
            $dsr['denominazione'] = $rows['denominazione'];
            $dsr['superiore'] = $rows['superiore'];
            $dsr['inferiore'] = $rows['inferiore'];
            $dsr['telefonoPaziente'] = $rows['telefonoPaziente'];
            $dsr['dataNascita'] = $rows['dataNascita'];
            $dsr['dataRitiro'] = $rows['dataRitiro'];
            $dsr['noteCorriere'] = $rows['noteCorriere'];
            $dsr['fkStatoPagamento'] = $rows['fkStatoPagamento'];

            $i++;
        }


        return $dsr;
    }
    
    
    public function getOrdiniByToken($token) {

        $sql = "SELECT ordini.idOrdine, ordini.fkUtente, ordini.fkAzienda, fatture.idFattura, ordini.codice, ordini.fkDettaglioPaziente, ordini.dataApertura, ordini.denti, ordini.dataAggiornamento, ordini.prezzo, ordini.fkStatoOrdini, comuni.nome as citta, regioni.nomeregione as regione, province.nomeprovincia as provincia, dettaglioAzienda.denominazione,dettaglioAzienda.telefono, dettaglioAzienda.indirizzo, dettaglioAzienda.CAP, dettaglioAzienda.numero, ordini.note, ordini.fkCentro, ordini.fkStatoPagamento, dettaglioMedico.nome, dettaglioMedico.cognome, dettaglioPaziente.nome as nomePaziente, dettaglioPaziente.cognome as cognomePaziente, ordini.denti from ordini INNER JOIN utenti ON ordini.fkUtente=utenti.idUtente INNER JOIN dettaglioMedico ON utenti.idUtente=dettaglioMedico.fkUtente INNER JOIN dettaglioPaziente ON dettaglioPaziente.idDettaglioPaziente=ordini.fkDettaglioPaziente INNER JOIN dettaglioAzienda ON dettaglioAzienda.idDettaglioAzienda=ordini.fkAzienda INNER JOIN comuni ON dettaglioAzienda.fkComune=comuni.id INNER JOIN province ON dettaglioAzienda.fkProvincia=province.idprovincia INNER JOIN regioni ON dettaglioAzienda.fkRegione=regioni.idregione LEFT JOIN fatture ON fatture.fkOrdine=ordini.idOrdine WHERE token='$token' LIMIT 1";
        $this->setSql($sql);

        $result = $this->query();
        $dsr = NULL;
        $i = 0;

        while ($rows = $this->fetch($result)) {

            $dsr['idOrdine'] = $rows['idOrdine'];
            $dsr['idFattura'] = $rows['idFattura'];
            $dsr['fkUtente'] = $rows['fkUtente'];
            $dsr['fkAzienda'] = $rows['fkAzienda'];
            $dsr['fkDettaglioPaziente'] = $rows['fkDettaglioPaziente'];
            $dsr['dataApertura'] = $rows['dataApertura'];
            $dsr['dataAggiornamento'] = $rows['dataAggiornamento'];
            $dsr['prezzo'] = $rows['prezzo'];
            $dsr['indirizzo'] = $rows['indirizzo'];
            $dsr['cap'] = $rows['CAP'];
            $dsr['citta'] = $rows['citta'];
            $dsr['provincia'] = $rows['provincia'];
            $dsr['regione'] = $rows['regione'];
            $dsr['fkStatoOrdini'] = $rows['fkStatoOrdini'];
            $dsr['note'] = $rows['note'];
            $dsr['telefono'] = $rows['telefono'];
            $dsr['numero'] = $rows['numero'];
            $dsr['codice'] = $rows['codice'];
            $dsr['nomePaziente'] = $rows['nomePaziente'];
            $dsr['cognomePaziente'] = $rows['cognomePaziente'];
            $dsr['nome'] = $rows['nome'];
            $dsr['cognome'] = $rows['cognome'];
            $dsr['denti'] = $rows['denti'];
            $dsr['precio'] = $rows['precio'];
            $dsr['fkStatoPagamento'] = $rows['fkStatoPagamento'];

            $i++;
        }


        return $dsr;
    }
    
    public function getCADByID($idOrdine) {

        $sql = "SELECT trattamento.idTrattamento, trattamento.cad,trattamento.masSup, trattamento.masInf, trattamento.masSupBis, trattamento.masInfBis, trattamento.prezzoTot, trattamento.prezzoPrim, trattamento.prezzoSec, trattamento.note as notas, trattamento.stato as estado, trattamento.dataApertura as fechaApertura, trattamento.dataAggiornamento as fechaActualizacion, ordini.idOrdine, ordini.fkUtente, ordini.fkAzienda, fatture.idFattura, ordini.codice, ordini.fkDettaglioPaziente, ordini.dataApertura, ordini.denti, ordini.dataAggiornamento, ordini.prezzo, ordini.fkStatoOrdini, comuni.nome as citta, regioni.nomeregione as regione, province.nomeprovincia as provincia, dettaglioAzienda.denominazione,dettaglioAzienda.telefono, dettaglioAzienda.indirizzo, dettaglioAzienda.CAP, dettaglioAzienda.numero, ordini.note, ordini.fkCentro, ordini.fkStatoPagamento, dettaglioMedico.nome, dettaglioMedico.cognome, dettaglioPaziente.nome as nomePaziente, dettaglioPaziente.cognome as cognomePaziente, ordini.denti from ordini INNER JOIN utenti ON ordini.fkUtente=utenti.idUtente INNER JOIN dettaglioMedico ON utenti.idUtente=dettaglioMedico.fkUtente INNER JOIN dettaglioPaziente ON dettaglioPaziente.idDettaglioPaziente=ordini.fkDettaglioPaziente INNER JOIN dettaglioAzienda ON dettaglioAzienda.idDettaglioAzienda=ordini.fkAzienda INNER JOIN comuni ON dettaglioAzienda.fkComune=comuni.id INNER JOIN province ON dettaglioAzienda.fkProvincia=province.idprovincia INNER JOIN regioni ON dettaglioAzienda.fkRegione=regioni.idregione INNER JOIN trattamento ON trattamento.fkOrdine=ordini.idOrdine LEFT JOIN fatture ON fatture.fkOrdine=ordini.idOrdine WHERE ordini.idOrdine='$idOrdine' LIMIT 1 ";
        $this->setSql($sql);

        $result = $this->query();
        $dsr = NULL;
        $i = 0;

        while ($rows = $this->fetch($result)) {
            
            $dsr[$i]['idTrattamento'] = $rows['idTrattamento'];
            $dsr[$i]['masSup'] = $rows['masSup'];
            $dsr[$i]['masInf'] = $rows['masInf'];
            $dsr[$i]['masSupBis'] = $rows['masSupBis'];
            $dsr[$i]['masInfBis'] = $rows['masInfBis'];
            $dsr[$i]['prezzoTot'] = $rows['prezzoTot'];
            $dsr[$i]['prezzoPrim'] = $rows['prezzoPrim'];
            $dsr[$i]['prezzoSec'] = $rows['prezzoSec'];
            $dsr[$i]['notas'] = $rows['notas'];
            $dsr[$i]['cad'] = $rows['cad'];
            $dsr[$i]['estado'] = $rows['estado'];
            $dsr[$i]['fechaApertura'] = $rows['fechaApertura'];
            $dsr[$i]['fechaActualizacion'] = $rows['fechaActualizacion'];
//
            $dsr[$i]['idOrdine'] = $rows['idOrdine'];
            $dsr[$i]['idFattura'] = $rows['idFattura'];
            $dsr[$i]['fkUtente'] = $rows['fkUtente'];
            $dsr[$i]['fkAzienda'] = $rows['fkAzienda'];
            $dsr[$i]['fkDettaglioPaziente'] = $rows['fkDettaglioPaziente'];
            $dsr[$i]['dataApertura'] = $rows['dataApertura'];
            $dsr[$i]['dataAggiornamento'] = $rows['dataAggiornamento'];
            $dsr[$i]['prezzo'] = $rows['prezzo'];
            $dsr[$i]['indirizzo'] = $rows['indirizzo'];
            $dsr[$i]['cap'] = $rows['CAP'];
            $dsr[$i]['citta'] = $rows['citta'];
            $dsr[$i]['provincia'] = $rows['provincia'];
            $dsr[$i]['regione'] = $rows['regione'];
            $dsr[$i]['fkStatoOrdini'] = $rows['fkStatoOrdini'];
            $dsr[$i]['note'] = $rows['note'];
            $dsr[$i]['telefono'] = $rows['telefono'];
            $dsr[$i]['numero'] = $rows['numero'];
            $dsr[$i]['codice'] = $rows['codice'];
            $dsr[$i]['nomePaziente'] = $rows['nomePaziente'];
            $dsr[$i]['cognomePaziente'] = $rows['cognomePaziente'];
            $dsr[$i]['nome'] = $rows['nome'];
            $dsr[$i]['cognome'] = $rows['cognome'];
            $dsr[$i]['denti'] = $rows['denti'];
            $dsr[$i]['precio'] = $rows['precio'];
            $dsr[$i]['fkStatoPagamento'] = $rows['fkStatoPagamento'];

            $i++;
        }


        return $dsr;
    }
    
    
     public function getCADByIDCAD($idTrattamento) {

        $sql = "SELECT trattamento.idTrattamento, trattamento.masSup, trattamento.masInf, trattamento.masSupBis, trattamento.masInfBis, trattamento.prezzoTot, trattamento.prezzoPrim, trattamento.prezzoSec, trattamento.note as notas, trattamento.stato as estado, trattamento.dataApertura as fechaApertura, trattamento.dataAggiornamento as fechaActualizacion, ordini.idOrdine, ordini.fkUtente, ordini.fkAzienda, fatture.idFattura, ordini.codice, ordini.fkDettaglioPaziente, ordini.dataApertura, ordini.denti, ordini.dataAggiornamento, ordini.prezzo, ordini.fkStatoOrdini, comuni.nome as citta, regioni.nomeregione as regione, province.nomeprovincia as provincia, dettaglioAzienda.denominazione,dettaglioAzienda.telefono, dettaglioAzienda.indirizzo, dettaglioAzienda.CAP, dettaglioAzienda.numero, ordini.note, ordini.fkCentro, ordini.fkStatoPagamento, dettaglioMedico.nome, dettaglioMedico.cognome, dettaglioPaziente.nome as nomePaziente, dettaglioPaziente.cognome as cognomePaziente, ordini.denti from ordini INNER JOIN utenti ON ordini.fkUtente=utenti.idUtente INNER JOIN dettaglioMedico ON utenti.idUtente=dettaglioMedico.fkUtente INNER JOIN dettaglioPaziente ON dettaglioPaziente.idDettaglioPaziente=ordini.fkDettaglioPaziente INNER JOIN dettaglioAzienda ON dettaglioAzienda.idDettaglioAzienda=ordini.fkAzienda INNER JOIN comuni ON dettaglioAzienda.fkComune=comuni.id INNER JOIN province ON dettaglioAzienda.fkProvincia=province.idprovincia INNER JOIN regioni ON dettaglioAzienda.fkRegione=regioni.idregione INNER JOIN trattamento ON trattamento.fkOrdine=ordini.idOrdine LEFT JOIN fatture ON fatture.fkOrdine=ordini.idOrdine WHERE trattamento.idTrattamento='$idTrattamento' LIMIT 1";
        $this->setSql($sql);

        $result = $this->query();
        $dsr = NULL;
        $i = 0;

        while ($rows = $this->fetch($result)) {
            
            $dsr['idTrattamento'] = $rows['idTrattamento'];
            $dsr['masSup'] = $rows['masSup'];
            $dsr['masInf'] = $rows['masInf'];
            $dsr['masSupBis'] = $rows['masSupBis'];
            $dsr['masInfBis'] = $rows['masInfBis'];
            $dsr['prezzoTot'] = $rows['prezzoTot'];
            $dsr['prezzoPrim'] = $rows['prezzoPrim'];
            $dsr['prezzoSec'] = $rows['prezzoSec'];
            $dsr['notas'] = $rows['notas'];
            $dsr['estado'] = $rows['estado'];
            $dsr['fechaApertura'] = $rows['fechaApertura'];
            $dsr['fechaActualizacion'] = $rows['fechaActualizacion'];
//
            $dsr['idOrdine'] = $rows['idOrdine'];
            $dsr['idFattura'] = $rows['idFattura'];
            $dsr['fkUtente'] = $rows['fkUtente'];
            $dsr['fkAzienda'] = $rows['fkAzienda'];
            $dsr['fkDettaglioPaziente'] = $rows['fkDettaglioPaziente'];
            $dsr['dataApertura'] = $rows['dataApertura'];
            $dsr['dataAggiornamento'] = $rows['dataAggiornamento'];
            $dsr['prezzo'] = $rows['prezzo'];
            $dsr['indirizzo'] = $rows['indirizzo'];
            $dsr['cap'] = $rows['CAP'];
            $dsr['citta'] = $rows['citta'];
            $dsr['provincia'] = $rows['provincia'];
            $dsr['regione'] = $rows['regione'];
            $dsr['fkStatoOrdini'] = $rows['fkStatoOrdini'];
            $dsr['note'] = $rows['note'];
            $dsr['telefono'] = $rows['telefono'];
            $dsr['numero'] = $rows['numero'];
            $dsr['codice'] = $rows['codice'];
            $dsr['nomePaziente'] = $rows['nomePaziente'];
            $dsr['cognomePaziente'] = $rows['cognomePaziente'];
            $dsr['nome'] = $rows['nome'];
            $dsr['cognome'] = $rows['cognome'];
            $dsr['denti'] = $rows['denti'];
            $dsr['precio'] = $rows['precio'];
            $dsr['fkStatoPagamento'] = $rows['fkStatoPagamento'];

            $i++;
        }


        return $dsr;
    }
    
    
    public function getContenutoOrdiniByID($idOrdine) {

        $sql = "SELECT * from contenuti INNER JOIN prodotti ON  fkProdotto=idProdotto INNER JOIN prezzi ON fkPrezzo=idPrezzo WHERE fkOrdine='$idOrdine' ";
        $this->setSql($sql);

        $result = $this->query();
        $dsr = NULL;
        $i = 0;

        while ($rows = $this->fetch($result)) {

            $dsr[$i] = $rows;

            $i++;
        }


        return $dsr;
    }
    
    public function getPrezzoMascherinaByUtente($idUtente, $quantita){
        
        if (empty($idUtente))
            $idUtente = $_SESSION['utente']['idUtente'];
        
        $sql = "SELECT prezzo as minimo from prezzi WHERE idPrezzo = '11'";
        $this->setSql($sql);

        $result = $this->query();
        $result = $this->fetch($result);
        $minimo = $result['minimo'];
        
        $sql = "SELECT prezzo as max from prezzi WHERE idPrezzo = '12'";
        $this->setSql($sql);

        $result = $this->query();
        $result = $this->fetch($result);
        $maximo = $result['max'];
        
        $sql = "SELECT idAbbonamento from abbonamenti WHERE fkUtente = $idUtente AND dataFine > NOW() ";
        
        $this->setSql($sql);

        $result = $this->query();
        $result = $this->fetch($result);
        
        if(!empty($result))
            $abonado = true;
        
        $sql = "SELECT prezzo, description from prezzi WHERE idPrezzo =  ";
        
        if($abonado!==true)
            $sql .="'9'";
        else{
            if($quantita < $minimo)
                $sql.="'4'";
            elseif($quantita > $maximo)
                $sql.="'5'";
            else
                $sql.="'1'";
        }
            
        $this->setSql($sql);

        $result = $this->query();
        $result = $this->fetch($result);
        $prezzo = $result['prezzo'];
        
        return $result;
            
    }

    public function getAllOrdiniByUtente($idUtente) {

        if (empty($idUtente))
            $idUtente = $_SESSION['utente']['idUtente'];
        $sql = "SELECT * from ordini INNER JOIN dettaglioPaziente ON dettaglioPaziente.idDettaglioPaziente=ordini.fkDettaglioPaziente WHERE ordini.fkUtente = $idUtente";
        $this->setSql($sql);

        $result = $this->query();
        $dsr = NULL;
        $i = 0;

        while ($rows = $this->fetch($result)) {

            $dsr[$i] = $rows;

            $i++;
        }


        return $dsr;
    }

    public function getCountOrdini() {

        $sql = "SELECT COUNT(*) as cuentas FROM ordini";
        $this->setSql($sql);

        $result = $this->query();
        $dsr = NULL;
        $i = 0;

        while ($rows = $this->fetch($result)) {

            $dsr[$i]['count'] = $rows['cuentas'];

            $i++;
        }
        return $dsr;
    }

    public function cambiaStato($token, $fkStatoOrdine) {

        if (empty($fkStatoOrdine))
            return NULL;

        $sql = "UPDATE ordini SET fkStatoPagamento = '$fkStatoOrdine', fkStatoOrdini='$fkStatoOrdine' WHERE token = '$token' ";

        $this->setSql($sql);
        $return = $this->query();


        return $return;
    }
    
    public function cambiaStatoByID($idOrdine, $fkStatoOrdine) {

        if (empty($fkStatoOrdine))
            return NULL;

        $sql = "UPDATE ordini SET fkStatoOrdini='$fkStatoOrdine' WHERE idOrdine = '$idOrdine' ";

        $this->setSql($sql);
        $return = $this->query();


        return $return;
    }
    
    public function cambiaStatoByCodice($codice, $fkStatoOrdine) {

        if (empty($codice))
            return NULL;

        $sql = "UPDATE ordini SET fkStatoOrdini='$fkStatoOrdine' WHERE codice = '$codice' ";

        $this->setSql($sql);
        $return = $this->query();


        return $return;
    }
    
    
     public function lastStep($idOrdine, $dataRitiro, $noteRitiro) {

        if (empty($idOrdine))
            return FALSE;

        $sql = "UPDATE ordini SET dataRitiro = '$dataRitiro', noteCorriere='$noteRitiro' WHERE idOrdine = '$idOrdine' ";

        $this->setSql($sql);
        $return = $this->query();


        return $return;
    }

    

    public function getFattureByUtente($idUtente) {
        $sql = "SELECT * FROM fatture WHERE fkUtente=$idUtente";
        $this->setSql($sql);

        $result = $this->query();
        $dsr = NULL;
        $i = 0;

        while ($rows = $this->fetch($result)) {

            $dsr[$i] = $rows;

            $i++;
        }
        return $dsr;
    }

    public function addPrescrizione($pasta) {

       
        $_SESSION["Payment_Amount"] = $pasta;


        $this->codice = uniqid();
        $sql = "INSERT INTO ordini (fkUtente, fkAzienda, fkDettaglioPaziente, dataApertura, prezzo, denti, note, cera, superiore, inferiore, codice, foto)";
        $sql .= "VALUES ('" . $_SESSION['utente']['idUtente'] . "', '$this->fkAzienda', '$this->fkPaziente', NOW(), '" . $_SESSION["Payment_Amount"] . "', '$this->denti', '$this->note', '$this->cera', '$this->superiore','$this->inferiore', '$this->codice' , '$this->foto')";
        
        
        $denti = $this->denti;
        $note = $this->note;
        $cera = $this->cera;
        $sup=$this->superiore;
        $inf=$this->inferiore;
        $code=$this->codice;
                
        
        $this->setSql($sql);
        
        /// INVIO EMAIL

            $mail = new PHPMailer();
            $body = "<p><img src='http://easysmile.beecloud.it/img/logo_easysmile.png'></p><div>Salve,<br /><br />Lei ha realizzato una nuova prescrizione sul portale EasySmile Group.<br />A continuazione un riassunto della prescrizione:<br />Denti:<strong>$denti</strong><br>Note:<strong>$note</strong><br><br>Codice Prescrizione:<strong>$code</strong><br>Cera Centrica:<strong>$cera</strong><br>Impronta superiore:<strong>$sup</strong><br><br>Impronta inferiore:<strong>$inf</strong><br><br>Questo messaggio e' stato generato automaticamente, La preghiamo pertanto di non rispondere a questa e-mail poiche' l'indirizzo non e' controllato.</div>";
            

            $mail->IsSMTP(); // telling the class to use SMTP
            $mail->Host = "mail.intervolutions.com"; // SMTP server
            $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
            // 1 = errors and messages
            // 2 = messages only
            $mail->SMTPAuth = true;                  // enable SMTP authentication
            $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
            $mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
            $mail->Port = 587;                   // set the SMTP port for the GMAIL server
            $mail->Username = "sistema@intervolutions.com";  // GMAIL username
            $mail->Password = "intervol2011";            // GMAIL password

            $mail->SetFrom('noreply@easysmilegroup.it', 'Easy Smile Group');

            $mail->AddReplyTo("contact@biobitlab.com", "BioBit Lab SRL");

            $mail->Subject = "Nuova prescrizione inserita";

            $mail->MsgHTML($body);
            $address = $_SESSION['utenti']['email'];
            $mail->AddAddress($address, $_SESSION['utenti']['nomeMedico']);
            $mail->AddAddress("contact@biobitlab.com", "Amministratore");
            /// END INVIO EMAIL
            
            $mail->send();
       
        if ($this->query() === true) {
             $idOrdine = mysql_insert_id(); 
            $sql = "INSERT INTO contenuti (fkOrdine, fkProdotto, quantita)";
            $sql .= "VALUES ('" . mysql_insert_id() . "', '1', '1' )";
            if(!$this->checkIfAbonado())
                $sql.=", ('" . mysql_insert_id() . "', '2', '1')";
            

            $this->setSql($sql);
            if ($this->query() === true) {

                $sql = "SELECT utenti.idUtente, nomeRap, cognomeRap, dettaglioAzienda.idDettaglioAzienda as idAzienda,telefonoMobile, dettaglioAzienda.fkComune, dettaglioAzienda.CAP, dettaglioAzienda.fkProvincia, dettaglioAzienda.fkRegione, comuni.nome as nomecomune, regioni.nomeregione, province.nomeprovincia, dettaglioAzienda.telefono, dettaglioAzienda.denominazione , dettaglioAzienda.indirizzo  ,dettaglioAzienda.partitaIVA , utenti.username, utenti.email, utenti.active from utenti INNER JOIN dettaglioAzienda ON utenti.idUtente = dettaglioAzienda.fkUtente INNER JOIN comuni ON comuni.id = dettaglioAzienda.fkComune INNER JOIN regioni ON regioni.idregione = dettaglioAzienda.fkRegione INNER JOIN province ON province.idprovincia = dettaglioAzienda.fkProvincia WHERE dettaglioAzienda.idDettaglioAzienda = '$this->fkAzienda' ";
                $this->setSql($sql);

                $result = $this->query();
                $dsr = NULL;

                $rows = $this->fetch($result);

                $prodotti = $this->getContenutoOrdiniByID($idOrdine);

                $paymentAmount = $_SESSION["Payment_Amount"];

                $paymentDesc="Acconto nuova prescrizione codice ".$this->codice;
                
                $shipToName = $_SESSION['utente']['nomeMedico'] . " " . $_SESSION['utente']['cognomeMedico'];
                $shipToStreet = $rows['indirizzo'] . " " . $rows['numero'];
                $shipToStreet2 = ""; //Leave it blank if there is no value
                $shipToCity = $rows['nomecomune'];
                $shipToState = $rows['nomeprovincia'];
                $shipToCountryCode = "IT"; // Please refer to the PayPal country codes in the API documentation
                $shipToZip = $rows['CAP'];
                $phoneNum = $rows['telefono'];

                $currencyCodeType = "EUR";
                $paymentType = "Sale";

                $returnURL = "http://easysmile.beecloud.it/panel/ordini.php";
                $cancelURL = "http://easysmile.beecloud.it/panel/ordini.php";

                $resArray = CallMarkExpressCheckout($this->codice, $prodotti, $paymentDesc, $paymentAmount, $currencyCodeType, $paymentType, $returnURL, $cancelURL, $shipToName, $shipToStreet, $shipToCity, $shipToState, $shipToCountryCode, $shipToZip, $shipToStreet2, $phoneNum);

                $ack = strtoupper($resArray["ACK"]);
                if ($ack == "SUCCESS" || $ack == "SUCCESSWITHWARNING") {
                    $token = urldecode($resArray["TOKEN"]);
                    $_SESSION['reshash'] = $token;
                    $sql = "UPDATE ordini SET token = '$token' WHERE codice = '$this->codice' ";
                    $this->setSql($sql);
                    $this->query();
                    RedirectToPayPal($token);
                } else {
                    $ErrorCode = urldecode($resArray["L_ERRORCODE0"]);
                    $ErrorShortMsg = urldecode($resArray["L_SHORTMESSAGE0"]);
                    $ErrorLongMsg = urldecode($resArray["L_LONGMESSAGE0"]);
                    $ErrorSeverityCode = urldecode($resArray["L_SEVERITYCODE0"]);

                    $error = "PayPal API call failed. ";
                    $error .= "<br>Detailed Error Message: " . $ErrorLongMsg;
                    $error .= "<br>Short Error Message: " . $ErrorShortMsg;
                    $error .= "<br>Error Code: " . $ErrorCode;
                    $error .= "<br>Error Severity Code: " . $ErrorSeverityCode;
                    return $error;
                }
            } else
                echo FALSE;
        } else
            echo FALSE;
    }

    public function setTokenPayPal($token, $codice) {
        $sql = "UPDATE ordini SET token = '$token' WHERE codice = '$codice' ";
        $this->setSql($sql);
        return $this->query() ? true : false;
    }
    
    public function setTokenPayPalTrattamento($token, $codice) {
        $sql = "UPDATE trattamento SET token = '$token' WHERE idTrattamento = '$codice' ";
        $this->setSql($sql);
        return $this->query() ? true : false;
    }

    public function addFatturaPrescrizione($token) {
        $sql = "SELECT idOrdine, codice, prezzo, fkAzienda, fkUtente, fkDettaglioPaziente from ordini WHERE token = '$token' LIMIT 1";
        $this->setSql($sql);

        $result = $this->query();
        $row = $this->fetch($result);

        $sql = "INSERT INTO fatture (fkUtente, fkAzienda, fkDettaglioPaziente, fkOrdine, data, totale, tipoFattura, descrizione, codice)";
        $sql .= "VALUES ('" . $_SESSION['utente']['idUtente'] . "', '" . $row['fkAzienda'] . "', '" . $row['fkDettaglioPaziente'] . "', '" . $row['idOrdine'] . "', NOW(), '" . $row['prezzo'] . "', '1', 'Fattura dell´acconto della prescrizione " . $row['codice'] . "', '" . $row['codice'] . "' )";

        $this->setSql($sql);
        return $this->query() === true ? true : false;
    }
    
    public function addFatturaTrattamento($token) {
        $sql = "SELECT idOrdine, codice, prezzoTot as prezzo, fkAzienda, fkUtente, fkDettaglioPaziente from trattamento INNER JOIN ordini ON trattamento.fkOrdine=ordini.idOrdine WHERE trattamento.token = '$token' LIMIT 1";
        $this->setSql($sql);

        $result = $this->query();
        $row = $this->fetch($result);
        
               

        $sql = "INSERT INTO fatture (fkUtente, fkAzienda, fkDettaglioPaziente, fkOrdine, data, totale, tipoFattura, descrizione, codice)";
        $sql .= "VALUES ('" . $_SESSION['utente']['idUtente'] . "', '" . $row['fkAzienda'] . "', '" . $row['fkDettaglioPaziente'] . "', '" . $row['idOrdine'] . "', NOW(), '" . $row['prezzo'] . "', '3', 'Fattura del trattamento della prescrizione " . $row['codice'] . "', '" . $row['codice'] . "' )";
 $mail = new PHPMailer();
            $body = "<p><img src='http://easysmile.beecloud.it/img/logo_easysmile.png'></p><div>Salve,<br /><br />Lei ha realizzato un pagamento per il trattamento numero " . $row['codice'] . " sul portale EasySmile Group.<br /><br>Questo messaggio e' stato generato automaticamente, La preghiamo pertanto di non rispondere a questa e-mail poiche' l'indirizzo non e' controllato.</div>";
            

            $mail->IsSMTP(); // telling the class to use SMTP
            $mail->Host = "mail.intervolutions.com"; // SMTP server
            $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
            // 1 = errors and messages
            // 2 = messages only
            $mail->SMTPAuth = true;                  // enable SMTP authentication
            $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
            $mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
            $mail->Port = 587;                   // set the SMTP port for the GMAIL server
            $mail->Username = "sistema@intervolutions.com";  // GMAIL username
            $mail->Password = "intervol2011";            // GMAIL password

            $mail->SetFrom('noreply@easysmilegroup.it', 'Easy Smile Group');

            $mail->AddReplyTo("contact@biobitlab.com", "BioBit Lab SRL");

            $mail->Subject = "Nuova prescrizione inserita";

            $mail->MsgHTML($body);
            $address = $_SESSION['utenti']['email'];
            $mail->AddAddress($address, $_SESSION['utenti']['nomeMedico']);
            $mail->AddAddress("contact@biobitlab.com", "Amministratore");
            /// END INVIO EMAIL
            
            $mail->send();
        $this->setSql($sql);
        return $this->query() === true ? true : false;
    }
    
    public function addFatturaTrattamentoUno($token) {
        $sql = "SELECT idOrdine, codice, prezzoTot as prezzo, fkAzienda, fkUtente, fkDettaglioPaziente from trattamento INNER JOIN ordini ON trattamento.fkOrdine=ordini.idOrdine WHERE trattamento.token = '$token' LIMIT 1";
        $this->setSql($sql);

        $result = $this->query();
        $row = $this->fetch($result);

        $sql = "INSERT INTO fatture (fkUtente, fkAzienda, fkDettaglioPaziente, fkOrdine, data, totale, tipoFattura, descrizione, codice)";
        $sql .= "VALUES ('" . $_SESSION['utente']['idUtente'] . "', '" . $row['fkAzienda'] . "', '" . $row['fkDettaglioPaziente'] . "', '" . $row['idOrdine'] . "', NOW(), '" . $row['prezzo'] . "', '4', 'Fattura del primo frazionamento del trattamento " . $row['codice'] . "', '" . $row['codice'] . "' )";

        $this->setSql($sql);
        return $this->query() === true ? true : false;
    }
    
    public function addFatturaTrattamentoDos($token) {
        $sql = "SELECT idOrdine, codice, prezzoTot as prezzo, fkAzienda, fkUtente, fkDettaglioPaziente from trattamento INNER JOIN ordini ON trattamento.fkOrdine=ordini.idOrdine WHERE trattamento.token = '$token' LIMIT 1";
        $this->setSql($sql);

        $result = $this->query();
        $row = $this->fetch($result);

        $sql = "INSERT INTO fatture (fkUtente, fkAzienda, fkDettaglioPaziente, fkOrdine, data, totale, tipoFattura, descrizione, codice)";
        $sql .= "VALUES ('" . $_SESSION['utente']['idUtente'] . "', '" . $row['fkAzienda'] . "', '" . $row['fkDettaglioPaziente'] . "', '" . $row['idOrdine'] . "', NOW(), '" . $row['prezzo'] . "', '5', 'Fattura del secondo frazionamento del trattamento " . $row['codice'] . "', '" . $row['codice'] . "' )";

        $this->setSql($sql);
        return $this->query() === true ? true : false;
    }
    
    public function addFatturaAbbonamento($token, $payerID, $pago) {


        $sql = "INSERT INTO fatture (fkUtente, data, totale, tipoFattura, descrizione, codice)";
        $sql .= "VALUES ('" . $_SESSION['utente']['idUtente'] . "', NOW(), '$pago', '2', 'Fattura dell´abbonamento a EasySmile Group', '$payerID' )";

        $this->setSql($sql);
        
        $mail = new PHPMailer();
            $body = "<p><img src='http://easysmile.beecloud.it/img/logo_easysmile.png'></p><div>Salve,<br /><br />Lei ha realizzato un nuovo abbonamento per un anno sul portale EasySmile Group.<br /><br>Questo messaggio e' stato generato automaticamente, La preghiamo pertanto di non rispondere a questa e-mail poiche' l'indirizzo non e' controllato.</div>";
            

            $mail->IsSMTP(); // telling the class to use SMTP
            $mail->Host = "mail.intervolutions.com"; // SMTP server
            $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
            // 1 = errors and messages
            // 2 = messages only
            $mail->SMTPAuth = true;                  // enable SMTP authentication
            $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
            $mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
            $mail->Port = 587;                   // set the SMTP port for the GMAIL server
            $mail->Username = "sistema@intervolutions.com";  // GMAIL username
            $mail->Password = "intervol2011";            // GMAIL password

            $mail->SetFrom('noreply@easysmilegroup.it', 'Easy Smile Group');

            $mail->AddReplyTo("contact@biobitlab.com", "BioBit Lab SRL");

            $mail->Subject = "Nuova prescrizione inserita";

            $mail->MsgHTML($body);
            $address = $_SESSION['utenti']['email'];
            $mail->AddAddress($address, $_SESSION['utenti']['nomeMedico']);
            $mail->AddAddress("contact@biobitlab.com", "Amministratore");
            /// END INVIO EMAIL
            
            $mail->send();
        
        
        return $this->query() === true ? true : false;
    }

    public function getFatturaByID($idFattura) {

        $sql = "SELECT fatture.idFattura, fatture.codice,fatture.data, dettaglioMedico.nome as nomeMedico, dettaglioMedico.cognome as cognomeMedico, dettaglioMedico.partitaIVA as partitaIVAMedico, dettaglioMedico.telefono as telefonoMedico, utenti.email as emailMedico, fatture.totale, fatture.fkAzienda,dettaglioAzienda.emailAzienda, dettaglioAzienda.denominazione, dettaglioAzienda.partitaIVA,dettaglioAzienda.indirizzo,dettaglioAzienda.CAP,dettaglioAzienda.numero, dettaglioAzienda.telefono, comuni.nome, regioni.nomeregione, province.nomeprovincia from fatture LEFT JOIN dettaglioAzienda ON fatture.fkAzienda=dettaglioAzienda.idDettaglioAzienda LEFT JOIN comuni ON dettaglioAzienda.fkComune=comuni.id LEFT JOIN regioni ON dettaglioAzienda.fkRegione=regioni.idregione LEFT JOIN province ON dettaglioAzienda.fkProvincia=province.idprovincia INNER JOIN utenti ON fatture.fkUtente=utenti.idUtente INNER JOIN dettaglioMedico ON dettaglioMedico.fkUtente=utenti.idUtente WHERE idFattura = '$idFattura' LIMIT 1";
        $this->setSql($sql);

        $result = $this->query();
        $row = $this->fetch($result);

        return $row;
    }

    public function getPrezzoNuovaPrescrizione() {

        $sql = "SELECT prezzo from prezzi WHERE idPrezzo = '3' LIMIT 1";
        $this->setSql($sql);

        $result = $this->query();
        $row = $this->fetch($result);
        if($this->checkIfAbonado())
            $spedizione = '0';
        else
            $spedizione = $row['prezzo'];
        
        $sql = "SELECT prezzo from prezzi WHERE idPrezzo = '8' LIMIT 1";
        $this->setSql($sql);

        $result = $this->query();
        $row = $this->fetch($result);
        $acconto = $row['prezzo'];

        $prezzo = array(spedizione => $spedizione, acconto => $acconto, totale => $spedizione + $acconto);

        return $prezzo;
    }
    
    public function getContenutoOrdiniByFatturaID($idFattura) {

        $sql = "SELECT prodotti.nome as product, prodotti.categoria, prodotti.description, prezzi.prezzo, contenuti.quantita from contenuti INNER JOIN prodotti ON  fkProdotto=idProdotto INNER JOIN prezzi ON fkPrezzo=idPrezzo INNER JOIN ordini ON contenuti.fkOrdine=ordini.idOrdine INNER JOIN fatture ON fatture.fkOrdine=ordini.idOrdine WHERE fatture.idFattura='$idFattura' ";
        $this->setSql($sql);

        $result = $this->query();
        $dsr = NULL;
        $i = 0;

        while ($rows = $this->fetch($result)) {

$dsr[$i] = $rows;

            $i++;
        }


        return $dsr;
    }
    
    public function getContenutoTrattamentoByFatturaID($idFattura) {

        $sql = "SELECT masSup, masInf, masSupBis, masInfBis from trattamento INNER JOIN ordini ON  fkOrdine=idOrdine INNER JOIN fatture ON fatture.fkOrdine=ordini.idOrdine WHERE fatture.idFattura='$idFattura' LIMIT 1";
        $this->setSql($sql);

        $result = $this->query();
        $dsr = NULL;
        $i = 0;

        while ($rows = $this->fetch($result)) {

$dsr = $rows;

            $i++;
        }


        return $dsr;
    }

    public function getContenutoTrattamentoByFatturaID2($idFattura) {

        $sql = "SELECT masSup, masInf, masSupBis, masInfBis from trattamento INNER JOIN ordini ON  fkOrdine=idOrdine INNER JOIN fatture ON fatture.fkOrdine=ordini.idOrdine WHERE fatture.idFattura='$idFattura' LIMIT 1";
        $this->setSql($sql);

        $result = $this->query();
        $dsr = NULL;
        $i = 0;

        while ($rows = $this->fetch($result)) {

$dsr = $rows;

            $i++;
        }


        return $dsr;
    }
    
    
    public function getPrezzoAcconto(){
        $sql = "SELECT prezzo from prezzi WHERE idPrezzo = '8' LIMIT 1";
        $this->setSql($sql);

        $result = $this->query();
        $row = $this->fetch($result);
        $acconto = $row['prezzo'];
        return $acconto;
    }
    
    public function getPrezzoPrimoRange(){
        $sql = "SELECT prezzo from prezzi WHERE idPrezzo = '4' LIMIT 1";
        $this->setSql($sql);

        $result = $this->query();
        $row = $this->fetch($result);
        $acconto = $row['prezzo'];
        return $acconto;
    }
    
    public function getPrezzoSecondoRange(){
        $sql = "SELECT prezzo from prezzi WHERE idPrezzo = '1' LIMIT 1";
        $this->setSql($sql);

        $result = $this->query();
        $row = $this->fetch($result);
        $acconto = $row['prezzo'];
        return $acconto;
    }
    
    public function getPrezzoTerzoRange(){
        $sql = "SELECT prezzo from prezzi WHERE idPrezzo = '5' LIMIT 1";
        $this->setSql($sql);

        $result = $this->query();
        $row = $this->fetch($result);
        $acconto = $row['prezzo'];
        return $acconto;
    }
    
    public function getFrazionamenti(){
         $sql = "SELECT prezzo from prezzi WHERE idPrezzo = '11' LIMIT 1";
        $this->setSql($sql);

        $result = $this->query();
        $row = $this->fetch($result);
        $frazionamento['min'] = $row['prezzo'];
        $sql = "SELECT prezzo from prezzi WHERE idPrezzo = '13' LIMIT 1";
        $this->setSql($sql);

        $result = $this->query();
        $row = $this->fetch($result);
        $frazionamento['minimo'] = $row['prezzo'];
        $sql = "SELECT prezzo from prezzi WHERE idPrezzo = '12' LIMIT 1";
        $this->setSql($sql);

        $result = $this->query();
        $row = $this->fetch($result);
        $frazionamento['max'] = $row['prezzo'];
        
        return $frazionamento;
    }
    
    public function checkIfAbonado($idUtente){
        
        if (empty($idUtente))
            $idUtente = $_SESSION['utente']['idUtente'];
        
        $sql = "SELECT idAbbonamento from abbonamenti WHERE fkUtente = $idUtente AND dataFine > NOW() ";
        
        $this->setSql($sql);

        $result = $this->query();
        $result = $this->fetch($result);
        
        if(!empty($result))
            return true;
        else
            return false;   
        
    }
    
    public function getPrezzoSpedizione(){
        $sql = "SELECT prezzo from prezzi WHERE idPrezzo = '3' LIMIT 1";
        $this->setSql($sql);

        $result = $this->query();
        $row = $this->fetch($result);
        $spedizione = $row['prezzo'];
        
        return $spedizione;
    }

    public function getMora(){
        
        $sql = "SELECT prezzo from prezzi WHERE idPrezzo = '10' LIMIT 1";
        $this->setSql($sql);

        $result = $this->query();
        $row = $this->fetch($result);
        $spedizione = $row['prezzo'];
        
        return $spedizione;
    }
    public function getAbbonamentoPrezzo(){
        
        $sql = "SELECT prezzo from prezzi WHERE idPrezzo = '2' LIMIT 1";
        $this->setSql($sql);

        $result = $this->query();
        $row = $this->fetch($result);
        $spedizione = $row['prezzo'];
        
        return $spedizione;
    }
    public function addTrattamento(){
        
        $this->idOrdine = $this->getIDbyCodice($this->codice);
        
        $sql = "SELECT email from utenti inner join ordini on fkUtente=idUtente WHERE idOrdine = '$this->idOrdine' LIMIT 1";
        $this->setSql($sql);

        $result = $this->query();
        $row = $this->fetch($result);
        $address = $row['email'];

         $mail = new PHPMailer();
            $body = "<p><img src='http://easysmile.beecloud.it/img/logo_easysmile.png'></p><div>Salve,<br /><br />Lei ha realizzato un pagamento per il trattamento numero " . $row['codice'] . " sul portale EasySmile Group.<br /><br>Questo messaggio e' stato generato automaticamente, La preghiamo pertanto di non rispondere a questa e-mail poiche' l'indirizzo non e' controllato.</div>";
            

            $mail->IsSMTP(); // telling the class to use SMTP
            $mail->Host = "mail.intervolutions.com"; // SMTP server
            $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
            // 1 = errors and messages
            // 2 = messages only
            $mail->SMTPAuth = true;                  // enable SMTP authentication
            $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
            $mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
            $mail->Port = 587;                   // set the SMTP port for the GMAIL server
            $mail->Username = "sistema@intervolutions.com";  // GMAIL username
            $mail->Password = "intervol2011";            // GMAIL password

            $mail->SetFrom('noreply@easysmilegroup.it', 'Easy Smile Group');

            $mail->AddReplyTo("contact@biobitlab.com", "BioBit Lab SRL");

            $mail->Subject = "Nuova prescrizione inserita";

            $mail->MsgHTML($body);
           
            $mail->AddAddress($address, "Dott");
            $mail->AddAddress("contact@biobitlab.com", "Amministratore");
            /// END INVIO EMAIL
            
            $mail->send();
        
        $sql = "INSERT INTO trattamento (masSup, masInf, masSupBis, masInfBis, prezzoTot, prezzoPrim, PrezzoSec, dataApertura, cad, fkOrdine) ";
        $sql.= "VALUES ('$this->massup', '$this->masinf', '$this->massupbis', '$this->masinfbis', '$this->precio', '$this->precio2', '$this->precio3', NOW(), '$this->cad', '$this->idOrdine' )";

        $this->setSql($sql);
        return($this->query()) ? 'true' : 'false';
        
    }
    
    public function addAbbonamento($token, $payerID){
        
        $sql = "INSERT INTO abbonamenti (fkUtente, tipoAbbonamento, dataInizio, dataFine, codice, token) ";
        $sql.= "VALUES ('".$_SESSION['utente']['idUtente']."', '2', NOW(), DATE_ADD(NOW(), INTERVAL 1 YEAR), '$payerID', '$token' )";

        $this->setSql($sql);
        return($this->query()) ? 'true' : 'false';
        
    }
    
    public function cambiaStatoTrattamento(){
        $sql = "SELECT fkOrdine FROM trattamento WHERE idTRattamento = '$this->idTrattamento' ";
         $this->setSql($sql);
         $this->query();
         $row = $this->fetch($result);
          $idOrdine = $row['idOrdine'];
          
        $sql = "UPDATE trattamento SET stato = '$this->decision', note='$this->notas', dataAggiornamento=NOW() WHERE idTrattamento = '$this->idTrattamento' ";
      //  var_dump($sql);die;
        $this->setSql($sql);
        if($this->query()){
            if($this->decision>3){
            $sql = "UPDATE ordini SET fkStatoOrdini = '5' WHERE idOrdine = '$idOrdine' ";
     
        $this->setSql($sql);
        return $this->query()? true:false;
            }        else return true;
            }
            
        else return false;
            
    }
    
    public function cambiaStatoTrattamentoByToken($token, $decision){
        $sql = "SELECT fkOrdine FROM trattamento WHERE token = '$token' ";
         $this->setSql($sql);
         $this->query();
         $row = $this->fetch($result);
          $idOrdine = $row['idOrdine'];
          
        $sql = "UPDATE trattamento SET stato = '$decision', dataAggiornamento=NOW() WHERE token = '$token' ";
      //  var_dump($sql);die;
        $this->setSql($sql);
        if($this->query()){
            if($decision==4){
            $sql = "UPDATE ordini SET fkStatoOrdini = '7' WHERE idOrdine = '$idOrdine' ";
     
        $this->setSql($sql);
        return $this->query()? true:false;
            }elseif($decision==6){
                $sql = "UPDATE ordini SET fkStatoOrdini = '6' WHERE idOrdine = '$idOrdine' ";
     
        $this->setSql($sql);
        return $this->query()? true:false;
            }
            else return true;
            }
            
        else return false;
            
    }
    
    public function getIDbyCodice($codice){
        
        if(!isset($codice))
            $codice = $this->codice;
        
        $sql = "SELECT idOrdine FROM ordini WHERE codice ='$codice' ";
        
        $this->setSql($sql);

        $result = $this->query();
        $row = $this->fetch($result);
        
       return $row['idOrdine'];
        
    }
    
    
    
      public function getAllOrdiniByPaziente($idUtente) {

        if (empty($idUtente))
            $idUtente = $_SESSION['utente']['idUtente'];
        $sql = "SELECT * from ordini INNER JOIN dettaglioPaziente ON dettaglioPaziente.idDettaglioPaziente=ordini.fkDettaglioPaziente LEFT JOIN trattamento ON trattamento.fkOrdine=ordini.idOrdine WHERE dettaglioPaziente.fkUtente = '$idUtente'";
        $this->setSql($sql);

        $result = $this->query();
        $dsr = NULL;
        $i = 0;

        while ($rows = $this->fetch($result)) {

            $dsr = $rows;

            $i++;
        }
        


        return $dsr;
    }
    
    public function addPazienteAzienda($idUtente, $fkAzienda){
        if (empty($idUtente))
            $idUtente = $_SESSION['utente']['idUtente'];
        $sql = "SELECT idDettaglioPaziente FROM dettaglioPaziente WHERE fkUtente = '$idUtente' ";
         $this->setSql($sql);
         $this->query();
         $row = $this->fetch($result);
          $idPaziente = $row['idDettaglioPaziente'];
          
          
           $sql = "INSERT INTO bridgePazienteAzienda (fkPaziente, fkAzienda) VALUES($idPaziente, $fkAzienda ) ";
         $this->setSql($sql);
         return $this->query()? true:false;
        
        
    }
    
    
}
