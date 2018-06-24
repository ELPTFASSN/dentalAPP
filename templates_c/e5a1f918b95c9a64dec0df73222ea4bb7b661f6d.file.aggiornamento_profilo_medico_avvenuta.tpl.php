<?php /* Smarty version Smarty-3.1.19, created on 2014-10-14 16:45:15
         compiled from "./templates/aggiornamento_profilo_medico_avvenuta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1120475396543d36fbe20587-50452358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5a1f918b95c9a64dec0df73222ea4bb7b661f6d' => 
    array (
      0 => './templates/aggiornamento_profilo_medico_avvenuta.tpl',
      1 => 1411983128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1120475396543d36fbe20587-50452358',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543d36fbedaec8_93702117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d36fbedaec8_93702117')) {function content_543d36fbedaec8_93702117($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="page-content">

        <div class="container-fluid">
            
            
            <h1 class="page-heading">Aggiorna profilo</h1>
                <div class="the-box">
                    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                            <div class="alert alert-danger alert-bold-border fade in alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                   <strong>Si sono verificati i seguenti errori:<br>
                                       <span class="text-danger"><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php }?></span></strong>
                           </div>
                            <a href="home_medico.php" class="btn btn-danger btn-lg btn-block btn-perspective">Anulla </a>
                    <?php }?>
                    <?php if (empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                            <div class="alert alert-success alert-bold-border fade in">
                                <i class="fa fa-fw fa-5x fa-check text-success" style="float:right;"></i>
                                <h3><strong>ESITO:<br>
                                        <span class="text-success">Aggiornamento del profilo avvenuto con successo!</span></strong></h3>
                           </div>
                    <?php }?>
                    <a href="home_medico.php" class="btn btn-primary btn-lg btn-block btn-perspective">Torna alla home </a>
                </div>
        </div>

    </div>
                        
<?php echo $_smarty_tpl->getSubTemplate ("footer_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
