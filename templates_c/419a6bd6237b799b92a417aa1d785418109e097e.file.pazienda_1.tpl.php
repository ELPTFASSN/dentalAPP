<?php /* Smarty version Smarty-3.1.19, created on 2016-02-23 11:37:50
         compiled from "./templates/pazienda_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109627411456c5ed621646f1-51587564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '419a6bd6237b799b92a417aa1d785418109e097e' => 
    array (
      0 => './templates/pazienda_1.tpl',
      1 => 1456223869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109627411456c5ed621646f1-51587564',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c5ed621a1434_66174720',
  'variables' => 
  array (
    'regione' => 0,
    'error' => 0,
    'success' => 0,
    'aziende' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c5ed621a1434_66174720')) {function content_56c5ed621a1434_66174720($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/vhosts/beecloud.it/easysmile.beecloud.it/panel/libs/plugins/function.cycle.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_publica.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 m-t-40" >
    <!-- Start content -->
    <div class="content m-t-40">
        <div class="container m-t-40">
            <div class="panel panel-primary m-t-40">

                <div class="panel-heading"> 
                    <h3 class="text-white">Studi medici nella regione di <?php echo $_smarty_tpl->tpl_vars['regione']->value;?>
</h3>
                </div> 
                
                <div class="panel-body" style="padding:45px;">
                    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                        <div class="alert alert-danger alert-bold-border fade in alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Atenzione!<br>
                                <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></strong>
                        </div>
                    <?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['success']->value)) {?>
                        <div class="alert alert-success alert-bold-border fade in alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Esito<br>
                                <span class="text-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</span></strong>
                        </div>
                    <?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['aziende']->value)) {?>
                    <table class="table table-striped table-hover" id="datatable">
							<thead class="the-box dark full">
								<tr>
									<th>Denominazione</th>
                                                                        <th>Provincia</th>
                                                                        <th>Città</th>
									<th>Puntteggio</th>
                                                                        <th><i class='fa fa-chain'></i></th>
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
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['provincia'];?>
</td>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['citta'];?>
</td>
                                                                    <td class="center"><span style='font-size:21px;'><?php if (isset($_smarty_tpl->tpl_vars['value']->value['score'])) {?> <?php $_smarty_tpl->tpl_vars['puntos'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['puntos']->step = 1;$_smarty_tpl->tpl_vars['puntos']->total = (int) ceil(($_smarty_tpl->tpl_vars['puntos']->step > 0 ? $_smarty_tpl->tpl_vars['value']->value['score']+1 - (1) : 1-($_smarty_tpl->tpl_vars['value']->value['score'])+1)/abs($_smarty_tpl->tpl_vars['puntos']->step));
if ($_smarty_tpl->tpl_vars['puntos']->total > 0) {
for ($_smarty_tpl->tpl_vars['puntos']->value = 1, $_smarty_tpl->tpl_vars['puntos']->iteration = 1;$_smarty_tpl->tpl_vars['puntos']->iteration <= $_smarty_tpl->tpl_vars['puntos']->total;$_smarty_tpl->tpl_vars['puntos']->value += $_smarty_tpl->tpl_vars['puntos']->step, $_smarty_tpl->tpl_vars['puntos']->iteration++) {
$_smarty_tpl->tpl_vars['puntos']->first = $_smarty_tpl->tpl_vars['puntos']->iteration == 1;$_smarty_tpl->tpl_vars['puntos']->last = $_smarty_tpl->tpl_vars['puntos']->iteration == $_smarty_tpl->tpl_vars['puntos']->total;?><i class="fa fa-star text-primary"></i> <?php }} ?><?php } else { ?>-<?php echo $_smarty_tpl->tpl_vars['value']->value['score'];?>
<?php }?></span></td>
                                                                        
                                                                    <td><a href="associato.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['idAzienda'];?>
" class='btn btn-primary btn-sm'>Vedi minisito <i class="fa fa-eye"></i></a></td>
								</tr>
                                                            <?php } ?>
							</tbody>
						</table>
<?php } else { ?><h3 class="alert alert-danger">Non ci sono studi medici nella regione scelta.</h3><?php }?>
                                                        <br>
<a href="javascript:history.back()" class="btn btn-lg btn-danger btn-block"><i class="fa fa-backward"></i> Sceglie altra regione</a>
                    
                    
                
            </div>
                                 
        </div>
    </div>
</div>

                                            <p>&nbsp;</p>
<?php echo $_smarty_tpl->getSubTemplate ("footer_publico.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
