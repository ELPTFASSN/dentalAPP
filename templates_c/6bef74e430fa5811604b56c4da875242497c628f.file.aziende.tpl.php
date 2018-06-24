<?php /* Smarty version Smarty-3.1.19, created on 2015-11-17 11:40:11
         compiled from "./templates/aziende.tpl" */ ?>
<?php /*%%SmartyHeaderCode:979745933562ba9582e5334-07480946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bef74e430fa5811604b56c4da875242497c628f' => 
    array (
      0 => './templates/aziende.tpl',
      1 => 1447756809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '979745933562ba9582e5334-07480946',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562ba958350a72_81100565',
  'variables' => 
  array (
    'accessError' => 0,
    'error' => 0,
    'success' => 0,
    'status' => 0,
    'aziende' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562ba958350a72_81100565')) {function content_562ba958350a72_81100565($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/vhosts/beecloud.it/easysmile.beecloud.it/libs/plugins/function.cycle.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class=content-page>
<div class=content>
<div class=container>
<div class=row>
<div class=col-sm-12>
<h4 class="pull-left page-title">Lista delle aziende iscritte alla piattaforma</h4>
<ol class="breadcrumb pull-right">
<li><a href=#>BackOffice</a></li>
<li class=active>Aziende</li>
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
<h3 class=panel-title>Tabella Aziende</h3>
</div>
<div class=panel-body>
<div class=row>
<div class=col-sm-12>
<div class=m-b-30>
<a href="generatePDF.php?task=azienda" class="btn btn-success waves-effect waves-light">Genera codice di iscrizione <i class="fa fa-plus"></i></a> <a href="aziende.php?status=abbonato" class="btn btn-primary waves-effect waves-light <?php if (isset($_smarty_tpl->tpl_vars['status']->value)&&$_smarty_tpl->tpl_vars['status']->value=='abbonato') {?>disabled<?php }?>">Vedi solo abbonati <i class="fa fa-star"></i></a> <a href="aziende.php?status=attesa" class="btn btn-danger waves-effect waves-light <?php if (isset($_smarty_tpl->tpl_vars['status']->value)&&$_smarty_tpl->tpl_vars['status']->value=='attesa') {?>disabled<?php }?>">Vedi solo in attesa <i class="fa fa-clock-o"></i></a>
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
									<th>Provincia</th>
                                                                        <th>Abbonato</th>
									<th>Stato</th>
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
                                                                        <td class="center"><?php if ($_smarty_tpl->tpl_vars['value']->value['abbonamento']==1) {?> <button class="btn btn-xs btn-icon waves-effect waves-light btn-primary btn-block"> <i class="fa fa-star"></i> </button> <?php } else { ?>  <button class="btn btn-icon waves-effect waves-light btn-danger btn-block btn-xs"> <i class="fa fa-remove"></i> </button><?php }?></td>
                                                                        <td class="center"> <?php if ($_smarty_tpl->tpl_vars['value']->value['stato']==0) {?><span class="label label-danger"><i class="fa fa-fw fa-times-circle"></i> NON ATTIVO</span><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['value']->value['active']==1) {?><span class="btn btn-xs btn-danger"><i class="fa fa-fw fa-times-circle"></i> NON ATTIVO</span><?php } else { ?><span class="btn btn-xs btn-success"><i class="fa fa-fw fa-check-circle"></i> ATTIVO</span><?php }?><?php }?></td>
                                                                        <td><a id="<?php echo $_smarty_tpl->tpl_vars['value']->value['idUtente'];?>
" class="btn btn-danger btn-xs waves-effect waves-light sa-params">Cancella <i class="fa fa-trash-o"></i> </a> <?php if ($_smarty_tpl->tpl_vars['value']->value['active']!==1) {?><?php if ($_smarty_tpl->tpl_vars['value']->value['stato']==0) {?><a href="aziende.php?attiva=<?php echo $_smarty_tpl->tpl_vars['value']->value['idUtente'];?>
" class="btn btn-primary btn-xs waves-effect waves-light">Attiva <i class="fa fa-unlock"></i></a><?php } else { ?><a href="aziende.php?disattiva=<?php echo $_smarty_tpl->tpl_vars['value']->value['idUtente'];?>
" class="btn btn-danger btn-xs waves-effect waves-light">Disattiva <i class="fa fa-lock"></i></a> <?php }?><?php }?> <a href="aziende.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['idUtente'];?>
" class="btn btn-primary btn-xs waves-effect waves-light">Modifica <i class="fa fa-pencil"></i></a></td>
								</tr>
                                                            <?php } ?>
							</tbody>
						</table>

<?php echo $_smarty_tpl->getSubTemplate ("footer_aziende.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
