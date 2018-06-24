{include file="header_public.tpl"}

<div class="content-page" style="margin: 10px auto;width:80%;" id="pachuli">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Wizard with Validation -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">compilazione del modulo di registro per medici</h3> 
                        </div> 
                        <div class="panel-body"> 
                            <form action="registrati.php" name="registro-form" id="registro-form" method="POST">
                                <input type="hidden" name="tipo" value="medico"/>
                             

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Nome <span class="text-danger">*</span> </label>
                                                <input type="text" required="required" class="form-control input-lg required" name="nome" placeholder="Es. Mario" value="{if isset($oMedico->nome)}{$oMedico->nome}{/if}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Cognome <span class="text-danger">*</span></label>
                                                <input type="text" required="required" class="form-control input-lg required" name="cognome" placeholder="Es. Rossi" value="{if isset($oMedico->cognome)}{$oMedico->cognome}{/if}">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Telefono <span class="text-danger">*</span></label>
                                                <input type="text" required="required" class="form-control input-lg required" data-mask="999?99999999" name="telefono" placeholder="Es. 06.12255555 " value="{if isset($oMedico->telefono)}{$oMedico->telefono}{/if}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Telefono Cellulare <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control input-lg required" data-mask="999?9999999" name="telefonoMobile" placeholder="Es. 3334445555" value="{if isset($oMedico->telefonoMobile)}{$oMedico->telefonoMobile}{/if}">
                                            </div>
                                        </div>
                                            
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email <span class="text-danger">*</span></label>
                                                <input type="text" required="required" class="form-control input-lg required" name="email" placeholder="Es. mario.rossi@ilmiodominio.com" value="{if isset($oMedico->email)}{$oMedico->email}{/if}">
                                            </div>
                                        </div>
                                                                                           
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Partita IVA <span class="text-danger">*</span></label>
                                                <input type="text" required="required" class="form-control input-lg required" name="partitaIVA" data-mask="9?999999999" placeholder="Es. 321654987" value="{if isset($oMedico->partitaIVA)}{$oMedico->partitaIVA}{/if}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Numero Albo <span class="text-danger">*</span></label>
                                                <input type="text" required="required" class="form-control input-lg required" name="numeroAlbo" data-mask="9?999999999" placeholder="Es. 321654987" value="{if isset($oMedico->numeroAlbo)}{$oMedico->numeroAlbo}{/if}">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Regione Albo <span class="text-danger">*</span></label>
                                                <select name="regioneAlbo" required="required" id="regioneAlbo" class="select2 required" data-placeholder="Seleziona regione...">
                                                    <option></option>
                                                    {foreach $regioni as $value => $key}
                                                        <option {if $key['idregione']==$oMedico->fkRegioneAlbo}selected="selected"{/if} value="{$key['idregione']}">{$key['nomeregione']}</option>
                                                    {/foreach}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label id="response">Provincia Albo <span class="text-danger">*</span></label>
                                                <select name="provinciaAlbo" required="required" id="provinciaAlbo" class="select2 required" data-placeholder="Seleziona provincia...">
<option></option>
                                                    {if isset($oMedico->fkProvinciaAlbo)}<option selected="selected" value="{$oMedico->fkProvinciaAlbo}">{$oMedico->nomeProvinciaAlbo}</option>{/if}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label id="response">Citt&agrave; Albo <span class="text-danger">*</span></label>
                                                <select name="cittaAlbo" required="required" id="cittaAlbo" class="select2 required" data-placeholder="Seleziona citt&agrave;...">
                                                    <option></option>
                                                    {if isset($oMedico->fkComuneAlbo)}<option selected="selected" value="{$oMedico->fkComuneAlbo}">{$oMedico->nomeComuneAlbo}</option>{/if}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                                <label>Hai ricevuto un codice di iscrizione? Inseriscilo qui</label>
                                                <input type="text" class="form-control input-lg required" name="codiceIscrizione" placeholder="ES. ABNER654987" value="{if isset($oMedico->numeroAlbo)}{$oMedico->numeroAlbo}{/if}">
                                            </div>
                                        </div>
                                            <div class="clearfix"></div>
                                             <div class=" alert alert-info"><i class="fa fa-fw fa-info-circle"></i> I campi contrasegnati con (<span class="text-danger">*</span>) sono obbligatori</div>
                                
                                        <div class="form-group clearfix">
                                            <div class="col-lg-12">
                                                <div class="panel panel-border panel-primary">
                                                    <div class="panel-heading"> 
                                                        <h3 class="panel-title">Termini e condizioni d'uso</h3> 
                                                    </div> 
                                                    <div class="panel-body"> 
                                                        <p>Easy Smile Group SrL si riserva la facoltà di modificare, aggiungere o eliminare parti di queste condizioni, portandone a conoscenza gli interessati attraverso la pubblicazione delle modifiche nel sito o attraverso la posta elettronica. Ogni lettore è tenuto a verificare periodicamente queste condizioni per accertarsi di eventuali modifiche intervenute successivamente all’ultima consultazione del sito. In ogni caso l’utilizzo del sito e dei suoi servizi comporta l’accettazione dei cambiamenti nel frattempo intervenuti.</p><p>

                                                            In caso le variazioni non siano accettate, il lettore può annullare in ogni momento il proprio account  scrivendo a easysmilegr@gmail.com o inviando una lettera raccomandata A/R indirizzata a Easy Smile Group SrL, con sede in Via Valadier n. 42 Roma, fermo restando che la prosecuzione dell’utilizzo dei servizi comporta l’accettazione delle nuove condizioni.</p> 
                                                    </div> 
                                                </div>
                                                <div class="checkbox checkbox-primary">
                                                    <input id="acceptTerms-2" required="required" name="acceptTerms2" type="checkbox" class="required" required>
                                                    <label for="acceptTerms-2">Ho letto, comprendo e accetto i termini e condizioni d'uso <span class="text-danger">*</span></label>
                                                </div>

                                            </div>
                                        </div>

                                            <div class="col-md-6 text-right col-md-offset-6"><button type="submit" class="btn btn-primary btn-perspective btn-lg">Conferma</button></div>

                            </form>
                        </div>  <!-- End panel-body -->
                    </div> <!-- End panel -->

                </div> <!-- end col -->

            </div> <!-- End row -->

            {include file="footer_public.tpl"}