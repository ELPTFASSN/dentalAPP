<?php /* Smarty version Smarty-3.1.19, created on 2016-02-07 18:02:03
         compiled from "./templates/riepilogo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12961925275672d936c45dc1-36278608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70ce7800ed016c7bf07b9cef324f30078aec76f8' => 
    array (
      0 => './templates/riepilogo.tpl',
      1 => 1454864156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12961925275672d936c45dc1-36278608',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5672d936d680e9_78027223',
  'variables' => 
  array (
    'error' => 0,
    'idOrdine' => 0,
    'massup' => 0,
    'masinf' => 0,
    'massupbis' => 0,
    'masinfbis' => 0,
    'primo' => 0,
    'prez' => 0,
    'acconto' => 0,
    'iva' => 0,
    'ivo' => 0,
    'prezzo' => 0,
    'frazionamenti' => 0,
    'terzo' => 0,
    'mastot' => 0,
    'secondo' => 0,
    'numeropar' => 0,
    'segundeja' => 0,
    'tercereja' => 0,
    'mora' => 0,
    'precioprimo' => 0,
    'sinsup' => 0,
    'sininf' => 0,
    'segundafrac' => 0,
    'cad' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5672d936d680e9_78027223')) {function content_5672d936d680e9_78027223($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars["iva"] = new Smarty_variable($_SESSION['utente']['IVA']/100, null, 0);?>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Dettaglio prescrizione</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_amministratore.php">BackOffice</a></li>
                        <li><a href="ordini.php">Prescrizioni</a></li>
                        <li class="active">Dettaglio prescrizione</li>
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
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Riepilogo trattamento per prescrizione <?php if (isset($_smarty_tpl->tpl_vars['idOrdine']->value)) {?><?php echo $_smarty_tpl->tpl_vars['idOrdine']->value;?>
<?php }?> </h3></div>
                        <div class="panel-body">
                            
                            <div class="col-md-6">
                    <div class="panel panel-border panel-primary">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Mascherine </h3> 
                        </div> 
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class='list-group-item'>Numero Mascherine Totali Superiori: <span class="badge badge-pink text-big"><?php echo $_smarty_tpl->tpl_vars['massup']->value;?>
</span></li>
                                <li class='list-group-item'>Numero Mascherine Totali Inferiori: <span class="badge badge-pink text-big"><?php echo $_smarty_tpl->tpl_vars['masinf']->value;?>
</span></li>
                                <li class='list-group-item'>Numero Mascherine Totali: <span class="badge badge-pink text-big"><?php echo $_smarty_tpl->tpl_vars['massup']->value+$_smarty_tpl->tpl_vars['masinf']->value;?>
</span></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                            <div class="col-md-6">
                    <div class="panel panel-border panel-primary">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Mascherine Bis</h3> 
                        </div> 
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class='list-group-item'>Numero Mascherine bis Totali Superiori: <span class="badge badge-pink text-big"><?php if (empty($_smarty_tpl->tpl_vars['massupbis']->value)) {?>0<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['massupbis']->value;?>
<?php }?></span></li>
                                <li class='list-group-item'>Numero Mascherine bis Totali Inferiori: <span class="badge badge-pink text-big"><?php if (empty($_smarty_tpl->tpl_vars['masinfbis']->value)) {?>0<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['masinfbis']->value;?>
<?php }?></span></li>
                                <li class='list-group-item'>Numero Mascherine bis Totali: <span class="badge badge-pink text-big"><?php echo $_smarty_tpl->tpl_vars['massupbis']->value+$_smarty_tpl->tpl_vars['masinfbis']->value;?>
</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                        </div>
                    </div>
                </div>
            </div>
                                        <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Soluzioni per il pagamento </h3></div>
                        <div class="panel-body">
                                                 
<?php if (!isset($_smarty_tpl->tpl_vars['primo']->value)) {?>
                                <div class="col-md-12">
                    <div class="panel panel-border panel-primary">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Soluzione Unica</h3> 
                        </div> 
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class='list-group-item'><?php echo $_smarty_tpl->tpl_vars['prez']->value['description'];?>
: <span class="pull-right text-big"><small><?php echo $_smarty_tpl->tpl_vars['massup']->value+$_smarty_tpl->tpl_vars['masinf']->value;?>
 x </small><?php echo number_format($_smarty_tpl->tpl_vars['prez']->value['prezzo'],2,",",".");?>
 &euro;</span></li>
                                <li class='list-group-item'>Acconto prescrizione: <span class="pull-right text-big">- <?php echo number_format($_smarty_tpl->tpl_vars['acconto']->value,2,",",".");?>
 &euro;</span></li>
                                <?php if ($_SESSION['utente']['IVASINO']) {?><?php $_smarty_tpl->tpl_vars["ivo"] = new Smarty_variable($_smarty_tpl->tpl_vars['prez']->value['prezzo']*$_smarty_tpl->tpl_vars['iva']->value, null, 0);?><li class='list-group-item penultimo'>IVA: <span class="pull-right text-big"> <?php echo $_SESSION['utente']['IVA'];?>
% <?php echo number_format($_smarty_tpl->tpl_vars['ivo']->value,2,",",".");?>
 &euro;</span></li><?php $_smarty_tpl->tpl_vars['prezzo'] = new Smarty_variable($_smarty_tpl->tpl_vars['prezzo']->value+$_smarty_tpl->tpl_vars['ivo']->value, null, 0);?><?php }?>
                                <li class='list-group-item ultimo'><strong>Prezzo totale:</strong> <span class="pull-right text-bigo"><?php echo number_format($_smarty_tpl->tpl_vars['prezzo']->value,2,",",".");?>
 &euro;</span></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                                <?php }?>
                                
                                <?php if (isset($_smarty_tpl->tpl_vars['primo']->value)) {?>
                                    <div class="col-md-12">
                    <div class="panel panel-border panel-primary">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Soluzione Unica</h3> 
                        </div> 
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class='list-group-item'>Prezzo mascherine abbonato primo range: <span class="pull-right text-big"><small><?php echo $_smarty_tpl->tpl_vars['frazionamenti']->value['min'];?>
 x </small><?php echo number_format($_smarty_tpl->tpl_vars['primo']->value,2,",",".");?>
 &euro;</span></li>
                                <?php if (!isset($_smarty_tpl->tpl_vars['terzo']->value)) {?> <li class='list-group-item'>Prezzo mascherine abbonato secondo range: <span class="pull-right text-big"><small><?php echo $_smarty_tpl->tpl_vars['mastot']->value-$_smarty_tpl->tpl_vars['frazionamenti']->value['min'];?>
 x </small><?php echo number_format($_smarty_tpl->tpl_vars['secondo']->value,2,",",".");?>
 &euro;</span></li><?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['terzo']->value)) {?>
                                <li class='list-group-item'>Prezzo mascherine abbonato secondo range: <span class="pull-right text-big"><small><?php echo $_smarty_tpl->tpl_vars['frazionamenti']->value['max']-$_smarty_tpl->tpl_vars['frazionamenti']->value['min'];?>
 x </small><?php echo number_format($_smarty_tpl->tpl_vars['secondo']->value,2,",",".");?>
 &euro;</span></li>
                                <li class='list-group-item'>Prezzo mascherine abbonato terzo range: <span class="pull-right text-big"><small><?php echo $_smarty_tpl->tpl_vars['mastot']->value-$_smarty_tpl->tpl_vars['frazionamenti']->value['max'];?>
 x </small><?php echo number_format($_smarty_tpl->tpl_vars['terzo']->value,2,",",".");?>
 &euro;</span></li><?php }?>
                                <li class='list-group-item'>Acconto prescrizione: <span class="pull-right text-big">- <?php echo number_format($_smarty_tpl->tpl_vars['acconto']->value,2,",",".");?>
 &euro;</span></li>
                               <?php if ($_SESSION['utente']['IVASINO']) {?><?php $_smarty_tpl->tpl_vars["ivo"] = new Smarty_variable($_smarty_tpl->tpl_vars['frazionamenti']->value['min']*$_smarty_tpl->tpl_vars['iva']->value, null, 0);?><li class='list-group-item penultimo'>IVA: <span class="pull-right text-big"> <?php echo $_SESSION['utente']['IVA'];?>
% <?php echo number_format($_smarty_tpl->tpl_vars['ivo']->value,2,",",".");?>
 &euro;</span></li><?php $_smarty_tpl->tpl_vars['prezzo'] = new Smarty_variable($_smarty_tpl->tpl_vars['prezzo']->value+$_smarty_tpl->tpl_vars['ivo']->value, null, 0);?><?php }?>
                                <li class='list-group-item ultimo'><strong>Prezzo totale unica soluzione:</strong> <span class="pull-right text-bigo"><strong id='preciaco'><?php echo number_format($_smarty_tpl->tpl_vars['prezzo']->value,2,",",".");?>
</strong> &euro;</span></li>
                                
                            </ul>
                                <div class="col-md-4 col-md-offset-8">
                                   <div class="form-group">
                                <label>Sconto per la soluzione unica (in &euro;)</label>
                                                                        <div class="spinner" id="spinner">
                                                        <div class="input-group">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-up btn-primary waves-effect waves-light" id="mas">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                            <input type="text" class="spinner-input form-control" maxlength="3" id='sconto' name="sconto" >
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-down btn-primary waves-effect waves-light" id="menos">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                
                                                                    </div>
                        </div>
                                </div>
                    </div>
                </div>
                                <div class='clearfix'></div>
                                <div class="col-md-6">
                    <div class="panel panel-border panel-primary">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Primo Frazionamento</h3> 
                        </div> 
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class='list-group-item'>Numero Coppie Mascherine: <span class="pull-right text-big"><?php echo $_smarty_tpl->tpl_vars['numeropar']->value;?>
 </span></li>
                                <li class='list-group-item'>Numero Mascherine Totali: <span class="pull-right text-big"><?php echo 2*$_smarty_tpl->tpl_vars['numeropar']->value;?>
 </span></li>
                                <?php if (($_smarty_tpl->tpl_vars['numeropar']->value+$_smarty_tpl->tpl_vars['numeropar']->value)<$_smarty_tpl->tpl_vars['segundeja']->value) {?>
                                <li class='list-group-item '>Prezzo Mascherine Totali: <span class="pull-right text-big"><?php echo $_smarty_tpl->tpl_vars['numeropar']->value+$_smarty_tpl->tpl_vars['numeropar']->value;?>
 x <?php echo number_format($_smarty_tpl->tpl_vars['primo']->value,2,",",".");?>
 &euro;</span></li>
                                <?php } else { ?>
                                <li class='list-group-item '>Prezzo mascherine primo range: <span class="pull-right text-big"><?php echo $_smarty_tpl->tpl_vars['segundeja']->value;?>
 x <?php echo number_format($_smarty_tpl->tpl_vars['primo']->value,2,",",".");?>
 &euro;</span></li>
                                <?php if (!isset($_smarty_tpl->tpl_vars['terzo']->value)) {?><li class='list-group-item '>Prezzo mascherine secondo range: <span class="pull-right text-big"><?php echo ($_smarty_tpl->tpl_vars['numeropar']->value+$_smarty_tpl->tpl_vars['numeropar']->value)-$_smarty_tpl->tpl_vars['segundeja']->value;?>
 x <?php echo number_format($_smarty_tpl->tpl_vars['secondo']->value,2,",",".");?>
 &euro;</span></li><?php }?>
                                 <?php if (isset($_smarty_tpl->tpl_vars['terzo']->value)) {?>
                                 <li class='list-group-item '>Prezzo mascherine secondo range: <span class="pull-right text-big"><?php echo $_smarty_tpl->tpl_vars['frazionamenti']->value['max']-$_smarty_tpl->tpl_vars['frazionamenti']->value['min'];?>
 x <?php echo number_format($_smarty_tpl->tpl_vars['secondo']->value,2,",",".");?>
 &euro;</span></li>
                                 <li class='list-group-item'>Prezzo mascherine terzo range: <span class="pull-right text-big"><small><?php echo $_smarty_tpl->tpl_vars['tercereja']->value;?>
 x </small><?php echo number_format($_smarty_tpl->tpl_vars['terzo']->value,2,",",".");?>
 &euro;</span></li><?php }?>
                                <?php }?>
                                <li class='list-group-item '>Mora Frazionamento: <span class="pull-right text-big">1 x <?php echo number_format($_smarty_tpl->tpl_vars['mora']->value,2,",",".");?>
 &euro;</span></li>
                                <li class='list-group-item'>Acconto prescrizione: <span class="pull-right text-big">- <?php echo number_format($_smarty_tpl->tpl_vars['acconto']->value,2,",",".");?>
 &euro;</span></li>
                                <?php if ($_SESSION['utente']['IVASINO']) {?><li class='list-group-item penultimo'>IVA: <span class="pull-right text-big"> <?php echo $_SESSION['utente']['IVA'];?>
% <?php echo $_smarty_tpl->tpl_vars['precioprimo']->value*number_format(($_SESSION['utente']['IVA']),2,",",".");?>
 &euro;</span></li><?php }?>
                                <li class='list-group-item ultimo'><strong>Prezzo totale primo frazionamento:</strong> <span class="pull-right text-bigo"><strong id='preciaco2'><?php echo number_format($_smarty_tpl->tpl_vars['precioprimo']->value,2,",",".");?>
</strong> &euro;</span></li>
                                
                            </ul>
                                <div class="col-md-8 col-md-offset-4">
                                   <div class="form-group">
                                <label>Sconto per il primo frazionamento (in &euro;)</label>
                                                                        <div class="spinner" id="spinner2">
                                                        <div class="input-group">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-up btn-primary waves-effect waves-light" id="mas2">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                            <input type="text" class="spinner-input form-control" maxlength="3" id='sconto2' name="sconto2" >
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-down btn-primary waves-effect waves-light" id="menos2">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                
                                                                    </div>
                        </div>
                        </div>
                    </div>
                </div>
                           <?php }?>    
                           <?php if (isset($_smarty_tpl->tpl_vars['secondo']->value)) {?>
                                <div class="col-md-6">
                    <div class="panel panel-border panel-primary">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Secondo Frazionamento</h3> 
                        </div> 
                        <div class="panel-body">
                            <ul class="list-group">
                                <?php if (isset($_smarty_tpl->tpl_vars['sinsup']->value)) {?><li class='list-group-item'>Numero Singole Mascherine Superiori: <span class="pull-right text-big"><?php echo $_smarty_tpl->tpl_vars['sinsup']->value;?>
</span></li><?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['sininf']->value)) {?><li class='list-group-item'>Numero Singole Mascherine Inferiori: <span class="pull-right text-big"><?php echo $_smarty_tpl->tpl_vars['sininf']->value;?>
</span></li><?php }?>
                                <li class='list-group-item '>Numero Mascherine Totali: <span class="pull-right text-big"><?php echo $_smarty_tpl->tpl_vars['sinsup']->value+$_smarty_tpl->tpl_vars['sininf']->value;?>
</span></li>
                                <?php if (!isset($_smarty_tpl->tpl_vars['tercereja']->value)) {?><li class='list-group-item '>Prezzo abbonato secondo range: <span class="pull-right text-big"><?php echo $_smarty_tpl->tpl_vars['sinsup']->value+$_smarty_tpl->tpl_vars['sininf']->value;?>
 x <?php echo number_format($_smarty_tpl->tpl_vars['secondo']->value,2,",",".");?>
 &euro;</span></li><?php }?>
                                 <?php if (isset($_smarty_tpl->tpl_vars['terzo']->value)) {?><li class='list-group-item '>Prezzo abbonato terzo range: <span class="pull-right text-big"><small><?php echo $_smarty_tpl->tpl_vars['mastot']->value-$_smarty_tpl->tpl_vars['tercereja']->value-$_smarty_tpl->tpl_vars['frazionamenti']->value['max'];?>
 x </small><?php echo number_format($_smarty_tpl->tpl_vars['terzo']->value,2,",",".");?>
 &euro;</span></li><?php }?>
                                 <?php if ($_SESSION['utente']['IVASINO']) {?><li class='list-group-item penultimo'>IVA: <span class="pull-right text-big"> <?php echo $_SESSION['utente']['IVA'];?>
% <?php echo $_smarty_tpl->tpl_vars['segundafrac']->value*number_format(($_SESSION['utente']['IVA']),2,",",".");?>
 &euro;</span></li><?php }?>
                                 <li class='list-group-item ultimo'><strong>Prezzo totale secondo frazionamento:</strong> <span class="pull-right text-bigo"> <strong id='preciaco3'><?php echo number_format($_smarty_tpl->tpl_vars['segundafrac']->value,2,",",".");?>
</strong> &euro;</span></li>
                                
                            </ul>
                                <div class="col-md-8 col-md-offset-4">
                                   <div class="form-group">
                                <label>Sconto per il secondo frazionamento (in &euro;)</label>
                                                                        <div class="spinner">
                                                        <div class="input-group">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-up btn-primary waves-effect waves-light" id="mas3">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                            <input type="text" class="spinner-input form-control" maxlength="3" id='sconto3' name="sconto3" >
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-down btn-primary waves-effect waves-light" id="menos3">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                
                                                                    </div>
                        </div>
                        </div>
                    </div>
                </div>
                           <?php }?>  
                            <div class="clearfix"></div>
                            <form method="POST" action="ordini.php">
                                
                                  <input type="hidden" id='precio' name="precio" value="<?php echo $_smarty_tpl->tpl_vars['prezzo']->value;?>
"><input type="hidden" name="precio2" id='precio2' value="<?php echo $_smarty_tpl->tpl_vars['precioprimo']->value;?>
"><input type="hidden" name="precio3" id='precio3' value="<?php echo $_smarty_tpl->tpl_vars['segundafrac']->value;?>
">
                                  <input type="hidden" name="massup" value="<?php echo $_smarty_tpl->tpl_vars['massup']->value;?>
"><input type="hidden" name="masinf" value="<?php echo $_smarty_tpl->tpl_vars['masinf']->value;?>
"><input type="hidden" name="idOrdine" value="<?php echo $_smarty_tpl->tpl_vars['idOrdine']->value;?>
">
                                   <input type="hidden" name="massupbis" value="<?php echo $_smarty_tpl->tpl_vars['massupbis']->value;?>
"><input type="hidden" name="masinfbis" value="<?php echo $_smarty_tpl->tpl_vars['masinfbis']->value;?>
">  <input type="hidden" name="cad" value="<?php echo $_smarty_tpl->tpl_vars['cad']->value;?>
">
                            <div class="pull-right"><a href="ordini.php" class="btn btn-lg btn-danger btn-perspective waves-effect waves-light">Torna Indietro</a> <button class="btn btn-primary btn-lg btn-perspective waves-effect waves-light" type="submit">Invia Trattamento <i class="fa fa-fw fa-check"></i></button></div>
                            </form>
                        </div>
                    </div>
                </div>
                                        </div>
                                                </div>
                                            </div>
                            

                         </div>
                          
                                                <?php echo $_smarty_tpl->getSubTemplate ("footer_modifica_3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
