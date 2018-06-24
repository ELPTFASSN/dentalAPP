<?php

    require_once DOC_ROOT."config/sys_application.php";
    require_once CLASS_DIR."DB.class.php";
    
    class Esami extends DB {
        
        public $name = null;
        public $fkDettaglioPaziente =null;
        public $fkEsame = null;
        public $valore = null;
        public $data = null;
        public $fkScansioneEsame = null;
        public $dialisi = null;
        
        public function __construct( ) {
        
            parent::__construct();
        }
        
        public function checkNomeEsame ( $nomeEsame ) {
            
            if ( !empty($nomeEsame) )
                $this->nome = $nomeEsame;
            
            $nome = strtoupper($nomeEsame);
            
            $sql = "SELECT count(1) as numEsami FROM esami WHERE nome = '".$nome."'";
            
            $this->setSql($sql);
            $result = $this->query();
            
            $row = $this->fetch($result);
            
            return $row['numEsami'];
            
        }
        
        public function setName ( $nomeEsame ) {
            
            if ( !empty($nomeEsame) )
                $this->nome = $nomeEsame;
                
        }
        
        public function getEsamePazienteByID($idDettaglioPaziente) {
            
            if ( empty($idDettaglioPaziente) )
              return NULL;

            $sql  = "SELECT  esami.nome, bridgeEsamePaziente.idBridgeEsamePaziente, bridgeEsamePaziente.valore, bridgeEsamePaziente.data, scansioneEsami.path as url, scansioneEsami.nomeFile as file, bridgeEsamePaziente.dialisi FROM bridgeEsamePaziente ";
            $sql .= "LEFT JOIN esami ON esami.idEsame=bridgeEsamePaziente.fkEsame LEFT JOIN scansioneEsami ON scansioneEsami.idScansioneEsami=bridgeEsamePaziente.fkScansioneEsame ";
            $sql .= "WHERE bridgeEsamePaziente.fkDettaglioPaziente = '".$idDettaglioPaziente."'";
                      
            $this->setSql($sql);
            $result = $this->query();
            
            $arrAltriEsami = null;

            if ( !empty($result) ) {
                $i = 0;
                while ( $row = $this->fetch($result) ) {
                     $arrAltriEsami[$i]['idBridgeEsamePaziente'] = $row['idBridgeEsamePaziente'];
                     $arrAltriEsami[$i]['nome'] = $row['nome'];
                     $arrAltriEsami[$i]['data'] = $row['data'];
                     $arrAltriEsami[$i]['valore'] = $row['valore'];
                     $arrAltriEsami[$i]['url'] =  $row['url'];
                     $arrAltriEsami[$i]['file'] = $row['file'];
                     $arrAltriEsami[$i]['dialisi'] = $row['dialisi'];
                     $i++;
                }
            }
            
            return $arrAltriEsami;
        }
        
        public function getAltriEsamePazienteByID($idDettaglioPaziente) {
            
            if ( empty($idDettaglioPaziente) )
              return NULL;

            $sql  = "SELECT  bridgeAltroEsamePaziente.nome, bridgeAltroEsamePaziente.idBridgeAltroEsamePaziente, bridgeAltroEsamePaziente.pathScansioneEsame, bridgeAltroEsamePaziente.data FROM bridgeAltroEsamePaziente ";
            $sql .= "WHERE bridgeAltroEsamePaziente.fkDettaglioPaziente = '".$idDettaglioPaziente."'";
                      
            $this->setSql($sql);
            $result = $this->query();
            
            $arrAltriEsami = null;

            if ( !empty($result) ) {
                $i = 0;
                while ( $row = $this->fetch($result) ) {
                     $arrAltriEsami[$i]['idBridgeAltroEsamePaziente'] = $row['idBridgeAltroEsamePaziente'];
                     $arrAltriEsami[$i]['nome'] = $row['nome'];
                     $arrAltriEsami[$i]['data'] = $row['data'];
                     $arrAltriEsami[$i]['urlScansioneEsame'] = $row['pathScansioneEsame'];
                     $i++;
                }
            }
            
            return $arrAltriEsami;
        }
        
        public function addEsame(){
            //echo "<pre>";var_dump($this);die();
            if($this->path === null){
            $sql = "INSERT INTO bridgeEsamePaziente (fkEsame, fkDettaglioPaziente, valore, data ";
            if (!empty($this->dialisi))
                $sql .= ", dialisi) VALUES ('$this->fkEsame', '$this->fkDettaglioPaziente', '$this->valore', '$this->data', '$this->dialisi')";
            else
            $sql .= ") VALUES ('$this->fkEsame', '$this->fkDettaglioPaziente', '$this->valore', '$this->data')";
            }
            else {
                $sql = "INSERT INTO scansioneEsami (path, nomeFile ) VALUES ('$this->path', '$this->nomeFile' )";
                $this->setSql($sql);
                if ($this->query() === TRUE) {
                    $sql = "SELECT idScansioneEsami FROM scansioneEsami WHERE nomeFile = '$this->nomeFile'";
                    $this->setSql($sql);
                    $result = $this->query();
                    $result = $this->fetch($result);
                    $this->fkScansioneEsame = $result[0];
                    //var_dump($this->fkScansioneEsame);die();
                    $sql = "INSERT INTO bridgeEsamePaziente (fkEsame, fkDettaglioPaziente, valore, data, fkScansioneEsame ";
                     if (!empty($this->dialisi))
                        $sql .= " dialisi) VALUES ('$this->fkEsame', '$this->fkDettaglioPaziente', '$this->valore', '$this->data','$this->fkScansioneEsame', '$this->dialisi')";
                     else
                        $sql .= ") VALUES ('$this->fkEsame', '$this->fkDettaglioPaziente', '$this->valore', '$this->data', '$this->fkScansioneEsame')";
                }
                else
                    return false;
            }
            $this->setSql($sql);
            return $this->query() ? true : false;
            
        }
        
        public function addAltroEsame(){
            
            $sql = "INSERT INTO bridgeAltroEsamePaziente (nome, fkDettaglioPaziente, data, pathScansioneEsame) ";
            $sql .= "VALUES ('$this->fkEsame', '$this->fkDettaglioPaziente', '$this->data', '$this->urlScansioneEsame')";
            
            $this->setSql($sql);
            return $this->query() ? true : false;
        }
        
        public function getEsami(){
            
            $sql = "SELECT * FROM esami";
            $this->setSql($sql);
            $result = $this->query();
            
            $arrEsami = null;
            
            if ( !empty($result) ) {
                $i = 0;
                while ( $row = $this->fetch($result) ) {
                     $arrEsami[$i]['idEsame'] = $row['idEsame'];
                     $arrEsami[$i]['nome'] = $row['nome'];
                     $i++;
                }
            }

            return $arrEsami;
        }
        
        public function getBilirubinemia($idDettaglioPaziente){
            
            $sql = "SELECT * FROM bridgeEsamePaziente WHERE fkDettaglioPaziente = '$idDettaglioPaziente' AND fkEsame = '1'";
            $this->setSql($sql);
            $result = $this->query();
            
            $arrEsami = null;
            
            if ( !empty($result) ) {
                $i = 0;
                while ( $row = $this->fetch($result) ) {
                     $arrEsami[$i] = $row;
                     $i++;
                }
            }

            return $arrEsami;
        }
        
        public function getINR($idDettaglioPaziente){
            
            $sql = "SELECT * FROM bridgeEsamePaziente WHERE fkDettaglioPaziente = '$idDettaglioPaziente' AND fkEsame = '2'";
            $this->setSql($sql);
            $result = $this->query();
            
            $arrEsami = null;
            
            if ( !empty($result) ) {
                $i = 0;
                while ( $row = $this->fetch($result) ) {
                     $arrEsami[$i] = $row;
                     $i++;
                }
            }

            return $arrEsami;
        }
        
        public function getSodiemia($idDettaglioPaziente){
            
            $sql = "SELECT * FROM bridgeEsamePaziente WHERE fkDettaglioPaziente = '$idDettaglioPaziente' AND fkEsame = '4'";
            $this->setSql($sql);
            $result = $this->query();
            
            $arrEsami = null;
            
            if ( !empty($result) ) {
                $i = 0;
                while ( $row = $this->fetch($result) ) {
                     $arrEsami[$i] = $row;
                     $i++;
                }
            }

            return $arrEsami;
        }
        
        public function getCreatininemia($idDettaglioPaziente){
            
            $sql = "SELECT * FROM bridgeEsamePaziente WHERE fkDettaglioPaziente = '$idDettaglioPaziente' AND fkEsame = '3'";
            $this->setSql($sql);
            $result = $this->query();
            
            $arrEsami = null;
            
            if ( !empty($result) ) {
                $i = 0;
                while ( $row = $this->fetch($result) ) {
                     $arrEsami[$i] = $row;
                     $i++;
                }
            }

            return $arrEsami;
        }
        
    
        public function getAltriEsami(){
            
            $sql = "SELECT * FROM altriEsami";
            $this->setSql($sql);
            $result = $this->query();
            
            $arrAltriEsami = null;
            
            if ( !empty($result) ) {
                $i = 0;
                while ( $row = $this->fetch($result) ) {
                     $arrAltriEsami[$i]['idAltroEsame'] = $row['idAltroEsame'];
                     $arrAltriEsami[$i]['nome'] = $row['nome'];
                     $i++;
                }
            }

            return $arrAltriEsami;
        }
        
        
         public function isError() {
            
            if ( empty($this->fkDettaglioPaziente) )
                return NULL;
            
            $error = "";
            
            if ( empty($this->fkEsame) )
                $error .= "Tipo di esame non inserito<br />";
            
            if ( empty($this->valore) )
                $error .= "Valore del esame non inserito<br />";
            
            if ( empty($this->data) )
                $error .= "Data del esame non inserita<br />";
            

            return $error;
            
            
        }
        
    }