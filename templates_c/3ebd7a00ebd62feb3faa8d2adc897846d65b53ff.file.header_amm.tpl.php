<?php /* Smarty version Smarty-3.1.19, created on 2014-10-21 09:39:57
         compiled from "./templates/header_amm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125800665554339d787cbde8-94877919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ebd7a00ebd62feb3faa8d2adc897846d65b53ff' => 
    array (
      0 => './templates/header_amm.tpl',
      1 => 1413877195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125800665554339d787cbde8-94877919',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54339d78801804_01267857',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54339d78801804_01267857')) {function content_54339d78801804_01267857($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title>eReferral - Agenzia Trapianti Lazio</title>
        
        
        <link type="text/css" rel="stylesheet" href="<?php echo @constant('URL_STYLE');?>
bootstrap.min.css<?php echo @constant('STYLE_VERSION');?>
" />
                
		
	<!-- CSS PER I PLUGINS - DATATABLES -->
                <link href="<?php echo @constant('URL_JS');?>
prettify/prettify.min.css" rel="stylesheet">
                <link href="<?php echo @constant('URL_JS');?>
datatable/css/bootstrap.datatable.min.css" rel="stylesheet">
		
	<!-- CSS CON GLI STYLES E I FONTS -->
		<link href="<?php echo @constant('URL_JS');?>
font-awesome/css/font-awesome.min.css" rel="stylesheet">
                <link href="<?php echo @constant('URL_STYLE');?>
magnific-popup.css" rel="stylesheet">
		<link href="<?php echo @constant('URL_STYLE');?>
style-amm.css" rel="stylesheet">
		<link href="<?php echo @constant('URL_STYLE');?>
style-amm-responsive.css" rel="stylesheet">
                <link href="<?php echo @constant('URL_STYLE');?>
animate.css" rel="stylesheet">
                    
                    
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head> 
                    
                <body>      
                    
                    <div class="wrapper">
	<!-- INIZIO TOP NAV -->
			<div class="top-navbar">
				<div class="top-navbar-inner">
					
					<div class="logo-brand">
						<a href="#"><img src="<?php echo @constant('URL_IMG');?>
logo_alt.png" alt="logo"></a>
					</div>
					
					<div class="top-nav-content">

						<div class="btn-collapse-sidebar-left">
							<i class="fa fa-long-arrow-right icon-dinamic"></i>
						</div>
						
						<div class="btn-collapse-nav" data-toggle="collapse" data-target="#main-fixed-nav">
							<i class="fa fa-plus icon-plus"></i>
						</div>
						
						<ul class="nav-user navbar-right">
							<li class="dropdown">
							  <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
								Bentornato, <strong><?php if ($_SESSION['utente']['idRuoloUtente']==1) {?>Amministratore <?php }?><?php if ($_SESSION['utente']['idRuoloUtente']==2) {?>Dott.<?php }?><?php if ($_SESSION['utente']['idRuoloUtente']==4) {?>Spec.<?php }?> <?php if (isset($_SESSION['utente']['nome'])&&isset($_SESSION['utente']['cognome'])) {?><?php echo $_SESSION['utente']['nome'];?>
 <?php echo $_SESSION['utente']['cognome'];?>
<?php } else { ?><?php echo $_SESSION['utente']['username'];?>
<?php }?></strong>
                                                                <i class="fa fa-fw fa-chevron-circle-down"></i>
							  </a>
							  <ul class="dropdown-menu square primary margin-list-rounded with-triangle">
                                                              <?php if ($_SESSION['utente']['idRuoloUtente']!=1) {?><li><a href="<?php echo @constant('URL_FILE');?>
aggiorna_profilo_medico.php"><i class="fa fa-user"></i> Profilo Personale</a></li>
								<li class="divider"></li><?php }?>
                                                                <li><a href="index.php"><i class="fa fa-power-off"></i> Log out</a></li>
							  </ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
	<!-- END TOP NAV --><?php }} ?>
