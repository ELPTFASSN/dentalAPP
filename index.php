<?php

    require_once "./config/sys_application.php";
    

        session_destroy();
    
    $tpl = new Smarty;
    $tpl->compile_check = COMPILE_CHECK;
    $tpl->debugging = DEBUGGING;
    
    //var_dump($_SESSION);die();
    
    if(isset($_SESSION['error'])) {
        $tpl->assign("error", $_SESSION['error']);
        $_SESSION['error'] = null;
    }
    if(isset($_SESSION['accessError'])) {
        $tpl->assign ("accessError", $_SESSION['accessError']);
        $_SESSION['accessError'] = NULL;
    }
        
    
    $tpl->display("index.tpl");