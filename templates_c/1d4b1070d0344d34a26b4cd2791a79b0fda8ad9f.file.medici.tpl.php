<?php /* Smarty version Smarty-3.1.19, created on 2015-11-17 11:31:19
         compiled from "./templates/medici.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1038846849562ba95ddb2567-56281342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d4b1070d0344d34a26b4cd2791a79b0fda8ad9f' => 
    array (
      0 => './templates/medici.tpl',
      1 => 1447755897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1038846849562ba95ddb2567-56281342',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562ba95de09072_81001279',
  'variables' => 
  array (
    'status' => 0,
    'medici' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562ba95de09072_81001279')) {function content_562ba95de09072_81001279($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/vhosts/beecloud.it/easysmile.beecloud.it/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/beecloud.it/easysmile.beecloud.it/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class=content-page>
<div class=content>
<div class=container>
<div class=row>
<div class=col-sm-12>
<h4 class="pull-left page-title">Lista dei Medici iscritti alla piattaforma</h4>
<ol class="breadcrumb pull-right">
<li><a href="home_amministratore.php">BackOffice</a></li>
<li class=active>Medici</li>
</ol>
</div>
</div>
<div class=row>
<div class=col-md-12>
<div class="panel panel-default">
<div class=panel-heading>
<h3 class=panel-title>Tabella Medici</h3>
</div>
<div class=panel-body>
<div class=row>
<div class=col-sm-12>
<div class=m-b-30>
<a href="generatePDF.php?task=medico" class="btn btn-success waves-effect waves-light">Genera codice di iscrizione <i class="fa fa-plus"></i></a> <a href="medici.php?status=abbonato" class="btn btn-primary waves-effect waves-light <?php if (isset($_smarty_tpl->tpl_vars['status']->value)&&$_smarty_tpl->tpl_vars['status']->value=='abbonato') {?>disabled<?php }?>">Vedi solo abbonati <i class="fa fa-star"></i></a> <a href="medici.php?status=attesa" class="btn btn-danger waves-effect waves-light <?php if (isset($_smarty_tpl->tpl_vars['status']->value)&&$_smarty_tpl->tpl_vars['status']->value=='attesa') {?>disabled<?php }?>">Vedi solo in attesa <i class="fa fa-clock-o"></i></a>
</div>
</div>
</div>
<div class=row>
<div class="col-md-12 col-sm-12 col-xs-12">
    
<table class="table table-striped table-hover" id="datatable">
							<thead class="the-box dark full">
								<tr>
									<th>Nome completo</th>
                                                                        <th>Partita IVA</th>
                                                                        <th>Provincia</th>
                                                                        <th>Abbonato</th>
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
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['cognome'];?>
</td>
                                                                    
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['partitaIVA'];?>
</td>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['nomeprovincia'];?>
</td>
                                                                    <td class="center"><?php if (isset($_smarty_tpl->tpl_vars['value']->value['abonado'])&&!empty($_smarty_tpl->tpl_vars['value']->value['abonado'])&&smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['abonado'],"%Y-%m-%d")>smarty_modifier_date_format(time(),"%Y-%m-%d")) {?><button class="btn btn-xs btn-block btn-icon waves-effect waves-light btn-primary"> <i class="fa fa-star"></i> </button> <?php } else { ?> <button class="btn btn-icon waves-effect waves-light btn-danger btn-xs btn-block"> <i class="fa fa-remove"></i> </button><?php }?></td>
                                                                        <td class="center"> <?php if ($_smarty_tpl->tpl_vars['value']->value['stato']==1) {?><span class="btn btn-xs btn-danger"><i class="fa fa-fw fa-times-circle"></i> NON ATTIVO</span><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['value']->value['active']==0) {?><span class="btn btn-xs btn-danger"><i class="fa fa-fw fa-times-circle"></i> NON ATTIVO</span><?php } else { ?><span class="btn btn-xs btn-success"><i class="fa fa-fw fa-check-circle"></i> ATTIVO</span><?php }?><?php }?></td>
                                                                        <td><a id="<?php echo $_smarty_tpl->tpl_vars['value']->value['fkUtente'];?>
" class="btn btn-danger btn-xs waves-effect waves-light sa-paramos">Cancella <i class="fa fa-trash-o"></i> </a> <?php if ($_smarty_tpl->tpl_vars['value']->value['active']==0) {?><a href="medici.php?attiva=<?php echo $_smarty_tpl->tpl_vars['value']->value['fkUtente'];?>
" class="btn btn-primary btn-xs waves-effect waves-light">Attiva <i class="fa fa-unlock"></i></a><?php } else { ?><a href="medici.php?disattiva=<?php echo $_smarty_tpl->tpl_vars['value']->value['fkUtente'];?>
" class="btn btn-danger btn-xs waves-effect waves-light">Disattiva <i class="fa fa-lock"></i></a> <?php }?> <a href="medici.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['fkUtente'];?>
" class="btn btn-primary btn-xs waves-effect waves-light">Modifica <i class="fa fa-pencil"></i></a></td>
								</tr>
                                                            <?php } ?>
							</tbody>
						</table>

<?php echo $_smarty_tpl->getSubTemplate ("footer_aziende.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
