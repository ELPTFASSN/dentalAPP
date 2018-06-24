{include file="header_amm.tpl"}
{include file="sidebar.tpl"}
<div class=content-page>
<div class=content>
<div class=container>
<div class=row>
<div class=col-sm-12>
<h4 class="pull-left page-title">Ortho viewer</h4>
<ol class="breadcrumb pull-right">
<li><a href=#>BackOffice</a></li>
<li class=active>Ortho</li>
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
<h3 class=panel-title>Scarica Ortho Viewer</h3>
</div>
<div class=panel-body>


<div class="col-md-12 col-sm-12 col-xs-12">
    <h3>Ortho Studio Viewer </h3>
    <p style="text-align: justify;"><img src="http://easysmile.beecloud.it/panel/images/ortho-studio.jpg" style="float:right;margin:0 30px;">Ortho Studio è un pacchetto software dedicato utilizzato per il controllo, la modifica e l'analisi, utilizzando dati 3D di alta qualità di casi di pazienti sottoposti a scansione con scanner dentale Maestro 3D. Esso è accompagnato da un visualizzatore gratuito che consente di distribuire i modelli digitali ai clienti. 

    </p><p>Ortho Studio Viewer - Permette di visualizzare i modelli 3D creati con Ortho Studio. Lo spettatore ha lo zoom, panning e pieno 3D la rotazione, l'analisi e le misurazioni dei modelli. </p><p>Dati specifici sul modello, paziente, ecc vengono visualizzati anche sullo schermo.</p>
    <p class="alert alert-warning col-md-9"><i class="fa fa-fw fa-info-circle"></i> <strong>Questa versione funziona solo per sistemi Windows a 64 bit.</strong></p>
    <div class="clearfix"></div>
    <p><br><a href="http://easysmile.beecloud.it/Ortho.zip" class="btn btn-primary btn-lg btn-perspective waves-effect waves-light">Scarica  Ortho Viewer <i class="fa fa-fw fa-download"></i></a> <br><br></p>
</div>

</div>
</div>
</div>
</div>

{include file="footer_aziende.tpl"}