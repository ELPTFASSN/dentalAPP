<?php /* Smarty version Smarty-3.1.19, created on 2015-10-09 16:41:25
         compiled from "./templates/modifica_paziente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90878162755f30c16b9e599-06609093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bd8998185014339e9820a07b601b0081d14bfe8' => 
    array (
      0 => './templates/modifica_paziente.tpl',
      1 => 1444401616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90878162755f30c16b9e599-06609093',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55f30c16c26873_36355619',
  'variables' => 
  array (
    'error' => 0,
    'oMedico' => 0,
    'idDettaglioPaziente' => 0,
    'regioni' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f30c16c26873_36355619')) {function content_55f30c16c26873_36355619($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/intervolutions.com/pruebas.intervolutions.com/alfaone/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Modifica Paziente</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_amministratore.php">BackOffice</a></li>
                        <li><a href="aziende.php">Pazienti</a></li>
                        <li class="active">Modifica paziente</li>
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
pazienti.php" method="post" name="aggiorna_profilo_medico">
                                <input type="hidden" name="idUtente" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->idUtente)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->idUtente;?>
<?php }?>">
                                <input type="hidden" name="idDettaglioPaziente" value="<?php if (isset($_smarty_tpl->tpl_vars['idDettaglioPaziente']->value)) {?><?php echo $_smarty_tpl->tpl_vars['idDettaglioPaziente']->value;?>
<?php }?>">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nome</label>
                                        <input type="text" class="form-control input-lg" name="nome" placeholder="Nome" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->nome)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->nome;?>
<?php }?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Cognome</label>
                                        <input type="text" class="form-control input-lg" name="cognome" placeholder="Cognome" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->cognome)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->cognome;?>
<?php }?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Data di nascita</label><br />

                                    <div class="input-group date">
                                        <input type="text" name="data" class="form-control input-lg" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->dataNascita)) {?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oMedico']->value->dataNascita,"%e %B %Y");?>
<?php }?>" id="datepicker">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    </div><!-- input-group -->
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
                                        <label>Telefono Cellulare</label>
                                        <input type="text" class="form-control input-lg" name="telefonoMobile" placeholder="Telefono" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->telefonoMobile)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->telefonoMobile;?>
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
                                        <label>Indirizzo</label>
                                        <input type="text" class="form-control input-lg" name="indirizzo" placeholder="Indirizzo" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->indirizzo)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->indirizzo;?>
<?php }?>">
                                    </div>
                                </div>
                                    <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Civico</label>
                                        <input type="text" class="form-control input-lg" name="numeroCivico" placeholder="Es. 11" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->numeroCivico)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->numeroCivico;?>
<?php }?>">
                                    </div>
                                </div> 
                                    <div class="col-md-3">
                                    <div class="form-group">
                                        <label>CAP</label>
                                        <input type="text" class="form-control input-lg" name="cap" placeholder="Es. 00011" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->cap)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->cap;?>
<?php }?>">
                                    </div>
                                </div>  
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Regione</label>
                                        <select name="regione" id="regione" class="select2" data-placeholder="Seleziona regione...">
                                            <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['regioni']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['key']->key;
?>
                                                <option <?php if ($_smarty_tpl->tpl_vars['key']->value['idregione']==$_smarty_tpl->tpl_vars['oMedico']->value->fkRegione) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['key']->value['idregione'];?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value['nomeregione'];?>
</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label id="response">Provincia</label>
                                        <select name="provincia" id="provincia" class="select2" data-placeholder="Seleziona provincia...">

                                            <?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->fkProvincia)) {?><option selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['oMedico']->value->fkProvincia;?>
"><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->nomeProvincia;?>
</option><?php }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label id="response">Citt&agrave;</label>
                                        <select name="citta" id="citta" class="select2" data-placeholder="Seleziona citt&agrave;...">
                                            <?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->fkComune)) {?><option selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['oMedico']->value->fkComune;?>
"><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->nomeComune;?>
</option><?php }?>
                                        </select>
                                    </div>
                                </div>





                                <div class="col-md-6"></div>

                                <div class="clearfix"></div>


                                <hr>
                                <div class="col-md-12 text-right"><a href="aziende.php" class="btn btn-danger btn-lg">Cancella <i class="fa fa-times"></i></a> <button type="submit" class="btn btn-primary btn-lg">Invia <i class="fa fa-check"></i></button></div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <?php echo $_smarty_tpl->getSubTemplate ("footer_modifica.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
