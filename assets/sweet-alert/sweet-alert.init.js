
/**
* Theme: Moltran Admin Template
* Author: Coderthemes
* SweetAlert - 
* Usage: $.SweetAlert.methodname
*/

!function($) {
    "use strict";

    var SweetAlert = function() {};

    //examples 
    SweetAlert.prototype.init = function() {
        
    //Basic
    $('#sa-basic').click(function(){
        swal("Here's a message!");
    });

    //A title with a text under
    $('#sa-title').click(function(){
        swal("Here's a message!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis")
    });

    //Success Message
    $('#sa-success').click(function(){
        swal("Codice: "+(new Date).getTime(), "Codice generato per la registrazione traciata degli utenti. Fai click nel link 'GENERARE PDF' per scaricare il form.", "success")
    });
    

    //Warning Message
    $('#sa-warning').click(function(){
        swal({   
            title: "Are you sure?",   
            text: "You will not be able to recover this imaginary file!",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, delete it!",   
            closeOnConfirm: false 
        }, function(){   
            swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
        });
    });


     //Parameter
    $('.sa-params').click(function(){
        var ID = this.id;
        swal({   
            title: "Sei sicuro?",   
            text: "Non sarà possibile ricuperare i dati cancellati",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Si, cancellalo!",   
            cancelButtonText: "No, ritorna!",   
            closeOnConfirm: false,   
            closeOnCancel: false 
        }, function(isConfirm){   
            if (isConfirm) {   
                
                swal("Cancellato!", "Hai cancellato il record con successo.", "success");   
                setTimeout(function(){window.location.assign('aziende.php?cancella='+ID);}, 800);
            } else {     
                swal("Annullato", "Hai annullato l'operazione, non si ha cancellato nulla", "error");   
            } 
        });
    });
         //Parameter
    $('.sa-paramos').click(function(){
        var ID = this.id;
        swal({   
            title: "Sei sicuro?",   
            text: "Non sarà possibile ricuperare i dati cancellati",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Si, cancellalo!",   
            cancelButtonText: "No, ritorna!",   
            closeOnConfirm: false,   
            closeOnCancel: false 
        }, function(isConfirm){   
            if (isConfirm) {   
                
                swal("Cancellato!", "Hai cancellato il record con successo.", "success");   
                setTimeout(function(){window.location.assign('medici.php?cancella='+ID);}, 800);
            } else {     
                swal("Annullato", "Hai annullato l'operazione, non si ha cancellato nulla", "error");   
            } 
        });
    });
    
        $('.sa-paramas').click(function(){
        var ID = this.id;
        swal({   
            title: "Sei sicuro?",   
            text: "Non sarà possibile ricuperare i dati cancellati",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Si, cancellalo!",   
            cancelButtonText: "No, ritorna!",   
            closeOnConfirm: false,   
            closeOnCancel: false 
        }, function(isConfirm){   
            if (isConfirm) {   
                
                swal("Cancellato!", "Hai cancellato il record con successo.", "success");   
                setTimeout(function(){window.location.assign('pazienti.php?cancella='+ID);}, 800);
            } else {     
                swal("Annullato", "Hai annullato l'operazione, non si ha cancellato nulla", "error");   
            } 
        });
    });
             //Parameter
    $('.sa-paramosa').click(function(){
        var ID = this.id;
        var IDI = $("#idCoupon").val();
        swal({   
            title: "Sei sicuro?",   
            text: "Non sarà possibile ricuperare i dati cancellati",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Si, cancellalo!",   
            cancelButtonText: "No, ritorna!",   
            closeOnConfirm: false,   
            closeOnCancel: false 
        }, function(isConfirm){   
            if (isConfirm) {   
                
                swal("Cancellato!", "Hai cancellato il record con successo.", "success");   
                setTimeout(function(){window.location.assign('coupon.php?cancella='+ID+'&id='+IDI);}, 800);
            } else {     
                swal("Annullato", "Hai annullato l'operazione, non si ha cancellato nulla", "error");   
            } 
        });
    });

    //Custom Image
    $('#sa-image').click(function(){
        swal({   
            title: "iNTERVOLUTIONS Ltd.",   
            text: "Easy Smile CRM Platform v. pre-alpha.0.1",   
            imageUrl: "assets/sweet-alert/ovalo-verde-256.png" 
        });
    });

    //Auto Close Timer
    $('#sa-close').click(function(){
         swal({   
            title: "Auto close alert!",   
            text: "I will close in 2 seconds.",   
            timer: 2000,   
            showConfirmButton: false 
        });
    });


    },
    //init
    $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.SweetAlert.init()
}(window.jQuery);