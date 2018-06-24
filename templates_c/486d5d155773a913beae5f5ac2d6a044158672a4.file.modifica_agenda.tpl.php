<?php /* Smarty version Smarty-3.1.19, created on 2015-10-18 18:03:51
         compiled from "./templates/modifica_agenda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58840664561cdd839d4697-63875143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '486d5d155773a913beae5f5ac2d6a044158672a4' => 
    array (
      0 => './templates/modifica_agenda.tpl',
      1 => 1445076696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58840664561cdd839d4697-63875143',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_561cdd83a0dfe8_18431802',
  'variables' => 
  array (
    'error' => 0,
    'agenda' => 0,
    'tipo' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561cdd83a0dfe8_18431802')) {function content_561cdd83a0dfe8_18431802($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/intervolutions.com/pruebas.intervolutions.com/alfaone/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Modifica Appuntamento</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_medico.php">BackOffice</a></li>
                        <li><a href="agenda.php">Agenda</a></li>
                        <li class="active">Modifica appuntamento</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                        <div class="alert alert-danger alert-bold-border fade in animated flash">
                            <i class="fa fa-fw fa-3x fa-exclamation-circle text-danger" style="float:right;"></i>
                            <strong>Si sono verificati i seguenti errori:<br>
                                <span class="text-danger"><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php }?></span></strong>
                        </div>
                    </div>
                </div>
            <?php }?>       
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-border panel-primary">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Tipo di Appuntamento</h3> 
                        </div> 
                        <div class="panel-body">
                            <h3><?php echo $_smarty_tpl->tpl_vars['agenda']->value['tipoAppuntamento'];?>
</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-border panel-primary">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Paziente</h3> 
                        </div> 
                        <div class="panel-body">
                            <h3><?php echo $_smarty_tpl->tpl_vars['agenda']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['agenda']->value['cognome'];?>
</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-border panel-primary">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Data e ora dell'appuntamento</h3> 
                        </div> 
                        <div class="panel-body">
                            <h3><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['agenda']->value['dataAppuntamento'],"%d/%m/%Y");?>
 alle <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['agenda']->value['dataAppuntamento'],"%H:%M");?>
</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-border panel-primary">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Stato dell'appuntamento</h3> 
                        </div> 
                        <div class="panel-body">
                            <h3><?php if ($_smarty_tpl->tpl_vars['agenda']->value['fkStatoAppuntamento']=='1'||$_smarty_tpl->tpl_vars['agenda']->value['fkStatoAppuntamento']=='2') {?><span class="label label-primary"><i class="fa fa-fw fa-clock-o"></i> In attesa di conferma</span> <a href="agenda.php?task=conferma&id=<?php echo $_smarty_tpl->tpl_vars['agenda']->value['idAgenda'];?>
" class="btn btn-sm btn-success"> Conferma <i class='fa fa-fw fa-check'></i></a> <a href="agenda.php?task=cancella&id=<?php echo $_smarty_tpl->tpl_vars['agenda']->value['idAgenda'];?>
" class="btn btn-sm btn-danger"> Cancella <i class='fa fa-fw fa-times'></i></a><?php } elseif ($_smarty_tpl->tpl_vars['agenda']->value['fkStatoAppuntamento']=='3') {?><span class="label label-success"><i class="fa fa-fw fa-check"></i> Appuntamento confermato</span> <a href="agenda.php?task=cancella&id=<?php echo $_smarty_tpl->tpl_vars['agenda']->value['idAgenda'];?>
" class="btn btn-sm btn-danger"> Cancella <i class='fa fa-fw fa-times'></i></a><?php } elseif ($_smarty_tpl->tpl_vars['agenda']->value['fkStatoAppuntamento']=='4') {?><span class="label label-warning">Appuntamento spostato</span><?php } elseif ($_smarty_tpl->tpl_vars['agenda']->value['fkStatoAppuntamento']=='9') {?><span class="label label-danger"><i class="fa fa-fw fa-trash-o"></i> Appuntamento cancellato</span><?php }?></h3>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary panel-border">
                        <div class="panel-heading">
                            <h3 class="panel-title">Modifica del appuntamento
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo @constant('URL_FILE');?>
agenda.php" method="post" name="aggiorna_profilo_medico">
                                <input type="hidden" name="idAgenda" value="<?php echo $_smarty_tpl->tpl_vars['agenda']->value['idAgenda'];?>
">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Tipo di appuntamento</label>
                                        <select name="tipo" class="select2" data-placeholder="Seleziona tipologia...">
                                            <option></option>
                                            <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tipo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['key']->key;
?>
                                                <option <?php if ($_smarty_tpl->tpl_vars['agenda']->value['idTipoAppuntamento']==$_smarty_tpl->tpl_vars['key']->value['idTipoAppuntamento']) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['key']->value['idTipoAppuntamento'];?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value['tipoAppuntamento'];?>
</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label>Data del appuntamento <span class="text-danger">*</span></label><br />

                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        <input type="text" name="data" class="form-control input-lg required clearfix" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['agenda']->value['dataAppuntamento'])) {?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['agenda']->value['dataAppuntamento'],"%e %B %Y");?>
"  value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['agenda']->value['dataAppuntamento'],"%e %B %Y");?>
"<?php } else { ?>gg/mm/aaaa"<?php }?> data-date-start-date="0d" id="datepicker" required>

                                    </div><!-- input-group -->
                                </div>
                                <div class="col-md-3">
                                    <label>Ora del appuntamento <span class="text-danger">*</span></label><br />
                                    <div class="input-group m-b-15">

                                        <div class="bootstrap-timepicker"><input id="timepicker2" type="text" name="tiempo" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['agenda']->value['dataAppuntamento'],"%H:%M");?>
" class="form-control input-lg" data-minute-step="30"/></div>
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-12"><div class="alert alert-info"><p><i class="fa fa-fw fa-question-circle"></i> Se modifichi l'appuntamento verr&agrave; assegnato con lo stato "confermato".</p></div></div>
                                <div class="clearfix"></div>
                                <div class="col-md-12 text-right"><a href="agenda.php" class="btn btn-danger btn-lg">Cancella <i class="fa fa-times"></i></a> <button type="submit" class="btn btn-primary btn-lg">Invia <i class="fa fa-check"></i></button></div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <?php echo $_smarty_tpl->getSubTemplate ("footer_modifica.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
