<?php

    require_once DOC_ROOT."config/sys_application.php";
    require_once CLASS_DIR."DB.class.php";
    
    
    class Utente extends DB {
        
        public $idUtente = null;
        
        public $nome = null;
        public $cognome = null;
        public $email = null;
        public $telefono = null;
        public $specializzazione = null;
        public $dataSpecializzazione = null;
        
        public function __construct( $idUtente = null ) {
            if ( !empty($idUtente) ) {
                $this->idUtente = $idUtente;
            }
            parent::__construct();
        }
        
        public function getInfoUtente ( ) {
            
            if ( empty($this->idUtente) )
                return NULL;
            
            $sql = "SELECT * FROM utenti WHERE idUtente = ".$this->idUtente;
            $this->setSql($sql);
            
            $return = $this->query();
            
            if (empty($return))
                return NULL;
            
            $row = $this->fetch($return);
            
            $array_return = array();
            
            if ( !empty($row) ) {
                
                $array_return['idUtente'] = $row['idUtente'];
                $array_return['username'] = $row['username'];
                $array_return['email'] = $row['email'];
                $array_return['active'] = $row['active'];
                
            }
            
            return $array_return;
            
        }


        public function getSessionUtente() {

            if ( empty($this->idUtente) )
                return null;

            $sql = "select utenti.username as username, utenti.email as email, primoLogin, ruolo.idRuolo as idRuolo, ruolo.nome as nomeRuolo from utenti inner join ruolo on utenti.fkRuolo=ruolo.idRuolo WHERE utenti.idUtente = ".$this->idUtente;

            $this->setSql($sql);
            $res = $this->query();

            $row = $this->fetch($res);

            return $row;

        }

        public function getHomeForUtente(){

            if ( empty($this->idUtente) )
                return null;

            $utente = $this->getSessionUtente();

            if ( empty($utente['idRuolo']) )
                return null;
            else{
                $idRuolo = $utente['idRuolo'];
                $primoLogin = $utente['primoLogin'];
              //  var_dump($primoLogin);die;
            }

            switch ($idRuolo) {
                case AMMINISTRATORE:
                    $url = URL_FILE."home_amministratore.php";
                    break;
                case MEDICO:
                    if($primoLogin =='0')
                        $url="cambia_password.php";
                    else
                        $url = URL_FILE."home_medico.php";
                    break;
                case PAZIENTE:
                    $url = URL_FILE."home_paziente.php";
                    break;
                case AZIENDA:
                    $url = URL_FILE."home_dsr.php";
                    break;
                default:
                    $url = URL_FILE."index.php";
                    break;
            }
           // var_dump($url);die;
            return $url;

        }
        
        public function registrazioneMedico() {
            
            $error = "";
            
            if ( empty($this->nome) )
                $error .= "Nome non inserito<br />";
            
            if ( empty($this->cognome) )
                $error .= "Cognome non inserito<br />";
            
            if ( empty($this->email) )
                $error .= "Email non inserita<br />";
            
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL))
                $emailErr = "Formato email non valido"; 

            if ( empty($this->telefono) )
                $error .= "Telefono non inserito<br />";
            
            if ( !empty($this->specializzazione) ) {
                if ( empty($this->dataSpecializzazione) ) {
                    $error .= "Data di specializzazione non inserita<br />";
                } else {
                    $arrData = explode("-", $this->dataSpecializzazione);

                    //var_dump($arrData);exit;
                    if (!checkdate($arrData[1], $arrData[2], $arrData[0]) )
                        $error .= "Data inserita non corretta<br />";
                }
            } else {
                $error .= "La specializzazione non è stata inserita<br />";
            }
            
            if ( !empty($error) )
                return $error;
            
            
            $sql = "SELECT active FROM utenti WHERE email = '$this->email'";
            $this->setSql($sql);
            $result = $this->query();
            $rows = $this->fetch($result);

            $count = count($rows);
            
            if ( $count>0 ) {
            
                if ( $rows['active']==UTENTE_ATTIVO )
                    return "EMAIL_DUPLICATA";
            
                if ( $rows['active']==UTENTE_NON_ATTIVO )
                    return "EMAIL_DUPLICATA_INATTIVO";
            }
            
            $username = $this->generateUsername($this->nome, $this->cognome);
            $password = substr(md5($username.  time()),5,8);           
            
            $sql_insert_utente = "INSERT INTO utenti (username, password, email, active, deleted, fkRuolo) VALUES ('$username',md5('$password'),'$this->email',".UTENTE_NON_ATTIVO.",".UTENTE_NON_CANCELLATO.",".MEDICO.")";
            $this->setSql($sql_insert_utente);
            $this->query();
            
            
            $sql_check_utente_inserito = "SELECT idUtente FROM utenti WHERE username = '$username' AND password = md5('$password')";
            $this->setSql($sql_check_utente_inserito);
            
            $return = $this->query();
            $row = $this->fetch($return);
            
            $idUtente = $row['idUtente'];
            
            
            $sql_insert_dettaglioMedico  = "INSERT INTO dettaglioMedico (nome, cognome, telefono, ";
            
            if ( !empty($this->specializzazione) )
                $sql_insert_dettaglioMedico .= "dataSpecializzazione, tipoSpecializzazione, ";
            
            $sql_insert_dettaglioMedico  .= "fkUtente) VALUES ('$this->nome','$this->cognome','$this->telefono', ";
            
            if ( !empty($this->specializzazione) )
                $sql_insert_dettaglioMedico  .= "'$this->dataSpecializzazione','$this->specializzazione',";
            
            $sql_insert_dettaglioMedico  .= "'$idUtente')";
            
            $this->setSql($sql_insert_dettaglioMedico);
            $this->query();
            
            return NULL;
            
        }
        
        
        private function generateUsername ( $nome, $cognome ) {
            
            if ( empty($nome) || empty($cognome) )
                return NULL;
            
            $nome = strtolower(stripslashes($nome));
            $cognome = strtolower(stripslashes($cognome));
            
            str_replace("_", "", $nome);
            str_replace(" ", "", $nome);
            str_replace("'", "", $nome);
            
            str_replace("_", "", $cognome);
            str_replace(" ", "", $cognome);
            str_replace("'", "", $cognome);
            
            $username = substr($nome, 0,3).substr($cognome, 0,3);
            
            $tpmUsername = $username;
            
            $sql = "SELECT username FROM utenti WHERE username = '$tpmUsername'";
            $this->setSql($sql);
            $result = $this->query();
            
            $row = $this->fetch($result);
            
            $checkUsername = $row['username'];
            
            if ( !empty($checkUsername) ) {
                
                for ( $i=1; $i<100; $i++ ) {
                    
                    $tpmUsername = $username.$i;
                    $sql = "SELECT username FROM utenti WHERE username = '$username'";
                    $this->setSql($sql);
                    $resultNew = $this->query();
                    $rowNew = $this->fetch($resultNew);
            
                    $checkUsername = $rowNew['username'];
                    if ( !empty($result) )
                        break;
                    
                }
                
            }
            
            return $tpmUsername;
            
        }
        
        
        public function generateNewPassword ( $email ) {
            
            if ( empty($email) )
                return NULL;
            
            if ( !filter_var($email, FILTER_VALIDATE_EMAIL) )
                    return NULL;
            
            $arrayCredenziali = array();
            
            $sql = "SELECT username FROM utenti WHERE email ='".$email."'";
            
            $this->setSql($sql);
            $return = $this->query();
            
            $row = $this->fetch($return);
            
            $username = $row['username'];
            
            if ( empty($username) )
                return NULL;
            
            $password = substr(md5($username.  time()),5,8);
            
            
            $sql_pwd_update = "UPDATE utenti SET password = '".md5($password)."' WHERE email = '".$email."' AND username = '".$username."'";
            
            $this->setSql($sql_pwd_update);
            $return = $this->query();
            
            $arrayCredenziali['username'] = $username;
            $arrayCredenziali['password'] = $password;
            
            return $arrayCredenziali;
            
        }
        
        
        public function attivaUtente ( $idUtente ) {
            
            if ( empty($idUtente) )
                return NULL;

            $sql = "UPDATE utenti SET active = ".UTENTE_ATTIVO." WHERE idUtente = $idUtente";
            
            $this->setSql($sql);
            $return = $this->query();
            
            return $return;

        }
        
        public function disattivaUtente ( $idUtente ) {
            
            if ( empty($idUtente) )
                return NULL;

            $sql = "UPDATE utenti SET active = ".UTENTE_NON_ATTIVO." WHERE idUtente = $idUtente";

            $this->setSql($sql);
            $return = $this->query();

            return $return;

        }
        
        public function cancellaUtente ( $idUtente ) {
            
            if ( empty($idUtente) )
                return NULL;

            $sql = "UPDATE utenti SET deleted = ".UTENTE_CANCELLATO." WHERE idUtente = $idUtente";
//var_dump($sql);die();
            $this->setSql($sql);
            $return = $this->query();

            return $return;

        }
        
        public function ripristinaUtente ( $idUtente ) {
            
            if ( empty($idUtente) )
                return NULL;

            $sql = "UPDATE utenti SET deleted = ".UTENTE_NON_CANCELLATO." WHERE idUtente = $idUtente";

            $this->setSql($sql);
            $return = $this->query();

            return $return;

        }

        public function getEmailAdmin() {
            
            $sql = "SELECT email FROM utenti WHERE fkRuolo = ".AMMINISTRATORE;
            $this->setSql($sql);
            $result = $this->query();
            
            $row = $this->fetch($result);
            
            return $row['email'];
            
        }
        
                
        public function countAziende (  ) {
            
           $sql_check_user = "SELECT count(*) as total FROM utenti WHERE fkRuolo = ".AZIENDA." AND active = ".UTENTE_ATTIVO." AND deleted = ".UTENTE_NON_CANCELLATO;
            
            $this->setSql($sql_check_user);
            $return = $this->query();
            $row = $this->fetch($return);
            
            return $row;
            
        }
        public function countMedici (  ) {
            
           $sql_check_user = "SELECT count(*) as total FROM utenti WHERE fkRuolo = ".MEDICO." AND active = ".UTENTE_ATTIVO." AND deleted = ".UTENTE_NON_CANCELLATO;
            
            $this->setSql($sql_check_user);
            $return = $this->query();
            $row = $this->fetch($return);
            
            return $row;
            
        }
        public function countPazienti (  ) {
            
           $sql_check_user = "SELECT count(*) as total FROM utenti WHERE fkRuolo = ".PAZIENTE." AND active = ".UTENTE_ATTIVO." AND deleted = ".UTENTE_NON_CANCELLATO;
            
            $this->setSql($sql_check_user);
            $return = $this->query();
            $row = $this->fetch($return);
            
            return $row;
            
        }
        public function countOrdini (  ) {
            
           $sql_check_user = "SELECT count(*) as total FROM ordini WHERE fkStatoOrdini = '2' ";
            
            $this->setSql($sql_check_user);
            $return = $this->query();
            $row = $this->fetch($return);
            
            return $row;
            
        }
        public function countAtessa ( $nomeComune ) {
            
           $sql_check_user = "SELECT count(*) as total FROM utenti WHERE active = ".UTENTE_NON_ATTIVO." OR deleted = ".UTENTE_CANCELLATO;
            
            $this->setSql($sql_check_user);
            $return = $this->query();
            $row = $this->fetch($return);
            
            return $row;
            
        }
        
        public function scadenzaAbbonamento ( $idUtente ) {
            
           $sql_check_user = "SELECT dataFine as scadenzaAbbonamento FROM abbonamenti WHERE fkUtente = $idUtente AND dataFine >= CURDATE() ORDER BY dataFine DESC LIMIT 1";
            
            $this->setSql($sql_check_user);
            $return = $this->query();
            $row = $this->fetch($return);
            
            return $row['scadenzaAbbonamento'];
            
        }
        
         public function getCountAppuntamentiByUtente ( $idUtente ) {
            
           $sql_check_user = "SELECT Count(*) as cuentas FROM agenda INNER JOIN dettaglioMedico ON idDettaglioMedico=fkMedico INNER JOIN utenti ON dettaglioMedico.fkUtente=idUtente WHERE fkUtente = '$idUtente' ORDER BY idAgenda";
            
            $this->setSql($sql_check_user);
            $return = $this->query();
            $row = $this->fetch($return);
            
            return $row['cuentas'];
            
        }
        
        public function getCountOrdiniByUtente ( $idUtente ) {
            
           $sql_check_user = "SELECT Count(*) as cuentas FROM ordini WHERE fkUtente = '$idUtente' AND fkStatoOrdini !='7'ORDER BY idOrdine";
            
            $this->setSql($sql_check_user);
            $return = $this->query();
            $row = $this->fetch($return);
            
            return $row['cuentas'];
            
        }
        
        public function getCountPazientiByUtente ( $idUtente ) {
            
           $sql_check_user = "SELECT Count(*) as cuentas FROM bridgeMedicoPaziente WHERE fkUtente = '$idUtente' ";
            
            $this->setSql($sql_check_user);
            $return = $this->query();
            $row = $this->fetch($return);
            
            return $row['cuentas'];
            
        }
        
        public function cambiaPassword($password){
            
              $sql_pwd_update = "UPDATE utenti SET password = '".md5($password)."', primoLogin = '1' WHERE idUtente = '".$_SESSION['utente']['idUtente']."'";
            
            $this->setSql($sql_pwd_update);
            return $this->query()?TRUE:FALSE;
            
            
        }
        
            public function checkIVA(){
           $sql = "SELECT prezzo from prezzi WHERE idPrezzo = '15' ";
        
        $this->setSql($sql);

        $result = $this->query();
        $result = $this->fetch($result);
        
        return $result['prezzo'];
        
    }
    
    public function checkIfIVA(){
           $sql = "SELECT prezzo from prezzi WHERE idPrezzo = '14' ";
        
        $this->setSql($sql);

        $result = $this->query();
        $result = $this->fetch($result);
        
        return $result['prezzo'];
        
    }
    }
    
    