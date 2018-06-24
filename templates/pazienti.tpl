{include file="header_amm.tpl"}
{include file="sidebar.tpl"}
<div class=content-page>
    <div class=content>
        <div class=container>
            <div class=row>
                <div class=col-sm-12>
                    <h4 class="pull-left page-title">Lista dei {if $smarty.session.utente['idRuoloUtente'] == $smarty.const.AMMINISTRATORE}{else} miei {/if}pazienti iscritti alla piattaforma</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_amministratore.php">BackOffice</a></li>
                        <li class=active>Pazienti</li>
                    </ol>
                </div>
            </div>
            <div class=row>
                <div class=col-md-12>
                    <div class="panel panel-default">
                        <div class=panel-heading>
                            <h3 class=panel-title>{if $smarty.session.utente['idRuoloUtente'] == $smarty.const.AMMINISTRATORE} Tabella Pazienti{else}I miei pazienti{/if}</h3> 
                        </div>
                        <div class=panel-body>
                            <div class=row>
                                <div class=col-sm-12>
                                    <div class=m-b-30>
                                        {if $smarty.session.utente['idRuoloUtente'] == $smarty.const.AMMINISTRATORE} 
                                            <a href="generatePDF.php?task=paziente" class="btn btn-success waves-effect waves-light">Genera codice di iscrizione <i class="fa fa-plus"></i></a> 

                                            <a href="pazienti.php?status=attesa" class="btn btn-danger waves-effect waves-light{if isset($status)} {if $status=='attesa'}disabled{/if}{/if}">Vedi solo in attesa <i class="fa fa-clock-o"></i></a>
                                        {else}<a href="pazienti.php?task=add" class="btn btn-primary waves-effect waves-light">Aggiungi un nuovo paziente <i class="fa fa-plus"></i></a> {/if}
                                    </div>
                                </div>
                            </div>
                            <div class=row>
                                <div class="col-md-12 col-sm-12 col-xs-12">

                                    <table class="table table-striped table-hover" id="datatable">
                                        <thead class="the-box dark full">
                                            <tr>
                                                <th>Nome completo</th>
                                                <th>Data nascita</th>
                                                <th>Sesso</th>
                                                <th>Indirizzo</th>
                                                {if $smarty.session.utente['idRuoloUtente'] == $smarty.const.AMMINISTRATORE}	<th>Stato</th>
                                                    <th>Azioni</th>{else}
                                                    
                                                
                                                {/if}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {foreach $medici as $key=>$value}
                                                    <tr class="{cycle values='odd,even'}">
                                                        <td>{$value['nome']} {$value['cognome']}</td>
                                                        <td>{$value['dataNascita']|date_format:"%d/%m/%Y"}</td>
                                                        <td>{$value['sesso']}</td>
                                                        <td>{$value['indirizzo']}</td>                                                             
                                                        {if $smarty.session.utente['idRuoloUtente'] == $smarty.const.AMMINISTRATORE}
                                                            <td class="center"> {if $value['stato'] == 1}<span class="btn btn-xs btn-danger"><i class="fa fa-fw fa-times-circle"></i> NON ATTIVO</span>{else}{if $value['active'] == 0}<span class="btn btn-xs btn-danger"><i class="fa fa-fw fa-times-circle"></i> NON ATTIVO</span>{else}<span class="btn btn-xs btn-success"><i class="fa fa-fw fa-check-circle"></i> ATTIVO</span>{/if}{/if}</td>
                                                            <td>
                                                                {if $smarty.session.utente['idRuoloUtente'] == $smarty.const.AMMINISTRATORE}  <a id='{$value['idUtente']}' class="btn btn-danger btn-perspective btn-xs sa-paramas">Cancella <i class="fa fa-trash-o"></i> </a> 
                                                                    {if $value['active'] == 0}<a href="pazienti.php?attiva={$value['idUtente']}" class="btn btn-primary btn-perspective btn-xs">Attiva <i class="fa fa-unlock"></i></a>{else}<a href="pazienti.php?disattiva={$value['idUtente']}" class="btn btn-danger btn-perspective btn-xs">Disattiva <i class="fa fa-lock"></i></a> {/if} <a href="pazienti.php?id={$value['idDettaglioPaziente']}" class="btn btn-primary btn-perspective btn-xs">Modifica <i class="fa fa-pencil"></i></a>{else}<a href="pazienti.php?id={$value['idDettaglioPaziente']}" class="btn btn-primary btn-perspective btn-xs">Vedi Trattamenti <i class="fa fa-search"></i></a>{/if}</td> {else}


                                                                        {/if}
                                                                </tr>
                                                                {/foreach}
                                                                </tbody>
                                                            </table>

                                                            {include file="footer_aziende.tpl"}