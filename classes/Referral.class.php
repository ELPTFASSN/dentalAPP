<?php


    require_once DOC_ROOT."config/sys_application.php";
    require_once CLASS_DIR."DB.class.php";

    class Referral extends DB {
        
        public $idReferral = NULL;
        public $fkUtente = NULL;
        public $fkDettaglioPaziente = NULL;
        public $dataApertura = NULL;
        public $dataAggiornamento = NULL;
        public $note= NULL;
        public $pathAllegato= NULL;
        public $fkStatoReferral = NULL;
        public $fkCentro = NULL;
        
        
        
        public function __construct() {

            parent::__construct();

        }
        
        
        public function isError() {
            
            $error = "";
            
            if ( empty($this->fkUtente) )
                $error .= "Medico non associato<br />";
            
            if ( empty($this->fkDettaglioPaziente) )
                $error .= "Paziente non associato<br />";
            
            if ( empty($this->fkCentro) )
                $error .= "Centro non associato<br />";

            
            return $error;
            
        }
        
        public function getCentri(){
            
            $sql = "SELECT * FROM centroTrapianti";
            $this->setSql($sql);
            $result = $this->query();
            $i = 0;
            
            while ( $row = $this->fetch($result) ) {
                $centri[$i] = $row;
                $i++;
            }
            
            
            return $centri;
        }
        
        public function checkThis($idDettaglioPaziente){
            
            if ( empty($idDettaglioPaziente) )
              return NULL;
            
            $sql = "SELECT * FROM referral WHERE fkDettaglioPaziente = '$idDettaglioPaziente'";
            
            $this->setSql($sql);
            $result = $this->query();    
            $row = $this->fetch($result);
            
           // var_dump($row);die();
            return $row;
        }
        
        
        public function insert () {
            
            $error = $this->isError();
            
            if ( !empty($error) )
                return NULL;
            
            $sql = "INSERT INTO referral (fkUtente, fkDettaglioPaziente, dataApertura, dataAggiornamento, fkStatoReferral, fkCentro";
            
            if ( !empty($this->note) )
                $sql .= ", note ";
            
            $sql .= ") VALUES (";
            
            $sql .= "$this->fkUtente, $this->fkDettaglioPaziente, '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."', ".IN_ATTESA_DI_VISIONE.", $this->fkCentro";
            
            if ( !empty($this->note) )
                $sql .= ", '".$this->note."' ";
            
            $sql .= ")";
            
            $this->setSql ( $sql );
            
            $return = $this->query();
            
            // Invio mail al DSR
            $this->mailToDSR( $this->fkUtente );
            
            return $return;
            
        }
        
        public function mailToDSR( $idUtente ) {
            
            $sql = "SELECT dettaglioMedico.nome, dettaglioMedico.cognome, utenti.email FROM utenti INNER JOIN dettaglioMedico ON utenti.idUtente=dettaglioMedico.fkUtente WHERE idUtente = ".$idUtente;
            $this->setSql($sql);
            $result = $this->query();
            
            $row = $this->fetch($result);
            
            $nome = $row['nome'];
            $nome = $row['nome'];
            $nome = $row['email'];
            
            $sql = "SELECT email FROM utenti WHERE fkRuolo = ".DESIGN_SPECIALIST_REVIEW;
            $this->setSql($sql);
            $result = $this->query();
            
            $to = NULL;
            $i = 0;
            while ( $row = $this->fetch($result) ) {
                $to[$i] = $row['email'];
                $i++;
            }
            
            if ($i==0)
                return NULL;
            
            
            require_once CLASS_DIR.'Mail.class.php';
            $mail_body = "<div>Salve <strong>Deisgn Specialist Review</strong>,<br /><br />&egrave; stato inserito un nuovo eReferral da valutare. Acceda quanto prima alla piattaforma con le proprie credenziali per esaminare e rispondere a tale richiesta.<br /></div>";
            $subject = "Nuovo eReferral ricevuto";

            $mailToSend = new Mail();

            $mailToSend->inviaMail($to,$subject,$mail_body);
            
            
        }
        
        
        public function updateStato ( $idStato ) {
            
            if ( empty($this->idReferral) )
                return NULL;
            
            if ( empty($idStato) || !is_numeric($idStato) )
                return NULL;
            
            $sql = "UPDATE referral SET fkStatoReferral = $idStato WHERE idReferral = $this->idReferral";
            $this->setSql ($sql);
            
            $result = $this->query();
            
            return $result;
            
        }
        
        public function isErrorRisposte () {
            
            $error = "";
            
            if ( empty($this->idReferral) )
                $error .= "Referral non associato correttamente<br />";
            
            if ( empty($this->fkSender) )
                $error .= "Non è stato inserito chi ha inviato il messaggio<br />";
            
            if ( empty($this->fkReceiver) )
                $error .= "Non è stato inserito chi riceve il messaggio<br />";
            
            if ( empty($this->note) && empty($this->pathAllegato) )
                $error .= "Non sono state inserite le note o un allegato alla richiesta<br />";
            
            
            return $error;
        }
        
        public function referralRisposte ( $fkSender, $fkReceiver, $idStateReferral, $note = NULL, $pathAllegato = NULL ) {
            
            $this->fkSender = $fkSender;
            $this->fkReceiver = $fkReceiver;
            $this->note = $note;
            $this->pathAllegato = $pathAllegato;
            
            
            
            $error = $this->isErrorRisposte();
            
            //echo "<pre>";var_dump ($this);echo $error;exit;
            if ( !empty($error) )
                return NULL;
            
            if ( empty($idStateReferral) || !is_numeric($idStateReferral) )
                return NULL;
            
            if ( empty($this->idReferral) )
                return NULL;
            
            
            $sql = "INSERT INTO bridgeReferralRisposte ( fkSender, fkReceiver, fkReferral, fkStatoReferral, data ";
            
            if ( !empty($this->note) )
                $sql .= ", note ";
            
            if ( !empty($this->pathAllegato) )
                $sql .= ", pathAllegato ";
            
            $sql .= ") ";
            
            $sql .= "VALUES ( $this->fkSender, $this->fkReceiver, $this->idReferral, $idStateReferral, '".date("Y-m-d H:i:s")."' ";
            
            if ( !empty($this->note) )
                $sql .= ", '$this->note' ";
            
            if ( !empty($this->pathAllegato) )
                $sql .= ", '$this->pathAllegato' ";
            
            $sql .= ") ";
            
            $this->setSql($sql);
            $return = $this->query();
            
            $this->updateStato($idStateReferral);
            
            
            $sqlCheckRuoloSender = "SELECT fkRuolo FROM utenti WHERE idUtente = ".$fkSender;
            $this->setSql($sqlCheckRuoloSender);
            $returnCheckRuoloSender = $this->query();
            $rowCheckRuoloSender = $this->fetch($returnCheckRuoloSender);
            
            if ( $rowCheckRuoloSender['fkRuolo']==PAZIENTE )
                $tableName = "dettaglioPaziente";
            
            if ( $rowCheckRuoloSender['fkRuolo']==MEDICO )
                $tableName = "dettaglioMedico";
            
            if ( $rowCheckRuoloSender['fkRuolo']==DESIGN_SPECIALIST_REVIEW )
                $tableName = "dettaglioDsr";
            
            $sql = "SELECT $tableName.nome, $tableName.cognome, utenti.email FROM utenti INNER JOIN $tableName ON utenti.idUtente=$tableName.fkUtente WHERE idUtente = ".$fkSender;
            
            
            $this->setSql($sql);
            $return = $this->query();
            
            $row = $this->fetch($return);
            
            $mittente['nome'] = $row['nome'];
            $mittente['cognome'] = $row['cognome'];
            $mittente['email'] = $row['email'];
            
            
            
            $sqlCheckRuoloReceiver = "SELECT fkRuolo FROM utenti WHERE idUtente = ".$fkReceiver;
            
            $this->setSql($sqlCheckRuoloReceiver);
            $returnCheckRuoloReceiver = $this->query();
            $rowCheckRuoloReceiver = $this->fetch($returnCheckRuoloReceiver);
            
            if ( $rowCheckRuoloReceiver['fkRuolo']==PAZIENTE )
                $tableName = "dettaglioPaziente";
            
            if ( $rowCheckRuoloReceiver['fkRuolo']==MEDICO )
                $tableName = "dettaglioMedico";
            
            if ( $rowCheckRuoloReceiver['fkRuolo']==DESIGN_SPECIALIST_REVIEW )
                $tableName = "dettaglioDsr";
            
            $sql = "SELECT $tableName.nome, $tableName.cognome, utenti.email FROM utenti INNER JOIN $tableName ON utenti.idUtente=$tableName.fkUtente WHERE idUtente = ".$fkReceiver;
            
            $this->setSql($sql);
            $return = $this->query();
            
            $row = $this->fetch($return);
            
            $destinatario['nome'] = $row['nome'];
            $destinatario['cognome'] = $row['cognome'];
            $destinatario['email'] = $row['email'];
            
            
            
            $sql = "SELECT dettaglioPaziente.nome, dettaglioPaziente.cognome FROM dettaglioPaziente INNER JOIN referral ON dettaglioPaziente.idDettaglioPaziente = referral.fkDettaglioPaziente WHERE referral.idReferral = ".$this->idReferral;
            
            $this->setSql($sql);
            $return = $this->query();
            
            $row = $this->fetch($return);
            
            $referral['nome'] = $row['nome'];
            $referral['cognome'] = $row['cognome'];
            
            
            if ( empty($mittente) || empty($destinatario) || empty($referral)  )
                return NULL;
            
            
            $sql_update = "UPDATE referral SET dataAggiornamento = '".date("Y-m-d H:i:s")."' WHERE idReferral = ".$this->idReferral;
            $this->setSql($sql_update);
            $return = $this->query();
            
            require_once CLASS_DIR.'Mail.class.php';
            $mail_body = "<div>Salve <strong>".$destinatario['cognome']." ".$destinatario['nome']."</strong>,<br /><br />&egrave; stato modificato lo stato del eReferral con identificativo = $this->idReferral riferito al paziente <strong>".$referral['nome']." ".$referral['cognome']."</strong><br />Si prega di prendere visione delle modifiche sulla piattaforma al pi&ugrave; presto.<br /></div>";
            $subject = "Nuova modifica al eReferral";

            $mailToSend = new Mail();

            $mailToSend->inviaMail($destinatario['email'],$subject,$mail_body);
            
            
            return $return;
            
        }
        
        public function presaInCarico ( $idDsr ) {
            
            if ( empty($this->idReferral) )
                return NULL;
            
            if ( empty($idDsr) )
                return NULL;
            
            
            
            $sql = "SELECT fkUtente FROM referral WHERE idReferral = ".$this->idReferral." AND fkStatoReferral = ".IN_ATTESA_DI_VISIONE;
            $this->setSql ($sql);
            
            $result = $this->query();
            $row = $this->fetch($result);
            
            $fkReceiver = $row['fkUtente'];
            
            if ( empty($fkReceiver) )
                return NULL;
            
            $note = "L\'eReferral &egrave; stato preso in carico dal Desegni Specialist Review. A breve riceverete una risposta";
            
            
            $sql_update = "UPDATE referral SET fkDsr = ".$idDsr." WHERE idReferral = ".$this->idReferral;
            $this->setSql ($sql_update);
            
            $result = $this->query();
            
            $this->referralRisposte ( $idDsr, $fkReceiver, PRESO_IN_CARICO, $note );
            
        }
        
        public function controlloAppartenenzaReferral ( $idUtente, $idReferral, $admin = FALSE ) {
            
            if (empty($idUtente))
                return NULL;
            
            if (empty($idReferral))
                return NULL;
            
            if ( !empty($admin) )
                return true;
            
            $sql = "select count(1) as trovato from referral WHERE ( fkUtente = $idUtente || fkDsr = $idUtente) AND idReferral = $idReferral";
            $this->setSql($sql);
            
            $return = $this->query();
            $row = $this->fetch($return);
            
            if ( $row['trovato']>=1 )
                return true;
            else
                return false;
            
        }
        
         public function getMyReferrals ( $idUtente, $admin = FALSE ) {
            
            if ( empty($idUtente) )
                return NULL;
            
            $sql = "SELECT idReferral, fkDettaglioPaziente AS idPaziente, dettaglioPaziente.nome, cognome, dataApertura, dataAggiornamento, referral.note, statoReferral.nome as stato FROM referral INNER JOIN statoReferral ON referral.fkStatoReferral=statoReferral.idStatoReferral INNER JOIN dettaglioPaziente ON referral.fkDettaglioPaziente=dettaglioPaziente.idDettaglioPaziente";
 
            if ( !$admin )
                 $sql .= " WHERE fkUtente = ".$idUtente;
            
            $this->setSql($sql);
            $return = $this->query();
            $i = 0;
            
            while ( $row = $this->fetch($return) ) {
                
            $referral[$i]['idReferral'] = $row['idReferral'];
            $referral[$i]['nome'] = $row['nome'];
            $referral[$i]['cognome'] = $row['cognome'];
            $referral[$i]['idPaziente'] = $row['idPaziente'];
            $referral[$i]['dataApertura'] = $row['dataApertura'];
            $referral[$i]['dataAggiornamento'] = $row['dataAggiornamento'];
            $referral[$i]['note'] = $row['note'];
            $referral[$i]['stato'] = $row['stato'];
                $i++;
            }
           
            return $referral;
         }
         
        public function getReferral ( $idReferral ) {
            
            if ( empty($idReferral) )
                return NULL;
            
            $sql = "SELECT fkUtente AS idMedico, fkDettaglioPaziente AS idPaziente, fkDsr AS idDsr, dataApertura, dataAggiornamento, note, referral.fkStatoReferral AS fkStatoReferral, statoReferral.nome as stato FROM referral INNER JOIN statoReferral ON referral.fkStatoReferral=statoReferral.idStatoReferral WHERE idReferral = ".$idReferral;
            $this->setSql($sql);
            $return = $this->query();
            $row = $this->fetch($return);
            
            $referral = NULL;
            
            if ( empty($row) )
                return NULL;
            
            $referral['idReferral'] = $idReferral;
            $referral['idMedico'] = $row['idMedico'];
            $referral['idPaziente'] = $row['idPaziente'];
            $referral['idDsr'] = $row['idDsr'];
            $referral['fkStatoReferral'] = $row['fkStatoReferral'];
            $referral['dataApertura'] = $row['dataApertura'];
            $referral['dataAggiornamento'] = $row['dataAggiornamento'];
            $referral['note'] = $row['note'];
            $referral['stato'] = $row['stato'];
            
            
            $sqlMedico = "SELECT dettaglioMedico.nome, dettaglioMedico.cognome, dettaglioMedico.tipoSpecializzazione FROM dettaglioMedico WHERE fkUtente = ".$referral['idMedico'];
            $this->setSql($sqlMedico);
            $returnMedico = $this->query();
            $rowMedico = $this->fetch($returnMedico);
            
            $referral['nomeMedico'] = $rowMedico['nome'];
            $referral['cognomeMedico'] = $rowMedico['cognome'];
            $referral['specializzazioneMedico'] = $rowMedico['tipoSpecializzazione'];
            
            if ( !empty($referral['idDsr']) ) {
                $sqlDsr = "SELECT dettaglioDsr.nome, dettaglioDsr.cognome FROM dettaglioDsr WHERE fkUtente = ".$referral['idDsr'];
                $this->setSql($sqlDsr);
                $returnDsr = $this->query();
                $rowDsr = $this->fetch($returnDsr);
                $referral['nomeDsr'] = $rowDsr['nome'];
                $referral['cognomeDsr'] = $rowDsr['cognome'];
            } else {
                $referral['nomeDsr'] = "";
                $referral['cognomeDsr'] = "";
            }
            
            
            $sqlPaziente = "SELECT dettaglioPaziente.nome, dettaglioPaziente.cognome, dettaglioPaziente.dataNascita, dettaglioPaziente.sesso, dettaglioPaziente.codFiscale, dettaglioPaziente.citta, dettaglioPaziente.provincia, dettaglioPaziente.indirizzoDomicilio, dettaglioPaziente.cittaDomicilio, dettaglioPaziente.provinciaDomicilio, dettaglioPaziente.telefono, dettaglioPaziente.email, dettaglioPaziente.nazionalita, dettaglioPaziente.linguaParlata, dettaglioPaziente.note, dettaglioClinicoPaziente.cirrosi, dettaglioClinicoPaziente.eziologia, dettaglioClinicoPaziente.epatocarcinoma, dettaglioClinicoPaziente.altraPatologia FROM dettaglioPaziente INNER JOIN dettaglioClinicoPaziente ON dettaglioPaziente.idDettaglioPaziente = dettaglioClinicoPaziente.fkDettaglioPaziente WHERE dettaglioPaziente.idDettaglioPaziente = ".$referral['idPaziente'];
            $this->setSql($sqlPaziente);
            $returnPaziente = $this->query();
            $rowPaziente = $this->fetch($returnPaziente);
            
            require_once CLASS_DIR.'Utils.class.php';
            
            $oUtils = new Utils();
            
            $referral['paziente'] = $rowPaziente;
            
            $sqlEsami = "SELECT esami.idEsame as idEsame, esami.nome as nome, bridgeEsamePaziente.data as data, bridgeEsamePaziente.valore as valore, bridgeEsamePaziente.dialisi as dialisi, scansioneEsami.path as pathScansione, scansioneEsami.nomeFile as nomeScansione FROM bridgeEsamePaziente INNER JOIN esami ON esami.idEsame=bridgeEsamePaziente.fkEsame LEFT JOIN scansioneEsami ON scansioneEsami.idScansioneEsami=bridgeEsamePaziente.fkScansioneEsame WHERE fkDettaglioPaziente = ".$referral['idPaziente'];
            $this->setSql($sqlEsami);
            $returnEsami = $this->query();
            
            $i = 0;
            
            while ( $rowEsami = $this->fetch($returnEsami) ) {
                
                $referral['esami'][$i] = $rowEsami;
                $i++;
                
            }
            
            $sqlAltroEsami = "SELECT * FROM bridgeAltroEsamePaziente WHERE fkDettaglioPaziente = ".$referral['idPaziente'];
            $this->setSql($sqlAltroEsami);
            $returnAltroEsami = $this->query();
            
            $i = 0;
            
            while ( $rowAltroEsami = $this->fetch($returnAltroEsami) ) {
                
                $referral['altroEsami'][$i] = $rowAltroEsami;
                $i++;
                
            }
            
            require_once CLASS_DIR.'Paziente.class.php';
            $oPaziente = new Paziente();
            $oPaziente->idDettaglioPaziente = $referral['idPaziente'];
            
            $referral['meld'] = $oPaziente->calcoloMeld();
            
            if ( !empty($referral['meld']) )
                $referral['meldNa'] = $oPaziente->calcoloMeldNa($referral['meld']);
            else
                $referral['meldNa'] = 0;
            
            
            return $referral;
            
            
        }
        
        public function getReferralRisposte ( $idReferral, $idUtente, $admin = FALSE ) {
            
            
            $sqlRisposte = "SELECT bridgeReferralRisposte.fkSender AS fkSender, bridgeReferralRisposte.fkReceiver AS fkReceiver, statoReferral.nome AS statoReferral, concat(sender.nome, ' ', sender.cognome) AS medico_sender, concat (receiver.nome, ' ', receiver.cognome) AS medico_receiver, concat ( sender2.nome, ' ', sender2.cognome ) AS dsr_sender, concat ( receiver2.nome, ' ', receiver2.cognome ) AS dsr_receiver, bridgeReferralRisposte.data as data, bridgeReferralRisposte.note as note, bridgeReferralRisposte.pathAllegato as pathAllegato FROM bridgeReferralRisposte INNER JOIN statoReferral ON statoReferral.idStatoReferral = bridgeReferralRisposte.fkStatoReferral LEFT JOIN dettaglioMedico AS sender ON sender.fkUtente = bridgeReferralRisposte.fkSender LEFT JOIN dettaglioMedico AS receiver ON receiver.fkUtente = bridgeReferralRisposte.fkReceiver LEFT JOIN dettaglioDsr AS sender2 ON sender2.fkUtente = bridgeReferralRisposte.fkSender LEFT JOIN dettaglioDsr AS receiver2 ON receiver2.fkUtente = bridgeReferralRisposte.fkReceiver WHERE bridgeReferralRisposte.fkReferral = ".$idReferral." ";
            
            if ( empty($admin) )
                $sqlRisposte .= " AND ( bridgeReferralRisposte.fkSender = $idUtente OR bridgeReferralRisposte.fkReceiver = $idUtente ) ";
            
            $sqlRisposte .= " ORDER BY bridgeReferralRisposte.data DESC";
            
            $this->setSql($sqlRisposte);
            $returnRisposte = $this->query();
            $i = 0;
            
            while ( $rowRisposte = $this->fetch($returnRisposte) ) {
                
                $risposte[$i] = $rowRisposte;
                $i++;
                
            }
            
            return $risposte;
            
        }
        
        
    }