<?php /* Smarty version Smarty-3.1.19, created on 2014-10-31 10:33:52
         compiled from "./templates/elenco_dsr.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18149738345451f98f2a2e17-48364726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3142c29c99f254c836e2a089a26a31ee27e8e422' => 
    array (
      0 => './templates/elenco_dsr.tpl',
      1 => 1414688279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18149738345451f98f2a2e17-48364726',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5451f98f2fef39_11291173',
  'variables' => 
  array (
    'error' => 0,
    'success' => 0,
    'dsr' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5451f98f2fef39_11291173')) {function content_5451f98f2fef39_11291173($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/ereferral/svn.ereferral.it/trunk/libs/plugins/function.cycle.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<!-- INIZIO CONTENUTO -->
			<div class="page-content">

				<div class="container-fluid">
                                
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
                                 
					<h1 class="page-heading">Elenco Dsr</h1><div class="botoneria"><a href="aggiungi_dsr.php" class="btn btn-primary btn-perspective"><i class="fa fa-fw fa-plus-circle"></i> Aggiungi Dsr</a></div>

					<!-- INIZIO DATA TABLE -->
					<div class="the-box">
						<div class="table-responsive">
						<table class="table table-striped table-hover" id="elenco-medici">
							<thead class="the-box dark full">
								<tr>
                                                                        <th>Numero</th>
									<th>Nome</th>
									<th>Cognome</th>
									
									<th>Stato</th>
                                                                        <th>Azioni</th>
								</tr>
							</thead>
							<tbody>
                                                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dsr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
								<tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                                                                    <td><a class="ajax-popup-link" href="<?php echo @constant('URL_FILE');?>
dettaglio_dsr.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['idUtente'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['idUtente'];?>
</a></td>
                                                                    <td><a class="ajax-popup-link" href="<?php echo @constant('URL_FILE');?>
dettaglio_dsr.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['idUtente'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['nome'];?>
</a></td>
                                                                    <td><a class="ajax-popup-link" href="<?php echo @constant('URL_FILE');?>
dettaglio_dsr.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['idUtente'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['cognome'];?>
</a></td>
									
                                                                        <td class="center"> <?php if ($_smarty_tpl->tpl_vars['value']->value['stato']==1) {?><span class="btn btn-xs btn-danger"><i class="fa fa-fw fa-times-circle"></i> NON ATTIVO</span><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['value']->value['active']==0) {?><span class="btn btn-xs btn-danger"><i class="fa fa-fw fa-times-circle"></i> NON ATTIVO</span><?php } else { ?><span class="btn btn-xs btn-success"><i class="fa fa-fw fa-check-circle"></i> ATTIVO</span><?php }?><?php }?></td>
                                                                        <td><?php if ($_smarty_tpl->tpl_vars['value']->value['stato']==0) {?><a href="<?php echo @constant('URL_FILE');?>
dettaglio_dsr.php?cancella=<?php echo $_smarty_tpl->tpl_vars['value']->value['idUtente'];?>
" class="btn btn-danger btn-perspective btn-xs">Cancella <i class="fa fa-trash-o"></i> </a><?php } else { ?><a href="<?php echo @constant('URL_FILE');?>
dettaglio_dsr.php?ripristina=<?php echo $_smarty_tpl->tpl_vars['value']->value['idUtente'];?>
" class="btn btn-primary btn-perspective btn-xs">Ripristina <i class="fa fa-refresh"></i> </a><?php }?> <?php if ($_smarty_tpl->tpl_vars['value']->value['stato']==0) {?><?php if ($_smarty_tpl->tpl_vars['value']->value['active']==0) {?><a href="<?php echo @constant('URL_FILE');?>
dettaglio_dsr.php?attiva=<?php echo $_smarty_tpl->tpl_vars['value']->value['idUtente'];?>
" class="btn btn-primary btn-perspective btn-xs">Attiva <i class="fa fa-unlock"></i></a><?php } else { ?><a href="<?php echo @constant('URL_FILE');?>
dettaglio_dsr.php?disattiva=<?php echo $_smarty_tpl->tpl_vars['value']->value['idUtente'];?>
" class="btn btn-danger btn-perspective btn-xs">Disattiva <i class="fa fa-lock"></i></a> <?php }?><?php }?></td>
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
