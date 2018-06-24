<?php /* Smarty version Smarty-3.1.19, created on 2015-09-10 18:21:30
         compiled from "./templates/scheda_medico.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52031827455f1ae0adbc226-91265873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '520fcff5ed750985b295e59fc2e16b69dc2e3aab' => 
    array (
      0 => './templates/scheda_medico.tpl',
      1 => 1441810376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52031827455f1ae0adbc226-91265873',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'medico' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55f1ae0add54c2_96422267',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f1ae0add54c2_96422267')) {function content_55f1ae0add54c2_96422267($_smarty_tpl) {?><div id="small-dialog" class="zoom-anim-dialog">
    <h2>Dott. <?php echo $_smarty_tpl->tpl_vars['medico']->value->nome;?>
 <?php echo $_smarty_tpl->tpl_vars['medico']->value->cognome;?>
 <span class="mutado"> Status: <?php if (($_smarty_tpl->tpl_vars['medico']->value->active==0)) {?><i class="fa fa-fw fa-times-circle text-danger"></i><?php } else { ?><i class="fa fa-fw fa-check-circle text-success"></i><?php }?></span></h2>
        <div class="col-md-6"><p class="bordereda"><strong>Username:</strong> <?php echo $_smarty_tpl->tpl_vars['medico']->value->username;?>
</p></div>
        <div class="col-md-6"><p class="bordereda"><strong>e-Mail:</strong> <?php echo $_smarty_tpl->tpl_vars['medico']->value->email;?>
</p></div>
        <div class="col-md-6"><p class="borderedo"><strong>Telefono:</strong> <?php echo $_smarty_tpl->tpl_vars['medico']->value->telefono;?>
</p></div>
        <div class="col-md-6"><p class="borderedo"><strong>Indirizzo:</strong> <?php echo $_smarty_tpl->tpl_vars['medico']->value->indirizzo;?>
</p></div>
        <div class="col-md-6"><p class="bordereda"><strong>Citta:</strong> <?php echo $_smarty_tpl->tpl_vars['medico']->value->citta;?>
</p></div>
        <div class="col-md-6"><p class="bordereda"><strong>Provincia:</strong> <?php echo $_smarty_tpl->tpl_vars['medico']->value->provincia;?>
</p></div>
        <div class="col-md-6"><p class="borderedo"><strong>Specializzazione:</strong> <?php echo $_smarty_tpl->tpl_vars['medico']->value->specializzazione;?>
</p></div>
        <div class="col-md-6"><p class="borderedo"><strong>Data:</strong> <?php echo $_smarty_tpl->tpl_vars['medico']->value->dataSpecializzazione;?>
</p></div>
</div><?php }} ?>
