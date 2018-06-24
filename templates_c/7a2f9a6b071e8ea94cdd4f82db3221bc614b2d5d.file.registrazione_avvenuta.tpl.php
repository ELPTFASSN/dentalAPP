<?php /* Smarty version Smarty-3.1.19, created on 2014-10-22 10:04:24
         compiled from "./templates/registrazione_avvenuta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:235062069544765088cd334-08824999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a2f9a6b071e8ea94cdd4f82db3221bc614b2d5d' => 
    array (
      0 => './templates/registrazione_avvenuta.tpl',
      1 => 1411997733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '235062069544765088cd334-08824999',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54476508963e40_19357330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54476508963e40_19357330')) {function content_54476508963e40_19357330($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



                <div class="login-header text-center">
			<img src="<?php echo @constant('URL_IMG');?>
logo_login.png" class="logos" alt="Logo">
		</div>
		<div class="login-wrappers" style="max-width:600px;">
                    
                    <div class="alert alert-info alert-bold-border fade in">
                        
                        <i class="fa fa-fw fa-5x fa-check text-success" style="float:right;margin-top: 14px;"></i><h2 class="text-info"> La richiesta di registrazione &egrave; stata inviata correttamente.</h2>
                        <p>La sua richiesta verr&agrave; analizzata e, in caso di approvazione, ricever&agrave; la username e la password al proprio indirizzo di posta inviato in fase di registrazione.</p>
                        <p>&nbsp;</p>
                           <a href="<?php echo @constant('URL_FILE');?>
" class="btn btn-primary btn-perspective btn-block">Torna alla Home</a>
                    </div>
                    
                </div>



<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
