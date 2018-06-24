<?php /* Smarty version Smarty-3.1.19, created on 2014-10-31 10:37:56
         compiled from "./templates/home_dsr.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1181088884545358747bdb66-54600323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a07e1bc97cdb60467be78d3ff90be4eca229d23c' => 
    array (
      0 => './templates/home_dsr.tpl',
      1 => 1414656629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1181088884545358747bdb66-54600323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'referralInAttesa' => 0,
    'value' => 0,
    'referralAssegnati' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5453587481daf4_54459928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453587481daf4_54459928')) {function content_5453587481daf4_54459928($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/ereferral/svn.ereferral.it/trunk/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_replace')) include '/var/www/ereferral/svn.ereferral.it/trunk/libs/plugins/modifier.replace.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_dsr.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<!-- INIZIO CONTENUTO -->
			<div class="page-content">
				
                            <div class="container-fluid">
                            
                            <h1 class="page-heading">Gestione eReferral</h1>
                            
                            		<!-- INIZIO DATA TABLE -->
					<div class="the-box">
						<div class="table-responsive">
                                                    <label>Nuovi eReferral</label>
						<table class="table table-striped table-hover" id="elenco-ereferral-in-attesa">
							<thead class="the-box dark full">
								<tr>
									<th>Num. Referral</th>
									<th>Paziente</th>
									<th>Data Apertura</th>
                                                                        <th>Centro Trapianti</th>
                                                                        <th style="width:225px;">Azioni</th>
								</tr>
							</thead>
							<tbody>
                                                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['referralInAttesa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
								<tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                                                                    <td><a href="<?php echo @constant('URL_FILE');?>
dettaglio_referral.php?idReferral=<?php echo $_smarty_tpl->tpl_vars['value']->value['idReferral'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['idReferral'];?>
</a></td>
                                                                    <td><a href="<?php echo @constant('URL_FILE');?>
dettaglio_referral.php?idReferral=<?php echo $_smarty_tpl->tpl_vars['value']->value['idReferral'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['paziente'];?>
</a></td>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['dataApertura'];?>
</td>
                                                                    <td> <?php echo $_smarty_tpl->tpl_vars['value']->value['centro'];?>
</td>
                                                                    <td><a href="<?php echo @constant('URL_FILE');?>
presa_in_carico.php?idReferral=<?php echo $_smarty_tpl->tpl_vars['value']->value['idReferral'];?>
" class="btn btn-danger btn-perspective btn-xs">Presa in carico<i class="fa fa-lock"></i></a></td>
								</tr>
                                                            <?php } ?>
 
							</tbody>
						</table>
                                                <br />
                                                <br />
                                                <table class="table table-striped table-hover" id="elenco-ereferral-assegnati">
                                                    <label>eReferral assegnati</label>
							<thead class="the-box dark full">
								<tr>
									<th>Num. Referral</th>
									<th>Paziente</th>
									<th>Data Aggiornamento</th>
                                                                        <th>Centro</th>
                                                                        <th>Stato Trapianti</th>
                                                                        <th style="width:225px;">Azioni</th>
								</tr>
							</thead>
							<tbody>
                                                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['referralAssegnati']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>

								<tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                                                                    <td><a href="<?php echo @constant('URL_FILE');?>
dettaglio_referral.php?idReferral=<?php echo $_smarty_tpl->tpl_vars['value']->value['idReferral'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['idReferral'];?>
</a></td>
                                                                    <td><a href="<?php echo @constant('URL_FILE');?>
dettaglio_referral.php?idReferral=<?php echo $_smarty_tpl->tpl_vars['value']->value['idReferral'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['paziente'];?>
</a></td>
                                                                    <td> <?php echo $_smarty_tpl->tpl_vars['value']->value['dataAggiornamento'];?>
</td>
                                                                    <td> <?php echo $_smarty_tpl->tpl_vars['value']->value['centro'];?>
</td>
                                                                    <td> <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['value']->value['stato'],"_"," ");?>
</td>
                                                                    <td><a href="<?php echo @constant('URL_FILE');?>
dettaglio_referral.php?idReferral=<?php echo $_smarty_tpl->tpl_vars['value']->value['idReferral'];?>
" class="btn btn-danger btn-perspective btn-xs">Vedi dettaglio<i class="fa fa-lock"></i></a></td>
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
