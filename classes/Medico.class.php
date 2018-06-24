<?php

require_once DOC_ROOT . "config/sys_application.php";
require_once CLASS_DIR . "DB.class.php";
require_once CLASS_DIR . "mail/PHPMailerAutoload.php";

class Medico extends DB {

    // tabella utenti
    public $idUtente = null;
    public $username = null;
    public $password = null;
    public $email = null;
    public $attivo = null;
    // tabella dettaglioMedico
    public $nome = null;
    public $cognome = null;
    public $telefono = null;
    public $indirizzo = null;
    public $citta = null;
    public $provincia = null;

    public function __construct($idUtente = null) {

        if (!empty($idUtente)) {
            $this->idUtente = $idUtente;
        }
        parent::__construct();
    }

    public function getDettaglioMedico() {

        if (empty($this->idUtente))
            return NULL;

        require_once CLASS_DIR . 'Utente.class.php';
        $oUtente = new Utente($this->idUtente);
        $array_info_utente = $oUtente->getInfoUtente();
        //   echo '<pre>';var_dump($array_info_utente);die();
        if (empty($array_info_utente))
            return NULL;

        $this->username = $array_info_utente['username'];
        $this->email = $array_info_utente['email'];
        $this->active = $array_info_utente['active'];

        $sql = "SELECT * FROM dettaglioMedico WHERE fkUtente = " . $this->idUtente;
        $this->setSql($sql);
        $return = $this->query();
        $rows = $this->fetch($return);

        //  echo"<pre>"; var_dump($rows);die();
        if (empty($rows))
            return NULL;

        $this->idDettaglio = $rows['idDettaglioMedico'];
        $this->nome = $rows['nome'];
        $this->cognome = $rows['cognome'];
        $this->telefono = $rows['telefono'];
        $this->telefonoMobile = $rows['telefonoMobile'];
        $this->indirizzo = $rows['indirizzo'];
        $this->fkComune = $rows['fkComune'];
        $this->fkProvincia = $rows['fkProvincia'];
        $this->fkRegione = $rows['fkRegione'];
        $this->fkComuneAlbo = $rows['fkComuneAlbo'];
        $this->fkProvinciaAlbo = $rows['fkProvinciaAlbo'];
        $this->fkRegioneAlbo = $rows['fkRegioneAlbo'];
        $this->partitaIVA = $rows['partitaIVA'];
        $this->numeroAlbo = $rows['numeroAlbo'];

        if(!empty($this->fkProvincia)){
        $sql = "SELECT nomeprovincia FROM province WHERE idprovincia = " . $this->fkProvincia;
        $this->setSql($sql);
        $return = $this->query();
        $rows = $this->fetch($return);

        $this->nomeProvincia = $rows['nomeprovincia'];
        }
        if(!empty($this->fkRegione)){
        $sql = "SELECT nomeregione FROM regioni WHERE idregione = " . $this->fkRegione;
        $this->setSql($sql);
        $return = $this->query();
        $rows = $this->fetch($return);

        $this->nomeRegione = $rows['nomeregione'];
        }
        
        if(!empty($this->fkComune)){
        $sql = "SELECT nome FROM comuni WHERE id = " . $this->fkComune;
        $this->setSql($sql);
        $return = $this->query();
        $rows = $this->fetch($return);

        $this->nomeComune = $rows['nome'];
        }
        
        $sql = "SELECT nomeprovincia FROM province WHERE idprovincia = " . $this->fkProvinciaAlbo;
        $this->setSql($sql);
        $return = $this->query();
        $rows = $this->fetch($return);

        $this->nomeProvinciaAlbo = $rows['nomeprovincia'];

        $sql = "SELECT nomeregione FROM regioni WHERE idregione = " . $this->fkRegioneAlbo;
        $this->setSql($sql);
        $return = $this->query();
        $rows = $this->fetch($return);

        $this->nomeRegioneAlbo = $rows['nomeregione'];

        $sql = "SELECT nome FROM comuni WHERE id = " . $this->fkComuneAlbo;
        $this->setSql($sql);
        $return = $this->query();
        $rows = $this->fetch($return);

        $this->nomeComuneAlbo = $rows['nome'];

        //  echo '<pre>';var_dump($this);die();
        return $this;
    }

    public function isError($update = NULL) {

        if (empty($this->idUtente))
            return NULL;

        $error = "";

        if (empty($this->nome))
            $error .= "Nome non inserito<br />";

        if (empty($this->cognome))
            $error .= "Cognome non inserito<br />";

        if (empty($this->email))
            $error .= "Email non inserita<br />";

        if (!empty($this->password) && strlen($this->password) < 6)
            $error .= "La password inserita deve essere almeno di 6 caratteri<br />";

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL))
            $emailErr = "Formato email non valido";


        if (!empty($this->email)) {
            $sql_check_email = "SELECT count(1) as numEmail FROM utenti WHERE email = '" . $this->email . "'";

            // Controllo da fare solo in caso di aggiornamenti
            if (!empty($update))
                $sql_check_email .= " AND idUtente !=" . $this->idUtente;

            $this->setSql($sql_check_email);
            $returnQuesryEmail = $this->query();
            $row = $this->fetch($returnQuesryEmail);

            if ($row['numEmail'] > 0)
                $error .= "La mail inserita &egrave; gi&agrave; utilizzata da un altro contatto! Provare con un'altra email<br />";
        }

        if (empty($this->telefono))
            $error .= "Telefono non inserito<br />";



        return $error;
    }

    public function updateMedico() {

        $error = $this->isError();

        if (!empty($error))
            return $error;

        $sql_check_user = "SELECT count(1) as numUser FROM utenti WHERE idUtente = $this->idUtente AND active = " . UTENTE_ATTIVO . " AND deleted = " . UTENTE_NON_CANCELLATO;

        $this->setSql($sql_check_user);
        $return = $this->query();
        $row = $this->fetch($return);

        if ($row['numUser'] == 0) {
            $error .= "Utente non attivo! Modifica non eseguibile";
            return $error;
        }

        $sql = "UPDATE utenti SET email = '" . $this->email . "' ";

        if (!empty($this->password))
            $sql .= ", password = '" . md5($this->password) . "' ";

        $sql .= "WHERE idUtente = $this->idUtente";

        $this->setSql($sql);

        $return = $this->query();


        $sql = "UPDATE dettaglioMedico SET nome = '" . $this->nome . "', cognome = '" . $this->cognome . "', telefono = '" . $this->telefono . "', ";

        if (!empty($this->indirizzo))
            $sql .= ", indirizzo = '" . $this->indirizzo . "' ";

        if (!empty($this->citta))
            $sql .= ", citta = '" . $this->citta . "' ";

        if (!empty($this->provincia))
            $sql .= ", provincia = '" . $this->provincia . "' ";


        $sql .= "WHERE fkUtente = $this->idUtente";

        $this->setSql($sql);

        $this->query();

        return "";
    }

    public function attivaMedico($idUtente) {

        if (empty($idUtente))
            return NULL;

        require_once CLASS_DIR . 'Utente.class.php';
        $oUtente = new Utente();
        /*      require_once CLASS_DIR.'Mail.class.php';


          $sql = "SELECT email, nome, cognome FROM utenti INNER JOIN dettaglioMedico ON utenti.idUtente = dettaglioMedico.fkUtente WHERE idUtente = $idUtente";

          $this->setSql($sql);
          $return = $this->query();
          $row = $this->fetch($return);

          $to = $row['email'];
          $nome = $row['nome'];
          $cognome = $row['cognome'];


          $arrayCredenziali = $oUtente->generateNewPassword($to);
          $username = $arrayCredenziali['username'];
          $password = $arrayCredenziali['password'];

          $mail_body = "<div>Salve <strong>$nome $cognome</strong>,<br /><br />&egrave; stato abilitato ad utilizzare la piattaforma ".PLATFORM_NAME.".<br /><vr />Queste sono le credenziali di accesso:<br />Username: <strong>$username</strong><br />Password: <strong>$password</strong><br />Le ricordiamo che ad ogni accesso, dopo aver inserito username e password, le verr&agrave; inviato un codice temporaneo via mail da inserire entro 15 minuti.<br /></div>"; //mail body
          $subject = "Attivazione utente piattaforma ".PLATFORM_NAME; //subject

          $mailToSend = new Mail();

          $mailToSend->inviaMail($to,$subject,$mail_body);


         */

        if ($oUtente->attivaUtente($idUtente) === TRUE)
            return TRUE;
        else
            return FALSE;
    }

    public function disattivaMedico($idUtente) {

        if (empty($idUtente))
            return NULL;

        require_once CLASS_DIR . 'Utente.class.php';
        $oUtente = new Utente();

        if ($oUtente->disattivaUtente($idUtente) === TRUE)
            return TRUE;
        else
            return FALSE;
    }

    public function cancellaMedico($idUtente) {
        // var_dump($idUtente);die();
        if (empty($idUtente))
            return NULL;

        require_once CLASS_DIR . 'Utente.class.php';
        $oUtente = new Utente();

        if ($oUtente->cancellaUtente($idUtente) === TRUE)
            return TRUE;
        else
            return FALSE;
    }

    public function ripristinaMedico($idUtente) {

        if (empty($idUtente))
            return NULL;

        require_once CLASS_DIR . 'Utente.class.php';
        $oUtente = new Utente();

        if ($oUtente->ripristinaUtente($idUtente) === TRUE)
            return TRUE;
        else
            return FALSE;
    }

    public function getAllMedici($status) {

        $sql = "SELECT idDettaglioMedico, dettaglioMedico.nome, cognome, telefono, abbonamenti.dataFine as abonado, indirizzo, nomeprovincia, partitaIVA, active, deleted as stato, dettaglioMedico.fkUtente  FROM utenti INNER JOIN dettaglioMedico ON utenti.idUtente = dettaglioMedico.fkUtente LEFT JOIN province ON province.idprovincia = dettaglioMedico.fkProvinciaAlbo LEFT JOIN abbonamenti ON abbonamenti.fkUtente=utenti.idUtente WHERE utenti.fkRuolo = " . MEDICO . " AND utenti.deleted='0' GROUP BY idDettaglioMedico ORDER BY cognome, nome DESC";

        if (!empty($status)) {
            if ($status == "abbonato")
                $sql = "SELECT idDettaglioMedico, idAbbonamento, nome, cognome,abbonamenti.dataFine as abonado, telefono, indirizzo, nomeprovincia, active, deleted as stato, abbonamenti.fkUtente  FROM utenti INNER JOIN dettaglioMedico ON utenti.idUtente = dettaglioMedico.fkUtente LEFT JOIN province ON province.idprovincia = dettaglioMedico.fkprovincia INNER JOIN abbonamenti ON abbonamenti.fkUtente=utenti.idUtente WHERE utenti.fkRuolo = " . MEDICO . " GROUP BY idDettaglioMedico ORDER BY cognome, nome DESC";

            if ($status == "attesa")
                $sql = "SELECT idDettaglioMedico, nome, cognome, telefono, indirizzo,abbonamenti.dataFine as abonado, nomeprovincia, active, deleted as stato, dettaglioMedico.fkUtente  FROM utenti INNER JOIN dettaglioMedico ON utenti.idUtente = dettaglioMedico.fkUtente LEFT JOIN province ON province.idprovincia = dettaglioMedico.fkprovincia LEFT JOIN abbonamenti ON abbonamenti.fkUtente=utenti.idUtente WHERE utenti.fkRuolo = " . MEDICO . "  AND utenti.active='0' GROUP BY idDettaglioMedico  ORDER BY cognome, nome DESC";
        }

        $this->setSql($sql);
        $return = $this->query();


        $arrMed = null;
        $i = 0;
        while ($row = $this->fetch($return)) {
            $arrMed[$i] = $row;
            $i++;
        }
        return $arrMed;
    }

    public function updateDettaglioMedico() {

        if (empty($this->idUtente))
            return NULL;

        $sql = "UPDATE dettaglioMedico SET ";

        if (!empty($this->nome))
            $sql .= "nome = '" . $this->nome . "', ";

        if (!empty($this->cognome))
            $sql .= "cognome = '" . $this->cognome . "', ";

        if (!empty($this->telefono))
            $sql .= "telefono = '" . $this->telefono . "', ";

        if (!empty($this->telefonoMobile))
            $sql .= "telefonoMobile = '" . $this->telefonoMobile . "', ";


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

        if (!empty($this->partitaIVA))
            $sql .= "partitaIVA = '" . $this->partitaIVA . "', ";

        if (!empty($this->numeroAlbo))
            $sql .= "numeroAlbo = '" . $this->numeroAlbo . "', ";

        if (!empty($this->fkProvinciaAlbo))
            $sql .= "fkProvinciaAlbo = '" . $this->fkProvinciaAlbo . "', ";

        if (!empty($this->fkRegioneAlbo))
            $sql .= "fkRegioneAlbo = '" . $this->fkRegioneAlbo . "', ";

        if (!empty($this->fkComuneAlbo))
            $sql .= "fkComuneAlbo = '" . $this->fkComuneAlbo . "', ";


        $sql .= " WHERE fkUtente = $this->idUtente";

        $sql = str_replace(",  WHERE", " WHERE", $sql);

        $this->setSql($sql);

        $this->query()?$result=TRUE:$result=FALSE;


        if (!empty($this->password) || !empty($this->email)) {
            $sql = "UPDATE utenti SET ";
            if (!empty($this->password))
                $sql .= "password = '" . md5($this->password) . "', ";
            if (!empty($this->email))
                $sql .= "email = '" . $this->email . "', ";

            $sql .= " WHERE idUtente = $this->idUtente";

            $sql = str_replace(",  WHERE", " WHERE", $sql);

            $this->setSql($sql);

            $this->query()?$result=TRUE:$result=FALSE;;
        }
        return $result;
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

    public function registrazioneMedico() {

        $error = "";

        if (empty($this->nome))
            $error .= "Nome non inserito<br />";

        if (empty($this->cognome))
            $error .= "Cognome non inserito<br />";

        if (empty($this->email))
            $error .= "Email non inserita<br />";

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL) || !preg_match('/@.+\./', $this->email))
            $error .= "Formato email non valido <br />";

        if (empty($this->telefonoMobile))
            $error .= "Telefono Cellulare non inserito<br />";
        if (empty($this->numeroAlbo))
            $error .= "Numero di Albo non inserito<br />";
        if (empty($this->fkRegioneAlbo))
            $error .= "Regione del Albo non inserita<br />";
        if (empty($this->fkProvinciaAlbo))
            $error .= "Provincia del Albo non inserita<br />";
        if (empty($this->fkComuneAlbo))
            $error .= "Citt&agrave; del Albo non inserita<br />";

        if (!empty($error))
            return $error;


        $sql = "SELECT active FROM utenti WHERE email = '$this->email'";
        $this->setSql($sql);
        $result = $this->query();
        $rows = $this->fetch($result);

        $count = count($rows);

        if ($count > 0) {

            if ($rows['active'] == UTENTE_ATTIVO)
                return "EMAIL_DUPLICATA";

            if ($rows['active'] == UTENTE_NON_ATTIVO)
                return "EMAIL_DUPLICATA_INATTIVO";
        }

        $username = $this->generateUsername($this->nome, $this->cognome);
        $password = substr(md5($username . time()), 5, 8);

        $sql_insert_utente = "INSERT INTO utenti (username, password, email, active, deleted, fkRuolo) VALUES ('$username',md5('$password'),'$this->email'," . UTENTE_ATTIVO . "," . UTENTE_NON_CANCELLATO . "," . MEDICO . ")";
        $this->setSql($sql_insert_utente);
        $this->query();


        $sql_check_utente_inserito = "SELECT idUtente FROM utenti WHERE username = '$username' AND password = md5('$password')";
        $this->setSql($sql_check_utente_inserito);

        $return = $this->query();
        $row = $this->fetch($return);

        $idUtente = $row['idUtente'];


        $sql_insert_dettaglioMedico = "INSERT INTO dettaglioMedico (nome, cognome, telefono, telefonoMobile, fkComuneAlbo, fkRegioneAlbo, fkProvinciaAlbo, numeroAlbo, partitaIVA, ";

        $sql_insert_dettaglioMedico .= "fkUtente) VALUES ('$this->nome','$this->cognome','$this->telefono','$this->telefonoMobile','$this->fkComuneAlbo','$this->fkRegioneAlbo','$this->fkProvinciaAlbo','$this->numeroAlbo','$this->partitaIVA', '$idUtente')";

        $this->setSql($sql_insert_dettaglioMedico);

        $this->query() ? $exito = TRUE : $exito = FALSE;

        if ($exito === TRUE) {

            $sql_check_utente_inserito = "SELECT email FROM utenti WHERE idUtente = $idUtente";
            $this->setSql($sql_check_utente_inserito);

            $return = $this->query();
            $row = $this->fetch($return);
            $email = $row['email'];

            /// INVIO EMAIL

            $mail = new PHPMailer();
            $body = "<p><img src='http://easysmile.beecloud.it/img/logo_easysmile.png'></p><div>Salve,<br /><br />Lei ha registrato un nuovo account sul portale EasySmile Group.<br />Le credenziali di accesso sono:<br />Username:<strong>$username</strong><br>Password:<strong>$password</strong><br><br><br>Questo messaggio e' stato generato automaticamente, La preghiamo pertanto di non rispondere a questa e-mail poiche' l'indirizzo non e' controllato.</div>";
            

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

            $mail->Subject = "Nuovo account registrato nella piattaforma EasySmile Group";

            $mail->MsgHTML($body);

            $address = $email;
            $mail->AddAddress($address, $username);

            /// END INVIO EMAIL
            
            $mail->send();
            
            return true;
        } else {
            return FALSE;
        }
    }

    public function registrazioneMedicoAzienda() {

        $error = "";

        if (empty($this->nome))
            $error .= "Nome non inserito<br />";

        if (empty($this->cognome))
            $error .= "Cognome non inserito<br />";

        if (empty($this->email))
            $error .= "Email non inserita<br />";

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL) && !preg_match('/@.+\./', $this->email))
            $error .= "Formato email non valido <br />";

        if (empty($this->telefonoMobile))
            $error .= "Telefono Cellulare non inserito<br />";
        if (empty($this->numeroAlbo))
            $error .= "Numero di Albo non inserito<br />";
        if (empty($this->fkRegioneAlbo))
            $error .= "Regione del Albo non inserita<br />";
        if (empty($this->fkProvinciaAlbo))
            $error .= "Provincia del Albo non inserita<br />";
        if (empty($this->fkComuneAlbo))
            $error .= "Citt&agrave; del Albo non inserita<br />";
        if (empty($this->fkRegione))
            $error .= "Regione dell'azienda non inserita<br />";
        if (empty($this->fkProvincia))
            $error .= "Provincia dell'azienda non inserita<br />";
        if (empty($this->fkComune))
            $error .= "Comune dell'azienda non inserito<br />";
        if (empty($this->indirizzo))
            $error .= "Indirizzo non inserito<br />";
        if (empty($this->fkCAP))
            $error .= "CAP non inserito<br />";
        if (empty($this->telefonoMobileAzienda))
            $error .= "Telefono rappresentante azienda non inserito<br />";
        if (empty($this->fknumero))
            $error .= "Numero civico non inserito<br />";

        if (!empty($error))
            return $error;


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

        $username = $this->generateUsername($this->nome, $this->cognome);
        $password = substr(md5($username . time()), 5, 8);

        $sql_insert_utente = "INSERT INTO utenti (username, password, email, active, deleted, fkRuolo) VALUES ('$username',md5('$password'),'$this->email'," . UTENTE_ATTIVO . "," . UTENTE_NON_CANCELLATO . "," . MEDICO . ")";
        $this->setSql($sql_insert_utente);
        $this->query();


        $sql_check_utente_inserito = "SELECT idUtente FROM utenti WHERE username = '$username' AND password = md5('$password')";
        $this->setSql($sql_check_utente_inserito);

        $return = $this->query();
        $row = $this->fetch($return);

        $idUtente = $row['idUtente'];


        $sql_insert_dettaglioMedico = "INSERT INTO dettaglioMedico (nome, cognome, telefonoMobile, fkComuneAlbo, fkRegioneAlbo, fkProvinciaAlbo, numeroAlbo, ";

        $sql_insert_dettaglioMedico .= "fkUtente) VALUES ('$this->nome','$this->cognome','$this->telefonoMobile','$this->fkComuneAlbo','$this->fkRegioneAlbo','$this->fkProvinciaAlbo','$this->numeroAlbo', '$idUtente')";

        $this->setSql($sql_insert_dettaglioMedico);

        $this->query();


        $sql_insert_dettaglioAzienda = "INSERT INTO dettaglioAzienda (denominazione, telefono, telefonoMobile, indirizzo, numero, CAP, fkComune, fkProvincia, fkRegione, partitaIVA, codiceIscrizione, nomeRap, cognomeRap, ";

        $sql_insert_dettaglioAzienda .= "fkUtente) VALUES ('$this->denominazione','$this->telefono','$this->telefonoMobileAzienda','$this->indirizzo','$this->fknumero','$this->fkCAP','$this->fkComune','$this->fkProvincia','$this->fkRegione','$this->partitaIVA','$this->codiceIscrizione','$this->nomeRap','$this->cognomeRap', '$idUtente')";

        $this->setSql($sql_insert_dettaglioAzienda);




        if ($this->query() === TRUE) {

            $sql = "SELECT idDettaglioAzienda FROM dettaglioAzienda WHERE fkUtente = '" . $idUtente . "'";
            $this->setSql($sql);
            $result = $this->query();
            $rows = $this->fetch($result);
            $sql = "SELECT idDettaglioMedico FROM dettaglioMedico WHERE fkUtente = '" . $idUtente . "'";
            $this->setSql($sql);
            $result = $this->query();
            $rowa = $this->fetch($result);
            $sql = " INSERT INTO bridgeMedicoAzienda (fkMedico, fkAzienda) VALUES ('" . $rowa['idDettaglioMedico'] . "','" . $rows['idDettaglioAzienda'] . "') ";
            $this->setSql($sql);

            $this->query() ? $exito = TRUE : $exito = FALSE;

        if ($exito === TRUE) {

            $sql_check_utente_inserito = "SELECT email FROM utenti WHERE idUtente = $idUtente";
            $this->setSql($sql_check_utente_inserito);

            $return = $this->query();
            $row = $this->fetch($return);
            $email = $row['email'];

            /// INVIO EMAIL

            $mail = new PHPMailer();
            $body = "<p><img src='http://easysmile.beecloud.it/img/logo_easysmile.png'></p><div>Salve,<br /><br />Lei ha registrato un nuovo account sul portale EasySmile Group.<br />Le credenziali di accesso sono:<br />Username:<strong>$username</strong><br>Password:<strong>$password</strong><br><br><br>Questo messaggio e' stato generato automaticamente, La preghiamo pertanto di non rispondere a questa e-mail poiche' l'indirizzo non e' controllato.</div>";
            

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

            $mail->Subject = "Nuovo account registrato nella piattaforma EasySmile Group";

            $mail->MsgHTML($body);

            $address = $email;
            $mail->AddAddress($address, $username);

            /// END INVIO EMAIL
            
            $mail->send();
            
            return true;
        } else {
            return FALSE;
        }
        }
        return false;
    }

    public function registrazioneAzienda() {

        $error = "";

        if (empty($this->fkRegione))
            $error .= "Regione dell'azienda non inserita<br />";
        if (empty($this->fkProvincia))
            $error .= "Provincia dell'azienda non inserita<br />";
        if (empty($this->fkComune))
            $error .= "Comune dell'azienda non inserito<br />";
        if (empty($this->indirizzo))
            $error .= "Indirizzo non inserito<br />";
        if (empty($this->fkCAP))
            $error .= "CAP non inserito<br />";
        if (empty($this->fknumero))
            $error .= "Numero civico non inserito<br />";

        if (!empty($error))
            return $error;

        $idUtente = $_SESSION['utente']['idUtente'];


        $sql_insert_dettaglioAzienda = "INSERT INTO dettaglioAzienda (denominazione, telefono, telefonoMobile, indirizzo, numero, CAP, fkComune, fkProvincia, fkRegione, partitaIVA, codiceIscrizione, nomeRap, cognomeRap, ";

        $sql_insert_dettaglioAzienda .= "fkUtente) VALUES ('$this->denominazione','$this->telefono','$this->telefonoMobileAzienda','$this->indirizzo','$this->fknumero','$this->fkCAP','$this->fkComune','$this->fkProvincia','$this->fkRegione','$this->partitaIVA','$this->codiceIscrizione','$this->nomeRap','$this->cognomeRap', '$idUtente')";

        $this->setSql($sql_insert_dettaglioAzienda);

        if ($this->query() === TRUE) {

            $sql = "SELECT idDettaglioAzienda FROM dettaglioAzienda WHERE fkUtente = '" . $idUtente . "' ORDER BY idDettaglioAzienda DESC LIMIT 1 ";
            $this->setSql($sql);
            $result = $this->query();
            $rows = $this->fetch($result);
            $sql = "SELECT idDettaglioMedico FROM dettaglioMedico WHERE fkUtente = '" . $idUtente . "'";
            $this->setSql($sql);
            $result = $this->query();
            $rowa = $this->fetch($result);
            $sql = " INSERT INTO bridgeMedicoAzienda (fkMedico, fkAzienda) VALUES ('" . $rowa['idDettaglioMedico'] . "','" . $rows['idDettaglioAzienda'] . "') ";
            $this->setSql($sql);
            return $this->query() ? true : false;
        }
        return false;
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

    public function generateNewPassword($email) {

        if (empty($email))
            return NULL;

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            return NULL;

        $arrayCredenziali = array();

        $sql = "SELECT username FROM utenti WHERE email ='" . $email . "'";

        $this->setSql($sql);
        $return = $this->query();

        $row = $this->fetch($return);

        $username = $row['username'];

        if (empty($username))
            return NULL;

        $password = substr(md5($username . time()), 5, 8);


        $sql_pwd_update = "UPDATE utenti SET password = '" . md5($password) . "' WHERE email = '" . $email . "' AND username = '" . $username . "'";

        $this->setSql($sql_pwd_update);
        $return = $this->query();

        $arrayCredenziali['username'] = $username;
        $arrayCredenziali['password'] = $password;

        return $arrayCredenziali;
    }

    public function getMyAgenda($idUtente) {

        $sql = "SELECT idAgenda, tipologiaAppuntamento, tipoAppuntamento, statoAppuntamento.nome as stato, dettaglioPaziente.nome, dettaglioPaziente.cognome, dataAppuntamento, dataFine, fkStatoAppuntamento, fkPaziente FROM agenda LEFT JOIN dettaglioPaziente ON idDettaglioPaziente=fkPaziente INNER JOIN tipoAppuntamento ON tipologiaAppuntamento=idTipoAppuntamento INNER JOIN statoAppuntamento ON idStatoAppuntamento=fkStatoAppuntamento INNER JOIN dettaglioMedico ON dettaglioMedico.idDettaglioMedico=agenda.fkMedico  WHERE dettaglioMedico.fkUtente=$idUtente ORDER BY dataAppuntamento ASC ";
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
    
    
    public function getYourAgenda($idUtente) {
        

        $sql = "SELECT idAgenda, tipologiaAppuntamento, tipoAppuntamento, statoAppuntamento.nome as stato, dettaglioPaziente.nome, dettaglioPaziente.cognome, dataAppuntamento, dataFine, fkStatoAppuntamento, fkPaziente FROM agenda LEFT JOIN dettaglioPaziente ON idDettaglioPaziente=fkPaziente INNER JOIN tipoAppuntamento ON tipologiaAppuntamento=idTipoAppuntamento INNER JOIN statoAppuntamento ON idStatoAppuntamento=fkStatoAppuntamento INNER JOIN dettaglioMedico ON dettaglioMedico.idDettaglioMedico=agenda.fkMedico  WHERE dettaglioPaziente.fkUtente='$idUtente' ORDER BY dataAppuntamento ASC ";
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
    
    

    public function getAllTipos() {

        $sql = "SELECT idTipoAppuntamento, tipoAppuntamento FROM tipoAppuntamento ";
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

    public function addAppuntamento($tipo, $paziente, $data, $ora) {

        $dt = \DateTime::createFromFormat('d/m/Y', $data);
        $date = $dt->format('Y-m-d');
        $cuando = $dt->format('Y-m-d');
        $date.=" " . $ora . ":00";
        $cuando.=" 23:59:00";

        $sql = "SELECT idDettaglioMedico as idMedico FROM dettaglioMedico WHERE fkUtente ='" . $_SESSION['utente']['idUtente'] . "'";

        $this->setSql($sql);
        $return = $this->query();

        $row = $this->fetch($return);

        $idMedico = $row['idMedico'];

        $sql = "SELECT * FROM agenda WHERE fkMedico ='$idMedico' AND '$date' BETWEEN dataAppuntamento AND dataFine ";
        //   var_dump($sql);die();
        $this->setSql($sql);
        $return = $this->query();

        $rowan = $this->fetch($return);

        if (!empty($rowan))
            return FALSE;
        else {

            $sql_insert_utente = "INSERT INTO agenda (tipologiaAppuntamento, dataAppuntamento, fkStatoAppuntamento, fkPaziente, fkMedico) VALUES ( '$tipo','$date','2','$paziente', '$idMedico' )";
            $this->setSql($sql_insert_utente);
            return $this->query() ? TRUE : FALSE;
        }
    }
    
    public function addAppuntamentoPaz($tipo, $data, $ora) {

        $dt = \DateTime::createFromFormat('d/m/Y', $data);
        $date = $dt->format('Y-m-d');
        $cuando = $dt->format('Y-m-d');
        $date.=" " . $ora . ":00";
        $cuando.=" 23:59:00";

        $sql = "SELECT idDettaglioPaziente as paziente FROM dettaglioPaziente WHERE fkUtente ='" . $_SESSION['utente']['idUtente'] . "'";

        $this->setSql($sql);
        $return = $this->query();

        $row = $this->fetch($return);

        $paziente = $row['paziente'];

        $sql = "SELECT * FROM agenda WHERE fkMedico ='2' AND '$date' BETWEEN dataAppuntamento AND dataFine ";
        //   var_dump($sql);die();
        $this->setSql($sql);
        $return = $this->query();

        $rowan = $this->fetch($return);

        if (!empty($rowan))
            return FALSE;
        else {

            $sql_insert_utente = "INSERT INTO agenda (tipologiaAppuntamento, dataAppuntamento, fkStatoAppuntamento, fkPaziente, fkMedico) VALUES ( '$tipo','$date','2','$paziente', '2' )";
            $this->setSql($sql_insert_utente);
            return $this->query() ? TRUE : FALSE;
        }
    }

    public function modificaAppuntamento($idAgenda, $tipo, $data, $ora) {

        $dt = \DateTime::createFromFormat('d/m/Y', $data);
        $date = $dt->format('Y-m-d');
        $date.=" " . $ora . ":00";


        $sql = "SELECT idDettaglioMedico as idMedico FROM dettaglioMedico WHERE fkUtente ='" . $_SESSION['utente']['idUtente'] . "'";

        $this->setSql($sql);
        $return = $this->query();

        $row = $this->fetch($return);

        $idMedico = $row['idMedico'];

        $sql = "SELECT * FROM agenda WHERE fkMedico ='$idMedico' AND dataAppuntamento='$date' ";

        $this->setSql($sql);
        $return = $this->query();

        $rowan = $this->fetch($return);

        if (!empty($rowan))
            return FALSE;
        else {

            $sql_insert_utente = "UPDATE agenda SET tipologiaAppuntamento='$tipo', dataAppuntamento='$date', fkStatoAppuntamento='3' WHERE idAgenda='$idAgenda' ";
            $this->setSql($sql_insert_utente);
            return $this->query() ? TRUE : FALSE;
        }
    }

    public function cambiaDisponibilita($fechas, $tiempo, $tiempo2) {

        $sql = "SELECT idDettaglioMedico as idMedico FROM dettaglioMedico WHERE fkUtente ='" . $_SESSION['utente']['idUtente'] . "'";

        $this->setSql($sql);
        $return = $this->query();

        $row = $this->fetch($return);

        $idMedico = $row['idMedico'];

        foreach ($fechas as $key => $value) {
            $sql = "SELECT * FROM agenda WHERE fkMedico ='$idMedico' AND dataAppuntamento BETWEEN '$value 01:00:00' AND '$value 23:59:00' ";
            $this->setSql($sql);
            $return = $this->query();

            $rowan = $this->fetch($return);

            if (!empty($rowan))
                return FALSE;
            else {

                $sql_insert_utente = "INSERT INTO agenda (tipologiaAppuntamento, dataAppuntamento, dataFine, fkStatoAppuntamento,  fkPaziente, fkMedico) VALUES ('1', '$value $tiempo','$value $tiempo2','1',NULL, '$idMedico') ";
                $this->setSql($sql_insert_utente);
                $this->query() ? $return = TRUE : $return = FALSE;
            }
        }
        if (isset($return))
            return $return;
    }

    public function getMyAgendaByID($idUtente, $idAgenda) {

        $sql = "SELECT idAgenda, tipologiaAppuntamento, tipoAppuntamento, statoAppuntamento.nome as stato, dettaglioPaziente.nome, dettaglioPaziente.cognome, dataAppuntamento, fkStatoAppuntamento, fkPaziente FROM agenda INNER JOIN dettaglioPaziente ON idDettaglioPaziente=fkPaziente INNER JOIN tipoAppuntamento ON tipologiaAppuntamento=idTipoAppuntamento INNER JOIN statoAppuntamento ON idStatoAppuntamento=fkStatoAppuntamento INNER JOIN dettaglioMedico ON dettaglioMedico.idDettaglioMedico=agenda.fkMedico  WHERE dettaglioMedico.fkUtente=$idUtente AND agenda.idAgenda=$idAgenda ORDER BY dataAppuntamento ASC ";
        $this->setSql($sql);
        $result = $this->query();


        while ($rows = $this->fetch($result)) {

            $dsr = $rows;
        }

        return $dsr;
    }

    public function confermaAppuntamento($idUtente, $idAgenda) {

        $sql = "SELECT idAgenda FROM agenda INNER JOIN dettaglioMedico ON dettaglioMedico.idDettaglioMedico=agenda.fkMedico  WHERE dettaglioMedico.fkUtente=$idUtente AND agenda.idAgenda=$idAgenda ORDER BY dataAppuntamento ASC ";
        $this->setSql($sql);
        $result = $this->query();
        $rows = $this->fetch($result);
        if ($rows['idAgenda'] === $idAgenda) {
            $sql = "UPDATE agenda SET fkStatoAppuntamento = 3 WHERE idAgenda = $idAgenda ";
            $this->setSql($sql);
            return $this->query() ? TRUE : FALSE;
        } else
            return FALSE;
    }

    public function cancellaAppuntamento($idUtente, $idAgenda) {
        $sql = "UPDATE agenda SET fkStatoAppuntamento = 9 WHERE idAgenda = $idAgenda ";
        $this->setSql($sql);
        return $this->query() ? TRUE : FALSE;
    }
    
    public function checkIfAbono($idUtente){
        
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
    
    public function addGradimento($paziente, $medico, $score, $texto){
        
         $sql = " INSERT INTO gradimenti (fkAzienda, fkPaziente, score, texto) VALUES ('$medico', '$paziente', '$score', '$texto') ";
            $this->setSql($sql);
            $this->query() ? $return = TRUE : $return = FALSE;
        return $return;
    }

}
