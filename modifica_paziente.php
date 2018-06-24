<?php

    require_once "./config/sys_application.php";
    require_once CLASS_DIR."Paziente.class.php";
    require_once CLASS_DIR."Esami.class.php";
    require_once CLASS_DIR."Utils.class.php";
    require_once CLASS_DIR."CodiceFiscale.class.php";
    
    $tpl = new Smarty;
    $tpl->compile_check = COMPILE_CHECK;
    $tpl->debugging = DEBUGGING;
    
    require_once "province.php";
    $tpl->assign("province", $province);


    $post = null;
    if ( !empty($_POST['modifica'])) {

        $oUtils = new Utils();
        $oFiscale = new CodiceFiscale();
        $oPaziente = new Paziente();
        
        $oPaziente->idDettaglioPaziente = $oUtils->checkValue($_POST['id']);
        $oPaziente->nome = $oUtils->checkValue($_POST['nome']);
        $oPaziente->cognome = $oUtils->checkValue($_POST['cognome']);
        
        $anno = $oUtils->checkValue($_POST['anno']);
        $mese = $oUtils->checkValue($_POST['mese']);
        if ($mese<10)
            $mese = "0".$mese;
        
        $giorno = $oUtils->checkValue($_POST['giorno']);
        if ($giorno<10)
            $giorno = "0".$giorno;
        
        $oPaziente->dataNascita = $anno."-".$mese."-".$giorno;
        $oPaziente->telefono = $oUtils->checkValue($_POST['telefono']);
        $oPaziente->email = $oUtils->checkValue($_POST['email']);
        
        $oPaziente->indirizzoDomicilio = $oUtils->checkValue($_POST['indirizzoDomicilio']);
        $oPaziente->cittaDomicilio = $oUtils->checkValue($_POST['cittaDomicilio']);
        $oPaziente->provinciaDomicilio = $oUtils->checkValue($_POST['provinciaDomicilio']);
        $oPaziente->codFiscale = $oUtils->checkValue($_POST['codFiscale']);
        $oPaziente->sesso = $oUtils->checkValue($_POST['sesso']);
        $oPaziente->citta = $oUtils->checkValue($_POST['citta']);
        $oPaziente->provincia = $oUtils->checkValue($_POST['provincia']);
        $oPaziente->nazionalita = $oUtils->checkValue($_POST['nazionalita']); 
        $oPaziente->linguaParlata = $oUtils->checkValue($_POST['linguaParlata']);
        
        $_GET['id'] = $oPaziente->idDettaglioPaziente;
        
        $error = $oPaziente->isError();
        
         if ( empty($error) ) {
               
               if ($oPaziente->modificaPaziente() === TRUE) {
                $_SESSION['successo'] = "Paziente modificato correttamente.";
                $tpl->assign("success", $_SESSION['successo']);
                $_SESSION['successo'] = null;
               } else {
                   $error = "Non si &egrave; modificato il paziente, forse perch&eacute; non hai permessi o perch&eacute; non hai modificato nessun dato.";
                   $tpl->assign("post", $post);
                   $tpl->assign("error", $error);
               }

                     
            
        } else {
            $tpl->assign("post", $_POST);
            $tpl->assign("error", $error);
        }
   
    }
    
    
            if ( !empty($_POST['diagnosi'])) {
            
            $oPaziente = new Paziente(trim($_POST['id']));
            $_GET['id'] = $oPaziente->idDettaglioPaziente;
            
            switch ($_POST['diagnosi']){
                case '1':
                    $oPaziente->cirrosi = '1';
                    $oPaziente->epatocarcinoma = '0';
                    $oPaziente->eziologia = trim($_POST['eziologia']);
                    $oPaziente->altraPatologia = NULL;
                    break;
                case '2':
                    $oPaziente->cirrosi = '0';
                    $oPaziente->epatocarcinoma = '1';
                    $oPaziente->eziologia = NULL;
                    $oPaziente->altraPatologia = NULL;
                    break;
                case '3':
                    if(!empty($_POST['altra']))
                    $oPaziente->altraPatologia = trim($_POST['altra']);
                    else
                        $error = "Devi inserire il tipo di patologia";
                    $oPaziente->eziologia = NULL;
                    $oPaziente->cirrosi = '0';
                    $oPaziente->epatocarcinoma = '0';
                    break;
            }
            if(empty($error)){
            if(!empty($_POST['idDettaglioClinicoPaziente'])){
                $oPaziente->idDettaglioClinicoPaziente = trim($_POST['idDettaglioClinicoPaziente']);
                if($oPaziente->modificaDiagnosi() === \TRUE) {
                
                $_SESSION['successo'] = "Diagnosi del paziente modificata correttamente.";
                $tpl->assign("success", $_SESSION['successo']);
                $_SESSION['successo'] = null;
               } else {
                   $error = "Non si &egrave; modificata la diagnosi del paziente, forse perch&eacute; non hai permessi o perch&eacute; non hai modificato nessun dato.";
                   $tpl->assign("post", $post);
                   $tpl->assign("error", $error);
               }
            }
                else {
            
            if($oPaziente->setDiagnosi() === \TRUE) {
                
                $_SESSION['successo'] = "Diagnosi del paziente modificata correttamente.";
                $tpl->assign("success", $_SESSION['successo']);
                $_SESSION['successo'] = null;
               } else {
                   $error = "Non si &egrave; modificata la diagnosi del paziente, forse perch&eacute; non hai permessi o perch&eacute; non hai modificato nessun dato.";
                   $tpl->assign("post", $post);
                   $tpl->assign("error", $error);
               }
            }
            }
 else {$tpl->assign("post", $post);
                   $tpl->assign("error", $error);}
    }
    
    
    
    if (isset($_GET['id'])) {
    $oPaziente = new Paziente($_GET['id']);
    $oPaziente->getDettaglioPaziente();
    $oPaziente->getDettaglioClinico();
    
    //echo'<pre>';var_dump($oPaziente);die();
    
    $oEsami = new Esami();
    $arrEsami = $oEsami->getEsamePazienteByID($_GET['id']);
    $arrAltriEsami = $oEsami->getAltriEsamePazienteByID($_GET['id']);
 
            
    } 
    
    if (!empty($oPaziente->dataNascita)) {
        $arrDate = explode("-",$oPaziente->dataNascita);
        $post['anno']=$arrDate[0];
        $post['mese']=$arrDate[1];
        $post['giorno']=$arrDate[2];
    }
    
    $tpl->assign("post", $post);
    //echo "<pre>";var_dump($oPaziente);die();
    $tpl->assign("arrEsami", $arrEsami);
    $tpl->assign("id", $_GET['id']);
    $tpl->assign("arrAltriEsami", $arrAltriEsami);
    $tpl->assign("oPaziente", $oPaziente);
    
    $tpl->display("aggiorna_paziente.tpl");
    
    
  