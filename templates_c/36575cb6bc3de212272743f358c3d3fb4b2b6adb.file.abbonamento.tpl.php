<?php /* Smarty version Smarty-3.1.19, created on 2015-11-26 17:58:51
         compiled from "./templates/abbonamento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1315628034565739eae159c7-31272009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36575cb6bc3de212272743f358c3d3fb4b2b6adb' => 
    array (
      0 => './templates/abbonamento.tpl',
      1 => 1448557129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1315628034565739eae159c7-31272009',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565739eae5c999_56645492',
  'variables' => 
  array (
    'status' => 0,
    'satus' => 0,
    'accessError' => 0,
    'error' => 0,
    'success' => 0,
    'precio' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565739eae5c999_56645492')) {function content_565739eae5c999_56645492($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/beecloud.it/easysmile.beecloud.it/panel/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class=content-page>
<div class=content>
<div class=container>
<div class=row>
<div class=col-sm-12>
<h4 class="pull-left page-title">Lista dei sconti <?php if (isset($_smarty_tpl->tpl_vars['status']->value)) {?><?php echo $_smarty_tpl->tpl_vars['satus']->value;?>
<?php }?>realizzate nella piattaforma</h4>
<ol class="breadcrumb pull-right">
<li><a href=#>BackOffice</a></li>
<li class=active>Sconti</li>
</ol>
</div>
</div>
    <div class="row"><div class="col-md-12">
         <?php if (!empty($_smarty_tpl->tpl_vars['accessError']->value)) {?>
                            <div class="alert alert-warning alert-bold-border fade in alert-dismissable margin-top"><i class="fa fa-fw fa-exclamation-triangle fa-3x text-warning" style="float:left; padding-right:20px"></i>
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Atenzione!<br>
                                        <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['accessError']->value;?>
</span></strong> 
                            </div>
				<?php }?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                            <div class="alert alert-danger alert-bold-border fade in alert-dismissable margin-top"><i class="fa fa-fw fa-exclamation-triangle fa-3x text-warning" style="float:left; padding-right:20px"></i>
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Atenzione!<br>
                                        <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></strong>
                            </div>
				<?php }?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['success']->value)) {?>
                            <div class="alert alert-success alert-bold-border fade in alert-dismissable margin-top"><i class="fa fa-fw fa-check fa-3x text-success" style="float:left; padding-right:20px"></i>
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Esito<br>
                                        <span class="text-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</span></strong>
                            </div>
				<?php }?>
            
        </div>
    </div>

                                          <div class=row>
                <div class=col-md-12>
                    <div class="panel panel-default">
                        <div class=panel-heading>
                            <h3 class=panel-title>Associati e inizia un mondo di vantaggi</h3> 
                        </div>
                        <div class=panel-body>
                            <div class="col-md-5">
             
                            
                            <h3>Prezzo dell'abbonamento annuale: <span class="label label-primary"><?php echo $_smarty_tpl->tpl_vars['precio']->value;?>
 &euro;</span></h3>
                            <h3>Inizio dell'abbonamento: <span class="label label-primary"> <?php echo smarty_modifier_date_format(time(),"%d/%m/%Y");?>
 </span> </h3>
                            <h3>Fine abbonamento: <span class="label label-primary"><?php echo smarty_modifier_date_format("+1 year","%d/%m/%Y");?>
</span></h3>
                            <br>
                            <a href="checkout.php?task=abbonamento" class="btn btn-block btn-lg btn-perspective btn-primary waves-effect waves-light">Abbonati subito!</a>
                            </div>
                            <div class="col-md-7 text-center">
                                <img src="http://staging.beecloud.it/easysmile/img/pictures/carta.png" alt="abbonati" style="width:80%; text-align:center;padding:1px; background:white; border:1px solid #ddd;">
                            </div>
                            <div class="clearfix"></div>
                            <hr>
                            <h4>Abbonati a EasySmile Group oggi e riceve questi vantaggi:</h4>
                                           <p>
                                Oggi la concorrenza diventa sempre più competitiva, per il singolo studio diventa, giorno dopo giorno, più difficile contrastarla, ecco perché nasce “Easy smile Group” un’associazione che riunisce medici operanti nel settore odontoiatrico per formare un gruppo in grado di contrastare anche le più grandi “aziende” concorrenti.
                            </p><p>Easy Smile Group mette a disposizione dei propri associati una serie di strumenti di marketing , supporto tecnologico e prezzi competitivi.</p><p>
                                Alcuni esempi di servizi messi a disposizione degli associati:</p>

                            <ul>
                                <li>Presenza nel sito come medico associato, mini sito del medico con tutte le specifiche desiderate, con la possibilità del medico di inserire all’interno tutto ciò che desidera, avendo cosi la possibilità si pubblicizzare l’intera gamma delle sue prestazioni</li>
                                <li>Esclusività territoriale per quanto riguarda il prodotto ortodontico “Easy Smile “</li>
                                <li>Pubblicità nella zona di appartenenza</li>
                                <li>Prenotazioni prima visita on line con ricerca geolocalizzata</li>
                                <li>Copertura assicurativa contro smarrimento o rottura delle mascherine Easy Smile  completamente GRATUITA</li>
                                <li>Visite elettromiografiche, tenz, pedana stabilomentrica presso lo studio  è compresa nel prodotto Easy smile</li>
                                <li>Prezzi delle mascherine “Easy Smile”assolutamente competitivi!</li>
                            </ul>
                            <p>Questo e tanto altro ti aspetta, chiedi un contatto con un nostro consulente che ti illustrerà nei dettagli le nostre proposte!
</p>
                        </div>
                    </div>
                </div>
                                          </div>

<?php echo $_smarty_tpl->getSubTemplate ("footer_aziende.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
