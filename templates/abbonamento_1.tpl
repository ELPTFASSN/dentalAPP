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
            
        </div>
    </div>

                                          <div class=row>
                <div class=col-md-12>
                    <div class="panel panel-default">
                        <div class=panel-heading>
                            <h3 class=panel-title>Abbonamento Attivo</h3> 
                        </div>
                        <div class=panel-body>
                            
                            <h1 class="animated fadeIn alert alert-bold-border alert-success">Gi&agrave; sei abbonato a EasySmile Group e puoi usufruire tutti i vantaggi!</h1>
                            <hr>
                            <a href="home_medico.php" class="btn btn-lg btn-perspective btn-danger waves-effect waves-light pull-right"><i class="fa fa-fw fa-backward"></i> Torna indietro</a>
                        </div>
                    </div>
                </div>
                                          </div>

{include file="footer_aziende.tpl"}