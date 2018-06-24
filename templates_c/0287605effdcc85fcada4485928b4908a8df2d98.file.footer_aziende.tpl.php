<?php /* Smarty version Smarty-3.1.19, created on 2015-10-21 22:32:11
         compiled from "./templates/footer_aziende.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4792538785627f64b1a0751-61187605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0287605effdcc85fcada4485928b4908a8df2d98' => 
    array (
      0 => './templates/footer_aziende.tpl',
      1 => 1445333871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4792538785627f64b1a0751-61187605',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'esito' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5627f64b1aef65_32041488',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5627f64b1aef65_32041488')) {function content_5627f64b1aef65_32041488($_smarty_tpl) {?></div>
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
<script>var resizefunc=[];</script>
<script src=js/jquery.min.js></script>
<script src=js/bootstrap.min.js></script>
<script src=js/waves.js></script>
<script src=js/wow.min.js></script>
<script src=js/jquery.nicescroll.js type=text/javascript></script>
<script src=js/jquery.scrollTo.min.js></script>
<script src=assets/jquery-detectmobile/detect.js></script>
<script src=assets/fastclick/fastclick.js></script>
<script src=assets/jquery-slimscroll/jquery.slimscroll.js></script>
<script src=assets/jquery-blockui/jquery.blockUI.js></script>
<script src=js/jquery.app.js></script>
<script src=assets/datatables/jquery.dataTables.min.js></script>
<script src=assets/datatables/dataTables.bootstrap.js></script>
        <script src="assets/sweet-alert/sweet-alert.min.js"></script>
        <script src="assets/sweet-alert/sweet-alert.init.js"></script>
                <script src="assets/notifications/notify.min.js"></script>
        <script src="assets/notifications/notify-metro.js"></script>
        <script src="assets/notifications/notifications.js"></script>

<script type=text/javascript>
    $(document).ready(function(){ 
<?php if (isset($_smarty_tpl->tpl_vars['esito']->value)) {?> 
    $.Notification.notify('success','top right', 'Esito operazione', "<?php echo $_smarty_tpl->tpl_vars['esito']->value;?>
");<?php }?>
    
        $("#datatable").dataTable({order:[[2,"desc"]],oLanguage:{sEmptyTable:"Nessun dato presente nella tabella",sInfo:"Vista da _START_ a _END_ di _TOTAL_ elementi",sInfoEmpty:"Vista da 0 a 0 di 0 elementi",sInfoFiltered:"(filtrati da _MAX_ elementi totali)",sInfoPostFix:"",sInfoThousands:",",sLengthMenu:"Visualizza _MENU_ elementi",sLoadingRecords:"Caricamento...",sProcessing:"Elaborazione...",sSearch:"Cerca:",sZeroRecords:"La ricerca non ha portato alcun risultato.",oPaginate:{sFirst:"Inizio",sPrevious:"Precedente",sNext:"Successivo",sLast:"Fine"},oAria:{sSortAscending:": attiva per ordinare la colonna in ordine crescente",sSortDescending:": attiva per ordinare la colonna in ordine decrescente"}}});

<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?> 
    $.Notification.notify('error','top right', 'Esito operazione', "<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
");<?php }?>
    
    



});




</script>

</body>
</html><?php }} ?>
