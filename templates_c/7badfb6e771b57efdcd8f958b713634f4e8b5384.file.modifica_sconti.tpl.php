<?php /* Smarty version Smarty-3.1.19, created on 2015-10-09 12:11:34
         compiled from "./templates/modifica_sconti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:719664409561774900ca990-03741359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7badfb6e771b57efdcd8f958b713634f4e8b5384' => 
    array (
      0 => './templates/modifica_sconti.tpl',
      1 => 1444385491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '719664409561774900ca990-03741359',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56177490161823_38512048',
  'variables' => 
  array (
    'error' => 0,
    'arrOrdini' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56177490161823_38512048')) {function content_56177490161823_38512048($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Gestisci il listino prezzo</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_amministratore.php">BackOffice</a></li>
                        <li class="active">Listino Prezzi</li>
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
prezzi.php" method="post" name="addCoupon" >
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Gestisci il listino prezzo</h3></div>
                            <div class="panel-body">

                                <input type="hidden" name="inserimento" value="TRUE">

                                <div class="col-md-6 form-group">
                                    <label>Costo dell'abbonamento annuale</label>
                                    <div class="input-group">

                                        <span class="input-group-addon" id="moneda"><i class="fa fa-euro"></i></span>
                                        <input required="" aria-required="true" type="text" class="form-control input-lg" name="2" placeholder="Es. 25" value="<?php echo $_smarty_tpl->tpl_vars['arrOrdini']->value['2']['prezzo'];?>
">
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Prezzo dell'acconto di una nuova Prescrizione</label>
                                    <div class="input-group">

                                        <span class="input-group-addon" id="moneda"><i class="fa fa-euro"></i></span>
                                        <input required="" aria-required="true" type="text" class="form-control input-lg" name="8" placeholder="Es. 25" value="<?php echo $_smarty_tpl->tpl_vars['arrOrdini']->value['8']['prezzo'];?>
">
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Costo spese di spedizione (non abbonati)</label>
                                    <div class="input-group">

                                        <span class="input-group-addon" id="moneda"><i class="fa fa-euro"></i></span>
                                        <input required="" aria-required="true" type="text" class="form-control input-lg" name="11" placeholder="Es. 25" value="<?php echo $_smarty_tpl->tpl_vars['arrOrdini']->value['11']['prezzo'];?>
">
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Prezzo mascherina per utente NON abbonato</label>
                                    <div class="input-group">

                                        <span class="input-group-addon" id="moneda"><i class="fa fa-euro"></i></span>
                                        <input required="" aria-required="true" type="text" class="form-control input-lg" name="9" placeholder="Es. 25" value="<?php echo $_smarty_tpl->tpl_vars['arrOrdini']->value['9']['prezzo'];?>
">
                                    </div>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label>Prezzo mascherina per utente abbonato (da 0-25)</label>
                                    <div class="input-group">

                                        <span class="input-group-addon" id="moneda"><i class="fa fa-euro"></i></span>
                                        <input required="" aria-required="true" type="text" class="form-control input-lg" name="4" placeholder="Es. 25" value="<?php echo $_smarty_tpl->tpl_vars['arrOrdini']->value['4']['prezzo'];?>
">
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Prezzo mascherina per utente abbonato (da 25-35)</label>
                                    <div class="input-group">

                                        <span class="input-group-addon" id="moneda"><i class="fa fa-euro"></i></span>
                                        <input required="" aria-required="true" type="text" class="form-control input-lg" name="1" placeholder="Es. 25" value="<?php echo $_smarty_tpl->tpl_vars['arrOrdini']->value['1']['prezzo'];?>
">
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Prezzo mascherina per utente abbonato (da 35-0)</label>
                                    <div class="input-group">

                                        <span class="input-group-addon" id="moneda"><i class="fa fa-euro"></i></span>
                                        <input required="" aria-required="true" type="text" class="form-control input-lg" name="5" placeholder="Es. 25" value="<?php echo $_smarty_tpl->tpl_vars['arrOrdini']->value['5']['prezzo'];?>
">
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Mora per la soluzione frazionata</label>
                                    <div class="input-group">

                                        <span class="input-group-addon" id="moneda"><i class="fa fa-euro"></i></span>
                                        <input required="" aria-required="true" type="text" class="form-control input-lg" name="10" placeholder="Es. 25" value="<?php echo $_smarty_tpl->tpl_vars['arrOrdini']->value['10']['prezzo'];?>
">
                                    </div>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label>Costo Mascherina SOS (richiesta maggiore di 3)</label>
                                    <div class="input-group">

                                        <span class="input-group-addon" id="moneda"><i class="fa fa-euro"></i></span>
                                        <input required="" aria-required="true" type="text" class="form-control input-lg" name="6" placeholder="Es. 25" value="<?php echo $_smarty_tpl->tpl_vars['arrOrdini']->value['6']['prezzo'];?>
">
                                    </div>
                                </div>
                                    
                                <div class="col-md-6 form-group">
                                    <label>Blocco minimo mascherine</label>
                                    <div class="input-group">

                                        <input required="" aria-required="true" type="text" class="form-control input-lg" name="11" placeholder="Es. 25" value="<?php echo $_smarty_tpl->tpl_vars['arrOrdini']->value['11']['prezzo'];?>
">
                                    </div>
                                </div>
                                    
                                <div class="col-md-6 form-group">
                                    <label>Intervallo per il primo range (da 0 a)</label>
                                    <div class="input-group">

                                        <span class="input-group-addon" id="moneda"><strong>%</strong></span>
                                        <input required="" aria-required="true" type="text" class="form-control input-lg" name="7" placeholder="Es. 25" value="<?php echo $_smarty_tpl->tpl_vars['arrOrdini']->value['7']['prezzo'];?>
">
                                    </div>
                                </div>
                                    
                                <div class="col-md-6 form-group">
                                    <label>Intervallo per il primo range (da 25 in poi)</label>
                                    <div class="input-group">

                                        <span class="input-group-addon" id="moneda"><strong>%</strong></span>
                                        <input required="" aria-required="true" type="text" class="form-control input-lg" name="12" placeholder="Es. 25" value="<?php echo $_smarty_tpl->tpl_vars['arrOrdini']->value['12']['prezzo'];?>
">
                                    </div>
                                </div>






                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"><a href="aziende.php" class="btn btn-danger btn-lg btn-block">Cancella <i class="fa fa-times"></i></a></div> <div class="col-md-6"><button type="submit" class="btn btn-primary btn-lg btn-block ">Invia <i class="fa fa-check"></i></button></div>
                </form>
            </div>

            <?php echo $_smarty_tpl->getSubTemplate ("footer_modifica.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
