<?php

require_once "./config/sys_application.php";

require_once CLASS_DIR . "tcpdf/tcpdf.php";
require_once CLASS_DIR . "Ordine.class.php";

$oOrdine = new Ordine();

if (isset($_GET['task'])) {
    $task = trim($_GET['task']);
    switch ($task) {
        case'generate':
            require_once CLASS_DIR . "phpinvoice.php";
            $dati = $oOrdine->getFatturaByID(trim($_GET['id']));
            if(isset($_GET['tx'])) 
                $contenuti = "Trattamento prescrizione ";
            
            else
                $contenuti = $oOrdine->getContenutoOrdiniByFatturaID(trim($_GET['id']));
          //  echo '<pre>';var_dump($contenuti);die();

            $tranID = "INV" . sprintf('%05d', $dati['idFattura']);
            $data = date("d-m-Y", strtotime($dati['data']));
            $medico = $dati['nomeMedico'] . " " . $dati['cognomeMedico'];
            $partitaIVAMedico = $dati['partitaIVAMedico'];
            $azienda = $dati['denominazione'];
            $partitaIVA = $dati['partitaIVA'];
            $indirizzo = $dati['indirizzo'] . ", " . $dati['numero'];
            $telefono = $dati['telefono'];
            $citta = $dati['nome'];
            $regione = $dati['nomeregione'];
            $provincia = $dati['nomeprovincia'];
            $cuanto = money_format('%.2n', $dati['totale']);
            $codice = $dati['codice'];
            $cap = $dati['CAP'];
            $email = $dati['emailAzienda'];
            $telefonoMedico = $dati['telefonoMedico'];
            $emailMedico = $dati['emailMedico'];



$invoice = new phpinvoice();
  /* Header Settings */
  $invoice->setLogo("http://showcase.intervolutions.com/dentisti/img/logo_easysmile.png");
  $invoice->setColor("#007fff");
  $invoice->setType("Fattura");
  $invoice->setReference($tranID);
  $invoice->setDate($data);
  $invoice->setFrom(array("Dental Italia","Centri Odontodiatrici","Via delle Libellule, 33","00150 - Roma (RM)","Italia"));
  $invoice->setTo(array($medico,"Partita IVA: ".$partitaIVAMedico, $azienda,$indirizzo." ",$cap." - ".$citta,"Italia"));
  /* Adding Items in table */
   if(isset($_GET['tx'])){
       $invoice->addItem($contenuti,$codice,1,"", $dati['totale'],0,$dati['totale']);
   } else{
       if(!empty($contenuti)){
  foreach ($contenuti as $key=>$value){
    $invoice->addItem($value['product'],$value['description'],$value['quantita'],"",$value['prezzo'],0,$value['quantita']*$value['prezzo']);
       }}
       else
           $invoice->addItem("Abbonamento DentalItalia",$codice,1,"", $dati['totale'],0,$dati['totale']);
   }
  /* Add totals */
  $invoice->addTotal("Totale lordo",$dati['totale']);
  $invoice->addTotal("IVA 22%",$dati['totale']*0.22);
  $invoice->addTotal("Totale",$dati['totale']*1.22,true);
  /* Set badge */ 
  $invoice->addBadge("Fattura pagata");
  /* Add title */
  $invoice->addTitle("Fattura pagata il ".$data." tramite PayPal");
  /* Set footer note */
  $invoice->setFooternote("Dental Italia - Per qualsiasi chiarimenti chiama al numero verde 800 xxx xxx.");
  /* Render */ 
  $invoice->render($tranID.'.pdf','D'); /* I => Display on browser, D => Force Download, F => local path save, S => return document path */
        
            break;
        
            case'prescrizione':
            $dati = $oOrdine->getOrdiniByID(trim($_GET['id']));
            //   echo '<pre>';var_dump($dati);die();

            $tranID = $dati['codice'];
            $data = date("d-m-Y", strtotime($dati['dataApertura']));
            $medico = $dati['nome'] . " " . $dati['cognome'];
            $azienda = $dati['denominazione'];
            $partitaIVA = $dati['partitaIVA'];
            $indirizzo = $dati['indirizzo'] . " " . $dati['numero'];
            $telefono = $dati['telefono'];
            $citta = $dati['citta'];
            $regione = $dati['regione'];
            $provincia = $dati['provincia'];
            $codice = $dati['codice'];
            $cap = $dati['cap'];
            $email = $dati['emailAzienda'];
            $telefonoMedico = $dati['telefonoMedico'];
            $emailMedico = $dati['emailMedico'];
            $paziente = $dati['nomePaziente']." ".$dati['cognomePaziente'];
            $numPaziente = $dati['telefonoPaziente'];
            $numeroAlbo=$dati['numeroAlbo'];
            $fecha = date("d-m-Y", strtotime($dati['dataNascita']));
            $notas=$dati['note'];
            $fechaRetiro=date("d-m-Y", strtotime($dati['dataRitiro']));
            $notascorriere=$dati['noteCorriere'];
            $emailPaziente = $dati['emailPaziente'];
            $dientes = explode(",", $dati['denti']);
            foreach ($dientes as $key => $value){
            
                if($value>28)
                    $dentiSup.=$value.",";
                elseif($value<=28)
                    $dentiInf.=$value.",";
            }
            if($dati['cera']=='1')
                $enviamos.="Cera centrica,";
            if($dati['superiore']=='1')
                $enviamos.=" Impronta superiore,";
            if($dati['inferiore']=='1')
                $enviamos.=" Impronta inferiore,";
            $enviamos=substr($enviamos, 0, -1);
            $dentiSup=substr($dentiSup, 0, -1);
            $dentiInf=substr($dentiInf, 0, -1);
            //echo '<pre>';                        var_dump($enviamos, $dati);die;




// create new PDF document
            $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('Dental Italia');
            $pdf->SetTitle('Prescrizione');
            $pdf->SetSubject('Prescrizione');
            $pdf->SetKeywords('Easy Smile, PDF, fattura, prescrizione, online');
            $style = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(255, 0, 0));

            $pdf->SetLineStyle(array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(255, 255, 255)));
// set default header data
            $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, '                        Prescrizione ' . ' ' . $tranID, array(35, 55, 65), array(255, 255, 255));

// set header and footer fonts
            $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
            $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
            $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
            $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
            $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
            $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
            $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
            $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
            if (@file_exists(dirname(__FILE__) . '/lang/ita.php')) {
                require_once(dirname(__FILE__) . '/lang/ita.php');
                $pdf->setLanguageArray($l);
            }

// ---------------------------------------------------------
// set font
            $pdf->SetFont('helvetica', '', 10);

// add a page
            $pdf->AddPage();

            $html = <<<EOF
<!-- EXAMPLE OF CSS STYLE -->
<style>
    h1 {
        color: #6678b1;
                    
        font-family: arial;
        font-size: 17pt;
    }

.recibo, .recibos
{
	border-collapse: collapse;
	text-align: left;
}
.recibo th
{
	font-weight: bold;
	color: #039;
	border-bottom: 1px solid #6678b1;
}
.recibos th
{
	font-weight: bold;
	color: #039;
	border-bottom: 1px solid #ccc;
}
.recibo td, .recibos td
{
	border-bottom: 1px solid #ccc;
	height:10mm;
	color: #669;vertical-align:middle;
}
                    .recibos th, .recibos td{boder:1px solid #ccc !important;}
.none {
border:none !important;
}
                    hr{border-color:#ccc;}
</style><p></p>
                    <h1>Dati dello studio</h1>
<table class="recibo">
<tr><th width="20%">Denominazione</th> <td width="30%">$azienda</td> <th width="20%">Partita IVA</th> <td width="30%">$partitaIVA</td></tr>
</table>
<p></p>
                    <table class="recibo">
<tr><th width="20%">Telefono</th> <td width="30%">$telefono</td> <th width="20%">E-mail</th> <td width="30%">$email</td></tr>
</table>
<p></p>
                    
<table class="recibo">
<tr><th width="25%">Indirizzo dello studio</th> <td width="75%">$indirizzo - $citta $cap, $provincia, $regione</td></tr>
</table>             
<p></p><p></p>
                    <h1>Dati del medico</h1>
<table class="recibo">
<tr><th width="20%">Dott./sa</th> <td width="30%">$medico </td><th width="20%">Numero Albo</th> <td width="30%">$numeroAlbo</td></tr>
</table>
<p></p><p></p>
    
   <h1>Dati del paziente</h1>
<table class="recibo">
<tr><th width="20%">Nome</th> <td width="30%">$paziente</td><th width="20%">Data nascita</th> <td width="30%">$fecha</td></tr>
</table>

<p></p><p></p>
                    <h1>Lista denti</h1>
            <table class="recibo">
<tr><th>Arcate superiore</th><th>Arcate inferiore</th><th>Note</th></tr>
   </table>
                    <p></p>
                    <table class="recibo">
                    <tr>  <td>$dentiSup</td><td>$dentiInf</td><td>$notas</td></tr>
                    </table>
EOF;
            
            
            $html .= '      <p></p><p></p> 
                <h1>Contenuto invio</h1>
                    <table class="recibo">
<tr><th>Invio impronta</th><th>Data ritiro</th><th>Note</th></tr>
   </table>
                    <p></p>
                    <table class="recibo">
                    <tr>  <td>'.$enviamos.'</td><td>'.$fechaRetiro.'</td><td>'.$notascorriere.'</td></tr>
                    </table>
<p></p><p></p><p></p>
          <table class="recibo">
<tr><th>Data</th><td style="border-bottom:1px solid white"></td><th>Firma</th></tr>
</table>      
   ';


// output the HTML content
            $pdf->writeHTML($html, true, false, true, false, '');

// reset pointer to the last page
            $pdf->lastPage();

// ---------------------------------------------------------
//Close and output PDF document
            $pdf->Output('fattura_' . $tranID . '.pdf', 'D');

//============================================================+
// END OF FILE
//============================================================+

            break;
            
            
              case'medico':

            $codice = md5(uniqid(rand(), true));
            $codice = substr($codice, 0,12);


// create new PDF document
            $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('Dental Italia');
            $pdf->SetTitle('Registro');
            $pdf->SetSubject('Prescrizione');
            $pdf->SetKeywords('Easy Smile, PDF, fattura, prescrizione, online');
            $style = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(255, 0, 0));

            $pdf->SetLineStyle(array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(255, 255, 255)));
// set default header data
            $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, '                    Modulo di registrazione medico', PDF_HEADER_STRING, array(35, 55, 65), array(255, 255, 255));

// set header and footer fonts
            $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
            $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
            $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
            $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
            $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
            $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
            $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
            $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
            if (@file_exists(dirname(__FILE__) . '/lang/ita.php')) {
                require_once(dirname(__FILE__) . '/lang/ita.php');
                $pdf->setLanguageArray($l);
            }

// ---------------------------------------------------------
// set font
            $pdf->SetFont('helvetica', '', 10);

// add a page
            $pdf->AddPage();

            $html = <<<EOF
<!-- EXAMPLE OF CSS STYLE -->
<style>
    h1 {
        color: #6678b1;
                    
        font-family: arial;
        font-size: 17pt;
    }

.recibo, .recibos
{
	border-collapse: collapse;
	text-align: left;
}
.recibo th
{
	font-weight: bold;
	color: #039;
	border-bottom: 1px solid #6678b1;
}
.recibos th
{
	font-weight: bold;
	color: #039;
	border-bottom: 1px solid #ccc;
}
.recibo td, .recibos td
{
	border-bottom: 1px solid #ccc;
	height:10mm;
	color: #669;vertical-align:middle;
}
                    .recibos th, .recibos td{boder:1px solid #ccc !important;}
.none {
border:none !important;
}
                    hr{border-color:#ccc;}
</style><p></p>
                    <h1>Codice registrazione: $codice</h1>

<table class="recibo">
<tr><th width="20%">Nome Completo</th> <td width="30%"></td> <th width="20%">Partita IVA</th> <td width="30%"></td></tr>
</table>
<p></p>
                    <table class="recibo">
<tr><th width="20%">Telefono</th> <td width="30%"></td> <th width="20%">E-mail</th> <td width="30%"></td></tr>
</table>
<p></p>
<table class="recibo">
<tr><th width="20%">Numero Albo</th> <td width="30%"></td> <th width="20%">Città Albo</th> <td width="30%"></td></tr>
</table>
<p></p>  
    <table class="recibo">
<tr><th width="20%">Provincia Albo</th> <td width="30%"></td> <th width="20%">Regione Albo</th> <td width="30%"></td></tr>
</table>
<p></p>
<hr>
                    <p>Dental Italia SrL si riserva la facoltà di modificare, aggiungere o eliminare parti di queste condizioni, portandone a conoscenza gli interessati attraverso la pubblicazione delle modifiche nel sito o attraverso la posta elettronica. Ogni lettore è tenuto a verificare periodicamente queste condizioni per accertarsi di eventuali modifiche intervenute successivamente all’ultima consultazione del sito. In ogni caso l’utilizzo del sito e dei suoi servizi comporta l’accettazione dei cambiamenti nel frattempo intervenuti.
</p><p>In caso le variazioni non siano accettate, il lettore può annullare in ogni momento il proprio account scrivendo a privacy@easysmilegroupt.it o inviando una lettera raccomandata A/R indirizzata a Dental Italia SrL, con sede in Via Valadier n. 42 Roma, fermo restando che la prosecuzione dell’utilizzo dei servizi comporta l’accettazione delle nuove condizioni.</p>
                    
    <p></p><p></p><p></p>
          <table class="recibo">
<tr><th>Data</th><td style="border-bottom:1px solid white"></td><th>Firma</th></tr>
</table>   


EOF;


// output the HTML content
            $pdf->writeHTML($html, true, false, true, false, '');

// reset pointer to the last page
            $pdf->lastPage();

// ---------------------------------------------------------
//Close and output PDF document
            $pdf->Output('fattura_' . $tranID . '.pdf', 'D');

//============================================================+
// END OF FILE
//============================================================+

            break;
            
            
            
            
            case'azienda':

            $codice = md5(uniqid(rand(), true));
            $codice = substr($codice, 0,12);


// create new PDF document
            $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('Dental Italia');
            $pdf->SetTitle('Registro');
            $pdf->SetSubject('Prescrizione');
            $pdf->SetKeywords('Easy Smile, PDF, fattura, prescrizione, online');
            $style = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(255, 0, 0));

            $pdf->SetLineStyle(array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(255, 255, 255)));
// set default header data
            $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, '           Modulo di registrazione studio medico', PDF_HEADER_STRING, array(35, 55, 65), array(255, 255, 255));

// set header and footer fonts
            $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
            $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
            $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
            $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
            $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
            $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
            $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
            $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
            if (@file_exists(dirname(__FILE__) . '/lang/ita.php')) {
                require_once(dirname(__FILE__) . '/lang/ita.php');
                $pdf->setLanguageArray($l);
            }

// ---------------------------------------------------------
// set font
            $pdf->SetFont('helvetica', '', 10);

// add a page
            $pdf->AddPage();

            $html = <<<EOF
<!-- EXAMPLE OF CSS STYLE -->
<style>
    h1 {
        color: #6678b1;
                    
        font-family: arial;
        font-size: 17pt;
    }

.recibo, .recibos
{
	border-collapse: collapse;
	text-align: left;
}
.recibo th
{
	font-weight: bold;
	color: #039;
	border-bottom: 1px solid #6678b1;
}
.recibos th
{
	font-weight: bold;
	color: #039;
	border-bottom: 1px solid #ccc;
}
.recibo td, .recibos td
{
	border-bottom: 1px solid #ccc;
	height:10mm;
	color: #669;vertical-align:middle;
}
                    .recibos th, .recibos td{boder:1px solid #ccc !important;}
.none {
border:none !important;
}
                    hr{border-color:#ccc;}
</style><p></p>
                    <h1>Codice registrazione: $codice</h1>

<table class="recibo">
<tr><th width="20%">Denominazione</th> <td width="30%"></td> <th width="20%">Partita IVA</th> <td width="30%"></td></tr>
</table>
<p></p>
                    <table class="recibo">
<tr><th width="20%">Telefono</th> <td width="30%"></td> <th width="20%">E-mail</th> <td width="30%"></td></tr>
</table>
<p></p>
<table class="recibo">
<tr><th width="20%">Indirizzo</th> <td width="40%"></td> <th width="10%">Civico</th> <td width="10%"></td><th width="10%">CAP</th> <td width="10%"></td></tr>
</table>
<p></p>  
    <table class="recibo">
<tr><th>Città</th> <td width="30%"></td> <th>Provincia</th> <td></td><th>Regione</th> <td></td></tr>
</table>
<p></p>
<hr>
                    <p>Dental Italia SrL si riserva la facoltà di modificare, aggiungere o eliminare parti di queste condizioni, portandone a conoscenza gli interessati attraverso la pubblicazione delle modifiche nel sito o attraverso la posta elettronica. Ogni lettore è tenuto a verificare periodicamente queste condizioni per accertarsi di eventuali modifiche intervenute successivamente all’ultima consultazione del sito. In ogni caso l’utilizzo del sito e dei suoi servizi comporta l’accettazione dei cambiamenti nel frattempo intervenuti.
</p><p>In caso le variazioni non siano accettate, il lettore può annullare in ogni momento il proprio account scrivendo a privacy@easysmilegroupt.it o inviando una lettera raccomandata A/R indirizzata a Dental Italia SrL, con sede in Via Valadier n. 42 Roma, fermo restando che la prosecuzione dell’utilizzo dei servizi comporta l’accettazione delle nuove condizioni.</p>
                    
    <p></p><p></p><p></p>
          <table class="recibo">
<tr><th>Data</th><td style="border-bottom:1px solid white"></td><th>Firma</th></tr>
</table>   


EOF;


// output the HTML content
            $pdf->writeHTML($html, true, false, true, false, '');

// reset pointer to the last page
            $pdf->lastPage();

// ---------------------------------------------------------
//Close and output PDF document
            $pdf->Output('fattura_' . $tranID . '.pdf', 'D');

//============================================================+
// END OF FILE
//============================================================+

            break;
            
            
            
            case'paziente':

            $codice = md5(uniqid(rand(), true));
            $codice = substr($codice, 0,12);


// create new PDF document
            $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('Dental Italia');
            $pdf->SetTitle('Registro');
            $pdf->SetSubject('Prescrizione');
            $pdf->SetKeywords('Easy Smile, PDF, fattura, prescrizione, online');
            $style = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(255, 0, 0));

            $pdf->SetLineStyle(array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(255, 255, 255)));
// set default header data
            $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, '                    Modulo di registrazione paziente', PDF_HEADER_STRING, array(35, 55, 65), array(255, 255, 255));

// set header and footer fonts
            $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
            $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
            $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
            $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
            $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
            $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
            $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
            $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
            if (@file_exists(dirname(__FILE__) . '/lang/ita.php')) {
                require_once(dirname(__FILE__) . '/lang/ita.php');
                $pdf->setLanguageArray($l);
            }

// ---------------------------------------------------------
// set font
            $pdf->SetFont('helvetica', '', 10);

// add a page
            $pdf->AddPage();

            $html = <<<EOF
<!-- EXAMPLE OF CSS STYLE -->
<style>
    h1 {
        color: #6678b1;
                    
        font-family: arial;
        font-size: 17pt;
    }

.recibo, .recibos
{
	border-collapse: collapse;
	text-align: left;
}
.recibo th
{
	font-weight: bold;
	color: #039;
	border-bottom: 1px solid #6678b1;
}
.recibos th
{
	font-weight: bold;
	color: #039;
	border-bottom: 1px solid #ccc;
}
.recibo td, .recibos td
{
	border-bottom: 1px solid #ccc;
	height:10mm;
	color: #669;vertical-align:middle;
}
                    .recibos th, .recibos td{boder:1px solid #ccc !important;}
.none {
border:none !important;
}
                    hr{border-color:#ccc;}
</style><p></p>
                    <h1>Codice registrazione: $codice</h1>

<table class="recibo">
<tr><th width="20%">Nome Completo</th> <td width="30%"></td> <th width="20%">Data Nascita</th> <td width="30%"></td></tr>
</table>
<p></p>
                    <table class="recibo">
<tr><th width="20%">Telefono</th> <td width="30%"></td> <th width="20%">E-mail</th> <td width="30%"></td></tr>
</table>
<p></p>
<table class="recibo">
<tr><th width="20%">Indirizzo</th> <td width="40%"></td> <th width="10%">Civico</th> <td width="10%"></td><th width="10%">CAP</th> <td width="10%"></td></tr>
</table>
<p></p>  
    <table class="recibo">
<tr><th>Città</th> <td></td> <th>Provincia</th> <td></td><th>Regione</th> <td></td></tr>
</table>
<p></p>
<hr>
                    <p>Dental Italia SrL si riserva la facoltà di modificare, aggiungere o eliminare parti di queste condizioni, portandone a conoscenza gli interessati attraverso la pubblicazione delle modifiche nel sito o attraverso la posta elettronica. Ogni lettore è tenuto a verificare periodicamente queste condizioni per accertarsi di eventuali modifiche intervenute successivamente all’ultima consultazione del sito. In ogni caso l’utilizzo del sito e dei suoi servizi comporta l’accettazione dei cambiamenti nel frattempo intervenuti.
</p><p>In caso le variazioni non siano accettate, il lettore può annullare in ogni momento il proprio account scrivendo a privacy@easysmilegroupt.it o inviando una lettera raccomandata A/R indirizzata a Dental Italia SrL, con sede in Via Valadier n. 42 Roma, fermo restando che la prosecuzione dell’utilizzo dei servizi comporta l’accettazione delle nuove condizioni.</p>
                    
    <p></p><p></p><p></p>
          <table class="recibo">
<tr><th>Data</th><td style="border-bottom:1px solid white"></td><th>Firma</th></tr>
</table>   


EOF;


// output the HTML content
            $pdf->writeHTML($html, true, false, true, false, '');

// reset pointer to the last page
            $pdf->lastPage();

// ---------------------------------------------------------
//Close and output PDF document
            $pdf->Output('fattura_' . $tranID . '.pdf', 'D');

//============================================================+
// END OF FILE
//============================================================+

            break;
            
  
            
            
            
    }
    exit;
}
    
   