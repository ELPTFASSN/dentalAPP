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
<script>var resizefunc = [];</script>
<script src=js/jquery.min.js></script>
<script src=js/bootstrap.min.js></script>
<script src=js/waves.js></script>
<script src=js/wow.min.js></script>
<script src=js/jquery.nicescroll.js type=text/javascript></script>
<script src=js/jquery.scrollTo.min.js></script>
<script src=assets/chat/moment-2.2.1.js></script>
<script src=assets/jquery-detectmobile/detect.js></script>
<script src=assets/fastclick/fastclick.js></script>
<script src=assets/jquery-slimscroll/jquery.slimscroll.js></script>
<script src=assets/jquery-blockui/jquery.blockUI.js></script>
<script src=js/jquery.app.js></script>
<script src="assets/tagsinput/jquery.tagsinput.min.js"></script>
<script src="assets/toggles/toggles.min.js"></script>
<script src="assets/timepicker/bootstrap-datepicker.js"></script>
<script src="assets/timepicker/bootstrap-datepicker.it.js"></script>
<script type="text/javascript" src="assets/jquery-multi-select/jquery.multi-select.js"></script>
<script type="text/javascript" src="assets/jquery-multi-select/jquery.quicksearch.js"></script>
<script src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
<script src="assets/select2/select2.min.js" type="text/javascript"></script>
<script src="assets/notifications/notify.min.js"></script>
<script src="assets/notifications/notify-metro.js"></script>
<script src="assets/notifications/notifications.js"></script>
<script type="text/javascript" src="assets/spinner/spinner.min.js"></script>
<script src="assets/timepicker/bootstrap-timepicker.min.js"></script>
<script src='assets/fullcalendar/fullcalendar.min.js'></script>
<script src="assets/fullcalendar/it.js"></script>
{literal}

    <script>
            jQuery(document).ready(function() {

var totale = $("#precio").val();

$('.spinner').spinner({value:0, min: 0, max: totale});

$(".spinner-input").change(function(){
    var descuento = $("#sconto").val();
    var total = (parseFloat(totale)-parseFloat(descuento)+0.00).toFixed(2).replace(".", ",");
    if(total<0)
        var total="0,00";
    $("#preciaco").html(total);
});
$("#menos").on('click', function() {
    var descuento = $("#sconto").val();
    var total = (parseFloat(totale)-parseFloat(descuento)+0.00).toFixed(2).replace(".", ",");
    if(total<0)
        var total="0,00";
    $("#preciaco").html(total);
});
$("#mas").on('click', function() {
    var descuento = $("#sconto").val();
    var total = (parseFloat(totale)-parseFloat(descuento)+0.00).toFixed(2).replace(".", ",");
    if(total<0)
        var total="0,00";
    $("#preciaco").html(total);
});
// Date Picker
   
        jQuery('.input-group.date').datepicker({language: 'it', startDate: '+2d',daysOfWeekDisabled: [0,6], autoclose:true, showOnFocus: true});
            // Select2
            jQuery(".select2").select2({
    width: '100%',
            });
            jQuery('#timepicker2').timepicker({showMeridian: false, maxHours:20});
            });</script>
    {/literal}
<script src=assets/datatables/jquery.dataTables.min.js></script>
<script src=assets/datatables/dataTables.bootstrap.js></script>
{literal}
    <script type=text/javascript>$(document).ready(function(){
{/literal}{if isset($esito)}{literal} $.Notification.notify('success', 'top right', 'Esito operazione', '{/literal}{$esito}{literal}');{/literal}{/if}{literal}
    $("#regione").change(function(){


    $('#provincia.select2-offscreen').empty();
            $('#provincia').html('<option value="All" disabled="disabled">Seleziona provincia...</option>');
            $('#provincia').select2('val', 'All');
            $('#citta.select2-offscreen').empty();
            $('#citta').html('<option value="All" disabled="disabled">Seleziona citt&agrave;...</option>');
            $('#citta').select2('val', 'All');
            var selectedCountry = $("#regione option:selected").val();
            var options = $("#provincia");
            $.ajax({
            type: "POST",
                    url: "province.php",
                    data: { provincia : selectedCountry }
            }).done(function(data){

    options.append(data);
    });
    });
            $("#provincia").change(function(){


    $('#citta.select2-offscreen').empty();
            $('#citta').html('<option value="All" disabled="disabled">Seleziona citt&agrave;...</option>');
            $('#citta').select2('val', 'All');
            var selectedCountry = $("#provincia option:selected").val();
            var options = $("#citta");
            $.ajax({
            type: "POST",
                    url: "province.php",
                    data: { citta : selectedCountry }
            }).done(function(data){
    $('#citta').html('<option></option>');
            options.append(data);
    });
    });
            $("#regioneAlbo").change(function(){
    $('#provinciaAlbo.select2-offscreen').empty();
            $('#provinciaAlbo').html('<option value="All" disabled="disabled">Seleziona provincia...</option>');
            $('#provinciaAlbo').select2('val', 'All');
            $('#cittaAlbo.select2-offscreen').empty();
            $('#cittaAlbo').html('<option value="All" disabled="disabled">Seleziona citt&agrave;...</option>');
            $('#cittaAlbo').select2('val', 'All');
            var selectedCountry = $("#regioneAlbo option:selected").val();
            var options = $("#provinciaAlbo");
            $.ajax({
            type: "POST",
                    url: "province.php",
                    data: { provincia : selectedCountry }
            }).done(function(data){

    options.append(data);
    });
    });
            $("#provinciaAlbo").change(function(){


    $('#cittaAlbo.select2-offscreen').empty();
            $('#cittaAlbo').html('<option value="All" disabled="disabled">Seleziona citt&agrave;...</option>');
            $('#cittaAlbo').select2('val', 'All');
            var selectedCountry = $("#provinciaAlbo option:selected").val();
            var options = $("#cittaAlbo");
            $.ajax({
            type: "POST",
                    url: "province.php",
                    data: { citta : selectedCountry }
            }).done(function(data){
    $('#cittaAlbo').html('<option></option>');
            options.append(data);
    });
    });
            $('#my_multi_select3').multiSelect({
    selectableHeader: "<h3 class='panel-title text-center'>MEDICI DISPONIBILI</h3><input type='text' class='form-control search-input' autocomplete='off' placeholder='cerca...'>",
            selectionHeader: "<h3 class='panel-title text-center'>MEDICI SELEZIONATI</h3><input type='text' class='form-control search-input' autocomplete='off' placeholder='cerca...'>",
            afterInit: function (ms) {
            var that = this,
                    $selectableSearch = that.$selectableUl.prev(),
                    $selectionSearch = that.$selectionUl.prev(),
                    selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                    selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';
                    that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                    .on('keydown', function (e) {
                    if (e.which === 40) {
                    that.$selectableUl.focus();
                            return false;
                    }
                    });
                    that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                    .on('keydown', function (e) {
                    if (e.which == 40) {
                    that.$selectionUl.focus();
                            return false;
                    }
                    });
            },
            afterSelect: function () {
            this.qs1.cache();
                    this.qs2.cache();
            },
            afterDeselect: function () {
            this.qs1.cache();
                    this.qs2.cache();
            }
    });
            $("#scontoCoupon").change(function(){

    var eleccion = $("#scontoCoupon option:selected").val();
            if (eleccion == "1")
            $('#moneda').html('<strong>%</strong>');
            else
            $('#moneda').html('<i class="fa fa-euro"></i>');
    });
            $("#tempoCoupon").change(function(){

    var eleccion = $("#tempoCoupon option:selected").val();
            if (eleccion == "1")
            $("#datepicker").prop('disabled', true);
            else
            $("#datepicker").prop('disabled', false);
    });
            $("#datatable").dataTable({order:[[2, "desc"]], oLanguage:{sEmptyTable:"Nessun dato presente nella tabella", sInfo:"Vista da _START_ a _END_ di _TOTAL_ elementi", sInfoEmpty:"Vista da 0 a 0 di 0 elementi", sInfoFiltered:"(filtrati da _MAX_ elementi totali)", sInfoPostFix:"", sInfoThousands:",", sLengthMenu:"Visualizza _MENU_ elementi", sLoadingRecords:"Caricamento...", sProcessing:"Elaborazione...", sSearch:"Cerca:", sZeroRecords:"La ricerca non ha portato alcun risultato.", oPaginate:{sFirst:"Inizio", sPrevious:"Precedente", sNext:"Successivo", sLast:"Fine"}, oAria:{sSortAscending:": attiva per ordinare la colonna in ordine crescente", sSortDescending:": attiva per ordinare la colonna in ordine decrescente"}}})});</script>
{/literal}
{literal}

<script type=text/javascript>jQuery(document).ready(function (a) {
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
{/literal}
{foreach $agenda as $key=>$value}
            {
           title: "{if $value['fkStatoAppuntamento'] == '1'} - {$value['dataFine']|date_format:"H:i"}{else}{$value['nome']} {$value['cognome']}{/if}",
                                                    start: "{$value['dataAppuntamento']}",
                                                    end:'{$value['dataFine']}',
                                                    className: "{if $value['fkStatoAppuntamento'] == '3'}bg-success{elseif $value['fkStatoAppuntamento'] == '1'}bg-muted{elseif $value['fkStatoAppuntamento'] == '4'}bg-warning{elseif $value['fkStatoAppuntamento'] == '9'}bg-danger{/if}",
                                            {if !empty($value['idAgenda']) && $value['fkStatoAppuntamento'] != '1'}url: 'agenda.php?task=gestisci&id={$value['idAgenda']}'{/if}
                                            },
{/foreach}
{literal}
                                            ],
                                            timeFormat:'H:mm',
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
{/literal}
</body>
</html>