<?php /* Smarty version Smarty-3.1.19, created on 2014-10-13 09:42:05
         compiled from "./templates/home_amm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72361987543b824d6f19a8-15821429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f469a2b45f2df4edca9e42160f07c4984de47eca' => 
    array (
      0 => './templates/home_amm.tpl',
      1 => 1412002439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72361987543b824d6f19a8-15821429',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessError' => 0,
    'error' => 0,
    'success' => 0,
    'medici' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543b824dc148e7_68195951',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543b824dc148e7_68195951')) {function content_543b824dc148e7_68195951($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/ereferral/svn.ereferral.it/trunk/libs/plugins/function.cycle.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<!-- INIZIO CONTENUTO -->
			<div class="page-content">

				<div class="container-fluid">
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
					<h1 class="page-heading">Elenco Medici</h1>

					<!-- INIZIO DATA TABLE -->
					<div class="the-box">
						<div class="table-responsive">
						<table class="table table-striped table-hover" id="elenco-medici">
							<thead class="the-box dark full">
								<tr>
									<th>Nome</th>
									<th>Cognome</th>
									<th>Spezializzazione</th>
									<th>Stato</th>
                                                                        <th>Azioni</th>
								</tr>
							</thead>
							<tbody>
                                                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['medici']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
								<tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                                                                    <td><a class="ajax-popup-link" href="<?php echo @constant('URL_FILE');?>
home_amministratore.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['fkUtente'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['nome'];?>
</a></td>
                                                                    <td><a class="ajax-popup-link" href="<?php echo @constant('URL_FILE');?>
home_amministratore.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['fkUtente'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['cognome'];?>
</a></td>
									<td><?php echo $_smarty_tpl->tpl_vars['value']->value['tipoSpecializzazione'];?>
</td>
                                                                        <td class="center"> <?php if ($_smarty_tpl->tpl_vars['value']->value['stato']==1) {?><span class="btn btn-xs btn-danger"><i class="fa fa-fw fa-times-circle"></i> NON ATTIVO</span><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['value']->value['active']==0) {?><span class="btn btn-xs btn-danger"><i class="fa fa-fw fa-times-circle"></i> NON ATTIVO</span><?php } else { ?><span class="btn btn-xs btn-success"><i class="fa fa-fw fa-check-circle"></i> ATTIVO</span><?php }?><?php }?></td>
                                                                        <td><?php if ($_smarty_tpl->tpl_vars['value']->value['stato']==0) {?><a href="home_amministratore.php?cancella=<?php echo $_smarty_tpl->tpl_vars['value']->value['fkUtente'];?>
" class="btn btn-danger btn-perspective btn-xs">Cancella <i class="fa fa-trash-o"></i> </a><?php } else { ?><a href="home_amministratore.php?ripristina=<?php echo $_smarty_tpl->tpl_vars['value']->value['fkUtente'];?>
" class="btn btn-primary btn-perspective btn-xs">Ripristina <i class="fa fa-refresh"></i> </a><?php }?> <?php if ($_smarty_tpl->tpl_vars['value']->value['stato']==0) {?><?php if ($_smarty_tpl->tpl_vars['value']->value['active']==0) {?><a href="home_amministratore.php?attiva=<?php echo $_smarty_tpl->tpl_vars['value']->value['fkUtente'];?>
" class="btn btn-primary btn-perspective btn-xs">Attiva <i class="fa fa-unlock"></i></a><?php } else { ?><a href="home_amministratore.php?disattiva=<?php echo $_smarty_tpl->tpl_vars['value']->value['fkUtente'];?>
" class="btn btn-danger btn-perspective btn-xs">Disattiva <i class="fa fa-lock"></i></a> <?php }?><?php }?> <a href="modifica_medico.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['fkUtente'];?>
" class="btn btn-primary btn-perspective btn-xs">Modifica <i class="fa fa-pencil"></i></a></td>
								</tr>
                                                            <?php } ?>
							</tbody>
						</table>

						</div><!-- /.table-responsive -->
					</div><!-- /.the-box .default -->
					<!-- END DATA TABLE -->
					
					
					
					
					
					
					
				
				</div><!-- /.container-fluid -->

                        </div>
<?php echo $_smarty_tpl->getSubTemplate ("footer_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
