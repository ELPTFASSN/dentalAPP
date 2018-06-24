<?php /* Smarty version Smarty-3.1.19, created on 2014-10-07 09:14:04
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1839014661543392bcabd691-02390287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6a6fe21fe0214e4b91635b0097554d8dd3dc147' => 
    array (
      0 => './templates/index.tpl',
      1 => 1411555413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1839014661543392bcabd691-02390287',
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
  'unifunc' => 'content_543392bd34a399_52888201',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543392bd34a399_52888201')) {function content_543392bd34a399_52888201($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="login-header text-center">
			<img src="<?php echo @constant('URL_IMG');?>
logo_login.png" class="logo" alt="Logo">
		</div>
		<div class="login-wrapper">

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
                            
                    <form method="post" class="form-signin" action="<?php echo @constant('URL_FILE');?>
login.php">

                        <div class="form-group has-feedback lg left-feedback no-label">
				  <input type="text" class="form-control no-border input-lg rounded" name="username" placeholder="Introduce il tuo username" autofocus>
				  <span class="fa fa-user fa-2x form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback lg left-feedback no-label">
				  <input type="password" class="form-control no-border input-lg rounded" name="password" placeholder="Introduce il tuo password">
				  <span class="fa fa-unlock-alt fa-2x form-control-feedback"></span>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-lg btn-perspective btn-block">LOGIN</button>
				</div>
			</form>
                    <p class="text-center">&nbsp;</p>
			<p class="text-center"><strong><a href="<?php echo @constant('URL_FILE');?>
registrati.php">PER REGISTRARTI AL SISTEMA INVIA UNA RICHIESTA DA QUI</a></strong></p>
                    
                    </form>
                    <p class="text-center text-white"><small>Copyright &copy; <strong>Agenzia Regionale del Lazio per i Trapianti e le patologie connesse</strong>. <br>P.IVA 08054201002. Tutti i diritti riservati. </small></p>
</div>
                


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
