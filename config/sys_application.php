<?php
        header("vary: accept-encoding,accept-language");

        session_start();
        
    require_once ('sys_application_local.php');

	define ("EMAIL_CONTATTI","cv@intervolutions.com");

        define ("URL_STYLE",URL_FILE."css/");
        define ("URL_IMG",URL_FILE."img/");
        define ("URL_JS",URL_FILE."js/");

        //path configurazioni
        define("CONFIG_ROOT",DOC_ROOT."config/");
        
        //path fine sito
        define("FILE_PATH",DOC_ROOT);

        define("CLASS_DIR",FILE_PATH."classes/");

        require_once FILE_PATH.'libs/Smarty.class.php';

        date_default_timezone_set('Europe/Rome');

        // Versioning per i fogli di stile
        define("STYLE_VERSION", "?v=20140827_1300");

        // Versioning per i javascript
        define("JS_VERSION", "?v=20140827_1300");
        
            
        require_once CONFIG_ROOT."sys_define.php";
        
        
        setlocale(LC_ALL, 'it_IT');
        //var_dump($_SESSION);die();
        require_once 'sys_access.php';
        
        