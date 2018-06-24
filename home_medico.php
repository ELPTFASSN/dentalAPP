<?php

    require_once "./config/sys_application.php";

    require_once CLASS_DIR."Utente.class.php";
    require_once CLASS_DIR."Medico.class.php";

    //var_dump($_SESSION);die();
        

    $oAgenda = new Medico();
    
    $_SESSION['utente']['abonado'] = $oAgenda->checkIfAbono($_SESSION['utente']['idUtente']);
    $_SESSION['utente']['IVASINO'] = $oAgenda->checkIfIVA();
    $_SESSION['utente']['IVA'] = $oAgenda->checkIVA();
    
    //var_dump($_SESSION);die;
    
    
    
        $tpl = new Smarty;
        $tpl->compile_check = COMPILE_CHECK;
        $tpl->debugging = DEBUGGING;
        
        $oCuentas = new Utente();
      //  $tpl->assign("numAziende",$oCuentas->countAziende());
      //  $tpl->assign("numMedici",$oCuentas->countMedici());
        $tpl->assign("ordini",$oCuentas->getCountOrdiniByUtente($_SESSION['utente']['idUtente']));
        $tpl->assign("appuntamenti",$oCuentas->getCountAppuntamentiByUtente($_SESSION['utente']['idUtente']));
        $tpl->assign("scadenzaAbbonamento",$oCuentas->scadenzaAbbonamento($_SESSION['utente']['idUtente']));
        $tpl->assign("numPazienti",$oCuentas->getCountPazientiByUtente($_SESSION['utente']['idUtente']));
        $tpl->assign("numOrdini",$oCuentas->countOrdini($_SESSION['utente']['idUtente']));
      //  $tpl->assign("numAtessa",$oCuentas->countAtessa());
    
    if (isset($_SESSION['successo'])) {
        $tpl->assign ("success", "L'utente con l'ID ".$_SESSION['successo']." &egrave; stato modificato correttamente. ");
        $_SESSION['successo'] = NULL;
    }
    if(isset($_SESSION['accessError'])) {
        $tpl->assign ("accessError", $_SESSION['accessError']);
        $_SESSION['accessError']=NULL;
    }
$tpl->assign("agenda", $oAgenda->getMyAgenda($_SESSION['utente']['idUtente']));
    $tpl->display("home_medico.tpl");