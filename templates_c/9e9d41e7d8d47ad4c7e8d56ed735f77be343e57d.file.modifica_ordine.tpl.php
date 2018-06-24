<?php /* Smarty version Smarty-3.1.19, created on 2015-10-19 20:57:31
         compiled from "./templates/modifica_ordine.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14270512555f2ee029da123-86090747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e9d41e7d8d47ad4c7e8d56ed735f77be343e57d' => 
    array (
      0 => './templates/modifica_ordine.tpl',
      1 => 1445281048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14270512555f2ee029da123-86090747',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55f2ee02a7bca5_18548718',
  'variables' => 
  array (
    'oOrdine' => 0,
    'error' => 0,
    'dientes' => 0,
    'value' => 0,
    'medici' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f2ee02a7bca5_18548718')) {function content_55f2ee02a7bca5_18548718($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/intervolutions.com/pruebas.intervolutions.com/alfaone/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/vhosts/intervolutions.com/pruebas.intervolutions.com/alfaone/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_math')) include '/var/www/vhosts/intervolutions.com/pruebas.intervolutions.com/alfaone/libs/plugins/function.math.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


 <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Dettaglio Ordine</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home_amministratore.php">BackOffice</a></li>
                                    <li><a href="ordini.php">Ordini</a></li>
                                    <li class="active">Dettaglio Ordine <?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['idOrdine'];?>
</li>
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
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Codice Ordine - <?php if (isset($_smarty_tpl->tpl_vars['oOrdine']->value['codice'])) {?><?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['codice'];?>
<?php }?> </h3></div>
                            <div class="panel-body">
                                <div class='col-md-12'>
                                    <div class="progress">
                                            <div class="progress-bar progress-bar-pink progress-bar-striped progress-animated wow animated" role="progressbar" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100" style="width:<?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==1) {?>25<?php }?><?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==2) {?>50<?php }?><?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==3) {?>75<?php }?><?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==4) {?>100<?php }?>%">
                                                <span class="sr-only"><?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==1) {?>In atessa di pagamento<?php }?><?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==2) {?>In attesa di evasione<?php }?><?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==3) {?>Spedito<?php }?><?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==4) {?>Completato<?php }?></span>
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
                                                <hr>
                                                     <h4>Lista denti arcata superiore: <?php $_smarty_tpl->tpl_vars["dientes"] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['oOrdine']->value['denti']), null, 0);?>
                                                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?><?php if ($_smarty_tpl->tpl_vars['value']->value<30) {?><label class="label label-pink"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
 </label> &nbsp;<?php }?><?php } ?>
                                                </h4>
                                                <h4>Lista denti arcata inferiore: 
                                                     <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?><?php if ($_smarty_tpl->tpl_vars['value']->value>30) {?><label class="label label-pink"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
 </label> &nbsp;<?php }?><?php } ?>
                                                </h4> 
                                                 
                                                
        
        
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
                                                    <p><strong>Data aggiornamento: </strong> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oOrdine']->value['dataAggiornamento']," %e %B  %Y - %H:%M");?>
</p>
                                                    <p><strong>Stato Ordine: </strong> <span class="label label-pink"><?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==1) {?>In atessa di pagamento<?php }?><?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==2) {?>In attesa di evasione<?php }?><?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==3) {?>Spedito<?php }?><?php if ($_smarty_tpl->tpl_vars['oOrdine']->value['fkStatoOrdini']==4) {?>Completato<?php }?></span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-h-50"></div>
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
                                                            <th>Total</th>
                                                        </tr></thead>
                                                        <tbody>
                                                            
								<tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                                                                   
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['idProdotto'];?>
</td>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['product'];?>
</td>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['description'];?>
 </td>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['quantita'];?>
</td>
                                                                    
									<td>
                                                                            <?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['precio'];?>
&euro;
                                                                        </td>
                                                                        <td><?php echo smarty_function_math(array('equation'=>"x * y",'x'=>$_smarty_tpl->tpl_vars['oOrdine']->value['quantita'],'y'=>$_smarty_tpl->tpl_vars['oOrdine']->value['precio']),$_smarty_tpl);?>
&euro;</td>
								</tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="border-radius: 0px;">
                                            <div class="col-md-3 col-md-offset-9">
                                                <p class="text-right"><b>Sub-total:</b> <?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['prezzo'];?>
&euro;</p>
                                                <p class="text-right">Coupon: 22%</p>
                                                <p class="text-right">IVA: 22%</p>
                                                <hr>
                                                <h3 class="text-right"><?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['prezzo'];?>
&euro;</h3>
                                            </div>
                                        </div>
                                             <?php if ($_SESSION['utente']['idRuoloUtente']==@constant('AMMINISTRATORE')) {?> 
                                        <hr>
                                        <div class="hidden-print">
                                            <div class="pull-right">
                                                <a href="#" class="btn btn-primary waves-effect waves-light">Modifica</a>
                                            </div>
                                        </div>
                                        <?php }?>
                                    </div>
              
                                
                            </div>
                        </div>
                    </div>
                                              <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">File CAD della prescrizione / ordine nº<?php if (isset($_smarty_tpl->tpl_vars['oOrdine']->value['idOrdine'])) {?><?php echo $_smarty_tpl->tpl_vars['oOrdine']->value['idOrdine'];?>
<?php }?></h3></div>
                            <div class="panel-body">
                                <div class='col-md-12'>
                                    <table class="table table-striped table-hover" id="datatable">
							<thead class="the-box dark full">
								<tr>
									<th>Data inserimento</th>
                                                                        <th>Stato del File CAD</th>
                                                                        <th>Data visione</th>
									<th>Note del medico</th>
                                                                        <th>Azioni</th>
								</tr>
							</thead>
							<tbody>
                                                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['medici']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
								<tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['cognome'];?>
</td>
                                                                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['dataNascita'],"%D");?>
</td>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['codiceFiscale'];?>
</td>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['indirizzo'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['sesso'];?>
</td>                                                                       
								
                                                                        <td class="center"> <?php if ($_smarty_tpl->tpl_vars['value']->value['stato']==1) {?><span class="btn btn-xs btn-danger"><i class="fa fa-fw fa-times-circle"></i> NON ATTIVO</span><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['value']->value['active']==0) {?><span class="btn btn-xs btn-danger"><i class="fa fa-fw fa-times-circle"></i> NON ATTIVO</span><?php } else { ?><span class="btn btn-xs btn-success"><i class="fa fa-fw fa-check-circle"></i> ATTIVO</span><?php }?><?php }?></td>
                                                                        <td><?php if ($_smarty_tpl->tpl_vars['value']->value['stato']==0) {?><a href="pazienti.php?cancella=<?php echo $_smarty_tpl->tpl_vars['value']->value['fkUtente'];?>
" class="btn btn-danger btn-perspective btn-xs">Cancella <i class="fa fa-trash-o"></i> </a><?php } else { ?><a href="pazienti.php?ripristina=<?php echo $_smarty_tpl->tpl_vars['value']->value['fkUtente'];?>
" class="btn btn-primary btn-perspective btn-xs">Ripristina <i class="fa fa-refresh"></i> </a><?php }?> <?php if ($_smarty_tpl->tpl_vars['value']->value['stato']==0) {?><?php if ($_smarty_tpl->tpl_vars['value']->value['active']==0) {?><a href="pazienti.php?attiva=<?php echo $_smarty_tpl->tpl_vars['value']->value['fkUtente'];?>
" class="btn btn-primary btn-perspective btn-xs">Attiva <i class="fa fa-unlock"></i></a><?php } else { ?><a href="pazienti.php?disattiva=<?php echo $_smarty_tpl->tpl_vars['value']->value['fkUtente'];?>
" class="btn btn-danger btn-perspective btn-xs">Disattiva <i class="fa fa-lock"></i></a> <?php }?><?php }?> <a href="pazienti.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['fkUtente'];?>
" class="btn btn-primary btn-perspective btn-xs">Modifica <i class="fa fa-pencil"></i></a></td>
								</tr>
                                                            <?php } ?>
							</tbody>
						</table>
                                                                                                <hr>
                                        <div class="hidden-print">
                                            <div class="pull-right">
                                                <a href="#" class="btn btn-primary waves-effect waves-light">Aggiungi File CAD <i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            </div></div></div></div>
                                  
<?php echo $_smarty_tpl->getSubTemplate ("footer_modifica_3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
