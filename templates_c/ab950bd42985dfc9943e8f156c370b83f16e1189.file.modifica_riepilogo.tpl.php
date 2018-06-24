<?php /* Smarty version Smarty-3.1.19, created on 2016-02-07 18:22:39
         compiled from "./templates/modifica_riepilogo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1908070485657263e9235e6-79099006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab950bd42985dfc9943e8f156c370b83f16e1189' => 
    array (
      0 => './templates/modifica_riepilogo.tpl',
      1 => 1454865757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1908070485657263e9235e6-79099006',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5657263ea6aa27_55637127',
  'variables' => 
  array (
    'error' => 0,
    'trattamento' => 0,
    'primo' => 0,
    'prez' => 0,
    'acconto' => 0,
    'frazionamenti' => 0,
    'terzo' => 0,
    'mastot' => 0,
    'secondo' => 0,
    'prezzo' => 0,
    'numeropar' => 0,
    'segundeja' => 0,
    'tercereja' => 0,
    'mora' => 0,
    'precioprimo' => 0,
    'sinsup' => 0,
    'sininf' => 0,
    'segundafrac' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5657263ea6aa27_55637127')) {function content_5657263ea6aa27_55637127($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/beecloud.it/easysmile.beecloud.it/panel/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_math')) include '/var/www/vhosts/beecloud.it/easysmile.beecloud.it/panel/libs/plugins/function.math.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Dettaglio trattamento</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_amministratore.php">BackOffice</a></li>
                        <li><a href="ordini.php">Prescrizioni</a></li>
                        <li class="active">Dettaglio trattamento</li>
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
                        <div class="panel-heading"><h3 class="panel-title">Proposta di trattamento per la prescrizione <?php if (isset($_smarty_tpl->tpl_vars['trattamento']->value['codice'])) {?><?php echo $_smarty_tpl->tpl_vars['trattamento']->value['codice'];?>
<?php }?>  </h3></div>
                        <div class="panel-body">
                            <div class="col-md-6">  <h4>Paziente: <?php echo $_smarty_tpl->tpl_vars['trattamento']->value['nomePaziente'];?>
 <?php echo $_smarty_tpl->tpl_vars['trattamento']->value['cognomePaziente'];?>
</h4> </div>
                            <div class="col-md-6"> <h4>Codice prescrizione: <?php echo $_smarty_tpl->tpl_vars['trattamento']->value['codice'];?>
</h4> </div>
                            <div class="col-md-6">  <h4>Data apertura: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['trattamento']->value['fechaApertura'],"%d/%m/%Y");?>
 </h4> </div>
                             <?php if (!empty($_smarty_tpl->tpl_vars['trattamento']->value['fechaActualizacion'])) {?> <div class="col-md-6"> <h4>Data aggiornamento : <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['trattamento']->value['fechaActualizacion'],"%d/%m/%Y");?>
</h4> </div><?php }?>
                            <div class="col-md-6"> <h4>Lista denti: <?php echo $_smarty_tpl->tpl_vars['trattamento']->value['denti'];?>
</h4> </div>
                            <div class="col-md-6">  <h4>Stato trattamento: <?php if ($_smarty_tpl->tpl_vars['trattamento']->value['estado']=="1") {?><label class="label label-primary"><i class="fa fa-fw fa-clock-o"></i> In attessa di valutazione dal medico</label><?php } elseif ($_smarty_tpl->tpl_vars['trattamento']->value['estado']=="2") {?><label class="label label-danger"><i class="fa fa-fw fa-times"></i> Trattamento rifiutato</label><?php } elseif ($_smarty_tpl->tpl_vars['trattamento']->value['estado']>"3") {?><label class="label label-success"><i class="fa fa-fw fa-check"></i> Trattamento accettato</label><?php }?> </h4> </div>
                            <?php if ($_smarty_tpl->tpl_vars['trattamento']->value['estado']>"3") {?> <div class="col-md-6"> <h4>Stato pagamento : <?php if ($_smarty_tpl->tpl_vars['trattamento']->value['fkStatoPagamento']=='1') {?><label class="label label-primary"><i class="fa fa-fw fa-clock-o"></i> In attesa di pagamento</label><?php }?><?php if ($_smarty_tpl->tpl_vars['trattamento']->value['fkStatoPagamento']=='2') {?><label class="label label-primary"><i class="fa fa-fw fa-dollar"></i> Prima frazione pagata</label><?php }?><?php if ($_smarty_tpl->tpl_vars['trattamento']->value['fkStatoPagamento']>'2') {?><label class="label label-success"><i class="fa fa-fw fa-check"></i> Pagato</label><?php }?></h4> </div><?php }?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['trattamento']->value['notas'])) {?>
                                
                            <div class="col-md-12 alert alert-info m-t-20">
                                <h4>Note dal medico:</h4>
                                <p><?php echo $_smarty_tpl->tpl_vars['trattamento']->value['notas'];?>
</p>
                            </div>
                            <br>
                            <?php }?>
                            <div class="clearfix"></div><br>
                                                     <div class="col-md-6">
                    <div class="panel panel-border panel-primary">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Mascherine </h3> 
                        </div> 
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class='list-group-item'>Numero Mascherine Totali Superiori: <span class="badge badge-pink text-big"><?php echo $_smarty_tpl->tpl_vars['trattamento']->value['masSup'];?>
</span></li>
                                <li class='list-group-item'>Numero Mascherine Totali Inferiori: <span class="badge badge-pink text-big"><?php echo $_smarty_tpl->tpl_vars['trattamento']->value['masInf'];?>
</span></li>
                                <li class='list-group-item'>Numero Mascherine Totali: <span class="badge badge-pink text-big"><?php echo $_smarty_tpl->tpl_vars['trattamento']->value['masSup']+$_smarty_tpl->tpl_vars['trattamento']->value['masInf'];?>
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
                                <li class='list-group-item'>Numero Mascherine bis Totali Superiori: <span class="badge badge-pink text-big"><?php if (empty($_smarty_tpl->tpl_vars['trattamento']->value['masSupBis'])) {?>0<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['trattamento']->value['masSupBis'];?>
<?php }?></span></li>
                                <li class='list-group-item'>Numero Mascherine bis Totali Inferiori: <span class="badge badge-pink text-big"><?php if (empty($_smarty_tpl->tpl_vars['trattamento']->value['masInfBis'])) {?>0<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['trattamento']->value['masInfBis'];?>
<?php }?></span></li>
                                <li class='list-group-item'>Numero Mascherine bis Totali: <span class="badge badge-pink text-big"><?php echo $_smarty_tpl->tpl_vars['trattamento']->value['masSupBis']+$_smarty_tpl->tpl_vars['trattamento']->value['masInfBis'];?>
</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                        

                                           
<?php if (!isset($_smarty_tpl->tpl_vars['primo']->value)) {?>
                                <div class="col-md-12">
                    <div class="panel panel-border panel-primary">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Soluzione Unica</h3> 
                        </div> 
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class='list-group-item'><?php echo $_smarty_tpl->tpl_vars['prez']->value['description'];?>
: <span class="pull-right text-big"><small><?php echo $_smarty_tpl->tpl_vars['trattamento']->value['masSup']+$_smarty_tpl->tpl_vars['trattamento']->value['masInf'];?>
 x </small><?php echo number_format($_smarty_tpl->tpl_vars['prez']->value['prezzo'],2,",",".");?>
 &euro;</span></li>
                                <li class='list-group-item'>Acconto prescrizione: <span class="pull-right text-big">- <?php echo number_format($_smarty_tpl->tpl_vars['acconto']->value,2,",",".");?>
 &euro;</span></li>
                              <?php if ($_SESSION['utente']['IVASINO']) {?>  <li class='list-group-item penultimo'>IVA: <span class="pull-right text-big"> 22% <?php echo $_smarty_tpl->tpl_vars['trattamento']->value['prezzoTot']*number_format((0.22),2,",",".");?>
 &euro;</span></li><?php }?>
                                <li class='list-group-item ultimo'><strong>Prezzo totale:</strong> <span class="pull-right text-bigo"><?php echo number_format($_smarty_tpl->tpl_vars['trattamento']->value['prezzoTot'],2,",",".");?>
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
                               <?php if ($_SESSION['utente']['IVASINO']) {?> <li class='list-group-item penultimo'>IVA: <span class="pull-right text-big"> (22%) <?php echo smarty_function_math(array('equation'=>"x*y",'x'=>$_smarty_tpl->tpl_vars['prezzo']->value,'y'=>0.22,'format'=>"%.2f"),$_smarty_tpl);?>
 &euro;</span></li><?php }?>
                                <li class='list-group-item ultimo'><strong>Prezzo totale unica soluzione:</strong> <span class="pull-right text-bigo"><strong id='preciaco'><?php echo smarty_function_math(array('equation'=>"x*y",'x'=>$_smarty_tpl->tpl_vars['prezzo']->value,'y'=>1.22,'format'=>"%.2f"),$_smarty_tpl);?>
</strong> &euro;</span></li>
                                
                            </ul>
                                
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
                                <li class='list-group-item '>Acconto prescrizione: <span class="pull-right text-big">- <?php echo number_format($_smarty_tpl->tpl_vars['acconto']->value,2,",",".");?>
 &euro;</span></li>
                               <?php if ($_SESSION['utente']['IVASINO']) {?> <li class='list-group-item penultimo'>IVA: <span class="pull-right text-big"> (22%) <?php echo smarty_function_math(array('equation'=>"x*y",'x'=>$_smarty_tpl->tpl_vars['precioprimo']->value,'y'=>0.22,'format'=>"%.2f"),$_smarty_tpl);?>
 &euro;</span></li><?php }?>
                                <li class='list-group-item ultimo'><strong>Prezzo totale primo frazionamento:</strong> <span class="pull-right text-bigo"><strong id='preciaco2'><?php echo smarty_function_math(array('equation'=>"x*y",'x'=>$_smarty_tpl->tpl_vars['precioprimo']->value,'y'=>1.22,'format'=>"%.2f"),$_smarty_tpl);?>
</strong> &euro;</span></li>
                                
                            </ul>
                       
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
                                 <?php if ($_SESSION['utente']['IVASINO']) {?><li class='list-group-item penultimo'>IVA: <span class="pull-right text-big"> (22%) <?php echo smarty_function_math(array('equation'=>"x*y",'x'=>$_smarty_tpl->tpl_vars['segundafrac']->value,'y'=>0.22,'format'=>"%.2f"),$_smarty_tpl);?>
 &euro;</span></li><?php }?>
                                 <li class='list-group-item ultimo'><strong>Prezzo totale secondo frazionamento:</strong> <span class="pull-right text-bigo"> <strong id='preciaco3'><?php echo smarty_function_math(array('equation'=>"x*y",'x'=>$_smarty_tpl->tpl_vars['segundafrac']->value,'y'=>1.22,'format'=>"%.2f"),$_smarty_tpl);?>
</strong> &euro;</span></li>
                                
                            </ul>
                            
                        </div>
                    </div>
                </div>
                           <?php }?>  
                            <div class="clearfix"></div>
                         
                  <?php if ($_smarty_tpl->tpl_vars['trattamento']->value['estado']!="2") {?>              
                                
                                   <?php if ($_SESSION['utente']['idRuoloUtente']==@constant('AMMINISTRATORE')) {?> 
                            <div class="pull-right"><a href="ordini.php" class="btn btn-lg btn-danger btn-perspective waves-effect waves-light">Torna Indietro</a> </div>
                            <?php } else { ?>
                                <hr>
                                <form method="POST" action="trattamenti.php" id="formulario">
                                    <input type="hidden" name="decision" id="decision" value="false">
                                    <input type="hidden" name="idOrdine" value="<?php echo $_smarty_tpl->tpl_vars['trattamento']->value['idTrattamento'];?>
">
                                    <input type="hidden" name="pastaunica" value="true">
                                    <input type="hidden" name="fraccionado" value="false">
                                    <?php if (isset($_smarty_tpl->tpl_vars['primo']->value)) {?><div class="form-group">
                                            <label>Forma di pagamento</label>
                                            <select class="form-control input-lg" name="pago"><option value="todo">Soluzione unica</option><option value="frac">Pago frazionato</option></select>
                                        </div><?php }?>
                                 <div class="col-md-12">
                                    <h4>Note:</h4>
                                    <textarea class="form-control" name="note" rows="6"></textarea>
                                </div>
                                <div class="clearfix"></div>
                                <p>&nbsp;</p>
                                <div class="pull-right"><a href="ordini.php" class="btn btn-lg btn-primary btn-perspective waves-effect waves-light"><i class="fa fa-fw fa-backward"></i> Torna indietro</a> <button id="negativo" class="btn btn-lg btn-danger btn-perspective waves-effect waves-light"><i class="fa fa-fw fa-times"></i> Rifiuta trattamento</button> <button type="button" onclick="daleCana()" id="positivo" class="btn btn-lg btn-success btn-perspective waves-effect waves-light"><i class="fa fa-fw fa-check"></i> Accetta trattamento e avvia il pagamento</button></div>
                                </form>
                            <?php }?>
                          <?php }?>       
                        </div>
                    </div>
                </div>
                                        </div>
                                                </div>
                                            </div>
                            

                         </div>
                          
                                                <?php echo $_smarty_tpl->getSubTemplate ("footer_modifica_3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
