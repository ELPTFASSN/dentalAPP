<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title>eReferral - Agenzia Trapianti Lazio</title>


        <link type="text/css" rel="stylesheet" href="{$smarty.const.URL_STYLE}bootstrap.min.css{$smarty.const.STYLE_VERSION}" />

        <!-- BOOTSTRAP CSS -->
        <link href="{$smarty.const.URL_STYLE}bootstrap.min.css" rel="stylesheet">

            <!-- CSS PER I PLUGINS - DATATABLES -->
            <link href="{$smarty.const.URL_JS}prettify/prettify.min.css" rel="stylesheet">
                <link href="{$smarty.const.URL_JS}datatable/css/bootstrap.datatable.min.css" rel="stylesheet">

                    <!-- CSS CON GLI STYLES E I FONTS -->
                    <link href="{$smarty.const.URL_JS}font-awesome/css/font-awesome.min.css" rel="stylesheet">
                        <link href="{$smarty.const.URL_STYLE}magnific-popup.css" rel="stylesheet">
                            <link href="{$smarty.const.URL_STYLE}style-amm.css" rel="stylesheet">
                                <link href="{$smarty.const.URL_STYLE}style-amm-responsive.css" rel="stylesheet">


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
                                                        <a href="#"><img src="{$smarty.const.URL_IMG}logo_alt.png" alt="logo"></a>
                                                    </div>

                                                    <div class="top-nav-content">

                                                        <div class="btn-collapse-sidebar-left">
                                                            <i class="fa fa-long-arrow-right icon-dinamic"></i>
                                                        </div>

                                                        <div class="btn-collapse-nav" data-toggle="collapse" data-target="#main-fixed-nav">
                                                            <i class="fa fa-plus icon-plus"></i>
                                                        </div>

                                                        <ul class="nav-user navbar-right">
                                                            <li class=dropdown>
                                                                <a href class="dropdown-toggle profile" data-toggle=dropdown aria-expanded=true> Bentornato, <strong>{if $smarty.session.utente['idRuoloUtente'] == 1}Amministratore {/if}{if $smarty.session.utente['idRuoloUtente'] == 2}Dott.{/if}{if $smarty.session.utente['idRuoloUtente'] == 4}Spec.{/if} {if isset($smarty.session.utente['nomeMedico']) && isset($smarty.session.utente['cognomeMedico'])}{$smarty.session.utente['nomeMedico']} {$smarty.session.utente['cognomeMedico']}{else}{$smarty.session.utente['username']}{/if}</strong> <i class="fa fa-fw fa-chevron-circle-down" style="font-size:12px;"></i></a>
                                                                <ul class=dropdown-menu>
                                                                    <li><a href=profilo.php><i class="md md-face-unlock"></i> Profilo</a></li>
                                                                    <li><a href="logout.php"><i class="md md-settings-power"></i> Logout</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END TOP NAV -->