<?php /* Smarty version Smarty-3.1.19, created on 2014-10-22 10:07:28
         compiled from "./templates/modifica_medico.tpl" */ ?>
<?php /*%%SmartyHeaderCode:469756460543b8287d2de22-17738798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58d4a1a6949c367530d91905b9c9eaaa69887bd8' => 
    array (
      0 => './templates/modifica_medico.tpl',
      1 => 1413877379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '469756460543b8287d2de22-17738798',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543b828801d4f6_98288591',
  'variables' => 
  array (
    'error' => 0,
    'idUtente' => 0,
    'oMedico' => 0,
    'province' => 0,
    'key' => 0,
    'value' => 0,
    'cicli' => 0,
    'post' => 0,
    'numero' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543b828801d4f6_98288591')) {function content_543b828801d4f6_98288591($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="page-content">

        <div class="container-fluid">
            
            
            <h1 class="page-heading">Aggiorna profilo</h1>
                <div class="the-box" style="min-height: 540px;">
                    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                            <div class="alert alert-danger alert-bold-border fade in animated flash">
                                <i class="fa fa-fw fa-5x fa-exclamation-circle text-danger" style="float:right;"></i>
                                   <strong>Si sono verificati i seguenti errori:<br>
                                       <span class="text-danger"><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php }?></span></strong>
                           </div>
                    <?php }?>
                    <form action="<?php echo @constant('URL_FILE');?>
modifica_medico.php" method="post" name="aggiorna_profilo_medico">
                        <input type="hidden" name="idUtente" value="<?php if (isset($_smarty_tpl->tpl_vars['idUtente']->value)) {?><?php echo $_smarty_tpl->tpl_vars['idUtente']->value;?>
<?php }?>">
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" class="form-control rounded" name="nome" placeholder="Nome" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->nome)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->nome;?>
<?php }?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label>Cognome</label>
                                    <input type="text" class="form-control rounded" name="cognome" placeholder="Cognome" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->cognome)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->cognome;?>
<?php }?>">
                            </div>
                        </div>
                                                <div class="col-md-6">
                            <div class="form-group">
                                    <label>Telefono</label>
                                    <input type="text" class="form-control rounded" name="telefono" placeholder="Telefono" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->telefono)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->telefono;?>
<?php }?>">
                            </div>
                        </div>
                                                <div class="col-md-6">
                            <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control rounded" name="email" placeholder="Email" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->email)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->email;?>
<?php }?>">
                            </div>
                        </div>
                                                <div class="col-md-6">
                            <div class="form-group">
                                    <label>Indirizzo</label>
                                    <input type="text" class="form-control rounded" name="indirizzo" placeholder="Indirizzo" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->indirizzo)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->indirizzo;?>
<?php }?>">
                            </div>
                        </div>
                                                <div class="col-md-4">
                            <div class="form-group">
                                    <label>Citt&agrave;</label>
                                    <input type="text" class="form-control rounded" name="citta" placeholder="Citt&agrave;" value="<?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->citta)) {?><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->citta;?>
<?php }?>">
                            </div>
                        </div>
                                                <div class="col-md-2">
                            <div class="form-group">
                                    <label>Provincia</label><?php echo $_smarty_tpl->tpl_vars['oMedico']->value->provincia;?>

                                      <select name="provincia" class="form-control rounded">
                                           <option>Seleziona la provincia</option>
                                           <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['province']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                                               <option <?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['oMedico']->value->provincia) {?>selected=selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                                           <?php } ?>
                                      </select>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                                                                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password <small>(lasciare vuoto per non modificare)</small></label>
                                    <input type="password" class="form-control rounded" name="password">
                                 
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Tipologia</label>
                                <div class="radio"><input name="specializzazione" type="radio" id="Medico_di_Base" <?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->specializzazione)) {?><?php if ($_smarty_tpl->tpl_vars['oMedico']->value->specializzazione=="Medico_di_Base") {?>checked="checked"<?php }?><?php }?> value="Medico_di_Base" onclick="checkAltro();" > <label for="Medico_di_Base" class="label-info-medici" onclick="checkAltro();" >Medico di Base</label></div>
                                <div class="radio"><input name="specializzazione" type="radio" id="Epatologo" <?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->specializzazione)) {?><?php if ($_smarty_tpl->tpl_vars['oMedico']->value->specializzazione=="Epatologo") {?>checked="checked"<?php }?><?php }?> value="Epatologo" onclick="checkAltro();" > <label for="Epatologo" class="label-info-medici" onclick="checkAltro();">Epatologo</label></div>
                                <div class="radio"><input name="specializzazione" type="radio" id="Altro" <?php if (isset($_smarty_tpl->tpl_vars['oMedico']->value->specializzazione)) {?><?php if (($_smarty_tpl->tpl_vars['oMedico']->value->specializzazione!="Medico_di_Base"&&$_smarty_tpl->tpl_vars['oMedico']->value->specializzazione!="Epatologo")) {?>checked="checked"<?php }?><?php }?> value="Altro" onclick="checkAltro();" /><label for="Altro" class="label-info-medici" onclick="checkAltro();" >Altro</label></div>
                        

                            </div>
                        </div>
                        
                        
                        
                        
                        <div class="col-md-4">
                            <label>Data di specializzazione</label><br />
                            
                            <?php $_smarty_tpl->tpl_vars['numero'] = new Smarty_variable(1, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['cicli'] = new Smarty_variable(31, null, 0);?>

                            <select name="giorno" id="basic" class="form-control no-border rounded" data-live-search="true" style="float:left; width:33%;margin-right:5px;">
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

                            <select name="mese" id="basic" class="form-control no-border rounded" data-live-search="true" style="float:left; width:31%;margin-right:5px;">
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

                            <select name="anno" id="basic" class="form-control no-border rounded" data-live-search="true" style="float:left; width:31%">
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
                                
                                <div class="col-md-6"></div>
                        
                        <div class="clearfix"></div>
                        
                        
                        <div class="col-md-12">
                            <div class="col-md-4" >
                                <div class="form-group" id="altro_value" <?php if (!isset($_smarty_tpl->tpl_vars['post']->value['altro_value'])) {?>style="display: none;"<?php }?>>
                                    <label>Tipo Specializzazione</label>
                                    <input type="text" class="form-control rounded" name="altro_value" placeholder="Tipo specializzazione" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['altro_value'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['altro_value'];?>
<?php }?>">
                                </div>  
                            </div>
                            <div class="col-md-3 col-md-offset-5">
                                <a href="home_amministratore.php" class="btn btn-danger btn-lg btn-perspective">Anulla<i class="fa fa-fw fa-times"></i></a> <button class="btn btn-action btn-lg btn-perspective btn-primary">Invia<i class="fa fa-fw fa-check"></i></button>
                            </div>
                        
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
        </div>

    </div>

                        

    <script type="text/javascript">
        function checkAltro( ) {
            
            if (document.aggiorna_profilo_medico.Altro.checked == false)
                document.getElementById("altro_value").style.display = "none";
            else
                document.getElementById("altro_value").style.display = "block";
        }
    </script>

                        
<?php echo $_smarty_tpl->getSubTemplate ("footer_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
