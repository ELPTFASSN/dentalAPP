{include file="header_amm.tpl"}
{include file="sidebar.tpl"}

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Modifica Appuntamento</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_medico.php">BackOffice</a></li>
                        <li><a href="agenda.php">Agenda</a></li>
                        <li class="active">Modifica appuntamento</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {if !empty($error)}
                        <div class="alert alert-danger alert-bold-border fade in animated flash">
                            <i class="fa fa-fw fa-3x fa-exclamation-circle text-danger" style="float:right;"></i>
                            <strong>Si sono verificati i seguenti errori:<br>
                                <span class="text-danger">{if isset($error)}{$error}{/if}</span></strong>
                        </div>
                    </div>
                </div>
            {/if}       
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-border panel-primary">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Tipo di Appuntamento</h3> 
                        </div> 
                        <div class="panel-body">
                            <h3>{$agenda['tipoAppuntamento']}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-border panel-primary">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Paziente</h3> 
                        </div> 
                        <div class="panel-body">
                            <h3>{$agenda['nome']} {$agenda['cognome']}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-border panel-primary">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Data e ora dell'appuntamento</h3> 
                        </div> 
                        <div class="panel-body">
                            <h3>{$agenda['dataAppuntamento']|date_format:"%d/%m/%Y"} alle {$agenda['dataAppuntamento']|date_format:"%H:%M"}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-border panel-primary">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Stato dell'appuntamento</h3> 
                        </div> 
                        <div class="panel-body">
                            <h3>{if $agenda['fkStatoAppuntamento'] =='1' || $agenda['fkStatoAppuntamento'] =='2'}<span class="label label-primary"><i class="fa fa-fw fa-clock-o"></i> In attesa di conferma</span> <a href="agenda.php?task=conferma&id={$agenda['idAgenda']}" class="btn btn-sm btn-success"> Conferma <i class='fa fa-fw fa-check'></i></a> <a href="agenda.php?task=cancella&id={$agenda['idAgenda']}" class="btn btn-sm btn-danger"> Cancella <i class='fa fa-fw fa-times'></i></a>{elseif  $agenda['fkStatoAppuntamento'] =='3'}<span class="label label-success"><i class="fa fa-fw fa-check"></i> Appuntamento confermato</span> <a href="agenda.php?task=cancella&id={$agenda['idAgenda']}" class="btn btn-sm btn-danger"> Cancella <i class='fa fa-fw fa-times'></i></a>{elseif  $agenda['fkStatoAppuntamento'] =='4'}<span class="label label-warning">Appuntamento spostato</span>{elseif  $agenda['fkStatoAppuntamento'] =='9'}<span class="label label-danger"><i class="fa fa-fw fa-trash-o"></i> Appuntamento cancellato</span>{/if}</h3>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary panel-border">
                        <div class="panel-heading">
                            <h3 class="panel-title">Modifica del appuntamento
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form action="{$smarty.const.URL_FILE}agenda.php" method="post" name="aggiorna_profilo_medico">
                                <input type="hidden" name="idAgenda" value="{$agenda['idAgenda']}">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Tipo di appuntamento</label>
                                        <select name="tipo" class="select2" data-placeholder="Seleziona tipologia...">
                                            <option></option>
                                            {foreach $tipo as $value => $key}
                                                <option {if $agenda['idTipoAppuntamento'] == $key['idTipoAppuntamento']}selected="selected"{/if} value="{$key['idTipoAppuntamento']}">{$key['tipoAppuntamento']}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label>Data del appuntamento <span class="text-danger">*</span></label><br />

                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        <input type="text" name="data" class="form-control input-lg required clearfix" placeholder="{if isset($agenda['dataAppuntamento'])}{$agenda['dataAppuntamento']|date_format:"%e %B %Y"}"  value="{$agenda['dataAppuntamento']|date_format:"%e %B %Y"}"{else}gg/mm/aaaa"{/if} data-date-start-date="0d" id="datepicker" required>

                                    </div><!-- input-group -->
                                </div>
                                <div class="col-md-3">
                                    <label>Ora del appuntamento <span class="text-danger">*</span></label><br />
                                    <div class="input-group m-b-15">

                                        <div class="bootstrap-timepicker"><input id="timepicker2" type="text" name="tiempo" value="{$agenda['dataAppuntamento']|date_format:"%H:%M"}" class="form-control input-lg" data-minute-step="30"/></div>
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-12"><div class="alert alert-info"><p><i class="fa fa-fw fa-question-circle"></i> Se modifichi l'appuntamento verr&agrave; assegnato con lo stato "confermato".</p></div></div>
                                <div class="clearfix"></div>
                                <div class="col-md-12 text-right"><a href="agenda.php" class="btn btn-danger btn-lg">Cancella <i class="fa fa-times"></i></a> <button type="submit" class="btn btn-primary btn-lg">Invia <i class="fa fa-check"></i></button></div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            {include file="footer_modifica.tpl"}