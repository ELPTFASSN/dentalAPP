<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 12:56:41
         compiled from "./templates/abbonamento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8978754785649c103402901-00206166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dce274e25d33afbbf2e7822be9351c14ace497d' => 
    array (
      0 => './templates/abbonamento.tpl',
      1 => 1447674998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8978754785649c103402901-00206166',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5649c103445b14_64443614',
  'variables' => 
  array (
    'status' => 0,
    'satus' => 0,
    'accessError' => 0,
    'error' => 0,
    'success' => 0,
    'precio' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5649c103445b14_64443614')) {function content_5649c103445b14_64443614($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/beecloud.it/easysmile.beecloud.it/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class=content-page>
<div class=content>
<div class=container>
<div class=row>
<div class=col-sm-12>
<h4 class="pull-left page-title">Lista dei sconti <?php if (isset($_smarty_tpl->tpl_vars['status']->value)) {?><?php echo $_smarty_tpl->tpl_vars['satus']->value;?>
<?php }?>realizzate nella piattaforma</h4>
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
            
        </div>
    </div>

                                          <div class=row>
                <div class=col-md-12>
                    <div class="panel panel-default">
                        <div class=panel-heading>
                            <h3 class=panel-title>Abbonamento</h3> 
                        </div>
                        <div class=panel-body>
                            <div class="col-md-5">
                            <h3>Prezzo dell'abbonamento annuale: <span class="label label-primary"><?php echo $_smarty_tpl->tpl_vars['precio']->value;?>
 &euro;</span></h3>
                            <h3>Inizio dell'abbonamento: <span class="label label-primary"> <?php echo smarty_modifier_date_format(time(),"%d/%m/%Y");?>
 </span> </h3>
                            <h3>Fine abbonamento: <span class="label label-primary"><?php echo smarty_modifier_date_format("+1 year","%d/%m/%Y");?>
</span></h3>
                            <br>
                            <a href="checkout.php?task=abbonamento" class="btn btn-block btn-lg btn-perspective btn-primary waves-effect waves-light">Abbonati subito!</a>
                            </div>
                            <div class="col-md-7 text-center">
                                <img src="http://staging.beecloud.it/easysmile/img/pictures/carta.png" alt="abbonati" style="width:80%; text-align:center;padding:1px; background:white; border:1px solid #ddd;">
                            </div>
                            <div class="clearfix"></div>
                            <hr>
                            <h4>Abbonati a EasySmile Group oggi e riceve questi vantaggi:</h4>
                            <p>Inserire testo qui</p>
                        </div>
                    </div>
                </div>
                                          </div>

<?php echo $_smarty_tpl->getSubTemplate ("footer_aziende.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
