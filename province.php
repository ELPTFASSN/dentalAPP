<?php

require_once "./config/sys_application.php";

require_once CLASS_DIR . "Azienda.class.php";

$oDettaglio = new Azienda();

if (isset($_POST['provincia'])) {
    $province = $oDettaglio->getProvincia($_POST['provincia']);
    foreach ($province as $key => $value) {
        echo '<option value="' . $value['idprovincia'] . '">' . $value['nomeprovincia'] . '</option>';
    }
}
if (isset($_POST['citta'])) {
    $citta = $oDettaglio->getCitta($_POST['citta']);
    foreach ($citta as $key => $value) {
        echo '<option value="' . $value['id'] . '">' . $value['nome'] . '</option>';
    }
}
if (isset($_POST['cap'])) {
    $citta = $oDettaglio->getCAP($_POST['cap']);
    foreach ($citta as $key => $value) {
        if (strpos($value['CAP'], 'x') !== false)
            echo $value['CAP'];
        else 
         echo '<option value="' . $value['CAP'] . '">' . $value['CAP'] . '</option>';
    }
}
if (isset($_POST['paciente'])){
    $today = new DateTime();
    $azienda = $oDettaglio->getPazientiByAzienda($_POST['paciente']);
    foreach ($azienda as $key => $value) {
        
        $birthdate = new DateTime($value['dataNascita']);
        $interval = $today->diff($birthdate);
         echo '<option value="' . $value['idPaziente'] . '">' . $value['nome'] ." ". $value['cognome']. ' - Et&agrave;: '.$interval->format('%y anni').'</option>';
    }
}