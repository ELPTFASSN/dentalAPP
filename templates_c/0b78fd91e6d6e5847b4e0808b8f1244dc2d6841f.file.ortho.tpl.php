<?php /* Smarty version Smarty-3.1.19, created on 2015-11-27 21:20:46
         compiled from "./templates/ortho.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69251733156571ea2d4ac27-71554323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b78fd91e6d6e5847b4e0808b8f1244dc2d6841f' => 
    array (
      0 => './templates/ortho.tpl',
      1 => 1448655643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69251733156571ea2d4ac27-71554323',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56571ea2d84264_28835649',
  'variables' => 
  array (
    'accessError' => 0,
    'error' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56571ea2d84264_28835649')) {function content_56571ea2d84264_28835649($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class=content-page>
<div class=content>
<div class=container>
<div class=row>
<div class=col-sm-12>
<h4 class="pull-left page-title">Ortho viewer</h4>
<ol class="breadcrumb pull-right">
<li><a href=#>BackOffice</a></li>
<li class=active>Ortho</li>
</ol>
</div>
</div>
    <div class="row"><div class="col-md-12">
         <?php if (!empty($_smarty_tpl->tpl_vars['accessError']->value)) {?>
                            <div class="alert alert-warning alert-bold-border fade in alert-dismissable margin-top"><i class="fa fa-fw fa-exclamation-triangle fa-3x text-warning" style="float:left; padding-right:20px"></i>
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Atenzione!<br>
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
            
        </div></div>
<div class=row>
<div class=col-md-12>
<div class="panel panel-default">
<div class=panel-heading>
<h3 class=panel-title>Scarica Ortho Viewer</h3>
</div>
<div class=panel-body>


<div class="col-md-12 col-sm-12 col-xs-12">
    <h3>Ortho Studio Viewer </h3>
    <p style="text-align: justify;"><img src="http://easysmile.beecloud.it/panel/images/ortho-studio.jpg" style="float:right;margin:0 30px;">Ortho Studio è un pacchetto software dedicato utilizzato per il controllo, la modifica e l'analisi, utilizzando dati 3D di alta qualità di casi di pazienti sottoposti a scansione con scanner dentale Maestro 3D. Esso è accompagnato da un visualizzatore gratuito che consente di distribuire i modelli digitali ai clienti. 

    </p><p>Ortho Studio Viewer - Permette di visualizzare i modelli 3D creati con Ortho Studio. Lo spettatore ha lo zoom, panning e pieno 3D la rotazione, l'analisi e le misurazioni dei modelli. </p><p>Dati specifici sul modello, paziente, ecc vengono visualizzati anche sullo schermo.</p>
    <p class="alert alert-warning col-md-9"><i class="fa fa-fw fa-info-circle"></i> <strong>Questa versione funziona solo per sistemi Windows a 64 bit.</strong></p>
    <div class="clearfix"></div>
    <p><br><a href="http://easysmile.beecloud.it/Ortho.zip" class="btn btn-primary btn-lg btn-perspective waves-effect waves-light">Scarica  Ortho Viewer <i class="fa fa-fw fa-download"></i></a> <br><br></p>
</div>

</div>
</div>
</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer_aziende.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
