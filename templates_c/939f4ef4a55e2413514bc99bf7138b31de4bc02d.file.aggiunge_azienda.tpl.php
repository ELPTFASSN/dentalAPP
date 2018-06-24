<?php /* Smarty version Smarty-3.1.19, created on 2016-03-22 14:46:09
         compiled from "./templates/aggiunge_azienda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149527645652cfd9ed3497-55963850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '939f4ef4a55e2413514bc99bf7138b31de4bc02d' => 
    array (
      0 => './templates/aggiunge_azienda.tpl',
      1 => 1455793051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149527645652cfd9ed3497-55963850',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5652cfda001c33_55395455',
  'variables' => 
  array (
    'oMedico' => 0,
    'regioni' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652cfda001c33_55395455')) {function content_5652cfda001c33_55395455($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



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
                                                <input required="required" type="text" class="form-control input-lg " data-mask="?9999999999" name="partitaIVAAzienda" placeholder="ES. 12345678987" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->partitaIVA)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->partitaIVA;?>
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
                                                <input required="required" type="text" class="form-control input-lg" data-mask="?9999999999" name="telefonoAzienda" placeholder="ES. 077411111111" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->numeroAlbo)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->numeroAlbo;?>
<?php }?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Cellulare rappresentante <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="telefonoMobileAzienda" data-mask="?9999999999" placeholder="ES. 3334445555" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->numeroAlbo)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->numeroAlbo;?>
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
                               
                                <p><hr></p>
                                
                                    
                                    <div class="col-md-6 text-right col-md-offset-6"><button type="submit" class="btn btn-primary btn-perspective btn-lg">Registra la tua azienda</button></div>
                            </form>
                        </div>



                    </div>

                </div>  <!-- End panel-body -->
            </div> <!-- End panel -->

        </div> <!-- end col -->

    </div> <!-- End row -->
     
                        
<?php echo $_smarty_tpl->getSubTemplate ("footer_public_1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
