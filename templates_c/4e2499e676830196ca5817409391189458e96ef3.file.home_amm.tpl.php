<?php /* Smarty version Smarty-3.1.19, created on 2015-09-17 10:23:22
         compiled from "./templates/home_amm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33106141155f05833e7ad00-20269036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e2499e676830196ca5817409391189458e96ef3' => 
    array (
      0 => './templates/home_amm.tpl',
      1 => 1442478179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33106141155f05833e7ad00-20269036',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55f05833efda45_21038380',
  'variables' => 
  array (
    'accessError' => 0,
    'error' => 0,
    'success' => 0,
    'numAtessa' => 0,
    'numOrdini' => 0,
    'numMedici' => 0,
    'numPazienti' => 0,
    'numAziende' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f05833efda45_21038380')) {function content_55f05833efda45_21038380($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class=content-page>
<div class=content>
<div class=container>
<div class=row>
<div class=col-sm-12>
<h4 class="pull-left page-title">Cruscotto</h4>
<ol class="breadcrumb pull-right">
<li><a href=#>Backoffice</a></li>
<li class=active>Cruscotto</li>
</ol>
</div>
</div>
<div class=row>
    <?php if (!empty($_smarty_tpl->tpl_vars['accessError']->value)) {?>
                            <div class="alert alert-warning alert-bold-border fade in alert-dismissable margin-top"><i class="fa fa-fw fa-exclamation-triangle fa-3x text-warning" style="float:left; padding-right:20px"></i>
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Attenzione!<br>
                                        <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['accessError']->value;?>
</span></strong>
                            </div>
				<?php }?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                            <div class="alert alert-danger alert-bold-border fade in alert-dismissable margin-top"><i class="fa fa-fw fa-exclamation-triangle fa-3x text-warning" style="float:left; padding-right:20px"></i>
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Atenzione!<br>
                                        <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></strong>
                            </div>
				<?php }?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['success']->value)) {?>
                            <div class="alert alert-success alert-bold-border fade in alert-dismissable margin-top"><i class="fa fa-fw fa-check fa-3x text-success" style="float:left; padding-right:20px"></i>
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Esito<br>
                                        <span class="text-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</span></strong>
                            </div>
				<?php }?>
<div class="col-md-6 col-sm-6 col-lg-3">
<div class="mini-stat clearfix bx-shadow">
<span class="mini-stat-icon bg-info"><i class=ion-person-add></i></span>
<div class="mini-stat-info text-right text-muted">
<span class=counter><?php echo $_smarty_tpl->tpl_vars['numAtessa']->value['total'];?>
</span>
Registro in attesa
</div>
<div class=tiles-progress>
<div class=m-t-20>
<h5 class=text-uppercase>Registrazione </h5>
<div class="progress progress-sm m-0">
<div class="progress-bar progress-bar-info" role=progressbar aria-valuenow=100 aria-valuemin=0 aria-valuemax=100 style=width:100%<?php ?>>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-lg-3">
<div class="mini-stat clearfix bx-shadow">
<span class="mini-stat-icon bg-purple"><i class=ion-ios7-cart></i></span>
<div class="mini-stat-info text-right text-muted">
<span class=counter><?php echo $_smarty_tpl->tpl_vars['numOrdini']->value['total'];?>
</span>
Ordini in attesa
</div>
<div class=tiles-progress>
<div class=m-t-20>
<h5 class=text-uppercase>eCommerce </h5>
<div class="progress progress-sm m-0">
<div class="progress-bar progress-bar-purple" role=progressbar aria-valuenow=100 aria-valuemin=0 aria-valuemax=100 style=width:100%<?php ?>>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-lg-3">
<div class="mini-stat clearfix bx-shadow">
<span class="mini-stat-icon bg-success"><i class=ion-person-stalker></i></span>
<div class="mini-stat-info text-right text-muted">
<span class=counter><?php echo $_smarty_tpl->tpl_vars['numMedici']->value['total'];?>
</span>
Medici registrati
</div>
<div class=tiles-progress>
<div class=m-t-20>
<h5 class=text-uppercase>Medici </h5>
<div class="progress progress-sm m-0">
<div class="progress-bar progress-bar-success" role=progressbar aria-valuenow=60 aria-valuemin=0 aria-valuemax=100 style=width:100%<?php ?>>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-lg-3">
<div class="mini-stat clearfix bx-shadow">
<span class="mini-stat-icon bg-primary"><i class=ion-android-contacts></i></span>
<div class="mini-stat-info text-right text-muted">
<span class=counter><?php echo $_smarty_tpl->tpl_vars['numPazienti']->value['total'];?>
</span>
Pazienti registrati
</div>
<div class=tiles-progress>
<div class=m-t-20>
<h5 class=text-uppercase>Pazienti </h5>
<div class="progress progress-sm m-0">
<div class="progress-bar progress-bar-primary" role=progressbar aria-valuenow=57 aria-valuemin=0 aria-valuemax=100 style=width:100%<?php ?>>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class=row>
<div class=col-lg-8>
<div class=portlet>
<div class=portlet-heading>
<h3 class="portlet-title text-dark text-uppercase">
Website Stats
</h3>
<div class=portlet-widgets>
<a href=javascript: data-toggle=reload><i class=ion-refresh></i></a>
<span class=divider></span>
<a data-toggle=collapse data-parent=#accordion1 href=#portlet1><i class=ion-minus-round></i></a>
<span class=divider></span>
<a href=# data-toggle=remove><i class=ion-close-round></i></a>
</div>
<div class=clearfix></div>
</div>
<div id=portlet1 class="panel-collapse collapse in">
<div class=portlet-body>
<div class=row>
<div class=col-md-12>
<div class="row text-center">
<div class=col-sm-4>
<h1><i class="md md-filter-drama"></i></h1>
<h2 class=counter>0</h2>
<small class=text-muted> Ordini realizzati</small>
</div>
<div class=col-sm-4>
<h1><i class="md md-healing"></i></h1>
<h2 class=counter>0</h2>
<small class=text-muted>Mascherine prodotte</small>
</div>
<div class=col-sm-4>
<h1><i class="md md-portrait"></i></h1>
<h2 class=counter><?php echo $_smarty_tpl->tpl_vars['numAziende']->value['total'];?>
</h2>
<small class=text-muted>Aziende Registrate</small>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class=col-lg-4>
<div class=portlet>
<div class=portlet-heading>
<h3 class="portlet-title text-dark text-uppercase">
Utenti Registrati
</h3>
<div class=portlet-widgets>
<a href=javascript: data-toggle=reload><i class=ion-refresh></i></a>
<span class=divider></span>
<a data-toggle=collapse data-parent=#accordion1 href=#portlet2><i class=ion-minus-round></i></a>
<span class=divider></span>
<a href=# data-toggle=remove><i class=ion-close-round></i></a>
</div>
<div class=clearfix></div>
</div>
<div id=portlet2 class="panel-collapse collapse in">
<div class=portlet-body>
<div class=row>
<div class=col-md-12>
<div class="row text-center">
<div class=col-sm-6>
<h1><i class="md md-group"></i></h1>
<h2 class=counter><?php echo $_smarty_tpl->tpl_vars['numMedici']->value['total'];?>
</h2>
<small class=text-muted> Medici</small>
</div>
<div class=col-sm-6>
<h1><i class="md md-timer-auto"></i></h1>
<h2 class=counter><?php echo $_smarty_tpl->tpl_vars['numPazienti']->value['total'];?>
</h2>
<small class=text-muted>Pazienti</small>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
