<?php /* Smarty version Smarty-3.1.19, created on 2016-02-01 12:03:57
         compiled from "./templates/modifica_sconti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17908675675652cfb301bcb8-54108990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0ff5f002068391dc78c31e27cbf28cc2b787898' => 
    array (
      0 => './templates/modifica_sconti.tpl',
      1 => 1454324635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17908675675652cfb301bcb8-54108990',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5652cfb3071d48_37138991',
  'variables' => 
  array (
    'error' => 0,
    'arrOrdini' => 0,
    'value' => 0,
    'precios' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652cfb3071d48_37138991')) {function content_5652cfb3071d48_37138991($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                            <form action="<?php echo @constant('URL_FILE');?>
prezzi.php" method="post" name="addCoupon" >
            <div class="row">

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
                                <?php if ($_smarty_tpl->tpl_vars['value']->value['idPrezzo']=='11'||$_smarty_tpl->tpl_vars['value']->value['idPrezzo']=='12'||$_smarty_tpl->tpl_vars['value']->value['idPrezzo']=='13') {?>
                                    <?php } else { ?>
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
                                    <?php }?>
                             <?php } ?>       
                        <div class="clearfix"></div>
                        <hr>
                        <div class="col-md-6 form-group"> <div class="checkbox checkbox-primary ">
                                                    <input id="checkbox1" name='14' type="checkbox" <?php if ($_SESSION['utente']['IVASINO']>="1") {?>checked<?php }?>>
                                                    <label for="checkbox1">
                                                        Applicare l'IVA?
                                                    </label>
                            </div>
                                                    <div class="input-group inline"> <span class="input-group-addon" id="moneda"><strong>%</strong></span> <input type="text" class="form-control input-lg" name="15" placeholder="Es. 22" value="<?php echo $_SESSION['utente']['IVA'];?>
"> </div>
                            
                            </div>
                            </div>
                        </div>
                    </div>
                 
         
            </div>
                        <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Gestisci i range</h3></div>
                            <div class="panel-body">

                                <input type="hidden" name="inserimento" value="TRUE">
                                
                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrOrdini']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                                <?php if ($_smarty_tpl->tpl_vars['value']->value['idPrezzo']=='11'||$_smarty_tpl->tpl_vars['value']->value['idPrezzo']=='12'||$_smarty_tpl->tpl_vars['value']->value['idPrezzo']=='13') {?>
                                    
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
                                    <?php } else { ?>
                                    <?php }?>
                             <?php } ?>       
                        <div class="clearfix"></div>
                        
                        </div>
                    </div>
                    <div class="col-md-6"><a href="aziende.php" class="btn btn-danger btn-lg btn-block">Cancella <i class="fa fa-times"></i></a></div> <div class="col-md-6"><button type="submit" class="btn btn-primary btn-lg btn-block ">Invia <i class="fa fa-check"></i></button></div>
                
            </div>
</form>
            <?php echo $_smarty_tpl->getSubTemplate ("footer_modifica.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
