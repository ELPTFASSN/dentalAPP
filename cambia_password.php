<?php

    require_once "./config/sys_application.php";
    require_once CLASS_DIR."Utils.class.php";
    require_once CLASS_DIR."Utente.class.php";
      
    $tpl = new Smarty;
    $tpl->compile_check = COMPILE_CHECK;
    $tpl->debugging = DEBUGGING;
    
    if(isset($_POST['password'])){
    $utils = new Utils();
    
    $password = trim($_POST['password']);
  //  die;
    if(strlen($password) > 4){
    
    $utente = new Utente($_SESSION['utente']['idUtente']);
    
    $utente->cambiaPassword($password)?:$error=TRUE;
    
  // var_dump($error);die;
      if(!isset($error)){
          $urlRedirect = $utente->getHomeForUtente();
        //  var_dump($urlRedirect); die;
               $_SESSION['utente']['home'] = $urlRedirect;
               header("Location: ".$urlRedirect);
      }
          
    } else{
        $tpl->assign("error", "Password troppo piccola!");
    }
    }
    $tpl->display("cambia_password.tpl");
    exit;