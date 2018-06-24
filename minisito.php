<?php

require_once "./config/sys_application.php";

require_once CLASS_DIR . "Medico.class.php";
require_once CLASS_DIR . "Azienda.class.php";
require_once CLASS_DIR . "Utils.class.php";

$tpl = new Smarty;
$tpl->compile_check = COMPILE_CHECK;
$tpl->debugging = DEBUGGING;




    $oDettaglio = new Azienda();

    if (isset($_POST['idAzienda'])) {
        if ($_FILES['file']['size'] == 0 && $_FILES['file']['error'] == 4) {
            
        } else {
            $target_dir = IMG . "users/" . trim($_POST['idAzienda']);
            $target_file = $target_dir . "/bg.jpg";
            if (!file_exists($target_dir)) {
                mkdir($target_dir, 0775, true);
            }
            $uploadOk = 1;
            $esito = "";
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
            if (isset($_FILES["file"]["name"])) {
                $check = getimagesize($_FILES["file"]["tmp_name"]);
                if ($check !== false) {
                    
                    $uploadOk = 1;
                } else {
                    $esito .= "Il file caricato non &egrave; una immagine.";
                    $uploadOk = 0;
                }
            }
// Check if file already exists
            if (file_exists($target_file)) {
                if(!unlink($target_file)){
                $esito .= "Si &egrave; trovato un file esistente nel sistema e non si puo modificare l'immagine.";
                $uploadOk = 0;
                }
            }
// Check file size
            if ($_FILES["file"]["size"] > 500000) {
                $esito .= "L'immagine caricata &egrave; troppo grande.";
                $uploadOk = 0;
            }
// Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                $esito .= "Soltanto puoi caricare file JPG e JPEG.";
                $uploadOk = 0;
            }
// Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                $esito.= "Si &egrave; riscontrato un problema al caricare il file, si prega di riprovare pi&uacute; tardi.";
// if everything is ok, try to upload file
            } else {
                
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                    
                } else {
                    $esito .= "Spiacenti, si &egrave; riscontrato un problema al caricare il file, si prega di riprovare pi&uacute; tardi..";
                }
            }
        }
        if ($oDettaglio->updateMinisito(trim($_POST['idAzienda']), mysql_real_escape_string(trim($_POST['servizi'])), mysql_real_escape_string(trim($_POST['descrizione']))) === true)
            
        $tpl->assign("error", $esito);
        $dettaglioAzienda = $oDettaglio->getDettaglioAziendaByID(trim($_POST['idAzienda']));
        $tpl->assign("success", "Minisito '".$dettaglioAzienda['denominazione']."' modificato correttamente");
        $tpl->assign("azienda", $dettaglioAzienda);
    }

    if (isset($_GET['id'])) {

        $dettaglioAzienda = $oDettaglio->getDettaglioAziendaByID(trim($_GET['id']));
        $tpl->assign("azienda", $dettaglioAzienda);
        $tpl->display("modifica_minisito.tpl");
        exit;
    }

    
$oAzienda = new Azienda();

$arrAzienda = $oAzienda->getAllAziende();
$arrMiembros = $oAzienda->getAllMiembros();

$tpl->assign("aziende", $oDettaglio->getMyAziende($_SESSION['utente']['idUtente']));

$tpl->assign("miembros", $arrMiembros);


    



$tpl->display("minisito.tpl");
