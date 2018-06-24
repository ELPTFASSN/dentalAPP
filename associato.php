<?php

require_once "./config/sys_application.php";

require_once CLASS_DIR . "Azienda.class.php";


$tpl = new Smarty;
$tpl->compile_check = COMPILE_CHECK;
$tpl->debugging = DEBUGGING;

if (isset($_GET['id'])) {

    $oDettaglio = new Azienda();
    $oDettaglio->idDettaglioAzienda = trim($_GET['id']);
    $dettaglioAzienda = $oDettaglio->getDettaglioAzienda($oDettaglio->idDettaglioAzienda);
    $arrMedici = $oDettaglio->getDetailMiembros($oDettaglio->idDettaglioAzienda);
    $tpl->assign("arrMedici", $arrMedici);
    $tpl->assign("azienda", $dettaglioAzienda);
    //echo '<pre>';
  //  var_dump($arrMedici);
//    var_dump($dettaglioAzienda);die;

    unset($oDettaglio);
    unset($dettaglioMedico);

}


$tpl->display("scheda_minisito.tpl");
