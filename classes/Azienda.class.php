<?php

require_once DOC_ROOT . "config/sys_application.php";
require_once CLASS_DIR . "DB.class.php";

class Azienda extends DB {

    public $idUtente;
    public $denominazione;
    public $partitaIVA;
    public $telefono;
    public $username;
    public $password;
    public $indirizzo;
    public $citta;
    public $provincia;

    public function __construct($idUtente = null) {

        if (!empty($idUtente)) {
            $this->idUtente = $idUtente;
        }
        parent::__construct();
    }

    public function isError($update = NULL) {

        $error = "";

        if (empty($this->denominazione))
            $error .= "Denominazione non inserita<br />";

        if (empty($this->partitaIVA))
            $error .= "Partita IVA non inserita<br />";
        /*
          if ( empty($this->username) )
          $error .= "Username non inserita<br />";

          if ( !empty($this->username) ) {
          $sql_check_username = "SELECT count(1) as numUsername FROM utenti WHERE username = '".$this->username."'";

          // Controllo da fare solo in caso di aggiornamenti
          if (!empty($update))
          $sql_check_username .= " AND idUtente !=".$this->idUtente;

          $this->setSql($sql_check_username);
          $returnQueryUsername = $this->query();
          $rowUsername = $this->fetch($returnQueryUsername);

          if ( $rowUsername['numUsername']>0 )
          $error .= "La username inserita &egrave; gi&agrave; utilizzata da un altro utente! Provare con un'altra username<br />";
          }
         */

        if (empty($this->email))
            $error .= "Email non inserita<br />";

        if (!empty($this->email) && !filter_var($this->email, FILTER_VALIDATE_EMAIL))
            $emailErr = "Formato email non valido";
        /*
          if ( !empty($this->email) ) {
          $sql_check_email = "SELECT count(1) as numEmail FROM utenti WHERE email = '".$this->email."'";

          // Controllo da fare solo in caso di aggiornamenti
          if (!empty($update))
          $sql_check_email .= " AND idUtente !=".$this->idUtente;

          $this->setSql($sql_check_email);
          $returnQuesryEmail = $this->query();
          $row = $this->fetch($returnQuesryEmail);

          if ( $row['numEmail']>0 )
          $error .= "La mail inserita &egrave; gi&agrave; utilizzata da un altro utente! Provare con un'altra email<br />";
          }

          if ( empty($this->password) )
          $error .= "Password non inserita<br />";
         */

        if (!empty($this->password) && strlen($this->password) < 6)
            $error .= "La password inserita deve essere almeno di 6 caratteri<br />";

        return $error;
    }

    public function insert() {

        $sql = "INSERT INTO utenti (username, password, email, active, deleted, fkRuolo) VALUES ('$this->username', '" . md5($this->password) . "', '$this->email', " . UTENTE_ATTIVO . ", " . UTENTE_NON_CANCELLATO . ", " . AZIENDA . " )";

        $this->setSql($sql);
        $result = $this->query();

        $sql_check = "SELECT idUtente FROM utenti WHERE username = '$this->username' and password = '" . md5($this->password) . "' AND email = '$this->email'";
        $this->setSql($sql_check);
        $result_check = $this->query();
        $row = $this->fetch($result_check);

        $idUtente = $row['idUtente'];

        if (empty($idUtente))
            return "Utente non inserito correttamente";

        $sql_insert_dettaglio = "INSERT INTO dettaglioAzienda (denominazione, partitaIVA, indirizzo, provincia, citta, fkUtente) VALUES ('$this->denominazione', '$this->partitaIVA', '$this->indirizzo', '$this->provincia', '$this->citta', $idUtente)";
        $this->setSql($sql_insert_dettaglio);
        $result_insert_dettaglio = $this->query();

        return NULL;
    }

    public function getAziendaInAttesa() {

        $sql = "SELECT azienda.idAzienda, azienda.denominazione, azienda.partitaIVA FROM azienda INNER JOIN utenti ON azienda.fkUtente = utenti.idUtente WHERE utenti.active = '0' ORDER BY idUtente ASC";
        $this->setSql($sql);

        $result = $this->query();

        $referral = NULL;
        $i = 0;
        require_once CLASS_DIR . 'Utils.class.php';

        $oUtils = new Utils();

        while ($rows = $this->fetch($result)) {
            $referral[$i]['idAzienda'] = $rows['idAzienda'];
            $referral[$i]['denominazione'] = $rows['denominazione'];
            $referral[$i]['partitaIVA'] = $rows['partitaIVA'];
            $referral[$i]['idUtente'] = $rows['idUtente'];
            $i++;
        }

        return $referral;
    }

    public function getAllAziende($status) {

        $sql = "SELECT utenti.idUtente, dettaglioAzienda.telefono ,dettaglioAzienda.fkRegione , dettaglioAzienda.idDettaglioAzienda ,dettaglioAzienda.denominazione ,dettaglioAzienda.indirizzo ,dettaglioAzienda.fkProvincia ,dettaglioAzienda.partitaIVA , dettaglioAzienda.fkComune,  utenti.username, utenti.email, utenti.active, utenti.deleted, province.nomeprovincia as provincia, comuni.nome as citta from utenti INNER JOIN dettaglioAzienda ON utenti.idUtente = dettaglioAzienda.fkUtente INNER JOIN comuni ON comuni.id = dettaglioAzienda.fkComune INNER JOIN province ON province.idprovincia = dettaglioAzienda.fkProvincia WHERE utenti.deleted = 0 ";
        if (!empty($status)) {
            if ($status == "abbonato")
                $sql.=" AND dettaglioAzienda.abbonamento='1' ";
            if ($status == "attesa")
                $sql.=" AND utenti.active='0' ";
        }

        $this->setSql($sql);

        $result = $this->query();
        $dsr = NULL;
        $i = 0;

        while ($rows = $this->fetch($result)) {

            $dsr[$i]['idUtente'] = $rows['idUtente'];
            $dsr[$i]['idAzienda'] = $rows['idDettaglioAzienda'];
            $dsr[$i]['denominazione'] = $rows['denominazione'];
            $dsr[$i]['username'] = $rows['username'];
            $dsr[$i]['email'] = $rows['email'];
            $dsr[$i]['stato'] = $rows['active'];
            $dsr[$i]['active'] = $rows['deleted'];
            $dsr[$i]['abono'] = $rows['abbonamento'];
            $dsr[$i]['indirizzo'] = $rows['indirizzo'];
            $dsr[$i]['provincia'] = $rows['provincia'];
            $dsr[$i]['abbonamento'] = $rows['abbonamento'];
            $dsr[$i]['citta'] = $rows['citta'];
            $dsr[$i]['telefono'] = $rows['telefono'];
            $dsr[$i]['partitaIVA'] = $rows['partitaIVA'];


            $i++;
        }


        return $dsr;
    }
    
    
    public function getAllAziendeByRegion($regione) {

        $sql = "SELECT gradimenti.score, utenti.idUtente, dettaglioAzienda.telefono ,dettaglioAzienda.fkRegione , dettaglioAzienda.idDettaglioAzienda ,dettaglioAzienda.denominazione ,dettaglioAzienda.indirizzo ,dettaglioAzienda.fkProvincia ,dettaglioAzienda.partitaIVA , dettaglioAzienda.fkComune,  utenti.username, utenti.email, utenti.active, utenti.deleted, regioni.nomeregione as regione, province.nomeprovincia as provincia, comuni.nome as citta from utenti INNER JOIN dettaglioAzienda ON utenti.idUtente = dettaglioAzienda.fkUtente INNER JOIN comuni ON comuni.id = dettaglioAzienda.fkComune INNER JOIN province ON province.idprovincia = dettaglioAzienda.fkProvincia INNER JOIN regioni ON regioni.idregione = dettaglioAzienda.fkRegione LEFT JOIN gradimenti ON gradimenti.fkAzienda=dettaglioAzienda.idDettaglioAzienda WHERE utenti.deleted = 0 ";
        if (!empty($regione)) {
                $sql.=" AND regioni.nomeregione LIKE '$regione' GROUP BY idDettaglioAzienda";
        }

        $this->setSql($sql);

        $result = $this->query();
        $dsr = NULL;
        $i = 0;

        while ($rows = $this->fetch($result)) {

            $dsr[$i]['idUtente'] = $rows['idUtente'];
            $dsr[$i]['idAzienda'] = $rows['idDettaglioAzienda'];
            $dsr[$i]['denominazione'] = $rows['denominazione'];
            $dsr[$i]['username'] = $rows['username'];
            $dsr[$i]['email'] = $rows['email'];
            $dsr[$i]['stato'] = $rows['active'];
            $dsr[$i]['active'] = $rows['deleted'];
            $dsr[$i]['abono'] = $rows['abbonamento'];
            $dsr[$i]['indirizzo'] = $rows['indirizzo'];
            $dsr[$i]['provincia'] = $rows['provincia'];
            $dsr[$i]['abbonamento'] = $rows['abbonamento'];
            $dsr[$i]['citta'] = $rows['citta'];
            $dsr[$i]['telefono'] = $rows['telefono'];
            $dsr[$i]['partitaIVA'] = $rows['partitaIVA'];
            $dsr[$i]['score'] = $rows['score'];

            $i++;
        }


        return $dsr;
    }
    
    

    public function getMyAziende($idUtente) {

        $sql = "SELECT utenti.idUtente, dettaglioAzienda.telefono ,dettaglioAzienda.fkRegione ,dettaglioAzienda.numero , dettaglioAzienda.idDettaglioAzienda ,dettaglioAzienda.denominazione ,dettaglioAzienda.indirizzo ,dettaglioAzienda.fkProvincia ,dettaglioAzienda.partitaIVA , dettaglioAzienda.fkComune,  utenti.username, utenti.email, utenti.active, utenti.deleted, province.nomeprovincia as provincia, comuni.nome as citta, regioni.nomeregione as regione from utenti INNER JOIN dettaglioAzienda ON utenti.idUtente = dettaglioAzienda.fkUtente INNER JOIN comuni ON comuni.id = dettaglioAzienda.fkComune INNER JOIN regioni ON regioni.idregione = dettaglioAzienda.fkRegione INNER JOIN province ON province.idprovincia = dettaglioAzienda.fkProvincia INNER JOIN bridgeMedicoAzienda ON dettaglioAzienda.idDettaglioAzienda=bridgeMedicoAzienda.fkAzienda INNER JOIN dettaglioMedico ON bridgeMedicoAzienda.fkMedico=dettaglioMedico.idDettaglioMedico WHERE dettaglioMedico.fkUtente = $idUtente ";
        if (!empty($status)) {
            if ($status == "abbonato")
                $sql.=" AND dettaglioAzienda.abbonamento='1' ";
            if ($status == "attesa")
                $sql.=" AND utenti.active='0' ";
        }

        $this->setSql($sql);

        $result = $this->query();
        $dsr = NULL;
        $i = 0;

        while ($rows = $this->fetch($result)) {

            $dsr[$i]['idUtente'] = $rows['idUtente'];
            $dsr[$i]['idAzienda'] = $rows['idDettaglioAzienda'];
            $dsr[$i]['denominazione'] = $rows['denominazione'];
            $dsr[$i]['username'] = $rows['username'];
            $dsr[$i]['email'] = $rows['email'];
            $dsr[$i]['stato'] = $rows['active'];
            $dsr[$i]['active'] = $rows['deleted'];
            $dsr[$i]['numero'] = $rows['numero'];
            $dsr[$i]['CAP'] = $rows['CAP'];
            $dsr[$i]['nomeRap'] = $rows['nomeRap'];
            $dsr[$i]['cognomeRap'] = $rows['cognomeRap'];
            $dsr[$i]['indirizzo'] = $rows['indirizzo'];
            $dsr[$i]['provincia'] = $rows['provincia'];
            $dsr[$i]['regione'] = $rows['regione'];
            $dsr[$i]['citta'] = $rows['citta'];
            $dsr[$i]['telefono'] = $rows['telefono'];
            $dsr[$i]['partitaIVA'] = $rows['partitaIVA'];


            $i++;
        }


        return $dsr;
    }

    public function getAllMiembros() {

        $sql = "SELECT fkAzienda, COUNT(*) as cuentas FROM bridgeMedicoAzienda GROUP BY fkAzienda";
        $this->setSql($sql);

        $result = $this->query();
        $dsr = NULL;
        $i = 0;

        while ($rows = $this->fetch($result)) {

            $dsr[$i]['count'] = $rows['cuentas'];
            $dsr[$i]['fkAzienda'] = $rows['fkAzienda'];


            $i++;
        }
        return $dsr;
    }

    public function getDetailMiembros($idAzienda) {

        $sql = "SELECT idDettaglioMedico, dettaglioMedico.nome, cognome,  telefono, indirizzo, comuni.nome as citta, active, deleted as stato, fkUtente FROM utenti INNER JOIN dettaglioMedico ON utenti.idUtente = dettaglioMedico.fkUtente INNER JOIN bridgeMedicoAzienda ON fkMedico=idDettaglioMedico INNER JOIN comuni ON id=fkComune WHERE fkAzienda='$idAzienda' ";
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

    public function getDettaglioAzienda($idAzienda) {

        if (empty($idAzienda))
            return NULL;

        $sql = "SELECT utenti.idUtente, nomeRap,dettaglioAzienda.cap, cognomeRap,emailAzienda,dettaglioAzienda.descrizione, dettaglioAzienda.servizi, dettaglioAzienda.idDettaglioAzienda as idAzienda,telefonoMobile, dettaglioAzienda.fkComune, dettaglioAzienda.fkProvincia, dettaglioAzienda.fkRegione, comuni.nome as nomecomune, regioni.nomeregione, province.nomeprovincia, dettaglioAzienda.telefono, dettaglioAzienda.numero, dettaglioAzienda.denominazione , dettaglioAzienda.indirizzo  ,dettaglioAzienda.partitaIVA , utenti.username, utenti.email, utenti.active from utenti INNER JOIN dettaglioAzienda ON utenti.idUtente = dettaglioAzienda.fkUtente INNER JOIN comuni ON comuni.id = dettaglioAzienda.fkComune INNER JOIN regioni ON regioni.idregione = dettaglioAzienda.fkRegione INNER JOIN province ON province.idprovincia = dettaglioAzienda.fkProvincia WHERE dettaglioAzienda.idDettaglioAzienda = $idAzienda ";
        $this->setSql($sql);

        $result = $this->query();
        $dsr = NULL;

        $rows = $this->fetch($result);

        $dsr['idUtente'] = $rows['idUtente'];
        $dsr['idAzienda'] = $rows['idAzienda'];
        $dsr['denominazione'] = $rows['denominazione'];
        $dsr['username'] = $rows['username'];
        $dsr['email'] = $rows['email'];
        $dsr['active'] = $rows['active'];
        $dsr['citta'] = $rows['citta'];
        $dsr['data'] = $rows['data'];
        $dsr['telefono'] = $rows['telefono'];
        $dsr['telefonoMobile'] = $rows['telefonoMobile'];
        $dsr['indirizzo'] = $rows['indirizzo'];
        $dsr['provincia'] = $rows['provincia'];
        $dsr['regione'] = $rows['regione'];
        $dsr['nomeRap'] = $rows['nomeRap'];
        $dsr['cognomeRap'] = $rows['cognomeRap'];
        $dsr['partitaIVA'] = $rows['partitaIVA'];
        $dsr['fkComune'] = $rows['fkComune'];
        $dsr['fkProvincia'] = $rows['fkProvincia'];
        $dsr['fkRegione'] = $rows['fkRegione'];
        $dsr['nomecomune'] = $rows['nomecomune'];
        $dsr['nomeprovincia'] = $rows['nomeprovincia'];
        $dsr['nomeregione'] = $rows['nomeregione'];
        $dsr['numero'] = $rows['numero'];
        $dsr['descrizione'] = $rows['descrizione'];
        $dsr['servizi'] = $rows['servizi'];
        $dsr['emailAzienda'] = $rows['emailAzienda'];
        $dsr['CAP'] = $rows['cap'];





        return $dsr;
    }

    public function getDettaglioAziendaByID($idAzienda) {

        if (empty($idAzienda))
            return NULL;

        $sql = "SELECT  nomeRap, cognomeRap, idDettaglioAzienda as idAzienda, cap, fkComune,fkRegione,fkProvincia, numero, telefonoMobile, comuni.nome as nomecomune, regioni.nomeregione, province.nomeprovincia, dettaglioAzienda.telefono, dettaglioAzienda.denominazione , dettaglioAzienda.indirizzo  ,dettaglioAzienda.partitaIVA , dettaglioAzienda.descrizione, dettaglioAzienda.servizi, dettaglioAzienda.emailAzienda from dettaglioAzienda INNER JOIN comuni ON comuni.id = dettaglioAzienda.fkComune INNER JOIN regioni ON regioni.idregione = dettaglioAzienda.fkRegione INNER JOIN province ON province.idprovincia = dettaglioAzienda.fkProvincia WHERE dettaglioAzienda.idDettaglioAzienda = $idAzienda ";
        $this->setSql($sql);

        $result = $this->query();
        $dsr = NULL;

        $rows = $this->fetch($result);


        return $rows;
    }

    public function updateMinisito($idAzienda, $servizi, $descrizione) {

        $sql = "UPDATE dettaglioAzienda SET servizi='$servizi', descrizione='$descrizione' WHERE idDettaglioAzienda='$idAzienda' ";

        $this->setSql($sql);

        return $this->query() ? true : false;
    }

    public function attivaAzienda($idUtente) {

        if (empty($idUtente))
            return NULL;

        require_once CLASS_DIR . 'Utente.class.php';
        $oUtente = new Utente();
        if ($oUtente->attivaUtente($idUtente) === TRUE)
            return TRUE;
        else
            return FALSE;
    }

    public function disattivaAzienda($idUtente) {

        if (empty($idUtente))
            return NULL;

        require_once CLASS_DIR . 'Utente.class.php';
        $oUtente = new Utente();

        if ($oUtente->disattivaUtente($idUtente) === TRUE)
            return TRUE;
        else
            return FALSE;
    }

    public function cancellaAzienda($idUtente) {

        if (empty($idUtente))
            return NULL;

        require_once CLASS_DIR . 'Utente.class.php';
        $oUtente = new Utente();

        if ($oUtente->cancellaUtente($idUtente) === TRUE)
            return TRUE;
        else
            return FALSE;
    }

    public function ripristinaAzienda($idUtente) {

        if (empty($idUtente))
            return NULL;

        require_once CLASS_DIR . 'Utente.class.php';
        $oUtente = new Utente();

        if ($oUtente->ripristinaUtente($idUtente) === TRUE)
            return TRUE;
        else
            return FALSE;
    }

    public function getRegioni() {
        $sql = "SELECT idregione, nomeregione FROM regioni ORDER BY nomeregione ASC";
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

    public function getProvincia($idRegione) {

        $sql = "SELECT idprovincia, nomeprovincia, siglaprovincia FROM province WHERE idregione=$idRegione ORDER BY nomeprovincia ASC";
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

    public function getCitta($idProvincia) {

        $sql = "SELECT id, nome, catasto FROM comuni WHERE id_provincia=$idProvincia ORDER BY nome ASC";
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
    
    public function getPazientiByAzienda($idAzienda) {

        $sql = "SELECT idDettaglioPaziente as idPaziente, comuni.nome as citta, dettaglioPaziente.nome, dettaglioPaziente.cognome, dataNascita FROM dettaglioPaziente INNER JOIN bridgePazienteAzienda ON fkPaziente=idDettaglioPaziente LEFT JOIN comuni ON fkComune=id WHERE fkAzienda=$idAzienda ORDER BY nome ASC";
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

    public function getCAP($idCitta) {

        $sql = "SELECT nome FROM comuni WHERE id='$idCitta' ";
        $this->setSql($sql);

        $result = $this->query();
        $result = $this->fetch($result);

        $nomeCitta = $result['nome'];

        $sql = "SELECT CAP FROM cap WHERE Comune='$nomeCitta' ";
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

    public function generateRandomString($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function updateDettaglioAzienda() {

        if (empty($this->idAzienda))
            return NULL;

        $sql = "UPDATE dettaglioAzienda SET ";

        if (!empty($this->denominazione))
            $sql .= "denominazione = '" . $this->denominazione . "', ";

        if (!empty($this->telefono))
            $sql .= "telefono = '" . $this->telefono . "', ";

        if (!empty($this->telefonoMobile))
            $sql .= "telefonoMobile = '" . $this->telefonoMobile . "', ";

        if (!empty($this->nomeRap))
            $sql .= "nomeRap = '" . $this->nomeRap . "', ";

        if (!empty($this->cognomeRap))
            $sql .= "cognomeRap = '" . $this->cognomeRap . "', ";

        if (!empty($this->data))
            $sql .= "data = '" . $this->data . "', ";

        if (!empty($this->partitaIVA))
            $sql .= "partitaIVA = '" . $this->partitaIVA . "', ";

        if (!empty($this->indirizzo))
            $sql .= "indirizzo = '" . $this->indirizzo . "', ";

        if (!empty($this->fkComune))
            $sql .= "fkComune = '" . $this->fkComune . "', ";

        if (!empty($this->fkProvincia))
            $sql .= "fkProvincia = '" . $this->fkProvincia . "', ";

        if (!empty($this->fkRegione))
            $sql .= "fkRegione = '" . $this->fkRegione . "', ";

        if (!empty($this->abbonamento))
            $sql .= "abbonamento = '" . $this->abbonamento . "', ";

        $sql .= " WHERE fkUtente = $this->idAzienda";

        $sql = str_replace(",  WHERE", " WHERE", $sql);

        $this->setSql($sql);

        $this->query();


        if (!empty($this->password) || !empty($this->email)) {
            $sql = "UPDATE utenti SET ";
            if (!empty($this->password))
                $sql .= "password = '" . md5($this->password) . "', ";
            if (!empty($this->email))
                $sql .= "email = '" . $this->email . "', ";

            $sql .= " WHERE idUtente = $this->idAzienda";

            $sql = str_replace(",  WHERE", " WHERE", $sql);

            $this->setSql($sql);

            $this->query();
        }
    }

    public function modificaAzienda() {

        $sql = "UPDATE dettaglioAzienda SET ";

        $sql .= $this->denominazione ? " denominazione='$this->denominazione'," : "";
        $sql .= $this->partitaIVA ? " partitaIVA='$this->partitaIVA'," : "";
        $sql .= $this->nomeRap ? " nomeRap='$this->nomeRap'," : "";
        $sql .= $this->cognomeRap ? " cognomeRap='$this->cognomeRap'," : "";
        $sql .= $this->emailAzienda ? " emailAzienda='$this->emailAzienda'," : "";
        $sql .= $this->telefono ? " telefono='$this->telefono'," : "";
        $sql .= $this->telefonoMobile ? " telefonoMobile='$this->telefonoMobile'," : "";
        $sql .= $this->fkRegione ? " fkRegione='$this->fkRegione'," : "";
        $sql .= $this->fkProvincia ? " fkProvincia='$this->fkProvincia'," : "";
        $sql .= $this->fkComune ? " fkComune='$this->fkComune'," : "";
        $sql .= $this->CAP ? " CAP='$this->CAP'," : "";
        $sql .= $this->indirizzo ? " indirizzo='$this->indirizzo'," : "";
        $sql .= $this->numero ? " numero='$this->numero'," : "";

        $sql .= " WHERE idDettaglioAzienda = $this->idAzienda";

        $sql = str_replace(", WHERE", " WHERE", $sql);

        $this->setSql($sql);

        return $this->query()?true:false;


    }

    public function AddPazAz($azienda){
        $sql = "SELECT idDettaglioPaziente FROM dettaglioPaziente WHERE fkUtente='".$_SESSION['utente']['idUtente']."' ";
        $this->setSql($sql);

        $result = $this->query();
        $result = $this->fetch($result);

        $paz = $result['idDettaglioPaziente'];
        
           $sql = "UPDATE bridgePazienteAzienda SET fkAzienda='$azienda' WHERE fkPaziente='$paz' ";
           $this->setSql($sql);

        return $this->query()?true:false;
    }
}
