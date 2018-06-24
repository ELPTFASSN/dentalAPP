<?php

    require_once "./config/sys_application.php";
    require_once CLASS_DIR."Utente.class.php";
    require_once CLASS_DIR."Coupon.class.php";

        $tpl = new Smarty;
        $tpl->compile_check = COMPILE_CHECK;
        $tpl->debugging = DEBUGGING;

        $oCuentas = new Utente();
        $oOrdini = new Coupon();
        
                    $_SESSION['utente']['IVASINO'] = $oCuentas->checkIfIVA();
    $_SESSION['utente']['IVA'] = $oCuentas->checkIVA();
    
 
        
        if(isset($_POST['inserimento'])){
   //         var_dump($_POST);die;
            if(!empty($_POST['14'])){
                if($_POST['14'] =='on')
                $oOrdini->updatePrezzi('14', '1');
                else
                     $oOrdini->updatePrezzi('14', '0');
            }
            if(!empty($_POST['15']))
                $oOrdini->updatePrezzi('15', trim($_POST['15']));
            if(!empty($_POST['1']))
                $oOrdini->updatePrezzi('1', trim($_POST['1']));
            if(!empty($_POST['2']))
                $oOrdini->updatePrezzi('2', trim($_POST['2']));
            if(!empty($_POST['3']))
                $oOrdini->updatePrezzi('3', trim($_POST['3']));
            if(!empty($_POST['4']))
                $oOrdini->updatePrezzi('4', trim($_POST['4']));
            if(!empty($_POST['5']))
                $oOrdini->updatePrezzi('5', trim($_POST['5']));
            if(!empty($_POST['6']))
                $oOrdini->updatePrezzi('6', trim($_POST['6']));
            if(!empty($_POST['7']))
                $oOrdini->updatePrezzi('7', trim($_POST['7']));
            if(!empty($_POST['8']))
                $oOrdini->updatePrezzi('8', trim($_POST['8']));
            if(!empty($_POST['9']))
                $oOrdini->updatePrezzi('9', trim($_POST['9']));
            if(!empty($_POST['10']))
                $oOrdini->updatePrezzi('10', trim($_POST['10']));
            if(!empty($_POST['11']))
                $oOrdini->updatePrezzi('11', trim($_POST['11']));
            if(!empty($_POST['13']))
                $oOrdini->updatePrezzi('13', trim($_POST['13']));
            if(!empty($_POST['12']))   {           
            if( $oOrdini->updatePrezzi('12', trim($_POST['12'])))
                 $tpl->assign ("esito", "Prezzi cambiati con successo! ");
            else
                 $tpl->assign ("error", "ERRORE del sistema, prezzi non cambiati! ");
            
            }
        }
        


    
    $arrOrdini = $oOrdini->getPrezzi();
   // echo '<pre>';var_dump($arrOrdini);die;
    $tpl->assign("arrOrdini", $arrOrdini);
$arrOrdini = $oOrdini->getPrezziDopados();
$tpl->assign("precios", $arrOrdini);
    if (isset($_SESSION['successo'])) {
        $tpl->assign ("success", "L'ordine con l'ID ".$_SESSION['successo']." &egrave; stato modificato correttamente. ");
        $_SESSION['successo'] = NULL;
    }
    if(isset($_SESSION['accessError'])) {
        $tpl->assign ("accessError", $_SESSION['accessError']);
        $_SESSION['accessError']=NULL;
    }

    $tpl->display("modifica_sconti.tpl");
    
    
    