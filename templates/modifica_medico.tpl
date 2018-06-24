{include file="header_amm.tpl"}
{include file="sidebar.tpl"}

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Modifica Medico</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_amministratore.php">BackOffice</a></li>
                        <li><a href="aziende.php">Medici</a></li>
                        <li class="active">Modifica medico</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {if !empty($error)}
                        <div class="alert alert-danger alert-bold-border fade in animated flash">
                            <i class="fa fa-fw fa-5x fa-exclamation-circle text-danger" style="float:right;"></i>
                            <strong>Si sono verificati i seguenti errori:<br>
                                <span class="text-danger">{if isset($error)}{$error}{/if}</span></strong>
                        </div>
                    </div>
                </div>
            {/if}       
            <div class="row">
                <form action="{$smarty.const.URL_FILE}medici.php" method="post" name="aggiorna_profilo_medico">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Anagrafica</h3></div>
                            <div class="panel-body">


                                <input type="hidden" name="idUtente" value="{if isset($oMedico->idUtente)}{$oMedico->idUtente}{/if}">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nome</label>
                                        <input type="text" class="form-control input-lg" name="nome" placeholder="Nome" value="{if isset($oMedico->nome)}{$oMedico->nome}{/if}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Cognome</label>
                                        <input type="text" class="form-control input-lg" name="cognome" placeholder="Cognome" value="{if isset($oMedico->cognome)}{$oMedico->cognome}{/if}">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Telefono</label>
                                        <input type="text" class="form-control input-lg" name="telefono" placeholder="Telefono" value="{if isset($oMedico->telefono)}{$oMedico->telefono}{/if}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Telefono Mobile</label>
                                        <input type="text" class="form-control input-lg" name="telefonoMobile" placeholder="Telefono Mobile" value="{if isset($oMedico->telefonoMobile)}{$oMedico->telefonoMobile}{/if}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control input-lg" name="email" placeholder="Email" value="{if isset($oMedico->email)}{$oMedico->email}{/if}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Partita IVA</label>
                                        <input type="text" class="form-control input-lg" name="partitaIVA" placeholder="Partita IVA" value="{if isset($oMedico->partitaIVA)}{$oMedico->partitaIVA}{/if}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Numero Albo</label>
                                        <input type="text" class="form-control input-lg" name="numeroAlbo" placeholder="Numero Albo" value="{if isset($oMedico->numeroAlbo)}{$oMedico->numeroAlbo}{/if}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Regione Albo</label>
                                        <select name="regioneAlbo" id="regioneAlbo" class="select2" data-placeholder="Seleziona regione...">
                                            {foreach $regioni as $value => $key}
                                                <option {if $key['idregione']==$oMedico->fkRegioneAlbo}selected="selected"{/if} value="{$key['idregione']}">{$key['nomeregione']}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label id="response">Provincia Albo</label>
                                        <select name="provinciaAlbo" id="provinciaAlbo" class="select2" data-placeholder="Seleziona provincia...">

                                            {if isset($oMedico->fkProvinciaAlbo)}<option selected="selected" value="{$oMedico->fkProvinciaAlbo}">{$oMedico->nomeProvinciaAlbo}</option>{/if}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label id="response">Citt&agrave; Albo</label>
                                        <select name="cittaAlbo" id="cittaAlbo" class="select2" data-placeholder="Seleziona citt&agrave;...">
                                            {if isset($oMedico->fkComuneAlbo)}<option selected="selected" value="{$oMedico->fkComuneAlbo}">{$oMedico->nomeComuneAlbo}</option>{/if}
                                        </select>
                                    </div>
                                </div>

                                <hr>
                                <div class="col-md-12 text-right"><a href="medici.php" class="btn btn-danger btn-lg">Cancella <i class="fa fa-times"></i></a> <button type="submit" class="btn btn-primary btn-lg">Invia <i class="fa fa-check"></i></button></div>

                            </div>

                        </div>
                    </div>

                </form>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Pazienti Iscritti</h3></div>
                        <div class="panel-body">

                            <table class="table table-striped table-hover" id="datatable">
                                <thead class="the-box dark full">
                                    <tr>
                                        <th>Nome completo</th>
                                        <th>Codice fiscale</th>
                                        <th>Data nascita</th>
                                        <th>Citt&agrave;</th>
                                        <th>Prescrizioni</th>
                                        <th>Azioni</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {foreach $arrPazienti as $key=>$value}
                                        <tr class="{cycle values='odd,even'}">
                                            {assign var=foo value=$value['idPaziente']}
                                            <td>{$value['nome']} {$value['cognome']}</td>
                                            <td>{$value['codiceFiscale']}</td>
                                            <td>{$value['dataNascita']|date_format:"%e %B %Y"}</td>
                                            <td>
                                                {$value['citta']}
                                            </td>
                                            <td>
                                                1
                                            </td>

                                            <td><a href="medici.php?id={$value['idAzienda']}" class="btn btn-primary btn-perspective btn-xs waves-effect waves-light">Vedere dettaglio <i class="fa fa-pencil"></i></a></td>
                                        </tr>
                                    {/foreach}
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
            {include file="footer_modifica.tpl"}