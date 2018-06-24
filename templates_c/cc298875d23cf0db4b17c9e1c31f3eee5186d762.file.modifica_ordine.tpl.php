<?php /* Smarty version Smarty-3.1.19, created on 2016-02-18 11:52:16
         compiled from "./templates/modifica_ordine.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127013286156572631c9b7d1-45005444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc298875d23cf0db4b17c9e1c31f3eee5186d762' => 
    array (
      0 => './templates/modifica_ordine.tpl',
      1 => 1455792733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127013286156572631c9b7d1-45005444',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56572631e13e60_95078561',
  'variables' => 
  array (
    'error' => 0,
    'oOrdine' => 0,
    'dientes' => 0,
    'value' => 0,
    'cuenta' => 0,
    'prodotti' => 0,
    'total' => 0,
    'trattamento' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56572631e13e60_95078561')) {function content_56572631e13e60_95078561($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/beecloud.it/easysmile.beecloud.it/panel/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/vhosts/beecloud.it/easysmile.beecloud.it/panel/libs/plugins/function.cycle.php';
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
                        <div class="panel-heading"><h3 class="panel-title">Codice Prescrizione - <?php if (isset($_smarty_tpl->tpl_vars['oOrdine']->value['codice'])) {?><?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['codice'];?>
<?php }?> </h3></div>
                        <div class="panel-body">
                            <div class='col-md-12'>
                                <div class="progress">
                                    <div class="progress-bar progress-lg progress-bar-primary progress-bar-striped progress-animated wow animated" role="progressbar" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100" style="width:<?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==1) {?>25<?php }?><?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==2) {?>50<?php }?><?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==3) {?>75<?php }?><?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==4) {?>90<?php }?><?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==5) {?>90<?php }?><?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==7) {?>100<?php }?>%">
                                        <span class="sr-only"><?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==1) {?>In atessa di pagamento<?php }?><?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==2) {?>In attesa di evasione<?php }?><?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==3) {?>Spedito<?php }?><?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==4) {?>Completato<?php }?> <?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==5) {?>In attesa di pagamento per il trattamento<?php }?><?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==5) {?>Trattamento completato<?php }?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix">

                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="pull-left m-t-30">
                                            <h4>
                                                <strong>Paziente</strong>: <?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['nomePaziente'];?>
 <?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['cognomePaziente'];?>

                                            </h4>
                                            <hr><?php $_smarty_tpl->tpl_vars["dientes"] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['oOrdine']->value['denti']), null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['cuenta'] = new Smarty_variable(0, null, 0);?>
                                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['value']->iteration++;
 $_smarty_tpl->tpl_vars['value']->last = $_smarty_tpl->tpl_vars['value']->iteration === $_smarty_tpl->tpl_vars['value']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['last'] = $_smarty_tpl->tpl_vars['value']->last;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['value']->value<30) {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['cuenta']->value==0) {?>
                                                        <h4>Lista denti arcata superiore: <?php }?>
                                                            <?php $_smarty_tpl->tpl_vars['cuenta'] = new Smarty_variable(1, null, 0);?><label class="label label-pink"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</label> 
                                                            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['last']) {?> </h4> <?php }?>   
                                                        <?php }?>

                                                    <?php } ?>
                                                        <?php $_smarty_tpl->tpl_vars['cuenta'] = new Smarty_variable(0, null, 0);?>
                                                        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['value']->iteration++;
 $_smarty_tpl->tpl_vars['value']->last = $_smarty_tpl->tpl_vars['value']->iteration === $_smarty_tpl->tpl_vars['value']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['last'] = $_smarty_tpl->tpl_vars['value']->last;
?>
                                                            <?php if ($_smarty_tpl->tpl_vars['value']->value>30) {?>
                                                                <?php if ($_smarty_tpl->tpl_vars['cuenta']->value==0) {?>
                                                                    <h4>Lista denti arcata inferiore: <?php }?><?php $_smarty_tpl->tpl_vars['cuenta'] = new Smarty_variable(1, null, 0);?> <label class="label label-pink"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</label> 
                                                                        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['last']) {?> </h4> <?php }?>   
                                                                    <?php }?>
                                                                    <?php } ?>

                                                                        <br><br>
                                                                        <?php if (isset($_smarty_tpl->tpl_vars['oOrdine']->value['foto'])&&!empty($_smarty_tpl->tpl_vars['oOrdine']->value['foto'])) {?><a download="arcate.jpg" href="/panel/images/prescrizioni/<?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['foto'];?>
" class="btn btn-lg btn-primary btn-perspective waves-effect waves-light">Vedi foto delle arcate <i class="fa fa-fw fa-picture-o"></i></a><?php }?>
                                                                </div>




                                                                <div class="pull-right m-t-30">
                                                                    <address>
                                                                        Indirizzo Spedizione:<br>
                                                                        <strong><?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['cognome'];?>
</strong><br>
                                                                        <?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['indirizzo'];?>
 <?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['numero'];?>
<br>
                                                                        <?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['citta'];?>
 <?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['cap'];?>
, <?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['provincia'];?>

                                                                        <?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['regione'];?>
<br>
                                                                    </address>
                                                                    <hr>
                                                                    <p><strong>Data apertura: </strong> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oOrdine']->value['dataApertura']," %e %B  %Y - %H:%M");?>
</p>
                                                                <?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['dataAggiornamento']!='0000-00-00 00:00:00') {?>     <p><strong>Data aggiornamento: </strong><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oOrdine']->value['dataAggiornamento']," %e %B  %Y - %H:%M");?>
</p><?php }?>
                                                                    <p><strong>Stato Ordine: </strong> <span class="label label-pink"><?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==1) {?>In atessa di pagamento<?php }?><?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==2) {?>In attesa di ricezione<?php }?><?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==3) {?>Spedito<?php }?><?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==4) {?>Proposta di trattamento in valutazione<?php }?><?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']>5) {?>Trattamento accettato<?php }?></span></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                                <?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']>5) {?><?php } else { ?>
                                                        <div class="m-h-50"></div>
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['oOrdine']->value['cera'])||!empty($_smarty_tpl->tpl_vars['oOrdine']->value['superiore'])||!empty($_smarty_tpl->tpl_vars['oOrdine']->value['inferiore'])) {?>
                                                            <div class="col-md-12 alert alert-warning">
                                                                <h4>Si invia:</h4><ul>
                                                                    <?php if (!empty($_smarty_tpl->tpl_vars['oOrdine']->value['cera'])) {?><li>Cera centrica</li><?php }?>
                                                                    <?php if (!empty($_smarty_tpl->tpl_vars['oOrdine']->value['superiore'])) {?><li>Impronta superiore</li><?php }?>
                                                                    <?php if (!empty($_smarty_tpl->tpl_vars['oOrdine']->value['inferiore'])) {?><li>Impronta inferiore</li><?php }?>
                                                                </ul>
                                                            </div>
                                                        <?php }?>
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['oOrdine']->value['note'])) {?>
                                                            <div class="col-md-12 alert alert-info">
                                                                <h4>Note dal medico:</h4><?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['note'];?>

                                                            </div>
                                                        <?php }?>
                                                        
                                                        <?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==1) {?> 
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="table-responsive">
                                                                        <table class="table m-t-30">
                                                                            <thead>
                                                                                <tr><th>#</th>
                                                                                    <th>Prodotto</th>
                                                                                    <th>Descrizione</th>
                                                                                    <th>Quantit&agrave;</th>
                                                                                    <th>Prezzo</th>
                                                                                    <th>Totale</th>
                                                                                </tr></thead>
                                                                            <tbody>
                                                                                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['prodotti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                                                                                    <tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">

                                                                                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['idProdotto'];?>
</td>
                                                                                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['nome'];?>
</td>
                                                                                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['description'];?>
 <?php if ($_smarty_tpl->tpl_vars['value']->value['idProdotto']=='1') {?>- Codice: <?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['codice'];?>
<?php }?></td>
                                                                                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['quantita'];?>
</td>

                                                                                        <td>
                                                                                            <?php echo number_format($_smarty_tpl->tpl_vars['value']->value['prezzo'],2,",",".");?>
&euro;
                                                                                        </td>
                                                                                        <td><?php echo smarty_function_math(array('assign'=>'total','equation'=>"x * y",'x'=>$_smarty_tpl->tpl_vars['value']->value['quantita'],'y'=>$_smarty_tpl->tpl_vars['value']->value['prezzo']),$_smarty_tpl);?>
 <?php echo number_format($_smarty_tpl->tpl_vars['total']->value,2,",",".");?>
&euro;</td>
                                                                                    </tr>
                                                                                <?php } ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row" style="border-radius: 0px;">
                                                                <div class="col-md-3 col-md-offset-9">
                                                                    <hr>
                                                                    <h3 class="text-right">Totale: <?php echo number_format($_smarty_tpl->tpl_vars['oOrdine']->value['prezzo'],2,",",".");?>
&euro;</h3>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix">

                                                            </div>
                                                            <p><hr></p>
                                                        <?php } else { ?>
                                                            
                                                            <?php if (!empty($_smarty_tpl->tpl_vars['oOrdine']->value['dataRitiro'])) {?>
                                                                <div class="col-md-2 alert alert-warning">
                                                                    <h4>Data ritiro: </h4><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oOrdine']->value['dataRitiro']," %e %B  %Y ");?>

                                                                </div>
                                                            <?php }?>
                                                            <?php if (!empty($_smarty_tpl->tpl_vars['oOrdine']->value['noteCorriere'])) {?>
                                                                <div class="col-md-offset-1 col-md-9 alert alert-warning">
                                                                    <h4>Note per il corriere:</h4><?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['noteCorriere'];?>

                                                                </div>
                                                            <?php }?>
                                                            <div class="clearfix"></div>
                                                            <?php if ($_SESSION['utente']['idRuoloUtente']==@constant('AMMINISTRATORE')&&$_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']=="3") {?> 
                                                                <hr>
                                                                <h3>Proposta di trattamento</h3>
                                                                <br>
                                                                <form method="POST" class="form" name="trattamento" action="ordini.php" enctype="multipart/form-data">
                                                                    <input type="hidden" name="idOrdine" value="<?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['idOrdine'];?>
"> <input type="hidden" name="trattamento" value="true">
                                                               
                                                                    <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        
                                                                        <label>Caricare il File CAD</label>
                                                                        
                                                        <div class="input-group">
                                                            <input type="file" class="input-lg form-control" name="file">
                                                            
                                                            </div>
                                                       
                                                    </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        
                                                                        <label>Numero mascherine superiori</label>
                                                                        <div class="spinner">
                                                        <div class="input-group">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-up btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                            <input type="text" class="spinner-input form-control" maxlength="3" name="massup">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-down btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Numero mascherine inferiori</label>
                                                                        <div class="spinner">
                                                        <div class="input-group">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-up btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                            <input type="text" class="spinner-input form-control" maxlength="3" name="masinf" >
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-down btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Numero mascherine <strong>bis</strong> superiori</label>
                                                                        <div class="spinner">
                                                        <div class="input-group">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-up btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                            <input type="text" class="spinner-input form-control" maxlength="3" name="massupbis">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-down btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Numero mascherine <strong>bis</strong> inferiori</label>
                                                                        <div class="spinner">
                                                        <div class="input-group">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-up btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                            <input type="text" class="spinner-input form-control" maxlength="3" name="masinfbis" >
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-down btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                        <input type="hidden" name="idOrdine" value="<?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['codice'];?>
">
                                                                    </div>
                                                                </div>





<div class="clearfix"></div>
                                                            <?php }?>
                                                            <p><hr></p>
                                                            

                                                        <?php }?>

                                                        <?php if ($_SESSION['utente']['idRuoloUtente']==@constant('AMMINISTRATORE')) {?> 
                                                            <div class="hidden-print">
                                                                <div class="pull-right">
                                                                  <?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']=="3") {?>  <button class="btn btn-lg btn-primary waves-effect waves-light">Genera il riepilogo del trattamento <i class="fa fa-fw fa-file-text-o"></i></button><?php }?>
                                                                  <?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']=="2") {?>  <a href="ordini.php?task=stato&id=<?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['idOrdine'];?>
&status=3" class="btn btn-lg btn-primary waves-effect waves-light">Prescrizione Ricevuta <i class="fa fa-fw fa-check"></i></a><?php }?>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <?php } else { ?><div class="hidden-print">
                                                                <div class='col-md-12'>
                                                                    
                                                                        </div>

                                                                    </div><?php }?>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                         <?php }?>                
<?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==4||$_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==5||$_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==6) {?>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading"><h3 class="panel-title">File CAD della prescrizione <?php if (isset($_smarty_tpl->tpl_vars['oOrdine']->value['codice'])) {?><?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['codice'];?>
<?php }?></h3></div>
                                                        <div class="panel-body">
                                                            <div class='col-md-12'>
                                                                <table class="table table-striped table-hover" id="datatable">
                                                                    <thead class="the-box dark full">
                                                                        <tr>
                                                                            <th>Data inserimento</th>
                                                                            <th>Stato della proposta</th>
                                                                            <th>Data revisione</th>
                                                                            <th>Note del medico</th>
                                                                            <th>Azioni</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['trattamento']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                                                                            <tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                                                                                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['fechaApertura'],"%d/%m/%Y %H:%M");?>
</td>
                                                                                <td><?php if ($_smarty_tpl->tpl_vars['value']->value['estado']=='1') {?><label class='label label-primary'><i class="fa fa-fw fa-clock-o"></i> IN ATTESA VALUTAZIONE MEDICO</label><?php }?><?php if ($_smarty_tpl->tpl_vars['value']->value['estado']=='2') {?><label class='label label-danger'><i class="fa fa-fw fa-times"></i> TRATTAMENTO RIFIUTATO</label><?php }?><?php if ($_smarty_tpl->tpl_vars['value']->value['estado']=='3') {?><label class='label label-success'><i class="fa fa-fw fa-check"></i> TRATTAMENTO ACCETTATO IN ATTESA DI PAGAMENTO</label><?php }?><?php if ($_smarty_tpl->tpl_vars['value']->value['estado']=='4') {?><label class='label label-success'><i class="fa fa-fw fa-check"></i> TRATTAMENTO PAGATO</label><?php }?><?php if ($_smarty_tpl->tpl_vars['value']->value['estado']=='5') {?><label class='label label-primary'><i class="fa fa-fw fa-euro"></i> IN ATTESA PAGO PRIMO FRAZIONAMENTO</label><?php }?></td>
                                                                                <td><?php if (!empty($_smarty_tpl->tpl_vars['value']->value['fechaActualizacion'])) {?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['fechaActualizacion'],"%d/%m/%Y %H:%M");?>
<?php } else { ?>N/A<?php }?></td>
                                                                                <td><?php if (!empty($_smarty_tpl->tpl_vars['value']->value['notas'])) {?><?php echo $_smarty_tpl->tpl_vars['value']->value['notas'];?>
<?php } else { ?>-<?php }?></td>                                                                  
                                                                                <td class="center"><?php if ($_smarty_tpl->tpl_vars['value']->value['estado']!='0') {?><?php if ($_smarty_tpl->tpl_vars['value']->value['estado']=='3'||$_smarty_tpl->tpl_vars['value']->value['estado']=='5') {?><a class="btn btn-xs btn-perspective btn-success waves-effect waves-light" href="trattamenti.php?task=trattamento&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['idTrattamento'];?>
"><i class="fa fa-fw fa-euro"></i> Avvia pagamento</a><?php } else { ?><a class="btn btn-xs btn-perspective btn-primary waves-effect waves-light" href="trattamenti.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['idTrattamento'];?>
"><i class="fa fa-fw fa-pencil"></i> Vedi trattamento</a><?php }?><?php }?> <a class="btn btn-xs btn-perspective btn-primary waves-effect waves-light" href="images/prescrizioni/<?php echo $_smarty_tpl->tpl_vars['value']->value['cad'];?>
"><i class="fa fa-fw fa-file-image-o"></i> Vedi FILE CAD</a> </td>
                                                                               
                                                                            </tr>
                                                                        <?php } ?>
                                                                    </tbody>
                                                                </table>
                                                                <hr>
                                                                <?php if ($_SESSION['utente']['idRuoloUtente']==@constant('AMMINISTRATORE')) {?>       <div class="hidden-print">
                                                                        <div class="pull-right">
                                                                            <a href="javascript:;" class="md-trigger btn btn-primary waves-effect waves-light" data-modal="modal-16">Aggiungi File CAD <i class="fa fa-plus"></i></a>
                                                                        </div>
                                                                    </div><?php }?>
                                                                </div>
                                                            </div>
                                                        </div></div></div>
                                                                
                                                                </div>
                                                                <div class="md-modal md-effect-16" id="modal-16" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="md-content">
                                            <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="myModalLabel">Aggiungi proposta di trattamento</h4>
                                                    </div>
                                            <div>
                                                <form method="POST" class="form" name="trattamento" action="ordini.php" enctype="multipart/form-data">
                                                                    <input type="hidden" name="idOrdine" value="<?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['idOrdine'];?>
"> <input type="hidden" name="trattamento" value="true">
                                                                    <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        
                                                                        <label>Caricare il File CAD</label>
                                                                        
                                                        <div class="input-group">
                                                            <input type="file" class="input-lg form-control" name="file">
                                                            
                                                            </div>
                                                       
                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        
                                                                        <label>Numero mascherine superiori</label>
                                                                        <div class="spinner">
                                                        <div class="input-group">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-up btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                            <input type="text" class="spinner-input form-control" maxlength="3" name="massup">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-down btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Numero mascherine inferiori</label>
                                                                        <div class="spinner">
                                                        <div class="input-group">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-up btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                            <input type="text" class="spinner-input form-control" maxlength="3" name="masinf" >
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-down btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Numero mascherine <strong>bis</strong> superiori</label>
                                                                        <div class="spinner">
                                                        <div class="input-group">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-up btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                            <input type="text" class="spinner-input form-control" maxlength="3" name="massupbis">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-down btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Numero mascherine <strong>bis</strong> inferiori</label>
                                                                        <div class="spinner">
                                                        <div class="input-group">
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-up btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-plus"></i>
                                                                </button>
                                                            </div>
                                                            <input type="text" class="spinner-input form-control" maxlength="3" name="masinfbis" >
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn spinner-down btn-primary waves-effect waves-light">
                                                                    <i class="fa fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                        <input type="hidden" name="idOrdine" value="<?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['codice'];?>
">
                                                                    </div>
                                                                </div>
                                                                    <div class="col-md-12">
                                                                        <hr>
                                                                     <div class="pull-right">
                                                                         <a href="ordini.php" class="btn btn-lg btn-danger waves-effect waves-light">Torna indietro</a>
                                                <button class="btn btn-lg btn-primary waves-effect waves-light" type="submit">Invia</button>
                                                                    </div>
                                                                    </div>
                                                </form>
                                                                    <div class="clearfix"><br><br></div>
                                            </div>
                                        </div>
                                    </div>
                                                                    <div class="md-overlay"></div><!-- the overlay element -->
                                                 <?php }?>              
<p><a href="ordini.php" class="btn btn-lg btn-danger waves-effect waves-light"><i class="fa fa-backward"></i> Torna indietro</a></p>
                                                <?php echo $_smarty_tpl->getSubTemplate ("footer_modifica_3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
