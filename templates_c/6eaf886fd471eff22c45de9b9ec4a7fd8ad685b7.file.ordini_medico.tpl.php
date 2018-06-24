<?php /* Smarty version Smarty-3.1.19, created on 2015-10-19 20:59:25
         compiled from "./templates/ordini_medico.tpl" */ ?>
<?php /*%%SmartyHeaderCode:326310396561d255222d943-30837860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eaf886fd471eff22c45de9b9ec4a7fd8ad685b7' => 
    array (
      0 => './templates/ordini_medico.tpl',
      1 => 1445281160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '326310396561d255222d943-30837860',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_561d25522b11d8_77984460',
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
<?php if ($_valid && !is_callable('content_561d25522b11d8_77984460')) {function content_561d25522b11d8_77984460($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/vhosts/intervolutions.com/pruebas.intervolutions.com/alfaone/libs/plugins/function.cycle.php';
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
<h3 class=panel-title>Le mie prescrizioni</h3>
</div>
<div class=panel-body>
<div class=row>
<div class=col-sm-12>
<div class=m-b-30>
<a href="ordini.php?task=add" class="btn btn-primary waves-effect waves-light">Aggiungi una nuova prescrizione <i class="fa fa-plus"></i></a> 
</div>
</div>
</div>
<div class=row>
<div class="col-md-12 col-sm-12 col-xs-12">
    
<table class="table table-striped table-hover" id="datatable">
							<thead class="the-box dark full">
								<tr>
                                                                        <th>Prescrizione per</th>
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
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['cognome'];?>
</td>
                                                                    <td><?php echo number_format($_smarty_tpl->tpl_vars['value']->value['prezzo'],2);?>
 &euro;</td>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['codice'];?>
</td>
                                                                    <td class="center"> <?php if ($_smarty_tpl->tpl_vars['value']->value['fkStatoOrdini']==1) {?><span class="label label-danger"><i class="fa fa-fw fa-times-circle"></i> IN ATTESA DI PAGAMENTO</span><?php }?><?php if ($_smarty_tpl->tpl_vars['value']->value['fkStatoOrdini']==2) {?><span class="btn btn-xs btn-danger"><i class="fa fa-fw fa-times-circle"></i> IN ATTESA DI GESTIONE</span><?php }?><?php if ($_smarty_tpl->tpl_vars['value']->value['fkStatoOrdini']==3) {?><span class="btn btn-xs btn-success"><i class="fa fa-fw fa-check-circle"></i> SPEDITO</span><?php }?></td>
                                                                    <td><a href="ordini.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['idOrdine'];?>
" class="btn btn-primary btn-perspective btn-xs waves-effect waves-light">Vedi dettagli <i class="fa fa-pencil"></i></a> <a class="btn btn-success  btn-perspective btn-xs waves-effect waves-light">Pagare fattura<i class="fa fa-fw fa-dollar"></i></a></td>
								</tr>
                                                            <?php } ?>
							</tbody>
						</table>

<?php echo $_smarty_tpl->getSubTemplate ("footer_aziende.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
