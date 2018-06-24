{include file="header_amm.tpl"}
{include file="sidebar.tpl"}
<div class=content-page>
<div class=content>
<div class=container>
<div class=row>
<div class=col-sm-12>
<h4 class="pull-left page-title">Lista delle prescrizioni {if isset($status)}{$satus}{/if}realizzate nella piattaforma</h4>
<ol class="breadcrumb pull-right">
<li><a href=#>BackOffice</a></li>
<li class=active>Prescrizioni</li>
</ol>
</div>
</div>
    <div class="row"><div class="col-md-12">
         {if !empty($accessError)}
                            <div class="alert alert-warning alert-bold-border fade in alert-dismissable margin-top"><i class="fa fa-fw fa-exclamation-triangle fa-3x text-warning" style="float:left; padding-right:20px"></i>
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Atenzione!<br>
                                        <span class="text-danger">{$accessError}</span></strong> 
                            </div>
				{/if}
                                {if !empty($error)}
                            <div class="alert alert-danger alert-bold-border fade in alert-dismissable margin-top"><i class="fa fa-fw fa-exclamation-triangle fa-3x text-danger" style="float:left; padding-right:20px"></i>
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Atenzione!<br>
                                        <span class="text-danger">{$error}</span></strong>
                            </div>
				{/if}
                                {if !empty($success)}
                            <div class="alert alert-success alert-bold-border fade in alert-dismissable margin-top"><i class="fa fa-fw fa-check fa-3x text-success" style="float:left; padding-right:20px"></i>
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Esito<br>
                                        <span class="text-success">{$success}</span></strong>
                            </div>
				{/if}
            
        </div></div>
<div class=row>
<div class=col-md-12>
<div class="panel panel-default">
<div class=panel-heading>
<h3 class=panel-title>Le mie prescrizioni</h3>
</div>
<div class=panel-body>
<div class=row>
<div class=col-sm-12>
<div class=m-b-30>
<a href="ordini.php?task=add" class="btn btn-primary waves-effect waves-light">Aggiungi una nuova prescrizione <i class="fa fa-plus"></i></a> 
</div>
</div>
</div>
<div class=row>
<div class="col-md-12 col-sm-12 col-xs-12">
    
<table class="table table-striped table-hover" id="datatable">
							<thead class="the-box dark full">
								<tr>
                                                                    <th>Data</th>    
                                                                    <th>Prescrizione per</th>
									<th>Codice</th>
                                                                        <th>Stato prescrizione/trattamento</th>
                                                                        <th>Azioni</th>
								</tr>
							</thead>
							<tbody>
                                                            {foreach $ordini as $key=>$value}
								<tr class="{cycle values='odd,even'}">
                                                                    <td><span class="hidden">{$value['dataApertura']|date_format:"%Y%m%d"}</span> {$value['dataApertura']|date_format:"%d/%m/%Y"}</td>
                                                                    <td>{$value['nome']} {$value['cognome']}</td>
                                                                    <td>{$value['codice']}</td>
                                                                    
                                                                    <td class="center"> {if $value['fkStatoOrdini'] == 1}<span class="label label-danger"><i class="fa fa-fw fa-times-circle"></i> IN ATTESA DI PAGAMENTO</span>{/if}{if $value['fkStatoOrdini'] == 2}<span class="label label-default"><i class="fa fa-fw fa-truck"></i> IN ATTESA DI RICEZIONE</span>{/if}{if $value['fkStatoOrdini'] == 3}<span class="label label-primary"><i class="fa fa-fw fa-cogs"></i> IN GESTIONE</span>{/if}{if $value['fkStatoOrdini'] == 4}<span class="label label-primary"><i class="fa fa-fw fa-clock-o"></i> PROPOSTA DI TRATTAMENTO</span>{elseif $value['fkStatoOrdini'] == 5}<span class="label label-primary"><i class="fa fa-fw fa-clock-o"></i> IN ATTESSA PAGAMENTO TRATTAMENTO</span>{elseif $value['fkStatoOrdini'] == 6}<span class="label label-success"><i class="fa fa-fw fa-check-circle"></i> IN ATTESSA PAGAMENTO SECONDO FRAZIONAMENTO</span>{elseif $value['fkStatoOrdini'] == 7}<span class="label label-success"><i class="fa fa-fw fa-check-circle"></i> COMPLETATO</span>{/if}</td>
                                                                    <td><a href="ordini.php?id={$value['idOrdine']}" class="btn btn-primary btn-perspective btn-xs waves-effect waves-light">Vedi dettagli <i class="fa fa-pencil"></i></a> {if $value['fkStatoOrdini'] == 1}<a href="checkout.php?task=prescrizione&id={$value['idOrdine']}" class="btn btn-success  btn-perspective btn-xs waves-effect waves-light">Pagare fattura<i class="fa fa-fw fa-dollar"></i></a>{/if}{if $value['fkStatoOrdini'] == 2} <a href="generatePDF.php?task=prescrizione&id={$value['idOrdine']}" class="btn btn-xs btn-perspective btn-pink waves-effect waves-light">Stampa prescrizione <i class="fa fa-fw fa-print"></i></a>{/if}</td>
								</tr>
                                                            {/foreach}
							</tbody>
						</table>

{include file="footer_aziende.tpl"}