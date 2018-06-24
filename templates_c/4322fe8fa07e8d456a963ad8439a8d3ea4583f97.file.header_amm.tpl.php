<?php /* Smarty version Smarty-3.1.19, created on 2016-02-18 16:04:26
         compiled from "./templates/header_amm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8379654345652cfad6f3ef2-03958108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4322fe8fa07e8d456a963ad8439a8d3ea4583f97' => 
    array (
      0 => './templates/header_amm.tpl',
      1 => 1455807710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8379654345652cfad6f3ef2-03958108',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5652cfad714002_46400392',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652cfad714002_46400392')) {function content_5652cfad714002_46400392($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8>
        <meta name=viewport content="width=device-width, initial-scale=1.0">
        <meta name=description content="Easy Smile Group">
        <meta name=author content="iNTERVOLUTIONS Ltd">
        <link rel="shortcut icon" href=images/favicon_1.ico>
        <title>Dashboard - Easy Smile Group</title>
        <link href=css/bootstrap.min.css rel=stylesheet />
        <link href=assets/font-awesome/css/font-awesome.min.css rel=stylesheet />
        <link href=assets/ionicon/css/ionicons.min.css rel=stylesheet />
        <link href=css/material-design-iconic-font.min.css rel=stylesheet>
        <link href=css/animate.css rel=stylesheet />
        <link href=css/jquery-jvectormap-2.0.3 rel=stylesheet />
        <link href=css/waves-effect.css rel=stylesheet>
        <link href=assets/datatables/jquery.dataTables.min.css rel=stylesheet type=text/css />
        <link href=assets/sweet-alert/sweet-alert.min.css rel=stylesheet>
        <!-- Plugins css-->
        <link href="assets/tagsinput/jquery.tagsinput.css" rel="stylesheet" />
        <link href="assets/toggles/toggles.css" rel="stylesheet" />
        <link href="assets/timepicker/bootstrap-timepicker.min.css" rel="stylesheet" />
        <link href="assets/timepicker/bootstrap-datepicker.min.css" rel="stylesheet" />
        <link href="assets/colorpicker/colorpicker.css" rel="stylesheet" type="text/css" />
        <link href="assets/jquery-multi-select/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="assets/select2/select2.css" rel="stylesheet" type="text/css" />
        <link href="assets/modal-effect/css/component.css" rel="stylesheet">
                <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />

        <!-- Plugins css -->
        <link href="assets/notifications/notification.css" rel="stylesheet" />
        <!--calendar css-->
        <link href="assets/fullcalendar/fullcalendar.css" rel="stylesheet" />

        <link href=css/helper.css rel=stylesheet type=text/css />
        <link href=css/style.css rel=stylesheet type=text/css />
        <!--[if lt IE 9]>
        <script src=https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js></script>
        <script src=https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js></script>
        <![endif]-->
        <script src=js/modernizr.min.js></script>
    </head>
    <body class=fixed-left>
        <div id=wrapper>
            <div class=topbar>
                <div style="max-width: 1170px;margin:0 auto;">
                <div class=topbar-left>
                   
                         <a href="http://easysmile.beecloud.it/" class=logo><img src="http://easysmile.beecloud.it/img/logo_easysmile.png" class="logo"></a>
                    
                </div>
                <div class="navbar navbar-default hidden-xs" role=navigation>
                    <div class=container>
                    
                            <ul class="nav navbar-nav navbar-right pull-right">
                                			<li><a class="scrollto" href="http://easysmile.beecloud.it/#wath">Cos'e' Easy Smile</a></li>
                         <li><a href="http://easysmile.beecloud.it/#portfolio" class="scrollto">Prestazioni</a></li>
			<li><a class="scrollto" href="http://easysmile.beecloud.it/#team">Centri</a></li>
   			<li><a class="scrollto" href="http://easysmile.beecloud.it/#news">News</a></li>
         
	
			<li><a class="scrollto" href="http://easysmile.beecloud.it/#contact">Contatti</a></li>
                                <li class=dropdown>
                                    <a href class="dropdown-toggle profile" data-toggle=dropdown aria-expanded=true> Bentornato, <strong><?php if ($_SESSION['utente']['idRuoloUtente']==1) {?>Amministratore <?php }?><?php if ($_SESSION['utente']['idRuoloUtente']==2) {?>Dott.<?php }?><?php if ($_SESSION['utente']['idRuoloUtente']==4) {?>Spec.<?php }?> <?php if (isset($_SESSION['utente']['nomeMedico'])&&isset($_SESSION['utente']['cognomeMedico'])) {?><?php echo $_SESSION['utente']['nomeMedico'];?>
 <?php echo $_SESSION['utente']['cognomeMedico'];?>
<?php } else { ?><?php echo $_SESSION['utente']['username'];?>
<?php }?></strong> <i class="fa fa-fw fa-chevron-circle-down" style="font-size:12px;"></i></a>
                                    <ul class=dropdown-menu>
                                        <li><a href="profile.php"><i class="md md-face-unlock"></i> Profilo</a></li>
                                        <li><a href="logout.php"><i class="md md-settings-power"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        
                    </div>
                </div>
            </div>
            </div><?php }} ?>
