<?php /* Smarty version Smarty-3.1.19, created on 2016-02-02 11:26:45
         compiled from "./templates/cambia_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:529931655662d940184690-04099364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05e14715664ef05de1847ec6b4a13f9f583dfe5e' => 
    array (
      0 => './templates/cambia_password.tpl',
      1 => 1454322640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '529931655662d940184690-04099364',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5662d9401b6616_38854135',
  'variables' => 
  array (
    'error' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5662d9401b6616_38854135')) {function content_5662d9401b6616_38854135($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_publica.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-lg-4 col-lg-offset-4 col-md-6 col-sm-12 m-t-40" >
    <!-- Start content -->
    <div class="content m-t-40">
        <div class="container m-t-40">
            <div class="panel panel-primary m-t-40">

                <div class="panel-heading"> 
                    <h3 class="text-white">Cambia Password <i class="fa fa-fw fa-key"></i></h3>
                </div> 

                <div class="panel-body" style="padding:45px;">
                    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                        <div class="alert alert-danger alert-bold-border fade in alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Atenzione!<br>
                                <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></strong>
                        </div>
                    <?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['success']->value)) {?>
                        <div class="alert alert-success alert-bold-border fade in alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Esito<br>
                                <span class="text-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</span></strong>
                        </div>
                    <?php }?>

                <form class="form-horizontal" action="<?php echo @constant('URL_FILE');?>
cambia_password.php" method="POST">
                    <div class="alert alert-info alert-bold-border fade in alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>
                                <span class="text-primary">Stai accedendo per la prima volta alla piattaforma Easy Smile occorre inserire la nuova password</span></strong>
                        </div>
                   
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control input-lg " name="password" type="text" required="" placeholder="La tua nuova password"><br>
                    </div>
                    
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">Cambia Password</button>
                        </div>
                    </div>

                   
                
                </div>        
                    </form> 
            </div>
        </div>
    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer_public.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
