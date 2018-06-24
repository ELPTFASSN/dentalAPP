<?php /* Smarty version Smarty-3.1.19, created on 2015-12-20 12:40:48
         compiled from "./templates/aggiunge_paziente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:709944979565897acb979b2-45117812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e2c7e1adb665767fce1d2311086c128a3f06e2a' => 
    array (
      0 => './templates/aggiunge_paziente.tpl',
      1 => 1450611647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '709944979565897acb979b2-45117812',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565897acc0aec7_09657201',
  'variables' => 
  array (
    'oPaziente' => 0,
    'aziende' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565897acc0aec7_09657201')) {function content_565897acc0aec7_09657201($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/beecloud.it/easysmile.beecloud.it/panel/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                            <h3 class="panel-title">compilazione del modulo di registro per pazienti</h3> 
                        </div> 
                        <div class="panel-body"> 
                            <form id="registro-form" name="registro-form" class="paciente" action="registrati.php" method="POST">
                                <input type="hidden" name="tipo" value="pazientes"/><input type="hidden" id="fecha" name="fecha" value=""/>

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
                                <div class="col-md-4">
                                    <label>Data di nascita <span class="text-danger">*</span></label><br />

                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        <input type="text" name="dataNascita" class="form-control input-lg required clearfix" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->dataNascita)) {?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oPaziente']->value->dataNascita,"%e %B %Y");?>
<?php } else { ?>gg/mm/aaaa<?php }?>" id="datepicker" required>

                                    </div><!-- input-group -->
                                </div>
                                        <div class="clearfix"></div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Telefono cellulare</label>
                                        <input type="text" class="form-control input-lg" data-mask="?9999999999" name="telefonoMobile" placeholder="Es. 3334445555" value="<?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->telefonoMobile)) {?><?php echo $_smarty_tpl->tpl_vars['oPaziente']->value->telefonoMobile;?>
<?php }?>">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Email personale</label>
                                        <input type="text" class="form-control input-lg" name="email" placeholder="Es. mario.rossi@ilmiodominio.com" value="<?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->email)) {?><?php echo $_smarty_tpl->tpl_vars['oPaziente']->value->email;?>
<?php }?>">
                                    </div>
                                </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Sceglie lo studio medico</label>
                                        <select id="studio" name="azienda" class="select2" data-placeholder="Seleziona studio medico...">
                                            <option></option>
                                            <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aziende']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['key']->key;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value['idAzienda'];?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value['denominazione'];?>
 - Partita IVA:<?php echo $_smarty_tpl->tpl_vars['key']->value['partitaIVA'];?>
 - Regione:<?php echo $_smarty_tpl->tpl_vars['key']->value['regione'];?>
</option>
                                            <?php } ?>
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
     
                        
<?php echo $_smarty_tpl->getSubTemplate ("footer_public_1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
