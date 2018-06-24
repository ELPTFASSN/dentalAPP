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
                            <h3 class="panel-title">compilazione del modulo di registro per aziende</h3> 
                        </div> 
                        <div class="panel-body"> 
                            <form name="registro-form" id="registro-form" action="registrati.php" method="POST">
                                <input required="required" type="hidden" name="tipo" value="azienda">
                              
                                    <h3 class="perro">Dati Societ&agrave;</h3>
                                    <div class="clearfix"></div>
                                    <section>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Nome Societ&agrave; <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="denominazione" placeholder="Es. Studio Odontoiatrico Dental Italia" value="{if isset($oMedico->specializzazione)}{$oMedico->specializzazione}{/if}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Partita IVA <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " data-mask="9?999999999" name="partitaIVAAzienda" placeholder="ES. 12345678987" value="{if isset($oMedico->partitaIVA)}{$oMedico->partitaIVA}{/if}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Nome rappresentante <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="nomeRap" placeholder="ES. Mario" value="{if isset($oMedico->partitaIVA)}{$oMedico->partitaIVA}{/if}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Cognome rappresentante <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="cognomeRap" placeholder="ES. Rosi" value="{if isset($oMedico->partitaIVA)}{$oMedico->partitaIVA}{/if}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Email societ&agrave; <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="emailAzienda" placeholder="Es. mario.rossi@ilmiodominio.com" value="{if isset($oMedico->email)}{$oMedico->email}{/if}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Telefono fisso <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg" data-mask="99?99999999" name="telefonoAzienda" placeholder="ES. 077411111111" value="{if isset($oMedico->numeroAlbo)}{$oMedico->numeroAlbo}{/if}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Cellulare rappresentante <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="telefonoMobileAzienda" data-mask="999?9999999" placeholder="ES. 3334445555" value="{if isset($oMedico->numeroAlbo)}{$oMedico->numeroAlbo}{/if}">
                                            </div>
                                        </div>
                                    </section>

                                    <h3 class="perro pabajol">Domicilio Societ&agrave;</h3>
                                    <div class="clearfix"></div>
                                    <section>

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

                                    </section>
                                    <h3 class="perro pabajol">Direttore Sanitario</h3>
                                    <div class="clearfix"></div>
                                    <section>


                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Nome <span class="text-danger">*</span> </label>
                                                <input required="required" type="text" class="form-control input-lg " name="nome" placeholder="Es. Mario" value="{if isset($oMedico->nome)}{$oMedico->nome}{/if}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Cognome <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="cognome" placeholder="Es. Rossi" value="{if isset($oMedico->cognome)}{$oMedico->cognome}{/if}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Email  <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="email" class="validate[,custom[email]]" placeholder="Es. mario.rossi@ilmiodominio.com" value="{if isset($oMedico->email)}{$oMedico->email}{/if}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Telefono Cellulare <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " data-mask="999?9999999" name="telefonoMobile" placeholder="Es. 3334445555" value="{if isset($oMedico->telefonoMobile)}{$oMedico->telefonoMobile}{/if}">
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>            

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Numero Albo <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="numeroAlbo" data-mask="9?999999999" placeholder="Es. 123456789" value="{if isset($oMedico->numeroAlbo)}{$oMedico->numeroAlbo}{/if}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Regione Albo <span class="text-danger">*</span></label>
                                                <select required="required" name="regioneAlbo" id="regioneAlbo" class="select2 " data-placeholder="Seleziona regione...">
                                                    <option></option>
                                                    {foreach $regioni as $value => $key}
                                                        <option {if $key['idregione']==$oMedico->fkRegioneAlbo}selected="selected"{/if} value="{$key['idregione']}">{$key['nomeregione']}</option>
                                                    {/foreach}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label id="response">Provincia Albo <span class="text-danger">*</span></label>
                                                <select required="required" name="provinciaAlbo" id="provinciaAlbo" class="select2 validate[]" data-placeholder="Seleziona provincia...">
                                                    <option></option>
                                                    {if isset($oMedico->fkProvinciaAlbo)}<option selected="selected" value="{$oMedico->fkProvinciaAlbo}">{$oMedico->nomeProvinciaAlbo}</option>{/if}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label id="response">Citt&agrave; Albo <span class="text-danger">*</span></label>
                                                <select required="required" name="cittaAlbo" id="cittaAlbo" class="select2 validate[]" data-placeholder="Seleziona citt&agrave;...">
                                                    <option></option>
                                                    {if isset($oMedico->fkComuneAlbo)}<option selected="selected" value="{$oMedico->fkComuneAlbo}">{$oMedico->nomeComuneAlbo}</option>{/if}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Hai ricevuto un codice di iscrizione? Inseriscilo qui</label>
                                                <input type="text" class="form-control input-lg " name="codiceIscrizione" placeholder="ES. ABNER654987" value="{if isset($oMedico->numeroAlbo)}{$oMedico->numeroAlbo}{/if}">
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            
                                        </div>
                                    </section>
                                            <div class=" alert alert-info"><i class="fa fa-fw fa-info-circle"></i> I campi contrasegnati con (<span class="text-danger">*</span>) sono obbligatori</div>
                                    <section class="pabajol">
                                        <div class="form-group clearfix">
                                            <div class="col-lg-12">
                                                <div class="panel panel-border panel-primary">
                                                    <div class="panel-heading"> 
                                                        <h3 class="panel-title">Termini e condizioni d'uso</h3> 
                                                    </div> 

                                                    <div class="panel-body"> 

                                                        <p>Dental Italia Group SrL si riserva la facoltà di modificare, aggiungere o eliminare parti di queste condizioni, portandone a conoscenza gli interessati attraverso la pubblicazione delle modifiche nel sito o attraverso la posta elettronica. Ogni lettore è tenuto a verificare periodicamente queste condizioni per accertarsi di eventuali modifiche intervenute successivamente all’ultima consultazione del sito. In ogni caso l’utilizzo del sito e dei suoi servizi comporta l’accettazione dei cambiamenti nel frattempo intervenuti.</p><p>

                                                            In caso le variazioni non siano accettate, il lettore può annullare in ogni momento il proprio account  scrivendo a easysmilegr@gmail.com o inviando una lettera raccomandata A/R indirizzata a Dental Italia Group SrL, con sede in Via Valadier n. 42 Roma, fermo restando che la prosecuzione dell’utilizzo dei servizi comporta l’accettazione delle nuove condizioni.</p> 
                                                    </div> 
                                                </div>
                                                <div class="checkbox checkbox-primary">
                                                    <input id="acceptTerms-2" required="required" name="acceptTerms2" type="checkbox" class="required" required>
                                                    <label for="acceptTerms-2">Ho letto, comprendo e accetto i termini e condizioni d'uso <span class="text-danger">*</span></label>
                                                </div>

                                            </div>
                                        </div>

                                    </section>
                                            <section>
                                                
                                                <div class="col-md-12 text-right"><button type="submit" class="btn btn-perspective btn-lg btn-primary" id="envialo">Conferma <i class="fa fa-fw fa-check"></i></button></div>
                                            </section>
                            </form>
                        </div>  <!-- End panel-body -->
                    </div> <!-- End panel -->

                </div> <!-- end col -->

            </div> <!-- End row -->
    
                
            
            {include file="footer_public.tpl"}