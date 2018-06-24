<div id="small-dialog" class="zoom-anim-dialog">
    <h2>{$paziente->nome} {$paziente->cognome} <span class="mutado"> Status: {if ($paziente->status == 0)}<i class="fa fa-fw fa-check-cross text-danger"></i>{else}<i class="fa fa-fw fa-check-circle text-success"></i>{/if}</span></h2>
    
    <hr>
    <span class="legendario">Anagrafe</span>
    <div class="clearfix" style="margin-top: -25px;"></div>
        <div class="col-md-6"><p class="bordereda"><strong>Data di Nascita:</strong> {$paziente->dataNascita|date_format:"%d/%m/%y"} </p></div>
        <div class="col-md-6"><p class="bordereda"><strong>e-Mail:</strong> {$paziente->email}</p></div>
        <div class="col-md-6"><p class="borderedo"><strong>Telefono:</strong> {$paziente->telefono}</p></div>
        <div class="col-md-6"><p class="borderedo"><strong>Indirizzo Domicilio:</strong> {$paziente->indirizzoDomicilio}</p></div>
        <div class="col-md-6"><p class="bordereda"><strong>Citta Domicilio:</strong> {$paziente->cittaDomicilio}</p></div>
        <div class="col-md-6"><p class="bordereda"><strong>Provincia Domicilio:</strong> {$paziente->provinciaDomicilio}</p></div>
        <div class="col-md-6"><p class="borderedo"><strong>Citta di Nascita:</strong> {$paziente->citta}</p></div>
        <div class="col-md-6"><p class="borderedo"><strong>Provincia di Nascita:</strong> {$paziente->provincia}</p></div>
        <div class="col-md-6"><p class="bordereda"><strong>Nazionalit&agrave;:</strong> {$paziente->nazionalita}</p></div>
        <div class="col-md-6"><p class="bordereda"><strong>Lingua Parlata:</strong> {$paziente->linguaParlata}</p></div>
        <div class="clearfix"></div> 
    <hr> 
    <span class="legendario">Dettaglio Clinico</span>
     <div class="clearfix" style="margin-top: -25px;"></div>
        <div class="col-md-6"><p class="bordereda"><strong>Diagnosi:</strong> {if isset($clinico->cirrosi) && ($clinico->cirrosi == '1')}Cirrosi{/if}{if isset($clinico->epatocarcinoma) && ($clinico->epatocarcinoma == '1')}Epatocarcinoma{/if} {if isset($clinico->altraPatologia)}{$clinico->altraPatologia}{/if}</p></div>
        {if isset($clinico->cirrosi) && ($clinico->cirrosi == '1')}<div class="col-md-6"><p class="borderedo"><strong>Eziologia:</strong> {$clinico->eziologia}</p></div>{/if}
     <div class="clearfix"></div> 
</div>