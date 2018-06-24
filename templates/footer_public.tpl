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
<script src="assets/toggles/toggles.min.js"></script>
        <script src="assets/timepicker/bootstrap-datepicker.js"></script>
                <script src="assets/timepicker/bootstrap-datepicker.it.js"></script>
        <script src="assets/sweet-alert/sweet-alert.min.js"></script>
        <script src="assets/sweet-alert/sweet-alert.init.js"></script>
                <script type="text/javascript" src="assets/jquery-multi-select/jquery.multi-select.js"></script>
        <script type="text/javascript" src="assets/jquery-multi-select/jquery.quicksearch.js"></script>
        <script src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
             <script src="assets/tagsinput/jquery.tagsinput.min.js"></script>
        <script src="assets/select2/select2.min.js" type="text/javascript"></script>
                        <script src="assets/notifications/notify.min.js"></script>
        <script src="assets/notifications/notify-metro.js"></script>
        <script src="assets/notifications/notifications.js"></script>

        <!--Form Validation-->
        <script src="assets/form-wizard/bootstrap-validator.min.js" type="text/javascript"></script>

        <!--Form Wizard-->
        <script src="assets/form-wizard/jquery.steps.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/jquery.validate/jquery.validate.min.js"></script>

        <!--wizard initialization-->
        <script src="assets/form-wizard/wizard-init.js" type="text/javascript"></script>
{literal}

        <script>
            $(document).ready(function() {

                // Date Picker
                $('.input-group.date').datepicker({language: 'it',autoclose:true,showOnFocus: true, startDate: '-80y',startView:2});

                // Select2
                $(".select2").select2({                    width: '100%'                       });
                 });
  </script>
  <script>              
      $(document).ready(function() {
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
    
    $("#provinciaAzienda").change(function(){
    
       
                $('#cittaAzienda.select2-offscreen').empty();
        $('#cittaAzienda').html('<option value="All" disabled="disabled">Seleziona citt&agrave;...</option>');
        $('#cittaAzienda').select2('val', 'All');
        var selectedCountry = $("#provinciaAzienda option:selected").val();
        var options = $("#cittaAzienda");
        $.ajax({
            type: "POST",
            url: "province.php",
            data: { citta : selectedCountry } 
        }).done(function(data){
            $('#cittaAzienda').html('<option></option>');
             options.append(data);
        });
    });
    $("#citta").change(function(){
    
       $('#s2id_CAP').show();$('#CAPO').hide();
                $('#CAP.select2-offscreen').empty();
        $('#CAP').html('<option value="All" disabled="disabled">Seleziona CAP...</option>');
        $('#CAP').select2('val', 'All');
        var selectedCountry = $("#citta option:selected").val();
        var options = $("#CAP");
        
        $.ajax({
            type: "POST",
            url: "province.php",
            data: { cap : selectedCountry } 
        }).done(function(data){
            if (data.indexOf("x") >= 0){
                var s = data.replace(/\x/g, '_');
                var a = data.replace(/\x/g, '9');
                $('#s2id_CAP').hide();
                $('#CAPO').html('<input type="text" name="CAP" value="'+s+'" placeholder="'+s+'" data-mask="'+a+'" class="input-lg form-control" />');
                   $('#CAPO').show();
            }
                else{
            $('#CAP').html('<option></option>');
             options.append(data);
         }
        });
    });
    
    
      $("#regioneAzienda").change(function(){        
        $('#provinciaAzienda.select2-offscreen').empty();
        $('#provinciaAzienda').html('<option value="All" disabled="disabled">Seleziona provincia...</option>');
        $('#provinciaAzienda').select2('val', 'All');
                        $('#cittaAzienda.select2-offscreen').empty();
        $('#cittaAzienda').html('<option value="All" disabled="disabled">Seleziona citt&agrave;...</option>');
        $('#cittaAzienda').select2('val', 'All');
        var selectedCountry = $("#regioneAzienda option:selected").val();
        var options = $("#provinciaAzienda");
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
    
            });
        </script>
        <script>
                    $(document).ready(function() {
                        $('#registro-form').submit(function(e){
                             
                        var datastring = $("#registro-form").serialize();
                      //  alert(datastring);
                       
                        $.ajax({
                            type: "POST",
                            url: "registrati.php",
                            data: datastring,
                            success: function(data) {
                                if(data ==='1'){
                                swal({title: "Registrazione completata!", text: "Registrazione avvenuta con successo. Tra pocchi minuti riceverai una mail con ulteriori indicazioni", type: "success", showCancelButton: false, confirmButtonText: "Chiudi", closeOnConfirm: false, closeOnCancel: false}, function(isConfirm) {
                                    if (isConfirm) {
                                     window.location.href="index.php";
                                    } else {
                                        swal({   title: "ERRORE!",   text: "<span style='color:#F8BB86'>"+data+"<span>",   html: true, type: "error" });
                                    }
                                });
                            }
                            else{
                                swal({   title: "ERRORE!<br><small>Spiacenti, abbiamo riscontrato i seguenti errori:</small>",   text: "<div class='alert alert-danger'>"+data+"</div>",   html: true, type: "error" });
                            }
                               console.log(data);
                            },
                            error: function() {
                                swal("ERRORE", "Registrazione non avvenuta con successo, si prega di revisare il modulo di registro e riprovare l'invio.", "error");
                            }
                        });
                        e.preventDefault();
                          });
                          
                    });
                </script>
        {/literal}
</body>
</html>