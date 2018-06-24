<?php

require_once "./config/sys_application.php";

require_once CLASS_DIR . "Medico.class.php";
require_once CLASS_DIR . "Azienda.class.php";
require_once CLASS_DIR . "Utils.class.php";

$tpl = new Smarty;
$tpl->compile_check = COMPILE_CHECK;
$tpl->debugging = DEBUGGING;

if ($_SESSION['utente']['idRuoloUtente'] !== AMMINISTRATORE) {


    $oDettaglio = new Azienda();

    if (isset($_GET['task'])) {

        $task = trim($_GET['task']);

        if (isset($_GET['id']))
            $idAzienda = trim($_GET['id']);

        switch ($task) {
            case "add":
                $regioni = $oDettaglio->getRegioni();
                $tpl->assign("regioni", $regioni);
                $tpl->display("aggiunge_azienda.tpl");
                break;
            case "addstudio":
                $regioni = $oDettaglio->getRegioni();
                $tpl->assign("regioni", $regioni);
                $tpl->display("aggiunge_azienda2.tpl");
                break;
            case "cancella":
                break;
            case "modifica":
                $regioni = $oDettaglio->getRegioni();
                $arrDettaglio = $oDettaglio->getDettaglioAziendaByID($idAzienda);
                $tpl->assign("regioni", $regioni);
                $tpl->assign("azienda", $arrDettaglio);
                $tpl->display("modifica_azienda.tpl");
                break;
        }
        exit;
    }

    if (isset($_POST['modifica'])) {
        $oAzienda = new Azienda();
        $oAzienda->denominazione = trim($_POST['denominazione']);
        $oAzienda->partitaIVA = trim($_POST['partitaIVAAzienda']);
        $oAzienda->nomeRap = trim($_POST['nomeRap']);
        $oAzienda->cognomeRap = trim($_POST['cognomeRap']);
        $oAzienda->emailAzienda = trim($_POST['emailAzienda']);
        $oAzienda->telefono = trim($_POST['telefono']);
        $oAzienda->telefonoMobile = trim($_POST['telefonoMobile']);
        $oAzienda->fkRegione = trim($_POST['regione']);
        $oAzienda->fkProvincia = trim($_POST['provincia']);
        $oAzienda->fkComune = trim($_POST['citta']);
        $oAzienda->CAP = trim($_POST['CAP']);
        $oAzienda->indirizzo = trim($_POST['indirizzo']);
        $oAzienda->numero = trim($_POST['numero']);
        $oAzienda->idAzienda = trim($_POST['modifica']);
        $oAzienda->modificaAzienda()?$tpl->assign("success", "Dati della societ&agrave; modificati correttamente."):$tpl->assign("error","Non si &egrave; potuto modificare i dati della societ&agrave;");
        $regioni = $oDettaglio->getRegioni();
        $arrDettaglio = $oDettaglio->getDettaglioAziendaByID($oAzienda->idAzienda);
        $tpl->assign("regioni", $regioni);
        $tpl->assign("azienda", $arrDettaglio);
        $tpl->display("modifica_azienda.tpl");
        exit;
    }

    $tpl->assign("aziende", $oDettaglio->getMyAziende($_SESSION['utente']['idUtente']));
    $tpl->display("aziende-medico.tpl");

    exit();
}

if (isset($_GET['action']) && $_GET['action'] == 'add') {
    $oDettaglio = new Azienda();
    echo $oDettaglio->generateRandomString('20');
    exit();
}


if (isset($_GET['id'])) {

    $oDettaglio = new Azienda();
    $oDettaglio->idUtente = trim($_GET['id']);
    $dettaglioAzienda = $oDettaglio->getDettaglioAzienda($oDettaglio->idUtente);
    $arrMedici = $oDettaglio->getDetailMiembros($oDettaglio->idUtente);
    $regioni = $oDettaglio->getRegioni();
    if (isset($_GET['esito']))
        $tpl->assign("esito", "Azienda modificata correttamente.");
    $tpl->assign("regioni", $regioni);
    $tpl->assign("arrMedici", $arrMedici);
    $tpl->assign("oAzienda", $dettaglioAzienda);
    $tpl->display("modifica_azienda.tpl");

    unset($oDettaglio);
    unset($dettaglioMedico);

    exit();
}

if (!empty($_POST['idAzienda'])) {


    $oUtils = new Utils();
    $oAzienda = new Azienda();

    $oAzienda->idAzienda = $_POST['idAzienda'];

    $oAzienda->getDettaglioAzienda($oAzienda->idAzienda);
    $oAzienda->denominazione = $oUtils->checkValue($_POST['nome']);
    $oAzienda->telefono = $oUtils->checkValue($_POST['telefono']);
    $oAzienda->telefonoMobile = $oUtils->checkValue($_POST['telefonoMobile']);
    $oAzienda->nomeRap = $oUtils->checkValue($_POST['nomeRap']);
    $oAzienda->cognomeRap = $oUtils->checkValue($_POST['cognomeRap']);

    $oAzienda->email = $oUtils->checkValue($_POST['email']);
    $oAzienda->indirizzo = $oUtils->checkValue($_POST['indirizzo']);
    $oAzienda->fkComune = $oUtils->checkValue($_POST['citta']);
    $oAzienda->fkProvincia = $oUtils->checkValue($_POST['provincia']);
    $oAzienda->fkRegione = $oUtils->checkValue($_POST['regione']);
    $oAzienda->partitaIVA = $oUtils->checkValue($_POST['partitaIVA']);
    if (!empty($_POST['data']))
        $oAzienda->data = date('Y-m-d', strtotime(str_replace('-', '/', $oUtils->checkValue($_POST['data']))));

    if (!empty($_POST['password']))
        $oAzienda->password = $oUtils->checkValue($_POST['password']);

    $error = $oAzienda->isError(TRUE);

    if (empty($error)) {
        $oAzienda->updateDettaglioAzienda();
        header("Location: " . URL_FILE . "aziende.php?id=" . $_POST['idAzienda'] . "&esito=true");
    } else {

        $tpl->assign("error", $error);
    }
}




if (isset($_GET['attiva'])) {

    $oAzienda = new Azienda();
    $oAzienda->attivaAzienda(trim($_GET['attiva'])) ? $tpl->assign("esito", "L'azienda &egrave; stata attivata correttamente. ") : $tpl->assign("error", "L'azienda non esiste.");
}

if (isset($_GET['disattiva'])) {

    $oAzienda = new Azienda();
    $oAzienda->disattivaAzienda(trim($_GET['disattiva'])) ? $tpl->assign("esito", "L'azienda &egrave; stata disattivata correttamente. ") : $tpl->assign("error", "L'azienda non esiste. ");
}

if (isset($_GET['cancella'])) {

    $oDettaglio = new Azienda();
    $oDettaglio->cancellaAzienda(trim($_GET['cancella'])) ? $tpl->assign("esito", "L'azienda &egrave; stato cancellato correttamente. ") : $tpl->assign("error", "L'azienda non esiste. ");
}

if (isset($_GET['ripristina'])) {

    $oDettaglio = new Azienda();
    $oDettaglio->ripristinaAzienda(trim($_GET['ripristina'])) ? $tpl->assign("esito", "L'azienda &egrave; stato ripristinato correttamente. ") : $tpl->assign("error", "L'azienda non esiste. ");
}



$oAzienda = new Azienda();

$arrAzienda = $oAzienda->getAllAziende();
$arrMiembros = $oAzienda->getAllMiembros();

$tpl->assign("aziende", $arrAzienda);

$tpl->assign("miembros", $arrMiembros);

if (isset($_GET['status'])) {


    $arrAzienda = $oAzienda->getAllAziende(trim($_GET['status']));

    $tpl->assign("aziende", $arrAzienda);
    $tpl->assign("status", trim($_GET['status']));
    $tpl->display("aziende.tpl");



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

$tpl->display("aziende.tpl");
