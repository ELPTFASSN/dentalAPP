<?php /* Smarty version Smarty-3.1.19, created on 2014-10-24 12:15:11
         compiled from "./templates/aggiunge_altro_esame.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1806315730543cdd4d07c5d2-15392816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31adcbd4eb5b0dc5873315c0f6952a5faea99e83' => 
    array (
      0 => './templates/aggiunge_altro_esame.tpl',
      1 => 1414145702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1806315730543cdd4d07c5d2-15392816',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543cdd4d0f45a6_93100763',
  'variables' => 
  array (
    'paziente' => 0,
    'cicli' => 0,
    'post' => 0,
    'numero' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543cdd4d0f45a6_93100763')) {function content_543cdd4d0f45a6_93100763($_smarty_tpl) {?><div id="small-dialog" class="zoom-anim-dialog">
    <h2>Aggiungere altro esame</h2>
    
    <hr>
<form action="<?php echo @constant('URL_FILE');?>
aggiunge_altro_esame.php" method="post" name="aggiunge_altro_esame" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['paziente']->value;?>
"><input type="hidden" name="inserimento" value="TRUE">
                                                
                        <div class="clearfix"></div>
                        <div class="col-md-6">
                            <label>Tipo di Esame</label><br />
<input type="text" class="form-control rounded" name="esame" placeholder="Nome del Esame" value="">
                            
                        </div>
                            <div class="col-md-6">
                            <label>Data</label><br />
                            
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
                            <?php $_smarty_tpl->tpl_vars['cicli'] = new Smarty_variable(14, null, 0);?>

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
                                <div class="clearfix"></div><br>
                        <div class="col-md-12">
                            <div class="form-group">
                                    <label>Scansione</label>
                                    <input type="file" class="btn btn-info btn-perspective btn-file" name="uploadFile" style="padding: 15px 35px 15px 25px;width: 99%;">
                            </div>
                        </div>

                                <div class="clearfix"></div><br>
                                <div class="col-md-6 col-md-offset-6 text-right"> <button type="submit" class="btn btn-perspective btn-primary">Aggiungi <i class="fa fa-fw fa-plus"></i></button> </div>
                    </form>
</div><?php }} ?>
