<?php

require_once "./config/sys_application.php";

require_once CLASS_DIR . "Utente.class.php";
require_once CLASS_DIR . "Medico.class.php";
require_once CLASS_DIR . "Paziente.class.php";

$oAgenda = new Medico();
$oPaziente = new Paziente();

$tpl = new Smarty;
$tpl->compile_check = COMPILE_CHECK;
$tpl->debugging = DEBUGGING;


if ($_GET[task]) {

    $task = trim($_GET['task']);

    switch ($task) {
        case "add":
            $tpl->assign("tipo", $oAgenda->getAllTipos());
            $tpl->assign("oMedico", $oPaziente->getMyPazienti($_SESSION['utente']['idUtente']));
            $tpl->assign("agenda", $oAgenda->getMyAgenda($_SESSION['utente']['idUtente']));
            $tpl->display("add_agenda.tpl");
            break;
        case "addPaz":
            $tpl->assign("tipo", $oAgenda->getAllTipos());
            $tpl->assign("agenda", $oAgenda->getYourAgenda($_SESSION['utente']['idUtente']));
            $tpl->display("add_agenda_paz.tpl");
            break;
        case "disponibilita":
            $tpl->assign("tipo", $oAgenda->getAllTipos());
            $tpl->assign("oMedico", $oPaziente->getMyPazienti($_SESSION['utente']['idUtente']));
            $tpl->assign("agenda", $oAgenda->getMyAgenda($_SESSION['utente']['idUtente']));
            $tpl->display("disponibilita_agenda.tpl");
            break;
        case 'gestisci':
            $tpl->assign("tipo", $oAgenda->getAllTipos());
            $tpl->assign("agenda", $oAgenda->getMyAgendaByID($_SESSION['utente']['idUtente'], trim($_GET['id'])));
            $tpl->display("modifica_agenda.tpl");
            break;
        case 'conferma':
            $oAgenda->confermaAppuntamento($_SESSION['utente']['idUtente'], trim($_GET['id'])) ? $tpl->assign("esito", "Appuntamento confermato!") : $tpl->assign("error", "Non si &egrave; potuto cambiare lo stato dell'appuntamento si prega di riprovare ");
            $tpl->assign("tipo", $oAgenda->getAllTipos());
            $tpl->assign("agenda", $oAgenda->getMyAgendaByID($_SESSION['utente']['idUtente'], trim($_GET['id'])));
            $tpl->display("modifica_agenda.tpl");
            break;
        case 'cancella':
            $oAgenda->cancellaAppuntamento($_SESSION['utente']['idUtente'], trim($_GET['id'])) ? $tpl->assign("esito", "Appuntamento cancellato correttamente!") : $tpl->assign("error", "Non si &egrave; potuto cambiare lo stato dell'appuntamento si prega di riprovare ");
            $tpl->assign("tipo", $oAgenda->getAllTipos());
            $tpl->assign("agenda", $oAgenda->getMyAgendaByID($_SESSION['utente']['idUtente'], trim($_GET['id'])));
            $tpl->display("modifica_agenda.tpl");
            break;
    }

    exit();
}
if (isset($_POST['idAgenda']) && $_POST['idAgenda'] != 'nuovo') {

    $error = NULL;
    if (!empty($_POST['idAgenda']))
        $idAgenda = trim($_POST['idAgenda']);
    else
        $error.="Devi inserire quale appuntamento vuoi modificare<br />";
    if (!empty($_POST['tiempo']))
        $tiempo = trim($_POST['tiempo']);
    else
        $error.="Devi inserire quando inizia l'appuntamento<br />";
    if (!empty($_POST['data']))
        $data = trim($_POST['data']);
    else
        $error.="Devi inserire la data dell'appuntamento<br />";
    if (!empty($_POST['tipo']))
        $tipo = trim($_POST['tipo']);
    else
        $error.="Devi inserire quale tipo d'appuntamento<br />";
    if (!empty($error))
        $tpl->assign("error", $error);
    else
        $oAgenda->modificaAppuntamento($idAgenda, $tipo, $data, $tiempo) ? $tpl->assign("esito", "Appuntamento modificato correttamente. ") : $tpl->assign("error", "Hai un'altro appuntamento in quel momento!");
    $tpl->assign("tipo", $oAgenda->getAllTipos());
    $tpl->assign("agenda", $oAgenda->getMyAgendaByID($_SESSION['utente']['idUtente'], trim($_POST['idAgenda'])));
    $tpl->display("modifica_agenda.tpl");
    exit;
} elseif ($_POST['idAgenda'] == 'nuovo') {

    $error = NULL;

    if (!empty($_POST['tiempo']))
        $tiempo = trim($_POST['tiempo']);
    else
        $error.="Devi inserire quando inizia l'appuntamento<br />";
    if (!empty($_POST['paziente']))
        $paziente = trim($_POST['paziente']);
    else
        $error.="Devi inserire il paziente<br />";
    if (!empty($_POST['data']))
        $data = trim($_POST['data']);
    else
        $error.="Devi inserire la data dell'appuntamento<br />";
    if (!empty($_POST['tipo']))
        $tipo = trim($_POST['tipo']);
    else
        $error.="Devi inserire quale tipo d'appuntamento<br />";

    if (!empty($error))
        $tpl->assign("error", $error);
    else
        $oAgenda->addAppuntamento($tipo, $paziente, $data, $tiempo) ? $tpl->assign("esito", "Appuntamento registrato correttamente. ") : $tpl->assign("error", "Hai un'altro appuntamento in quel momento!");

    $tpl->assign("tipo", $oAgenda->getAllTipos());
    $tpl->assign("oMedico", $oPaziente->getMyPazienti($_SESSION['utente']['idUtente']));
    $tpl->assign("agenda", $oAgenda->getMyAgenda($_SESSION['utente']['idUtente']));
    $tpl->display("add_agenda.tpl");
    exit();
}elseif ($_POST['disponibilita'] == 'cambia') {

    if (!empty($_POST['tiempo']))
        $tiempo = trim($_POST['tiempo']);
    else
        $error.="Devi inserire quando inizia la tua disponibilita<br />";
    if (!empty($_POST['tiempo2']))
        $tiempo2 = trim($_POST['tiempo2']);
    else
        $error.="Devi inserire quando finalizza la tua disponibilita<br />";
    if (!empty($_POST['cuando']))
        $cuando = trim($_POST['cuando']);
    else
        $error.="Devi inserire il giorno o giorni della tua disponibilit&agrave;<br />";

    if($tiempo2 <= $tiempo)
        $error= "L'ora d'inizio non pu&ograve; essere maggiore o iguale all'ora di finalizzazione";

    if (!empty($error))
        $tpl->assign("error", $error);
    else{
        $fechas = explode(",", $cuando);
        $oAgenda->cambiaDisponibilita($fechas, $tiempo, $tiempo2) ? $tpl->assign("esito", "Disponibilit&agrave; modificata correttamente. ") : $tpl->assign("error", "Non puoi cambiare la disponibilit&agrave; in quel momento!");
    }
        $tpl->assign("tipo", $oAgenda->getAllTipos());
            $tpl->assign("oMedico", $oPaziente->getMyPazienti($_SESSION['utente']['idUtente']));
            $tpl->assign("agenda", $oAgenda->getMyAgenda($_SESSION['utente']['idUtente']));
            $tpl->display("disponibilita_agenda.tpl");
            exit();
    
}
if(isset($_POST['idAgendaPaz'])) {

    $error = NULL;

    if (!empty($_POST['tiempo']))
        $tiempo = trim($_POST['tiempo']);
    else
        $error.="Devi inserire quando inizia l'appuntamento<br />";
    if (!empty($_POST['data']))
        $data = trim($_POST['data']);
    else
        $error.="Devi inserire la data dell'appuntamento<br />";
    if (!empty($_POST['tipo']))
        $tipo = trim($_POST['tipo']);
    else
        $error.="Devi inserire quale tipo d'appuntamento<br />";

    if (!empty($error))
        $tpl->assign("error", $error);
    else
        $oAgenda->addAppuntamentoPaz($tipo, $data, $tiempo) ? $tpl->assign("esito", "Appuntamento richiesto correttamente. ") : $tpl->assign("error", "Non puoi scegliere quell'ora");

    $tpl->assign("tipo", $oAgenda->getAllTipos());
    $tpl->assign("oMedico", $oPaziente->getMyPazienti($_SESSION['utente']['idUtente']));
    $tpl->assign("agenda", $oAgenda->getMyAgenda($_SESSION['utente']['idUtente']));
    $tpl->display("add_agenda_paz.tpl");
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
if($_SESSION['utente']['idRuoloUtente'] === PAZIENTE){
    $oPaziente = new Paziente();
    $tpl->assign("agenda", $oPaziente->getMyAppuntamenti());
}
else
    $tpl->assign("agenda", $oAgenda->getMyAgenda($_SESSION['utente']['idUtente']));
$tpl->display("agenda.tpl");
