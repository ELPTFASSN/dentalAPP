<?php /* Smarty version Smarty-3.1.19, created on 2015-11-26 16:03:06
         compiled from "./templates/fatture.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177024247656571f2a629226-09327737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45e06f62a61413236fcdea35a1d06925ae167953' => 
    array (
      0 => './templates/fatture.tpl',
      1 => 1447769718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177024247656571f2a629226-09327737',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'ordini' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56571f2a6973b7_32771923',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56571f2a6973b7_32771923')) {function content_56571f2a6973b7_32771923($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/vhosts/beecloud.it/easysmile.beecloud.it/panel/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/beecloud.it/easysmile.beecloud.it/panel/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class=content-page>
    <div class=content>
        <div class=container>
            <div class=row>
                <div class=col-sm-12>
                    <h4 class="pull-left page-title">Lista delle fatture</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_amministratore.php">BackOffice</a></li>
                        <li class=active>Fatture</li>
                    </ol>
                </div>
            </div>
            <div class=row>
                <div class=col-md-12>
                    <div class="panel panel-default">
                        <div class=panel-heading>
                            <h3 class=panel-title>Le mie fatture</h3> 
                        </div>
                        <div class=panel-body>
                            <div class=row>
                                <div class=col-sm-12>
                                    <div class=m-b-30>
                                        <?php if ($_SESSION['utente']['idRuoloUtente']==@constant('AMMINISTRATORE')) {?> 
                                            <a id="sa-success" class="btn btn-success waves-effect waves-light">Genera codice di iscrizione <i class="fa fa-plus"></i></a> 

                                            <a href="pazienti.php?status=attesa" class="btn btn-danger waves-effect waves-light<?php if (isset($_smarty_tpl->tpl_vars['status']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['status']->value=='attesa') {?>disabled<?php }?><?php }?>">Vedi solo in attesa <i class="fa fa-clock-o"></i></a>
                                            <?php }?>
                                    </div>
                                </div>
                            </div>
                            <div class=row>
                                <div class="col-md-12 col-sm-12 col-xs-12">

                                    <table class="table table-striped table-hover" id="datatable">
                                        <thead class="the-box dark full">
                                            <tr>
                                                <th>Numero</th>
                                                <th>Data</th>
                                                <th>Totale</th>
                                                <th>Tipo </th>
                                                <th>Descrizione</th>
                                                <th>Codice </th>
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
                                                    <td><?php if ($_smarty_tpl->tpl_vars['value']->value['tipoFattura']=='1'||$_smarty_tpl->tpl_vars['value']->value['tipoFattura']=='3') {?>INV<?php echo sprintf("%05d",$_smarty_tpl->tpl_vars['value']->value['idFattura']);?>
 <?php } else { ?>ABB<?php echo sprintf("%05d",$_smarty_tpl->tpl_vars['value']->value['idFattura']);?>
<?php }?></td>
                                                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['data'],"%d/%m/%Y");?>
</td>
                                                    <td><?php echo number_format($_smarty_tpl->tpl_vars['value']->value['totale'],2,",",".");?>
 &euro;</td>
                                                    <td><?php if ($_smarty_tpl->tpl_vars['value']->value['tipoFattura']=='1') {?>Prescrizione<?php } elseif ($_smarty_tpl->tpl_vars['value']->value['tipoFattura']=='3') {?> Trattamento<?php } else { ?>Abbonamento<?php }?></td>                                                             

                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['descrizione'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['codice'];?>
</td>
                                                    <td><a href="generatePDF.php?task=generate&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['idFattura'];?>
<?php if ($_smarty_tpl->tpl_vars['value']->value['tipoFattura']=='3') {?>&tx=true<?php }?>" class="btn btn-xs btn-primary btn-perspective btn-block waves-effect waves-light">Scarica Fattura <i class="fa fa-fw fa-download"></i></a></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>

                                        <?php echo $_smarty_tpl->getSubTemplate ("footer_aziende.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
