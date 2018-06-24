<?php /* Smarty version Smarty-3.1.19, created on 2015-09-24 12:08:28
         compiled from "./templates/modifica_coupon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:834868921560024511521e0-44358793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b5945288d6c0d91dca608d783e950aad0872321' => 
    array (
      0 => './templates/modifica_coupon.tpl',
      1 => 1443089246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '834868921560024511521e0-44358793',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_560024511c9180_45714033',
  'variables' => 
  array (
    'error' => 0,
    'idCoupon' => 0,
    'codiceCoupon' => 0,
    'oCoupon' => 0,
    'tipologia' => 0,
    'key' => 0,
    'medici' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560024511c9180_45714033')) {function content_560024511c9180_45714033($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/intervolutions.com/pruebas.intervolutions.com/alfaone/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


 <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Aggiungi codice sconto</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home_amministratore.php">BackOffice</a></li>
                                    <li><a href="aziende.php">Sconti</a></li>
                                    <li class="active">Aggiungi codice sconto</li>
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
coupon.php" method="post" name="addCoupon">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Dati Coupon</h3></div>
                            <div class="panel-body">

                   
                        <?php if (isset($_smarty_tpl->tpl_vars['idCoupon']->value)) {?><input type="hidden" name="idCoupon" value="<?php echo $_smarty_tpl->tpl_vars['idCoupon']->value;?>
"><?php } else { ?><input type="hidden" name="inserimento" value="TRUE"><?php }?>
                        <div class="col-md-4">
                            <div class="form-group">
                                    <label>Codice Coupon</label>
                                    <input required="" aria-required="true" type="text" class="form-control input-lg" name="cupon" placeholder="Codice Coupon" value="<?php if (isset($_smarty_tpl->tpl_vars['codiceCoupon']->value)) {?><?php echo $_smarty_tpl->tpl_vars['codiceCoupon']->value;?>
<?php }?>">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label>Data di scadenza</label><br />
                            
                                <div class="input-group date">
                                    <input type="text" name="data" class="form-control input-lg" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['oCoupon']->value->dataScadenza)) {?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oCoupon']->value->dataScadenza,"%e %B %Y");?>
<?php }?>" data-date-format="dd/mm/yyyy" id="datepicker">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div><!-- input-group -->
                        </div>
                                    <div class="col-md-4">
                                        <label>Sconto effettivo</label>
                            <div class="input-group">
                                    
                                    <span class="input-group-addon" id="moneda"><i class="fa fa-euro"></i></span>
                                    <input required="" aria-required="true" type="text" class="form-control input-lg" name="cantidad" placeholder="Es. 25" value="<?php if (isset($_smarty_tpl->tpl_vars['oCoupon']->value->idCoupon)) {?><?php echo $_smarty_tpl->tpl_vars['oCoupon']->value->codice;?>
<?php }?>">
                            </div>
                        </div>
                         <div class="clearfix"></div>

                    


                   <div class="col-md-4">
                            <div class="form-group">
                                <label>Tipo Coupon</label>
                                <select required="" aria-required="true" name="tipoCoupon" id="tipoCoupon" class="select2" data-placeholder="Seleziona tipologia...">
                                    <option></option>
                                           <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tipologia']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['key']->key;
?>
                                               <option <?php if ($_smarty_tpl->tpl_vars['key']->value['idTipoCoupon']==$_smarty_tpl->tpl_vars['oCoupon']->value->idTipoCoupon) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['key']->value['idTipoCoupon'];?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value['nomeCoupon'];?>
</option>
                                           <?php } ?>
                                      </select>
                            </div>
                        </div>
                                      
                            <div class="col-md-4">
                            <div class="form-group">
                                    <label id="response">Sconto</label>
                                      <select required="" aria-required="true" name="scontoCoupon" id="scontoCoupon" class="select2" data-placeholder="Seleziona tipo di sconto...">
                                          <option></option>
                                          <option value="0">Sconto Pecuniario (&euro;)</option>
                                          <option value="2">Sconto Percentuale (%)</option>
                                          <option value="1">Prezzo permanente (&euro;)</option>
                                      </select>
                            </div>
                        </div>
                                      <div class="col-md-4">
                            <div class="form-group">
                                    <label id="response">Sconto permanente</label>
                                      <select required="" aria-required="true" name="tempoCoupon" id="tempoCoupon" class="select2" data-placeholder="Seleziona tipo di sconto...">
                                          <option></option>
                                          <option value="1">SI</option>
                                          <option value="2">SI, ma fino a scadenza</option>
                                          <option value="0">NO</option>
                                      </select>
                            </div>
                        </div>
                                      
                        
                        <div class="clearfix"></div>
                            </div>
</div>
                    </div>
  <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Medici iscritti a questi coupon</h3></div>
                            <div class="panel-body">
                                
                             <div class="form-group">
                                        
                                        <div class="col-md-12">
                                            <select required="" aria-required="true" name="utenti[]" class="multi-select" multiple="" id="my_multi_select3" >
                                                <?php  $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['key']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['medici']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['key']->key => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['key']->key;
?>
                                               <option  value="<?php echo $_smarty_tpl->tpl_vars['key']->value['fkUtente'];?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['key']->value['cognome'];?>
 - <?php echo $_smarty_tpl->tpl_vars['key']->value['codiceFiscale'];?>
 - <?php echo $_smarty_tpl->tpl_vars['key']->value['tipoSpecializzazione'];?>
</option>
                                           <?php } ?>
                                            </select>
                            </div>

                                    </div>
            
                    
                </div>

                        </div>
  </div><div class="col-md-6"><a href="aziende.php" class="btn btn-danger btn-lg btn-block">Cancella <i class="fa fa-times"></i></a></div> <div class="col-md-6"><button type="submit" class="btn btn-primary btn-lg btn-block ">Invia <i class="fa fa-check"></i></button></div>
                                            </form>
  </div>

<?php echo $_smarty_tpl->getSubTemplate ("footer_modifica.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
