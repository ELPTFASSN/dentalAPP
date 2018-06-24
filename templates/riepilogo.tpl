{include file="header_amm.tpl"}
{include file="sidebar.tpl"}
{assign var="iva" value=$smarty.session.utente['IVA']/100}
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
                        <div class="panel-heading"><h3 class="panel-title">Riepilogo trattamento per prescrizione {if isset($idOrdine)}{$idOrdine}{/if} </h3></div>
                        <div class="panel-body">
                            
                            <div class="col-md-6">
                    <div class="panel panel-border panel-primary">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Mascherine </h3> 
                        </div> 
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class='list-group-item'>Numero Mascherine Totali Superiori: <span class="badge badge-pink text-big">{$massup}</span></li>
                                <li class='list-group-item'>Numero Mascherine Totali Inferiori: <span class="badge badge-pink text-big">{$masinf}</span></li>
                                <li class='list-group-item'>Numero Mascherine Totali: <span class="badge badge-pink text-big">{$massup+$masinf}</span></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                            <div class="col-md-6">
                    <div class="panel panel-border panel-primary">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Mascherine Bis</h3> 
                        </div> 
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class='list-group-item'>Numero Mascherine bis Totali Superiori: <span class="badge badge-pink text-big">{if empty($massupbis)}0{else}{$massupbis}{/if}</span></li>
                                <li class='list-group-item'>Numero Mascherine bis Totali Inferiori: <span class="badge badge-pink text-big">{if empty($masinfbis)}0{else}{$masinfbis}{/if}</span></li>
                                <li class='list-group-item'>Numero Mascherine bis Totali: <span class="badge badge-pink text-big">{$massupbis+$masinfbis}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                        </div>
                    </div>
                </div>
            </div>
                                        <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Soluzioni per il pagamento </h3></div>
                        <div class="panel-body">
                                                 
{if !isset($primo)}
                                <div class="col-md-12">
                    <div class="panel panel-border panel-primary">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Soluzione Unica</h3> 
                        </div> 
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class='list-group-item'>{$prez['description']}: <span class="pull-right text-big"><small>{$massup+$masinf} x </small>{$prez['prezzo']|number_format:2:",":"."} &euro;</span></li>
                                <li class='list-group-item'>Acconto prescrizione: <span class="pull-right text-big">- {$acconto|number_format:2:",":"."} &euro;</span></li>
                                {if $smarty.session.utente['IVASINO']}{assign var="ivo" value=$prez['prezzo']*$iva}<li class='list-group-item penultimo'>IVA: <span class="pull-right text-big"> {$smarty.session.utente['IVA']}% {$ivo|number_format:2:",":"."} &euro;</span></li>{assign var=prezzo value=$prezzo+$ivo}{/if}
                                <li class='list-group-item ultimo'><strong>Prezzo totale:</strong> <span class="pull-right text-bigo">{$prezzo|number_format:2:",":"."} &euro;</span></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                                {/if}
                                
                                {if isset($primo)}
                                    <div class="col-md-12">
                    <div class="panel panel-border panel-primary">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Soluzione Unica</h3> 
                        </div> 
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class='list-group-item'>Prezzo mascherine abbonato primo range: <span class="pull-right text-big"><small>{$frazionamenti['min']} x </small>{$primo|number_format:2:",":"."} &euro;</span></li>
                                {if !isset($terzo)} <li class='list-group-item'>Prezzo mascherine abbonato secondo range: <span class="pull-right text-big"><small>{$mastot-$frazionamenti['min']} x </small>{$secondo|number_format:2:",":"."} &euro;</span></li>{/if}
                                {if isset($terzo)}
                                <li class='list-group-item'>Prezzo mascherine abbonato secondo range: <span class="pull-right text-big"><small>{$frazionamenti['max']-$frazionamenti['min']} x </small>{$secondo|number_format:2:",":"."} &euro;</span></li>
                                <li class='list-group-item'>Prezzo mascherine abbonato terzo range: <span class="pull-right text-big"><small>{$mastot-$frazionamenti['max']} x </small>{$terzo|number_format:2:",":"."} &euro;</span></li>{/if}
                                <li class='list-group-item'>Acconto prescrizione: <span class="pull-right text-big">- {$acconto|number_format:2:",":"."} &euro;</span></li>
                               {if $smarty.session.utente['IVASINO']}{assign var="ivo" value=$frazionamenti['min']*$iva}<li class='list-group-item penultimo'>IVA: <span class="pull-right text-big"> {$smarty.session.utente['IVA']}% {$ivo|number_format:2:",":"."} &euro;</span></li>{assign var=prezzo value=$prezzo+$ivo}{/if}
                                <li class='list-group-item ultimo'><strong>Prezzo totale unica soluzione:</strong> <span class="pull-right text-bigo"><strong id='preciaco'>{$prezzo|number_format:2:",":"."}</strong> &euro;</span></li>
                                
                            </ul>
                                <div class="col-md-4 col-md-offset-8">
                                   <div class="form-group">
                                <label>Sconto per la soluzione unica (in &euro;)</label>
                                                                        <div class="spinner" id="spinner">
                                                        <div class="input-group">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-up btn-primary waves-effect waves-light" id="mas">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                            <input type="text" class="spinner-input form-control" maxlength="3" id='sconto' name="sconto" >
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-down btn-primary waves-effect waves-light" id="menos">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                
                                                                    </div>
                        </div>
                                </div>
                    </div>
                </div>
                                <div class='clearfix'></div>
                                <div class="col-md-6">
                    <div class="panel panel-border panel-primary">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Primo Frazionamento</h3> 
                        </div> 
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class='list-group-item'>Numero Coppie Mascherine: <span class="pull-right text-big">{$numeropar} </span></li>
                                <li class='list-group-item'>Numero Mascherine Totali: <span class="pull-right text-big">{2*$numeropar} </span></li>
                                {if ($numeropar+$numeropar)<$segundeja}
                                <li class='list-group-item '>Prezzo Mascherine Totali: <span class="pull-right text-big">{$numeropar+$numeropar} x {$primo|number_format:2:",":"."} &euro;</span></li>
                                {else}
                                <li class='list-group-item '>Prezzo mascherine primo range: <span class="pull-right text-big">{$segundeja} x {$primo|number_format:2:",":"."} &euro;</span></li>
                                {if !isset($terzo)}<li class='list-group-item '>Prezzo mascherine secondo range: <span class="pull-right text-big">{($numeropar+$numeropar)-$segundeja} x {$secondo|number_format:2:",":"."} &euro;</span></li>{/if}
                                 {if isset($terzo)}
                                 <li class='list-group-item '>Prezzo mascherine secondo range: <span class="pull-right text-big">{$frazionamenti['max']-$frazionamenti['min']} x {$secondo|number_format:2:",":"."} &euro;</span></li>
                                 <li class='list-group-item'>Prezzo mascherine terzo range: <span class="pull-right text-big"><small>{$tercereja} x </small>{$terzo|number_format:2:",":"."} &euro;</span></li>{/if}
                                {/if}
                                <li class='list-group-item '>Mora Frazionamento: <span class="pull-right text-big">1 x {$mora|number_format:2:",":"."} &euro;</span></li>
                                <li class='list-group-item'>Acconto prescrizione: <span class="pull-right text-big">- {$acconto|number_format:2:",":"."} &euro;</span></li>
                                {if $smarty.session.utente['IVASINO']}<li class='list-group-item penultimo'>IVA: <span class="pull-right text-big"> {$smarty.session.utente['IVA']}% {$precioprimo*($smarty.session.utente['IVA'])|number_format:2:",":"."} &euro;</span></li>{/if}
                                <li class='list-group-item ultimo'><strong>Prezzo totale primo frazionamento:</strong> <span class="pull-right text-bigo"><strong id='preciaco2'>{$precioprimo|number_format:2:",":"."}</strong> &euro;</span></li>
                                
                            </ul>
                                <div class="col-md-8 col-md-offset-4">
                                   <div class="form-group">
                                <label>Sconto per il primo frazionamento (in &euro;)</label>
                                                                        <div class="spinner" id="spinner2">
                                                        <div class="input-group">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-up btn-primary waves-effect waves-light" id="mas2">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                            <input type="text" class="spinner-input form-control" maxlength="3" id='sconto2' name="sconto2" >
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-down btn-primary waves-effect waves-light" id="menos2">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                
                                                                    </div>
                        </div>
                        </div>
                    </div>
                </div>
                           {/if}    
                           {if isset($secondo)}
                                <div class="col-md-6">
                    <div class="panel panel-border panel-primary">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Secondo Frazionamento</h3> 
                        </div> 
                        <div class="panel-body">
                            <ul class="list-group">
                                {if isset($sinsup)}<li class='list-group-item'>Numero Singole Mascherine Superiori: <span class="pull-right text-big">{$sinsup}</span></li>{/if}
                                {if isset($sininf)}<li class='list-group-item'>Numero Singole Mascherine Inferiori: <span class="pull-right text-big">{$sininf}</span></li>{/if}
                                <li class='list-group-item '>Numero Mascherine Totali: <span class="pull-right text-big">{$sinsup+$sininf}</span></li>
                                {if !isset($tercereja)}<li class='list-group-item '>Prezzo abbonato secondo range: <span class="pull-right text-big">{$sinsup+$sininf} x {$secondo|number_format:2:",":"."} &euro;</span></li>{/if}
                                 {if isset($terzo)}<li class='list-group-item '>Prezzo abbonato terzo range: <span class="pull-right text-big"><small>{$mastot-$tercereja-$frazionamenti['max']} x </small>{$terzo|number_format:2:",":"."} &euro;</span></li>{/if}
                                 {if $smarty.session.utente['IVASINO']}<li class='list-group-item penultimo'>IVA: <span class="pull-right text-big"> {$smarty.session.utente['IVA']}% {$segundafrac*($smarty.session.utente['IVA'])|number_format:2:",":"."} &euro;</span></li>{/if}
                                 <li class='list-group-item ultimo'><strong>Prezzo totale secondo frazionamento:</strong> <span class="pull-right text-bigo"> <strong id='preciaco3'>{$segundafrac|number_format:2:",":"."}</strong> &euro;</span></li>
                                
                            </ul>
                                <div class="col-md-8 col-md-offset-4">
                                   <div class="form-group">
                                <label>Sconto per il secondo frazionamento (in &euro;)</label>
                                                                        <div class="spinner">
                                                        <div class="input-group">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-up btn-primary waves-effect waves-light" id="mas3">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                            <input type="text" class="spinner-input form-control" maxlength="3" id='sconto3' name="sconto3" >
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-down btn-primary waves-effect waves-light" id="menos3">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                
                                                                    </div>
                        </div>
                        </div>
                    </div>
                </div>
                           {/if}  
                            <div class="clearfix"></div>
                            <form method="POST" action="ordini.php">
                                
                                  <input type="hidden" id='precio' name="precio" value="{$prezzo}"><input type="hidden" name="precio2" id='precio2' value="{$precioprimo}"><input type="hidden" name="precio3" id='precio3' value="{$segundafrac}">
                                  <input type="hidden" name="massup" value="{$massup}"><input type="hidden" name="masinf" value="{$masinf}"><input type="hidden" name="idOrdine" value="{$idOrdine}">
                                   <input type="hidden" name="massupbis" value="{$massupbis}"><input type="hidden" name="masinfbis" value="{$masinfbis}">  <input type="hidden" name="cad" value="{$cad}">
                            <div class="pull-right"><a href="ordini.php" class="btn btn-lg btn-danger btn-perspective waves-effect waves-light">Torna Indietro</a> <button class="btn btn-primary btn-lg btn-perspective waves-effect waves-light" type="submit">Invia Trattamento <i class="fa fa-fw fa-check"></i></button></div>
                            </form>
                        </div>
                    </div>
                </div>
                                        </div>
                                                </div>
                                            </div>
                            

                         </div>
                          
                                                {include file="footer_modifica_3.tpl"}