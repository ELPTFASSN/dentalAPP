{include file="header_amm.tpl"}
{include file="sidebar.tpl"}


<div class=content-page>
    <div class=content>
        <div class=container>
            <div class=row>
                <div class=col-sm-12>
                    <h4 class="pull-left page-title">La mia Agenda di prenotazioni</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_medico.php">Backoffice</a></li>
                        <li class=active>Agenda</li>
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
            </div>
            <div class=row>
                <div class=col-lg-12>
                    <div class="panel panel-default">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">La mia agenda di prenotazioni</h3> 
                        </div> 
                        <div class="panel-body"> 
                            {if $smarty.session.utente['idRuoloUtente'] == $smarty.const.PAZIENTE}     <div class="col-md-9"><a href="agenda.php?task=addPaz" class="btn btn-primary btn-perspective">Richiede un appuntamento in {$smarty.session.utente['denominazione']}<i class="fa fa-fw fa-plus"></i></a> o sceglie un <a href="home_paziente.php?medico=true">altro studio medico</a></div> {/if}
                        {if $smarty.session.utente['idRuoloUtente'] == $smarty.const.MEDICO}     <div class="col-md-6"><a href="agenda.php?task=add" class="btn btn-primary btn-perspective">Aggiungi nuovo appuntamento <i class="fa fa-fw fa-plus"></i></a></div> <div class="col-md-6 text-right"><a href="agenda.php?task=disponibilita" class="btn btn-perspective btn-pink">Gestici la tua disponibilit&agrave; <i class="fa fa-fw fa-clock-o"></i></a></div>{/if}
                            <div class="clearfix"></div>
                            <hr>
                            <p>
                                <small> Leggenda: <span class="badge badge-primary"> &nbsp;Appuntamento NON confermato &nbsp;</span> <span class="badge badge-success">&nbsp;Appuntamento Confermato&nbsp;</span> <span class="badge badge-danger">&nbsp;Appuntamento Cancellato&nbsp;</span> <span class="badge badge-default">&nbsp;Non disponibile&nbsp;</span> </small>
                            </p>   <hr>

                            <div id="calendar"></div>
                            <div class="clearfix"></div>
                            <hr style="margin-top:0px;">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



{include file="footer_amm.tpl"}