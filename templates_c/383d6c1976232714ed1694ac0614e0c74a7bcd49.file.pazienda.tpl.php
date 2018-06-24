<?php /* Smarty version Smarty-3.1.19, created on 2016-02-23 11:38:47
         compiled from "./templates/pazienda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73943166056b8c8b5a43de2-92845353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '383d6c1976232714ed1694ac0614e0c74a7bcd49' => 
    array (
      0 => './templates/pazienda.tpl',
      1 => 1456223925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73943166056b8c8b5a43de2-92845353',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56b8c8b5a81355_80701138',
  'variables' => 
  array (
    'error' => 0,
    'success' => 0,
    'medici' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b8c8b5a81355_80701138')) {function content_56b8c8b5a81355_80701138($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_publica.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 m-t-40" >
    <!-- Start content -->
    <div class="content m-t-40">
        <div class="container m-t-40">
            <div class="panel panel-primary m-t-40">

                <div class="panel-heading"> 
                    <h3 class="text-white">Sceglie il tuo studio medico <i class="fa fa-fw fa-user-md"></i></h3>
                </div> 

                <div class="panel-body" style="padding:45px;">
                    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                        <div class="alert alert-danger alert-bold-border fade in alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Atenzione!<br>
                                <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></strong>
                        </div>
                    <?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['success']->value)) {?>
                        <div class="alert alert-success alert-bold-border fade in alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Esito<br>
                                <span class="text-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</span></strong>
                        </div>
                    <?php }?>

                <form class="form-horizontal" action="<?php echo @constant('URL_FILE');?>
cambia_password.php" method="POST">
                    <div class="alert alert-info alert-bold-border fade in alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>
                                <span class="text-primary">Sceglie la regione dove vuoi cercare gli studi medici </span></strong>
                        </div>
                    <div id="map" style="height: 750px;"></div>
<!--                    <div class="form-group">
                        <div class="col-xs-12">
                                <div class="form-group">
                                        <label>Sceglie il medico</label>
                                        <select id="studio" name="medico" class="select2" data-placeholder="Seleziona medico...">
                                            <option></option>
                                            <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['medici']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['key']->key;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value['idDettaglioMedico'];?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['key']->value['cognome'];?>
</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                    </div>
                    
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">Sceglie Medico</button>
                        </div>
                    </div>

                   
                
                </div>        -->
                    </form> 
            </div>
                                        <p><br><a href="javascript:history.back()" class="btn btn-lg btn-danger btn-block"><i class="fa fa-backward"></i> Torna indietro</a></p>
        </div>
    </div>
</div>
<p>&nbsp;</p><p>&nbsp;</p>
                                            <p>&nbsp;</p>
<?php echo $_smarty_tpl->getSubTemplate ("footer_publico.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
