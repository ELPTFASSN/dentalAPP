<?php /* Smarty version Smarty-3.1.19, created on 2015-10-23 10:20:44
         compiled from "./templates/home_paziente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3556959245629eddc6657b6-90601602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eba952808ff208ede58932a9715d7de5e1aa0ad3' => 
    array (
      0 => './templates/home_paziente.tpl',
      1 => 1445333870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3556959245629eddc6657b6-90601602',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessError' => 0,
    'error' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5629eddc69aed8_25547173',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5629eddc69aed8_25547173')) {function content_5629eddc69aed8_25547173($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class=content-page>
<div class=content>
<div class=container>
<div class=row>
<div class=col-sm-12>
<h4 class="pull-left page-title">Cruscotto Paziente</h4>
<ol class="breadcrumb pull-right">
<li><a href=#>Backoffice</a></li>
<li class=active>Cruscotto</li>
</ol>
</div>
</div>
<div class=row>
    <?php if (!empty($_smarty_tpl->tpl_vars['accessError']->value)) {?>
                            <div class="alert alert-warning alert-bold-border fade in alert-dismissable margin-top"><i class="fa fa-fw fa-exclamation-triangle fa-3x text-warning" style="float:left; padding-right:20px"></i>
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Attenzione!<br>
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

   <div class="col-lg-3">
                                <div class="panel panel-border panel-primary">
                                    <div class="panel-heading"> 
                                       
                                    </div> 
                                    <div class="panel-body"> 
                                        <h1 class="text-center"> <i class="fa fa-3x fa-book text-pink"></i> </h1>
                                        <br><br>
                                            
                                        <a class="btn btn-lg btn-block btn-primary">LE MIE VISITE</a>
                                    </div> 
                                </div>
   </div> 
    <div class="col-lg-3">
                                <div class="panel panel-border panel-primary">
                                    <div class="panel-heading"> 
                          
                                    </div> 
                                    <div class="panel-body"> 
                                            <h1 class="text-center"> <i class="fa fa-3x fa-file-text-o text-pink"></i> </h1>
                                        <br><br>
                                        <a class="btn btn-lg btn-block btn-primary">LE MIE FATTURE</a>
                                    </div> 
                                </div>
   </div> 
    <div class="col-lg-3">
                                <div class="panel panel-border panel-primary">
                                    <div class="panel-heading"> 
                                       
                                    </div> 
                                    <div class="panel-body"> 
                                            <h1 class="text-center"> <i class="fa fa-3x fa-medkit text-pink"></i> </h1>
                                        <br><br>
                                        <a class="btn btn-lg btn-block btn-primary">I MIEI TRATTAMENTI</a>
                                    </div> 
                                </div>
   </div> 
    <div class="col-lg-3">
                                <div class="panel panel-border panel-primary">
                                    <div class="panel-heading"> 
                                        
                                    </div> 
                                    <div class="panel-body"> 
                                            <h1 class="text-center"> <i class="fa fa-3x fa-tags text-pink"></i> </h1>
                                        <br><br>
                                        <a class="btn btn-lg btn-block btn-primary">I MIEI COUPON</a>
                                    </div> 
                                </div>
   </div> 

</div>
</div>
</div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
