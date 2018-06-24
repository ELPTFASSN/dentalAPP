{include file="header_amm.tpl"}
{include file="sidebar.tpl"}


<div class=content-page>
    <div class=content>
        <div class=container>
            <div class=row>
                <div class=col-sm-12>
                    <h4 class="pull-left page-title">Cruscotto Medico</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href=#>Backoffice</a></li>
                        <li class=active>Cruscotto</li>
                    </ol>
                </div>
            </div>
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
          
                              {if !$smarty.session.utente['abonado'] == TRUE}
                                   
                                    <div class="row">
                                        <div class="col-md-12">
                                            
                                            
                                            <div class="panel panel-primary">
                                    <div class="panel-heading"> 
                                        <h1 class="panel-title text-center"><a href="abbonamenti.php" style="font-size:26px">NON SEI ANCORA ABBONATO? </a></h1> 
                                    </div> 
                                    <div class="panel-body"> 
                                        <div class="col-md-4">
                                            <img src="http://easysmile.beecloud.it/img/pictures/banner_home_paziente.png" class="img-responsive">
                                        </div>
                                        <div class="col-md-8">
                                        <h3>     Abbonati e potrai usufruire dei vantaggi del gruppo Easy Smile. <br><br>Che cosa aspetti?                                       </h3> 
                                        <br><br>
                                        <div class="text-center col-md-4"><a href="abbonamenti.php" class="btn btn-perspective btn-success btn-lg waves-effect waves-light"> ABBONATI SUBITO</a></div>
                                        <div class="text-center col-md-6 margin-top"><a href="http://easysmile.beecloud.it/#Offerte" target="_blank" class="btn btn-perspective btn-default btn-lg waves-effect waves-light"> VANTAGGI A TE RISERVATI</a></div>
                                        </div>
                                    </div> 
                                </div>
                                            
                                        </div>
                                        
                                    </div>
                                   {else} 
                                   
            <div class=row>
                
               
                <div class="col-md-6 col-sm-6 col-lg-3">
                    <div class="mini-stat clearfix bx-shadow">
                      <a href="pazienti.php">  <span class="mini-stat-icon bg-info nada"><i class=ion-person-add></i></span></a>
                        <div class="mini-stat-info text-right text-muted">
                             <span class="counter">{if isset($numPazienti) && !empty($numPazienti)}{$numPazienti}{else}0{/if}</span>
                            Pazienti iscritti
                        </div>
                        <div class=tiles-progress>
                            <div class=m-t-20>
                                <h5 class=text-uppercase>PAzienti </h5>
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
                        <a href="ordini.php"><span class="mini-stat-icon bg-purple nada {if isset($ordini) && !empty($ordini)} animated flash{/if}"><i class=ion-ios7-cart></i></span></a>
                        <div class="mini-stat-info text-right text-muted">
                            <span class=counter>{if isset($ordini) && !empty($ordini)}{$ordini}{else}0{/if}</span>
                            Ordini in corso
                        </div>
                        <div class=tiles-progress>
                            <div class=m-t-20>
                                <h5 class=text-uppercase>Prescrizioni </h5>
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
                        <span class="mini-stat-icon bg-success nada {if isset($appuntamenti) && !empty($appuntamenti)} animated flash{/if}"><i class=ion-person-stalker></i></span>
                        <div class="mini-stat-info text-right text-muted">
                            <span class=counter>{if isset($appuntamenti) && !empty($appuntamenti)}{$appuntamenti}{else}0{/if}</span>
                            Visite prenotate
                        </div>
                        <div class=tiles-progress>
                            <div class=m-t-20>
                                <h5 class=text-uppercase>Appuntamenti </h5>
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
                        <span class="mini-stat-icon bg-primary"><i class=ion-android-contacts></i></span>
                        <div class="mini-stat-info text-right text-muted">
                            <span><small>{if isset($scadenzaAbbonamento) && !empty($scadenzaAbbonamento) && $scadenzaAbbonamento|date_format:"%Y-%m-%d">$smarty.now|date_format:"%Y-%m-%d"}{$scadenzaAbbonamento|date_format:"%d/%m/%Y"}{else} <a href="abbonamenti.php" class="btn btn-perspective btn-primary">Abbonati subito!</a>{/if}</small></span>
                            {if isset($scadenzaAbbonamento) && !empty($scadenzaAbbonamento) && $scadenzaAbbonamento|date_format:"%Y-%m-%d">$smarty.now|date_format:"%Y-%m-%d"}Scadenza abbonamento{else}&nbsp;{/if}
                        </div>
                        <div class=tiles-progress>
                            <div class=m-t-20>
                                <h5 class=text-uppercase>{if isset($scadenzaAbbonamento) && !empty($scadenzaAbbonamento)}ABBONAMENTO ATTIVO{else} ANCORA NON SEI ABBONATO{/if}</h5>
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
                <div class=col-lg-12>
                    <div class="panel panel-default">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">La mia agenda di prenotazioni</h3> 
                        </div> 
                        <div class="panel-body"> 
                            <div class="col-md-8"><a href="agenda.php?task=add" class="btn btn-primary btn-perspective">Aggiungi nuovo appuntamento <i class="fa fa-fw fa-plus"></i></a> <a href="#oggi" id="external-button" class="btn btn-primary btn-perspective">Vedi appuntamenti di oggi <i class="fa fa-fw fa-search-plus"></i></a></div> <div class="col-md-4 text-right"><a href="agenda.php?task=disponibilita" class="btn btn-perspective btn-pink">Gestici la tua disponibilit&agrave; <i class="fa fa-fw fa-clock-o"></i></a></div>
                            <div class="clearfix"></div>
                            <hr>
                            <p>
                                <small><a name="oggi"></a> Leggenda: <span class="badge badge-primary"> &nbsp;Appuntamento NON confermato &nbsp;</span> <span class="badge badge-success">&nbsp;Appuntamento Confermato&nbsp;</span> <span class="badge badge-danger">&nbsp;Appuntamento Cancellato&nbsp;</span> </small>
                            </p>   <hr>

                            <div id="calendar"></div>
                            <div class="clearfix"></div>
                            <hr style="margin-top:0px;">

                        </div>

                    </div>
                </div>
            </div>
                                {/if}
        </div>
    </div>
</div>



{include file="footer_amm.tpl"}