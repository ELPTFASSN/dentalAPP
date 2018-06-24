{include file="header_amm.tpl"}
{include file="sidebar.tpl"}

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Modifica Azienda</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_amministratore.php">BackOffice</a></li>
                        <li><a href="aziende.php">Aziende</a></li>
                        <li class="active">Modifica azienda</li>
                    </ol>
                </div>
            </div>
            {if !empty($success)}
            <div class="row">
                <div class="col-md-12">
                    
                        <div class="alert alert-success alert-bold-border fade in animated fadeInDown">
                            <i class="fa fa-fw fa-3x fa-check text-success" style="float:right;"></i>
                            <strong>Esito:<br>
                                <span class="text-success">{if isset($success)}{$success}{/if}</span></strong>
                        </div>
                    </div>
                </div>
            {/if} 
            {if !empty($error)}
            <div class="row">
                <div class="col-md-12">
                    
                        <div class="alert alert-danger alert-bold-border fade in animated flash">
                            <i class="fa fa-fw fa-3x fa-exclamation-circle text-danger" style="float:right;"></i>
                            <strong>Si sono verificati i seguenti errori:<br>
                                <span class="text-danger">{if isset($error)}{$error}{/if}</span></strong>
                        </div>
                    </div>
                </div>
            {/if}       
                                   <form action="{$smarty.const.URL_FILE}aziende.php" method="post" name="aggiorna_profilo_medico">
                                <input type="hidden" name="modifica" value="{$azienda['idAzienda']}">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Dati Societ&agrave;</h3></div>
                        <div class="panel-body">

     
                             <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Nome Societ&agrave; <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="denominazione" placeholder="Es. Studio Odontoiatrico Easy Smile" value="{$azienda['denominazione']}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Partita IVA <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " data-mask="99999999999" name="partitaIVAAzienda" placeholder="ES. 12345678987" value="{$azienda['partitaIVA']}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Nome rappresentante <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="nomeRap" placeholder="ES. Mario" value="{$azienda['nomeRap']}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Cognome rappresentante <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="cognomeRap" placeholder="ES. Rosi" value="{$azienda['cognomeRap']}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Email societ&agrave; <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="emailAzienda" placeholder="Es. mario.rossi@ilmiodominio.com" value="{$azienda['emailAzienda']}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Telefono fisso </label>
                                                <input required="required" type="text" class="form-control input-lg" data-mask="99999999999" name="telefono" placeholder="ES. 077411111111" value="{$azienda['telefono']}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Cellulare rappresentante <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="telefonoMobile" data-mask="9999999999" placeholder="ES. 3334445555" value="{$azienda['telefonoMobile']}">
                                            </div>
                                        </div>
                                    </section>
                        </div>
                    </div>
                </div>
            </div>
                                            <div class="row">
                                     <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Domicilio Societ&agrave;</h3></div>
                        <div class="panel-body">

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Regione <span class="text-danger">*</span></label>
                                                <select required="required" name="regione" id="regione" class="select2 " data-placeholder="Seleziona regione...">
                                                    <option></option>
                                                    {foreach $regioni as $value => $key}
                                                        <option {if $key['idregione']=={$azienda['fkRegione']}}selected="selected"{/if} value="{$key['idregione']}">{$key['nomeregione']}</option>
                                                    {/foreach}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label id="response">Provincia <span class="text-danger">*</span></label>
                                                <select required="required" name="provincia" id="provincia" class="select2 " placeholder="Seleziona provincia..." data-placeholder="Seleziona provincia...">
                                                    <option></option>
                                                    {if isset({$azienda['fkProvincia']})}<option value='{$azienda['fkProvincia']}' selected="selected">{$azienda['nomeprovincia']}</option>{/if}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label id="response">Citt&agrave; <span class="text-danger">*</span></label>
                                                <select required="required" name="citta" id="citta" class="select2 " data-placeholder="Seleziona citt&agrave;...">
                                                    <option></option>
                                                    {if isset({$azienda['fkComune']})}<option value="{$azienda['fkComune']}" selected="selected">{$azienda['nomecomune']}</option>{/if}
                                                </select>
                                            </div>
                                        </div>    
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label id="response">CAP <span class="text-danger">*</span></label>
                                                <select required="required" name="CAP" id="CAP" class="select2 " data-placeholder="Seleziona CAP...">
                                                    <option></option>
                                                    {if isset({$azienda['cap']})}<option value="{$azienda['cap']}" selected="selected">{$azienda['cap']}</option>{/if}
                                                </select>
                                                <div id="CAPO"></div>
                                            </div>
                                        </div> 
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>Indirizzo <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="indirizzo" placeholder="Es. Via delle libellule" value="{$azienda['indirizzo']}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Civico <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg "  name="numero" placeholder="Es. 77 Scala B7" value="{$azienda['numero']}">
                                            </div>
                                        </div>

                                        <div class="clearfix"></div>
                                       
                                       
                    </div>
                </div>
            </div>
                                            </div>
                                            <div class="row"><div class="col-md-12 text-right"><a href="aziende.php" class="btn btn-lg btn-perspective btn-danger waves-effect waves-light">Torna indietro <i class="fa fa-fw fa-backward"></i></a> <button type="submit" class="btn btn-lg btn-primary waves-effect waves-light">Invia modifiche <i class="fa fa-fw fa-check"></i></button></div></div>
                                   </form>
            {include file="footer_public.tpl"}