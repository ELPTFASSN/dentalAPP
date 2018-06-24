<?php /* Smarty version Smarty-3.1.19, created on 2016-02-01 19:03:59
         compiled from "./templates/disponibilita_agenda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4026804615652cfd429f550-53821032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e5bd955ff997b66bc53d91e796bf60626ffe719' => 
    array (
      0 => './templates/disponibilita_agenda.tpl',
      1 => 1454349828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4026804615652cfd429f550-53821032',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5652cfd42d0423_36812715',
  'variables' => 
  array (
    'error' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652cfd42d0423_36812715')) {function content_5652cfd42d0423_36812715($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Gestisci disponibilità</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_medico.php">BackOffice</a></li>
                        <li><a href="agenda.php">Agenda</a></li>
                        <li class="active">Gestisci disponibilità</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                        <div class="alert alert-danger alert-bold-border fade in animated flash">
                            <i class="fa fa-fw fa-3x fa-exclamation-circle text-danger" style="float:right;"></i>
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
                        <div class="panel-heading"><h3 class="panel-title">Inserisci ore di NON disponibilità</h3></div>
                        <div class="panel-body">

                            <form action="<?php echo @constant('URL_FILE');?>
agenda.php" method="post" name="aggiorna_profilo_medico">
                                <input type="hidden" name="disponibilita" value="cambia">
                                
                                <div class="col-md-12">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>    
                                                <td>Lunedì</td>
                                                <td>Martedì</td>
                                                <td>Mercoledì</td>
                                                <td>Giovedì</td>
                                                <td>Venerdì</td>
                                                <td>Sabato</td>
                                                <td>Domenica</td>
                                                
                                            </tr>
                                            <tr>

                                                <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 7+1 - (1) : 1-(7)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                                <td><div class="checkbox checkbox-primary">
                                            <input id="acceptTerms-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
}" name="prima<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" type="checkbox">
                                                    <label for="acceptTerms-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
">8:00</label>
                                                </td>
                                                <?php }} ?>
                                            </tr>
                                            <tr>
                                                <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 7+1 - (1) : 1-(7)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                                <td><div class="checkbox checkbox-primary">
                                            <input id="acceptTerms-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
}" name="prima<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" type="checkbox">
                                                    <label for="acceptTerms-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
">9:00</label>
                                                </td>
                                                <?php }} ?>
</tr>
<tr>
                                               <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 7+1 - (1) : 1-(7)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                                <td><div class="checkbox checkbox-primary">
                                            <input id="acceptTerms-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
}" name="prima<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" type="checkbox">
                                                    <label for="acceptTerms-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
">10:00</label>
                                                </td>
                                                <?php }} ?>
                                            </tr>
                                            <tr>
                                                <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 7+1 - (1) : 1-(7)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                                <td><div class="checkbox checkbox-primary">
                                            <input id="acceptTerms-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
}" name="prima<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" type="checkbox">
                                                    <label for="acceptTerms-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
">11:00</label>
                                                </td>
                                                <?php }} ?>
                                                
                                            </tr>
                                            <tr>
                                                <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 7+1 - (1) : 1-(7)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                                <td><div class="checkbox checkbox-primary">
                                            <input id="acceptTerms-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
}" name="prima<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" type="checkbox">
                                                    <label for="acceptTerms-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
">12:00</label>
                                                </td>
                                                <?php }} ?>
                                            </tr>
                                            <tr>
                                                <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 7+1 - (1) : 1-(7)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                                <td><div class="checkbox checkbox-primary">
                                            <input id="acceptTerms-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
}" name="prima<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" type="checkbox">
                                                    <label for="acceptTerms-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
">13:00</label>
                                                </td>
                                                <?php }} ?>
                                            </tr>
                                            <tr>
                                                <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 7+1 - (1) : 1-(7)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                                <td><div class="checkbox checkbox-primary">
                                            <input id="acceptTerms-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
}" name="prima<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" type="checkbox">
                                                    <label for="acceptTerms-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
">14:00</label>
                                                </td>
                                                <?php }} ?>
                                            </tr>
                                            <tr>
                                                <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 7+1 - (1) : 1-(7)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                                <td><div class="checkbox checkbox-primary">
                                            <input id="acceptTerms-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
}" name="prima<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" type="checkbox">
                                                    <label for="acceptTerms-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
">15:00</label>
                                                </td>
                                                <?php }} ?>
                                            </tr>
                                            <tr>
                                                <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 7+1 - (1) : 1-(7)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                                <td><div class="checkbox checkbox-primary">
                                            <input id="acceptTerms-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
}" name="prima<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" type="checkbox">
                                                    <label for="acceptTerms-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
">16:00</label>
                                                </td>
                                                <?php }} ?>
                                            </tr>
                                            <tr>
                                                <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 7+1 - (1) : 1-(7)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                                <td><div class="checkbox checkbox-primary">
                                            <input id="acceptTerms-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
}" name="prima<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" type="checkbox">
                                                    <label for="acceptTerms-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
">17:00</label>
                                                </td>
                                                <?php }} ?>
                                            </tr>
                                            <tr>
                                                <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 7+1 - (1) : 1-(7)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                                <td><div class="checkbox checkbox-primary">
                                            <input id="acceptTerms-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
}" name="prima<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" type="checkbox">
                                                    <label for="acceptTerms-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
">18:00</label>
                                                </td>
                                                <?php }} ?>
                                            </tr>
                                            <tr>
                                                <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 7+1 - (1) : 1-(7)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                                <td><div class="checkbox checkbox-primary">
                                            <input id="acceptTerms-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
}" name="prima<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" type="checkbox">
                                                    <label for="acceptTerms-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
">19:00</label>
                                                </td>
                                                <?php }} ?>
                                            </tr>
                                            <tr>
                                                <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 7+1 - (1) : 1-(7)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                                                <td><div class="checkbox checkbox-primary">
                                            <input id="acceptTerms-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
}" name="prima<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" type="checkbox">
                                                    <label for="acceptTerms-<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
">20:00</label>
                                                </td>
                                                <?php }} ?>
                                            </tr>
                                        </thead>
                                    </table>
 <a href="agenda.php" class="btn btn-danger btn-lg">Ritorna <i class="fa fa-times"></i></a> <button type="submit" class="btn btn-primary btn-lg">Invia <i class="fa fa-check"></i></button>
                                </div>
                                
                                <div class="clearfix"></div><p><hr></p>
                                        <div class="col-md-12"><div class="alert alert-info"><p><i class="fa fa-fw fa-info-circle"></i> Tutti giorni ed ore che entrano dentro del range verrano segnalate come NON disponibile per realizzare appuntamenti.</p></div></div>
                                        <div class="clearfix"></div>
                                
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Inserisci range di NON disponibilità</h3></div>
                        <div class="panel-body">

                            <form action="<?php echo @constant('URL_FILE');?>
agenda.php" method="post" name="aggiorna_profilo_medico">
                                <input type="hidden" name="disponibilita" value="cambia">
                                
                                <div class="col-md-8">
                                    <label>Sceglie giorno o giorni <span class="text-danger">*</span></label><br />

<div id="datepicker" data-date="12/03/2012"></div>
<input type="hidden" name="cuando" id="my_hidden_input">
                                </div>
                                <div class="col-md-4">
                                    <label>Dalle <span class="text-danger">*</span></label><br />
                                    <div class="input-group m-b-15">

                                        <div class="bootstrap-timepicker"><input id="timepicker2" type="text" name="tiempo" class="form-control input-lg" data-minute-step="30"/></div>
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                    </div>
                                    <label>Alle <span class="text-danger">*</span></label><br />
                                    <div class="input-group m-b-15">

                                        <div class="bootstrap-timepicker"><input id="timepicker1" type="text" name="tiempo2" class="form-control input-lg" data-minute-step="30"/></div>
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                    </div>
                                    <br><br> <a href="agenda.php" class="btn btn-danger btn-lg">Ritorna <i class="fa fa-times"></i></a> <button type="submit" class="btn btn-primary btn-lg">Invia <i class="fa fa-check"></i></button>
                                </div>
                                
                                <div class="clearfix"></div><p><hr></p>
                                        <div class="col-md-12"><div class="alert alert-info"><p><i class="fa fa-fw fa-info-circle"></i> Tutti giorni ed ore che entrano dentro del range verrano segnalate come NON disponibile per realizzare appuntamenti.</p></div></div>
                                        <div class="clearfix"></div>
                                
                            </form>
                        </div>

                    </div>
                </div>
            </div>
                                          <div class=row>
                <div class=col-lg-12>
                    <div class="panel panel-default">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">I miei appuntamenti</h3> 
                        </div> 
                        <div class="panel-body"> 

                            <div id="calendar"></div>
                            <div class="clearfix"></div>
                            <hr style="margin-top:0px;">

                        </div>

                    </div>
                </div>
            </div>

            <?php echo $_smarty_tpl->getSubTemplate ("footer_modifica_1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
