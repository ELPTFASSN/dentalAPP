/**
* Theme: Montran Admin Template
* Author: Coderthemes
* Form wizard page
*/

!function($) {
    "use strict";

    var FormWizard = function() {};

    FormWizard.prototype.createBasic = function($form_container) {
        $form_container.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft"
        });
        return $form_container;
    },
    //creates form with validation
    FormWizard.prototype.createValidatorForm = function($form_container) {
        $form_container.validate({
            errorPlacement: function errorPlacement(error, element) {
                element.after(error);
            }
        });
        $form_container.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function (event, currentIndex, newIndex) {
                $form_container.validate().settings.ignore = ":disabled,:hidden";
                return $form_container.valid();
            },
            onFinishing: function (event, currentIndex) {
                $form_container.validate().settings.ignore = ":disabled";
                return $form_container.valid();
            },
            onFinished: function (event, currentIndex) {
                var datastring = $("#wizard-validation-form").serialize();
                //alert(datastring);
                $.ajax({
            type: "POST",
            url: "registrati.php",
            data: datastring,
            success: function(data) {
                //var obj = jQuery.parseJSON(data); if the dataType is not specified as json uncomment this
                // do what ever you want with the server response
                //alert(data);
              //  swal("", "", "success");
                swal({   title: "Registro completato!",   text: "Registrazione avvenuta con successo. Tra pocchi minuti riceverai una mail con ulteriori indicazioni",   type: "success",   showCancelButton: false,   confirmButtonText: "Ho capito!",   closeOnConfirm: false,   closeOnCancel: false }, function(isConfirm){   if (isConfirm) {   window.location.href = "index.php";    } else {     swal("Cancelled", "Your file is safe :)", "error");   } });
            },
            error: function(){
                 swal("ERRORE", "Registrazione non avvenuta con successo, si prega di revisare il modulo di registro e riprovare l'invio.", "error");
            }
        });
              //  alert(datastring);
            }
        });

        return $form_container;
    },
    //creates vertical form
    FormWizard.prototype.createVertical = function($form_container) {
        $form_container.steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "fade",
            stepsOrientation: "vertical"
        });
        return $form_container;
    },
    FormWizard.prototype.init = function() {
        //initialzing various forms

        //basic form
        this.createBasic($("#basic-form"));

        //form with validation
        this.createValidatorForm($("#wizard-validation-form"));

        //vertical form
        this.createVertical($("#wizard-vertical"));
    },
    //init
    $.FormWizard = new FormWizard, $.FormWizard.Constructor = FormWizard
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.FormWizard.init()
}(window.jQuery);