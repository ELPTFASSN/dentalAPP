<?php /* Smarty version Smarty-3.1.19, created on 2016-02-18 17:34:07
         compiled from "./templates/home_paziente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17821104375671e53a560777-00280434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f64b7c84d4816dca5fc0d4d0f423d2444450ac10' => 
    array (
      0 => './templates/home_paziente.tpl',
      1 => 1455813243,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17821104375671e53a560777-00280434',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5671e53a59bea9_00673431',
  'variables' => 
  array (
    'accessError' => 0,
    'error' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5671e53a59bea9_00673431')) {function content_5671e53a59bea9_00673431($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class=content-page>
<div class=content>
<div class=container>
<div class=row>
<div class=col-sm-12>
<h4 class="pull-left page-title">Cruscotto Paziente</h4>
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

   <div class="col-lg-4">
                                <div class="panel panel-border panel-primary">
                                    <div class="panel-heading"> 
                                       
                                    </div> 
                                    <div class="panel-body"> 
                                        <h1 class="text-center"> <i class="fa fa-3x fa-book text-pink"></i> </h1>
                                        <br><br>
                                            
                                        <a href="agenda.php" class="btn btn-lg btn-block btn-primary">LE MIE VISITE</a>
                                    </div> 
                                </div>
   </div> 
    <div class="col-lg-4">
                                <div class="panel panel-border panel-primary">
                                    <div class="panel-heading"> 
                          
                                    </div> 
                                    <div class="panel-body"> 
                                            <h1 class="text-center"> <i class="fa fa-3x fa-file-text-o text-pink"></i> </h1>
                                        <br><br>
                                        <a href="home_paziente.php?gradimenti=true" class="btn btn-lg btn-block btn-primary">FARE UN GRADIMENTO</a>
                                    </div> 
                                </div>
   </div> 

    <div class="col-lg-4">
                                <div class="panel panel-border panel-primary">
                                    <div class="panel-heading"> 
                                        
                                    </div> 
                                    <div class="panel-body"> 
                                            <h1 class="text-center"> <i class="fa fa-3x fa-tags text-pink"></i> </h1>
                                        <br><br>
                                        <a href="home_paziente.php?inviti=true" class="btn btn-lg btn-block btn-primary">INVITA A TUOI AMICI</a>
                                    </div> 
                                </div>
   </div> 
                                
                                   <div class="col-lg-4">
                                <div class="panel panel-border panel-primary">
                                    <div class="panel-heading"> 
                                       
                                    </div> 
                                    <div class="panel-body"> 
                                        <h1 class="text-center"> <i class="fa fa-3x fa-medkit text-pink"></i> </h1>
                                        <br><br>
                                            
                                        <a href="home_paziente.php?trattamenti=true" class="btn btn-lg btn-block btn-primary">I MIEI TRATTAMENTI</a>
                                    </div> 
                                </div>
   </div> 
    <div class="col-lg-4">
                                <div class="panel panel-border panel-primary">
                                    <div class="panel-heading"> 
                          
                                    </div> 
                                    <div class="panel-body"> 
                                            <h1 class="text-center"> <i class="fa fa-3x fa-life-saver text-pink"></i> </h1>
                                        <br><br>
                                        <a href="home_paziente.php?sosmascherina=true" class="btn btn-lg btn-block btn-primary">SOS MASCHERINA</a>
                                    </div> 
                                </div>
   </div> 

    <div class="col-lg-4">
                                <div class="panel panel-border panel-primary">
                                    <div class="panel-heading"> 
                                        
                                    </div> 
                                    <div class="panel-body"> 
                                            <h1 class="text-center"> <i class="fa fa-3x fa-user-md text-pink"></i> </h1>
                                        <br><br>
                                        <a href="home_paziente.php?medico=true" class="btn btn-lg btn-block btn-primary">SCEGLIE STUDIO MEDICO</a>
                                    </div> 
                                </div>
   </div> 

</div>
                                
</div>
</div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
