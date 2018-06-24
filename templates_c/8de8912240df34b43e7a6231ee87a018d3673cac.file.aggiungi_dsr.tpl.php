<?php /* Smarty version Smarty-3.1.19, created on 2014-10-31 10:35:14
         compiled from "./templates/aggiungi_dsr.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1516871012545357d25729d5-82079574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8de8912240df34b43e7a6231ee87a018d3673cac' => 
    array (
      0 => './templates/aggiungi_dsr.tpl',
      1 => 1414688279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1516871012545357d25729d5-82079574',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'warning' => 0,
    'permesso' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545357d25cdbb0_47741978',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545357d25cdbb0_47741978')) {function content_545357d25cdbb0_47741978($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="page-content">

        <div class="container-fluid">
            
            
            <h1 class="page-heading">Aggiungi un Design Specialist Review</h1>
                <div class="the-box" style="min-height: 400px;">
                    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                            <div class="alert alert-danger alert-bold-border animated flash fade in">
                                <i class="fa fa-fw fa-5x fa-exclamation-circle text-danger" style="float:right;"></i>
                                   <strong>Si sono verificati i seguenti errori:<br>
                                       <span class="text-danger"><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php }?></span></strong>
                           </div>
                    <?php }?>

                    <form action="<?php echo @constant('URL_FILE');?>
aggiungi_dsr.php" method="post" name="aggiunge_paziente">
                     <?php if (!empty($_smarty_tpl->tpl_vars['warning']->value)) {?>
                            <div class="alert alert-warning alert-bold-border animated flash fade in">
                                <i class="fa fa-fw fa-5x fa-question-circle text-warning" style="float:right;"></i>
                                   <strong>Atenzione!<br>
                                       <span class="text-warning"><?php if (isset($_smarty_tpl->tpl_vars['warning']->value)) {?><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
<?php }?> <button class="btn btn-xs btn-primary btn-perspective">Si, invia comunque</button></span></strong>
                           </div>
                    <?php }?>
                        <input type="hidden" name="inserimento" value="true"><?php if (!empty($_smarty_tpl->tpl_vars['permesso']->value)) {?><input type="hidden" name="permesso" value="true"><?php }?>
                        <div class="col-md-4">
                            <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" class="form-control rounded" name="nome" placeholder="Nome" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['nome'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['nome'];?>
<?php }?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                    <label>Cognome</label>
                                    <input type="text" class="form-control rounded" name="cognome" placeholder="Cognome" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['cognome'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['cognome'];?>
<?php }?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                    <label>Telefono</label>
                                    <input type="text" class="form-control rounded" name="telefono" placeholder="Telefono" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['telefono'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['telefono'];?>
<?php }?>">
                            </div>
                        </div>                  
                        <div class="clearfix"></div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control rounded" name="email" placeholder="Email" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['email'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['email'];?>
<?php }?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control rounded" name="username" placeholder="Username" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['username'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['username'];?>
<?php }?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control rounded" name="password" placeholder="Password" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['password'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['password'];?>
<?php }?>">
                            </div>
                        </div>
                        
                        <div class="clearfix"></div>
                        
                        
                        <div class="col-md-12">
                            <div class="col-md-6 col-md-offset-6 text-right">
                                <br> <a href="<?php echo @constant('URL_FILE');?>
elenco_dsr.php" class="btn btn-danger btn-perspective">Anulla<i class="fa fa-fw fa-times"></i></a> <button class="btn btn-action btn-perspective btn-primary" type="submit">Invia<i class="fa fa-fw fa-check"></i></button>
                            </div>
                        
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
        </div>

    </div>
     
                        
<?php echo $_smarty_tpl->getSubTemplate ("footer_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
