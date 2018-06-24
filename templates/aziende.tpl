{include file="header_amm.tpl"}
{include file="sidebar.tpl"}
<div class=content-page>
<div class=content>
<div class=container>
<div class=row>
<div class=col-sm-12>
<h4 class="pull-left page-title">Lista delle aziende iscritte alla piattaforma</h4>
<ol class="breadcrumb pull-right">
<li><a href=#>BackOffice</a></li>
<li class=active>Aziende</li>
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
                            <div class="alert alert-danger alert-bold-border fade in alert-dismissable margin-top"><i class="fa fa-fw fa-exclamation-triangle fa-3x text-warning" style="float:left; padding-right:20px"></i>
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
<h3 class=panel-title>Tabella Aziende</h3>
</div>
<div class=panel-body>
<div class=row>
<div class=col-sm-12>
<div class=m-b-30>
<a href="generatePDF.php?task=azienda" class="btn btn-success waves-effect waves-light">Genera codice di iscrizione <i class="fa fa-plus"></i></a> <a href="aziende.php?status=abbonato" class="btn btn-primary waves-effect waves-light {if isset($status) && $status=='abbonato'}disabled{/if}">Vedi solo abbonati <i class="fa fa-star"></i></a> <a href="aziende.php?status=attesa" class="btn btn-danger waves-effect waves-light {if isset($status) && $status=='attesa'}disabled{/if}">Vedi solo in attesa <i class="fa fa-clock-o"></i></a>
</div>
</div>
</div>
<div class=row>
<div class="col-md-12 col-sm-12 col-xs-12">
    
<table class="table table-striped table-hover" id="datatable">
							<thead class="the-box dark full">
								<tr>
									<th>Denominazione</th>
                                                                        <th>Partita IVA</th>
									<th>Provincia</th>
                                                                        <th>Abbonato</th>
									<th>Stato</th>
                                                                        <th>Azioni</th>
								</tr>
							</thead>
							<tbody>
                                                            {foreach $aziende as $key=>$value}
								<tr class="{cycle values='odd,even'}">
                                                                    {assign var=foo value=$value['idAzienda']}
                                                                    <td>{$value['denominazione']}</td>
                                                                    <td>{$value['partitaIVA']}</td>
                                                                    <td>{$value['provincia']}</td>
                                                                        <td class="center">{if $value['abbonamento'] == 1} <button class="btn btn-xs btn-icon waves-effect waves-light btn-primary btn-block"> <i class="fa fa-star"></i> </button> {else}  <button class="btn btn-icon waves-effect waves-light btn-danger btn-block btn-xs"> <i class="fa fa-remove"></i> </button>{/if}</td>
                                                                        <td class="center"> {if $value['stato'] == 0}<span class="label label-danger"><i class="fa fa-fw fa-times-circle"></i> NON ATTIVO</span>{else}{if $value['active'] == 1}<span class="btn btn-xs btn-danger"><i class="fa fa-fw fa-times-circle"></i> NON ATTIVO</span>{else}<span class="btn btn-xs btn-success"><i class="fa fa-fw fa-check-circle"></i> ATTIVO</span>{/if}{/if}</td>
                                                                        <td><a id="{$value['idUtente']}" class="btn btn-danger btn-xs waves-effect waves-light sa-params">Cancella <i class="fa fa-trash-o"></i> </a> {if $value['active'] !== 1}{if $value['stato'] == 0}<a href="aziende.php?attiva={$value['idUtente']}" class="btn btn-primary btn-xs waves-effect waves-light">Attiva <i class="fa fa-unlock"></i></a>{else}<a href="aziende.php?disattiva={$value['idUtente']}" class="btn btn-danger btn-xs waves-effect waves-light">Disattiva <i class="fa fa-lock"></i></a> {/if}{/if} <a href="aziende.php?id={$value['idUtente']}" class="btn btn-primary btn-xs waves-effect waves-light">Modifica <i class="fa fa-pencil"></i></a></td>
								</tr>
                                                            {/foreach}
							</tbody>
						</table>

{include file="footer_aziende.tpl"}