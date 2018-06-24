<?php

    require_once DOC_ROOT."config/sys_application.php";
    
    
    class Access {
        
        private $where = NULL;

        public function __construct() {}
    
        public function isAllowed() {
            
            if ( empty($_SESSION['utente']['idUtente']) )
                $_SESSION['utente']['idRuoloUtente'] = NON_LOGATO;
            
            global $permissions;
            
            $where = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
    
            if (!isset($_SESSION['auth_2'])){
                
                 if(!in_array($where, $permissions[NON_LOGATO])) {
                    $_SESSION['accessError'] = "Non hai permessi per accedere a quell'area";
                    \header("Location: ".URL_FILE.HOME_GUEST);
                    exit();
                }
                
            }

            if(!in_array($where, $permissions[$_SESSION['utente']['idRuoloUtente']])) {
                if(!in_array($where, $permissions[NON_LOGATO])) {
                    $_SESSION['accessError'] = "Non hai permessi per accedere a quell'area";
                    \header("Location: ".URL_FILE.$permissions[$_SESSION['utente']['idRuoloUtente']]['home']);
                    exit();
            }
            
        }
        
    }
        
}
