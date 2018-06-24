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
                                <input type="hidden" name="tipo" value="pazientes"/><input type="hidden" id="fecha" name="fecha" value=""/>

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
                                <div class="col-md-4">
                                    <label>Data di nascita <span class="text-danger">*</span></label><br />

                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        <input type="text" name="dataNascita" class="form-control input-lg required clearfix" placeholder="{if isset($oPaziente->dataNascita)}{$oPaziente->dataNascita|date_format:"%e %B %Y"}{else}gg/mm/aaaa{/if}" id="datepicker" required>

                                    </div><!-- input-group -->
                                </div>
                                        <div class="clearfix"></div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Telefono cellulare</label>
                                        <input type="text" class="form-control input-lg" data-mask="?9999999999" name="telefonoMobile" placeholder="Es. 3334445555" value="{if isset($oPaziente->telefonoMobile)}{$oPaziente->telefonoMobile}{/if}">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Email personale</label>
                                        <input type="text" class="form-control input-lg" name="email" placeholder="Es. mario.rossi@ilmiodominio.com" value="{if isset($oPaziente->email)}{$oPaziente->email}{/if}">
                                    </div>
                                </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Sceglie lo studio medico</label>
                                        <select id="studio" name="azienda" class="select2" data-placeholder="Seleziona studio medico...">
                                            <option></option>
                                            {foreach $aziende as $value => $key}
                                                <option value="{$key['idAzienda']}">{$key['denominazione']} - Partita IVA:{$key['partitaIVA']} - Regione:{$key['regione']}</option>
                                            {/foreach}
                                        </select>
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