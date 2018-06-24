{include file="header_amm.tpl"}
{include file="sidebar.tpl"}


<div class=content-page>
<div class=content>
<div class=container>
<div class=row>
<div class=col-sm-12>
<h4 class="pull-left page-title">Cruscotto</h4>
<ol class="breadcrumb pull-right">
<li><a href=#>Backoffice</a></li>
<li class=active>Cruscotto</li>
</ol>
</div>
</div>
<div class=row>
    {if !empty($accessError)}
                            <div class="alert alert-warning alert-bold-border fade in alert-dismissable margin-top"><i class="fa fa-fw fa-exclamation-triangle fa-3x text-warning" style="float:left; padding-right:20px"></i>
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Attenzione!<br>
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
<div class="col-md-6 col-sm-6 col-lg-3">
<div class="mini-stat clearfix bx-shadow">
    <a href="medici.php"><span class="mini-stat-icon bg-info nada {if !empty($numAtessa['total'])}animated flash{/if}"><i class=ion-person-add></i></span></a>
<div class="mini-stat-info text-right text-muted">
    <span class="counter">{$numAtessa['total']}</span>
Registro in attesa
</div>
<div class=tiles-progress>
<div class=m-t-20>
<h5 class=text-uppercase>Registrazione </h5>
<div class="progress progress-sm m-0">
<div class="progress-bar progress-bar-info" role=progressbar aria-valuenow=100 aria-valuemin=0 aria-valuemax=100 style=width:100%>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-lg-3">
<div class="mini-stat clearfix bx-shadow">
    <a href="ordini.php"><span class="mini-stat-icon bg-purple nada {if !empty($numOrdini['total'])}animated flash{/if}"><i class=ion-ios7-cart></i></span></a>
<div class="mini-stat-info text-right text-muted">
<span class=counter>{$numOrdini['total']}</span>
Ordini in attesa
</div>
<div class=tiles-progress>
<div class=m-t-20>
<h5 class=text-uppercase>eCommerce </h5>
<div class="progress progress-sm m-0">
<div class="progress-bar progress-bar-purple" role=progressbar aria-valuenow=100 aria-valuemin=0 aria-valuemax=100 style=width:100%>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-lg-3">
<div class="mini-stat clearfix bx-shadow">
    <a href="medici.php"><span class="mini-stat-icon bg-success nada"><i class=ion-person-stalker></i></span></a>
<div class="mini-stat-info text-right text-muted">
<span class="counter">{$numMedici['total']}</span>
Medici registrati
</div>
<div class=tiles-progress>
<div class=m-t-20>
<h5 class=text-uppercase>Medici </h5>
<div class="progress progress-sm m-0">
<div class="progress-bar progress-bar-success" role=progressbar aria-valuenow=60 aria-valuemin=0 aria-valuemax=100 style=width:100%>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-lg-3">
<div class="mini-stat clearfix bx-shadow">
    <a href="pazienti.php"><span class="mini-stat-icon bg-primary nada"><i class=ion-android-contacts></i></span></a>
<div class="mini-stat-info text-right text-muted">
<span class=counter>{$numPazienti['total']}</span>
Pazienti registrati
</div>
<div class=tiles-progress>
<div class=m-t-20>
<h5 class=text-uppercase>Pazienti </h5>
<div class="progress progress-sm m-0">
<div class="progress-bar progress-bar-primary" role=progressbar aria-valuenow=57 aria-valuemin=0 aria-valuemax=100 style=width:100%>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class=row>
<div class=col-lg-8>
<div class=portlet>
<div class=portlet-heading>
<h3 class="portlet-title text-dark text-uppercase">
Website Stats
</h3>
<div class=portlet-widgets>
<a href=javascript: data-toggle=reload><i class=ion-refresh></i></a>
<span class=divider></span>
<a data-toggle=collapse data-parent=#accordion1 href=#portlet1><i class=ion-minus-round></i></a>
<span class=divider></span>
<a href=# data-toggle=remove><i class=ion-close-round></i></a>
</div>
<div class=clearfix></div>
</div>
<div id=portlet1 class="panel-collapse collapse in">
<div class=portlet-body>
<div class=row>
<div class=col-md-12>
<div class="row text-center">
<div class=col-sm-4>
<h1><i class="md md-filter-drama"></i></h1>
<h2 class=counter>0</h2>
<small class=text-muted> Ordini realizzati</small>
</div>
<div class=col-sm-4>
<h1><i class="md md-healing"></i></h1>
<h2 class=counter>0</h2>
<small class=text-muted>Mascherine prodotte</small>
</div>
<div class=col-sm-4>
<h1><i class="md md-portrait"></i></h1>
<h2 class=counter>{$numAziende['total']}</h2>
<small class=text-muted>Aziende Registrate</small>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class=col-lg-4>
<div class=portlet>
<div class=portlet-heading>
<h3 class="portlet-title text-dark text-uppercase">
Utenti Registrati
</h3>
<div class=portlet-widgets>
<a href=javascript: data-toggle=reload><i class=ion-refresh></i></a>
<span class=divider></span>
<a data-toggle=collapse data-parent=#accordion1 href=#portlet2><i class=ion-minus-round></i></a>
<span class=divider></span>
<a href=# data-toggle=remove><i class=ion-close-round></i></a>
</div>
<div class=clearfix></div>
</div>
<div id=portlet2 class="panel-collapse collapse in">
<div class=portlet-body>
<div class=row>
<div class=col-md-12>
<div class="row text-center">
<div class=col-sm-6>
<h1><i class="md md-group"></i></h1>
<h2 class=counter>{$numMedici['total']}</h2>
<small class=text-muted> Medici</small>
</div>
<div class=col-sm-6>
<h1><i class="md md-timer-auto"></i></h1>
<h2 class=counter>{$numPazienti['total']}</h2>
<small class=text-muted>Pazienti</small>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


{include file="footer_amm.tpl"}