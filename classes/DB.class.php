<?php

class DB {

    private $sql;

    public function __construct() {


        $conn = mysql_connect(dbserver, dbuser, dbpwd) or die("Accesso al database non consentito. Contattare l'amministratore");
        $db = mysql_select_db(dbname) or die("Database non trovato. Contattare l'amministratore");

        $this->sql = "";

    }

    protected function fetch ( $mysql_result ) {

        return mysql_fetch_array ( $mysql_result );

    }

    protected function query () {

        $result = mysql_query ( $this->sql ) or die ("Errore nella query. Contattare l'amministratore fornendo le cause dell'errore<br />".$this->sql);
        return $result;

    }
    
    protected function setSql ( $sql_query ) {
        if ( empty($sql_query) )
            return null;
        $this->sql = $sql_query;
    }

}

?>
