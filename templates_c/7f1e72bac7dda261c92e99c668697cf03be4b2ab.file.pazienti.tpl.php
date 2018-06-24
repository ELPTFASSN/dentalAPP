<?php /* Smarty version Smarty-3.1.19, created on 2015-11-23 09:34:57
         compiled from "./templates/pazienti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16354427865652cfb106a009-87813266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f1e72bac7dda261c92e99c668697cf03be4b2ab' => 
    array (
      0 => './templates/pazienti.tpl',
      1 => 1447756857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16354427865652cfb106a009-87813266',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'medici' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5652cfb10e8f15_60621398',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652cfb10e8f15_60621398')) {function content_5652cfb10e8f15_60621398($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/vhosts/beecloud.it/easysmile.beecloud.it/panel/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/beecloud.it/easysmile.beecloud.it/panel/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class=content-page>
    <div class=content>
        <div class=container>
            <div class=row>
                <div class=col-sm-12>
                    <h4 class="pull-left page-title">Lista dei <?php if ($_SESSION['utente']['idRuoloUtente']==@constant('AMMINISTRATORE')) {?><?php } else { ?> miei <?php }?>pazienti iscritti alla piattaforma</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_amministratore.php">BackOffice</a></li>
                        <li class=active>Pazienti</li>
                    </ol>
                </div>
            </div>
            <div class=row>
                <div class=col-md-12>
                    <div class="panel panel-default">
                        <div class=panel-heading>
                            <h3 class=panel-title><?php if ($_SESSION['utente']['idRuoloUtente']==@constant('AMMINISTRATORE')) {?> Tabella Pazienti<?php } else { ?>I miei pazienti<?php }?></h3> 
                        </div>
                        <div class=panel-body>
                            <div class=row>
                                <div class=col-sm-12>
                                    <div class=m-b-30>
                                        <?php if ($_SESSION['utente']['idRuoloUtente']==@constant('AMMINISTRATORE')) {?> 
                                            <a href="generatePDF.php?task=paziente" class="btn btn-success waves-effect waves-light">Genera codice di iscrizione <i class="fa fa-plus"></i></a> 

                                            <a href="pazienti.php?status=attesa" class="btn btn-danger waves-effect waves-light<?php if (isset($_smarty_tpl->tpl_vars['status']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['status']->value=='attesa') {?>disabled<?php }?><?php }?>">Vedi solo in attesa <i class="fa fa-clock-o"></i></a>
                                        <?php } else { ?><a href="pazienti.php?task=add" class="btn btn-primary waves-effect waves-light">Aggiungi un nuovo paziente <i class="fa fa-plus"></i></a> <?php }?>
                                    </div>
                                </div>
                            </div>
                            <div class=row>
                                <div class="col-md-12 col-sm-12 col-xs-12">

                                    <table class="table table-striped table-hover" id="datatable">
                                        <thead class="the-box dark full">
                                            <tr>
                                                <th>Nome completo</th>
                                                <th>Data nascita</th>
                                                <th>Sesso</th>
                                                <th>Indirizzo</th>
                                                <?php if ($_SESSION['utente']['idRuoloUtente']==@constant('AMMINISTRATORE')) {?>	<th>Stato</th>
                                                    <th>Azioni</th><?php } else { ?>
                                                    
                                                
                                                <?php }?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['medici']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                                                    <tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                                                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['cognome'];?>
</td>
                                                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['dataNascita'],"%d/%m/%Y");?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['sesso'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['indirizzo'];?>
</td>                                                             
                                                        <?php if ($_SESSION['utente']['idRuoloUtente']==@constant('AMMINISTRATORE')) {?>
                                                            <td class="center"> <?php if ($_smarty_tpl->tpl_vars['value']->value['stato']==1) {?><span class="btn btn-xs btn-danger"><i class="fa fa-fw fa-times-circle"></i> NON ATTIVO</span><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['value']->value['active']==0) {?><span class="btn btn-xs btn-danger"><i class="fa fa-fw fa-times-circle"></i> NON ATTIVO</span><?php } else { ?><span class="btn btn-xs btn-success"><i class="fa fa-fw fa-check-circle"></i> ATTIVO</span><?php }?><?php }?></td>
                                                            <td>
                                                                <?php if ($_SESSION['utente']['idRuoloUtente']==@constant('AMMINISTRATORE')) {?>  <a id='<?php echo $_smarty_tpl->tpl_vars['value']->value['idUtente'];?>
' class="btn btn-danger btn-perspective btn-xs sa-paramas">Cancella <i class="fa fa-trash-o"></i> </a> 
                                                                    <?php if ($_smarty_tpl->tpl_vars['value']->value['active']==0) {?><a href="pazienti.php?attiva=<?php echo $_smarty_tpl->tpl_vars['value']->value['idUtente'];?>
" class="btn btn-primary btn-perspective btn-xs">Attiva <i class="fa fa-unlock"></i></a><?php } else { ?><a href="pazienti.php?disattiva=<?php echo $_smarty_tpl->tpl_vars['value']->value['idUtente'];?>
" class="btn btn-danger btn-perspective btn-xs">Disattiva <i class="fa fa-lock"></i></a> <?php }?> <a href="pazienti.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['idDettaglioPaziente'];?>
" class="btn btn-primary btn-perspective btn-xs">Modifica <i class="fa fa-pencil"></i></a><?php } else { ?><a href="pazienti.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['idDettaglioPaziente'];?>
" class="btn btn-primary btn-perspective btn-xs">Vedi Trattamenti <i class="fa fa-search"></i></a><?php }?></td> <?php } else { ?>


                                                                        <?php }?>
                                                                </tr>
                                                                <?php } ?>
                                                                </tbody>
                                                            </table>

                                                            <?php echo $_smarty_tpl->getSubTemplate ("footer_aziende.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
