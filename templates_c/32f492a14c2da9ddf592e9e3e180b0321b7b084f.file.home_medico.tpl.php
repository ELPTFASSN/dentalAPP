<?php /* Smarty version Smarty-3.1.19, created on 2015-10-17 10:47:58
         compiled from "./templates/home_medico.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1741847959560d3da8c9c367-10231449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32f492a14c2da9ddf592e9e3e180b0321b7b084f' => 
    array (
      0 => './templates/home_medico.tpl',
      1 => 1445071675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1741847959560d3da8c9c367-10231449',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_560d3da8cfc868_18798608',
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
<?php if ($_valid && !is_callable('content_560d3da8cfc868_18798608')) {function content_560d3da8cfc868_18798608($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/intervolutions.com/pruebas.intervolutions.com/alfaone/libs/plugins/modifier.date_format.php';
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
                            <span class=counter><?php if (isset($_smarty_tpl->tpl_vars['numPazienti']->value)&&!empty($_smarty_tpl->tpl_vars['numPazienti']->value)) {?><?php echo $_smarty_tpl->tpl_vars['numPazienti']->value;?>
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
                        <span class="mini-stat-icon bg-purple"><i class=ion-ios7-cart></i></span>
                        <div class="mini-stat-info text-right text-muted">
                            <span class=counter><?php if (isset($_smarty_tpl->tpl_vars['ordini']->value)&&!empty($_smarty_tpl->tpl_vars['ordini']->value)) {?><?php echo $_smarty_tpl->tpl_vars['ordini']->value;?>
<?php } else { ?>Nessun ordine<?php }?></span>
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
                        <span class="mini-stat-icon bg-success"><i class=ion-person-stalker></i></span>
                        <div class="mini-stat-info text-right text-muted">
                            <span class=counter><?php if (isset($_smarty_tpl->tpl_vars['appuntamenti']->value)&&!empty($_smarty_tpl->tpl_vars['appuntamenti']->value)) {?><?php echo $_smarty_tpl->tpl_vars['appuntamenti']->value;?>
<?php } else { ?>Nessun appuntamento<?php }?></span>
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
                            <span><small><?php if (isset($_smarty_tpl->tpl_vars['scadenzaAbbonamento']->value)&&!empty($_smarty_tpl->tpl_vars['scadenzaAbbonamento']->value)) {?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['scadenzaAbbonamento']->value,"%d/%m/%Y");?>
<?php } else { ?> <a href="abbonamenti.php" class="btn btn-perspective btn-primary">Abbonati subito!</a><?php }?></small></span>
                            <?php if (isset($_smarty_tpl->tpl_vars['scadenzaAbbonamento']->value)&&!empty($_smarty_tpl->tpl_vars['scadenzaAbbonamento']->value)) {?>Scadenza abbonamento<?php } else { ?>&nbsp;<?php }?>
                        </div>
                        <div class=tiles-progress>
                            <div class=m-t-20>
                                <h5 class=text-uppercase><?php if (isset($_smarty_tpl->tpl_vars['scadenzaAbbonamento']->value)&&!empty($_smarty_tpl->tpl_vars['scadenzaAbbonamento']->value)) {?>ABBONAMENTO ATTIVO<?php } else { ?>NON SEI ABBONATO<?php }?></h5>
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
                            <div class="col-md-6"><a href="agenda.php?task=add" class="btn btn-primary btn-perspective">Aggiungi nuovo appuntamento <i class="fa fa-fw fa-plus"></i></a></div> <div class="col-md-6 text-right"><a href="agenda.php?task=disponibilita" class="btn btn-perspective btn-pink">Gestici la tua disponibilit&agrave; <i class="fa fa-fw fa-clock-o"></i></a></div>
                            <div class="clearfix"></div>
                            <hr>
                            <p>
                                <small> Leggenda: <span class="badge badge-primary"> &nbsp;Appuntamento NON confermato &nbsp;</span> <span class="badge badge-success">&nbsp;Appuntamento Confermato&nbsp;</span> <span class="badge badge-danger">&nbsp;Appuntamento Cancellato&nbsp;</span> </small>
                            </p>   <hr>

                            <div id="calendar"></div>
                            <div class="clearfix"></div>
                            <hr style="margin-top:0px;">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php echo $_smarty_tpl->getSubTemplate ("footer_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
