<?php /* Smarty version Smarty-3.1.19, created on 2014-10-30 16:10:04
         compiled from "./templates/aggiunge_ereferral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1272902008544770390af667-58056429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c5233712d14722ff4769114d4f1341c3eadfee9' => 
    array (
      0 => './templates/aggiunge_ereferral.tpl',
      1 => 1414681802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1272902008544770390af667-58056429',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544770390f0323_02152676',
  'variables' => 
  array (
    'error' => 0,
    'paziente' => 0,
    'clinico' => 0,
    'id' => 0,
    'examenes' => 0,
    'arrEsami' => 0,
    'value' => 0,
    'arrAltriEsami' => 0,
    'centro' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544770390f0323_02152676')) {function content_544770390f0323_02152676($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/ereferral/svn.ereferral.it/trunk/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/ereferral/svn.ereferral.it/trunk/libs/plugins/function.cycle.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="page-content">

        <div class="container-fluid">
            
            
            <h1 class="page-heading">Aggiungere eReferral</h1>
                <div class="the-box" style="min-height: 540px;">
                    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                            <div class="alert alert-danger alert-bold-border animated flash fade in">
                                <i class="fa fa-fw fa-5x fa-exclamation-circle text-danger" style="float:right;"></i>
                                   <strong>Si sono verificati i seguenti errori:<br>
                                       <span class="text-danger"><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php }?></span></strong>
                           </div>
                    <?php }?>
    <h2><?php echo $_smarty_tpl->tpl_vars['paziente']->value->nome;?>
 <?php echo $_smarty_tpl->tpl_vars['paziente']->value->cognome;?>
 <span class="mutado"> Status: <?php if (($_smarty_tpl->tpl_vars['paziente']->value->status==0)) {?><i class="fa fa-fw fa-check-cross text-danger"></i><?php } else { ?><i class="fa fa-fw fa-check-circle text-success"></i><?php }?></span></h2>
    
    <hr>
    <span class="legendario">Anagrafe</span>
    <div class="clearfix" style="margin-top: -25px;"></div>
        <div class="col-md-6"><p class="bordereda"><strong>Data di Nascita:</strong> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['paziente']->value->dataNascita,"%d/%m/%y");?>
 </p></div>
        <div class="col-md-6"><p class="bordereda"><strong>e-Mail:</strong> <?php echo $_smarty_tpl->tpl_vars['paziente']->value->email;?>
</p></div>
        <div class="col-md-6"><p class="borderedo"><strong>Telefono:</strong> <?php echo $_smarty_tpl->tpl_vars['paziente']->value->telefono;?>
</p></div>
        <div class="col-md-6"><p class="borderedo"><strong>Indirizzo Domicilio:</strong> <?php echo $_smarty_tpl->tpl_vars['paziente']->value->indirizzoDomicilio;?>
</p></div>
        <div class="col-md-6"><p class="bordereda"><strong>Citta Domicilio:</strong> <?php echo $_smarty_tpl->tpl_vars['paziente']->value->cittaDomicilio;?>
</p></div>
        <div class="col-md-6"><p class="bordereda"><strong>Provincia Domicilio:</strong> <?php echo $_smarty_tpl->tpl_vars['paziente']->value->provinciaDomicilio;?>
</p></div>
        <div class="col-md-6"><p class="borderedo"><strong>Citta di Nascita:</strong> <?php echo $_smarty_tpl->tpl_vars['paziente']->value->citta;?>
</p></div>
        <div class="col-md-6"><p class="borderedo"><strong>Provincia di Nascita:</strong> <?php echo $_smarty_tpl->tpl_vars['paziente']->value->provincia;?>
</p></div>
        <div class="col-md-6"><p class="bordereda"><strong>Nazionalit&agrave;:</strong> <?php echo $_smarty_tpl->tpl_vars['paziente']->value->nazionalita;?>
</p></div>
        <div class="col-md-6"><p class="bordereda"><strong>Lingua Parlata:</strong> <?php echo $_smarty_tpl->tpl_vars['paziente']->value->linguaParlata;?>
</p></div>
        <div class="clearfix margin-bottom"></div>
    <hr> 
    <span class="legendario">Dettaglio Clinico</span>
     <div class="clearfix" style="margin-top: -25px;"></div>
 <div class="col-md-6">
     <?php if (isset($_smarty_tpl->tpl_vars['clinico']->value->cirrosi)||isset($_smarty_tpl->tpl_vars['clinico']->value->epatocarcinoma)||isset($_smarty_tpl->tpl_vars['clinico']->value->altraPatologia)) {?>
     <p class="bordereda"><strong>Diagnosi:</strong> <?php if (isset($_smarty_tpl->tpl_vars['clinico']->value->cirrosi)&&($_smarty_tpl->tpl_vars['clinico']->value->cirrosi=='1')) {?>Cirrosi<?php }?><?php if (isset($_smarty_tpl->tpl_vars['clinico']->value->epatocarcinoma)&&($_smarty_tpl->tpl_vars['clinico']->value->epatocarcinoma=='1')) {?>Epatocarcinoma<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['clinico']->value->altraPatologia)) {?><?php echo $_smarty_tpl->tpl_vars['clinico']->value->altraPatologia;?>
<?php }?>
     </p>
     <?php } else { ?>
                                   <div class="alert alert-danger alert-bold-border animated flash fade in">
                                       <strong>Non hai ancora inserito nessuna patologia </strong><br>
                           </div>  
                                   <a href="<?php echo @constant('URL_FILE');?>
modifica_paziente.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-primary btn-perspective">Inserisci una adesso</a>
     <?php }?>
 </div>
        <?php if (isset($_smarty_tpl->tpl_vars['clinico']->value->cirrosi)&&($_smarty_tpl->tpl_vars['clinico']->value->cirrosi=='1')) {?><div class="col-md-6"><p class="borderedo"><strong>Eziologia:</strong> <?php echo $_smarty_tpl->tpl_vars['clinico']->value->eziologia;?>
</p></div><?php }?>
     <div class="clearfix"></div> 
<div class="clearfix margin-bottom"></div>
                                                <hr>
                            <span class="legendario">Esami </span>

    <?php if (!empty($_smarty_tpl->tpl_vars['examenes']->value)) {?>
        <div class="col-md-12">      <div class="alert alert-danger alert-bold-border animated flash fade in">
                <strong>ATENZIONE </strong><br> <span><?php echo $_smarty_tpl->tpl_vars['examenes']->value;?>
</span>
                           </div>  
                                       <a href="<?php echo @constant('URL_FILE');?>
modifica_paziente.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-primary btn-perspective">Inserisci uno adesso</a>
                                                    </div><div class="clearfix"></div><br>
        <?php }?>
            <div class="clearfix"></div>
        <div class="table-responsive">
						<table class="table table-striped table-hover" id="elenco-esami">
							<thead class="the-box dark full">
								<tr>
									<th>Tipo Valore</th>
                                                                        <th>Valore</th>
                                                                        <th>Data</th>
                                                                        <th>Scansione</th>
								</tr>
							</thead>
							<tbody>
                                                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrEsami']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
								<tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                                                                   <td><?php echo $_smarty_tpl->tpl_vars['value']->value['nome'];?>
</td>
                                                                   <td><?php echo $_smarty_tpl->tpl_vars['value']->value['valore'];?>
</td>
                                                                   <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['data']);?>
</td>
                                                                   <td><?php if (isset($_smarty_tpl->tpl_vars['value']->value['file'])) {?><a href='<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
' class="btn btn-action btn-info btn-xs"> <?php echo $_smarty_tpl->tpl_vars['value']->value['file'];?>
 <i class="fa fa-fw fa-file-text"></i></a><?php } else { ?>-<?php }?></td>
								</tr>
                                                            <?php } ?>
 
							</tbody>
						</table>
                                                </div><!-- /.table-responsive -->
                                                  
                                                <hr>
                            <span class="legendario">Altri Esami </span>

    <div class="clearfix"></div>
    <div class="table-responsive">
						<table class="table table-striped table-hover" id="elenco-altriesami">
							<thead class="the-box dark full">
								<tr>
									<th>Tipo Esame</th>
                                                                        <th>Data</th>
                                                                        <th>Scansione</th>
								</tr>
							</thead>
							<tbody>
                                                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrAltriEsami']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
								<tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                                                                   <td><?php echo $_smarty_tpl->tpl_vars['value']->value['nome'];?>
</td>
                                                                   <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['data']);?>
</td>
                                                                   <td><?php if (isset($_smarty_tpl->tpl_vars['value']->value['urlScansioneEsame'])) {?><a href='<?php echo $_smarty_tpl->tpl_vars['value']->value['urlScansioneEsame'];?>
' class="btn btn-action btn-info btn-xs"> Vedere Esame <i class="fa fa-fw fa-file-text"></i></a><?php } else { ?>-<?php }?></td>
								</tr>
                                                            <?php } ?>
 
							</tbody>
						</table>
                                                </div><!-- /.table-responsive -->

     <div class="clearfix"></div> 
     <hr> 
    <span class="legendario">Invio di eReferral</span>
     <div class="clearfix" style="margin-top: -25px;"></div>
                    <form action="<?php echo @constant('URL_FILE');?>
aggiunge_ereferral.php" method="post" name="aggiunge_ereferral">
                        <input type="hidden" name="inserimento" value="true"><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">

                                

                        <div class="col-md-12">
                            <div class="form-group">
                                    <label>Centro di Trapianti</label>
                            <select name="centro" class="form-control rounded col-md-12" data-live-search="true">
                                <option value="" disabled selected>Seleziona Centro di Trapianto</option>
                                           <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['centro']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                                               <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['idCentro'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['post']->value['centro'])&&$_smarty_tpl->tpl_vars['post']->value['centro']==$_smarty_tpl->tpl_vars['value']->value['idCentro']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value['nome'];?>
 - <?php echo $_smarty_tpl->tpl_vars['value']->value['indirizzo'];?>
 - <?php echo $_smarty_tpl->tpl_vars['value']->value['citta'];?>
 (<?php echo $_smarty_tpl->tpl_vars['value']->value['provincia'];?>
)</option>
                                           <?php } ?>

                            </select>
                            </div>
                        </div>

                                           <div class="clearfix"><br></div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                    <label>Nota</label>
                                    <textarea rows='10' type="text" class="form-control rounded" name="note" placeholder="Inserire la nota qua..."><?php if (isset($_smarty_tpl->tpl_vars['post']->value['note'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['note'];?>
<?php }?></textarea> 
                            </div>
                        </div>
                        
                        <div class="clearfix"></div>
                        
                        
                        <div class="col-md-12">
                            <div class="col-md-6 col-md-offset-6 text-right">
                                <br> <a href="home_medico.php" class="btn btn-danger btn-perspective">Anulla<i class="fa fa-fw fa-times"></i></a> <button class="btn btn-action btn-perspective btn-primary" type="submit">Invia<i class="fa fa-fw fa-check"></i></button>
                            </div>
                        
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
        </div>

    </div>
     
                        
<?php echo $_smarty_tpl->getSubTemplate ("footer_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
