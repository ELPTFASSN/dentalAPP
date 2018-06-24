<?php

require_once "./config/sys_application.php";
require_once CLASS_DIR . "Azienda.class.php";
require_once CLASS_DIR . "Medico.class.php";
require_once CLASS_DIR . "Paziente.class.php";
require_once CLASS_DIR . "Utils.class.php";

$tpl = new Smarty;
$tpl->compile_check = COMPILE_CHECK;
$tpl->debugging = DEBUGGING;

if (isset($_GET['id'])) {

    $oDettaglio = new Paziente();
    $oDettaglio->idDettaglioPaziente = trim($_GET['id']);
    $regioni = $oDettaglio->getRegioni();
    $dettaglioMedico = $oDettaglio->getDettaglioPaziente();
    if (isset($_GET['esito']))
        $tpl->assign("esito", "Paziente modificato correttamente.");
    $tpl->assign("regioni", $regioni);
    $tpl->assign("idDettaglioPaziente", $oDettaglio->idDettaglioPaziente);
    $tpl->assign("oMedico", $oDettaglio->getDettaglioPaziente());
    $tpl->display("modifica_paziente.tpl");

    unset($oDettaglio);
    unset($dettaglioMedico);

    exit();
}

if (isset($_GET['task']) && $_GET['task'] == 'add') {
    $oDettaglio = new Azienda();
    $regioni = $oDettaglio->getRegioni();
                    $tpl->assign("aziende", $oDettaglio->getMyAziende($_SESSION['utente']['idUtente']));
    $tpl->assign("regioni", $regioni);
    $tpl->display("aggiunge_paziente.tpl");
    exit();
}

if (!empty($_POST['idUtente'])) {


    $oUtils = new Utils();
    $oAzienda = new Paziente();

    $oAzienda->idUtente = $_POST['idUtente'];

    $oAzienda->nome = $oUtils->checkValue($_POST['nome']);
    $oAzienda->cognome = $oUtils->checkValue($_POST['cognome']);
    $oAzienda->telefono = $oUtils->checkValue($_POST['telefono']);
    $oAzienda->telefonoMobile = $oUtils->checkValue($_POST['telefonoMobile']);
    $oAzienda->email = $oUtils->checkValue($_POST['email']);
    $oAzienda->indirizzo = $oUtils->checkValue($_POST['indirizzo']);
    $oAzienda->numeroCivico = $oUtils->checkValue($_POST['numeroCivico']);
    $oAzienda->cap = $oUtils->checkValue($_POST['cap']);
    $oAzienda->fkComune = $oUtils->checkValue($_POST['citta']);
    $oAzienda->fkProvincia = $oUtils->checkValue($_POST['provincia']);
    $oAzienda->fkRegione = $oUtils->checkValue($_POST['regione']);
    if (!empty($_POST['data']))
        $oAzienda->dataNascita = date('Y-m-d', strtotime(str_replace('-', '/', $oUtils->checkValue($_POST['data']))));

    //     echo'<pre>';                              var_dump($oAzienda);die('aa');   
    $error = $oAzienda->isError(TRUE);

    if (empty($error)) {
        $oAzienda->modificaPaziente();
        header("Location: " . URL_FILE . "pazienti.php?id=" . $_POST['idDettaglioPaziente'] . "&esito=true");
    } else {

        $tpl->assign("error", $error);
    }
}


 if (isset($_POST['modifica'])) {
        $oPaziente = new Paziente();
        $oPaziente->denominazione = trim($_POST['denominazione']);
        $oPaziente->partitaIVA = trim($_POST['partitaIVAAzienda']);
        $oPaziente->nomeRap = trim($_POST['nomeRap']);
        $oPaziente->cognomeRap = trim($_POST['cognomeRap']);
        $oPaziente->emailAzienda = trim($_POST['emailAzienda']);
        $oPaziente->telefono = trim($_POST['telefono']);
        $oPaziente->telefonoMobile = trim($_POST['telefonoMobile']);
        $oPaziente->fkRegione = trim($_POST['regione']);
        $oPaziente->fkProvincia = trim($_POST['provincia']);
        $oPaziente->fkComune = trim($_POST['citta']);
        $oPaziente->CAP = trim($_POST['CAP']);
        $oPaziente->indirizzo = trim($_POST['indirizzo']);
        $oPaziente->numero = trim($_POST['numero']);
        $oPaziente->idAzienda = trim($_POST['modifica']);
        $oPaziente->modificaAzienda()?$tpl->assign("success", "Dati della societ&agrave; modificati correttamente."):$tpl->assign("error","Non si &egrave; potuto modificare i dati della societ&agrave;");
        $regioni = $oDettaglio->getRegioni();
        $arrDettaglio = $oDettaglio->getDettaglioAziendaByID($oPaziente->idAzienda);
        $tpl->assign("regioni", $regioni);
        $tpl->assign("azienda", $arrDettaglio);
        $tpl->display("modifica_azienda.tpl");
        exit;
    }







if (isset($_GET['attiva'])) {

    $oMedico = new Paziente();
    $oMedico->attivaPaziente(trim($_GET['attiva'])) ? $tpl->assign("esito", "Il paziente &egrave; stato attivato correttamente. ") : $tpl->assign("error", "L'utente con l'ID " . $_GET['attiva'] . " non esiste.");
}

if (isset($_GET['disattiva'])) {

    $oMedico = new Paziente();
    $oMedico->disattivaPaziente(trim($_GET['disattiva'])) ? $tpl->assign("esito", "Il paziente &egrave; stato disattivato correttamente. ") : $tpl->assign("error", "L'utente con l'ID " . $_GET['disattiva'] . " non esiste. ");
}

if (isset($_GET['cancella'])) {

    $oDettaglio = new Paziente();
    $oDettaglio->cancellaPaziente(trim($_GET['cancella'])) ? $tpl->assign("esito", "Il paziente &egrave; stato cancellato correttamente. ") : $tpl->assign("error", "L'utente con l'ID " . $_GET['cancella'] . " non esiste. ");
}



$oDsr = new Paziente();


if ($_SESSION['utente']['idRuoloUtente'] == '1')
    $arrDsr = $oDsr->getAllPazienti();
else
    $arrDsr = $oDsr->getMyPazienti($_SESSION['utente']['idUtente']);

$tpl->assign("medici", $arrDsr);

if (isset($_GET['status'])) {


    $arrDsr = $oDsr->getAllPazienti(trim($_GET['status']));

    $tpl->assign("medici", $arrDsr);
    $tpl->assign("status", trim($_GET['status']));
    $tpl->display("pazienti.tpl");

    exit();
}

if (isset($_SESSION['successo'])) {
    $tpl->assign("success", "L'utente con l'ID " . $_SESSION['successo'] . " &egrave; stato modificato correttamente. ");
    $_SESSION['successo'] = NULL;
}
if (isset($_SESSION['accessError'])) {
    $tpl->assign("accessError", $_SESSION['accessError']);
    $_SESSION['accessError'] = NULL;
}


$tpl->display("pazienti.tpl");
