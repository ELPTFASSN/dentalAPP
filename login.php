<?php

    require_once "./config/sys_application.php";
    
    require_once CLASS_DIR."Utils.class.php";
    require_once CLASS_DIR."Login.class.php";
    //require_once CLASS_DIR."User.class.php";
        
    $_SESSION['error'] = null;
    $error=null;
    $utils = new Utils();
    
    if(!empty($_POST['username']))
    $username = $utils->checkValue($_POST['username']);
    else $error.="Username non inserita";
    if(!empty($_POST['password']))
    $password = $utils->checkValue($_POST['password']);
    else $error.="Password non inserita";
    unset($utils);


    
//var_dump($error);die('vvasdfasdf332asdfzxcvcvxzvxcv');
    
    if ( empty($error) ) {
            $login = new Login($username, $password);
    
    $retCheckLogin = $login->isError();
           
        $resultLogin = $login->doLogin();
        
        $_SESSION['error'] = $login->isError();
        
        if ( empty($_SESSION['error']) ){
        
              require_once CLASS_DIR."Utente.class.php";
               $utente = new Utente($_SESSION['utente']['idUtente']);
                
                $urlRedirect = $utente->getHomeForUtente();
                
               $_SESSION['utente']['home'] = $urlRedirect;
                                
                $_SESSION['auth_1'] = null;
                
                $_SESSION['auth_2'] = TRUE;
               
                header("Location: ".$urlRedirect);
            exit;
        } else {
            header("Location: ".URL_FILE."index.php");
            exit;
        }
        
    } else {
        
        
        
        $_SESSION['error'] = $error;        
        header("Location: ".URL_FILE."index.php");
        exit;
    }