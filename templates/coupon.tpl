{include file="header_amm.tpl"}
{include file="sidebar.tpl"}
<div class=content-page>
<div class=content>
<div class=container>
<div class=row>
<div class=col-sm-12>
<h4 class="pull-left page-title">Lista dei sconti {if isset($status)}{$satus}{/if}realizzate nella piattaforma</h4>
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
<h3 class=panel-title>Tabella Sconti/Coupons</h3>
</div>
<div class=panel-body>
<div class=row>
<div class=col-sm-12>
<div class=m-b-30>
<a href="coupon.php?task=generate" class="btn btn-success waves-effect waves-light ">Genera nuovo codice coupon <i class="fa fa-plus"></i></a>  
</div>
</div>
</div>
<div class=row>
<div class="col-md-12 col-sm-12 col-xs-12">
    
<table class="table table-striped table-hover" id="datatable">
							<thead class="the-box dark full">
								<tr>
									
                                                                        <th>Codice coupon</th>
                                                                        <th>Tipo Coupon</th>
                                                                        <th>Sconto</th>
									<th>Data creazione</th>
                                                                        <th>Data scadenza</th>
                                                                        <th>Azioni</th>
								</tr>
							</thead>
							<tbody>
                                                            {foreach $ordini as $key=>$value}
								<tr class="{cycle values='odd,even'}">
                                                                    <td>{$value['codice']}</td>
                                                                    <td>{$value['nomeCoupon']}</td>
                                                                    <td>{$value['prezzo']}{if $value['porciento'] =="2"}%{else} &euro;{/if}</td>
                                                                    <td>{$value['dataInizio']} </td>
                                                                    <td>{if $value['ilimitado'] =="1"}Permanente{else}{$value['dataScadenza']}{/if}</td>
                                                                    <td><a href="coupon.php?id={$value['idCoupon']}" class="btn btn-primary btn-perspective btn-xs waves-effect waves-light">Vedi dettagli <i class="fa fa-pencil"></i></a></td>
								</tr>
                                                            {/foreach}
							</tbody>
						</table>

{include file="footer_aziende.tpl"}