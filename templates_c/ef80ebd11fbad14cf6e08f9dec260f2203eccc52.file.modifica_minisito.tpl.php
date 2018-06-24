<?php /* Smarty version Smarty-3.1.19, created on 2015-11-27 18:55:21
         compiled from "./templates/modifica_minisito.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72890720356589909f30272-86223665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef80ebd11fbad14cf6e08f9dec260f2203eccc52' => 
    array (
      0 => './templates/modifica_minisito.tpl',
      1 => 1445686918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72890720356589909f30272-86223665',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'success' => 0,
    'azienda' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5658990a03c3a9_32313719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5658990a03c3a9_32313719')) {function content_5658990a03c3a9_32313719($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Modifica Minisito</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_amministratore.php">BackOffice</a></li>
                        <li><a href="aziende.php">Minisito</a></li>
                        <li class="active">Modifica minisito</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                        <div class="alert alert-danger alert-bold-border fade in animated flash">
                            <i class="fa fa-fw fa-3x fa-exclamation-circle text-danger" style="float:right;"></i>
                            <strong>Si sono verificati i seguenti errori:<br>
                                <span class="text-danger"><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php }?></span></strong>
                        </div>
                    </div>
                </div>
            <?php }?>    
            <?php if (!empty($_smarty_tpl->tpl_vars['success']->value)) {?>
                        <div class="alert alert-success alert-bold-border fade in animated fadeInDown">
                            <i class="fa fa-fw fa-3x fa-check text-success" style="float:right;"></i>
                            <strong>Esito:<br>
                                <span class="text-sucess"><?php if (isset($_smarty_tpl->tpl_vars['success']->value)) {?><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
<?php }?></span></strong>
                        </div>
                    </div>
               
            <?php }?>
            <div class="row">
                <form action="<?php echo @constant('URL_FILE');?>
minisito.php" method="post" name="aggiorna_minisito" enctype="multipart/form-data">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Modifica il minisito per <?php echo $_smarty_tpl->tpl_vars['azienda']->value['denominazione'];?>
 - P.IVA:<?php echo $_smarty_tpl->tpl_vars['azienda']->value['partitaIVA'];?>
</h3></div>
                            <div class="panel-body">


                                <input type="hidden" name="idAzienda" value="<?php echo $_smarty_tpl->tpl_vars['azienda']->value['idAzienda'];?>
">
                                <div class="form-group">
                                    <label class="control-label">Servizi disponibili (separati per virgole)</label>
                                    
                                        <input name="servizi" id="tags" class="form-control input-lg" value="<?php echo $_smarty_tpl->tpl_vars['azienda']->value['servizi'];?>
" />
                                    
                                </div><!-- form-group -->
                                <div class="form-group">
                                    <label>Descrizione</label>
                                            <textarea class="wysihtml5 form-control input-lg" rows="9" name='descrizione'><?php echo $_smarty_tpl->tpl_vars['azienda']->value['descrizione'];?>
</textarea>
                                    </div>
                                <div class="form-group">
                                    <label>Immagine dello studio (JPG o JPEG massimo di 1920x1080px e 400kb)</label>
                                    <input type="file" name="file" class="input-lg form-control"/>
                                </div>
                                    <div class="col-md-12 img-bordada">
                                        <?php if (file_exists(((string)@constant('IMG'))."users/".((string)$_smarty_tpl->tpl_vars['azienda']->value['idAzienda'])."/bg.jpg")) {?>
                                        <img src="<?php echo @constant('URL_IMAGES');?>
users/<?php echo $_smarty_tpl->tpl_vars['azienda']->value['idAzienda'];?>
/bg.jpg" class="img-responsive" />
                                        <?php }?>
                                    </div>
                                <hr>
                                <div class="col-md-12 text-right"><a href="medici.php" class="btn btn-danger btn-lg">Torna indietro <i class="fa fa-backward"></i></a> <button type="submit" class="btn btn-primary btn-lg">Invia <i class="fa fa-check"></i></button></div>

                            </div>

                        </div>
                    </div>

                </form>
            </div>

            <?php echo $_smarty_tpl->getSubTemplate ("footer_modifica.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
