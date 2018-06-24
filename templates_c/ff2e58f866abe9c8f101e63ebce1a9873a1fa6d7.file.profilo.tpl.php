<?php /* Smarty version Smarty-3.1.19, created on 2015-12-17 10:45:07
         compiled from "./templates/profilo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4814946185671e04d914782-61073777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff2e58f866abe9c8f101e63ebce1a9873a1fa6d7' => 
    array (
      0 => './templates/profilo.tpl',
      1 => 1450304487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4814946185671e04d914782-61073777',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5671e04d992490_39386798',
  'variables' => 
  array (
    'error' => 0,
    'success' => 0,
    'oMedico' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5671e04d992490_39386798')) {function content_5671e04d992490_39386798($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Modifica Dati</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_amministratore.php">BackOffice</a></li>
                        <li><a href="aziende.php">Profilo</a></li>
                        <li class="active">Modifica il mio profilo</li>
                    </ol>
                </div>
            </div>
            <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
            <div class="row">
                <div class="col-md-12">
                    
                        <div class="alert alert-danger alert-bold-border fade in animated flash">
                            <i class="fa fa-fw fa-5x fa-exclamation-circle text-danger" style="float:right;"></i>
                            <strong>Si sono verificati i seguenti errori:<br>
                                <span class="text-danger"><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php }?></span></strong>
                        </div>
                    </div>
                </div>
            <?php }?>  
               <?php if (!empty($_smarty_tpl->tpl_vars['success']->value)) {?>
            <div class="row">
                <div class="col-md-12">
                    
                        <div class="alert alert-success alert-bold-border fade in animated flash">
                            <i class="fa fa-fw fa-3x fa-check text-success" style="float:right;"></i>
                            <strong>ESITO<br>
                                <span class="text-success"><?php if (isset($_smarty_tpl->tpl_vars['success']->value)) {?><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
<?php }?></span></strong>
                        </div>
                    </div>
                </div>
            <?php }?> 
            <div class="row">
                <form action="<?php echo @constant('URL_FILE');?>
profile.php" method="post" name="aggiorna_profilo_medico">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">I miei dati</h3></div>
                            <div class="panel-body">


                                <input type="hidden" name="modifica" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->idUtente)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->idUtente;?>
<?php }?>">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nome</label>
                                        <input type="text" class="form-control input-lg" name="nome" placeholder="Nome" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->nome)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->nome;?>
<?php }?>" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Cognome</label>
                                        <input type="text" class="form-control input-lg" name="cognome" placeholder="Cognome" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->cognome)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->cognome;?>
<?php }?>" disabled>
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
                                        <label>Cambia password <small>(lasciare in bianco per non cambiare)</small></label>
                                        <input type="text" class="form-control input-lg" name="password" placeholder="">
                                    </div>
                                </div>

                                <hr>
                                <div class="col-md-12 text-right"><a href="home_medico.php" class="btn btn-danger btn-lg">Torna Indietro <i class="fa fa-times"></i></a> <button type="submit" class="btn btn-primary btn-lg">Invia <i class="fa fa-check"></i></button></div>

                            </div>

                        </div>
                    </div>

                </form>
            </div>

            <?php echo $_smarty_tpl->getSubTemplate ("footer_modifica.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
