<?php /* Smarty version Smarty-3.1.19, created on 2015-11-27 18:46:27
         compiled from "./templates/add_agenda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:729365525565896f3c52117-99500734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d745d2479f556fe48613106c91c461ad5795de6' => 
    array (
      0 => './templates/add_agenda.tpl',
      1 => 1445333870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '729365525565896f3c52117-99500734',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'tipo' => 0,
    'key' => 0,
    'oMedico' => 0,
    'oPaziente' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565896f3ca10a0_39367179',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565896f3ca10a0_39367179')) {function content_565896f3ca10a0_39367179($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/beecloud.it/easysmile.beecloud.it/panel/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Aggiungi Appuntamento</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_amministratore.php">BackOffice</a></li>
                        <li><a href="aziende.php">Agenda</a></li>
                        <li class="active">Aggiungi appuntamento</li>
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
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Dati del appuntamento</h3></div>
                        <div class="panel-body">

                            <form action="<?php echo @constant('URL_FILE');?>
agenda.php" method="post" name="aggiorna_profilo_medico">
                                <input type="hidden" name="idAgenda" value="nuovo">
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
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value['idTipoAppuntamento'];?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value['tipoAppuntamento'];?>
</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Paziente</label>
                                        <select name="paziente" class="select2" data-placeholder="Seleziona tipologia...">
                                            <option></option>
                                            <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['oMedico']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['key']->key;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value['idDettaglioPaziente'];?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['key']->value['cognome'];?>
</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label>Data del appuntamento <span class="text-danger">*</span></label><br />

                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        <input type="text" name="data" class="form-control input-lg required clearfix" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->dataNascita)) {?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oPaziente']->value->dataNascita,"%e %B %Y");?>
<?php } else { ?>gg/mm/aaaa<?php }?>" data-date-start-date="0d" id="datepicker" required>

                                    </div><!-- input-group -->
                                </div>
                                <div class="col-md-3">
                                    <label>Ora del appuntamento <span class="text-danger">*</span></label><br />
                                    <div class="input-group m-b-15">

                                        <div class="bootstrap-timepicker"><input id="timepicker2" type="text" name="tiempo" class="form-control input-lg" data-minute-step="30"/></div>
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                    </div>
                                </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-12"><div class="alert alert-info"><p><i class="fa fa-fw fa-info-circle"></i> Tutti gli appuntamenti da lei inseriti si intendono gi&agrave; confirmati.</p></div></div>
                                        <div class="clearfix"></div>
                                <div class="col-md-12 text-right"><a href="aziende.php" class="btn btn-danger btn-lg">Cancella <i class="fa fa-times"></i></a> <button type="submit" class="btn btn-primary btn-lg">Invia <i class="fa fa-check"></i></button></div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
                                          <div class=row>
                <div class=col-lg-12>
                    <div class="panel panel-default">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">I miei appuntamenti</h3> 
                        </div> 
                        <div class="panel-body"> 

                            <div id="calendar"></div>
                            <div class="clearfix"></div>
                            <hr style="margin-top:0px;">

                        </div>

                    </div>
                </div>
            </div>

            <?php echo $_smarty_tpl->getSubTemplate ("footer_modifica.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
