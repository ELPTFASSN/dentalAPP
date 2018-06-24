<?php /* Smarty version Smarty-3.1.19, created on 2015-10-01 17:27:38
         compiled from "./templates/home_paziente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:991317723560d4c3f5ea508-13731848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bd06303fa1dbd22997020572bac2e39f7f51b44' => 
    array (
      0 => './templates/home_paziente.tpl',
      1 => 1443713255,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '991317723560d4c3f5ea508-13731848',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_560d4c3f6317b7_03541675',
  'variables' => 
  array (
    'accessError' => 0,
    'error' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560d4c3f6317b7_03541675')) {function content_560d4c3f6317b7_03541675($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
