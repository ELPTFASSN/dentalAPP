<?php /* Smarty version Smarty-3.1.19, created on 2016-04-29 12:22:56
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25794887257233600e1dee9-16348903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69f029d82370ad14f10c2e0c53ef56ce1fbc68e8' => 
    array (
      0 => './templates/index.tpl',
      1 => 1461925037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25794887257233600e1dee9-16348903',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'accessError' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57233600e481a2_37394829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57233600e481a2_37394829')) {function content_57233600e481a2_37394829($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_publica.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-lg-6 col-lg-offset-3 col-md-6 col-sm-12 m-t-40" style="min-height: 800px;" >
    <!-- Start content -->
    <div class="content m-t-40">
        <div class="container m-t-40">
            <div class="panel panel-border panel-primary m-t-40">

                <div class="panel-heading"> 
                  
                </div> 

                <div class="panel-body" style="padding:25px 45px;">
                                                    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                            <div class="alert alert-danger alert-bold-border fade in alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                   <strong>Atenzione!<br>
                                       <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value['autenticazione'];?>
</span></strong>
                           </div>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['accessError']->value)) {?>
                            <div class="alert alert-warning alert-bold-border fade in alert-dismissable margin-top"><i class="fa fa-fw fa-exclamation-triangle fa-3x text-warning" style="float:left; padding-right:20px"></i>
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Atenzione!<br>
                                        <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['accessError']->value;?>
</span></strong>
                            </div>
		<?php }?>
                <form class="form-horizontal" action="login.php" method="POST">
                    <div class="text-center"> <img src="http://imgbox.es/share/87OKU.jpg" width="200" style="margin: 0 auto 20px;text-align: center;"></div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control input-lg " name="username" type="text" required="" placeholder="Username">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" name="password" type="password" required="" placeholder="Password">
                        </div>
                    </div>
                    
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">Avanti </button>
                        </div>
                    </div>

                   
                </form> 
                </div>                                 
                 
            </div>
                <div class="col-xs-12">
                        <div class="col-md-6">
                            <a class="btn btn-danger" href="recupera_password.php"><i class="fa fa-lock m-r-5"></i> Hai dimenticato la password?</a>
                        </div>
                        <div class="col-md-6 text-right">
                            <a class="btn btn-primary" href="registrati.php">Non hai un account? Registrati! <i class="fa fa-pencil m-r-5"></i></a>
                        </div>
                    </div>
        </div>
    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer_public.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
