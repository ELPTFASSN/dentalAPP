<?php /* Smarty version Smarty-3.1.19, created on 2015-11-17 10:11:56
         compiled from "./templates/coupon_usa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18511536715628b97e230c88-03932542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db112ed75d4bbc99e4c9b276e97cfb3107968f7c' => 
    array (
      0 => './templates/coupon_usa.tpl',
      1 => 1447751514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18511536715628b97e230c88-03932542',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5628b97e264745_98370382',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5628b97e264745_98370382')) {function content_5628b97e264745_98370382($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                            <h3 class="panel-title">Usa sconto aziendale
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo @constant('URL_FILE');?>
coupon.php" method="post" name="aggiorna_profilo_medico">
                                <input type="hidden" name="idAgenda" value="nuovo">
                                <div class="input-group m-t-10">
                                                        <input type="text" id="example-input2-group2" name="couponAzienda" class="form-control input-lg" placeholder="Es. ANR9876543">
                                                        <span class="input-group-btn">
                                                        <button type="button" class="btn btn-lg waves-effect waves-light btn-primary">Convalida codice sconto</button>
                                                        </span>
                                </div>
                                
                                
                            </form>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-primary panel-border">
                        <div class="panel-heading">
                            <h3 class="panel-title">Usa sconto amico
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo @constant('URL_FILE');?>
coupon.php" method="post" name="aggiorna_profilo_medico">
                                <input type="hidden" name="idAgenda" value="nuovo">
                                <div class="input-group m-t-10">
                                                        <input type="text" id="example-input2-group1" name="couponAmico" class="form-control input-lg" placeholder="Es. BBC9876543">
                                                        <span class="input-group-btn">
                                                        <button type="button" class="btn btn-lg waves-effect waves-light btn-primary">Convalida codice sconto</button>
                                                        </span>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
                                <div class="row"><div class="col-md-12"><div class="col-md-4 col-md-offset-8 col-xs-12"><a href="home_medico.php" class="btn btn-lg btn-danger waves-effect waves-light btn-perspective btn-block"><i class="fa fa-fw fa-backward"></i> Torna indietro</a></div></div></div>
            <?php echo $_smarty_tpl->getSubTemplate ("footer_modifica.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
