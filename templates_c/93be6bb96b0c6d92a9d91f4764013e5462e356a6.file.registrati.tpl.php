<?php /* Smarty version Smarty-3.1.19, created on 2014-10-14 09:45:32
         compiled from "./templates/registrati.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1764870467543cd49c857fa5-39160718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93be6bb96b0c6d92a9d91f4764013e5462e356a6' => 
    array (
      0 => './templates/registrati.tpl',
      1 => 1411391488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1764870467543cd49c857fa5-39160718',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'post' => 0,
    'cicli' => 0,
    'numero' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543cd49c8f4759_80730022',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543cd49c8f4759_80730022')) {function content_543cd49c8f4759_80730022($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <div class="login-header text-center">
			<img src="<?php echo @constant('URL_IMG');?>
logo_login.png" class="logo" alt="Logo">
            </div>
		<div class="login-wrapper">

                <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                            <div class="alert alert-danger alert-bold-border fade in alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                   <strong>Si sono verificati i seguenti errori:<br>
                                       <span class="text-danger"><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php }?></span></strong>
                           </div>
                <?php }?>
                <span>Inserisci i seguenti dati per registrarti	</span>

                            <form action="<?php echo @constant('URL_FILE');?>
registrati.php" method="post" role="form" name="registrati" class="form-signin">
                                
                                <div class="form-group has-feedback no-label">
                                    <input type="text" class="form-control no-border rounded" name="nome" placeholder="Nome" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['nome'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['nome'];?>
<?php }?>">
                                </div>
                                <div class="form-group has-feedback no-label">
                                    <input type="text" class="form-control no-border rounded" name="cognome" placeholder="Cognome" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['cognome'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['cognome'];?>
<?php }?>">
                                  </div>
                                <div class="form-group has-feedback no-label">
                                    <input type="telefono" name="telefono" id="telefono" class="form-control no-border rounded" placeholder="Telefono" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['telefono'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['telefono'];?>
<?php }?>">
                                </div>
                                <div class="form-group has-feedback no-label">    
                                    <input type="email" name="email" id="email" class="form-control no-border rounded" placeholder="Email" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['email'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['email'];?>
<?php }?>">
                                </div>
                            <div class="form-group">


                                            <div class="alert alert-bold-border alert-info rounded"><input name="specializzazione" type="radio" id="Medico_di_Base" <?php if (isset($_smarty_tpl->tpl_vars['post']->value['specializzazione'])) {?><?php if ($_smarty_tpl->tpl_vars['post']->value['specializzazione']=="Medico_di_Base") {?>checked="checked"<?php }?><?php }?> value="Medico_di_Base" onclick="checkAltro();" > <label for="Medico_di_Base" class="label-info-medici" onclick="checkAltro();" >Medico di Base</label><br>
                                                <input name="specializzazione" type="radio" id="Epatologo" <?php if (isset($_smarty_tpl->tpl_vars['post']->value['specializzazione'])) {?><?php if ($_smarty_tpl->tpl_vars['post']->value['specializzazione']=="Epatologo") {?>checked="checked"<?php }?><?php }?> value="Epatologo" onclick="checkAltro();" > <label for="Epatologo" class="label-info-medici" onclick="checkAltro();">Epatologo</label><br>
                                            <input name="specializzazione" type="radio" id="Altro" <?php if (isset($_smarty_tpl->tpl_vars['post']->value['specializzazione'])) {?><?php if ($_smarty_tpl->tpl_vars['post']->value['specializzazione']=="Altro") {?>checked="checked"<?php }?><?php }?> value="Altro" onclick="checkAltro();" /><label for="Altro" class="label-info-medici" onclick="checkAltro();" >Altro</label></div>
                            </div>
                            <div class="form-group has-feedback no-label">
                                <input type="text" name="altro_value" id="altro_value" class="form-control no-border rounded" style="display: none;" placeholder="Tipo specializzazione" value="<?php if (isset($_smarty_tpl->tpl_vars['error']->value['altro_value'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['altro_value'];?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['error']->value['specializzazione'])) {?><?php if ($_smarty_tpl->tpl_vars['post']->value['specializzazione']!="Altro") {?>style="display: none"<?php }?><?php }?>>
                            </div>
                            <span class="label-info-medici" >
                                Data acquisizione specializzazione<br />
                            </span>
                            <div class="form-group">
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
                                            <option <?php if ($_smarty_tpl->tpl_vars['post']->value['giorno']==$_smarty_tpl->tpl_vars['numero']->value) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
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
                                            <option <?php if ($_smarty_tpl->tpl_vars['post']->value['mese']==$_smarty_tpl->tpl_vars['numero']->value) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
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
                                            <option <?php if ($_smarty_tpl->tpl_vars['post']->value['anno']==$_smarty_tpl->tpl_vars['numero']->value) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
</option>
                                            <?php $_smarty_tpl->tpl_vars['numero'] = new Smarty_variable($_smarty_tpl->tpl_vars['numero']->value-1, null, 0);?>
                                    <?php endfor; endif; ?>

                                </select>
                            </div>
                                    <br /><br />
                            <input type="submit" value="Invia" class="btn btn-primary btn-lg btn-perspective btn-block">

                            </form>
                                    <p class="text-center text-white"><small>Copyright &copy; <strong>Agenzia Regionale del Lazio per i Trapianti e le patologie connesse</strong>. <br>P.IVA 08054201002. Tutti i diritti riservati. </small></p>
			</div>


    <script type="text/javascript">
        function checkAltro( ) {
            
            if (document.registrati.Altro.checked == false)
                document.getElementById("altro_value").style.display = "none";
            else
                document.getElementById("altro_value").style.display = "block";
        }
    </script>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
