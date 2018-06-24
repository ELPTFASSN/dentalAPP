<?php

    require_once "./config/sys_application.php";
    require_once CLASS_DIR."Utente.class.php";
    require_once CLASS_DIR."Mail.class.php";
    require_once CLASS_DIR."Utils.class.php";
    
    $tpl = new Smarty;
    $tpl->compile_check = COMPILE_CHECK;
    $tpl->debugging = DEBUGGING;

    $oUtils = new Utils();
    $oMail = new Mail();
    $oUtente = new Utente(AMMINISTRATORE);
  
  
    if(isset($_POST['messaggio'])) {
        
        if(isset($_SESSION['utente']['nome']))
            $from = $_SESSION['utente']['nome']." ".$_SESSION['utente']['cognome'];
        else
            $from = $_SESSION['utente']['username'];
        
        if(empty($_POST['messaggio'])) 
            $error = "Devi inserire un messaggio";
        else{
        $to = $oUtente->getInfoUtente();
        
        $body = "Salve Amministratore,<br>&Egrave; stata inviata una segnalazione di errore dalla piattaforma eReferral.<br><br>Mittente: ".$from." - ".$_SESSION['utente']['email']."<br><br>Messaggio: <br>";
        $body .= $oUtils->checkValue($_POST['messaggio']);

        $oMail->inviaMail(EMAIL_CONTATTI, "Segnalazione di un Errore su eReferral", $body, EMAIL_FROM_ADDRESS, EMAIL_FROM_NAME) ? $successo = "Abbiamo ricevuto la tua segnalazione, grazie mille." : $error = "Non si &egrave; potuto inviare la tua segnalazione"; 
        }          
        }
    if(isset($error))
       $tpl->assign("error", $error);
    if(isset($successo))
       $tpl->assign("success", $successo);
    
    $tpl->display("segnala_errore.tpl");