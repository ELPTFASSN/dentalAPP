<?php /* Smarty version Smarty-3.1.19, created on 2015-10-18 16:25:44
         compiled from "./templates/registrati_paziente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1015903944560a62f9b89539-16702058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d9626c9b93bc0ef5df8a184cd71b9ad528eb5e9' => 
    array (
      0 => './templates/registrati_paziente.tpl',
      1 => 1445178185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1015903944560a62f9b89539-16702058',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_560a62f9c145b5_82281373',
  'variables' => 
  array (
    'oPaziente' => 0,
    'regioni' => 0,
    'key' => 0,
    'oMedico' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560a62f9c145b5_82281373')) {function content_560a62f9c145b5_82281373($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/intervolutions.com/pruebas.intervolutions.com/alfaone/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_public.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="content-page" style="margin: 10px auto;width:80%;" id="pachuli">
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
                                        <input type="text" class="form-control input-lg required" name="nome" placeholder="Es. Mario" value="<?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->nome)) {?><?php echo $_smarty_tpl->tpl_vars['oPaziente']->value->nome;?>
<?php }?>" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Cognome <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control input-lg required" name="cognome" placeholder="Es. Rossi" value="<?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->cognome)) {?><?php echo $_smarty_tpl->tpl_vars['oPaziente']->value->cognome;?>
<?php }?>" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>Data di nascita <span class="text-danger">*</span></label><br />

                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        <input type="text" name="dataNascita" class="form-control input-lg required clearfix" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->dataNascita)) {?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oPaziente']->value->dataNascita,"%e %B %Y");?>
<?php } else { ?>gg/mm/aaaa<?php }?>" id="datepicker" required>

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
                                        <input type="text" class="form-control input-lg required" data-mask="9999999999" name="telefonoMobile" placeholder="Es. 3334445555" value="<?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->telefonoMobile)) {?><?php echo $_smarty_tpl->tpl_vars['oPaziente']->value->telefonoMobile;?>
<?php }?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email personale <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control input-lg required" name="email" placeholder="Es. mario.rossi@ilmiodominio.com" value="<?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->email)) {?><?php echo $_smarty_tpl->tpl_vars['oPaziente']->value->email;?>
<?php }?>" required>
                                    </div>
                                </div>
                                    <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Regione <span class="text-danger">*</span></label>
                                                <select name="regione" required="required" id="regione" class="select2 required" data-placeholder="Seleziona regione..." required>
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
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label id="response">Provincia  <span class="text-danger">*</span></label>
                                                <select name="provincia" required="required" id="provincia" class="select2 required" data-placeholder="Seleziona provincia..." required>
<option></option>
                                                    <?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->fkProvinciaAlbo)) {?><option selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['oMedico']->value->fkProvinciaAlbo;?>
"><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->nomeProvinciaAlbo;?>
</option><?php }?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label id="response">Comune <span class="text-danger">*</span></label>
                                                <select name="citta" required="required" id="citta" class="select2 required" data-placeholder="Seleziona citt&agrave;..." required>
                                                    <option></option>
                                                    <?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->fkComuneAlbo)) {?><option selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['oMedico']->value->fkComuneAlbo;?>
"><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->nomeComuneAlbo;?>
</option><?php }?>
                                                </select>
                                            </div>
                                        </div>
                                                <div class="col-md-2">
                                            <div class="form-group">
                                                <label id="response">CAP <span class="text-danger">*</span></label>
                                                <select required="required" name="CAP" id="CAP" class="select2 " data-placeholder="Seleziona CAP..." required>
                                                    <option></option>
                                                    <?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->fkCAP)) {?><option selected="selected"></option><?php }?>
                                                </select>
                                                <div id="CAPO"></div>
                                            </div>
                                        </div> 
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Indirizzo <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control input-lg required" name="indirizzo" placeholder="Es. Via delle libellule" value="<?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->indirizzo)) {?><?php echo $_smarty_tpl->tpl_vars['oPaziente']->value->indirizzo;?>
<?php }?>" required>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label>Civico <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control input-lg required" name="numero" placeholder="Es. 77" value="<?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->indirizzo)) {?><?php echo $_smarty_tpl->tpl_vars['oPaziente']->value->indirizzo;?>
<?php }?>">
                                    </div>
                                </div>                                   
                                <div class="clearfix"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Hai ricevuto un codice amico? Inseriscilo qui</label>
                                        <input type="text" class="form-control input-lg required" name="codiceIscrizione" placeholder="ES. ABNER654987" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->numeroAlbo)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->numeroAlbo;?>
<?php }?>">
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

                                                    In caso le variazioni non siano accettate, il lettore può annullare in ogni momento il proprio account  scrivendo a privacy@ilfattoquotidiano.it o inviando una lettera raccomandata A/R indirizzata a Easy Smile Group SrL, con sede in Via Valadier n. 42 Roma, fermo restando che la prosecuzione dell’utilizzo dei servizi comporta l’accettazione delle nuove condizioni..</p> 
                                            </div> 
                                        </div>
                                        <div class="checkbox checkbox-primary">
                                            <input id="acceptTerms-2" name="acceptTerms2" type="checkbox" class="required">
                                            <label for="acceptTerms-2">Ho letto, comprendo e accetto i termini e condizioni d'uso.</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 text-right col-md-offset-6"><button type="submit" class="btn btn-primary btn-perspective btn-lg">Invia Registrazione</button></div>
                            </form>
                        </div>



                    </div>

                </div>  <!-- End panel-body -->
            </div> <!-- End panel -->

        </div> <!-- end col -->

    </div> <!-- End row -->

    <?php echo $_smarty_tpl->getSubTemplate ("footer_public.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
