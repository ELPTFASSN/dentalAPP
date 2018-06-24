<?php /* Smarty version Smarty-3.1.19, created on 2014-10-31 17:00:21
         compiled from "./templates/dettaglio_referral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17689028805452563075b723-20425658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3064eaf98fbf26c504f49366c1ad0aee565878fd' => 
    array (
      0 => './templates/dettaglio_referral.tpl',
      1 => 1414771201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17689028805452563075b723-20425658',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545256308ef192_90522248',
  'variables' => 
  array (
    'referral' => 0,
    'oPaziente' => 0,
    'arrEsami' => 0,
    'value' => 0,
    'meld' => 0,
    'meldNa' => 0,
    'arrAltriEsami' => 0,
    'risposte' => 0,
    'error' => 0,
    'aggiornamento' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545256308ef192_90522248')) {function content_545256308ef192_90522248($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/ereferral/svn.ereferral.it/trunk/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/ereferral/svn.ereferral.it/trunk/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/ereferral/svn.ereferral.it/trunk/libs/plugins/function.cycle.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="page-content">

        <div class="container-fluid">
            
            
            <h1 class="page-heading">Dettaglio Referral N.<?php echo $_smarty_tpl->tpl_vars['referral']->value['idReferral'];?>
 <i class="fa fa-fw fa-caret-right"></i><span class="text-primary">Stato: <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['referral']->value['stato'],"_"," ");?>
</span></h1>
            
            <div class="botoneria"><a <?php if ($_SESSION['utente']['idRuoloUtente']==@constant('AMMINISTRATORE')) {?>href="<?php echo @constant('URL_FILE');?>
elenco_ereferral.php"<?php } else { ?>href="<?php echo @constant('URL_FILE');?>
home_medico.php"<?php }?> class="btn btn-danger btn-perspective">Torna indietro<i class="fa fa-fw fa-reply"></i></a></div>   
            <div class="the-box" style="min-height: 300px;">
                
                <div id="referral">
                    <hr>
                    <span class="legendario">Informazioni di stato</span>
                    <div class="clearfix" style="margin-top: -30px;"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                                <label>Data Apertura</label><br />
                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['referral']->value['dataApertura'],"d/m/Y H:i:s");?>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                                <label>Data Aggiornamento</label><br />
                                <?php if ($_smarty_tpl->tpl_vars['referral']->value['dataAggiornamento']!=$_smarty_tpl->tpl_vars['referral']->value['dataApertura']) {?>
                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['referral']->value['dataAggiornamento'],"d/m/Y H:i:s");?>

                                <?php }?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                                <label>Medico che presenta l'eReferral</label><br />
                                <?php echo $_smarty_tpl->tpl_vars['referral']->value['nomeMedico'];?>
 <?php echo $_smarty_tpl->tpl_vars['referral']->value['cognomeMedico'];?>
 ( <?php echo $_smarty_tpl->tpl_vars['referral']->value['specializzazioneMedico'];?>
 )
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    
                    <div class="col-md-4">
                        <div class="form-group">
                                <label>Design Specialist Review di riferimento</label><br />
                                <?php echo $_smarty_tpl->tpl_vars['referral']->value['nomeDsr'];?>
 <?php echo $_smarty_tpl->tpl_vars['referral']->value['cognomeDsr'];?>

                        </div>
                    </div>
                    
                    <div class="col-md-8">
                        <div class="form-group">
                                <label>Note sull'invio del referral</label><br />
                                <?php echo $_smarty_tpl->tpl_vars['referral']->value['note'];?>

                        </div>
                    </div>
                        
                        <div class="clearfix"></div>
                </div>
                    
                    <div id="anagrafe">
                    
                        <hr>
                            <span class="legendario">Anagrafe paziente</span>
                        
                            <div class="clearfix" style="margin-top: -10px;"></div>
                        
                        <div class="col-md-2">
                            <div class="form-group">
                                    <label>Nome</label><br />
                                    <?php echo $_smarty_tpl->tpl_vars['oPaziente']->value['nome'];?>

                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                    <label>Cognome</label><br />
                                    <?php echo $_smarty_tpl->tpl_vars['oPaziente']->value['cognome'];?>

                            </div>
                        </div>
                                                
                        
                        <div class="col-md-2">
                            <label>Data di Nascita</label><br />
                            <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oPaziente']->value['dataNascita'],"d/m/Y");?>

                        </div>
                                
                        <div class="col-md-2">
                            <label>Sesso</label><br />
                            <?php echo $_smarty_tpl->tpl_vars['oPaziente']->value['sesso'];?>

                        </div>
                        
                        <div class="col-md-2">
                        <div class="form-group">
                            <label>Citt&agrave; di Nascita</label><br />
                            <?php echo $_smarty_tpl->tpl_vars['oPaziente']->value['citta'];?>
 (<?php echo $_smarty_tpl->tpl_vars['oPaziente']->value['provincia'];?>
)
                            </div>
                        </div>
                        
                         
                            
                        <div class="clearfix"></div>
                        
                        <div class="col-md-2">
                            <div class="form-group">
                                    <label>Codice Fiscale</label>
                                    <?php echo $_smarty_tpl->tpl_vars['oPaziente']->value['codFiscale'];?>

                            </div>
                        </div>
                            
                        <div class="col-md-4">
                            <div class="form-group">
                                    <label>Indirizzo Domicilio</label><br />
                                    <?php echo $_smarty_tpl->tpl_vars['oPaziente']->value['indirizzoDomicilio'];?>
 - <?php echo $_smarty_tpl->tpl_vars['oPaziente']->value['cittaDomicilio'];?>
 (<?php echo $_smarty_tpl->tpl_vars['oPaziente']->value['provinciaDomicilio'];?>
)
                            </div>
                        </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                        <label>Telefono</label><br />
                                        <?php echo $_smarty_tpl->tpl_vars['oPaziente']->value['telefono'];?>

                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                        <label>Email</label><br />
                                        <?php echo $_smarty_tpl->tpl_vars['oPaziente']->value['email'];?>

                                </div>
                            </div>
                        
                                      
                        
                        <div class="clearfix"></div>
                        
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Nazionalit&agrave;</label><br />
                                    <?php echo $_smarty_tpl->tpl_vars['oPaziente']->value['nazionalita'];?>

                            </div>
                        </div>
                        <div class="col-md-2">
                        <div class="form-group">
                                <label>Lingua Parlata</label><br />
                                    <?php echo $_smarty_tpl->tpl_vars['oPaziente']->value['linguaParlata'];?>

                            </div>
                        </div>

                        <div class="col-md-6">
                        <div class="form-group">
                                <label>Note del paziente</label><br />
                                    <?php echo $_smarty_tpl->tpl_vars['oPaziente']->value['note'];?>

                            </div>
                        </div>
                      
                    </div>
                        <div class="clearfix"></div>
                        <hr>
                            <span class="legendario">Dettaglio Clinico</span>
                            <div class="clearfix"></div>

                            <div class="col-md-4">
                                <div class="form-group"><label>Diagnosi</label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['oPaziente']->value['cirrosi'])) {?>Cirrosi<br /><label>Eziologia</label> <?php echo $_smarty_tpl->tpl_vars['oPaziente']->value['eziologia'];?>
<?php } elseif (!empty($_smarty_tpl->tpl_vars['oPaziente']->value['epatocarcinoma'])) {?>Epatocarcinoma<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['oPaziente']->value['altraPatologia'];?>
<?php }?>
                            </div>
                        </div>
                        
                        
                        <div class="clearfix"></div>
                                                <hr>
                            <span class="legendario">Esami </span>
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
 <?php if ($_smarty_tpl->tpl_vars['value']->value['idEsame']!=@constant('SODIEMIA')) {?>mg/dL<?php } else { ?>mEq/L<?php }?></td>
                                                               <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['data'],"d/m/Y");?>
</td>
                                                               <td><?php if (isset($_smarty_tpl->tpl_vars['value']->value['nomeEsame'])) {?><a href='<?php echo @constant('URL_SCANSIONI_ESAMI');?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['pathScansione'];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['nomeScansione'];?>
' class="btn btn-action btn-info btn-xs"> Vedere Scansione <i class="fa fa-fw fa-file-text"></i></a><?php } else { ?>-<?php }?></td>
                                                            </tr>
                                                        <?php } ?>

                                                    </tbody>
                                            </table>
                                    </div><!-- /.table-responsive -->
                            <div class="clearfix"></div>
                            <hr>
                                <span class="legendario">Meld e MeldNa calcolati</span>
                                <div class="clearfix"></div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Meld</label><br />
                                            <?php echo $_smarty_tpl->tpl_vars['meld']->value['meld'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['meld']->value['error'])) {?><br /><?php echo $_smarty_tpl->tpl_vars['meld']->value['error'];?>
<?php }?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>MeldNa</label><br />
                                            <?php echo $_smarty_tpl->tpl_vars['meldNa']->value['meldNa'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['meldNa']->value['error'])) {?><br /><?php echo $_smarty_tpl->tpl_vars['meldNa']->value['error'];?>
<?php }?>
                                    </div>
                                </div>
                                    
                            <div class="clearfix"></div>
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
                                                       <td><?php if (isset($_smarty_tpl->tpl_vars['value']->value['urlScansioneEsame'])) {?><a href='<?php echo @constant('URL_SCANSIONI_ESAMI');?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['urlScansioneEsame'];?>
' class="btn btn-action btn-info btn-xs"> Vedere Scansione <i class="fa fa-fw fa-file-text"></i></a><?php } else { ?>-<?php }?></td>
                                                    </tr>
                                                <?php } ?>

                                            </tbody>
                                    </table>
                                    </div><!-- /.table-responsive -->
                            
                            <div class="clearfix"></div>
                            
                            
                            <hr>
                            <span class="legendario">Cronologia eReferral </span>
                                    <div class="clearfix"></div>
<div class="col-md-12">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['risposte']->value)) {?>
                                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['risposte']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>

                                            
                                               <?php if ($_SESSION['utente']['idRuoloUtente']!=@constant('AMMINISTRATORE')) {?> 
                                                    <?php if ($_smarty_tpl->tpl_vars['value']->value['fkSender']==$_SESSION['utente']['idUtente']) {?>
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['value']->value['medico_sender'])) {?>
                                                            <div class="col-md-9"><?php if (!empty($_smarty_tpl->tpl_vars['value']->value['note'])) {?><div class="bubble"><p><?php echo $_smarty_tpl->tpl_vars['value']->value['note'];?>
</p></div><?php }?></div><div class="col-md-3"><p>Risposta del <strong><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['data'],"d/m/Y H:i:s");?>
</strong> <br>Inviata da: <strong><?php echo $_smarty_tpl->tpl_vars['value']->value['medico_sender'];?>
</strong><br> Stato: <strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['value']->value['statoReferral'],"_"," ");?>
</strong></p></div><?php if (!empty($_smarty_tpl->tpl_vars['value']->value['pathAllegato'])) {?><a target="_blank" class="btn btn-primary btn-perspective" href="<?php echo @constant('URL_SCANSIONI_ESAMI');?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['pathAllegato'];?>
">Scarica l'allegato <i class="fa fa-fw fa-download"></i></a><?php }?><div class="clearfix"></div><hr style="border-style:dashed;color:#ccc;">
                                                        <?php }?>
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['value']->value['dsr_sender'])) {?>
                                                            <div class="col-md-8"><?php if (!empty($_smarty_tpl->tpl_vars['value']->value['note'])) {?><div class="bubble"><p><?php echo $_smarty_tpl->tpl_vars['value']->value['note'];?>
</p></div><?php }?></div><div class="col-md-4"><p>Risposta del <strong><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['data'],"d/m/Y H:i:s");?>
</strong> <br>Inviata da: <strong><?php echo $_smarty_tpl->tpl_vars['value']->value['dsr_sender'];?>
</strong> <br>Stato: <strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['value']->value['statoReferral'],"_"," ");?>
</strong><br><br><?php if (!empty($_smarty_tpl->tpl_vars['value']->value['pathAllegato'])) {?><a target="_blank" class="btn btn-primary btn-perspective" href="<?php echo @constant('URL_SCANSIONI_ESAMI');?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['pathAllegato'];?>
">Scarica l'allegato <i class="fa fa-fw fa-download"></i></a><?php }?></p></div><div class="clearfix"></div><hr style="border-style:dashed;color:#ccc;">
                                                        <?php }?>
                                                    <?php }?>

                                                    <?php if ($_smarty_tpl->tpl_vars['value']->value['fkReceiver']==$_SESSION['utente']['idUtente']) {?>
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['value']->value['medico_sender'])) {?>
                                                            <div class="col-md-4"><p>Risposta del <strong><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['data'],"d/m/Y H:i:s");?>
</strong> <br>Inviata da: <strong><?php echo $_smarty_tpl->tpl_vars['value']->value['medico_sender'];?>
</strong> <br>Stato: <strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['value']->value['statoReferral'],"_"," ");?>
</strong><br><br><?php if (!empty($_smarty_tpl->tpl_vars['value']->value['pathAllegato'])) {?><a target="_blank" class="btn btn-info btn-perspective" href="<?php echo @constant('URL_SCANSIONI_ESAMI');?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['pathAllegato'];?>
">Scarica l'allegato <i class="fa fa-fw fa-download"></i></a><?php }?></p></div><div class="col-md-8"><?php if (!empty($_smarty_tpl->tpl_vars['value']->value['note'])) {?><div class="bubble bubble--alt"><p><?php echo $_smarty_tpl->tpl_vars['value']->value['note'];?>
</p></div><?php }?></div> <div class="clearfix"></div><hr style="border-style:dashed;color:#ccc;">
                                                        <?php }?>
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['value']->value['dsr_sender'])) {?>
                                                            <div class="col-md-4"><p>Risposta del <strong><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['data'],"d/m/Y H:i:s");?>
</strong> <br>Inviata da: <strong><?php echo $_smarty_tpl->tpl_vars['value']->value['dsr_sender'];?>
</strong> <br>Stato: <strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['value']->value['statoReferral'],"_"," ");?>
</strong><br><br><?php if (!empty($_smarty_tpl->tpl_vars['value']->value['pathAllegato'])) {?><a target="_blank" class="btn btn-info btn-perspective" href="<?php echo @constant('URL_SCANSIONI_ESAMI');?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['pathAllegato'];?>
">Scarica l'allegato <i class="fa fa-fw fa-download"></i></a><?php }?></p></div><div class="col-md-8"><?php if (!empty($_smarty_tpl->tpl_vars['value']->value['note'])) {?><div class="bubble bubble--alt"><p><?php echo $_smarty_tpl->tpl_vars['value']->value['note'];?>
</p></div><?php }?></div><div class="clearfix"></div><hr style="border-style:dashed;color:#ccc;">
                                                        <?php }?>
                                                    <?php }?>
                                                    <?php } else { ?>
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['value']->value['medico_sender'])) {?>
                                                        <div class="col-md-4"><p>Risposta del <strong><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['data'],"d/m/Y H:i:s");?>
</strong> <br>Inviata da: <strong><?php echo $_smarty_tpl->tpl_vars['value']->value['medico_sender'];?>
</strong><br> Stato: <strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['value']->value['statoReferral'],"_"," ");?>
</strong><br><br><?php if (!empty($_smarty_tpl->tpl_vars['value']->value['pathAllegato'])) {?><a target="_blank" class="btn btn-primary btn-perspective" href="<?php echo @constant('URL_SCANSIONI_ESAMI');?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['pathAllegato'];?>
">Scarica l'allegato <i class="fa fa-fw fa-download"></i></a><?php }?></p></div><div class="col-md-8"><?php if (!empty($_smarty_tpl->tpl_vars['value']->value['note'])) {?><div class="bubble bubbles--alt"><p><?php echo $_smarty_tpl->tpl_vars['value']->value['note'];?>
</p></div><?php }?></div><div class="clearfix"></div><hr style="border-style:dashed;color:#ccc;">
                                                        <?php }?>
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['value']->value['dsr_sender'])) {?>
                                                        <div class="col-md-4"><p>Risposta del <strong><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['data'],"d/m/Y H:i:s");?>
</strong> <br>Inviata da: <strong><?php echo $_smarty_tpl->tpl_vars['value']->value['dsr_sender'];?>
</strong> <br>Stato: <strong><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['value']->value['statoReferral'],"_"," ");?>
</strong><br><br><?php if (!empty($_smarty_tpl->tpl_vars['value']->value['pathAllegato'])) {?><a target="_blank" class="btn btn-primary btn-perspective" href="<?php echo @constant('URL_SCANSIONI_ESAMI');?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['pathAllegato'];?>
">Scarica l'allegato <i class="fa fa-fw fa-download"></i></a><?php }?></div><div class="col-md-8"><?php if (!empty($_smarty_tpl->tpl_vars['value']->value['note'])) {?><div class="bubble bubble--alt"><p><?php echo $_smarty_tpl->tpl_vars['value']->value['note'];?>
</p></div><?php }?></div><div class="clearfix"></div><hr style="border-style:dashed;color:#ccc;">
                                                        <?php }?>
                                                <?php }?>
                                            
                                                <div class="clearfix"></div>
                                            <?php } ?>
                                        <?php } else { ?>    
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    Non sono presenti aggiornamenti su questo eReferral
                                                </div>
                                            </div>
                                        <?php }?>

</div><div class="clearfix"></div>
                            <?php if (!($_SESSION['utente']['idRuoloUtente']==@constant('MEDICO')&&($_smarty_tpl->tpl_vars['referral']->value['fkStatoReferral']==@constant('IN_ATTESA_DI_VISIONE')||$_smarty_tpl->tpl_vars['referral']->value['fkStatoReferral']==@constant('PRESO_IN_CARICO')||$_smarty_tpl->tpl_vars['referral']->value['fkStatoReferral']==@constant('IN_ATTESA_DI_RISPOSTA')||$_smarty_tpl->tpl_vars['referral']->value['fkStatoReferral']==@constant('NON_IN_LISTA_DEFINITIVAMENTE')||$_smarty_tpl->tpl_vars['referral']->value['fkStatoReferral']==@constant('INSERITO_IN_LISTA')))&&$_SESSION['utente']['idRuoloUtente']!=@constant('AMMINISTRATORE')) {?>
                                <div class="clearfix"></div>
                                <hr>
                                <span id="aggiornamento_referral" class="legendario">Aggiornamento Referral</span>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                                       
                                            <div class="alert alert-danger alert-bold-border fade in animated flash">
                                                <i class="fa fa-fw fa-5x fa-exclamation-circle text-danger arribita"></i>
                                                   <strong>Si sono verificati i seguenti errori:<br>
                                                       <span class="text-danger"><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php }?></span></strong>
                                           </div>
                                    <?php }?>
                                    <div class="col-md-12">Inserire almeno una nota o un allegato. <?php if ($_SESSION['utente']['idRuoloUtente']==@constant('DESIGN_SPECIALIST_REVIEW')) {?><br />Inserire lo stato del referral<?php }?></div>
                                    <form action="<?php echo @constant('URL_FILE');?>
aggiorna_risposta_referral.php" method="post" name="aggiorna_referral" enctype="multipart/form-data">
                                
                                    <input type="hidden" name="idReferral" value="<?php echo $_smarty_tpl->tpl_vars['referral']->value['idReferral'];?>
">
                                    <input type="hidden" name="idSender" value="<?php echo $_SESSION['utente']['idUtente'];?>
">
                                    <input type="hidden" name="idReceiver" value="<?php if ($_SESSION['utente']['idUtente']==$_smarty_tpl->tpl_vars['referral']->value['idDsr']) {?><?php echo $_smarty_tpl->tpl_vars['referral']->value['idMedico'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['referral']->value['idDsr'];?>
<?php }?>">
            
                                    <div class="col-md-8">
                                        <div class="form-group">
                                                <label>Note</label>
                                                <textarea rows='10' type="text" class="form-control rounded" name="note" placeholder="Inserire una nota..."><?php if (isset($_smarty_tpl->tpl_vars['aggiornamento']->value['note'])&&$_smarty_tpl->tpl_vars['aggiornamento']->value['note']) {?><?php echo $_smarty_tpl->tpl_vars['aggiornamento']->value['note'];?>
<?php }?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                                <label>Allegato</label>
                                                <input type="file" class="btn btn-info btn-perspective btn-file" name="uploadFile" style="padding: 15px 35px 15px 25px;width: 99%;"><br />
                                                <?php if ($_SESSION['utente']['idRuoloUtente']==@constant('DESIGN_SPECIALIST_REVIEW')) {?>
                                                    <label>Stato</label><br />
                                                    <select name="fkStatoReferral" id="basic" class="form-control  rounded" data-live-search="true" style="float:left; width:80%;margin-right:5px;">
                                                        <option value="">Seleziona</option>
                                                        <option <?php ob_start();?><?php echo @constant('RISPOSTO_DA_DESIGN_SPECIALIST_REVIEW');?>
<?php $_tmp1=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars['aggiornamento']->value['stato'])&&$_smarty_tpl->tpl_vars['aggiornamento']->value['stato']==$_tmp1) {?>selected=selected<?php }?> value="<?php echo @constant('RISPOSTO_DA_DESIGN_SPECIALIST_REVIEW');?>
">RISPOSTO DA DESIGN SPECIALIST REVIEW</option>
                                                        <option <?php ob_start();?><?php echo @constant('VISITA_PRENOTATA');?>
<?php $_tmp2=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars['aggiornamento']->value['stato'])&&$_smarty_tpl->tpl_vars['aggiornamento']->value['stato']==$_tmp2) {?>selected=selected<?php }?> value="<?php echo @constant('VISITA_PRENOTATA');?>
">VISITA PRENOTATA</option>
                                                        <option <?php ob_start();?><?php echo @constant('VISITA_PRENOTATA_OVERBOOKING');?>
<?php $_tmp3=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars['aggiornamento']->value['stato'])&&$_smarty_tpl->tpl_vars['aggiornamento']->value['stato']==$_tmp3) {?>selected=selected<?php }?> value="<?php echo @constant('VISITA_PRENOTATA_OVERBOOKING');?>
">VISITA PRENOTATA OVERBOOKING</option>
                                                        <option <?php ob_start();?><?php echo @constant('NON_IN_LISTA_TEMPORANEAMENTE');?>
<?php $_tmp4=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars['aggiornamento']->value['stato'])&&$_smarty_tpl->tpl_vars['aggiornamento']->value['stato']==$_tmp4) {?>selected=selected<?php }?> value="<?php echo @constant('NON_IN_LISTA_TEMPORANEAMENTE');?>
">NON IN LISTA TEMPORANEAMENTE</option>
                                                        <option <?php ob_start();?><?php echo @constant('NON_IN_LISTA_DEFINITIVAMENTE');?>
<?php $_tmp5=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars['aggiornamento']->value['stato'])&&$_smarty_tpl->tpl_vars['aggiornamento']->value['stato']==$_tmp5) {?>selected=selected<?php }?> value="<?php echo @constant('NON_IN_LISTA_DEFINITIVAMENTE');?>
">NON IN LISTA DEFINITIVAMENTE</option>
                                                        <option <?php ob_start();?><?php echo @constant('INSERITO_IN_LISTA');?>
<?php $_tmp6=ob_get_clean();?><?php if (isset($_smarty_tpl->tpl_vars['aggiornamento']->value['stato'])&&$_smarty_tpl->tpl_vars['aggiornamento']->value['stato']==$_tmp6) {?>selected=selected<?php }?> value="<?php echo @constant('INSERITO_IN_LISTA');?>
">INSERITO IN LISTA</option>
                                                    </select>
                                                <?php }?>
                                        </div>
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                    
                                    <div class="col-md-12">
                                        <div class="col-md-6 col-md-offset-6 text-right">
                                            <br> <button class="btn btn-action btn-perspective btn-primary" type="submit">Aggiorna eReferral<i class="fa fa-fw fa-pencil"></i></button>
                                        </div>

                                    </div>
                                </form>
                              <?php }?>
                            <div class="clearfix margin-bottom"></div>
                </div>
            <div class="botonerias"><a <?php if ($_SESSION['utente']['idRuoloUtente']==@constant('AMMINISTRATORE')) {?>href="<?php echo @constant('URL_FILE');?>
elenco_ereferral.php"<?php } else { ?>href="<?php echo @constant('URL_FILE');?>
home_medico.php"<?php }?>  class="btn btn-danger btn-perspective">Torna indietro<i class="fa fa-fw fa-reply"></i></a></div>   
        </div>

    </div>
                        
<?php echo $_smarty_tpl->getSubTemplate ("footer_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
