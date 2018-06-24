<?php /* Smarty version Smarty-3.1.19, created on 2016-02-23 19:20:16
         compiled from "./templates/riepilogo_paziente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135825082056b8c47a0a9545-77012226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '671fed184f5409f64b890eefb2dddc81af4fd237' => 
    array (
      0 => './templates/riepilogo_paziente.tpl',
      1 => 1456251614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135825082056b8c47a0a9545-77012226',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56b8c47a0f65a1_83758860',
  'variables' => 
  array (
    'error' => 0,
    'ordini' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b8c47a0f65a1_83758860')) {function content_56b8c47a0f65a1_83758860($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/vhosts/beecloud.it/easysmile.beecloud.it/panel/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/beecloud.it/easysmile.beecloud.it/panel/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars["iva"] = new Smarty_variable($_SESSION['utente']['IVA']/100, null, 0);?>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">I miei trattamenti</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_paziente.php">BackOffice</a></li>
                        <li class="active">Dettaglio trattamento</li>
                    </ol>
                </div>
            </div>

            <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger alert-bold-border fade in animated flash">
                            <i class="fa fa-fw fa-5x fa-exclamation-circle text-danger" style="float:right;"></i>
                            <strong>Si sono verificati i seguenti errori:<br>
                                <span class="text-danger"><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php }?></span></strong>
                        </div>
                    </div>
                </div>
            <?php }?>       
            <div class="row">
                <div class="col-md-12">


                    <div class="panel panel-border panel-primary">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Servizi disponibili su EasySmile Group</h3> 
                        </div> 
                        <div class="panel-body">
                            <div class="col-md-12 text-center">
                                <img src="http://easysmile.beecloud.it/img/portfolio/igiene.png">
                                <img src="http://easysmile.beecloud.it/img/portfolio/filler.png">
                                <img src="http://easysmile.beecloud.it/img/portfolio/endodonzia.png">
                                <img src="http://easysmile.beecloud.it/img/portfolio/conservativa.png">
                                <img src="http://easysmile.beecloud.it/img/portfolio/chirurgia.png">
                                <img src="http://easysmile.beecloud.it/img/portfolio/implantologia.png">
                            </div>
                            <div class="clearfix"></div><br><hr><br>
                            <div class="col-md-12">
                                <table class="table table-striped table-hover" id="datatable">
                                    <thead class="the-box dark full">
                                        <tr>
                                            <th>Data</th>
                                            <th>Tipo di servizio</th>
                                            <th>Studio Medico</th>
                                            <th>Gradimenti</th>
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
                                                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['dataApertura'],"%d/%m/%Y");?>
</td>
                                                <td>Ortodonzia Invisibile</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['denominazione'];?>
</td>
                                                <td><a href="home_paziente.php?gradimenti=true" class="btn btn-primary btn-sm">Lascia un gradimento</a></td>                                                             
                                            </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


            <?php echo $_smarty_tpl->getSubTemplate ("footer_modifica_3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
