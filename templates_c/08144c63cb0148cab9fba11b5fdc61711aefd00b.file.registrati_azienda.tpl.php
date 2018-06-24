<?php /* Smarty version Smarty-3.1.19, created on 2015-10-22 16:39:06
         compiled from "./templates/registrati_azienda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18030686375628f50a18d049-57752921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08144c63cb0148cab9fba11b5fdc61711aefd00b' => 
    array (
      0 => './templates/registrati_azienda.tpl',
      1 => 1445333870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18030686375628f50a18d049-57752921',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oMedico' => 0,
    'regioni' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5628f50a239c34_37415026',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5628f50a239c34_37415026')) {function content_5628f50a239c34_37415026($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_public.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
                                                <input required="required" type="text" class="form-control input-lg " name="denominazione" placeholder="Es. Studio Odontoiatrico Easy Smile" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->specializzazione)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->specializzazione;?>
<?php }?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Partita IVA <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " data-mask="9999999999" name="partitaIVAAzienda" placeholder="ES. 12345678987" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->partitaIVA)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->partitaIVA;?>
<?php }?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Nome rappresentante <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="nomeRap" placeholder="ES. Mario" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->partitaIVA)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->partitaIVA;?>
<?php }?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Cognome rappresentante <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="cognomeRap" placeholder="ES. Rosi" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->partitaIVA)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->partitaIVA;?>
<?php }?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Email societ&agrave; <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="emailAzienda" placeholder="Es. mario.rossi@ilmiodominio.com" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->email)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->email;?>
<?php }?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Telefono fisso </label>
                                                <input required="required" type="text" class="form-control input-lg" data-mask="9999999999" name="telefonoAzienda" placeholder="ES. 077411111111" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->numeroAlbo)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->numeroAlbo;?>
<?php }?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Cellulare rappresentante <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="telefonoMobileAzienda" data-mask="9999999999" placeholder="ES. 3334445555" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->numeroAlbo)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->numeroAlbo;?>
<?php }?>">
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
                                                    <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['regioni']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['key']->key;
?>
                                                        <option <?php if ($_smarty_tpl->tpl_vars['key']->value['idregione']==$_smarty_tpl->tpl_vars['oMedico']->value->fkRegione) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['key']->value['idregione'];?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value['nomeregione'];?>
</option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label id="response">Provincia <span class="text-danger">*</span></label>
                                                <select required="required" name="provincia" id="provincia" class="select2 " placeholder="Seleziona provincia..." data-placeholder="Seleziona provincia...">
                                                    <option></option>
                                                    <?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->fkProvincia)) {?><option selected="selected"></option><?php }?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label id="response">Citt&agrave; <span class="text-danger">*</span></label>
                                                <select required="required" name="citta" id="citta" class="select2 " data-placeholder="Seleziona citt&agrave;...">
                                                    <option></option>
                                                    <?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->fkComune)) {?><option selected="selected"></option><?php }?>
                                                </select>
                                            </div>
                                        </div>    
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label id="response">CAP <span class="text-danger">*</span></label>
                                                <select required="required" name="CAP" id="CAP" class="select2 " data-placeholder="Seleziona CAP...">
                                                    <option></option>
                                                    <?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->fkCAP)) {?><option selected="selected"></option><?php }?>
                                                </select>
                                                <div id="CAPO"></div>
                                            </div>
                                        </div> 
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>Indirizzo <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="indirizzo" placeholder="Es. Via delle libellule" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->indirizzo)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->indirizzo;?>
<?php }?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Civico <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg "  name="numero" placeholder="Es. 77 Scala B7" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->indirizzo)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->indirizzo;?>
<?php }?>">
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
                                                <input required="required" type="text" class="form-control input-lg " name="nome" placeholder="Es. Mario" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->nome)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->nome;?>
<?php }?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Cognome <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="cognome" placeholder="Es. Rossi" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->cognome)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->cognome;?>
<?php }?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Email  <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="email" class="validate[,custom[email]]" placeholder="Es. mario.rossi@ilmiodominio.com" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->email)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->email;?>
<?php }?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Telefono Cellulare</label>
                                                <input required="required" type="text" class="form-control input-lg " data-mask="9999999999" name="telefonoMobile" placeholder="Es. 3334445555" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->telefonoMobile)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->telefonoMobile;?>
<?php }?>">
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>            

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Numero Albo <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="numeroAlbo" data-mask="9999999999" placeholder="Es. 123456789" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->numeroAlbo)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->numeroAlbo;?>
<?php }?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Regione Albo <span class="text-danger">*</span></label>
                                                <select required="required" name="regioneAlbo" id="regioneAlbo" class="select2 " data-placeholder="Seleziona regione...">
                                                    <option></option>
                                                    <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['regioni']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['key']->key;
?>
                                                        <option <?php if ($_smarty_tpl->tpl_vars['key']->value['idregione']==$_smarty_tpl->tpl_vars['oMedico']->value->fkRegioneAlbo) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['key']->value['idregione'];?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value['nomeregione'];?>
</option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label id="response">Provincia Albo <span class="text-danger">*</span></label>
                                                <select required="required" name="provinciaAlbo" id="provinciaAlbo" class="select2 validate[]" data-placeholder="Seleziona provincia...">
                                                    <option></option>
                                                    <?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->fkProvinciaAlbo)) {?><option selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['oMedico']->value->fkProvinciaAlbo;?>
"><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->nomeProvinciaAlbo;?>
</option><?php }?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label id="response">Citt&agrave; Albo <span class="text-danger">*</span></label>
                                                <select required="required" name="cittaAlbo" id="cittaAlbo" class="select2 validate[]" data-placeholder="Seleziona citt&agrave;...">
                                                    <option></option>
                                                    <?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->fkComuneAlbo)) {?><option selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['oMedico']->value->fkComuneAlbo;?>
"><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->nomeComuneAlbo;?>
</option><?php }?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Hai ricevuto un codice di iscrizione? Inseriscilo qui</label>
                                                <input type="text" class="form-control input-lg " name="codiceIscrizione" placeholder="ES. ABNER654987" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->numeroAlbo)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->numeroAlbo;?>
<?php }?>">
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

                                                        <p>Easy Smile Group SrL si riserva la facoltà di modificare, aggiungere o eliminare parti di queste condizioni, portandone a conoscenza gli interessati attraverso la pubblicazione delle modifiche nel sito o attraverso la posta elettronica. Ogni lettore è tenuto a verificare periodicamente queste condizioni per accertarsi di eventuali modifiche intervenute successivamente all’ultima consultazione del sito. In ogni caso l’utilizzo del sito e dei suoi servizi comporta l’accettazione dei cambiamenti nel frattempo intervenuti.</p><p>

                                                            In caso le variazioni non siano accettate, il lettore può annullare in ogni momento il proprio account  scrivendo a privacy@ilfattoquotidiano.it o inviando una lettera raccomandata A/R indirizzata a Easy Smile Group SrL, con sede in Via Valadier n. 42 Roma, fermo restando che la prosecuzione dell’utilizzo dei servizi comporta l’accettazione delle nuove condizioni..</p> 
                                                    </div> 
                                                </div>
                                                <div class="checkbox checkbox-primary">
                                                    <input required="required" id="acceptTerms-2" name="acceptTerms2" type="checkbox">
                                                    <label for="acceptTerms-2">Ho letto, comprendo e accetto i termini e condizioni d'uso.</label>
                                                </div>

                                            </div>
                                        </div>

                                    </section>
                                            <section>
                                                
                                                <div class="col-md-12 text-right"><button type="submit" class="btn btn-perspective btn-lg btn-primary" id="envialo">Invia Registrazione <i class="fa fa-fw fa-check"></i></button></div>
                                            </section>
                            </form>
                        </div>  <!-- End panel-body -->
                    </div> <!-- End panel -->

                </div> <!-- end col -->

            </div> <!-- End row -->
    
                
            
            <?php echo $_smarty_tpl->getSubTemplate ("footer_public.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
