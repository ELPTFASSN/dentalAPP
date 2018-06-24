<?php /* Smarty version Smarty-3.1.19, created on 2014-10-31 10:52:41
         compiled from "./templates/home_medico.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118945435654339d787703d3-29935876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b97cb76f266be12567defe9925f97d30e4e2abe1' => 
    array (
      0 => './templates/home_medico.tpl',
      1 => 1414749160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118945435654339d787703d3-29935876',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54339d787c8015_91348123',
  'variables' => 
  array (
    'accessError' => 0,
    'error' => 0,
    'success' => 0,
    'resultPazienti' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54339d787c8015_91348123')) {function content_54339d787c8015_91348123($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/ereferral/svn.ereferral.it/trunk/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/ereferral/svn.ereferral.it/trunk/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<!-- INIZIO CONTENUTO -->
			<div class="page-content">
				
				
				<div class="container-fluid">
                                                                                                    <?php if (!empty($_smarty_tpl->tpl_vars['accessError']->value)) {?>
                            <div class="alert alert-warning alert-bold-border fade in alert-dismissable margin-top animated flash"><i class="fa fa-fw fa-exclamation-triangle fa-3x text-warning" style="float:left; padding-right:20px"></i>
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Atenzione!<br>
                                        <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['accessError']->value;?>
</span></strong>
                            </div>
				<?php }?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                            <div class="alert alert-danger alert-bold-border fade in alert-dismissable margin-top animated flash"><i class="fa fa-fw fa-exclamation-triangle fa-3x text-warning" style="float:left; padding-right:20px"></i>
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Atenzione!<br>
                                        <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></strong>
                            </div>
				<?php }?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['success']->value)) {?>
                            <div class="alert alert-success alert-bold-border fade in alert-dismissable margin-top animated flash"><i class="fa fa-fw fa-check fa-3x text-success" style="float:left; padding-right:20px"></i>
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Esito<br>
                                        <span class="text-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</span></strong>
                            </div>
				<?php }?>
                                    <h1 class="page-heading">Elenco Pazienti</h1><div class="botoneria"><a href="aggiunge_paziente.php" class="btn btn-primary btn-perspective"><i class="fa fa-fw fa-plus-circle"></i> Aggiungi Paziente</a></div>

					<!-- INIZIO DATA TABLE -->
					<div class="the-box">
						<div class="table-responsive">
						<table class="table table-striped table-hover" id="elenco-medici">
							<thead class="the-box dark full">
								<tr>
									<th>Nome</th>
									<th>Cognome</th>
									<th>Codice Fiscale</th>
                                                                        <th>Data Nascita</th>
                                                                        <th style="width:225px;">Azioni</th>
								</tr>
							</thead>
							<tbody>
                                                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resultPazienti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
								<tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                                                                    <td class="col-md-2"><?php if (($_smarty_tpl->tpl_vars['value']->value['stato']==0)&&($_smarty_tpl->tpl_vars['value']->value['active']==1)) {?><a class="ajax-popup-link" href="<?php echo @constant('URL_FILE');?>
home_medico.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['idDettaglioPaziente'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['nome'];?>
</a><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['value']->value['nome'];?>
<?php }?></td>
                                                                    <td class="col-md-2"><?php if (($_smarty_tpl->tpl_vars['value']->value['stato']==0)&&($_smarty_tpl->tpl_vars['value']->value['active']==1)) {?><a class="ajax-popup-link" href="<?php echo @constant('URL_FILE');?>
home_medico.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['idDettaglioPaziente'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['cognome'];?>
</a><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['value']->value['cognome'];?>
<?php }?></td>
									<td class="col-md-2"><?php echo $_smarty_tpl->tpl_vars['value']->value['codFiscale'];?>
</td>
                                                                        <td class="col-md-2"> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['dataNascita']);?>
</td>
                                                                        <td class="col-md-4"><?php if ($_smarty_tpl->tpl_vars['value']->value['stato']==0) {?><a href="home_medico.php?cancella=<?php echo $_smarty_tpl->tpl_vars['value']->value['idDettaglioPaziente'];?>
" class="btn btn-danger btn-perspective btn-xs">Cancella <i class="fa fa-trash-o"></i> </a><?php } else { ?><a href="home_medico.php?ripristina=<?php echo $_smarty_tpl->tpl_vars['value']->value['idDettaglioPaziente'];?>
" class="btn btn-primary btn-perspective btn-xs">Ripristina <i class="fa fa-refresh"></i> </a><?php }?> <?php if ($_smarty_tpl->tpl_vars['value']->value['stato']==0) {?><?php if ($_smarty_tpl->tpl_vars['value']->value['active']==0) {?><a href="home_medico.php?attiva=<?php echo $_smarty_tpl->tpl_vars['value']->value['idDettaglioPaziente'];?>
" class="btn btn-primary btn-perspective btn-xs">Attiva <i class="fa fa-unlock"></i></a><?php } else { ?><a href="home_medico.php?disattiva=<?php echo $_smarty_tpl->tpl_vars['value']->value['idDettaglioPaziente'];?>
" class="btn btn-danger btn-perspective btn-xs">Disattiva <i class="fa fa-lock"></i></a> <?php }?><?php }?> <a href="modifica_paziente.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['idDettaglioPaziente'];?>
" class="btn btn-primary btn-perspective btn-xs">Modifica <i class="fa fa-pencil"></i></a> <?php if (($_smarty_tpl->tpl_vars['value']->value['stato']==0)&&$_smarty_tpl->tpl_vars['value']->value['active']==1) {?><?php if ($_smarty_tpl->tpl_vars['value']->value['idReferral']>0) {?><a href="elenco_ereferral.php" class="btn btn-info btn-perspective btn-xs">Gestire eReferral <i class="fa fa-eye"></i></a><?php } else { ?><a href="aggiunge_ereferral.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['idDettaglioPaziente'];?>
" class="btn btn-info btn-perspective btn-xs">Invia eReferral <i class="fa fa-file-text"></i></a><?php }?><?php }?></td>
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
