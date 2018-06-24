<?php /* Smarty version Smarty-3.1.19, created on 2015-10-17 17:18:17
         compiled from "./templates/reimposta_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93519323562110b56cc297-64243628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9d74f1a8f35c18f3299b6de8c2d75aa784a3f02' => 
    array (
      0 => './templates/reimposta_password.tpl',
      1 => 1445009616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93519323562110b56cc297-64243628',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562110b56df9b1_08030208',
  'variables' => 
  array (
    'error' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562110b56df9b1_08030208')) {function content_562110b56df9b1_08030208($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_publica.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-lg-4 col-lg-offset-4 col-md-6 col-sm-12 m-t-40" >
    <!-- Start content -->
    <div class="content m-t-40">
        <div class="container m-t-40">
            <div class="panel panel-primary m-t-40">

                <div class="panel-heading"> 
                    <h3 class="text-white">Recupera Password <i class="fa fa-fw fa-key"></i></h3>
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
recupera_password.php" method="POST">
                    
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label>Inserisci la tua email per reimpostare la password</label>
                            <input class="form-control input-lg " name="email" type="email" required="" placeholder="La tua email"><br>
                    </div>
                    
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">Recupera Password</button>
                        </div>
                    </div>

                   
                </form> 
                </div>                                 
            </div>
        </div>
    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer_public.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
