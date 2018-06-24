<?php

    require_once "./config/sys_application.php";

    require_once CLASS_DIR."Coupon.class.php";
    require_once CLASS_DIR."Medico.class.php";
    require_once CLASS_DIR."Paziente.class.php";
    require_once CLASS_DIR."Ordine.class.php";

        $tpl = new Smarty;
        $tpl->compile_check = COMPILE_CHECK;
        $tpl->debugging = DEBUGGING;


   
 
        $oOrdini = new Ordine();
        
                
        
        if(isset($_GET['task']) && $_GET['task']=="generate") {
            
            require_once CLASS_DIR."Medico.class.php";
                $oMedico = new Medico(); 
    $medici = $oMedico->getAllMedici();
    $tipologia = $oOrdini->getTipoCoupon();
            $tpl->assign("codiceCoupon",$oOrdini->generateRandomString(15));
            $tpl->assign("medici",$medici);
             $tpl->assign("tipologia",$tipologia);
             $tpl->display("modifica_coupon.tpl");
           //$oOrdini->cambiaStato(trim($_GET['id']),trim($_GET['action'])) ? $tpl->assign ("success", "Lo stato dell'ordine con l'ID ".$_GET['id']." &egrave; stato cambiato correttamente. "): $tpl->assign ("error", "L'ordine con l'ID ".$_GET['attiva']." non esiste.");
            
            exit();
        }
        
    
    $arrOrdini = $oOrdini->getFattureByUtente($_SESSION['utente']['idUtente']);

    $tpl->assign("ordini", $arrOrdini);

    if (isset($_SESSION['successo'])) {
        $tpl->assign ("success", "L'ordine con l'ID ".$_SESSION['successo']." &egrave; stato modificato correttamente. ");
        $_SESSION['successo'] = NULL;
    }
    if(isset($_SESSION['accessError'])) {
        $tpl->assign ("accessError", $_SESSION['accessError']);
        $_SESSION['accessError']=NULL;
    }

    $tpl->display("fatture.tpl");
    
    
    