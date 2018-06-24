$(document).ready(function(){

	/** SIDEBAR FUNCTION **/
	$('.sidebar-left ul.sidebar-menu li a').click(function() {
		"use strict";
		$('.sidebar-left li').removeClass('active');
		$(this).closest('li').addClass('active');	
		var checkElement = $(this).next();
			if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
				$(this).closest('li').removeClass('active');
				checkElement.slideUp('fast');
			}
			if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
				$('.sidebar-left ul.sidebar-menu ul:visible').slideUp('fast');
				checkElement.slideDown('fast');
			}
			if($(this).closest('li').find('ul').children().length == 0) {
				return true;
				} else {
				return false;	
			}		
	});

	if ($(window).width() < 1025) {
		$(".sidebar-left").removeClass("sidebar-nicescroller");
		$(".sidebar-right").removeClass("sidebar-nicescroller");
		$(".nav-dropdown-content").removeClass("scroll-nav-dropdown");
	}
	/** END SIDEBAR FUNCTION **/
	
	
	/** BUTTON TOGGLE FUNCTION **/
	$(".btn-collapse-sidebar-left").click(function(){
		"use strict";
		$(".top-navbar").toggleClass("toggle");
		$(".sidebar-left").toggleClass("toggle");
		$(".page-content").toggleClass("toggle");
		$(".icon-dinamic").toggleClass("rotate-180");
	});
	$(".btn-collapse-sidebar-right").click(function(){
		"use strict";
		$(".top-navbar").toggleClass("toggle-left");
		$(".sidebar-left").toggleClass("toggle-left");
		$(".sidebar-right").toggleClass("toggle-left");
		$(".page-content").toggleClass("toggle-left");
	});
	$(".btn-collapse-nav").click(function(){
		"use strict";
		$(".icon-plus").toggleClass("rotate-45");
	});
	/** END BUTTON TOGGLE FUNCTION **/
	
	
	/** BEGIN PREETY PRINT **/
	$(window).load(function() {
    "use strict";
	prettyPrint()})
	/** END PREETY PRINT **/
	

	/** BEGIN TOOLTIP FUNCTION **/
	$('.tooltips').tooltip({
	  selector: "[data-toggle=tooltip]",
	  container: "body"
	})
	$('.popovers').popover({
	  selector: "[data-toggle=popover]",
	  container: "body"
	})
	/** END TOOLTIP FUNCTION **/
	
	
	/** NICESCROLL AND SLIMSCROLL FUNCTION **/
    $(".sidebar-nicescroller").niceScroll({
		cursorcolor: "#121212",
		cursorborder: "0px solid #fff",
		cursorborderradius: "0px",
		cursorwidth: "0px"
	});
	$(".sidebar-nicescroller").getNiceScroll().resize();
    $(".right-sidebar-nicescroller").niceScroll({
		cursorcolor: "#111",
		cursorborder: "0px solid #fff",
		cursorborderradius: "0px",
		cursorwidth: "0px"
	});
	$(".right-sidebar-nicescroller").getNiceScroll().resize();
	
	$(function () {
		"use strict";
		$('.scroll-nav-dropdown').slimScroll({
			height: '350px',
			position: 'right',
			size: '4px',
			railOpacity: 0.3
		});
	});
	
	$(function () {
		"use strict";
		$('.scroll-chat-widget').slimScroll({
			height: '330px',
			position: 'right',
			size: '4px',
			railOpacity: 0.3,
			railVisible: true,
			alwaysVisible: true,
			start : 'bottom'
		});
	});
	if ($(window).width() < 768) {
		$(".chat-wrap").removeClass("scroll-chat-widget");
	}
	/** END NICESCROLL AND SLIMSCROLL FUNCTION **/
	
	
	
	
	/** BEGIN PANEL HEADER BUTTON COLLAPSE **/
	$(function () {
		"use strict";
		$('.collapse').on('show.bs.collapse', function() {
			var id = $(this).attr('id');
			$('button.to-collapse[data-target="#' + id + '"]').html('<i class="fa fa-chevron-up"></i>');
		});
		$('.collapse').on('hide.bs.collapse', function() {
			var id = $(this).attr('id');
			$('button.to-collapse[data-target="#' + id + '"]').html('<i class="fa fa-chevron-down"></i>');
		});
		
		$('.collapse').on('show.bs.collapse', function() {
			var id = $(this).attr('id');
			$('a.block-collapse[href="#' + id + '"] span.right-icon').html('<i class="glyphicon glyphicon-minus icon-collapse"></i>');
		});
		$('.collapse').on('hide.bs.collapse', function() {
			var id = $(this).attr('id');
			$('a.block-collapse[href="#' + id + '"] span.right-icon').html('<i class="glyphicon glyphicon-plus icon-collapse"></i>');
		});
	});
	/** END PANEL HEADER BUTTON COLLAPSE **/
	
	
	
	
	/** BEGIN DATATABLE EXAMPLE **/
	if ($('#elenco-medici').length > 0){
		$('#elenco-medici').dataTable({
                     "oLanguage": {
                "sEmptyTable":     "Nessun dato presente nella tabella",
    "sInfo":           "Vista da _START_ a _END_ di _TOTAL_ elementi",
    "sInfoEmpty":      "Vista da 0 a 0 di 0 elementi",
    "sInfoFiltered":   "(filtrati da _MAX_ elementi totali)",
    "sInfoPostFix":    "",
    "sInfoThousands":  ",",
    "sLengthMenu":     "Visualizza _MENU_ elementi",
    "sLoadingRecords": "Caricamento...",
    "sProcessing":     "Elaborazione...",
    "sSearch":         "Cerca:",
    "sZeroRecords":    "La ricerca non ha portato alcun risultato.",
    "oPaginate": {
        "sFirst":      "Inizio",
        "sPrevious":   "Precedente",
        "sNext":       "Successivo",
        "sLast":       "Fine"
    },
    "oAria": {
        "sSortAscending":  ": attiva per ordinare la colonna in ordine crescente",
        "sSortDescending": ": attiva per ordinare la colonna in ordine decrescente"
    }
                     }
                });
	}
        
        /** BEGIN DATATABLE EXAMPLE **/
	if ($('#elenco-esami').length > 0){
		var oTable = $('#elenco-esami').dataTable({
        "order": [[ 2, "desc" ]],
                     "oLanguage": {
                "sEmptyTable":     "Nessun dato presente nella tabella",
    "sInfo":           "Vista da _START_ a _END_ di _TOTAL_ elementi",
    "sInfoEmpty":      "Vista da 0 a 0 di 0 elementi",
    "sInfoFiltered":   "(filtrati da _MAX_ elementi totali)",
    "sInfoPostFix":    "",
    "sInfoThousands":  ",",
    "sLengthMenu":     "Visualizza _MENU_ elementi",
    "sLoadingRecords": "Caricamento...",
    "sProcessing":     "Elaborazione...",
    "sSearch":         "Cerca:",
    "sZeroRecords":    "La ricerca non ha portato alcun risultato.",
    "oPaginate": {
        "sFirst":      "Inizio",
        "sPrevious":   "Precedente",
        "sNext":       "Successivo",
        "sLast":       "Fine"
    },
    "oAria": {
        "sSortAscending":  ": attiva per ordinare la colonna in ordine crescente",
        "sSortDescending": ": attiva per ordinare la colonna in ordine decrescente"
    }
                     }
                      
                }); oTable.fnSort( [ [2,'desc'] ] );
	}

        /** BEGIN DATATABLE EXAMPLE **/
	if ($('#elenco-altriesami').length > 0){
		var aTable = $('#elenco-altriesami').dataTable({
                     "paging":   false,
        "ordering": true,
        "info":     false,
                     "oLanguage": {
                "sEmptyTable":     "Nessun dato presente nella tabella",
    "sInfo":           "Vista da _START_ a _END_ di _TOTAL_ elementi",
    "sInfoEmpty":      "Vista da 0 a 0 di 0 elementi",
    "sInfoFiltered":   "(filtrati da _MAX_ elementi totali)",
    "sInfoPostFix":    "",
    "sInfoThousands":  ",",
    "sLengthMenu":     "Visualizza _MENU_ elementi",
    "sLoadingRecords": "Caricamento...",
    "sProcessing":     "Elaborazione...",
    "sSearch":         "Cerca:",
    "sZeroRecords":    "La ricerca non ha portato alcun risultato.",
    "oPaginate": {
        "sFirst":      "Inizio",
        "sPrevious":   "Precedente",
        "sNext":       "Successivo",
        "sLast":       "Fine"
    },
    "oAria": {
        "sSortAscending":  ": attiva per ordinare la colonna in ordine crescente",
        "sSortDescending": ": attiva per ordinare la colonna in ordine decrescente"
    }
                     }
                });aTable.fnSort( [ [1,'desc'] ] );
	}

	/** BEGIN MAGNIFIC POPUP **/
        $('.ajax-popup-link').magnificPopup({
		type: 'ajax',
                cursor: 'mfp-ajax-cur',
                tError: '<a href="%url%">The content</a> could not be loaded.',
                                      
		fixedContentPos: false,
		fixedBgPos: true,

		overflowY: 'auto',

		closeBtnInside: true,
		preloader: true,
		
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-slide-bottom'
	});
	/** END MAGNIFIC POPUP **/

	/** BEGIN ESAME CREATININA **/
               $('input[type=radio][name=diagnosi]').on('change', function(){
           $('#eziologia').hide();$('#altra').hide();
            switch($(this).val()){
            case '1' :
                $('#eziologia').show();
                break;
            case '2' :
                $('#eziologia').hide();$('#altra').hide();
                break;
            case '3' :
                $('#altra').show();
                break;
        }            
    });

        
        /** BEGIN DATATABLE EXAMPLE **/
        if ($('#elenco-ereferral-in-attesa').length > 0){
                var oTable = $('#elenco-ereferral-in-attesa').dataTable({
                    "order": [[ 2, "asc" ]],
                        "oLanguage": {
                            "sEmptyTable":     "Nessun dato presente nella tabella",
                            "sInfo":           "Vista da _START_ a _END_ di _TOTAL_ elementi",
                            "sInfoEmpty":      "Vista da 0 a 0 di 0 elementi",
                            "sInfoFiltered":   "(filtrati da _MAX_ elementi totali)",
                            "sInfoPostFix":    "",
                            "sInfoThousands":  ",",
                            "sLengthMenu":     "Visualizza _MENU_ elementi",
                            "sLoadingRecords": "Caricamento...",
                            "sProcessing":     "Elaborazione...",
                            "sSearch":         "Cerca:",
                            "sZeroRecords":    "La ricerca non ha portato alcun risultato.",
                        "oPaginate": {
                            "sFirst":      "Inizio",
                            "sPrevious":   "Precedente",
                            "sNext":       "Successivo",
                            "sLast":       "Fine"
                        },
                        "oAria": {
                            "sSortAscending":  ": attiva per ordinare la colonna in ordine crescente",
                            "sSortDescending": ": attiva per ordinare la colonna in ordine decrescente"
                        }
                     }

                }); oTable.fnSort( [ [2,'desc'] ] );
        }
        
        if ($('#elenco-ereferral-assegnati').length > 0){
                var oTable = $('#elenco-ereferral-assegnati').dataTable({
                    "order": [[ 2, "desc" ]],
                        "oLanguage": {
                            "sEmptyTable":     "Nessun dato presente nella tabella",
                            "sInfo":           "Vista da _START_ a _END_ di _TOTAL_ elementi",
                            "sInfoEmpty":      "Vista da 0 a 0 di 0 elementi",
                            "sInfoFiltered":   "(filtrati da _MAX_ elementi totali)",
                            "sInfoPostFix":    "",
                            "sInfoThousands":  ",",
                            "sLengthMenu":     "Visualizza _MENU_ elementi",
                            "sLoadingRecords": "Caricamento...",
                            "sProcessing":     "Elaborazione...",
                            "sSearch":         "Cerca:",
                            "sZeroRecords":    "La ricerca non ha portato alcun risultato.",
                        "oPaginate": {
                            "sFirst":      "Inizio",
                            "sPrevious":   "Precedente",
                            "sNext":       "Successivo",
                            "sLast":       "Fine"
                        },
                        "oAria": {
                            "sSortAscending":  ": attiva per ordinare la colonna in ordine crescente",
                            "sSortDescending": ": attiva per ordinare la colonna in ordine decrescente"
                        }
                     }

                }); oTable.fnSort( [ [2,'desc'] ] );
        }
 
  


        
});