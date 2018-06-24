<?php /* Smarty version Smarty-3.1.19, created on 2014-10-17 10:36:04
         compiled from "./templates/scheda_medico.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9419592915440d4f4b13c98-96218614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a8ddd96e642c080b1e1d1b9e7b357a0d2b904d8' => 
    array (
      0 => './templates/scheda_medico.tpl',
      1 => 1411998817,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9419592915440d4f4b13c98-96218614',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'medico' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5440d4f4c1ccd1_93529687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5440d4f4c1ccd1_93529687')) {function content_5440d4f4c1ccd1_93529687($_smarty_tpl) {?><div id="small-dialog" class="zoom-anim-dialog">
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
