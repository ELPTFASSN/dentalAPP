<?php

require_once "./config/sys_application.php";

require_once CLASS_DIR . "Utente.class.php";
require_once CLASS_DIR . "Medico.class.php";
require_once CLASS_DIR . "Ordine.class.php";

$oPrezio = new Ordine();

$tpl = new Smarty;
$tpl->compile_check = COMPILE_CHECK;
$tpl->debugging = DEBUGGING;

if (isset($_GET['token']) && isset($_GET['PayerID'])) {
        
            $oPrezio->addAbbonamento($_GET['token'], $_GET['PayerID']) ? $tpl->assign("success", "Abbonamento attivato correttamente. ") : $tpl->assign("error", "Pagamento non andato a buon fine, si prega di riprovare pi&uacute; tardi.");
            $oPrezio->addFatturaAbbonamento($_GET['token'], $_GET['PayerID'], $_SESSION['pagos']);
    
}

if ($_GET[task]) {

    $task = trim($_GET['task']);

    switch ($task) {
        case "add":
            $tpl->assign("tipo", $oAgenda->getAllTipos());
            $tpl->assign("oMedico", $oPaziente->getMyPazienti($_SESSION['utente']['idUtente']));
            $tpl->assign("agenda", $oAgenda->getMyAgenda($_SESSION['utente']['idUtente']));
            $tpl->display("add_agenda.tpl");
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


if (isset($_SESSION['successo'])) {
    $tpl->assign("success", "L'utente con l'ID " . $_SESSION['successo'] . " &egrave; stato modificato correttamente. ");
    $_SESSION['successo'] = NULL;
}
if (isset($_SESSION['accessError'])) {
    $tpl->assign("accessError", $_SESSION['accessError']);
    $_SESSION['accessError'] = NULL;
}

$tpl->assign("precio", $oPrezio->getAbbonamentoPrezzo());
if($oPrezio->checkIfAbonado())
   $tpl->display("abbonamento_1.tpl");
else
   $tpl->display("abbonamento.tpl");
