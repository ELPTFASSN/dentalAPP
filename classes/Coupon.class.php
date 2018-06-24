<?php

    require_once DOC_ROOT."config/sys_application.php";
    require_once CLASS_DIR."DB.class.php";
    
    
    class Coupon extends DB {
        
        public $fkUtente;
        public $idCoupon;
        public $codice;
        public $dataScadenza;
        public $dataInizio;
        
        
        public function __construct( $idCoupon = null ) {
            
            if ( !empty($idCoupon) ) {
                $this->idUtente = $idCoupon;
            }
            parent::__construct();
        }
        
        public function isError($update = NULL) {
            
            $error = "";
            
            if ( empty($this->prezzo) && is_nan($this->prezzo) )
                $error .= "Prezzo non inserito o con formato sbagliato<br />";
            
            if ( empty($this->indirizzo) )
                $error .= "Indirizzo di spedizione non inserito<br />";
            
            if ( empty($this->cap) )
                $error .= "CAP non inserito<br />";
            
            if ( empty($this->citta) )
                $error .= "Citt&agrave; non inserita<br />";
            
            if ( empty($this->cap) )
                $error .= "Provincia non inserita<br />";
            
            
            return $error;
            
            
        }
        
        public function cancellaCoupon($idCoupon){
             $sql = "DELETE FROM bridgeCouponUtente WHERE idBridgeCouponPaziente = $idCoupon LIMIT 1";
            
            $this->setSql($sql);
            
             return($this->query()) ?'true':'false';
        }
        
        public function insert() {
         
            $sql = "INSERT INTO coupons (codice, dataInizio, dataScadenza, prezzo, porciento, ilimitado, fkTipoCoupon) VALUES ('$this->codice', NOW(), '$this->dataScadenza', '$this->prezzo', '$this->porciento', '$this->ilimitado', '$this->fkTipoCoupon' )";
            
            $this->setSql($sql);
            
            if($this->query()){
            
                $sql="SELECT idCoupon FROM coupons WHERE codice = '$this->codice' ";
                $this->setSql($sql);
                $result = $this->query();
                $rows = $this->fetch($result);
                
 
                
            $sql = "INSERT INTO bridgeCouponUtente (fkCoupon, fkPaziente) VALUES ";
            
            foreach ($this->utenti as $key => $value) {

                $sql .= "('".$rows['idCoupon']."', '$value' ), ";
            }
            $sql = substr($sql, 0, -2);
            //echo'<pre>';var_dump($value, $rows, $sa);die('bbbb');
            $this->setSql($sql);
            
            return($this->query()) ?'true':'false';
            }
            else
               return false;
            
            
       }
        
        public function getCouponByState ($idCoupon, $idStato) {
            
            if($idStato=="used")
               $sql = "SELECT * from coupons INNER JOIN bridgeCouponUtente ON idCoupon=fkCoupon INNER JOIN tipoCoupon ON fkTipoCoupon=idTipoCoupon INNER JOIN utenti ON idUtente=bridgeCouponUtente.fkPaziente LEFT JOIN dettaglioMedico ON dettaglioMedico.fkUtente=utenti.idUtente WHERE bridgeCouponUtente.usato = '1' AND idCoupon=$idCoupon  ORDER BY dataInizio ASC";
            elseif($idStato=="unused")
               $sql = "SELECT * from coupons INNER JOIN bridgeCouponUtente ON idCoupon=fkCoupon INNER JOIN tipoCoupon ON fkTipoCoupon=idTipoCoupon INNER JOIN utenti ON idUtente=bridgeCouponUtente.fkPaziente LEFT JOIN dettaglioMedico ON dettaglioMedico.fkUtente=utenti.idUtente WHERE bridgeCouponUtente.usato = '0' AND idCoupon=$idCoupon  ORDER BY dataInizio ASC";
            else
               $sql = "SELECT * FROM coupons INNER JOIN tipoCoupon ON fkTipoCoupon=idTipoCoupon ORDER BY dataInizio ASC";
            
            $this->setSql($sql);
            
            $result = $this->query();
            
            $ordini = NULL;
            $i = 0;
            require_once CLASS_DIR.'Utils.class.php';
            
            $oUtils = new Utils();
            
            while ( $rows = $this->fetch($result) ) {
                $ordini[$i] = $rows;
                $i++;
            }
            
            return $ordini;
        }
        

        public function getCouponByID ($idCoupon) {
            
            $sql = "SELECT * from coupons INNER JOIN bridgeCouponUtente ON idCoupon=fkCoupon INNER JOIN tipoCoupon ON fkTipoCoupon=idTipoCoupon INNER JOIN utenti ON idUtente=bridgeCouponUtente.fkPaziente LEFT JOIN dettaglioMedico ON dettaglioMedico.fkUtente=utenti.idUtente WHERE idCoupon=$idCoupon ";
            $this->setSql($sql);
            
            $result = $this->query();
            $dsr = NULL;
            $i = 0;
            
            while ( $rows = $this->fetch($result) ) {

                $dsr[$i] = $rows;
  
                $i++;
            }
                     
            
            return $dsr;
        }
                public function getAllCouponsByUtente ($idUtente) {
            
            $sql = "SELECT * from coupons INNER JOIN bridgeCouponUtente ON idCoupon=fkCoupon WHERE fkUtente = $idUtente";
            $this->setSql($sql);
            
            $result = $this->query();
            $dsr = NULL;
            $i = 0;
            
            while ( $rows = $this->fetch($result) ) {

                $dsr[$i] = $rows;
  
                $i++;
            }
                     
            
            return $dsr;
        }
        
        public function getCountCoupons(){
                         
            $sql = "SELECT COUNT(*) as cuentas FROM coupons";
            $this->setSql($sql);
            
            $result = $this->query();
            $dsr = NULL;
            $i = 0;
            
            while ( $rows = $this->fetch($result) ) {

                $dsr[$i]['count'] = $rows['cuentas'];
                
                $i++;
            }
            return $dsr;
        }
               
        
        public function cambiaStato ( $idBridge, $fkStatoOrdine ) {
            
            if ( empty($fkStatoOrdine) )
                return NULL;
            
            $sql = "UPDATE bridgeCouponUtente SET usato = '$fkStatoOrdine' WHERE idUtente = $idBridge";

            $this->setSql($sql);
            $return = $this->query();

            return $return;
        }

        public function generateRandomString($length = 15) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

    public function getTipoCoupon(){
          $sql = "SELECT * FROM tipoCoupon ";

            $this->setSql($sql);
            $return = $this->query();
            while ( $rows = $this->fetch($return) ) {

                $dsr[$i] = $rows;
  
                $i++;
            }
                     
            
            return $dsr;
    }
    
    public function getPrezzi(){
        $sql = "SELECT * FROM prezzi ORDER BY description ASC";

            $this->setSql($sql);
            $return = $this->query();
            $i=0;
            while ( $rows = $this->fetch($return) ) {

                $kon[$i] = $rows;
  
                $i++;
            }
                     
            
            return $kon;
    }
    
    public function getPrezziDopados(){
        $sql = "SELECT prezzo FROM prezzi WHERE idPrezzo in (13,12)";

            $this->setSql($sql);
            $return = $this->query();
            $i=0;
            while ( $rows = $this->fetch($return) ) {

                $kon[$i] = $rows;
  
                $i++;
            }
                     
            
            return $kon;
    }
    
    public function updatePrezzi($idPrezzo, $dinero){
        $sql = "UPDATE prezzi SET prezzo = '$dinero' WHERE idPrezzo = $idPrezzo";

            $this->setSql($sql);
            $return = $this->query();

            return $return;
    }
        
    }