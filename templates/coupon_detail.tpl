{include file="header_amm.tpl"}
{include file="sidebar.tpl"}
<div class=content-page>
<div class=content>
<div class=container>
<div class=row>
<div class=col-sm-12>
<h4 class="pull-left page-title">Lista dei utenti con sconti {if isset($status)}{$satus}{/if}realizzati nella piattaforma</h4>
<ol class="breadcrumb pull-right">
<li><a href=#>BackOffice</a></li>
<li class=active>Sconti</li>
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
    <h3 class=panel-title>Tabella Utenti adderitti al coupon {$ordini[0]['codice']} ({$ordini[0]['nomeCoupon']}) </h3>
</div>
<div class=panel-body>
<div class=row>
<div class=col-sm-12>
<div class=m-b-30>
    <a href="coupon.php?status=used&idi={$idCoupon}" class="btn btn-success waves-effect waves-light {if isset($status) && $status=='used'}disabled{/if}">Vedere sconti usufruiti <i class="fa fa-check"></i></a> <a href="coupon.php?status=unused&idi={$idCoupon}" class="btn btn-danger waves-effect waves-light {if isset($status) && $status=='unused'}disabled{/if}">Vedere sconti non usati <i class="fa fa-times"></i></a> <input type="hidden" class="hidden" id="idCoupon" value="{$idCoupon}" />
</div>
</div>
</div>
<div class=row>
<div class="col-md-12 col-sm-12 col-xs-12">
    
<table class="table table-striped table-hover" id="datatable">
							<thead class="the-box dark full">
								<tr>
									
                                                                        <th>Utente</th>
                                                        <th>Tipo coupon</th>
                                                        <th>Sconto</th>
                                                                        <th>Data scadenza</th>
                                                                        <th>Stato</th>
                                                                        <th>Azioni</th>
								</tr>
							</thead>
							<tbody>
                                                            {foreach $ordini as $key=>$value}
								<tr class="{cycle values='odd,even'}">
                                                                    <td>{$value['nome']} {$value['cognome']}</td>
                                                                    <td><label class="label label-pink">{$value['nomeCoupon']}</label></td>
                                                                    <td>{if isset($value['porciento'])}{$value['porciento']}%{elseif isset($value['sconto'])}{$value['sconto']}{else}{$value['prezzo']}{/if}</td>
                                                                    <td>{$value['dataScadenza']} </td>
                                                                    
                                                                    <td class="center"> {if $value['usato'] == 0}<span class="label label-danger"><i class="fa fa-fw fa-times-circle"></i> NON USATO</span>{/if}{if $value['usato'] == 1}<span class="btn btn-xs btn-success"><i class="fa fa-fw fa-check-circle"></i> USATO</span>{/if}</td>
                                                                    <td><a id="{$value['idBridgeCouponPaziente']}" class="btn btn-danger btn-perspective btn-xs waves-effect waves-light sa-paramosa">Cancella coupon <i class="fa fa-trash"></i></a></td>
								</tr>
                                                            {/foreach}
							</tbody>
						</table>

{include file="footer_aziende.tpl"}