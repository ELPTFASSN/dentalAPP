<?php /* Smarty version Smarty-3.1.19, created on 2015-11-05 15:06:07
         compiled from "./templates/coupon_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:382019296563b624f2643e9-05630772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66f20c8cf646897aa55d3c5d9f727e572cab1af3' => 
    array (
      0 => './templates/coupon_detail.tpl',
      1 => 1445333870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '382019296563b624f2643e9-05630772',
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
    'idCoupon' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563b624f2d6f83_50582097',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563b624f2d6f83_50582097')) {function content_563b624f2d6f83_50582097($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/vhosts/beecloud.it/easysmile.beecloud.it/libs/plugins/function.cycle.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class=content-page>
<div class=content>
<div class=container>
<div class=row>
<div class=col-sm-12>
<h4 class="pull-left page-title">Lista dei utenti con sconti <?php if (isset($_smarty_tpl->tpl_vars['status']->value)) {?><?php echo $_smarty_tpl->tpl_vars['satus']->value;?>
<?php }?>realizzati nella piattaforma</h4>
<ol class="breadcrumb pull-right">
<li><a href=#>BackOffice</a></li>
<li class=active>Sconti</li>
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
    <h3 class=panel-title>Tabella Utenti adderitti al coupon <?php echo $_smarty_tpl->tpl_vars['ordini']->value[0]['codice'];?>
 (<?php echo $_smarty_tpl->tpl_vars['ordini']->value[0]['nomeCoupon'];?>
) </h3>
</div>
<div class=panel-body>
<div class=row>
<div class=col-sm-12>
<div class=m-b-30>
    <a href="coupon.php?status=used&idi=<?php echo $_smarty_tpl->tpl_vars['idCoupon']->value;?>
" class="btn btn-success waves-effect waves-light <?php if (isset($_smarty_tpl->tpl_vars['status']->value)&&$_smarty_tpl->tpl_vars['status']->value=='used') {?>disabled<?php }?>">Vedere sconti usufruiti <i class="fa fa-check"></i></a> <a href="coupon.php?status=unused&idi=<?php echo $_smarty_tpl->tpl_vars['idCoupon']->value;?>
" class="btn btn-danger waves-effect waves-light <?php if (isset($_smarty_tpl->tpl_vars['status']->value)&&$_smarty_tpl->tpl_vars['status']->value=='unused') {?>disabled<?php }?>">Vedere sconti non usati <i class="fa fa-times"></i></a> <input type="hidden" class="hidden" id="idCoupon" value="<?php echo $_smarty_tpl->tpl_vars['idCoupon']->value;?>
" />
</div>
</div>
</div>
<div class=row>
<div class="col-md-12 col-sm-12 col-xs-12">
    
<table class="table table-striped table-hover" id="datatable">
							<thead class="the-box dark full">
								<tr>
									
                                                                        <th>Utente</th>
                                                        <th>Tipo coupon</th>
                                                        <th>Sconto</th>
                                                                        <th>Data scadenza</th>
                                                                        <th>Stato</th>
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
                                                                    <td><label class="label label-pink"><?php echo $_smarty_tpl->tpl_vars['value']->value['nomeCoupon'];?>
</label></td>
                                                                    <td><?php if (isset($_smarty_tpl->tpl_vars['value']->value['porciento'])) {?><?php echo $_smarty_tpl->tpl_vars['value']->value['porciento'];?>
%<?php } elseif (isset($_smarty_tpl->tpl_vars['value']->value['sconto'])) {?><?php echo $_smarty_tpl->tpl_vars['value']->value['sconto'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['value']->value['prezzo'];?>
<?php }?></td>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['dataScadenza'];?>
 </td>
                                                                    
                                                                    <td class="center"> <?php if ($_smarty_tpl->tpl_vars['value']->value['usato']==0) {?><span class="label label-danger"><i class="fa fa-fw fa-times-circle"></i> NON USATO</span><?php }?><?php if ($_smarty_tpl->tpl_vars['value']->value['usato']==1) {?><span class="btn btn-xs btn-success"><i class="fa fa-fw fa-check-circle"></i> USATO</span><?php }?></td>
                                                                    <td><a id="<?php echo $_smarty_tpl->tpl_vars['value']->value['idBridgeCouponPaziente'];?>
" class="btn btn-danger btn-perspective btn-xs waves-effect waves-light sa-paramosa">Cancella coupon <i class="fa fa-trash"></i></a></td>
								</tr>
                                                            <?php } ?>
							</tbody>
						</table>

<?php echo $_smarty_tpl->getSubTemplate ("footer_aziende.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
