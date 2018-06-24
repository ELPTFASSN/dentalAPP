<?php

    require_once DOC_ROOT."config/sys_application.php";
    require_once CLASS_DIR."DB.class.php";

class Login extends DB {
    
    private $_username;
    private $_password;
    private $_error = null;
    
    public function __construct($username = null, $password = null) {
        $this->_username = null;
        $this->_password = null;
        
        if ( !empty($username) )
            $this->_username = $username;
        
        if ( !empty($password) )
            $this->_password = $password;
        
        parent::__construct();
    }
    

    
    public function setError( $loginError = null ){

        if ( !empty($loginError) ) {
            
            $this->_error['autenticazione'] = $loginError;
            
        } else {
            
            if ( empty($this->_username) ) {
                $this->_error['username'] = "Username non inserita";
            }            
            if ( empty($this->_password) )
                $this->_error['password'] = "Password non inserita";
            
        }
        
        
    }
    
    public function isError () {
        
        return $this->_error;
        
    }


    public function doLogin () {
        
        
        if ( empty($this->_username) || empty($this->_password) )
            return null;
        
        $this->setSql("SELECT utenti.idUtente as idUtente, dettaglioMedico.nome as nomeMedico, dettaglioMedico.cognome as cognomeMedico, dettaglioPaziente.idDettaglioPaziente as idPaziente, dettaglioPaziente.nome as nomePaziente, denominazione, idDettaglioAzienda as idAzienda, utenti.username as username, utenti.email as email, utenti.active as attivo, utenti.deleted as cancellato, utenti.fkRuolo as idRuoloUtente, ruolo.nome as ruolo FROM utenti INNER JOIN ruolo ON utenti.fkRuolo=ruolo.idRuolo left join dettaglioPaziente on dettaglioPaziente.fkUtente=utenti.idUtente left join dettaglioMedico on dettaglioMedico.fkUtente=utenti.idUtente LEFT JOIN bridgePazienteAzienda ON dettaglioPaziente.idDettaglioPaziente=bridgePazienteAzienda.fkPaziente LEFT JOIN dettaglioAzienda ON dettaglioAzienda.idDettaglioAzienda=bridgePazienteAzienda.fkAzienda  WHERE utenti.active = ".UTENTE_ATTIVO." AND utenti.deleted = ".UTENTE_NON_CANCELLATO." AND utenti.username = '$this->_username' AND utenti.password = md5('$this->_password')");
               
        $result_query_login = $this->query();
        
        $result_login = $this->fetch($result_query_login);
        
                
        if ( empty($result_login) ) {
            
            // Utente non trovato. Username e password sbagliate
            $this->setError("Utente non trovato. Controllare username e password");
            
        } elseif ($result_login['attivo'] == UTENTE_NON_ATTIVO) {
            
            // Utente non ancora attivato
            $this->setError("Utente non attivo. Attendere l'attivazione dall'amministratore");
            
        } elseif ($result_login['cancellato'] == UTENTE_CANCELLATO) {
            
            // Utente cancellato
            $this->setError("Utente cancellato. Contattare l'amministratore");
            
        } else {
            
                $_SESSION['utente'] = $result_login;
           //     echo '<pre>';var_dump($_SESSION);die();   
                return true;
            }
        }
        
    }
    
    


?>