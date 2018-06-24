<?php /* Smarty version Smarty-3.1.19, created on 2015-10-24 17:44:53
         compiled from "./templates/modifica_azienda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1553177159562b7eda7a0313-52291462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d78ee7a66174e065bb5e9906ba6a7806a0d5cc2' => 
    array (
      0 => './templates/modifica_azienda.tpl',
      1 => 1445696246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1553177159562b7eda7a0313-52291462',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562b7eda834677_45284581',
  'variables' => 
  array (
    'success' => 0,
    'error' => 0,
    'azienda' => 0,
    'regioni' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562b7eda834677_45284581')) {function content_562b7eda834677_45284581($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
            <?php if (!empty($_smarty_tpl->tpl_vars['success']->value)) {?>
            <div class="row">
                <div class="col-md-12">
                    
                        <div class="alert alert-success alert-bold-border fade in animated fadeInDown">
                            <i class="fa fa-fw fa-3x fa-check text-success" style="float:right;"></i>
                            <strong>Esito:<br>
                                <span class="text-success"><?php if (isset($_smarty_tpl->tpl_vars['success']->value)) {?><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
<?php }?></span></strong>
                        </div>
                    </div>
                </div>
            <?php }?> 
            <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
            <div class="row">
                <div class="col-md-12">
                    
                        <div class="alert alert-danger alert-bold-border fade in animated flash">
                            <i class="fa fa-fw fa-3x fa-exclamation-circle text-danger" style="float:right;"></i>
                            <strong>Si sono verificati i seguenti errori:<br>
                                <span class="text-danger"><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php }?></span></strong>
                        </div>
                    </div>
                </div>
            <?php }?>       
                                   <form action="<?php echo @constant('URL_FILE');?>
aziende.php" method="post" name="aggiorna_profilo_medico">
                                <input type="hidden" name="modifica" value="<?php echo $_smarty_tpl->tpl_vars['azienda']->value['idAzienda'];?>
">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Dati Societ&agrave;</h3></div>
                        <div class="panel-body">

     
                             <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Nome Societ&agrave; <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="denominazione" placeholder="Es. Studio Odontoiatrico Easy Smile" value="<?php echo $_smarty_tpl->tpl_vars['azienda']->value['denominazione'];?>
">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Partita IVA <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " data-mask="99999999999" name="partitaIVAAzienda" placeholder="ES. 12345678987" value="<?php echo $_smarty_tpl->tpl_vars['azienda']->value['partitaIVA'];?>
">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Nome rappresentante <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="nomeRap" placeholder="ES. Mario" value="<?php echo $_smarty_tpl->tpl_vars['azienda']->value['nomeRap'];?>
">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Cognome rappresentante <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="cognomeRap" placeholder="ES. Rosi" value="<?php echo $_smarty_tpl->tpl_vars['azienda']->value['cognomeRap'];?>
">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Email societ&agrave; <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="emailAzienda" placeholder="Es. mario.rossi@ilmiodominio.com" value="<?php echo $_smarty_tpl->tpl_vars['azienda']->value['emailAzienda'];?>
">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Telefono fisso </label>
                                                <input required="required" type="text" class="form-control input-lg" data-mask="99999999999" name="telefono" placeholder="ES. 077411111111" value="<?php echo $_smarty_tpl->tpl_vars['azienda']->value['telefono'];?>
">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Cellulare rappresentante <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="telefonoMobile" data-mask="9999999999" placeholder="ES. 3334445555" value="<?php echo $_smarty_tpl->tpl_vars['azienda']->value['telefonoMobile'];?>
">
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
                                                    <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['regioni']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['key']->key;
?>
                                                        <option <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['azienda']->value['fkRegione'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['key']->value['idregione']==$_tmp1) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['key']->value['idregione'];?>
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
                                                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['azienda']->value['fkProvincia'];?>
<?php $_tmp2=ob_get_clean();?><?php if (isset($_tmp2)) {?><option value='<?php echo $_smarty_tpl->tpl_vars['azienda']->value['fkProvincia'];?>
' selected="selected"><?php echo $_smarty_tpl->tpl_vars['azienda']->value['nomeprovincia'];?>
</option><?php }?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label id="response">Citt&agrave; <span class="text-danger">*</span></label>
                                                <select required="required" name="citta" id="citta" class="select2 " data-placeholder="Seleziona citt&agrave;...">
                                                    <option></option>
                                                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['azienda']->value['fkComune'];?>
<?php $_tmp3=ob_get_clean();?><?php if (isset($_tmp3)) {?><option value="<?php echo $_smarty_tpl->tpl_vars['azienda']->value['fkComune'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['azienda']->value['nomecomune'];?>
</option><?php }?>
                                                </select>
                                            </div>
                                        </div>    
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label id="response">CAP <span class="text-danger">*</span></label>
                                                <select required="required" name="CAP" id="CAP" class="select2 " data-placeholder="Seleziona CAP...">
                                                    <option></option>
                                                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['azienda']->value['cap'];?>
<?php $_tmp4=ob_get_clean();?><?php if (isset($_tmp4)) {?><option value="<?php echo $_smarty_tpl->tpl_vars['azienda']->value['cap'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['azienda']->value['cap'];?>
</option><?php }?>
                                                </select>
                                                <div id="CAPO"></div>
                                            </div>
                                        </div> 
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>Indirizzo <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg " name="indirizzo" placeholder="Es. Via delle libellule" value="<?php echo $_smarty_tpl->tpl_vars['azienda']->value['indirizzo'];?>
">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Civico <span class="text-danger">*</span></label>
                                                <input required="required" type="text" class="form-control input-lg "  name="numero" placeholder="Es. 77 Scala B7" value="<?php echo $_smarty_tpl->tpl_vars['azienda']->value['numero'];?>
">
                                            </div>
                                        </div>

                                        <div class="clearfix"></div>
                                       
                                       
                    </div>
                </div>
            </div>
                                            </div>
                                            <div class="row"><div class="col-md-12 text-right"><a href="aziende.php" class="btn btn-lg btn-perspective btn-danger waves-effect waves-light">Torna indietro <i class="fa fa-fw fa-backward"></i></a> <button type="submit" class="btn btn-lg btn-primary waves-effect waves-light">Invia modifiche <i class="fa fa-fw fa-check"></i></button></div></div>
                                   </form>
            <?php echo $_smarty_tpl->getSubTemplate ("footer_public.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
