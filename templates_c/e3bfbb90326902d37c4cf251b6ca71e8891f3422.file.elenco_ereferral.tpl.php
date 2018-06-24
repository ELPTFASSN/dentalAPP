<?php /* Smarty version Smarty-3.1.19, created on 2014-10-31 10:01:54
         compiled from "./templates/elenco_ereferral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:452990527544a5b68d9fb09-45118609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3bfbb90326902d37c4cf251b6ca71e8891f3422' => 
    array (
      0 => './templates/elenco_ereferral.tpl',
      1 => 1414685331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '452990527544a5b68d9fb09-45118609',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544a5b690c9785_85939411',
  'variables' => 
  array (
    'accessError' => 0,
    'error' => 0,
    'success' => 0,
    'resultReferral' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544a5b690c9785_85939411')) {function content_544a5b690c9785_85939411($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/ereferral/svn.ereferral.it/trunk/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/ereferral/svn.ereferral.it/trunk/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) include '/var/www/ereferral/svn.ereferral.it/trunk/libs/plugins/modifier.replace.php';
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
                                    <h1 class="page-heading">Elenco eReferral</h1>

					<!-- INIZIO DATA TABLE -->
					<div class="the-box">
						<div class="table-responsive">
						<table class="table table-striped table-hover" id="elenco-esami">
							<thead class="the-box dark full">
								<tr>
									<th>Paziente</th>
									
									<th>Data Apertura</th>
                                                                        <th>Data Aggiornamento</th>
                                                                        <th>Stato</th>
                                                                        <th style="width:225px;">Azioni</th>
								</tr>
							</thead>
							<tbody>
                                                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resultReferral']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
								<tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                                                                    <td class="col-md-4"><?php echo $_smarty_tpl->tpl_vars['value']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['cognome'];?>
</td>
									<td class="col-md-2"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['dataApertura'],"d/m/Y H:i:s");?>
</td>
                                                                        <td class="col-md-2"> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['dataAggiornamento'],"d/m/Y H:i:s");?>
</td>
                                                                        <td class="col-md-2"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['value']->value['stato'],"_"," ");?>
</td>
                                                                        <td class="col-md-2"><a class="btn btn-xs btn-perspective btn-primary" href="<?php echo @constant('URL_FILE');?>
dettaglio_referral.php?idReferral=<?php echo $_smarty_tpl->tpl_vars['value']->value['idReferral'];?>
">Vedere Dettagli <i class="fa fa-fw fa-search"></i></a></td>
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
