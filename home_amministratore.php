<?php

    require_once "./config/sys_application.php";

    require_once CLASS_DIR."Utente.class.php";

        

        $tpl = new Smarty;
        $tpl->compile_check = COMPILE_CHECK;
        $tpl->debugging = DEBUGGING;
        
        $oCuentas = new Utente();
        $tpl->assign("numAziende",$oCuentas->countAziende());
        $tpl->assign("numMedici",$oCuentas->countMedici());
        $tpl->assign("numPazienti",$oCuentas->countPazienti());
        $tpl->assign("numOrdini",$oCuentas->countOrdini());
        $tpl->assign("numAtessa",$oCuentas->countAtessa());
            $_SESSION['utente']['IVASINO'] = $oCuentas->checkIfIVA();
    $_SESSION['utente']['IVA'] = intval($oCuentas->checkIVA());
    //var_dump($_SESSION);die; 
    if (isset($_SESSION['successo'])) {
        $tpl->assign ("success", "L'utente con l'ID ".$_SESSION['successo']." &egrave; stato modificato correttamente. ");
        $_SESSION['successo'] = NULL;
    }
    if(isset($_SESSION['accessError'])) {
        $tpl->assign ("accessError", $_SESSION['accessError']);
        $_SESSION['accessError']=NULL;
    }

    $tpl->display("home_amm.tpl");