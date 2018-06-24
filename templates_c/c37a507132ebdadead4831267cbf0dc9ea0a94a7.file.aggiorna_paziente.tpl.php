<?php /* Smarty version Smarty-3.1.19, created on 2014-10-31 10:17:29
         compiled from "./templates/aggiorna_paziente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114327688554364ef532db88-10150458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c37a507132ebdadead4831267cbf0dc9ea0a94a7' => 
    array (
      0 => './templates/aggiorna_paziente.tpl',
      1 => 1414685331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114327688554364ef532db88-10150458',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54364ef5427121_18696228',
  'variables' => 
  array (
    'oPaziente' => 0,
    'error' => 0,
    'success' => 0,
    'id' => 0,
    'cicli' => 0,
    'post' => 0,
    'numero' => 0,
    'province' => 0,
    'key' => 0,
    'value' => 0,
    'arrEsami' => 0,
    'arrAltriEsami' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54364ef5427121_18696228')) {function content_54364ef5427121_18696228($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/ereferral/svn.ereferral.it/trunk/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/ereferral/svn.ereferral.it/trunk/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="page-content">

        <div class="container-fluid">
            
            
            <h1 class="page-heading">Scheda del Paziente <i class="fa fa-fw fa-caret-right"></i><span class="text-primary"><?php echo $_smarty_tpl->tpl_vars['oPaziente']->value->nome;?>
 <?php echo $_smarty_tpl->tpl_vars['oPaziente']->value->cognome;?>
</span></h1>
            <div class="botoneria"><a href="home_medico.php" class="btn btn-danger btn-perspective">Torna indietro<i class="fa fa-fw fa-reply"></i></a></div>   
            <div class="the-box" style="min-height: 540px;">
                    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                            <div class="alert alert-danger alert-bold-border fade in animated flash">
                                <i class="fa fa-fw fa-5x fa-exclamation-circle text-danger arribita"></i>
                                   <strong>Si sono verificati i seguenti errori:<br>
                                       <span class="text-danger"><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php }?></span></strong>
                           </div>
                    <?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['success']->value)) {?>
                            <div class="alert alert-success alert-bold-border fade in animated flash">
                                <i class="fa fa-fw fa-5x fa-check-circle text-success arribita"></i>
                                   <strong>Esito:<br>
                    <span class="text-success"><?php if (isset($_smarty_tpl->tpl_vars['success']->value)) {?><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
<?php }?></span></strong>
                           </div>
                    <?php }?>
                    <div id="anagrafe">
                    <form action="<?php echo @constant('URL_FILE');?>
modifica_paziente.php" method="post" name="modifica_paziente">
                        <input type="hidden" name="modifica" value="true"><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                        <hr>
                            <span class="legendario">Anagrafe</span>
    <div class="clearfix" style="margin-top: -10px;"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" class="form-control rounded" name="nome" placeholder="Nome" value="<?php echo $_smarty_tpl->tpl_vars['oPaziente']->value->nome;?>
">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label>Cognome</label>
                                    <input type="text" class="form-control rounded" name="cognome" placeholder="Cognome" value="<?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->cognome)) {?><?php echo $_smarty_tpl->tpl_vars['oPaziente']->value->cognome;?>
<?php }?>">
                            </div>
                        </div>
                                                
                        <div class="clearfix"></div>
                        <div class="col-md-4">
                            <label>Data di Nascita</label><br />
                            
                            <?php $_smarty_tpl->tpl_vars['numero'] = new Smarty_variable(1, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['cicli'] = new Smarty_variable(31, null, 0);?>

                            <select name="giorno" id="basic" class="form-control  rounded" data-live-search="true" style="float:left; width:33%;margin-right:5px;">
                                <option value="">Giorno</option>
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['numero'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['numero']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['name'] = 'numero';
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cicli']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['total']);
?>
                                        <option <?php if (isset($_smarty_tpl->tpl_vars['post']->value['giorno'])&&$_smarty_tpl->tpl_vars['post']->value['giorno']==$_smarty_tpl->tpl_vars['numero']->value) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
</option>
                                        <?php $_smarty_tpl->tpl_vars['numero'] = new Smarty_variable($_smarty_tpl->tpl_vars['numero']->value+1, null, 0);?>
                                <?php endfor; endif; ?>

                            </select>

                            <?php $_smarty_tpl->tpl_vars['numero'] = new Smarty_variable(1, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['cicli'] = new Smarty_variable(12, null, 0);?>

                            <select name="mese" id="basic" class="form-control  rounded" data-live-search="true" style="float:left; width:31%;margin-right:5px;">
                                <option value="">Mese</option>
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['numero'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['numero']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['name'] = 'numero';
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cicli']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['total']);
?>
                                        <option <?php if (isset($_smarty_tpl->tpl_vars['post']->value['mese'])&&$_smarty_tpl->tpl_vars['post']->value['mese']==$_smarty_tpl->tpl_vars['numero']->value) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
</option>
                                        <?php $_smarty_tpl->tpl_vars['numero'] = new Smarty_variable($_smarty_tpl->tpl_vars['numero']->value+1, null, 0);?>
                                <?php endfor; endif; ?>

                            </select>

                            <?php $_smarty_tpl->tpl_vars['numero'] = new Smarty_variable(2014, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['cicli'] = new Smarty_variable(114, null, 0);?>

                            <select name="anno" id="basic" class="form-control  rounded" data-live-search="true" style="float:left; width:31%">
                                <option value="">Anno</option>
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['numero'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['numero']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['name'] = 'numero';
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cicli']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['numero']['total']);
?>
                                        <option <?php if (isset($_smarty_tpl->tpl_vars['post']->value['anno'])&&$_smarty_tpl->tpl_vars['post']->value['anno']==$_smarty_tpl->tpl_vars['numero']->value) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
</option>
                                        <?php $_smarty_tpl->tpl_vars['numero'] = new Smarty_variable($_smarty_tpl->tpl_vars['numero']->value-1, null, 0);?>
                                <?php endfor; endif; ?>

                            </select>
                            
                        </div>
                                
                        <div class="col-md-2">
                            <label>Sesso</label><br />
                            <select name="sesso" id="basic" class="form-control  rounded" data-live-search="true" style="float:left; width:80%;margin-right:5px;">
                                <option value="">Seleziona</option>
                                <option <?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->sesso)&&$_smarty_tpl->tpl_vars['oPaziente']->value->sesso=="M") {?>selected="selected"<?php }?> value="M">M</option>
                                <option <?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->sesso)&&$_smarty_tpl->tpl_vars['oPaziente']->value->sesso=="F") {?>selected="selected"<?php }?> value="F">F</option>
                            </select>
                        </div>
                                
                        <div class="col-md-4">
                        <div class="form-group">
                        <label>Citt&agrave; di Nascita</label>
                                    <input type="text" class="form-control rounded" name="citta" placeholder="Citt&agrave;" value="<?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->citta)) {?><?php echo $_smarty_tpl->tpl_vars['oPaziente']->value->citta;?>
<?php }?>">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                    <label>Provincia di Nascita</label>
                                      <select name="provincia" class="form-control rounded">
                                           <option>Seleziona la provincia</option>
                                           <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['province']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                                               <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->provincia)&&($_smarty_tpl->tpl_vars['oPaziente']->value->provincia==$_smarty_tpl->tpl_vars['key']->value)) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                                           <?php } ?>
                                      </select>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label>Indirizzo Domicilio</label>
                                    <input type="text" class="form-control rounded" name="indirizzoDomicilio" placeholder="Indirizzo" value="<?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->indirizzoDomicilio)) {?><?php echo $_smarty_tpl->tpl_vars['oPaziente']->value->indirizzoDomicilio;?>
<?php }?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Citt&agrave; Domicilio</label>
                                <input type="text" class="form-control rounded" name="cittaDomicilio" placeholder="Citt&agrave;" value="<?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->citta)) {?><?php echo $_smarty_tpl->tpl_vars['oPaziente']->value->citta;?>
<?php }?>">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                    <label>Provincia Domicilio</label>
                                    <select name="provinciaDomicilio" class="form-control rounded">
                                        <option>Seleziona la provincia</option>
                                        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['province']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->provinciaDomicilio)&&($_smarty_tpl->tpl_vars['oPaziente']->value->provinciaDomicilio==$_smarty_tpl->tpl_vars['key']->value)) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                                        <?php } ?>
                                    </select>
                            </div>
                        </div>

                                      
                        <div class="clearfix"></div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label>Codice Fiscale</label>
                                    <input type="text" class="form-control rounded" name="codFiscale" placeholder="Codice Fiscale" value="<?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->codiceFiscale)) {?><?php echo $_smarty_tpl->tpl_vars['oPaziente']->value->codiceFiscale;?>
<?php }?>">
                            </div>
                        </div>
                        
                        <div class="clearfix"></div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nazionalit&agrave;</label>
                                    <input type="text" class="form-control rounded" name="nazionalita" placeholder="Es. Italiana" value="<?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->nazionalita)) {?><?php echo $_smarty_tpl->tpl_vars['oPaziente']->value->nazionalita;?>
<?php }?>">
                                 
                            </div>
                        </div>
                        <div class="col-md-6">
                      <div class="form-group">
                                <label>Lingua Parlata</label>
                                    <input type="text" class="form-control rounded" name="linguaParlata" placeholder="Es. Italiano" value="<?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->linguaParlata)) {?><?php echo $_smarty_tpl->tpl_vars['oPaziente']->value->linguaParlata;?>
<?php }?>">
                                 
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                    <label>Telefono</label>
                                    <input type="text" class="form-control rounded" name="telefono" placeholder="Telefono" value="<?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->telefono)) {?><?php echo $_smarty_tpl->tpl_vars['oPaziente']->value->telefono;?>
<?php }?>">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control rounded" name="email" placeholder="Email" value="<?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->email)) {?><?php echo $_smarty_tpl->tpl_vars['oPaziente']->value->email;?>
<?php }?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6 col-md-offset-6 text-right">
                                <br>  <button class="btn btn-action btn-perspective btn-primary">Modifica Anagrafe<i class="fa fa-fw fa-pencil"></i></button>
                            </div>
                        </div>
                      </form>
                    </div>
                        <div class="clearfix margin-bottom"></div>
                        <hr>
                            <span class="legendario">Dettaglio Clinico</span>
    <div class="clearfix"></div>
    <form method="post" action="modifica_paziente.php">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->cirrosi)||isset($_smarty_tpl->tpl_vars['oPaziente']->value->epatocarcinoma)||isset($_smarty_tpl->tpl_vars['oPaziente']->value->altraPatologia)) {?><input type="hidden" name="idDettaglioClinicoPaziente" value="<?php echo $_smarty_tpl->tpl_vars['oPaziente']->value->idDettaglioClinicoPaziente;?>
"><?php }?>
                            <div class="col-md-4">
                                <div class="form-group"><label>Diagnosi</label>
                                    <label class="form-control rounded" <?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->cirrosi)&&($_smarty_tpl->tpl_vars['oPaziente']->value->cirrosi=='1')) {?>style="background: ivory;"<?php }?>><input type="radio" name="diagnosi" value="1" <?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->cirrosi)&&($_smarty_tpl->tpl_vars['oPaziente']->value->cirrosi=='1')) {?>checked<?php }?>> <span style="vertical-align: 2px;"> Cirrosi</span></label>
                                    <label class="form-control rounded" <?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->epatocarcinoma)&&($_smarty_tpl->tpl_vars['oPaziente']->value->epatocarcinoma=='1')) {?>style="background: ivory;"<?php }?>><input type="radio" name="diagnosi" value="2"  <?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->epatocarcinoma)&&($_smarty_tpl->tpl_vars['oPaziente']->value->epatocarcinoma=='1')) {?>checked<?php }?>> <span style="vertical-align: 2px;"> Epatocarcinoma</span></label>
                                    <label class="form-control rounded" <?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->altraPatologia)) {?>style="background: ivory;"<?php }?>><input type="radio" name="diagnosi" value="3" <?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->altraPatologia)) {?>checked<?php }?>> <span style="vertical-align: 2px;"> Altra Patologia</span></label>
                                    
                            </div>
                        </div>
                        
                        <div class="col-md-8" <?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->cirrosi)&&($_smarty_tpl->tpl_vars['oPaziente']->value->cirrosi=='1')) {?><?php } else { ?>style="display:none;"<?php }?> id="eziologia">
                            <div class="form-group">
                                    <label>Eziologia</label>
                                    <input type="text" class="form-control rounded" name="eziologia" placeholder="Eziologia" <?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->cirrosi)&&($_smarty_tpl->tpl_vars['oPaziente']->value->cirrosi=='1')) {?>value="<?php echo $_smarty_tpl->tpl_vars['oPaziente']->value->eziologia;?>
"<?php }?>>
                            </div>
                        </div>
                        <div class="col-md-8" <?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->altraPatologia)) {?>style="margin-top: 78px;"<?php } else { ?>style="display:none;margin-top: 78px;"<?php }?> id="altra">
                            <div class="form-group">
                                    <label>Patologia</label>
                                    <input type="text" class="form-control rounded" name="altra" placeholder="Inserisci la patologia" <?php if (isset($_smarty_tpl->tpl_vars['oPaziente']->value->altraPatologia)) {?>value="<?php echo $_smarty_tpl->tpl_vars['oPaziente']->value->altraPatologia;?>
"<?php }?>>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6 col-md-offset-6 text-right">
                                <br> <button class="btn btn-action btn-perspective btn-primary" type="submit">Modifica Dettaglio Clinico<i class="fa fa-fw fa-pencil"></i></button>
                            </div>
                        
                        </div>
    </form>
                        <div class="clearfix margin-bottom"></div>
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
 <?php if (isset($_smarty_tpl->tpl_vars['value']->value['dialisi'])) {?> <span class="label label-primary">In Dialisi</span> <?php }?></td>
                                                                   <td><?php echo $_smarty_tpl->tpl_vars['value']->value['valore'];?>
 <?php if ($_smarty_tpl->tpl_vars['value']->value['nome']!='SODIEMIA') {?>mg/dL<?php } else { ?>mEq/L<?php }?></td>
                                                                   <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['data']);?>
</td>
                                                                   <td><?php if (isset($_smarty_tpl->tpl_vars['value']->value['file'])) {?><a href='<?php echo @constant('URL_SCANSIONI_ESAMI');?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['file'];?>
' class="btn btn-action btn-info btn-xs" target="_blank"> Vedere Scansione <i class="fa fa-fw fa-file-text"></i></a><?php } else { ?>-<?php }?></td>
								</tr>
                                                            <?php } ?>
 
							</tbody>
						</table>
                                                </div><!-- /.table-responsive -->
    <div class="col-md-12">
                            <div class="col-md-6 col-md-offset-6 text-right">
                                <br> <a class="ajax-popup-link btn btn-action btn-perspective btn-primary" href="<?php echo @constant('URL_FILE');?>
aggiunge_esame.php?id=<?php echo $_smarty_tpl->tpl_vars['oPaziente']->value->idDettaglioPaziente;?>
"> Aggiungi Esame<i class="fa fa-fw fa-plus-circle"></i></a>
                            </div>
                        
                        </div>
                            <div class="clearfix margin-bottom"></div>
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
                                                                   <td><?php if (isset($_smarty_tpl->tpl_vars['value']->value['urlScansioneEsame'])) {?><a target="_blank" href='<?php echo @constant('URL_SCANSIONI_ESAMI');?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['urlScansioneEsame'];?>
' class="btn btn-action btn-info btn-xs"> Vedere Scansione <i class="fa fa-fw fa-file-text"></i></a><?php } else { ?>-<?php }?></td>
								</tr>
                                                            <?php } ?>
 
							</tbody>
						</table>
                                                </div><!-- /.table-responsive -->
        <div class="col-md-12">
                            <div class="col-md-6 col-md-offset-6 text-right">
                                <br> <a href="<?php echo @constant('URL_FILE');?>
aggiunge_altro_esame.php?id=<?php echo $_smarty_tpl->tpl_vars['oPaziente']->value->idDettaglioPaziente;?>
" class="ajax-popup-link btn btn-action btn-perspective btn-primary">Aggiungi Altro Esame<i class="fa fa-fw fa-plus-circle"></i></a>
                            </div>
                        
                        </div>
    <div class="clearfix margin-bottom-peq"></div>
                   
                </div>
            <div class="botonerias"><a href="home_medico.php" class="btn btn-danger btn-perspective">Torna indietro<i class="fa fa-fw fa-reply"></i></a></div>   
        </div>

    </div>
                        
<?php echo $_smarty_tpl->getSubTemplate ("footer_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
