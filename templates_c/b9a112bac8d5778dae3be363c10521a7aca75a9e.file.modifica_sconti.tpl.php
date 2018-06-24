<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 14:18:33
         compiled from "./templates/modifica_sconti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:614555696562ba96fdfafe0-10523061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9a112bac8d5778dae3be363c10521a7aca75a9e' => 
    array (
      0 => './templates/modifica_sconti.tpl',
      1 => 1447672663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '614555696562ba96fdfafe0-10523061',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562ba96fe4a780_96381006',
  'variables' => 
  array (
    'error' => 0,
    'arrOrdini' => 0,
    'value' => 0,
    'precios' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562ba96fe4a780_96381006')) {function content_562ba96fe4a780_96381006($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Gestisci il listino prezzo</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_amministratore.php">BackOffice</a></li>
                        <li class="active">Listino Prezzi</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
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
                <form action="<?php echo @constant('URL_FILE');?>
prezzi.php" method="post" name="addCoupon 5469 8462 1004 9598 05/19 507 renzo porcari" >
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Gestisci il listino prezzo</h3></div>
                            <div class="panel-body">

                                <input type="hidden" name="inserimento" value="TRUE">
                                
                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrOrdini']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                                <div class="col-md-6 form-group">
                                    <label><?php echo $_smarty_tpl->tpl_vars['value']->value['description'];?>
 <?php if ($_smarty_tpl->tpl_vars['value']->value['idPrezzo']=='4') {?> (da 0 a <?php echo $_smarty_tpl->tpl_vars['precios']->value['1']['prezzo'];?>
)<?php }?><?php if ($_smarty_tpl->tpl_vars['value']->value['idPrezzo']=='1') {?> (da <?php echo $_smarty_tpl->tpl_vars['precios']->value['1']['prezzo'];?>
 a <?php echo $_smarty_tpl->tpl_vars['precios']->value['0']['prezzo'];?>
)<?php }?> <?php if ($_smarty_tpl->tpl_vars['value']->value['idPrezzo']=='5') {?> (da <?php echo $_smarty_tpl->tpl_vars['precios']->value['0']['prezzo']+1;?>
 in poi)<?php }?></label>
                                    <div class="input-group">
                                       <?php if ($_smarty_tpl->tpl_vars['value']->value['idPrezzo']=='11'||$_smarty_tpl->tpl_vars['value']->value['idPrezzo']=='12'||$_smarty_tpl->tpl_vars['value']->value['idPrezzo']=='13') {?> <span class="input-group-addon" id="moneda"><i class="fa fa-sort-numeric-desc"></i></span> <?php } else { ?> <span class="input-group-addon" id="moneda"><i class="fa fa-euro"></i></span><?php }?>
                                        <input required="" aria-required="true" type="text" class="form-control input-lg" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['idPrezzo'];?>
" placeholder="Es. 25" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['prezzo'];?>
">
                                    </div>
                                </div>
                             <?php } ?>       
                        <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"><a href="aziende.php" class="btn btn-danger btn-lg btn-block">Cancella <i class="fa fa-times"></i></a></div> <div class="col-md-6"><button type="submit" class="btn btn-primary btn-lg btn-block ">Invia <i class="fa fa-check"></i></button></div>
                </form>
            </div>

            <?php echo $_smarty_tpl->getSubTemplate ("footer_modifica.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
