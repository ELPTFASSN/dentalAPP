<?php /* Smarty version Smarty-3.1.19, created on 2014-10-31 10:15:46
         compiled from "./templates/login_step_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67431866154339d5e4cebf0-64598148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6577b8d1d59b35463a485ca197d48572c9e39780' => 
    array (
      0 => './templates/login_step_2.tpl',
      1 => 1414746933,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67431866154339d5e4cebf0-64598148',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54339d60706da9_71035858',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54339d60706da9_71035858')) {function content_54339d60706da9_71035858($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <div class="login-header text-center">
			<img src="<?php echo @constant('URL_IMG');?>
logo_login.png" class="logos" alt="Logo">
		</div>
		<div class="login-wrappers">
                <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                            <div class="alert alert-danger alert-bold-border animated flash alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                   <strong>Atenzione!<br>
                                       <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value['autenticazione'];?>
</span></strong>
                           </div>
                <?php }?>
                    <div class="alert alert-info alert-bold-border fade in">
                        
                        <i class="fa fa-fw fa-5x fa-lock text-info" style="float:right;margin-top: 14px;"></i><h2 class="text-info">Codice temporaneo richiesto <br></h2>
                        <p style="margin-top:15px;" class="text-muted"> Inserisci il codice temporaneo ricevuto via mail.<br></p>
                        
                    <form method="post" class="form-signin" action="<?php echo @constant('URL_FILE');?>
login_step_2.php">
                        
                        <div class="form-group has-feedback lg left-feedback no-label">
				  <input name="code" type="text" class="form-control input-lg rounded" placeholder="Codice Temporaneo" required autofocus>
				  <span class="fa fa-lock fa-2x form-control-feedback"></span>
                        </div>
                        <br>
                        <button class="btn btn-lg btn-primary btn-perspective btn-block" type="submit">Accedi</button><br />
                    
                        <a href="<?php echo @constant('URL_FILE');?>
" class="btn btn-lg btn-danger btn-perspective btn-block">Annulla</a>
                    
                    </form>
                        
                    </div>
                    
                </div>



<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
