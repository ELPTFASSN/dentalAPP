{include file="header_amm.tpl"}
{include file="sidebar.tpl"}

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Dettaglio prescrizione</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_amministratore.php">BackOffice</a></li>
                        <li><a href="ordini.php">Prescrizioni</a></li>
                        <li class="active">Dettaglio prescrizione</li>
                    </ol>
                </div>
            </div>

            {if !empty($error)}
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger alert-bold-border fade in animated flash">
                            <i class="fa fa-fw fa-5x fa-exclamation-circle text-danger" style="float:right;"></i>
                            <strong>Si sono verificati i seguenti errori:<br>
                                <span class="text-danger">{if isset($error)}{$error}{/if}</span></strong>
                        </div>
                    </div>
                </div>
            {/if}       
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Codice Prescrizione - {if isset($oOrdine['codice'])}{$oOrdine['codice']}{/if} </h3></div>
                        <div class="panel-body">
                            <div class='col-md-12'>
                                <div class="progress">
                                    <div class="progress-bar progress-lg progress-bar-primary progress-bar-striped progress-animated wow animated" role="progressbar" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100" style="width:{if $oOrdine['fkStatoOrdini'] == 1}25{/if}{if $oOrdine['fkStatoOrdini'] == 2}50{/if}{if $oOrdine['fkStatoOrdini'] == 3}75{/if}{if $oOrdine['fkStatoOrdini'] == 4}90{/if}{if $oOrdine['fkStatoOrdini'] == 5}90{/if}{if $oOrdine['fkStatoOrdini'] == 7}100{/if}%">
                                        <span class="sr-only">{if $oOrdine['fkStatoOrdini'] == 1}In atessa di pagamento{/if}{if $oOrdine['fkStatoOrdini'] == 2}In attesa di evasione{/if}{if $oOrdine['fkStatoOrdini'] == 3}Spedito{/if}{if $oOrdine['fkStatoOrdini'] == 4}Completato{/if} {if $oOrdine['fkStatoOrdini'] == 5}In attesa di pagamento per il trattamento{/if}{if $oOrdine['fkStatoOrdini'] == 5}Trattamento completato{/if}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix">

                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="pull-left m-t-30">
                                            <h4>
                                                <strong>Paziente</strong>: {$oOrdine['nomePaziente']} {$oOrdine['cognomePaziente']}
                                            </h4>
                                            <hr>{assign var="dientes" value=","|explode:$oOrdine['denti']}
                                            {assign var=cuenta value=0}
                                            {foreach $dientes as $key=>$value name=foo}
                                                {if $value<30}
                                                    {if $cuenta == 0}
                                                        <h4>Lista denti arcata superiore: {/if}
                                                            {assign var=cuenta value=1}<label class="label label-pink">{$value}</label> 
                                                            {if $smarty.foreach.foo.last} </h4> {/if}   
                                                        {/if}

                                                    {/foreach}
                                                        {assign var=cuenta value=0}
                                                        {foreach $dientes as $key=>$value name=foo}
                                                            {if $value>30}
                                                                {if $cuenta == 0}
                                                                    <h4>Lista denti arcata inferiore: {/if}{assign var=cuenta value=1} <label class="label label-pink">{$value}</label> 
                                                                        {if $smarty.foreach.foo.last} </h4> {/if}   
                                                                    {/if}
                                                                    {/foreach}

                                                                        <br><br>
                                                                        {if isset($oOrdine['foto']) && !empty($oOrdine['foto'])}<a download="arcate.jpg" href="/panel/images/prescrizioni/{$oOrdine['foto']}" class="btn btn-lg btn-primary btn-perspective waves-effect waves-light">Vedi foto delle arcate <i class="fa fa-fw fa-picture-o"></i></a>{/if}
                                                                </div>




                                                                <div class="pull-right m-t-30">
                                                                    <address>
                                                                        Indirizzo Spedizione:<br>
                                                                        <strong>{$oOrdine['nome']} {$oOrdine['cognome']}</strong><br>
                                                                        {$oOrdine['indirizzo']} {$oOrdine['numero']}<br>
                                                                        {$oOrdine['citta']} {$oOrdine['cap']}, {$oOrdine['provincia']}
                                                                        {$oOrdine['regione']}<br>
                                                                    </address>
                                                                    <hr>
                                                                    <p><strong>Data apertura: </strong> {$oOrdine['dataApertura']|date_format:" %e %B  %Y - %H:%M"}</p>
                                                                {if $oOrdine['dataAggiornamento']!='0000-00-00 00:00:00'}     <p><strong>Data aggiornamento: </strong>{$oOrdine['dataAggiornamento']|date_format:" %e %B  %Y - %H:%M"}</p>{/if}
                                                                    <p><strong>Stato Ordine: </strong> <span class="label label-pink">{if $oOrdine['fkStatoOrdini'] == 1}In atessa di pagamento{/if}{if $oOrdine['fkStatoOrdini'] == 2}In attesa di ricezione{/if}{if $oOrdine['fkStatoOrdini'] == 3}Spedito{/if}{if $oOrdine['fkStatoOrdini'] == 4}Proposta di trattamento in valutazione{/if}{if $oOrdine['fkStatoOrdini'] > 5}Trattamento accettato{/if}</span></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                                {if $oOrdine['fkStatoOrdini'] > 5}{else}
                                                        <div class="m-h-50"></div>
                                                        {if !empty($oOrdine['cera']) || !empty($oOrdine['superiore']) || !empty($oOrdine['inferiore'])}
                                                            <div class="col-md-12 alert alert-warning">
                                                                <h4>Si invia:</h4><ul>
                                                                    {if !empty($oOrdine['cera'])}<li>Cera centrica</li>{/if}
                                                                    {if !empty($oOrdine['superiore'])}<li>Impronta superiore</li>{/if}
                                                                    {if !empty($oOrdine['inferiore'])}<li>Impronta inferiore</li>{/if}
                                                                </ul>
                                                            </div>
                                                        {/if}
                                                        {if !empty($oOrdine['note'])}
                                                            <div class="col-md-12 alert alert-info">
                                                                <h4>Note dal medico:</h4>{$oOrdine['note']}
                                                            </div>
                                                        {/if}
                                                        
                                                        {if $oOrdine['fkStatoOrdini'] == 1} 
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="table-responsive">
                                                                        <table class="table m-t-30">
                                                                            <thead>
                                                                                <tr><th>#</th>
                                                                                    <th>Prodotto</th>
                                                                                    <th>Descrizione</th>
                                                                                    <th>Quantit&agrave;</th>
                                                                                    <th>Prezzo</th>
                                                                                    <th>Totale</th>
                                                                                </tr></thead>
                                                                            <tbody>
                                                                                {foreach $prodotti as $key=>$value}
                                                                                    <tr class="{cycle values='odd,even'}">

                                                                                        <td>{$value['idProdotto']}</td>
                                                                                        <td>{$value['nome']}</td>
                                                                                        <td>{$value['description']} {if $value['idProdotto'] =='1'}- Codice: {$oOrdine['codice']}{/if}</td>
                                                                                        <td>{$value['quantita']}</td>

                                                                                        <td>
                                                                                            {$value['prezzo']|number_format:2:",":"."}&euro;
                                                                                        </td>
                                                                                        <td>{math assign=total equation="x * y" x=$value['quantita'] y=$value['prezzo']} {$total|number_format:2:",":"."}&euro;</td>
                                                                                    </tr>
                                                                                {/foreach}
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row" style="border-radius: 0px;">
                                                                <div class="col-md-3 col-md-offset-9">
                                                                    <hr>
                                                                    <h3 class="text-right">Totale: {$oOrdine['prezzo']|number_format:2:",":"."}&euro;</h3>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix">

                                                            </div>
                                                            <p><hr></p>
                                                        {else}
                                                            
                                                            {if !empty($oOrdine['dataRitiro'])}
                                                                <div class="col-md-2 alert alert-warning">
                                                                    <h4>Data ritiro: </h4>{$oOrdine['dataRitiro']|date_format:" %e %B  %Y "}
                                                                </div>
                                                            {/if}
                                                            {if !empty($oOrdine['noteCorriere'])}
                                                                <div class="col-md-offset-1 col-md-9 alert alert-warning">
                                                                    <h4>Note per il corriere:</h4>{$oOrdine['noteCorriere']}
                                                                </div>
                                                            {/if}
                                                            <div class="clearfix"></div>
                                                            {if $smarty.session.utente['idRuoloUtente'] == $smarty.const.AMMINISTRATORE && $oOrdine['fkStatoOrdini']=="3" } 
                                                                <hr>
                                                                <h3>Proposta di trattamento</h3>
                                                                <br>
                                                                <form method="POST" class="form" name="trattamento" action="ordini.php" enctype="multipart/form-data">
                                                                    <input type="hidden" name="idOrdine" value="{$oOrdine['idOrdine']}"> <input type="hidden" name="trattamento" value="true">
                                                               
                                                                    <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        
                                                                        <label>Caricare il File CAD</label>
                                                                        
                                                        <div class="input-group">
                                                            <input type="file" class="input-lg form-control" name="file">
                                                            
                                                            </div>
                                                       
                                                    </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        
                                                                        <label>Numero mascherine superiori</label>
                                                                        <div class="spinner">
                                                        <div class="input-group">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-up btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                            <input type="text" class="spinner-input form-control" maxlength="3" name="massup">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-down btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Numero mascherine inferiori</label>
                                                                        <div class="spinner">
                                                        <div class="input-group">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-up btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                            <input type="text" class="spinner-input form-control" maxlength="3" name="masinf" >
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-down btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Numero mascherine <strong>bis</strong> superiori</label>
                                                                        <div class="spinner">
                                                        <div class="input-group">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-up btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                            <input type="text" class="spinner-input form-control" maxlength="3" name="massupbis">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-down btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Numero mascherine <strong>bis</strong> inferiori</label>
                                                                        <div class="spinner">
                                                        <div class="input-group">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-up btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                            <input type="text" class="spinner-input form-control" maxlength="3" name="masinfbis" >
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-down btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                        <input type="hidden" name="idOrdine" value="{$oOrdine['codice']}">
                                                                    </div>
                                                                </div>





<div class="clearfix"></div>
                                                            {/if}
                                                            <p><hr></p>
                                                            

                                                        {/if}

                                                        {if $smarty.session.utente['idRuoloUtente'] == $smarty.const.AMMINISTRATORE} 
                                                            <div class="hidden-print">
                                                                <div class="pull-right">
                                                                  {if $oOrdine['fkStatoOrdini']=="3" }  <button class="btn btn-lg btn-primary waves-effect waves-light">Genera il riepilogo del trattamento <i class="fa fa-fw fa-file-text-o"></i></button>{/if}
                                                                  {if $oOrdine['fkStatoOrdini']=="2" }  <a href="ordini.php?task=stato&id={$oOrdine['idOrdine']}&status=3" class="btn btn-lg btn-primary waves-effect waves-light">Prescrizione Ricevuta <i class="fa fa-fw fa-check"></i></a>{/if}
                                                                </div>
                                                            </div>
                                                        </form>
                                                        {else}<div class="hidden-print">
                                                                <div class='col-md-12'>
                                                                    
                                                                        </div>

                                                                    </div>{/if}
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                         {/if}                
{if $oOrdine['fkStatoOrdini'] == 4 || $oOrdine['fkStatoOrdini'] == 5 || $oOrdine['fkStatoOrdini'] == 6}
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading"><h3 class="panel-title">File CAD della prescrizione {if isset($oOrdine['codice'])}{$oOrdine['codice']}{/if}</h3></div>
                                                        <div class="panel-body">
                                                            <div class='col-md-12'>
                                                                <table class="table table-striped table-hover" id="datatable">
                                                                    <thead class="the-box dark full">
                                                                        <tr>
                                                                            <th>Data inserimento</th>
                                                                            <th>Stato della proposta</th>
                                                                            <th>Data revisione</th>
                                                                            <th>Note del medico</th>
                                                                            <th>Azioni</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        {foreach $trattamento as $key=>$value}
                                                                            <tr class="{cycle values='odd,even'}">
                                                                                <td>{$value['fechaApertura']|date_format:"%d/%m/%Y %H:%M"}</td>
                                                                                <td>{if $value['estado']=='1'}<label class='label label-primary'><i class="fa fa-fw fa-clock-o"></i> IN ATTESA VALUTAZIONE MEDICO</label>{/if}{if $value['estado']=='2'}<label class='label label-danger'><i class="fa fa-fw fa-times"></i> TRATTAMENTO RIFIUTATO</label>{/if}{if $value['estado']=='3'}<label class='label label-success'><i class="fa fa-fw fa-check"></i> TRATTAMENTO ACCETTATO IN ATTESA DI PAGAMENTO</label>{/if}{if $value['estado']=='4'}<label class='label label-success'><i class="fa fa-fw fa-check"></i> TRATTAMENTO PAGATO</label>{/if}{if $value['estado']=='5'}<label class='label label-primary'><i class="fa fa-fw fa-euro"></i> IN ATTESA PAGO PRIMO FRAZIONAMENTO</label>{/if}</td>
                                                                                <td>{if !empty($value['fechaActualizacion'])}{$value['fechaActualizacion']|date_format:"%d/%m/%Y %H:%M"}{else}N/A{/if}</td>
                                                                                <td>{if !empty($value['notas'])}{$value['notas']}{else}-{/if}</td>                                                                  
                                                                                <td class="center">{if $value['estado']!='0'}{if $value['estado']=='3' || $value['estado']=='5'}<a class="btn btn-xs btn-perspective btn-success waves-effect waves-light" href="trattamenti.php?task=trattamento&id={$value['idTrattamento']}"><i class="fa fa-fw fa-euro"></i> Avvia pagamento</a>{else}<a class="btn btn-xs btn-perspective btn-primary waves-effect waves-light" href="trattamenti.php?id={$value['idTrattamento']}"><i class="fa fa-fw fa-pencil"></i> Vedi trattamento</a>{/if}{/if} <a class="btn btn-xs btn-perspective btn-primary waves-effect waves-light" href="images/prescrizioni/{$value['cad']}"><i class="fa fa-fw fa-file-image-o"></i> Vedi FILE CAD</a> </td>
                                                                               
                                                                            </tr>
                                                                        {/foreach}
                                                                    </tbody>
                                                                </table>
                                                                <hr>
                                                                {if $smarty.session.utente['idRuoloUtente'] == $smarty.const.AMMINISTRATORE}       <div class="hidden-print">
                                                                        <div class="pull-right">
                                                                            <a href="javascript:;" class="md-trigger btn btn-primary waves-effect waves-light" data-modal="modal-16">Aggiungi File CAD <i class="fa fa-plus"></i></a>
                                                                        </div>
                                                                    </div>{/if}
                                                                </div>
                                                            </div>
                                                        </div></div></div>
                                                                
                                                                </div>
                                                                <div class="md-modal md-effect-16" id="modal-16" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="md-content">
                                            <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="myModalLabel">Aggiungi proposta di trattamento</h4>
                                                    </div>
                                            <div>
                                                <form method="POST" class="form" name="trattamento" action="ordini.php" enctype="multipart/form-data">
                                                                    <input type="hidden" name="idOrdine" value="{$oOrdine['idOrdine']}"> <input type="hidden" name="trattamento" value="true">
                                                                    <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        
                                                                        <label>Caricare il File CAD</label>
                                                                        
                                                        <div class="input-group">
                                                            <input type="file" class="input-lg form-control" name="file">
                                                            
                                                            </div>
                                                       
                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        
                                                                        <label>Numero mascherine superiori</label>
                                                                        <div class="spinner">
                                                        <div class="input-group">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-up btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                            <input type="text" class="spinner-input form-control" maxlength="3" name="massup">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-down btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Numero mascherine inferiori</label>
                                                                        <div class="spinner">
                                                        <div class="input-group">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-up btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                            <input type="text" class="spinner-input form-control" maxlength="3" name="masinf" >
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-down btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Numero mascherine <strong>bis</strong> superiori</label>
                                                                        <div class="spinner">
                                                        <div class="input-group">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-up btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                            <input type="text" class="spinner-input form-control" maxlength="3" name="massupbis">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-down btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Numero mascherine <strong>bis</strong> inferiori</label>
                                                                        <div class="spinner">
                                                        <div class="input-group">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-up btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                            <input type="text" class="spinner-input form-control" maxlength="3" name="masinfbis" >
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-down btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                        <input type="hidden" name="idOrdine" value="{$oOrdine['codice']}">
                                                                    </div>
                                                                </div>
                                                                    <div class="col-md-12">
                                                                        <hr>
                                                                     <div class="pull-right">
                                                                         <a href="ordini.php" class="btn btn-lg btn-danger waves-effect waves-light">Torna indietro</a>
                                                <button class="btn btn-lg btn-primary waves-effect waves-light" type="submit">Invia</button>
                                                                    </div>
                                                                    </div>
                                                </form>
                                                                    <div class="clearfix"><br><br></div>
                                            </div>
                                        </div>
                                    </div>
                                                                    <div class="md-overlay"></div><!-- the overlay element -->
                                                 {/if}              
<p><a href="ordini.php" class="btn btn-lg btn-danger waves-effect waves-light"><i class="fa fa-backward"></i> Torna indietro</a></p>
                                                {include file="footer_modifica_3.tpl"}