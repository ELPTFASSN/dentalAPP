<?php /* Smarty version Smarty-3.1.19, created on 2014-10-31 10:36:32
         compiled from "./templates/scheda_dsr.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1380240076545358204fd089-58156818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75ee78ff8ec1d7afade3d49b7f2d1bfa93d3cdf8' => 
    array (
      0 => './templates/scheda_dsr.tpl',
      1 => 1414685331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1380240076545358204fd089-58156818',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dsr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5453582052fe80_18197020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453582052fe80_18197020')) {function content_5453582052fe80_18197020($_smarty_tpl) {?><div id="small-dialog" class="zoom-anim-dialog" style="min-height: 300px;">
    <h2>Dettaglio Design Specialist Review <span class="mutado"> Status: <?php if (($_smarty_tpl->tpl_vars['dsr']->value['active']==0)) {?><i class="fa fa-fw fa-times-circle text-danger"></i><?php } else { ?><i class="fa fa-fw fa-check-circle text-success"></i><?php }?></span></h2>
        <div class="col-md-6"><p class="bordereda"><strong>Nome:</strong> <?php echo $_smarty_tpl->tpl_vars['dsr']->value['nome'];?>
</p></div>
        <div class="col-md-6"><p class="bordereda"><strong>Cognome:</strong> <?php echo $_smarty_tpl->tpl_vars['dsr']->value['cognome'];?>
</p></div>
        <div class="col-md-6"><p class="bordereda"><strong>Username:</strong> <?php echo $_smarty_tpl->tpl_vars['dsr']->value['username'];?>
</p></div>
        <div class="col-md-6"><p class="bordereda"><strong>e-Mail:</strong> <?php echo $_smarty_tpl->tpl_vars['dsr']->value['email'];?>
</p></div>
</div><?php }} ?>
