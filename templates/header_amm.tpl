<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8>
        <meta name=viewport content="width=device-width, initial-scale=1.0">
        <meta name=description content="Dental Italia Group">
        <meta name=author content="iNTERVOLUTIONS Ltd">
        <link rel="shortcut icon" href=images/favicon_1.ico>
        <title>Dashboard - Dental Italia Group</title>
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
                   
                         <a href="http://showcase.intervolutions.com/dentisti/" class=logo><img src="http://showcase.intervolutions.com/dentisti/img/logo_easysmile.png" class="logo"></a>
                    
                </div>
                <div class="navbar navbar-default hidden-xs" role=navigation>
                    <div class=container>
                    
                            <ul class="nav navbar-nav navbar-right pull-right">
                                			<li><a class="scrollto" href="http://showcase.intervolutions.com/dentisti/#wath">Cos'e' Dental Italia</a></li>
                         <li><a href="http://showcase.intervolutions.com/dentisti/#portfolio" class="scrollto">Prestazioni</a></li>
			<li><a class="scrollto" href="http://showcase.intervolutions.com/dentisti/#team">Centri</a></li>
   			<li><a class="scrollto" href="http://showcase.intervolutions.com/dentisti/#news">News</a></li>
         
	
			<li><a class="scrollto" href="http://showcase.intervolutions.com/dentisti/#contact">Contatti</a></li>
                                <li class=dropdown>
                                    <a href class="dropdown-toggle profile" data-toggle=dropdown aria-expanded=true> Bentornato, <strong>{if $smarty.session.utente['idRuoloUtente'] == 1}Amministratore {/if}{if $smarty.session.utente['idRuoloUtente'] == 2}Dott.{/if}{if $smarty.session.utente['idRuoloUtente'] == 4}Spec.{/if} {if isset($smarty.session.utente['nomeMedico']) && isset($smarty.session.utente['cognomeMedico'])}{$smarty.session.utente['nomeMedico']} {$smarty.session.utente['cognomeMedico']}{else}{$smarty.session.utente['username']}{/if}</strong> <i class="fa fa-fw fa-chevron-circle-down" style="font-size:12px;"></i></a>
                                    <ul class=dropdown-menu>
                                        <li><a href="profile.php"><i class="md md-face-unlock"></i> Profilo</a></li>
                                        <li><a href="logout.php"><i class="md md-settings-power"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        
                    </div>
                </div>
            </div>
            </div>