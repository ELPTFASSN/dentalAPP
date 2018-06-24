<?php

    require_once "./config/sys_application.php";

    require_once CLASS_DIR."Medico.class.php";
    require_once CLASS_DIR."Azienda.class.php";
    require_once CLASS_DIR."Utils.class.php";

        $tpl = new Smarty;
        $tpl->compile_check = COMPILE_CHECK;
        $tpl->debugging = DEBUGGING;
    
        if(isset($_GET['id'])) {
            
            $oDettaglio = new Medico();
            $oDettaglio->idUtente = trim($_GET['id']);
            $regioni = $oDettaglio->getRegioni();
            $dettaglioMedico = $oDettaglio->getDettaglioMedico($oDettaglio->idUtente);
    if(isset($_GET['esito']))
        $tpl->assign("esito", "Medico modificato correttamente.");
            $tpl->assign("regioni",$regioni);
            $tpl->assign("oMedico",$oDettaglio->getDettaglioMedico());
            $tpl->display("modifica_medico.tpl");
                        
            unset($oDettaglio);
            unset($dettaglioMedico);
            
            exit();
            
            
        }
        
        
        if ( !empty($_POST['idUtente']) ) {
               
                            
        $oUtils = new Utils();
        $oAzienda = new Medico();
        
        $oAzienda->idUtente = $_POST['idUtente'];
              
        $oAzienda->nome = $oUtils->checkValue($_POST['nome']);
        $oAzienda->cognome = $oUtils->checkValue($_POST['cognome']);
        $oAzienda->telefono = $oUtils->checkValue($_POST['telefono']);
        $oAzienda->telefonoMobile = $oUtils->checkValue($_POST['telefonoMobile']);
        $oAzienda->codiceFiscale = $oUtils->checkValue($_POST['codiceFiscale']);
        $oAzienda->email = $oUtils->checkValue($_POST['email']);
        $oAzienda->specializzazione = $oUtils->checkValue($_POST['tipologia']);
        $oAzienda->indirizzo = $oUtils->checkValue($_POST['indirizzo']);
        $oAzienda->fkComune = $oUtils->checkValue($_POST['citta']);
        $oAzienda->fkProvincia = $oUtils->checkValue($_POST['provincia']);
        $oAzienda->fkRegione = $oUtils->checkValue($_POST['regione']);
        $oAzienda->numeroAlbo = $oUtils->checkValue($_POST['numeroAlbo']);
        $oAzienda->fkComuneAlbo = $oUtils->checkValue($_POST['cittaAlbo']);
        $oAzienda->fkProvinciaAlbo = $oUtils->checkValue($_POST['provinciaAlbo']);
        $oAzienda->fkRegioneAlbo = $oUtils->checkValue($_POST['regioneAlbo']);
        $oAzienda->partitaIVA = $oUtils->checkValue($_POST['partitaIVA']);  
        if(!empty($_POST['data']))
        $oAzienda->dataNascita = date('Y-m-d', strtotime(str_replace('-', '/', $oUtils->checkValue($_POST['data']))));
        
        if(!empty($_POST['password']))
        $oAzienda->password = $oUtils->checkValue($_POST['password']);
           
      //  echo'<pre>';                              var_dump($oAzienda);die('aa');   
        $error = $oAzienda->isError(TRUE);
        
        if ( empty($error) ) {
            $oAzienda->updateDettaglioMedico();
            header("Location: ".URL_FILE."medici.php?id=".$_POST['idUtente']."&esito=true");
            
        } else {
            
            $tpl->assign("error", $error);
        }
        
    } 
        
        
  
        if(isset($_GET['attiva'])) {
            
            $oMedico = new Medico();
            $oMedico->attivaMedico(trim($_GET['attiva'])) ? $tpl->assign ("esito", "Il medico &egrave; stato attivato correttamente. "): $tpl->assign ("error", "L'utente con l'ID ".$_GET['attiva']." non esiste.");
            
            
        }
        
        if(isset($_GET['disattiva'])) {
            
            $oMedico = new Medico();
            $oMedico->disattivaMedico(trim($_GET['disattiva'])) ? $tpl->assign ("esito", "Il medico &egrave; stato disattivato correttamente. "):$tpl->assign ("error", "L'utente con l'ID ".$_GET['disattiva']." non esiste. ");
            
        }
        
        if(isset($_GET['cancella'])) {
            
            $oDettaglio = new Medico();
            $oDettaglio->cancellaMedico(trim($_GET['cancella'])) ? $tpl->assign ("esito", "Il medico &egrave; stato cancellato correttamente. "):$tpl->assign ("error", "L'utente con l'ID ".$_GET['cancella']." non esiste. ");
        }
        

    
    $oMedico = new Medico(); 
    $medici = $oMedico->getAllMedici();
    
    
        
    if(isset($_GET['status'])) {
        
            
        $medici = $oMedico->getAllMedici(trim($_GET['status']));

       $tpl->assign("medici", $medici);
        $tpl->assign("status", trim($_GET['status']));
        $tpl->display("medici.tpl");  
                
        exit();
    
    }
    
        $oDsr = new Azienda();
    
    $arrDsr = $oDsr->getAllAziende();
   // var_dump($arrDsr);die();
    $tpl->assign("medici", $medici);

    if (isset($_SESSION['successo'])) {
        $tpl->assign ("success", "L'utente con l'ID ".$_SESSION['successo']." &egrave; stato modificato correttamente. ");
        $_SESSION['successo'] = NULL;
    }
    if(isset($_SESSION['accessError'])) {
        $tpl->assign ("accessError", $_SESSION['accessError']);
        $_SESSION['accessError']=NULL;
    }

    $tpl->display("medici.tpl");