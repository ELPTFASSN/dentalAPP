<div id="small-dialog" class="zoom-anim-dialog">
    <h2>Dott. {$medico->nome} {$medico->cognome} <span class="mutado"> Status: {if ($medico->active == 0)}<i class="fa fa-fw fa-times-circle text-danger"></i>{else}<i class="fa fa-fw fa-check-circle text-success"></i>{/if}</span></h2>
        <div class="col-md-6"><p class="bordereda"><strong>Username:</strong> {$medico->username}</p></div>
        <div class="col-md-6"><p class="bordereda"><strong>e-Mail:</strong> {$medico->email}</p></div>
        <div class="col-md-6"><p class="borderedo"><strong>Telefono:</strong> {$medico->telefono}</p></div>
        <div class="col-md-6"><p class="borderedo"><strong>Indirizzo:</strong> {$medico->indirizzo}</p></div>
        <div class="col-md-6"><p class="bordereda"><strong>Citta:</strong> {$medico->citta}</p></div>
        <div class="col-md-6"><p class="bordereda"><strong>Provincia:</strong> {$medico->provincia}</p></div>
        <div class="col-md-6"><p class="borderedo"><strong>Specializzazione:</strong> {$medico->specializzazione}</p></div>
        <div class="col-md-6"><p class="borderedo"><strong>Data:</strong> {$medico->dataSpecializzazione}</p></div>
</div>