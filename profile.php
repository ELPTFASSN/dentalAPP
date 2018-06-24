<?php

    require_once "./config/sys_application.php";

    require_once CLASS_DIR."Utente.class.php";
    require_once CLASS_DIR."Utils.class.php";
    require_once CLASS_DIR."Medico.class.php";

   // var_dump($_SESSION);die();
            
        $tpl = new Smarty;
        $tpl->compile_check = COMPILE_CHECK;
        $tpl->debugging = DEBUGGING;

    $oMedico = new Medico($_SESSION['utente']['idUtente']);    
    $oUtils = new Utils();
    
    if(isset($_POST['modifica'])){
        
        if(!empty($_POST['telefono']))
        $oMedico->telefono = $oUtils->checkValue($_POST['telefono']);
        if(!empty($_POST['telefonoMobile']))
        $oMedico->telefonoMobile = $oUtils->checkValue($_POST['telefonoMobile']);
        if(!empty($_POST['email']))
        $oMedico->email = $oUtils->checkValue($_POST['email']);
        if(!empty($_POST['password']))
            $oMedico->password = $oUtils->checkValue($_POST['password']);
        $oMedico->updateDettaglioMedico()?$tpl->assign ("success", "Dati modificati correttamente"):$tpl->assign ("success", "Il sistema ha riscontrato un errore si prega di riprovare più tardi. ");
        //var_dump($oMedico);die;
    }
    
    
    $oMedico->getDettaglioMedico();

    
    

        
    
    if (isset($_SESSION['successo'])) {
        $tpl->assign ("success", "L'utente con l'ID ".$_SESSION['successo']." &egrave; stato modificato correttamente. ");
        $_SESSION['successo'] = NULL;
    }
    if(isset($_SESSION['accessError'])) {
        $tpl->assign ("accessError", $_SESSION['accessError']);
        $_SESSION['accessError']=NULL;
    }
    $tpl->assign("oMedico", $oMedico);
    $tpl->display("profilo.tpl");