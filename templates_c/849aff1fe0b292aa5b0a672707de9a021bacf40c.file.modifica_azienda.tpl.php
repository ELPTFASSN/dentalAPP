<?php /* Smarty version Smarty-3.1.19, created on 2015-10-09 17:13:49
         compiled from "./templates/modifica_azienda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13994183155f14eab5cc8c9-06484223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '849aff1fe0b292aa5b0a672707de9a021bacf40c' => 
    array (
      0 => './templates/modifica_azienda.tpl',
      1 => 1444403622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13994183155f14eab5cc8c9-06484223',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55f14eab694e08_76926026',
  'variables' => 
  array (
    'error' => 0,
    'oAzienda' => 0,
    'arrMedici' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f14eab694e08_76926026')) {function content_55f14eab694e08_76926026($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/vhosts/intervolutions.com/pruebas.intervolutions.com/alfaone/libs/plugins/function.cycle.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Modifica Azienda</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_amministratore.php">BackOffice</a></li>
                        <li><a href="aziende.php">Aziende</a></li>
                        <li class="active">Modifica azienda</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                        <div class="alert alert-danger alert-bold-border fade in animated flash">
                            <i class="fa fa-fw fa-5x fa-exclamation-circle text-danger" style="float:right;"></i>
                            <strong>Si sono verificati i seguenti errori:<br>
                                <span class="text-danger"><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php }?></span></strong>
                        </div>
                    </div>
                </div>
            <?php }?>       
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Anagrafica</h3></div>
                        <div class="panel-body">

                            <form action="<?php echo @constant('URL_FILE');?>
aziende.php" method="post" name="aggiorna_profilo_medico">
                                <input type="hidden" name="idAzienda" value="<?php if (isset($_smarty_tpl->tpl_vars['oAzienda']->value['idUtente'])) {?><?php echo $_smarty_tpl->tpl_vars['oAzienda']->value['idUtente'];?>
<?php }?>">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Denominazione</label>
                                        <input type="text" class="form-control input-lg" name="nome" placeholder="Nome" value="<?php if (isset($_smarty_tpl->tpl_vars['oAzienda']->value['denominazione'])) {?><?php echo $_smarty_tpl->tpl_vars['oAzienda']->value['denominazione'];?>
<?php }?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Partita IVA</label>
                                        <input type="text" class="form-control input-lg" name="partitaIVA" placeholder="Partita IVA" value="<?php if (isset($_smarty_tpl->tpl_vars['oAzienda']->value['partitaIVA'])) {?><?php echo $_smarty_tpl->tpl_vars['oAzienda']->value['partitaIVA'];?>
<?php }?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Telefono</label>
                                        <input type="text" class="form-control input-lg" name="telefono" placeholder="Telefono" value="<?php if (isset($_smarty_tpl->tpl_vars['oAzienda']->value['telefono'])) {?><?php echo $_smarty_tpl->tpl_vars['oAzienda']->value['telefono'];?>
<?php }?>">
                                    </div>
                                </div>
                                    <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Nome Rappresentante</label>
                                        <input type="text" class="form-control input-lg" name="nomeRap" placeholder="Nome" value="<?php if (isset($_smarty_tpl->tpl_vars['oAzienda']->value['nomeRap'])) {?><?php echo $_smarty_tpl->tpl_vars['oAzienda']->value['nomeRap'];?>
<?php }?>">
                                    </div>
                                </div>
                                    <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Cognome Rappresentante</label>
                                        <input type="text" class="form-control input-lg" name="cognomeRap" placeholder="Cognome" value="<?php if (isset($_smarty_tpl->tpl_vars['oAzienda']->value['cognomeRap'])) {?><?php echo $_smarty_tpl->tpl_vars['oAzienda']->value['cognomeRap'];?>
<?php }?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Cellulare Rappresentante</label>
                                        <input type="text" class="form-control input-lg" name="telefonoMobile" placeholder="Telefono" value="<?php if (isset($_smarty_tpl->tpl_vars['oAzienda']->value['telefonoMobile'])) {?><?php echo $_smarty_tpl->tpl_vars['oAzienda']->value['telefonoMobile'];?>
<?php }?>">
                                    </div>
                                </div>    
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control input-lg" name="email" placeholder="Email" value="<?php if (isset($_smarty_tpl->tpl_vars['oAzienda']->value['email'])) {?><?php echo $_smarty_tpl->tpl_vars['oAzienda']->value['email'];?>
<?php }?>">
                                    </div>
                                </div>
                                    <div class="clearfix"></div>

                                <hr>
                                <div class="col-md-12 text-right"><a href="aziende.php" class="btn btn-danger btn-lg">Cancella <i class="fa fa-times"></i></a> <button type="submit" class="btn btn-primary btn-lg">Invia <i class="fa fa-check"></i></button></div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Medici Iscritti</h3></div>
                        <div class="panel-body">

                            <table class="table table-striped table-hover" id="datatable">
                                <thead class="the-box dark full">
                                    <tr>
                                        <th>Nome completo</th>
                                        <th>Numero Albo</th>
                                        <th>Citt&agrave;</th>
                                        <th>Stato</th>
                                        <th>Azioni</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrMedici']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                                        <tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                                            <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_variable($_smarty_tpl->tpl_vars['value']->value['idMedico'], null, 0);?>
                                            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['cognome'];?>
 <span class="badge badge-info small"> <i class="fa fa-fw fa-medkit"></i> Direttore Sanitario</span></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['numeroAlbo'];?>
 </td>
                                            <td>
                                                <?php echo $_smarty_tpl->tpl_vars['value']->value['citta'];?>

                                            </td>
                                            <td class="center"> <?php if ($_smarty_tpl->tpl_vars['value']->value['stato']==0) {?><span class="label label-danger"><i class="fa fa-fw fa-times-circle"></i> NON ATTIVO</span><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['value']->value['active']==1) {?><span class="btn btn-xs btn-danger"><i class="fa fa-fw fa-times-circle"></i> NON ATTIVO</span><?php } else { ?><span class="btn btn-xs btn-success"><i class="fa fa-fw fa-check-circle"></i> ATTIVO</span><?php }?><?php }?></td>
                                            <td><a href="medici.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['idDettaglioMedico'];?>
" class="btn btn-primary btn-perspective btn-xs waves-effect waves-light">Vedere dettaglio <i class="fa fa-pencil"></i></a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
            <?php echo $_smarty_tpl->getSubTemplate ("footer_modifica.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
