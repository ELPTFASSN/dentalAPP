<?php /* Smarty version Smarty-3.1.19, created on 2016-02-18 11:17:27
         compiled from "./templates/ordini.tpl" */ ?>
<?php /*%%SmartyHeaderCode:753393055652cfb1d20a67-94341501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe41511c95485ad3e65da001d8e8269321f3c88c' => 
    array (
      0 => './templates/ordini.tpl',
      1 => 1455790639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '753393055652cfb1d20a67-94341501',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5652cfb1d91547_05917786',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652cfb1d91547_05917786')) {function content_5652cfb1d91547_05917786($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/vhosts/beecloud.it/easysmile.beecloud.it/panel/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/beecloud.it/easysmile.beecloud.it/panel/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class=content-page>
<div class=content>
<div class=container>
<div class=row>
<div class=col-sm-12>
<h4 class="pull-left page-title">Lista delle ordini <?php if (isset($_smarty_tpl->tpl_vars['status']->value)) {?><?php echo $_smarty_tpl->tpl_vars['satus']->value;?>
<?php }?>realizzate nella piattaforma</h4>
<ol class="breadcrumb pull-right">
<li><a href=#>BackOffice</a></li>
<li class=active>Ordini</li>
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
<h3 class=panel-title>Tabella Ordini</h3>
</div>
<div class=panel-body>
<div class=row>
<div class=col-sm-12>
<div class=m-b-30>
<a href="ordini.php?status=attesa" class="btn btn-primary waves-effect waves-light <?php if (isset($_smarty_tpl->tpl_vars['status']->value)&&$_smarty_tpl->tpl_vars['status']->value=='attesa') {?>disabled<?php }?>">Vedere ordini in attesa <i class="fa fa-clock-o"></i></a> <a href="ordini.php?status=completed" class="btn btn-success waves-effect waves-light <?php if (isset($_smarty_tpl->tpl_vars['status']->value)&&$_smarty_tpl->tpl_vars['status']->value=='completed') {?>disabled<?php }?>">Vedere ordini completati <i class="fa fa-check"></i></a> <a href="ordini.php?status=cancellato" class="btn btn-danger waves-effect waves-light <?php if (isset($_smarty_tpl->tpl_vars['status']->value)&&$_smarty_tpl->tpl_vars['status']->value=='attesa') {?>cancellato<?php }?>">Vedere ordini cancellati <i class="fa fa-trash-o"></i></a>
</div>
</div>
</div>
<div class=row>
<div class="col-md-12 col-sm-12 col-xs-12">
    
<table class="table table-striped table-hover" id="datatable">
							<thead class="the-box dark full">
								<tr>
                                                                    <th>Data</th>
                                                                        <th>Ordinante</th>
                                                                        <th>Prezzo</th>
									<th>Codice</th>
                                                                        <th>Stato ordine</th>
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
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['cognome'];?>
</td>
                                                                    <td><?php echo number_format($_smarty_tpl->tpl_vars['value']->value['prezzo'],2);?>
 &euro;</td>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['codice'];?>
 </td>
                                                                    <td class="center"> <?php if ($_smarty_tpl->tpl_vars['value']->value['fkStatoOrdini']==1) {?><span class="label label-danger"><i class="fa fa-fw fa-dollar"></i> IN ATTESA DI PAGAMENTO</span><?php }?><?php if ($_smarty_tpl->tpl_vars['value']->value['fkStatoOrdini']==2) {?><span class="label label-default"><i class="fa fa-fw fa-truck"></i> IN ATTESA DI RICEZIONE</span><?php }?><?php if ($_smarty_tpl->tpl_vars['value']->value['fkStatoOrdini']==3) {?><span class="label label-primary"><i class="fa fa-fw fa-cogs"></i> IN GESTIONE</span><?php }?><?php if ($_smarty_tpl->tpl_vars['value']->value['fkStatoOrdini']==4) {?><span class="label label-primary"><i class="fa fa-fw fa-clock-o"></i> IN ATTESA REVISIONE MEDICO</span><?php }?><?php if ($_smarty_tpl->tpl_vars['value']->value['fkStatoOrdini']==5) {?><span class="label label-danger"><i class="fa fa-fw fa-clock-o"></i> IN ATTESA PAGAMENTO TRATTAMENTO</span><?php }?><?php if ($_smarty_tpl->tpl_vars['value']->value['fkStatoOrdini']>5) {?><span class="label label-success"><i class="fa fa-fw fa-check-circle"></i> COMPLETATO</span><?php }?></td>
                                                                    <td><a href="ordini.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['idOrdine'];?>
" class="btn btn-primary btn-perspective btn-xs waves-effect waves-light">Vedi dettagli <i class="fa fa-pencil"></i></a></td>
								</tr>
                                                            <?php } ?>
							</tbody>
						</table>
</div>
</div>
</div>
</div>
</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer_aziende.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
