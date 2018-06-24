{include file="header_amm.tpl"}
{include file="sidebar.tpl"}
<div class=content-page>
<div class=content>
<div class=container>
<div class=row>
<div class=col-sm-12>
<h4 class="pull-left page-title">Lista dei Medici iscritti alla piattaforma</h4>
<ol class="breadcrumb pull-right">
<li><a href="home_amministratore.php">BackOffice</a></li>
<li class=active>Medici</li>
</ol>
</div>
</div>
<div class=row>
<div class=col-md-12>
<div class="panel panel-default">
<div class=panel-heading>
<h3 class=panel-title>Tabella Medici</h3>
</div>
<div class=panel-body>
<div class=row>
<div class=col-sm-12>
<div class=m-b-30>
<a href="generatePDF.php?task=medico" class="btn btn-success waves-effect waves-light">Genera codice di iscrizione <i class="fa fa-plus"></i></a> <a href="medici.php?status=abbonato" class="btn btn-primary waves-effect waves-light {if isset($status) && $status=='abbonato'}disabled{/if}">Vedi solo abbonati <i class="fa fa-star"></i></a> <a href="medici.php?status=attesa" class="btn btn-danger waves-effect waves-light {if isset($status) && $status=='attesa'}disabled{/if}">Vedi solo in attesa <i class="fa fa-clock-o"></i></a>
</div>
</div>
</div>
<div class=row>
<div class="col-md-12 col-sm-12 col-xs-12">
    
<table class="table table-striped table-hover" id="datatable">
							<thead class="the-box dark full">
								<tr>
									<th>Nome completo</th>
                                                                        <th>Partita IVA</th>
                                                                        <th>Provincia</th>
                                                                        <th>Abbonato</th>
									<th>Stato</th>
                                                                        <th>Azioni</th>
								</tr>
							</thead>
							<tbody>
                                                            {foreach $medici as $key=>$value}
								<tr class="{cycle values='odd,even'}">
                                                                    <td>{$value['nome']} {$value['cognome']}</td>
                                                                    
                                                                    <td>{$value['partitaIVA']}</td>
                                                                    <td>{$value['nomeprovincia']}</td>
                                                                    <td class="center">{if isset($value['abonado']) && !empty($value['abonado']) && $value['abonado']|date_format:"%Y-%m-%d">$smarty.now|date_format:"%Y-%m-%d"}<button class="btn btn-xs btn-block btn-icon waves-effect waves-light btn-primary"> <i class="fa fa-star"></i> </button> {else} <button class="btn btn-icon waves-effect waves-light btn-danger btn-xs btn-block"> <i class="fa fa-remove"></i> </button>{/if}</td>
                                                                        <td class="center"> {if $value['stato'] == 1}<span class="btn btn-xs btn-danger"><i class="fa fa-fw fa-times-circle"></i> NON ATTIVO</span>{else}{if $value['active'] == 0}<span class="btn btn-xs btn-danger"><i class="fa fa-fw fa-times-circle"></i> NON ATTIVO</span>{else}<span class="btn btn-xs btn-success"><i class="fa fa-fw fa-check-circle"></i> ATTIVO</span>{/if}{/if}</td>
                                                                        <td><a id="{$value['fkUtente']}" class="btn btn-danger btn-xs waves-effect waves-light sa-paramos">Cancella <i class="fa fa-trash-o"></i> </a> {if $value['active'] == 0}<a href="medici.php?attiva={$value['fkUtente']}" class="btn btn-primary btn-xs waves-effect waves-light">Attiva <i class="fa fa-unlock"></i></a>{else}<a href="medici.php?disattiva={$value['fkUtente']}" class="btn btn-danger btn-xs waves-effect waves-light">Disattiva <i class="fa fa-lock"></i></a> {/if} <a href="medici.php?id={$value['fkUtente']}" class="btn btn-primary btn-xs waves-effect waves-light">Modifica <i class="fa fa-pencil"></i></a></td>
								</tr>
                                                            {/foreach}
							</tbody>
						</table>

{include file="footer_aziende.tpl"}