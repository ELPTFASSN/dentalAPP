<?php

    require_once DOC_ROOT."config/sys_application.php";

    class Utils {

        public function __construct() { }

        public function checkValue ( $value ) {

            return addslashes(trim($value));

        }
        
        public function checkComune ( $nomeComune ) {
            
            return str_replace("__","_",str_replace("'","_",str_replace(" ", "_", ucwords($nomeComune))));
            
        }
        
        public function dateForEco ($data,$ora=null) {
            
            $DateTime=new DateTime($data);
            if(isset($ora))
                   return date_format($DateTime, 'd-m-Y H:i:s'); 
            else
                   return date_format($DateTime, 'd-m-Y');
                   
        } 

    }
