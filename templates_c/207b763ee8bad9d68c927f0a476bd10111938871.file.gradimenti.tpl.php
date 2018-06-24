<?php /* Smarty version Smarty-3.1.19, created on 2016-02-23 19:42:18
         compiled from "./templates/gradimenti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4398915475672a03dd8ceb0-17051943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '207b763ee8bad9d68c927f0a476bd10111938871' => 
    array (
      0 => './templates/gradimenti.tpl',
      1 => 1456252913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4398915475672a03dd8ceb0-17051943',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5672a03ddcd0c1_72469487',
  'variables' => 
  array (
    'accessError' => 0,
    'error' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5672a03ddcd0c1_72469487')) {function content_5672a03ddcd0c1_72469487($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class=content-page>
<div class=content>
<div class=container>
<div class=row>
<div class=col-sm-12>
<h4 class="pull-left page-title">Realizza un gradimento</h4>
<ol class="breadcrumb pull-right">
<li><a href=#>BackOffice</a></li>
<li class=active>Gradimenti</li>
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
<h3 class=panel-title>Gradimenti</h3>
</div>
<div class=panel-body>
<form action="home_paziente.php" method="post">
    <h3>Inserisci un gradimento per <span class="text-primary"><?php echo $_SESSION['utente']['denominazione'];?>
</span></h3>
    <p><br><br></p>
    <div class="col-md-6">
    <div class="form-group">
                                       
                                        <select id="studio" name="medico" class="hidden" data-placeholder="Seleziona studio medico...">
                                            <option></option>
                                           
                                                <option selected="selected" value="<?php echo $_SESSION['utente']['idAzienda'];?>
">-</option>
                                            
                                        </select>
                                    </div>
                                                
                                        </div>
    <div class="clearfix"></div>
                                            <input id="input-2c" name="score" class="rating" min="0" max="5" step="0.5" data-size="sm" data-symbol="&#xf005;" data-glyphicon="false" data-rating-class="rating-fa" data-language="it">
                                            <textarea name="comentario" rows="10" class="form-control">Inserisci il tuo gradimento qua</textarea>
                                            <br>
                                            <button class="btn btn-primary btn-lg btn-perspective waves-effect waves-light">Invia gradimento</button>
                                        </form>
</div>
</div>
</div>

</div>
    


<?php echo $_smarty_tpl->getSubTemplate ("footer_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
