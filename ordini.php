<?php

require_once "./config/sys_application.php";
require_once CLASS_DIR . "Azienda.class.php";
require_once CLASS_DIR . "Paziente.class.php";
require_once CLASS_DIR . "Medico.class.php";
require_once CLASS_DIR . "Ordine.class.php";
$oOrdini = new Ordine();
$tpl = new Smarty;
$tpl->compile_check = COMPILE_CHECK;
$tpl->debugging = DEBUGGING;
require_once "province.php";
$tpl->assign("province", $province);

if (isset($_GET['token'])) {
    if (isset($_GET['PayerID'])) {

        if ($_SESSION['reshash'] === $_GET['token']) {
            $oOrdini->cambiaStato($_SESSION['reshash'], 2) ? $tpl->assign("success", "Prescrizione pagata e inserita correttamente. ") : $tpl->assign("error", "Prescrizione inserita ma NON pagata.");
            $oOrdini->addFatturaPrescrizione($_SESSION['reshash']);
            $tpl->assign("token", $oOrdini->getOrdiniByToken($_SESSION['reshash']));
            $tpl->display("ordini-last-step.tpl");
            exit;
        }
    } else {
        $tpl->assign("success", "Prescrizione inserita corretamente.");
        $tpl->assign("error", "Pagamento NON andato a buon fine. Si prega di riprovare pi&ugrave; tardi.");
    }
}
if (isset($_POST['idOrdine']) && isset($_POST['last-step'])) {
    $dt = \DateTime::createFromFormat('d/m/Y', $_POST['dataRitiro']);
    $date = $dt->format('Y-m-d');
    $oOrdini->lastStep(trim($_POST['idOrdine']), trim($date), trim($_POST['noteRitiro'])) ? $tpl->assign("success", "Ritirto della prescrizione inserita correttamente. ") : $error = true;
    if (isset($error) && $error === true) {
        $tpl->assign("ordine", $oOrdini->getOrdiniByID(trim($_POST['idOrdine'])));
        $tpl->display("ordini-last-step.tpl");
        exit;
    }
}
if (isset($_GET['task']) && $_GET['task']=="stato") {
        $task = trim($_GET['task']);
        switch ($task) {
            case 'stato':
                $oOrdini->cambiaStatoByID(trim($_GET['id']), trim($_GET['status'])) ? $tpl->assign("esito", "Stato della prescrizione cambiato corretamente.") : $tpl->assign("error", "Riscontrato un'errore al cambiare lo stato della prescrizione.");
                $oDettaglio = new Ordine();
                $oDettaglio->idOrdine = trim($_GET['id']);
                $dettaglioOrdine = $oDettaglio->getOrdiniByID($oDettaglio->idOrdine);
                $contenutoOrdine = $oDettaglio->getContenutoOrdiniByID($oDettaglio->idOrdine);
                $tpl->assign("oOrdine", $dettaglioOrdine);
                $tpl->assign("prodotti", $contenutoOrdine);
                $tpl->display("modifica_ordine.tpl");
        }
        exit();
    }
if (isset($_GET['id'])) {

    $oDettaglio = new Ordine();
    $oDettaglio->idOrdine = trim($_GET['id']);
    $dettaglioOrdine = $oDettaglio->getOrdiniByID($oDettaglio->idOrdine);
    $contenutoOrdine = $oDettaglio->getContenutoOrdiniByID($oDettaglio->idOrdine);
    $dettaglioTrattamento = $oDettaglio->getCADByID($oDettaglio->idOrdine);
    //echo '<pre>';var_dump($dettaglioOrdine);die;
    $tpl->assign("oOrdine", $dettaglioOrdine);
    $tpl->assign("prodotti", $contenutoOrdine);
    $tpl->assign("trattamento", $dettaglioTrattamento);
    $tpl->display("modifica_ordine.tpl");

    unset($oDettaglio);
    unset($dettaglioMedico);

    exit();
}
if ($_SESSION['utente']['idRuoloUtente'] !== AMMINISTRATORE) {
    

    if (isset($_POST['idOrdine']) && $_POST['idOrdine'] == 'nuovo') {
        
        if ($_FILES['file']['size'] == 0 && $_FILES['file']['error'] == 4) {
            
        } else {
            $fichero = substr(md5(rand()), 0, 5)."-".$_FILES['file']['name'];
            
            $target_dir = IMG . "prescrizioni/" . trim($_SESSION['utente']['idUtente']) . "/";
            $target_file = $target_dir . $fichero;
            $oOrdini->foto = trim($_SESSION['utente']['idUtente']) . "/".$fichero;
            if (!file_exists($target_dir)) {
                mkdir($target_dir, 0775, true);
            }
            $uploadOk = 1;
            $error = null;
// Check if file already exists
            if (file_exists($target_file)) {
                if(!unlink($target_file)){
                $error .= "Si &egrave; trovato un file esistente nel sistema e non si puo modificare l'immagine.";
                $uploadOk = 0;
                }
            }
// Check file size
            if ($_FILES["file"]["size"] > 5000000) {
                $error .= "L'immagine caricata &egrave; troppo grande.";
                $uploadOk = 0;
            }
// Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                $error.= "Si &egrave; riscontrato un problema al caricare il file, si prega di riprovare pi&uacute; tardi.";
// if everything is ok, try to upload file
            } else {
                
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                    
                } else {
                    $error .= "Spiacenti, si &egrave; riscontrato un problema al caricare il file, si prega di riprovare pi&uacute; tardi..";
                }
            }
        }

        if (!empty($_POST['azienda']))
            $oOrdini->fkAzienda = trim($_POST['azienda']);
        else
            $error.="Devi inserire con quale studio medico vuoi fare la prescrizione<br />";

        if (!empty($_POST['paziente']))
            $oOrdini->fkPaziente = trim($_POST['paziente']);
        else
            $error.="Devi inserire a quale paziente stai facendo la prescrizione<br />";

        if (!empty($_POST['note']))
            $oOrdini->note = trim($_POST['note']);

        if (!empty($_POST['cera']))
            $oOrdini->cera = trim($_POST['cera']);

        if (!empty($_POST['superior']))
            $oOrdini->superiore = trim($_POST['superior']);

        if (!empty($_POST['inferior']))
            $oOrdini->inferiore = trim($_POST['inferior']);
        $oOrdini->denti = NULL;
        for ($i = 11; $i <= 48; $i++) {
            if ($_POST[$i] == 'true')
                $oOrdini->denti .= $i . ",";
        }

        if (empty($oOrdini->denti))
            $error.="Devi scegliere almeno un dente <br />";
        
        if(!empty($error)){
            $oPaziente = new Paziente();
                $oAzienda = new Azienda();
                if(!$oOrdini->checkIfAbonado())
                    $tpl->assign("spedizione", $oOrdini->getPrezzoSpedizione());
                $tpl->assign("error", $error);
                $tpl->assign("acconto", $oOrdini->getPrezzoAcconto());
                $tpl->assign("prezzo", $oOrdini->getPrezzoNuovaPrescrizione());
                $tpl->assign("aziende", $oAzienda->getMyAziende($_SESSION['utente']['idUtente']));
                $tpl->assign("pazienti", $oPaziente->getMyPazienti($_SESSION['utente']['idUtente']));
                $tpl->display("add_ordini.tpl");
                exit;
        }
            $pasta = $oOrdini->getPrezzoNuovaPrescrizione();
        $oOrdini->denti = substr($oOrdini->denti, 0, -1);
        $resultado = $oOrdini->addPrescrizione($pasta['totale']);
        if ($resultado === true)
            $tpl->assign("success", "Prescrizione inserita corretamente.");
        else {
            $tpl->assign("error", $resultado);
            $tpl->display("paga.tpl");
        }
    }
    if (isset($_POST['couponAzienda']) || isset($_POST['couponAmico']))
        $tpl->assign("error", "Il codice inserito: " . $_POST['couponAzienda'] . $_POST['couponAmico'] . " non risulta essere valido.");

    if (isset($_GET['task'])) {
        $task = trim($_GET['task']);
        switch ($task) {
            case 'add':
                $oPaziente = new Paziente();
                $oAzienda = new Azienda();
                if(!$oOrdini->checkIfAbonado())
                    $tpl->assign("spedizione", $oOrdini->getPrezzoSpedizione());
                
                $tpl->assign("acconto", $oOrdini->getPrezzoAcconto());
                $tpl->assign("prezzo", $oOrdini->getPrezzoNuovaPrescrizione());
                $tpl->assign("aziende", $oAzienda->getMyAziende($_SESSION['utente']['idUtente']));
                $tpl->assign("pazienti", $oPaziente->getMyPazienti($_SESSION['utente']['idUtente']));
                $tpl->display("add_ordini.tpl");
                break;
            case 'stato':
                $oOrdini->cambiaStatoByID(trim($_GET['id']), trim($_GET['stato'])) ? $tpl->assign("success", "Stato della prescrizione cambiato corretamente.") : $tpl->assign("error", "Riscontrato un'errore al cambiare lo stato della prescrizione.");
                $oDettaglio = new Ordine();
                $oDettaglio->idOrdine = trim($_GET['id']);
                $dettaglioOrdine = $oDettaglio->getOrdiniByID($oDettaglio->idOrdine);
                $contenutoOrdine = $oDettaglio->getContenutoOrdiniByID($oDettaglio->idOrdine);
                $tpl->assign("oOrdine", $dettaglioOrdine);
                $tpl->assign("prodotti", $contenutoOrdine);
                $tpl->display("modifica_ordine.tpl");
        }
        exit();
    }
    $tpl->assign("ordini", $oOrdini->getAllOrdiniByUtente($_SESSION['utente']['idUtente']));
    $tpl->display("ordini_medico.tpl");

    exit();
}

if (isset($_GET['action'])) {


    $oOrdini->cambiaStato(trim($_GET['id']), trim($_GET['action'])) ? $tpl->assign("success", "Lo stato dell'ordine con l'ID " . $_GET['id'] . " &egrave; stato cambiato correttamente. ") : $tpl->assign("error", "L'ordine con l'ID " . $_GET['attiva'] . " non esiste.");
}


if (isset($_GET['status'])) {


    $arrOrdini = $oOrdini->getAllOrdini(trim($_GET['status']));

    $tpl->assign("ordini", $arrOrdini);
    $tpl->assign("status", trim($_GET['status']));
    $tpl->display("ordini.tpl");
    exit();
}


if (isset($_POST['trattamento']) && $_POST['trattamento'] == "true") {

    $error = null;

    
    if ($_FILES['file']['size'] == 0 && $_FILES['file']['error'] == 4) {
            
        } else {
            $fichero = substr(md5(rand()), 0, 5)."-".$_FILES['file']['name'];
            
            $target_dir = IMG . "prescrizioni/" . trim($_SESSION['utente']['idUtente']) . "/";
            $target_file = $target_dir . $fichero;
            $cad = trim($_SESSION['utente']['idUtente']) . "/".$fichero;
            if (!file_exists($target_dir)) {
                mkdir($target_dir, 0775, true);
            }
            $uploadOk = 1;
            $error = null;
// Check if file already exists
            if (file_exists($target_file)) {
                if(!unlink($target_file)){
                $error .= "Si &egrave; trovato un file esistente nel sistema e non si puo modificare il file CAD.";
                $uploadOk = 0;
                }
            }
// Check file size
            if ($_FILES["file"]["size"] > 500000000) {
                $error .= "Il file CAD caricato &egrave; troppo grande.";
                $uploadOk = 0;
            }
// Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                $error.= "Si &egrave; riscontrato un problema al caricare il file, si prega di riprovare pi&uacute; tardi.";
// if everything is ok, try to upload file
            } else {
                
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                    
                } else {
                    $error .= "Spiacenti, si &egrave; riscontrato un problema al caricare il file, si prega di riprovare pi&uacute; tardi..";
                }
            }
        }

    if (!empty($_POST['massup']))
        $tpl->assign("massup", trim($_POST['massup']));
    else
        $error = "Devi inserire una quantit&agrave; minima di mascherine superiori.";

    if (!empty($_POST['masinf']))
        $tpl->assign("masinf", trim($_POST['masinf']));
    else
        $error = "Devi inserire una quantit&agrave; minima di mascherine inferiori.";

    if (!empty($_POST['masinfbis']))
        $tpl->assign("masinfbis", trim($_POST['masinfbis']));
    if (!empty($_POST['massupbis']))
        $tpl->assign("massupbis", trim($_POST['massupbis']));

    if (!empty($error))
        $tpl->assign("error", $error);
    else {
        $quantita = trim($_POST['masinf']) + trim($_POST['massup']);
        $acconto = $oOrdini->getPrezzoAcconto();
        $frazionamenti = $oOrdini->getFrazionamenti();
        $mora = $oOrdini->getMora();
        
        if($quantita<=$frazionamenti['min']) {
            $prez = $oOrdini->getPrezzoMascherinaByUtente($_SESSION['utente']['idUtente'], $quantita);
            $prezzo = ($prez['prezzo'] * $quantita)-$acconto;
        }
        elseif($quantita>$frazionamenti['max']) {
            $primo = $oOrdini->getPrezzoPrimoRange();
            $secondo = $oOrdini->getPrezzoSecondoRange();
            $terzo = $oOrdini->getPrezzoTerzoRange();
            
             if(trim($_POST['masinf'])<trim($_POST['massup'])){
                $numeropar = trim($_POST['masinf']);
                $tpl->assign("sininf", (trim($_POST['massup'])-trim($_POST['masinf'])));
            }
            else{
                $numeropar = trim($_POST['massup']);
                $tpl->assign("sinsup", (trim($_POST['masinf'])-trim($_POST['massup'])));
            }
            $tpl->assign("numeropar", $numeropar);
            if(($numeropar*2)>$frazionamenti['max']){
                $precioprimero = ($primo*$frazionamenti['minimo'])+$mora-$acconto;
               // var_dump($precioprimero);
                $help=$frazionamenti['max']-$frazionamenti['minimo'];
                $precioprimero = $precioprimero+($secondo*$help);
               // var_dump($precioprimero);
                $help=($numeropar*2)-$frazionamenti['max'];
                $precioprimero = $precioprimero+($help*$terzo);
              //  var_dump($precioprimero);die;
                $segundafrac = ($quantita-($numeropar*2))*$terzo;
                $tpl->assign("segundeja", $frazionamenti['minimo']);
                
                $tpl->assign("tercereja", (($numeropar*2)-$frazionamenti['max']));
            }
            else
                $precioprimero = ($primo*($numeropar*2))+$mora-$acconto;
            
            $preciosegundo = ($frazionamenti['max']-$frazionamenti['minimo'])*$secondo;
            $preciotercero = ($quantita-$frazionamenti['max'])*$terzo;
            $primotot = $frazionamenti['minimo']*$primo;
            $secondotot = ($frazionamenti['max']-$frazionamenti['minimo'])*$secondo;
            $terzotot = ($quantita-$frazionamenti['max'])*$terzo;
            $prezzo = $primotot+$secondotot+$terzotot-$acconto;
            $prez['prezzo']=$primo+$secondo+$terzo;
        }
        else{
            $primo = $oOrdini->getPrezzoPrimoRange();
            $secondo = $oOrdini->getPrezzoSecondoRange();
            
            if(trim($_POST['masinf'])<trim($_POST['massup'])){
                $numeropar = trim($_POST['masinf']);
                $tpl->assign("sininf", (trim($_POST['massup'])-trim($_POST['masinf'])));
            }
            else{
                $numeropar = trim($_POST['massup']);
                $tpl->assign("sinsup", (trim($_POST['masinf'])-trim($_POST['massup'])));
            }
            $tpl->assign("numeropar", $numeropar);
            if(($numeropar*2)>$frazionamenti['min']){
                $precioprimero = ($primo*$frazionamenti['minimo'])+$mora-$acconto;
                $help=($numeropar*2)-$frazionamenti['min'];
                $precioprimero = $precioprimero+($secondo*$help);
                $tpl->assign("segundeja", $frazionamenti['minimo']);
            }
            else
                $precioprimero = ($primo*($numeropar*2))+$mora-$acconto;
            
            $preciosegundo = ($quantita-($numeropar*2))*$secondo;
            $segundafrac = $preciosegundo;
            $primotot = $frazionamenti['minimo']*$primo;
            $secondotot = ($quantita-$frazionamenti['minimo'])*$secondo;
            $prezzo = $primotot+$secondotot-$acconto;
            $prez['prezzo']=$primo+$secondo;
            
            
            
            
        }
        if(isset($primo)){
            $tpl->assign("primo", $primo);
            $tpl->assign("primotot", $primotot);
            $tpl->assign("precioprimo", $precioprimero);
        }
        if(isset($secondo)){
            $tpl->assign("secondo", $secondo);
            $tpl->assign("preciosecondo", $preciosegundo);
            $tpl->assign("secondotot", $secondotot);
        }
        if(isset($terzo)) {
            $tpl->assign("terzo", $terzo);
            $tpl->assign("terzotot", $terzotot);
        }
        $tpl->assign("mastot", $quantita);
        $tpl->assign("prez", $prez);
        $tpl->assign("acconto", $acconto);
        $tpl->assign("frazionamenti", $frazionamenti);
         $tpl->assign("segundafrac", $segundafrac);
        $tpl->assign("prezzo", $prezzo);
        $tpl->assign("mora", $mora);
        $tpl->assign("cad", $cad);
        $tpl->assign("idOrdine", trim($_POST['idOrdine']));
        $tpl->display("riepilogo.tpl");
        exit;
    }
}









if (isset($_SESSION['successo'])) {
    $tpl->assign("success", "L'ordine con l'ID " . $_SESSION['successo'] . " &egrave; stato modificato correttamente. ");
    $_SESSION['successo'] = NULL;
}
if (isset($_SESSION['accessError'])) {
    $tpl->assign("accessError", $_SESSION['accessError']);
    $_SESSION['accessError'] = NULL;
}

if (isset($_POST['idOrdine'])){

        $oOrdini->codice = $_POST['idOrdine'];
    
        $oOrdini->precio = $_POST['precio'];
        
        $oOrdini->precio2 = $_POST['precio2'];
        
        $oOrdini->precio3 = $_POST['precio3'];

        $oOrdini->massup = $_POST['massup'];

        $oOrdini->masinf = $_POST['masinf'];

        $oOrdini->massupbis = $_POST['massupbis'];
        
        $oOrdini->masinfbis = $_POST['masinfbis'];
        
        $oOrdini->cad = $_POST['cad'];

        if($oOrdini->addTrattamento()) {
            $oOrdini->cambiaStatoByCodice($oOrdini->codice, 4) ? $tpl->assign("esito", "Trattamento inserito correttamente."):$tpl->assing("error", "Trattamento non inserito, si prega di riprovare pi&ugrave tardi.");
                
        }
        
        else 
            $tpl->assing("error", "Trattamento non inserito, si prega di riprovare pi&ugrave tardi.");
}
$arrOrdini = $oOrdini->getAllOrdini();

$tpl->assign("ordini", $arrOrdini);

$tpl->display("ordini.tpl");
