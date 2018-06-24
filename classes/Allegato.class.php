<?php

    require_once DOC_ROOT."config/sys_application.php";
    require_once CLASS_DIR."DB.class.php";
    
    class Allegato extends DB {
    
    public $type;
    public $name;
    
    private $newName;
    private $extension = ".pdf";
    private $dimension;
    
    public function __construct() {
        
        parent::__construct();
    }
   
    public function setDimension( $byte ) {
        //var_dump($byte);exit;
        $kilobyte = 1024;
        $megabyte = $kilobyte * 1024;
        $precision = 2;
        
        $dimension = round($byte / $megabyte, $precision);
        //echo $dimension;exit;
        $this->dimension = $dimension;
    }
    
    public function isError(){
        
        $error = null;
        
        
        if ( empty($this->name) )
            $error .= "L'allegato non ha un nome<br />";
       
                         
        if ( empty($this->type) || 
!in_array($this->type, array('application/pdf', 'application/download', '\"application/force-download\"', 'application/force-download', '\"application/download\"', 'application/x-download', '\"application/x-download\"', '\"application/pdf\"')) )
            $error .= "L'allegato non è del formato PDF<br />";
        
        if ( $this->dimension>2 )
            $error .= "Il file non può avere dimensione superiore ai 2MB<br />";
        
        return $error;
    }
    
    public function setNewName ( $idPaziente ) {
        
        if ( empty($idPaziente) || !is_numeric($idPaziente) )
            return NULL;
        
        $firstPartName = $idPaziente."_".date('dmY_His');
        
        $this->newName = $firstPartName.$this->extension;
        
    }
    
    private function getIdArticleFromName () {
        
        return str_replace($this->extension, "", $this->newName);
        
    }
    
    public function insert( $tmpName ) {
        
        
        
        if ( empty($tmpName) || empty($this->newName) )
            return NULL;
        
        $name_with_path = PATH_ALLEGATI. $this->newName;
        
        move_uploaded_file( $tmpName ,  $name_with_path );
        
        $fileUpdate = file_exists( $name_with_path );
        
            
        if ( $fileUpdate )
            return $this->newName;
        else
            return false;
        
    }
    
    public function chunked_copy($from, $to) {

    $buffer_size = 1048576; 
    $ret = 0;
    $fin = fopen($from, "rb");
    $fout = fopen($to, "w");
    while(!feof($fin)) {
        $ret += fwrite($fout, fread($fin, $buffer_size));
    }
    fclose($fin);
    fclose($fout);
    return $ret; 
}
    
}