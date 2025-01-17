<?php /* Smarty version Smarty-3.1.19, created on 2015-11-23 09:35:35
         compiled from "./templates/minisito.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7081970585652cfd77c7ac1-46003288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '889c369a40b5ae920cb394f36cf9397cde4a962b' => 
    array (
      0 => './templates/minisito.tpl',
      1 => 1445686768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7081970585652cfd77c7ac1-46003288',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessError' => 0,
    'error' => 0,
    'success' => 0,
    'aziende' => 0,
    'value' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5652cfd7817482_22132809',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652cfd7817482_22132809')) {function content_5652cfd7817482_22132809($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/vhosts/beecloud.it/easysmile.beecloud.it/panel/libs/plugins/function.cycle.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class=content-page>
    <div class=content>
        <div class=container>
            <div class=row>
                <div class=col-sm-12>
                    <h4 class="pull-left page-title">Lista dei miei minisiti dei miei studi medici</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href=#>BackOffice</a></li>
                        <li class=active>Minisiti</li>
                    </ol>
                </div>
            </div>
            <div class="row"><div class="col-md-12">
                    <?php if (!empty($_smarty_tpl->tpl_vars['accessError']->value)) {?>
                        <div class="alert alert-warning alert-bold-border fade in alert-dismissable margin-top"><i class="fa fa-fw fa-exclamation-triangle fa-3x text-warning" style="float:left; padding-right:20px"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Atenzione!<br>
                                <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['accessError']->value;?>
</span></strong>
                        </div>
                    <?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                        <div class="alert alert-danger alert-bold-border fade in alert-dismissable margin-top"><i class="fa fa-fw fa-exclamation-triangle fa-3x text-warning" style="float:left; padding-right:20px"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Atenzione!<br>
                                <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></strong>
                        </div>
                    <?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['success']->value)) {?>
                        <div class="alert alert-success alert-bold-border fade in alert-dismissable margin-top"><i class="fa fa-fw fa-check fa-3x text-success" style="float:left; padding-right:20px"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Esito<br>
                                <span class="text-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</span></strong>
                        </div>
                    <?php }?>

                </div></div>
            <div class=row>
                <div class=col-md-12>
                    <div class="panel panel-default">
                        <div class=panel-heading>
                            <h3 class=panel-title>I miei minisiti dei miei studi medici</h3>
                        </div>
                        <div class=panel-body>
                            <div class=row>
                                <div class=col-sm-12>
                                    <div class=m-b-30>
                                        <a href="aziende.php?task=add" class="btn btn-primary waves-effect waves-light">Aggiungi un nuovo studio medico <i class="fa fa-plus"></i></a> 
                                    </div>
                                </div>
                            </div>
                            <div class=row>
                                <div class="col-md-12 col-sm-12 col-xs-12">

                                    <table class="table table-striped table-hover" id="datatable">
                                        <thead class="the-box dark full">
                                            <tr>
                                                <th>Denominazione</th>
                                                <th>Partita IVA</th>
                                                <th>Citt&agrave;</th>
                                                <th>Via</th>
                                                <th>Azioni</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aziende']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                                                <tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                                                    <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_variable($_smarty_tpl->tpl_vars['value']->value['idAzienda'], null, 0);?>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['denominazione'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['partitaIVA'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['provincia'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['citta'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['indirizzo'];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['numero'];?>
</td>
                                                    <td><a href="associato.php?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" target="_blank" class='btn btn-perspective btn-success waves-effect waves-light btn-xs'>Vedere Minisito <i class="fa fa-fw fa-eye"></i> </a> <a href="minisito.php?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" class="btn btn-primary btn-perspective waves-effect waves-light btn-xs">Modifica Minisito <i class="fa fa-fw fa-edit"></i></a></td>
                                                   
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>

                                    <?php echo $_smarty_tpl->getSubTemplate ("footer_aziende.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
