<?php /* Smarty version Smarty-3.1.19, created on 2014-10-22 13:08:12
         compiled from "./templates/scheda_paziente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6692123595433b456423507-17412893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cb7b93ba366ea23e2546a2ab0d69ba9344f8cc3' => 
    array (
      0 => './templates/scheda_paziente.tpl',
      1 => 1413976087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6692123595433b456423507-17412893',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5433b45646ae89_89787702',
  'variables' => 
  array (
    'paziente' => 0,
    'clinico' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5433b45646ae89_89787702')) {function content_5433b45646ae89_89787702($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/ereferral/svn.ereferral.it/trunk/libs/plugins/modifier.date_format.php';
?><div id="small-dialog" class="zoom-anim-dialog">
    <h2><?php echo $_smarty_tpl->tpl_vars['paziente']->value->nome;?>
 <?php echo $_smarty_tpl->tpl_vars['paziente']->value->cognome;?>
 <span class="mutado"> Status: <?php if (($_smarty_tpl->tpl_vars['paziente']->value->status==0)) {?><i class="fa fa-fw fa-check-cross text-danger"></i><?php } else { ?><i class="fa fa-fw fa-check-circle text-success"></i><?php }?></span></h2>
    
    <hr>
    <span class="legendario">Anagrafe</span>
    <div class="clearfix" style="margin-top: -25px;"></div>
        <div class="col-md-6"><p class="bordereda"><strong>Data di Nascita:</strong> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['paziente']->value->dataNascita,"%d/%m/%y");?>
 </p></div>
        <div class="col-md-6"><p class="bordereda"><strong>e-Mail:</strong> <?php echo $_smarty_tpl->tpl_vars['paziente']->value->email;?>
</p></div>
        <div class="col-md-6"><p class="borderedo"><strong>Telefono:</strong> <?php echo $_smarty_tpl->tpl_vars['paziente']->value->telefono;?>
</p></div>
        <div class="col-md-6"><p class="borderedo"><strong>Indirizzo Domicilio:</strong> <?php echo $_smarty_tpl->tpl_vars['paziente']->value->indirizzoDomicilio;?>
</p></div>
        <div class="col-md-6"><p class="bordereda"><strong>Citta Domicilio:</strong> <?php echo $_smarty_tpl->tpl_vars['paziente']->value->cittaDomicilio;?>
</p></div>
        <div class="col-md-6"><p class="bordereda"><strong>Provincia Domicilio:</strong> <?php echo $_smarty_tpl->tpl_vars['paziente']->value->provinciaDomicilio;?>
</p></div>
        <div class="col-md-6"><p class="borderedo"><strong>Citta di Nascita:</strong> <?php echo $_smarty_tpl->tpl_vars['paziente']->value->citta;?>
</p></div>
        <div class="col-md-6"><p class="borderedo"><strong>Provincia di Nascita:</strong> <?php echo $_smarty_tpl->tpl_vars['paziente']->value->provincia;?>
</p></div>
        <div class="col-md-6"><p class="bordereda"><strong>Nazionalit&agrave;:</strong> <?php echo $_smarty_tpl->tpl_vars['paziente']->value->nazionalita;?>
</p></div>
        <div class="col-md-6"><p class="bordereda"><strong>Lingua Parlata:</strong> <?php echo $_smarty_tpl->tpl_vars['paziente']->value->linguaParlata;?>
</p></div>
        <div class="clearfix"></div> 
    <hr> 
    <span class="legendario">Dettaglio Clinico</span>
     <div class="clearfix" style="margin-top: -25px;"></div>
        <div class="col-md-6"><p class="bordereda"><strong>Diagnosi:</strong> <?php if (isset($_smarty_tpl->tpl_vars['clinico']->value->cirrosi)&&($_smarty_tpl->tpl_vars['clinico']->value->cirrosi=='1')) {?>Cirrosi<?php }?><?php if (isset($_smarty_tpl->tpl_vars['clinico']->value->epatocarcinoma)&&($_smarty_tpl->tpl_vars['clinico']->value->epatocarcinoma=='1')) {?>Epatocarcinoma<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['clinico']->value->altraPatologia)) {?><?php echo $_smarty_tpl->tpl_vars['clinico']->value->altraPatologia;?>
<?php }?></p></div>
        <?php if (isset($_smarty_tpl->tpl_vars['clinico']->value->cirrosi)&&($_smarty_tpl->tpl_vars['clinico']->value->cirrosi=='1')) {?><div class="col-md-6"><p class="borderedo"><strong>Eziologia:</strong> <?php echo $_smarty_tpl->tpl_vars['clinico']->value->eziologia;?>
</p></div><?php }?>
     <div class="clearfix"></div> 
</div><?php }} ?>
