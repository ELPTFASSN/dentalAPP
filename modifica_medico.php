<?php

    require_once "./config/sys_application.php";
    require_once CLASS_DIR."Medico.class.php";
    require_once CLASS_DIR."Utils.class.php";
    
    $tpl = new Smarty;
    $tpl->compile_check = COMPILE_CHECK;
    $tpl->debugging = DEBUGGING;
    
    require_once "province.php";
    $tpl->assign("province", $province);
    
    if (isset($_GET['id']))
        $idUtente = $_GET['id'];
    else
        $idUtente = $_POST['idUtente'];
    
    $oMedico = new Medico($idUtente);
    
     $tpl->assign("idUtente", $idUtente);
    
   // var_dump($oMedico);die();

    $post = null;
    if ( !empty($_POST['idUtente']) ) {
       
        $oUtils = new Utils();
        
        $oMedico->idMedico = $_POST['idUtente'];
        
        $oMedico->getDettaglioMedico();
        
        $oMedico->nome = $oUtils->checkValue($_POST['nome']);
        $oMedico->cognome = $oUtils->checkValue($_POST['cognome']);
        $oMedico->telefono = $oUtils->checkValue($_POST['telefono']);
        $oMedico->email = $oUtils->checkValue($_POST['email']);
        $oMedico->indirizzo = $oUtils->checkValue($_POST['indirizzo']);
        $oMedico->citta = $oUtils->checkValue($_POST['citta']);
        $oMedico->provincia = $oUtils->checkValue($_POST['provincia']);
        
        $specializzazione = $oUtils->checkValue($_POST['specializzazione']);
        if ( $specializzazione=="Altro" )
            $oMedico->specializzazione = $oUtils->checkValue($_POST['altro_value']);
        else
            $oMedico->specializzazione = $oUtils->checkValue($_POST['specializzazione']);
        
        
        
        $anno = $oUtils->checkValue($_POST['anno']);
        
        $mese = $oUtils->checkValue($_POST['mese']);
        if ($mese<10)
            $mese = "0".$mese;
        
        $giorno = $oUtils->checkValue($_POST['giorno']);
        if ($giorno<10)
            $giorno = "0".$giorno;
        
        $oMedico->dataSpecializzazione = $anno."-".$mese."-".$giorno;
        $oMedico->password = $oUtils->checkValue($_POST['password']);
        //echo "<pre>";var_dump($_POST);die();
        
        $error = $oMedico->isError(TRUE);
        
        if ( empty($error) ) {
            $oMedico->updateDettaglioMedico();
            $_SESSION['successo'] = $_POST['idUtente'];
            header("Location: ".URL_FILE.HOME_AMMINISTRATORE);
            
        } else {
            
            $tpl->assign("error", $error);
        }
        
    } else {
        
        
        $oMedico->idMedico = $_SESSION['utente']['idUtente'];
        $oMedico->getDettaglioMedico();
        
        
    }


    if ($oMedico->specializzazione!= "Medico_di_Base" && $oMedico->specializzazione!= "Epatologo")
        $post['altro_value']=$oMedico->specializzazione;
    
    if (!empty($oMedico->dataSpecializzazione)) {
        $arrDate = explode("-",$oMedico->dataSpecializzazione);
        $post['anno']=$arrDate[0];
        $post['mese']=$arrDate[1];
        $post['giorno']=$arrDate[2];
    }

    $tpl->assign("post", $post);
    //echo "<pre>";var_dump($oMedico);die();
    $tpl->assign("oMedico", $oMedico);
    
    $tpl->display("modifica_medico.tpl");
    
    
  