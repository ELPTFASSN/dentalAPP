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
                            <h3 class="panel-title">compilazione del modulo di registro per aziende</h3> 
                        </div> 
                        <div class="panel-body"> 
                            <form id="registro-form" name="registro-form" class="paciente" action="registrati.php" method="POST">
                                <input type="hidden" name="tipo" value="aziendaca"/><input type="hidden" id="fecha" name="fecha" value=""/>

                                              <h3 class="perro">Dati Studio Medico</h3>
                                    <div class="clearfix"></div>
                                    <section>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nome Studio Medico <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="denominazione" placeholder="Es. Studio Odontoiatrico Easy Smile" value="{if isset($oMedico->specializzazione)}{$oMedico->specializzazione}{/if}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Partita IVA </label>
                                                <input type="text" class="form-control input-lg " data-mask="?9999999999" name="partitaIVAAzienda" placeholder="ES. 12345678987" value="{if isset($oMedico->partitaIVA)}{$oMedico->partitaIVA}{/if}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Telefono fisso </label>
                                                <input type="text" class="form-control input-lg" data-mask="?9999999999" name="telefonoAzienda" placeholder="ES. 077411111111" value="{if isset($oMedico->numeroAlbo)}{$oMedico->numeroAlbo}{/if}">
                                            </div>
                                        </div>
                                    <div class="clearfix"></div>


                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Regione <span class="text-danger">*</span></label>
                                                <select required="required" name="regione" id="regione" class="select2 " data-placeholder="Seleziona regione...">
                                                    <option></option>
                                                    {foreach $regioni as $value => $key}
                                                        <option {if $key['idregione']==$oMedico->fkRegione}selected="selected"{/if} value="{$key['idregione']}">{$key['nomeregione']}</option>
                                                    {/foreach}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label id="response">Provincia <span class="text-danger">*</span></label>
                                                <select required="required" name="provincia" id="provincia" class="select2 " placeholder="Seleziona provincia..." data-placeholder="Seleziona provincia...">
                                                    <option></option>
                                                    {if isset($oMedico->fkProvincia)}<option selected="selected"></option>{/if}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label id="response">Citt&agrave; <span class="text-danger">*</span></label>
                                                <select required="required" name="citta" id="citta" class="select2 " data-placeholder="Seleziona citt&agrave;...">
                                                    <option></option>
                                                    {if isset($oMedico->fkComune)}<option selected="selected"></option>{/if}
                                                </select>
                                            </div>
                                        </div>    
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label id="response">CAP <span class="text-danger">*</span></label>
                                                <select required="required" name="CAP" id="CAP" class="select2 " data-placeholder="Seleziona CAP...">
                                                    <option></option>
                                                    {if isset($oMedico->fkCAP)}<option selected="selected"></option>{/if}
                                                </select>
                                                <div id="CAPO"></div>
                                            </div>
                                        </div> 
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>Indirizzo <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="indirizzo" placeholder="Es. Via delle libellule" value="{if isset($oMedico->indirizzo)}{$oMedico->indirizzo}{/if}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Civico <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg "  name="numero" placeholder="Es. 77 Scala B7" value="{if isset($oMedico->indirizzo)}{$oMedico->indirizzo}{/if}">
                                            </div>
                                        </div>

                                        <div class="clearfix"></div>
                               
                                <p><hr></p>
                                
                                    
                                    <div class="col-md-6 text-right col-md-offset-6"><button type="submit" class="btn btn-primary btn-perspective btn-lg">Registra la tua azienda</button></div>
                            </form>
                        </div>



                    </div>

                </div>  <!-- End panel-body -->
            </div> <!-- End panel -->

        </div> <!-- end col -->

    </div> <!-- End row -->
     
                        
{include file="footer_public_1.tpl"}