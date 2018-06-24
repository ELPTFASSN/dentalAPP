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
</div>
<footer class="footer text-center">
    <div class="container pie">
    <div class="col-md-7 text-left">
        Copyright ©2016 Dental Italia Group s.r.l. PI:: xxxxxxxxxxxxxxx  - Numero verde: 800 134 606  <br><a href="http://www.biobitlab.com" style='color:#888;'>Design Biobit Lab</a>
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
{literal}
<script type=text/javascript>
    $(document).ready(function(){ {/literal}
{if isset($esito)}{literal} 
    $.Notification.notify('success','top right', 'Esito operazione', "{/literal}{$esito}{literal}");{/literal}{/if}
    {literal}
        $("#datatable").dataTable({order:[[0,"desc"]],oLanguage:{sEmptyTable:"Nessun dato presente nella tabella",sInfo:"Vista da _START_ a _END_ di _TOTAL_ elementi",sInfoEmpty:"Vista da 0 a 0 di 0 elementi",sInfoFiltered:"(filtrati da _MAX_ elementi totali)",sInfoPostFix:"",sInfoThousands:",",sLengthMenu:"Visualizza _MENU_ elementi",sLoadingRecords:"Caricamento...",sProcessing:"Elaborazione...",sSearch:"Cerca:",sZeroRecords:"La ricerca non ha portato alcun risultato.",oPaginate:{sFirst:"Inizio",sPrevious:"Precedente",sNext:"Successivo",sLast:"Fine"},oAria:{sSortAscending:": attiva per ordinare la colonna in ordine crescente",sSortDescending:": attiva per ordinare la colonna in ordine decrescente"}}});
{/literal}
{if isset($error)}{literal} 
    $.Notification.notify('error','top right', 'Esito operazione', "{/literal}{$error}{literal}");{/literal}{/if}
    
    {literal}



});




</script>
{/literal}
</body>
</html>