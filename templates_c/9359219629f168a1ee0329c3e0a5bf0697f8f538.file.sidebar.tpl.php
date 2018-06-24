<?php /* Smarty version Smarty-3.1.19, created on 2015-10-28 19:15:02
         compiled from "./templates/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11283854805627f642605643-21222685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9359219629f168a1ee0329c3e0a5bf0697f8f538' => 
    array (
      0 => './templates/sidebar.tpl',
      1 => 1446056101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11283854805627f642605643-21222685',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5627f642667755_41159988',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5627f642667755_41159988')) {function content_5627f642667755_41159988($_smarty_tpl) {?>
    <?php if ($_SESSION['utente']['idRuoloUtente']==@constant('AMMINISTRATORE')) {?> 
<div class="left side-menu">
<div class="sidebar-inner slimscrollleft">
<div id=sidebar-menu>
<ul>
<li>
<a href="home_amministratore.php" class="waves-effect <?php if (strstr($_SERVER['SCRIPT_NAME'],'home_amministratore.php')) {?>active<?php }?>"><i class="md md-home"></i><span> Cruscotto </span></a>
</li>
<li>
<a href="aziende.php" class="waves-effect <?php if (strstr($_SERVER['SCRIPT_NAME'],'aziende.php')) {?>active<?php }?>" ><i class="md md-wallet-travel"></i><span> Aziende associate </span></a>
</li>
<li>
<a href="medici.php" class="waves-effect <?php if (strstr($_SERVER['SCRIPT_NAME'],'medici.php')) {?>active<?php }?>"><i class="md md-recent-actors"></i><span> Medici associati </span></a>
</li>
<li>
<a href="pazienti.php" class="waves-effect <?php if (strstr($_SERVER['SCRIPT_NAME'],'pazienti.php')) {?>active<?php }?>"><i class="md md-keyboard-alt"></i><span> Pazienti iscritti </span></a>
</li>
<li>
<a href="ordini.php" class="waves-effect <?php if (strstr($_SERVER['SCRIPT_NAME'],'ordini.php')) {?>active<?php }?>"><i class="md md-apps"></i><span> Prescrizione / Ordini </span></a>
</li>
<li>
<a href="coupon.php" class="waves-effect <?php if (strstr($_SERVER['SCRIPT_NAME'],'coupon.php')) {?>active<?php }?>"><i class="md md-cast-connected"></i><span> Sconti </span></a>
</li>
<li>
<a href="prezzi.php" class="waves-effect <?php if (strstr($_SERVER['SCRIPT_NAME'],'prezzi.php')) {?>active<?php }?>"><i class="md md-account-balance-wallet"></i><span> Listino prezzi </span></a>
</li>
</ul>
<div class=clearfix></div>
</div>
<div class=clearfix></div>
</div>
</div>

    
    <?php } elseif ($_SESSION['utente']['idRuoloUtente']==@constant('MEDICO')) {?>

<div class="left side-menu">
<div class="sidebar-inner slimscrollleft">
<div id=sidebar-menu>
<ul>
<li>
<a href="home_medico.php" class="waves-effect <?php if (strstr($_SERVER['SCRIPT_NAME'],'home_medico.php')) {?>active<?php }?>"><i class="md md-home"></i><span> Cruscotto </span></a>
</li>
<li>
<a href="aziende.php" class="waves-effect <?php if (strstr($_SERVER['SCRIPT_NAME'],'aziende.php')) {?>active<?php }?>"><i class="md md-business"></i><span> I tuoi studi medici </span></a>
</li>
<li>
<a href="ordini.php" class="waves-effect <?php if (strstr($_SERVER['SCRIPT_NAME'],'ordini.php')) {?>active<?php }?>"><i class="md md-apps"></i><span> Prescrizioni </span></a>
</li>
<li>
<a href="agenda.php" class="waves-effect <?php if (strstr($_SERVER['SCRIPT_NAME'],'agenda.php')) {?>active<?php }?>"><i class="md md-event"></i><span> La mia agenda </span></a>
</li>
<li>
<a href="fatture.php" class="waves-effect <?php if (strstr($_SERVER['SCRIPT_NAME'],'fatture.php')) {?>active<?php }?>"><i class="md md-account-balance-wallet"></i><span> Pagamenti e fatture </span></a>
</li>
<li>
<a href="coupon.php" class="waves-effect <?php if (strstr($_SERVER['SCRIPT_NAME'],'coupon.php')) {?>active<?php }?>"><i class="md md-attach-money"></i><span> Codici sconto </span></a>
</li>
<li>
<a href="minisito.php" class="waves-effect <?php if (strstr($_SERVER['SCRIPT_NAME'],'minisito.php')) {?>active<?php }?>"><i class="md md-contacts"></i><span> Minisito </span></a>
</li>
</ul>
<div class=clearfix></div>
</div>
<div class=clearfix></div>
</div>
</div>

    <?php } elseif ($_SESSION['utente']['idRuoloUtente']==@constant('DESIGN_SPECIALIST_REVIEW')) {?>


<?php } else { ?>
        <div class="left side-menu">
<div class="sidebar-inner slimscrollleft">
<div id=sidebar-menu>
<ul>
<li>
<a href="home_paziente.php" class="waves-effect <?php if (strstr($_SERVER['SCRIPT_NAME'],'home_paziente.php')) {?>active<?php }?>"><i class="md md-home"></i><span> Cruscotto </span></a>
</li>
<li>
<a href="agenda.php" class="waves-effect <?php if (strstr($_SERVER['SCRIPT_NAME'],'pazienti.php')) {?>active<?php }?>"><i class="md md-keyboard-alt"></i><span> Le mie visite </span></a>
</li>
<li>
<a href="ordini.php" class="waves-effect <?php if (strstr($_SERVER['SCRIPT_NAME'],'ordini.php')) {?>active<?php }?>"><i class="md md-apps"></i><span> Le mie mascherine </span></a>
</li>
<li>
<a href="coupon.php" class="waves-effect <?php if (strstr($_SERVER['SCRIPT_NAME'],'agenda.php')) {?>active<?php }?>"><i class="md md-book"></i><span> I miei coupon</span></a>
</li>
</ul>
<div class=clearfix></div>
</div>
<div class=clearfix></div>
</div>
</div>
    <?php }?><?php }} ?>
