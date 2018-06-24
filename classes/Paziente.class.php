<?php

require_once DOC_ROOT . "config/sys_application.php";
require_once CLASS_DIR . "DB.class.php";
require_once CLASS_DIR . "mail/PHPMailerAutoload.php";

class Paziente extends DB {

    public $idDettaglioPaziente = null;
    public $nome = null;
    public $cognome = null;
    public $dataNascita = null;
    public $citta = null;
    public $provincia = null;
    public $telefono = null;
    public $email = null;
    public $idMedico = null;

    public function __construct($idDettaglioPaziente = null) {

        if (!empty($idDettaglioPaziente)) {
            $this->idDettaglioPaziente = $idDettaglioPaziente;
        }
        parent::__construct();
    }

    public function getDettaglioPaziente() {

        if (empty($this->idDettaglioPaziente))
            return NULL;


        $sql = "SELECT * FROM dettaglioPaziente INNER JOIN utenti ON dettaglioPaziente.fkUtente=utenti.idUtente WHERE idDettaglioPaziente = " . $this->idDettaglioPaziente . "  AND utenti.active = " . UTENTE_ATTIVO . " AND utenti.deleted = " . UTENTE_NON_CANCELLATO;
        $this->setSql($sql);

        $return = $this->query();

        if (empty($return))
            return NULL;

        $rows = $this->fetch($return);

        $this->nome = $rows['nome'];
        $this->cognome = $rows['cognome'];
        $this->idUtente = $rows['idUtente'];

        $this->dataNascita = $rows['dataNascita'];
        $this->indirizzo = $rows['indirizzo'];
        $this->cap = $rows['CAP'];
        $this->numeroCivico = $rows['numeroCivico'];
        $this->telefonoMobile = $rows['telefonoMobile'];


        $this->fkComune = $rows['fkComune'];
        $this->fkProvincia = $rows['fkProvincia'];
        $this->fkRegione = $rows['fkRegione'];

        $this->telefono = $rows['telefono'];
        $this->email = $rows['email'];


        $this->status = $rows['active'];


        $sql = "SELECT nomeprovincia FROM province WHERE idprovincia = " . $this->fkProvincia;
        $this->setSql($sql);
        $return = $this->query();
        $rows = $this->fetch($return);

        $this->nomeProvincia = $rows['nomeprovincia'];

        $sql = "SELECT nomeregione FROM regioni WHERE idregione = " . $this->fkRegione;
        $this->setSql($sql);
        $return = $this->query();
        $rows = $this->fetch($return);

        $this->nomeRegione = $rows['nomeregione'];

        $sql = "SELECT nome FROM comuni WHERE id = " . $this->fkComune;
        $this->setSql($sql);
        $return = $this->query();
        $rows = $this->fetch($return);

        $this->nomeComune = $rows['nome'];

        return $this;
    }

    public function getAllPazienti($status) {


        $sql = "SELECT idDettaglioPaziente, idUtente, nome, cognome, indirizzo, dataNascita, utenti.active,sesso, utenti.deleted as stato  FROM dettaglioPaziente INNER JOIN utenti ON dettaglioPaziente.fkUtente = utenti.idUtente WHERE utenti.deleted=0 ";
        if (isset($status)) {
            if ($status == 'attesa')
                $sql.=" AND utenti.active='0' ";
        }
        $this->setSql($sql);
        $return = $this->query();



        $arrPazienti = null;

        if (!empty($return)) {
            $i = 0;
            while ($row = $this->fetch($return)) {
                $arrPazienti[$i]['idDettaglioPaziente'] = $row['idDettaglioPaziente'];
                $arrPazienti[$i]['idUtente'] = $row['idUtente'];
                $arrPazienti[$i]['nome'] = $row['nome'];
                $arrPazienti[$i]['cognome'] = $row['cognome'];
                $arrPazienti[$i]['dataNascita'] = $row['dataNascita'];
                $arrPazienti[$i]['sesso'] = $row['sesso'];
                $arrPazienti[$i]['indirizzo'] = $row['indirizzo'];
                $arrPazienti[$i]['active'] = $row['active'];
                $arrPazienti[$i]['stato'] = $row['stato'];
                $i++;
            }
        }

        return $arrPazienti;
    }

    public function getMyPazienti($idUtente) {


        $sql = "SELECT idDettaglioPaziente, idUtente, dettaglioPaziente.nome, cognome, indirizzo, nomeregione as regione, nomeprovincia as provincia, comuni.nome as citta,CAP, dataNascita, utenti.active,sesso, utenti.deleted as stato  FROM dettaglioPaziente LEFT JOIN comuni ON dettaglioPaziente.fkComune = comuni.id LEFT JOIN province ON dettaglioPaziente.fkProvincia = province.idprovincia LEFT JOIN regioni ON dettaglioPaziente.fkRegione = regioni.idregione INNER JOIN utenti ON dettaglioPaziente.fkUtente = utenti.idUtente INNER JOIN  bridgeMedicoPaziente ON fkDettaglioPaziente=idDettaglioPaziente WHERE utenti.deleted=0 AND bridgeMedicoPaziente.fkUtente=$idUtente";
        $this->setSql($sql);
        $return = $this->query();

        $arrPazienti = null;

        if (!empty($return)) {
            $i = 0;
            while ($row = $this->fetch($return)) {
                $arrPazienti[$i]['idDettaglioPaziente'] = $row['idDettaglioPaziente'];
                $arrPazienti[$i]['idUtente'] = $row['idUtente'];
                $arrPazienti[$i]['nome'] = $row['nome'];
                $arrPazienti[$i]['cognome'] = $row['cognome'];
                $arrPazienti[$i]['dataNascita'] = $row['dataNascita'];
                $arrPazienti[$i]['sesso'] = $row['sesso'];
                $arrPazienti[$i]['regione'] = $row['regione'];
                $arrPazienti[$i]['provincia'] = $row['provincia'];
                $arrPazienti[$i]['citta'] = $row['citta'];
                $arrPazienti[$i]['CAP'] = $row['CAP'];
                $arrPazienti[$i]['indirizzo'] = $row['indirizzo'];
                $arrPazienti[$i]['active'] = $row['active'];
                $arrPazienti[$i]['stato'] = $row['stato'];
                $i++;
            }
        }

        return $arrPazienti;
    }

    public function addPaziente() {

        if (empty($this->nome))
            $error .= "Nome non inserito<br />";

        if (empty($this->cognome))
            $error .= "Cognome non inserito<br />";

        if (empty($this->email))
            $error .= "Email non inserita<br />";

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL) && !preg_match('/@.+\./', $this->email))
            $error .= "Formato email non valido <br />";
        if (empty($this->telefono))
            $error .= "Telefono fisso  non inserito<br />";
        if (empty($this->dataNascita))
            $error .= "Data di nascita non inserita<br />";
        if (empty($this->sesso))
            $error .= "Sesso non inserito<br />";
        if (empty($this->fkRegione))
            $error .= "Regione non inserita<br />";
        if (empty($this->fkProvincia))
            $error .= "Provincia non inserita<br />";
        if (empty($this->fkComune))
            $error .= "Comune non inserito<br />";
        if (empty($this->indirizzo))
            $error .= "Indirizzo non inserito<br />";
        if (empty($this->fkCAP))
            $error .= "CAP non inserito<br />";
        if (empty($this->numero))
            $error .= "Numero civico non inserito<br />";

        if (!empty($error))
            return $error;
        //    echo '<pre>';var_dump($this);die();
        $pwd = md5(bin2hex(openssl_random_pseudo_bytes(4)));
        $username = $this->generateUsername($this->nome, $this->cognome);

        $sql = "SELECT active FROM utenti WHERE email = '$this->email'";
        $this->setSql($sql);
        $result = $this->query();
        $rows = $this->fetch($result);

        $count = count($rows);

        if ($count > 0) {

            if ($rows['active'] == UTENTE_ATTIVO)
                return "Email gi&agrave; in uso in questo sistema.";

            if ($rows['active'] == UTENTE_NON_ATTIVO)
                return "Email gi&agrave; inserita ma non usata, hai problemi di login?";
        }

        $sql = "INSERT INTO utenti (username, password, email, active, deleted, fkRuolo) VALUES ('$username', '$pwd', '$this->email', '0', '0', '" . PAZIENTE . "')";


        $this->setSql($sql);
        if ($this->query() === TRUE) {
            $sql = "SELECT idUtente as id FROM utenti WHERE email='$this->email'";
            $this->setSql($sql);
            $id = $this->query();
            $id = $this->fetch($id);
            $sql = " INSERT INTO dettaglioPaziente (fkUtente, nome, cognome, dataNascita, telefono, indirizzo, fkComune, fkRegione, fkProvincia, sesso, CAP, numeroCivico) ";
            $sql .= " VALUES ('" . $id['id'] . "', '$this->nome', '$this->cognome', '$this->dataNascita', '$this->telefono', '$this->indirizzo', '$this->fkComune', '$this->fkRegione', '$this->fkProvincia', '$this->sesso' , '$this->fkCAP', '$this->numero' )";
            // var_dump($sql);die();    
            $this->setSql($sql);
            if ($_SESSION['utente']['idRuoloUtente'] == '1')
                return $this->query() ? true : false;
            else {
                if ($this->query() === TRUE) {

                    $sql = "SELECT idDettaglioPaziente FROM dettaglioPaziente WHERE fkUtente = '".$id['id']."'";
                    $this->setSql($sql);
                    $result = $this->query();
                    $rows = $this->fetch($result);
                    $sql = " INSERT INTO bridgeMedicoPaziente (fkUtente, fkDettaglioPaziente) VALUES ('".$_SESSION['utente']['idUtente']."','".$rows['idDettaglioPaziente']."') ";
                    $this->setSql($sql);
                    return $this->query() ? true : false;
                }
            }
        } else {
            return \FALSE;
        }
    }
    
     public function addPazientes() {

        if (empty($this->nome))
            $error .= "Nome non inserito<br />";

        if (empty($this->cognome))
            $error .= "Cognome non inserito<br />";



        if (empty($this->dataNascita))
            $error .= "Data di nascita non inserita<br />";

        if (!empty($error))
            return $error;
        //    echo '<pre>';var_dump($this);die();
        $pwd = md5(bin2hex(openssl_random_pseudo_bytes(4)));
        $username = $this->generateUsername($this->nome, $this->cognome);

        $sql = "INSERT INTO utenti (username, password, active, deleted, fkRuolo) VALUES ('$username', '$pwd', '1', '0', '" . PAZIENTE . "')";


        $this->setSql($sql);
        if ($this->query() === TRUE) {
            $sql = "SELECT idUtente as id FROM utenti WHERE username='$username'";
            $this->setSql($sql);
            $id = $this->query();
            $id = $this->fetch($id);
            $sql = " INSERT INTO dettaglioPaziente (fkUtente, nome, cognome, dataNascita, telefono ) ";
            $sql .= " VALUES ('" . $id['id'] . "', '$this->nome', '$this->cognome', '$this->dataNascita', '$this->telefonoMobile' )";
            // var_dump($sql);die();    
            $this->setSql($sql);
            if ($_SESSION['utente']['idRuoloUtente'] == '1')
                return $this->query() ? true : false;
            else {
                if ($this->query() === TRUE) {

                    $sql = "SELECT idDettaglioPaziente FROM dettaglioPaziente WHERE fkUtente = '".$id['id']."'";
                    $this->setSql($sql);
                    $result = $this->query();
                    $rows = $this->fetch($result);
                    $sql = " INSERT INTO bridgeMedicoPaziente (fkUtente, fkDettaglioPaziente) VALUES ('".$_SESSION['utente']['idUtente']."','".$rows['idDettaglioPaziente']."') ";
                    $this->setSql($sql);
                     if ($this->query() === TRUE) {
                         $sql = " INSERT INTO bridgePazienteAzienda (fkPaziente, fkAzienda) VALUES ('".$rows['idDettaglioPaziente']."', '$this->azienda') ";
                    $this->setSql($sql);
                    return $this->query() ? true : false;
                     }
                     else return false;
                }
            }
        } else {
            return \FALSE;
        }
    }

    public function modificaPaziente() {



        $sql = " UPDATE dettaglioPaziente INNER JOIN utenti ON idUtente=fkUtente ";
        $sql .=" SET nome = '$this->nome', cognome = '$this->cognome', ";
        if (!empty($this->dataNascita))
            $sql.="dataNascita ='$this->dataNascita',";
        $sql.=" fkComune = '$this->fkComune', fkProvincia = '$this->fkProvincia', fkRegione = '$this->fkRegione', telefono = '$this->telefono', telefonoMobile = '$this->telefonoMobile',CAP = '$this->cap',numeroCivico = '$this->numeroCivico',indirizzo = '$this->indirizzo', email ='$this->email' ";
        $sql .= " WHERE fkUtente = '$this->idUtente' ";

        $this->setSql($sql);
        $this->query();
        return mysql_affected_rows() ? true : false;
    }

    public function attivaPaziente($idUtente) {

        if (empty($idUtente))
            return NULL;

        $sql = "UPDATE utenti SET active = " . UTENTE_ATTIVO . " WHERE idUtente = '$idUtente' ";

        $this->setSql($sql);
        $this->query();
        return mysql_affected_rows() ? true : false;
    }

    public function disattivaPaziente($idUtente) {

        if (empty($idUtente))
            return NULL;

        $sql = "UPDATE utenti SET active = " . UTENTE_NON_ATTIVO . " WHERE idUtente = '$idUtente' ";

        $this->setSql($sql);
        $this->query();
        return mysql_affected_rows() ? true : false;
    }

    public function cancellaPaziente($idUtente) {

        if (empty($idUtente))
            return NULL;

        $sql = "UPDATE utenti SET deleted = " . UTENTE_CANCELLATO . " WHERE idUtente = '$idUtente' ";

        $this->setSql($sql);
        $this->query();
        return mysql_affected_rows() ? true : false;
    }

    public function ripristinaPaziente($idUtente) {

        if (empty($idUtente))
            return NULL;

        $sql = "UPDATE utenti SET deleted = " . UTENTE_NON_CANCELLATO . " WHERE idUtente = '$idUtente' ";

        $this->setSql($sql);
        $this->query();
        return mysql_affected_rows() ? true : false;
    }

    public function isError() {

        $error = "";

        if (empty($this->nome))
            $error .= "Nome non inserito<br />";

        if (empty($this->cognome))
            $error .= "Cognome non inserito<br />";

        if (empty($this->email))
            $error .= "Email non inserita<br />";

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL))
            $emailErr = "Formato email non valido";

        if (!empty($this->email)) {
            $sql_check_email = "SELECT count(1) as numEmail FROM utenti WHERE email = '" . $this->email . "' AND idUtente !=" . $this->idUtente;

            $this->setSql($sql_check_email);
            $returnQuesryEmail = $this->query();
            $row = $this->fetch($returnQuesryEmail);

            if ($row['numEmail'] > 0)
                $error .= "La mail inserita &egrave; gi&agrave; utilizzata da un altro contatto! Provare con un'altra email<br />";
        }

        if (empty($this->telefono))
            $error .= "Telefono non inserito<br />";

        if (!is_numeric($this->telefono))
            $error .= "Il telefono soltanto &egrave; composto di numeri<br />";

        //     if ( empty($this->dataNascita) ) 
        //       $error .= "Data di nascita non inserita<br />";
        //    if ( empty($this->sesso) ) 
        //      $error .= "Sesso non inserito<br />";

        if (empty($this->fkComune))
            $error .= "Citta di nascita non inserita<br />";

        if (empty($this->fkProvincia))
            $error .= "Provincia di nascita non inserita<br />";
        /*
          if ( empty($this->linguaParlata) )
          $error .= "Lingua parlata non inserita<br />";

          if ( empty($this->nazionalita) )
          $error .= "Nazionalita non inserita<br />";
         */

        //  echo $error;
        //            die('a');

        return $error;
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

        $sql = "SELECT id, nome, catasto FROM comuni WHERE id_provincia=$idProvincia ORDER BY nome ASC ";
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

    private function generateUsername($nome, $cognome) {

        if (empty($nome) || empty($cognome))
            return NULL;

        $nome = strtolower(stripslashes($nome));
        $cognome = strtolower(stripslashes($cognome));

        str_replace("_", "", $nome);
        str_replace(" ", "", $nome);
        str_replace("'", "", $nome);

        str_replace("_", "", $cognome);
        str_replace(" ", "", $cognome);
        str_replace("'", "", $cognome);

        $username = substr($nome, 0, 2) . substr($cognome, 0, 3) . substr(rand(1111, 5555), 0, 2);

        return $username;
    }

    public function getMyTrattamenti(){
        
        $sql = "SELECT * FROM trattamento INNER JOIN ordini ON trattamento.fkOrdine=ordini.idOrdine INNER JOIN dettaglioAzienda ON ordini.fkAzienda=dettaglioAzienda.idDettaglioAzienda WHERE fkDettaglioPaziente='".$_SESSION['utente']['idPaziente']."' ";
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
    
    public function getMyAppuntamenti(){
        
        $sql = "SELECT * FROM agenda WHERE fkPaziente='".$_SESSION['utente']['idPaziente']."'  ";
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
}
