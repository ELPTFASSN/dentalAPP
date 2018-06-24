<?php /* Smarty version Smarty-3.1.19, created on 2015-10-19 21:43:04
         compiled from "./templates/footer_public_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5998256215623bed6eb06d4-79667165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1f7824c4820afed0463732f75c0cdbc617631a9' => 
    array (
      0 => './templates/footer_public_1.tpl',
      1 => 1445255817,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5998256215623bed6eb06d4-79667165',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5623bed6eb49a5_84471183',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5623bed6eb49a5_84471183')) {function content_5623bed6eb49a5_84471183($_smarty_tpl) {?></div>
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
                $('#s2id_CAP').hide();
                $('#CAPO').html('<input type="text" name="CAP" value="'+data+'" data-mask="99999" class="input-lg form-control" />');
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
                                swal({title: "Registro completato!", text: "Registrazione avvenuta con successo.", type: "success", showCancelButton: false, confirmButtonText: "Ho capito!", closeOnConfirm: false, closeOnCancel: false}, function(isConfirm) {
                                    if (isConfirm) {
                                     window.history.back();
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
        
</body>
</html><?php }} ?>
