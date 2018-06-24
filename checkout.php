<?php

require_once "./config/sys_application.php";
require_once CLASS_DIR . "PayPal.class.php";
require_once CLASS_DIR . "Ordine.class.php";

$tpl = new Smarty;
$tpl->compile_check = COMPILE_CHECK;
$tpl->debugging = DEBUGGING;

$oOrdine = new Ordine();
 
if (isset($_GET[task])) {
    $task = trim($_GET['task']);
    switch ($task) {
        case 'prescrizione':
            $dati = $oOrdine->getOrdiniByID(trim($_GET['id']));
            $prodotti = $oOrdine->getContenutoOrdiniByID(trim($_GET['id']));
            // echo '<pre>';var_dump($prodotti);die;
            $paymentAmount = $dati['prezzo'];
            $shipToName = $_SESSION['utente']['nomeMedico'] . " " . $_SESSION['utente']['cognomeMedico'];
            $shipToStreet = $dati['indirizzo'] . " " . $dati['numero'];
            $shipToStreet2 = ""; //Leave it blank if there is no value
            $shipToCity = $dati['citta'];
            $shipToState = $dati['provincia'];
            $shipToCountryCode = "IT"; // Please refer to the PayPal country codes in the API documentation
            $shipToZip = $dati['cap'];
            $phoneNum = $dati['telefono'];
            $paymentDesc="Acconto prescrizione ".$dati['codice'];
            $currencyCodeType = "EUR";
            $paymentType = "Sale";

            $returnURL = "http://easysmile.beecloud.it/panel/checkout.php";
            $cancelURL = "http://easysmile.beecloud.it/panel/checkout.php?task=error";

            $resArray = CallMarkExpressCheckout($dati['codice'], $prodotti, $paymentDesc, $paymentAmount, $currencyCodeType, $paymentType, $returnURL, $cancelURL, $shipToName, $shipToStreet, $shipToCity, $shipToState, $shipToCountryCode, $shipToZip, $shipToStreet2, $phoneNum);

            $ack = strtoupper($resArray["ACK"]);
            if ($ack == "SUCCESS" || $ack == "SUCCESSWITHWARNING") {
                $token = urldecode($resArray["TOKEN"]);
                $_SESSION['reshash'] = $token;
                $oOrdine->setTokenPayPal($token, $dati['codice']);
                RedirectToPayPal($token);
            } else {
                $ErrorCode = urldecode($resArray["L_ERRORCODE0"]);
                $ErrorShortMsg = urldecode($resArray["L_SHORTMESSAGE0"]);
                $ErrorLongMsg = urldecode($resArray["L_LONGMESSAGE0"]);
                $ErrorSeverityCode = urldecode($resArray["L_SEVERITYCODE0"]);

                $error = "PayPal API call failed. ";
                $error .= "<br>Detailed Error Message: " . $ErrorLongMsg;
                $error .= "<br>Short Error Message: " . $ErrorShortMsg;
                $error .= "<br>Error Code: " . $ErrorCode;
                $error .= "<br>Error Severity Code: " . $ErrorSeverityCode;
                $tpl->assign("error", $error);
            }
            break;
            
            
            
             case 'trattamento':
            $dati = $oOrdine->getOrdiniByTrattamentoID(trim($_GET['id']));
        //   echo '<pre>';var_dump($dati);die;
                 if($dati['estado']==5){
                     $prodotti = "Primo frazionamento trattamento prescrizione ".$dati['codice'];
                     $paco="&frac=one";
                    $paymentAmount = $dati['primoFrac'];
                 }
                 elseif($dati['estado']==6){
                     $prodotti = "Secondo frazionamento trattamento prescrizione ".$dati['codice'];
                     $paco="&frac=two";
                     $paymentAmount = $dati['secFrac'];
                 }
                 else{
                     $prodotti = "Soluzione unica trattamento prescrizione ".$dati['codice'];
                     
                     $paymentAmount = $dati['prezzo'];
                 }
             //    var_dump($paymentAmount);die;
                 
            $shipToName = $_SESSION['utente']['nomeMedico'] . " " . $_SESSION['utente']['cognomeMedico'];
            $shipToStreet = $dati['indirizzo'] . " " . $dati['numero'];
            $shipToStreet2 = ""; //Leave it blank if there is no value
            $shipToCity = $dati['citta'];
            $shipToState = $dati['provincia'];
            $shipToCountryCode = "IT"; // Please refer to the PayPal country codes in the API documentation
            $shipToZip = $dati['cap'];
            $phoneNum = $dati['telefono'];
            $paymentDesc="Trattamento prescrizione ".$dati['codice'];
            $currencyCodeType = "EUR";
            $paymentType = "Sale";

            $returnURL = "http://easysmile.beecloud.it/panel/trattamenti.php?trattamento=true".$paco;
            $cancelURL = "http://easysmile.beecloud.it/panel/checkout.php?task=error";

            $resArray = CallMarkExpressCheckout($dati['codice'], $prodotti, $paymentDesc, $paymentAmount, $currencyCodeType, $paymentType, $returnURL, $cancelURL, $shipToName, $shipToStreet, $shipToCity, $shipToState, $shipToCountryCode, $shipToZip, $shipToStreet2, $phoneNum);

            $ack = strtoupper($resArray["ACK"]);
            if ($ack == "SUCCESS" || $ack == "SUCCESSWITHWARNING") {
                $token = urldecode($resArray["TOKEN"]);
                $_SESSION['reshash'] = $token;
                $oOrdine->setTokenPayPalTrattamento($token, trim($_GET['id']));
                RedirectToPayPal($token);
            } else {
                $ErrorCode = urldecode($resArray["L_ERRORCODE0"]);
                $ErrorShortMsg = urldecode($resArray["L_SHORTMESSAGE0"]);
                $ErrorLongMsg = urldecode($resArray["L_LONGMESSAGE0"]);
                $ErrorSeverityCode = urldecode($resArray["L_SEVERITYCODE0"]);

                $error = "PayPal API call failed. ";
                $error .= "<br>Detailed Error Message: " . $ErrorLongMsg;
                $error .= "<br>Short Error Message: " . $ErrorShortMsg;
                $error .= "<br>Error Code: " . $ErrorCode;
                $error .= "<br>Error Severity Code: " . $ErrorSeverityCode;
                $tpl->assign("error", $error);
            }
            break;
            
            
            
            
            case 'abbonamento':
            if($oOrdine->checkIfAbonado())
               header ("Location: home_medico.php");
            
            
            $prodotti = "Abbonamento EasySmile Group";
            // echo '<pre>';var_dump($prodotti);die;
            $paymentAmount = $oOrdine->getAbbonamentoPrezzo();
            $_SESSION['pagos'] = $paymentAmount;
            $shipToName = $_SESSION['utente']['nomeMedico'] . " " . $_SESSION['utente']['cognomeMedico'];
            $dati = $shipToName;
            $shipToStreet = "";
            $shipToStreet2 = ""; //Leave it blank if there is no value
            $shipToCity = "";
            $shipToState = "";
            $shipToCountryCode = "IT"; // Please refer to the PayPal country codes in the API documentation
            $shipToZip = "";
            $phoneNum = "";
            $paymentDesc="Abbonamento Easy Smile Group";
            $currencyCodeType = "EUR";
            $paymentType = "Sale";

            $returnURL = "http://easysmile.beecloud.it/panel/abbonamenti.php";
            $cancelURL = "http://easysmile.beecloud.it/panel/abbonamenti.php?task=error";

            $resArray = CallMarkExpressCheckout($paymentAmount, $prodotti, $paymentDesc, $paymentAmount, $currencyCodeType, $paymentType, $returnURL, $cancelURL, $shipToName, $shipToStreet, $shipToCity, $shipToState, $shipToCountryCode, $shipToZip, $shipToStreet2, $phoneNum);

            $ack = strtoupper($resArray["ACK"]);
            if ($ack == "SUCCESS" || $ack == "SUCCESSWITHWARNING") {
                $token = urldecode($resArray["TOKEN"]);
                $_SESSION['reshash'] = $token;
             //   $oOrdine->setTokenPayPal($token, $dati['codice']);
                RedirectToPayPal($token);
            } else {
                $ErrorCode = urldecode($resArray["L_ERRORCODE0"]);
                $ErrorShortMsg = urldecode($resArray["L_SHORTMESSAGE0"]);
                $ErrorLongMsg = urldecode($resArray["L_LONGMESSAGE0"]);
                $ErrorSeverityCode = urldecode($resArray["L_SEVERITYCODE0"]);

                $error = "PayPal API call failed. ";
                $error .= "<br>Detailed Error Message: " . $ErrorLongMsg;
                $error .= "<br>Short Error Message: " . $ErrorShortMsg;
                $error .= "<br>Error Code: " . $ErrorCode;
                $error .= "<br>Error Severity Code: " . $ErrorSeverityCode;
                var_dump($error);die;
                $tpl->assign("error", $error);
            }
            break;
        case 'error':
            $tpl->assign("error", "Prescrizione NON pagata. Contatta con PayPal per ulteriore informazione.");
            break;
    }

    
  
}
if (isset($_GET['token']) && isset($_GET['PayerID'])) {
        
        if ($_SESSION['reshash'] === $_GET['token']) {
            $oOrdine->cambiaStato($_SESSION['reshash'], 2) ? $tpl->assign("success", "Prescrizione pagata e inserita correttamente. ") : $tpl->assign("error", "Prescrizione inserita ma NON pagata.");
            $oOrdine->addFatturaPrescrizione($_SESSION['reshash']);
              $tpl->assign("token", $oOrdine->getOrdiniByToken($_SESSION['reshash']));
        $tpl->display("ordini-last-step.tpl");
        exit;
        }
    }
    if(isset($_POST['idOrdine']) && isset($_POST['last-step'])){
    $dt = \DateTime::createFromFormat('d/m/Y', $_POST['dataRitiro']);
        $date = $dt->format('Y-m-d');
    $oOrdine->lastStep(trim($_POST['idOrdine']),trim($date),trim($_POST['noteRitiro'])) ? $tpl->assign("success", "Ritirto della prescrizione inserita correttamente. ") : $error=true;
    if(isset($error) && $error===true){
        $tpl->assign("ordine", $oOrdini->getOrdiniByID(trim($_POST['idOrdine'])));
        $tpl->display("ordini-last-step.tpl");
        exit;
    }
}
  
    $tpl->assign("ordini", $oOrdine->getAllOrdiniByUtente($_SESSION['utente']['idUtente']));
    $tpl->display("ordini_medico.tpl");
  