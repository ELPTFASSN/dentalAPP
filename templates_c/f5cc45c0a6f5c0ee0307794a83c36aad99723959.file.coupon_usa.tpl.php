<?php /* Smarty version Smarty-3.1.19, created on 2015-10-17 10:49:41
         compiled from "./templates/coupon_usa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:328205746561d1a7376c7c8-55423850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5cc45c0a6f5c0ee0307794a83c36aad99723959' => 
    array (
      0 => './templates/coupon_usa.tpl',
      1 => 1445071777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '328205746561d1a7376c7c8-55423850',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_561d1a737e0274_37264826',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d1a737e0274_37264826')) {function content_561d1a737e0274_37264826($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Usa codice sconto</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_amministratore.php">BackOffice</a></li>
                        <li><a href="coupon.php">Coupon</a></li>
                        <li class="active">Usa Codice Sconto</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                        <div class="alert alert-danger alert-bold-border fade in animated flash">
                            <i class="fa fa-fw fa-3x fa-exclamation-circle text-danger" style="float:right;"></i>
                            <strong>Si sono verificati i seguenti errori:<br>
                                <span class="text-danger"><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php }?></span></strong>
                        </div>
                    </div>
                </div>
            <?php }?>       

            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-primary panel-border">
                        <div class="panel-heading">
                            <h3 class="panel-title">Usa Coupon Aziendale
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo @constant('URL_FILE');?>
coupon.php" method="post" name="aggiorna_profilo_medico">
                                <input type="hidden" name="idAgenda" value="nuovo">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="couponAzienda" class="form-control input-lg" placeholder="Es. ANR9876543"/>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                                <div class="col-md-6"><a href="agenda.php" class="btn btn-danger btn-lg btn-block">Cancella <i class="fa fa-times"></i></a></div><div class="col-md-6"> <button type="submit" class="btn btn-primary btn-lg btn-block">Invia <i class="fa fa-check"></i></button></div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-primary panel-border">
                        <div class="panel-heading">
                            <h3 class="panel-title">Usa Coupon amico
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo @constant('URL_FILE');?>
coupon.php" method="post" name="aggiorna_profilo_medico">
                                <input type="hidden" name="idAgenda" value="nuovo">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="couponAmico" class="form-control input-lg" placeholder="Es. BBC9876543"/>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                                <div class="col-md-6"><a href="agenda.php" class="btn btn-danger btn-lg btn-block">Cancella <i class="fa fa-times"></i></a></div><div class="col-md-6"> <button type="submit" class="btn btn-primary btn-lg btn-block">Invia <i class="fa fa-check"></i></button></div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <?php echo $_smarty_tpl->getSubTemplate ("footer_modifica.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
