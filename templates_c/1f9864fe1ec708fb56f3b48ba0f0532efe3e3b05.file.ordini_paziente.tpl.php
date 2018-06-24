<?php /* Smarty version Smarty-3.1.19, created on 2016-02-08 17:28:31
         compiled from "./templates/ordini_paziente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157567684956b8c22f6474b0-45318682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f9864fe1ec708fb56f3b48ba0f0532efe3e3b05' => 
    array (
      0 => './templates/ordini_paziente.tpl',
      1 => 1454948827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157567684956b8c22f6474b0-45318682',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'satus' => 0,
    'accessError' => 0,
    'error' => 0,
    'success' => 0,
    'ordini' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56b8c22f6b9c09_97181555',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b8c22f6b9c09_97181555')) {function content_56b8c22f6b9c09_97181555($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/vhosts/beecloud.it/easysmile.beecloud.it/panel/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/beecloud.it/easysmile.beecloud.it/panel/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class=content-page>
<div class=content>
<div class=container>
<div class=row>
<div class=col-sm-12>
<h4 class="pull-left page-title">Lista delle prescrizioni <?php if (isset($_smarty_tpl->tpl_vars['status']->value)) {?><?php echo $_smarty_tpl->tpl_vars['satus']->value;?>
<?php }?>realizzate nella piattaforma</h4>
<ol class="breadcrumb pull-right">
<li><a href=#>BackOffice</a></li>
<li class=active>Prescrizioni</li>
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
                            <div class="alert alert-danger alert-bold-border fade in alert-dismissable margin-top"><i class="fa fa-fw fa-exclamation-triangle fa-3x text-danger" style="float:left; padding-right:20px"></i>
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
<h3 class=panel-title>Le mie prescrizioni</h3>
</div>
<div class=panel-body>
<div class=row>
<div class=col-sm-12>
<div class=m-b-30>

</div>
</div>
</div>
<div class=row>
<div class="col-md-12 col-sm-12 col-xs-12">
    
<table class="table table-striped table-hover" id="datatable">
							<thead class="the-box dark full">
								<tr>
                                                                    <th>Data</th>    
                                                                        <th>Stato trattamento</th>
                                                                        <th>Azioni</th>
								</tr>
							</thead>
							<tbody>
                                                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ordini']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
								<tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                                                                    <td><span class="hidden"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['dataApertura'],"%Y%m%d");?>
</span> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['dataApertura'],"%d/%m/%Y");?>
</td>
                                                                    
                                                                    <td class="center"> <?php if ($_smarty_tpl->tpl_vars['value']->value['fkStatoOrdini']==1) {?><span class="label label-danger"><i class="fa fa-fw fa-times-circle"></i> IN ATTESA DI PAGAMENTO</span><?php }?><?php if ($_smarty_tpl->tpl_vars['value']->value['fkStatoOrdini']==2) {?><span class="label label-default"><i class="fa fa-fw fa-truck"></i> IN ATTESA DI RICEZIONE CORRIERE</span><?php }?><?php if ($_smarty_tpl->tpl_vars['value']->value['fkStatoOrdini']==3) {?><span class="label label-primary"><i class="fa fa-fw fa-cogs"></i> IN GESTIONE</span><?php }?><?php if ($_smarty_tpl->tpl_vars['value']->value['fkStatoOrdini']==4) {?><span class="label label-primary"><i class="fa fa-fw fa-clock-o"></i> PROPOSTA DI TRATTAMENTO</span><?php } elseif ($_smarty_tpl->tpl_vars['value']->value['fkStatoOrdini']==5) {?><span class="label label-primary"><i class="fa fa-fw fa-clock-o"></i> IN ATTESSA PAGAMENTO TRATTAMENTO</span><?php } elseif ($_smarty_tpl->tpl_vars['value']->value['fkStatoOrdini']==6) {?><span class="label label-success"><i class="fa fa-fw fa-check-circle"></i> IN ATTESSA PAGAMENTO SECONDO FRAZIONAMENTO</span><?php } elseif ($_smarty_tpl->tpl_vars['value']->value['fkStatoOrdini']==7) {?><span class="label label-success"><i class="fa fa-fw fa-check-circle"></i> COMPLETATO</span><?php }?></td>
                                                                    <td><a href="ordini.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['idOrdine'];?>
" class="btn btn-primary btn-perspective btn-xs waves-effect waves-light">Vedi dettagli <i class="fa fa-pencil"></i></a> <?php if ($_smarty_tpl->tpl_vars['value']->value['fkStatoOrdini']==1) {?><a href="checkout.php?task=prescrizione&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['idOrdine'];?>
" class="btn btn-success  btn-perspective btn-xs waves-effect waves-light">Pagare fattura<i class="fa fa-fw fa-dollar"></i></a><?php }?><?php if ($_smarty_tpl->tpl_vars['value']->value['fkStatoOrdini']==2) {?> <a href="generatePDF.php?task=prescrizione&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['idOrdine'];?>
" class="btn btn-xs btn-perspective btn-pink waves-effect waves-light">Stampa prescrizione <i class="fa fa-fw fa-print"></i></a><?php }?></td>
								</tr>
                                                            <?php } ?>
							</tbody>
						</table>

<?php echo $_smarty_tpl->getSubTemplate ("footer_aziende.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
