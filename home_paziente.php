<?php

    require_once "./config/sys_application.php";

    require_once CLASS_DIR."Utente.class.php";
    require_once CLASS_DIR."Ordine.class.php";
    require_once CLASS_DIR."Azienda.class.php";
    require_once CLASS_DIR."Medico.class.php";
    require_once CLASS_DIR."Paziente.class.php";
  //  var_dump($_SESSION);die();
        

    
    
    
    
    
    
    
    
        $tpl = new Smarty;
        $tpl->compile_check = COMPILE_CHECK;
        $tpl->debugging = DEBUGGING;
        
        $oCuentas = new Utente();
        $oMedico = new Medico();
        $oAzienda = new Azienda();
        $medici = $oAzienda->getAllAziende();
        $tpl->assign("medici", $medici);
      //  $tpl->assign("numAziende",$oCuentas->countAziende());
      //  $tpl->assign("numMedici",$oCuentas->countMedici());
      //  $tpl->assign("numPazienti",$oCuentas->countPazienti($_SESSION['utente']['idUtente']));
      //  $tpl->assign("numOrdini",$oCuentas->countOrdini($_SESSION['utente']['idUtente']));
      //  $tpl->assign("numAtessa",$oCuentas->countAtessa());
        
        if(isset($_POST['amici'])){
            $emails = explode(",", $_POST['amici']);
             /// INVIO EMAIL
            // var_dump($emails);die;
            $mail = new PHPMailer();
            $body = "<p><img src='http://easysmile.beecloud.it/img/logo_easysmile.png'></p><div>Salve,<br /><br />Un amico li invia un sugerimento per entrare a EasySmile Group.<br /><br>Questo messaggio e' stato generato automaticamente, La preghiamo pertanto di non rispondere a questa e-mail poiche' l'indirizzo non e' controllato.</div>";
            

            $mail->IsSMTP(); // telling the class to use SMTP
            $mail->Host = "mail.intervolutions.com"; // SMTP server
            $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
            // 1 = errors and messages
            // 2 = messages only
            $mail->SMTPAuth = true;                  // enable SMTP authentication
            $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
            $mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
            $mail->Port = 587;                   // set the SMTP port for the GMAIL server
            $mail->Username = "sistema@intervolutions.com";  // GMAIL username
            $mail->Password = "intervol2011";            // GMAIL password

            $mail->SetFrom('noreply@easysmilegroup.it', 'Easy Smile Group');

            $mail->AddReplyTo("contact@biobitlab.com", "BioBit Lab SRL");

            $mail->Subject = "Un amico li raccomanda entrare nella piattaforma EasySmile Group";

            $mail->MsgHTML($body);

            foreach($emails as $key=>$value){
            $mail->AddAddress($value);

            /// END INVIO EMAIL
            
            $mail->send();
        }
        $tpl->assign ("success", "Amico/i contattati con successo! ");
        }
        
        
        if(isset($_POST['medico'])){
            
            
            $oMedico->idUtente = trim($_POST['medico']);
            $oMedico->getDettaglioMedico;
            $medico = trim($_POST['medico']);
            $paziente = $_SESSION['utente']['idUtente'];
            $texto = trim($_POST['comentario']);
            $score = trim($_POST['score']);
            //var_dump($score, $texto, $paziente, $medico);die;
            if($oMedico->addGradimento($paziente, $medico, $score, $texto)){
            
             /// INVIO EMAIL
            // var_dump($emails);die;
            $mail = new PHPMailer();
            $body = "<p><img src='http://easysmile.beecloud.it/img/logo_easysmile.png'></p><div>Salve,<br /><br />Un paziente li ha inviato un gradimento tramitte la piattaforma EasySmile Group.<br /><br>Questo messaggio e' stato generato automaticamente, La preghiamo pertanto di non rispondere a questa e-mail poiche' l'indirizzo non e' controllato.</div>";
            

            $mail->IsSMTP(); // telling the class to use SMTP
            $mail->Host = "mail.intervolutions.com"; // SMTP server
            $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
            // 1 = errors and messages
            // 2 = messages only
            $mail->SMTPAuth = true;                  // enable SMTP authentication
            $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
            $mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
            $mail->Port = 587;                   // set the SMTP port for the GMAIL server
            $mail->Username = "sistema@intervolutions.com";  // GMAIL username
            $mail->Password = "intervol2011";            // GMAIL password

            $mail->SetFrom('noreply@easysmilegroup.it', 'Easy Smile Group');

            $mail->AddReplyTo("contact@biobitlab.com", "BioBit Lab SRL");

            $mail->Subject = "Un paziente li ha scritto un gradimento nella piattaforma EasySmile Group";

            $mail->MsgHTML($body);


            $mail->AddAddress($oMedico->email);

            /// END INVIO EMAIL
            
            $mail->send();

        $tpl->assign ("success", "Gradimento inserito con successo ");
        }
        else
             $tpl->assign ("error", "Gradimento non inserito! ");
            }
        
        
        
    
    if (isset($_SESSION['successo'])) {
        $tpl->assign ("success", "L'utente con l'ID ".$_SESSION['successo']." &egrave; stato modificato correttamente. ");
        $_SESSION['successo'] = NULL;
    }
    if(isset($_SESSION['accessError'])) {
        $tpl->assign ("accessError", $_SESSION['accessError']);
        $_SESSION['accessError']=NULL;
    }
    
    
    if(isset($_GET['trattamenti'])){
        $oPaziente = new Paziente();
        
        $ordini = $oPaziente->getMyTrattamenti();
        //echo '<pre>';var_dump($ordini);die;
        
        $tpl->assign("ordini", $ordini);
        $tpl->display("riepilogo_paziente.tpl");
        
        
        exit();
    }
    
    if(isset($_GET['sosmascherina'])){
        $oPaziente = new Paziente();
        
        $ordini = $oPaziente->getMyTrattamenti();
        //echo '<pre>';var_dump($ordini);die;
        
        $tpl->assign("ordini", $ordini);
        $tpl->display("sos.tpl");
        
        
        exit();
    }
    
    if(isset($_GET['choose'])){
        
        $oAzienda = new Azienda();
        $oAzienda->AddPazAz(trim($_GET['choose']))?  $tpl->assign ("success", "Studio medico scelto con successo! "): $tpl->assign ("error", "Si è riscontrato un errore, per favore contatta con l'amministrazione. ");
    }
    
    if(isset($_GET['medico'])){
        
        $oAzienda = new Azienda();
        
        $aziende = $oAzienda->getAllAziende();
      //  var_dump($aziende);die;
        
        $tpl->assign("aziende", $aziende);
        $tpl->display("pazienda.tpl");
        
        exit();
        
    }
    
    if(isset($_GET['regione'])){
        
        $oAzienda = new Azienda();
        
        $aziende = $oAzienda->getAllAziendeByRegion(trim($_GET['regione']));
      //  var_dump($aziende);die;
        
        $tpl->assign("aziende", $aziende);
        $tpl->assign("regione", trim($_GET['regione']));
        $tpl->display("pazienda_1.tpl");
        
        exit();
        
    }

    if(isset($_GET['inviti']))
        $tpl->display("amici.tpl");
    elseif(isset($_GET['gradimenti']))
        $tpl->display("gradimenti.tpl");
    else
        $tpl->display("home_paziente.tpl");
