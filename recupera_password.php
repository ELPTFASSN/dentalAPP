<?php

    require_once "./config/sys_application.php";
    require_once CLASS_DIR."Utils.class.php";
    require_once CLASS_DIR."Utente.class.php";
    
    session_destroy();
    
    $tpl = new Smarty;
    $tpl->compile_check = COMPILE_CHECK;
    $tpl->debugging = DEBUGGING;
    
    if(isset($_POST['email'])){
    $utils = new Utils();
    
    $email = $utils->checkValue($_POST['email']);
    
    
    
    $utente = new Utente();
    
    $arrayCredenziali = $utente->generateNewPassword($email);
    
    
    
    $error = NULL;
    
    if ( empty($arrayCredenziali) ) {
        $error = "Il email che hai inserito non ha un account registrato in questa piattaforma!";
        $tpl->assign("error",$error);
    }

    if ( empty($error) ) {
        
        $username = $arrayCredenziali['username'];
        $password = $arrayCredenziali['password'];
        
        require_once CLASS_DIR."Mail.class.php";
        
                
        $to = $email; //recipient

        $mail_body = "<div>Salve,<br /><br />come richiesto &egrave; stata generata una nuova password di accesso al sistema.<br /><br />Ecco la credenziali di accesso:<br />Username: <strong>$username</strong><br />Password: <strong>$password</strong></div>"; //mail body
        $subject = "Credenziali sistema EasySmile Group"; //subject

        $mailToSend = new Mail();

        $mailToSend->inviaMail($to,$subject,$mail_body)? $tpl->assign("success","Ti abbiamo appena inviato una nuova password a la tua casella di posta elettronica"):$tpl->assign("error","Abbiamo riscontrato un errore all'inviare l'email, si prega di riprovare!"); 
        
        
    }
        $tpl->display("reimposta_password.tpl");
        exit;
    }
    $tpl->display("reimposta_password.tpl");
    exit;