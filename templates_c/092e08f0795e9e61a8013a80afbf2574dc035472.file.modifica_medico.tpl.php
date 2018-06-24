<?php /* Smarty version Smarty-3.1.19, created on 2015-10-09 16:12:35
         compiled from "./templates/modifica_medico.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90068908655f308967f7577-25239593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '092e08f0795e9e61a8013a80afbf2574dc035472' => 
    array (
      0 => './templates/modifica_medico.tpl',
      1 => 1444399939,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90068908655f308967f7577-25239593',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55f308968c0590_26623920',
  'variables' => 
  array (
    'error' => 0,
    'oMedico' => 0,
    'regioni' => 0,
    'key' => 0,
    'arrPazienti' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f308968c0590_26623920')) {function content_55f308968c0590_26623920($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/vhosts/intervolutions.com/pruebas.intervolutions.com/alfaone/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/intervolutions.com/pruebas.intervolutions.com/alfaone/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Modifica Medico</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_amministratore.php">BackOffice</a></li>
                        <li><a href="aziende.php">Medici</a></li>
                        <li class="active">Modifica medico</li>
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
                <form action="<?php echo @constant('URL_FILE');?>
medici.php" method="post" name="aggiorna_profilo_medico">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Anagrafica</h3></div>
                            <div class="panel-body">


                                <input type="hidden" name="idUtente" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->idUtente)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->idUtente;?>
<?php }?>">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nome</label>
                                        <input type="text" class="form-control input-lg" name="nome" placeholder="Nome" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->nome)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->nome;?>
<?php }?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Cognome</label>
                                        <input type="text" class="form-control input-lg" name="cognome" placeholder="Cognome" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->cognome)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->cognome;?>
<?php }?>">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Telefono</label>
                                        <input type="text" class="form-control input-lg" name="telefono" placeholder="Telefono" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->telefono)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->telefono;?>
<?php }?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Telefono Mobile</label>
                                        <input type="text" class="form-control input-lg" name="telefonoMobile" placeholder="Telefono Mobile" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->telefonoMobile)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->telefonoMobile;?>
<?php }?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control input-lg" name="email" placeholder="Email" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->email)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->email;?>
<?php }?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Partita IVA</label>
                                        <input type="text" class="form-control input-lg" name="partitaIVA" placeholder="Partita IVA" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->partitaIVA)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->partitaIVA;?>
<?php }?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Numero Albo</label>
                                        <input type="text" class="form-control input-lg" name="numeroAlbo" placeholder="Numero Albo" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->numeroAlbo)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->numeroAlbo;?>
<?php }?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Regione Albo</label>
                                        <select name="regioneAlbo" id="regioneAlbo" class="select2" data-placeholder="Seleziona regione...">
                                            <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['regioni']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['key']->key;
?>
                                                <option <?php if ($_smarty_tpl->tpl_vars['key']->value['idregione']==$_smarty_tpl->tpl_vars['oMedico']->value->fkRegioneAlbo) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['key']->value['idregione'];?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value['nomeregione'];?>
</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label id="response">Provincia Albo</label>
                                        <select name="provinciaAlbo" id="provinciaAlbo" class="select2" data-placeholder="Seleziona provincia...">

                                            <?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->fkProvinciaAlbo)) {?><option selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['oMedico']->value->fkProvinciaAlbo;?>
"><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->nomeProvinciaAlbo;?>
</option><?php }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label id="response">Citt&agrave; Albo</label>
                                        <select name="cittaAlbo" id="cittaAlbo" class="select2" data-placeholder="Seleziona citt&agrave;...">
                                            <?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->fkComuneAlbo)) {?><option selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['oMedico']->value->fkComuneAlbo;?>
"><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->nomeComuneAlbo;?>
</option><?php }?>
                                        </select>
                                    </div>
                                </div>

                                <hr>
                                <div class="col-md-12 text-right"><a href="medici.php" class="btn btn-danger btn-lg">Cancella <i class="fa fa-times"></i></a> <button type="submit" class="btn btn-primary btn-lg">Invia <i class="fa fa-check"></i></button></div>

                            </div>

                        </div>
                    </div>

                </form>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Pazienti Iscritti</h3></div>
                        <div class="panel-body">

                            <table class="table table-striped table-hover" id="datatable">
                                <thead class="the-box dark full">
                                    <tr>
                                        <th>Nome completo</th>
                                        <th>Codice fiscale</th>
                                        <th>Data nascita</th>
                                        <th>Citt&agrave;</th>
                                        <th>Prescrizioni</th>
                                        <th>Azioni</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrPazienti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                                        <tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                                            <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_variable($_smarty_tpl->tpl_vars['value']->value['idPaziente'], null, 0);?>
                                            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['cognome'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['codiceFiscale'];?>
</td>
                                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['dataNascita'],"%e %B %Y");?>
</td>
                                            <td>
                                                <?php echo $_smarty_tpl->tpl_vars['value']->value['citta'];?>

                                            </td>
                                            <td>
                                                1
                                            </td>

                                            <td><a href="medici.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['idAzienda'];?>
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
