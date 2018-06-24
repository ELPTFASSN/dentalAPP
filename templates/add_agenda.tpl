{include file="header_amm.tpl"}
{include file="sidebar.tpl"}

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Aggiungi Appuntamento</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_amministratore.php">BackOffice</a></li>
                        <li><a href="aziende.php">Agenda</a></li>
                        <li class="active">Aggiungi appuntamento</li>
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
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Dati del appuntamento</h3></div>
                        <div class="panel-body">

                            <form action="{$smarty.const.URL_FILE}agenda.php" method="post" name="aggiorna_profilo_medico">
                                <input type="hidden" name="idAgenda" value="nuovo">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Tipo di appuntamento</label>
                                        <select name="tipo" class="select2" data-placeholder="Seleziona tipologia...">
                                            <option></option>
                                            {foreach $tipo as $value => $key}
                                                <option value="{$key['idTipoAppuntamento']}">{$key['tipoAppuntamento']}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Paziente</label>
                                        <select name="paziente" class="select2" data-placeholder="Seleziona tipologia...">
                                            <option></option>
                                            {foreach $oMedico as $value => $key}
                                                <option value="{$key['idDettaglioPaziente']}">{$key['nome']} {$key['cognome']}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label>Data del appuntamento <span class="text-danger">*</span></label><br />

                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        <input type="text" name="data" class="form-control input-lg required clearfix" placeholder="{if isset($oPaziente->dataNascita)}{$oPaziente->dataNascita|date_format:"%e %B %Y"}{else}gg/mm/aaaa{/if}" data-date-start-date="0d" id="datepicker" required>

                                    </div><!-- input-group -->
                                </div>
                                <div class="col-md-3">
                                    <label>Ora del appuntamento <span class="text-danger">*</span></label><br />
                                    <div class="input-group m-b-15">

                                        <div class="bootstrap-timepicker"><input id="timepicker2" type="text" name="tiempo" class="form-control input-lg" data-minute-step="30"/></div>
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                    </div>
                                </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-12"><div class="alert alert-info"><p><i class="fa fa-fw fa-info-circle"></i> Tutti gli appuntamenti da lei inseriti si intendono gi&agrave; confirmati.</p></div></div>
                                        <div class="clearfix"></div>
                                <div class="col-md-12 text-right"><a href="aziende.php" class="btn btn-danger btn-lg">Cancella <i class="fa fa-times"></i></a> <button type="submit" class="btn btn-primary btn-lg">Invia <i class="fa fa-check"></i></button></div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
                                          <div class=row>
                <div class=col-lg-12>
                    <div class="panel panel-default">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">I miei appuntamenti</h3> 
                        </div> 
                        <div class="panel-body"> 

                            <div id="calendar"></div>
                            <div class="clearfix"></div>
                            <hr style="margin-top:0px;">

                        </div>

                    </div>
                </div>
            </div>

            {include file="footer_modifica.tpl"}