<?php /* Smarty version Smarty-3.1.19, created on 2016-02-01 18:02:03
         compiled from "./templates/home_medico.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1462751155652cfc30e5ef3-38493262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '355fd344db005ae0e141ac0490db6f650b89dd98' => 
    array (
      0 => './templates/home_medico.tpl',
      1 => 1454341854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1462751155652cfc30e5ef3-38493262',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5652cfc316cbc5_27003532',
  'variables' => 
  array (
    'accessError' => 0,
    'error' => 0,
    'success' => 0,
    'numPazienti' => 0,
    'ordini' => 0,
    'appuntamenti' => 0,
    'scadenzaAbbonamento' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652cfc316cbc5_27003532')) {function content_5652cfc316cbc5_27003532($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/beecloud.it/easysmile.beecloud.it/panel/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class=content-page>
    <div class=content>
        <div class=container>
            <div class=row>
                <div class=col-sm-12>
                    <h4 class="pull-left page-title">Cruscotto Medico</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href=#>Backoffice</a></li>
                        <li class=active>Cruscotto</li>
                    </ol>
                </div>
            </div>
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
          
                              <?php if (!$_SESSION['utente']['abonado']==true) {?>
                                   
                                    <div class="row">
                                        <div class="col-md-12">
                                            
                                            
                                            <div class="panel panel-primary">
                                    <div class="panel-heading"> 
                                        <h1 class="panel-title text-center"><a href="abbonamenti.php" style="font-size:26px">NON SEI ANCORA ABBONATO? </a></h1> 
                                    </div> 
                                    <div class="panel-body"> 
                                        <div class="col-md-4">
                                            <img src="http://easysmile.beecloud.it/img/pictures/banner_home_paziente.png" class="img-responsive">
                                        </div>
                                        <div class="col-md-8">
                                        <h3>     Abbonati e potrai usufruire dei vantaggi del gruppo Easy Smile. <br><br>Che cosa aspetti?                                       </h3> 
                                        <br><br>
                                        <div class="text-center col-md-4"><a href="abbonamenti.php" class="btn btn-perspective btn-success btn-lg waves-effect waves-light"> ABBONATI SUBITO</a></div>
                                        <div class="text-center col-md-6 margin-top"><a href="http://easysmile.beecloud.it/#Offerte" target="_blank" class="btn btn-perspective btn-default btn-lg waves-effect waves-light"> VANTAGGI A TE RISERVATI</a></div>
                                        </div>
                                    </div> 
                                </div>
                                            
                                        </div>
                                        
                                    </div>
                                   <?php } else { ?> 
                                   
            <div class=row>
                
               
                <div class="col-md-6 col-sm-6 col-lg-3">
                    <div class="mini-stat clearfix bx-shadow">
                      <a href="pazienti.php">  <span class="mini-stat-icon bg-info nada"><i class=ion-person-add></i></span></a>
                        <div class="mini-stat-info text-right text-muted">
                             <span class="counter"><?php if (isset($_smarty_tpl->tpl_vars['numPazienti']->value)&&!empty($_smarty_tpl->tpl_vars['numPazienti']->value)) {?><?php echo $_smarty_tpl->tpl_vars['numPazienti']->value;?>
<?php } else { ?>0<?php }?></span>
                            Pazienti iscritti
                        </div>
                        <div class=tiles-progress>
                            <div class=m-t-20>
                                <h5 class=text-uppercase>PAzienti </h5>
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
                        <a href="ordini.php"><span class="mini-stat-icon bg-purple nada <?php if (isset($_smarty_tpl->tpl_vars['ordini']->value)&&!empty($_smarty_tpl->tpl_vars['ordini']->value)) {?> animated flash<?php }?>"><i class=ion-ios7-cart></i></span></a>
                        <div class="mini-stat-info text-right text-muted">
                            <span class=counter><?php if (isset($_smarty_tpl->tpl_vars['ordini']->value)&&!empty($_smarty_tpl->tpl_vars['ordini']->value)) {?><?php echo $_smarty_tpl->tpl_vars['ordini']->value;?>
<?php } else { ?>0<?php }?></span>
                            Ordini in corso
                        </div>
                        <div class=tiles-progress>
                            <div class=m-t-20>
                                <h5 class=text-uppercase>Prescrizioni </h5>
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
                        <span class="mini-stat-icon bg-success nada <?php if (isset($_smarty_tpl->tpl_vars['appuntamenti']->value)&&!empty($_smarty_tpl->tpl_vars['appuntamenti']->value)) {?> animated flash<?php }?>"><i class=ion-person-stalker></i></span>
                        <div class="mini-stat-info text-right text-muted">
                            <span class=counter><?php if (isset($_smarty_tpl->tpl_vars['appuntamenti']->value)&&!empty($_smarty_tpl->tpl_vars['appuntamenti']->value)) {?><?php echo $_smarty_tpl->tpl_vars['appuntamenti']->value;?>
<?php } else { ?>0<?php }?></span>
                            Visite prenotate
                        </div>
                        <div class=tiles-progress>
                            <div class=m-t-20>
                                <h5 class=text-uppercase>Appuntamenti </h5>
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
                            <span><small><?php if (isset($_smarty_tpl->tpl_vars['scadenzaAbbonamento']->value)&&!empty($_smarty_tpl->tpl_vars['scadenzaAbbonamento']->value)&&smarty_modifier_date_format($_smarty_tpl->tpl_vars['scadenzaAbbonamento']->value,"%Y-%m-%d")>smarty_modifier_date_format(time(),"%Y-%m-%d")) {?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['scadenzaAbbonamento']->value,"%d/%m/%Y");?>
<?php } else { ?> <a href="abbonamenti.php" class="btn btn-perspective btn-primary">Abbonati subito!</a><?php }?></small></span>
                            <?php if (isset($_smarty_tpl->tpl_vars['scadenzaAbbonamento']->value)&&!empty($_smarty_tpl->tpl_vars['scadenzaAbbonamento']->value)&&smarty_modifier_date_format($_smarty_tpl->tpl_vars['scadenzaAbbonamento']->value,"%Y-%m-%d")>smarty_modifier_date_format(time(),"%Y-%m-%d")) {?>Scadenza abbonamento<?php } else { ?>&nbsp;<?php }?>
                        </div>
                        <div class=tiles-progress>
                            <div class=m-t-20>
                                <h5 class=text-uppercase><?php if (isset($_smarty_tpl->tpl_vars['scadenzaAbbonamento']->value)&&!empty($_smarty_tpl->tpl_vars['scadenzaAbbonamento']->value)) {?>ABBONAMENTO ATTIVO<?php } else { ?> ANCORA NON SEI ABBONATO<?php }?></h5>
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
                <div class=col-lg-12>
                    <div class="panel panel-default">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">La mia agenda di prenotazioni</h3> 
                        </div> 
                        <div class="panel-body"> 
                            <div class="col-md-8"><a href="agenda.php?task=add" class="btn btn-primary btn-perspective">Aggiungi nuovo appuntamento <i class="fa fa-fw fa-plus"></i></a> <a href="#oggi" id="external-button" class="btn btn-primary btn-perspective">Vedi appuntamenti di oggi <i class="fa fa-fw fa-search-plus"></i></a></div> <div class="col-md-4 text-right"><a href="agenda.php?task=disponibilita" class="btn btn-perspective btn-pink">Gestici la tua disponibilit&agrave; <i class="fa fa-fw fa-clock-o"></i></a></div>
                            <div class="clearfix"></div>
                            <hr>
                            <p>
                                <small><a name="oggi"></a> Leggenda: <span class="badge badge-primary"> &nbsp;Appuntamento NON confermato &nbsp;</span> <span class="badge badge-success">&nbsp;Appuntamento Confermato&nbsp;</span> <span class="badge badge-danger">&nbsp;Appuntamento Cancellato&nbsp;</span> </small>
                            </p>   <hr>

                            <div id="calendar"></div>
                            <div class="clearfix"></div>
                            <hr style="margin-top:0px;">

                        </div>

                    </div>
                </div>
            </div>
                                <?php }?>
        </div>
    </div>
</div>



<?php echo $_smarty_tpl->getSubTemplate ("footer_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
