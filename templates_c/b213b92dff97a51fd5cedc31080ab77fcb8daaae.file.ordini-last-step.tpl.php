<?php /* Smarty version Smarty-3.1.19, created on 2015-11-05 11:41:19
         compiled from "./templates/ordini-last-step.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1219899316563880d123a6d5-49905644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b213b92dff97a51fd5cedc31080ab77fcb8daaae' => 
    array (
      0 => './templates/ordini-last-step.tpl',
      1 => 1446720077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1219899316563880d123a6d5-49905644',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563880d1272d13_91853244',
  'variables' => 
  array (
    'error' => 0,
    'token' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563880d1272d13_91853244')) {function content_563880d1272d13_91853244($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Aggiungi Trattamento</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_amministratore.php">BackOffice</a></li>
                        <li><a href="ordini.php">Prescrizioni</a></li>
                        <li class="active">Aggiungi trattamento</li>
                    </ol>
                </div>
            </div>
            <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
            <div class="row">
                <div class="col-md-12">
                    
                        <div class="alert alert-danger alert-bold-border fade in animated flash">
                            <i class="fa fa-fw fa-3x fa-exclamation-circle text-danger" style="float:right;"></i>
                            <strong>Si sono verificati i seguenti errori:<br>
                                <span class="text-danger"><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php }?></span></strong>
                        </div>
                    </div>
                </div>
            <?php }?> 

            <div class="row">
                <div class="col-md-12">
                    
                        <div class="alert alert-success alert-bold-border fade in animated bounceInDown">
                            <i class="fa fa-fw fa-2x fa-check text-success" style="float:right;"></i>
                            <strong>Pagamento andato a buon fine. Per favore, finisce l'inserimento della prescrizione.<br>
                                
                        </div>
                    </div>
                </div>
     
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Dati del ritiro della prescrizione - <?php echo $_smarty_tpl->tpl_vars['token']->value['codice'];?>
</h3></div>
                        <div class="panel-body">

                            <form action="<?php echo @constant('URL_FILE');?>
ordini.php" method="post" name="aggiorna_profilo_medico">
                                <input type="hidden" name="idOrdine" value="<?php echo $_smarty_tpl->tpl_vars['token']->value['idOrdine'];?>
"><input type="hidden" name="last-step" value="true">
                             
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Sceglie data per il ritiro</label>
                                       <div class="input-group date">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        <input type="text" name="dataRitiro" class="form-control input-lg required clearfix" placeholder="gg/mm/aaaa" data-date-start-date="+2d" id="datepicker" required>

                                    </div><!-- input-group -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Note per il corriere</label>
                                        <textarea class="form-control input-lg" name="noteRitiro" placeholder="Hai qualche bisogno per il ritiro? ..."></textarea>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                                <p><hr></p>
                                <div class="col-md-12 text-right"><button class="btn btn-primary btn-lg">Invia <i class="fa fa-check"></i></button></div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>


            <?php echo $_smarty_tpl->getSubTemplate ("footer_modifica_4.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
