<?php /* Smarty version Smarty-3.1.19, created on 2016-02-23 11:20:05
         compiled from "./templates/scheda_minisito.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6340704655652cfdd578639-70251340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a938c0e749498cb0d1b994e9ed426b662fa5def9' => 
    array (
      0 => './templates/scheda_minisito.tpl',
      1 => 1456222803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6340704655652cfdd578639-70251340',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5652cfdd5d0f28_16620806',
  'variables' => 
  array (
    'azienda' => 0,
    'servicios' => 0,
    'lista' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652cfdd5d0f28_16620806')) {function content_5652cfdd5d0f28_16620806($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<div class="content-page" style="margin: 0;">
    <!-- Start content -->
    <div class="content">



        <div class="wraper container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="bg-picture text-center" style="<?php if (file_exists(((string)@constant('IMG'))."users/".((string)$_smarty_tpl->tpl_vars['azienda']->value['idAzienda'])."/bg.jpg")) {?>background-image:url('<?php echo @constant('URL_IMAGES');?>
users/<?php echo $_smarty_tpl->tpl_vars['azienda']->value['idAzienda'];?>
/bg.jpg') <?php } else { ?>background-image:url('http://imgbox.es/share/VsDQZ.jpg')<?php }?>">
                        <div class="bg-picture-overlay"></div>
                        <div class="profile-info-name">

                            <h1 class="text-white"><?php echo $_smarty_tpl->tpl_vars['azienda']->value['denominazione'];?>
</h1>
                            <?php if ($_SESSION['utente']['ruolo']==="PAZIENTE") {?><div class="col-md-3 col-md-offset-3"><a href="javascript:history.back()" class="btn btn-lg btn-danger btn-block"><i class="fa fa-backward"></i> Torna indietro</a></div><div class="col-md-3"> <a href="home_paziente.php?choose=<?php echo $_smarty_tpl->tpl_vars['azienda']->value['idAzienda'];?>
" class="btn btn-lg btn-primary btn-block">Sceglie questo studio  <i class="fa fa-check"></i></a></div><?php }?>
                        </div>
                        <div class="pull-right"><br>
                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        <div class="addthis_native_toolbox"></div>
                    </div>
                    </div>
                    <!--/ meta -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12"> 
                    
                    <div class="tab-content profile-tab-content"> 
                        <div class="tab-pane active" id="home-2"> 
                            <div class="row">
                                <div class="col-md-4">
                                    <!-- Personal-Information -->
                                    <div class="panel panel-default  panel-primary panel-border">
                                        <div class="panel-heading"> 
                                            <h3 class="panel-title">Informazioni</h3> 
                                        </div> 
                                        <div class="panel-body"> 
                                            <div class="about-info-p">
                                                <strong>Regione</strong>
                                                <br/>
                                                <p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['azienda']->value['nomeregione'];?>
</p>
                                            </div>
                                            <div class="about-info-p">
                                                <strong>Provincia</strong>
                                                <br/>
                                                <p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['azienda']->value['nomeprovincia'];?>
</p>
                                            </div>
                                            <div class="about-info-p">
                                                <strong>Citt&agrave;</strong>
                                                <br/>
                                                <p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['azienda']->value['nomecomune'];?>
</p>
                                            </div>
                                            <div class="about-info-p">
                                                <strong>CAP</strong>
                                                <br/>
                                                <p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['azienda']->value['CAP'];?>
</p>
                                            </div>
                                            <div class="about-info-p m-b-0">
                                                <strong>Indirizzo</strong>
                                                <br/>
                                                <p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['azienda']->value['indirizzo'];?>
 <?php echo $_smarty_tpl->tpl_vars['azienda']->value['numero'];?>
</p>
                                            </div>
                                        </div> 
                                    </div>
                                            
                                            <div class="panel panel-default panel-primary panel-border">
                                        <div class="panel-heading"> 
                                            <h3 class="panel-title">Servizi</h3> 
                                        </div> 
                                        <div class="panel-body"> 
                                            <ul class='list-group'>
                                                 <?php $_smarty_tpl->tpl_vars["servicios"] = new Smarty_variable($_smarty_tpl->tpl_vars['azienda']->value['servizi'], null, 0);?> 

                                        
                                        <?php $_smarty_tpl->tpl_vars["lista"] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['servicios']->value), null, 0);?> 

                                     
                                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['lista']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?> 
                                            <li class='list-group-item'><span class='badge badge-success'><i class='fa fa-fw fa-check'></i></span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lista']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']], ENT_QUOTES, 'UTF-8', true);?>
</li>
                                        <?php endfor; endif; ?> 
                                            </ul>
                                        </div> 
                                    </div>
                                    <!-- Personal-Information -->

                                </div>


                                <div class="col-md-8">
                                    <!-- Personal-Information -->
                                    <div class="panel panel-default  panel-primary panel-border">
                                        <div class="panel-heading"> 
                                            <h3 class="panel-title">Descrizione</h3> 
                                        </div> 
                                        <div class="panel-body"> 
                                            <?php echo $_smarty_tpl->tpl_vars['azienda']->value['descrizione'];?>

                                        </div> 
                                    </div>
                                    <!-- Personal-Information -->

                                    <div class="panel panel-default  panel-primary panel-border">
                                        <div class="panel-heading"> 
                                            <h3 class="panel-title">Mappa</h3> 
                                        </div> 
                                        <div class="panel-body"> 
                                            <div id="gmaps-basic" class="gmaps"></div>

                                        </div> 
                                    </div>

                                </div>

                            </div>
                        </div> 
                   </div> 
                </div> 
            </div>
        </div>
    </div> <!-- container -->

</div> <!-- content -->
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53259c3547de7402" async="async"></script>

<?php echo $_smarty_tpl->getSubTemplate ("footer_minisito.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
