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
<script src=assets/jquery-sparkline/jquery.sparkline.min.js></script>
<script src=assets/jquery-detectmobile/detect.js></script>
<script src=assets/fastclick/fastclick.js></script>
<script src=assets/jquery-slimscroll/jquery.slimscroll.js></script>
<script src=assets/jquery-blockui/jquery.blockUI.js></script>
<script type="text/javascript" src="assets/jquery-multi-select/jquery.multi-select.js"></script>
<script type="text/javascript" src="assets/jquery-multi-select/jquery.quicksearch.js"></script>
<script src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
<script src="assets/select2/select2.min.js" type="text/javascript"></script>
<script src=assets/sweet-alert/sweet-alert.min.js></script>
<script src=assets/sweet-alert/sweet-alert.init.js></script>
<script src=assets/counterup/waypoints.min.js type=text/javascript></script>
<script src=js/jquery.app.js></script>
<script src=assets/star-rating.js></script>
<script src=js/jquery-jvectormap-2.0.3.min.js></script>
<script src="js/jquery-jvectormap-it_regions-mill.js"></script>
<script src=assets/star-rating_locale_it.js></script>
<script src="assets/timepicker/bootstrap-timepicker.min.js"></script>
<script src='assets/fullcalendar/fullcalendar.min.js'></script>

<script src="assets/fullcalendar/it.js"></script>
{if $smarty.session.utente['idRuoloUtente'] != $smarty.const.AMMINISTRATORE} 
    {literal}
        <script type=text/javascript>jQuery(document).ready(function(a) {
            jQuery(".select2").select2({
    width: '100%',
    });
        jQuery('#timepicker2').timepicker({showMeridian: false});
        $('#calendar').fullCalendar({
            slotDuration: '01:00:00',
            minTime: '07:00:00',
            maxTime: '23:00:00',
            defaultView: 'month',
            handleWindowResize: true,
            header: {
                left: 'prev,next',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            lang: 'it',
            events: [                                      {/literal}
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
                                               $('#external-button').on('click', function() {
    $('#calendar').fullCalendar('changeView', 'agendaDay');
}); 
$('#map').vectorMap({map: 'it_regions_mill'});
                                            });</script>
        {/literal}
    {/if}
</body>
</html>