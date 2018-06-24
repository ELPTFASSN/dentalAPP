<?php

    require_once "./config/sys_application.php";
    require_once CLASS_DIR."Utente.class.php";
    require_once CLASS_DIR."Medico.class.php";
    require_once CLASS_DIR."Azienda.class.php";
    require_once CLASS_DIR."Paziente.class.php";
          $tpl = new Smarty;
    $tpl->compile_check = COMPILE_CHECK;
    $tpl->debugging = DEBUGGING;
    //$tpl->display("registrazione_avvenuta.tpl");exit();
        if(isset($_POST['tipo'])) {
            if(isset($_POST['dataNascita'])) {
                $dt = \DateTime::createFromFormat('d/m/Y', $_POST['dataNascita']);
        $date = $dt->format('Y-m-d');
    }

        switch ($_POST['tipo']){
            case "paziente":
                
                $oPaziente = new Paziente();
                $oPaziente->nome = trim($_POST['nome']);
                $oPaziente->cognome = trim($_POST['cognome']);
                $oPaziente->dataNascita = $date;
                $oPaziente->email = trim($_POST['email']);
                $oPaziente->fkComune = trim($_POST['citta']);
                $oPaziente->fkProvincia = trim($_POST['provincia']);
                $oPaziente->telefono = trim($_POST['telefono']);
                $oPaziente->indirizzo = trim($_POST['indirizzo']);
                $oPaziente->sesso = trim($_POST['sesso']);
                $oPaziente->fkCAP = trim($_POST['CAP']);
                $oPaziente->numero = trim($_POST['numero']);
                $oPaziente->fkRegione = trim($_POST['regione']);
                $oPaziente->telefonoMobile = trim($_POST['telefonoMobile']);
                $oPaziente->sesso = trim($_POST['sesso']);
                //var_dump($oPaziente);die();
                echo $oPaziente->addPaziente();
                
                break;
            case "pazientes":
                
                $oPaziente = new Paziente();
                $oPaziente->nome = trim($_POST['nome']);
                $oPaziente->cognome = trim($_POST['cognome']);
                $oPaziente->dataNascita = $date;
                $oPaziente->email = trim($_POST['email']);
                $oPaziente->telefonoMobile = trim($_POST['telefonoMobile']);
                $oPaziente->azienda = trim($_POST['azienda']);
                //var_dump($oPaziente);die();
                echo $oPaziente->addPazientes();
                
                break;
            case"medico":
                $oMedico = new Medico();
                $oMedico->nome = trim($_POST['nome']);
                $oMedico->cognome = trim($_POST['cognome']);
                $oMedico->email = trim($_POST['email']);
                $oMedico->telefono = trim($_POST['telefono']);
                $oMedico->telefonoMobile = trim($_POST['telefonoMobile']);
                $oMedico->partitaIVA = trim($_POST['partitaIVA']);
                $oMedico->numeroAlbo = trim($_POST['numeroAlbo']);
                $oMedico->fkRegioneAlbo = trim($_POST['regioneAlbo']);
                $oMedico->fkComuneAlbo = trim($_POST['cittaAlbo']);
                $oMedico->fkProvinciaAlbo = trim($_POST['provinciaAlbo']);
               echo $oMedico->registrazioneMedico();
                break;
            case "azienda":
                $oMedico = new Medico();
                $oMedico->nome = trim($_POST['nome']);
                $oMedico->cognome = trim($_POST['cognome']);
                 $oMedico->nomeRap = trim($_POST['nomeRap']);
                $oMedico->cognomeRap = trim($_POST['cognomeRap']);
                $oMedico->email = trim($_POST['email']);
                $oMedico->emailAzienda = trim($_POST['emailAzienda']);
                $oMedico->telefono = trim($_POST['telefono']);
                $oMedico->telefonoMobile = trim($_POST['telefonoMobile']);
                $oMedico->numeroAlbo = trim($_POST['numeroAlbo']);
                $oMedico->fkRegioneAlbo = trim($_POST['regioneAlbo']);
                $oMedico->fkComuneAlbo = trim($_POST['cittaAlbo']);
                $oMedico->fkProvinciaAlbo = trim($_POST['provinciaAlbo']);
                $oMedico->denominazione = trim($_POST['denominazione']);
                $oMedico->partitaIVA = trim($_POST['partitaIVAAzienda']);
                $oMedico->fkComune = trim($_POST['citta']);
                $oMedico->fkProvincia = trim($_POST['provincia']);
                $oMedico->telefonoAzienda = trim($_POST['telefono']);
                $oMedico->indirizzo = trim($_POST['indirizzo']);
                $oMedico->fkRegione = trim($_POST['regione']);
                $oMedico->fkCAP = trim($_POST['CAP']);
                $oMedico->fknumero = trim($_POST['numero']);
                $oMedico->fkCodiceIscrizione = trim($_POST['codiceIscrizione']);
                $oMedico->telefonoMobileAzienda = trim($_POST['telefonoMobileAzienda']);
                
                echo $oMedico->registrazioneMedicoAzienda();
             
  
           //     echo '<pre>';var_dump($oMedico);return FALSE;
                break;
            case "aziendaca":
                $oMedico = new Medico();
            
                 $oMedico->nomeRap = trim($_POST['nomeRap']);
                $oMedico->cognomeRap = trim($_POST['cognomeRap']);
                $oMedico->emailAzienda = trim($_POST['emailAzienda']);
                $oMedico->telefono = trim($_POST['telefono']);
                $oMedico->denominazione = trim($_POST['denominazione']);
                $oMedico->partitaIVA = trim($_POST['partitaIVAAzienda']);
                $oMedico->fkComune = trim($_POST['citta']);
                $oMedico->fkProvincia = trim($_POST['provincia']);
                $oMedico->telefonoAzienda = trim($_POST['telefono']);
                $oMedico->indirizzo = trim($_POST['indirizzo']);
                $oMedico->fkRegione = trim($_POST['regione']);
                $oMedico->fkCAP = trim($_POST['CAP']);
                $oMedico->fknumero = trim($_POST['numero']);
                $oMedico->fkCodiceIscrizione = trim($_POST['codiceIscrizione']);
                $oMedico->telefonoMobileAzienda = trim($_POST['telefonoMobileAzienda']);
                
                echo $oMedico->registrazioneAzienda();
                break;
        }
        
            exit();
    }
    

    
   // var_dump($_SESSION);die();
    
    if(isset($_SESSION['error'])) {
        $tpl->assign("error", $_SESSION['error']);
        $_SESSION['error'] = null;
    }
    if(isset($_SESSION['accessError'])) {
        $tpl->assign ("accessError", $_SESSION['accessError']);
        $_SESSION['accessError'] = NULL;
    }
       
    if(isset($_GET['task'])) {
        
        $idTask = trim($_GET['task']);
        $oDettaglio = new Azienda();
        $regioni = $oDettaglio->getRegioni();
        $tpl->assign("regioni",$regioni);
        if($_GET['task'] =="paziente")
            $tpl->display("registrati_paziente.tpl");
            elseif($_GET['task']=="azienda")
                $tpl->display("registrati_azienda.tpl");
                else
        $tpl->display("registrati.tpl");
        exit();
    }
    

    
    $tpl->display("registrati_sceglie.tpl");