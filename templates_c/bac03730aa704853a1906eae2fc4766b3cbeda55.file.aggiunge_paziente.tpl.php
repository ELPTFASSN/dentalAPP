<?php /* Smarty version Smarty-3.1.19, created on 2014-10-31 10:02:17
         compiled from "./templates/aggiunge_paziente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13794055685433c7b47df684-88657736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bac03730aa704853a1906eae2fc4766b3cbeda55' => 
    array (
      0 => './templates/aggiunge_paziente.tpl',
      1 => 1414685331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13794055685433c7b47df684-88657736',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5433c7b4976301_76743841',
  'variables' => 
  array (
    'error' => 0,
    'warning' => 0,
    'permesso' => 0,
    'post' => 0,
    'cicli' => 0,
    'numero' => 0,
    'province' => 0,
    'key' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5433c7b4976301_76743841')) {function content_5433c7b4976301_76743841($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="page-content">

        <div class="container-fluid">
            
            
            <h1 class="page-heading">Aggiungi un Paziente</h1>
                <div class="the-box" style="min-height: 540px;">
                    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                            <div class="alert alert-danger alert-bold-border animated flash fade in">
                                <i class="fa fa-fw fa-5x fa-exclamation-circle text-danger" style="float:right;"></i>
                                   <strong>Si sono verificati i seguenti errori:<br>
                                       <span class="text-danger"><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php }?></span></strong>
                           </div>
                    <?php }?>

                    <form action="<?php echo @constant('URL_FILE');?>
aggiunge_paziente.php" method="post" name="aggiunge_paziente">
                     <?php if (!empty($_smarty_tpl->tpl_vars['warning']->value)) {?>
                            <div class="alert alert-warning alert-bold-border animated flash fade in">
                                <i class="fa fa-fw fa-5x fa-question-circle text-warning" style="float:right;"></i>
                                   <strong>Atenzione!<br>
                                       <span class="text-warning"><?php if (isset($_smarty_tpl->tpl_vars['warning']->value)) {?><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
<?php }?> <button class="btn btn-xs btn-primary btn-perspective">Si, invia comunque</button></span></strong>
                           </div>
                    <?php }?>
                        <input type="hidden" name="inserimento" value="true"><?php if (!empty($_smarty_tpl->tpl_vars['permesso']->value)) {?><input type="hidden" name="permesso" value="true"><?php }?>
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" class="form-control rounded" name="nome" placeholder="Nome" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['nome'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['nome'];?>
<?php }?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label>Cognome</label>
                                    <input type="text" class="form-control rounded" name="cognome" placeholder="Cognome" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['cognome'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['cognome'];?>
<?php }?>">
                            </div>
                        </div>
                                                
                        <div class="clearfix"></div>
                        <div class="col-md-4">
                            <label>Data di Nascita</label><br />
                            
                            <?php $_smarty_tpl->tpl_vars['numero'] = new Smarty_variable(1, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['cicli'] = new Smarty_variable(31, null, 0);?>

                            <select name="giorno" id="basic" class="form-control rounded" data-live-search="true" style="float:left; width:33%;margin-right:5px;">
                                <option value="" disabled selected>Giorno</option>
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

                            <select name="mese" id="basic" class="form-control rounded" data-live-search="true" style="float:left; width:31%;margin-right:5px;">
                                <option value="" disabled selected>Mese</option>
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

                            <select name="anno" id="basic" class="form-control rounded" data-live-search="true" style="float:left; width:31%">
                                <option value="" disabled selected>Anno</option>
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
                            <select name="sesso" id="basic" class="form-control rounded" data-live-search="true" style="float:left; width:80%;margin-right:5px;">
                                <option value="" disabled selected>Seleziona</option>
                                <option <?php if (isset($_smarty_tpl->tpl_vars['post']->value['sesso'])&&$_smarty_tpl->tpl_vars['post']->value['sesso']=="M") {?>selected="selected"<?php }?> value="M">M</option>
                                <option <?php if (isset($_smarty_tpl->tpl_vars['post']->value['sesso'])&&$_smarty_tpl->tpl_vars['post']->value['sesso']=="F") {?>selected="selected"<?php }?> value="F">F</option>
                            </select>
                        </div>
                                
                        <div class="col-md-4">
                        <div class="form-group">
                        <label>Citt&agrave; di Nascita</label>
                                    <input type="text" class="form-control rounded" name="citta" placeholder="Citt&agrave;" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['citta'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['citta'];?>
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
" <?php if (isset($_smarty_tpl->tpl_vars['post']->value['provincia'])&&$_smarty_tpl->tpl_vars['post']->value['provincia']==((string)$_smarty_tpl->tpl_vars['key']->value)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                                           <?php } ?>
                                      </select>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label>Indirizzo Domicilio</label>
                                    <input type="text" class="form-control rounded" name="indirizzoDomicilio" placeholder="Indirizzo" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['indirizzoDomicilio'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['indirizzoDomicilio'];?>
<?php }?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Citt&agrave; Domicilio</label>
                                <input type="text" class="form-control rounded" name="cittaDomicilio" placeholder="Citt&agrave;" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['cittaDomicilio'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['cittaDomicilio'];?>
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
" <?php if (isset($_smarty_tpl->tpl_vars['post']->value['provinciaDomicilio'])&&$_smarty_tpl->tpl_vars['post']->value['provinciaDomicilio']==((string)$_smarty_tpl->tpl_vars['key']->value)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                                        <?php } ?>
                                    </select>
                            </div>
                        </div>

                                      
                        <div class="clearfix"></div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label>Codice Fiscale</label>
                                    <input type="text" class="form-control rounded" name="codFiscale" placeholder="Codice Fiscale" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['codFiscale'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['codFiscale'];?>
<?php }?>">
                            </div>
                        </div>
                        
                        <div class="clearfix"></div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nazionalit&agrave;</label>
                                    <input type="text" class="form-control rounded" name="nazionalita" placeholder="Es. Italiana" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['nazionalita'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['nazionalita'];?>
<?php }?>">
                                 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Lingua Parlata</label>
                                    <input type="text" class="form-control rounded" name="linguaParlata" placeholder="Es. Italiano" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['linguaParlata'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['linguaParlata'];?>
<?php }?>">
                                 
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                    <label>Telefono</label>
                                    <input type="text" class="form-control rounded" name="telefono" placeholder="Telefono" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['telefono'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['telefono'];?>
<?php }?>">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control rounded" name="email" placeholder="Email" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['email'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['email'];?>
<?php }?>">
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
