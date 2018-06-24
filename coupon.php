<?php

require_once "./config/sys_application.php";

require_once CLASS_DIR . "Coupon.class.php";

$tpl = new Smarty;
$tpl->compile_check = COMPILE_CHECK;
$tpl->debugging = DEBUGGING;

if ($_SESSION['utente']['idRuoloUtente'] !== AMMINISTRATORE) {

    if(isset($_POST['couponAzienda']) || isset($_POST['couponAmico']))
        $tpl->assign("error", "Il codice inserito: ".$_POST['couponAzienda'].$_POST['couponAmico']." non risulta essere valido.");

    $tpl->display("coupon_usa.tpl");

    exit();
}

if (isset($_GET['cancella'])) {

    $oDettaglio = new Coupon();
    $oDettaglio->cancellaCoupon(trim($_GET['cancella'])) ? $tpl->assign("esito", "Coupon cancellato correttamente") : $tpl->assign("error", "Coupon non cancellato per favore conttata con iNTERVOLUTIONS Ltd.");

    $oDettaglio->idCoupon = trim($_GET['id']);
    $dettaglioOrdine = $oDettaglio->getCouponByID($oDettaglio->idCoupon);

    $tpl->assign("idCoupon", trim($_GET['id']));
    $tpl->assign("ordini", $dettaglioOrdine);
    $tpl->display("coupon_detail.tpl");

    exit();
}

if (isset($_GET['id'])) {

    $oDettaglio = new Coupon();
    $oDettaglio->idCoupon = trim($_GET['id']);
    $dettaglioOrdine = $oDettaglio->getCouponByID($oDettaglio->idCoupon);

    $tpl->assign("idCoupon", trim($_GET['id']));
    $tpl->assign("ordini", $dettaglioOrdine);
    $tpl->display("coupon_detail.tpl");

    exit();
}

$oOrdini = new Coupon();



if (isset($_GET['task']) && $_GET['task'] == "generate") {

    require_once CLASS_DIR . "Medico.class.php";
    $oMedico = new Medico();
    $medici = $oMedico->getAllMedici();
    $tipologia = $oOrdini->getTipoCoupon();
    $precios = $oOrdini->getPrezziDopados();
   // var_dump($precios);die;
    $tpl->assign("codiceCoupon", $oOrdini->generateRandomString(15));
    $tpl->assign("medici", $medici);
    $tpl->assign("precios", $precios);
    $tpl->assign("tipologia", $tipologia);
    $tpl->display("modifica_coupon.tpl");
    //$oOrdini->cambiaStato(trim($_GET['id']),trim($_GET['action'])) ? $tpl->assign ("success", "Lo stato dell'ordine con l'ID ".$_GET['id']." &egrave; stato cambiato correttamente. "): $tpl->assign ("error", "L'ordine con l'ID ".$_GET['attiva']." non esiste.");

    exit();
}

if (isset($_POST['inserimento'])) {

    require_once CLASS_DIR . "Utils.class.php";

    $oUtils = new Utils();
    $data = trim($_POST['data']);
    $oOrdini->codice = $oUtils->checkValue($_POST['cupon']);
    $oOrdini->ilimitado = $oUtils->checkValue($_POST['tempoCoupon']);
    $oOrdini->dataScadenza = "'" . date('Y-m-d', strtotime(str_replace('-', '/', $data))) . "'";
    $oOrdini->prezzo = $oUtils->checkValue($_POST['cantidad']);
    $oOrdini->fkTipoCoupon = $oUtils->checkValue($_POST['tipoCoupon']);
    $oOrdini->porciento = $oUtils->checkValue($_POST['scontoCoupon']);
    $oOrdini->utenti = $_POST['utenti'];

    // echo '<pre>';var_dump($oOrdini);die('aaaaaaaaa');

    if ($oOrdini->insert())
        $tpl->assign("esito", "Coupon creato con successo ");
    else
        $tpl->assign("error", "ERRORE del sistema, coupon non inserito! ");
}


if (isset($_GET['status'])) {


    $arrOrdini = $oOrdini->getCouponByState(trim($_GET['idi']), trim($_GET['status']));

    $tpl->assign("ordini", $arrOrdini);
    $tpl->assign("status", trim($_GET['status']));
    $tpl->assign("idCoupon", trim($_GET['idi']));
    $tpl->display("coupon_detail.tpl");
    exit();
}


$arrOrdini = $oOrdini->getCouponByState();

$tpl->assign("ordini", $arrOrdini);

if (isset($_SESSION['successo'])) {
    $tpl->assign("success", "L'ordine con l'ID " . $_SESSION['successo'] . " &egrave; stato modificato correttamente. ");
    $_SESSION['successo'] = NULL;
}
if (isset($_SESSION['accessError'])) {
    $tpl->assign("accessError", $_SESSION['accessError']);
    $_SESSION['accessError'] = NULL;
}

$tpl->display("coupon.tpl");


