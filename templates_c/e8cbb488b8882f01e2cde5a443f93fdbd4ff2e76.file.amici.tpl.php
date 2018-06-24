<?php /* Smarty version Smarty-3.1.19, created on 2016-02-08 16:02:06
         compiled from "./templates/amici.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8899475105672a09124d6b6-07908116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8cbb488b8882f01e2cde5a443f93fdbd4ff2e76' => 
    array (
      0 => './templates/amici.tpl',
      1 => 1454943723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8899475105672a09124d6b6-07908116',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5672a091288d80_89162157',
  'variables' => 
  array (
    'accessError' => 0,
    'error' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5672a091288d80_89162157')) {function content_5672a091288d80_89162157($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class=content-page>
<div class=content>
<div class=container>
<div class=row>
<div class=col-sm-12>
<h4 class="pull-left page-title">Realizza un'invitazione</h4>
<ol class="breadcrumb pull-right">
<li><a href=#>BackOffice</a></li>
<li class=active>Inivi</li>
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
<h3 class=panel-title>Invita ai tuoi amici</h3>
</div>
<div class=panel-body>
<form action="home_paziente.php" method="post">

    <h4 class='alert alert-info'>INVITA AI TUOI AMICI A REGISTRARSI SULLA PIATTAFORMA EASY SMILE GROUP E OTTERRAI IMPORTANTI SCONTI!</h4>
                                           <div class="form-group">
                                    <label class="control-label">Email dei tuoi amici (separati per virgole)</label>
                                    
                                        <input name="amici" id="tags" class="form-control input-lg"  />
                                    
                                </div><!-- form-group -->
                                            <br>
                                            <button class="btn btn-primary btn-lg btn-perspective waves-effect waves-light">Invia inviti</button>
                                        </form>
</div>
</div>
</div>

</div>
    


 <?php echo $_smarty_tpl->getSubTemplate ("footer_modifica.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
