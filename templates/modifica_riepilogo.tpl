{include file="header_amm.tpl"}
{include file="sidebar.tpl"}

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Dettaglio trattamento</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_amministratore.php">BackOffice</a></li>
                        <li><a href="ordini.php">Prescrizioni</a></li>
                        <li class="active">Dettaglio trattamento</li>
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
                        <div class="panel-heading"><h3 class="panel-title">Proposta di trattamento per la prescrizione {if isset($trattamento['codice'])}{$trattamento['codice']}{/if}  </h3></div>
                        <div class="panel-body">
                            <div class="col-md-6">  <h4>Paziente: {$trattamento['nomePaziente']} {$trattamento['cognomePaziente']}</h4> </div>
                            <div class="col-md-6"> <h4>Codice prescrizione: {$trattamento['codice']}</h4> </div>
                            <div class="col-md-6">  <h4>Data apertura: {$trattamento['fechaApertura']|date_format:"%d/%m/%Y"} </h4> </div>
                             {if !empty($trattamento['fechaActualizacion'])} <div class="col-md-6"> <h4>Data aggiornamento : {$trattamento['fechaActualizacion']|date_format:"%d/%m/%Y"}</h4> </div>{/if}
                            <div class="col-md-6"> <h4>Lista denti: {$trattamento['denti']}</h4> </div>
                            <div class="col-md-6">  <h4>Stato trattamento: {if $trattamento['estado']=="1"}<label class="label label-primary"><i class="fa fa-fw fa-clock-o"></i> In attessa di valutazione dal medico</label>{elseif $trattamento['estado']=="2"}<label class="label label-danger"><i class="fa fa-fw fa-times"></i> Trattamento rifiutato</label>{elseif $trattamento['estado']>"3"}<label class="label label-success"><i class="fa fa-fw fa-check"></i> Trattamento accettato</label>{/if} </h4> </div>
                            {if $trattamento['estado']>"3"} <div class="col-md-6"> <h4>Stato pagamento : {if $trattamento['fkStatoPagamento'] =='1'}<label class="label label-primary"><i class="fa fa-fw fa-clock-o"></i> In attesa di pagamento</label>{/if}{if $trattamento['fkStatoPagamento'] =='2'}<label class="label label-primary"><i class="fa fa-fw fa-dollar"></i> Prima frazione pagata</label>{/if}{if $trattamento['fkStatoPagamento'] >'2'}<label class="label label-success"><i class="fa fa-fw fa-check"></i> Pagato</label>{/if}</h4> </div>{/if}
                            {if !empty($trattamento['notas'])}
                                
                            <div class="col-md-12 alert alert-info m-t-20">
                                <h4>Note dal medico:</h4>
                                <p>{$trattamento['notas']}</p>
                            </div>
                            <br>
                            {/if}
                            <div class="clearfix"></div><br>
                                                     <div class="col-md-6">
                    <div class="panel panel-border panel-primary">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Mascherine </h3> 
                        </div> 
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class='list-group-item'>Numero Mascherine Totali Superiori: <span class="badge badge-pink text-big">{$trattamento['masSup']}</span></li>
                                <li class='list-group-item'>Numero Mascherine Totali Inferiori: <span class="badge badge-pink text-big">{$trattamento['masInf']}</span></li>
                                <li class='list-group-item'>Numero Mascherine Totali: <span class="badge badge-pink text-big">{$trattamento['masSup']+$trattamento['masInf']}</span></li>
                                
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
                                <li class='list-group-item'>Numero Mascherine bis Totali Superiori: <span class="badge badge-pink text-big">{if empty($trattamento['masSupBis'])}0{else}{$trattamento['masSupBis']}{/if}</span></li>
                                <li class='list-group-item'>Numero Mascherine bis Totali Inferiori: <span class="badge badge-pink text-big">{if empty($trattamento['masInfBis'])}0{else}{$trattamento['masInfBis']}{/if}</span></li>
                                <li class='list-group-item'>Numero Mascherine bis Totali: <span class="badge badge-pink text-big">{$trattamento['masSupBis']+$trattamento['masInfBis']}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                        

                                           
{if !isset($primo)}
                                <div class="col-md-12">
                    <div class="panel panel-border panel-primary">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Soluzione Unica</h3> 
                        </div> 
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class='list-group-item'>{$prez['description']}: <span class="pull-right text-big"><small>{$trattamento['masSup']+$trattamento['masInf']} x </small>{$prez['prezzo']|number_format:2:",":"."} &euro;</span></li>
                                <li class='list-group-item'>Acconto prescrizione: <span class="pull-right text-big">- {$acconto|number_format:2:",":"."} &euro;</span></li>
                              {if $smarty.session.utente['IVASINO']}  <li class='list-group-item penultimo'>IVA: <span class="pull-right text-big"> 22% {$trattamento['prezzoTot']*(0.22)|number_format:2:",":"."} &euro;</span></li>{/if}
                                <li class='list-group-item ultimo'><strong>Prezzo totale:</strong> <span class="pull-right text-bigo">{$trattamento['prezzoTot']|number_format:2:",":"."} &euro;</span></li>
                                
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
                               {if $smarty.session.utente['IVASINO']} <li class='list-group-item penultimo'>IVA: <span class="pull-right text-big"> (22%) {math equation="x*y" x=$prezzo y=0.22 format="%.2f"} &euro;</span></li>{/if}
                                <li class='list-group-item ultimo'><strong>Prezzo totale unica soluzione:</strong> <span class="pull-right text-bigo"><strong id='preciaco'>{math equation="x*y" x=$prezzo y=1.22 format="%.2f"}</strong> &euro;</span></li>
                                
                            </ul>
                                
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
                                <li class='list-group-item '>Acconto prescrizione: <span class="pull-right text-big">- {$acconto|number_format:2:",":"."} &euro;</span></li>
                               {if $smarty.session.utente['IVASINO']} <li class='list-group-item penultimo'>IVA: <span class="pull-right text-big"> (22%) {math equation="x*y" x=$precioprimo y=0.22 format="%.2f"} &euro;</span></li>{/if}
                                <li class='list-group-item ultimo'><strong>Prezzo totale primo frazionamento:</strong> <span class="pull-right text-bigo"><strong id='preciaco2'>{math equation="x*y" x=$precioprimo y=1.22 format="%.2f"}</strong> &euro;</span></li>
                                
                            </ul>
                       
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
                                 {if $smarty.session.utente['IVASINO']}<li class='list-group-item penultimo'>IVA: <span class="pull-right text-big"> (22%) {math equation="x*y" x=$segundafrac y=0.22 format="%.2f"} &euro;</span></li>{/if}
                                 <li class='list-group-item ultimo'><strong>Prezzo totale secondo frazionamento:</strong> <span class="pull-right text-bigo"> <strong id='preciaco3'>{math equation="x*y" x=$segundafrac y=1.22 format="%.2f"}</strong> &euro;</span></li>
                                
                            </ul>
                            
                        </div>
                    </div>
                </div>
                           {/if}  
                            <div class="clearfix"></div>
                         
                  {if $trattamento['estado']!="2"}              
                                
                                   {if $smarty.session.utente['idRuoloUtente'] == $smarty.const.AMMINISTRATORE} 
                            <div class="pull-right"><a href="ordini.php" class="btn btn-lg btn-danger btn-perspective waves-effect waves-light">Torna Indietro</a> </div>
                            {else}
                                <hr>
                                <form method="POST" action="trattamenti.php" id="formulario">
                                    <input type="hidden" name="decision" id="decision" value="false">
                                    <input type="hidden" name="idOrdine" value="{$trattamento['idTrattamento']}">
                                    <input type="hidden" name="pastaunica" value="true">
                                    <input type="hidden" name="fraccionado" value="false">
                                    {if isset($primo)}<div class="form-group">
                                            <label>Forma di pagamento</label>
                                            <select class="form-control input-lg" name="pago"><option value="todo">Soluzione unica</option><option value="frac">Pago frazionato</option></select>
                                        </div>{/if}
                                 <div class="col-md-12">
                                    <h4>Note:</h4>
                                    <textarea class="form-control" name="note" rows="6"></textarea>
                                </div>
                                <div class="clearfix"></div>
                                <p>&nbsp;</p>
                                <div class="pull-right"><a href="ordini.php" class="btn btn-lg btn-primary btn-perspective waves-effect waves-light"><i class="fa fa-fw fa-backward"></i> Torna indietro</a> <button id="negativo" class="btn btn-lg btn-danger btn-perspective waves-effect waves-light"><i class="fa fa-fw fa-times"></i> Rifiuta trattamento</button> <button type="button" onclick="daleCana()" id="positivo" class="btn btn-lg btn-success btn-perspective waves-effect waves-light"><i class="fa fa-fw fa-check"></i> Accetta trattamento e avvia il pagamento</button></div>
                                </form>
                            {/if}
                          {/if}       
                        </div>
                    </div>
                </div>
                                        </div>
                                                </div>
                                            </div>
                            

                         </div>
                          
                                                {include file="footer_modifica_3.tpl"}