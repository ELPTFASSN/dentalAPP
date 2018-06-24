<?php /* Smarty version Smarty-3.1.19, created on 2015-10-21 22:32:02
         compiled from "./templates/footer_amm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1542783035627f642669a31-90388525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33e6b8bfcd5fc11c2a0d88f63e783c2041d9d8dc' => 
    array (
      0 => './templates/footer_amm.tpl',
      1 => 1445333869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1542783035627f642669a31-90388525',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'agenda' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5627f64269b9a6_79048366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5627f64269b9a6_79048366')) {function content_5627f64269b9a6_79048366($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/beecloud.it/easysmile.beecloud.it/libs/plugins/modifier.date_format.php';
?></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<footer class="footer text-center">
    2015 © Easy Smile Group s.r.l. PI:: xxxxxxxxxxxxxxx - Numero verde: 800 134 606 
</footer>
</div>
</div>
<script>var resizefunc = [];</script>
<script src=js/jquery.min.js></script>
<script src=js/bootstrap.min.js></script>
<script src=js/waves.js></script>
<script src=js/wow.min.js></script>
<script src=js/jquery.nicescroll.js type=text/javascript></script>
<script src=js/jquery.scrollTo.min.js></script>
<script src=assets/chat/moment-2.2.1.js></script>
<script src=assets/jquery-sparkline/jquery.sparkline.min.js></script>
<script src=assets/jquery-detectmobile/detect.js></script>
<script src=assets/fastclick/fastclick.js></script>
<script src=assets/jquery-slimscroll/jquery.slimscroll.js></script>
<script src=assets/jquery-blockui/jquery.blockUI.js></script>
<script src=assets/sweet-alert/sweet-alert.min.js></script>
<script src=assets/sweet-alert/sweet-alert.init.js></script>
<script src=assets/counterup/waypoints.min.js type=text/javascript></script>
<script src=js/jquery.app.js></script>
<script src="assets/timepicker/bootstrap-timepicker.min.js"></script>
<script src='assets/fullcalendar/fullcalendar.min.js'></script>

<script src="assets/fullcalendar/it.js"></script>
<?php if ($_SESSION['utente']['idRuoloUtente']!=@constant('AMMINISTRATORE')) {?> 
    
        <script type=text/javascript>jQuery(document).ready(function(a) {
        jQuery('#timepicker2').timepicker({showMeridian: false});
        $('#calendar').fullCalendar({
            slotDuration: '01:00:00',
            minTime: '07:00:00',
            maxTime: '23:00:00',
            defaultView: 'month',
            handleWindowResize: true,
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            lang: 'it',
            events: [                                      
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['agenda']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                            {
                                title: "<?php if ($_smarty_tpl->tpl_vars['value']->value['fkStatoAppuntamento']=='1') {?> - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['dataFine'],"H:i");?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['value']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['cognome'];?>
<?php }?>",
                                                    start: "<?php echo $_smarty_tpl->tpl_vars['value']->value['dataAppuntamento'];?>
",
                                                    end:'<?php echo $_smarty_tpl->tpl_vars['value']->value['dataFine'];?>
',
                                                    className: "<?php if ($_smarty_tpl->tpl_vars['value']->value['fkStatoAppuntamento']=='3') {?>bg-success<?php } elseif ($_smarty_tpl->tpl_vars['value']->value['fkStatoAppuntamento']=='1') {?>bg-muted<?php } elseif ($_smarty_tpl->tpl_vars['value']->value['fkStatoAppuntamento']=='4') {?>bg-warning<?php } elseif ($_smarty_tpl->tpl_vars['value']->value['fkStatoAppuntamento']=='9') {?>bg-danger<?php }?>",
                                            <?php if (!empty($_smarty_tpl->tpl_vars['value']->value['idAgenda'])&&$_smarty_tpl->tpl_vars['value']->value['fkStatoAppuntamento']!='1') {?>url: 'agenda.php?task=gestisci&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['idAgenda'];?>
'<?php }?>
                                                                    },
        <?php } ?>
        
                                                    ],
                                                    timeFormat: 'H:mm',
                                                    businessHours: {start: '07:00',
                                                        end: '23:00',
                                                        dow: [1, 2, 3, 4, 5]
                                                    },
                                                    eventClick: function(event) {
                                            if (event.url) {
                                            window.location.replace(event.url);
                                                    return false;
                                            }
                                        }
                                                });
                                               
                                            });</script>
        
    <?php }?>
</body>
</html><?php }} ?>
