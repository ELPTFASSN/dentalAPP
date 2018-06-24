<?php /* Smarty version Smarty-3.1.19, created on 2016-02-23 19:34:52
         compiled from "./templates/agenda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12148713985652cfd1daf8b1-15057693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ddaefe107531e2dc8e5851220451cabbb21d3b4' => 
    array (
      0 => './templates/agenda.tpl',
      1 => 1456252487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12148713985652cfd1daf8b1-15057693',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5652cfd1de50f1_23907910',
  'variables' => 
  array (
    'accessError' => 0,
    'error' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652cfd1de50f1_23907910')) {function content_5652cfd1de50f1_23907910($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class=content-page>
    <div class=content>
        <div class=container>
            <div class=row>
                <div class=col-sm-12>
                    <h4 class="pull-left page-title">La mia Agenda di prenotazioni</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_medico.php">Backoffice</a></li>
                        <li class=active>Agenda</li>
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
            </div>
            <div class=row>
                <div class=col-lg-12>
                    <div class="panel panel-default">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">La mia agenda di prenotazioni</h3> 
                        </div> 
                        <div class="panel-body"> 
                            <?php if ($_SESSION['utente']['idRuoloUtente']==@constant('PAZIENTE')) {?>     <div class="col-md-9"><a href="agenda.php?task=addPaz" class="btn btn-primary btn-perspective">Richiede un appuntamento in <?php echo $_SESSION['utente']['denominazione'];?>
<i class="fa fa-fw fa-plus"></i></a> o sceglie un <a href="home_paziente.php?medico=true">altro studio medico</a></div> <?php }?>
                        <?php if ($_SESSION['utente']['idRuoloUtente']==@constant('MEDICO')) {?>     <div class="col-md-6"><a href="agenda.php?task=add" class="btn btn-primary btn-perspective">Aggiungi nuovo appuntamento <i class="fa fa-fw fa-plus"></i></a></div> <div class="col-md-6 text-right"><a href="agenda.php?task=disponibilita" class="btn btn-perspective btn-pink">Gestici la tua disponibilit&agrave; <i class="fa fa-fw fa-clock-o"></i></a></div><?php }?>
                            <div class="clearfix"></div>
                            <hr>
                            <p>
                                <small> Leggenda: <span class="badge badge-primary"> &nbsp;Appuntamento NON confermato &nbsp;</span> <span class="badge badge-success">&nbsp;Appuntamento Confermato&nbsp;</span> <span class="badge badge-danger">&nbsp;Appuntamento Cancellato&nbsp;</span> <span class="badge badge-default">&nbsp;Non disponibile&nbsp;</span> </small>
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
