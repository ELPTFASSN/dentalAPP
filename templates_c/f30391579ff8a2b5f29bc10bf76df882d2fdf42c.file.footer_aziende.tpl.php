<?php /* Smarty version Smarty-3.1.19, created on 2016-02-18 12:40:31
         compiled from "./templates/footer_aziende.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17301135535652cfaee49de3-44172798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f30391579ff8a2b5f29bc10bf76df882d2fdf42c' => 
    array (
      0 => './templates/footer_aziende.tpl',
      1 => 1455795586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17301135535652cfaee49de3-44172798',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5652cfaee589f3_40617204',
  'variables' => 
  array (
    'esito' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652cfaee589f3_40617204')) {function content_5652cfaee589f3_40617204($_smarty_tpl) {?></div>
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
    <div class="container pie">
    <div class="col-md-7 text-left">
        Copyright ©2016 Easy Smile Group s.r.l. PI:: xxxxxxxxxxxxxxx  - Numero verde: 800 134 606  <br><a href="http://www.biobitlab.com" style='color:#888;'>Design Biobit Lab</a>
			</div>
			<div class="col-md-5 text-right">
				<div class="social-icons">
					<a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-pinterest"></i></a><a href="#"><i class="fa fa-instagram"></i></a>
				</div>
			</div>
    </div>
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
    
        $("#datatable").dataTable({order:[[0,"desc"]],oLanguage:{sEmptyTable:"Nessun dato presente nella tabella",sInfo:"Vista da _START_ a _END_ di _TOTAL_ elementi",sInfoEmpty:"Vista da 0 a 0 di 0 elementi",sInfoFiltered:"(filtrati da _MAX_ elementi totali)",sInfoPostFix:"",sInfoThousands:",",sLengthMenu:"Visualizza _MENU_ elementi",sLoadingRecords:"Caricamento...",sProcessing:"Elaborazione...",sSearch:"Cerca:",sZeroRecords:"La ricerca non ha portato alcun risultato.",oPaginate:{sFirst:"Inizio",sPrevious:"Precedente",sNext:"Successivo",sLast:"Fine"},oAria:{sSortAscending:": attiva per ordinare la colonna in ordine crescente",sSortDescending:": attiva per ordinare la colonna in ordine decrescente"}}});

<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?> 
    $.Notification.notify('error','top right', 'Esito operazione', "<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
");<?php }?>
    
    



});




</script>

</body>
</html><?php }} ?>
