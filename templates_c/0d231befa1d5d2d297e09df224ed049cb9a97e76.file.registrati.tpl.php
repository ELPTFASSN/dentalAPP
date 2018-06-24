<?php /* Smarty version Smarty-3.1.19, created on 2015-10-12 16:31:43
         compiled from "./templates/registrati.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50859747155f04af3861018-50586350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d231befa1d5d2d297e09df224ed049cb9a97e76' => 
    array (
      0 => './templates/registrati.tpl',
      1 => 1444660171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50859747155f04af3861018-50586350',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55f04af38ceed6_39049261',
  'variables' => 
  array (
    'oMedico' => 0,
    'regioni' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f04af38ceed6_39049261')) {function content_55f04af38ceed6_39049261($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_public.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
                                                <input type="text" required="required" class="form-control input-lg required" name="nome" placeholder="Es. Mario" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->nome)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->nome;?>
<?php }?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Cognome <span class="text-danger">*</span></label>
                                                <input type="text" required="required" class="form-control input-lg required" name="cognome" placeholder="Es. Rossi" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->cognome)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->cognome;?>
<?php }?>">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Telefono <span class="text-danger">*</span></label>
                                                <input type="text" required="required" class="form-control input-lg required" data-mask="99999999999" name="telefono" placeholder="Es. 06.12255555 " value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->telefono)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->telefono;?>
<?php }?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Telefono Cellulare</label>
                                                <input type="text" class="form-control input-lg required" data-mask="9999999999" name="telefonoMobile" placeholder="Es. 3334445555" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->telefonoMobile)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->telefonoMobile;?>
<?php }?>">
                                            </div>
                                        </div>
                                            
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email <span class="text-danger">*</span></label>
                                                <input type="text" required="required" class="form-control input-lg required" name="email" placeholder="Es. mario.rossi@ilmiodominio.com" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->email)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->email;?>
<?php }?>">
                                            </div>
                                        </div>
                                                                                           
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Partita IVA <span class="text-danger">*</span></label>
                                                <input type="text" required="required" class="form-control input-lg required" name="partitaIVA" data-mask="9999999999" placeholder="Es. 321654987" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->partitaIVA)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->partitaIVA;?>
<?php }?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Numero Albo <span class="text-danger">*</span></label>
                                                <input type="text" required="required" class="form-control input-lg required" name="numeroAlbo" data-mask="9999999999" placeholder="Es. 321654987" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->numeroAlbo)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->numeroAlbo;?>
<?php }?>">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Regione Albo <span class="text-danger">*</span></label>
                                                <select name="regioneAlbo" required="required" id="regioneAlbo" class="select2 required" data-placeholder="Seleziona regione...">
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
                                                <label id="response">Provincia Albo <span class="text-danger">*</span></label>
                                                <select name="provinciaAlbo" required="required" id="provinciaAlbo" class="select2 required" data-placeholder="Seleziona provincia...">
<option></option>
                                                    <?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->fkProvinciaAlbo)) {?><option selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['oMedico']->value->fkProvinciaAlbo;?>
"><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->nomeProvinciaAlbo;?>
</option><?php }?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label id="response">Citt&agrave; Albo <span class="text-danger">*</span></label>
                                                <select name="cittaAlbo" required="required" id="cittaAlbo" class="select2 required" data-placeholder="Seleziona citt&agrave;...">
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
                                                    <input id="acceptTerms-2" required="required" name="acceptTerms2" type="checkbox" class="required">
                                                    <label for="acceptTerms-2">Ho letto, comprendo e accetto i termini e condizioni d'uso.</label>
                                                </div>

                                            </div>
                                        </div>

                                            <div class="col-md-6 text-right col-md-offset-6"><button type="submit" class="btn btn-primary btn-perspective btn-lg">Invia Registrazione</button></div>

                            </form>
                        </div>  <!-- End panel-body -->
                    </div> <!-- End panel -->

                </div> <!-- end col -->

            </div> <!-- End row -->

            <?php echo $_smarty_tpl->getSubTemplate ("footer_public.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
