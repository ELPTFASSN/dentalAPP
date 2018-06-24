<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 16:12:23
         compiled from "./templates/abbonamento_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19421203725649f1dd2d22a1-16669634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fb3dbd71d07e706920b1f5fe2bef6a1c8cd9efb' => 
    array (
      0 => './templates/abbonamento_1.tpl',
      1 => 1447686742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19421203725649f1dd2d22a1-16669634',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5649f1dd30add3_97240192',
  'variables' => 
  array (
    'status' => 0,
    'satus' => 0,
    'accessError' => 0,
    'error' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5649f1dd30add3_97240192')) {function content_5649f1dd30add3_97240192($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                            <h3 class=panel-title>Abbonamento Attivo</h3> 
                        </div>
                        <div class=panel-body>
                            
                            <h1 class="animated fadeIn alert alert-bold-border alert-success">Gi&agrave; sei abbonato a EasySmile Group e puoi usufruire tutti i vantaggi!</h1>
                            <hr>
                            <a href="home_medico.php" class="btn btn-lg btn-perspective btn-danger waves-effect waves-light pull-right"><i class="fa fa-fw fa-backward"></i> Torna indietro</a>
                        </div>
                    </div>
                </div>
                                          </div>

<?php echo $_smarty_tpl->getSubTemplate ("footer_aziende.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
