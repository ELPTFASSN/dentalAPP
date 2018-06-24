{include file="header_amm.tpl"}
{include file="sidebar.tpl"}


<div class="content-page" >
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Wizard with Validation -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">compilazione del modulo di registro per pazienti</h3> 
                        </div> 
                        <div class="panel-body"> 
                            <form id="registro-form" name="registro-form" class="paciente" action="registrati.php" method="POST">
                                <input type="hidden" name="tipo" value="paziente"/><input type="hidden" id="fecha" name="fecha" value=""/>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nome <span class="text-danger">*</span> </label>
                                        <input type="text" class="form-control input-lg required" name="nome" placeholder="Es. Mario" value="{if isset($oPaziente->nome)}{$oPaziente->nome}{/if}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Cognome <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control input-lg required" name="cognome" placeholder="Es. Rossi" value="{if isset($oPaziente->cognome)}{$oPaziente->cognome}{/if}" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>Data di nascita <span class="text-danger">*</span></label><br />

                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        <input type="text" name="dataNascita" class="form-control input-lg required clearfix" placeholder="{if isset($oPaziente->dataNascita)}{$oPaziente->dataNascita|date_format:"%e %B %Y"}{else}gg/mm/aaaa{/if}" id="datepicker" required>

                                    </div><!-- input-group -->
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Sesso <span class="text-danger">*</span></label>
                                        <select name="sesso" id="sesso" class="form-control input-lg required" placeholder="Seleziona sesso..." data-placeholder="Seleziona sesso..." required>
                                            <option></option>
                                            <option value="M">Maschio</option> <option value="F">Femmina</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Telefono fisso<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control input-lg required" data-mask="99999999999" name="telefono" placeholder="Es. 06.12255555 "  required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Telefono cellulare</label>
                                        <input type="text" class="form-control input-lg required" data-mask="9999999999" name="telefonoMobile" placeholder="Es. 3334445555" value="{if isset($oPaziente->telefonoMobile)}{$oPaziente->telefonoMobile}{/if}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email personale <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control input-lg required" name="email" placeholder="Es. mario.rossi@ilmiodominio.com" value="{if isset($oPaziente->email)}{$oPaziente->email}{/if}" required>
                                    </div>
                                </div>
                                    <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Regione <span class="text-danger">*</span></label>
                                                <select name="regione" required="required" id="regione" class="select2 required" data-placeholder="Seleziona regione..." required>
                                                    <option></option>
                                                    {foreach $regioni as $value => $key}
                                                        <option {if $key['idregione']==$oMedico->fkRegioneAlbo}selected="selected"{/if} value="{$key['idregione']}">{$key['nomeregione']}</option>
                                                    {/foreach}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label id="response">Provincia  <span class="text-danger">*</span></label>
                                                <select name="provincia" required="required" id="provincia" class="select2 required" data-placeholder="Seleziona provincia..." required>
<option></option>
                                                    {if isset($oMedico->fkProvinciaAlbo)}<option selected="selected" value="{$oMedico->fkProvinciaAlbo}">{$oMedico->nomeProvinciaAlbo}</option>{/if}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label id="response">Comune <span class="text-danger">*</span></label>
                                                <select name="citta" required="required" id="citta" class="select2 required" data-placeholder="Seleziona citt&agrave;..." required>
                                                    <option></option>
                                                    {if isset($oMedico->fkComuneAlbo)}<option selected="selected" value="{$oMedico->fkComuneAlbo}">{$oMedico->nomeComuneAlbo}</option>{/if}
                                                </select>
                                            </div>
                                        </div>
                                                <div class="col-md-2">
                                            <div class="form-group">
                                                <label id="response">CAP <span class="text-danger">*</span></label>
                                                <select required="required" name="CAP" id="CAP" class="select2 " data-placeholder="Seleziona CAP..." required>
                                                    <option></option>
                                                    {if isset($oMedico->fkCAP)}<option selected="selected"></option>{/if}
                                                </select>
                                                <div id="CAPO"></div>
                                            </div>
                                        </div> 
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Indirizzo <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control input-lg required" name="indirizzo" placeholder="Es. Via delle libellule" value="{if isset($oPaziente->indirizzo)}{$oPaziente->indirizzo}{/if}" required>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label>Civico <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control input-lg required" name="numero" placeholder="Es. 77" value="{if isset($oPaziente->indirizzo)}{$oPaziente->indirizzo}{/if}">
                                    </div>
                                </div>                                   
                                <div class="clearfix"></div>
                               
                                <p><hr></p>
                                
                                    
                                    <div class="col-md-6 text-right col-md-offset-6"><button type="submit" class="btn btn-primary btn-perspective btn-lg">Registra il tuo paziente</button></div>
                            </form>
                        </div>



                    </div>

                </div>  <!-- End panel-body -->
            </div> <!-- End panel -->

        </div> <!-- end col -->

    </div> <!-- End row -->
     
                        
{include file="footer_public_1.tpl"}