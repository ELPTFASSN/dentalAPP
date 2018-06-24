<?php /* Smarty version Smarty-3.1.19, created on 2014-10-31 17:00:21
         compiled from "./templates/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48555534254339d788044c1-33710832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69e5fe13a786c6eeb3e8f28deff4c9f54c7b9202' => 
    array (
      0 => './templates/sidebar.tpl',
      1 => 1414771201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48555534254339d788044c1-33710832',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54339d7885da00_78770582',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54339d7885da00_78770582')) {function content_54339d7885da00_78770582($_smarty_tpl) {?>
    <?php if ($_SESSION['utente']['idRuoloUtente']==@constant('AMMINISTRATORE')) {?> 

            <div class="sidebar-left sidebar-nicescroller">
                    <ul class="sidebar-menu">
                            <li <?php if (strstr($_SERVER['SCRIPT_NAME'],((string)@constant('HOME_AMMINISTRATORE')))) {?>class="active"<?php }?>>
                                    <a href="<?php echo @constant('URL_FILE');?>
home_amministratore.php">	<i class="fa fa-user-md icon-sidebar"></i>Elenco Medici</a>
                            </li>
                            <li <?php if (strstr($_SERVER['SCRIPT_NAME'],((string)@constant('ELENCO_DSR')))||strstr($_SERVER['SCRIPT_NAME'],((string)@constant('AGGIUNGI_DSR')))) {?>class="active"<?php }?>>
                                    <a href="<?php echo @constant('URL_FILE');?>
elenco_dsr.php">	<i class="fa fa-copy icon-sidebar"></i>Design Specialist Review</a>
                            </li>
                            <li <?php if (strstr($_SERVER['SCRIPT_NAME'],((string)@constant('ELENCO_REFERRAL')))||strstr($_SERVER['SCRIPT_NAME'],((string)@constant('DETTAGLIO_REFERRAL')))) {?>class="active"<?php }?>>
                                    <a href="<?php echo @constant('URL_FILE');?>
elenco_ereferral.php">	<i class="fa fa-copy icon-sidebar"></i>Elenco eReferral</a>
                            </li>
                    </ul>
            </div>
    
    <?php } elseif ($_SESSION['utente']['idRuoloUtente']==@constant('MEDICO')) {?>

            <div class="sidebar-left sidebar-nicescroller">
                    <ul class="sidebar-menu">
                            
                            <li  <?php if (strstr($_SERVER['SCRIPT_NAME'],((string)@constant('HOME_MEDICO')))) {?>class="active"<?php }?>>
                                    <a href="<?php echo @constant('URL_FILE');?>
home_medico.php">	<i class="fa fa-users icon-sidebar"></i>Elenco Pazienti</a>
                            </li>
                            <li <?php if (strstr($_SERVER['SCRIPT_NAME'],((string)@constant('ELENCO_REFERRAL')))||strstr($_SERVER['SCRIPT_NAME'],((string)@constant('AGGIUNGE_EREFERRAL')))||strstr($_SERVER['SCRIPT_NAME'],((string)@constant('DETTAGLIO_REFERRAL')))) {?>class="active"<?php }?>>
                                    <a href="<?php echo @constant('URL_FILE');?>
elenco_ereferral.php">	<i class="fa fa-copy icon-sidebar"></i>Elenco eReferral</a>
                            </li>
                            <li <?php if (strstr($_SERVER['SCRIPT_NAME'],((string)@constant('AGGIORNA_PROFILO_MEDICO')))) {?>class="active"<?php }?>>
                                    <a href="<?php echo @constant('URL_FILE');?>
aggiorna_profilo_medico.php">	<i class="fa fa-user-md icon-sidebar"></i>Aggiorna Profilo</a>
                            </li>
                            <li <?php if (strstr($_SERVER['SCRIPT_NAME'],((string)@constant('SEGNALA_ERRORE')))) {?>class="active"<?php }?>>
                                    <a href="<?php echo @constant('URL_FILE');?>
segnala_errore.php"> <i class="fa fa-exclamation-triangle icon-sidebar"></i>Segnala errore</a>
                            </li>
                    </ul>
            </div>

    <?php } elseif ($_SESSION['utente']['idRuoloUtente']==@constant('DESIGN_SPECIALIST_REVIEW')) {?>

            <div class="sidebar-left sidebar-nicescroller">
                    <ul class="sidebar-menu">
                            <li  <?php if (strstr($_SERVER['SCRIPT_NAME'],((string)@constant('HOME_DSR')))||strstr($_SERVER['SCRIPT_NAME'],((string)@constant('DETTAGLIO_REFERRAL')))) {?>class="active"<?php }?>>
                                    <a href="<?php echo @constant('URL_FILE');?>
home_dsr.php">	<i class="fa fa-copy icon-sidebar"></i>Elenco eReferral</a>
                            </li>
                            <li <?php if (strstr($_SERVER['SCRIPT_NAME'],((string)@constant('SEGNALA_ERRORE')))) {?>class="active"<?php }?>>
                                    <a href="<?php echo @constant('URL_FILE');?>
segnala_errore.php"> <i class="fa fa-exclamation-triangle icon-sidebar"></i>Segnala errore</a>
                            </li>
                    </ul>
            </div>

        
    <?php }?><?php }} ?>
